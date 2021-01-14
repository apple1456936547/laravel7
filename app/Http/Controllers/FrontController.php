<?php

namespace App\Http\Controllers;

use App\Product;
use App\NewsNews;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index() {

        #code...

        return view('welcome');
    }

    public function news(){

        $newsData = NewsNews::get();
        return view('front.news_news.index',compact('newsData'));
    }

    public function product() {

        $products = Product::get();
        return view('front.product.index',compact('products'));
    }
}
