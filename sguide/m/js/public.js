var mnumber=Array(),inum=0;
var touchstartx=touchstarty=0;
var touchendx=touchendy=0;
var isrun=false;
/*前台通用函数*/
$(document).ready(function(){

	/*统一进行ajax数据加载*/
	var did='';
	$(".modelbox div[data-type='ajax']").each(function() {
         did+=$(this).attr('data-did')+',';
    });
	if(did!=''){
		$.ajax({type:'get',dataType:'script',url:'/ajaxstream/mod/',data:{action:'ajaxdata',itids:did,pac:pac,pdo:pdo,pid:pid},success:function(){
			$.each(t_ajaxdata,function(i,info){
				$(".modelbox div[data-did='"+info.id+"']").html(info.html);
			});
			/*统一加载模块事件函数*/
			$('.modelbox').each(function(){
				$(this).delegate('.bindclick','click',function(){
					showDescByDialog($(this));
				});
				check_model_fun_event($(this));
			});
		}});
	}else{
		/*统一加载模块事件函数*/
		$('.modelbox').each(function(){
			$(this).delegate('.bindclick','click',function(){
				showDescByDialog($(this));
			});
			check_model_fun_event($(this));
		});		
	}

});

/*加载更多*/
function loadModelData(e,obj,dataid,ismobile,page){
	var append=arguments[5]?arguments[5]:0;/*是否追加数据*/ 
	var startid=parseInt($(e).attr('startid'));
	var shownum=$(e).attr('shownum')?parseInt($(e).attr('shownum')):'';
	var num=parseInt($(e).attr('num'));
	var page=$(e).attr('page')?parseInt($(e).attr('page')):1;
	var templateid=$(e).attr('templateid')?parseInt($(e).attr('templateid')):0;
	var _this=$(e);
	obj.children('tbody').length>0?obj=obj.children('tbody'):'';
	$.ajax({type:'get',url:'/public/mod/php/getpage.php',async:false,data:{'action':'getpage','dataid':dataid,'page':++page,'templateid':templateid,'ismobile':ismobile,'startid':startid,'num':num,'append':append,'numshow':shownum},success:function(data){ 
		var tempdata=data.replace(/\s/g, "");/*去除标签和空格看是否有内容*/ 
		tempdata.replace('</div>','')==''?tempdata=tempdata.replace('</div>',''):'';
		if(tempdata==''&&page>1&&append!=1){
			loadModelData(e,obj,dataid,1,ismobile);
		}else if(tempdata!=''||(startid>=shownum&&shownum!='')||(tempdata==''&&startid<shownum&&startid>num&&shownum!='')){
			if(((startid>=shownum&&shownum!='')||(tempdata==''&&startid<shownum&&startid>num&&shownum!=''))&&obj.parents('.md_citiao_table').find('.more').find('a.addmore3')){
					_this.html('收起 -').addClass('snomore');
					return false;
				}
			if(append==1){
				obj.append(data);
			}else{
				obj.html(data);
			}
			lazyPic();
			
		}else if(tempdata==''&&append==1){
			var classname=obj.parent().hasClass('md_datawebshopspecs_cols1')||obj.parent().hasClass('md_productspecs_style')?' bg':'';
			if(obj.parents('.md_school').find('.more').find('a.addmore3').length>0){ 
				_this.addClass('snomore');
			}else if(obj.parent().hasClass('md_datawebshopspecs_cols1')||obj.parent().hasClass('md_webshop_cols')){
				_this.parent().append('<div class="nomore'+classname+'" style=" background:#ffdc00; border-radius:15px;">暂无更多数据</div>');
				_this.remove();
				}
			else{
				_this.parent().append('<div class="nomore'+classname+'">暂无更多数据</div>');
				_this.remove();
			}
		}else{
			obj.html('');
		}
		
		$(e).attr('startid')?$(e).attr('startid',startid+num):'';
		parseInt($(e).attr('page'))>0?$(e).attr('page',page):''; 
		/*hover事件绑定*/
		obj.find('.bindhover').each(function(){
			$(this).hover(function(){
				$(this).attr('hover')?eval($(this).attr('hover')):'';
			}, function(){
				$(this).attr('hover2')?eval($(this).attr('hover2')):'';
			});	
		});
	}});
}	
/*弹窗展示*/
function showDescByDialog(obj){
	if($('#showDescByDialog').length<=0){
		$('body').append('<div id="showDescByDialog"><div class="boxbg"><div class="descbox font18"></div></div></div>');
	}
	$('#showDescByDialog').find('.boxbg').css({'left':'10%','top':'10%','width':'80%','height':$(window).height()*0.8});
	setTimeout(function(){
		var cont=obj.find('.model_data').length>0?obj.find('.model_data').html():obj.html();
		$('#showDescByDialog').find('.descbox').html(cont);
		$('#showDescByDialog').click(function(){$(this).remove()});
	},300);
}
/*统一加载模块事件函数*/
function check_model_fun_event(modelobj){
	if(modelobj.attr('model-fun')){
		var fun_str=modelobj.attr('model-fun');
		if(fun_str!=''){
			var fun_arr=fun_str.split(';');
			$.each(fun_arr,function(k,v){
				eval(v+'(modelobj);');
			});
		}
	}
}

