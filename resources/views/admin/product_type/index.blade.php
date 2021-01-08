@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<style>
    th,td {
        text-align:center;
    }
</style>

@endsection

@section('main')

{{-- ProductType 裡面寫的function名稱 --}}

<?php //dd($product_types); ?>

<div class="container py-5">
    <a class="btn btn-success" href="/admin/product_type/create">新增產品類別</a>
    <hr>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>名稱</th>
                <th style="width:120px;">功能</th>
            </tr>
        </thead>
        @foreach($product_types as $product_type)
        <tbody>
            <tr>
                <td>{{$product_type->name}}</td>
                <td>
                    <a class="btn btn-success" href="/admin/product_type/edit/{{$product_type->id}}">編輯</a>

                    <a class="btn btn-danger" href="/admin/product_type/destroy/{{$product_type->id}}">刪除</a>
                </td>
            </tr>
        </tbody>
         @endforeach
    </table>
</div>


@endsection

@section('js')

<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

@endsection
