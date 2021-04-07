$(function(){
    //toolbar右侧
    $.post('/baike/index.php/Public/logininfobaike',function(data){
        $('.toolbar_right').html(data);
        /*头部消息start*/
        $.post(window.config.i_dir.replace('http:','https:')+'/Public/ajaxGetUserCnts/callback/?',function(d){
            var topDoc = [];
            var $noticeNum = 0;
            if(d.status == "ok"){
                if(d.fcnt != "0"){
                    topDoc.push('<div class="notice_list">'+d.fcnt+'位新粉丝，<a target="_blank" ids="ID_1021" var="1021" href="'+window.config.i_dir+'/fans/u/'+d.uid+'">查看粉丝</a></div>');
                    $noticeNum = $noticeNum + parseInt(d.fcnt);
                }
                if(d.ccnt != "0"){
                    topDoc.push('<div class="notice_list">'+d.ccnt+'条新评论，<a target="_blank" ids="ID_1022" var="1022" href="'+window.config.i_dir+'/comment">查看评论</a></div>');
                    $noticeNum = $noticeNum + parseInt(d.ccnt);
                }
                if(d.mcnt != "0"){
                    topDoc.push('<div class="notice_list">'+d.mcnt+'条新消息，<a target="_blank" ids="ID_1023" var="1023" href="'+window.config.userinfo_dir+'/Message'+'">查看消息</a></div>');
                    $noticeNum = $noticeNum + parseInt(d.mcnt);
                }
                if(d.ncnt != "0"){
                    topDoc.push('<div class="notice_list">'+d.ncnt+'条新通知，<a target="_blank" ids="ID_1024" var="1024" href="'+window.config.userinfo_dir+'/Message/notice/type/1">查看通知</a></div>');
                    $noticeNum = $noticeNum + parseInt(d.ncnt);
                }
                if(topDoc.length>0){
                    $mess_cont = '<div class="mess_cont"><p></p><div class="left" style="width:160px;">';
                    $mess_cont = $mess_cont + topDoc.join('');
                    $mess_cont = $mess_cont + '</div></div>';
                    $('.toolbar_message').append($mess_cont);
                    $('.message_body span').text('('+$noticeNum+')');
                }
            }else if(d.status == 'no'){
                $mess_cont = '<div class="mess_cont" style="width:115px;display:none;"><p></p><div class="left"><div class="notice_list"><a target="_blank" href="'+window.config.userinfo_dir+'/Message'+'">查看我的消息</a></div><div class="notice_list"><a target="_blank" href="'+window.config.userinfo_dir+'/Message/notice">查看商城通知</a></div><div class="notice_list"><a target="_blank" href="'+window.config.userinfo_dir+'/Message/notice/type/1">查看社区通知</a></div></div></div>';
                $('.toolbar_message').append($mess_cont);
            }else{}
        },'jsonp');
        /*头部消息end*/
        //消息关闭
        $('.message_body').live('click',function(){
            $('.mess_cont').fadeIn();
        })
        $('.mess_cont p').live('click',function(){
            $(this).parent().fadeOut(); 
        });
        //用户下拉框
        $('.user').hover(
            function(){
                $(this).addClass('current').find('.user_select').show();
                $(this).find('i').addClass('down');
            },function(){
                $(this).removeClass('current').find('.user_select').hide();
                $(this).find('i').removeClass('down');
            }
        );
        //微信
        $('.toolbar_weixin').hover(
            function(){
                $(this).addClass('current').find('.wx_select').show();
            },function(){
                $(this).removeClass('current').find('.wx_select').hide();
            }
        );
        //微博
        $('.toolbar_wb').hover(
            function(){
                $(this).addClass('current').find('.wx_select').show();
            },function(){
                $(this).removeClass('current').find('.wx_select').hide();
            }
        );
        //手机
        $('.toolbar_right .last').hover(
            function(){
                $(this).addClass('current').find('dl').show();
            },function(){
                $(this).removeClass('current').find('dl').hide();
            }
        );
    });
});
