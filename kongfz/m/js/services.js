var services = angular.module('services',[]);

services.config(['$compileProvider', function($compileProvider) {

    $compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|chrome-extension|kongfz|tel|sms):/);

}]);
/**
 * 提供一些公用的工具函数
 */
services.factory('tools', function() {
    return {
        setTitle: function(title) {
            angular.element(document.getElementsByTagName('title')[0]).html(title);
        }
    }
});

//过滤后数据长度
services.filter('size', function() {
    return function (lists) {
        if (!lists)
            return 0;

        return lists.length || 0;
    }
});

/*
 过滤html 标签
 *如：过滤data.itemName
 * <a href="{{data.url}}" ng-bind-html="data.itemName | to_trusted"></a>
 * */
services.filter('to_trusted', ['$sce', function ($sce) {
    return function (text) {
        return $sce.trustAsHtml(text);
    };
}]);


/*分页组件*/
services.directive('kfzPager', function() {
    return {
        restrict: 'A',
        templateUrl:"common/pager/pager.html",
        scope:{
            page:'@',
            maxPage:'@',
            route:'@'
        },
        transclude: true,
        controller: [ "$scope", function ($scope) {
            /*初始化*/
            $scope.isShowPage = false;
            $scope.isGreyPre = false;
            $scope.isGreyNext = false;
        }],
        link : function(scope, element, attrs) {
            /*监视最大页数*/
            scope.$watch('maxPage', function() {
                if(parseFloat(attrs.maxPage)>1){
                    scope.isShowPage = true;
                }
            });
            /*上一页*/
            scope.prevPage = function() {
                var pageCurr = parseFloat(attrs.page);
                if(pageCurr <= 1){
                    scope.isGreyPre = true;
                    return false;
                }
                attrs.page = pageCurr - 1;
                if(attrs.page && attrs.page>=1){
                    scope.isShowPage = true;
                    location.href = attrs.route+"/"+attrs.page;
                }
            }
            /*下一页*/
            scope.nextPage = function() {
                 var pageCurr = parseFloat(attrs.page),maxPage =  parseFloat(attrs.maxPage);
                 if(pageCurr >= maxPage){
                     scope.isGreyNext = true;
                     return false;
                 }
                  attrs.page = pageCurr + 1;
                if(attrs.page && attrs.page>=1){
                    scope.isShowPage = true;
                    location.href = attrs.route+"/"+attrs.page;
                }
            }
        }
    };
});


/*图片错误组件*/
services.directive('kfzImgErr', function() {
    return {
        restrict: 'A',
        scope:{
            kfzImgErr:'@'
        },
        transclude: false,
        link : function(scope, element, attrs) {
               //判断图片是否存在
                var ImgObj = new Image();
                ImgObj.src = attrs.src;
                element.on("error",function(){
                    element.attr("src",attrs.kfzImgErr);
                });
                function imgLoad(img, callback) {
                    var timer = setInterval(function() {
                        if (img.complete) {
                            callback(img)
                            clearInterval(timer)
                          }
                    }, 50)
                }
                imgLoad(ImgObj, function() {
                    if (ImgObj.fileSize > 0 || (ImgObj.width > 0 && ImgObj.height > 0)) {
                    } else {
                        element.attr("src",attrs.kfzImgErr);
                    }
                });
        }
    };
});

