<?php class Yii { public static function getAlias($var) { return "http://39.106.102.45/common/asset"; } } ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>【藏书单】美美与共</title>
<meta name="description" content="【藏书单】美美与共">
<meta name="keywords" content="【藏书单】美美与共">
<script>var site = {
        "admin": "https:\/\/admin.kongfz.com\/",
        "adminLogin": "https:\/\/admin.kongfz.com\/",
        "adminMessage": "https:\/\/messageadmin.kongfz.com\/",
        "adminPm": "https:\/\/pmadmin.kongfz.com\/",
        "adminUser": "https:\/\/useradmin.kongfz.com\/",
        "app": "http:\/\/app.kongfz.com\/",
        "appPush": "http:\/\/apppush.kongfz.com",
        "articleimg": "http:\/\/img0.kfzimg.com\/pmgs\/article_image\/",
        "auctionimg": "http:\/\/auctionimg.kongfz.com.cn\/",
        "book": "http:\/\/book.kongfz.com\/",
        "booklibadmin": "https:\/\/booklibadmin.kongfz.com\/",
        "booklibAdmin": "https:\/\/booklibadmin.kongfz.com\/",
        "booklib": "http:\/\/booklib.kongfz.com\/",
        "bq": "http:\/\/bq.kongfz.com\/",
        "cart": "http:\/\/cart.kongfz.com\/",
        "commonWebdav": "http:\/\/dav.kongfz.com\/",
        "cyx": "http:\/\/cyx.kongfz.cn\/",
        "dav": "http:\/\/dav.kongfz.com\/",
        "davUpload": "http:\/\/image-upload.kongfz.com",
        "s_davUpload": "https:\/\/image-upload.kongfz.com\/",
        "help": "http:\/\/help.kongfz.com\/",
        "shoushu": "http:\/\/shoushu.kongfz.com\/",
        "home": "http:\/\/www.kongfz.com\/",
        "hxtx": "http:\/\/hxtx.kongfz.cn\/",
        "imageupload": "http:\/\/image-upload.kongfz.com\/",
        "imgkey": "http:\/\/key.imgmanage.kongfz.com\/manage\/imgmgr_upload_getkey.php?type=book",
        "imgup": "http:\/\/imgmanage.kongfz.com\/manage\/imgmgr_service.php",
        "ims": "http:\/\/ims.kongfz.com\/",
        "itemadmin": "http:\/\/itemadmin.kongfz.com\/",
        "s_itemadmin": "https:\/\/itemadmin.kongfz.com\/",
        "item": "http:\/\/item.kongfz.com\/",
        "jiaocai": "http:\/\/jiaocai.kongfz.com\/",
        "kfzimg": "https:\/\/www.kfzimg.com\/",
        "kfzsearch": "http:\/\/kfzsearch.kongfz.com\/",
        "lib": "http:\/\/lib.kongfz.com\/",
        "library": "http:\/\/admin.zashuguan.cn\/",
        "m_app": "http:\/\/app.kongfz.com\/",
        "m_book": "http:\/\/mbook.kongfz.com\/",
        "mbook": "http:\/\/mbook.kongfz.com\/",
        "mbooklib": "http:\/\/booklib.kongfz.com\/",
        "m_booklib": "http:\/\/mbooklib.kongfz.com\/",
        "mbq": "http:\/\/mbq.kongfz.com\/",
        "messageAdmin": "https:\/\/messageadmin.kongfz.com\/",
        "message": "http:\/\/message.kongfz.com\/",
        "messageImgHost": "https:\/\/www.kfzimg.com\/",
        "messageImg": "https:\/\/www.kfzimg.com\/M00\/",
        "m_help": "http:\/\/mhelp.kongfz.com\/",
        "mhelp": "http:\/\/mhelp.kongfz.com\/",
        "m_message": "http:\/\/mmessage.kongfz.com\/",
        "mmessage": "http:\/\/mmessage.kongfz.com\/",
        "mmxj": "http:\/\/mmxj.kongfz.cn\/",
        "m_pm": "http:\/\/m.kongfz.cn\/",
        "mpm": "http:\/\/m.kongfz.cn\/",
        "m_res": "http:\/\/res.kongfz.com\/",
        "mres": "\/\/res2.kongfz.com\/",
        "m_search": "http:\/\/msearch.kongfz.com\/",
        "msearch": "http:\/\/msearch.kongfz.com\/",
        "m_shop": "http:\/\/mshop.kongfz.com\/",
        "mshop": "http:\/\/mshop.kongfz.com\/",
        "msite": "http:\/\/m.kongfz.com\/",
        "m_sms": "http:\/\/msms.kongfz.com\/",
        "m_tan": "http:\/\/mtan.kongfz.com\/",
        "m_union": "http:\/\/munion.kongfz.com\/",
        "m_user": "http:\/\/muser.kongfz.com\/",
        "muser": "http:\/\/muser.kongfz.com\/",
        "m_wuliu": "http:\/\/mwuliu.kongfz.com\/",
        "mwww": "https:\/\/m.kongfz.com\/",
        "m_www": "https:\/\/m.kongfz.com\/",
        "m_xiaoxi": "http:\/\/mxiaoxi.kongfz.com\/",
        "mxiaoxi": "http:\/\/mxiaoxi.kongfz.com\/",
        "m_xinyu": "http:\/\/mxinyu.kongfz.com\/",
        "mxinyu": "http:\/\/mxinyu.kongfz.com\/",
        "m_zixun": "http:\/\/mzixun.kongfz.com\/",
        "mzixun": "http:\/\/mzixun.kongfz.com\/",
        "onlinelogin": "https:\/\/login.kongfz.com\/",
        "operation": "http:\/\/operation.kongfz.com\/",
        "order": "http:\/\/order.kongfz.com\/",
        "order_interface": "http:\/\/order-service.kongfz.com\/",
        "order_service": "http:\/\/order_service.kongfz.com\/",
        "payAdmin": "https:\/\/payadmin.kongfz.com\/",
        "payAdminNew": "http:\/\/dbjadmin.kongfz.com\/",
        "pmAdmin": "https:\/\/pmadmin.kongfz.com\/",
        "pmgsAdmin": "https:\/\/pmgsadmin.kongfz.com\/",
        "pmgs": "http:\/\/pmgs.kongfz.com\/",
        "pm": "http:\/\/www.kongfz.cn\/",
        "pmimg": "\/\/img.kongfz.cn\/",
        "pmpush": "https:\/\/pmpush.kongfz.cn\/",
        "press": "http:\/\/www.kongfz.com\/",
        "product-service": "http:\/\/gateway.kongfz.com\/product-service\/",
        "productService": "http:\/\/gateway.kongfz.com\/product-service\/",
        "product-task": "http:\/\/gateway.kongfz.com\/product-task\/",
        "recommend": "http:\/\/recommend.kongfz.com\/",
        "res": "\/\/res.kongfz.com\/",
        "search": "http:\/\/search.kongfz.com\/",
        "searchnewimg": "https:\/\/www.kfzimg.com\/",
        "search-service": "http:\/\/gateway.kongfz.com\/search-service\/",
        "searchservice": "http:\/\/gateway.kongfz.com\/new-search-service\/",
        "searchService": "http:\/\/gateway.kongfz.com\/search-service\/",
        "newsearchservice": "http:\/\/gateway.kongfz.com\/new-search-service\/",
        "seller": "http:\/\/seller.kongfz.com\/",
        "service": "http:\/\/service.kongfz.com\/",
        "shequ": "http:\/\/www.gujiushu.com\/",
        "shequlogin": "http:\/\/login.gujiushu.com\/",
        "shopAdmin": "https:\/\/shopadmin.kongfz.com\/",
        "shop": "http:\/\/shop.kongfz.com\/",
        "shopimg": "\/\/www.kfzimg.com\/",
        "shop-service": "http:\/\/gateway.kongfz.com\/shop-service",
        "shufang": "http:\/\/shufang.kongfz.com\/",
        "shx": "http:\/\/shx.kongfz.cn\/",
        "sms": "http:\/\/sms.kongfz.com\/",
        "special": "http:\/\/www.kongfz.com\/",
        "sres": "https:\/\/res.kongfz.com\/",
        "store": "http:\/\/shop.kongfz.com\/",
        "study": "http:\/\/shufang.kongfz.com\/",
        "sysncsession": "http:\/\/login.kongfz.com\/",
        "tanAdmin": "https:\/\/shopadmin.kongfz.com\/",
        "tan": "http:\/\/tan.kongfz.com\/",
        "tanimg": "\/\/www.kfzimg.com\/",
        "tejiashu": "http:\/\/tejiashu.kongfz.com\/",
        "tg": "http:\/\/tg.kongfz.com\/",
        "tongji": "http:\/\/tongji.kongfz.com\/",
        "tousu2": "http:\/\/tousuv2.kongfz.com\/",
        "tousu": "http:\/\/tousu.kongfz.com\/",
        "union": "http:\/\/union.kongfz.com\/",
        "unionimg": "http:\/\/img0.kfzimg.com\/pmgs\/pre_show_pic\/",
        "userAdmin": "https:\/\/useradmin.kongfz.com\/",
        "userApi": "http:\/\/userapi.kongfz.com\/",
        "user": "http:\/\/user.kongfz.com\/",
        "verify": "http:\/\/verify.kongfz.com\/",
        "wuliu": "http:\/\/wuliu.kongfz.com\/",
        "www": "http:\/\/www.kongfz.com\/",
        "xiaoxi": "http:\/\/message.kongfz.com\/",
        "xinyu2": "http:\/\/xinyu2.kongfz.com\/",
        "xinyuapi": "http:\/\/xinyuapi.kongfz.com\/",
        "xinyuApi": "http:\/\/xinyuapi.kongfz.com\/",
        "xinyu": "http:\/\/xinyu.kongfz.com\/",
        "ygxp": "http:\/\/ygxp.kongfz.cn\/",
        "zashuguan": "http:\/\/www.zashuguan.cn\/",
        "zhuanti": "http:\/\/www.zashuguan.cn\/zhuanti\/",
        "zixun": "http:\/\/zixun.kongfz.com\/",
        "wechat": "https:\/\/wechat.kongfz.com\/",
        "express": "http:\/\/express.kongfz.com\/",
        "mtopic": "https:\/\/m.kongfz.com\/topic\/",
        "open": "https:\/\/open.kongfz.com\/",
        "bigdata": "http:\/\/bigdata.kongfz.com\/",
        "search-front": "http:\/\/search-front.kongfz.com\/",
        "carts": "https:\/\/cart.kongfz.com\/",
        "s_res": "https:\/\/res.kongfz.com\/",
        "s_res2": "https:\/\/res2.kongfz.com\/",
        "s_cart": "https:\/\/cart.kongfz.com\/",
        "s_user": "https:\/\/user.kongfz.com\/",
        "s_shop": "https:\/\/shop.kongfz.com\/",
        "s_library": "https:\/\/admin.zashuguan.cn\/",
        "s_zashuguan": "https:\/\/www.zashuguan.cn\/",
        "s_app": "https:\/\/app.kongfz.com\/",
        "s_bigdata": "https:\/\/bigdata.kongfz.com\/",
        "s_book": "https:\/\/book.kongfz.com\/",
        "s_mbook": "https:\/\/mbook.kongfz.com\/",
        "s_booklib": "https:\/\/booklib.kongfz.com\/",
        "s_seller": "https:\/\/seller.kongfz.com\/",
        "s_seller-operation": "https:\/\/seller-operation.kongfz.com\/",
        "s_download": "https:\/\/download.kongfz.com\/",
        "s_tan": "https:\/\/tan.kongfz.com\/",
        "s_bq": "https:\/\/bq.kongfz.com\/",
        "s_appdownload": "https:\/\/appdownload.kongfz.com\/",
        "s_app-package": "https:\/\/app-package.kongfz.com\/",
        "s_tj": "https:\/\/tj.kongfz.com\/",
        "s_cn_tj": "https:\/\/tj.kongfz.cn\/",
        "s_www": "https:\/\/www.kongfz.com\/",
        "s_promotion": "https:\/\/promotion.kongfz.com\/",
        "s_m": "https:\/\/m.kongfz.com\/",
        "s_mshop": "https:\/\/mshop.kongfz.com\/",
        "s_msearch": "https:\/\/msearch.kongfz.com\/",
        "s_muser": "https:\/\/muser.kongfz.com\/",
        "s_mpay": "https:\/\/mpay.kongfz.com\/",
        "mpays": "https:\/\/mpay.kongfz.com\/",
        "s_mbq": "https:\/\/mbq.kongfz.com\/",
        "s_search": "https:\/\/search.kongfz.com\/",
        "s_service": "https:\/\/service.kongfz.com\/",
        "s_qrcode": "https:\/\/qrcode.kongfz.com\/",
        "s_tousu": "https:\/\/tousu.kongfz.com\/",
        "s_help": "https:\/\/help.kongfz.com\/",
        "s_newhelp": "https:\/\/newhelp.kongfz.com\/",
        "s_jiaocai": "https:\/\/jiaocai.kongfz.com\/",
        "s_item": "https:\/\/item.kongfz.com\/",
        "s_imgmanage": "https:\/\/imgmanage.kongfz.com\/",
        "imgmanage": "http:\/\/imgmanage.kongfz.com\/",
        "s_upload": "https:\/\/upload.kongfz.com\/",
        "s_pmgs": "https:\/\/pmgs.kongfz.com\/",
        "s_pmgsadmin": "https:\/\/pmgsadmin.kongfz.com\/",
        "s_sms": "https:\/\/sms.kongfz.com\/",
        "s_order": "https:\/\/order.kongfz.com\/",
        "s_cn_cart": "https:\/\/cart.kongfz.cn\/",
        "s_message": "https:\/\/message.kongfz.com\/",
        "s_cn_message": "https:\/\/message.kongfz.cn\/",
        "s_mmessage": "https:\/\/mmessage.kongfz.com\/",
        "s_login": "https:\/\/login.kongfz.com\/",
        "s_cn_login": "https:\/\/login.kongfz.cn\/",
        "s_cn_user": "https:\/\/user.kongfz.cn\/",
        "s_xinyu": "https:\/\/xinyu.kongfz.com\/",
        "s_xinyuapi": "https:\/\/xinyuapi.kongfz.com\/",
        "s_pm": "https:\/\/www.kongfz.cn\/",
        "s_cn_download": "https:\/\/download.kongfz.cn\/",
        "s_mpm": "https:\/\/m.kongfz.cn\/",
        "s_static": "https:\/\/static.kongfz.com\/",
        "s_pay": "https:\/\/pay.kongfz.com\/",
        "s_express": "https:\/\/express.kongfz.com\/",
        "s_wechat": "https:\/\/wechat.kongfz.com\/",
        "s_img0": "https:\/\/img0.kfzimg.com\/",
        "s_user_img": "https:\/\/user.kfzimg.com\/",
        "s_shopimg": "https:\/\/www.kfzimg.com\/",
        "s_photo": "https:\/\/photo.kongfz.com\/",
        "s_video": "https:\/\/video.kongfz.com\/",
        "s_zsg_img": "https:\/\/zsg.kfzimg.com\/",
        "s_pmgs_img": "https:\/\/pmgs.kfzimg.com\/",
        "s_booklibimg": "https:\/\/booklibimg.kfzimg.com\/",
        "s_cn_img": "https:\/\/img.kongfz.cn\/",
        "s_kfzimg": "https:\/\/www.kfzimg.com\/",
        "s_image-upload": "https:\/\/image-upload.kongfz.com\/",
        "s_auth": "https:\/\/auth.kongfz.com\/",
        "s_open": "https:\/\/open.kongfz.com\/",
        "s_t": "https:\/\/t.kongfz.com\/",
        "t": "http:\/\/t.kongfz.com\/",
        "social": "https:\/\/t.kongfz.com\/",
        "s_social": "https:\/\/t.kongfz.com\/",
        "s_cn_seller": "https:\/\/seller.kongfz.cn\/",
        "s_shoushu": "https:\/\/shoushu.kongfz.com\/",
        "sub": "ws:\/\/sub.kongfz.com\/",
        "subs": "wss:\/\/sub.kongfz.com\/",
        "s_sub": "wss:\/\/sub.kongfz.com\/",
        "cn_sub": "ws:\/\/sub.kongfz.cn\/",
        "s_cn_sub": "wss:\/\/sub.kongfz.cn\/",
        "s_operation": "https:\/\/operation.kongfz.com\/",
        "kongpmsysncsession": "https:\/\/login.kongpm.com\/",
        "gateway": "http:\/\/gateway.kongfz.com\/",
        "img0": "http:\/\/img0.kfzimg.com\/",
        "wwws": "https:\/\/www.kongfz.com\/",
        "users": "https:\/\/user.kongfz.com\/",
        "orders": "https:\/\/order.kongfz.com\/",
        "searchs": "https:\/\/search.kongfz.com\/",
        "login": "https:\/\/login.kongfz.com\/",
        "messages": "https:\/\/message.kongfz.com\/",
        "im": "ws:\/\/im.kongfz.com\/",
        "s_im": "wss:\/\/im.kongfz.com\/",
        "pay": "https:\/\/pay.kongfz.com\/",
        "res2": "\/\/res2.kongfz.com\/",
        "userapi": "http:\/\/userapi.kongfz.com\/",
        "promotion": "http:\/\/promotion.kongfz.com\/",
        "promotions": "https:\/\/promotion.kongfz.com\/",
        "m": "https:\/\/m.kongfz.com\/",
        "mlogin": "https:\/\/mlogin.kongfz.com\/",
        "mpay": "https:\/\/mpay.kongfz.com\/",
        "mtousu": "http:\/\/mtousu.kongfz.com\/",
        "auctionimgcc": "http:\/\/auctionimg2.kongfz.cc\/",
        "img1": "http:\/\/img1.kongfz.com.cn\/",
        "img2": "http:\/\/img2.kongfz.com.cn\/",
        "booklibimg": "https:\/\/booklibimg.kfzimg.com\/",
        "img": "\/\/www.kfzimg.com\/",
        "imghome": "https:\/\/www.kfzimg.com\/",
        "user_img": "http:\/\/user.kfzimg.com\/",
        "img3": "http:\/\/img3.kfzimg.com\/",
        "img4": "http:\/\/img4.kfzimg.com\/",
        "img5": "http:\/\/img5.kfzimg.com\/",
        "img6": "http:\/\/img6.kfzimg.com\/",
        "img7": "http:\/\/img7.kfzimg.com\/",
        "img8": "http:\/\/img8.kfzimg.com\/",
        "img9": "http:\/\/img9.kfzimg.com\/"
    };</script>
