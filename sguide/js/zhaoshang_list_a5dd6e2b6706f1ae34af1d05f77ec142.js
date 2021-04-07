/*/public/js/maigoo/v2019/public.js*/
/*checkuserlogin*/
//<a class="nickname" href="{CNPPROOT}" target="_blank"><i class="iconfont icon-denglu orange"></i> <em class="c999">欢迎您，</em><em class="color1"><!--{$space->info['NickName']}--></em></a> <a class="color1" href="{CNPPROOT}logout/">退出</a>
function checkuserlogin(){
	var pageuserid=userid;
	$.ajax({type:'get',dataType:'script',url:CNPP+'loginstatus/?pageuserid='+pageuserid+'&fromurl='+window.location.href,success:function(){
		if(userid>0){
			if(pageuserid<=0&&(pac=='jiameng'||pac=='user')){window.location.reload();}
			$('#commentinputbox .beforeinput').html('诋毁、恶意攻击、无事实依据、非正能量的消极评语会被管理员删除，您的评语可能对其他人有很高的参考价值。');
			$('.userbox .userinfo').html(loginstr);
		}else if(pageuserid>0){
			$.ajax({type:'get',url:'/user/login/',data:{action:'logout'},success:function(data){
				if(pac=='jiameng'||pac=='user'){window.location.reload();}
			}});
		}else if(pageuserid>0){
			$.ajax({type:'get',url:'/user/login/',data:{action:'logout'},success:function(data){
				if(pac=='jiameng'||pac=='user'){window.location.reload();}
			}});
		}
		
	}});
}
function cnpplogin(e){
	if(userid<=0){
		if ($('.loginbox').length==1){
			$('.loginbox').show();
		}else{
			var nowurl =$(e).attr('fromurl')?$(e).attr('fromurl'):window.location.href;
			loadCSS('/public/css/maigoo/v2019/loginhtml.css?t='+(new Date().getTime()));
			loadJS('/public/js/maigoo/v2019/loginhtml.js?t='+(new Date().getTime()),function(){
				addloginhtml(nowurl);
			});
		}
		return false;
	}
}
function searchxgkeywords(){
	var searchq=$('header .search,#searchform .searchq').val();
	if(searchq.replace(/\s+/,'')!=''){
		var data='<div class="searchxgkeywords"></div>';
		$('#searchts').html(data);
		$.ajax({type:'get',dataType:'json',url:'/ajaxstream/search/',data:{action:'searchxgkeywords',q:searchq},success:function(data){
			if(data.result=='success'&&data.q==$('header .search,#searchform .searchq').val()){
				var searchxgkeywords='';
				for(var i in data.data){
					searchxgkeywords +='<span onclick="$(\'header .search,#searchform .searchq\').val($(this).text());$(\'header .searchbox,#searchform .searchbox\').submit();">'+data.data[i]+'</span>';
				}
				$('#searchts').find('.searchxgkeywords').html(searchxgkeywords);
				if(searchxgkeywords!=''){
					$('#searchts').show();
				}else{
					$('#searchts').hide();	
				}
			} else {
				showhistory_search();
			}
		}});
	} else {
		showhistory_search();
	}
}
function showhistory_search(){
	var historyhtml='';
	$('#searchts').html('');
	var hotkeywords='<div class="hotsearch"><div class="font14 color1 hottitle">热门搜索</div>';	
	$.ajax({type:'get',dataType:'json',url:'/ajaxstream/search/',data:{action:'hotsearch'},success:function(data){
		 for(var i in data.data){
			hotkeywords +='<span onclick="$(\'header .search,#searchform .searchq\').val($(this).text());$(\'header .searchbox,#searchform .searchbox\').submit();">'+data.data[i]+'</span>';
		 }
		 hotkeywords+='<div class="clear"></div></div>';
		 $('#searchts').prepend(hotkeywords);
	}});
	if(window.localStorage){
		var historysearch=window.localStorage.getItem('searchq');
		if(historysearch!=undefined&&historysearch!=''){
			historysearch=historysearch.split(',');
			var historyhtml='<div class="historybox color1"><em class="clearhistory" >历史记录</em><i class="iconfont icon-shanchu" onclick="shousuoclear(this)"></i></div><div class="hislist">';
			for(var i in historysearch){
				if(historysearch[i]!=''){
					historyhtml +='<span onclick="$(\'header .search,#searchform .searchq\').val($(this).text());$(\'header .searchbox,#searchform .searchbox\').submit();">'+historysearch[i]+'</span>';
				}
			}
			historyhtml+='<div class="clear"></div></div>';	
		}
	}
	if ($('#searchhistory').length<1) {
		var data='<div class="searchxgkeywords"></div>';
		$('#searchts').html(data);
	}
	$('#searchts').find('.searchxgkeywords').html(historyhtml);
	$('#searchts').show();

}
function shousuoclear(e){
	$(this).parents('.searchts').html('');
	window.localStorage.removeItem('searchq');
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
		historypage[historypage.length]=list;
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
		var thisheight=Math.ceil(_this.height());
		
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
			var loadsobj = setInterval(function(){
				startpos=_this.scrollLeft();
				startx=11;
				endx=0;
				_this.trigger('touchend');
			},_this.attr('autorun'));
			

			_this.hover(function(){
				isrun=true;
			  },function(){
				isrun=false;  
			});
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
			var delayclick='';
			_this.find('.sright').click(function(){
				isrun=true;
				clearTimeout(delayclick);
				delayclick=setTimeout(function(){isrun=false},6000);
				//if(isrun){return;}
				startpos=_this.scrollLeft();
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
				isrun=true;
				clearTimeout(delayclick);
				delayclick=setTimeout(function(){isrun=false},6000);
				//if(isrun){return;}
				startpos=_this.scrollLeft();
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
		cnpplogin();
		return false;	
	}
	if($(e).hasClass('active')){
		$(e).removeClass('active');
		$.ajax({type:'POST',url:'/ajaxstream/dingzhi/',data:{action:'collect','pac':pac,'pdo':pdo,'pid':pid,'iscollect':0,'v':2019},success:function() {
			loadCollect($(e));
		}});

	}else{		
		$(e).addClass('active');
		$.ajax({type:'POST',url:'/ajaxstream/dingzhi/',data:{action:'collect','pac':pac,'pdo':pdo,'pid':pid,'iscollect':1,'v':2019},success:function () {
				loadCollect($(e),true);
			}});
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

function loadCollect(obj,reload){
	/*绑定点击事件*/
	if($('#collectbox').find('.collectlistresult').length<=0) {
		$('#collectbox').html('<dl class="collectlistresult"><dt><i class="iconfont orange icon-shoucang"></i>我收藏的页面 <a class="op c666 font12" href="https://cnpp.cn/collect/" target="_blank"><i class="iconfont icon-gengduo"></i>更多 <i class="song">></i></a></dt><dd class="collectlistdd font12"><img class="loadding" src="/public/images/icon/loading_100x100.gif" /></dd></dl>');
	}
	if (userid>0) {
		$('#collectbox').show();
	}
	obj.parent().hover(function(){
		if (userid>0) {
			$('#collectbox').show();
		}
	},function(){
		if (userid>0) {
			$('#collectbox').hide();
		}
	});

	if (($('#pos_collectlist').length<=0 || reload==true) && userid>0) {
        /*请求内容*/
        $.ajax({type:'get',url:'/ajaxstream/dingzhi/',data:{action:'getcollect','pac':pac,'pdo':pdo,'pid':pid},success:function(data){
                if(data==''){
                    $('#collectbox').find('.collectlistdd').html('<div class="nothing">暂无收藏记录</div>');
                }else{
                    $('#collectbox').find('.collectlistdd').html(data);
                }
            }});
    }

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
		if($(this).parents('.dn').length>0 || $(this).data('page')>=2){
			return;	
		}
		if($(this).offset().top>$(window).scrollTop()-$(this).parent().height()-1000&&$(this).offset().top<$(window).height()+$(window).scrollTop()+1000){
			getData($(this)[0]);	
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
						if($('#_ajaxdata').find('>.moreall2').length>0){
							dataobj.removeAttr('style').html($('#_ajaxdata').find('>.moreall2').find('.tab>.tabcont>.licont').html());	
						}else{
							dataobj.removeAttr('style').html($('#_ajaxdata').find('>.tab>.tabcont>.licont').html());	
						}				

						if(dataobj.parents('.rightlay.category').length>0){
							dataobj.addClass('pdbom');
							dataobj.append('<div class="catbtn"><div class="catrebtn line2em" onclick="catmenubtn(this,2)">取消</div><div class="bg1 fff catrestbtn line2em" onclick="catmenubtn(this,1)">确定</div><div class="clear"></div></div>');
						}
						dataobj.find('.swipe').length>0?loadswipe(dataobj.find('.swipe .swipecont')):'';
					}
				}else if(tabnum==2){/*二级切换*/
					var dataobj=$(e).parents('.licont:first');
					dataobj.removeAttr('style').html($('#_ajaxdata').find('>.tab>.tabcont>.licont>.tab>.tabcont>.licont').html());
					dataobj.find('.swipe').length>0?loadswipe(dataobj.find('.swipe .swipecont')):'';
					if(dataobj.parents('.rightlay.category').length>0){
						dataobj.addClass('pdbom');
					}
				}
			}else if($('#_ajaxdata').find('.blockinfo.tab.selectab').length>0){//暂时判断
				var dataobj=$(e).parents('.licont:first');
				dataobj.removeAttr('style').html($('#_ajaxdata').find('>.tab>.tabcont>.licont').html());	

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
			if($(e).parent('.titlemorebox').length>0){
				var dataobj=$(e).parents('.blocktitle').next('.itembox');
			}else if($(e).parents('.hunayidata').length>0){
				var dataobj=$(e).parents('.hunayidata');
			}else{
				var dataobj=$(e).parents('.blockinfo:first').find('.itembox:first');
			}
			if($(e).text().indexOf('换一批')!=-1){
				//没有数据返回第1页
				if($('#_ajaxdata').find('.blockinfo .itembox').html().replace(/\s+/g,'')==''&&parseInt($(e).data('page'))>1){
					$(e).data('page',1);
					$('#_ajaxdata').html('')
					$(e).removeClass('loading');
					getData(e);
					return false;
				}
				if($('#_ajaxdata').find('>.moreall2').length>0&&$('#_ajaxdata').find('>.moreall2').find('.tab').length==1){
					dataobj.html($('#_ajaxdata').find('>.moreall2').find('.tab>.tabcont>.licont').find('.itembox').html());	
				}else if($(e).parent('.titlemorebox').length>0){
					$(e).parents('.blocktitle').html($('#_ajaxdata').find('.blocktitle').html());					
					dataobj.html($('#_ajaxdata').find('.itembox:eq(1)').html());
				}else if($(e).parents('.hunayidata').length>0){					
					dataobj.html($('#_ajaxdata').find('.hunayidata').html());
				}else{
					dataobj.html($('#_ajaxdata').find('.itembox').html());	
				}
				dataobj.find('.swipe').length>0?loadswipe(dataobj.find('.swipe .swipecont')):'';
			}else{			
				var dataobj=dataobj?dataobj:$(e).parents('.blockinfo:first').find('.itembox:first');
				if($('#_ajaxdata').find('.itembox').html().replace(/\s+/g,'')!=''){
					dataobj.find('>.clear').remove();
				}
				if($(e).parents('.hunayidata').length>0){					
					dataobj.html($('#_ajaxdata').find('.hunayidata').html());
				}else{
					dataobj.append($('#_ajaxdata').find('.itembox').html());
				}
				if($(e).data('maxpage')&&parseInt($(e).data('page'))==parseInt($(e).data('maxpage'))){
					$(e).parent().find('.morebtn').show();	
					$(e).remove();
					
				}
			}
			$(e).parents('.blockinfo:first').find('.blockmorebox').html($('#_ajaxdata').find('.blockmorebox').length>0?$('#_ajaxdata').find('.blockmorebox').html():'');
		}
		/*hover事件绑定*/
		
		dataobj.find('.bindhover').each(function(){
			$(this).hover(function(){
				$(this).attr('hover')?eval($(this).attr('hover')):'';
			}, function(){
				$(this).attr('hover2')?eval($(this).attr('hover2')):'';
			});
			$(this).removeClass('bindhover');	
		});
		if(dataobj.find('.itemscroll').length>0){
			dataobj.find('.itemscroll').each(function(){
				var shounum=$(this).attr('shownum')?parseInt($(this).attr('shownum')):1;
				$(this).attr('isload')!=1?marqueebottom($(this),shounum):'';
			});
		}
		if(dataobj.find('.marqueen').length>0){
			$('.marqueen').each(function(){
				Marquee_c($(this));
			});
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
		}
	}});
	return false;
}
var isshare=false;
function share(e){
	var brandid=$(e).attr('brandid');
	$('.brandupinfo .close').click();
	if(!brandid||brandid<=0){
		$('.bds_more:first')[0].click();
		return false;	
	}
	$('#voteshare').length<=0?$('body').append('<div id="voteshare" class="bd1"></div>'):'';
	$('#voteshare').html('<iframe id="shareiframe" scrolling="no" src="/brand/share_'+brandid+'.html" frameborder="0" width="100%" height="456"></iframe><i class="close fff bg1" onclick="$(this).parent().hide();">x</i>').show();
	return false;
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
	$.ajax({type:'POST',url:$(e).attr('_href'),success:function(data){
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

var listenerhashchange=false;
function showBrandBox(e){
	var _obj=$(e).parent(),brandid=$(e).attr('brandid');
	_obj.css({'z-index':3})
	var scrolltop=$(window).scrollTop();
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
}
function hideBrandBox(e){
	$(e).parents('.vpsc').removeAttr('style');
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
						var field=data[i]['id'].split('_')[2];
						$('tr[field='+field+']').length>0?$('tr[field='+field+']').find('.fmsg').html(data[i]['msg']):'';
					}
					
				}
			}

	},complete:function(){
		submitdelay=false;
	}});
	return false;
}

