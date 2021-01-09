@extends('layouts.app')

@section('css')

@endsection


@section('main')

<div class="container">
    <h2>編輯最新消息</h2>
    <hr>
    <form action="/admin/news_news/update/{{$news_news->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="type_id">類別</label>
            {{-- <input type="integer" class="form-control" id="type_id" name="type_id"
                value={{$news_news->type_id}} required> --}}
            {{-- 下拉式選單 --}}
            <select class="form-control" id="type_id" name="type_id" required>
                @foreach ($news_news_types as $news_news_type)
                <option value="{{$news_news_type->id}}"
                    @if ($news_news->type_id == $news_news_type ->id)selected @endif>{{$news_news_type->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">標題</label>
            <input type="text" class="form-control" id="title" name="title"
            value={{$news_news->title}} required>
        </div>
        <div class="form-group">
            <label for="content">內容</label>
            <input type="text" class="form-control" min="0" id="content" name="content"
            value={{$news_news->content}} required>
        </div>
        <div class="form-group">
            <label for="date">日期</label>
            <input type="text" class="form-control" id="date" name="date"
            value={{$news_news->date}} required>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
        @csrf
    </form>
</div>

@endsection


@section('js')

@endsection