/*统一加载鼠标hover事件*/
function mouseHover(obj){
	var addclass=obj.attr('addclass')?obj.attr('addclass'):'';
	var removeclass=obj.attr('removeclass')?obj.attr('removeclass'):'';
	obj.find(obj.attr('item')).hover(function(){
		addclass!=''?$(this).addClass(addclass):'';
		removeclass!=''?$(this).removeClass(removeclass):'';
	},function(){
		removeclass!=''?$(this).addClass(removeclass):'';
		addclass!=''?$(this).removeClass(addclass):'';
	});	
}
/*统一左右等高事件，如果有图片，得先判断图片已加载完成*/
function autoMinHeight(obj){
	if(!obj.attr('inum')){
		obj.attr('inum',inum++);
	}
	var i=parseInt(obj.attr('inum'));
	if(typeof mnumber[i]=='undefined'){
		mnumber[i]=0;
	}
	setTimeout(function(){
		var height=99999;
		obj.find('[lay=true]').each(function(){
			$(this).height('auto');
			$(this).height()<height?height=$(this).height():'';
		});
		height<50?height=50:'';
		height<99999?obj.find('[lay=true]').height(height):'';
		obj.find('[lay=true]').each(function(){
			$(this).find('[lay=up]').height(height-parseInt($(this).find('[lay=up]').css('margin-top')));
		});
	},100);
	if(typeof isAdmin!='undefined'||mnumber[i]<3){
		mnumber[i]++;
		setTimeout(function(){
			autoMinHeight(obj);	
		},2000);
	}
	$(window).resize(function(){
		autoMinHeight(obj);
	});
}
function autoMaxHeight(obj){
	if(!obj.attr('inum')){
		obj.attr('inum',inum++);
	}
	var i=parseInt(obj.attr('inum'));
	if(typeof mnumber[i]=='undefined'){
		mnumber[i]=0;
	}
	setTimeout(function(){
		var height=0;
		obj.find('[lay=true]').each(function(){
			$(this).height('auto');
			$(this).height()>height?height=$(this).height():'';
		});
		height>0?obj.find('[lay=true]').height(height):'';
	},100);

	if(typeof isAdmin!='undefined'||mnumber[i]<3){
		mnumber[i]++;
		setTimeout(function(){
			autoMaxHeight(obj);	
		},2000);
	}
	$(window).resize(function(){
		autoMaxHeight(obj);
	});
}
function HeightEqualWidth(obj){
	var w=0;
	if(!obj.attr('inum')){
		obj.attr('inum',inum++);
	}
	var i=parseInt(obj.attr('inum'));
	if(typeof mnumber[i]=='undefined'){
		mnumber[i]=0;
	}
	setTimeout(function(){
		obj.find('[lay=true]').each(function(){
			w=$(this).width();
			if(w>0){
				/*$(this).width(w);*/
				$(this).height(w);
			}
		});
	},100);
	
	if(typeof isAdmin!='undefined'||mnumber[i]<3){
		mnumber[i]++;
		setTimeout(function(){
			HeightEqualWidth(obj);	
		},2000);
	}	
	$(window).resize(function(){
		HeightEqualWidth(obj);
	});	
}
/*左右按钮查看更多事件*/
function lookMoreByLeftAndRight(obj){
	var labelnum=obj.find(obj.attr('label')).length;
	obj.attr('col')=='1'?obj.find(obj.attr('label')).width(obj.width()):'';
	if(obj.find(obj.attr('label')).length<=obj.attr('col')){
		obj.find('.mod_prev,.mod_next').hide();
		return false;	
	}
	var parentlabel=obj.find(obj.attr('label')).parent();
	/*步长*/
	if(obj.attr('step')>10){
		var movewidth=obj.attr('step');
	}else{
		var labelobj=obj.find(obj.attr('label')).first();
		var labelwidth=labelobj.width()+parseInt(labelobj.css('padding-left'))+parseInt(labelobj.css('padding-right'))+parseInt(labelobj.css('margin-left'))+parseInt(labelobj.css('margin-right'))+parseInt(labelobj.css('border-right-width'))+parseInt(labelobj.css('border-left-width'));
		var movewidth=obj.attr('step')*labelwidth;	
	}
	parentlabel.width(labelwidth*labelnum);
	/*添加左右按钮*/
	if(obj.find('.mod_next').length<=0){
		var btncont='<div class="mod_prev" style="position:absolute; right:100%; top:50%;width:0; height:0; margin:-16px 10px 0 0; border-width:16px 16px 16px 0; border-style:solid; border-color:transparent #999999 transparent transparent;cursor:pointer;"></div>';
		btncont+='<div class="mod_next" style="position:absolute; left:100%; top:50%;width:0; height:0; margin:-16px 0 0 10px; border-width:16px 0 16px 16px; border-style:solid; border-color:transparent transparent transparent #999999;cursor:pointer;"></div>';
		parentlabel.parent().after(btncont);
	}
	var thisstep=0;
	obj.find('.mod_prev').click(function(){
		if(thisstep>0){
			thisstep--;
			var marginleft=-thisstep*movewidth;
			parentlabel.animate({'margin-left':marginleft},{duration:300});
		}else{
			thisstep=labelnum-obj.attr('col');
			var marginleft=-thisstep*movewidth;
			parentlabel.animate({'margin-left':marginleft},{duration:300});	
		}
	});
	obj.find('.mod_next').click(function(){
		if(thisstep<labelnum-obj.attr('col')){
			thisstep++;
			var marginleft=-thisstep*movewidth;
			parentlabel.animate({'margin-left':marginleft},{duration:300});
		}else{
			thisstep=0;
			var marginleft=-thisstep*movewidth;
			parentlabel.animate({'margin-left':marginleft},{duration:300});	
		}
	});
	/*自动滚动*/
	if(obj.attr('autosec')>0){
		setInterval(function(){
			if(thisstep+parseInt(obj.attr('col'))>=obj.find(obj.attr('label')).length){
				thisstep=0;
				parentlabel.animate({'margin-left':0},{duration:300});
			}else{
				obj.find('.mod_next').click();
			}
		},obj.attr('autosec')*1000);
	}
	/*手指左右滑动*/
	if($('body').hasClass('mobile')){ 
		obj.bind('touchstart',function(e){
			/*e.preventDefault();*/
			if(isrun){return;}
			touchstartx = e.originalEvent.targetTouches[0].screenX;
			touchstarty = e.originalEvent.targetTouches[0].screenY;
		}).bind('touchmove',function(e){
			if(isrun){return;}
			touchendx = e.originalEvent.targetTouches[0].screenX;
			touchendy = e.originalEvent.targetTouches[0].screenY;
		}).bind('touchend',function(e){
			if(isrun){return;}
			
			isrun=true;
			var xpos=touchendx>touchstartx?touchendx-touchstartx:touchstartx-touchendx;
			var ypos=touchendy>touchstarty?touchendy-touchstarty:touchstarty-touchendy;
			if(xpos<100||xpos<=ypos){
				isrun=false;
				return;
			}
			var X = touchendx - touchstartx;
			var Y = touchendy - touchstarty;
			if ( Math.abs(X) > Math.abs(Y) && X > 0 ) {
				obj.find('.mod_prev').click();
			}
			else if ( Math.abs(X) > Math.abs(Y) && X < 0 ) {
				obj.find('.mod_next').click();
			}
			setTimeout(function(){
				isrun=false;
			},300);
		});
	}
}
/*动画事件*/
function bindAnimate(obj){
	var delayscroll=null;
	if(obj.offset().top<$(window).scrollTop()+$(window).height()&&$(window).scrollTop()<obj.offset().top+obj.height()){
		delayscroll=setTimeout(function(){
			obj.find(obj.attr('label')).each(function(){
				var cssdata=eval($(this).data('endcss'));
				$(this).animate(cssdata[0],{duration:500})	
			});
		},50);
	}else{
		$(window).scroll(function(){
			if(obj.attr('hasanimate')=='1'){
				return false;	
			}
			clearTimeout(delayscroll);
			delayscroll=setTimeout(function(){
				if(obj.offset().top<$(window).scrollTop()+$(window).height()&&$(window).scrollTop()<obj.offset().top+obj.height()){
					obj.attr('hasanimate','1');
					obj.find(obj.attr('label')).each(function(){
						var cssdata=eval($(this).data('endcss'));
						$(this).animate(cssdata[0],{duration:500})	
					});
				}	
			},50);
		});
	}
	
}
/*滚动事件 autoheight="1"*/
function bindSwiper(obj){
	if(typeof(Swiper)=="undefined"){
		loadCSS("/public/swiper/swiper.min.css",null);
		loadJS("/public/swiper/swiper.min.js",function(){
			try{
				setTimeout(function(){
					bindSwiper(obj);
				},2000);
			}catch(e){}
		});	
	}else{
	var autoplay=obj.attr('autosec')>0?obj.attr('autosec'):false;
	var slidesPerView=obj.attr('slidesPerView')=='auto'?'auto':1;
	if(obj.find('.swiper-slide').length>1){
		var num = parseInt(Math.random()*1000);
		obj.find('.swiper-container').attr('id','swiper'+num);
		obj.find('.pagination').attr('id','pagination'+num);
		obj.find('.arrow-right').attr('id','swiperright'+num);
		obj.find('.arrow-left').attr('id','swiperleft'+num);
		var mySwiper = new Swiper('#swiper'+num, {
		  slidesPerView: slidesPerView,
		  spaceBetween: 30,
		  autoHeight:true,
		  autoplay: autoplay>0?{delay:3000,disableOnInteraction: false}:false,
		  loop: autoplay>0?true:false,
		  pagination: {el:'#pagination'+num,clickable: true},
		  navigation: {nextEl: '#swiperright'+num,prevEl: '#swiperleft'+num,},
		  on: {
			slideChangeTransitionStart: function(){
				
			}
		  }
		});
		if(autoplay>0){
			obj.find('.swiper-container').hover(function(){
				mySwiper.autoplay.stop();
			},function(){
				mySwiper.autoplay.start();
			});
		}
	}
	}
}
function simpleSwiper(obj){
	bindSwiper(obj);
}