/*头部组件*/
services.directive('kfzHeader', function($document,$http) {
    return {
        restrict: 'A',
        scope:{
            title:'@',
            name:'@',
            url:'@',
            backUrl:'@',
            inputVal:'@',
            searchWord:'@',
            searchUrl:'@',
            logoUrl:'@'
        },
        transclude: true,
        link : function(scope, element, attrs) {
            /*判断打开头部文件的是app还是m站*/
            scope.footerStatus = true;
            scope.showHeaderApp = false;
            var userAgent = window.navigator.userAgent;
            var isApp = userAgent.indexOf('KFZ_COM') > -1;
            if(isApp) {
                var isAndroidApp = userAgent.indexOf('ANDROID_KFZ_COM') > -1;
                var isIosApp = userAgent.indexOf('IOS_KFZ_COM') > -1;
                if(isAndroidApp && window.Kongfz) {
                    Kongfz.titleHasLoaded();
                }
                if(isIosApp && window.webkit) {
                    window.webkit.messageHandlers.hiddenNavagationBar.postMessage(0);
                }
                scope.showHeaderApp = true;
                scope.showNavApp = false;
                // element.find("header").addClass("positionSta");
                scope.showNavAppFun = function() {
                    // scope.showNavApp = !scope.showNavApp;
                    if(scope.showNavApp != true) {
                        // 增加透明遮罩层
                        scope.showNavApp = true;
                        element.find("header").addClass("positionSta");
                        var scrollTop =  document.documentElement.scrollTop || document.body.scrollTop;
                        if (scrollTop > 100) {
                            window.scrollTo(0,0);
                        }
                        scope.showHeight=  false;
                        element.find("section").css("height",$(window).height() + "px");
                        $('.kfz-header-app .nav_header_app').css('z-index','99999 !important')
                         // $('.kfz-overlay').css('background-color','rgba(0,0,0,0) !important' )
                         // $('.kfz-overlay').css('z-index','1000 !important' )

                        $('.kfz-overlay').css({opacity:0,zIndex:1000});
                        $('.kfz-overlay').attr('ng-show','true' )
                        $('.kfz-overlay').removeClass('ng-hide')
                        /*禁止页面滚动*/
                        $('body').css('height',$(window).height()+"px");
                        $('body').css('overflow','hidden');
                        $('.kfz-layout').css('height',$(window).height()+"px");
                        $('.kfz-layout').css('overflow','hidden');

                    } else {
                        // scope.showNavApp = !scope.showNavApp;
                        scope.hideOverlay();
                    }

                }
                scope.footerStatus = false;
                $('body').css('padding-bottom','0px');
                msgLink = "kongfz://app.kongfz.com/messageList";
            } else {
                msgLink = KFZ.sites.adapter.m + "m/#/message/msg/inbox/";
                msgLink = KFZ.sites.adapter.mmessage + 'message/mmessage/mmessage.html#/';
            }

            scope.showHeight = true;
            scope.showHeaderNav = false;
            scope.messageNumShow = false;
            scope.cartNumShow = false;
            scope.logoUrl = KFZ.sites.adapter.m+"/search/template/mobile2/common/images/logo.png";
            /*url配置*/
            var urlConfig = {
                "indexUrl": KFZ.sites.adapter.m,
                "searchIndexUrl": KFZ.sites.adapter.m + "newsearch/",
                "cartUrl": KFZ.sites.adapter.m + "cart/?type=other",
                "messageUrl": msgLink,
                "personUrl": KFZ.sites.adapter.m + "personal",
                "sellerUrl": KFZ.sites.adapter.m + "m/#/shop/seller/sellerpersonal",
                "orderUrl": KFZ.sites.adapter.m + "m/#/shop/buyer/orderlist/1?status=Trading",
                "tradeUrl": KFZ.sites.adapter.m + "m/#/pm/tradelist/",
                "bidUrl": KFZ.sites.adapter.m + "m/#/pm/bidding/",
                "payUrl": KFZ.sites.adapter.m + "m/#/pay/platform",
                "zujiUrl": KFZ.sites.adapter.m + "m/#/user/personal-myfoot-goods/",
                "shopUrl": KFZ.sites.adapter.m + "shop/",
                "pmUrl": KFZ.sites.adapter.mpm,
                "zixunUrl":  KFZ.sites.adapter.mzixun,
                "shequUrl":  KFZ.sites.adapter.shequ
            };
            for(var k in urlConfig) {
                scope[k] = urlConfig[k];
            }
            scope.getCookie = function(c_name){
                if (document.cookie.length>0){
                    c_start=document.cookie.indexOf(c_name + "=")
                    if (c_start!=-1){
                        c_start=c_start + c_name.length+1
                        c_end=document.cookie.indexOf(";",c_start)
                        if (c_end==-1) c_end=document.cookie.length
                        return unescape(document.cookie.substring(c_start,c_end))
                    }
                }
                return ""
            }
            /*获取购物车数量*/
            scope.getCartNum = function(){
                // var url = KFZ.sites.adapter.mbook+"book/shopcart/listCart?callback=JSON_CALLBACK";
                var userAgent = window.navigator.userAgent;
                var isApp = userAgent.indexOf('KFZ_COM') > -1;
                if(isApp){
                    var id = scope.getCookie("PHPSESSID");
                    var url = KFZ.sites.adapter.m + "api-shop/book/shopcart/listCart?app="+ id +"&callback=JSON_CALLBACK";
                }else{
                    var url = KFZ.sites.adapter.m + "api-shop/book/shopcart/listCart?callback=JSON_CALLBACK";
                }
                $http.jsonp(url).success(function(res){
                    if(res && res.data){
                        scope.cartNum = res.data.length;
                        scope.cartNumShow = true;
                    }
                }).error(function(){
                });
            }
            /*获取未读消息数*/
            scope.getUnReadMessage = function(){
                // var url = KFZ.sites.adapter.mmessage+"Interface/User/getUnreadNum?callback=JSON_CALLBACK";
                var userAgent = window.navigator.userAgent;
                var isApp = userAgent.indexOf('KFZ_COM') > -1;
                if(isApp){
                    var id = scope.getCookie("PHPSESSID");
                    var url = KFZ.sites.adapter.m + "api-msg/Interface/User/getUnreadNum?app="+ id +"&callback=JSON_CALLBACK";
                }else{
                    var url = KFZ.sites.adapter.m + "api-msg/Interface/User/getUnreadNum?callback=JSON_CALLBACK";
                }
                $http.jsonp(url).success(function(data){
                    if(data){
                        scope.messageNumShow = true;
                        scope.messageNum = data;
                    }
                }).error(function(){
                });
            }
            /*每隔120秒轮回*/
            if(!KFZ.user){
                KFZ.user = {};
            }
            if(KFZ.user.isLogin){
                scope.getUnReadMessage();
                setInterval(function(){
                    scope.getUnReadMessage();
                },120000);
                if(KFZ.header && KFZ.header.cartNum){
                    scope.cartNum = KFZ.header.cartNum;
                    scope.cartNumShow = true;
                }else{
                    scope.getCartNum();
                }
            }
            //如果尺寸变化，自适应
            $(window).resize(function(){
                element.find("section").css("height",$(window).height() + "px");
                $('.nav_content').css("height",($(window).height()-45)+"px");
            });
            var navOffset = {hiddenHeight:0,translateY:0,touchStartY:0,touchY:0};
            $('body').on('touchmove','.kfz-overlay',function(e){
                e.preventDefault();
            }).on('touchstart','.kfz-header .nav_header',function(e){
                navOffset.hiddenHeight = $('.kfz-header .nav_content > .nav_content_scroll').height()-$('.kfz-header .nav_content').height();
                navOffset.touchStartY = e.touches[0].clientY;
            }).on('touchmove','.kfz-header .nav_header',function(e){
                e.preventDefault();
                navOffset.touchY = e.touches[0].clientY;
                navOffset.translateY += navOffset.touchY - navOffset.touchStartY;
                if (navOffset.translateY + navOffset.hiddenHeight < 0) {
                    navOffset.translateY = -navOffset.hiddenHeight;
                }
                if (navOffset.translateY > 0) {
                    navOffset.translateY = 0;
                    $('.kfz-header .nav_content > .nav_content_scroll').css('transform', 'translateY(0px)');
                    $('.kfz-header .nav_content > .nav_content_scroll').css('-ms-transform', 'translateY(0px)');
                    $('.kfz-header .nav_content > .nav_content_scroll').css('-moz-transform', 'translateY(0px)');
                    $('.kfz-header .nav_content > .nav_content_scroll').css('-webkit-transform', 'translateY(0px)');
                    $('.kfz-header .nav_content > .nav_content_scroll').css('-o-transform', 'translateY(0px)');
                } else {
                    $('.kfz-header .nav_content > .nav_content_scroll').css('transform', 'translateY(' + navOffset.translateY + 'px)');
                    $('.kfz-header .nav_content > .nav_content_scroll').css('-ms-transform', 'translateY(' + navOffset.translateY + 'px)');
                    $('.kfz-header .nav_content > .nav_content_scroll').css('-moz-transform', 'translateY(' + navOffset.translateY + 'px)');
                    $('.kfz-header .nav_content > .nav_content_scroll').css('-webkit-transform', 'translateY(' + navOffset.translateY + 'px)');
                    $('.kfz-header .nav_content > .nav_content_scroll').css('-o-transform', 'translateY(' + navOffset.translateY + 'px)');
                }
//                $('.kfz-overlay').html('调试信息,请忽略！<br>startY:'
//                        +navOffset.touchStartY+'<br>translateY:'
//                        +navOffset.translateY+'<br>hiddenHeight:'
//                        +navOffset.hiddenHeight+'<br>moveY:'
//                        +(navOffset.touchY-navOffset.touchStartY));
                navOffset.touchStartY = navOffset.touchY;
            });
            /*点击滑动展开*/
            scope.showHeaderDia = function(){
                element.find("header").removeClass("positionRe").addClass("positionSta");
                element.find("section").addClass("slide-right");
                element.find("section").css("height",$(window).height() + "px");
                $('.nav_content').css("height",($(window).height()-45)+"px");
                if(attrs.title){
                    element.find("header").css("width","0");
                }
                var scrollTop =  document.documentElement.scrollTop || document.body.scrollTop;
                if (scrollTop > 100) {
                    window.scrollTo(0,0);
                }
                scope.showHeaderNav = true;
                scope.showHeight=  false;
                /*初始化侧边栏滚动位置*/
                navOffset.translateY = 0;
                $('.kfz-header .nav_content > .nav_content_scroll').css('transform', 'translateY(0px)');
                /*禁止页面滚动*/
                $('body').css('height',$(window).height()+"px");
                $('body').css('overflow','hidden');
                $('.kfz-layout').css('height',$(window).height()+"px");
                $('.kfz-layout').css('overflow','hidden');
                $('.kfz-overlay').css('height',$(window).height()+"px");
                $('.kfz-overlay').css('overflow','hidden');

                //调试
//                $('.kfz-overlay').html('调试信息,请忽略！<br>screen.height:'
//                        +window.screen.height+'<br>screen.availHeight:'
//                        +window.screen.availHeight+'<br>window.height:'
//                        +$(window).height()+'<br>body.height:'
//                        +$('body').height()+'<br>html.height:'
//                        +$('html').height()+'<br>overlay.height:'
//                        +$('.kfz-overlay').height());
            }
            /*点击关闭*/
            scope.hideHeaderDia = function(){
                element.find("header").removeClass("positionSta");
                if(attrs.title){
                    element.find("header").css("width","100%");
                }
                scope.showHeaderNav = false;
                scope.showHeight=  true;
                /*页面滚动*/
                $('body').css('height','auto');
                $('body').css('overflow','');
                $('.kfz-layout').css('height','auto');
                $('.kfz-layout').css('overflow','');
            }
            /*页面模板渲染*/
            scope.getContentUrl = function() {
                return attrs.url;
            }
            /*页面弹层*/
            scope.search = function() {
                // $(".search_product").hide();
                // $(".search_index").show();
                // new window.mainView(attrs.searchWord);
                $(".kfz-header input").blur();
                location.href = KFZ.sites.adapter.m + "newsearch/"
            }
            /*回到首页*/
            scope.goBack = function(){
                location.href = scope.indexUrl;
            }
            /*隐藏遮罩*/
            scope.hideOverlay = function(){
                // element.find("header").removeClass("positionSta");
                if(attrs.title){
                    element.find("header").css("width","100%");
                }
                scope.showHeaderNav = false;
                scope.showHeight=  true;
                /*页面滚动*/
                $('body').css('height','auto');
                $('body').css('overflow','');
                $('.kfz-layout').css('height','auto');
                $('.kfz-layout').css('overflow','');

                if(isApp) {
                    element.find("header").addClass("positionSta");
                    scope.showNavApp = false;
                    scope.showHeight=  false;
                    $('.kfz-overlay').attr('ng-show','showHeaderNav')
                    $('.kfz-overlay').addClass('ng-hide')
                }

            }
            /*返回*/
            scope.back = function(){
                /*if(attrs.backUrl){
                    location.href = attrs.backUrl;
                } else {
                    window.history.go(-1);
                    var u = navigator.userAgent;
                    var isApp = u.indexOf('KFZ_COM') > -1;
                    if(isApp){
                        location.href = "kongfz://app.kongfz.com/back";
                    }
                }*/

                var u = navigator.userAgent;
                var isApp = u.indexOf('KFZ_COM') > -1;
                if(isApp){
                    location.href = "kongfz://app.kongfz.com/back";
                }else{
                    if(attrs.backUrl){
                        location.href = attrs.backUrl;
                    }else if(attrs.back && Math.abs(parseInt(attrs.back))>0){
                        window.history.go(-Math.abs(parseInt(attrs.back)));
                    }else{
                        window.history.go(-1);
                    }
                }
            }


        },
        template: '<div ng-include="getContentUrl()"></div>'
    };
});




