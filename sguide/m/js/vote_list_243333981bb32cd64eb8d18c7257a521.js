/*/public/js/mobile/v2019/public.js*/
/*checkuserlogin*/
function checkuserlogin(){
	var pageuserid=userid;
	$.ajax({type:'get',dataType:'script',url:'https://cnpp.cn/loginstatus/?pageuserid='+pageuserid+'&test='+test+'&fromurl='+window.location.href,success:function(data){	
		if(userid>0){
			if(pageuserid<=0&&(pac=='user')){window.location.reload();}
			$('#commentinputbox .beforeinput').html('诋毁、恶意攻击、无事实依据、非正能量的消极评语会被管理员删除，您的评语可能对其他人有很高的参考价值。');
		}else if(pageuserid>0){
			$.ajax({type:'get',url:'/user/login/',data:{action:'logout'},success:function(data){
				if(pac=='jiameng'||pac=='user'){window.location.reload();}
			}});
		}
		
	}});
}
function cnpplogin(){
	dialog('登录提醒','您还未登录，是否立即前往登录？',function(){window.location.href='/user/login/?fromurl='+window.location.href;});	
}
function goback(){
	if(window.history.length<=1){
		window.location.href='/';
	}else{
		window.history.back();	
	}
}
/*history*/
function addHistory(){
	var historydata=$.cookie('history');
	historydata=historydata!=undefined?historydata.split(','):[];
	brandid>0?historydata[historydata.length]='bid:'+brandid:'';
	brandid<=0&&catid>0?historydata[historydata.length]='cid:'+catid:'';
	historydata=unique(historydata);
	historydata.length>10?historydata.splice(0,1):'';/*cookie最多存10条记录*/
	historydata.length>0?$.cookie('history',historydata.join(','),{expires:365,path:'/'}):'';
	
	if(window.localStorage&&pac!='user'&&pac!='search'&&pdo!='search'){
		var date =Math.round(new Date().getTime()/1000).toString();
		var time=date;
		var historypagestr=window.localStorage.getItem('history2019');
		var list=pac + ':' + pdo + ':' + pid + ':' + time;
		var historypage=historypagestr!=undefined&&historypagestr!=''?historypagestr.split(','):[];
		/*已存在，更新最后访问时间*/
		if(historypagestr&&historypagestr.indexOf(pac + ':' + pdo + ':' + pid)!=-1){
			for(var i in historypage){
				if(historypage[i].indexOf(pac + ':' + pdo + ':' + pid)!=-1){
					historypage.splice(i,1);
					
				}
			}
			historypage.unshift(list);
			window.localStorage.setItem('history2019',historypage.join(','));
			return;	
		}
		historypage.unshift(list);
		historypage=unique(historypage);
		historypage.length>50?historypage.splice(0,1):'';/*cookie最多存50条记录*/
		historypage.length>0?window.localStorage.setItem('history2019',historypage.join(',')):'';
	}
}


/*行业品牌缓存*/
function addCatlist(){
	var catlistblock=['brand10','mingren','goodbest','product','shenghuo','zq','shop','webshop','zhishi','merchants','zq'];
	if((in_array(pac,catlistblock)&&pdo=='list') || catid>0){
		var catcacheid=catid?catid:pid;
		if(window.localStorage){;
			var catpagestr=window.localStorage.getItem('catpage');
			var catpagestr=catpagestr!=undefined&&catpagestr!=''?catpagestr.split(','):[];
			/*已存在，更新最后访问时间*/
			if(catpagestr){
				for(var i in catpagestr){
					if(catpagestr[i]==pid){
						catpagestr.splice(i,1);
						
					}
				}
				catpagestr.unshift(pid);
				window.localStorage.setItem('catpage',catpagestr.join(','));
				return;	
			}
			catpagestr[catpagestr.length]=pid;
			catpagestr=unique(catpagestr);
			catpagestr.length>50?catpagestr.splice(0,1):'';/*cookie最多存50条记录*/
			catpagestr.length>0?window.localStorage.setItem('catpage',catpagestr.join(',')):'';
		}
	}
	
}
function addBrandlist(){
	if(window.localStorage){
		if(pac!='brand'&&pdo!='show'){
			return false;
		}
		var brandcacheid=brandid?brandid:pid;
		var brandpagestr=window.localStorage.getItem('brandpage');
		var brandpagestr=brandpagestr!=undefined&&brandpagestr!=''?brandpagestr.split(','):[];
		/*已存在，更新最后访问时间*/
		if(brandpagestr){
			for(var i in brandpagestr){
				if(brandpagestr[i]==brandcacheid){
					brandpagestr.splice(i,1);
					
				}
			}
			brandpagestr.unshift(brandcacheid);
			window.localStorage.setItem('brandpage',brandpagestr.join(','));
			return;	
		}
		brandpagestr[brandpagestr.length]=pid;
		brandpagestr=unique(brandpagestr);
		brandpagestr.length>50?brandpagestr.splice(0,1):'';/*cookie最多存50条记录*/
		brandpagestr.length>0?window.localStorage.setItem('brandpage',brandpagestr.join(',')):'';
	}
}
function loadswipe(obj){
	obj.each(function(){
		var isrun=false;
		var swipeobj=$(this).parent();
		var _this=$(this);
		var thisheight=Math.ceil(_this.height())+1;console.log(thisheight);
		_this.css({'width':_this.width(),'height':thisheight});
		_this.find('li .slice').css({'width':_this.width(),'height':thisheight});
		_this.find('li').css({'display':'table-cell','vertical-align':'middle'});
		
		/*自动高度*/
		if(_this.attr('autoheight')==1){
			_this.css({'height':'auto'});
			_this.find('li .slice').css({'height':'auto'});
		}
		/*显示当前位置*/
		if(_this.attr('perview')==1){
			_this.find('.perview').length<=0?swipeobj.append('<div class="perview"></div>'):'';
			_this.find('li').each(function(){
				swipeobj.find('.perview').append('<i'+($(this).hasClass('active')?' class="active"':'')+'></i>');	
			});
			swipeobj.find('.perview i').click(function(){
				var pos=_this.width()*$(this).index();
				$(this).parent().find('i.active').removeClass('active');
				$(this).addClass('active');
				_this.animate({'scrollLeft':pos},{duration:300});
				isrun=true;
				setTimeout(function(){
					isrun=false
				},3000);
			});
		}
		/*自动播放*/
		if(_this.attr('autorun')>0){
			setInterval(function(){
				startpos=_this.scrollLeft();
				startx=11;
				endx=0;
				_this.trigger('touchend');
			},_this.attr('autorun'));
		}
		
		/*阻止blockmenu滑动导致页面切换*/
		var startx=0,starty=0,endx=0,endy=0,startpos=0;
		_this.bind('touchstart',function(){
			if(isrun){return;}
			var touch = event.targetTouches[0];
			startx=touch.pageX;
			starty=touch.pageY;
			endx=touch.pageX;
			endy=touch.pageY;
			startpos=_this.scrollLeft();
		}).bind('touchmove',function(){
			if(isrun){return;}
			var touch = event.targetTouches[0];
			endx=touch.pageX;
			endy=touch.pageY;
			_this.scrollLeft(startpos-endx+startx);
			var xpos=endx>startx?endx-startx:startx-endx;
			var ypos=endy>starty?endy-starty:starty-endy;
			if(xpos>ypos){
				event.preventDefault(); //阻止触摸事件的默认行为，即阻止滚屏
			}
		}).bind('touchend',function(){
			if(isrun){return;}
			var xpos=endx>startx?endx-startx:startx-endx;
			var ypos=endy>starty?endy-starty:starty-endy;
			if(xpos<10){return;}
			_this.find('li img').each(function(i) {
				if($(this).attr('height')&&$(this).attr('width')){
                	$(this).height($(this).attr('height')*$(this).width()/$(this).attr('width'));	
				}
            });
			
			/*自动高度*/
			if(_this.attr('autoheight')==1){
				_this.css({'height':'auto'});
				_this.find('li .slice').css({'height':'auto'});
			}
			isrun=true;
			startpos=Math.round(parseInt(startpos)/parseInt(_this.width()))*_this.width();
			var pos=startpos-(endx>startx?_this.width():-_this.width());
			/*是否循环*/
			if(_this.attr('autorun')>0||_this.attr('loop')){
				if(pos>_this.width()*(_this.find('li').length-1)){
					pos=0;	
				}
			}
			var _thiseq=Math.round(pos/_this.width());
			_this.find('li.active').removeClass('active');
			_this.find('li:eq('+_thiseq+')').addClass('active');
			_this.animate({'scrollLeft':pos},{duration:300,complete:function(){
				swipeobj.find('.perview').find('i.active').removeClass('active');
				swipeobj.find('.perview').find('i:eq('+_thiseq+')').addClass('active');
				isrun=false;
			}});
		});
		
		if(_this.find('.sright').length>0){
			_this.find('.sright').click(function(){
				if(isrun){return;}
				startpos=_this.scrollLeft();
				
				isrun=true;
				
				var ieq=Math.round(parseInt(startpos)/parseInt(_this.width()));
				if(ieq==_this.find('li').length-1){
					ieq=0;
				}else{
					ieq+=1;
				}

				_this.animate({'scrollLeft':ieq*_this.width()},{duration:300,complete:function(){
					swipeobj.find('.perview').find('i.active').removeClass('active');
					swipeobj.find('.perview').find('i:eq('+ieq+')').addClass('active');
					isrun=false;
				}});
				
			});
		}
		if(_this.find('.sleft').length>0){
			_this.find('.sleft').click(function(){
				if(isrun){return;}
				startpos=_this.scrollLeft();
				
				isrun=true;
				
				var ieq=Math.round(parseInt(startpos)/parseInt(_this.width()));
				if(ieq==0){
					ieq=_this.find('li').length-1;
				}else{
					ieq-=1;
				}
				_this.animate({'scrollLeft':ieq*_this.width()},{duration:300,complete:function(){
					swipeobj.find('.perview').find('i.active').removeClass('active');
					swipeobj.find('.perview').find('i:eq('+(Math.round(_this.scrollLeft()/_this.width()))+')').addClass('active');
					isrun=false;
				}});
			
			});
		}
	});
}

