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
<div class="container py-5">
    <a class="btn btn-success" href="/admin/news_news_type/create">新增最新消息類別</a>
    <hr>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>類別</th>
                <th style="width:120px;">功能</th>
            </tr>
        </thead>
        @foreach($news_news_types as $news_news_type)
        <tbody>
            <tr>
                {{-- <td>{{$news->newsType->name ?? ''}}</td> --}}
                <td>{{$news_news_type->name}}</td>

                <td>
                    <a class="btn btn-success" href="/admin/news_news_type/edit/{{$news_news_type->id}}">編輯</a>

                    <a class="btn btn-danger" href="/admin/news_news_type/destroy/{{$news_news_type->id}}">刪除</a>
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
