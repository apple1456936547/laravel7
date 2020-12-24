@extends('layouts.template')

@section('css')
<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    main {
        height:100%;
    }

    .container {
        max-width: 1140px;
        width: 80%;
        margin: auto;
    }

    .card {
        width: 100%;
        height: auto;
        display: flex;
        padding: 40px 20px;
        border-bottom: solid #ACC0D8 1px;
    }

    .img {
        background-image: url('https://www.taiwan.net.tw/pic.ashx?qp=/0030275/13_0030275_1.jpg&sizetype=2');
    }

    .img2 {
        background-image:url('https://www.taiwan.net.tw/pic.ashx?qp=/0030269/13_0030269.jpg&sizetype=2');
    }

    .img3 {
        background-image:url('https://www.taiwan.net.tw/pic.ashx?qp=/0030266/02_0030266_1.jpg&sizetype=2');
    }

    .img4 {
        background-image:url('https://www.taiwan.net.tw/pic.ashx?qp=/0030265/02_0030265.jpg&sizetype=2');
    }

    .img, .img2, .img3, .img4, .img5, .img6, .img7, .img8, .img9, .img10 {
        width: 36%;
        max-height: 320px;
        height: 16vw;
        background-size:contain;
        background-repeat: no-repeat;
    }

    .content {
        width: 64%;
        padding-left: 30px;
    }

    .title {
        font-size: 24px;
        font-weight: bold;
    }

    .date {
        font-size: 20px;
        color: red;
        margin-top:10px;
    }

    .text {
        font-size: 18px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        margin-top:20px;
        line-height:38px;;
    }
</style>

@endsection

@section('main')

