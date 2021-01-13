function readAll() { 
	var cheight = $('.read-content').height();
	var firsth = Math.ceil($(window).height() * 1.2);
	var sheng = Math.ceil((cheight - $(window).height() * 1.2)/cheight *100);	
	var loadbut = $('<div class="read-box"><div class="read_mask"></div><div class="read_mod"><a href="javascript:" class="read-button">展开剩余 '+sheng+'%<img src="https://i.petquan.cn/img/icon_read.png" alt="展开按钮" data-bd-imgshare-binded="1" width="44"></a></div></div>');	
	$('.read-content').after(loadbut);	

	if(cheight <= $(window).height() * 1.6){
	    $('.read-box').css('display','none');
	    return;
	}else{	    
	    $('.read-content').height(firsth);
	}	

	$('.read-box').click(function(){
			$('.read-content').css('height','auto'); 
	    $(this).css('display','none');	   
	});
}

function setpFooter(){
	var P=$('#btn_top');
	$(document).scroll(function (){
		if($(this).scrollTop()>10) P.show();
		else P.hide();
	});
	P.click(function(){
		if (navigator.userAgent.indexOf('Firefox') >= 0) document.documentElement.scrollTop=0;
		else $('body').animate({scrollTop:0}, 'fast');
	});
}

// 2*2
function baidu1(){
	document.write('<script type="text/javascript" src="//a1.99933.cn/source/xsr/production/yhyk_o/static/p.js"></script>');	
}

// search
function baidu4(){	
	document.write('<script type="text/javascript" src="//a1.99933.cn/production/c9gy7k.js?hcubli=byk"></script>');
}

// 2*1
function baidu2(){
	document.write('<script type="text/javascript" src="//a1.99933.cn/source/b/static/wv_cc_l_xyc.js"></script>');
}

// 3*1
function baidu3(){
	document.write('<script type="text/javascript" src="//a1.99933.cn/common/i/source/dc_sva_m_lz.js"></script>');
}