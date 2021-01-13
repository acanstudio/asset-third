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
<title>书法欣赏-高清晰书法作品图片欣赏网手机端</title>
<meta name="Keywords" content="书法,书法欣赏,字帖,书法碑帖,书法作品,书法图片,书法讲座,书法长卷,字帖欣赏,名家书法">
<meta name="Description" content="毛笔书法作品欣赏、硬笔书法篆刻作品欣赏；历代名家书法碑帖、手札墨迹赏析；高清书法字帖、书法讲座视频免费下载!">
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/css/97abe-4955.css">
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/css/fa062-6927.css">
<link rel="apple-touch-icon" href="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/54243-2117.png" />
<script language='javascript' type='text/javascript'>var dbPathPart = '../';
    var pcPathPart = 'http://www.yac8.com/';
    var webPathPart = './';
    var jsPathPart = '';
    var webTypeName = 'home';</script>
<!-- <script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/96/zepto.js"></script> -->
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/47/zepto.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/66/iscroll.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/68/lib.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/28/common.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/45/top.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/74/topnav.js"></script>
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
                            <a href="./">
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
                            <a href="./" title="网站首页">
                                <span class="active scrollOne" data-id="nav151">网站首页</span></a>
                        </li>
                        <li>
                            <a href="./news/list_5.html" title="书法篆刻">
                                <span class="active scrollOne" data-id="nav5">书法篆刻</span></a>
                        </li>
                        <li>
                            <a href="./news/list_94.html" title="书法字帖">
                                <span class="active scrollOne" data-id="nav94">书法字帖</span></a>
                        </li>
                        <li>
                            <a href="./news/list_135.html" title="碑帖长卷">
                                <span class="active scrollOne" data-id="nav135">碑帖长卷</span></a>
                        </li>
                        <li>
                            <a href="./news/list_136.html" title="名家书法">
                                <span class="active scrollOne" data-id="nav136">名家书法</span></a>
                        </li>
                        <li>
                            <a href="./news/list_31.html" title="书法资料">
                                <span class="active scrollOne" data-id="nav31">书法资料</span></a>
                        </li>
                        <li>
                            <a href="./news/list_75.html" title="名家手迹">
                                <span class="active scrollOne" data-id="nav75">名家手迹</span></a>
                        </li>
                        <li>
                            <a href="./news/list_160.html" title="会员专栏">
                                <span class="active scrollOne" data-id="nav160">会员专栏</span></a>
                        </li>
                    </ul>
                </nav>
                </nav>
                <script type="text/javascript">topNav.init();</script></header>
            <div class="ad101Style"></div>
            <div class='clear'></div>
            <div id="area_content">
                <script src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/index.js" type="text/javascript"></script>
                <!-- 图片广告 -->
                <script src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/bannerbox.js" type="text/javascript"></script>
                <script language='javascript' type='text/javascript'>var url = document.location.href;
                    var splitIndex = url.indexOf("?") + 1;
                    var queryStr = url.substr(splitIndex, url.length);
                    //	var endPos	= queryStr.indexOf(".html");
                    //	if (endPos >= 1){ queryStr = queryStr.substr(0,endPos); }
                    if (queryStr.substr(0, 5) == 'list_') { // 文章列表页
                        document.location.href = "news/?" + queryStr;

                    } else if (queryStr.substr(0, 4) == 'web_') { // 单篇信息页
                        document.location.href = "news/?" + queryStr;

                    } else if (queryStr.substr(0, 7) == 'message') { // 留言板
                        document.location.href = "message.asp";

                    } else if (ToInt(queryStr.substr(0, 1)) > 0) { // 文章内容页
                        document.location.href = "news/?" + queryStr;
                    }</script>
                <!-- 资讯列表 -->
                <section id="newsTabsBox" class="box_newsTabs bodyActive">
                    <div class="itemTitle">
                        <ul class="titleBox">
                            <li class="active current cols3Box newsTabsItem" id='1' data-id="1">
                                <div>
                                    <span class="text">最新消息</span></div>
                            </li>
                            <li class="active cols3Box newsTabsItem" id='2' data-id="2">
                                <div>
                                    <span class="text">精彩推荐</span></div>
                            </li>
                            <li class="active cols3Box newsTabsItem" id='3' data-id="3">
                                <div>
                                    <span class="text">热门图文</span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="itemContent newsListBox newsListStyle">
                        <ul id="newsListNoBox" style="display:none">
                            <div class="newsListNoContent">
                                <span>暂无内容</span></div>
                        </ul>
                        <div id="infoNewList_load" class="moreBox active loading" style="display:none;">
                            <span>正在更新...</span></div>
                        <ul id="newsListTab1" style="display:none">
                            <li class='active newsTabsContent' data-id='16154'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16154.html' title="清代关思亮集颜真卿书《医圣汉张仲景先生之碑》" style=''>
                                        <div class='date' style='color:red;'>01-03</div>
                                        <span class='name'>清代关思亮集颜真卿书《医圣汉张仲景先生之碑》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16186'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16186.html' title="文徵明83岁小楷心经（美国藏）" style=''>
                                        <div class='date' style='color:red;'>01-03</div>
                                        <span class='name'>文徵明83岁小楷心经（美国藏）</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16137'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16137.html' title="元代张雨行书《次韵天镜上人送柑诗帖》等" style=''>
                                        <div class='date' style='color:red;'>01-02</div>
                                        <span class='name'>元代张雨行书《次韵天镜上人送柑诗帖》等</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16193'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16193.html' title="赵之谦致赵曈书札册《撝翁墨妙》" style=''>
                                        <div class='date' style='color:red;'>01-02</div>
                                        <span class='name'>赵之谦致赵曈书札册《撝翁墨妙》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16190'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16190.html' title="乾隆帝御笔《元旦试笔》2幅" style=''>
                                        <div class='date' style='color:red;'>01-01</div>
                                        <span class='name'>乾隆帝御笔《元旦试笔》2幅</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16165'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16165.html' title="法国人王致诚绘《十骏马图》+《嵇璜书法十赞》" style=''>
                                        <div class='date' style='color:red;'>01-01</div>
                                        <span class='name'>法国人王致诚绘《十骏马图》+《嵇璜书法十赞》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16187'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16187.html' title="宋徽宗赵佶瘦金书《题李白上阳台帖》" style=''>
                                        <div class='date' style=''>12-31</div>
                                        <span class='name'>宋徽宗赵佶瘦金书《题李白上阳台帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16189'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16189.html' title="杜本、王馀庆、危素书法题跋《上阳台帖》" style=''>
                                        <div class='date' style=''>12-31</div>
                                        <span class='name'>杜本、王馀庆、危素书法题跋《上阳台帖》</span></a>
                                </h3>
                            </li>
                        </ul>
                        <ul id="newsListTab2" style="display:none">
                            <li class='active newsTabsContent' data-id='16024'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16024.html' title="董其昌78岁行书精品《白羽扇赋》高清单字" style=''>
                                        <span class='name'>董其昌78岁行书精品《白羽扇赋》高清单字</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15922'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15922.html' title="六朝人写经墨宝《大方广佛华严经卷第三十一》" style='color:#ff0000;'>
                                        <span class='name'>六朝人写经墨宝《大方广佛华严经卷第三十一》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15986'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15986.html' title="日本卷菱湖书法《习字唐诗帖》" style=''>
                                        <span class='name'>日本卷菱湖书法《习字唐诗帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15909'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15909.html' title="赵孟頫行书《潘安仁秋兴赋卷》" style=''>
                                        <span class='name'>赵孟頫行书《潘安仁秋兴赋卷》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15908'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15908.html' title="赵孟頫行书《欧阳修秋声赋卷》" style=''>
                                        <span class='name'>赵孟頫行书《欧阳修秋声赋卷》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15822'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15822.html' title="书圣王羲之草书《十七帖》含朱文释文（美国藏）" style=''>
                                        <span class='name'>书圣王羲之草书《十七帖》含朱文释文（美国藏）</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15789'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15789.html' title="文徵明89岁书法《西苑诗》" style='font-weight:bold;color:#0000ff;'>
                                        <span class='name'>文徵明89岁书法《西苑诗》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15755'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15755.html' title="敦煌小楷《摩诃般若波罗蜜放光经卷第七》" style=''>
                                        <span class='name'>敦煌小楷《摩诃般若波罗蜜放光经卷第七》</span></a>
                                </h3>
                            </li>
                        </ul>
                        <ul id="newsListTab3" style="display:none">
                            <li class='active newsTabsContent' data-id='10725'>
                                <h3 class='newsTitle'>
                                    <a href='./news/10725.html' title="王羲之兰亭集序全文单字高清放大字帖" style='color:#ff0000;'>
                                        <span class='name'>王羲之兰亭集序全文单字高清放大字帖</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='10344'>
                                <h3 class='newsTitle'>
                                    <a href='./news/10344.html' title="书法字帖精品《大唐三藏圣教序》高清晰米字格版" style='color:#ff0000;'>
                                        <span class='name'>书法字帖精品《大唐三藏圣教序》高清晰米字格版</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='4028'>
                                <h3 class='newsTitle'>
                                    <a href='./news/4028.html' title="硬笔书法字帖下载《楷书5000常用字》" style='color:#FF0000;'>
                                        <span class='name'>硬笔书法字帖下载《楷书5000常用字》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='8224'>
                                <h3 class='newsTitle'>
                                    <a href='./news/8224.html' title="怀仁集王羲之《三藏圣教序》高清字帖" style='color:#0000ff;'>
                                        <span class='name'>怀仁集王羲之《三藏圣教序》高清字帖</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='7838'>
                                <h3 class='newsTitle'>
                                    <a href='./news/7838.html' title="欧阳询楷书字帖《九成宫醴泉铭》" style='color:#008000;'>
                                        <span class='name'>欧阳询楷书字帖《九成宫醴泉铭》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='9785'>
                                <h3 class='newsTitle'>
                                    <a href='./news/9785.html' title="王羲之书法字帖《三藏圣教序》高清大图" style='color:#0000ff;'>
                                        <span class='name'>王羲之书法字帖《三藏圣教序》高清大图</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='10227'>
                                <h3 class='newsTitle'>
                                    <a href='./news/10227.html' title="硬笔书法字帖《小学生必背古诗词八十首》" style='color:#0000ff;'>
                                        <span class='name'>硬笔书法字帖《小学生必背古诗词八十首》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='8273'>
                                <h3 class='newsTitle'>
                                    <a href='./news/8273.html' title="《颜真卿楷书习字帖》全书扫描版" style='color:#ff0000;'>
                                        <span class='name'>《颜真卿楷书习字帖》全书扫描版</span></a>
                                </h3>
                            </li>
                        </ul>
                    </div>
                </section>
                <script type="text/javascript">newsTabs.init();</script>
                <div class="ad104Style"></div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_33.html' title='毛笔书法'>
                            <em class='title'>毛笔书法</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_33.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16179'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16179.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/f5a2b-1118.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16179.html' style='' title='沈尹默书法册页《春蚕词》'>
                                                    <span class='name'>沈尹默书法册页《春蚕词》</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16179.html'>
                                                        <span class='note'>沈尹默书法春蚕词册沈尹默（1883－1971），原名君默，字中、秋明，浙江湖州人。沈尹默是以学帖出名的。其实，他在碑上也下了苦功。近50岁时致力于行草书，从米南宫而释智永，而虞世南，而褚遂良，再上溯二王。陆维钊说：“沈尹老是近代真正学王之代表，是大家”。...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16106'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16106.html' title="周慧珺行楷书法《兴华苑碑记》" style=''>
                                        <span class='name'>周慧珺行楷书法《兴华苑碑记》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16060'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16060.html' title="甘肃省书法家协会主席安文丽作品欣赏" style=''>
                                        <span class='name'>甘肃省书法家协会主席安文丽作品欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15917'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15917.html' title="著名诗人黄君坦书法长句" style=''>
                                        <span class='name'>著名诗人黄君坦书法长句</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15998'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15998.html' title="&#34;京城第一玩家&#34;王世襄书法欣赏" style=''>
                                        <span class='name'>"京城第一玩家"王世襄书法欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15912'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15912.html' title="湖社画会副会长惠均书法欣赏" style=''>
                                        <span class='name'>湖社画会副会长惠均书法欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15946'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15946.html' title="晚清官员、诗人陈曾寿书法欣赏" style=''>
                                        <span class='name'>晚清官员、诗人陈曾寿书法欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15844'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15844.html' title="吴徵书法《题朱耷数语》" style=''>
                                        <span class='name'>吴徵书法《题朱耷数语》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15918'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15918.html' title="宋伯鲁书法清和雅正含蓄之美" style=''>
                                        <span class='name'>宋伯鲁书法清和雅正含蓄之美</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class="ad151Style"></div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_32.html' title='硬笔书法'>
                            <em class='title'>硬笔书法</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_32.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16027'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16027.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/c807f-8478.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16027.html' style='' title='2020硬笔书法大赛特等奖、金奖、银奖作品'>
                                                    <span class='name'>2020硬笔书法大赛特等奖、金奖、银奖作品</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16027.html'>
                                                        <span class='note'>2020硬笔书法大赛特等奖、金奖、银奖作品“品翰堂杯”第六届中国硬笔书法公开赛，由中国硬笔书法在线主办，南通品翰堂文化传播有限公司承办。大赛自2019年8月25日征稿以来，共收到成人组1809人投稿的3104件作品，经过初评、复评、终评打分，评出特等奖5名，金奖10名，银奖20名...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='15321'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15321.html' title="2019全国硬笔书法大赛特等奖作品欣赏" style=''>
                                        <span class='name'>2019全国硬笔书法大赛特等奖作品欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15108'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15108.html' title="“品翰堂杯”第五届中国硬笔书法公开赛获奖作品欣赏" style=''>
                                        <span class='name'>“品翰堂杯”第五届中国硬笔书法公开赛获奖作品欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15014'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15014.html' title="四川省第二届硬笔书法大赛获奖作品" style=''>
                                        <span class='name'>四川省第二届硬笔书法大赛获奖作品</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14830'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14830.html' title="钢笔行书：红色中华第一证《补给证》" style=''>
                                        <span class='name'>钢笔行书：红色中华第一证《补给证》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14239'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14239.html' title="8090书艺组合硬笔书法作品网络展" style=''>
                                        <span class='name'>8090书艺组合硬笔书法作品网络展</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14130'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14130.html' title="来稿选刊 胡毅硬笔书法作品三幅" style=''>
                                        <span class='name'>来稿选刊 胡毅硬笔书法作品三幅</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14085'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14085.html' title="来稿选刊 冯皓硬笔楷书作品" style=''>
                                        <span class='name'>来稿选刊 冯皓硬笔楷书作品</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='13936'>
                                <h3 class='newsTitle'>
                                    <a href='./news/13936.html' title="品翰堂杯第三届中国硬笔书法大赛银奖作品" style=''>
                                        <span class='name'>品翰堂杯第三届中国硬笔书法大赛银奖作品</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class="ad152Style"></div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_148.html' title='篆刻作品'>
                            <em class='title'>篆刻作品</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_148.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='15238'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/15238.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/f3522-4680.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/15238.html' style='' title='《宣和集古印史》卷一：秦玺3枚、小玺33枚'>
                                                    <span class='name'>《宣和集古印史》卷一：秦玺3枚、小玺33枚</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/15238.html'>
                                                        <span class='note'>《宣和集古印史》为明代来行学摹刻的集古印谱。全书共八卷，分六十类，共存秦汉至隋唐官印一千五百余方，按官职大小排列，上起秦国玉玺，下至军曲候官等基层军官及蛮夷君王印，印下有释文、钮制及考证。 《宣和集古印史》卷一：秦玺第一，计三玺。 《宣和集古印史》卷一：小玺第二，计三十有三玺。 ...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='15171'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15171.html' title="福寿字句缂丝印章《宝典福书》" style=''>
                                        <span class='name'>福寿字句缂丝印章《宝典福书》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14761'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14761.html' title="清代鞠履厚篆刻艺术珍品《坤皋铁笔》" style=''>
                                        <span class='name'>清代鞠履厚篆刻艺术珍品《坤皋铁笔》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14544'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14544.html' title="清代篆刻《松雪堂印萃》第四册 美国馆藏" style=''>
                                        <span class='name'>清代篆刻《松雪堂印萃》第四册 美国馆藏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14545'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14545.html' title="清乾隆时期钤印本《松雪堂印萃》第三册" style=''>
                                        <span class='name'>清乾隆时期钤印本《松雪堂印萃》第三册</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14540'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14540.html' title="清代郭启翼篆刻《松雪堂印萃》第二册" style=''>
                                        <span class='name'>清代郭启翼篆刻《松雪堂印萃》第二册</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14536'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14536.html' title="《松雪堂印萃》第一册：百寿图印" style=''>
                                        <span class='name'>《松雪堂印萃》第一册：百寿图印</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14443'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14443.html' title="王睿章篆刻《醉爱居西厢百咏印赏》两册" style=''>
                                        <span class='name'>王睿章篆刻《醉爱居西厢百咏印赏》两册</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14235'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14235.html' title="全国第三届书法篆刻展览入展篆刻作品欣赏" style=''>
                                        <span class='name'>全国第三届书法篆刻展览入展篆刻作品欣赏</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class="ad153Style"></div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_153.html' title='书法展览'>
                            <em class='title'>书法展览</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_153.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16008'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16008.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/9763b-4400.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16008.html' style='' title='龙门石窟国际书法名家邀请展'>
                                                    <span class='name'>龙门石窟国际书法名家邀请展</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16008.html'>
                                                        <span class='note'>黄河明珠——龙门石窟国际书法名家邀请展主办单位：河南省文化和旅游厅河南省文学艺术界联合会洛阳市人民政府中国书法出版传媒有限责任公司承办单位：龙门石窟世界文化遗产园区管理委员会书法出版社《中国书法报》社《中国书法》杂志社河南省书法家协会洛阳市文学艺术界联合会协办单位：龙门石窟研究院...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='15783'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15783.html' title="无尽意--赵朴初书法艺术展（高清大图）" style=''>
                                        <span class='name'>无尽意--赵朴初书法艺术展（高清大图）</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15585'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15585.html' title="“防控疫情·万众一心”主题书法网络展" style=''>
                                        <span class='name'>“防控疫情·万众一心”主题书法网络展</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15554'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15554.html' title="第三届全国册页书法展入展作品选刊" style=''>
                                        <span class='name'>第三届全国册页书法展入展作品选刊</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15506'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15506.html' title="“景行维贤·启功作品展”字画欣赏" style=''>
                                        <span class='name'>“景行维贤·启功作品展”字画欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15427'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15427.html' title="首届“中国书法大厦杯”特等奖作品" style=''>
                                        <span class='name'>首届“中国书法大厦杯”特等奖作品</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15298'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15298.html' title="2019启功作品展书法选刊" style=''>
                                        <span class='name'>2019启功作品展书法选刊</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15267'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15267.html' title="2019中日书法名家交流展作品选刊" style=''>
                                        <span class='name'>2019中日书法名家交流展作品选刊</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15193'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15193.html' title="书之大者--杨守敬书法艺术展" style=''>
                                        <span class='name'>书之大者--杨守敬书法艺术展</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class="ad154Style"></div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_97.html' title='楷书字帖'>
                            <em class='title'>楷书字帖</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_97.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='15850'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/15850.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/0feca-9572.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/15850.html' style='' title='清代陈其锟小楷书法漫识（刻本）'>
                                                    <span class='name'>清代陈其锟小楷书法漫识（刻本）</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/15850.html'>
                                                        <span class='note'>陈其锟（生卒年不详），活动于清嘉庆、道光年间，字吾山，号棠溪，广东番禺人。道光六年（1826年）进士，以知县用，改礼部主事。遭父母之丧，归里不复出。主讲于羊城书院近30年。曾创议设义仓，嘉惠贫民。精鉴古，诗文、词皆博。工书法，直逼欧阳率更。有《陈礼部文集》及诗集等。隔日三帖絳刻列...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='15610'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15610.html' title="楷书集字《毛主席七律二首·送瘟神》" style=''>
                                        <span class='name'>楷书集字《毛主席七律二首·送瘟神》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15524'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15524.html' title="禇遂良楷书大字阴符经原色精印方格版" style=''>
                                        <span class='name'>禇遂良楷书大字阴符经原色精印方格版</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15439'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15439.html' title="楷书范本《林则徐临皇甫君碑》" style=''>
                                        <span class='name'>楷书范本《林则徐临皇甫君碑》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15213'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15213.html' title="高垲楷书《张太宜人节孝图》高清放大单字帖" style=''>
                                        <span class='name'>高垲楷书《张太宜人节孝图》高清放大单字帖</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15211'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15211.html' title="王铎唯一传世的柳体楷书《延寿寺碑》" style=''>
                                        <span class='name'>王铎唯一传世的柳体楷书《延寿寺碑》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15194'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15194.html' title="石韫玉楷书《太原张太宜人节孝事实记》" style=''>
                                        <span class='name'>石韫玉楷书《太原张太宜人节孝事实记》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15185'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15185.html' title="小楷字帖《为人民服务》" style=''>
                                        <span class='name'>小楷字帖《为人民服务》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15089'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15089.html' title="毛笔字技法：《赵子昂真书九十二法》" style=''>
                                        <span class='name'>毛笔字技法：《赵子昂真书九十二法》</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class="ad155Style">
                    <a href="https://weidian.com/?userid=901616491&amp;wfr=c" target="_blank">
                        <img border="0" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/b811e-6766.jpg" width="100%" /></a>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_141.html' title='行书字帖'>
                            <em class='title'>行书字帖</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_141.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16113'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16113.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/80f62-7350.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16113.html' style='' title='1.9亿赵孟頫《心经》高清单字米格版'>
                                                    <span class='name'>1.9亿赵孟頫《心经》高清单字米格版</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16113.html'>
                                                        <span class='note'>赵孟頫《般若波罗蜜多心经》，北京保利2017年最终以1.909亿元成交。借助高科技的力量，我们可以尽情领略赵孟頫的书法魅力。将单字放大差不多十倍后可以清楚看到，此册心经健骨丰筋，体态修长。整体几无败笔。...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='15852'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15852.html' title="赵孟頫书法集字《宋词》" style=''>
                                        <span class='name'>赵孟頫书法集字《宋词》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15851'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15851.html' title="赵孟頫书法集字《唐诗》" style=''>
                                        <span class='name'>赵孟頫书法集字《唐诗》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15784'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15784.html' title="赵孟頫书法集字《三字经》" style=''>
                                        <span class='name'>赵孟頫书法集字《三字经》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15699'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15699.html' title="成亲王行书《题王淑明听雨楼图卷》单字帖" style=''>
                                        <span class='name'>成亲王行书《题王淑明听雨楼图卷》单字帖</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15705'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15705.html' title="日本源君岳行书千字文（上下2册）" style=''>
                                        <span class='name'>日本源君岳行书千字文（上下2册）</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15698'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15698.html' title="成亲王《节录左太冲赋》手机版单字帖" style=''>
                                        <span class='name'>成亲王《节录左太冲赋》手机版单字帖</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15559'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15559.html' title="元代张畴斋行书《归去来兮辞》彩色放大本" style=''>
                                        <span class='name'>元代张畴斋行书《归去来兮辞》彩色放大本</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15017'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15017.html' title="赵孟頫行书集字元曲三首《天净沙·秋》" style=''>
                                        <span class='name'>赵孟頫行书集字元曲三首《天净沙·秋》</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class="ad156Style"></div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_142.html' title='草书字帖'>
                            <em class='title'>草书字帖</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_142.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='15951'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/15951.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/f4de4-4404.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/15951.html' style='' title='日本竜草庐书法《古草千字文》'>
                                                    <span class='name'>日本竜草庐书法《古草千字文》</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/15951.html'>
                                                        <span class='note'>日本竜草廬書《古草千文》，皇都書肆，今井菊秀軒跋，早稲田大学蔵書。龍草廬(1715-1792)，诗人、儒学者。...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='15945'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15945.html' title="祝允明草书《支山词翰》" style=''>
                                        <span class='name'>祝允明草书《支山词翰》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15626'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15626.html' title="蒋锡韩朱笔释文《孙过庭书谱》" style=''>
                                        <span class='name'>蒋锡韩朱笔释文《孙过庭书谱》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15609'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15609.html' title="王羲之家藏原本《草书要领》" style=''>
                                        <span class='name'>王羲之家藏原本《草书要领》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15508'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15508.html' title="赵孟頫38岁行草书《奉别帖》单字高清大图！" style=''>
                                        <span class='name'>赵孟頫38岁行草书《奉别帖》单字高清大图！</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15450'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15450.html' title="韩道亨草书《草诀百韵歌》附楷书释文" style=''>
                                        <span class='name'>韩道亨草书《草诀百韵歌》附楷书释文</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15216'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15216.html' title="元代鲜于伯机草书《唐韩昌黎石鼓歌》美国藏本" style=''>
                                        <span class='name'>元代鲜于伯机草书《唐韩昌黎石鼓歌》美国藏本</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15098'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15098.html' title="于右任小草书法墨迹册《第二次大战回忆歌》" style=''>
                                        <span class='name'>于右任小草书法墨迹册《第二次大战回忆歌》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15083'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15083.html' title="怀素书《大草千字文》明刊本" style=''>
                                        <span class='name'>怀素书《大草千字文》明刊本</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class="ad157Style"></div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_143.html' title='隶书字帖'>
                            <em class='title'>隶书字帖</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_143.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='15880'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/15880.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/9d1bf-3759.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/15880.html' style='' title='卢中南楷行隶三体成语字帖'>
                                                    <span class='name'>卢中南楷行隶三体成语字帖</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/15880.html'>
                                                        <span class='note'>《卢中南楷行隶三体成语》字帖该字帖是卢中南老师20年前的作品，可见到他少有的行书和隶书风采。卢中南，1950年生于武汉，祖籍河南济源。中国著名书法家，享受国务院政府特殊津贴。现为中国书法家协会理事、硬笔书法委员会副主任、楷书委员会委员，第十届、十一届全国政协委员，中国人民革命军事...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='15832'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15832.html' title="邓石如隶书《崔子玉座右铭》" style=''>
                                        <span class='name'>邓石如隶书《崔子玉座右铭》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15553'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15553.html' title="吴熙载篆书《魏武帝观沧海》" style=''>
                                        <span class='name'>吴熙载篆书《魏武帝观沧海》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15546'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15546.html' title="《隶书歌》集字版" style=''>
                                        <span class='name'>《隶书歌》集字版</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15244'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15244.html' title="清代钱泳攀云阁临汉碑《成阳灵台碑》" style=''>
                                        <span class='name'>清代钱泳攀云阁临汉碑《成阳灵台碑》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15042'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15042.html' title="刘炳森隶书古体诗词八首" style=''>
                                        <span class='name'>刘炳森隶书古体诗词八首</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14953'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14953.html' title="清代俞樾隶书《俞曲园马嘉桢传》" style=''>
                                        <span class='name'>清代俞樾隶书《俞曲园马嘉桢传》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14954'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14954.html' title="清代金石学家张廷济隶书《张叔未耽书图》" style=''>
                                        <span class='name'>清代金石学家张廷济隶书《张叔未耽书图》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14888'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14888.html' title="汉隶典范《史晨碑》集字古诗16首" style=''>
                                        <span class='name'>汉隶典范《史晨碑》集字古诗16首</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class="ad158Style"></div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_144.html' title='篆书字帖'>
                            <em class='title'>篆书字帖</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_144.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16012'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16012.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/dcd04-9478.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16012.html' style='' title='清代邓石如篆书荀子宥坐篇轴'>
                                                    <span class='name'>清代邓石如篆书荀子宥坐篇轴</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16012.html'>
                                                        <span class='note'>清代邓石如篆书荀子宥坐篇轴，纸本立轴，117x74厘米，故宫博物院藏。 邓石如篆书有多种面貌，早期谨守古法，中年后突破传统玉箸篆风格，融入金石铭文的特点，并掺入隶书笔法，具有婉丽圆劲、洒脱自如的风貌。 此作为邓石如早期篆书精品，深受秦《峄山碑》及唐李阳冰篆法影响，属传统玉箸篆范畴...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='15843'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15843.html' title="邓石如篆书朱晦盦为南康守四屏" style=''>
                                        <span class='name'>邓石如篆书朱晦盦为南康守四屏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15815'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15815.html' title="明代李东阳篆书七言诗2首" style=''>
                                        <span class='name'>明代李东阳篆书七言诗2首</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15237'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15237.html' title="清代杨沂孙篆书六条屏《乐志论》" style=''>
                                        <span class='name'>清代杨沂孙篆书六条屏《乐志论》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15235'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15235.html' title="清代邓石如篆书《般若波罗蜜多心经》高清字帖" style=''>
                                        <span class='name'>清代邓石如篆书《般若波罗蜜多心经》高清字帖</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15164'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15164.html' title="吴熙载篆书《张华励志诗四屏》" style=''>
                                        <span class='name'>吴熙载篆书《张华励志诗四屏》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15135'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15135.html' title="元代俞和48岁书《篆隶千字文册》" style=''>
                                        <span class='name'>元代俞和48岁书《篆隶千字文册》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15124'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15124.html' title="邓石如篆书7言联六则，写春联时可以参考" style=''>
                                        <span class='name'>邓石如篆书7言联六则，写春联时可以参考</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14763'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14763.html' title="吴昌硕篆书修震泽许塘记" style=''>
                                        <span class='name'>吴昌硕篆书修震泽许塘记</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class="ad159Style"></div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_145.html' title='钢笔字帖'>
                            <em class='title'>钢笔字帖</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_145.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='14341'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/14341.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/3b934-4664.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/14341.html' style='' title='任平钢笔行书字帖《初中生必背古文》'>
                                                    <span class='name'>任平钢笔行书字帖《初中生必背古文》</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/14341.html'>
                                                        <span class='note'>任平钢笔行书字帖《多功能初中生必背古文钢笔字帖》，浙江古籍出版社。扫描版钢笔书法图片84张。本字帖依据教育部最新制订的《语文课程标准》，推荐古文背诵篇目书写，篇目经典，书写漂亮。本字帖还有行书要领介绍，为读者提供理论指导。本书寓诗文学习和文意理解于书写练习中，使学生在书写练习的过...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='13734'>
                                <h3 class='newsTitle'>
                                    <a href='./news/13734.html' title="吴玉生钢笔行楷字帖《公务员汉字书写5500字》" style=''>
                                        <span class='name'>吴玉生钢笔行楷字帖《公务员汉字书写5500字》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='13735'>
                                <h3 class='newsTitle'>
                                    <a href='./news/13735.html' title="吴玉生行楷书法字帖《怎样写好写快规范字》" style='color:#0000ff;'>
                                        <span class='name'>吴玉生行楷书法字帖《怎样写好写快规范字》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='13626'>
                                <h3 class='newsTitle'>
                                    <a href='./news/13626.html' title="王正良著《中国钢笔书法教程》" style=''>
                                        <span class='name'>王正良著《中国钢笔书法教程》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='13565'>
                                <h3 class='newsTitle'>
                                    <a href='./news/13565.html' title="吴玉生硬笔行楷书字帖--无师自通学书法彩版" style='color:#0000ff;'>
                                        <span class='name'>吴玉生硬笔行楷书字帖--无师自通学书法彩版</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='13566'>
                                <h3 class='newsTitle'>
                                    <a href='./news/13566.html' title="硬笔书法丛书《硬笔草书入门》" style=''>
                                        <span class='name'>硬笔书法丛书《硬笔草书入门》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='13564'>
                                <h3 class='newsTitle'>
                                    <a href='./news/13564.html' title="钢笔行书入门教材" style=''>
                                        <span class='name'>钢笔行书入门教材</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='13543'>
                                <h3 class='newsTitle'>
                                    <a href='./news/13543.html' title="卢中南楷书《中国名联钢笔字帖》" style=''>
                                        <span class='name'>卢中南楷书《中国名联钢笔字帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='13485'>
                                <h3 class='newsTitle'>
                                    <a href='./news/13485.html' title="硬笔书法入门教程：基本笔画+行楷书法九课" style='color:#0000ff;'>
                                        <span class='name'>硬笔书法入门教程：基本笔画+行楷书法九课</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class="ad160Style">
                    <script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/culture/m/js/tuz2i.js"></script>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_134.html' title='书法长卷'>
                            <em class='title'>书法长卷</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_134.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16121'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16121.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/8e6e2-6715.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16121.html' style='' title='明代徐渭行草书诗词卷'>
                                                    <span class='name'>明代徐渭行草书诗词卷</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16121.html'>
                                                        <span class='note'>明代徐渭行草书诗词卷，绢本22.5×269厘米。此卷徐渭行草书诗词卷，有王翰《饮马长城窟行》、王维《洛阳女儿行》、沈佺期《古歌》与《古意》、李白《秋登巴陵望洞庭》、苏轼《蝶恋花·春景》。其内容与其他版本略有差异，苏轼词仅书下阙。此卷书法以行书为主，间有章草和今草。虽然篇章各异，...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16094'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16094.html' title="明代姚绶行书手卷《洛神赋并序》" style=''>
                                        <span class='name'>明代姚绶行书手卷《洛神赋并序》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16036'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16036.html' title="明代陈继儒书法长卷《苏轼帖卷》" style=''>
                                        <span class='name'>明代陈继儒书法长卷《苏轼帖卷》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16092'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16092.html' title="王铎48岁小楷《恭贺张老年伯荣寿卷》" style=''>
                                        <span class='name'>王铎48岁小楷《恭贺张老年伯荣寿卷》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16077'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16077.html' title="张瑞图草书手卷《何太复先生诗》" style=''>
                                        <span class='name'>张瑞图草书手卷《何太复先生诗》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16044'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16044.html' title="清代进士王澍楷书《岳阳楼记》" style=''>
                                        <span class='name'>清代进士王澍楷书《岳阳楼记》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16015'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16015.html' title="董其昌79岁行书临苏轼杂帖卷" style=''>
                                        <span class='name'>董其昌79岁行书临苏轼杂帖卷</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16000'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16000.html' title="文彭草书《追和云林先生江南春词三篇》" style=''>
                                        <span class='name'>文彭草书《追和云林先生江南春词三篇》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15950'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15950.html' title="祝允明57岁行草书琴赋卷" style=''>
                                        <span class='name'>祝允明57岁行草书琴赋卷</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_101.html' title='书法碑帖'>
                            <em class='title'>书法碑帖</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_101.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16154'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16154.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/b9322-7954.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16154.html' style='' title='清代关思亮集颜真卿书《医圣汉张仲景先生之碑》'>
                                                    <span class='name'>清代关思亮集颜真卿书《医圣汉张仲景先生之碑》</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16154.html'>
                                                        <span class='note'>清代关思亮集唐颜真卿书《医圣汉张仲景先生之碑》，碑文刻有中国明末清初进士桑芸撰述的祠墓记，文体采用唐代名书法家颜真卿之字体，约一千二百字。该碑由日本医家泷清于日本文政十年(1827年)募集百余名汉方医家出资而建立。 汉张仲景先生之碑，182x91x61厘米，日本东京都常泉寺藏。张...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16091'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16091.html' title="赵孟頫36岁、63岁《跋兰亭序》（日本藏）" style=''>
                                        <span class='name'>赵孟頫36岁、63岁《跋兰亭序》（日本藏）</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16119'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16119.html' title="宋代名僧洪觉范大字书法欣赏" style=''>
                                        <span class='name'>宋代名僧洪觉范大字书法欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16074'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16074.html' title="宋高宗御宝《付孟庚取还兰亭叙》" style=''>
                                        <span class='name'>宋高宗御宝《付孟庚取还兰亭叙》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16078'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16078.html' title="中国历史上身份最高的状元赵楷书法欣赏" style=''>
                                        <span class='name'>中国历史上身份最高的状元赵楷书法欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16072'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16072.html' title="秦桧书法拓本《都骑已临帖》+《别纸勤恳帖》" style=''>
                                        <span class='name'>秦桧书法拓本《都骑已临帖》+《别纸勤恳帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16005'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16005.html' title="“瘦金体之祖”薛曜书法《夏日游石淙诗并序》" style=''>
                                        <span class='name'>“瘦金体之祖”薛曜书法《夏日游石淙诗并序》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16006'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16006.html' title="唐代薛曜楷书《秋日宴石淙序》" style=''>
                                        <span class='name'>唐代薛曜楷书《秋日宴石淙序》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15976'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15976.html' title="宋名人法书神品册(日藏本)" style=''>
                                        <span class='name'>宋名人法书神品册(日藏本)</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_140.html' title='墓志塔铭'>
                            <em class='title'>墓志塔铭</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_140.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16076'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16076.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/fb850-3190.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16076.html' style='' title='魏碑楷书《魏司徒参军事元诱命妇冯氏志铭》'>
                                                    <span class='name'>魏碑楷书《魏司徒参军事元诱命妇冯氏志铭》</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16076.html'>
                                                        <span class='note'>《元诱妻墓志》，全称为《魏司徒参军事元诱命妇冯氏志铭》。北魏景明四年（公元503年）七月刻制。1923年出土于洛阳安驾沟。此墓志曾归于右任收藏。墓志高60厘米，宽52厘米，魏碑楷书，全志15行，每行18字，共计349字。该志保存完好，字口清晰，仅二三字损坏。 北魏元诱妻冯氏墓志铭...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16081'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16081.html' title="北魏楷书《北海王妃李元姜墓志铭》" style=''>
                                        <span class='name'>北魏楷书《北海王妃李元姜墓志铭》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16054'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16054.html' title="何绍基楷书《泉山墓表》" style=''>
                                        <span class='name'>何绍基楷书《泉山墓表》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16064'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16064.html' title="契丹文正书《辽道宗耶律洪基哀册》+《宣懿皇后哀册》" style=''>
                                        <span class='name'>契丹文正书《辽道宗耶律洪基哀册》+《宣懿皇后哀册》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16053'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16053.html' title="隋代寇仕璋撰并正书《姜敬亲墓志》" style=''>
                                        <span class='name'>隋代寇仕璋撰并正书《姜敬亲墓志》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16038'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16038.html' title="北魏正始四年《故徵士奚智墓志》" style=''>
                                        <span class='name'>北魏正始四年《故徵士奚智墓志》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16047'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16047.html' title="唐僧楷书欣赏《玄奘法师释迦佛造像记》" style=''>
                                        <span class='name'>唐僧楷书欣赏《玄奘法师释迦佛造像记》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16028'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16028.html' title="北魏正书《襄州刺史邹县男唐耀墓志》" style=''>
                                        <span class='name'>北魏正书《襄州刺史邹县男唐耀墓志》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16029'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16029.html' title="北魏书法石刻赏析《元腾墓志》" style=''>
                                        <span class='name'>北魏书法石刻赏析《元腾墓志》</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_156.html' title='兰亭集序'>
                            <em class='title'>兰亭集序</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_156.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16175'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16175.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/dcaa6-5330.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16175.html' style='' title='欧阳询(传)小行楷《玉枕兰亭》明拓本'>
                                                    <span class='name'>欧阳询(传)小行楷《玉枕兰亭》明拓本</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16175.html'>
                                                        <span class='note'>明拓玉枕兰亭，锦面，挖镶裱，蝴蝶装。二开半。墨纸半开半开纵12.5厘米，横6.8厘米。玉枕兰亭，系定武缩刻本。是本兰亭叙文二十八行，缩临犹不失真。许乃普题签“玉枕兰亭，苏斋藏本□□生寄赠”。关于玉枕兰亭传说颇多，有言贾秋壑得一石枕，光莹可爱，使廖莹中以灯影缩小法刻于灵壁石上，宛如...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16146'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16146.html' title="赵孟頫晚年行书临定武兰亭序卷" style=''>
                                        <span class='name'>赵孟頫晚年行书临定武兰亭序卷</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16089'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16089.html' title="赵孟頫款行书临定武兰亭序卷" style=''>
                                        <span class='name'>赵孟頫款行书临定武兰亭序卷</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16088'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16088.html' title="米芾临兰亭序《米海岳临晋王羲之稧帖》" style=''>
                                        <span class='name'>米芾临兰亭序《米海岳临晋王羲之稧帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16046'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16046.html' title="“淡墨翰林”王文治临兰亭序" style=''>
                                        <span class='name'>“淡墨翰林”王文治临兰亭序</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15725'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15725.html' title="元代陆继善鼠毫笔双钩《摹兰亭序帖》" style=''>
                                        <span class='name'>元代陆继善鼠毫笔双钩《摹兰亭序帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15693'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15693.html' title="清代书法家王澍临《兰亭序》" style=''>
                                        <span class='name'>清代书法家王澍临《兰亭序》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15692'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15692.html' title="祝允明行书《兰亭序》文徵明补图" style=''>
                                        <span class='name'>祝允明行书《兰亭序》文徵明补图</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15621'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15621.html' title="《兰亭八柱帖》第一册：虞世南摹兰亭序" style=''>
                                        <span class='name'>《兰亭八柱帖》第一册：虞世南摹兰亭序</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_139.html' title='苏黄米蔡'>
                            <em class='title'>苏黄米蔡</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_139.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16182'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16182.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/571fc-2323.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16182.html' style='' title='苏轼行书拓本《武昌西山赠邓圣求一首》'>
                                                    <span class='name'>苏轼行书拓本《武昌西山赠邓圣求一首》</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16182.html'>
                                                        <span class='note'>苏轼行书拓本《武昌西山赠邓圣求一首》，来源：御刻三希堂石渠宝笈法帖卷十。春江渌涨蒲萄醅，武昌官柳知谁栽。忆从樊口载春酒，步上西山寻野梅。西山一上十五里，风驾两腋飞崔嵬。同游困卧九曲岭，褰衣独到吴王台。中原北望在何许，但见落日低黄埃。归来解剑亭前路，苍崖半入...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16170'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16170.html' title="黄庭坚书法拓本《政慈惠帖》" style=''>
                                        <span class='name'>黄庭坚书法拓本《政慈惠帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16086'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16086.html' title="米黻书法《白云居米帖虎丘诗》" style=''>
                                        <span class='name'>米黻书法《白云居米帖虎丘诗》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16141'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16141.html' title="苏轼50岁行书《阳羡帖》旅顺博物馆镇馆之宝" style=''>
                                        <span class='name'>苏轼50岁行书《阳羡帖》旅顺博物馆镇馆之宝</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16125'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16125.html' title="米芾隶书《正六译金刚般若波罗蜜经序》" style=''>
                                        <span class='name'>米芾隶书《正六译金刚般若波罗蜜经序》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16085'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16085.html' title="米芾法书旧拓《陪杨次公游虎丘》" style=''>
                                        <span class='name'>米芾法书旧拓《陪杨次公游虎丘》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16079'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16079.html' title="北宋黄庭坚草书《熙宁初帖》" style=''>
                                        <span class='name'>北宋黄庭坚草书《熙宁初帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16080'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16080.html' title="黄庭坚44岁行楷书法《薄酒丑妇歌碑》" style=''>
                                        <span class='name'>黄庭坚44岁行楷书法《薄酒丑妇歌碑》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16073'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16073.html' title="米芾楷书题右军兰亭宴集序" style=''>
                                        <span class='name'>米芾楷书题右军兰亭宴集序</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_146.html' title='颜柳欧赵'>
                            <em class='title'>颜柳欧赵</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_146.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16173'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16173.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/f60b6-3850.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16173.html' style='' title='欧阳询81岁楷书《虞恭公温彦博碑》南宋拓本'>
                                                    <span class='name'>欧阳询81岁楷书《虞恭公温彦博碑》南宋拓本</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16173.html'>
                                                        <span class='note'>欧阳询81岁楷书《虞恭公温彦博碑》南宋拓本，27.8×28.0厘米。“帝嬀升历”之“历”字未损，“蔼蔼高门”之“高”字未损。石现存陕西礼泉昭陵博物馆。唐贞观十一年（637年）。岑文本撰，欧阳询书。整体平正清穆，虚和俊美，秀雅宕逸，用笔自然洒脱。...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16093'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16093.html' title="赵孟頫57岁书法两跋《定武兰亭序》" style=''>
                                        <span class='name'>赵孟頫57岁书法两跋《定武兰亭序》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16084'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16084.html' title="最新出土颜真卿38岁楷书《罗婉顺墓志》" style=''>
                                        <span class='name'>最新出土颜真卿38岁楷书《罗婉顺墓志》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16048'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16048.html' title="赵孟頫行书跋《赵大年江村秋晓图》" style=''>
                                        <span class='name'>赵孟頫行书跋《赵大年江村秋晓图》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16033'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16033.html' title="赵孟頫53岁书法题会昌九老图" style=''>
                                        <span class='name'>赵孟頫53岁书法题会昌九老图</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15972'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15972.html' title="赵孟頫行书跋苏轼《治平帖》" style=''>
                                        <span class='name'>赵孟頫行书跋苏轼《治平帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15853'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15853.html' title="赵孟頫行书题《大道帖》" style=''>
                                        <span class='name'>赵孟頫行书题《大道帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15841'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15841.html' title="欧阳询楷书集字《岳阳楼记》" style=''>
                                        <span class='name'>欧阳询楷书集字《岳阳楼记》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15690'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15690.html' title="赵孟頫66岁行书《得旨南还帖》" style=''>
                                        <span class='name'>赵孟頫66岁行书《得旨南还帖》</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_147.html' title='二王书法'>
                            <em class='title'>二王书法</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_147.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='15958'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/15958.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/e6cbe-8765.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/15958.html' style='' title='王献之草书刻本《复面帖》'>
                                                    <span class='name'>王献之草书刻本《复面帖》</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/15958.html'>
                                                        <span class='note'>王献之草书刻本《复面帖》，来源：明万历13年董汉策刊《二王帖卷》。 释文：復面悲積蕃首以不 佳耿耿僕近動散委 頓雖轉折猶惙 然發 止尚以未定日冀以言 居力還不復耳...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='15957'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15957.html' title="王献之草书刻本《领军帖》2种" style=''>
                                        <span class='name'>王献之草书刻本《领军帖》2种</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15822'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15822.html' title="书圣王羲之草书《十七帖》含朱文释文（美国藏）" style=''>
                                        <span class='name'>书圣王羲之草书《十七帖》含朱文释文（美国藏）</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15576'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15576.html' title="王羲之草书《天鼠帖》" style=''>
                                        <span class='name'>王羲之草书《天鼠帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15538'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15538.html' title="王羲之圣教序集字《弟子规》" style=''>
                                        <span class='name'>王羲之圣教序集字《弟子规》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15342'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15342.html' title="王献之行书拓本《余杭帖》3种" style=''>
                                        <span class='name'>王献之行书拓本《余杭帖》3种</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15179'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15179.html' title="王羲之草书赏析《敬豫帖》" style=''>
                                        <span class='name'>王羲之草书赏析《敬豫帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15094'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15094.html' title="王羲之草书《虞休帖》两版本" style=''>
                                        <span class='name'>王羲之草书《虞休帖》两版本</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14631'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14631.html' title="王羲之楷书欣赏《青李来禽帖》" style=''>
                                        <span class='name'>王羲之楷书欣赏《青李来禽帖》</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_155.html' title='明清书家'>
                            <em class='title'>明清书家</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_155.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16157'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16157.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/8e2d4-1148.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16157.html' style='' title='粤东大家罗天池书法欣赏'>
                                                    <span class='name'>粤东大家罗天池书法欣赏</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16157.html'>
                                                        <span class='note'>罗天池（1805—1866），名汝梅，字苹绍，号六湖，新会县棠下良溪（今属蓬江区）人。清道光六年（1826）进士，任刑部江苏司主事采访，改云南施西道任道台，因削职，后留职归粤住广州。精鉴赏，书法初学董其昌与米芾，后得南唐祖拓王羲之《澄清堂帖》而专攻；画则学米氏父子及董其昌、文征明...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16166'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16166.html' title="清代进士张锡庚小楷书法欣赏" style=''>
                                        <span class='name'>清代进士张锡庚小楷书法欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16169'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16169.html' title="张若霭21岁中进士，34岁病逝，遗留绝美小楷！" style=''>
                                        <span class='name'>张若霭21岁中进士，34岁病逝，遗留绝美小楷！</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16156'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16156.html' title="汀州知府李佐贤书法欣赏" style=''>
                                        <span class='name'>汀州知府李佐贤书法欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16171'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16171.html' title="清代朱耷行书《艺韫帖》作于冬至" style=''>
                                        <span class='name'>清代朱耷行书《艺韫帖》作于冬至</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16142'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16142.html' title="文徵明35岁小楷落花诗七律60首" style=''>
                                        <span class='name'>文徵明35岁小楷落花诗七律60首</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16144'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16144.html' title="文徵明86岁小楷册页《逍遥游》" style=''>
                                        <span class='name'>文徵明86岁小楷册页《逍遥游》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16129'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16129.html' title="宋濂小楷题欧阳修谱图序" style=''>
                                        <span class='name'>宋濂小楷题欧阳修谱图序</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16042'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16042.html' title="文徵明37岁小楷题吴镇画卷" style=''>
                                        <span class='name'>文徵明37岁小楷题吴镇画卷</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_76.html' title='书法题签'>
                            <em class='title'>书法题签</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_76.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16187'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16187.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/830fd-8080.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16187.html' style='' title='宋徽宗赵佶瘦金书《题李白上阳台帖》'>
                                                    <span class='name'>宋徽宗赵佶瘦金书《题李白上阳台帖》</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16187.html'>
                                                        <span class='note'>宋徽宗赵佶瘦金书《题李白上阳台帖》，北京故宫博物院藏。 赵佶瘦金书，极其工整秀雅，赵佶自身书画造诣极深，他如此推崇李白的行书，可见徽宗对李白书迹之膜拜。 宋徽宗赵佶题签：“唐李太白上陽臺”释文：太白尝作行书乘兴踏月西入酒家不觉人物两忘身在世外一帖字画飘逸豪气雄健乃知白不特以诗...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16189'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16189.html' title="杜本、王馀庆、危素书法题跋《上阳台帖》" style=''>
                                        <span class='name'>杜本、王馀庆、危素书法题跋《上阳台帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16155'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16155.html' title="明代周天球书法题识云西画卷" style=''>
                                        <span class='name'>明代周天球书法题识云西画卷</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16112'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16112.html' title="高凤翰行书题跋《张在辛赤壁赋书画卷》" style=''>
                                        <span class='name'>高凤翰行书题跋《张在辛赤壁赋书画卷》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16147'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16147.html' title="元代王蒙楷书跋赵孟頫兰亭序卷" style=''>
                                        <span class='name'>元代王蒙楷书跋赵孟頫兰亭序卷</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16082'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16082.html' title="宋代曾纡书法题跋春宴图卷" style=''>
                                        <span class='name'>宋代曾纡书法题跋春宴图卷</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16136'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16136.html' title="袁瑾等8人书法题跋欧阳修诗文稿卷" style=''>
                                        <span class='name'>袁瑾等8人书法题跋欧阳修诗文稿卷</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16103'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16103.html' title="豫园书画善会会长杨葆光81岁书法题跋" style=''>
                                        <span class='name'>豫园书画善会会长杨葆光81岁书法题跋</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16068'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16068.html' title="元代书画家倪瓒小楷题茂林远岫图" style=''>
                                        <span class='name'>元代书画家倪瓒小楷题茂林远岫图</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_112.html' title='名人手迹'>
                            <em class='title'>名人手迹</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_112.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16193'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16193.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/08fc8-8249.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16193.html' style='' title='赵之谦致赵曈书札册《撝翁墨妙》'>
                                                    <span class='name'>赵之谦致赵曈书札册《撝翁墨妙》</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16193.html'>
                                                        <span class='note'>赵之谦（1829—1884），字益甫，号撝叔，浙江绍兴人。青年时代即以才华横溢而名满海内。他是当时杰出的书画篆刻家。他的篆刻取法秦汉金石文字，取精用宏，形成自己独特的风格，人称“赵派”。 《撝翁墨妙》赵之谦致赵曈书札十八通及信封十四件，是赵之谦自同治元年末赴京参加会试及谋生，至同...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16190'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16190.html' title="乾隆帝御笔《元旦试笔》2幅" style=''>
                                        <span class='name'>乾隆帝御笔《元旦试笔》2幅</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16123'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16123.html' title="明代李攀龙书法《求志园为张伯起赋》" style=''>
                                        <span class='name'>明代李攀龙书法《求志园为张伯起赋》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16124'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16124.html' title="明代王世贞行书《求志园记》" style=''>
                                        <span class='name'>明代王世贞行书《求志园记》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16134'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16134.html' title="清代程元愈行书《杏花春雨楼诗跋》" style=''>
                                        <span class='name'>清代程元愈行书《杏花春雨楼诗跋》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15901'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15901.html' title="武状元行书尺牍《周虎书劄子》" style=''>
                                        <span class='name'>武状元行书尺牍《周虎书劄子》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16118'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16118.html' title="宋代朱敦儒书法《尘劳帖》+《暌索帖》" style=''>
                                        <span class='name'>宋代朱敦儒书法《尘劳帖》+《暌索帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16031'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16031.html' title="明朝太医吴讷书法墨迹残卷" style=''>
                                        <span class='name'>明朝太医吴讷书法墨迹残卷</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16055'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16055.html' title="何绍基手稿《何道洲晚岁诗稿》册" style=''>
                                        <span class='name'>何绍基手稿《何道洲晚岁诗稿》册</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_137.html' title='心经书法'>
                            <em class='title'>心经书法</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_137.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16186'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16186.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/b5458-8786.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16186.html' style='' title='文徵明83岁小楷心经（美国藏）'>
                                                    <span class='name'>文徵明83岁小楷心经（美国藏）</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16186.html'>
                                                        <span class='note'>文徵明(款)小楷心经，来源：明 仇英(款)观音像，美国弗利尔美术馆藏。 题作：般若波罗密多经，少一“心”字。文徵明与仇英题款分明是一个所写，故定为伪本。 嘉靖三十二年岁次癸丑浴佛敬书于停云馆中，长洲文徵明时年八十有三。...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16065'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16065.html' title="章柏年隶书《般若波罗蜜多心经》" style=''>
                                        <span class='name'>章柏年隶书《般若波罗蜜多心经》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15645'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15645.html' title="褚遂良楷书《心经》拓本" style=''>
                                        <span class='name'>褚遂良楷书《心经》拓本</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15493'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15493.html' title="郭明楷书《心经》2幅（高清大图）" style=''>
                                        <span class='name'>郭明楷书《心经》2幅（高清大图）</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15440'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15440.html' title="皇象章草《摩訶般若波罗蜜多心经》" style=''>
                                        <span class='name'>皇象章草《摩訶般若波罗蜜多心经》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15074'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15074.html' title="柳公权楷书集字《心经》2种" style=''>
                                        <span class='name'>柳公权楷书集字《心经》2种</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14878'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14878.html' title="颜真卿楷书集字《心经》" style=''>
                                        <span class='name'>颜真卿楷书集字《心经》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14837'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14837.html' title="《启功楷书心经》米字格版" style=''>
                                        <span class='name'>《启功楷书心经》米字格版</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14794'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14794.html' title="胡铁生80岁书法《般若波罗蜜多心经》" style=''>
                                        <span class='name'>胡铁生80岁书法《般若波罗蜜多心经》</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_154.html' title='书法专题'>
                            <em class='title'>书法专题</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_154.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16050'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16050.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/58799-9486.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16050.html' style='' title='日本日高秩夫书诸家汉诗帖'>
                                                    <span class='name'>日本日高秩夫书诸家汉诗帖</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16050.html'>
                                                        <span class='note'>日高秩夫書諸家漢詩帖 / 香雲居士秩父書, 明治26[1893年]，折本29cm，市島春城旧蔵，早稲田大学蔵書。...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='15986'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15986.html' title="日本卷菱湖书法《习字唐诗帖》" style=''>
                                        <span class='name'>日本卷菱湖书法《习字唐诗帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15968'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15968.html' title="日本长尾甲72岁书法题四时山水图" style=''>
                                        <span class='name'>日本长尾甲72岁书法题四时山水图</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15932'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15932.html' title="日本内藤虎书法《题米芾乐兄帖》" style=''>
                                        <span class='name'>日本内藤虎书法《题米芾乐兄帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15861'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15861.html' title="日本岩谷修《真书千字文》" style=''>
                                        <span class='name'>日本岩谷修《真书千字文》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15924'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15924.html' title="日本长尾甲书法《题米芾乐兄帖》" style=''>
                                        <span class='name'>日本长尾甲书法《题米芾乐兄帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15913'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15913.html' title="明代蔡羽书法扇面作品专辑" style=''>
                                        <span class='name'>明代蔡羽书法扇面作品专辑</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15888'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15888.html' title="日本岛津吉贵楷书《东大寺大佛宝殿碑》" style=''>
                                        <span class='name'>日本岛津吉贵楷书《东大寺大佛宝殿碑》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15864'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15864.html' title="日本高桥石斋楷书大字校正三字经" style=''>
                                        <span class='name'>日本高桥石斋楷书大字校正三字经</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_38.html' title='书法图书'>
                            <em class='title'>书法图书</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_38.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='15859'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/15859.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/ad2fc-3923.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/15859.html' style='' title='欧阳询正书《千字文》日本安永4年刻本'>
                                                    <span class='name'>欧阳询正书《千字文》日本安永4年刻本</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/15859.html'>
                                                        <span class='note'>欧陽詢書千字文冊，27cm，戯鴻堂法帖元本，日本橋北室町(東都) : 須原屋市兵衛, 安永4年[1775]翻刻，早稲田大学図書館藏。...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='15833'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15833.html' title="明代小楷《永乐大典》7078卷重写本" style=''>
                                        <span class='name'>明代小楷《永乐大典》7078卷重写本</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15541'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15541.html' title="王羲之圣教序集字《千字文》" style=''>
                                        <span class='name'>王羲之圣教序集字《千字文》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15426'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15426.html' title="王铎行书欣赏《王氏家谱》" style=''>
                                        <span class='name'>王铎行书欣赏《王氏家谱》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15423'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15423.html' title="王铎行书集字唐诗31首" style=''>
                                        <span class='name'>王铎行书集字唐诗31首</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15292'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15292.html' title="儿童启蒙识字读本《对相四言杂字》" style=''>
                                        <span class='name'>儿童启蒙识字读本《对相四言杂字》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15291'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15291.html' title="智永真草隶篆四体书千字文（日本藏）" style=''>
                                        <span class='name'>智永真草隶篆四体书千字文（日本藏）</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15268'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15268.html' title="钦定四库全书子部《珞琭子赋注》文澜阁抄本" style=''>
                                        <span class='name'>钦定四库全书子部《珞琭子赋注》文澜阁抄本</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15223'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15223.html' title="清末留日学生的诗文书法《鸿迹帖》第一册" style=''>
                                        <span class='name'>清末留日学生的诗文书法《鸿迹帖》第一册</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_120.html' title='理论知识'>
                            <em class='title'>理论知识</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_120.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsTabsContent' data-id='16143'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16143.html' title="2021牛年春联大全" style=''>
                                        <span class='name'>2021牛年春联大全</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15525'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15525.html' title="2020年（农历庚子鼠年）春联大全" style=''>
                                        <span class='name'>2020年（农历庚子鼠年）春联大全</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15149'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15149.html' title="常用通俗七言春联100对（附横批）" style=''>
                                        <span class='name'>常用通俗七言春联100对（附横批）</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15106'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15106.html' title="2019猪年春联30副（七字春联带横批）" style=''>
                                        <span class='name'>2019猪年春联30副（七字春联带横批）</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15053'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15053.html' title="黄惇：如何写好行书" style=''>
                                        <span class='name'>黄惇：如何写好行书</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14891'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14891.html' title="书法是文化，不是杂技" style=''>
                                        <span class='name'>书法是文化，不是杂技</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14498'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14498.html' title="2018狗年春联大全" style='color:#ff0000;'>
                                        <span class='name'>2018狗年春联大全</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='14481'>
                                <h3 class='newsTitle'>
                                    <a href='./news/14481.html' title="书画作品去污方法14种" style=''>
                                        <span class='name'>书画作品去污方法14种</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_157.html' title='书法空间'>
                            <em class='title'>书法空间</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_157.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16137'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16137.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/d606c-8943.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16137.html' style='' title='元代张雨行书《次韵天镜上人送柑诗帖》等'>
                                                    <span class='name'>元代张雨行书《次韵天镜上人送柑诗帖》等</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16137.html'>
                                                        <span class='note'>张雨（1283－1350），字伯雨，一字天雨，号句曲外史，浙江钱塘人。三十岁时入茅山为道士。六十岁弃去道服，埋葬冠剑，恢復儒者身份，往来江浙一带，与当地文学艺术家相与酬唱。他在文学修养与书法方面都有很高的造诣，在元代道教、佛教与文人间，颇负声望。张雨的书法曾得赵孟頫指授，字画清逸...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16183'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16183.html' title="启功临写《苏轼行书李白仙诗卷》" style=''>
                                        <span class='name'>启功临写《苏轼行书李白仙诗卷》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16181'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16181.html' title="启功行书临苏轼诗文帖《寒食帖+辩才帖》" style=''>
                                        <span class='name'>启功行书临苏轼诗文帖《寒食帖+辩才帖》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16158'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16158.html' title="赵孟頫(传)小楷《尚书洪范》" style=''>
                                        <span class='name'>赵孟頫(传)小楷《尚书洪范》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16164'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16164.html' title="文彭、吴宽、王宠跋《玉洞群仙图》" style=''>
                                        <span class='name'>文彭、吴宽、王宠跋《玉洞群仙图》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16090'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16090.html' title="祝允明题宗道藏赵松雪摹定武兰亭序" style=''>
                                        <span class='name'>祝允明题宗道藏赵松雪摹定武兰亭序</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16120'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16120.html' title="乌斯道小楷《咏梅十绝》" style=''>
                                        <span class='name'>乌斯道小楷《咏梅十绝》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16139'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16139.html' title="赵孟頫侄赵由宸、赵由儁书法" style=''>
                                        <span class='name'>赵孟頫侄赵由宸、赵由儁书法</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16151'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16151.html' title="苏轼长子苏迈书法墨迹2件" style=''>
                                        <span class='name'>苏轼长子苏迈书法墨迹2件</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_158.html' title='敦煌书法'>
                            <em class='title'>敦煌书法</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_158.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16162'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16162.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/31863-6780.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16162.html' style='' title='敦煌写经手稿《佛说延寿命经》'>
                                                    <span class='name'>敦煌写经手稿《佛说延寿命经》</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16162.html'>
                                                        <span class='note'>敦煌遗书--佛説延壽命經（原題）手稿，25.6×60.7厘米，法国国家图书馆藏，编号P2171。...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16160'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16160.html' title="敦煌写经手稿《佛说解百生怨家陀罗尼经》" style=''>
                                        <span class='name'>敦煌写经手稿《佛说解百生怨家陀罗尼经》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16159'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16159.html' title="敦煌写经手稿《佛说马有三相经》" style=''>
                                        <span class='name'>敦煌写经手稿《佛说马有三相经》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15996'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15996.html' title="敦煌小楷《太玄真一本际经卷第二》" style=''>
                                        <span class='name'>敦煌小楷《太玄真一本际经卷第二》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15922'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15922.html' title="六朝人写经墨宝《大方广佛华严经卷第三十一》" style='color:#ff0000;'>
                                        <span class='name'>六朝人写经墨宝《大方广佛华严经卷第三十一》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16003'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16003.html' title="敦煌遗书《优婆塞戒经卷第七灌顶经手稿》" style=''>
                                        <span class='name'>敦煌遗书《优婆塞戒经卷第七灌顶经手稿》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15993'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15993.html' title="唐代赵文审小楷写经精品《妙法莲花经》" style=''>
                                        <span class='name'>唐代赵文审小楷写经精品《妙法莲花经》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15975'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15975.html' title="敦煌书法：法华经七喻之髻珠喻" style=''>
                                        <span class='name'>敦煌书法：法华经七喻之髻珠喻</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15930'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15930.html' title="唐人写经《大般涅槃经卷第十五》(带签)" style=''>
                                        <span class='name'>唐人写经《大般涅槃经卷第十五》(带签)</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_159.html' title='传世字画'>
                            <em class='title'>传世字画</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_159.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16165'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16165.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/817ae-7098.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16165.html' style='' title='法国人王致诚绘《十骏马图》+《嵇璜书法十赞》'>
                                                    <span class='name'>法国人王致诚绘《十骏马图》+《嵇璜书法十赞》</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16165.html'>
                                                        <span class='note'>清代王致诚《十骏马图》册页十开，每幅24.2x29.1cm，北京故宫博物院藏。王致诚（1702—1768年）法国人。少从父学画，主攻油画人物肖像。后留学罗马，为天主教耶稣会传教士。清乾隆三年（1738年），王致诚来华供奉内廷，充任画师。 此册是法国画家王致诚惟一署有名款的存世作品...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16145'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16145.html' title="朱耷字画欣赏《八大山人诗画册》" style=''>
                                        <span class='name'>朱耷字画欣赏《八大山人诗画册》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16140'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16140.html' title="西泠印社镇馆之宝：《朱耷山水册》" style=''>
                                        <span class='name'>西泠印社镇馆之宝：《朱耷山水册》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16109'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16109.html' title="梁诗正等4位大臣书法题王原祁山水轴" style=''>
                                        <span class='name'>梁诗正等4位大臣书法题王原祁山水轴</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16001'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16001.html' title="董其昌行草书题瑶峰琪树图" style=''>
                                        <span class='name'>董其昌行草书题瑶峰琪树图</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16115'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16115.html' title="雪鸿书法题跋赵千里春江行舟图" style=''>
                                        <span class='name'>雪鸿书法题跋赵千里春江行舟图</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16095'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16095.html' title="米友仁《云山得意图》附书法题跋" style=''>
                                        <span class='name'>米友仁《云山得意图》附书法题跋</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16087'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16087.html' title="梁诗正书法《宝亲王长春居士题庐山瀑布图》" style=''>
                                        <span class='name'>梁诗正书法《宝亲王长春居士题庐山瀑布图》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16075'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16075.html' title="唐寅行书自题《桐山图》" style=''>
                                        <span class='name'>唐寅行书自题《桐山图》</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_161.html' title='高清书法'>
                            <em class='title'>高清书法</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_161.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16149'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16149.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/5d81c-6313.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16149.html' style='' title='清代帖学大家齐彦槐书法欣赏'>
                                                    <span class='name'>清代帖学大家齐彦槐书法欣赏</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16149.html'>
                                                        <span class='note'>齐彦槐(1774—1841)，字荫山，又字梦树，号梅麓，婺源冲田人。嘉庆十四年(1809年)进士。历官苏州同知。精鉴赏,工书法,长于天文。是清代著名的书法家、收藏家、科学家。他工书法，远宗晋唐，于宋、元、明、清诸家均有涉猎，亦精诗文及鉴赏，是清代中晚期一位颇有建树的帖学大家。...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16135'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16135.html' title="欧阳修行书诗文稿卷附南宋名臣周必大题跋" style=''>
                                        <span class='name'>欧阳修行书诗文稿卷附南宋名臣周必大题跋</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16131'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16131.html' title="元代泰不华40岁行楷书法高清单字欣赏" style=''>
                                        <span class='name'>元代泰不华40岁行楷书法高清单字欣赏</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16104'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16104.html' title="文徵明67岁行草书法力作《雪诗卷》" style=''>
                                        <span class='name'>文徵明67岁行草书法力作《雪诗卷》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16020'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16020.html' title="明代王鏊书法题倪瓒秋林野兴图" style=''>
                                        <span class='name'>明代王鏊书法题倪瓒秋林野兴图</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16040'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16040.html' title="明代李胤昌行书题《临李公麟饮中八仙图》" style=''>
                                        <span class='name'>明代李胤昌行书题《临李公麟饮中八仙图》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16014'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16014.html' title="鲜于枢行草书《奉酬约之见招》" style=''>
                                        <span class='name'>鲜于枢行草书《奉酬约之见招》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16024'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16024.html' title="董其昌78岁行书精品《白羽扇赋》高清单字" style=''>
                                        <span class='name'>董其昌78岁行书精品《白羽扇赋》高清单字</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16013'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16013.html' title="元代鲜于枢36岁行草书《示元度》" style=''>
                                        <span class='name'>元代鲜于枢36岁行草书《示元度》</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
                <div class='itemTitle active bodyActive'>
                    <span class='areaL'>
                        <a href='./news/list_162.html' title='投稿作品'>
                            <em class='title'>投稿作品</em></a>
                    </span>
                    <span class='areaR'>
                        <a href='./news/list_162.html' title='更多'>
                            <em class='active more'>
                                <cite class='icon'></cite>
                            </em>
                        </a>
                    </span>
                </div>
                <div class='itemContent newsListBox newsListStyle bodyActive '>
                    <ul>
                        <ul>
                            <li class='active newsImgCont' data-id='16172'>
                                <table cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td width='110'>
                                            <div class='imgArea'>
                                                <a href='./news/16172.html'>
                                                    <img src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/5bab2-4805.jpg' onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/culture/m/img/97a63-8488.gif';" /></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class='theme'>
                                                <a href='./news/16172.html' style='' title='范笑歌魏楷《千字文》选字欣赏'>
                                                    <span class='name'>范笑歌魏楷《千字文》选字欣赏</span></a>
                                                <div class='noteArea'>
                                                    <a href='./news/16172.html'>
                                                        <span class='note'>范笑歌魏楷《千字文》选字此作结构跌宕不羁、用笔刚劲有力，其中既有篆隶笔意，也有魏楷之风。好书法不只是摹写古人，还要有自己的风格，范笑歌先生此作就是自己的独特风格。...</span></a>
                                                </div>
                                            </div>
                                        </td>
                                </table>
                            </li>
                            <li class='active newsTabsContent' data-id='16127'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16127.html' title="范笑歌行书陆游诗二首" style=''>
                                        <span class='name'>范笑歌行书陆游诗二首</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='16059'>
                                <h3 class='newsTitle'>
                                    <a href='./news/16059.html' title="范笑歌小楷书法荀子《劝学》节选" style=''>
                                        <span class='name'>范笑歌小楷书法荀子《劝学》节选</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15992'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15992.html' title="李申书法作品选刊" style=''>
                                        <span class='name'>李申书法作品选刊</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15821'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15821.html' title="陈基忠书法作品选刊" style=''>
                                        <span class='name'>陈基忠书法作品选刊</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15623'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15623.html' title="来稿选刊：刘继林书法《郑板桥诗》" style=''>
                                        <span class='name'>来稿选刊：刘继林书法《郑板桥诗》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15523'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15523.html' title="范笑歌隶书屈原《湘君》" style=''>
                                        <span class='name'>范笑歌隶书屈原《湘君》</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15459'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15459.html' title="井海斟毛体书法作品选刊" style=''>
                                        <span class='name'>井海斟毛体书法作品选刊</span></a>
                                </h3>
                            </li>
                            <li class='active newsTabsContent' data-id='15444'>
                                <h3 class='newsTitle'>
                                    <a href='./news/15444.html' title="雄安新区赵博伟书法作品选刊" style=''>
                                        <span class='name'>雄安新区赵博伟书法作品选刊</span></a>
                                </h3>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class='clear'></div>
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
                            <a href='http://www.yac8.com/selWapPc.asp?go=pc&goUrl=http%3A%2F%2Fwww%2Eyac8%2Ecom%2F' title='电脑版'>【电脑版】</a>&nbsp;&nbsp;
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
                                <a href="./" title="首页">
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
<!-- html 2021-1-3 17:07:12[4320] -->
