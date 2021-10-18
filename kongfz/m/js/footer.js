/**
 * Created by Administrator on 16-5-11.
 */
var footer = angular.module('footer', []);
/*尾部组件*/
footer.directive('kfzFooter', function ($document) {
    return {
        restrict: 'A',
        scope: {
            name: '@',
            url: '@',
            pcUrl: '@'
        },
        transclude: true,
        link: function (scope, element, attrs) {
          	/*app检测*/
          	var u = navigator.userAgent;
          	var isApp = u.indexOf('KFZ_COM') > -1;
            if(isApp){
           		scope.footerStatus = false;
           		$('body').addClass('kfz-app');
           	}else{
           		scope.footerStatus = true;
           	}
            // 检测是否微信环境
            scope.isWeiXin = function(){
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
            scope.isLogin = false;
            scope.weChat = false;
            scope.weChatIco = false;
            scope.pcUrl = attrs.pcUrl;
            scope.registerUrl = isApp ? KFZ.sites.adapter.m + "m/#/login/auth-signup" : KFZ.sites.adapter.login + "Mobile/Register/index";
            scope.feedbackUrl = KFZ.sites.adapter.mmessage + "message/mmessage/mmessage.html#/customer";
            scope.loginUrl = isApp ?  KFZ.sites.adapter.m + "m/#/user/personal" : KFZ.sites.adapter.login + "Mobile/Login/index";
            if (!KFZ.user) {
                KFZ.user = {};
            }
            if (KFZ.user.isLogin) {
                scope.isLogin = true;
                scope.loginName = KFZ.user.nickname;
            } else {
                scope.isLogin = false;
            }
            //微信二维码
      			if(KFZ.isWeichat==1){
      			   scope.weChatIco = true;
      			   $('body').addClass('weChat-footer');
      			}
            if(scope.isWeiXin()){
               scope.registerUrl = KFZ.sites.adapter.login + 'Interface/Wechat/dispatch?hash=register';
            }
            //获取返回地址
            scope.getUrl = function () {
                var hash = location.hash.substr(1);
                var href = location.href.replace(location.hash, '');
                var returnUrl = 'returnUrl=' + encodeURIComponent(href + (hash ? (/\?/.test(href) ? '&' : '?') + 'hash=' + hash : ''));
                return returnUrl;
            }
            //点击登录
            scope.toLogin = function () {
                var returnUrl = scope.getUrl();
                if(scope.isWeiXin()){
                  location.href = KFZ.sites.adapter.login + 'Interface/Wechat/dispatch?hash=login';
                }else {
                  location.href = isApp ?  KFZ.sites.adapter.m + 'm/?mustLogin=1&' + returnUrl + '#/login/auth-login' : KFZ.sites.adapter.login + "Mobile/Login/index?mustLogin=1&" + returnUrl;
                }
            };
            //点击退出
            scope.toLogOut = function () {
                var returnUrl = scope.getUrl();
                location.href = KFZ.sites.adapter.m + "/api-user/logout/?" + returnUrl;
            };
            /*页面模板渲染*/
            scope.getContentUrl = function () {
                return attrs.url;
            };
            scope.weChatShow = function(){
            	scope.weChat = true;
            };
            scope.weChatClose = function(){
            	scope.weChat = false;
            };

            //拍卖缓存问题-重新获取登录信息
            scope.$on('loginStatus',function(event,loginInfo){
            	if(loginInfo.isLogin){
            		scope.isLogin = true;
	                scope.loginName = loginInfo.nickname;
	            } else {
	                scope.isLogin = false;
	            }
            });
        },
        template: '<div ng-include="getContentUrl()"></div>'
    };
});
