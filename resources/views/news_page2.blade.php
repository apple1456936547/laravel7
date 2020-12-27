@extends('layouts.template')


@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.css">

    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }

        main {
            height:100%;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .container {
            width: 70%;
            height: auto;
            margin: auto;
        }

        .top-box {
            width: 100%;
            height: 700px;
            margin-top: 50px;
        }

        .date {
            width: 100%;
            height: 40px;
            color: black;
            border-bottom: solid gray 1px;
            margin-top: 10px;
        }

        .introduction {
            font-size: 18px;
            line-height: 30px;
        }

        #see {
            margin-left: 20px;
        }

        .number-color {
            color: rgb(177, 14, 14);
        }

        .bottom-box {
            width: 100%;
            height: 580px;
        }

        .title-picture {
            display: flex;
            flex-wrap: wrap;
        }

        #camera-icon {
            width: 50px;
            height: 50px;
            margin-top: 10px;
        }

        .click-text {
            width: 300px;
            height: 20px;
            background-color: rgb(184, 177, 177);
            padding: 5px;
            text-align: center;
            display: inline;
        }

        .click-text:hover {
            color: white;
            background-color: rgb(209, 66, 13);
        }

        .picture-box {
            width: 100%;
            height: 400px;
            display: flex;
            margin-top: 20px;
        }

        .picture1 {
            width: 400px;
            height: 330px;
            margin-left: 15px;
            border: 1px rgb(201, 196, 196) solid;
        }

        .picture2 {
            width: 400px;
            height: 330px;
            margin-left: 20px;
            border: 1px rgb(201, 196, 196) solid;
        }

        .picture-size {
            width: 100%;
            height: 280px;
            object-fit: cover;
        }

        .img-text {
            text-align: center;
            margin-top: 10px;
        }

        .img-text2 {
            margin-top: 10px;
            margin-left: 10px;
        }

        .next-one {
            width: 100%;
            height: 30px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;

            padding-bottom: 15px;
        }

        .next-one-title {
            padding: 4.5px 15px;
        }

        .next-one-text {
            color: rgb(211, 65, 12);
            padding: 4.5px 15px;
        }

        .next-one:hover .next-one-title {
            background-color: rgb(209, 66, 13);
            color: white;
        }

        .next-one:hover .next-one-text {
            text-decoration: underline;
        }

        .footer {
            width: 100%;
            height: 200px;
        }

        .update-time {
            display: flex;
            justify-content: flex-end;
        }

        #return-button {
            width: 100px;
            height: 20px;
            background-color: white;
            border: 1px rgb(201, 196, 196) solid;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding:10px;
        }

        .click-box {
            background-color:rgb(211, 194, 194);
            width:380px;
            height:170px;
            margin-top:20px;
            border:1px rgb(211, 194, 194) solid;
            border-radius: 25px;
        }

        .click-box.active {
            display:none;
            background-color: rgb(211, 194, 194);
            width:380px;
            height:170px;
            margin-top:20px;
            border:1px rgb(211, 194, 194) solid;
            border-radius: 25px;
        }

        .click-box ul{
            display: inline;
        }

        .click-box ul li{
            line-height: 30px;
            margin: 0px 0px 3px 10px;
        }

    </style>

@endsection

