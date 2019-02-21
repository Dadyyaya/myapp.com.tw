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

Route::get('/', function () {                     // '/'為根目錄
    return view('welcome');                       // 當進入網頁根目錄時顯示welcome.blade.php裡的內容
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/User', 'UserController@index');      // 當進入網頁User頁面時，交由UserController內的index方法處理