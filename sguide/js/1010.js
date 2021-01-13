$(function () {
	$('.md_1010 .mod_cont.mod_left ul li').addClass('bgcolor');
	$('.md_1010 .mod_cont.mod_left ul li').each(function () {
		$(this).append('<em></em>');
	});
	var mLeft = $('.md_1010 .mod_cont.mod_left ul').outerWidth(true) / 2;
	$('.md_1010 .mod_cont.mod_left ul').css('marginLeft', -mLeft);
});