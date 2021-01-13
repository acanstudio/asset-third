<?php class Yii { public static function getAlias($var) { return "http://39.106.102.45/filesys/spider/pages"; } } ?>
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1, maximum-scale=2">
<meta name="viewport" content="initial-scale=1.0,user-scalable=yes,maximum-scale=2" media="(device-height: 568px)" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="telephone=no" name="format-detection" />
<meta name="applicable-device" content="mobile">
<title>书法作品-名家书法篆刻作品欣赏</title>
<meta name="Keywords" content="书法,书法欣赏,书法作品,书法作品欣赏,毛笔书法欣赏,硬笔书法欣赏,书法展,书法展览,篆刻作品,名家书法赏析">
<meta name="Description" content="近现代书法名家楷书、行书、隶书、草书、篆书欣赏,毛笔书法欣赏,硬笔书法欣赏,篆刻作品欣赏,书法展览获奖作品欣赏!">
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/css/8de35-7834.css">
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/css/31093-4280.css">
<link rel="apple-touch-icon" href="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/b62f9-3915.png" />
<script language='javascript' type='text/javascript'>var dbPathPart = '../';
    var pcPathPart = 'http://www.yac8.com/';
    var webPathPart = '../';
    var jsPathPart = '../';
    var webTypeName = 'list';</script>
<!-- <script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/zepto.js"></script> -->
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/zepto.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/iscroll.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/lib.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/common.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/top.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/topnav.js"></script>
<!-- 导航 -->
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/otca.js"></script>
</head>

