// ��ȡԪ��id
function $id(str){
	return document.getElementById(str);
}

// ��ȡԪ��name
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

// �������ĺϷ��ԡ�
function IsMail(str){
	if (str.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)!=-1){
		return true;
	}else{
		return false;
	}
}

// ����ֻ��ŵĺϷ��ԡ�
function IsPhone(str){
	if (str.search(/^1\d{10}$/)!=-1){
		return true;
	}else{
		return false;
	}
}

// ����ļ����Ƿ�ΪͼƬ�ļ�
function IsImgFile(fileValue){
	var re = new RegExp("\.(gif|jpg|jpeg|png|bmp)","ig");
	return re.test(fileValue)
}

// ����JS�ļ�
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

// ����������������ٵ������
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


// �����������
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
		var closeStr = "<div style='margin:0 auto;text-align:center;padding:5px;color:blue;cursor:pointer;' onclick='HiddenMengceng()'>���رոô���</div>";
	}
	//���֮ǰ����ʽ
	$("#fullScreen,#floatLayer").remove();
	$("body").append(
		//ռ��������ĻDiv
		"<div id='fullScreen'></div>"+
		//������
		"<div id='floatLayer'>"+ str + closeStr +"</div>"
	);
}

// ���ظ���
function HiddenMengceng(){
	window.clearInterval(djt);
	$("#fullScreen,#floatLayer").remove();
}

// webPathPart����
function WppSign(str){
	return str.replace(/\.\.\//g,"a");
}

if (typeof(webPathPart) == "undefined"){ webPathPart = ""; }


// �ı���֤��
function ChangeCode(){
	try {
		$id("showcode").src=webPathPart +"inc/VerCode.asp?mudi="+ Math.random();
		$id("verCode").value = "";
		$id("verCode").focus();
	}catch (e) {}
}

// �����֤����ȡ��֤��
function GetVerCode(str){
	try {
		if ($id("showVerCode").innerHTML.lastIndexOf('VerCode')==-1){
			$id("showVerCode").innerHTML = "<img id='showcode' src='"+ webPathPart +"inc/VerCode.asp?mudi="+ Math.random() +"' align='top' style='cursor:pointer;' onclick='ChangeCode()' alt='�������' />";	
		}else if (str == "change"){
			ChangeCode();
		}
	}catch (e) {}
}


// ͨ��Ajax�ύ��
function CheckAjaxForm(formName){
	AjaxPostDeal(formName);
	return false;
}

// Ajax��������
function AjaxNavHref(){
	var outputID = arguments[0] ? arguments[0] : "";
	var urlStr = arguments[1] ? arguments[1] : "";
	var pageNum = arguments[2] ? arguments[2] : "";

	if (outputID==""){ outputID="dialogBody"; }
	if (urlStr==""){ urlStr=document.location.href; }
	if (! isNaN(parseInt(pageNum))){ pageNum="&page="+ pageNum; }else{ pageNum=""; }

	document.getElementById(outputID).innerHTML="<br /><br /><div style='text-align:center;font-size:14px;'><img src='"+ webPathPart +"images/onload.gif' style='margin-right:5px;' />���ݼ�����...</div><br /><br />";
	$.get(webPathPart + urlStr + pageNum, function(result){
		document.getElementById(outputID).innerHTML=result;
	});

}

// ��ҳ����
function ListPageHref(pageNum,mode1Url){
	if (pageNum<2){
		pageUrl = mode1Url.replace("_[page]","").replace("[page]",pageNum);
		if (pageUrl.substr(pageUrl.length-10)=="index.html"){ pageUrl = pageUrl.substr(0,pageUrl.length-10); }
		document.location.href=pageUrl;
	}else{
		document.location.href=mode1Url.replace("[page]",pageNum);
	}
}


ajaxDealStr = "���ݴ�����...";
ajaxLoadStr = "���ݶ�ȡ��...";

// POST��AJAX����
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

// ͨ����name��ȡ�ñ�����Ԫ�ز����GET�ַ���
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

// GET�ύAJAX����
function AjaxGetDeal(urlStr){
	$.get(urlStr, function(result){
		eval(result.replace(/<.*?(script[^>]*?)>/gi,"").replace(/<\/.*?script.*?>/gi,"").replace(/(<meta[^>]*>|<\/meta>)/gi,""));
	});
	return false;
}

// GET�ύAJAX����
function AjaxGetDealToId(urlStr,outputID){
	$.get(urlStr, function(result){
		document.getElementById(outputID).innerHTML = result;
	});

	return false;
}


// GET�ύAJAX��������ִ��JS��
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



// ���ó��Բ���ļ���������
function UseChangyanJs(cy_appid,cy_conf,appNum){
	document.write('<scr'+'ipt id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="h'+'tt'+'ps:'+'//changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id='+ cy_appid +'&conf='+ cy_conf +'"></scr'+'ipt>');
	/* if (appNum != '0'){
		// ʵ���Ҳ��
		document.write('<scr'+'ipt type="text/javascript" charset="utf-8" src="h'+'tt'+'ps:'+'//changyan.sohu.com/js/changyan.labs.https.js?appid='+ cy_appid +'"></scr'+'ipt>');
	} */

}





// �������ĺϷ���
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
			$id("mailStr").innerHTML = "�����ʽ����";
		}
	}catch (e){}
}

// ����ֻ��ŵĺϷ���
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
		$id("phoneStr").innerHTML = "�ֻ��Ÿ�ʽ����";
	}
}
// �������
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


// ����/���� �ȶ�+1
function UserVote(type, id, num){
	AjaxGetDeal(webPathPart +'deal.asp?mudi=userVote&type='+ type +'&dataID='+ id +'&selItem='+ num);
}