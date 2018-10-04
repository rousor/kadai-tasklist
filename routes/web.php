<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'TasksController@index');

########################################################################################
//登録受付（フォーマット入力画面）
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
//登録作業
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

########################################################################################
// ログイン受付（フォーマット入力画面
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// ログイン動作
Route::post('login', 'Auth\LoginController@login')->name('login.post');
// ログアウト動作
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

########################################################################################
//認証が必要なページ
Route::group(['middleware' => ['auth']], function () {

    Route::resource('tasks', 'TasksController');
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
});