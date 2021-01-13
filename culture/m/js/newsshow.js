$(function(){
	// $("embed[width],object[width]").attr({ width:"100%" });
	$("embed[width],object[width]").each(function (i){
		if (this.width>320){
			this.width="100%";
			this.style.width="100%";
		}
	});
	CheckSendContent();
	try{
		LoadReplyList($id('infoID').value);
		LoadReplyWrite($id('infoID').value);
	}catch (e){}
	CheckReplyMaxLen();
});

// ����Ƿ�����������
function CheckSendContent(){
	if ($id('isUserCheck').value=="1"){
		AjaxGetDealToIdJs2(webPathPart +"news_deal.asp?mudi=contentSend&dataID="+ $id('infoID').value +"&page="+ $id('pageValue').value +"&webPathPart="+ WppSign(webPathPart),"newsContent");
	}
}

// ȷ���Ķ�
function CutScoreBtn(){
	AjaxGetDealToIdJs2(webPathPart +"news_deal.asp?mudi=contentSend&dataID="+ $id('infoID').value +"&page="+ $id('pageValue').value +"&webPathPart="+ WppSign(webPathPart) +"&isCut=true","newsContent");
}

// ��ҳ����
function ContentPageHref(modeStr,infoID,pageNum,mode1Url){
	if (modeStr!=""){
		AjaxGetDealToId(webPathPart +"news_deal.asp?mudi=contentSend&dataID="+ infoID +"&page="+ pageNum +"&webPathPart="+ WppSign(webPathPart), "newsContent");
	}else{
		document.location.href=mode1Url.replace("[page]",pageNum);
	}
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
	$id("messageListBox").innerHTML = "<div style='text-align:center;padding:10px;'><img src='"+ webPathPart +"images/onload.gif' style='margin-right:5px;' />���ݼ�����...</div>"+ $id("messageListBox").innerHTML;
	AjaxGetDealToId(webPathPart +"news_deal.asp?mudi=messageSend&dataID="+ repID +'&webPathPart='+ WppSign(webPathPart),"messageListBox");
}

// ��ȡ��������д��
function LoadReplyWrite(repID){
	$id("messageWriteBox").innerHTML = "<div style='text-align:center;padding:10px;'><img src='"+ webPathPart +"images/onload.gif' style='margin-right:5px;' />���ݼ�����...</div>";
	$.get(webPathPart +"news_deal.asp?mudi=messageWrite&dataID="+ repID +'&webPathPart='+ WppSign(webPathPart), function(result){
		document.getElementById("messageWriteBox").innerHTML = result;
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

function SwitchReply1(){
	$("#newsReplyTab2").removeClass("current");
	$("#newsReplyTab1").addClass("current");
	$("#newsReplyList1").show();
	$("#newsReplyList2").hide();
}




// ���������
var newsAbout = function() {
	var init = function() {
		$('.newsAboutOne').click(function() {
			var t = $(this).data('type');
			if (t == 1) {
				$("#newsAboutTab1").removeClass("current");
				$("#newsAboutTab2").addClass("current");
				$("#newsAboutList1").hide();
				$("#newsAboutList2").show();
			} else {
				$("#newsAboutTab2").removeClass("current");
				$("#newsAboutTab1").addClass("current");
				$("#newsAboutList1").show();
				$("#newsAboutList2").hide();
			}
		})

		$('.jsNewsAbout').click(function() {
			if ($(this).find("em").attr("class") == "icon up") {
				$("#newsAboutArrow").removeClass("up");
				$("#newsAboutArrow").addClass("down");
				$("#newsAboutMain").hide();
			} else {
				$("#newsAboutArrow").removeClass("down");
				$("#newsAboutArrow").addClass("up");
				$("#newsAboutMain").show();
			}
		})
	};

	return { init : init }
}();




// ������
var newsReply = function() {
	var init = function() {
		$('.newsReplyOne').click(function() {
			var t = $(this).data('type');
			if (t == 1) {
				$("#newsReplyTab1").removeClass("current");
				$("#newsReplyTab2").addClass("current");
				$("#newsReplyList1").hide();
				$("#newsReplyList2").show();
			} else {
				$("#newsReplyTab2").removeClass("current");
				$("#newsReplyTab1").addClass("current");
				$("#newsReplyList1").show();
				$("#newsReplyList2").hide();
			}
//			myScroll.refresh();
		})

		$('.jsNewsReply').click(function() {
			if ($(this).find("em").attr("class") == "icon up") {
				$("#newsReplyArrow").removeClass("up");
				$("#newsReplyArrow").addClass("down");
				$("#newsReplyMain").hide();
			} else {
				$("#newsReplyArrow").removeClass("down");
				$("#newsReplyArrow").addClass("up");
				$("#newsReplyMain").show();
			}
//			myScroll.refresh();
		})

	};

	return { init : init }
}();