/*回到顶部组件*/
services.directive('kfzBackTop', function($document) {
    return {
        restrict: 'A',
        scope:{
            name:'@'
        },
        transclude: true,
        link : function(scope, element, attrs) {
           /*初始化*/
            element.css('display',"none");
            $(window).scroll(function() {
                var $height = $(window).height();
                var $top =  $(window).scrollTop();
                if ($height < $top) {
                    element.css('display',"block");
                } else {
                    element.css('display',"none");
                }
            });
            /*点击回到顶部*/
            scope.goBack = function(){
                setTimeout(function(){
                    $('body,html').scrollTop(0);
                },500)
            }
            /*页面模板渲染*/
            scope.getContentUrl = function() {
                return attrs.url;
            }
        },
        template: '<div ng-include="getContentUrl()"></div>'
    };
});


/*搜索框弹层*/
window.mainView = KFZ.View.extend({
    el:'body',
    initialize:function(param){
        var that = this;
        that.$search = $(that.el).find('.kfz-search-section');
        that.$con = $(that.el).find('.kfz-con-section');
        KFZ.page.searchInfo = {
            area:'shop',
            value:'0',
            history:that.getHistory('shop'),
            showHistory:true,
            ass:[],
            showAss:false,
            inputVal:""
        };
//        var dataArea = $(".tab").find(".tab_item.now").attr("data-area");
//        if(dataArea == "pm"){
//            $(".search_box_option").find(".shop_status").hide();
//            $(".search_box_option").find(".pm_status").show();
//            KFZ.page.searchInfo.area = "pm";
//        }
        if(window.PAGE && PAGE.search){
            KFZ.page.searchInfo.area = PAGE.search.area || 'shop';
            KFZ.page.searchInfo.value = PAGE.search.value || '0';
        }
        $('.kfz-search-header .tab .tab_item').removeClass('now');
        $('.kfz-search-header .tab .tab_item').each(function(){
            if($(this).data('area') == KFZ.page.searchInfo.area){
                $(this).addClass('now');
            }
        });
        if(param){
            KFZ.page.searchInfo.inputVal = param;
        }
        that.renderSearch();
        that.renderHistoryCon();
        //这里如果初始化的时候就设置焦点的话，打开页面后无论做什么操作，首先都会弹出输入法！
        //this.$search.find('input').focus();
        if(!KFZ.page.sugWords)KFZ.page.sugWords = [];
//        var searchInput = $('.search_box_input').find("input")
//        if (searchInput.val() == '') {
//            $("#tipText").text("商品名称、作者、出版社、ISBN").show();
//        }else{
//            $("#tipText").hide();
//        }
        //勇华要求打开搜索弹层时输入框获取焦点
        $('.search_box_input').find('input').focus();
        that.eventFocusInput();
    },
    events:{
        'tap .s_icon_goBack':'eventBackHistory',           //返回
        'tap .tab_item':'eventChangeArea',//选择搜索区域
        'tap .search_box_select':'eventShowSelect',//触发下拉选项
        'tap .search_box_option .option':'eventChangeValue', //触发下拉选项子项
        'tap .history_item li':'eventChangeHis', //选择历史记录
        'tap .btn_clear_history':'eventClearHis', //清楚历史记录
        'tap .ass_item li':'eventChangeAss', //选择联想输入
        'tap .kfz-search-section .btn_cancel':'eventCancel',            //取消
        'keyup .search_box_input input':'eventSubmit', //搜索
        'input .search_box_input input':'eventSubmit', //搜索
        'tap .search_box_input .icon-guanbi2':'eventClear', //取消
        'propertychange .search_box_input input':'eventSubmit', //搜索
        'focus .search_box_input input':'eventFocusInput',
        'blur .search_box_input input':'eventBlur',
        'tap #tipText':'eventTipText'
    },
    /*取消*/
    eventCancel:function(e){
        //阻止事件冒泡和默认行为
        e.preventDefault();
        e.stopPropagation();
        var that = this;
        //var $this = $(e.currentTarget);
        //防止弹出侧边栏
        window.setTimeout(function () {
            that.renderSearch();
            that.eventBlur();
            that.renderHistoryCon();
            $('.search_box_input').find("input").blur().val("");
            if($(".search_box_input").find("input").val() != ""){
                $("#tipText").hide();
            }else{
                $("#tipText").show();
            }
            $(".search_product").show();
            $("#result_search_ass").hide();
            $(".search_index").hide();
        }, 400);
    },
    eventClear:function(e){
        var $this = $(e.currentTarget);
        $('.search_box_input').find("input").focus().val("");
        $this.hide();
        $("#tipText").hide();
    },
    eventTipText: function(e) {
        var that = this;
        var $this = $(e.currentTarget);
        $this.hide();
        $('.search_box_input').find("input").focus();
    },
    eventBlur: function(e) {
        var $this = $('.search_box_input').find('input');
        if ($this.val() == '') {
            $("#tipText").show();
        }else{
            $("#tipText").hide();
        }
        $('.search_box_input .icon-guanbi2').hide();
    },
    eventFocusInput:function(e){
        var $this = $('.search_box_input').find('input');
        if ($this.val() !== '') {
            $('.search_box_input .icon-guanbi2').show();
        }
        $("#tipText").text("");
        var $arrow = $('.search_box_select .arrow');
        if($arrow.hasClass('s_icon_up')){
            $arrow.removeClass('s_icon_up').addClass('s_icon_down');
            $('.search_box_option').hide();
        }
    },
    eventSubmit:function(e){
        var that = this,
            e = e || window.event;
        var value =  $.trim($('.search_box_input').find('input').val());
        if(e.keyCode == 13){
            e.preventDefault();
            if(value == ""){
                KFZ.mobile.Tip({context: "请输入关键词后再进行搜索筛选"});
            }else{
                that.submit();
            }
            return false;
        }
        /*联想*/
        if(value != ""){
            $("#tipText").hide();
            $('.search_box_input .icon-guanbi2').show();
            $("#search_ass").show();
            $("#search_history").hide();
            that.getAss($.trim($(e.currentTarget).val()),function(val,sugWords){
                //记录联想记录
                if(sugWords && $.isArray(sugWords) && !KFZ.page.sugWords[val]){
                    var returnSugWords = new Array();
//                    KFZ.page.sugWords[val] = sugWords;
                    $.each(sugWords,function(k,v){
                        if(k >= 5) {
                            return;
                        }
                        returnSugWords.push(v.replace(new RegExp(value), "<b>" + value + "</b>"));
                    });
                    KFZ.page.sugWords[val] = returnSugWords;
                    sugWords = returnSugWords;
                }
                KFZ.page.searchInfo.showHistory = false;
                KFZ.page.searchInfo.showAss = true;
                KFZ.page.searchInfo.ass = sugWords;
                that.renderAssCon();
            });
        }else{
            that.renderHistoryCon();
        }
    },
    eventChangeHis:function(e){
        var that = this;
        $("#tipText").hide();
        that.$search.find('input').blur().val($(e.currentTarget).attr('data-key'));
        that.submit();
    },
    eventClearHis:function(){
        $("#searchInput").blur();
        var area = $('.tab_item.now').attr('data-area')||'shop';
        if(typeof window.localStorage == 'undefined'){
            localStorage.setItem('history_'+area,'');
        }else{
            KFZ.util.cookie('history_'+area,'[]',{path:'/'});
        }
        KFZ.page.searchInfo.history = '';
        KFZ.page.searchInfo.showHistory = true;
        KFZ.page.searchInfo.showAss = false;
        this.renderHistoryCon();
    },
    eventChangeAss:function(e){
        var key = $(e.currentTarget).attr('data-key');
        this.$search.find('input').val(key.replace(/<\/?b>/g, ""));
        this.submit();
    },
    eventBackHistory:function(){
        window.history.go(-1);
        return false;
    },
    eventChangeArea:function(e){
        var that = this,
            $this = $(e.currentTarget);
        if($this.hasClass('now')) return false;
        var data_area = $this.attr('data-area')||'shop';
        var selectValue = {
             "shop":"0",
             "pm":"1",
             "dianpu":"0"
        };
        KFZ.page.searchInfo.area = data_area;
        KFZ.page.searchInfo.value = selectValue[data_area];
        KFZ.page.searchInfo.history = that.getHistory(data_area);
        $this.siblings().removeClass('now');
        $this.addClass('now');
        that.renderSearch();
        KFZ.page.searchInfo.showHistory = true;
        KFZ.page.searchInfo.showAss = false;
        that.renderHistoryCon();
        /*渲染默认文字*/
        that.renderTipText(data_area);
        $this.css('color','#d00000 !important').siblings().css('color','#333333 !important')
    },
    renderTipText:function(area){
        var inputVal = $('.search_box_input').find('input');
        var tipText = $("#tipText");
        if (inputVal.val() == '') {
            tipText.show();
            var tipTextVal = {
                "shop":"商品名称、作者、出版社、ISBN",
                "pm":"拍品名称/作者、拍主昵称",
                "dianpu":"请输入店铺名称进行搜索"
            };
            if(area=='pm') {
                if(KFZ.page.searchInfo.value == 1) {
                    tipText.text("请输入拍品名称");
                } else if(KFZ.page.searchInfo.value == 2) {
                    tipText.text("请输入拍品作者");
                }else if (KFZ.page.searchInfo.value == 3) {
                    tipText.text("请输入拍主昵称");
                } else {
                    tipText.text("拍品名称/作者、拍主昵称");
                }
            } else if (area=='dianpu') {
                if(KFZ.page.searchInfo.value == 0) {
                    tipText.text("请输入店铺名称");
                } else if(KFZ.page.searchInfo.value == 1) {
                    tipText.text("请输入店主昵称");
                }
            } else {
                tipText.text(tipTextVal[area]);
            }
        }else{
            tipText.hide();
        }
        if(area == "pm" || area == "dianpu"){
            $(".search_box_select").css("width","90px");
            $(".search_box_option").css("width","100px");
            $('.kfz-search-section .search_box .search_box_input').css('left','90px');
        }else{
            $(".search_box_select").css("width","60px");
            $(".search_box_option").css("width","80px");
            $('.kfz-search-section .search_box .search_box_input').css('left','60px');
        }
    },
    eventChangeValue:function(e){
        var that = this,
            $this = $(e.currentTarget),
            data_value = $this.attr('data-value')||'0';
        KFZ.page.searchInfo.value = data_value;
        that.renderSearch();
        /*渲染默认文字*/
        var area = KFZ.page.searchInfo.area;
        that.renderTipText(area);
        window.setTimeout(function () {
            $('.search_box_input').find("input").focus();
        },100);
    },
    eventShowSelect:function(e){
        var that = this,
            $this = $(e.currentTarget),
            $span = $this.find('span');
        if($span.hasClass('s_icon_up')){
            $span.attr('class','s_icon_down');
            $('.search_box_option').hide();
        }else{
            $span.attr('class','s_icon_up');
            $('.search_box_option').show();
        }
    },
    renderSearch:function(){
        this.$search.html(KFZ.template('template_search',{model:KFZ.page.searchInfo}));
    },
    renderHistoryCon:function(){
        var that = this;
        if (KFZ.page.searchInfo.showHistory == true) {
            that.eventBlur();
        }
        that.$con.html(KFZ.template('template_history_con',{model:KFZ.page.searchInfo}));
    },
    renderAssCon:function(){
        var that = this;
        if (KFZ.page.searchInfo.showHistory == true) {
            that.eventBlur();
        }
        that.$con.html(KFZ.template('template_ass_con',{model:KFZ.page.searchInfo}));
    },
    getHistory:function(type){
        var data_area = type?('history_'+type):'history_shop';
        var history ={}
        if(typeof window.localStorage == 'undefined'){
            var str = window.localStorage.getItem(data_area);
            if(str) history =  JSON.parse(str);
        }else{
            var str = KFZ.util.cookie(data_area);
            if(str) history =  JSON.parse(str);
        }
        return history;
    },
    setHistory:function(type,item){
        var data_area = type?('history_'+type):'history_shop';
        if(typeof window.localStorage == 'undefined'){
            var history = localStorage.getItem(data_area)||'[]';
            var list = JSON.parse(history);
            if($.isArray(list)){
                if(list.length <= 15){ //最多记录15条
                    $.each(list,function(k,v){
                        if(v == item){
                            list.splice(k,1);
                        }
                    });
                    list.unshift(item);
                    localStorage.setItem(data_area,JSON.stringify(list));
                }
            }
        }else{
            var history = KFZ.util.cookie(data_area)||'[]';
            var list = JSON.parse(history);
            if($.isArray(list)){
                if(list.length <= 15){ //最多记录15条
                    $.each(list,function(k,v){
                        if(v == item){
                            list.splice(k,1);
                        }
                    });
                    list.unshift(item);
                    KFZ.util.cookie(data_area,JSON.stringify(list),{expires:1000,path:'/'});
                }
            }
        }
    },
    getAss:function(val,callback){
        //如果记录中有数据之间回调
        if(KFZ.page.sugWords[val]){
            callback(val, KFZ.page.sugWords[val]);
            return false;
        }
        //如果有定时任务先清除
        if(KFZ.page.timer) clearTimeout(KFZ.page.timer);
        //val = val.replace(/([^\s])\s+([^\s\b])/g,'+');
        KFZ.page.timer = setTimeout(function(){
            $.ajax({
                url: KFZ.sites.adapter.m + 'search/sug/suggest_server.jsp',
                data: {query: val},
                type: 'GET',
                timeout: 5000,
                dataType: 'jsonp',
                success: function(data){
                    try{
                        data && callback(val, data);
                    }catch(e){}
                }
            });
        },150);
    },
    submit:function(){
        var that = this;
        var area = $('.tab_item.now').attr('data-area')||'shop';
        var value = $('.search_box_select .option').attr('data-value')||'0';
        var key = $.trim(this.$search.find('input').val());
        if(!key) return false;
        if(area == 'shop'){
            that.setHistory(area,key);
            /*msearch.kongfz.com/product/y0zK38713/*/
            key = KFZ.util.charToUnicode(key);
            location.href =  KFZ.sites.adapter.m + 'search/product/y'+value+'z'+key+'/';
        }else if(area == 'pm'){
            that.setHistory(area,key);
            /*在拍（拍品名称）*/
            if(value == 1){
                location.href =  KFZ.sites.adapter.mpm +"search_result/?st=1&sc="+key;
            }
            /*在拍（拍品昵称）*/
            if(value == 2){
                location.href =  KFZ.sites.adapter.mpm +"search_result/?st=2&sc="+key;
            }
            /*在拍（拍品作者）*/
            if(value == 3){
                location.href =  KFZ.sites.adapter.mpm +"search_result/?st=3&sc="+key;
            }
            /*已结束拍卖*/
            if(value == 0){
                key = KFZ.util.charToUnicode(key);
                location.href =  KFZ.sites.adapter.m + 'auction/endauction/'+'z'+key+'/';
            }
        }else if(area == 'dianpu'){
            that.setHistory(area,key);
            /*mshop.kongfz.com/shop_list_1_1_shopName_6.html*/
            if(value == 0){
                location.href =  KFZ.sites.adapter.m + 'shop/shop_list_1_1_shopName_'+key+'.html';
            }
            if(value == 1){
                location.href =  KFZ.sites.adapter.m + 'shop/shop_list_1_1_nickname_'+key+'.html';
            }
        }
        return false;
    }
});
