<?php class Yii { public static function getAlias($var) { return "http://39.106.102.45/filesys/spider/pages"; } } ?>
<!DOCTYPE html>
<html ng-app="searchShop" style="background:#fff;">

<head>
<title>民国旧书_古旧书籍及收藏品交易_孔夫子旧书网</title>
<meta content="民国旧书,古旧书,书籍,古籍,收藏品,收藏拼交易,孔夫子旧书" name="keywords">
<meta content="【孔夫子旧书网】民国旧书。拥有全国5万家网上书店，展示图书超过7千万种，国内最专业的古旧书籍交易与艺术收藏品在线拍卖平台，支持中介保护，100%交易安全。买书、卖书、开书店、收藏品拍卖，首选孔夫子旧书网。" name="description">
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no,email=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="canonical" href="https://book.kongfz.com/Cminguo/" />
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/css/30791-9370.css" />
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/css/4a1be-5562.css" />
<!-- <script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/m-reactive.js"></script> -->
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/78/m-reactive.js"></script>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/css/c7944-9668.css" />
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/css/022b9-5270.css" />
<script type="text/javascript">document.write('<s' + 'cript src="https://m.kongfz.com/shop/ajax/getmshopheader/?mt=' + Math.random() + '"></' + 'script>');</script>
<script type="text/javascript">window.PAGE || (window.PAGE = {});
    PAGE.search = {
        area: 'shop',
        value: '',
        cateId: '9',
        cateName: '民国旧书'
    }</script>
</head>