<link rel="stylesheet" href="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/css/96e3a-1867.css"></head>

<body style="background-color: #FFFFFF;display: none">
<!--头部开始-->
<div class="wrap-head-box">
    <div class="wrap-head-nav">
        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/add03-9100.png" alt="" class="head-img">
        <span class="head-word">【藏书单】美美与共</span>
        <div class="wrap-head-message-all">
            <div class="message-num-head" style="display: none"></div>
            <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/c014c-2837.png" alt="" class="more-img"></div>
    </div>
</div>
<div class="mask" style="display: none"></div>
<div class="wrap-to-head" style="display: none">
    <div class="toIndex">
        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/3b46d-4588.png" alt="" class="top-img-head">
        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/6cf45-8793.png" alt="" class="top-img-search">
        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/7e15a-4645.png" alt="" class="top-img-close hhh"></div>
    <div class="wrap-mid fir">
        <div class="headlist">
            <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/d2288-8545.png" alt="" class="message">
            <div class="headlist-word">我的消息</div>
            <div class="message-num" style="display: none"></div>
        </div>
        <div class="headlist">
            <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/0bc42-4262.png" alt="" class="message">
            <div class="headlist-word">购物车</div>
            <div class="cart-num" style="display: none"></div>
        </div>
        <div class="headlist">
            <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/248e3-1456.png" alt="" class="personal">
            <div class="headlist-word">个人中心</div></div>
        <div class="headlist special">
            <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/70459-2893.png" alt="" class="personal">
            <div class="headlist-word">卖家中心</div></div>
    </div>
    <div class="wrap-mid">
        <div class="headlist">
            <div class="headlist-word common-left">我的订单</div></div>
        <div class="headlist">
            <div class="headlist-word common-left">我的拍卖交易</div></div>
        <div class="headlist">
            <div class="headlist-word common-left">我的竞拍</div></div>
        <div class="headlist">
            <div class="headlist-word common-left">资金账户</div></div>
        <div class="headlist special">
            <div class="headlist-word common-left">我的足迹</div></div>
    </div>
    <div class="wrap-mid last-item">
        <div class="headlist">
            <div class="headlist-word common-left">书店区</div></div>
        <div class="headlist">
            <div class="headlist-word common-left">在线拍卖</div></div>
        <div class="headlist">
            <div class="headlist-word common-left">资讯</div></div>
        <div class="headlist special">
            <div class="headlist-word common-left">社区</div></div>
    </div>
