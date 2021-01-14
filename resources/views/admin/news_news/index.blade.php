@extends('layouts.template')

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
    <a class="btn btn-success" href="/admin/news_news/create">新增最新消息</a>
    <hr>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>類別</th>
                <th>標題</th>
                <th>內容</th>
                <th>日期</th>
                <th style="width:120px;">功能</th>
            </tr>
        </thead>
        @foreach($news_news as $news)
        <tbody>
            <tr>
                {{-- <td>{{$news->newsType->name ?? ''}}</td> --}}
                <td>{{$news->newsnewsType->name}}</td>
                <td>{{$news->title}}</td>
                <td>{!! $news->content !!}</td>
                <td>{{$news->date}}</td>
                <td>
                    <a class="btn btn-success" href="/admin/news_news/edit/{{$news->id}}">編輯</a>

                    <a class="btn btn-danger" href="/admin/news_news/destroy/{{$news->id}}">刪除</a>
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
