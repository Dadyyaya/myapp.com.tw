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

// 當進入網頁User頁面時，交由UserController內的index方法處理

/**
 * TODO: 以上說明非本意
 * ex. 本機網址 https://myapp.com.tw
 * 我定義了一個路徑  https://myapp.com.tw/users  而這個路徑是為了取得所有users的資料
 * 而 index 則是你function名稱
 * 且網址定義應為小寫
 * controller內可以有很多function 完成你要做的事
 * 舉例來說 所有有關user的事我就會放在 UserController
 */

// 取得所有user資料  https://myapp.com.tw/users
Route::get('/users', 'UserController@index');


// 取得單一user https://myapp.com.tw/user/{編號}
Route::get('/user/{id}', 'UserController@getUserById');

Route::get('/example', 'ExampleController@index')->name('example');