@section('main')

    <div class="container">
        <div class="top-box">
            <div>
                <h2>「台灣觀巴」優質貼心服務伴您便捷暢遊全臺</h2>
            </div>
            <div class="date">
                <span>發布日期：
                    <span class="number-color">2020-12-24</span>
                </span>
                <span> </span>
                <span id="see">瀏覽次數：
                    <span class="number-color">202</span>
                </span>
            </div>
            <div class="introduction">
                <p>
                    109年「台灣觀巴」優良管理業者、最佳優質路線及最佳服務人員評選結果揭曉。交通部觀光局為提供國內外旅客在臺灣的便利觀光旅遊服務，自93年度起推出「台灣觀巴」套裝旅遊產品，其以優質多元行程與便捷貼心服務，成為台灣旅遊的優質品牌。本年經評選出服務品質優化績優業者前3名、最佳優質路線前10名、服務品質優良獎業者1名及最佳服務人員8名，並於今日假觀光局台北旅遊服務中心舉行頒獎典禮。
                </p>

                <p>
                    觀光局為輔導「台灣觀巴」業者持續提供遊客更優質的服務品質，並檢視推動成效，每年藉由委託第3公正單位辦理服務品質提升暨優化評比作業，選出績優單位與人員予以頒發獎金及獎牌或獎狀，以資獎勵。本(109)年「台灣觀巴」經過專家學者多面向考評與遊客意見調查後，評選出服務品質優化前3名業者分別是屏東旅行社、鄉村旅行社、宏祥旅行社及元帥旅行社(並列)。最佳優質路線共有10條，分別是飛行家旅行社-宜蘭文藝風情豐富行二日遊、屏東旅行社-墾丁海陸體驗線半日遊、鄉村旅行社-澎湖悠閒之旅半日遊、屏東旅行社-恆春半島東海岸線半日遊、金建旅行社-佛光山半日遊、怡容國際旅行社-雪霸國家公園觀霧自然風情二日遊、大確幸旅行社-客家與文青的交流-桃園龍潭一日遊、金建旅行社臺南古都&烏山頭一日遊、元帥旅行社-雲林文化薈萃
                    傳統藝術精華一日遊及宏祥旅行社-基隆港、野柳、北海岸半日遊。服務品質優良獎得獎業者為飛行家旅行社。最佳服務人員獎由華府旅行社蕭平；宏祥旅行社宜約瑟、邱健翔、林士懿；屏東旅行社許媄婷、王辰安及漢星旅行社廖堂守等人獲得。
                </p>

                <p>
                    交通部觀光局表示：「台灣觀巴」是觀光局輔導推動的旅遊產品品牌，其以飯店、機場及高臺鐵車站等重要交通節點出發，專人專車接送至國內各主要觀光景點的旅遊服務模式發展迄今已臻成熟，往年國際旅客為主要客源，約占68%。然而在此受全球疫情影響，國境近乎關閉，每年1,700萬出國旅遊人次全留在國內之情形下，危機亦是轉機，「台灣觀巴」當因應後疫情時期轉型，由過去以國際旅客為主的做法，轉為以國旅市場為主，才能增加客源，擴大服務對象。近日將邀集產、官、學各界代表召開「研商輔導『台灣觀巴』轉型作法會議」，共同研議「台灣觀巴」輔導轉型之作法，以有效輔導業者轉型，創新優質品牌形象與價值。未來並將持續就整合行銷及提升服務品質等相關事宜予以協助，期望「台灣觀巴」業者齊心協力，針對國旅市場創新規劃行程內容，共同為「台灣觀巴」的蛻變與精進而努力。「台灣觀巴」行程資訊可至官網查悉。
                </p>

            </div>
        </div>

        <div class="bottom-box">
            <div class="title-picture">
                <img id="camera-icon" src="https://www.taiwan.net.tw/images/icon/album.svg">
                <h2>照片</h2>
            </div>
                <div class="click-text">
                    點擊檢視本網站使用鍵盤操作相簿說明：
                </div>
                <div class="click-box active">
                    <ul>
                        <li>向上鍵：照片選單顯示</li>
                        <li>向下鍵：照片選單隱藏</li>
                        <li>向左鍵：上一張照片</li>
                        <li>向右鍵：下一張照片</li>
                        <li>ESC鍵：離開相簿</li>
                    </ul>
                </div>
            <div class="picture-box">
                <a href="#">
                    <div class="picture1">
                        <img class="picture-size" src="https://www.taiwan.net.tw/att/0030275/02_0030275.gif">
                        <div class="img-text">
                            109年度「台灣觀巴」管理及服務品質優化頒獎典禮
                        </div>
                    </div>
                </a>
                <a href="#"></a>
                <div class="picture2">
                    <img class="picture-size" src="https://www.taiwan.net.tw/att/0030275/02_0030275_1.gif">
                    <div class="img-text2">
                        交通部觀光局副局長林信任致詞
                    </div>
                </div>
                </a>
            </div>
            <a href="#">
                <div class="next-one">
                    <div class="next-one-title">
                        下一則
                    </div>
                    <div class="next-one-text">
                        觀光局視各縣市政府執行需求 評估增撥安心旅遊行政費
                    </div>
                </div>
            </a>
        </div>

        <div class="footer">
            <div class="update-time">
                <span>最後更新時間： 2020-12-24</span>
            </div>

            <div id="return-button">
                <a href="http://127.0.0.1:8000/news">
                    <i class="fas fa-chevron-up"style="color:gray;"></i>
                    回列表首
                </a>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>

    var button = document.querySelector(".click-text");
    var box = document.querySelector(".click-box")

    button.onclick = function() {
        if(box.classList=="click-box active"){
            box.classList.remove("active");
        }
        else {
            box.classList.add("active");
        }
    }


</script>
@endsection
