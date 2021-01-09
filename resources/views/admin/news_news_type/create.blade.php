@extends('layouts.app')

@section('css')

@endsection


@section('main')

<div class="container">
    <h2>新增消息類別</h2>
    <hr>
    <form action="/admin/news_news_type/store " method="POST">

        <div class="form-group">
            <label for="name">類別</label>
            <input type="text" class="form-control" id="name" name="name" required>
            {{-- 下拉式選單 --}}
            {{-- <select class="form-control" id="type_id" name="type_id" required>
                @foreach ($product_types as $product_type)
                <option value="{{$product_type->id}}">{{$product_type->name}}</option>
                @endforeach
            </select> --}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
    </form>
</div>

@endsection


@section('js')

@endsection