<body ng-controller="searchProduct">
<div id="download_btn" style="width: 99px;
height: 31px;
background: linear-gradient(to bottom right, #cc3c28, #b2100e);
border-bottom-left-radius: 15.5px;
border-top-left-radius: 15.5px;
line-height: 31px;
font-size: 12px;
font-weight: 500;
color: #fff;
position: fixed;
right: 0;
top: 25vh;
z-index:10;
padding-left: 10px;" ng-click="handleClickOpenApp()">在APP内打开
    <img class="download_icon" style="position: absolute;right: 6px;top: 9px;height: 10px;" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/5e34a-5739.png" /></div>
<!--列表搜索页-->
<div class="kfz-layout search_product">
    <div kfz-header url="/search/template/mobile2/common/header/search-header.html" search-word="" input-val=""></div>
    <div class="result_filter_bar_box">
        <section class="result_filter_bar">
            <div class="flex_box">
                <div data-bar="order" class="flex_box_item" ng-click="clickFilter('showOrder')">
                    <span id="orderBar">默认排序</span>
                    <span class="span_order s_icon_down"></span>
                </div>
                <div class="border"></div>
                <div data-bar="area" class="area flex_box_item" ng-click="clickFilter('showArea')">
                    <span id="area">所在地</span>
                    <span class="span_area s_icon_down"></span>
                </div>
                <div class="border border_02"></div>
                <div data-bar="input" class="input flex_box_item t_center" ng-click="clickFilter('showCatSelect')">
                    <span id="select">筛选</span>
                    <span class="span_cat s_icon_down"></span>&nbsp;&nbsp;</div>
                <div class="list_type c_gray6 iconfont icon-liebiao1" ng-click="change($event)"></div>
            </div>
        </section>
    </div>
    <div class="height_8_gray"></div>
    <section class="result_filter_box" style="display: none">
        <!--默认排序展开-->
        <div class="result_filter_box_order" ng-show="showOrder">
            <ul>
                <li class="now">
                    <a href="javascript:;" data-name="order" data-value="0" ng-click="eventFilterOrder('0')">默认排序</a>
                    <span class="icon_shop"></span>
                </li>
                <li>
                    <a href="javascript:;" data-name="order" data-value="1" ng-click="eventFilterOrder('1')">价格升序</a></li>
                <li>
                    <a href="javascript:;" data-name="order" data-value="2" ng-click="eventFilterOrder('2')">价格降序</a></li>
                <li>
                    <a href="javascript:;" data-name="order" data-value="3" ng-click="eventFilterOrder('3')">出版时间升序</a></li>
                <li>
                    <a href="javascript:;" data-name="order" data-value="4" ng-click="eventFilterOrder('4')">出版时间降序</a></li>
                <li>
                    <a href="javascript:;" data-name="order" data-value="5" ng-click="eventFilterOrder('5')">上书时间升序</a></li>
                <li>
                    <a href="javascript:;" data-name="order" data-value="6" ng-click="eventFilterOrder('6')">上书时间降序</a></li>
                <li>
                    <a href="javascript:;" data-name="order" data-value="7" ng-click="eventFilterOrder('7')">书店等级降序</a></li>
            </ul>
        </div>
        <!--所在地展开-->
        <div class="result_filter_box_area" ng-show="showArea">
            <div class="cat_option ">
                <div class="tit">卖家所在地</div>
                <div class="con clearfix">
                    <ul>
                        <li ng-click="eventArea($event)" data="" class="now">
                            <a href="javascript:;">
                                <p class="text1">不限</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="1000000000">
                            <a href="javascript:;" data-value="1000000000">
                                <p class="text1">北京市</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="2000000000">
                            <a href="javascript:;" data-value="2000000000">
                                <p class="text1">上海市</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="3000000000" style="margin-right:0px;">
                            <a href="javascript:;" data-value="3000000000">
                                <p class="text1">天津市</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="4000000000">
                            <a href="javascript:;" data-value="4000000000">
                                <p class="text1">重庆市</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="5000000000">
                            <a href="javascript:;" data-value="5000000000">
                                <p class="text1">安徽省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="6000000000">
                            <a href="javascript:;" data-value="6000000000">
                                <p class="text1">福建省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="7000000000" style="margin-right:0px;">
                            <a href="javascript:;" data-value="7000000000">
                                <p class="text1">甘肃省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="8000000000">
                            <a href="javascript:;" data-value="8000000000">
                                <p class="text1">广东省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="9000000000">
                            <a href="javascript:;" data-value="9000000000">
                                <p class="text1">广西</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="10000000000">
                            <a href="javascript:;" data-value="10000000000">
                                <p class="text1">贵州省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="11000000000" style="margin-right:0px;">
                            <a href="javascript:;" data-value="11000000000">
                                <p class="text1">海南省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="12000000000">
                            <a href="javascript:;" data-value="12000000000">
                                <p class="text1">河北省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="13000000000">
                            <a href="javascript:;" data-value="13000000000">
                                <p class="text1">河南省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="14000000000">
                            <a href="javascript:;" data-value="14000000000">
                                <p class="text1">黑龙江省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="15000000000" style="margin-right:0px;">
                            <a href="javascript:;" data-value="15000000000">
                                <p class="text1">湖北省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="16000000000">
                            <a href="javascript:;" data-value="16000000000">
                                <p class="text1">湖南省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="17000000000">
                            <a href="javascript:;" data-value="17000000000">
                                <p class="text1">吉林省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="18000000000">
                            <a href="javascript:;" data-value="18000000000">
                                <p class="text1">江苏省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="19000000000" style="margin-right:0px;">
                            <a href="javascript:;" data-value="19000000000">
                                <p class="text1">江西省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="20000000000">
                            <a href="javascript:;" data-value="20000000000">
                                <p class="text1">辽宁省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="21000000000">
                            <a href="javascript:;" data-value="21000000000">
                                <p class="text1">内蒙古</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="22000000000">
                            <a href="javascript:;" data-value="22000000000">
                                <p class="text1">宁夏</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="23000000000" style="margin-right:0px;">
                            <a href="javascript:;" data-value="23000000000">
                                <p class="text1">青海省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="24000000000">
                            <a href="javascript:;" data-value="24000000000">
                                <p class="text1">山东省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="25000000000">
                            <a href="javascript:;" data-value="25000000000">
                                <p class="text1">山西省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="26000000000">
                            <a href="javascript:;" data-value="26000000000">
                                <p class="text1">陕西省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="27000000000" style="margin-right:0px;">
                            <a href="javascript:;" data-value="27000000000">
                                <p class="text1">四川省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="28000000000">
                            <a href="javascript:;" data-value="28000000000">
                                <p class="text1">西藏</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="29000000000">
                            <a href="javascript:;" data-value="29000000000">
                                <p class="text1">新疆</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="30000000000">
                            <a href="javascript:;" data-value="30000000000">
                                <p class="text1">云南省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="31000000000" style="margin-right:0px;">
                            <a href="javascript:;" data-value="31000000000">
                                <p class="text1">浙江省</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="32000000000">
                            <a href="javascript:;" data-value="32000000000">
                                <p class="text1">澳门</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="33000000000">
                            <a href="javascript:;" data-value="33000000000">
                                <p class="text1">中国台湾</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="34000000000">
                            <a href="javascript:;" data-value="34000000000">
                                <p class="text1">香港</p></a>
                        </li>
                        <li ng-click="eventArea($event)" data="40000000000" style="margin-right:0px;">
                            <a href="javascript:;" data-value="40000000000">
                                <p class="text1">海外地区</p></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--筛选展开-->
        <div class="result_filter_box_select" ng-show="showCatSelect">
            <div class="cat_change_box_select flex_box">
                <div class="tit">您已选择</div>
                <div class="flex_box_item selectHref">
                    <a href="" type="1" class="selected">分类：民国旧书
                        <i class="icon_shop s_icon_close"></i></a>
                </div>
            </div>
            <div class="cat_option cat_price">
                <div class="tit">按价格筛选</div>
                <div class="con clearfix">
                    <span class="name">商品价格</span>
                    <input type="number" class="min_price" data-name="price" placeholder="最低价" ng-focus="inputFocus('$event')">—
                    <input type="number" class="max_price" data-name="price" placeholder="最高价" ng-focus="inputFocus('$event')">
                    <span class="submit" ng-click="eventPrice('$event')">确定</span></div>
            </div>
            <div class="cat_option">
                <div class="tit">分类浏览</div>
                <div class="con clearfix">
                    <ul>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9001/">
                                <p class="text1">小说</p>
                                <p class="text2">(16499)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9002/">
                                <p class="text1">文学</p>
                                <p class="text2">(140988)</p></a>
                        </li>
                        <li style="margin-right:0px;">
                            <a class="changeHttp" href="/Cminguo/cat_9003/">
                                <p class="text1">历史</p>
                                <p class="text2">(66051)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9004/">
                                <p class="text1">地理</p>
                                <p class="text2">(7276)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9005/">
                                <p class="text1">法律</p>
                                <p class="text2">(2424)</p></a>
                        </li>
                        <li style="margin-right:0px;">
                            <a class="changeHttp" href="/Cminguo/cat_9006/">
                                <p class="text1">军事</p>
                                <p class="text2">(8499)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9007/">
                                <p class="text1">经济</p>
                                <p class="text2">(7294)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9008/">
                                <p class="text1">艺术</p>
                                <p class="text2">(47275)</p></a>
                        </li>
                        <li style="margin-right:0px;">
                            <a class="changeHttp" href="/Cminguo/cat_9009/">
                                <p class="text1">童书</p>
                                <p class="text2">(2136)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9019/">
                                <p class="text1">生活</p>
                                <p class="text2">(6136)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9010/">
                                <p class="text1">教育</p>
                                <p class="text2">(33017)</p></a>
                        </li>
                        <li style="margin-right:0px;">
                            <a class="changeHttp" href="/Cminguo/cat_9011/">
                                <p class="text1">语言文字</p>
                                <p class="text2">(11231)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9012/">
                                <p class="text1">哲学心理学</p>
                                <p class="text2">(3780)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9013/">
                                <p class="text1">宗教</p>
                                <p class="text2">(5091)</p></a>
                        </li>
                        <li style="margin-right:0px;">
                            <a class="changeHttp" href="/Cminguo/cat_9014/">
                                <p class="text1">体育</p>
                                <p class="text2">(2293)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9015/">
                                <p class="text1">工程技术</p>
                                <p class="text2">(9830)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9016/">
                                <p class="text1">自然科学</p>
                                <p class="text2">(8510)</p></a>
                        </li>
                        <li style="margin-right:0px;">
                            <a class="changeHttp" href="/Cminguo/cat_9017/">
                                <p class="text1">医药卫生</p>
                                <p class="text2">(28886)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9018/">
                                <p class="text1">综合性图书</p>
                                <p class="text2">(37076)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9020/">
                                <p class="text1">管理</p>
                                <p class="text2">(857)</p></a>
                        </li>
                        <li style="margin-right:0px;">
                            <a class="changeHttp" href="/Cminguo/cat_9021/">
                                <p class="text1">社会文化</p>
                                <p class="text2">(20429)</p></a>
                        </li>
                        <li>
                            <a class="changeHttp" href="/Cminguo/cat_9022/">
                                <p class="text1">政治</p>
                                <p class="text2">(6964)</p></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--<div class="line_gray" style="display: block"></div>-->
    <section id="content">
        <!--列表-->
        <section class="product_list has_img" ng-show="isPHPRender">
            <div class="book_item" url="https://mbook.kongfz.com/12820/4038675393/">
                <a href="https://mbook.kongfz.com/12820/4038675393/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/60c70-2151.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">中国共产党年表</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">郑氏书社</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">150.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/12820/4038682953/">
                <a href="https://mbook.kongfz.com/12820/4038682953/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/7ea24-9928.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">中国共产党的三十年学习参考提纲</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">郑氏书社</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">100.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/27958/4038696691/">
                <a href="https://mbook.kongfz.com/27958/4038696691/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/084e4-2528.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">建设全国农业教育计划大纲</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">七五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">杂书世家</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">1120.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/20137/4038695645/">
                <a href="https://mbook.kongfz.com/20137/4038695645/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/cba28-4719.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">《宋拓定武本兰亭序》1933年北平故宫博物院印行， 大开本线装一册</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">六五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">天津文化书社</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">780.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/20137/4038691640/">
                <a href="https://mbook.kongfz.com/20137/4038691640/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/08085-9366.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">（英汉汉英）翻译举例</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">七品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">天津文化书社</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">25.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/200591/4038667392/">
                <a href="https://mbook.kongfz.com/200591/4038667392/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/ae711-5997.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">（日本侵华史料）《满洲建国十周年庆祝-满洲国国宝展览会目录》 现货包快递</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">雑雅斋</em>
                                <em class="levelbox ">(
                                    <span class="level">4星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">480.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/20137/4038687491/">
                <a href="https://mbook.kongfz.com/20137/4038687491/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/cfef9-3512.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">古文辞类纂 第2、3册合售</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">天津文化书社</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">120.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/20137/4038685139/">
                <a href="https://mbook.kongfz.com/20137/4038685139/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/788d7-7313.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">中西四书 【精装，1927年出版】</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">天津文化书社</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">300.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/8204/4038681772/">
                <a href="https://mbook.kongfz.com/8204/4038681772/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/ba90b-6802.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">钱南园书正气歌 民国版</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">六五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">红岩书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">200.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/12895/4038677829/">
                <a href="https://mbook.kongfz.com/12895/4038677829/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/99d92-6183.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">疑为木活字印刷的《初级小学国语常识课本第六册》</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">七品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">修竹书苑</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">68.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/27958/4038675548/">
                <a href="https://mbook.kongfz.com/27958/4038675548/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/3ecb5-8377.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">四川中心农事试验场：农艺科事业计划大纲</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">七五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">杂书世家</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">1200.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/1937/4038673834/">
                <a href="https://mbook.kongfz.com/1937/4038673834/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/dcd6e-8210.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">1940年中国北京印：佛经典籍 精装本一厚册 汉英对照 版画197页前有嘉庆戌辰秋和硕豫亲王裕丰敬刊</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">大华古籍书店</em>
                                <em class="levelbox long">(
                                    <span class="level">特色3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">28000.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/27958/4038657378/">
                <a href="https://mbook.kongfz.com/27958/4038657378/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/0656e-2246.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">南京金陵大学农林科售品目录</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">七五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">杂书世家</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">1250.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/434208/4038650178/">
                <a href="https://mbook.kongfz.com/434208/4038650178/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/f0ff0-3115.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国三十五年大连大众书店新人生观</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">真诚永久12345的书店</em>
                                <em class="levelbox ">(
                                    <span class="level">2钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">130.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/322775/4038648453/">
                <a href="https://mbook.kongfz.com/322775/4038648453/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/d4b39-4405.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">（中华民国三十三年五月十三日教育部批准发行）汉译斯盖倪三氏新解析几何学（中华民国三十三年十月十二版）</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">七五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">恒记书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">22.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/240656/4038647016/">
                <a href="https://mbook.kongfz.com/240656/4038647016/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/63dc3-5339.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">四言杂志</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">永宣书店</em>
                                <em class="levelbox ">(
                                    <span class="level">2钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">130.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/13649/4038639899/">
                <a href="https://mbook.kongfz.com/13649/4038639899/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/33007-6786.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">农村社会</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">九品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">咸阳古旧书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">500.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/563229/4038636972/">
                <a href="https://mbook.kongfz.com/563229/4038636972/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/0f60f-1949.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">伤寒微旨论 旅社备要方 两册一本 民国1914年 本人tb店名为：古海沉浮，欢迎各位书友来看！！！谢谢！！！</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">九品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">沈ying的书摊</em>
                                <em class="levelbox ">(
                                    <span class="level">1星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">700.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/171525/4038632826/">
                <a href="https://mbook.kongfz.com/171525/4038632826/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/eae57-9083.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国佛经：太上感应篇说咏全本，(内附：关胜帝君觉世真经）一篇</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">河北小伙的书摊</em>
                                <em class="levelbox ">(
                                    <span class="level">3星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">600.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/277649/4038562349/">
                <a href="https://mbook.kongfz.com/277649/4038562349/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/72e01-8921.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">安徽公共卫生学创始人，安徽医学院公共卫生学院，首任院长，第三届全国人大代表，中华医学会卫生学会理事、合肥分会主任蒋本沂先生旧藏 Anatomy of The Human Body（人体解剖学）自己翻译的书名，可能不准，具体还请买家自鉴，详情见商品品相描述，售出后不退不换</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">pz527的书摊</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">15000.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/12176/4038615316/">
                <a href="https://mbook.kongfz.com/12176/4038615316/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/31257-4398.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">密尔格拉得（原配护封）1953年</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">昌毅书店</em>
                                <em class="levelbox ">(
                                    <span class="level">2钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">155.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/22117/4038612448/">
                <a href="https://mbook.kongfz.com/22117/4038612448/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/4befc-3770.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国36年算命书《牙牌神数八种》</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">武陵山古旧书店</em>
                                <em class="levelbox ">(
                                    <span class="level">2钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">120.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/565253/4038608082/">
                <a href="https://mbook.kongfz.com/565253/4038608082/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/1ef6d-1344.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">实用中医内科学</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">七品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">书友kw3478214的书摊</em>
                                <em class="levelbox ">(
                                    <span class="level">1星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">28.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/17184/4038600538/">
                <a href="https://mbook.kongfz.com/17184/4038600538/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/82391-3788.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">精品 好事多磨</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">星照阁</em>
                                <em class="levelbox ">(
                                    <span class="level">1钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">1500.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/13244/2972112154/">
                <a href="https://mbook.kongfz.com/13244/2972112154/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/797ca-3255.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国十年版 应用武术体操</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">张庙书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">600.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/13244/2972110327/">
                <a href="https://mbook.kongfz.com/13244/2972110327/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/cee25-3076.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国二十六年五月：金城银行创立二十年纪念刊 精装</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">张庙书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">1800.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/13244/2972103662/">
                <a href="https://mbook.kongfz.com/13244/2972103662/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/bf2d4-9517.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国二十九年线装版 不费钱最真确之长寿法：近八品</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">七五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">张庙书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">500.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/13244/4038590381/">
                <a href="https://mbook.kongfz.com/13244/4038590381/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/230ea-9572.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国线装精校医宗金鉴外科：共十六卷 订成一册</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">张庙书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">260.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/13244/4038588651/">
                <a href="https://mbook.kongfz.com/13244/4038588651/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/24789-6814.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国七年版线装 重订验方新编：18卷全订成一册</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">张庙书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">600.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/13244/2972096081/">
                <a href="https://mbook.kongfz.com/13244/2972096081/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/33cf6-1805.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国三十五年版 普通新尺牍</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">张庙书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">60.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/171525/4038586684/">
                <a href="https://mbook.kongfz.com/171525/4038586684/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a14ac-6774.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国二十五年佛经：感应篇直讲</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">九五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">河北小伙的书摊</em>
                                <em class="levelbox ">(
                                    <span class="level">3星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">300.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/13244/2972093473/">
                <a href="https://mbook.kongfz.com/13244/2972093473/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/13057-5117.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国版 因是子游记</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">张庙书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">500.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/13244/4038584228/">
                <a href="https://mbook.kongfz.com/13244/4038584228/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/24ea6-4374.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国二十三年版《性的卫生》 一册全！性欲与人生！尤学周编</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">张庙书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">800.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/13244/2972091298/">
                <a href="https://mbook.kongfz.com/13244/2972091298/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/9638e-4681.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国三十八年版 婚姻生活指导</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">张庙书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">80.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/22117/4038575977/">
                <a href="https://mbook.kongfz.com/22117/4038575977/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/919c7-8537.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国语文教材，彩图</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">七五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">武陵山古旧书店</em>
                                <em class="levelbox ">(
                                    <span class="level">2钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">80.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/22117/4038562084/">
                <a href="https://mbook.kongfz.com/22117/4038562084/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/2d0a2-2753.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国30年《佛学研究十八篇》（上下全）</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">武陵山古旧书店</em>
                                <em class="levelbox ">(
                                    <span class="level">2钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">280.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/171525/4038561012/">
                <a href="https://mbook.kongfz.com/171525/4038561012/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/79019-9571.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国二十年佛经：佛祖心镫贯注 禅净双勖合编</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">九五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">河北小伙的书摊</em>
                                <em class="levelbox ">(
                                    <span class="level">3星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">280.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/20137/4038560836/">
                <a href="https://mbook.kongfz.com/20137/4038560836/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/94e85-2506.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">英语发音（开明青年英语丛书）</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">天津文化书社</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">15.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/20137/4038560398/">
                <a href="https://mbook.kongfz.com/20137/4038560398/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a6236-1676.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">开明青年英语丛书------英语图解法</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">天津文化书社</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">15.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/134381/4038540041/">
                <a href="https://mbook.kongfz.com/134381/4038540041/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/4580c-9611.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">正三元杨公祖师</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">九品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">五莲山 九仙山 画廊</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">800.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/14155/4038530883/">
                <a href="https://mbook.kongfz.com/14155/4038530883/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/ca0b2-7665.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">红色文献，，1949年郭化若，，在延安时期编写的(军事辩证法)。</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">合肥古旧书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">50.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/14155/4038520614/">
                <a href="https://mbook.kongfz.com/14155/4038520614/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/b8f85-5538.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">红色文献，，1949年版本，，我自已。</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">合肥古旧书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">30.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/14155/4038507385/">
                <a href="https://mbook.kongfz.com/14155/4038507385/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/3cbfd-2593.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">红色文献，，1949年山东解放区重改本，，大众哲学。</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">合肥古旧书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">50.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/22926/4038491743/">
                <a href="https://mbook.kongfz.com/22926/4038491743/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/e46fc-2440.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">法诵朗</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">节节高书斋</em>
                                <em class="levelbox ">(
                                    <span class="level">2星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">489.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/20825/4038464165/">
                <a href="https://mbook.kongfz.com/20825/4038464165/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/74db9-3442.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">题解中心 几何学辞典 索引</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">江淮古旧书店</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">30.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/3854/4038444376/">
                <a href="https://mbook.kongfz.com/3854/4038444376/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/2cd5f-5781.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">【包邮】品佳 开明第三英文读本//林语堂著...丰子恺绘 .民国25年8月出版 开明....</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">德林书铺</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">45.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/263490/4038439501/">
                <a href="https://mbook.kongfz.com/263490/4038439501/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/9ea7a-5673.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">国立复旦大学投考指南、毕业证书文献一组</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">九五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">潜跃山房</em>
                                <em class="levelbox ">(
                                    <span class="level">1星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">18000.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/428776/4038431609/">
                <a href="https://mbook.kongfz.com/428776/4038431609/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/f66b0-1875.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">基本国语（上册）</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">zhangjia1952的书摊</em>
                                <em class="levelbox ">(
                                    <span class="level">3星</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">80.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/24921/4038404285/">
                <a href="https://mbook.kongfz.com/24921/4038404285/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/b037b-5442.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item ">
                        <p class="book-box-con-name">民国二十七年四月初版/工学小丛书《暖气工程》陆警钟著</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八五品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">万达888古旧书屋</em>
                                <em class="levelbox ">(
                                    <span class="level">3钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">99.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm"></div>
            <div class="book_item" url="https://mbook.kongfz.com/201238/4038403083/">
                <a href="https://mbook.kongfz.com/201238/4038403083/" class="flex_box">
                    <div class="book_item_img">
                        <img class="imglazy" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/23a52-8507.jpg" kfz-img-err="/search/image/none.jpg"></div>
                    <div class="book-box-con flex_box_item last">
                        <p class="book-box-con-name">《鲒埼亭集》（九）</p>
                        <p class="m_t10 clearfix">
                            <span class="book-box-con-grey quality">八品</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">丰惠书香</em>
                                <em class="levelbox ">(
                                    <span class="level">2钻</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left">22.
                                <em>00</em></span>
                            <span class="book-box-con-grey date right">今日上书</span></p>
                    </div>
                </a>
            </div>
            <div class="line_gray_btm" style="display:none;"></div>
        </section>
        <!--异步渲染页面-->
        <section class="product_list" ng-show="isAsynRender">
            <div class="book_item" url="{{data.url}}" ng-click="clickItem($event)" ng-repeat="data in datas" ng-show="isImg">
                <a href="{{data.url}}" class="flex_box">
                    <!--kfz-img-err="/template/mobile2/common/images/none.png" -->
                    <div class="book_item_img">
                        <img ng-src="{{data.smallImg}}" class="imglazy" kfz-img-err="/shop/mobile2-0/common/images/none.png"></div>
                    <div class="book-box-con flex_box_item">
                        <p class="book-box-con-name" ng-bind-html="data.itemName | to_trusted"></p>
                        <p class="m_t10 clearfix m_t10_02">
                            <span class="book-box-con-grey quality">{{data.quality}}</span>
                            <span class="book-box-con-grey shopname right">
                                <em class="shop_name">{{data.shopName}}</em>
                                <em class="levelbox {if $productList[i].class.name eq '特色3钻'}long{/if}">(
                                    <span class="level">{{data.class.name}}</span>)</em></span>
                        </p>
                        <p class="m_t10 clearfix m_t10_01">
                            <em class="f_left price_red">￥</em>
                            <span class="book-box-con-red price f_left" ng-bind-html="data.price | to_trusted"></span>
                            <span class="book-box-con-grey date right">{{data.beginSaleTime1}}</span></p>
                    </div>
                </a>
            </div>
        </section>
        <div class="line_gray"></div>
        <div class="kfz_pager" ng-show="isShowPage" page="1" total="100">
            <a class="kfz_page_item prev_page grey changeHttp" href="javascript:;">上一页</a>
            <div class="border"></div>
            <div class="kfz_page_item show_page">
                <span class="bold">1</span>/
                <span>100</span></div>
            <div class="border"></div>
            <a class="kfz_page_item next_page changeHttp" href="/Cminguo/w2/">下一页</a></div>
        <div class="line_gray"></div>
        <footer class="kfz-footer" ng-show="footerStatus">
            <div class="footer_list">
                <a href="" ng-click="toLogin()" class="user_name">登录</a>
                <span class="gray_jg">|</span>
                <a href="https://m.kongfz.com/m/#/login/auth-signup" class="w1 registerUrl">注册</a>
                <span class="gray_jg">|</span>
                <a href="https://mmessage.kongfz.com/?type=chat#/customer" class="w2">客服留言</a>
                <span class="gray_jg">|</span>
                <a class="w3" href="https://book.kongfz.com/Cminguo/?force_pc=1">
                    <span>电脑版</span></a>
            </div>
            <div class="foot_btm">京ICP证041501 孔夫子旧书网</div></footer>
    </section>
    <div kfz-back-top url="/search/template/mobile2/common/back-top/back-top.html"></div>
</div>
<!--点击搜索框弹层-->
<div class="kfz-layout search_index" style="display: none">
    <section class="kfz-search-section">
        <div class="search_box">
            <div class="search_box_select">
                <a href="javascript:;" class="option" data-value="0">在售
                    <span class="s_icon_down arrow"></span></a>
            </div>
            <div class="search_box_input search_box_input2">
                <form action="javascript:;">
                    <input type="search">
                    <span id="tipText">请输入书名或者作者</span>
                    <i class="iconfont icon-guanbi2" style="display: none;"></i>
                </form>
            </div>
        </div>
        <a href="javascript:;" class="btn_cancel">取消</a>
        <div class="search_box_option" style="display:none">
            <a href="javascript:;" class="option" data-value="0">在售</a>
            <a href="javascript:;" class="option" data-value="1">已售</a>
            <a href="javascript:;" class="option" data-value="2">全部</a></div>
    </section>
    <header class="kfz-search-header">
        <a class="s_icon_goBack" href="javascript:;"></a>
        <div class="tab">
            <a href="javascript:;" class="tab_item now" data-area="shop">书店区</a>
            <a href="javascript:;" class="tab_item" data-area="pm">拍卖区</a>
            <a href="javascript:;" class="tab_item" data-area="dianpu">店铺</a></div>
    </header>
    <section class="kfz-con-section">
        <div id="search_history">
            <div class="search_history">
                <ul>
                    <li>历史搜索</li></ul>
                <ul class="history_item">
                    <li data-key="1">
                        <span class="icon_search s_icon_his"></span>1</li>
                    <li data-key="2">
                        <span class="icon_search s_icon_his"></span>2</li>
                    <li data-key="3">
                        <span class="icon_search s_icon_his"></span>33</li>
                </ul>
            </div>
            <div class="btn_clear_history">清空历史搜索</div></div>
    </section>
</div>
<!--弹层模板-->
<script type="text/template" id="template_search">< div class = "search_box" > <div class = "search_box_select" > <%
    if (model && model.area == 'shop') { % ><a href = "javascript:;"class = "option"data - value = "<%=model.value%>" > <%
        if (model.value == 0) { % >在售 < %
        } else if (model.value == 1) { % >已售 < %
        } else if (model.value == 2) { % >全部 < %
        } % ><span class = "s_icon_down arrow" > </span></a > <%
    } else if (model && model.area == 'pm') { % ><a href = "javascript:;"class = "option"data - value = "<%=model.value%>" > <%
        if (model.value == 0) { % >已结束 < %
        } else if (model.value == 1) { % >拍品名称 < %
        } else if (model.value == 2) { % >拍品昵称 < %
        } else if (model.value == 3) { % >拍品作者 < %
        } % ><span class = "s_icon_down arrow" > </span></a > <%
    } else if (model && model.area == 'dianpu') { % ><a href = "javascript:;"class = "option"data - value = "<%=model.value%>" > <%
        if (model.value == 0) { % >店铺名称 < %
        } else if (model.value == 1) { % >店主昵称 < %
        } % ><span class = "s_icon_down arrow" > </span></a > <%
    } % ></div>
<div class="search_box_input search_box_input2">
    <form action="javascript:;">
        <input type="search" value="<%=model.inputVal%>">
        <%if(model && model.area == 'shop'){%>
        <span id="tipText">请输入书名或作者进行查询</span > <%
} else if (model && model.area == 'pm') { % ><span id = "tipText" > 拍品名称、拍品作者、拍主昵称 < /span>
        <%}else if(model && model.area == 'dianpu'){%>
        <span id="tipText"><%=model.value&&model.value==1?'请输入店主昵称进行搜索':'请输入店铺名称进行搜索'%></span > <%
} % ><i class = "iconfont icon-guanbi2"style = "display:none;" > </i></form > </div>
<a href="javascript:;" class="btn_cancel">取消</a ></div>
<div class="search_box_option" style="display:none">
<span class="s_icon_up"></span > <%
if (model && model.area == 'shop') { % ><a href = "javascript:;"class = "option"data - value = "0" > 在售 < /a>
<a href="javascript:;" class="option" data-value ="1">已售</a > <a href = "javascript:;"class = "option"data - value = "2" > 全部 < /a>
<%}else if(model && model.area == 'pm'){%>
<a href="javascript:;" class="option" data-value ="1">拍品名称</a > <a href = "javascript:;"class = "option"data - value = "2" > 拍品作者 < /a>
<a href="javascript:;" class="option" data-value ="3">拍主昵称</a > <a href = "javascript:;"class = "option"data - value = "0" > 已结束拍卖 < /a>
<%}else if(model && model.area == 'dianpu'){%>
<a href="javascript:;" class="option" data-value ="0">店铺名称</a > <a href = "javascript:;"class = "option"data - value = "1" > 店主昵称 < /a>
<%}%></div > </script>
<script type="text/template" id="template_history_con">< %
    if (model && model.history && model.history.length) { % ><div id = "search_history" > <div class = "search_history" > <ul > <li > 历史搜索 < /li></ul > <ul class = "history_item" > <%model.history && $.each(model.history,
        function(k, v) { % ><li data - key = "<%=v%>" > <span class = "icon_search s_icon_his" > </span><%=v%></li > <%
        }); % ></ul></div > <div class = "btn_clear_history" > 清空历史搜索 < /div></div > <%
    } % ></script>
<script type="text/template" id="template_ass_con">< %
    if (model && model.ass && model.ass.length) { % ><div class = "search_ass"id = "search_ass" > <ul class = "ass_item" > <%model.ass && $.each(model.ass,
        function(k, v) { % ><li data - key = "<%=v%>" > <span class = "s_icon_ass" > </span><%=v%></li > <%
        }); % ></ul></div > <%
    } % ></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/zepto.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/angular.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/backtop.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/13/track.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/search_common.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/services.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/search_shop.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/jweixin-1.2.0.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/wxshare.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/tongji.js"></script>
</body>

</html>
