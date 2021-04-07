/*
* js入口文件
*
* @created 2013-04-10
* @author zzy
*/
var object={
	//模块添加
    path:{
			//核心文件
			'jquery':   {'path':'/Js1/core/jquery.js'},
			'extend':   {'path':'/Js1/core/extend.js'},
			'upload':	{'path':'/Js1/core/upload.js'},
			'zclip':	{'path':'/Js1/core/jquery.zclip.min.js'},
			//插件
			'impromptu':{'path':'/Js1/plugins/Impromptu/jquery-impromptu.js'},
			'slides':   {'path':'/Js1/plugins/Slides/jquery.slides.min.js'},
            'slidescroll': {'path':'/Js1/plugins/slideScroll/slide.js'},
			'superslide':    {'path':'/Js1/plugins/slide/js/jquery.SuperSlide.js'},
			'pack':    {'path':'/Js1/plugins/slide/js/jquery.pack.js'},
			'blockUI':    {'path':'/Js1/plugins/slide/js/jQuery.blockUI.js'},
			'validate':{'path':'/Js1/plugins/validate/jquery.validate.js'},
			'cookie':{'path':'/Js1/plugins/jquery.cookie.js'},
			'form':{'path':'/Js1/plugins/jquery.form.js'},
			'newsuperslide':    {'path':'/Js1/project/bbs/jquery.SuperSlide.js'},
			'fancybox':{'path':'/Js1/project/vet/jquery.fancybox-1.3.1.pack.js'},
            'loadside':{'path':'/Js1/plugins/loadside/jquery.loadSlide.min.js'},
            'loadside':{'path':'/Js1/plugins/loadside/jquery.loadSlide.min.js'},
            'dialog':{'path':'/Js1/plugins/dialog/js/dialog.plus.js'},
            'jumeiSDK':{'path':'/Js1/project/site/jumeiSDK.js'},
			//新大首页
			'site/common':{'path':'/Js1/project/site/common.js'},
            'site/index':{'path':'/Js1/project/site/index.js'},
            //频道页
			'site/channel':{'path':'/Js1/project/site/channel.js'},
			//搜索
			'site/search':{'path':'/Js1/project/site/search.js'},
			//关于我们
			'site/about':{'path':'/Js1/project/site/about.js'},
			//帮助中心
			'site/help':{'path':'/Js1/project/site/help.js'},
			//登录
            'site/login': {'path':'/Js1/project/site/login.js'},
			//登录
            'login': {'path':'/Js1/project/public/login.js'},
            //新社区前台
            'bbs/index':{'path':'/Js1/project/bbs/index.js'},
			'bbs/forum':{'path':'/Js1/project/bbs/forum.js'},
			'bbs/newlist':{'path':'/Js1/project/bbs/newlist.js'},
			'bbs/thread':{'path':'/Js1/project/bbs/thread.js'},
			'bbs/post':{'path':'/Js1/project/bbs/post.js'},

            //百科前台
			'baike/common':{'path':'/Js1/project/baike/common.js'},
            'baike/index':{'path':'/Js1/project/baike/index.js'},
            'baike/category':{'path':'/Js1/project/baike/category.js'},
			'baike/expert':{'path':'/Js1/project/baike/expert.js'},
            'baike/article':{'path':'/Js1/project/baike/article.js'},
			'baike/manage':{'path':'/Js1/project/baike/manage.js'},
			'baike/petcategory':{'path':'/Js1/project/baike/petcategory.js'},
			//新版百科前台
			'baikenew/PageSlide':{'path':'/Js1/plugins/jquery.PageSlide.min.js'},
			'baikenew/common':{'path':'/Js1/project/baikenew/common.js'},
			'baikenew/index':{'path':'/Js1/project/baikenew/index.js'},			
			'baikenew/article':{'path':'/Js1/project/baikenew/article.js'},
			'baikenew/photo':{'path':'/Js1/project/baikenew/photo.js'},
			'baikenew/ask':{'path':'/Js1/project/baikenew/ask.js'},
			'baikenew/post':{'path':'/Js1/project/baikenew/post.js'},
			'baikenew/all':{'path':'/Js1/project/baikenew/all.js'},
			'baikenew/manage':{'path':'/Js1/project/baikenew/manage.js'},
			'baikenew/tag':{'path':'/Js1/project/baikenew/tag.js'},
			//医院前台
			'vet/index':{'path':'/Js1/project/vet/index.js'},
            'vet/index/index':{'path':'/Js1/project/vet/Index/index.js'},
            'vet/index/coupon':{'path':'/Js1/project/vet/Index/coupon.js'},
			'vet/index/order':{'path':'/Js1/project/vet/Index/order.js'},
			'vet/public':{'path':'/Js1/project/vet/public.js'},
			'vet/index/business':{'path':'/Js1/project/vet/Index/business.js'},
			'vet/index/tuan':{'path':'/Js1/project/vet/Index/tuan.js'},
			'vet/index/ask':{'path':'/Js1/project/vet/Index/ask.js'},
            'vet/index/search':{'path':'/Js1/project/vet/Index/search.js'},
            'vet/first_visit':{'path':'/Js1/project/vet/first_visit.js'},
            'vet/indexnew/index':{'path':'/Js1/project/vet/Indexnew/index.js'},
            'vet/indexnew/common':{'path':'/Js1/project/vet/Indexnew/common.js'},
            //医院新前台
            'vet/new/common':{'path':'/Js1/project/vet/new/common.js'},	
            'vet/new/index':{'path':'/Js1/project/vet/new/index.js'},	
            'vet/new/jquery-min':{'path':'/Js1/project/vet/new/jquery-1.8.0.min.js'},
            'vet/new/list':{'path':'/Js1/project/vet/new/list.js'},
            'vet/new/map':{'path':'/Js1/project/vet/new/map.js'},
            'vet/new/nosearchResult':{'path':'/Js1/project/vet/new/nosearchResult.js'},
            'vet/new/order_success':{'path':'/Js1/project/vet/new/order_success.js'},
            'vet/new/order-index':{'path':'/Js1/project/vet/new/order-index.js'},
            'vet/new/petServicesIndex':{'path':'/Js1/project/vet/new/petServicesIndex.js'},
            'vet/new/pro_detail':{'path':'/Js1/project/vet/new/pro_detail.js'},
            'vet/new/searchResult':{'path':'/Js1/project/vet/new/searchResult.js'},
            'vet/new/util':{'path':'/Js1/project/vet/new/util.js'},
		    'vet/new/loadSlide':{'path':'/Js1/project/vet/new/jquery.loadSlide.min.js'},	
			//医院后台
			'admin/public':{'path':'/Js1/project/vet/Admin/public.js'},
			'admin/card':{'path':'/Js1/project/vet/Admin/card.js'},
			'admin/business':{'path':'/Js1/project/vet/Admin/business.js'},
			'admin/coupon':{'path':'/Js1/project/vet/Admin/coupon.js'},
			'admin/tuan':{'path':'/Js1/project/vet/Admin/tuan.js'},
			'admin/ad':{'path':'/Js1/project/vet/Admin/ad.js'},
			'admin/shopAd':{'path':'/Js1/project/vet/Admin/shopAd.js'},
			'admin/serviceImg':{'path':'/Js1/project/vet/Admin/service.js'},
            'admin/index':{'path':'/Js1/project/vet/Admin/index.js'},
			'admin/order':{'path':'/Js1/project/vet/Admin/order.js'},
			'admin/recommend':{'path':'/Js1/project/vet/Admin/recommend.js'},
			'admin/addedList':{'path':'/Js1/project/vet/Admin/addedList.js'},
            'admin/discount':{'path':'/Js1/project/vet/Admin/discount.js'},
            'admin/giveActivity':{'path':'/Js1/project/vet/Admin/giveActivity.js'},
			'admin/mobileAd':{'path':'/Js1/project/vet/Admin/mobileAd.js'},
            'admin/clerk':{'path':'/Js1/project/vet/Admin/clerk.js'},
            'admin/activities':{'path':'/Js1/project/vet/Admin/activities.js'},
			//新个人中心
			'userinfo/public':{'path':'/Js1/project/userinfo/public.js'},
			'userinfo/safe':{'path':'/Js1/project/userinfo/safe.js'},
			'userinfo/user':{'path':'/Js1/project/userinfo/user.js'},
			'userinfo/pet':{'path':'/Js1/project/userinfo/pet.js'},
			'userinfo/message':{'path':'/Js1/project/userinfo/message.js'},
			'userinfo/message_index':{'path':'/Js1/project/userinfo/message_index.js'},
			'userinfo/coupon':{'path':'/Js1/project/userinfo/coupon.js'},
			'userinfo/notify':{'path':'/Js1/project/userinfo/notify.js'},
			'userinfo/notice':{'path':'/Js1/project/userinfo/notice.js'},
			'userinfo/shop_favorite':{'path':'/Js1/project/userinfo/shop_favorite.js'},
			'userinfo/yhq_favorite':{'path':'/Js1/project/userinfo/yhq_favorite.js'},
			'userinfo/tg_favorite':{'path':'/Js1/project/userinfo/tg_favorite.js'},
			'userinfo/order':{'path':'/Js1/project/userinfo/order.js'},
			'userinfo/shop_order':{'path':'/Js1/project/userinfo/shop_order.js'},
			'userinfo/account':{'path':'/Js1/project/userinfo/account.js'},
			'userinfo/recharge':{'path':'/Js1/project/userinfo/recharge.js'},
			'userinfo/ajaxupload':{'path':'/Js1/project/userinfo/jquery.ajaxupload.js'},
			'userinfo/avatar':{'path':'/Js1/project/userinfo/avatar.js'},
			'userinfo/inviteFriends':{'path':'/Js1/project/userinfo/inviteFriends.js'},
			'userinfo/auto':{'path':'/Js1/project/userinfo/auto.js'},
			'userinfo/cash':{'path':'/Js1/project/userinfo/cash.js'},
            //商家后台
            'vet/business/public':{'path':'/Js1/project/vet/Business/public.js'},
            'vet/business/login':{'path':'/Js1/project/vet/Business/login.js'},
            'vet/business/category':{'path':'/Js1/project/vet/Business/category.js'},
            'vet/business/stock':{'path':'/Js1/project/vet/Business/stock.js'},
			'vet/business/addcart':{'path':'/Js1/project/vet/Business/addcart.js'},
            'vet/business/member':{'path':'/Js1/project/vet/Business/member.js'},
            'vet/business/clerk':{'path':'/Js1/project/vet/Business/clerk.js'},
            'vet/business/channel':{'path':'/Js1/project/vet/Business/channel.js'},
            'vet/business/comment':{'path':'/Js1/project/vet/Business/comment.js'}

		  },

	cfg:{
			version:'20130409'
		  },
	map:function(key){
				return this.path[key].path;
		  },
	load:function(str,fn){
			var _s = str.split(','),len = _s.length,_str = new Array();
			for(var i=0;i<len;i++){
				_str[i]= this.map(_s[i]);
			}
			
			var oHead = document.getElementsByTagName('head')[0];
			var oScript= document.createElement("script");
			oScript.type = "text/javascript";
			oScript.src= window.config.domain+'/min/?f='+_str.join(',')+'&v=2019121016';
			oHead.appendChild(oScript);
			/*oScript.onload=oScript.onreadystatechange=function(){  
			   if(!this.readyState||this.readyState=='loaded'||this.readyState=='complete'){
					if(fn){
						fn();  
					}
				}
			}*/
			/*用来判断是不是IE浏览器,ie和其它浏览器script支持的事件不一样,if为ie(readyState的值为'loaded'或者'complete'都可以表示这个script已经加载完成),else为其它*/
			if (!+[1,]) {
				oScript.onreadystatechange = function() {
					if (this.readyState == 'loaded' || this.readyState == 'complete') {
						if(fn){
							fn();  
						}
					}
				}
			} else {
				oScript.onload = function() {
					if(fn){
						fn();  
					}
				}
			}
		  }
};  
