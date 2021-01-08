@extends('layouts.app')

@section('css')

@endsection


@section('main')

<div class="container">
    <h2>新增產品類別</h2>
    <hr>
    <form action="/admin/product_type/store" method="POST">
        <div class="form-group">
            <label for="name">名稱</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">新增</button>
        @csrf
    </form>
</div>

@endsection

@section('js')

@endsection