</div>
<!--头部结束-->
<!--窗格-->
<div class="wrap-all-content">
    <!--图片组件-->
    <div class="promotion_num" num="1">
        <!--一行1张堆墙-->
        <div class="wrap-mul-img miao" connect="1" style="">
            <div class="img-link img_one" blockPos="0" resPos="0" url="javascript:;">
                <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/c35dc-6747.jpg" alt="" style="height: 1.75rem"></div>
        </div>
    </div>
    <div class="wrap-uwrap-li-uncover-headl" style="position: relative">
        <div class="wrap-li-uncover-head" style="display: none">
            <div class="select-floor">选择楼层</div>
            <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/bcb02-5238.png" class="up" style="width:0.17rem;height:0.17rem" /></div>
        <ul class="wrap-li-uncover" style="display: none">
            <li>
                <span data-index="2">美术集</span></li>
            <li>
                <span data-index="3">摄影集</span></li>
            <li>
                <span data-index="4">美食集</span></li>
        </ul>
        <div class="wrap-ul">
            <ul class="wrap-li">
                <li>
                    <span data-index="2" class="header-link">美术集</span></li>
                <li>
                    <span data-index="3" class="header-link">摄影集</span></li>
                <li>
                    <span data-index="4" class="header-link">美食集</span></li>
            </ul>
            <div class="wrap-down">
                <div class="down">
                    <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/6c814-7993.png" alt="" style="width:0.17rem;height:0.17rem"></div>
            </div>
        </div>
    </div>
    <!--条目组件-->
    <div class="promotion_num" num="2">
        <!--文字标题-->
        <h3 connect="2" class="miao title-dis" style="color: #333333">美术集</h3>
        <!--一行一个列表卡-->
        <ul>
            <li class="second-item">
                <div class="hasFlex book-item" blockPos="1" resPos="0" isbn="9787508686660" itemName="中国美术史" itemId="62775409" url="https://m.kongfz.com/item/62775409">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/f8fbd-3065.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国美术史</div>
                        <div class="second-item-content">李霖灿 著/中信出版社/2018-06/软精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 128.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">16 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 15.80</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">10 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="1" isbn="9787501026500" itemName="张彦远和《历代名画记》" itemId="53390127" url="https://m.kongfz.com/item/53390127">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/094d7-3371.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">张彦远和《历代名画记》</div>
                        <div class="second-item-content">宿白 著/文物出版社/2008-12/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 17.60</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">75 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 22.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">13 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="2" isbn="9787208087552" itemName="重屏" itemId="59382689" url="https://m.kongfz.com/item/59382689">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a4c8b-4116.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">重屏：中国绘画中的媒材与再现</div>
                        <div class="second-item-content">[美]巫鸿 著；文丹 译；黄小峰 校/上海人民出版社/2009-12/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 68.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">8 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 60.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">22 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="3" isbn="9787108030108" itemName="隔江山色" itemId="58943697" url="https://m.kongfz.com/item/58943697">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/69462-4517.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">隔江山色：元代绘画（1279-1368）</div>
                        <div class="second-item-content">[美]高居翰 著；宋伟航 译/生活·读书·新知三联书店/2009-08/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 60.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">19 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 60.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">32 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="4" isbn="9787301294598" itemName="风格与世变：中国绘画十论" itemId="32960887" url="https://m.kongfz.com/item/32960887">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/dbfec-4644.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">风格与世变：中国绘画十论</div>
                        <div class="second-item-content">石守谦 著/北京大学出版社/2018-07/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 45.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">181 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 37.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">22 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="5" isbn="9787539931715" itemName="尔乔留给世界的" itemId="55416928" url="https://m.kongfz.com/item/55416928">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/c8de9-4460.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">尔乔留给世界的</div>
                        <div class="second-item-content">王玉北 著；王玉北 编/江苏文艺出版社/2009-04/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 9.75</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">15 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 5.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">6 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="6" isbn="9787805015354" itemName="巴洛克艺术" itemId="32475000" url="https://m.kongfz.com/item/32475000">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/b0e1c-5209.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">巴洛克艺术：人间剧场艺术品的世界</div>
                        <div class="second-item-content">[德]罗尔夫·托曼、[德]阿希姆·贝德诺兹、[德]巴巴拉·波隆加塞尔 著；李建群、赵晖 译/北京美术摄影出版社/2013-03/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 238.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">150 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 288.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">39 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="7" isbn="9787549586646" itemName="现代艺术150年：一个未完成的故事" itemId="64228595" url="https://m.kongfz.com/item/64228595">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/f48d8-8167.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">现代艺术150年：一个未完成的故事</div>
                        <div class="second-item-content">[英]威尔·贡培兹 著；王烁、王同乐 译/广西师范大学出版社/2017-03/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 28.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">293 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 25.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">92 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="8" isbn="9787539985565" itemName="世界美术名作二十讲(彩色典藏版)" itemId="53682542" url="https://m.kongfz.com/item/53682542">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/4ce5a-5365.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">世界美术名作二十讲(彩色典藏版)</div>
                        <div class="second-item-content">傅雷 著/江苏文艺出版社/2017-04/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 10.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">220 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 5.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">107 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="9" isbn="9787550282438" itemName="大都会艺术博物馆指南" itemId="59485217" url="https://m.kongfz.com/item/59485217">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/9693e-1646.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">大都会艺术博物馆指南</div>
                        <div class="second-item-content">美国大都会艺术博物馆 著；黄潇潇 译/北京联合出版公司/2016-08/软精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 59.34</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">128 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 40.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">31 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="10" isbn="9787806740651" itemName="伯里曼人体结构绘画教学" itemId="41464747" url="https://m.kongfz.com/item/41464747">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/44ce1-2806.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">伯里曼人体结构绘画教学</div>
                        <div class="second-item-content">[美]乔治·伯里曼 著/广西美术出版社/2012-10/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 17.90</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">69 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 0.22</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">1257 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="11" isbn="9787513317986" itemName="如何看懂印象派" itemId="56455536" url="https://m.kongfz.com/item/56455536">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a9886-4169.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">如何看懂印象派</div>
                        <div class="second-item-content">丰子恺 著/新星出版社/2015-09/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 260.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">4 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 117.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">40 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="12" isbn="9787108034892" itemName="发现教堂的艺术" itemId="51032718" url="https://m.kongfz.com/item/51032718">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/d25a3-7747.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">发现教堂的艺术：教堂的建筑、图像、符号与象征完全指南</div>
                        <div class="second-item-content">泰勒 著；李毓昭 译/生活·读书·新知三联书店/2010-11/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 198.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">1 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 96.80</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">34 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="13" isbn="9787108030191" itemName="山外山" itemId="35609113" url="https://m.kongfz.com/item/35609113">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/d879b-6639.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">山外山：晚明绘画（1570－1644）</div>
                        <div class="second-item-content">[美]高居翰 著；王嘉骥 译/生活·读书·新知三联书店/2009-08/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 25.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">112 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 20.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">76 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="14" isbn="9787563393794" itemName="中国美术史讲座" itemId="50575070" url="https://m.kongfz.com/item/50575070">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/0c3d5-1130.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国美术史讲座</div>
                        <div class="second-item-content">李霖灿 著/广西师范大学出版社/2010-01/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 220.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">6 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 198.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">16 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!--条目组件-->
    <div class="promotion_num" num="3">
        <!--文字标题-->
        <h3 connect="3" class="miao title-dis" style="color: #333333">摄影集</h3>
        <!--一行一个列表卡-->
        <ul>
            <li class="second-item">
                <div class="hasFlex book-item" blockPos="2" resPos="0" isbn="9787549555048" itemName="那一天" itemId="44522860" url="https://m.kongfz.com/item/44522860">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/1e5c6-2524.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">那一天</div>
                        <div class="second-item-content">[法]维利·罗尼 著；赵朝泉 译/广西师范大学出版社/2014-12/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 28.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">22 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 24.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">34 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="1" isbn="9787559602619" itemName="荒野之歌：国际野生生物摄影年赛精选" itemId="43292460" url="https://m.kongfz.com/item/43292460">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/3d478-5322.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">荒野之歌：国际野生生物摄影年赛精选</div>
                        <div class="second-item-content">[英]罗莎蒙德·基德曼·考克斯 著；钱卫 译/北京联合出版公司/2017-08/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 75.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">68 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 50.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">13 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="2" isbn="9787213064951" itemName="最后的耍猴人" itemId="68431940" url="https://m.kongfz.com/item/68431940">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/7795b-8095.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">最后的耍猴人</div>
                        <div class="second-item-content">马宏杰 著/浙江人民出版社/2015-03/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 39.80</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">14 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 32.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">53 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="3" isbn="9787559803375" itemName="失焦（第3版）" itemId="53628110" url="https://m.kongfz.com/item/53628110">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2212-3043.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">失焦（第3版）</div>
                        <div class="second-item-content">[匈牙利]罗伯特·卡帕 著；徐振锋 译/广西师范大学出版社/2017-10/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 23.92</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">163 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 16.88</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">40 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="4" isbn="9787549597383" itemName="不合理的行为（增订版） " itemId="36686697" url="https://m.kongfz.com/item/36686697">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/cca36-7285.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">不合理的行为（增订版）</div>
                        <div class="second-item-content">[英]唐·麦卡林 著；李文吉、施昀佑 译/广西师范大学出版社/2017-07/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 36.50</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">100 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 20.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">48 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="5" isbn="9787549596799" itemName="决斗写真论" itemId="52257791" url="https://m.kongfz.com/item/52257791">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/ef64e-3313.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">决斗写真论</div>
                        <div class="second-item-content">[日]筱山纪信、[日]中平卓马 著；黄亚纪 译/广西师范大学出版社/2017-05/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 41.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">141 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 38.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">29 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="6" isbn="9787513318792" itemName="读Reading" itemId="35492057" url="https://m.kongfz.com/item/35492057">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/e46af-4909.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">读Reading</div>
                        <div class="second-item-content">读库 编；玛格南图片社 摄影/新星出版社/2015-09/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 45.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">25 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 24.48</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">22 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="7" isbn="9787549515691" itemName="直到长出青苔" itemId="56458816" url="https://m.kongfz.com/item/56458816">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/1231c-6915.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">直到长出青苔</div>
                        <div class="second-item-content">[日]杉本博司 著；黄亚纪 译/广西师范大学出版社/2012-05/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 82.49</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">60 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 55.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">21 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="8" isbn="9787510088209" itemName="我见：马克&middot;吕布纪实经典" itemId="50458494" url="https://m.kongfz.com/item/50458494">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/75e96-6429.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">我见：马克&middot;吕布纪实经典</div>
                        <div class="second-item-content">[法]马克·吕布（Marc Riboud） 著/世界图书出版公司/2015-01/软精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 131.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">17 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 80.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">51 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="9" isbn="9787510842818" itemName="二十位人性见证者&mdash;&mdash;当代摄影大师（再版）" itemId="68460532" url="https://m.kongfz.com/item/68460532">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/340c6-2439.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">二十位人性见证者&mdash;&mdash;当代摄影大师（再版）</div>
                        <div class="second-item-content">阮义忠 著/九州出版社/2015-10/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 105.93</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">27 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 50.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">30 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="10" isbn="9787532750047" itemName="论摄影" itemId="26457430" url="https://m.kongfz.com/item/26457430">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2710-7030.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">论摄影：插图珍藏本</div>
                        <div class="second-item-content">[美]桑塔格 著；黄灿然 译/上海译文出版社/2010-05/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 20.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">250 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 10.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">113 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="11" isbn="9787550315242" itemName="理解一张照片：约翰&middot;伯格论摄影" itemId="53751710" url="https://m.kongfz.com/item/53751710">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/b3247-7499.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">理解一张照片：约翰&middot;伯格论摄影</div>
                        <div class="second-item-content">[英]约翰·伯格 著；任悦 译/中国美术学院出版社/2018-03/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 21.60</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">136 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 23.80</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">34 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="12" isbn="9787563345137" itemName="迎向灵光消逝的年代" itemId="51437246" url="https://m.kongfz.com/item/51437246">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/f08bd-7590.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">迎向灵光消逝的年代：本雅明论艺术</div>
                        <div class="second-item-content">[德]瓦尔特·本雅明 著；许绮玲、林志明 译/广西师范大学出版社/2004-08/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 118.80</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">3 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 20.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">40 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="13" isbn="9787511337283" itemName="都市速写簿" itemId="59179649" url="https://m.kongfz.com/item/59179649">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/b25f3-8484.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">都市速写簿</div>
                        <div class="second-item-content">阮义忠 著/中国华侨出版社/2013-09/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 35.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">2 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 12.80</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">23 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="14" isbn="9787511335937" itemName="失落的优雅" itemId="32457720" url="https://m.kongfz.com/item/32457720">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/23eb7-7158.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">失落的优雅</div>
                        <div class="second-item-content">阮义忠 编/中国华侨出版社/2013-05/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 7.96</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">11 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 5.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">44 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!--条目组件-->
    <div class="promotion_num" num="4">
        <!--文字标题-->
        <h3 connect="4" class="miao title-dis" style="color: #333333">美食集</h3>
        <!--一行一个列表卡-->
        <ul>
            <li class="second-item">
                <div class="hasFlex book-item" blockPos="3" resPos="0" isbn="9787549555321" itemName="四季便当" itemId="65427507" url="https://m.kongfz.com/item/65427507">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/993e6-2913.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">四季便当</div>
                        <div class="second-item-content">[日]吉井忍 著/广西师范大学出版社/2014-09/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 14.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">175 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 8.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">77 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="1" isbn="9787513319201" itemName="寿司之神" itemId="32466216" url="https://m.kongfz.com/item/32466216">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/02508-5871.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">寿司之神</div>
                        <div class="second-item-content">[日]里见真三 著；吕灵芝 译/新星出版社/2015-11/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 12.09</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">51 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 6.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">66 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="2" isbn="9787535672155" itemName="一日一果" itemId="32469112" url="https://m.kongfz.com/item/32469112">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/2dd9a-8193.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">一日一果</div>
                        <div class="second-item-content">[日]木村宗慎 著；蕾克 译/湖南美术出版社/2015-05/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 27.60</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">155 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 15.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">60 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="3" isbn="9787550235137" itemName="孤独的美食家" itemId="23449461" url="https://m.kongfz.com/item/23449461">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/9cf51-7807.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">孤独的美食家</div>
                        <div class="second-item-content">[日]久住昌之 著；冷婷 译；[日]谷口次郎 绘/北京联合出版公司/2015-01/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 18.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">5 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 23.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">15 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="4" isbn="9787539963761" itemName="做饭" itemId="56098880" url="https://m.kongfz.com/item/56098880">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/73adf-1289.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">做饭</div>
                        <div class="second-item-content">汪曾祺 著/江苏文艺出版社/2013-08/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 9.80</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">207 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 5.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">36 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="5" isbn="9787805749532" itemName="美食家" itemId="39385930" url="https://m.kongfz.com/item/39385930">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/ac7ff-2913.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">美食家</div>
                        <div class="second-item-content">陆文夫 编/古吴轩出版社/2005-06/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 32.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">6 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 9.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">36 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="6" isbn="9787530648964" itemName="食经（上下）" itemId="61551922" url="https://m.kongfz.com/item/61551922">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/0b2f9-3776.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">食经（上下）</div>
                        <div class="second-item-content">陈梦因 著/百花文艺出版社/2009-01/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 450.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">1 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 85.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">30 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="7" isbn="9787549527021" itemName="南北看" itemId="52621391" url="https://m.kongfz.com/item/52621391">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/70b24-4538.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">南北看：唐鲁孙作品02</div>
                        <div class="second-item-content">唐鲁孙 著/广西师范大学出版社/2013-01/精装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 14.75</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">50 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 9.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">17 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="8" isbn="9787559802019" itemName="穷中谈吃" itemId="31301240" url="https://m.kongfz.com/item/31301240">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/2d71b-5542.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">穷中谈吃</div>
                        <div class="second-item-content">舒国治 著/广西师范大学出版社/2017-11/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 19.10</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">109 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 15.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">30 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="9" isbn="9787108015235" itemName="老饕漫笔" itemId="44234572" url="https://m.kongfz.com/item/44234572">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/ec2dc-1156.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">老饕漫笔：近五十年饮馔摭忆</div>
                        <div class="second-item-content">赵珩 著/生活·读书·新知三联书店/2005-09/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 120.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">1 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 8.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">67 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="10" isbn="9787108023520" itemName="寒夜客来" itemId="53267663" url="https://m.kongfz.com/item/53267663">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/516c4-8399.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">寒夜客来：中国饮食文化散记之二</div>
                        <div class="second-item-content">逯耀东 著/生活·读书·新知三联书店/2005-12/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 59.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">5 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 25.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">54 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="11" isbn="9787508625201" itemName="江户的味道" itemId="22029861" url="https://m.kongfz.com/item/22029861">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/51c7f-8669.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">江户的味道</div>
                        <div class="second-item-content">[日]池波正太郎 著/中信出版集团，中信出版社/2018-03/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 9.99</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">86 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 11.76</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">20 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="12" isbn="9787108039842" itemName="贪食纪" itemId="68435620" url="https://m.kongfz.com/item/68435620">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/c1111-3938.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">贪食纪</div>
                        <div class="second-item-content">殳俏 著；龙荻 绘/生活·读书·新知三联书店/2012-08/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 9.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">201 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 4.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">70 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="13" isbn="9787108062666" itemName="欧阳应霁作品&middot;香港味道1：酒楼茶室精华极品" itemId="69421700" url="https://m.kongfz.com/item/69421700">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/8acd5-8534.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">欧阳应霁作品&middot;香港味道1：酒楼茶室精华极品</div>
                        <div class="second-item-content">欧阳应霁/生活.读书.新知三联书店/2018-08/其他</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 21.20</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">125 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 10.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">35 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="14" isbn="9787108063120" itemName="香港味道2（修订版）" itemId="32945895" url="https://m.kongfz.com/item/32945895">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/bd30c-6028.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">香港味道2（修订版）</div>
                        <div class="second-item-content">欧阳应霁 著/生活·读书·新知三联书店/2018-08/平装</div>
                        <div class="wrap-second-item-new-book">
                            <div class="second-item-new-book">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">新书</div>
                                    <div class="new-book-price">¥ 26.80</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">140 书店有售</div></div>
                            <div class="second-item-new-book-second">
                                <div class="second-item-new-book-left">
                                    <div class="new-book">旧书</div>
                                    <div class="new-book-price">¥ 20.00</div>
                                    <div class="new-book">起</div></div>
                                <div class="new-book-sell">25 书店有售</div></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="wrap-end">
        <div class="endline"></div>
        <div class="nomore">没有更多了</div>
        <div class="endline"></div>
    </div>
    <div class="goTop" style="display: none">
        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/d44ef-9723.png" alt="" class="top-img"></div>
    <div class="wrap-cart-success" style="display: none">
        <div class="cart-success">
            <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/f29db-5067.png" alt="" class="add-success-img">
            <div class="cart-success-word">加入购物车成功</div></div>
    </div>
    <div class="wrap-cart-fail" style="display: none">
        <div class="cart-success">
            <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/dd0fa-1588.png" alt="" class="add-success-img">
            <div class="cart-fail-word">加入购物车失败</div></div>
    </div>
