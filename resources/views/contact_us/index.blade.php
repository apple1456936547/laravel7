@extends('layouts.template')

@section('css')
    <style>
        main{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        table,th,td{
            border: 1px solid #000;
        }
        ._button {
            width:200px;
            height:200px;
            margin-bottom:10px;
        }
    </style>
@endsection

@section('main')

    <table>

        <div class="_button"><a href="/contact_us/create">新增資料</div>

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
            <td><a href="/contact_us/destroy/{{$data->id}}">
                刪除</a></td>
          </tr>
            @endforeach
        </tbody>
      </table>

@endsection
