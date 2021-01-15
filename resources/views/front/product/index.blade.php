@extends('layouts.template')

@section('css')
<style>
    .container {
        padding: 100px 0;
    }

    main {
        height: auto;
    }

    .card {
        margin-top:80px;
    }

    .img {
        background-size: cover;
        background-position: center;
        height: 250px;
    }

    .price {
        text-align:right;
        font-size:32px;
    }

    #big-title {
        font-size:32px;
        margin-left:calc(50% - 64px);
    }
</style>
@endsection

@section('main')

<div class="container">
    <span id="big-title">拼圖列表</span>
    <div class="type_area"></div>

    <div class="product_area row">
        @foreach ($products as $product)
        <div class="card col-3 my-3 mx-5">
            <div class="card-img-top img" style="background-image:url({{$product->img}});"></div>
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text price">${{$product->price}}</p>
                <a href="#" class="btn btn-primary add_cart" data-id="{{$product->id}}">加入購物車</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection




@section('js')

<script>



    // 獲得加入購物車按鈕的element
    var addCartBtns = document.querySelectorAll('.add_cart');
    // 綁定監聽事件
    addCartBtns.forEach(function (addCartBtn) {
        addCartBtn.onclick = function() {
            // 拿到產品id
            var id = this.getAttribute('data-id');
            var _token = document.querySelector('meta[name = "csrf-token"]').getAttribute('content');
            console.log(_token);
            // 表單
            var formData = new FormData;
            // append 塞資料到表單裡面
            formData.append('id',id);
            formData.append('_token',_token);

            // console.log(_token);

            fetch('/add_cart', {
                method:'POST',
                body:formData,
                // response收到資料
            }).then(function(response) {
                return response.text()
            })
            .catch(function (error) {
                console.log('錯誤',error)
            })
            .then(function (data) {
                console.log('成功',data);
            });

        };

    });


</script>


@endsection
