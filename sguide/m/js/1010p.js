$(function () {
	// 添加元素
	var $mod_el = '<div class="mod_mulu"> <i class="iconfont icon-fenlei2"></i> <span>目录</span> <i class="close iconfont icon-x"></i> </div>';
	$('.md_1010 .mod_cont.mod_left ul>div').prepend($mod_el);
	var $open_btn = '<div class="mulu_open">目录</div>';
	$('.md_1010 .mod_cont.mod_left').prepend($open_btn);

	// 目录
	var list = '.md_1010 .mod_cont.mod_left ul';
	/* close */
	$(list).on('click', function () { $(list).hide(); });
	$(list).find('.close').on('click', function () { $(list).hide(); });
	// 阻止冒泡事件
	$('.md_1010 .mod_cont.mod_left ul>div').on('click', function (e) { e.stopPropagation(); });
	/* open */
	$('.md_1010 .mod_cont.mod_left .mulu_open').on('click', function () { $(list).show(); });
});