function loadJS(uri,callback){
	if(uri==''){return false;}
	if($('script[src="'+uri+'"]').length<=0){
		var script = document.createElement('script');
		if (script.readyState){ //IE 
			script.onreadystatechange = function(){ 
				if (script.readyState == "loaded" || script.readyState == "complete"){ 
					script.onreadystatechange = null; 
					callback?callback():'';
				} 
			}; 
		} else {
			script.onload = function(){callback?callback():'';}; 
		} 
		script.src = uri;
		script.type = 'text/javascript';
		document.body.appendChild(script);
	}else{
		callback?callback():'';	
	}
	return true;
}
function loadCSS(uri,callback){
	if(uri==''){return false;}
	if($('link[href="'+uri+'"]').length<=0){
		var script = document.createElement('link');
		if (script.readyState){ //IE 
			script.onreadystatechange = function(){ 
				if (script.readyState == "loaded" || script.readyState == "complete"){ 
					script.onreadystatechange = null; 
					callback?callback():''; 
				} 
			}; 
		} else {
			script.onload = function(){callback?callback():'';}; 
		} 
		script.href = uri;
		script.rel = 'stylesheet';
		script.type = 'text/css';
		document.body.appendChild(script);
	}else{
		callback?callback():'';	
	}
	return true;
}
function isWeiXin(){
    var ua = window.navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i) == 'micromessenger'){
        return true;
    }else{
        return false;
    }
}

function loadswiper(obj){
	loadCSS("/public/swiper/swiper.min.css",null);
	loadJS("/public/swiper/swiper.min.js",function(){
		try{
			loadSwiperEvent(obj);
		}catch(e){}
	});
}
/*传参是swiper-container*/
function loadSwiperEvent(obj){
	var swiperarr = Array();
	var swipernum=0;
	obj.each(function(){
		var _this=$(this);
		if(_this.find('.swiper-slide').length<=1){
			return;
		}
		var num = parseInt(Math.random()*1000);
		_this.attr('id','swiper'+num);
		_this.parent().find('.pagination').attr('id','pagination'+num);
		_this.parent().find('.arrow-right').attr('id','swiperright'+num);
		_this.parent().find('.arrow-left').attr('id','swiperleft'+num);
		_this.attr('autoheight',1);
		var index=swipernum++;
		swiperarr[index] = new Swiper('#swiper'+num, {
		  slidesPerView: _this.attr('slidesPerView')?_this.attr('slidesPerView'):1,
		  spaceBetween: 30,
		  autoplay: _this.attr('autosec')>0?{delay:_this.attr('autosec'),disableOnInteraction: false}:false,
		  loop: _this.attr('autosec')>0?true:false,
		  pagination: {el:'#pagination'+num,clickable: true},
		  navigation: {nextEl: '#swiperright'+num,prevEl: '#swiperleft'+num,},
		  on: {
			slideChangeTransitionStart: function(){
				
			}
		  }
		});
	});
}

/*数组去重*/
function unique(arr){
	var res = [];
	var json = {};
	for(var i = 0; i < arr.length; i++){
		if(!json[arr[i]]){
			res.push(arr[i]);
			json[arr[i]] = 1;
		}
	}
	return res;
}
function collect(e){
	if(userid<=0){
		var url=encodeURIComponent(window.location.href);
		dialog('登录提醒','登录后可永久保存您的收藏记录，是否立即前往登录？',function(){
			window.location.href='/user/login/?fromurl='+url+'';
		});
		return false;	
	}
	if($(e).hasClass('active')){
		$(e).removeClass('active');
		$(e).find('span').html('收藏');
		$.ajax({type:'POST',url:'/ajaxstream/dingzhi/',data:{action:'collect','pac':pac,'pdo':pdo,'pid':pid,'iscollect':0,'v':2019}});
		
		textToast('取消收藏成功。');
	}else{		
		$(e).addClass('active');
		$(e).find('span').html('已收藏');
		$.ajax({type:'POST',url:'/ajaxstream/dingzhi/',data:{action:'collect','pac':pac,'pdo':pdo,'pid':pid,'iscollect':1,'v':2019}});
		textToast('已为您收藏，可以在"我的"界面查看。');
	}
}
function clearCollect(e){
	if(userid<=0){
		return false;	
	}
	$('#go_top .collect').removeClass('active');
	$.ajax({type:'POST',url:'/ajaxstream/collect/',data:{action:'clearcollect'}});
	textToast('清除收藏成功。');
	$('.collectBybtn').removeClass('active');
	$.ajax({type:'POST',url:'/ajaxstream/collect/',data:{action:'clearcollect'}});
	textToast('清除收藏成功。');
}
function showVoteShare(e){
	share(e);
}

