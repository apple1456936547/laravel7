@extends('layouts.template')

@section('css')
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

        @foreach ($products as $product)
        <div class="card col-3 my-2">
            <div class="card-img-top img" style="background-image:url({{$product->img}});"></div>
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <a href="#" class="btn btn-primary">前往購買</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection




@section('js')
@endsection
