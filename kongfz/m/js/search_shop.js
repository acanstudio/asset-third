    var searchShop = angular.module('searchShop', ['services']);
    searchShop.filter('to_trusted', ['$sce', function ($sce) {
        return function (text) {
            return $sce.trustAsHtml(text);
        };
    }]);
    searchShop.controller('searchProduct', function($scope,$http) {
            /*判断打开头部文件的是app还是m站*/
            $scope.footerStatus = true;
            var userAgent = window.navigator.userAgent;
            var isApp = userAgent.indexOf('KFZ_COM') > -1;
            if(isApp) {
                $scope.footerStatus = false;
            }

            // 检测是否微信环境
            $scope.isWeiXin = function(){
              //window.navigator.userAgent属性包含了浏览器类型、版本、操作系统类型、浏览器引擎类型等信息，这个属性可以用来判断浏览器类型
              var ua = window.navigator.userAgent.toLowerCase();
              //通过正则表达式匹配ua中是否含有MicroMessenger字符串
              if(ua.match(/MicroMessenger/i) == 'micromessenger'){
              return true;
              }else{
              return false;
              }
            }

            /*初始化*/
            $scope.showOrder = false;
            $scope.showArea = false;
            $scope.showCatSelect = false;
            $scope.datas = [];
            $scope.isPHPRender = true;
            $scope.isAsynRender = false;
            $scope.isShowPage = true;
            $scope.isMainShow = true;
            $scope.paramDic = {           // 数据字典
                catNum:'cat_',	    // 分类编号
                isImg:'img_',	    // 图文 1 2
                nickName:'l',         // 作者
                press:'m',          // 出版社
                years:'n',          // 年代
                special1:'o',	    // 著录项1
                special2:'p',	    // 著录项2
                special3:'q',	    // 著录项3
                itemName:'s',       // 书名称
                price:'t',          // 店主昵称
                shopName:'r',       // 店铺名称
                order:'v',          // 排序
                pageNum:'w',        // 分页
                xkey:'x',          // 排除关键字
                key:'z',            // 关键字
                area:'u'            //地区
            };
            $('.registerUrl').attr({'href':KFZ.sites.adapter.login + "Mobile/Register/index"});
            if($scope.isWeiXin()){
              $('.registerUrl').attr({'href':KFZ.sites.adapter.login + 'Interface/Wechat/dispatch?hash=register'});
            }
            //$('.pic_word_box').find("span").attr('class',/img_2/.test(location.pathname)?'s_icon_word':'s_icon_pic');
            /*滚动处理*/
            $scope.scrollHandler =  function(){
                KFZ.page.pageTop =  $(window).scrollTop();
                if($(".kfz-overlay").hasClass("ng-hide")){
                    if ( KFZ.page.pageTop>45) {
                        $(".result_filter_bar").removeClass("fix_bar").addClass("fix_bar");
                    } else {
                        $(".result_filter_bar").removeClass("fix_bar");
                    }
                }
           }
           $(window).scroll($scope.scrollHandler);
            /*点击导航*/
            $scope.clickFilter = function(param){
                if(param){
                    if( $scope[param]){
                        $scope.showOrder = false;
                        $scope.showArea = false;
                        $scope.showCatSelect = false;
                        $scope[param] = false;
                        //打开主页面
                        $(".result_filter_box_area").removeClass("fix_02");
                        $(".result_filter_box_select").removeClass("fix_02");
                        $("#content").show();
                        $(window).on("scroll",$scope.scrollHandler);
                        $("html,body").scrollTop(KFZ.page.pageTop);
//                        $(".height_8_gray").show();

                    }else{
                        $scope.showOrder = false;
                        $scope.showArea = false;
                        $scope.showCatSelect = false;
                        $scope[param] = true;
                        //隐藏主页面
                        $("#content").hide();
                        $(".result_filter_box").show();
                        $(window).off("scroll",  $scope.scrollHandler);
                        if(KFZ.page.pageTop>0){
                            $(".result_filter_bar").removeClass("fix_bar").addClass("fix_bar");
                            $(".result_filter_box_area").removeClass("fix_02").addClass("fix_02");
                            $(".result_filter_box_select").removeClass("fix_02").addClass("fix_02");
                        }
//                        $(".height_8_gray").hide();
                    }

                    if(param == 'showOrder') {
                        $span = $(".result_filter_bar").find('.span_order');
                        if($span.hasClass('s_icon_up')){
                            $span.attr('class','span_order s_icon_down');
                            $span.parent().removeClass("click_now");
                        }else{
                            $span.attr('class','span_order s_icon_up');
                            $span.parent().addClass("click_now");

                        }
                        $(".result_filter_bar").find('.span_area').attr('class','span_area s_icon_down');
                        $(".result_filter_bar").find('.span_area').parent().removeClass("click_now");
                        $(".result_filter_bar").find('.span_cat').attr('class','span_cat s_icon_down');
                        $(".result_filter_bar").find('.span_cat').parent().removeClass("click_now");
                    } else if (param == 'showArea') {
                        $span = $(".result_filter_bar").find('.span_area');
                        if($span.hasClass('s_icon_up')){
                            $span.attr('class','span_area s_icon_down');
                            $span.parent().removeClass("click_now");
                        }else{
                            $span.attr('class','span_area s_icon_up');
                            $span.parent().addClass("click_now");
                        }
                        $(".result_filter_bar").find('.span_order').attr('class','span_order s_icon_down');
                        $(".result_filter_bar").find('.span_order').parent().removeClass("click_now");
                        $(".result_filter_bar").find('.span_cat').attr('class','span_cat s_icon_down');
                        $(".result_filter_bar").find('.span_cat').parent().removeClass("click_now");
                    } else if (param == 'showCatSelect') {
                        $span = $(".result_filter_bar").find('.span_cat');
                        if($span.hasClass('s_icon_up')){
                            $span.attr('class','span_cat s_icon_down');
                            $span.parent().removeClass("click_now");
                        }else{
                            $span.attr('class','span_cat s_icon_up');
                            $span.parent().addClass("click_now");
                        }
                        $(".result_filter_bar").find('.span_order').attr('class','span_order s_icon_down');
                        $(".result_filter_bar").find('.span_order').parent().removeClass("click_now");
                        $(".result_filter_bar").find('.span_area').attr('class','span_area s_icon_down');
                        $(".result_filter_bar").find('.span_area').parent().removeClass("click_now");
                    }
                }
            }
            /*隐藏筛选项*/
            $scope.hideFilter = function(){
                setTimeout(function(){
                    $scope.showOrder = false;
                    $scope.showArea = false;
                    $scope.showCatSelect = false;
                    //打开主页面
                    $("#content").show();
                    $(".result_filter_box").hide();
                    // $(window).on("scroll",$scope.scrollHandler);
                },620);
            }
            $scope.getParams = function(type,url){
                var pathname = window.location.pathname;
                if(url && url != undefined){
                    pathname = url;
                }
                pathname = pathname.replace(/\/product\//, "");      //对当前url适配，防止url未修改，针对product
                pathname = pathname.replace(/v6g0/, "");      //对当前url适配，防止url未修改，针对product
                pathname = pathname.replace(/\/author\//, "");       //对当前url适配，防止url未修改，针对author
                pathname = pathname.replace(/(C[0-9a-z]*\/)/g,"");   //去除一级分类
                pathname = pathname.replace(/\/$/, "");
                pathname = pathname.replace(/^\//, "");
                //根据所需类型返回
                if(type && type == 'array'){
                    pathname = pathname.toLowerCase()
                        .replace(/(cat_|img_|[l-z])/ig, '-$1')
                        .replace(/ca-t_/, 'cat_')
                        .replace(/^-/, '');
                    return pathname?pathname.split('-'):[];
                }else{
                    return pathname || "";
                }
            }
            $scope.getParams2 = function(type,url){
                var pathname = window.location.pathname;
                if(url && url != undefined){
                    pathname = url;
                }
                pathname = pathname.replace(/category[\/]?/g,'');
                pathname = pathname.replace(/\/product\//, "");      //对当前url适配，防止url未修改，针对product
                pathname = pathname.replace(/v6g0/, "");      //对当前url适配，防止url未修改，针对product
                pathname = pathname.replace(/\/author\//, "");       //对当前url适配，防止url未修改，针对author
                pathname = pathname.replace(/(C[0-9a-z]*\/)/g,"");   //去除一级分类
                pathname = pathname.replace(/\/$/, "");
                pathname = pathname.replace(/^\//, "");
                //根据所需类型返回
                if(type && type == 'array'){
                    pathname = pathname.toLowerCase()
                        .replace(/(cat_|img_|[l-z])/ig, '-$1')
                        .replace(/ca-t_/, 'cat_')
                        .replace(/^-/, '');
                    return pathname?pathname.split('-'):[];
                }else{
                    return pathname || "";
                }
            }
            $scope.getNewUrl = function(requestData){
                var params = $scope.getParams('array'),
                    requestData = requestData == undefined ?{} :requestData;
                for (var k in requestData) {
                    var fpk = requestData[k],
                        hasIt = 0;	                    // 判断是否地址栏里已存在此参数的标识位
                    if (fpk === undefined) continue;	// 当fpk为undefined时
                    for (var i = 0; i < params.length; i ++) {
                        var op  = params[i],
                            opk = op.substr(0, 1);
                        if (op === "cat_") continue;
                        // 去分页参数
                        if (opk === "w") {
                            params[i] = "";
                            continue;
                        }
                        // 判断是否地址栏里已存在此参数
                        if (opk === k) {
                            if (fpk === "") {
                                params[i] = "";
                            } else {
                                if( k=='t' || k == 'u'){
                                    params[i] = k + fpk;
                                }else{
                                    fpk = KFZ.util.charToUnicode(fpk);
                                    var isLM = /l|m/.test(k);
                                    if (op.substr(1).replace(/[\d]*h/, "") !== fpk) {	// 判断其值是否有改动
                                        params[i] = k + (isLM ? "h" : "") + fpk;
                                    }
                                }
                            }
                            hasIt = 1;
                            break;
                        }
                    }
                    if (!hasIt) {
                        if (fpk === "") {
                            params[params.length] = "";
                        } else {
                            if( k=='t' || k == 'u'){
                                params[params.length] = k + fpk;
                            }else {
                                fpk = KFZ.util.charToUnicode(fpk);
                                var isLM = /l|m/.test(k);
                                params[params.length] = k + (isLM ? "h" : "") + fpk;
                            }
                        }
                    }
                }
                var pathname = params.join("");
                return pathname;
            }
            $scope.getRequestDataByUrl = function(){
                var params = $scope.getParams2('array'),
                    paramDic = $scope.paramDic,
                    requestData = {};
                params && $.each(params,function(i,item){
                    var op  = params[i],
                        opk = op.substr(0, 1),
                        value = '';
                    if (op.match('cat_')) return;
                    if (op.match('img_')) opk = 'img_';

                    if( opk =='t' || opk == 'u' || opk == 'v' || opk == 'w'){
                        value = op.substr(1);
                    }else if(opk == 'img_'){
                        value = op.replace('img_','');
                    }else{
                        value = op.substr(1);
                        if(/l|m/.test(opk)){
                            value = value.replace(/[\d]*h/, "");
                        }
                        if(value) value = KFZ.util.unicodeToChar(value);
                    }
                    var key = KFZ.common.getKey(paramDic,opk);
                    if(key)requestData[key] = value;
                });
                return requestData;
            }
            /*记录历史*/
            $scope.rememberHistory = function(params,callback){
                /*若url改变修改url地址，否则用原先的地址*/
                if (params.match(/http|https/g)) {
                    var url = params;
                } else {
                    var url = KFZ.url.host + (!params?params:params + "/");
                }
                if(params.match(/w\d+/g)){
                    location.href = url;
                } else {
                    var isnotH5 = KFZ.util.dealHistory(url, function() {
                        callback && callback();
                    });
                    location.href = url;
                   /* if(isnotH5){
                        console.log(url);
                        location.href = url;
                       // return false;
                    }*/
                }
            }
            /*替换历史记录*/
            $scope.replaceHistory = function(params,callback){
                /*若url改变修改url地址，否则用原先的地址*/
                if (params.match(/http|https/g)) {
                    var url = params;
                } else {
                    var url = KFZ.url.host + (!params?params:params + "/");
                }
                if(window.history&&history.replaceState){
                    // history.replaceState(null,null,url);
                    location.href = url;
                    callback && callback();
                }else{
                    location.href = url;
                }
            }
            /*图文切换*/
            $scope.change = function($event){
                var that = this,
                    requestData = {};
                $scope.hideFilter();
                //var isImg = $(".pic_word_box").find('.s_icon_pic').length?2:1;
                var isImg = $(".list_type").hasClass('icon-liebiao1')?2:1;
                /*获取新的url最后一级别参数*/
                var urlLastParam = $scope.getParams().replace(/img_\d+/,'');
                urlLastParam = urlLastParam.replace(/search/,'');
                if(isImg == 2) {
                    urlLastParam = $scope.getParams().replace(/img_\d+/,'')+'img_' + isImg;
                    urlLastParam = urlLastParam.replace(/search/,'');
                }
                /*获取新url的pathname*/
                // var pathArr = window.location.pathname.split("/");
                var pathArr = window.location.pathname.split("/");
                var firstLevelClass = "";

                var newPathName = "";
                if(pathArr.indexOf('search') > -1) {
                    if(pathArr[2] != "" ){
                        firstLevelClass = pathArr[2];
                    }
                    newPathName = 'search/' + firstLevelClass+"/"+urlLastParam;
                } else {
                    if(pathArr[1] != "" ){
                        firstLevelClass = pathArr[1];
                    }
                    newPathName = firstLevelClass+"/"+urlLastParam;
                }
                /*if(pathArr[1] != "" ){
                    firstLevelClass = pathArr[1];
                }
                var newPathName = firstLevelClass+"/"+urlLastParam;
                console.log(newPathName);*/
                $scope.replaceHistory(newPathName,function(){
                    if(isImg===1){
                        $('.list_type').removeClass('icon-liebiao2').addClass('icon-liebiao1');
                        $('.product_list').removeClass('no_img').addClass('has_img');
                    }else{
                        $('.list_type').removeClass('icon-liebiao1').addClass('icon-liebiao2');
                        $('.product_list').removeClass('has_img').addClass('no_img');
                    }
                });
                /*检测url是否改变,若改变重新请求数据*/
                //$scope.rememberHistory(newPathName,function(){
                //    $scope.hideFilter();
                //    $scope.render(1);
                //});
                return false;
            }
            /*排序*/
            $scope.eventFilterOrder = function(param){
                var value = param;
                /*获取新的url最后一级别参数*/
                var urlLastParam =  $scope.getParams().replace(/v\d+/,'');
                urlLastParam = urlLastParam.replace(/search/,'');
                if (value != 0) {
                    urlLastParam = urlLastParam +'v'+value;
                    urlLastParam = urlLastParam.replace(/search/,'');
                }
                /*获取新url的pathname*/
                // var pathArr = window.location.pathname.split("/");
                var pathArr = window.location.pathname.split("/");
                var firstLevelClass = "";

                var newPathName = "";
                if(pathArr.indexOf('search') > -1) {
                    if(pathArr[2] != "" ){
                        firstLevelClass = pathArr[2];
                    }
                    newPathName = 'search/' + firstLevelClass+"/"+urlLastParam;
                } else {
                    if(pathArr[1] != "" ){
                        firstLevelClass = pathArr[1];
                    }
                    newPathName = firstLevelClass+"/"+urlLastParam;
                }
                /*if(pathArr[1] != "" ){
                    firstLevelClass = pathArr[1];
                }
                var newPathName = firstLevelClass+"/"+urlLastParam;*/
                /*检测url是否改变,若改变重新请求数据*/
                $scope.rememberHistory(newPathName,function(){
                    $scope.hideFilter();
                    $scope.render(1);
                });
                return false;
            }
            /*所在地*/
            $scope.eventArea = function($event){
                var that = this,
                    param,
                    paramDic = $scope.paramDic,
                    requestData = {};
                //选择效果
                var $li = angular.element($event.target).parent("a").parent("li");
                $(".result_filter_box_area").find("li").removeClass("now");
                $li.addClass("now");
                param = angular.element($event.target).parent("a").parent("li").attr("data");
                if(param){
                    requestData[paramDic['area']] = param;
                } else {
                    requestData[paramDic['area']] = '';
                }
                /*获取新的url最后一级别参数*/
                var urlLastParam = $scope.getNewUrl(requestData);
                urlLastParam = urlLastParam.replace(/search/,'');
                /*获取新url的pathname*/
                // var pathArr = window.location.pathname.split("/");
                var pathArr = window.location.pathname.split("/");
                var firstLevelClass = "";

                var newPathName = "";
                if(pathArr.indexOf('search') > -1) {
                    if(pathArr[2] != "" ){
                        firstLevelClass = pathArr[2];
                    }
                    newPathName = 'search/' + firstLevelClass+"/"+urlLastParam;
                } else {
                    if(pathArr[1] != "" ){
                        firstLevelClass = pathArr[1];
                    }
                    newPathName = firstLevelClass+"/"+urlLastParam;
                }
                /*if(pathArr[1] != "" ){
                    firstLevelClass = pathArr[1];
                }
                var newPathName = firstLevelClass+"/"+urlLastParam;*/
                /*检测url是否改变,若改变重新请求数据*/
                $scope.rememberHistory(newPathName,function(){
                    $scope.hideFilter();
                    $scope.render(1);
                });
                return false;
            }
            /*价格*/
            $scope.eventPrice = function($event){
                var that = this,
                    paramDic = $scope.paramDic,
                    requestData = {};
                var price = '',
                    $price = $('[data-name=price]'),
                    valS = $.trim($price?$price.eq(0).val():''),
                    valE = $.trim($price?$price.eq(1).val():''),
                    price = valS&&valE?(valS+'h'+valE):(valS&&!valE?(valS+'h'):(!valS&&valE?('h'+valE):''));
                if(price){
                    requestData[paramDic['price']] = price;
                } else {
                    requestData[paramDic['price']] = '';
                }
                /*获取新的url最后一级别参数*/
                var urlLastParam = that.getNewUrl(requestData);
                urlLastParam = urlLastParam.replace(/search/,'');
                /*获取新url的pathname*/
                // var pathArr = window.location.pathname.split("/");
                var pathArr = window.location.pathname.split("/");
                var firstLevelClass = "";

                var newPathName = "";
                if(pathArr.indexOf('search') > -1) {
                    if(pathArr[2] != "" ){
                        firstLevelClass = pathArr[2];
                    }
                    newPathName = 'search/' + firstLevelClass+"/"+urlLastParam;
                } else {
                    if(pathArr[1] != "" ){
                        firstLevelClass = pathArr[1];
                    }
                    newPathName = firstLevelClass+"/"+urlLastParam;
                }
                /*if(pathArr[1] != "" ){
                    firstLevelClass = pathArr[1];
                }
                var newPathName = firstLevelClass+"/"+urlLastParam;*/
                /*检测url是否改变,若改变重新请求数据*/
                $scope.rememberHistory(newPathName,function(){
                    $scope.hideFilter();
                    $scope.render(1);
                });
                return false;
            }
            $scope.changeSelect = function() {
                // 获取当前的order排序选中选项
                $ContentOrderLi = $('.result_filter_box_order').find('li');
                $ContentOrderLi.each(function() {
                    if($(this).hasClass('now')) {
                        // console.log(this)ar
                        $('#orderBar').text($(this).text());
                        $('#orderBar').addClass('click_now');
                        if( $('#orderBar').text() == '默认排序') {
                            $('#orderBar').text('默认排序');
                            $('#orderBar').removeClass('click_now');
                        }
                    }
                })
                // 判断路径改动成默认状态
                var mypathname = window.location.pathname;
                // console.log(mypathname)
                var pathnameArr = mypathname.split('/');
                var urlLastParam =  $scope.getParams().replace(/v\d+/,'');
                // var pathnameArrHasV = pathnameArr[2].substr(0,2);
                // console.log(pathnameArrHasV)
                // console.log(pathnameArr)
                // console.log(urlLastParam)
                if((pathnameArr[2] == '') || (pathnameArr[2] == urlLastParam)) {
                    $('#orderBar').text('默认排序');
                    $('#orderBar').removeClass('click_now');
                    $('.result_filter_box_order').find('li').removeClass('now');
                    var liFirst = $('.result_filter_box_order').find('li').first();
                    $(liFirst).addClass('now').append('<span class="icon_shop"></span>')
                }
                /*if((pathnameArr[2] == '') || (pathnameArr[2] == urlLastParam) || (pathnameArr[2] == 'v6') || (pathnameArrHasV == 'v6')) {
                    if((urlLastParam == '')) {
                        return false;
                    } else {
                        $('#orderBar').text('默认排序');
                        $('#orderBar').removeClass('click_now');
                        $('.result_filter_box_order').find('li').removeClass('now');
                        var liFirst = $('.result_filter_box_order').find('li').first();
                        $(liFirst).addClass('now').append('<span class="icon_shop"></span>')
                    }
                }*/

                // 获取当前的所在地选中选项
                $ContentAreaLi = $('.result_filter_box_area').find('li');
                $ContentAreaLi.each(function() {
                    if($(this).hasClass('now')) {
                        // console.log(this);
                        $('#area').text($(this).text());
                        $('#area').addClass('click_now');
                        if( $('#area').text() == '不限') {
                            $('#area').text('所在地');
                            $('#area').removeClass('click_now');
                        }
                    }
                })
                // 获取筛选条件选中选项
                $ContentSelectA = $('.cat_change_box_select').find('a');
                $ContentSelectA.each(function() {
                    if($(this).text().indexOf('地区') !=-1) {
                        $(this).hide();
                        // console.log('成功;');
                    }
                    if($(this).text().indexOf('价格') !=-1) {
                        $('#select').addClass('click_now');
                    } else {
                        $('#select').removeClass('click_now');
                    }
                })

                /*if($ContentSelectA.length >= 2) {
                    $('#select').addClass('click_now');
                } else {
                    $('#select').removeClass('click_now');
                }*/
            }
            $scope.changeSelect();

            // 对选中的a的href进行处理
            $scope.changeSelectHref= function() {
                var selectA = $('.selectHref').find('a.selected');
                $.each(selectA,function(index, item) {
                    var newHref;
                    var locationHref = location.href;
                    if($(item).attr('href').match(/(http|https)/)) {
                        newHref = location.origin;
                    } else {
                        // newHref = '' + $(item).attr('href')
                        if(locationHref.match(/search/)) {
                            newHref = '/search' + $(item).attr('href')
                        } else {
                            newHref = $(item).attr('href')
                        }
                    }
                    $(item).attr('href',newHref);
                })

                var listHref = $('.changeHttp');
                var locationHref = location.href;
                $.each(listHref, function(index,item) {
                    var thisHref = $(item).attr('href')
                    if(thisHref != 'javascript:;') {
                        if(locationHref.match(/search/)) {
                            $(item).attr('href','/search'+ thisHref)
                        } else {
                            $(item).attr('href', thisHref)
                        }
                    }
                })

            }
            $scope.changeSelectHref();
            /*点击跳转*/
            $scope.clickItem =  function($event){
                var url =  angular.element($event.target).parent().parent(".book_item ").attr("url");
                location.href = url;
            }
            /*渲染页面*/
            $scope.render = function(isNeedFilterList){
                var that = this,paramsStr = $scope.getParams();
                //paramsStr.replace(/(C[0-9a-z]*\/)/g,"");
                // 渲染图文
                $scope.getData(function(){
                    var requestData = $scope.getRequestDataByUrl(),
                        data = KFZ.page.searchData;
                    $scope.isPHPRender = false;
                    $scope.isAsynRender = true;
                    //打开主页面
                    $scope.isMainShow =true;
                    $(".result_filter_box").hide();
                    if(data.noImg != 1){
                        $scope.isImg = true;
                    }else{
                        $scope.isText = true;
                    }
                    //$(".pic_word_box").find('span').attr('class',/img_2/.test(paramsStr)?'s_icon_word':'s_icon_pic');
                    if(data.productList && data.productList.total>0 ){
                        /*处理数组*/
                        var arr = [];
                        $.each(data.productList,function(k,v){
                            if(k == "time" || k == "total_found" || k == "total" ){
                            }else{
                                arr.push(v);
                            }
                        });
                        $scope.datas = arr;
                    }
                    //更新title
                    document.title = data.mataInfo.title;
                    /*
                     //模糊
                     if(data.fuzzyWord && data.fuzzyWord.key){
                     $('.result_search_vague').show().find('span').html(data.fuzzyWord.key||'');
                     $('.result_search_vague').show().find('i').html(data.fuzzyWord.total||'');
                     }else{
                     $('.result_search_vague').hide().find('span').html('');
                     $('.result_search_vague').hide().find('i').html('');
                     }*/
                },paramsStr,isNeedFilterList);
                return false;
            }
            $scope.getData = function(callback,params,isNeedFilterList){
                params = params.replace('category','').replace(/^\//g,'');
                var data = {type: 1, params: params};
                var pathname  = window.location.pathname;
                var pathArr = pathname.split("/");
                /*book域若有分类则传递cat参数，通过域名一级分类以C开头区分*/
                if(pathArr[1] != "" && pathArr[1].substring(0,1) == "C"){
                    pathArr[1] = pathArr[1].replace(pathArr[1].substring(0,1),"");
                    var catParam = pathArr[1];
                }
                if(catParam){
                    data = {type: 1, params: params,cat:catParam};
                }
                if(isNeedFilterList) {
                    data["isNeedFilterList"] = 1;
                }
                var host = window.location.host;
                if(!host.match(/search/g)){//如果不是搜索域需要加上参数cat
                    var cat = params.match(/(C[0-9a-z]*\/)/g);
                    if (cat && cat.length) {
                        cat = cat[0];
                        if(cat){
                            cat = cat.replace(/\//, "").replace(/C/, "");
                            data["cat"] = cat;
                        }
                    }
                }
                // 发送请求
                $.ajax({
                    url:  KFZ.url.host + 'product/',
                    data:data,
                    success: function(data){
                        var data = JSON.parse(data);
                        if(data){
                            KFZ.page.searchData = data;
                            callback && callback(data);
                        }
                    },
                    error:function(){

                    }
                });
            }

            //获取返回地址
            $scope.getUrl = function () {
                var hash = location.hash.substr(1);
                var href = location.href.replace(location.hash, '');
                var returnUrl = 'returnUrl=' + encodeURIComponent(href + (hash ? (/\?/.test(href) ? '&' : '?') + 'hash=' + hash : ''));
                return returnUrl;
            }
            //点击登录
            $scope.toLogin = function () {
                var returnUrl = $scope.getUrl();
                if($scope.isWeiXin()){
                  location.href = KFZ.sites.adapter.login + 'Interface/Wechat/dispatch?hash=login';
                }else {
                  location.href = KFZ.sites.adapter.login + 'Mobile/Login/index?mustLogin=1&' + returnUrl;
                }
            };

            $scope.handleClickOpenApp = function() {
                var uaStr = window.navigator.userAgent.toLocaleLowerCase();
                var openUrl = 'app.kongfz.com?page=shopCateGoods&cateId='+PAGE.search.cateId+'&cateName='+PAGE.search.cateName;
                var schema = '';
                $scope.timer = null;
                track.send('c_leadTo', {type: 2});
                if (uaStr.indexOf('micromessenger') > -1 && !(uaStr.indexOf('miniprogram') > -1 || window.__wxjs_environment === 'miniprogram')) {
                    window.location.href = 'http://a.app.qq.com/o/simple.jsp?pkgname=com.kongfz.app';
                } else if (uaStr.indexOf('android') === -1) {
                    window.location.href = 'https://res2.kongfz.com/openApp.html?'+openUrl.split('?')[1];
                    // schema = 'kongfzApp://';
                    // window.location.href = schema+openUrl;
                    // if (!$scope.timer) {
                    //     $scope.timer = setTimeout(function () {
                    //         $scope.timer = null;
                    //         window.location.href = 'https://apps.apple.com/cn/app/%E5%AD%94%E5%A4%AB%E5%AD%90%E6%97%A7%E4%B9%A6%E7%BD%91/id914399672';
                    //     },2000);
                    // }
                } else {   // 默认按照android处理
                    schema = 'kongfz://';
                    window.location.href = schema+openUrl;
                    // 跳转到app下载页面
                    setTimeout(function () {
                        window.location.href = KFZ.sites.adapter.m+"p/download";
                    },0)
                }
            };
  });
   searchShop.controller('searchNull', function($scope,$http) {

    });
