@extends('layouts.app')

@section('css')

@endsection


@section('main')

<div class="container">
    <h2>新增產品</h2>
    <hr>
    <form action="/admin/product/store " method="POST" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="type_id">類別</label>
            {{-- 下拉式選單 --}}

            <select class="form-control" id="type_id" name="type_id" required>
                @foreach ($product_types as $product_type)
                <option value="{{$product_type->id}}">{{$product_type->name}}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="name">產品名稱</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="price">價格</label>
            <input type="number" class="form-control" min="0" id="price" name="price" required>
        </div>
        {{-- 一張圖片 --}}
        <div class="form-group">

            <label for="img">主要圖片</label>
            <input type="file" class="form-control" id="img" name="img" required >

        </div>
        {{-- 多張圖片 --}}
        <div class="form-group">
        {{--multiple 為了可以選擇多張圖片  --}}
        {{-- name="imgs" -> name="imgs[]" --}}
        {{-- 中括號為了儲存多張圖片 --}}
            <label for="imgs">其他圖片</label>
            <input type="file" class="form-control" id="imgs" name="imgs[]" multiple>
        </div>
        <div class="form-group">
            <label for="description">描述</label>
            <textarea class="form-control" id="description" rows="5" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
    </form>
</div>

@endsection


@section('js')

@endsection
