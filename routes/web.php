<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', 'FrontController@index');

// 最新消息前台畫面 (網頁index.blade.php在views/front/news_news裡面)
Route::get('/news_news', 'FrontController@news');

// 產品前台畫面 (網頁index.blade.php在views/front/product裡面)
Route::get('/product', 'FrontController@product');

// 購物車
// 有先去config/app.php新增購物車套件
// 去裡面看 provider那邊有寫註解 product下面還有一個a..開頭的也要複製套件code
// https://github.com/darryldecode/laravelshoppingcart
Route::post('/add_cart','ShoppingCartController@addCart');

// 購物車結帳頁面
Route::get('/checkout','FrontController@checkout');

Route::get('/create_order','FrontController@createOrder');

// ----分隔線----


// 01-19 現在要做的事情是要讓使用者與管理者的註冊分開
// middle-ware驗證
// Auth有寫一個註冊方法給使用者
// 所以不用在特地寫一個註冊路由給管理者
Auth::routes([
    // 下面會使註冊(register)不見
    // 'register' => false,
    // 密碼reset功能
    'reset' => false,
    // 信箱驗證
    'verify' => false,
]);

// ---分隔線----

// 產品與消息的相關路由
Route::group(['middleware' => ['auth','is_admin'], 'prefix' => 'admin'], function () {

    // 管理員註冊 01-19
    Route::get('/register','RegisterController@showAdminRegisterationForm');
    Route::post('/register','RegisterController@showAdminRegisterationForm');


    Route::get('/', 'HomeController@index')->name('home');


    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'ProductController@index');

        // 產品新增、編輯、刪除功能
        Route::get('/create', 'ProductController@create');
        Route::post('/store', 'ProductController@store');

        Route::get('/edit/{id}', 'ProductController@edit');
        Route::post('/update/{id}', 'ProductController@update');
        Route::get('/destroy/{id}', 'ProductController@destroy');

        Route::post('/delete_img','ProductController@deleteImg');
    });

    // 產品種類新增、編輯、刪除
        Route::group(['prefix' => 'product_type'], function () {

        Route::get('/', 'ProductTypeController@index');

        Route::get('/create', 'ProductTypeController@create');
        Route::post('/store', 'ProductTypeController@store');

        Route::get('/edit/{id}', 'ProductTypeController@edit');
        Route::post('/update/{id}', 'ProductTypeController@update');
        Route::get('/destroy/{id}', 'ProductTypeController@destroy');
    });

    // 最新消息
    Route::group(['prefix' => 'news_news'], function () {
        Route::get('/', 'NewsNewsController@index');

        Route::get('/create', 'NewsNewsController@create');
        Route::post('/store', 'NewsNewsController@store');

        Route::get('/edit/{id}', 'NewsNewsController@edit');
        Route::post('/update/{id}', 'NewsNewsController@update');

        Route::get('/destroy/{id}', 'NewsNewsController@destroy');
    });

    // 最新消息類別
    Route::group(['prefix' => 'news_news_type'], function () {
        Route::get('/', 'NewsNewsTypeController@index');

        Route::get('/create', 'NewsNewsTypeController@create');
        Route::post('/store', 'NewsNewsTypeController@store');

        Route::get('/edit/{id}', 'NewsNewsTypeController@edit');
        Route::post('/update/{id}', 'NewsNewsTypeController@update');

        Route::get('/destroy/{id}', 'NewsNewsTypeController@destroy');
    });

    Route::get('/test',function () {

        Storage::disk('local')->put('/public/example.txt', 'content');
    });

    // 訂單管理
    Route::group(['prefix' => 'order'], function () {
        Route::get('/', 'OrderController@index');

        Route::get('/create', 'OrderController@create');
        Route::post('/store', 'OrderController@store');

        Route::get('/edit/{id}', 'OrderController@edit');
        Route::post('/update/{id}', 'OrderController@update');

        Route::get('/destroy/{id}', 'OrderController@destroy');
    });
});


