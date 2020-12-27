<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.css">


    <style>
        body {
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        nav {
            width:100%;
            height:100px;
            background-color:rgb(219, 196, 196);
            /* border:1px black solid; */
        }

        ul {
            list-style:none;
            padding:0;
            margin:10px 0 0 0;

            display:flex;
            align-items:center;

            width:100%;
        }

        li {
            margin:auto;
        }

        main {
            height:70vh;
        }

        a{
            text-decoration:none;
            color:black;
        }

        a:hover {
            color:orangered;
            font-weight:600;
        }


        footer {
            height:150px;
            width:100%;
            background-color:rgb(219, 196, 196);

        }
    </style>

    @yield('css')
</head>
<body>

    <nav>
        <i class="far fa-newspaper"style="font-size:40px;margin-left:calc(50% - 20px);margin-top:20px;"></i>
        <ul>
            <li><a href="">回首頁</a></li>
            <li><a href="">第一頁</a></li>
            <li><a href="">第二頁</a></li>
        </ul>
    </nav>

    <main>

        @yield('main')

    </main>

    <footer></footer>

    @yield('js')
</body>
</html>
