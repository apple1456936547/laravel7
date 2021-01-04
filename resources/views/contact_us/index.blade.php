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
    </style>
@endsection

@section('main')
    <table>
        <thead>
          <tr>
            <th>姓名</th>
            <th>電話</th>
            <th>Email</th>
            <th>主旨</th>
            <th>內容</th>
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
          </tr>
            @endforeach
        </tbody>
      </table>

@endsection
