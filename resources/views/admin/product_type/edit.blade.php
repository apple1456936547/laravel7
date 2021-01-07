@extends('layouts.app')

@section('css')

@endsection


@section('main')

<div class="container">
    <h2>編輯產品</h2>
    <hr>
    <form action="/admin/product_type/update/{{$product_type->id}} " method="POST">
        @csrf
        <div class="form-group">
            <label for="name">類別</label>
            <input type="text" class="form-control" min="1" id="name" name="name"
            value={{$product_type->name}} required>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
        @csrf
    </form>
</div>

@endsection


@section('js')

@endsection
