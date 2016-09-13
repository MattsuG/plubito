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


	 

Route::group(['middleware' => 'guest'], function() {
	//全ページを1メソッドで切り分け
	Route::get('/{path?}', 'TopPageController@index');
});

Route::group(['middlewareGroups' => 'web'], function() {
	// ログイン
	Route::get('/auth/login', 'Auth\AuthController@getLogin');
	Route::post('/auth/login', 'Auth\AuthController@postLogin');
	Route::get('/auth/logout', 'Auth\AuthController@getLogout');
		 
	// ユーザー登録
	Route::get('/auth/register', 'Auth\AuthController@getRegister');
	Route::post('/auth/register', 'Auth\AuthController@postRegister');
	Route::get('/auth/confirm/{token}', 'Auth\AuthController@getConfirm');

	Route::get('/auth/resend', 'Auth\AuthController@getResend');
	Route::post('/auth/resend', 'Auth\AuthController@postResend');
});

Route::group(['middleware' => 'auth'], function () {

	Route::group(['middlewareGroups' => 'web'], function () {
		//トーク関係ページ
		Route::get('/mentor/like/{id}', 'MentorController@like');
		Route::post('/mentor/apply', 'MentorController@apply');
		Route::resource('/mentor', 'MentorController');


		//ユーザーページ
		Route::get('/user/mypage', 'UserController@index');
		Route::post('/user/approve', 'UserController@approve');
		Route::get('/user/show/{id?}', 'UserController@show');
		Route::get('/user/edit', 'UserController@edit');
		Route::patch('/user/edit', 'UserController@update');

		Route::get('/user/message', 'UserController@getMessage');
		Route::get('/user/message/{id}', 'UserController@getMessageDetail');
		Route::post('/user/message/{id}', 'UserController@postMessage');
		Route::get('/user/email_edit/{id}', 'UserController@email_edit');
		Route::patch('/user/email_edit/{id}', 'UserController@email_update');

		//パスワードリセット
		// Password reset link request routes...
		Route::get('/password/email', 'Auth\PasswordController@getEmail');
		Route::post('/password/email', 'Auth\PasswordController@postEmail');

		// Password reset routes...
		Route::get('/password/reset/{token}', 'Auth\PasswordController@getReset');
		Route::post('/password/reset', 'Auth\PasswordController@postReset');

		//PayPal
		Route::post('/payment', 'PayPalController@index');
		Route::post('/payment/confirmation', 'PayPalController@foo');

	});

});



