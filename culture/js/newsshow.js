// ��ʼ��
$(function (){

	try {
		// ���Ʋ�ת����Ϣ
		if (IS_eventStr.indexOf("|copy|")>=0 && (window.clipboardData || navigator.userAgent.indexOf("Opera")!=-1 || window.netscape)){
			document.body.oncopy=function(){
				try { event.returnValue=false; }catch (e) {}
				var isIE = !!window.ActiveXObject;
				var t,copyText;
				if (isIE){
					t=document.selection.createRange().text; // text��ȡ���ı���htmlText��ȡ��HTML����
				}else{
					t=document.getSelection().getRangeAt(0);
				}
				var s=IS_copyAddiStr.replace('{%��ǰ��ַ%}',document.location.href);

				copyText = ''+ t +'\r\n\r\n'+ s +'\r\n'
				if (window.clipboardData){
					window.clipboardData.clearData();
					window.clipboardData.setData("Text", copyText)
				}else if(navigator.userAgent.indexOf("Opera") != -1){
					window.location = copyText;
				}else if(window.netscape){
					try {
						netscape.security.PrivilegeManager
								.enablePrivilege("UniversalXPConnect");
					}catch (e){
						// alert("��ʹ�õ�FireFox�����,���ƹ��ܱ�������ܾ���\n�����������ַ�����롰about:config�����س���\nȻ�󽫡�signed.applets.codebase_principal_support��˫��������Ϊ��true��");
						return;
					}
					var clip = Components.classes['@mozilla.org/widget/clipboard;1']
							.createInstance(Components.interfaces.nsIClipboard);
					if (!clip)
						return;
					var trans = Components.classes['@mozilla.org/widget/transferable;1']
							.createInstance(Components.interfaces.nsITransferable);
					if (!trans)
						return;
					trans.addDataFlavor('text/unicode');
					var str = new Object();
					var len = new Object();
					var str = Components.classes["@mozilla.org/supports-string;1"]
							.createInstance(Components.interfaces.nsISupportsString);
					str.data = copyText;
					trans.setTransferData("text/unicode", str, copyText.length * 2);
					var clipid = Components.interfaces.nsIClipboard;
					if (!clip)
						return false;
					clip.setData(trans, null, clipid.kGlobalClipboard);
				}else{
					// alert("����������֧��һ�����ƹ���");
					return;
				}

			}
		}
	}catch (e) {}

	// ���ݼ���
	try {
		if ($id('voteMode').value>0 && $id('voteMode').value!=11){
			try {
				AjaxGetDealToIdJs(webPathPart +'news_deal.asp?mudi=vote&dataID='+ $id('infoID').value +'&webPathPart='+ WppSign(webPathPart),'voteBox');
			}catch (e) {}
		}	

		// ���ۼ���
		if (IS_isNewsReply>0 && $id('isReply').value>0 && IS_newsReplyMode!=1){
			LoadReplyList($id('infoID').value);
			LoadReplyWrite($id('infoID').value);
		}
	}catch (e) {}

	$('#newsContent div,#newsContent span').removeClass('clear');
	ContentImgDeal();
	setTimeout("ContentImgDeal()",1000);
	setTimeout("ContentImgDeal()",2000);

	try {
		CheckSendContent();
	}catch (e) {}
	$('.fangdajingBox').mouseover(function (){
		$(this).find('.fangdajing').css({"display":""})
		$(this).hover(function (){
			
		},function (){
			$(this).find('.fangdajing').css({"display":"none"})
		});
	});


});

function ContentImgDeal(){
//	$('#newsContent img').click(function (){
//		var a=window.open(this.src);
//	});
	conImgMaxWidth=665;
	try {
		conImgMaxWidth = parseInt($id('contentImgMaxWidth').value);
		if (isNaN(conImgMaxWidth)){
			conImgMaxWidth=665;
		}else{
			if (conImgMaxWidth<50){ conImgMaxWidth=665; }
		}
	}catch (e) {}
	
	$('#newsContent img').each(function (i){
//		this.style.margin='5px 0 0 0';
		if (this.width>conImgMaxWidth){
			this.width=conImgMaxWidth;
//			this.alt='����鿴ԭͼ';
//			this.style.cursor='pointer';
//			$(this).after("<div style='margin:0 auto;width:100px;margin-bottom:5px;'><a href='"+ $(this).attr('src') +"' target='_blank' style='font-size:12px;color:red;' title='��ͼƬԭͼ�����赥���ô��ſɲ鿴��ԭͼ��'>[����鿴ԭͼ]</a></div>");
			$(this).wrap("<div class='fangdajingBox'></div>");
			$(this).before("<div class='fangdajing' style='position:relative;display:none;'><div style='position:absolute;left:0px;top:4px;width:"+ (conImgMaxWidth-2) +"px;height:30px;text-align:right;filter:alpha(opacity=80);-moz-opacity:0.80;opacity:0.80;'><img src='"+ jsPathPart +"inc_img/fangda.gif' onclick=\"var a=window.open('"+ $(this).attr('src') +"');return false;\" title='��ͼƬԭͼ�����赥���ô��ſɲ鿴��ԭͼ��' class='pointer' /></div></div>");
//			$(this).after("<div class='fangdajing' style='position:relative;display:none;'><div style='position:absolute;left:0px;top:-32px;width:"+ (conImgMaxWidth-2) +"px;height:30px;text-align:right;filter:alpha(opacity=80);-moz-opacity:0.80;opacity:0.80;'><img src='"+ jsPathPart +"inc_img/fangda.gif' onclick=\"var a=window.open('"+ $(this).attr('src') +"');return false;\" title='��ͼƬԭͼ�����赥���ô��ſɲ鿴��ԭͼ��' class='pointer' /></div></div>");
		}
	});
}