function openUrl(url) {
    $('body').append($('<a href="'+url+'" target="_blank" id="openWin"></a>'))
    document.getElementById("openWin").click();//点击事件
    $('#openWin').remove();
    return false;
}
function openclose(e){
	var obj=$(e).parents('.itembox').length>0?$(e).parents('.itembox'):$(e).parent().parent().find('.itembox');
	if($(e).hasClass('open')){
		$(e).removeClass('open');
		obj.removeClass('open');
	}else{
		$(e).addClass('open');
		obj.addClass('open');
	}
	
}
function ajaxLoad(){
	$(".ajaxload").each(function(){
		if($(this).parents('.dn').length>0 || $(this).data('page')>=4){
			return;	
		}
		if($(this).offset().top>$(window).scrollTop()-$(this).parent().height()-500&&$(this).offset().top<$(window).height()+$(window).scrollTop()+500){
			getData($(this)[0]);
			checkHash();
		}
	});
}
function in_array(value,arr){
	for(var j in arr){
		if(value==arr[j]){
			return true;	
		}
	}
	return false;
}
function getData(e){
	if($(e).hasClass('nomore')||$(e).hasClass('loading')){
		return false;
	}
	$('#_ajaxdata').length<=0?$('body').append('<div id="_ajaxdata" style="display:none"></div>'):'';
	$(e).addClass('loading');
	setTimeout(function(){$(e).removeClass('loading');},3000);
	$(e).data('ajax',1);
	$(e).data('v',2019);
	$.ajax({type:'get',url:window.location.href,data:$(e).data(),success:function(data){
		$('#_ajaxdata').html(data);
		if($(e).hasClass('ajaxload')&&!$(e).hasClass('morebtn')){ /*异步加载，非加载更多按钮*/
			/*加载切换*/
			if($('#_ajaxdata').find('.blockinfo:first').hasClass('tab')){
				var tabnum=$(e).parents('.tab').length;
				if(tabnum==1){/*一级切换*//*removeAttr('style') 去掉初始高度*/
					var linknum=$('#_ajaxdata').find('.css_js_str link').length;
					var jsnum=$('#_ajaxdata').find('.css_js_str script').length;
					if($('#_ajaxdata').find('>.tab>.tabcont>.licont').find('.tab').length>0&&(linknum>0||jsnum>0)){//可能需要加载css、js文件
						var ajaxdata=$('#_ajaxdata').find('>.tab>.tabcont>.licont').html();
						var dataobj=$(e).parents('.licont:first');
						$('#_ajaxdata').find('.css_js_str script').each(function(i) {
							var cssstr=$(this).attr('src');
							$(this).remove();
							loadJS(cssstr,function(){
								if(i+1==jsnum&&linknum==0){
									dataobj.removeAttr('style').html(ajaxdata);
									dataobj.find('.swipe').length>0?loadswipe(dataobj.find('.swipe .swipecont')):'';
								}
							});
						});
						$('#_ajaxdata').find('.css_js_str link').each(function(i) {
							var cssstr=$(this).attr('href');
							$(this).remove();
							loadCSS(cssstr,function(){
								if(i+1==linknum){
									dataobj.removeAttr('style').html(ajaxdata);
									dataobj.find('.swipe').length>0?loadswipe(dataobj.find('.swipe .swipecont')):'';
								}
							});
						});
					}else{
						var dataobj=$(e).parents('.licont:first');						
						dataobj.removeAttr('style').html($('#_ajaxdata').find('>.tab>.tabcont>.licont').html());
						if(dataobj.parents('.leftlay.category').length>0){
							dataobj.addClass('pdbom');
							dataobj.append('<div class="catbtn"><div class="catrebtn line2em" onclick="catmenubtn(this,2)">取消</div><div class="bg1 fff catrestbtn line2em" onclick="catmenubtn(this,1)">确定</div><div class="clear"></div></div>');
						}
						dataobj.find('.swipe').length>0?loadswipe(dataobj.find('.swipe .swipecont')):'';
					}
				}else if(tabnum==2){/*二级切换*/
					var dataobj=$(e).parents('.licont:first');
					dataobj.removeAttr('style').html($('#_ajaxdata').find('>.tab>.tabcont>.licont>.tab>.tabcont>.licont').html());
					dataobj.find('.swipe').length>0?loadswipe(dataobj.find('.swipe .swipecont')):'';
					if(dataobj.parents('.leftlay.category').length>0){
						dataobj.addClass('pdbom');
					}
				}
			}else{
				var dataobj=$(e).parents('.blockinfo:first');
				dataobj.html($('#_ajaxdata').find('.blockinfo:first').html());
				dataobj.find('.swipe').length>0?loadswipe(dataobj.find('.swipe .swipecont')):'';
			}
			
			var cssarr=$('#_ajaxdata').find('.pagecss').data('css'); 
			if(cssarr){
				var pagecssarr=$('.pagecss:first').data('css').split(',');
				cssarr=cssarr.split(',');
				for(var i in cssarr){
					if(!in_array(cssarr[i],pagecssarr)){
						$('.pagecss:first').data('css',$('.pagecss:first').data('css')+','+cssarr[i]);
						$('head').append('<link href="'+cssarr[i]+'?t='+Math.random()+'" type="text/css" rel="stylesheet" />');
					}
				}
			}
			var jsarr=$('#_ajaxdata').find('.pagejs').data('js');
			if(jsarr){
				var pagejsarr=$('.pagejs:first').data('js').split(',');	
				jsarr=jsarr.split(',');
				for(var i in jsarr){
					if(!in_array(jsarr[i],pagejsarr)){
						$('.pagecss:first').data('js',$('.pagejs:first').data('js')+','+jsarr[i]);
						$('head').append('<script type="text/javascript" src="'+jsarr[i]+'?t='+Math.random()+'"></script>');
					}
				}
			}
		}else{
			if($(e).text().indexOf('换一批')!=-1){
				//没有数据返回第1页
				if($('#_ajaxdata').find('.itembox').html().replace(/\s+/g,'')==''&&parseInt($(e).data('page'))>1){
					$(e).data('page',1);
					$('#_ajaxdata').html('')
					$(e).removeClass('loading');
					getData(e);
					return false;
				}
				var dataobj=$(e).parents('.blockinfo:first').find('.itembox:first');
				dataobj.html($('#_ajaxdata').find('.itembox').html());	
				dataobj.find('.swipe').length>0?loadswipe(dataobj.find('.swipe .swipecont')):'';
			}else{
				if($('#_ajaxdata').find('.itembox').html().replace(/\s+/g,'')!=''){
					$(e).parents('.blockinfo:first').find('.itembox:first').find('>.clear').remove();
				}
				$(e).parents('.blockinfo:first').find('.itembox:first').append($('#_ajaxdata').find('.itembox').html());	
				if($(e).data('maxpage')&&parseInt($(e).data('page'))==parseInt($(e).data('maxpage'))){
					$(e).parent().find('.morebtn').show();	
					$(e).remove();
					
				}
			}
			$('#_ajaxdata').find('.blockmorebox').length>0?$(e).parents('.blockinfo:first').find('.blockmorebox').attr('class',$('#_ajaxdata').find('.blockmorebox').attr('class')):'';
			$(e).parents('.blockinfo:first').find('.blockmorebox').html($('#_ajaxdata').find('.blockmorebox').length>0?$('#_ajaxdata').find('.blockmorebox').html():'');
		}
		
		$('#_ajaxdata').html('');
		$(e).removeClass('loading');
	}});
}
/*a链接ajax操作*/
function ajaxlinka(e,obj){
	var data={};
	if($(e).attr('loading')==1){return false;}
	$(e).attr('loading',1)
	setTimeout(function(){$(e).removeAttr('loading')},1000);
	if($(e).attr('href').indexOf('/ajaxstream/vote/')!=-1){
		$.ajax({type:'get',async:false,url:'/ajaxstream/vote/',data:{action:'gettoken'},success:function(token){data.token=encode(token)}});
	}
	data.v='2019';
	$.ajax({type:'get',dataType:'json',url:$(e).attr('href'),data:data,success:function(data){
		var value='';
		if(typeof(data)=='object'){
			if(data.result=='error'){				
				data.msg&&data.msg!=''?dialog('提醒',data.msg):'';				
				return false;
			}else{
				data.msg&&data.msg!=''?textToast(data.msg):'';
			}
			value=data.value;
		}else{
			value=data;	
		}
		if(obj==null){
			$(e).after(value);
			$(e).remove();
		}else{
			obj.html(value);
			if($(e).attr('htmlvalue')){
				$(e).html($(e).attr('htmlvalue'));
			}
		}
	}});
	return false;
}
var isshare=false;
function share(e){
	if(!isshare&&pac=='brand'&&brandid>0){
		isshare=true;
		$.ajax({type:'get',url:'/ajaxstream/share/',data:{action:'sharecount','block':'brand',itid:brandid}});
	}
	var ua = window.navigator.userAgent.toLowerCase();
	if(ua.match(/alibaba/i) == 'alibaba'){
		$('body').append('<div style="position:fixed;right:0;top:0;width:100%;height:100%; background:rgba(0,0,0,.6);z-index:2147483647;" onclick="$(this).remove()"><img style="float:right;width:70%;max-width:388px;" src="/public/images/mobile/wx_share.png"/></div>');
		return false;	
	}else if(isWeiXin()){
		$('body').append('<div style="position:fixed;right:0;padding-right:15px;top:0;width:100%;height:100%; background:rgba(0,0,0,.6);z-index:2147483647;" onclick="$(this).remove()"><img style="float:right;width:70%;max-width:388px;" src="/public/images/mobile/wx_share.png"/></div>');
		return false;	
	}
	loadJS('/public/js/mobile/NativeShare.js',function(){
		var nativeShare = new NativeShare();
		var shareData = {
            title: document.title,
            desc: $('meta[name=description]').attr('content'),
            link: window.location.href,
            icon: '//m.maigoo.com/public/images/mobile/ic_launcher.png'
        }
		nativeShare.setShareData(shareData);
		try {nativeShare.call()}catch (err) {
			var obj = {};
			obj.id='nativeShare';
			obj.text='<div class="bdsharebuttonbox"><a href="#" class="bds_weixin iconfont icon-weixin" data-cmd="weixin" title="分享到微信" onclick="shareclick(this);"></a><a href="#" class="bds_tsina iconfont icon-weibo2" data-cmd="tsina" title="分享到新浪微博" onclick="shareclick(this);"></a><a href="#" class="bds_tqq iconfont icon-qq" data-cmd="qq" title="分享到qq好友" onclick="shareclick(this)"></a><a href="#" class="bds_qzone iconfont icon-qqkongjian" data-cmd="qzone" title="分享到QQ空间" onclick="shareclick(this);"></a><div class="clear"></div></div>';
			actionSheetMenu(obj);

		}
	});
}
function shareclick(e) {
	var sharepath = $(e).attr('data-cmd');
	if(sharepath == 'weixin'){
		$('body').append('<div style="position:fixed;right:0;top:0;width:100%;height:100%; background:rgba(0,0,0,.6);z-index:2147483647;" onclick="$(this).remove()"><img style="position:absolute;bottom:30%;left:5%;width:90%;max-width:500px;" src="/public/images/mobile/web_share.png?2017"/></div>');
		return false;	
	}else if (sharepath == 'tsina') {
		var sinaurl = 'https://service.weibo.com/share/share.php?url='+window.location.href+'&title='+$('head title').text()+'&pic=https://www.maigoo.com/public/images/maigoo/logo.jpg&appkey=3135946074';
		$(e).attr('href',sinaurl);
	} else if (sharepath == 'qzone') {
		var qzoneurl = 'https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+window.location.href+'&title='+$('head title').text()+'&summary='+$('head meta[name=description]').text()+'&site=http://www.maigoo.com&pics=https://www.maigoo.com/public/images/maigoo/logo.jpg';
		$(e).attr('href',qzoneurl);
	} else if (sharepath == 'qq') {
		var renrenurl = 'http://connect.qq.com/widget/shareqq/index.html?url='+window.location.href+'&title='+$('head title').text()+'&source=http://www.maigoo.com&desc='+$('head meta[name=description]').text()+'&pics=https://www.maigoo.com/public/images/maigoo/logo.jpg&summary='+$('head meta[name=description]').text();
		$(e).attr('href',renrenurl);
	}
}

