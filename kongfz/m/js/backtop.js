/**
 * Created by Administrator on 16-5-28.
 */
var backTop = angular.module('backTop',[]);



/*回到顶部组件*/
backTop.directive('kfzBackTop', function($document) {
    return {
        restrict: 'A',
        scope:{
            name:'@'
        },
        transclude: true,
        link : function(scope, element, attrs) {
            /*初始化*/
            element.css('display',"none");
            window.onscroll = function() {
                var scrollTop =   document.documentElement.scrollTop || document.body.scrollTop;
                if (scrollTop > 100) { //判断滚动条距离窗口顶部多远时显示出来，这里是100px
                    element.css('display',"block");
                } else {
                    element.css('display',"none");
                }
            };
            /*点击回到顶部*/
            scope.goBack = function(){
                setTimeout(function(){
                    window.scrollTo(0,0);
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