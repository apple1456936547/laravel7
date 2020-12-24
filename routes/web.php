<?php

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

Route::get('/', function () {
    return view('welcome');
});



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

Route::get('/news', function () {
    return view('news');
});

