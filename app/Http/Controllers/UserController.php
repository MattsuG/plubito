<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
	//メールやトーク一覧が見れる　自分のuseridに関連するデータを全部引っ張りだす
	//処理が複雑になるのでRikuto担当
    public function index() {

    }

    //show/idの形で飛んできたときの処理
    //$idが自分のuseridと一致するときは全ての情報を表示、更に編集ボタンを表示
    public function show($id) {
    	
    }

    //自分のshowページ、もしくはサイドバーから飛んできたときの処理
    //sessionに格納されたuseridと一致するuserデータをDBより取得　viewに渡す
    public function edit() {

    }

    //editからpostで飛んできたときの処理
    public function update() {

    }


}