</div>
<script src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/jweixin-1.3.2.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/swan-2.0.21.js"></script>
<script type="text/javascript">window.wxshare_data = {
        title: "【藏书单】美美与共",
        desc: "若要把感性的人变成理性的人，唯一的路径是先使他成为审美的人。",
        imgUrl: "https://img0.kfzimg.com/activity/0/c4/0c4209caa98a0f59e6bbad6f99f36638.jpg",
        url: "https://promotion.kongfz.com/promotion/mmyg_m/"
    };
    window.app_data = {
        title: "【藏书单】美美与共",
        desc: "若要把感性的人变成理性的人，唯一的路径是先使他成为审美的人。",
        img: "https://img0.kfzimg.com/activity/0/c4/0c4209caa98a0f59e6bbad6f99f36638.jpg",
        url: "https://promotion.kongfz.com/promotion/mmyg_m/"
    };
    window.social_data = {
        type: 'booklist',
        title: "【藏书单】美美与共",
        desc: "若要把感性的人变成理性的人，唯一的路径是先使他成为审美的人。",
        img: "https://img0.kfzimg.com/activity/0/c4/0c4209caa98a0f59e6bbad6f99f36638.jpg",
        url: "https://promotion.kongfz.com/promotion/mmyg_m/"
    };</script>
<!--seo百度自动推送开始-->
<script>(function() {
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        } else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();</script>
<!--seo百度自动推送结束-->
<!--统计-->
<script type="text/javascript">var pageUrl = "mmyg_m",
    layout = ["\u65e0", "\u7f8e\u672f\u96c6", "\u6444\u5f71\u96c6", "\u7f8e\u98df\u96c6"];</script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?33be6c04e0febc7531a1315c9594b136";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
<script src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/track.js"></script>
<script src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/js/activity_index_index_page-26c8d0e76f.js"></script>
</body>

</html>
