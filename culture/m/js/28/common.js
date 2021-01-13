// 获取元素id
function $id(str){
	return document.getElementById(str);
}

// 获取元素name
function $name(str){
	return document.getElementsByName(str);
}


function ToInt(str){
	var newInt = parseInt(str);
    if(isNaN(newInt)) { newInt = 0; }
	return newInt;
}

function ToFloat(str){
	var newFloat = parseFloat(str);
    if(isNaN(newFloat)) { newFloat = 0; }
	return newFloat;
}

function ToGetStr(name){
	var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if(r!=null)return unescape(r[2]); return '';
}

function ToGetPara(str,name){
	var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
	var r = (str +'').match(reg);
	if(r!=null)return unescape(r[2]); return '';
}

// 检测邮箱的合法性。
function IsMail(str){
	if (str.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)!=-1){
		return true;
	}else{
		return false;
	}
}

// 检测手机号的合法性。
function IsPhone(str){
	if (str.search(/^1\d{10}$/)!=-1){
		return true;
	}else{
		return false;
	}
}

// 检测文件框是否为图片文件
function IsImgFile(fileValue){
	var re = new RegExp("\.(gif|jpg|jpeg|png|bmp)","ig");
	return re.test(fileValue)
}

// 加载JS文件
function LoadJsFile(fileId,filePath,mode){
	var scriptTag = document.getElementById(fileId);
	var headObj = document.getElementsByTagName('head').item(0);
	if(scriptTag){
		if (mode==1){
			headObj.removeChild(scriptTag);
			jsFile = document.createElement('script');
			jsFile.src = filePath;
			jsFile.type = 'text/javascript';
//			jsFile.defer = 'defer';
			jsFile.id = fileId;
			headObj.appendChild(jsFile);
		}
	}else{
		jsFile = document.createElement('script');
		jsFile.src = filePath;
		jsFile.type = 'text/javascript';
//		jsFile.defer = 'defer';
		jsFile.id = fileId;
		headObj.appendChild(jsFile);
	}
}

// 点击开启隐藏区，再点击隐藏
function ClickShowHidden(idStr){
	if ($id(idStr).style.display == ''){
		$id(idStr).style.display = 'none';
	}else{
		$id(idStr).style.display = '';
	}
	try {
		WindowHeight(0);
	}catch (e) {}
}


// 点击弹出浮层
var djt;
function ShowMengceng(str, sec){
	if (sec > 0){
		var djSec = 0;
		// djt = window.setInterval("djSecFunc()",1000);
		djt = window.setInterval(function(){
			djSec += 1;
			$("#floatSec").html('&nbsp;'+ djSec +'s');
			if (djSec > sec){
				window.clearInterval(djt);
				HiddenMengceng();
			}
		},1000);
		var closeStr = "<span id='floatSec'></span>";
	}else{
		var closeStr = "<div style='margin:0 auto;text-align:center;padding:5px;color:blue;cursor:pointer;' onclick='HiddenMengceng()'>×关闭该窗口</div>";
	}
	//清除之前的样式
	$("#fullScreen,#floatLayer").remove();
	$("body").append(
		//占据整个屏幕Div
		"<div id='fullScreen'></div>"+
		//浮层区
		"<div id='floatLayer'>"+ str + closeStr +"</div>"
	);
}

// 隐藏浮层
function HiddenMengceng(){
	window.clearInterval(djt);
	$("#fullScreen,#floatLayer").remove();
}

