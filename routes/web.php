<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {

    // 都必須登入

    Route::get('/', 'HomeController@index')->name('home');


    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'ProductController@index');

        // 產品新增、編輯、刪除功能
        Route::get('/create', 'ProductController@create');
        Route::post('/store', 'ProductController@store');

        Route::get('/edit/{id}', 'ProductController@edit');
        Route::post('/update/{id}', 'ProductController@update');
        Route::get('/destroy/{id}', 'ProductController@destroy');
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
});


