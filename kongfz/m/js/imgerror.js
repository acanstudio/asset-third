/**
 * Created by Administrator on 16-5-28.
 */
var imgError = angular.module('imgError',[]);



/*图片错误组件*/
imgError.directive('kfzImgErr', function() {
    return {
        restrict: 'A',
        scope:{
            kfzImgErr:'@'
        },
        transclude: false,
        link : function(scope, element, attrs) {
            //判断图片是否存在
            var ImgObj = new Image();
            var srcAttrVal = "";
            if(attrs.src){
                srcAttrVal = attrs.src;
            }else  if(attrs.ngSrc){
                srcAttrVal = attrs.ngSrc;
            }
            ImgObj.src = srcAttrVal;
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