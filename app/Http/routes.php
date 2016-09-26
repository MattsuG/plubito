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

//トップページ
Route::group(['middleware' => 'guest'], function() {

    Route::get('/', 'TopPageController@index');
});  

Route::group(['middlewareGroups' => 'web'], function() {
	//ユーザー登録・ログイン
    Route::controller('/auth', 'Auth\AuthController');
         
    //パスワードリセット
    Route::controller('/password', 'Auth\PasswordController');
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

        //Route::get('/user/email_edit/{id}', 'UserController@email_edit');
        //Route::patch('/user/email_edit/{id}', 'UserController@email_update');

        //PayPal
        Route::post('/payment', 'PayPalController@setExpressCheckout');
        Route::post('/payment/confirmation', 'PayPalController@foo');

    });

});

//規約など(ログイン・非ログイン問わず閲覧可能)
Route::get('/{path}', 'TopPageController@supportPages');
