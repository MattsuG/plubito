<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Image;

use App\User;

use App\Talk;

use App\Mail;

use Auth;

use DB;

use Carbon\Carbon;

class UserController extends Controller
{
	//メールやトーク一覧が見れる 自分のuseridに関連するデータを全部引っ張りだす
	//処理が複雑になるのでRikuto担当
    public function index(Request $request) {
        
        $user = User::find(Auth::user()->id);

        $likes = $user
        ->likes()
        ->orderBy('pivot_liked_at', 'DESC')
        ->paginate(10, ['*'], 'l_page');

        $applications = $user
        ->applications()
        ->orderBy('pivot_applied_at', 'DESC')
        ->paginate(10, ['*'], 'a_page');

        $apps_to_me = $user
        ->appsToMe()
        ->orderBy('applied_at', 'DESC')
        ->paginate(10, ['*'], 'm_page');

        $my_talks = Talk::where('mentor_id', Auth::user()->id)
        ->paginate(10, ['*'], 't_page');

        $like_active = '';
        $app_active = 'active';
        $app_to_me_active = '';
        $my_talk_active = '';

        //pageNameに応じてactiveタブを切り替え
        if (isset($request->l_page)) {
            $like_active = 'active';
            $app_active = '';
        }
        elseif (isset($request->app_to_me_active)) {
            $app_to_me_active ='active';
            $app_active = '';
        }
        elseif (isset($request->my_talk_active)) {
            $my_talk_active = 'active';
            $app_active = '';
        }
        else {
            //メンターの場合初期activeタブを自分宛て予約一覧に
            if ((int)Auth::user()->role === 1) {
                $app_to_me_active = 'active';
                $app_active = '';  
            }
        }


        return view("user/mypage", compact('user', 'likes', 'applications', 'my_talks', 'apps_to_me', 'like_active', 'app_active', 'app_to_me_active', 'my_talk_active'));
    }

    //メンターがユーザーの申し込みを承認する
    public function approve(Request $request) { 
        $user = User::findOrFail($request->user_id);
        $user->applications()->sync([$request->talk_id => ['approved_flag' => 1, 'approved_at' => Carbon::now(), 'talk_date' => $request->date, 'starting_time' => $request->time]], false);
        \Session::flash('flash_message', 'リクエストを承認しました。支払いをお待ちください。');
        return redirect("user/mypage");
    }

    //show/idの形で飛んできたときの処理
    //$idが自分のuseridと一致するときは全ての情報を表示、更に編集ボタンを表示
    public function show($id) {
        $user = User::find($id);
        // dd($user->toArray());//dump die
        return view("user/show")->with('user',$user);    	
    }

    //自分のshowページ、もしくはサイドバーから飛んできたときの処理
    //sessionに格納されたuseridと一致するuserデータをDBより取得 viewに渡す
    public function edit($id) {
        $user = User::findOrFail($id);
        // dd($user->toArray());//dump die
        return view("user/edit")->with('user',$user);
    }

    //editからpostで飛んできたときの処理
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->place = $request->place; 
        $user->introduction = $request->introduction;
        $user->vision = $request->vision;
        $user->current_job = $request->current_job; 
        $user->current_position = $request->current_position;
        $user->current_detail = $request->current_detail;
        $user->past_job = $request->past_job; 
        $user->past_position = $request->past_position;
        $user->past_detail = $request->past_detail;
        $user->latest_school = $request->latest_school; 
        $user->latest_major = $request->latest_major;
        $user->latest_school_period = $request->latest_school_period;
        $user->other_school = $request->other_school; 
        $user->other_major = $request->other_major;
        $user->other_school_period = $request->other_school_period;
        $file3 = $request->file('pic3');

        if(!empty($file3))
            {
                $filename = str_random(20).'.'.$file3->getClientOriginalExtension();
                $path = 'profile_pictures';
                $img = Image::make($file3->getRealPath());
                chmod($path, 0777);
                $img->resize(800, 600)->save($path.'/'.$filename);
                chmod($path, 0744);
                $pic3_path = '/'.$path.'/'.$filename;
            }
            else
            {
                //ファイルアップロードが無いときは変数を初期化（viewでのエラー防止）
                $pic3_path = '/assets/img/default_thumbnail.jpg';
            }

        $user->pic3_path = $pic3_path;

        $user->save();
        return view("user/show")->with('user',$user);
    }

    public function getMessage(Request $request) {
        $sent_mails = Mail::where('sender_id', Auth::user()->id)
        ->paginate(10);
        $sent_mails->setPageName('s_page');

        $received_mails = Mail::where('receiver_id', Auth::user()->id)
        ->paginate(10);
        $received_mails->setpageName('r_page');

        //pageNameに応じてactiveタブを切り替え
        $received_active = 'active';
        $sent_active = '';

        if (isset($request->s_page)) {
            $sent_active = 'active';
            $received_active = '';
        }

        return view('user/message', compact('sent_mails', 'received_mails', 'received_active', 'sent_active'));
    }

    public function getMessageDetail($id) {
        $talk = Talk::FindOrFail($id);
        //idが$idであるトークに結びついた、自分に関連するメールを降順で全件取得する
        $query = Mail::where('talk_id', $id);
        $mails = $query->where(function($query){
                    $query->where('receiver_id', Auth::user()->id)
                            ->orWhere('sender_id', Auth::user()->id);
                })
        ->orderBy('sent_at', 'DESC')
        ->paginate(10);
        if (count($mails) < 1 && (int)$talk->mentor_id === (int)Auth::user()->id) {

        }
        //受信主が自分のメール1件のみ取得(送信先のid取得用)
        $mail = Mail::where('receiver_id', Auth::user()->id)
        ->where('talk_id', $id)
        ->first();
        //送信先のidをこのトークのメンターidと仮定
        $send_to_id = $talk->mentor_id;
        //自分がこのトークのメンターだったら
        if ((int)$send_to_id === (int)Auth::user()->id) {
            //receiverが自分であるメールのsenderが、自分から見た送信相手になる
            $send_to_id = $mail->sender_id;
            //このトークに対する
            if (!$talk->applications->contains('user_id', $send_to_id)) {
                return redirect('user/message');
                die();
        }   
        }

        $receiver = User::find($send_to_id);

        return view('user/message_detail', compact('talk', 'mails', 'send_to_id', 'receiver'));
    }

    public function postMessage(Request $request) {

        $this->validate($request, [
          'body' => 'required|max:500',
          'receiver_id' => 'required|integer',
          'talk_id' => 'required|integer'
        ]);
        $mail = new Mail();
        $mail->sender_id = Auth::user()->id;
        $mail->receiver_id = $request->receiver_id;
        $mail->talk_id = $request->talk_id;
        $mail->body = $request->body;
        $mail->sent_at = Carbon::now();
        $mail->save();
        \Session::flash('flash_message', 'メッセージを送信しました');

        return redirect('user/message/'.$request->talk_id);
    }

}