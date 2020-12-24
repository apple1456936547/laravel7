<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        nav {
            width:100%;
            height:74px;
            background-color:pink;
            /* border:1px black solid; */
        }

        ul {
            list-style:none;
            padding:0;
            margin:0;

            display:flex;
            align-items:center;

            height:100%;
            width:100%;
        }

        li {
            margin:auto;
        }

        main {
            height:70vh;
        }

        footer {
            height:150px;
            width:100%;
            background-color:plum;

        }
    </style>
    @yield('css')
</head>
<body>

    <nav>
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
