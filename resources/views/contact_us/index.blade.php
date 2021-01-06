@extends('layouts.app')

@section('css')
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"/> --}}
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection

@section('main')
<div class="container">
    <div class="_button"><a href="/contact_us/create">新增資料</a></div>
    <table id="myTable" class="display">
        <thead>
          <tr>
            <th>姓名</th>
            <th>電話</th>
            <th>Email</th>
            <th>主旨</th>
            <th>內容</th>
            <th>時間</th>
            <th>編輯</th>
            <th>刪除</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contact_us_data as $data)
          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->content}}</td>
            <td>{{$data->created_at}}</td>
            <td>
                <a href="/contact_us/edit/{{$data->id}}">
                編輯</a>
            </td>
            <td>
                <a href="/contact_us/destroy/{{$data->id}}">
                刪除</a>
            </td>
          </tr>
            @endforeach
        </tbody>
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
