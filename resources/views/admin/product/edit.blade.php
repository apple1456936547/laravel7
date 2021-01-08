@extends('layouts.app')

@section('css')

@endsection


@section('main')

<div class="container">
    <h2>編輯產品</h2>
    <hr>
    <form action="/admin/product/update/{{$product->id}} " method="POST">
        @csrf
        <div class="form-group">
            <label for="type_id">類別</label>
            {{-- 下拉式選單 --}}
            <select class="form-control" id="type_id" name="type_id" required>
                @foreach ($product_types as $product_type)
                <option value="{{$product_type->id}}"
                    @if ($product->type_id == $product_type ->id)selected @endif>{{$product_type->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">產品名稱</label>
            <input type="text" class="form-control" id="name" name="name"
            value={{$product->name}} required>
        </div>
        <div class="form-group">
            <label for="price">價格</label>
            <input type="number" class="form-control" min="0" id="price" name="price"
            value={{$product->price}} required>
        </div>
        <div class="form-group">
            <label for="img">圖片</label>
            <input type="text" class="form-control" id="img" name="img"
            value={{$product->img}} required>
        </div>
        <div class="form-group">
            <label for="description">描述</label>
            <textarea class="form-control" id="description" rows="5" name="description" required>{{$product->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
        @csrf
    </form>
</div>

@endsection


@section('js')

@endsection