function bind_loop_scroll(modelobj){
	var _this = this;
	var num=0;
	var stylearr = new Array();
	var picnum=modelobj.find('.md_picbox').length;
	if(picnum!=3&&picnum!=5&&picnum!=7){
		return false;	
	}
	if(picnum==5){
		stylearr[0]={'left':'0','width':'225px','height':'150px','margin-left':'0','margin-top':'-80px','z-index':'1'};
		stylearr[1]={'left':modelobj.find('.md_cont').width()*0.28-150,'width':'300px','height':'200px','margin-left':'0','margin-top':'-105px','z-index':'2'};
		stylearr[2]={'left':'50%','width':'450px','height':'300px','margin-left':'-230px','margin-top':'-155px','z-index':'3'};
		stylearr[3]={'left':modelobj.find('.md_cont').width()*0.72-150,'width':'300px','height':'200px','margin-left':'0','margin-top':'-105px','z-index':'2'};
		stylearr[4]={'left':modelobj.find('.md_cont').width()-225-10,'width':'225px','height':'150px','margin-left':'0','margin-top':'-80px','z-index':'1'};
	}else if(picnum==3){
		stylearr[0]={'left':'10%','width':'300px','height':'200px','margin-left':'0','margin-top':'-105px','z-index':'2'};
		stylearr[1]={'left':'50%','width':'450px','height':'300px','margin-left':'-230px','margin-top':'-155px','z-index':'3'};
		stylearr[2]={'left':modelobj.find('.md_cont').width()*0.9-300,'width':'300px','height':'200px','margin-left':'0','margin-top':'-105px','z-index':'2'};
	}else if(picnum==7){
		stylearr[0]={'left':'0','width':'150px','height':'100px','margin-left':'0','margin-top':'-55px','z-index':'0'};
		stylearr[1]={'left':modelobj.find('.md_cont').width()*0.2-112-10,'width':'225px','height':'150px','margin-left':'0','margin-top':'-80px','z-index':'1'};
		stylearr[2]={'left':modelobj.find('.md_cont').width()*0.33-150-10,'width':'300px','height':'200px','margin-left':'0','margin-top':'-105px','z-index':'2'};
		stylearr[3]={'left':'50%','width':'450px','height':'300px','margin-left':'-230px','margin-top':'-155px','z-index':'3'};
		stylearr[4]={'left':modelobj.find('.md_cont').width()*0.67-150,'width':'300px','height':'200px','margin-left':'0','margin-top':'-105px','z-index':'2'};
		stylearr[5]={'left':modelobj.find('.md_cont').width()*0.8-112,'width':'225px','height':'150px','margin-left':'0','margin-top':'-80px','z-index':'1'};
		stylearr[6]={'left':modelobj.find('.md_cont').width()-150-10,'width':'150px','height':'100px','margin-left':'0','margin-top':'-55px','z-index':'0'};
	}
	modelobj.find('li.md_picbox').each(function(){
		$(this).attr('num',num++);
		if(picnum==5){
			num==3?$(this).css('z-index','3')&&$(this).addClass('active'):'';
			num==4?$(this).css('z-index','2'):'';
		}else if(picnum==3){
			num==2?$(this).css('z-index','2')&&$(this).addClass('active'):'';
		}else if(picnum==7){
			num==4?$(this).css('z-index','3')&&$(this).addClass('active'):'';
			num==5?$(this).css('z-index','2'):'';
			num==6?$(this).css('z-index','1'):'';
			num==7?$(this).css('z-index','0'):'';
		}
	});
	num=0;
	_this.initloop_scroll = function(modelobj,num,stylearr){
		var picnum=modelobj.find('.md_picbox').length;
		for(i=0;i<picnum;i++){
			modelobj.find('li.md_picbox:eq('+num+')').animate(stylearr[i],500);
			num++;
			if(picnum==5){
				num>4?num=0:'';
			}else if(picnum==3){
				num>2?num=0:'';
			}else if(picnum==7){
				num>6?num=0:'';
			}
		}
	};
	this.initloop_scroll(modelobj,num,stylearr);
	modelobj.find('li.md_picbox').click(function(){
		$(this).parent().find('.active').removeClass('active');
		$(this).addClass('active');
		if($(this).css('z-index')==3){
			return true;
		}
		if(picnum==5){
			num=$(this).attr('num')-2;
		}else if(picnum==3){
			num=$(this).attr('num')-1;
		}else if(picnum==7){
			num=$(this).attr('num')-3;
		}
		_this.initloop_scroll(modelobj,num,stylearr);
		return false;
	});
	if(modelobj.attr('auto')>0){
		var stopscroll=false;
		setInterval(function(){
			if(stopscroll){return;}
			if(modelobj.find('.md_picbox.active').next().hasClass('md_picbox')){
				modelobj.find('.md_picbox.active').next().click();
			}else{
				modelobj.find('.md_picbox:first').click();
			}
		},modelobj.attr('auto'));	
		modelobj.hover(function(){
			stopscroll=true;
		},function(){
			stopscroll=false;
		});
	}
}

