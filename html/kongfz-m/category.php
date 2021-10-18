<?php class Yii { public static function getAlias($var) { return "http://39.106.102.45/filesys/spider/pages"; } } ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>商品分类大全_图书分类目录_孔夫子旧书网</title>
<meta name="keyword" content="商品分类,商品分类大全,图书分类,图书分类目录">
<meta name="description" content="孔夫子旧书网是国内专业的古旧书交易平台；目前已汇集了全国上万家网上书店与书摊，展示多达9000万种图书书籍，包含大量极具收藏价值的古旧珍本（明清、民国古籍善本、小人书、珍本期刊、名人墨迹、民国珍本、绝版书等）。孔网为广大书友提供二手图书买卖与收藏品交易市场；开二手书店、网上买书、网上卖书、珍品拍卖，首选孔夫子旧书网。">
<link href="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/css/ed5fa-8517.css" rel="stylesheet"></head>

<body>
<script type="text/javascript">//这段js的最后面有两个参数记得要设置，一个为设计稿实际宽度，一个为制作稿最大宽度，例如设计稿为750，最大宽度为750，则为(750,750) 1rem = 100px;
    !
    function(e, t) {
        function n() {
            var n = l.getBoundingClientRect().width;
            t = t || 540,
            n > t && (n = t);
            var i = 100 * n / e;
            r.innerHTML = "html{font-size:" + i + "px;}"
        }
        var i, d = document,
        o = window,
        l = d.documentElement,
        r = document.createElement("style");
        if (l.firstElementChild) l.firstElementChild.appendChild(r);
        else {
            var a = d.createElement("div");
            a.appendChild(r),
            d.write(a.innerHTML),
            a = null
        }
        n(),
        o.addEventListener("resize",
        function() {
            clearTimeout(i),
            i = setTimeout(n, 300)
        },
        !1),
        o.addEventListener("pageshow",
        function(e) {
            e.persisted && (clearTimeout(i), i = setTimeout(n, 300))
        },
        !1),
        "complete" === d.readyState ? d.body.style.fontSize = "16px": d.addEventListener("DOMContentLoaded",
        function(e) {
            d.body.style.fontSize = "16px"
        },
        !1)
    } (750, 750);</script>
<header class="topBar">
    <a href="javascript:window.history.go(-1);" class="back-icon"></a>
    <span class="header-title">全部分类-孔夫子旧书网</span>
    <span class="more-icon" data-toggle="0"></span>
    <div class="lay-out nav-lay-out" id="forUser">
        <i class="tri-icon"></i>
        <a rel="nofollow" href="http://mmessage.kongfz.com/message/mmessage/mmessage.html#/" class="msg-link nav-lay-link">
            <i>
            </i>
            <span>消息</span></a>
        <a rel="nofollow" href="https://m.kongfz.com/" class="home-link nav-lay-link">
            <i>
            </i>
            <span>首页</span></a>
        <a rel="nofollow" href="https://m.kongfz.com/newsearch/" class="search-link nav-lay-link">
            <i>
            </i>
            <span>搜索</span></a>
        <a rel="nofollow" href="https://m.kongfz.com/cart/?type=other" class="car-link nav-lay-link">
            <i>
            </i>
            <span>购物车</span></a>
    </div>
