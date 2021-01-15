<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index() {
        $orders = Order::get();
        return view('admin.order.index',compact('orders'));
    }
}
