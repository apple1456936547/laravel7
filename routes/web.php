<?php

use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });




// Route:: 請求方式 ('網址',function(){要做的事情})
// 第一個參數是網址 (隨便寫 只是取名)
Route::get('/test',function(){
    // function 裡面寫返回網址後要做甚麼事情
    return 'success';

    // 之後 在網址後面寫你剛剛輸入的網址參數 /test
    // 便可以看到 success 這段文字
});

Route::get('/apple', function () {

    // $data = [1,5,3,4];
    // $data2 = ['a' => 7, 'b' => 2];
    // dd($data2);


    // view routes
    // 這段就是我想輸出的文字
    $cake = "This is a yummy cake !";
    // return view() --> 返回頁面
    // view 裡面寫你存放網頁的那個網頁檔名
    return view('apple', ['show' => $cake]);

    // 然後 宣告一個變數叫做 show 將我要輸出的文字放進show這個變數
    // 然後 再去前端呼叫show這個變數

});

// Route::get('/apple',function(){

//     $data = [
//         'name' => 'Cake',

//         'age' => '20',

//         'gender' => 'female'
//     ];

//     return view('apple',$data);

// });

Route::get('/apple',function(){
    $name ='leo';
    $age = '18';
    $gender = 'male';



    // return view('apple',['name' => $name,'age' => $age,'gender' => $gender]);

    // return view('apple',compact('name','age','gender'));

    // return view('apple')->with('name',$name)
    // ->with('age',$age)->with('gender',$gender);

    return view('apple')->with(compact('name','age','gender'));
});

// Route::get('/news', function () {
//     return view('news');

// });

// Route::get('網址','NewsController@函式名稱');


// 最新消息首頁
Route::get('/news','NewsController@index');

// 最新消息內頁
Route::get('/news_detail','NewsController@detail');

// 上面兩個是最新消息 第一個最新消息首頁 第二個是最消消息分頁
// 因為在同一個分類裡面所以寫在同一個Controller裡面

Route::get('/','FrontController@index');
// test : 自己寫一個新的Controller讓welcome顯示出來

// Route::get('/news_page1', function () {
//     return view('news_page1');
// });

// Route::get('/news_page2', function () {
//     return view('news_page2');
// });

// 最新消息-新增資料
Route::get('/news_create','NewsController@create');

Route::get('/product','ProductController@index');

Route::get('/create_product','ProductController@create');

Route::get('/update_product','ProductController@update');

// 聯絡我們 index route
// Route::get('/contact_us','ContactUsController@index');

// 儲存資料
// Route::post('/contact_us/store','ContactUsController@store');


Route::prefix('contact_us')->group(function (){

    Route::get('/','ContactUsController@index');
    Route::get('/create','ContactUsController@create');
    Route::post('/store','ContactUsController@store');

    Route::get('/edit/{id}','ContactUsController@edit');
    Route::post('/update/{id}','ContactUsController@update');

    Route::get('/destroy/{id}','ContactUsController@destroy');
});

// 利用 get 傳送資料
// 打完 route 後
// 去/test 後面打 ?ans=5
// 那麼資料就會傳送到後端 存在 $request 裡面
// 再使用dd印出 $request 的 ans
// 這裡的 ans 是當初寫資料傳送時 名字是寫 ans
// Route::get('/test',function(Request $request){

//     // import Illuminate\Http\Request
//     dd($request->ans);

// });

// Route::get('/test2/{id?}/{name?}', function ($id='abc',$name='Lucy') {

//     dd($id,$name);

// });






