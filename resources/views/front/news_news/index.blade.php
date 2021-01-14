@extends('layouts.template')

@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    .container {
        padding:100px 0;
    }
    main {
        height:auto;
    }
    .img {
        background-size:cover;
        background-position:center;
        height:250px;
    }
</style>
@endsection

@section('main')
<div class="container">
    <div class="type_area"></div>
    <div class="product_area row">

        @foreach ($newsData as $newsData)
        <div class="card col-3 my-2">
            <div class="card-img-top img" style="background-image:url({{$newsData->img}});"></div>
            <div class="card-body">
                <h5 class="card-title">{{$newsData->title}}</h5>
                <p class="card-text">{!!$newsData->content!!}</p>
                <a href="#" class="btn btn-primary">前往查看
                </a>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection




@section('js')
<script src="{{ asset('js/app.js')}}"></script>
@endsection