// ����Ƿ�����������
function CheckSendContent(){
	if ($id('isUserCheck').value=="1"){
		AjaxGetDealToIdJs2(webPathPart +"news_deal.asp?mudi=contentSend&dataID="+ $id('infoID').value +"&page="+ $id('pageValue').value +"&webPathPart="+ WppSign(webPathPart),"newsContent");
	}
}

// ȷ���Ķ�
function CutScoreBtn(){
	AjaxGetDealToId(webPathPart +"news_deal.asp?mudi=contentSend&dataID="+ $id('infoID').value +"&page="+ $id('pageValue').value +"&webPathPart="+ WppSign(webPathPart) +"&isCut=true","newsContent");
}

// ��ҳ����
function ContentPageHref(modeStr,infoID,pageNum,mode1Url){
	if (modeStr!=""){
		AjaxGetDealToId(webPathPart +"news_deal.asp?mudi=contentSend&dataID="+ infoID +"&page="+ pageNum +"&webPathPart="+ WppSign(webPathPart), modeStr);
	}else{
		document.location.href=mode1Url.replace("[page]",pageNum);
	}
}

// ͶƱ��ʽ
function VoteStyle(){
	// ����ͶƱ
	$(".webBox .d li").hover(function() { 
			$(this).addClass("font2_2 fontB");
		}, function(){
			$(this).removeClass("font2_2 fontB");
	});

	// ����ͶƱ
	$(".webBox .d .upDown .up").hover(function() { 
			$(this).addClass("up2");
		}, function(){
			$(this).removeClass("up2");
	});
	$(".webBox .d .upDown .down").hover(function() { 
			$(this).addClass("down2");
		}, function(){
			$(this).removeClass("down2");
	});
}

// ͶƱ���
var isUseVote=false
function VoteDeal(num){
	if (isUseVote==true){
		alert('����ͶƱ�������´���Ͷ.');return false;
	}
	AjaxGetDealToIdNo(webPathPart +'news_deal.asp?mudi=vote&dataID='+ $id('infoID').value +'&selItem='+ num +'&webPathPart='+ WppSign(webPathPart),'voteBox','��֤�����');
	isUseVote = true;
}


// ����ָ���û��ظ�
function ReplyUser(reID,reName){
	$id('replyUserID').value = reID;
	$id('replyUserStr').innerHTML = "�ظ���"+ reName +"&ensp;&ensp;<span style='color:#000;cursor:pointer;' onclick='ReplyUserCancel();'>��ȡ���ظ���</span>";
	document.location.href="#replyUser";
}

// ָ���û��ظ�ȡ��
function ReplyUserCancel(){
	$id('replyUserID').value = 0;
	$id('replyUserStr').innerHTML = "";
}


// ��ⷢ�����ۿ�
function CheckReplyForm(){
	if ($id('replyContent').value==""){
		alert('�������ݲ���Ϊ��');$id('replyContent').focus();return false;
	}
	if ($id('replyContent').value.length<5){
		alert('�������ݲ�������5�ַ�');$id('replyContent').focus();return false;
	}
	strMaxLen = parseInt($id('replyContentMaxLen').value);
	if (strMaxLen>0 && $id('replyContent').value.length>strMaxLen){
		alert('�������ݳ������'+ strMaxLen +'�ַ�����');$id('replyContent').value=$id('replyContent').value.substring(0,strMaxLen);CalcReplyLen();return false;
	}
	if ($id('replyUser').value==""){
		alert('�ǳƲ���Ϊ��');$id('replyUser').focus();return false;
	}
	try {
		if ($id('verCode').value==""){
			alert('��֤�벻��Ϊ��');$id('verCode').focus();return false;
		}
	}catch (e) {}
	AjaxPostDeal("replyForm");
	return false;
}


// ��ȡ��������Ϣ
function LoadReplyList(repID){
	$id("replyList").innerHTML = "<center style='padding:10px;'><img src='"+ webPathPart +"inc_img/onload.gif' style='margin-right:5px;' />���ݼ�����...</center>"+ $id("replyList").innerHTML;
	AjaxGetDealToId(webPathPart +"news_deal.asp?mudi=messageSend&dataID="+ repID +'&webPathPart='+ WppSign(webPathPart),"replyList");
}

// ��ȡ��������д��
function LoadReplyWrite(repID){
	var dataTypeVal="",isReplyVal="";
	try {
		dataTypeVal=$id('dataType').value;
	}catch (e) {}
	try {
		isReplyVal=$id('isReply').value;
	}catch (e) {}

	$id("replyWrite").innerHTML = "<center style='padding:10px;'><img src='"+ webPathPart +"inc_img/onload.gif' style='margin-right:5px;' />���ݼ�����...</center>";
	$.ajaxSetup({cache:false});
	$.get(webPathPart +"news_deal.asp?mudi=messageWrite&dataID="+ repID +'&dataType='+ dataTypeVal +'&isReply='+ isReplyVal +'&webPathPart='+ WppSign(webPathPart), function(result){
		document.getElementById("replyWrite").innerHTML = result;
		try {
			CheckReplyMaxLen();
		}catch (e) {}
	});
}


// ���ظ������ַ�
function CheckReplyMaxLen(){
	try {
		strMaxLen = parseInt($id('replyContentMaxLen').value);
		if (strMaxLen>0){
			$id('conMaxLenBox').innerHTML = "(<span id='conCurrLen'>0</span>/"+ strMaxLen +")&nbsp;";
			$('#replyContent').keyup(function (){
				CalcReplyLen();
			});
		}
	}catch (e) {}
}

// ����ظ������ַ���
function CalcReplyLen(){
	try {
		$id('conCurrLen').innerHTML = $id('replyContent').value.length;
	}catch (e) {}
}

