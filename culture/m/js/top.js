//微信tel失效问题,去除sukey
if(navigator.userAgent.indexOf('MicroMessenger')!=-1){
	var shref=window.location.href;
	if(shref.indexOf('wxref=mp.weixin.qq.com')==-1)window.location.href+=shref.indexOf('?')==-1?'?wxref=mp.weixin.qq.com':'&wxref=mp.weixin.qq.com';
}


//ios7 不用webapp
(function(){
	if(/(iPhone|iPad)\sOS\s7_/.test(window.navigator.userAgent)){
		var t=document.head.querySelector('meta[name="apple-mobile-web-app-capable"]');
		if(t)t.remove();
	}
})()


var hScreenAlert="为了得到更好的浏览体验<br/>请切换到竖屏模式浏览，谢谢！";
var browseMode='lc';
localStorage["browseMode"]=browseMode;


$(function(){
	$(".htmlContent p[align='center']").css({"margin":"0 auto","text-align":"center"});
	ContMaxWidth();setTimeout("ContMaxWidth()",3000);
});


function ContMaxWidth(){
	$(".htmlContent img").each(function (i){
		if (this.width>320){
			this.width="98%";
			this.style.width="98%";
			this.height="auto";
			this.style.height="auto";
		}
	});
}


function CheckTopDownBtn(){
	if ($id("top_download").style.display!="none"){
		$id("top_download").style.display="none";
	}else{
		$id("top_download").style.display="";
	}
}

function CheckTopSearchBtn(){
	if ($id("top_search").style.display!="none"){
		$id("top_search").style.display="none";
	}else{
		$id("top_search").style.display="";
	}
}

// 页头搜索类型选择
function SearchSel(str){
	try { $('#refMode_theme').removeClass("current");	}catch (e) { }
	try { $('#refMode_content').removeClass("current");	}catch (e) { }
	try { $('#refMode_source').removeClass("current");	}catch (e) { }
	try { $('#refMode_writer').removeClass("current");	}catch (e) { }
	try { $('#refMode_baidu').removeClass("current");	}catch (e) { }

	try { $("#refMode_"+ str).addClass("current"); }catch (e) { }
	$id("refMode").value=str;
}

// 页头搜索表单检测
function CheckRefForm(){
	refContStr = $id("refContent").value;
	if (refContStr == ''){
		alert("请输入要搜索的关键字");
		//$id("refContent").value='';$id("refContent").focus();
		return false;
	}
	switch ($id("refMode").value){
		case "theme": case "content": case "source": case "writer": 
		//	$.get(webPathPart +"read.asp?mudi=getUrlencode&str="+ escape(refContStr), function(result){
				result = escape(refContStr);
				document.location.href=webPathPart +"news/?list_refer-"+ $id("refMode").value +"-"+ result +".html";
		//	});
			return false;
			break;

		case "baidu":
			bdzhannei_domain = "";
			bdzhannei_id = "";
			try {
				bdzhannei_domain = $id('zhannei_domain').value;
				bdzhannei_id = $id('zhannei_id').value;
			}catch (e) {}
			if (bdzhannei_domain==""){ bdzhannei_domain="zhannei.baidu.com"; }
			$id("referForm").action="http://"+ bdzhannei_domain +"/cse/search?s="+ bdzhannei_id +"&entry=1&q="+ refContStr;
			$id("referForm").method="post";
			$id("referForm").target="_blank";
			return true;
			break;

		default:
			return false;
			break;
	}
}


function OpenHiddenBox(idStr){
	if ($id(idStr +'Box').style.display == ''){
		$id(idStr +'Box').style.display = 'none';
		$('#'+ idStr).removeClass("active");
	}else{
		$id(idStr +'Box').style.display = '';
		$('#'+ idStr).addClass("active");
	}
}