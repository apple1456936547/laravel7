@extends('layouts.app')

@section('css')
<style>
    .img_area {
        position: relative;
    }

    .del_btn {
        position: absolute;
        top: -30px;
        right: 0;
        width: 35px;
        height: 35px;
        transform: translate(50%, 50%);
        border: 1px rgb(163, 61, 61) solid;
        border-radius: 100px;
    }
</style>
@endsection


@section('main')

<div class="container">
    <h2>編輯產品</h2>
    <hr>
    <form action="/admin/product/update/{{$product->id}} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="col-2" for="type_id">類別</label>
            {{-- 下拉式選單 --}}
            <select class="form-control col-10" id="type_id" name="type_id" required>
                @foreach ($product_types as $product_type)
                <option value="{{$product_type->id}}" @if ($product->type_id == $product_type ->id)selected
                    @endif>{{$product_type->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label class="col-2" for="name">產品名稱</label>
            <input type="text" class="form-control col-10" id="name" name="name" value={{$product->name}} required>
        </div>
        <div class="form-group row">
            <label class="col-2" for="price">價格</label>
            <input type="number" class="form-control col-10" min="0" id="price" name="price" value={{$product->price}}
                required>
        </div>

        <div class="form-group row">
            <label class="col-2" for="img">目前圖片</label>
            <img src="{{$product->img}}" alt="" width="200">
        </div>

        <div class="form-group row">
            <label class="col-2" for="img">重新上傳圖片</label>
            <input type="file" class="form-control col-10" id="img" name="img">
        </div>
        <hr>
        {{-- 其他圖片 --}}
        <div class="form-group row">
            <label class="col-2" for="img">其他圖片</label>
            {{-- 一般方法資料傳送法 --}}
            {{-- @foreach ($product_imgs as $imgs)
            <img src="{{$imgs->url}}" alt="" width="200">
            @endforeach --}}
            {{-- 關聯資料傳送法 --}}
            @foreach ($product->productImgs as $imgs)
            {{-- 從product關聯proudctImgs取出資料後把此資料指給imgs這個變數 --}}
            {{-- <img src="{{$imgs->url}}" alt="" width="200"> --}}
            <div class="img_area m-3">
                {{-- data-id相當於一個容器
                    我要如何知道我要刪除圖片的id?
                    通常都是利用id找到那張我要刪除的圖片
                    =$imgs->id
                    但是這串要寫在哪裡?
                    所以我們使用data-id來裝這個變數
                    而data-*後面這個*是隨便寫
                    這裡寫id是因為我們要抓圖片id方便我們辨識程式碼而已 --}}
                <div class="del_btn btn btn-danger" data-id="{{$imgs->id}}">X</div>
                <img src="{{$imgs->url}}" alt="" width="200">
            </div>
            @endforeach
        </div>
        <div class="form-group row">
            <label class="col-2" for="imgs">重新上傳圖片</label>
            <input type="file" class="form-control col-10" id="imgs" name="imgs[]">
        </div>
        <hr>
        <div class="form-group row">
            <label class="col-2" for="description">描述</label>
            <textarea class="form-control col-10" id="description" rows="5" name="description"
                required>{{$product->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
        @csrf
    </form>
</div>

@endsection


@section('js')
<script>
    // 取得刪除按鈕
    var del_btns = document.querySelectorAll('.del_btn');
    // 綁定監聽事件

    // 對所有按鈕做事件 所以使用forEach
    del_btns.forEach(function (del_btn){
        // 針對每顆按鈕做點擊事件
        del_btn.onclick = function() {

            //data-id概念
            // data-id相當於一個容器
            // 我要如何知道我要刪除圖片的id?
            // 通常都是利用id找到那張我要刪除的圖片
            // =$imgs->id
            // 但是這串要寫在哪裡?
            // 所以我們使用data-id來裝這個變數
            // 而data-*後面這個*是隨便寫
            // 這裡寫id是因為我們要抓圖片id方便我們辨識程式碼而已

            //getAttribute概念
            // getAttribute意思是抓屬性裡面的值
            // 舉例
            // <div id="abc" data-id="1"></div>
            // <div...></div>這整串叫做元素(Element)
            // 而div這個詞叫做標籤
            // 裡面的id="abc"這整串叫做屬性
            // 所以意思是getAttribute抓data-id這個值
            var id = this.getAttribute('data-id')

            //這裡的_token是對應上面的@csrf
            //後面的 ('meta[name="csrf-token"'')是因為上面的
            // @csrf生出來的然後生到圖片那邊
            // <meta name="csrf-token" content="kCU09qw8qpvjNXTBRN4QuSTscKqtDKzd9s8MPFoM">----他會長這個樣子 (網頁按f12)
            // 所以意思是抓meta name這個標籤在抓到裡面的content屬性的值
            var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

            // 形成表單
            var formData = new FormData();
            // 表單對應到id
            formData.append('id', id);
            // 表單對應到_token
            formData.append('_token=', _token);

            // fetch代表抓資料
            fetch('/admin/product/delete_img',{
                method:'POST',
                body:formData
         })
            .then(response => response.json())
            .catch(error => console.error('Error:',error))
            .then(response => {
            this.parentElement.remove();
        });
        }

    });

    // 另一種寫法
    // del_btns.forEach(function (del_btn){
    //     del_btn.addEventListener('click',function())
    // });


</script>
@endsection
