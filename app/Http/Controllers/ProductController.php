<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $products = Product::get();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_types = ProductType::get();
        // 抓到資料要打包
        return view('admin.product.create', compact('product_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Product::create($request->all());
        return redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_types = ProductType::get();

        // $product = Product::find($id);
        // 在取資料時同時取得關聯的資料
        // $product = Product::with('productType')->find($id);

        // 、需要資料才利用關聯的function取得資料
        $product = Product::find($id);
        // dd($product->productType->name);

        return view('admin.product.edit', compact('product', 'product_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $product->type_id = $request->type_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->img = $request->img;

        $product->save();

        return  redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin/product');
    }
}