<div class="container">
    <div class="card">
        <div class="img"></div>
        <div class="content">
            <div class="title">「台灣觀巴」優質貼心服務伴您便捷暢遊全臺」</div>
            <div class="date">2020-12-24</div>
            <div class="text">
                109年「台灣觀巴」優良管理業者、最佳優質路線及最佳服務人員評選結果揭曉。交通部觀光局為提供國內外旅客在臺灣的便利觀光旅遊服務，自93年度起推出「台灣觀巴」套裝旅遊產品，其以優質多元行程與便捷貼心服務，成為台灣旅遊的優質品牌。本年經評選出服務品質優化績優業者前3名、最佳優質路線前10名、服務品質優良獎業者1名及最佳服務人員8名，並於今日假觀光局台北旅遊服務中心舉行頒獎典禮。
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="img2"></div>
        <div class="content">
            <div class="title">觀光局視各縣市政府執行需求 評估增撥安心旅遊行政費</div>
            <div class="date">2020-12-24</div>
            <div class="text">
                關於今(21)日台北市旅館商業同業公會質疑中央違反比例原則，安心旅遊補助僅給新臺幣400萬北市府行政費，致審核人力不足，導致安心旅遊補助款核發進度較緩慢一節，交通部觀光局澄清表示，安心旅遊民眾反映熱烈，整體補助筆數較先前之國旅補助高，但大部分縣市仍在觀光局核給之行政費額度辦理核心。
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="img3"></div>
        <div class="content">
            <div class="title">相信臺灣疫情控制 傾心臺灣鐵道旅遊 英國電視節目來台拍攝臺灣鐵道旅遊專輯</div>
            <div class="date">2020-12-24</div>
            <div class="text">
                自全球新冠疫情爆發以來，臺灣因疫情控制良好多次躍登英國主流平面及電視媒體，安全、健康、多元、包容的形象已逐漸於英國民眾心中奠基。英國Channel 5的主題紀錄片節目「世界最美麗的鐵道旅行（World’s Most Scenic Railway Journeys）」受臺灣多種軌道建設、多樣地理環境及多元文化之吸引，加以對臺灣疫情控制深具信心，在觀光局的協助下，製作單位特別安排攝影小組來台，並配合政府...
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="img4"></div>
        <div class="content">
            <div class="title">全台各國家風景區送夕陽、跨年、迎曙光活動</div>
            <div class="date">2020-12-24</div>
            <div class="text">
                揮別新冠肺炎陰影，2021年即將到來，你想好要怎麼度過了嗎？台灣各地掀起新希望熱潮，該如何選擇地點歡送最後一道夕陽，共浴新年第一道曙光傳遞新希望。交通部觀光局特別彙整7個國家風景區、各個風光秀麗景點辦理109-110年賞夕陽、跨年及迎曙光活動資訊，規劃迎接2021的到來！讓各處地點參與...
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="img5"></div>
        <div class="content">
            <div class="title">更多詳細內容...</div>
            <div class="date">2020-12-24</div>
            <div class="text">

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="img6"></div>
        <div class="content">
            <div class="title">觀光局與CNN合作 挖掘呈現越野女王Ruth Croft與台灣山岳的真實故事</div>
            <div class="date">2020-12-24</div>
            <div class="text">
                觀光局與CNN於「脊梁山脈旅遊年」合作，共同挖掘國際超跑運動員Ruth Croft與台灣山岳的真實故事，拍攝越野女王在台灣經歷的溫暖人情以及經驗的山徑之美，配合國際山岳日(International Mountain Day)，透過CNN所屬媒體集團線上宣傳管道向國際旅客呈獻令人驚艷的台灣。 紐西蘭籍的Ruth Croft為世界出色的馬拉松長距離越野跑步運動員，自14歲起開始於紐西蘭參加山徑越野馬拉松比...
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="img7"></div>
        <div class="content">
            <div class="title">「2021台灣燈會」轉型再升級 『乘風逐光』未來感主燈 展現科技藝術新境界</div>
            <div class="date">2020-12-24</div>
            <div class="text">
                「2021台灣燈會」主燈於今日（109年12月7日）假圓山大飯店發表。本屆主燈以「乘風逐光」為名，結合以「風光」為特色元素，竹藝燈籠將運用機械裝置，使108根竹子呈現出如風一般地的律動，以新竹聞名的玻璃為素材，呈現不同以往的高科技的未來感主燈。 交通部部長林佳龍、新竹市市長林智堅、交...
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="img8"></div>
        <div class="content">
            <div class="title">「2020小鎮遊戲趣2.0」 臺中潭子隆重獻映</div>
            <div class="date">2020-12-24</div>
            <div class="text">
                交通部觀光局為了帶動小鎮深度旅遊風氣，並行銷臺灣小鎮在地特色，於全臺16處小鎮演出活動，藉由知名的臺灣品牌團隊於小鎮演出，吸引遊客到小鎮旅遊，本(109)年度12月6日(星期日)下午7時整小鎮表演列車開駛到臺中市潭子區頭家國小，由交通部林佳龍部長、立法院蔡其昌副院長、洪慈庸顧問、楊瓊瓔立法委員等貴賓及本局莊靜真組長為活動表演拉開序幕。 交通部林部長致詞時表示，為了推動觀光，...
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="img9"></div>
        <div class="content">
            <div class="title">臺灣經典小鎮3.0出爐 深度發掘在地人文風情</div>
            <div class="date">2020-12-24</div>
            <div class="text">
                臺灣每個小鎮都很有特色，無論是自然生態、田園景觀、農村文化、在地美食等，都吸引民眾體驗風情、漫遊小鎮。交通部觀光局已於2019年、2020年遴選出臺灣經典小鎮1.0及2.0，計70個。為持續活絡國內旅遊，延續小鎮旅遊年熱潮，於是本年再推出經典小鎮3.0遴選。本次除各縣市政府推薦外，考量均...
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="card">
        <div class="img10"></div>
        <div class="content">
            <div class="title">「2020小鎮遊戲趣2.0」 臺中潭子隆重獻映</div>
            <div class="date">2020-12-24</div>
            <div class="text">
                交通部觀光局為了帶動小鎮深度旅遊風氣，並行銷臺灣小鎮在地特色，於全臺16處小鎮演出活動，藉由知名的臺灣品牌團隊於小鎮演出，吸引遊客到小鎮旅遊，本(109)年度12月6日(星期日)下午7時整小鎮表演列車將開駛到臺中市潭子區頭家國小，由紙風車劇團帶來詼諧逗趣的「武松打虎」劇目，邀請大家白天透過潭雅神自行車道，騎鐵馬賞玩臺中，晚上則可以欣賞紙風車劇團帶來的經典歌舞音樂劇，為秋日...
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection
