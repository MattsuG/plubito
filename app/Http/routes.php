<?php

Route::group(['middleware' => 'guest'], function() {

	Route::get('/', 'TopPageController@index');
	Route::get('/terms', 'TopPageController@terms');
	Route::get('/privacy', 'TopPageController@privacy');
	Route::get('/tradeterm', 'TopPageController@tradeterm');
	Route::get('/howtouse', 'TopPageController@howtouse');
	Route::get('/qa', 'TopPageController@qa');
	Route::get('/about', 'TopPageController@about');
	Route::get('/becometalker', 'TopPageController@becometalker');
});

<<<<<<< HEAD
Route::group(['middlewareGroups' => 'web'], function() {
	// ログイン
	Route::get('/auth/login', 'Auth\AuthController@getLogin');
	Route::post('/auth/login', 'Auth\AuthController@postLogin');
	Route::get('/auth/logout', 'Auth\AuthController@getLogout');
		 
	// ユーザー登録
	Route::get('/auth/register', 'Auth\AuthController@getRegister');
	Route::post('/auth/register', 'Auth\AuthController@postRegister');
	Route::get('/auth/confirm/{token}', 'Auth\AuthController@getConfirm');
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
		Route::get('/user/edit', 'UserController@edit');
		Route::get('/user/message', 'UserController@getMessage');
		Route::get('/user/message/{id}', 'UserController@getMessageDetail');
		Route::post('/user/message/{id}', 'UserController@getMessageDetail');
		Route::post('/user/message', 'UserController@postMessage');
		Route::get('/user/show/{id}', 'UserController@show');
		Route::post('/user', 'UserController@update');
=======
	 

Route::group(['middleware' => 'guest'], function() {

	Route::get('/', 'TopPageController@index');
	Route::get('/terms', 'TopPageController@terms');
	Route::get('/privacy', 'TopPageController@privacy');
	Route::get('/tradeterm', 'TopPageController@tradeterm');
	Route::get('/howtouse', 'TopPageController@howtouse');
	Route::get('/qa', 'TopPageController@qa');
	Route::get('/about', 'TopPageController@about');
	Route::get('/becometalker', 'TopPageController@becometalker');
});

Route::group(['middleware' => 'web'], function() {
	// ログイン
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
		 
	// ユーザー登録
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');
	Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');
});

Route::group(['middleware' => 'auth'], function () {

	Route::group(['middleware' => 'web'], function () {
		//トーク関係ページ
		Route::get('mentor/like/{id}', 'MentorController@like');
		Route::post('mentor/apply', 'MentorController@apply');
		Route::resource('mentor', 'MentorController');


		//ユーザーページ
		Route::get('user/mypage', 'UserController@index');
		Route::post('user/approve', 'UserController@approve');
		Route::get('user/edit', 'UserController@edit');
		Route::get('user/message', 'UserController@getMessage');
		Route::get('user/message/{id}', 'UserController@getMessageDetail');
		Route::post('user/message/{id}', 'UserController@getMessageDetail');
		Route::post('user/message', 'UserController@postMessage');
		Route::get('/user/show/{id}', 'UserController@show');
		Route::post('user', 'UserController@update');
>>>>>>> 67d23216230c596fd91b94e25a07f4e5982633f3
		Route::get('/user/edit/{id}', 'UserController@edit');
		Route::patch('/user/edit/{id}', 'UserController@update');
		Route::get('/user/email_edit/{id}', 'UserController@email_edit');
		Route::patch('/user/email_edit/{id}', 'UserController@email_update');

		//パスワードリセット
		// Password reset link request routes...
<<<<<<< HEAD
		Route::get('/password/email', 'Auth\PasswordController@getEmail');
		Route::post('/password/email', 'Auth\PasswordController@postEmail');

		// Password reset routes...
		Route::get('/password/reset/{token}', 'Auth\PasswordController@getReset');
		Route::post('/password/reset', 'Auth\PasswordController@postReset');
=======
		Route::get('password/email', 'Auth\PasswordController@getEmail');
		Route::post('password/email', 'Auth\PasswordController@postEmail');

		// Password reset routes...
		Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
		Route::post('password/reset', 'Auth\PasswordController@postReset');
>>>>>>> 67d23216230c596fd91b94e25a07f4e5982633f3
	});

});

<<<<<<< HEAD


=======
>>>>>>> 67d23216230c596fd91b94e25a07f4e5982633f3


