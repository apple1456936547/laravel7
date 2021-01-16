<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\NewsNews;
use App\OrderDetail;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

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

    public function checkout() {

        // 抓的是session的資料
        $carts = \Cart::getContent();
        return view('front.checkout.index',compact('carts'));
    }

    public function createOrder() {

        $dt = Carbon::now();
        $order_number = 'DP'.$dt->year.$dt->month.$dt->day.$dt->hour.$dt->minute.$dt->second;

        // 建立訂單
        $order = Order::create([
            'user_id'=>Auth::user()->id,
            'total_price'=>'1',
            'total_qty'=>'5',
            'phone'=>'0962588521',
            'address'=>'彰化縣',
            'name'=>'測試測試',
            'email'=>'123@gmail.com',
            'order_number'=>$order_number,

        ]);

        // 取得車內所有東西
        $cartCollection = \Cart::getContent();
        foreach($cartCollection as $item) {
            $product = Product::find($item->id);

            OrderDetail::create([
                'product_id'=>$product->id,
                'order_id'=>$order->id,

                'name'=>$product->name,
                'price'=>$product->price,
                'qty'=>$item->quantity,
                'img'=>$product->img
            ]);
        }




        // return view('front.checkout.index',compact('carts'));

        \Cart::clear();
        return redirect('/admin/order');
    }
}
