@extends('layouts.app')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection


@section('main')

<div class="container">
    <h2>新增最新消息</h2>
    <hr>
    <form action="/admin/news_news/store " method="POST">
        @csrf
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
            {{-- 內容的標籤都要用 textarea 模式 --}}
            <textarea type="longText" class="form-control" id="content" name="content" required></textarea>
        </div>
        <div class="form-group">
            <label for="date">日期</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
    </form>
</div>

@endsection

{{-- 套用summer-notes套件 --}}
{{-- https://summernote.org/getting-started/#simple-example --}}
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
  $('#content').summernote();
});
</script>
@endsection
