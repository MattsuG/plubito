<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Image;

use App\User;

class UserController extends Controller
{
	//メールやトーク一覧が見れる　自分のuseridに関連するデータを全部引っ張りだす
	//処理が複雑になるのでRikuto担当
    public function index() {

    }

    //show/idの形で飛んできたときの処理
    //$idが自分のuseridと一致するときは全ての情報を表示、更に編集ボタンを表示
    public function show($id) {
        $user = User::findOrFail($id);
        // dd($user->toArray());//dump die
        return view("user/show")->with('user',$user);    	
    }

    //自分のshowページ、もしくはサイドバーから飛んできたときの処理
    //sessionに格納されたuseridと一致するuserデータをDBより取得　viewに渡す
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

}
