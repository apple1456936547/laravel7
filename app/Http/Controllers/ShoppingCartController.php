<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    //

    public function addCart(Request $request)
    {

        // id->product_id
        // name->product_name 名稱
        // pricre->product_price' 價格
        // quantity->product 數量
        // 利用id找到產品
        $product = Product::find($request->id);
        // 判斷是否有找到產品
        if ($product) {
            // 複製後Cart前面要加斜線
            // 將產品存入購物車
            \Cart::add(array(
                'id' => $product->id, // inique row ID
                'name' =>  $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => array()
            ));
            // 抓出所有存在購物車裡產品的數量
            $cartTotalQuantity = \Cart::getTotalQuantity();
            // 返回購物車中產品總數
            return $cartTotalQuantity;
        }
        else {
            return 'false';
        }
    }
}
