<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
    {{-- fontasome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    {{-- 如果想要引用套件bootstrap4
    必須先套用app.blade.php模板的 css link
    以及 js link --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.css">



    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            width: 100%;
            height: 125px;
            background-color: rgb(67, 77, 223);
            padding-top: 10px;
        }

        nav span {
            font-size: 32px;
            color: rgb(223, 245, 22);
            margin-left: calc(50% - 84px);
        }

        ul {
            width: 60%;
            list-style: none;
            padding-left: 0px;
            margin: auto;
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
        }

        li {
            width: 10%;
            font-size: 20px;
            padding-top: 5px;
            text-align: center;
        }

        main {
            height: 100vh;
        }

        .shopping_cart {
            color: black;
            font-size: 48px;
            position: fixed;
            right: 40px;
            bottom: 30vh;
        }

        .shopping_cart .qty {
            position: absolute;
            color: #000;
            width: 35px;
            height: 35px;
            border: 1px solid #000;
            border-radius: 50%;
            background: #FFF;
            font-size: 16px;
            top: 0;
            right: 0;
            transform: translate(40%, -40%);
            display: flex;
            justify-content: center;
            align-items: center;

        }

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
            background-color: rgb(67, 77, 223);
        }
    </style>

    @yield('css')
</head>

<body>

    <nav>
        <span class="title">奇奇拼圖</span>
        <ul>
            <li><a href="">首頁</a></li>
            <li><a href="">品牌故事</a></li>
            <li><a href="/product">商品一覽</a></li>
            <li><a href="">訂購專區</a></li>
            <li><a href="">會員專區</a></li>
            <li><a href="">聯絡我們</a></li>
        </ul>
    </nav>


    <main>
        <div id="app"></div>
        @yield('main')

        <a href="/checkout">
            <i class="fas fa-shopping-cart shopping_cart">
                <?php
                    $getTotalQty=\Cart::getTotalQuantity(); ?>
                <div class="qty">{{$getTotalQty}}</div>
            </i>
           </a>

    </main>

    <footer></footer>

    {{-- 如果想要引用套件bootstrap4
    必須先套用app.blade.php模板的 css link
    以及 js link --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>

</html>