function showmorelink(e,num){
	if(!$(e).parent().hasClass('up')){
		$(e).parent().find('.bcat:gt('+num+')').addClass('dn');
		$(e).html('<em>更多<i class="song">>></i></em>').removeClass('dn');	
		$(e).parent().addClass('up');
	}else{
		$(e).html('<em>收起<i class="song">>></i></em>');	
		$(e).parent().find('.bcat').removeClass('dn');
		$(e).parent().removeClass('up');
	}
}
function showmoretab(e,num){
	num=parseInt(num)-1;
	if($(e).html().indexOf('展开')>-1){
		$(e).html('收起<<');	
		$(e).parent().find('.close').removeClass('close');
	}else{
		$(e).html('展开>>');	
		$(e).parent().children(':gt('+num+')').addClass('close');
		$(e).removeClass('close');
	}
	$(e).toggleClass('more');
}
function delComment(e,delobj){
	var data={v:version};
	$.ajax({type:'POST',url:$(e).attr('href'),data:data,success:function(data){
		if(data.substring(0,1)=='{'){
			data=eval('('+data+')')['msg'];
		}
		delobj.length<=0?$('.zwimg').removeClass('dn'):'';
		textToast(data);
		delobj.remove();
	},complete:function(){
		
	}});
	return false;
}

