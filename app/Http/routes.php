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

//Route::group(['middleware' => ['web']], function(){
Route::auth();
Route::get('/home', 'HomeController@index');
//});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'guest:admin'], function() {
	//  后台登录
	Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');
    Route::get('register', 'AuthController@getRegister');
    Route::post('register', 'AuthController@postRegister');
    Route::get('logout', 'AuthController@logout');

    // 后台首页
    Route::get('/', 'AdminController@index');
});