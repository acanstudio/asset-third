
var refContentDef = "������ؼ���";


// ��ʼ��
$(function (){
//window.onload=function(){
	WinLoadRun("");

	if (typeof(SYS_navMode)=="undefined"){ SYS_navMode=21; }
	if (SYS_navMode>0){
		// �����˵��Ӳ˵�
		$("ul.topnav li.b").mouseover(function() {
			if (SYS_navMode>=21){
				$(this).find("ul.subnav").slideDown('fast').show();

				$(this).hover(function() {
				}, function(){	
					$(this).find("ul.subnav").slideUp('slow');
				});
			}

		}).hover(function() { 
			$(this).addClass("subhover");
		}, function(){
			$(this).find("ul.subnav").stop(true,true).slideToggle();
			$(this).removeClass("subhover");
		});
		
	}

//}
});
