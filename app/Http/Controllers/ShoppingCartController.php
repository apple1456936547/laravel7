<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    //

    // 新增購物車商品
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
                // 購物車的數量
                'quantity' => $request->qty,
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

    // 刪除購物車商品
    public function delCart(Request $request){
        // 刪除車子內符合ID的產品
        // request->id
        \Cart::remove($request->id);
        // 抓出所有存在購物車裡產品的數量
        $cartTotalQuantity = \Cart::getTotalQuantity();
        // 返回購物車中產品總數
        return $cartTotalQuantity;
    }

    // 新增購物車數量
    public function updateCart(Request $request){

        \Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->qty
            ),
        ));

        $cartTotalQuantity = \Cart::getTotalQuantity();
        return $cartTotalQuantity;
    }
}
