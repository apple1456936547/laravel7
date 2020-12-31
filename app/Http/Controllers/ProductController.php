<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){
        $products = Product::get();
        return $products;


    }

    public function create(){

        // 第一種
        // Product::insert([
        //     'name'=>'878787',
        //     'type'=>'56',
        //     'price'=>'8520',
        //     'img'=>'875454154',
        //     'description'=>'88545455',
        //     'url'=>'klfdjkdjfldfdlkf',
        // ]);

        // $products = Product::get();
        // return $products;


        // 第二種
        // $product = new Product;

        // $product->name ='999';
        // $product->type ='126555';
        // $product->price ='126555';
        // $product->img ='126555';
        // $product->description ='126555';
        // $product->url ='126555';
        // $product->save();

        // Product::create([
        //     'name'=>'1289993',
        //     'type'=>'56',
        //     'price'=>'8520',
        //     'img'=>'875454154',
        //     'description'=>'88545455',
        //     'url'=>'klfdjkdjfldfdlkf',
        // ]);

        // $product = Product::find(2);

        // $product->name ='xyz';

        // $product->save();

        // $products = Product::get();
        // return $products;
    }

    public function update() {

        // 第一種

        // $product = Product::find(2);

        // $product->name ='xyz';

        // $product->save();

        // 第二種
        // 下面的方法只能抓到 id 不能抓到資料

        // $product = Product::find(1)->update(
        //     [
        //         'name'=>'abc',
        //     ]
        // );

        // 下面的方法是可以抓取名字裡面的某一個值
        // 例如我想要再眾多的 name 裡面找到一個叫做 xyz 的陣列
        // get拿到的是陣列
        // $變數 = Model名稱::where('欄位名稱',值);
        // 單個資料

        // $product = Product::where('name','xyz')->get();

        // 將多個資料改成同一個值

        // $products = Product::where('name','xyz')->get();

        // foreach( $products as $product){
        //     $product->name ='456';
        //     $product->save();
        // }

        // $product = Product::where('name','456')->first();



        // return $product;

        $product = Product::find(1)->update(

            [

                'name'=>'1',

            ]

        );

    }

}