// webPathPart变形
function WppSign(str){
	return str.replace(/\.\.\//g,"a");
}

if (typeof(webPathPart) == "undefined"){ webPathPart = ""; }


// 改变验证码
function ChangeCode(){
	try {
		$id("showcode").src=webPathPart +"inc/VerCode.asp?mudi="+ Math.random();
		$id("verCode").value = "";
		$id("verCode").focus();
	}catch (e) {}
}

// 点击验证码框获取验证码
function GetVerCode(str){
	try {
		if ($id("showVerCode").innerHTML.lastIndexOf('VerCode')==-1){
			$id("showVerCode").innerHTML = "<img id='showcode' src='"+ webPathPart +"inc/VerCode.asp?mudi="+ Math.random() +"' align='top' style='cursor:pointer;' onclick='ChangeCode()' alt='点击更换' />";	
		}else if (str == "change"){
			ChangeCode();
		}
	}catch (e) {}
}


// 通用Ajax提交表单
function CheckAjaxForm(formName){
	AjaxPostDeal(formName);
	return false;
}

// Ajax导航链接
function AjaxNavHref(){
	var outputID = arguments[0] ? arguments[0] : "";
	var urlStr = arguments[1] ? arguments[1] : "";
	var pageNum = arguments[2] ? arguments[2] : "";

	if (outputID==""){ outputID="dialogBody"; }
	if (urlStr==""){ urlStr=document.location.href; }
	if (! isNaN(parseInt(pageNum))){ pageNum="&page="+ pageNum; }else{ pageNum=""; }

	document.getElementById(outputID).innerHTML="<br /><br /><div style='text-align:center;font-size:14px;'><img src='"+ webPathPart +"images/onload.gif' style='margin-right:5px;' />数据加载中...</div><br /><br />";
	$.get(webPathPart + urlStr + pageNum, function(result){
		document.getElementById(outputID).innerHTML=result;
	});

}

// 分页链接
function ListPageHref(pageNum,mode1Url){
	if (pageNum<2){
		pageUrl = mode1Url.replace("_[page]","").replace("[page]",pageNum);
		if (pageUrl.substr(pageUrl.length-10)=="index.html"){ pageUrl = pageUrl.substr(0,pageUrl.length-10); }
		document.location.href=pageUrl;
	}else{
		document.location.href=mode1Url.replace("[page]",pageNum);
	}
}


ajaxDealStr = "数据处理中...";
ajaxLoadStr = "数据读取中...";

// POST表单AJAX处理
function AjaxPostDeal(formName){
	try {
		document.getElementById("loadingStr").innerHTML = "<span style='font-size:14px;'><img src='"+ pcPathPart +"inc_img/onload.gif' style='margin-right:5px;' />"+ ajaxDealStr +"</span>";
	}catch (e) {}

	formNameObj = document.getElementById(formName);
	var formNameUrl = formNameObj.getAttribute("action"), formNameContent = formValueToStr(formNameObj);
	$.post(formNameUrl,formNameContent,function(result){
		try {
			document.getElementById("loadingStr").innerHTML = "";
		}catch (e) {}
		// alert('['+ result.replace(/<.*?(script[^>]*?)>/gi,"").replace(/<\/.*?script.*?>/gi,"").replace(/(<meta[^>]*>|<\/meta>)/gi,"") +']');
		eval(result.replace(/<.*?(script[^>]*?)>/gi,"").replace(/<\/.*?script.*?>/gi,"").replace(/(<meta[^>]*>|<\/meta>)/gi,""));
		try {
			document.getElementById("loadingStr").innerHTML = "";
		}catch (e) {}
	});
	return false;
}

// 通过表单name获取该表单所有元素并组成GET字符串
function formValueToStr(formObj) {
	var qstr = "", and = "", elem, value;
	for(var i = 0; i< formObj.length; ++i) {
		elem = formObj[i];
		if (elem.name!='') {
			value=undefined;
			switch(elem.type) {
				case "select-one":
					if(elem.selectedIndex > -1) {
						value = elem.options[elem.selectedIndex].value;
					}
					else {
						value = "";
					}
					break;
				case"select-multiple":
					var selMul=elem.options;
					for(var w=0;w<selMul.length;++w){
						if(selMul[w].selected){
							qstr += and+elem.name+"="+escape(selMul[w].value);
							and = "&";
						}
					}
					break;
				case "checkbox":
				case "radio":
					if (elem.checked == true) {
						value = elem.value;
					}
					break;
				default:
					value = elem.value;
			}
			if(value!=undefined){
				value = escape(value);
				qstr += and + elem.name + "=" + value;
				and = "&";
			}
		}
	}
	return qstr;
}

// GET提交AJAX处理
function AjaxGetDeal(urlStr){
	$.get(urlStr, function(result){
		eval(result.replace(/<.*?(script[^>]*?)>/gi,"").replace(/<\/.*?script.*?>/gi,"").replace(/(<meta[^>]*>|<\/meta>)/gi,""));
	});
	return false;
}

// GET提交AJAX处理
function AjaxGetDealToId(urlStr,outputID){
	$.get(urlStr, function(result){
		document.getElementById(outputID).innerHTML = result;
	});

	return false;
}


// GET提交AJAX处理（允许执行JS）
function AjaxGetDealToIdJs2(urlStr,outputID){
	$.get(urlStr, function(result){
		document.getElementById(outputID).innerHTML = result;
//<script src="../tools/fckeditor/flvPlayer/swfobject.js" type="text/javascript"></script>
		var jsFileStr="";
		var jsFileArr=result.match(/src\s*=\s*[\""|\']?\s*[^>\""\'\s]*\.js/gi);
		if(jsFileArr!=null){
			for(var i=0;i<jsFileArr.length;i++){
				//jsFileStr += jsFileArr[i].replace(/src\s*=\s*[\""|\']?(\s*[^>\""\'\s]*\.js)/gi,"$1");
				LoadJsFile("contJsFile"+ i,jsFileArr[i].replace(/src\s*=\s*[\""|\']?(\s*[^>\""\'\s]*\.js)/gi,"$1"),0);
			}
		}
		//alert(jsFileStr);

		var jsStr="";
		var jsArr=result.match(/<\s*(script[^>]*)>([\s\S][^<]*)<\/\s*script>/gi);
		if(jsArr!=null){
			for(var i=0;i<jsArr.length;i++){
				jsStr += jsArr[i];
			}
		}
		jsStr = jsStr.replace(/<\s*(script[^>]*)>([\s\S][^<]*)<\/\s*script>/gi,"$2");
		window.setTimeout(jsStr,1000);

		try {
			VoteStyle();
		}catch (e) {}
	});

	return false;
}



// 调用畅言插件文件（废弃）
function UseChangyanJs(cy_appid,cy_conf,appNum){
	document.write('<scr'+'ipt id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="h'+'tt'+'ps:'+'//changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id='+ cy_appid +'&conf='+ cy_conf +'"></scr'+'ipt>');
	/* if (appNum != '0'){
		// 实验室插件
		document.write('<scr'+'ipt type="text/javascript" charset="utf-8" src="h'+'tt'+'ps:'+'//changyan.sohu.com/js/changyan.labs.https.js?appid='+ cy_appid +'"></scr'+'ipt>');
	} */

}





// 检测邮箱的合法性
function CheckMail(){
	try{
		if ($id("mail").value == ''){
			$id("mailIsOk").innerHTML = "";
			$id("mailStr").style.display = "none";
		}else if (IsMail($id("mail").value)){
			$id("mailIsOk").innerHTML = "<img src='"+ pcPathPart +"inc_img/share_yes.gif' />";
			$id("mailStr").style.display = "none";
		}else{
			$id("mailIsOk").innerHTML = "<img src='"+ pcPathPart +"inc_img/share_no.gif' />";
			$id("mailStr").style.display = "";
			$id("mailStr").innerHTML = "邮箱格式错误！";
		}
	}catch (e){}
}

// 检测手机号的合法性
function CheckPhone(){
	if ($id("phone").value == ''){
		$id("phoneIsOk").innerHTML = "";
		$id("phoneStr").style.display = "none";
	}else if (IsPhone($id("phone").value)){
		$id("phoneIsOk").innerHTML = "<img src='"+ pcPathPart +"inc_img/share_yes.gif' />";
		$id("phoneStr").style.display = "none";
	}else{
		$id("phoneIsOk").innerHTML = "<img src='"+ pcPathPart +"inc_img/share_no.gif' />";
		$id("phoneStr").style.display = "";
		$id("phoneStr").innerHTML = "手机号格式错误！";
	}
}
// 密码加密
function EncPwdData(pwdName){
	if ($id(pwdName).value == $id('pwdEnc').value){ return false; }
	$.ajax({
		cache:false,
		async:false,
		url: webPathPart +"readDeal2.asp?mudi=encPwd&str="+ base64encode($id(pwdName).value) +"&exp=35",
		success: function(result){
			var strArr = (result +'||||').split("|");
			if (strArr[3].length > 3){
				$id('pwdMode').value = strArr[1];
				$id('pwdKey').value = strArr[2];
				$id('pwdEnc').value = strArr[3];
				$id(pwdName).value = strArr[3];
				try{
					$id(pwdName +'2').value = strArr[3];
				}catch (e){ }
			}
			// alert($id('pwdMode').value +'|'+ $id('pwdKey').value +'|'+ $id(pwdName).value);
		}
	});

}


// 评论/留言 踩顶+1
function UserVote(type, id, num){
	AjaxGetDeal(webPathPart +'deal.asp?mudi=userVote&type='+ type +'&dataID='+ id +'&selItem='+ num);
}