<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
use App\ProductType;
use LengthException;
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
        //  取得create資料，存取圖片
        // $fileName = Storage::disk('public')->put('/images/product', $request->file('img'));
        //   dd($request->file('imgs')[0]);
        // for ($a = 1; $a <= 3; $a++) {
        //      取得create資料，存取圖片
        //     $fileName2 = Storage::disk('public')->put('/images/product', $request->file('imgs')[$a]);
        //     將create的資料放進 $product
        //     $product = Product::create($request->all());
        //     將檔案路徑換掉
        //      /storage/ --> ?
        //     $product->imgs = '/storage/' . $fileName2;
        //     儲存

        //     $product->save();
        // }

        // 一張圖片 (自己)
        // 取得create資料，存取圖片
        // $fileName = Storage::disk('public')->put('/images/product', $request->file('img'));
        // 將create的資料放進 $product
        // $product = Product::create($request->all());
        // 將檔案路徑換掉
        //  /storage/ --> ?
        // $product->img = '/storage/' . $fileName;
        // 儲存

        // $product->save();

        // 22222一張圖片

        // 在 Product Model裡面撈出 create 所有的資料
        $product = Product::create($request->all());
        // 判斷是否有圖片
        if ($request->hasFile('img')) {
            // (將檔案存在 public裡面的storage
            // 裡面的/images/product資料夾裡面,取得create資料，存取圖片)
            $fileName = Storage::disk('public')->put('/images/product', $request->file('img'));
            // 將圖片路徑換掉
            $product->img = Storage::url($fileName);
            $product->save();
        }
        // else {
        //     $product->img = '';
        //     $product->save();
        // }

        // 多張圖片 (array資料)
        if ($request->hasFile('imgs')) {

            foreach ($request->imgs as $img) {

                $filePath = Storage::disk('public')->put('/images/product', $img);
                // 在表格裡面儲存資料
                ProductImg::create([
                    'product_id' => $product->id,
                    'url' => Storage::url($filePath),
                ]);
                $product->save();
            }
        }
        // else {
        //     $product->img = '';
        //     $product->save();
        // }


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

        // 上傳圖片方法1 (後端資料送前端)
        // ----上傳多張圖片另一種作法(不用關聯的方法)

        // where那一句的意思是
        // 例如：我現在在 edit/43的頁面
        // 然後我去 productImg 資料庫裡面撈資料 撈出 product_id 是 43的資料
        // where( (找到productImg的資料欄位) , 在productImg裡面撈出跟product->id(這裡舉例是43)一樣的資料)
        // $product_imgs = ProductImg::where('product_id',$product->id)->get();
        // 最後再return
        // return view('admin.product.edit', compact('product', 'product_types','product_imgs'));

        // 上傳圖片方法2 (後端資料送前端)
        // 關聯這個方法是直接幫你第一個方法做完(where)
        // 然後搭配關聯資料傳送法的edit.blade.php(其他圖片)
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
        if ($request->hasFile('img')) {
            if (file_exists(public_path() . $product->img)) {
                // 刪除舊圖片
                File::delete(public_path() . $product->img);
            }
            // 儲存圖片路徑
            $fileName = Storage::disk('public')->put('/images/product', $request->file('img'));
            // 更新圖片路徑
            $product->img = Storage::url($fileName);
        }

        //上傳多張圖片
        if ($request->hasFile('imgs')) {

            foreach ($request->imgs as $img) {

                $filePath = Storage::disk('public')->put('/images/product', $img);
                // 在表格裡面儲存資料
                ProductImg::create([
                    'product_id' => $product->id,
                    'url' => Storage::url($filePath),
                ]);
                $product->save();
            }
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
