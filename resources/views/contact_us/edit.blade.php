@extends('layouts.template');

@section('css')
    <style>
        form{
            border: 1px solid #000;
            width: 40%;
            margin: auto;
            margin-top:100px;

            background-image:url('https://i.pinimg.com/originals/b0/6f/45/b06f45f03acb3d942af37a7a7be18b52.jpg');
        }

        .title {
            border-bottom: 1px solid #000;
            height:50px;
            padding: 10px 10px;

            font-size:20px;
            font-weight:600;
        }

        .form-group{
            border-bottom: 1px solid #000;
            padding: 15px 10px;
        }

        button{
             cursor: pointer;
        }

        .index_button {
            width:100px;
            height:100px;
        }

    </style>

@endsection

@section('main')

<main>



    <form action="/contact_us/update/{{$data->id}}" method="post">
        <div class="index_button"><a href="/contact_us">回首頁</a></div>
        @csrf
        <div class="title">
            修改聯絡我們 Contact Us
        </div>
        <div class="form-group">
            姓名:
            <input type="text" name="name" id="name" value="{{$data->name}}" required>
        </div>
        <div class="form-group">
            電話:
            <input type="text" name="phone" id="phone" value="{{$data->phone}}" required>
        </div>
        <div class="form-group">
            EMAIL:
            <input type="text" name="email" id="email" value="{{$data->email}}" required>
        </div>
        <div class="form-group">
            主旨:
            <input type="text" name="title" id="title" value="{{$data->title}}" required>
        </div>
        <div class="form-group">
            內文:
            <textarea  cols="30" rows="10" name="content" id="content" required>{{$data->content}}</textarea>
        </div>
        <div class="form-group">
            <button>送出</button>
        </div>
    </form>

</main>
@endsection

@section('js')
@endsection