var listenerhashchange=false,hashchangeobj=null;
function showBrandBox(e){
	var newhash='#brandbox-'+parseInt(Math.random()*100);
	window.location.href=window.location.href.replace(/#.*/,'')+newhash;
	var _obj=$(e).parent(),brandid=$(e).attr('brandid');
	hashchangeobj=_obj;
	var scrolltop=$(window).scrollTop();
	$('body').css({'overflow':'hidden','height':'100%'}).attr('scrolltop',scrolltop).scrollTop(scrolltop);
	if(_obj.find('.brandupbox').length==0){
		$.ajax({type:'get',url:'/ajaxstream/brand/',data:{action:'getbrandbox',brandid:brandid,'ajax':1,'v':2019},success:function(data){
			_obj.append(data);
			var _isshow=_obj.find('.brandupbox').hasClass('dn');
			$('.brandupbox').addClass('dn');
			_isshow?_obj.find('.brandupbox').removeClass('dn'):'';
			_obj.find('.brandupbox').find('.rongyuinfo').find('.li').each(function(){
				if($(this).hasClass('grey')){
					$(this).parent().find('.clear').before($(this));	
				}
			});
		}});
	}else{
		var _isshow=_obj.find('.brandupbox').hasClass('dn');
		$('.brandupbox').addClass('dn');	
		_isshow?_obj.find('.brandupbox').removeClass('dn'):'';			
	}
	if(!listenerhashchange){
		window.addEventListener('hashchange',function(){
			listenerhashchange=true;
			if(location.hash.indexOf('brandbox')==-1){
				hashchangeobj.find('.brandupbox').addClass('dn');
				$('body').removeAttr('style').scrollTop($('body').attr('scrollTop'));	
			}
		});
	}
}
function hideBrandBox(e){
	history.back();
	$(e).parents('.brandupbox').addClass('dn');
	$('body').removeAttr('style').scrollTop($('body').attr('scrollTop'));	
}
function attentionqzone(e){	
	if(userid<=0){
		var url=encodeURIComponent(window.location.href);
		dialog('登录提醒','此操作需要您进行登录，是否立即前往登录？',function(){
			window.location.href='/user/login/?fromurl='+url+'';
		});
		return false;	
	}
	if($(e).find('.cont').html()=='关注' || $(e).html()=='关注'){
		var action='add';
	}else{
		var action='del';
	}
	$.ajax({type:'POST',url:'/ajaxstream/dingzhi/',data:{action:action,actionkey:'focuslist','id':$(e).attr("id")?$(e).attr("id"):pid},success:function(data){
		if(data.substring(0,1)=='{'){
			data=eval('('+data+')');
			data['msg']!=''?textToast(data['msg']):'';
			if(data['result']=='error'){
				return false;
			}
			if(data['result']=='success'){
				if($(e).find('.cont').length>0){
					if($(e).find('.cont').html()=='关注'){
						$(e).find('.cont').html('已关注');
						$(e).find('.iconfont').removeClass('icon-weixuanzhongfangxing').addClass('icon-xuanzhong');
					}else{
						$(e).find('.cont').html('关注');
						$(e).find('.iconfont').removeClass('icon-xuanzhong').addClass('icon-weixuanzhongfangxing');
					}	
				}else{
					if($(e).html()=='关注'){
						$(e).html('已关注');
					}else{
						$(e).html('关注');
					}	
				}
				if($(e).next('.fnum').length<=0){
					$(e).after('<div class="fnum line2em">粉丝数：<i>0</i></div>');	
				}
				if(action=='add'){
					var num=parseInt($('.fnum').find('i').html())+1;
				}else{
					var num=parseInt($('.fnum').find('i').html())>0?parseInt($('.fnum').find('i').html())-1:0;
				}
				$('.fnum').find('i').html(num);
			}
			
		}
	}});	
}
var submitdelay=false;
function ajaxSubmit(e,obj){
	if(submitdelay){alert('表单正在提交，请5秒后再次尝试');return false;}
	submitdelay=true;
	setTimeout(function(){submitdelay=false;},5000);
	if($(e).find('.token').length>0){
		var myDate = new Date();
		var tokenc=$(e).find('.token').attr('c').toLowerCase();
		tokenc=Z(tokenc+myDate.getDate()+''+myDate.getHours()+''+myDate.getMinutes());
		$(e).find('.token').val($(e).find('.token').val().split('|')[0]+'|'+tokenc.toLowerCase());
	}
	$.ajax({type:'POST',url:$(e).attr('action'),data:$(e).serialize(),success:function(data){
			data=eval('('+data+')');
			if(data.result){
				if(data.msg.indexOf('验证码错误')!=-1){
					$('.seccode').click();	
				}
				dialog('提示',data.msg,data.jump!='null'&&data.jump!=''?function(){
					window.location.href=data.jump;
				}:'');
			}else{
				for(var i=0;i<=data.length;i++){
					if(data[i]!=undefined&&data[i]['id']){
						var field=data[i]['id'].split('_').pop();
						$('tr[field='+field+']').length>0?$('tr[field='+field+']').find('.fmsg').html(data[i]['msg']):'';
					}
					
				}
			}

	},complete:function(){
		submitdelay=false;
	}});
	return false;
}

function getAfterData(e,thirdactionname){
	var _itemobj=$(e).parents('.item');
	if(_itemobj.find('#'+thirdactionname).length==0){
		if($(e).hasClass('nomore')||$(e).hasClass('loading')){
			return false;
		}
		$('#_ajaxdata').length<=0?$('body').append('<div id="_ajaxdata" style="display:none"></div>'):'';
		$(e).addClass('loading');
		setTimeout(function(){$(e).removeClass('loading');},3000);
		$(e).data('ajax',1);
		$.ajax({type:'get',url:window.location.href,data:$(e).data(),success:function(data){
			$('#_ajaxdata').html(data);
			//加载内容
			_itemobj.append('<div class="productbox" id="'+thirdactionname+'"><div class="'+$('#_ajaxdata').find('#pos_'+thirdactionname).attr('class')+'">'+$('#_ajaxdata').find('#pos_'+thirdactionname).html()+'</div></div>');
			//加载css、js
			var cssarr=$('#_ajaxdata').find('.pagecss').data('css'); 
			if(cssarr){
				var pagecssarr=$('.pagecss:first').data('css').split(',');
				cssarr=cssarr.split(',');
				for(var i in cssarr){
					if(!in_array(cssarr[i],pagecssarr)){
						$('.pagecss:first').data('css',$('.pagecss:first').data('css')+','+cssarr[i]);
						$('head').append('<link href="'+cssarr[i]+'?t='+Math.random()+'" type="text/css" rel="stylesheet" />');
					}
				}
			}
			var jsarr=$('#_ajaxdata').find('.pagejs').data('js');
			if(jsarr){
				var pagejsarr=$('.pagejs:first').data('js').split(',');	
				jsarr=jsarr.split(',');
				for(var i in jsarr){
					if(!in_array(jsarr[i],pagejsarr)){
						$('.pagecss:first').data('js',$('.pagejs:first').data('js')+','+jsarr[i]);
						$('head').append('<script type="text/javascript" src="'+jsarr[i]+'?t='+Math.random()+'"></script>');
					}
				}
			}
			
			$('#_ajaxdata').html('');
			$(e).removeClass('loading');
		}});
	}
	_itemobj.toggleClass('active');
}

/*/public/js/mobile/v2019/event.js*/
var changekeyflag=0,show_image_flag=0;
$(document).ready(function(){
	//解决IOS键盘挡input的问题
	$('#container').delegate('input','focus',function(){	
		$(this)[0].scrollIntoViewIfNeeded();
	});
	$('#container').delegate('input','input',function(){
		$(this)[0].scrollIntoViewIfNeeded();
	});
	//解决ios登录之后返回不刷新 
	var u=navigator.userAgent,app=navigator.appVersion;
	//var isAndroid=u.indexOf('Android')>-1||u.indexOf('Linux')>-1;
	var isIOS=!!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
	if(isIOS){
		window.onpageshow=function(e){
			if((e.persisted ||(window.performance&&window.performance.navigation.type==2))&&userid==0){
				if(document.cookie.indexOf('space=%7B%22uid')!=-1){
					window.location.reload();
				}
			}
		}
	}
	$('body').delegate('.gotoapp a','click',function(){
		var openurl=$(this).attr('href');
		var pdo='search';
		if(openurl.indexOf('/android/download/')!=-1){
			var url=window.location.href.split('?')[1]!='undefined'?window.location.href.split('?')[1]:'';
			if(window.location.href.indexOf('brand/list_')!=-1){
				pdo='list';
				var id=window.location.href.match(/list_(\d+)/g)[0].replace(/[^0-9]/ig,"");
				url+=url==''?'':'&';
				id>0?url+='id='+id:'';
			}
			var visibility=false;
			document.addEventListener("visibilitychange", function() {
				if(document.visibilityState=='hidden'){
					visibility=true;
				}else{
					visibility=false;
				}
			});
			if (navigator.userAgent.match(/(iPhone|iPod|iPad);?/i)) {
				// 判断useragent，当前设备为ios设备
				window.setTimeout(function() {
					if (!visibility) {
						window.location.href = "itms-apps://itunes.apple.com/app/id1503112063";
					}
				},  1000);
				window.location.href = "maigoo://openurl/?ac=brand&do="+pdo+"&"+url; // iOS端URL Schema
			} else if (navigator.userAgent.match(/android/i)) {
				// 判断useragent，当前设备为android设备
				window.location.href = 'maigoo://openurl/?ac=brand&do='+pdo+'&'+url;
				window.setTimeout(function(){
					if (!visibility) {
				   		window.location.href =openurl;
					}
				},1000);
			
			}
			return false;
		}
	});
	$('#wrap').css('min-height',$(window).height()-$('footer').height());
	$(window).resize(function(){
		$('#wrap').css('min-height',$(window).height()-$('footer').height());	
	});
	setTimeout(function(){
		var scrolldelay=null;
		$(window).scroll(function(){
			scrolldelay!=null?clearTimeout(scrolldelay):'';
			scrolldelay=setTimeout(function(){
				$("img.lazy").length>0?lazyPic():'';
				$(".ajaxload").length>0?ajaxLoad():'';
				if($('#go_top').length>0){
					$(window).scrollTop()>2000?$('#go_top').addClass('show'):$('#go_top').removeClass('show');
				}
			},100);
			if($('#searchlist .flexbox').length>0){
				var wscoll=$(window).scrollTop();
				var searchtop=Math.ceil($('#searchlist').offset().top);
				var searchh=$('#searchlist').height();
				var title=$('#searchlist').find('.flexbox .blocktitle').height();
				var headerh=$('header').height();
				if(wscoll<=0){
					//$('#searchlist #pos_searchlist').height(80);
				}
				$('#searchlist').find('.flexbox .licont').css('max-height',$(window).height()-$('header').height()-$('.selecthead').height());
				if(wscoll>searchtop-headerh+title&&(wscoll<=searchh||wscoll<searchh+searchtop-headerh-title)){
					$('#searchlist').find('.flexbox').parent().height(80);
					$('#searchlist').find('.flexbox').addClass('fixed');
					$('#searchlist').find('.flexbox').css({'top':$('header').height()});
				}else if(wscoll>=searchh+searchtop-headerh-title||wscoll<=searchtop-headerh+title){	
					$('#searchlist').find('.flexbox').parent().removeAttr('style');				
					$('#searchlist').find('.flexbox.fixed').removeClass('fixed');
				}	
			}
		});
		/*搜索关键字自动轮换*/
		setInterval(function(){moreHotKey($('.hotsearch .hot'));},10000);
		/*图片切换*/
		imageSwitch();
		/*懒加载图片和模块*/
		$("img.lazy").length>0?lazyPic():'';
		$(".ajaxload").length>0?ajaxLoad():'';
		/*懒加载图片和模块*/
		$('#pos_articleinfo a img').length>0?picViewer():'';
		/*登录检测*/
		checkuserlogin();
		/*统一切换事件*/
		$('.swipe').length>0?loadswipe($('.swipe .swipecont')):'';
		/*切换定位*/
		if($('#pagenav').find('.active').length>0){
			$('#pagenav').animate({scrollLeft:$('#pagenav').find('.active').offset().left-$(window).width()*0.5+$('#pagenav').find('.active').width()*0.5},{duration:300});
		}
		/*页面菜单*/
		$('#slicemenu').length>0?bindPageMenu($('#slicemenu')):'';
		/*简单ajax内容*/
		$('.getajaxdata').each(function(){
			var _this=$(this);
			$.ajax({type:'get',url:$(this).attr('url'),success:function(data){
				_this.html(data);	
			}});
		});
		/*滚动*/
		if($('.marqueen').length>0){
			$('.marqueen').each(function(){
				Marquee_c($(this));
			});
		}
		/*滚动-模块*/
		if($('.itemscroll').length>0){
			var shounum;
			setInterval(function(){
				$('.itemscroll').each(function(){
					shounum=$(this).attr('shownum')?parseInt($(this).attr('shownum')):1;
					$(this).attr('isload')!=1?marqueebottom($(this),shounum):'';
				});
			},1000);
		}
		/*有作者的图片处理*/
		$('#container .showauthor').each(function(){
			var imgstr=$(this).find('img').attr('src');
			var reg=/_(\d+_\d+).*$/;
			imgstr=imgstr.replace(reg,'');
			if(!authorpiclist[imgstr]){
				imgstr=imgstr.replace('https','http');
			}
			if(authorpiclist[imgstr]){
				$(this).append('<span class="atr">作者：'+authorpiclist[imgstr]+'</span>');	
			}
		});
		$('#container').find('.tab .tabmenu').each(function(){
			if($(this).find('.item.active').index()>1){
				$(this).animate({scrollLeft:$(this).find('.item.active').offset().left-$(window).width()*0.5+$(this).find('.item.active').width()*0.5},{duration:300});
			}
		});
		$('#container').delegate('.tab .tabmenu div.item','click',function(){
			if($(this).attr('onclick')){
				return;	
			}
			$(this).parent().animate({scrollLeft:$(this).parent().scrollLeft()+$(this).offset().left-$(window).width()*0.5-$(this).width()*0.5},{duration:300});
			/*给个初始高度，内容加载完会去掉*/
			if($(this).parents('.tab:first').attr('haveclick')!=1&&$(this).parents('.substyle2').length<=0){
				$(this).parents('.tab:first').attr('haveclick','1');
				$(this).parents('.tab:first').find('>.tabcont>.licont.dn').height($(this).parents('.tab:first').find('>.tabcont>.licont[action='+$(this).parent().find('.item.active').attr('action')+']').height());
			}
			$(this).parent().find('.item.active').removeClass('active');
			$(this).addClass('active');
			$(this).parents('.tab:first').find('>.tabcont>.licont').addClass('dn');
			var thistabcont=$(this).parents('.tab:first').find('>.tabcont>.licont[action='+$(this).attr('action')+']');
			thistabcont.removeClass('dn');
			/*如果不是异步加载内容，去掉高度*/
			if(thistabcont.find('.ajaxload').length<=0){
				thistabcont.removeAttr('style');	
			}
			$(this).parents('.tab:first').find(".ajaxload").length>0?ajaxLoad():'';
			if($(this).parents('.tab.substyle2').length>0&&$(this).parents('.tab.scrolltab').find('.tabmenubox:first').find('.tabmenu:eq(0)').hasClass('scrollcss')){
				$('html,body').animate({scrollTop:$(this).parents('.tab.scrolltab').find('.tabmenubox:first').offset().top},{duration:300});
			}
		});
		/*过小图片版权提示处理*/
		$('#container .articlecont .showauthor').each(function(){
			if($(this).find('img').width()<300||$(this).find('img').height()<150){
				$(this).find('img').attr('title',$(this).find('em').html().replace(/<.*?>/g,''));
				$(this).find('em').remove();
			}
		});
		/*记录访问量*/
		loadJS('https://count.cnpp.cn/count.php?ac='+pac+'&do='+pdo+'&id='+pid+'&siteid='+siteid+'&referrer='+document.referrer,function(){
			if(typeof(attentiondata)!='undefined'){
				$('[count=attention]').each(function(){
					$(this).html().replace(/\d+/g,'')==''?$(this).html(attentiondata):$(this).attr('title',$(this).attr('title').replace(/\d+/g,attentiondata));
				});
			}	
		});
		/*collect*/
		loadJS('https://s.maigoo.com/ajaxstream/collect/?pac='+pac+'&pdo='+pdo+'&id='+pid+'&referrer='+document.referrer);
	
		/*停留超过2秒记录历史访问*/
		setTimeout(addHistory,1000);
		/*记录浏览的品牌和行业*/
		addCatlist();
		addBrandlist();
		/*定位*/
		checkHash();
		$(window).bind('hashchange',checkHash);
	},500);
	$('#wrap').delegate('.brandud[brandid]','click',function(){
		showBrandBox(this);
	});

	/*文章目录识别*/
	$('.articlecont h5:first,.citiaoshow h5:first').each(function(){
		$(this).parent().addClass('articletemplate1');
		articlemulu($(this));
	});
	$('#fabubtn').click(function(){
		$('#fabumenu').toggle();
	});
	/*评论区加载*/
	if ($('#pos_commentlist').length>0) {
		$.ajax({url:window.location.href,data:{'page':1,'ajax':1,'action':'commentlist'},dataType:'html',success:function (data) {
				$('#pos_commentlist').html(data.replace(' class="blockinfo commentlist" id="pos_commentlist"','').replace('<div class="bline bline1"></div>',''));
			}})
	}
	/*ad*/
	setTimeout(function(){
		$('.ad').each(function(){$(this).find('div').length<=0?$(this).parent().remove():''});
	},2000);
	
});

function articlemulu(obj){
	var len1=$('.articletemplate1').find('h2,h3').length;
	var len=Math.ceil(len1/3);
	var str='';
	if(len1<3){
		return false;
	}
	if($('.articletemplate1').find('h2').length<=10){
		$('.articletemplate1').addClass('mixttl');
	}
	obj.after('<div class="articlemulu"><i>目录</i></div>');
	$('.articlemulu').css({'bottom':$('#BAIDU_SSP__wrapper_u2853196_0').height()+'px'});
	
	$('.articletemplate1').find('.articlemulu').after('<div class="showmulu	"><div class="menu"><div class="topmenu"><div class="top"><i class="iconfont icon-fenlei2 tubiao"></i><i class="mu">目录</i></div></div><div class="caidan"><div class="mulu"></div></div></div><i class="close iconfont icon-x font20"></i></div>');
	$('.articletemplate1').find('h2,h3').each(function(k){
		if($(this).is('h2')){
			str+='<li class="mulu1" position="'+k+'">'+$(this).text()+'</li>';
		}else{
			str+='<li class="mulu2" position="'+k+'">'+$(this).text().replace(/\d+、/g,'')+'</li>';
		}
	}); 
	$('.articletemplate1').find('.articlemulu').click(function(){
		
		$('.showmulu').addClass('show');
	});
	$('.articletemplate1').find('.close').click(function(){
		
		$('.showmulu').removeClass('show');
	});
	$('.articletemplate1').find('.showmulu').click(function(){
		
		$('.showmulu').removeClass('show');
	});
	$('.showmulu .mulu').append(str+'<div class="clear"></div>');
	$('.showmulu .mulu').find('.mulu1:eq(0)').addClass('active');
	$('.showmulu .mulu').find('.mulu1,.mulu2').click(function(){
		$(this).parent().find('.active').removeClass('active');
		$(this).addClass('active');
		var posheight=parseInt($('.articletemplate1').find('h2,h3').eq($(this).attr('position')).offset().top);//-60
		if($('.articletemplate1').hasClass('citiaoshow')&&$('.articletemplate1').find('.hasmulu').length>0&&!$('.articletemplate1').find('.hasmulu').hasClass('up')){
			if(posheight>parseInt($('.articletemplate1').find('.hasmulu a.more').offset().top)){
				posheight=	parseInt($('.articletemplate1').find('.hasmulu a.more').offset().top);
			}
		}
		 $("html, body").animate({
     	 	scrollTop: posheight-100
		 });
    	 return false;
	});
	
	var scrolldelayobj;
	
	$(window).scroll(function(){
		clearTimeout(scrolldelayobj);
		scrolldelayobj=setTimeout(function(){
			var scrolltop=$(window).scrollTop()+54;
			var pos=0;
			$('.articletemplate1').find('h2,h3').each(function(k){
				
				if(pos==0){
					var yuanshu=$(this).offset().top;
					
					if(yuanshu>scrolltop){
						pos=k;
					}
				}
			});
			$('.showmulu').find('.mulu1,.mulu2').parent().find('.active').removeClass('active');
			$('.showmulu').find('.mulu1,.mulu2').eq(pos).addClass('active');
			scrolltop>0&&pos==0?pos=$('.articletemplate1').find('h2,h3').length:'';
			var top=(pos-1)*$('.showmulu').find('.mulu').find('.mulu1,.mulu2').eq(1).height();
			$('.showmulu').find('.caidan').animate({scrollTop: (top)+'px'},300);
		},200);
	});
	
}

function lazyPic(){
	$("img.lazy").each(function(){
		if($(this).offset().top>$(window).scrollTop()-$(this).height()-500&&$(this).offset().top<$(window).height()+$(window).scrollTop()+500&&$(this).parents('.dn').css('display')!='none'){
			$(this).css('transition','opacity ease-in-out 300ms');
			$(this).attr('src',$(this).data('src')).removeClass('lazy').removeAttr('data-src');
			if($(this).hasClass('resize')&&$(this).attr('height')>0&&$(this).attr('width')>0){
				$(this).removeClass('resize');
				$(this).height($(this).attr('height')*$(this).width()/$(this).attr('width'));
			}
		}
	});
}
function moreHotKey(obj){
	if(changekeyflag==1){
		return;	
	}
	changekeyflag=1;
	var objscrolltop=parseInt(obj.scrollTop()),hothei=obj.height();
	obj.animate({'scrollTop':objscrolltop+hothei},{duration:300,complete:function(){
		if(parseInt(obj.scrollTop())==objscrolltop){
			obj.scrollTop(0);
		}
		changekeyflag=0;
	}});	
}
function bindPageMenu(obj){
	$('#slicemenubtn').click(function(){
		obj.addClass('show');
		obj.find('.mpart.dn').removeClass('dn');
	});
	obj.click(function(e){
		if($(e.target).attr('id')==obj.attr('id')){
			obj.removeClass('show');
		}
	});
	obj.find('.close').click(function(){
		obj.click();
	});
}

/*滚动事件，可向上/向下/向左/向右，可设置标签forward=top/bottom/left/right*/
/*滚动效果*/
function Marquee_c(obj){
	if(obj.find('.scrollbox').length==0){
		return;	
	}
	if(obj.find('.scrollbox').width()==0){
		setTimeout(function(){Marquee_c(obj);},2000);
		return false;
	}
	var stopscroll=false;
	var _forward=obj.attr('forward')?obj.attr('forward'):'left';
	var delay=obj.attr('delay')>0?obj.attr('delay'):30;
	var _scrollobj=obj.find('.scrollbox ul');	
	
	if((_forward=='left'||_forward=='right')&&_scrollobj.width()<obj.width()){
		return false;	
	}else if((_forward=='top'||_forward=='bottom')&&_scrollobj.height()<obj.find('.scrollbox').height()){
		return false;	
	}else{
		if(_forward=='left'||_forward=='right'){
			if(_scrollobj.width()>obj.find('.scrollbox').width()){
				obj.find('.scrollbox').append(_scrollobj.clone());
			}
		}else{
			if(_scrollobj.height()>obj.find('.scrollbox').height()){
				obj.find('.scrollbox').append(_scrollobj.clone());
			}
		}
		
	}
	var scrollobj=setInterval(function(){
		if(!stopscroll){
			if(_forward=='left'){
				if(obj.find('.scrollbox').scrollLeft()>=_scrollobj.width()){
					obj.find('.scrollbox')[0].scrollLeft=0;
				}else{
					obj.find('.scrollbox')[0].scrollLeft++;
				}
			}else if(_forward=='top'){
				if(obj.find('.scrollbox').scrollTop()>=_scrollobj.height()){
					obj.find('.scrollbox')[0].scrollTop=0;
				}else{
					obj.find('.scrollbox')[0].scrollTop++;
				}
			}else if(_forward=='bottom'){
				if(obj.find('.scrollbox').scrollTop()<=0){
					obj.find('.scrollbox')[0].scrollTop=_scrollobj.height();
				}else{
					obj.find('.scrollbox')[0].scrollTop--;
				}
			}else{
				if(obj.find('.scrollbox').scrollLeft()<=0){
					obj.find('.scrollbox')[0].scrollLeft=_scrollobj.width();
				}else{
					obj.find('.scrollbox')[0].scrollLeft--;
				}
			}
		}
	},delay);
	/*
	var touchstartx=0;
	var touchendx=0;
	_scrollobj.bind('touchstart',function(e){
		touchstartx=e.originalEvent.targetTouches[0].pageX;
	});
	_scrollobj.bind('touchmove',function(e){
		touchendx=e.originalEvent.targetTouches[0].pageX;
	});
	_scrollobj.bind('touchend',function(e){
		
	});
	*/
}
function marqueebottom(obj,shounum){
	obj.attr('isload',1);
	var bitem_height=parseInt(obj.find('.bitem:eq(0)').height())+parseInt(obj.find('.bitem:eq(0)').css('padding-top'))+parseInt(obj.find('.bitem:eq(0)').css('padding-bottom'))+parseInt(obj.find('.bitem:eq(0)').css('border-top-width'))+parseInt(obj.find('.bitem:eq(0)').css('border-bottom-width'));
	obj.css('height',shounum*bitem_height);
	var objheight=obj.find('.bitem').length*bitem_height-shounum*bitem_height;
	var delay=obj.attr('delay')?obj.attr('delay'):5000;
	var scrolltop=objheight;
	obj.scrollTop(scrolltop);
	var num=obj.find('.bitem').length-shounum;
	setInterval(function(){
		num--;
		scrolltop-=bitem_height;
		if(scrolltop<=0){
			obj.scrollTop(objheight);console.log(objheight);
			scrolltop=objheight;
			num=obj.find('.bitem').length-shounum-1;
			obj.find('.bitem:eq('+num+')').css({'opacity':0});
			obj.find('.bitem:eq('+num+')').animate({'opacity':1},500);
		}else{
			obj.find('.bitem:eq('+num+')').css({'opacity':0});
			obj.animate({'scrollTop':scrolltop},{duration:200,complete:function(){
				obj.find('.bitem:eq('+num+')').animate({'opacity':1},500);
			}});
		}
	},delay);
}

function checkHash(){
	if(window.location.href.indexOf('#pos')!=-1){
		var posname=location.hash.replace('#pos','pos_');
		if($('#'+posname).length>0){console.log(posname+'+'+$('#'+posname).offset().top);
			$('html,body').animate({scrollTop:$('#'+posname).offset().top-$('header').height()},{duration:300});	
		}
	}
}
function encode(str){
    var configchars = "YG4CHo5Jyfg2b8FLpEvRr3WtVnlqMidu6cN";
    var encodechars = "";
    for(var i=0;i<str.length;i++){
        var num0 = configchars.indexOf(str[i]);
        if(num0 == -1){
            var code = str[i];
        }else{
            var code = configchars[(num0+3)%35];
        }
        var num1 = parseInt(Math.random()*35,10);
        var num2 = parseInt(Math.random()*35,10);
        encodechars += configchars[num1]+code+configchars[num2];
    }
    return encodechars;
}

function imageSwitch(){
	if($('[show_image_flag]').length>0){
		$('[show_image_flag]').each(function(i) {
			var show_image_flag;
			var _this=$(this);
			_this.find('img').length>1?setInterval(function(){
			    show_image_flag=parseInt(_this.attr('show_image_flag'));
				++show_image_flag;
				show_image_flag>=_this.find('img').length?show_image_flag=0:'';
				_this.find('img').css('display','none');
				_this.find('img:eq('+(show_image_flag)+')').css('display','block');
				_this.attr('show_image_flag',show_image_flag);
			},2000):'';
		});
	}
}
function picViewer(){
	loadCSS('https://s.maigoo.com/public/js/jquery/viewer.min.css?202007');
	loadJS('https://s.maigoo.com/public/js/jquery/viewer-jquery.min.js?20200730',function(){
		$('#pos_articleinfo img').each(function(){
			if($(this).parents('a').length>0&&$(this).parents('.swiper-slide').length<=0){
				var alink=$(this).parents('a').attr('href');
				if(alink&&(alink.indexOf('.jpg')!=-1||alink.indexOf('.png')!=-1||alink.indexOf('.gif')!=-1)){
					$(this).parents('a').click(function(){
						$(this).find('img').attr('src',alink);
						return false;	
					});
					$(this).viewer({
						url: 'src',
						title: false,
						toolbar: false,
						navbar: false
					});
				}
			}
		});
		$('#pos_articleinfo a').each(function(){
			var alink=$(this).attr('href');
			if($(this).find('img').length<=0&&alink&&(alink.indexOf('.jpg')!=-1||alink.indexOf('.png')!=-1||alink.indexOf('.gif')!=-1)){
				$(this).append('<img width="1" height="1" src="'+alink+'"/>');
				$(this).click(function(){
					$(this).find('img')[0].click();
					return false;	
				});
				$(this).viewer({
					url: 'src',
					title: false,
					toolbar: false,
					navbar: false
				});
			}
		});
		
	});
}


/*/public/js/mobile/v2019/weUI.js*/
function dialog(title,msg,callback){var btnname=arguments[3]?arguments[3]:'确定';var dialog1,dialog2;dialog1='<div class="weui_dialog_confirm" id="dialog1" style="display: none;"><div class="weui_mask"></div><div class="weui_mask"></div><div class="weui_dialog"><div class="weui_dialog_hd"><strong class="weui_dialog_title">'+title+'</strong></div><div class="weui_dialog_bd">'+msg+'</div>   <div class="weui_dialog_ft"><a href="javascript:;" class="weui_btn_dialog default">取消</a><a href="javascript:;" class="weui_btn_dialog primary">'+btnname+'</a></div></div></div>  ';dialog2='<div class="weui_dialog_alert" id="dialog2" style="display: none;">  <div class="weui_mask"></div> <div class="weui_dialog"><div class="weui_dialog_hd"><strong class="weui_dialog_title">'+title+'</strong></div>  <div class="weui_dialog_bd">'+msg+'</div>  <div class="weui_dialog_ft">  <a href="javascript:;" class="weui_btn_dialog primary">'+btnname+'</a> </div> </div> </div>  ';if(arguments[2]){$("body").append(dialog1);$("#dialog1").fadeIn("fast");$("#dialog1 .primary").on("click",function(){callback()});$("#dialog1 .default").on("click",function(){$("#dialog1").fadeOut("fast",function(){$("#dialog1").remove()})})}else{if(!$("#dialog2").length){$("body").append(dialog2)}else{$("#dialog2 .weui_dialog_title").html(title);$("#dialog2 .weui_dialog_bd").html(msg)}$("#dialog2").fadeIn("fast");$("#dialog2 .primary").on("click",function(){$("#dialog2").fadeOut("fast")})}}
function toast(){var msg;arguments[0]?msg=arguments[0]:msg="已完成";var livetime;arguments[1]?livetime=arguments[1]:livetime=800;var toast;toast='<div id="toast" style="display: none;"><div class="weui_mask_transparent"></div><div class="weui_toast"><i class="iconfont icon-qiyerenling1 weui_icon_toast"></i><p class="weui_toast_content">'+msg+"</p></div></div>";if(!$("#toast").length){$("body").append(toast)}else{$("#toast .weui_toast_content").html(msg)}$("#toast").fadeIn("fast",function(){setTimeout(function(){$("#toast").fadeOut("fast")},livetime)})}
function loadingToast(){var msg;arguments[0]?msg=arguments[0]:msg="数据加载中";var loadingToast;loadingToast='<div id="loadingToast" class="weui_loading_toast" style="display:none;"><div class="weui_mask_transparent"></div><div class="weui_toast"><div class="weui_loading"><div class="weui_loading_leaf weui_loading_leaf_0"></div><div class="weui_loading_leaf weui_loading_leaf_1"></div><div class="weui_loading_leaf weui_loading_leaf_2"></div><div class="weui_loading_leaf weui_loading_leaf_3"></div><div class="weui_loading_leaf weui_loading_leaf_4"></div><div class="weui_loading_leaf weui_loading_leaf_5"></div><div class="weui_loading_leaf weui_loading_leaf_6"></div><div class="weui_loading_leaf weui_loading_leaf_7"></div><div class="weui_loading_leaf weui_loading_leaf_8"></div><div class="weui_loading_leaf weui_loading_leaf_9"></div><div class="weui_loading_leaf weui_loading_leaf_10"></div><div class="weui_loading_leaf weui_loading_leaf_11"></div></div><p class="weui_toast_content">'+msg+"</p></div></div>";if(!$("#loadingToast").length){$("body").append(loadingToast)}else{$("#loadingToast .weui_toast_content").html(msg)}$("#loadingToast").fadeIn("fast")}
function actionSheetMenu(){if(!arguments.length){return}var menuHtml="";for(i=0;i<arguments.length;i++){if(typeof(arguments[i])!="object"||!arguments[i].id||!arguments[i].text){continue}menuHtml+='<div class="weui_actionsheet_cell" id="'+arguments[i].id+'">'+arguments[i].text+"</div>"}if(!menuHtml){return}var actionSheetMenu;actionSheetMenu='<div id="actionSheet_wrap"><div class="weui_mask_transition" id="mask"></div><div class="weui_actionsheet" id="weui_actionsheet"><div class="weui_actionsheet_menu"></div><div class="weui_actionsheet_action"><div class="weui_actionsheet_cell" id="actionsheet_cancel">取消</div></div></div></div>';if(!$("#actionSheet_wrap").length){$("body").append(actionSheetMenu)}$(".weui_actionsheet_menu").html(menuHtml);$("#mask").show().addClass("weui_fade_toggle");$("#weui_actionsheet").addClass("weui_actionsheet_toggle");$("#mask").unbind("transitionend").unbind("webkitTransitionEnd");$("#mask , #actionsheet_cancel").on("click",function(){$("#mask").removeClass("weui_fade_toggle");$("#weui_actionsheet").removeClass("weui_actionsheet_toggle");$("#mask").on("transitionend webkitTransitionEnd",function(e){$("#mask").hide()})})}
function textToast(text){if(!$("#textToast").length){$("body").append('<div id="textToast" class="textToast"></div>')}$("#textToast").text(text).addClass("textToastShow").on("animationend webkitAnimationEnd",function(e){$(this).removeClass("textToastShow")})};