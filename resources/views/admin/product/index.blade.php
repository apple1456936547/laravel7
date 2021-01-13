@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<style>
    th,
    td {
        text-align: center;
    }
</style>

@endsection

@section('main')
<div class="container py-5">
    <a class="btn btn-success" href="/admin/product/create">新增產品</a>
    <hr>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>類別</th>
                <th>名稱</th>
                <th>價格</th>
                <th>圖片</th>
                <th style="width:120px;">功能</th>
            </tr>
        </thead>
        @foreach($products as $product)
        <tbody>
            <tr>
                {{-- <td>{{$product->$product_type->name}}</td> --}}

                {{-- function 名稱
                    / 關聯資料表的方法-->
                    Product Model 裡面的 public function productType (然後將自己的 type_id 對上 對方的 id)
                    / ProductType 的 id 的名字 --}}
                <td>{{$product->productType->name ?? ''}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td><img width="200" src="{{$product->img}}" alt=""></td>
                <td>
                    <a class="btn btn-success" href="/admin/product/edit/{{$product->id}}">編輯</a>

                    <a class="btn btn-danger" href="/admin/product/destroy/{{$product->id}}">刪除</a>
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
