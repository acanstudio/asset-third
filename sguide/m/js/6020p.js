/*展开收起*/
$(function(){
	$('.md_citiao .content').on('click','.expand',function(){
		$(this).prev().css('max-height','100%');
		$(this).find('span').eq(0).text("");
		$(this).find('span').eq(1).text("【 收起");
		$(this).removeClass('expand');
		$(this).addClass('close');
		$(this).find('i').removeClass('expand_icon');
		$(this).find('i').addClass('close_icon');
	});
	
	$('.md_citiao .content').on('click','.close',function(){
		$(this).prev().css('max-height','215px');
		$(this).find('span').eq(1).text("【 展开详细");
		$(this).removeClass('close');
		$(this).addClass('expand');
		$(this).find('i').addClass('expand_icon');
		$(this).find('i').removeClass('close_icon');
	});
	
	/*默认全部展开，这js暂时不用
	$('.md_citiao_cols2 .mod_item').each(function(i) {
		var linenum=parseInt($(this).find('.content').height()/parseInt($(this).find('.content').css('line-height')));
		var hasline=$(this).hasClass('haspic')&&$(this).hasClass('item2')?7:6;
		console.log(linenum+'+'+hasline);
		if(linenum>hasline){
			$(this).addClass('active');	
			$(this).append('<a class="more" href="javascript:;" onclick="$(this).parent().toggleClass(\'active\');"></a>');
		}
    });
	*/
	
})
