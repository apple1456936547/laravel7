@extends('layouts.app')

@section('css')

@endsection


@section('main')

<div class="container">
    <h2>編輯最新消息</h2>
    <hr>
    <form action="/admin/news_news_type/update/{{$news_news_type->id}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">類別</label>
            <input type="integer" class="form-control" id="name" name="name"
                value={{$news_news_type->name}} required>
            {{-- 下拉式選單 --}}
            {{-- <select class="form-control" id="type_id" name="type_id" required>

                @foreach ($product_types as $product_type)
                <option value="{{$product_type->id}}"
                    @if ($product->type_id == $product_type ->id)selected @endif>{{$product_type->name}}</option>
                @endforeach
            </select> --}}
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
        @csrf
    </form>
</div>

@endsection


@section('js')

@endsection