function mgtab(e,obj,classname){
	var eq=arguments[3]?arguments[3]:$(e).index();
	$(e).parent().find('.active').removeClass('active');
	$(e).addClass('active');
	$('.leftbox').find('a.jiamore').attr('autopage',4);
	obj.find(classname).addClass('dn');
	obj.find(classname+':eq('+eq+')').removeClass('dn');
	$(e).attr('callback')?eval($(e).attr('callback')+"(e,obj.find(classname+':eq('+eq+')'))"):'';
}

function kefulink() {
	if ($('#chatbox').length>0) {
		$('#chatbody').toggle('fast');
		return;
	} else {
		$('#go_top').append('<div id="chatbox"></div>')
	}
	$.ajax({'url':'/ajaxstream/kefu/', 'type':'get', 'dataType':'html', 'data':{'action':'showkefu'}, 'success':function (data) {
			if (data) {
				loadCSS('/public/mgchat/v2019/chat.css?20201104',null);
				loadJS('/public/mgchat/v2019/chat.js?'+Math.random(),null);
				loadJS('/public/js/cnpp/v2017/LocalResizeIMG.min.js',null);
				$('#go_top #chatbox').append(data);
			}
		}
	})
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

/*js isset*/
function isset(variable){
    return typeof(variable)=='undefined' ? false : true;
}


function SetHome(){
   var title = '买购网';
   var url = 'https://www.maigoo.com/';
	
	var ua = navigator.userAgent.toLowerCase();console.log(ua);
    if (ua.indexOf("360se") > -1) {
        alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
    }else if (ua.indexOf("msie 8") > -1) {
        window.external.AddToFavoritesBar(url, title); //IE8
    }else {
   	   try{
		 window.external.addFavorite(url,title);
	   }
	   catch(e){
	   try{
		  window.sidebar.addPanel(title,url,"");
	   }
	   catch(e){
		 alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
		 }
	   }
    }
}
function shareclick(e) {
	var sharepath = $(e).attr('data-cmd');
	if (sharepath == 'weixin') {
		if ($('#bdshare_weixin_qrcode_dialog').length==1) {
			$('#bdshare_weixin_qrcode_dialog').show();
		} else {
			var qrcode = 'https://www.maigoo.com/qrcode.php?url='+window.location.href;
			var div = '<div id="bdshare_weixin_qrcode_dialog" class="bd_weixin_popup"><div class="bd_weixin_popup_head"><span>分享到微信朋友圈</span><a href="javascript:;"  class="bd_weixin_popup_close" onclick="$(this).parent().parent().hide();">×</a></div><div id="bdshare_weixin_qrcode_dialog_qr" class="bd_weixin_popup_main"><img src="'+qrcode+'" /></div><div class="bd_weixin_popup_foot">打开微信，点击底部的“发现”，<br>使用“扫一扫”即可将网页分享至朋友圈。</div></div>';
			$('body').append(div);
		}
	} else if (sharepath == 'tsina') {
		var sinaurl = 'https://service.weibo.com/share/share.php?url='+window.location.href+'&title='+$('head title').text()+'&pic=https://www.maigoo.com/public/images/maigoo/logo.jpg&appkey=3135946074';
		$(e).attr('href',sinaurl).attr('target','_blank');
	} else if (sharepath == 'qzone') {
		var qzoneurl = 'https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+window.location.href+'&title='+$('head title').text()+'&summary='+$('head meta[name=description]').text()+'&site=http://www.maigoo.com&pics=https://www.maigoo.com/public/images/maigoo/logo.jpg';
		$(e).attr('href',qzoneurl).attr('target','_blank');
	} else if (sharepath == 'qq') {
		var renrenurl = 'http://connect.qq.com/widget/shareqq/index.html?url='+window.location.href+'&title='+$('head title').text()+'&source=http://www.maigoo.com&desc='+$('head meta[name=description]').text()+'&pics=https://www.maigoo.com/public/images/maigoo/logo.jpg&summary='+$('head meta[name=description]').text();
		$(e).attr('href',renrenurl).attr('target','_blank');
	}
}
function getmore(e){
	var scrollbox=$(e).parents('.marqueen').find('.scrollbox');
	if($(e).parents('.marqueen').find('.scrollbox ul').length>1){
		$(e).parents('.marqueen').find('.scrollbox ul:eq(1)').remove();
	}
	if(!scrollbox.hasClass('show')){
		scrollbox.addClass('show')
	}
	var pagesize=parseInt($(e).data('pagesize'));
	var start=parseInt($(e).data('start'))+pagesize;
	var maxnum=parseInt(scrollbox.find('ul li').length);
	scrollbox.find('ul li').addClass('dn');
	scrollbox.find('li:lt('+start+')').removeClass('dn');
	if(start==maxnum){
		$(e).parent().html('<div class="morebtn c333"><span>已经到底了</span></div>');
	}else{
		$(e).data('start',start);
	}
}
function clicksear(e){
	var url=$(e).attr('url');
	var q=$('input.search').val();
	url+=url.indexOf('?')!==-1?'&q='+q:'?q='+q;
	window.location.href=url;
}

/*/public/js/maigoo/v2019/event.js*/
var changekeyflag=0;
$(document).ready(function(){
	
	setTimeout(function(){
		var scrolldelay=null;
		var pagenavobj=$('#pagenav .pagenav');
		var rightlayobj=$('#container .rightlay');
		var wheight=$(window).height();
		$(window).scroll(function(){
			var wscrolltop=$(window).scrollTop();
			scrolldelay!=null?clearTimeout(scrolldelay):'';
			scrolldelay=setTimeout(function(){
				$("img.lazy").length>0?lazyPic():'';
				$(".ajaxload").length>0?ajaxLoad():'';
				if($('#go_top').length>0){
					wscrolltop>2000?$('#go_top').addClass('show'):$('#go_top').removeClass('show');
				}
			},50);
			
			if(pagenavobj.length>0){
				if(wscrolltop>65){
					pagenavobj.addClass('fixed');
				}else{
					pagenavobj.removeClass('fixed');	
				}
			}
			if(rightlayobj.length>0){
				if(rightlayobj.height()<$('#container .leftlay').height()){
					if(wheight>=rightlayobj.height()+$('#pagenav').height()){
						if(wscrolltop>$('#container').offset().top+parseInt($('#container').css('padding-top'))-$('#pagenav').height()&&wscrolltop+rightlayobj.height()+$('#pagenav').height()<$('#container').offset().top+parseInt($('#container').css('padding-top'))+$('#container').height()){
							rightlayobj.removeClass('fixed2').removeClass('absolute').removeAttr('style').addClass('fixed');
						}else if(wscrolltop>$('#container').offset().top+parseInt($('#container').css('padding-top'))-$('#pagenav').height()&&wscrolltop+wheight>=rightlayobj.height()+$('#container').offset().top+parseInt($('#container').css('padding-top'))){
							rightlayobj.removeClass('fixed').removeClass('fixed2').addClass('absolute').css({'top':$('#container').height()-rightlayobj.height()});
						}else{
							rightlayobj.removeClass('absolute').removeAttr('style').removeClass('fixed');	
						}
					}else{
						if(wscrolltop+wheight>=rightlayobj.height()+$('#container').offset().top+parseInt($('#container').css('padding-top'))&&wscrolltop+wheight<$('#container').offset().top+parseInt($('#container').css('padding-top'))+$('#container').height()){
							rightlayobj.removeClass('fixed').removeClass('absolute').removeAttr('style').addClass('fixed2');
						}else if(wscrolltop>$('#container').offset().top+parseInt($('#container').css('padding-top'))-$('#pagenav').height()&&wscrolltop+wheight>=rightlayobj.height()+$('#container').offset().top+parseInt($('#container').css('padding-top'))){
							rightlayobj.removeClass('fixed').removeClass('fixed2').addClass('absolute').css({'top':$('#container').height()+parseInt($('#container').css('padding-top'))-rightlayobj.height()});
						}else{
							rightlayobj.removeClass('fixed2').removeClass('absolute').removeAttr('style');	
						}	
					}
				}else if($('#container .leftlay .ajaxload').length<=0){
					$('#container .leftlay').css({'min-height':rightlayobj.height()});
				}
			}
		});
		$('#container .rightlay .searchhot .menu span').click(function(){
			$(this).parent().find('.active').removeClass('active');
			$(this).addClass('active');
			$(this).parent().next().find('.cont').addClass('dn');
			$(this).parent().next().find('.cont:eq('+$(this).index()+')').removeClass('dn');
		});

		$(window).scroll();
		/*searchbox*/
		if($("#pagenav .navright").length>0){
			$("#pagenav .navright .icon-fenlei3").hover(function(){
				$(".headblockcont").show();
			});
			$(".headblockcont").hover(function(){},function(){
				$(this).hide();
			});
		}
		/*懒加载图片和模块*/
		$("img.lazy").length>0?lazyPic():'';
		$(".ajaxload").length>0?ajaxLoad():'';
		/*懒加载图片和模块*/
		$("#pos_articleinfo a img").length>0?picViewer():'';
		checkuserlogin();
		$('.swipe').length>0?loadswipe($('.swipe .swipecont')):'';
		/*简单ajax内容*/
		$('.getajaxdata').each(function(){
			var _this=$(this);
			$.ajax({type:'get',url:$(this).attr('url'),success:function(data){
				_this.html(data);	
			}});
		});
		/*有作者的图片处理*/
		$('#container .showauthor').each(function(){
			var imgstr=$(this).find('img').attr('src');
			var reg=/_(\d+_\d+).*$/;
			imgstr=imgstr.replace(reg,'');
			if(!authorpiclist[imgstr]){
				imgstr=imgstr.replace('https','http');
			}
			if(authorpiclist[imgstr]){
				$(this).find('em').append('<span class="atr">作者：'+authorpiclist[imgstr]+'</span>');	
			}
		});
		/*图片简单切换*/
		imageSwitch();
		/*滚动*/
		if($('.marqueen').length>0){
			$('.marqueen').each(function(){
				Marquee_c($(this));
			});
		}
		/*hover事件绑定*/
		$('.bindhover').each(function(){
			$(this).hover(function(){
				$(this).attr('hover')?eval($(this).attr('hover')):'';
			}, function(){
				$(this).attr('hover2')?eval($(this).attr('hover2')):'';
			});
			$(this).removeClass('bindhover');	
		});
		/*滚动-模块*/
		if($('.itemscroll').length>0){

				$('.itemscroll').each(function(){
					var shounum=$(this).attr('shownum')?parseInt($(this).attr('shownum')):1;
					$(this).attr('isload')!=1?marqueebottom($(this),shounum):'';
				});
	
		}
		$('#container').find('.tab .tabmenu').each(function(){
			if($(this).find('.item.active').index()>1){
				$(this).animate({scrollLeft:$(this).find('.item.active').offset().left-$(window).width()*0.5+$(this).find('.item.active').width()*0.5},{duration:300});
			}
		});
		$('#container').delegate('.tab .tabmenu div.item','click',function(){
			if($(this).attr('onclick')){
				return;	
			}
			$(this).parent().animate({scrollLeft:$(this).parent().scrollLeft()+$(this).offset().left-$(this).parent().width()*0.5-$(this).parent().offset().left-$(this).width()*0.5},{duration:300});
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
			
		});
		/*过小图片版权提示处理*/
		$('#container .articlecont .showauthor').each(function(){
			if($(this).find('img').width()<300||$(this).find('img').height()<150){
				$(this).find('img').attr('title',$(this).find('em').html().replace(/<.*?>/g,''));
				$(this).find('em').remove();
			}
		});
		/*attention*/
		loadJS('https://count.cnpp.cn/count.php?ac='+pac+'&do='+pdo+'&id='+pid+'&siteid='+siteid+'&referrer='+document.referrer,function(){
			if(typeof(attentiondata)!='undefined'){
				$('[count=attention]').each(function(){
					$(this).html().replace(/\d+/g,'')==''?$(this).html(attentiondata):$(this).attr('title',$(this).attr('title').replace(/\d+/g,attentiondata));
				});
			}	
		});
	
		setTimeout(addHistory,1000);
		addCatlist();
		addBrandlist();
		checkHash();
		$(window).bind('hashchange',checkHash);
	},500);
	$('#wrap').delegate('.brandud[brandid]','click',function(){
		showBrandBox(this);
	});
	/*复制追加版权*/
	document.body.addEventListener('copy', function (e) {
		if (window.getSelection().toString() && window.getSelection().toString().length > 42) {
			setClipboardText(e);
		}
	});
	function setClipboardText(event) {
		var clipboardData = event.clipboardData || window.clipboardData;
		if (clipboardData) {
			event.preventDefault();

			var htmlData = ''
				+ window.getSelection().toString() + '<br/><br/>'
				+'著作权归作者所有。<br/>'
				+ '商业转载请联系作者获得授权,非商业转载请注明出处,谢谢合作。<br/>'
				+ '链接:' + window.location.href + '<br/>'
			    + '====================================================================================';
			var textData = ''
				+ window.getSelection().toString() + '\n\n'
				+ '著作权归作者所有。\n'
				+ '商业转载请联系作者获得授权,非商业转载请注明出处。\n'
				+ '链接:' + window.location.href + '\n'
				+ '====================================================================================';


			clipboardData.setData('text/html', htmlData);
			clipboardData.setData('text/plain',textData);
		}
	}
	/*文章目录识别*/
	$('.articlecont h5:first,.citiaoshow h5:first').each(function(){
		$(this).parent().addClass('articletemplate1');
		articlemulu($(this));
	});
	$('#fabubtn').click(function(){
		$('#fabumenu').toggle();
	});
	/*搜索框事件focus click keyup*/
	var delaysearch=null;
	$('header .search,#searchform .searchq').blur(function(){
		setTimeout(function(){
			$('#searchts').hide();
		},200);
	}).focus(function(){
		searchxgkeywords();
	}).bind('keyup',function(event){
		if (event.keyCode == 40 || event.keyCode == 38) {
			if (event.keyCode == 38 && $('#searchts .searchxgkeywords span').length>0){
				if ($('#searchts .searchxgkeywords span.hover').length>0) {
					var _this = $('#searchts .searchxgkeywords span.hover');
					_this.removeClass('hover');
					if (_this.prev().length>0) {
						_this.prev().addClass('hover');
						var keyword = _this.prev().text();
					}else{
						_this.parent().find('span:last').addClass('hover');
						var keyword = _this.parent().find('span:last').text();
					}
				} else{
					$('#searchts .searchxgkeywords span').addClass('hover');
					var keyword = $('#searchts .searchxgkeywords span:last ').text();
				}
			} else if (event.keyCode == 40 && $('#searchts .searchxgkeywords span').length>0) {
				if ($('#searchts .searchxgkeywords span.hover').length>0) {
					var _this = $('#searchts .searchxgkeywords span.hover');
					_this.removeClass('hover');
					if (_this.next().length>0) {
						_this.next().addClass('hover');
						var keyword = _this.next().text();
					}else{
						_this.parent().find('span:first').addClass('hover');
						var keyword = _this.parent().find('span:first').text();
					}
				}else{
					$('#searchts .searchxgkeywords span:first').addClass('hover');
					var keyword = $('#searchts .searchxgkeywords span:first').text();
				}
			}
			if (keyword) {
				$('header .search,#searchform .searchq').val(keyword);
			}
			return;
		}
		clearTimeout(delaysearch);
		delaysearch=setTimeout(searchxgkeywords,200);
	});
	/*评论区加载*/
	if ($('#pos_commentlist').length>0) {
		$.ajax({url:window.location.href,data:{'page':1,'ajax':1,'action':'commentlist'},dataType:'html',success:function (data) {
			$('#pos_commentlist').html(data.replace(' class="blockinfo commentlist" id="pos_commentlist"','').replace('<div class="bline bline1"></div>',''));
		}})
	}
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
	obj.after('<div class="articlemulu"><div class="mululeft"><div class="mulu"><div class="img"></div>目录</div></div><div class="muluright"></div></div></div>');
	
	
	$('.articletemplate1').find('h2,h3').each(function(k){
		if(k%len==0){
			str+='<ul class="col">';
		}
		if($(this).is('h2')){
			str+='<li class="mulu1 dhidden " position="'+k+'">'+$(this).text()+'</li>';
		}else{			
			var type=typeof($(this).text().replace(/\d+、/g,'').split('、')[0]);
			var test=$(this).text().replace(/\d+、/g,'').split('、')[1]&&type!='string'?$(this).text().replace(/\d+、/g,'').split('、')[1]:$(this).text().replace(/\d+、/g,'');
			str+='<li class="mulu2" position="'+k+'">'+test+'</li>';
		}
		if(k==len1-1||k%len==len-1){
			str+="</ul>";
		}
		
	});
	$('.articlemulu .muluright').append(str+'<div class="clear"></div>');
	if(false&&$('.rightlay').length>0){
		$('.rightlay').find('.userinfo').before($('.articlemulu').clone());
		$('.rightlay').find('.articlemulu .col:first').append($('.rightlay').find('.articlemulu .col:eq(1) li'));
		$('.rightlay').find('.articlemulu .col:first').append($('.rightlay').find('.articlemulu .col:eq(2) li'));
		$('.rightlay').find('.articlemulu').addClass('bg');
		$('.rightlay').find('.mululeft').remove();
		$('.rightlay').find('.muluright').append('<i></i>');
		$('.rightlay').find('.articlemulu').append('<em></em>');

		if($('.articletemplate1').find('h2').length==0){
			$('.rightlay').find('.muluright').addClass('nomulu1');	
		}else{
			$('.rightlay').find('.muluright').find('.mulu1').each(function(i) {
				var pos=parseInt($(this).attr('position'));
				if($('#leftlay').find('.muluright').find('[position='+(pos+2)+']').hasClass('mulu1')){
					$(this).next('.mulu2').addClass('nonum');
				}
            });
		}
	}
	
	$('.articlemulu').find('.mulu1,.mulu2').click(function(){
		 $("html, body").animate({
     	 	scrollTop: parseInt($('.articletemplate1').find('h2,h3').eq($(this).attr('position')).offset().top-60)
		 });
		 $(this).addClass('mulubgcolor');
		
    	 return false;
	});
	var scrolldelayobj;
	$(window).scroll(function(){
		clearTimeout(scrolldelayobj);
		scrolldelayobj=setTimeout(function(){
			var scrolltop=$(window).scrollTop()+50;
			var pos=0,isbreak=false;
			$('.articletemplate1').find('h2,h3').each(function(k){
				if(!isbreak){
					pos=k;
					var yuanshu=$(this).offset().top;
					if(yuanshu>scrolltop&&yuanshu<scrolltop+$(window).height()-50){
						isbreak=true;
					}else if(yuanshu>scrolltop+$(window).height()-50){
						pos--;
						isbreak=true;
					}
				}
			});
			$('#leftlay').find('.articlemulu').find('li').removeClass('mulubgcolor');
			$('#leftlay').find('.articlemulu').find('li:eq('+pos+')').addClass('mulubgcolor');
			var top=(pos)*$('#leftlay').find('.articlemulu').find('.mulu1,.mulu2').eq(1).height()+4;
			$('#leftlay').find('.articlemulu').find('i').css('top',top+'px');
			$('#leftlay').find('.muluright').animate({scrollTop: (top-120)+'px'},300);
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
	if(obj.find('.scrollbox ul').length>0){
		var _scrollobj=obj.find('.scrollbox ul');	
	}else{
		var _scrollobj=obj.find('.scrollbox table');		
	}
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
	var touchstartx=0;
	var touchendx=0;
	_scrollobj.bind('touchstart',function(e){
		touchstartx=e.originalEvent.targetTouches[0].pageX;
	});
	_scrollobj.bind('touchmove',function(e){
		touchendx=e.originalEvent.targetTouches[0].pageX;
	});
	_scrollobj.bind('touchend',function(e){
		if(touchendx-touchstartx>50||touchstartx-touchendx>50){
			clearInterval(scrollobj);
		}
	});
	_scrollobj.hover(function(){
		stopscroll=true;
	  },function(){
		stopscroll=false;  
	});
  /*
	_scrollobj.hover(function(){
		stopscroll=true;	
		setTimeout(function(){
			stopscroll=false;
		},3000);
	});*/
}
function getObjectHeight(obj){
	return 	parseInt(obj.height())+parseInt(obj.css('padding-top'))+parseInt(obj.css('padding-bottom'))+parseInt(obj.css('border-top-width'))+parseInt(obj.css('border-bottom-width'));
}
function marqueebottom(obj,shounum){
	if(obj.find('.bitem').length==0){
		return;	
	}
	obj.attr('isload',1);

	var _this;

	var delay=obj.attr('delay')?obj.attr('delay'):5000;
	var num=obj.find('.bitem').length-shounum;
	var objheight=0,showheight=0;
	obj.find('.bitem').each(function(i){
		if(i>=num){
			$(this).css({'opacity':1});	
			showheight+=getObjectHeight($(this));
		}else{
			objheight+=getObjectHeight($(this));	
			$(this).hide();
		}
	});
	
	obj.height(showheight);
	var scrolltop=objheight;
	obj.scrollTop(scrolltop);//先滚动到最底部
	
	var cleardelay=setInterval(function(){
		showheight-=getObjectHeight(obj.find('.bitem:eq('+(num+shounum-1)+')'));
		obj.find('.bitem:eq('+(num+shounum-1)+')').hide();
		
		num--;
		
		_this=obj.find('.bitem:eq('+num+')');

		scrolltop-=getObjectHeight(_this);

		if(num>=0&&scrolltop>=0){
			_this.css({'opacity':0});
			obj.animate({'scrollTop':scrolltop},{duration:200,complete:function(){
				_this.show().animate({'opacity':1},100);
				showheight+=getObjectHeight(_this);
				obj.height(showheight);
			}});
		}else{
			scrolltop=objheight;
			obj.animate({scrollTop: scrolltop+'px'},200);
			
			num=obj.find('.bitem').length-shounum;
			
			obj.find('.bitem').each(function(i){
				if(i>=num){
					$(this).css({'opacity':1});	
					$(this).show();
					showheight+=getObjectHeight($(this));
				}else{
					objheight+=getObjectHeight($(this));	
					$(this).hide();
				}
			});
			obj.height(showheight);
		}
	},delay);
}

function checkHash(){
	if(window.location.href.indexOf('#pos')!=-1){
		var posname=location.hash.replace('#pos','pos_');
		if($('#'+posname).length>0){
			var posname2=posname.replace('pos_','');
			if($('#'+posname).find('.ajaxload').length>0){
				$('.tabmenubox .item[action='+posname2+']').click();	
			}
			$('html,body').animate({scrollTop:$('#'+posname).offset().top-$('#pagenav').height()},{duration:300});	
		}else{
			posname=location.hash.replace('#pos','');	
			if($('#'+posname).length>0){
				$('html,body').animate({scrollTop:$('#'+posname).offset().top-$('#pagenav').height()},{duration:300});	
			}
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
			var delay=_this.attr('delay')?parseInt(_this.attr('delay')):2000;
			_this.find('.imli').length>1?setInterval(function(){
			    show_image_flag=parseInt(_this.attr('show_image_flag'));
				++show_image_flag;
				show_image_flag>=_this.find('.imli').length?show_image_flag=0:'';
				_this.find('.imli').css('display','none');
				_this.find('.imli:eq('+(show_image_flag)+')').css('display','block');
				_this.attr('show_image_flag',show_image_flag);
			},delay):'';
		});
	}
}

function picViewer(){
	loadCSS('https://s.maigoo.com/public/js/jquery/viewer.min.css?202007');
	loadJS('https://s.maigoo.com/public/js/jquery/viewer-jquery.min.js?202007302',function(){
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


/*/public/js/maigoo/v2019/weUI.js*/
function dialog(title,msg,callback){var btnname=arguments[3]?arguments[3]:'确定';var dialog1,dialog2;dialog1='<div class="weui_dialog_confirm" id="dialog1" style="display: none;"><div class="weui_mask"></div><div class="weui_mask"></div><div class="weui_dialog"><div class="weui_dialog_hd"><strong class="weui_dialog_title">'+title+'</strong></div><div class="weui_dialog_bd">'+msg+'</div>   <div class="weui_dialog_ft"><a href="javascript:;" class="weui_btn_dialog default">取消</a><a href="javascript:;" class="weui_btn_dialog primary">'+btnname+'</a></div></div></div>  ';dialog2='<div class="weui_dialog_alert" id="dialog2" style="display: none;">  <div class="weui_mask"></div> <div class="weui_dialog"><div class="weui_dialog_hd"><strong class="weui_dialog_title">'+title+'</strong></div>  <div class="weui_dialog_bd">'+msg+'</div>  <div class="weui_dialog_ft">  <a href="javascript:;" class="weui_btn_dialog primary">'+btnname+'</a> </div> </div> </div>  ';if(arguments[2]){$("body").append(dialog1);$("#dialog1").fadeIn("fast");$("#dialog1 .primary").on("click",function(){callback()});$("#dialog1 .default").on("click",function(){$("#dialog1").fadeOut("fast",function(){$("#dialog1").remove()})})}else{if(!$("#dialog2").length){$("body").append(dialog2)}else{$("#dialog2 .weui_dialog_title").html(title);$("#dialog2 .weui_dialog_bd").html(msg)}$("#dialog2").fadeIn("fast");$("#dialog2 .primary").on("click",function(){$("#dialog2").fadeOut("fast")})}}
function toast(){var msg;arguments[0]?msg=arguments[0]:msg="已完成";var toast;toast='<div id="toast" style="display: none;"><div class="weui_mask_transparent"></div><div class="weui_toast"><i class="iconfont icon-qiyerenling1 weui_icon_toast"></i><p class="weui_toast_content">'+msg+"</p></div></div>";if(!$("#toast").length){$("body").append(toast)}else{$("#toast .weui_toast_content").html(msg)}$("#toast").fadeIn("fast",function(){setTimeout(function(){$("#toast").fadeOut("fast")},800)})}
function loadingToast(){var msg;arguments[0]?msg=arguments[0]:msg="数据加载中";var loadingToast;loadingToast='<div id="loadingToast" class="weui_loading_toast" style="display:none;"><div class="weui_mask_transparent"></div><div class="weui_toast"><div class="weui_loading"><div class="weui_loading_leaf weui_loading_leaf_0"></div><div class="weui_loading_leaf weui_loading_leaf_1"></div><div class="weui_loading_leaf weui_loading_leaf_2"></div><div class="weui_loading_leaf weui_loading_leaf_3"></div><div class="weui_loading_leaf weui_loading_leaf_4"></div><div class="weui_loading_leaf weui_loading_leaf_5"></div><div class="weui_loading_leaf weui_loading_leaf_6"></div><div class="weui_loading_leaf weui_loading_leaf_7"></div><div class="weui_loading_leaf weui_loading_leaf_8"></div><div class="weui_loading_leaf weui_loading_leaf_9"></div><div class="weui_loading_leaf weui_loading_leaf_10"></div><div class="weui_loading_leaf weui_loading_leaf_11"></div></div><p class="weui_toast_content">'+msg+"</p></div></div>";if(!$("#loadingToast").length){$("body").append(loadingToast)}else{$("#loadingToast .weui_toast_content").html(msg)}$("#loadingToast").fadeIn("fast")}
function actionSheetMenu(){if(!arguments.length){return}var menuHtml="";for(i=0;i<arguments.length;i++){if(typeof(arguments[i])!="object"||!arguments[i].id||!arguments[i].text){continue}menuHtml+='<div class="weui_actionsheet_cell" id="'+arguments[i].id+'">'+arguments[i].text+"</div>"}if(!menuHtml){return}var actionSheetMenu;actionSheetMenu='<div id="actionSheet_wrap"><div class="weui_mask_transition" id="mask"></div><div class="weui_actionsheet" id="weui_actionsheet"><div class="weui_actionsheet_menu"></div><div class="weui_actionsheet_action"><div class="weui_actionsheet_cell" id="actionsheet_cancel">取消</div></div></div></div>';if(!$("#actionSheet_wrap").length){$("body").append(actionSheetMenu)}$(".weui_actionsheet_menu").html(menuHtml);$("#mask").show().addClass("weui_fade_toggle");$("#weui_actionsheet").addClass("weui_actionsheet_toggle");$("#mask").unbind("transitionend").unbind("webkitTransitionEnd");$("#mask , #actionsheet_cancel").on("click",function(){$("#mask").removeClass("weui_fade_toggle");$("#weui_actionsheet").removeClass("weui_actionsheet_toggle");$("#mask").on("transitionend webkitTransitionEnd",function(e){$("#mask").hide()})})}
function textToast(text){if(!$("#textToast").length){$("body").append('<div id="textToast" class="textToast"></div>')}$("#textToast").text(text).addClass("textToastShow").on("animationend webkitAnimationEnd",function(e){$(this).removeClass("textToastShow")})};

/*/public/js/maigoo/v2019/block/jiameng/addform2.js*/
$(document).ready(function(){
	$('input[check=search]').each(function(){searchSomething($(this));});
	$('.li.category .searchdata').delegate('li','click',function(){
		if(_searchobj){
			var _id=$(this).html().replace(/^<span cid="(\d+)".*$/g,'$1');
			$(this).parents('.li.category').find('input.'+_searchobj.attr('ac')+'_id').val(_id);
			_searchobj.val($(this).text());	
		}
		$('.li.category .searchdata').hide();
	});
	$('.li.category').blur(function(){
		$('.li.category .searchdata').hide();
	});
});

function changetype(obj){
	obj.parent().find('input').val('').hide();
	obj.parent().find('input.'+obj.val()+'_list').show();

}
/*搜索信息框*/
var sresult=Array(),_searchobj=null;
function searchSomething(obj){
	var searchkey='';
	var loadding=false;/*防止不断循环*/
	var searchobj;
	obj.focus(function(){
		searchobj = setInterval(function(){
			if(obj.val()==searchkey){
				if(!loadding){
					loadding = true;
					if(obj.val()!=''){
						var msg=sresult[obj.attr('action')+obj.val()];
						if(!isset(sresult[obj.attr('action')+obj.val()])){
							var ac=obj.attr('ac')?obj.attr('ac'):window.location.href.split('/')[3];
							var url = '/ajaxstream/'+ac+'/?action='+obj.attr('action');
							$.ajax({type:'get',async:false,url:url,data:{q:searchkey},success:function(data){msg=data;}});
							sresult[obj.attr('action')+searchkey]=msg;
						}
					}
					msg=msg?msg.replace('[','').replace(']','').split('|'):'';
					Kmenu(obj,msg,obj.attr('afterremove')==1?false:true,obj.attr('dialogwidth')?obj.attr('dialogwidth'):'');
				}
			}else{
				loadding = false;	
			}
			searchkey = obj.val();
		},300);	
		_searchobj=obj;
	}).blur(function(){
		searchkey='';
		clearInterval(searchobj);
		
	});
}

function Kmenu(obj,arr){
	obj.parents('.li').find('.searchdata').html();
	if(arr[0]){
		var afterremove = arguments[2]==false?arguments[2]:true;
		var width = arguments[3]?arguments[3]:'auto';
		var str='<ul>';
		$.each(arr,function(k,v){
			str+='<li>'+v+'</li>';
		});
		str+='</ul>';
		obj.parents('.li').find('.searchdata').html(str).show();
	}
	
}




/*/public/js/maigoo/v2019/block/jiameng/jiamengadd.js*/
/*$(document).ready(function (){alert(login_userid);
	login_userid>0?$('#lianxiren').val($('#header .register .nickname a').text()):'';
});*/
/*ajax提交表单*/
var submitdelay=false;
function ajaxform(obj,contobj){
	if(obj.find('.xieyi input').prop('checked')==false){
		alert('非常抱歉！您需要认真阅读服务协议声明提醒注意事项，并接受服务协议条款，才可以提交信息！');
		return false;
	}	
	if(submitdelay){
		return false;	
	}
	submitdelay=true;
	setTimeout(function(){submitdelay=false;},3000);
	$.ajax({type:'post',url:obj.attr('action'),data:obj.serialize(),success:function(data){
		submitdelay=false;
		var this_url = window.location.href;
		if(data.indexOf('error\|')!=-1){
			var msg = data.split('|');
			contobj.find('.error').length>0?contobj.find('.error').html(msg[1]):alert(msg[1]);
			//contobj.find('input[name=seccode]').length>0?contobj.find('input[name=seccode]').next().click():'';
		}else if(data.indexOf('登录\|')!=-1){
			var msg = data.split('|');
			if(confirm(msg[1])){
				var loginurl = contobj.attr('data-login-url');
				window.location.href=loginurl; //试了几种打开新窗口，发现容易被浏览器拦截
			}
			return false;
		}else{
			var msg = data.split('|');
			alert(msg[1]);
		}
	}});
	return false;
}

function bindSubmitCheck(obj){
	var checkformresult = true;
	obj.find('[_check]').each(function(){
		if($(this).attr('_check')=='noemptyinput'&&$(this).val()==''){
			$(this).next('.ts').html('不能为空!');
			if($('#sqjm').length<=0){
				$('html,body').animate({scrollTop:$(this).offset().top-99},{duration:500});
			}
			checkformresult=false;
		}else if($(this).attr('_check')=='noemptyselect'&&$(this).val()<=0){
			$(this).parent().find('.ts').html('不能为空!');
			if($('#sqjm').length<=0){
				$('html,body').animate({scrollTop:$(this).offset().top-99},{duration:500});
			}
			checkformresult=false;
		}else{
			$(this).parent().find('.ts').html('');	
		}
	});

	return checkformresult;
}

function getbelowarea(e){
	var areaid=parseInt($(e).val()),arealevel=parseInt($(e).attr('arealevel'))+1;
	if(areaid<=0||arealevel>3){
		return;	
	}
	$("select[arealevel='"+arealevel+"']").hide().val('');
	if($("select[pid='"+areaid+"']").length==0){
		$.ajax({type:'post',url:'/ajaxstream/area/',data:{'action':'getbelowarea','areaid':areaid,'arealevel':arealevel},success:function(data){
			$(e).after(data);
		}});
	}else{
		$("select[pid='"+areaid+"']").show();	
	}
	if(arealevel==2){
		arealevel+=1;
		$("select[arealevel='"+arealevel+"']").hide().val('');	
	}
}