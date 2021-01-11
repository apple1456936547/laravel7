<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
        // 取得create資料，存取圖片
        $fileName = Storage::disk('public')->put('/images', $request->file('img'));
        // 將create的資料放進 $product
        $product = Product::create($request->all());
        //將檔案路徑換掉
        //  /storage/ --> ?
        $product->img = '/storage/'.$fileName;
        // 儲存
        $product->save();

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
        //讀取舊檔案

        $product = Product::find($id);
        $product->type_id = $request->type_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        // 判斷是否有新圖片
        // 如果你沒有新增圖片，下面的if不會執行
        // 選擇檔案那個按鈕
        if($request->hasFile('img')){
            if(file_exists(public_path().$product->img)){
                // 刪除舊圖片
                File::delete(public_path().$product->img);
            }
            // 儲存圖片路徑
            $fileName = Storage::disk('public')->put('/images', $request->file('img'));
            // 更新圖片路徑
            $product->img = Storage::url($fileName);
        }

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
