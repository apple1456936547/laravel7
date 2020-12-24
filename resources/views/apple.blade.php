@extends('layouts.template')
{{-- 要將內容塞進哪個模板裡面 --}}

{{-- 要填入css的東西 --}}
@section('css')

@endsection

{{-- 要填入main區塊的東西 --}}
@section('main')




    {{-- php 字串相加是用 . 連接 --}}
    {{-- <h1 style="text-align:center;">{{$show}}</h1> --}}

    {{-- html文字中間空格法 --}}
    {{-- <h1>{{$name}}
        {{$age}}
        {{$gender}}
    </h1> --}}

    {{-- php第一種寫法 --}}

    {{-- <h1>
        {{$name.' '.$age.' '.$gender}}
    </h1> --}}

    {{-- php第二種寫法 --}}
    <h1>
        <?php
    echo $name," ",$age," ",$gender;
    //  or  echo "$name $age $gender";
    ?>

    </h1>

    <h1>

    </h1>

    <img src ="https://png.pngtree.com/png-vector/20190119/ourlarge/pngtree-cartoon-cake-hand-painted-cake-double-cake-cartoon-dessert-png-image_472656.jpg" style="width:300px;height:300px;margin-left:calc(50% - 150px);">

@endsection

{{-- 要填入js區塊的東西 --}}
@section('js')


@endsection
