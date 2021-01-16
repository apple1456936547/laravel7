@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<style>
    th,td {
        text-align:center;
    }
    table {
        margin:auto;
    }
</style>


@endsection

@section('main')
<div class="container py-5">
    {{-- <a class="btn btn-success" href="/admin/news_news/create">新增最新消息</a> --}}
    {{-- <hr> --}}
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>訂單編號</th>
                <th>姓名</th>
                <th>電話</th>
                <th>地址</th>
                <th style="width:120px;">功能</th>
            </tr>
        </thead>
        @foreach($orders as $order)
        <tbody>
            <tr>
                <td>{{$order->order_number}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->address}}</td>

                <td>
                    {{-- <a class="btn btn-success" href="/admin/news_news/edit/{{$news->id}}">詳細</a>

                    <a class="btn btn-danger" href="/admin/news_news/destroy/{{$news->id}}">刪除</a> --}}
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
