
function bind6025(obj){
	if(obj.find('.mod_cols2').length>0){
		var pagenum=obj.find('.mod_cols2').attr('pagenum')>0?parseInt(obj.find('.mod_cols2').attr('pagenum')):5;
	}else{
		var pagenum=obj.attr('pagenum')>0?parseInt(obj.attr('pagenum')):5;
	}
	obj.find('.gengduo a').click(function(){
		var obj=$(this).parents('.mod_list').find('.mod_bangdanname');
		var n=0;
		obj.find('li').each(function(k){
			if(!$(this).hasClass('dn')){
				n=k+1;
			}
		});
		if(obj.find('li:eq('+n+')').length<=0){
			n=0;
		}
		obj.find('li').addClass('dn');
		obj.find('li').each(function(k){
			if(k>=n&&k<n+pagenum){
				$(this).removeClass('dn');
			}
		});
		while(obj.find('li').length-obj.find('li.dn').length<pagenum&&obj.find('li.dn').length>0){
			n--;
			obj.find('li:eq('+n+')').removeClass('dn');
		}
		lazyPic();
	});
}