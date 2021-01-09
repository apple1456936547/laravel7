@extends('layouts.app')

@section('css')

@endsection


@section('main')

<div class="container">
    <h2>新增最新消息</h2>
    <hr>
    <form action="/admin/news_news/store " method="POST">

        <div class="form-group">
            <label for="type_id">類別</label>
            {{-- <input type="text" class="form-control" id="type_id" name="type_id" required> --}}
            {{-- 下拉式選單 --}}
            <select class="form-control" id="type_id" name="type_id" required>
                @foreach ($news_news_types as $news_news_type)
                <option value="{{$news_news_type->id}}">{{$news_news_type->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">標題</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">內容</label>
            <input type="longText" class="form-control" id="content" name="content" required>
        </div>
        <div class="form-group">
            <label for="date">日期</label>
            <input type="text" class="form-control" id="date" name="date" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
    </form>
</div>

@endsection


@section('js')

@endsection