function BindLinkTop(modelobj){
	modelobj.find('.mod_links a').click(function(){
		if($(this).attr('href').indexOf('#')>-1&&$(this).attr('href').indexOf('#')<3){
			var idpos=$(this).attr('href').replace(/^.*#/g,'');
			if($('#'+idpos).length>0){
				setTimeout(function(){
					var scrolltop=$('#'+idpos).offset().top-$('header').height();
					$('body,html').animate({scrollTop:scrolltop},400);
				},500);
			}	
			$(this).siblings('a').removeClass('hov');
			$(this).addClass('hov');
			return false;
		}
	});
	
}

function Marquee01(modelobj){
	if(modelobj.find('.scrollbox').length>0){
		var stopscroll=false;
		var _forward=modelobj.attr('forward')?modelobj.attr('forward'):'left';
		var delay=modelobj.attr('delay')>0?modelobj.attr('delay'):30;
		
		if((_forward=='left'||_forward=='right')&&modelobj.find('.scrollbox ul').width()<modelobj.find('.scrollbox').width()){
			return false;	
		}else if((_forward=='top'||_forward=='bottom')&&modelobj.find('.scrollbox ul').height()<modelobj.find('.scrollbox').height()){
			return false;	
		}else{
			modelobj.find('.scrollbox ul').after(modelobj.find('.scrollbox ul').clone());	
		}
		var scrollobj=setInterval(function(){
			if(!stopscroll){
				if(_forward=='left'){
					if(modelobj.find('.scrollbox').scrollLeft()>=modelobj.find('.scrollbox ul').width()){
						modelobj.find('.scrollbox')[0].scrollLeft=0;
					}else{
						modelobj.find('.scrollbox')[0].scrollLeft+=2;
					}
				}else if(_forward=='top'){
					if(modelobj.find('.scrollbox').scrollTop()>=modelobj.find('.scrollbox ul').height()){
						modelobj.find('.scrollbox')[0].scrollTop=0;
					}else{
						modelobj.find('.scrollbox')[0].scrollTop++;
					}
				}else if(_forward=='bottom'){
					if(modelobj.find('.scrollbox').scrollTop()<=0){
						modelobj.find('.scrollbox')[0].scrollTop=modelobj.find('.scrollbox ul').height();
					}else{
						modelobj.find('.scrollbox')[0].scrollTop--;
					}
				}else{
					if(modelobj.find('.scrollbox').scrollLeft()<=0){
						modelobj.find('.scrollbox')[0].scrollLeft=modelobj.find('.scrollbox ul').width();
					}else{
						modelobj.find('.scrollbox')[0].scrollLeft--;
					}
				}
			}
		},delay);
		var touchstartx=0;
		var touchendx=0;
		modelobj.find('.scrollbox ul').bind('touchstart',function(e){
			touchstartx=e.originalEvent.targetTouches[0].pageX;
		});
		modelobj.find('.scrollbox ul').bind('touchmove',function(e){
			touchendx=e.originalEvent.targetTouches[0].pageX;
		});
		modelobj.find('.scrollbox ul').bind('touchend',function(e){
			if(touchendx-touchstartx>50||touchstartx-touchendx>50){
				clearInterval(scrollobj);
			}
		});
		modelobj.find('.scrollbox ul').hover(function(){
			stopscroll=true;	
		},function(){
			stopscroll=false;
		});
	}
}

function correntQrcode(obj){
	var url=$('meta[name=mobile-agent]').length>0?$('meta[name=mobile-agent]').attr('content').replace(/^.*(http.*)/g,'$1'):'';
	url==''?url=window.location.href:'';
	obj.find('.mod_qrcode').find('img').attr('src','/qrcode.php?url='+url+'&size=4&margin=2');
}

function md_page(){
	return false;	
}

function showmoretxt(obj){
	obj.toggleClass('alltxt');
	obj.next('a.hasmore').toggleClass('hov');
	/*
	if(obj.hasClass('alltxt')){
		obj.removeClass('alltxt');	
		obj.next('a.hasmore').removeClass('hov');
	}else{
		obj.addClass('alltxt');	
		obj.next('a.hasmore').addClass('hov');	
	}
	*/
}