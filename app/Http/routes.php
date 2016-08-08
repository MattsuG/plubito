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


	 

	Route::group(['routeMiddleware' => 'guest'], function() {
			Route::get('/', 'TopPageController@index');
		});

	Route::group(['middlewareGroups' => 'web'], function() {
		// ログイン
		Route::get('auth/login', 'Auth\AuthController@getLogin');
		Route::post('auth/login', 'Auth\AuthController@postLogin');
		Route::get('auth/logout', 'Auth\AuthController@getLogout');
		 
		// ユーザー登録
		Route::get('auth/register', 'Auth\AuthController@getRegister');
		Route::post('auth/register', 'Auth\AuthController@postRegister');
		Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');
	});

	//ユーザー詳細表示・編集
	Route::get('user', 'UserController@index');
	Route::get('/user/show/{id}', 'UserController@show');
	Route::get('/user/edit/{id}', 'UserController@edit');
	Route::patch('/user/edit/{id}', 'UserController@update');
	Route::get('/user/email_edit/{id}', 'UserController@email_edit');
	Route::patch('/user/email_edit/{id}', 'UserController@email_update');
	
	//パスワードリセット
	// Password reset link request routes...
	Route::get('password/email', 'Auth\PasswordController@getEmail');
	Route::post('password/email', 'Auth\PasswordController@postEmail');

	// Password reset routes...
	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');



	Route::group(['routeMiddleware' => 'auth'], function () {
		Route::group(['middlewareGroups' => 'web'], function () {
			Route::resource('mentor', 'MentorController');
			Route::get('user/edit', 'UserController@edit');
			Route::post('user', 'UserController@update');
		});

		Route::get('user', 'UserController@index');
		Route::get('user/{id}', 'UserController@show');
	});



