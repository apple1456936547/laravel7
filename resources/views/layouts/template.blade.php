<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.css">

    {{-- 如果想要引用套件bootstrap4
    必須先套用app.blade.php模板的 css link
    以及 js link --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            width: 100%;
            height: 100px;
            background-color: rgb(36, 48, 209);

        }

        .title {
            font-size:28px;
            color:white;
            margin-left:600px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0 0 0 0;

            display: flex;
            align-items: center;

            width: 100%;
        }

        li {
            font-size: 20px;
            margin: auto;
            padding-top: 5px;
            margin-top:10px;
        }

        main {
            height: 70vh;
            background-image:url('https://lh3.googleusercontent.com/proxy/K_CVmmWYA62jGP0eKDa6pzq6vohGwTr0f80TGEqrnjBAOkJ9N4FqY3W8qT4hbsN6d-ZCko3xS6LHRN9E7Wdsq9i29ncTRYmEItI-2Io');


        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
            color: rgb(233, 136, 71);
            font-weight: 600;
        }


        footer {
            height: 100px;
            width: 100%;
            background-color: rgb(36, 48, 209);

        }

    </style>

    @yield('css')
</head>

<body>

    <nav>
        <span class="title">果果千層蛋糕</span>
        <ul>
            <hr>
            <li><a href="">首頁</a></li>
            <li><a href="">品牌故事</a></li>
            <li><a href="">商品一覽</a></li>
            <li><a href="">訂購專區</a></li>
            <li><a href="">會員專區</a></li>
            <li><a href="">聯絡我們</a></li>
        </ul>
    </nav>

    <main>

        @yield('main')

    </main>

    <footer></footer>

    {{-- 如果想要引用套件bootstrap4
    必須先套用app.blade.php模板的 css link
    以及 js link --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>

</html>
