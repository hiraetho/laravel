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
//首页
Route::get('/', 'UserController@index');


// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//登录后跳转路径
Route::get('/home', 'UserController@loginSuccess');

//Route::get('/auth/login', function () {
//    return view('home');
//});

//Route::get('/test/index', 'test\testController@index');

//Route::group(['prefix' => 'test', 'namespace' => 'test'], function(){
//   Route::get('/index', 'testController@index');
//});

//Route::post('/auth/login', 'UserController@login');
//Route::post('/login', 'UserController@login');
//Route::get('/userinfo', 'UserController@userinfo');

//Route::post('/auth/login', [
//    'middleware' => 'auth',
//    'uses' => 'UserController@login'
//]);

