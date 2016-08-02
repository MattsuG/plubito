<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
	// ホーム（ログインしていないと見れないよう auth middleware を適用）
	// Route::group(['middleware' => 'auth'], function() {
	//     Route::resource('mentor', 'MentorController');
	// });
	 
	// ログイン
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	 
	// ユーザー登録
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');

	Route::group(['middlewareGroups' => 'web'], function () {
		Route::resource('mentor', 'MentorController');
	});

	Route::get('/', function () {
	    return view('index');
	});