</header>
<div class="block c_topBar"></div>
<script>var topbar_site = {
        "s_kfzimg": "https://www.kfzimg.com/",
        "res2": "https://res2.kongfz.com/",
        "gateway": "http://gateway.kongfz.com/",
        "login": "https://login.kongfz.com/",
        "message": "http://message.kongfz.com/",
        "s_message": "https://message.kongfz.com/",
        "mmessage": "http://mmessage.kongfz.com/",
        "s_mmessage": "https://mmessage.kongfz.com/",
        "m": "https://m.kongfz.com/",
        "t": "https://t.kongfz.com/",
        "davUpload": "http://image-upload.kongfz.com/",
        "s_davUpload": "https://image-upload.kongfz.com/",
        "mpm": "http://m.kongfz.cn/",
        "s_mpm": "https://m.kongfz.cn/",
        "wechat": "https://wechat.kongfz.com/",
        "book": "http://book.kongfz.com/",
        "s_book": "https://book.kongfz.com/",
        "xinyu": "http://xinyu.kongfz.com/",
        "s_xinyu": "https://xinyu.kongfz.com/",
        "shop": "http://shop.kongfz.com/",
        "s_shop": "https://shop.kongfz.com/",
        "mbook": "http://mbook.kongfz.com/",
        "s_mbook": "https://mbook.kongfz.com/",
        "www": "http://www.kongfz.com/",
        "s_www": "https://www.kongfz.com/",
        "item": "http://item.kongfz.com/",
        "s_item": "https://item.kongfz.com/",
        "operation": "http://operation.kongfz.com/",
        "s_operation": "https://operation.kongfz.com/"
    }</script>
<div id="container">
    <div class="load-box">数据请求中...</div></div>
<script id="list-template" type="text/x-dot-template">< !--数组循环--><div id = "menu" > {
        {~it["data"] : element: i
        }
    } {
        { ? i == 0
        }
    } < div class = "menuItem active"data - index = "{{= i}}" > <h2 class = "name" > {
        { = element.name
        }
    } < /h2>
                </div > {
        { ? ?
        }
    } < div class = "menuItem"data - index = "{{= i}}" > <h2 class = "name" > {
        { = element.name
        }
    } < /h2>
                </div > {
        { ?
        }
    } {
        {~
        }
    } < /div>
    <div id="content">
        {{~it["data"]:element:i}}
            <h3 class="title" id="title{{= i}}">{{= element.name}}</h3 > <div class = "itemList" > {
        {~element.list: item: j
        }
    } < a class = "item"href = "{{= it["site "].s_mbook}}C{{= item.pinyin}}/" > <div > <img class = "lazy"src = "data:image/png;base64,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"data - src = "{{= item.img}}"alt = "" > <div class = "backgroundImg" > </div></div > <div class = "des" > <div class = "name" > {
        { = item.name
        }
    } < /div>
                        <div class="num">
                            {{= item.count}}
                        </div > </div>
                </a > {
        {~
        }
    } < /div>
        {{~}}
    </div > <div id = "title{{= it["data "].length}}" ></div>
/</script>
<script>var baseInfo = {
        site: {
            "s_kfzimg": "https://www.kfzimg.com/",
            "res2": "https://res2.kongfz.com/",
            "gateway": "http://gateway.kongfz.com/",
            "login": "https://login.kongfz.com/",
            "message": "http://message.kongfz.com/",
            "s_message": "https://message.kongfz.com/",
            "mmessage": "http://mmessage.kongfz.com/",
            "s_mmessage": "https://mmessage.kongfz.com/",
            "m": "https://m.kongfz.com/",
            "t": "https://t.kongfz.com/",
            "davUpload": "http://image-upload.kongfz.com/",
            "s_davUpload": "https://image-upload.kongfz.com/",
            "mpm": "http://m.kongfz.cn/",
            "s_mpm": "https://m.kongfz.cn/",
            "wechat": "https://wechat.kongfz.com/",
            "book": "http://book.kongfz.com/",
            "s_book": "https://book.kongfz.com/",
            "xinyu": "http://xinyu.kongfz.com/",
            "s_xinyu": "https://xinyu.kongfz.com/",
            "shop": "http://shop.kongfz.com/",
            "s_shop": "https://shop.kongfz.com/",
            "mbook": "http://mbook.kongfz.com/",
            "s_mbook": "https://mbook.kongfz.com/",
            "www": "http://www.kongfz.com/",
            "s_www": "https://www.kongfz.com/",
            "item": "http://item.kongfz.com/",
            "s_item": "https://item.kongfz.com/",
            "operation": "http://operation.kongfz.com/",
            "s_operation": "https://operation.kongfz.com/"
        }
    }</script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/runtime.4aa80e0b54e9029b63f7.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/zepto.4aa80e0b54e9029b63f7.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/category.c2daae3bb73ca831e805.js"></script>
</body>

</html>
