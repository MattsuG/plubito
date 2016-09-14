<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\UserRequest;

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
        ->orderBy('created_at', 'DESC')
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
        $this->validate($request, [
          'date' => ['required', 'date', 'after:tomorrow'],
          'time' => ['required', 'regex:/([0-1][0-9]|2[0-3]):[0-5][0-9]/'],
        ]);
        $user = User::findOrFail($request->user_id);
        $user->applications()->sync([$request->talk_id => ['approved_flag' => 1, 'approved_at' => Carbon::now(), 'talk_date' => $request->date, 'starting_time' => $request->time]], false);
        \Session::flash('flash_message', 'リクエストを承認しました。支払いをお待ちください。トークが終了しましたら、忘れずに終了ボタンを押してください。');
        return redirect("user/mypage");
    }

    //show/idの形で飛んできたときの処理
    //$idが自分のuseridと一致するときは全ての情報を表示、更に編集ボタンを表示
    public function show($id = null) {
        if (isset($id)) {
            $user = User::findOrFail($id);
        }
        else
        {
            $user = User::find(Auth::user()->id);
        }
        // if ((int)$user->role === 1) {
        //     //表示する情報量の制御
        // }

        // if ((int)$user->id === (int)Auth::user()->id) {
        //     //表示する情報量の制御
        // }

        return view("user/show")->with('user',$user);
    }

    //自分のshowページ、もしくはサイドバーから飛んできたときの処理
    //sessionに格納されたuseridと一致するuserデータをDBより取得 viewに渡す
    public function edit() {

        $user = User::find(Auth::user()->id);

        return view("user/edit")->with('user',$user);
    }

    //editからpostで飛んできたときの処理
    public function update(UserRequest $request) {
         

        $user = User::findOrFail(Auth::user()->id);
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->place = $request->place; 
        $user->introduction = $request->introduction;
        $user->vision = $request->vision;
        $user->others = $request->others;
        $user->current_job = $request->current_job; 
        $user->current_position = $request->current_position;
        $user->current_detail = $request->current_detail;
        $user->current_period = $request->current_period;
        $user->past_job = $request->past_job; 
        $user->past_position = $request->past_position;
        $user->past_detail = $request->past_detail;
        $user->past_period = $request->past_period;
        $user->latest_school = $request->latest_school; 
        $user->latest_major = $request->latest_major;
        $user->latest_school_period = $request->latest_school_period;
        $user->other_school = $request->other_school; 
        $user->other_major = $request->other_major;
        $user->other_school_period = $request->other_school_period;
        $file3 = $request->file('pic3');

        $profile_picture_path = Auth::user()->profile_picture_path;

        if(!empty($file3))
            {
                $filename = str_random(20).'.'.$file3->getClientOriginalExtension();
                $path = 'profile_pictures';
                $img = Image::make($file3->getRealPath());
                chmod($path, 0777);
                $img->resize(600, 600)->save($path.'/'.$filename);
                chmod($path, 0744);
                $profile_picture_path = '/'.$path.'/'.$filename;
            }

        $user->profile_picture_path = $profile_picture_path;

        $user->save();
        return redirect("user/show");
    }

    public function getMessage(Request $request) {
        $this->validate($request, [
          's_page' => 'integer',
          'r_page' => 'integer'
        ]);

        $sent_mails = Mail::with('receiver')
        ->where('sender_id', Auth::user()->id)
        ->orderBy('sent_at', 'DESC')
        ->paginate(10, ['*'], 's_page');

        $received_mails = Mail::with('sender')
        ->where('receiver_id', Auth::user()->id)
        ->orderBy('sent_at', 'DESC')
        ->paginate(10, ['*'], 'r_page');

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


        $receiver = User::findOrFail($id);
        if ((int)$id === (int)Auth::user()->id) {
            return redirect ('user/message');
            die();
        }

        if ((int)$receiver->role !== 1 && (int)Auth::user()->role !== 1) {
            return redirect ('user/message');
            die();
        }

        $query = Mail::with('receiver', 'sender')
        ->where(function($query) use($id){
            $query->where('receiver_id', $id)
                  ->orWhere('sender_id', $id);
        });

        $mails = $query->where(function($query){
                    $query->where('receiver_id', Auth::user()->id)
                            ->orWhere('sender_id', Auth::user()->id);
                })

        ->orderBy('sent_at', 'DESC')
        ->paginate(10);

        return view('user/message_detail', compact('mails', 'receiver'));
    }

    public function postMessage(Request $request, $id) {

        $this->validate($request, [
          'body' => 'required|max:500'
        ]);

        $mail = new Mail();
        $mail->sender_id = Auth::user()->id;
        $mail->receiver_id = $id;
        $mail->body = $request->body;
        $mail->sent_at = Carbon::now();
        $mail->save();
        \Session::flash('flash_message', 'メッセージを送信しました');

        return redirect('user/message/'.$id);
    }

}