<body>
<div id="area_html">
    <a name="topA"></a>
    <div id="area_body">
        <div id="area_main">
            <header id="area_top" class="bodyActive">
                <section class="box_logo">
                    <div>
                        <!-- logo -->
                        <div class="active logoBox">
                            <a href="../">
                                <img src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/19045-5251.png" /></a>
                        </div>
                        <div class="toolBox">
                            <span class="line"></span>
                            <!-- 搜索 -->
                            <span class="toolItem active search">
                                <a href="javascript:void(0)" onclick="CheckTopSearchBtn()"></a>
                            </span>
                            <span class="line"></span>
                            <!-- 客户端下载 -->
                            <span class="toolItem active download">
                                <a href="javascript:void(0)" onclick="CheckTopDownBtn()"></a>
                            </span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <form id="referForm" name="referForm" method="get" action="" onsubmit="return CheckRefForm()">
                        <input type="hidden" id="mudi2" name="mudi2" value="refer" />
                        <input type="hidden" id="refMode" name="refMode" value="theme" />
                        <section class="top_searchArea" id="top_search" style="display:none;">
                            <div class="alertWindow" id="searchweighing">
                                <div class="searchTab">
                                    <div class="searchTabScroll" id="firstUL">
                                        <ul>
                                            <li id='refMode_theme' class="current active js_selecttype" data-pagenum="1" value="theme" style='cursor:pointer;' onclick="SearchSel('theme');">
                                                <span>标题搜索</span></li>
                                            <input type='hidden' id='zhannei_domain' name='zhannei_domain' value='so.yac8.com' />
                                            <input type='hidden' id='zhannei_id' name='zhannei_id' value='12241538364760410328' />
                                            <li id='refMode_baidu' class="active js_selecttype" data-pagenum="2" value="baidu" style='cursor:pointer;' onclick="SearchSel('baidu');">
                                                <span>站内搜索</span></li>
                                        </ul>
                                        <span class="del active" id="backToFromHtml"></span>
                                    </div>
                                </div>
                                <div class="searchInput noTouchMoveWrap">
                                    <span class="inputWrap">
                                        <input type="text" class="input1 js_checkvalue" id="refContent" name="refContent" placeholder="请输入关键字"></span>
                                    <input type="submit" class="button1 active" id="searchValue" value="搜索" /></div>
                        </section>
                    </form>
                    <div class="top_downArea" id="top_download" style="display:none;">
                        <ul>
                            <li class="android">
                                <span class="contL">
                                    <em class="name">Android</em>
                                    <em class="info">最新版本：V1.00</em></span>
                                <a href='http://a.app.qq.com/o/simple.jsp?pkgname=com.otcms.OT01104'>
                                    <span id="downloadAndroid" class="active contR">
                                        <em class="icon">
                                            <i class="icon01"></i>
                                            <i class="icon02"></i>
                                            <i class="icon03"></i>
                                        </em>
                                        <em class="text">下载</em></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
                <!-- 导航 -->
                <nav class="box_nav2">
                    <ul class='li4'>
                        <li>
                            <a href="../" title="网站首页">
                                <span class="active scrollOne" data-id="nav151">网站首页</span></a>
                        </li>
                        <li>
                            <a href="../news/list_5.html" title="书法篆刻">
                                <span class="active scrollOne" data-id="nav5">书法篆刻</span></a>
                        </li>
                        <li>
                            <a href="../news/list_94.html" title="书法字帖">
                                <span class="active scrollOne" data-id="nav94">书法字帖</span></a>
                        </li>
                        <li>
                            <a href="../news/list_135.html" title="碑帖长卷">
                                <span class="active scrollOne" data-id="nav135">碑帖长卷</span></a>
                        </li>
                        <li>
                            <a href="../news/list_136.html" title="名家书法">
                                <span class="active scrollOne" data-id="nav136">名家书法</span></a>
                        </li>
                        <li>
                            <a href="../news/list_31.html" title="书法资料">
                                <span class="active scrollOne" data-id="nav31">书法资料</span></a>
                        </li>
                        <li>
                            <a href="../news/list_75.html" title="名家手迹">
                                <span class="active scrollOne" data-id="nav75">名家手迹</span></a>
                        </li>
                        <li>
                            <a href="../news/list_160.html" title="会员专栏">
                                <span class="active scrollOne" data-id="nav160">会员专栏</span></a>
                        </li>
                    </ul>
                </nav>
                </nav>
                <script type="text/javascript">topNav.init();</script></header>
            <div class="ad101Style"></div>
            <div class='clear'></div>
            <div id="area_content">
                <nav class="userMenu bodyActive">
                    <ul>
                        <li class='li4'>
                            <a href='../news/list_33.html' class="active" style="height:28px;line-height:28px;" title="毛笔书法">毛笔书法</a></li>
                        <li class='li4'>
                            <a href='../news/list_32.html' class="active" style="height:28px;line-height:28px;" title="硬笔书法">硬笔书法</a></li>
                        <li class='li4'>
                            <a href='../news/list_148.html' class="active" style="height:28px;line-height:28px;" title="篆刻作品">篆刻作品</a></li>
                        <li class='li4'>
                            <a href='../news/list_153.html' class="active" style="height:28px;line-height:28px;" title="书法展览">书法展览</a></li>
                    </ul>
                </nav>
                <section class="area_subItemTitle bodyActive">
                    <h1 class="titleBox">
                        <span class="name">
                            <a href='../news/list_5.html' title="书法篆刻">书法篆刻</a></span>
                        <!-- <span class="titleBar">
                        <em class="title">分类筛选</em><em class="icon"></em></span> -->
                        <div class="clear"></div>
                    </h1>
                </section>
                <section class="area_newsList bodyActive">
                    <ul>
                        <li class='mode4 active newsImgCont' data-id='15659'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15659.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/3ef48-1071.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15659.html' style='' title='清末著名书法家许锷小楷《倪文贞公传》'>
                                                <span class='name'>清末著名书法家许锷小楷《倪文贞公传》</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15659.html'>
                                                    <span class='note'>许锷小楷《倪文贞公传》，来源：倪元璐花卉图卷后题跋，弗利尔美术馆收藏。许锷，字达夫，号颖叔、瓢隐居士，室名诗可楼，苏州人。工诗，豪饮，尤善楷书。书法学王文治，清末著名书法家，学者。著有《西湖棹歌百首》等。 ...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15585'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15585.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/fa98e-5545.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15585.html' style='' title='“防控疫情·万众一心”主题书法网络展'>
                                                <span class='name'>“防控疫情·万众一心”主题书法网络展</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15585.html'>
                                                    <span class='note'>“武汉疫情”牵动了全国人民的心，党中央高度重视。为贯彻落实习近平总书记的重要指示精神，按照中国文联关于要用文艺的方式加强疫情防控的正面宣传、鼓舞群众斗志、凝聚强大正能量的要求，根据中国书法家协会的统一部署，中国书法出版传媒有限责任公司及书法出版社有限公司、《中国书法报》社、《中国...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15554'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15554.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/35421-4778.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15554.html' style='' title='第三届全国册页书法展入展作品选刊'>
                                                <span class='name'>第三届全国册页书法展入展作品选刊</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15554.html'>
                                                    <span class='note'>第三届全国册页书法展共收到9497件投稿作品，全国第三届册页书法作品展入展名单公示期间，中国书协对部分入展作者进行了抽查面试。经考核，有1名作者未通过面试考核，1名作者未参加面试。共有267名作者正式入展。陈超勇《草书册》陈阳静《行书册》李德会《词品五则》黄显霖《孝经》...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15506'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15506.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/1159e-3811.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15506.html' style='' title='“景行维贤·启功作品展”字画欣赏'>
                                                <span class='name'>“景行维贤·启功作品展”字画欣赏</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15506.html'>
                                                    <span class='note'>“景行维贤·启功作品展”北京荣宝拍卖有限公司主办 展览时间2019年11月15日—19日（9:00—17:00）展览地点荣宝斋大厦二层 多功能厅（北京市西城区琉璃厂西街19号） 启功行书“振兴中华”70×178.5cm启功85岁 米家云山图，设色纸本，1938年作，128×58...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15468'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15468.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/8f716-6775.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15468.html' style='' title='沈尹默行书诗轴8幅故宫博物院藏'>
                                                <span class='name'>沈尹默行书诗轴8幅故宫博物院藏</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15468.html'>
                                                    <span class='note'>沈尹默行书诗轴8幅，北京故宫博物院藏。沈尹默（1883－1971），原名君默，字中、秋明，号君墨，别号鬼谷子，浙江湖州人，著名的学者、诗人、书法家、教育家。沈尹默是以学帖出名的。其实，他在碑上也下了苦功。近50岁时致力于行草书，从米南宫而释智永，而虞世南，而褚遂良，再上溯二王。又...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15466'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15466.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/ebd5f-7216.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15466.html' style='' title='名家马衡4体书法作品欣赏'>
                                                <span class='name'>名家马衡4体书法作品欣赏</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15466.html'>
                                                    <span class='note'>马衡（1881～1955），字叔平，别署鍴庐、凡将斋，浙江鄞县人，寓居北京。早年曾任北京大学研究所国学考古学研究室主任，故宫博物院成立后任古物馆副馆长，1933年任故宫博物院院长。1947年当选为西泠印社第二任社长。 马衡行楷五律诗轴，故宫博物院藏。 马衡隶书录世说新语轴，故宫博...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15427'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15427.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/e90e1-1585.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15427.html' style='' title='首届“中国书法大厦杯”特等奖作品'>
                                                <span class='name'>首届“中国书法大厦杯”特等奖作品</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15427.html'>
                                                    <span class='note'>首届“中国书法大厦杯”书法大奖赛特等奖作品（奖金50万元/人） 纪松草书中堂 （局部） 颉江泊行书东坡中堂 （局部） 尚湘原楷书中堂 （局部） 刘永清印屏 （局部）...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15343'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15343.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/e2ce2-4182.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15343.html' style='' title='陈宝琛书法作品欣赏（西泠拍品六幅）'>
                                                <span class='name'>陈宝琛书法作品欣赏（西泠拍品六幅）</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15343.html'>
                                                    <span class='note'>陈宝琛（1848～1935），字伯潜，一字伯泉，号弢庵、陶庵，福建闽侯人。同治七年（1868）进士，授编修。历官江西学政、内阁学士、山西巡抚等，宣统帝（溥仪）师傅、弼徳院顾问大臣。工书法，学黄庭坚，又擅画松。...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15298'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15298.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/853de-5927.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15298.html' style='' title='2019启功作品展书法选刊'>
                                                <span class='name'>2019启功作品展书法选刊</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15298.html'>
                                                    <span class='note'>“景行维贤·启功作品展”书法作品选刊，来源：北京荣宝斋拍卖有限公司。 启功行书 “欲聋洞”，36cm×68.5cm 启功行书论诗绝句，102cm×34cm。 启功行书杜甫诗轴，132cm×65cm。启功行书自作书一首，1998年作。启功行书吴骏公句，93×30cm。启功行书自作诗一...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15267'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15267.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/fd96f-5972.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15267.html' style='' title='2019中日书法名家交流展作品选刊'>
                                                <span class='name'>2019中日书法名家交流展作品选刊</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15267.html'>
                                                    <span class='note'>2019年5月8日，由中国国家画院书法篆刻院、《中国美术报》社和（公财）日本全国书美术振兴会、（公社）日本全国道连盟、日本美术新闻社联合主办的“中日书法名家交流展（2019东京展）”，在日本东京芸术剧场举行，共展出中国和日本69位书法家共计70余幅作品。 欧阳中石 谢云 孙伯翔 ...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15228'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15228.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/12ff3-5836.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15228.html' style='' title='状元陆润庠书法西泠印社拍品专辑'>
                                                <span class='name'>状元陆润庠书法西泠印社拍品专辑</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15228.html'>
                                                    <span class='note'>陆润庠书法拍品专辑，来源：西泠印社拍卖会陆润庠（1841～1915），字云洒，又字凤石，别号固叟，江苏苏州人。工书法，意近欧、虞。同治十三年状元，歴任国子监祭酒、内阁学士、吏部尚书、东阁大学士等职。辛亥革命后为溥仪师傅。 陆润庠行书五言诗洒金扇页，19×53.5cm，成交价RMB...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15193'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15193.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/77a42-1256.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15193.html' style='' title='书之大者--杨守敬书法艺术展'>
                                                <span class='name'>书之大者--杨守敬书法艺术展</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15193.html'>
                                                    <span class='note'>2月26日，由湖北省博物馆与武汉美术馆联合主办的“书之大者——杨守敬的书法艺术”，在武汉美术馆盛大开幕。本次展览展出杨守敬各个时期的书法作品40件，及吴昌硕、张之洞、张裕钊等杨守敬友人的作品5件。 杨守敬（1839—1915），出生在湖北宜都，晚年自号邻苏老人。杨守敬是清末民初非...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15142'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15142.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/ccd6e-4881.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15142.html' style='' title='贾景德颜体楷书作品欣赏'>
                                                <span class='name'>贾景德颜体楷书作品欣赏</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15142.html'>
                                                    <span class='note'>贾景德（1880—1960），字煜如，号韬园。山西晋城市沁水县人。阎锡山与袁世凯合作的牵线人，中原大战晋绥系高层唯一的支持者，阎锡山永远的秘书长，最后的送葬人。贾景德的书法，与当年的于右任、梁寒操、计子高，曾被称誉为&quot;中国书法四大名家&quot;。书法界认为他的字...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15108'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15108.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/d31fe-3584.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15108.html' style='' title='“品翰堂杯”第五届中国硬笔书法公开赛获奖作品欣赏'>
                                                <span class='name'>“品翰堂杯”第五届中国硬笔书法公开赛获奖作品欣赏</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15108.html'>
                                                    <span class='note'>“品翰堂杯”第五届中国硬笔书法公开赛获奖作品欣赏（成人组）特等奖 刘振林 于声（女） 吴钢 金海东 卓祖毅金奖 郑发文 方义杰 夏勇 马国峰 赖敬槐 杨铁成 赵占强 杨响 潘伟 谭立军银奖 杨静 陈松 刘良谋 花爱军 雷鹏飞 徐秀康 赵卫星 蔚陆军 游章林 刘旭山 黄厚桦 杨连双...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                        <li class='mode4 active newsImgCont' data-id='15090'>
                            <table cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td width='110'>
                                        <div class='imgArea'>
                                            <a href='../news/15090.html'>
                                                <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/caf57-6408.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='theme'>
                                            <a href='../news/15090.html' style='' title='赵朴初书法墨迹拍品专辑'>
                                                <span class='name'>赵朴初书法墨迹拍品专辑</span></a>
                                            <div class='noteArea'>
                                                <a href='../news/15090.html'>
                                                    <span class='note'>赵朴初（1907-2000），安徽安庆人。自幼酷爱诗词书法，尔后从事佛教和社会救济工作。历任上海文化界救亡协会理事，中国人民保卫世界和平委员会常委、副主席，中国佛教协会会长，中国佛学院院长，中国藏语系高级佛学院顾问，西泠印社社长等职。 赵朴初书法墨迹6幅，来源：嘉德秋拍赵朴初手稿...</span></a>
                                            </div>
                                        </div>
                                    </td>
                            </table>
                        </li>
                    </ul>
                    <div class='clear'></div>
                    <center style='margin-top:8px;'>
                        <div class='navPageBox bodyActive'>
                            <ul>
                                <li>
                                    <span class='span'>上一页</span></li>
                                <li class='gotoLeft' style='width:40%;'>
                                    <input type='text' id='navPageVal' name='navPageVal' placeholder='1/103' style='background-color:#fff;'></li>
                                <li class='gotoRight'>
                                    <a href='javascript:void(0);' onclick="if(document.getElementById('navPageVal').value!=''){ListPageHref(document.getElementById('navPageVal').value,'../news/list_5_[page].html');}">跳页</a></li>
                                <li>
                                    <a href='../news/list_5_2.html' title='下一页'>下一页</a></li>
                            </ul>
                            <div class='clear'></div>
                        </div>
                    </center>
                    <!-- <div class="moreBox active">
                    <span>查看更多</span></div>
                    <div class="moreBox active loading" style="display:none;">
                    <span>正在更新...</span></div> -->
                </section>
                <div class="clear"></div>
            </div>
            <div class="ad102Style">
                <script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/o2fz6.js"></script>
            </div>
            <div class='clear'></div>
            <div id="area_bottom" name="bottom" class="bodyActive">
                <section class="box_bottom">
                    <div class="htmlContent">
                        <div style="text-align:center;">书法欣赏 &#169; 2015&#160;苏ICP备09026750号-2
                            <script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://": " http://");
                                document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F81e9312d0f0ccf3a801970a6730d730a' type='text/javascript'%3E%3C/script%3E"));</script>
                            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://": " http://");
                                document.write(unescape("%3Cspan id='cnzz_stat_icon_3484138'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/stat.php%3Fid%3D3484138%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
                            <br />
                            <a href='http://www.yac8.com/selWapPc.asp?go=pc&goUrl=http%3A%2F%2Fwww%2Eyac8%2Ecom%2Fnews%2Flist%5F5%2Ehtml' title='电脑版'>【电脑版】</a>&nbsp;&nbsp;
                            <a href="#topA" style="color:blue;">【回到顶部】</a></div>
                    </div>
                </section>
            </div>
            <div class="ad103Style"></div>
            <div class='clear'></div>
            </div>
        </div>
        <footer id="area_bottomMenu" class="bodyActive">
            <div class="box_bottomMenu">
                <div class="bottomMenuBox">
                    <div>
                        <ul class="toolMenuBox">
                            <li class="active">
                                <a href="https://weidian.com/?userid=901616491&wfr=c" title="微店">
                                    <span class="icon more"></span>
                                    <span class="text">微店</span></a>
                            </li>
                            <li class="active">
                                <a href="../" title="首页">
                                    <span class="icon home"></span>
                                    <span class="text">首页</span></a>
                            </li>
                            <li class="active" onclick="$id('baiduShare').style.display='';" style='cursor:pointer;'>
                                <span class="icon share"></span>
                                <span class="text">分享</span></li>
                        </ul>
                        <div class="toolMoreBox" id="toolMoreBox" style="display:none;">
                            <div>
                                <ul class="contentBox"></ul>
                                <div class="contentArrow">
                                    <em></em>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class='window_mengceng' id='baiduShare' style='display:none;' onclick="this.style.display='none';">
        <!-- -->
        <div class='window_fudong'>
            <div class="bdsharebuttonbox">
                <a href="#" class="bds_more" data-cmd="more"></a>
                <a href="#" class="bds_copy" data-cmd="copy" title="分享到复制网址"></a>
                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a>
            </div>
            <script>window._bd_share_config = {
                    "common": {
                        "bdSnsKey": {},
                        "bdText": "",
                        "bdMini": "2",
                        "bdMiniList": false,
                        "bdPic": "",
                        "bdStyle": "0",
                        "bdSize": "32"
                    },
                    "share": {},
                    //"image":{"viewList":["weixin","qzone","tsina","tqq","renren","tieba"],"viewText":"分享到：","viewSize":"24"}
                };
                with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
        </div>
    </div>
</body>

</html>
<!-- Html For 2020-5-9 6:32:31 -->
