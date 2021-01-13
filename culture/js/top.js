
var refContentDef = "请输入关键字";


// 初始化
$(function (){
//window.onload=function(){
	WinLoadRun("");

	if (typeof(SYS_navMode)=="undefined"){ SYS_navMode=21; }
	if (SYS_navMode>0){
		// 导航菜单子菜单
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
