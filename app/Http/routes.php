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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');



//Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'guest:admin'], function() {
//  后台登录
Route::get('admin/login', 'Admin\AuthController@getLogin');
Route::post('admin/login', 'Admin\AuthController@postLogin');
Route::get('admin/register', 'Admin\AuthController@getRegister');
Route::post('admin/register', 'Admin\AuthController@postRegister');
Route::get('admin/logout', 'Admin\AuthController@logout');

// 后台首页
Route::get('/admin', 'Admin\IndexController@index');
//});


// 后台管理
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin.auth.login'], function() {
	Route::get('/admins/adminlist','AdminController@index');
});