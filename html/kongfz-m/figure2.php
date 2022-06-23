<?php class Yii { public static function getAlias($var) { return "http://39.106.102.45/common/asset"; } } ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>【名家】钱穆</title>
<meta name="description" content="【名家】钱穆">
<meta name="keywords" content="【名家】钱穆">
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
        <span class="head-word">【名家】钱穆</span>
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
                <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/90fee-9645.jpg" alt="" style="height: 1.75rem"></div>
        </div>
    </div>
    <div class="wrap-uwrap-li-uncover-headl" style="position: relative">
        <div class="wrap-li-uncover-head" style="display: none">
            <div class="select-floor">选择楼层</div>
            <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/bcb02-5238.png" class="up" style="width:0.17rem;height:0.17rem" /></div>
        <ul class="wrap-li-uncover" style="display: none">
            <li>
                <span data-index="2">专著</span></li>
            <li>
                <span data-index="3">合集</span></li>
            <li>
                <span data-index="4">相关评论解读</span></li>
            <li>
                <span data-index="5">其他史学名家</span></li>
        </ul>
        <div class="wrap-ul">
            <ul class="wrap-li">
                <li>
                    <span data-index="2" class="header-link">专著</span></li>
                <li>
                    <span data-index="3" class="header-link">合集</span></li>
                <li>
                    <span data-index="4" class="header-link">相关评论解读</span></li>
                <li>
                    <span data-index="5" class="header-link">其他史学名家</span></li>
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
        <h3 connect="2" class="miao title-dis" style="color: #333333">专著</h3>
        <!--一行一个推荐卡-->
        <ul>
            <li class="second-item">
                <div class="hasFlex book-item" blockPos="1" resPos="0" isbn="9787510807091" itemName="论语文解" itemId="44541148" url="https://m.kongfz.com/item/44541148">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/e5a73-6181.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">论语文解</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-01/平装</div>
                        <div class="second-item-more-content">宾四先生正式著书之第一部。仿《马氏文通》论字法之例，以论句法，用《论语》文句为例，说明作文义法。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="1" isbn="9787510806988" itemName="阳明学述要" itemId="50402350" url="https://m.kongfz.com/item/50402350">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/9f0f0-3133.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">阳明学述要</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-01/平装</div>
                        <div class="second-item-more-content">原名《王守仁》，宾四先生唯一一本专门研究王阳明的学术著作。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="2" isbn="9787510809675" itemName="周公" itemId="32423880" url="https://m.kongfz.com/item/32423880">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/80d31-8638.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">周公</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">本书系摘译日人林泰甫著《周公与其时代》</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="3" isbn="9787100021999" itemName="國學概論" itemId="26424118" url="https://m.kongfz.com/item/26424118">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/60f7f-6688.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">國學概論</div>
                        <div class="second-item-content">钱穆 著/商务印书馆/2015-06/平装</div>
                        <div class="second-item-more-content">“国学，乃一时代之名词。”一本学习中国学术思想史的入门读物。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="4" isbn="9787510807053" itemName="墨子 惠施公孙龙" itemId="56396272" url="https://m.kongfz.com/item/56396272">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/6b350-3421.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">墨子 惠施公孙龙：錢穆先生全集</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-01/平装</div>
                        <div class="second-item-more-content">收入《墨子》和《惠施 公孙龙》两部作品，是钱穆先生对于先秦诸子墨家研究的主要成果。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="5" isbn="9787100044479" itemName="先秦诸子系年" itemId="29489271" url="https://m.kongfz.com/item/29489271">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/21bb7-4206.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">先秦诸子系年</div>
                        <div class="second-item-content">钱穆 著/商务印书馆/2015-10/平装</div>
                        <div class="second-item-more-content">经典之作，了解战国史、先秦诸子思想的必读书目。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="6" isbn="9787510807015" itemName="中国近三百年学术史" itemId="33203256" url="https://m.kongfz.com/item/33203256">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/e708c-5356.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国近三百年学术史</div>
                        <div class="second-item-content">钱穆/九州出版社/2011-01/其他</div>
                        <div class="second-item-more-content">钱穆先生三十年代在北大任教期间，所撰写的清代学术史的讲义。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="7" isbn="9787100017664" itemName="國史大綱（上下）" itemId="59583089" url="https://m.kongfz.com/item/59583089">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/ea038-4058.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">國史大綱（上下）</div>
                        <div class="second-item-content">錢穆 著/商务印书馆/1996-06/精装</div>
                        <div class="second-item-more-content">当信任何一国之国民，尤其是自称知识在水平线以上之国民，对其本国已往历史，应该略有所知。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="8" isbn="9787108032089" itemName="文化与教育" itemId="41434091" url="https://m.kongfz.com/item/41434091">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/4252b-3304.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">文化与教育</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2009-10/平装</div>
                        <div class="second-item-more-content">关于中国文化和教育的专论及演讲词。放在大视野下论文化与教育，探求改革之新路。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="9" isbn="9787510809781" itemName="政學私言" itemId="44048044" url="https://m.kongfz.com/item/44048044">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/6ce05-2539.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">政學私言</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">收钱穆先生时政论文诸篇。作者从中国历史文化传统出发，为理想中国的建立与复兴进行探索，范围包括政冶、社会、经济、法律、教育等诸方面。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="10" isbn="9787100016599" itemName="中国文化史导论" itemId="23424501" url="https://m.kongfz.com/item/23424501">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/5d35c-8045.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国文化史导论</div>
                        <div class="second-item-content">钱穆 著/商务印书馆/1994-06/平装</div>
                        <div class="second-item-more-content">钱先生对中西文化问题之商榷讨论屡有著作，而大体论点并无越出《中国文化史导论(修订本)》所提主要纲宗之外。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="11" isbn="9787510809828" itemName="中国历史精神" itemId="56462192" url="https://m.kongfz.com/item/56462192">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/6c5fc-4527.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国历史精神</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">讲述史学精神和史学方法、中国历史上的玫治、经济、国防、教育、地理与人物、道德精神等七大块内容，让读者得窥中国历史文化之堂奥</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="12" isbn="9787510807114" itemName="庄子纂笺" itemId="59425297" url="https://m.kongfz.com/item/59425297">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/b53b0-2919.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">庄子纂笺</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-01/平装</div>
                        <div class="second-item-more-content">钱穆先生是书除郭象注外，详采古今各家注，凡逾一百五十家，斟酌选择，调和决夺，得一妥适之正解。全部《庄子》一字一句，无不操心，且上下接续，皆可通释，宜为从古注书之上品。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="13" isbn="9787510812514" itemName="文化学大义" itemId="50372270" url="https://m.kongfz.com/item/50372270">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/276aa-3188.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">文化学大义</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2012-02/平装</div>
                        <div class="second-item-more-content">文化有三阶层、两类型、七要素，此为钱穆先生所建构的文化学的框架，也是贯穿本书的经脉。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="14" isbn="9787108063007" itemName="中国历代政治得失（精装）" itemId="32947079" url="https://m.kongfz.com/item/32947079">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/379a7-7954.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国历代政治得失（精装）</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2018-08/精装</div>
                        <div class="second-item-more-content">三联的精装版。本书是作者的专题演讲合集，分别就中国汉、唐、宋、明、清五代的种种政治制度作了提要勾玄的概观与比照，叙述因革演变，指陈利害得失。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="15" isbn="9787510814075" itemName="中国思想史" itemId="32483656" url="https://m.kongfz.com/item/32483656">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/bf883-8161.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国思想史</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2012-04/平装</div>
                        <div class="second-item-more-content">起自春秋中晚期，下迄现代，涵括了中国历代主要的思想家及其思想的要点，纲宗粗立，全部中国思想史的主要节目，已在其内。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="16" isbn="9787510806971" itemName="宋明理学概述" itemId="44475996" url="https://m.kongfz.com/item/44475996">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/1c0c1-7006.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">宋明理学概述</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-01/平装</div>
                        <div class="second-item-more-content">自宋学之兴起，下迄晚明遗老，分五十六目，将此六百年间理学发展衍变之迹，溯源穷流，作简明扼要之叙述。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="17" isbn="9787510807084" itemName="四书释义" itemId="59490337" url="https://m.kongfz.com/item/59490337">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/dec7f-9847.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">四书释义</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-01/平装</div>
                        <div class="second-item-more-content">分为《论语要略》、《孟子要略》、《大学中庸释义》三个部分，对“四书”做阐释与发挥。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="18" isbn="9787108020673" itemName="黄帝" itemId="65148403" url="https://m.kongfz.com/item/65148403">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/61ea9-5210.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">黄帝</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2005-03/平装</div>
                        <div class="second-item-more-content">可为初涉猎上古史者之入门书</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="19" isbn="9787108017192" itemName="中国思想通俗讲话" itemId="62774450" url="https://m.kongfz.com/item/62774450">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/ef970-3341.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国思想通俗讲话</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2005-07/平装</div>
                        <div class="second-item-more-content">从道理、性命、德行、气运出发，由此上溯全部中国思想史。阐述此诸观念诸名词之内在涵义、沿革流变，藉以描述出中国传统思想一大轮廓。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="20" isbn="9787108022400" itemName="国史新论" itemId="56521984" url="https://m.kongfz.com/item/56521984">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/ddb1b-1351.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">国史新论</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2005-02/平装</div>
                        <div class="second-item-more-content">共十四篇。每一论题，必分古今先后时代之不同，而提示其演变。而各篇著作有其共通之本源，则本之于当前社会之思潮。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="21" isbn="9787108032102" itemName="人生十论" itemId="59425777" url="https://m.kongfz.com/item/59425777">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/9ae66-5680.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">人生十论</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2009-09/平装</div>
                        <div class="second-item-more-content">汇集了作者讨论人生问题的三次讲演，一为“人生十论”，一为“人生三步骤”，一为“中国人生哲学”。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="22" isbn="9787510809606" itemName="秦漢史" itemId="53432991" url="https://m.kongfz.com/item/53432991">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/6c55b-4881.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">秦漢史：钱穆先生全集</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">新儒学大师牟宗三回忆：“讲殷周史以王国维为最好，讲秦汉史以钱宾四（钱穆）先生为最好。”</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="23" isbn="9787108022387" itemName="庄老通辨" itemId="30261671" url="https://m.kongfz.com/item/30261671">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/6b1f1-5982.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">庄老通辨</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2005-02/平装</div>
                        <div class="second-item-more-content">本书专为讨论庄、老两家之思想，而辩订其先后。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="24" isbn="9787510807480" itemName="學籥" itemId="50402782" url="https://m.kongfz.com/item/50402782">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/e695a-7741.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">學籥</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-05/平装</div>
                        <div class="second-item-more-content">本书系钱穆先生谈论为学之方法与门径的专门著述。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="25" isbn="9787100032421" itemName="两汉经学今古文平议" itemId="32446632" url="https://m.kongfz.com/item/32446632">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/395a1-5576.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">两汉经学今古文平议</div>
                        <div class="second-item-content">钱穆 著/商务印书馆/2001-07/平装</div>
                        <div class="second-item-more-content">全书收入了《刘向歆父子年谱》、《两汉博士家法考》、《孔子与春秋》和《周官著作时代考》四篇文章。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="26" isbn="9787108062925" itemName="钱穆作品精选：湖上闲思录（精装版）" itemId="48494797" url="https://m.kongfz.com/item/48494797">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/6b859-3277.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆作品精选：湖上闲思录（精装版）</div>
                        <div class="second-item-content">钱穆/生活.读书.新知三联书店/2018-08/精装</div>
                        <div class="second-item-more-content">就人文与自然、精神与物质、情与欲、理与气等项进行比较，抉隐发微，不尚空论，为治中国文化者所必当研读。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="27" isbn="9787510810121" itemName="民族与文化" itemId="23369141" url="https://m.kongfz.com/item/23369141">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/0dd30-1275.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">民族与文化</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">以"民族"和"文化"为主题，分析了两者之间的关系，并分别叙述了中华民族与中国文化的形成、融凝、前途，以及在此过程中所表现出的本质和特征。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="28" isbn="9787108015297" itemName="中国历史研究法" itemId="47636429" url="https://m.kongfz.com/item/47636429">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/38332-7899.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国历史研究法</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2005-03/平装</div>
                        <div class="second-item-more-content">从通史和文化史的总题及政治史、社会史、经济史、学术史、历史人物、历史地理等6个分题言简意赅地论述了中国历史研究的大意与方法。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="29" isbn="9787510810046" itemName="史记地名考（上下新校本）" itemId="61666162" url="https://m.kongfz.com/item/61666162">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/fb2aa-5640.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">史记地名考（上下新校本）</div>
                        <div class="second-item-content">钱穆/九州出版社/2011-07/其他</div>
                        <div class="second-item-more-content">本书内容包括：中国与四裔、上古地名、禹贡山水名、夏殷地名等内容，有助于了解先秦到今日之地名演变</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="30" isbn="9787510807107" itemName="论语新解" itemId="26427974" url="https://m.kongfz.com/item/26427974">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/b857f-8146.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">论语新解</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-01/平装</div>
                        <div class="second-item-more-content">汇集前人对《论语》的注疏、集解，力求融会贯通，“一以贯之”，再加上作者自己的理解予以重新阐释。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="31" isbn="9787510812354" itemName="中华文化十二讲" itemId="56506560" url="https://m.kongfz.com/item/56506560">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/991dc-6146.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中华文化十二讲</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2012-02/平装</div>
                        <div class="second-item-more-content">就人类生命全体之前途言，中国文化宜有其再现光辉与发扬之一日。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="32" isbn="9787510810077" itemName="钱穆先生全集：中国文化丛谈（新校本）" itemId="62539586" url="https://m.kongfz.com/item/62539586">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/ab1f7-6141.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆先生全集：中国文化丛谈（新校本）</div>
                        <div class="second-item-content">錢穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">作者二十年来有关中国文化问题之演讲共二十六篇，包括【中国民族之克难精神】及【人人必读书】两篇。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="33" isbn="9787510812651" itemName="钱穆先生著作系列（简体版）：中国文化精神（新校本）" itemId="29459607" url="https://m.kongfz.com/item/29459607">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/25c8b-8420.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆先生著作系列（简体版）：中国文化精神（新校本）</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2012-05/平装</div>
                        <div class="second-item-more-content">汇集了钱穆先生关于中国文化的讲演词。其中所谈内容，对于帮助人们形成正确的文化精神观念，具有重要的借鉴意义。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="34" isbn="9787510807008" itemName="朱子新学案" itemId="34136953" url="https://m.kongfz.com/item/34136953">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/1eac8-6191.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">朱子新学案</div>
                        <div class="second-item-content">钱穆/九州出版社/2011-01/其他</div>
                        <div class="second-item-more-content">全书共五册，自创始以溃于成，前后凡六年。为研究宋明理学以及中国学术史的经典之作。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="35" isbn="9787108017185" itemName="朱子学提纲" itemId="58808977" url="https://m.kongfz.com/item/58808977">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/b643f-1721.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">朱子学提纲</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2002-08/平装</div>
                        <div class="second-item-more-content">因念《朱子新学案》牵涉太广，篇幅过巨，于70年代初夏特撰《提纲》一篇，撮述书中要旨，并推广及于全部中国学术史。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="36" isbn="9787108062888" itemName="中国史学名著（精装）" itemId="41749754" url="https://m.kongfz.com/item/41749754">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/62533-5055.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国史学名著（精装）</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2018-08/精装</div>
                        <div class="second-item-more-content">一本简明的史学史著作，在讲座的基础上写成，扼要介绍了从《尚书》、《春秋》到《文史通义》的二十多部中国史学名著。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="37" isbn="9787510810053" itemName="理学六家诗钞" itemId="68513524" url="https://m.kongfz.com/item/68513524">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/e6ba7-5391.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">理学六家诗钞：錢穆先生全集</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">此书乃先生于宋、明、清三代，专取邵康节、朱晦庵、陈白沙、王阳明、高景逸、陆桴亭六家诗，每家钞逾百首。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="38" isbn="9787510807022" itemName="孔子与论语" itemId="47505181" url="https://m.kongfz.com/item/47505181">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/48eac-1617.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">孔子与论语</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-01/平装</div>
                        <div class="second-item-more-content">这本书可以指导大家如何读《论语》，领悟其中的哲学智慧。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="39" isbn="9787108022394" itemName="孔子传" itemId="53289759" url="https://m.kongfz.com/item/53289759">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/28d06-6568.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">孔子传</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2005-02/平装</div>
                        <div class="second-item-more-content">本书综合司马迁以下各家考所订所得，重为孔子作传。其最大宗旨，乃在孔子之为人，即其所自述所谓“学不厌、教不倦”者。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="40" isbn="9787510807503" itemName="中国学术通义" itemId="65484083" url="https://m.kongfz.com/item/65484083">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/158d7-1352.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国学术通义</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-05/平装</div>
                        <div class="second-item-more-content">先生以为中国学术之必有其独特性，亦如中国传统文化之有其独特性，两者相关，不可分割。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="41" isbn="9787510810039" itemName="灵魂与心" itemId="62521074" url="https://m.kongfz.com/item/62521074">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/c5bde-6843.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">灵魂与心：钱穆先生全集</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">人有灵魂与否，至今不可知。然人各有心，则各自反躬抚膺可知。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="42" isbn="9787510810206" itemName="钱穆先生全集（繁体版）：世界局势与中国文化" itemId="23505109" url="https://m.kongfz.com/item/23505109">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/81494-1617.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆先生全集（繁体版）：世界局势与中国文化</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2012-03/平装</div>
                        <div class="second-item-more-content">钱穆先生以中国文化为观照世界局势的基点，讨论其演变及中国文化在此变动中因应区处之道。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="43" isbn="9787510808944" itemName="中國學術思想史論叢" itemId="51798654" url="https://m.kongfz.com/item/51798654">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/e841d-6239.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中國學術思想史論叢</div>
                        <div class="second-item-content">钱穆/九州出版社/2011-05/平装</div>
                        <div class="second-item-more-content">全十册，汇集了钱穆先生有关中国历代学术思想的散篇论文。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="44" isbn="9787510810084" itemName="钱穆先生全集（繁体版）：历史与文化论丛（新校本）" itemId="56373120" url="https://m.kongfz.com/item/56373120">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/bb1fa-9228.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆先生全集（繁体版）：历史与文化论丛（新校本）</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">方今吾国人方竭意求变求新，然一切变必有其不变者为之基础，　一切新亦必有其旧为之根源。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="45" isbn="9787510809798" itemName="从中国历史来看中国民族性及中国文化" itemId="68447332" url="https://m.kongfz.com/item/68447332">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/36ec3-9507.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">从中国历史来看中国民族性及中国文化</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">本书为1978年冬，先生应香港新亚书院之邀，去作讲演六次，根据录音写成。主要讲中国的民族性，以及中国人的文化结构。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="46" isbn="9787510810022" itemName="双溪独语" itemId="47532589" url="https://m.kongfz.com/item/47532589">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/2a6ea-7898.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">双溪独语</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">晚年的一部作品。内容大体涵盖了中国学术思想和中西文化比较的内容。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="47" isbn="9787510810107" itemName="古史地理论丛" itemId="53409359" url="https://m.kongfz.com/item/53409359">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a1dfd-9428.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">古史地理论丛：錢穆先生全集</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">钱宾四先生考论古代历史地理长短论文之汇集。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="48" isbn="9787108062451" itemName="八十忆双亲师友杂忆" itemId="22901861" url="https://m.kongfz.com/item/22901861">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/0167f-7665.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">八十忆双亲师友杂忆</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2018-09/平装</div>
                        <div class="second-item-more-content">作者八十高龄后对双亲及师友等的回忆文字。读者不仅由此得见钱穆一生的求学、著述与为人，亦能略窥现代教育和现代学术概貌之一斑。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="49" isbn="9787510806995" itemName="宋代理学三书随札" itemId="26365254" url="https://m.kongfz.com/item/26365254">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/dfb5e-6225.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">宋代理学三书随札</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-01/平装</div>
                        <div class="second-item-more-content">本书乃汇合先生对宋代理学三书（元刘因《朱子四书精义集要》，周濂溪《易通书》，朱子、吕东莱合编《近思录》）所作札记而成，皆以发挥理学家之共同要义为主。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="50" isbn="9787510810060" itemName="中国文学论丛" itemId="53366815" url="https://m.kongfz.com/item/53366815">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/83770-2560.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国文学论丛</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">本书原名《中国文学讲演集》，收文十六篇。今增加篇后，有三十余篇。对于了解中国文学之演进、中国文学之特性有很大的帮助。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="51" isbn="9787108015365" itemName="现代中国学术论衡" itemId="69137972" url="https://m.kongfz.com/item/69137972">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/05278-1364.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">现代中国学术论衡</div>
                        <div class="second-item-content">钱穆 著/生活·读书·新知三联书店/2009-02/平装</div>
                        <div class="second-item-more-content">本书就近代国人所承认之学术新门类，及其新观念，还就旧传统，指出其本属相通，及互有得失处。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="52" isbn="9787108062895" itemName="钱穆作品精选：晚学盲言（上下册  精装版）" itemId="28044838" url="https://m.kongfz.com/item/28044838">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/f8c30-1565.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆作品精选：晚学盲言（上下册 精装版）</div>
                        <div class="second-item-content">钱穆/生活.读书.新知三联书店/2018-08/精装</div>
                        <div class="second-item-more-content">作者在86岁时患眼疾以致目盲不能视人、罔论读写的情况下，自己口述，夫人笔记，然后口诵耳听一字一句修改订定。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="53" isbn="9787510809286" itemName="钱穆先生全集（繁体版）：中国史学发微" itemId="68579172" url="https://m.kongfz.com/item/68579172">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/e26de-9444.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆先生全集（繁体版）：中国史学发微</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">大部为先生晚年所发表有关史学之精要纲领。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="1" resPos="54" isbn="9787510810008" itemName="新亚遗铎（新校本）" itemId="50337630" url="https://m.kongfz.com/item/50337630">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/77509-9080.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">新亚遗铎（新校本）：钱穆先生全集</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2011-07/平装</div>
                        <div class="second-item-more-content">本书乃新亚书院出版之《生活周刊》上所载先生主持校政十五年对学生之讲演，以及相关资料，汇集而成。</div></div>
                </div>
            </li>
        </ul>
    </div>
    <!--条目组件-->
    <div class="promotion_num" num="3">
        <!--文字标题-->
        <h3 connect="3" class="miao title-dis" style="color: #333333">合集</h3>
        <!--一行一个推荐卡-->
        <ul>
            <li class="second-item">
                <div class="hasFlex book-item" blockPos="2" resPos="0" isbn="9787510825118" itemName="钱穆先生全集" itemId="26571606" url="https://m.kongfz.com/item/26571606">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/16cca-8407.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆先生全集：共57种 共70册</div>
                        <div class="second-item-content">钱穆 著/九州出版社/2014-05/精装</div>
                        <div class="second-item-more-content">新校精装版，在原新校本简装版基础上加以校订、补充和完善，成为最权威、最完整的的版本。适宜收藏。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="1" isbn="9787510809170" itemName="钱穆先生全集" itemId="67300308" url="https://m.kongfz.com/item/67300308">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/b54c2-5546.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆先生全集：第一辑 共16种</div>
                        <div class="second-item-content">钱穆/九州出版社/2011-06/平装</div>
                        <div class="second-item-more-content">共16种。含《墨子 惠施公孙龙》、《论语文解》、《宋代理宋代理学三书随劄》、《中国近三百年学术史（一、二）》、《朱子新学案》等</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="2" isbn="9787510812729" itemName="钱穆先生全集" itemId="39637786" url="https://m.kongfz.com/item/39637786">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/edf56-2345.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆先生全集：第二辑 共29种</div>
                        <div class="second-item-content">钱穆/九州出版社/2011-05/平装</div>
                        <div class="second-item-more-content">共29种，含《学籥》《中国学术通义》《周公》《秦汉史》《国史大纲（上）》《国史大纲（下）》等。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="3" isbn="9787510812736" itemName="钱穆先生全集" itemId="60660257" url="https://m.kongfz.com/item/60660257">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/d087a-3139.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆先生全集：第三辑 共11种</div>
                        <div class="second-item-content">钱穆/九州出版社/2011-07/其他</div>
                        <div class="second-item-more-content">共11种。含《中国学术思想史论丛（全十册）》、《世界局势与中国文化》、《八十忆双亲、师友杂忆合刊》等。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="2" resPos="4" isbn="9787108063663" itemName="钱穆作品精选（精装函套 八种）" itemId="49052013" url="https://m.kongfz.com/item/49052013">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/5ae95-6787.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆作品精选（精装函套 八种）</div>
                        <div class="second-item-content">钱穆/生活.读书.新知三联书店/2018-10/其他</div>
                        <div class="second-item-more-content">从三联版24种“钱穆作品系列”中精选8种，涵括作者一生对经学、史学和哲学的精研和深思。装帧精美</div></div>
                </div>
            </li>
        </ul>
    </div>
    <!--条目组件-->
    <div class="promotion_num" num="4">
        <!--文字标题-->
        <h3 connect="4" class="miao title-dis" style="color: #333333">相关评论解读</h3>
        <!--一行一个推荐卡-->
        <ul>
            <li class="second-item">
                <div class="hasFlex book-item" blockPos="3" resPos="0" isbn="9787511704467" itemName="钱穆先生学术年谱（全六卷）" itemId="51804142" url="https://m.kongfz.com/item/51804142">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/7b727-9074.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆先生学术年谱（全六卷）</div>
                        <div class="second-item-content">韩复智/中央编译出版社/2012-03/精装</div>
                        <div class="second-item-more-content">钱穆的弟子韩复智编撰，分为简谱和学术年谱，可一窥先生一生历程与学识精华。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="1" isbn="9787510813016" itemName="楼廊闲话" itemId="59017425" url="https://m.kongfz.com/item/59017425">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/b94a8-3464.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">楼廊闲话</div>
                        <div class="second-item-content">钱胡美琦 著/九州出版社/2012-01/平装</div>
                        <div class="second-item-more-content">此书为钱穆与其夫人胡美琦关于人生问题的闲谈笔录，内容由两位在日常闲居中交流切磋而来。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="2" isbn="9787563376797" itemName="许倬云问学记" itemId="38223882" url="https://m.kongfz.com/item/38223882">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/f82d6-6810.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">许倬云问学记</div>
                        <div class="second-item-content">许倬云 著/广西师范大学出版社/2008-08/平装</div>
                        <div class="second-item-more-content">款款深情回忆师友滋养，为一代民国知识分子存照。含纪念宾四先生的一文：钱宾四先生的学术生命。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="3" isbn="9787108040213" itemName="现代危机与思想人物" itemId="35511129" url="https://m.kongfz.com/item/35511129">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/8ae23-7576.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">现代危机与思想人物</div>
                        <div class="second-item-content">余英时 著；舒炜 编/生活·读书·新知三联书店/2012-04/精装</div>
                        <div class="second-item-more-content">作者关于近代中国思想文化史的重要论集。以胡适、钱穆、陈寅恪等20世纪中国文化的代表人物为中心，探讨中国传统文化的危机和转化。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="4" isbn="9787550228207" itemName="讲学札记" itemId="24419029" url="https://m.kongfz.com/item/24419029">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/3ca05-6436.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">讲学札记</div>
                        <div class="second-item-content">钱穆 著；叶龙 整理/北京联合出版公司/2014-07/平装</div>
                        <div class="second-item-more-content">叶龙，香港能仁书院前院长，曾师从钱穆多年。本书记录先生百余条讲学札记，先生生前曾亲自删改润饰。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="5" isbn="9787550219588" itemName="中国经济史" itemId="29428215" url="https://m.kongfz.com/item/29428215">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/c7802-5036.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国经济史</div>
                        <div class="second-item-content">钱穆＜讲授＞ 著；叶龙 整理/北京联合出版公司/2014-01/平装</div>
                        <div class="second-item-more-content">关于钱穆先生在香港新亚书院先后讲授的“中国经济史”及“中国社会经济史”两门课程的记录整理。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="6" isbn="9787545517491" itemName="中国文学史" itemId="32483944" url="https://m.kongfz.com/item/32483944">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/8771f-2132.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">中国文学史</div>
                        <div class="second-item-content">钱穆 口述；叶龙 整理/天地出版社/2016-03/平装</div>
                        <div class="second-item-more-content">关于钱穆先生在香港新亚学院给学生讲授中国文学史的笔记整理。可作为一本了解中国文学的入门读物。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="7" isbn="9787010032252" itemName="钱穆传" itemId="52919743" url="https://m.kongfz.com/item/52919743">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/5f439-8453.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆传</div>
                        <div class="second-item-content">陈勇 著/人民出版社/2001-01/平装</div>
                        <div class="second-item-more-content">以一个现代学者的眼光，对钱穆一生的治学历程和生活经历进行细致的观照，并对钱穆每个时期的代表著作作了历史性的回顾与评价。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="8" isbn="9787515352152" itemName="钱穆评传" itemId="49268813" url="https://m.kongfz.com/item/49268813">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/5d8e8-9338.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆评传</div>
                        <div class="second-item-content">汪学群 著/中国青年出版社/2019-04/精装</div>
                        <div class="second-item-more-content">本书结合时代从钱穆原著出发，详细讨论了他的学术思想史。</div></div>
                </div>
            </li>
            <li class="second-item second-line">
                <div class="hasFlex book-item" blockPos="3" resPos="9" isbn="9787800506833" itemName="钱穆与七房桥世界" itemId="39895723" url="https://m.kongfz.com/item/39895723">
                    <div class="second-item-wrap-img">
                        <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/d065d-9894.jpg" onerror="this.src='<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/a2222-7131.jpg';" alt="" class="second-item-img"></div>
                    <div class="second-item-right">
                        <div class="second-item-title">钱穆与七房桥世界</div>
                        <div class="second-item-content">[美]邓尔麟/社会科学文献出版社/1998-03/平装</div>
                        <div class="second-item-more-content">从一个西方学者的视角解读钱穆，解读中国文化精神。</div></div>
                </div>
            </li>
        </ul>
    </div>
    <!--图片组件-->
    <div class="promotion_num" num="5">
        <!--文字标题-->
        <h3 connect="5" class="miao title-dis" style="color: #333333">其他史学名家</h3>
        <!--一行1张堆墙-->
        <div class="wrap-mul-img miao" connect="5" style="">
            <div class="img-link img_one" blockPos="4" resPos="0" url="http://promotion.kongfz.com/promotion/cyq_m">
                <img src="<?= Yii::getAlias('@tasseturl'); ?>/kongfz/m/img/7eaf3-3276.jpg" alt="" style="height: 1.6rem"></div>
        </div>
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
        title: "【名家】钱穆",
        desc: "所谓对其本国已往历史略有所知者，尤必附随一种对其本国已往历史之温情与敬意。",
        imgUrl: "https://img0.kfzimg.com/activity/5/5c/55ca4a16275d20986e02395a62bf7ad8.jpg",
        url: "https://promotion.kongfz.com/promotion/qianmu_m/"
    };
    window.app_data = {
        title: "【名家】钱穆",
        desc: "所谓对其本国已往历史略有所知者，尤必附随一种对其本国已往历史之温情与敬意。",
        img: "https://img0.kfzimg.com/activity/5/5c/55ca4a16275d20986e02395a62bf7ad8.jpg",
        url: "https://promotion.kongfz.com/promotion/qianmu_m/"
    };
    window.social_data = {
        type: 'booklist',
        title: "【名家】钱穆",
        desc: "所谓对其本国已往历史略有所知者，尤必附随一种对其本国已往历史之温情与敬意。",
        img: "https://img0.kfzimg.com/activity/5/5c/55ca4a16275d20986e02395a62bf7ad8.jpg",
        url: "https://promotion.kongfz.com/promotion/qianmu_m/"
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
<script type="text/javascript">var pageUrl = "qianmu_m",
    layout = ["\u65e0", "\u4e13\u8457", "\u5408\u96c6", "\u76f8\u5173\u8bc4\u8bba\u89e3\u8bfb", "\u5176\u4ed6\u53f2\u5b66\u540d\u5bb6"];</script>
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
