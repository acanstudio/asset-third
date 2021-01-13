$(function(){
	// 页头banner滚动
	new Swipe(document.getElementById('topBanner'), {
		speed:500,
		auto:3000,
		callback: function(){
			var lis = $(this.element).next("ol").children();
			lis.removeClass("on").eq(this.index).addClass("on");
		}
	});
	$(".bannerBox ol li").first().addClass("on");
});


// 最新、热门、推荐 3列表
var newsTabs = function() {
	var init = function() {
		// 展示列表
		$("#newsListTab1").show();
		$("#newsListTab1_more").show();

		var root = $("#newsTabsBox");
		var pageno = 1;
		var pageno_newsListNoBox = 1;
		var pageno_newsListTab1 = 1;
		var pageno_newsListTab2 = 1;
		var pageno_newsListTab3 = 1;

		root.find(".moreBox").click(function() {
			var moreid = $(this).attr('id');
			var listid = moreid.replace("_more",""); 
			var loadid = moreid.replace("_more","_load"); 
			var ulid = moreid.replace("_more","_comul"); 
			$("#" + moreid).hide();
			$("#" + loadid).show();

			if(listid=='newsListNoBox'){
				pageno_newsListNoBox = parseInt(pageno_newsListNoBox) + 1;
				pageno = pageno_newsListNoBox;
			}
			else if(listid=='newsListTab1'){
				pageno_newsListTab1 = parseInt(pageno_newsListTab1) + 1;
				pageno = pageno_newsListTab1;
			}
			else if(listid=='newsListTab2'){
				pageno_newsListTab2 = parseInt(pageno_newsListTab2) + 1;
				pageno = pageno_newsListTab2;
			}
			else if(listid=='newsListTab3'){
				pageno_newsListTab3 = parseInt(pageno_newsListTab3) + 1;
				pageno = pageno_newsListTab3;
			}
		});
		
		$('.newsTabsItem').click(function() {
			var id = $(this).data('id');
			if (id == 1) {
				$("#newsListNoBox").hide();
				$("#newsListNoBox_more").hide();
				$("#newsListTab2").hide();
				$("#newsListTab2_more").hide();
				$("#newsListTab3").hide();
				$("#newsListTab3_more").hide();
				$("#newsListTab1").show();
				$("#1").addClass("current");
				$("#2").removeClass("current");
				$("#3").removeClass("current");
			} else if (id == 2) {
				$("#newsListNoBox").hide();
				$("#newsListNoBox_more").hide();
				$("#newsListTab1").hide();
				$("#newsListTab1_more").hide();
				$("#newsListTab3").hide();
				$("#newsListTab3_more").hide();
				$("#newsListTab2").show();
				$("#newsListTab2_more").show();
				$("#1").removeClass("current");
				$("#2").addClass("current");
				$("#3").removeClass("current");
			} else {
				$("#newsListNoBox").hide();
				$("#newsListNoBox_more").hide();
				$("#newsListTab1").hide();
				$("#newsListTab1_more").hide();
				$("#newsListTab2").hide();
				$("#newsListTab2_more").hide();
				$("#newsListTab3").show();
				$("#newsListTab3_more").show();
				$("#1").removeClass("current");
				$("#2").removeClass("current");
				$("#3").addClass("current");
			}
		})
	};

	var addh3class = function() {
		for (var i = 0, l = $(".newsTitle").length; i < l; i++) {
			var newsEle = $(".newsTitle").eq(i), j = 0;
			if (newsEle.children(".top").length) {
				j++;
			}
			if (newsEle.children(".newsImg").length) {
				j++;
			}
			switch (j) {
				case 1 :
					newsEle.addClass("titleOne");
					break;
				case 2 :
					newsEle.addClass("titleTwo");
					break;
				default :
					break;
			}
		}
	};

	var showPlane_zong = function() {
		var cateCount = $(".newsTabStyle3").find('div').length;
		if(cateCount=='1'){
			if($(".newsTabStyle3").find('div')[0].id=='new'){
				$("#showlist1").html($("#newsListNoBox_div").html());
			}else{
				$("#showlist1").html($("#newsListTab1_div").html());
			}
		}
		if(cateCount=='2'){
			if($(".newsTabStyle3").find('div')[0].id=='new'){
				$("#showlist1").html($("#newsListNoBox_div").html());
				$("#showlist2").html($("#newsListTab1_div").html());
			}else{
				$("#showlist1").html($("#newsListTab1_div").html());
				$("#showlist2").html($("#newsListTab2_div").html());
			}
		}
		if(cateCount=='3'){
			if($(".newsTabStyle3").find('div')[0].id=='new'){
				$("#showlist1").html($("#newsListNoBox_div").html());
				$("#showlist2").html($("#newsListTab1_div").html());
				$("#showlist3").html($("#newsListTab2_div").html());
			}else{
				$("#showlist1").html($("#newsListTab1_div").html());
				$("#showlist2").html($("#newsListTab2_div").html());
				$("#showlist3").html($("#newsListTab3_div").html());
			}
		}
	};
	return { init : init }
}();