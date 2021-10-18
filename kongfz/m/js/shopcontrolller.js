/**
 * Created by Administrator on 16-5-26.
 */

var app = angular.module("app", ["header", "footer", "imgError", 'backTop']);
// config配置路由
app.config(["$compileProvider", function ($compileProvider) {
    $compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|chrome-extension|kongfz|tel|sms):/);

}]);

app.controller('app', function ($scope, $http) {
    if (window.__wxjs_environment && window.__wxjs_environment === 'miniprogram') {
        $('div[kfz-header]').hide();
        $scope.miniprogram = true;
    }
    $scope.hrefurl = function (url) {
        location.href = url;
    }
    $scope.goHome = function () {
        wx.miniProgram.reLaunch({
            url: '/pages/index/index'
        });
    }
    $scope.checkLogistics = function () {
        window.location.href = `${KFZ.url.host}p/download`;
    };
    if(Swiper){
        new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            initialSlide: 0,
            paginationClickable: true,
            loop: true,
            autoplay: 3000,
            autoplayDisableOnInteraction: false
        });
    };
    //下载孔网App
    $scope.openDownloadApp =  function() {
        if(typeof track !== 'undefined'){
            track.send('v_appdownLead1', {});
        }
        var platform = $scope.judgeEnv();
        openUrl = 'app.kongfz.com?page=home';
        var schema = '';
        if (platform.WXWEB) {
            window.location.href = 'http://a.app.qq.com/o/simple.jsp?pkgname=com.kongfz.app';
        } else if (platform.IOS) {
            window.location.href = 'https://res2.kongfz.com/openApp.html?'+openUrl.split('?')[1];
        } else {   // 默认按照android处理
            schema = 'kongfz://';
            window.location.href = schema+openUrl;
            // 跳转到app下载页面
            setTimeout(function () {
                window.location.href = "https://m.kongfz.com/p/download";
            },0)
        }
    }
    /**
     *
     * @returns {{}}
     * APP: 孔网App环境
     * ANDROID: 安卓环境
     * IOS:  ios环境
     * WXWEB:  微信web环境
     * QQBROWSER:  QQ浏览器
     */
    $scope.judgeEnv = function () {
        var platform = {};
        var uaStr = window.navigator.userAgent.toLocaleLowerCase();
        // 判断安卓还是ios
        if (uaStr.indexOf('android') > -1) {
            platform.ANDROID = true;
            platform.IOS = false;
        } else {
            platform.ANDROID = false;
            platform.IOS = true;
        }
        platform.APP = uaStr.indexOf('kfz_com') > -1;
        //判断为微信浏览器
        platform.WXWEB = uaStr.indexOf('micromessenger') > -1 && !(uaStr.indexOf('miniprogram') > -1 || window.__wxjs_environment === 'miniprogram');
        platform.QQBROWSER = uaStr.indexOf('mqqbrowser') > -1;
        return platform;
    }
});

if(typeof track !== 'undefined'){
    track.send('v_orderPaysuccess', {
        orderid: KFZ.url.getQuery().sitepayreqRefID
    })
}