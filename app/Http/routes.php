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


	Route::group(['routeMiddleware' => 'auth'], function () {
		Route::group(['middlewareGroups' => 'web'], function () {
			Route::get('mentor/like/{id}', 'MentorController@like');
			Route::post('mentor/apply', 'MentorController@apply');
			Route::resource('mentor', 'MentorController');
			Route::get('user/edit', 'UserController@edit');
			Route::post('user', 'UserController@update');
		});

		Route::get('user', 'UserController@index');
		Route::get('user/{id}', 'UserController@show');
	});



