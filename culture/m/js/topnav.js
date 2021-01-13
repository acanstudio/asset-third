var topNav = function() {
	/* private私有作用域 */
	var opts = {
			showset : '',
			columnScroll:'',
			othercolumnsScroll:'',
			listRefresh:'',
			ulwidth:0
	}
	var init = function() {// 初始化方法, options初始化参数
		
		var currentColumn = sessionStorage["currentColumn"];	
		$("#singleScrollUl .active").removeClass('current');
		if(currentColumn != null){
			$("[data-id="+currentColumn+"]").addClass('current');
		}
		
			setColumnWidth();
			
			if ($id('singleScroll')){
				opts.columnScroll=new iScroll("singleScroll",{
						zoom: false,
						hScrollbar: false,
						vScrollbar : false,
						bounce: false,
						snap:"li",
						momentum:false,
						vScroll:false,
						onScrollEnd:disableArrow
					});
				if(currentColumn != null){
					var x = parseFloat(sessionStorage["columnx"]);
					opts.columnScroll.scrollTo(x,0,100);				
				}
			}
		
		var windowH = $(window).height(),
			headerH = $("#area_top").height() + ($.os.ios ? (-68) : 0),
			footerH = $("#area_bottomMenu").height();		
		
		
		$(window).on("resize",function(){
			setTimeout(function(){
				var windowH = $(window).height(),
					headerH = $("#area_top").height() + ($.os.ios ? (-68) : 0),
					footerH = $("#area_bottomMenu").height();		
		
			
				if(opts.othercolumnsScroll) {
					opts.othercolumnsScroll.refresh();
				}		
				
				if(opts.columnScroll){
					setColumnHeight();
					opts.columnScroll.refresh();
				}
			
				if(opts.listRefresh){
					opts.listRefresh();
				}
				/*
				if(myScroll){
					myScroll.refresh();
				}
				*/
			},100);
		});
		
		
		var wholeWidth = parseFloat($("#singleScroll").width());
			
		for(var i = 0,l = $("#singleScroll li").length; i < l; i++){				
			wholeWidth -= parseFloat($("#singleScroll li").eq(i).width());				
			if( wholeWidth < 0 ){
				$("#dropDownButton").removeClass("disTap");
				break;
			}	
		}
				
		for(var j = l - 1; j >= i ; j--) {
			$("#singleScroll li").eq(j).prependTo($("#othercolumns ul"));
		}
		
		$('.scrollOne').click(function(){	
			var id=$(this).data('id');
			setCurrentColumn(id);
		});
		$('#navNext').click(function(){	
			opts.columnScroll.scrollToPage('next', 0);return false;
		});
		$('#navPrev').click(function(){	
			opts.columnScroll.scrollToPage('prev', 0);return false;
		});		
	}
	var setColumnHeight = function() {	
		var windowH = $(window).height(),
			headerH = $(".z3g-headerSmall").height() + ($.os.ios ? (-68) : 0),
			footerH = $("#area_bottomMenu").height();
		
		$("#singleScrollDiv").css("max-height",windowH-headerH-footerH +"px");
	};
	
	var disableArrow=function(){
		var x=opts.columnScroll.x;
		var w=opts.ulwidth+x;
		var wholeWidth = parseFloat($("#singleScroll").width());
		if(w==wholeWidth){
			$('#navNext').addClass('disTap');
			$('#navNext').removeClass('active');			
		}else{
			$('#navNext').removeClass('disTap');
			$('#navNext').addClass('active');			
		}
		if(w==opts.ulwidth){
			$('#navPrev').addClass('disTap');
			$('#navPrev').removeClass('active');			
		}else{
			$('#navPrev').removeClass('disTap');
			$('#navPrev').addClass('active');			
		}				
	};
	

	
	var setCurrentColumn=function(clickColumn){
		sessionStorage["currentColumn"]=clickColumn;
			if(opts.columnScroll){
				sessionStorage["columnx"]=opts.columnScroll.x;
			}					
	};
	
	var setColumnWidth=function(){
		
		$(".scrollOne").each(function(){
			var w=$(this)[0].offsetWidth;
			opts.ulwidth=opts.ulwidth+w;	
		});
		$('#singleScrollUl').css("width",opts.ulwidth);		
	};
	
	return {
		init : init
	}
}();
