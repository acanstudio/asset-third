/**
 * Created by Administrator on 16-5-25.
 */
var root = this;
if(typeof exports !== 'undefined')KFZ = exports;
else KFZ = root.KFZ || (root.KFZ = {});
KFZ.url  = {};
(KFZ.url.refresh = function(callback) {
    // protocol
    KFZ.url.protocol = window.location.protocol;
    // host
    var host = KFZ.url.host = window.location.protocol + '//' + window.location.host + '/';
    // rootType
    KFZ.url.rootType = /.+\.local\//i.test(host) ? 'local' : /.+\.kfz\.(com|cn)/.test(host) ? 'kfz' : /.+\/\/(neibu.*|shopv2.*|bookv2.*|tanv2.*)/i.test(host) ? 'neibu' : 'online';
    // pathname
    (KFZ.url.getPathname = function(){
        return (KFZ.url.pathname = window.location.pathname);
    })();
    // pagename
    (KFZ.url.getPagename = function(href){
        var pagename = '',
            newHref = (href || KFZ.url.getPathname() || '').replace(/^((http|https|ftp):\/\/\w+\.\w+(\.\w+)*)*\//, '').replace(/\/$/, '');
        if(newHref){
            pagename = newHref.substr(newHref.lastIndexOf('/') + 1);
            if(!pagename){
                pagename = newHref.replace(/\/$/,'');
                if(/\//.test(pagename)){
                    pagename = pagename.substr(pagename.lastIndexOf('/') + 1);
                }else{
                    pagename = '';
                }
            }
        }
        if(typeof href === 'undefined') KFZ.url.pagename = pagename;
        return pagename;
    })();
    // hash
    (KFZ.url.getHash = function(){
        return (KFZ.url.hash = window.location.hash.substr(1).replace(/\?.*/g, ''));
    })();
    // query
    (KFZ.url.getQuery = function(){
        var i, paramsArr = window.location.search.substr(1).split('&'), params = {}, aParam;
        for (i = 0; i<paramsArr.length; i++){
            aParamArr = paramsArr[i].split('=');
            if (aParamArr[0].length) {
                params[aParamArr[0]] = decodeURI(aParamArr[1]);
            }
        }
        return (KFZ.url.query = params);
    })();
    callback && callback.call(this, KFZ.url);
})();


/*本地，内部，线上三种环境适配*/
var develop = false;
if(KFZ.url.rootType === "neibu"){
    develop = true;
}
//站点适配
/*KFZ.sites = {};*/
/*
KFZ.sites.adapter = {
    shop:develop?'http://neibumshop.kongfz.com/':'http://mshop.kongfz.com/',
    book:develop?'http://neibumbook.kongfz.com/':'http://mbook.kongfz.com/',
    */
/*   pm:develop?'http://neibumwww.kongfz.cn/':'http://m.kongfz.cn/',*//*

    pm:develop?'http://mobile2-0mwww.kongfz.cn/':'http://m.kongfz.cn/',
    user:develop?'http://neibumuser.kongfz.com/':'http://muser.kongfz.com/',
    login:develop?'https://neibumlogin.kongfz.com/':'https://mlogin.kongfz.com/',
    search:develop?'http://neibumsearch.kongfz.com/':'http://msearch.kongfz.com/',
    pay:develop?'https://neibumpay.kongfz.com/':'https://mpay.kongfz.com/',
    xinyu:develop?'http://neibumxinyu.kongfz.com/':'http://mxinyu.kongfz.com/',
    www:develop?'http://neibumwww.kongfz.com/':'http://m.kongfz.com/',
    xiaoxi:develop?'http://neibumessage.kongfz.com/':'http://message.kongfz.com/',
    mxiaoxi:develop?'http://neibummessage.kongfz.com/':'http://mmessage.kongfz.com/',
    message:develop?'http://neibuuser.kongfz.com/':'http://user.kongfz.com/',
    shequlogin:develop?'http://neibulogin.gujiushu.com/':'http://login.gujiushu.com/',
    pmgs:develop?'http://neibupmgs.kongfz.com/':'http://pmgs.kongfz.com/',
    help:develop?'http://neibuhelp.kongfz.com/':'http://help.kongfz.com/',
    tan:develop?'http://neibutan.kongfz.com/':'http://tan.kongfz.com/',
    bq:develop?'http://neibubq.kongfz.com/':'http://bq.kongfz.com/',
    tousu:develop?'http://neibutousu.kongfz.com/':'http://tousu.kongfz.com/',
    union:develop?'http://neibuunion.kongfz.com/':'http://union.kongfz.com/',
    shequ:develop?'http://neibushequ.kongfz.com/':'http://www.gujiushu.com/',
    wuliu:develop?'http://neibuwuliu.kongfz.com/':'http://wuliu.kongfz.com/',
    tg:develop?'http://neibutg.kongfz.com/':'http://tg.kongfz.com/',
    sms:develop?'http://neibusms.kongfz.com/':'http://sms.kongfz.com/',
    zixun:develop?'http://neibumzixun.kongfz.com/':'http://mzixun.kongfz.com/',
    booklib:develop?'http://neibubooklib.kongfz.com/':'http://booklib.kongfz.com/',
    res:develop?'http://neibures.kongfz.com/':'http://res.kongfz.com/',
    app:develop?'http://neibuapp.kongfz.com/':'http://app.kongfz.com/',
    shufang:develop?'http://neibushufang.kongfz.com/':'http://shufang.kongfz.com/',
    admin:develop?'http://neibuadmin.kongfz.com/':'http://admin.kongfz.com/',
    pcShop:develop?'http://neibushop.kongfz.com/':'http://shop.kongfz.com/',
    pcBook:develop?'http://neibubook.kongfz.com/':'http://book.kongfz.com/',
    pcPm:develop?'http://neibuwww.kongfz.cn/':'http://www.kongfz.cn/',
    pcUser:develop?'http://neibuuser.kongfz.com/':'http://user.kongfz.com/',
    pcLogin:develop?'https://neibulogin.kongfz.com/':'https://login.kongfz.com/',
    pcSearch:develop?'http://neibusearch.kongfz.com/':'http://search.kongfz.com/',
    pcPay:develop?'https://neibupay.kongfz.com/':'https://pay.kongfz.com/',
    pcXinyu:develop?'http://neibuxinyu.kongfz.com/':'http://xinyu.kongfz.com/',
    pcWww:develop?'http://neibuwww.kongfz.com/':'http://www.kongfz.com/',
    pcZixun:develop?'http://neibuzixun.kongfz.com/':'http://zixun.kongfz.com/'

};
if(KFZ.url.rootType === "kfz"){
    KFZ.sites.adapter = {
        shop:'http://mshop.kfz.com/',
        book:'http://mbook.kfz.com/',
        pm:'http://mwww.kfz.cn/',
        user:'http://muser.kfz.com/',
        login:'https://mlogin.kfz.com/',
        search:'http://msearch.kfz.com/',
        pay:'https://mpay.kfz.com/',
        xinyu:'http://mxinyu.kfz.com/',
        www:'http://m.kfz.com/',
        xiaoxi:'http://message.kfz.com/',
        mxiaoxi:'http://mmessage.kfz.com/',
        message:'http://user.kfz.com/',
        shequlogin:'http://login.gujiushu.com/',
        pmgs:'http://pmgs.kfz.com/',
        help:'http://help.kfz.com/',
        tan:'http://tan.kfz.com/',
        bq:'http://bq.kfz.com/',
        tousu:'http://tousu.kfz.com/',
        union:'http://union.kfz.com/',
        shequ:'http://www.gujiushu.com/',
        wuliu:'http://wuliu.kfz.com/',
        tg:'http://tg.kfz.com/',
        sms:'http://sms.kfz.com/',
        zixun:'http://mzixun.kfz.com/',
        booklib:'http://booklib.kfz.com/',
        res:'http://res.kfz.com/',
        app:'http://app.kfz.com/',
        shufang:'http://shufang.kfz.com/',
        admin:'http://admin.kfz.com/',
        pcShop:'http://shop.kfz.com/',
        pcBook:'http://book.kfz.com/',
        pcPm:'http://www.kfz.cn/',
        pcUser:'http://user.kfz.com/',
        pcLogin:'https://login.kfz.com/',
        pcSearch:'http://search.kfz.com/',
        pcPay:'https://pay.kfz.com/',
        pcXinyu:'http://xinyu.kfz.com/',
        pcWww:'http://www.kfz.com/',
        pcZixun:'http://zixun.kfz.com/'
    };
}
*/



(KFZ.add = function(){
    var len = arguments.length;
    if(!len) return;
    var objects;
    if(len === 1){
        objects = arguments[0];
        if(typeof objects === 'string') objects = [objects];
    }else{
        objects = Array.prototype.slice.apply(arguments);
    }
    $.each(objects, function(){
        var object = KFZ[this] || (KFZ[this] = {});
        object.extend = function(obj){
            $.extend.call(this, this, obj);
        };
    });
    var callback = arguments[len-1];
    typeof callback === 'function' && callback.apply(null, arguments);
})(['url', 'ajax', 'util', 'ui', 'lang', 'common', 'page']);

KFZ.common.getKey = function(Obj,value){
    var key = '';
    if(Obj && value){
        $.each(Obj,function(k,v) {
            if (v == value) {
                key = k||'';
                return;
            }
        });
    }
    return key;
}

// 字符转unicode
// @author lizixu <zixulee@163.com>
KFZ.util.charToUnicode = function(str) {
    if (!str) return '';
    var unicode = '', i = 0, len = (str = '' + str).length;
    for (; i < len; i ++) {
        unicode += 'k' + str.charCodeAt(i).toString(16).toLowerCase();
    }
    return unicode;
};

// unicode转字符
// @author lizixu <zixulee@163.com>
KFZ.util.unicodeToChar = function(unicode) {
    if (typeof unicode === 'undefined') return '';
    var str = '', arr = unicode.split('k'), i = 0, len = arr.length;
    for (; i < len; i ++) {
        var oneUnicode = arr[i], oneStr;
        if (!oneUnicode) continue;
        oneUnicode = parseInt(oneUnicode, 16).toString(10);
        oneStr = String.fromCharCode(oneUnicode);
        str += oneStr;
    }
    return str;
};


// 处理history
KFZ.util.dealHistory = function(url, callback){
    if(!(KFZ.util.pushState = window.history.pushState)) return true;
    // 记录history
    KFZ.util.pushState.call(window.history, null, null, url);
    // 回调
    callback && callback.apply(null, arguments);
    return false;
};

// 视图及其扩展/事件
// @author lizixu <zixulee@163.com>
KFZ.add(['View', 'events']);
KFZ.View.extend = function(object){
    var F = function(param,id){
        if(!(this instanceof arguments.callee)) return new arguments.callee();
        this.init(param,id);
    };
    F.prototype = {
        constructor: F,
        init: function(param,id){
            var that = this;
            // 1-el-{string|object}视图节点选择器
            var $doc = $(document),
                el = this.el;
            if(!el){
                if(!(el = this.tagName)) return;
                el = this.el = '<' + el.replace(/^\<|(\/)*\>&/g, '') + ' />';
            }
            this.$el = $(el);
            // 2-initialize-{function}-初始化
            var initialize = this.initialize;
            initialize && initialize.apply(this, arguments);
            // 3-events-{object}-绑定事件
            var events = this.events;
            events && $.each(events, function(key, handler){
                setTimeout(function(){
                    if(!handler) return;
                    var evtArr = key.split(' '),
                        evts = evtArr.shift();
                    if(!evts || !evtArr.length) return;
                    $.inArray('body', evtArr) < 0 && evtArr.unshift(el);
                    var selector = evtArr.join(' '),
                        handlerName = '';
                    if(typeof handler === 'string'){
                        handlerName = handler;
                        handler = that[handler];
                    }
                    if(!handler || typeof handler !== 'function') return;
                    $.each(evts.split(','), function(i, evt){
                        if(handlerName){
                            var fullEventName = evt + '|' + selector.replace(/\s+/g, '~') + '|' + handlerName;
                            if(!KFZ.events[fullEventName]){
                                var isSameOne;
                                $.each(KFZ.events, function(existOne, hasHandler){
                                    var existArr = existOne.split('|');
                                    if(existArr.length < 3) return;
                                    var existEvt = existArr[0],
                                        existSelector = existArr[1].replace(/~/, ' '),
                                        existHandlerName = existArr[2];
                                    if(evt === existEvt && selector === existSelector && handlerName === existHandlerName){
                                        isSameOne = true;
                                        return false;
                                    }
                                });
                                if(!isSameOne){
                                    $.each(evt.split(','), function(i, e){
                                        $doc.on(e, selector, function(event){
                                            return handler.apply(that, arguments);
                                        });
                                    });
                                    KFZ.events[fullEventName] = true;
                                }
                            }
                        }else{
                            $.each(evt.split(','), function(i, e){
                                $doc.on(e, selector, function(event){
                                    return handler.apply(that, arguments);
                                });
                            });
                        }
                    });
                }, 0);
            });
        }
    };
    $.extend(F.prototype, object);
    return F;
};

// 模板
// @param str {string} 模板选择器ID
// @param data {object} 传入模板的数据对象
KFZ.tmpl = KFZ.template = (function(){
    var cache = {};
    return function tmpl(str, data){
        var fn = !/\W/.test(str) ? cache[str] || (cache[str] = tmpl(document.getElementById(str).innerHTML)) :
            new Function('o',
                "var p=[];" +
                    "with(o){p.push('" +
                    str.replace(/[\r\t\n]/g, " ")
                        .split("<%").join("\t")
                        .replace(/((^|%>)[^\t]*)'/g, "$1\r")
                        .replace(/\t=(.*?)%>/g, "',$1,'")
                        .split("\t").join("');")
                        .split("%>").join("p.push('")
                        .split("\r").join("\\'") +
                    "');}return p.join('');");
        return data ? fn(data) : fn;
    };
})();


// Cookie操作方法
KFZ.util.cookie = function(name, value, options){
    if (typeof value != 'undefined') {
        options || (options = {});
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString();
        }
        var path = options.path ? '; path=' + options.path : '';
        var domain = options.domain ? '; domain=' + options.domain : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else {
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = $.trim(cookies[i]);
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};


KFZ.add(['mobile']);
(function(){
    $.each(arguments[0], function(){
        KFZ.mobile[this] = function(args){
            if(!(this instanceof arguments.callee)) return new arguments.callee(args);
            this.init(args||{});
        };
    });
})(['Tip']);

/*公共提示弹框*/
KFZ.mobile.Tip.prototype = {
    constructor:KFZ.mobile.Tip,
    config:{
        width:'9rem',
        maxWidth:'15rem',
        minHeight:'1rem',
        timer:5000
    },
    init:function(args){
        var setting = this.setting = {},config = this.config,w = window;
        setting.W = w.innerWidth;
        setting.H = w.innerHeight;
        if(args && args.tipType == 1){
            setting.tipType = 1;
            setting.width = args.width || config.width;
            setting.minHeight = args.height || '4rem';
        }else{
            setting.width = args.maxWidth || config.maxWidth;
            setting.minHeight = args.height || config.minHeight;
        }
        setting.timer = args.timer || config.timer;
        setting.top = (setting.H - parseInt(setting.minHeight)* w.fontSize)/(2 * w.fontSize) + 'rem';
        setting.context = args.context || '';
        this.template();
    },
    template:function(){
        var setting = this.setting,
            template  = '',
            el = '.kfz-Tip-view',
            $el = $(el);
        if($el.length){
            $el.remove();
        }
        template += '<div class="kfz-Tip-view" style="display:none;top:'+setting.top+'">';
        if(setting.tipType && setting.tipType == 1){
            template += '<div class="kfz-Tip-view-con" style="max-width:'+setting.width+'">';
            template += '<span class="icon icon_suc"></span><p style="margin-bottom:0.5rem;font-size:0.6rem">'+setting.context+'</p></div></div>';
        }else{
            template += '<div class="kfz-Tip-view-con" style="max-width:'+setting.width+'">'+setting.context+'</div></div>';
        }

        $('body').append(template).css({position:'relative'});
        $el = $(el).show();
        $con = $el.find('kfz-Tip-view-con');
        if(this.TIMER)clearTimeout(this.TIMER);
        this.TIMER = setTimeout(function(){
            $('.kfz-Tip-view').hide();
        },setting.timer);
    }
};

KFZ.util.isIE = function(){
    var self = arguments.callee;
    if(typeof self.isie !== 'undefined') return self.isie;
    var navigator = window.navigator,
        browser = navigator.appName,
        b_version = navigator.appVersion,
        version, trim_Version, ver;
    // 6-10
    if(window.ActiveXObject){
        version = b_version.split(';');
        trim_Version = version[1].replace(/[ ]/g,'');
        if(browser === 'Microsoft Internet Explorer'){
            ver = +trim_Version.replace(/MSIE(\d+)(\.0)*$/i, '$1');
            return (self.isie = !isNaN(ver) ? ver : 0);
        }
    }
    // 11
    else if(browser === 'Netscape' && /Trident.+rv:*11\.0/.test(b_version)){
        version = b_version.replace(/^\w+\(|\)(\s*\w+)+$/gi, '').split(';');
        trim_Version = version[version.length-1].split(':')[1];
        ver = +trim_Version.replace(/(\d+)(\.0)*$/i, '$1');
        return (self.isie = !isNaN(ver) ? ver : 0);
    }
    return (self.isie = 0);
};

/*等比缩放图片*/
KFZ.ui.resizeImage = (function(){
    var count = 0; // 批量处理图片的计数器
    return function(imgs, options){
        options || (options = {});
        var self = arguments.callee,
            maxWidth, maxHeight, isSetPosition, callback, errSrc;
        if(typeof options === 'number' && typeof arguments[2] === 'number'){
            maxWidth = options;
            maxHeight = arguments[2];
            isSetPosition = arguments[3];
            callback = arguments[4];
        }else{
            maxWidth = options.maxWidth;
            maxHeight = options.maxHeight;
            isSetPosition = options.isSetPosition;
            callback = options.callback;
            errSrc = options.errSrc;
        }
        var $imgs = typeof imgs == 'object' ? imgs : $(imgs),
            len = $imgs.length;
        (errSrc || (maxWidth && maxHeight)) && len && $.each($imgs, function(){
            if($(this).attr('imgresized') === '1') return;
            var src = $.trim($(this).attr('src'));
            if(!src){
                if(errSrc){
                    $(this).attr('src', (src = errSrc));
                }else{
                    return;
                }
            }
            var img = new Image(),
                start = +new Date(),
                stamp = start + '_' + count++,
                isIE = KFZ.util.isIE();
            $(this).attr('imgload', 'img_' + stamp);
            // 非IE赋值
            if(!isIE) img.src = src;
            // 错误url替换处理
            errSrc && (img.onerror = function(){
                var $errImg = $('[imgload="img_' + stamp + '"]');
                if($errImg.attr('imgerr') === '1') return;
                $errImg.attr({'src': errSrc, 'imgerr': '1'});
                maxWidth && maxHeight && setTimeout(function(){
                    self($errImg, maxWidth, maxHeight, isSetPosition, callback);
                });
            });
            // 缩放处理
            maxWidth && maxHeight && (function(){
                if(img.complete){
                    setTimeout(function(){
                        KFZ.ui.setMaxSize($('[imgload="img_' + stamp + '"]').removeAttr('imgerr'), maxWidth, maxHeight, isSetPosition, callback);
                    });
                    return;
                }
                img.onload = function(){
                    setTimeout(function(){
                        KFZ.ui.setMaxSize($('[imgload="img_' + stamp + '"]').removeAttr('imgerr'), maxWidth, maxHeight, isSetPosition, callback);
                    });
                };
            })();
            // IE赋值
            if(isIE) img.src = src;
        });
    };
})();
KFZ.ui.setMaxSize = (function(){
    var start = {}, // 图片开始处理时刻的集合
        count = 0; // 处理的图片计数器
    return function(img, maxWidth, maxHeight, isSetPosition, callback){
        var $img = (typeof img == 'object') ? img : $(img);
        if(!$img.length || $img.attr('imgresized') === '1') return;
        $img.removeAttr('width').removeAttr('height').css({width: 'auto', height: 'auto',"maxWidth":maxWidth+"rem","maxHeight":maxHeight+"rem"});
        (function($img, maxWidth, maxHeight, isSetPosition, callback){
            var ac = arguments.callee,
                w = $img.width()/40,
                h = $img.height()/40,
                $imgW = $img.width(),
                $imgH = $img.height();
            // 未获取宽和高其一-等待并再次获取宽和高
            if(!w || !h){
                start[count] || (start[count] = +new Date());
                //$img.css({width: 'auto', height: 'auto'});
                if(+new Date() - start[count] < 15000){
                    setTimeout(function(){
                        ac($img, maxWidth, maxHeight, isSetPosition, callback);
                    }, 300);
                }else{
                    delete start[count];
                }
                return;
            }
            start[count] && delete start[count];
            // 宽和高其一大于最大尺寸-等比缩小
            if(w > maxWidth || h > maxHeight){
                var rateW = w/maxWidth,
                    rateH = h/maxHeight;
                if(rateW > 1 || rateH > 1){
                    if(rateW/rateH > 1){
                        $img.width(maxWidth).height(h/rateW);
                    }else{
                        $img.width(w/rateH).height(maxHeight);
                    }
                }
            }
            // 设置居中
            if(isSetPosition){
                var $imgParent = $img.parent();
                var $imgParentW = $img.parent().width();
                var $imgParentH = $img.parent().height();
                var left = parseFloat(($imgParentW  - $imgW)/2-1);
                var top =  parseFloat(($imgParentH  - $imgH)/2-1);
                KFZ.ui.extendStyle($img, {'display': 'block', 'position': 'absolute', 'left': left+"px", 'top' : top+ 'px'});
                $imgParent.css({'position': 'relative', 'overflow': 'hidden'});
            }
            // 设置完成标志
            $img.removeAttr('imgload').attr('imgresized', '1');
            callback && callback($img, count);
            count ++;
        })($img, maxWidth, maxHeight, isSetPosition, callback);
    };
})();
KFZ.ui.extendStyle = KFZ.ui.addStyle = function(selector, newStyle){
    var $el = typeof selector === 'object' ? selector : $(selector);
    // 已有样式
    var	oldStyle = $el.attr('style') || '';
    if (!newStyle) return oldStyle;
    var	oldStyleArr,
        styleObj = {};
    if (oldStyle) {
        oldStyleArr = oldStyle.split(';');
        $.each(oldStyleArr, function(index, attr){
            if (!attr) return;
            var attrArr = attr.split(':');
            styleObj[attrArr[0]] = attrArr[1];
        });
    }
    // 需合并样式
    var newStyleArr,
        extendStyleObj = {};
    if (typeof newStyle === 'object') {
        extendStyleObj = newStyle;
    } else if (typeof newStyle === 'string') {
        newStyleArr = newStyle.split(';');
        $.each(newStyleArr, function(index, attr){
            if (!attr) return;
            var attrArr = attr.split(':');
            extendStyleObj[attrArr[0]] = attrArr[1] || '';
        });
    }
    // 合并后样式
    var	nowStyleArr = [];
    styleObj = $.extend(styleObj, extendStyleObj);
    $.each(styleObj, function(key, val){
        nowStyleArr.push(key + ':' + val);
    });
    // 写入节点style属性
    $el.attr('style', nowStyleArr.join(';'));
};


/*登录验证*/
// @param options object 包含已登录及未登录回调的对象
// @param options.hasLogin function 已登录处理器
// @param options.noLogin function 未登录处理器（当同时传入了自动处理 autoDealNoLogin 为true时，则优先自动处理）
// @param options.autoDealNoLogin boolean 是否自动处理未登录
// @returns boolean
KFZ.common.loginCheck = function(options){
    options || (options ={});
    var isLogin,
        user = KFZ.user,
        hasLogin = options.hasLogin,
        noLogin = options.noLogin,
        autoDealNoLogin = options.autoDealNoLogin;
    // 已登录
    if(isLogin = (user && user.isLogin) ? true : false){
        hasLogin && hasLogin.call(this, user);
    }
    // 未登录
    else{
        // 未登录自动处理
        if(autoDealNoLogin === true){
            KFZ.common.turnLogin && KFZ.common.turnLogin();
        }
        // 未登录处理器
        else if(noLogin){
            noLogin.call(this);
        }
    }
    return isLogin;
};

KFZ.common.turnLogin = function(){
    var u = navigator.userAgent;
    var isApp = u.indexOf('KFZ_COM') > -1;
    var location = window.location,
        hash = location.hash.substr(1),
        href = location.href.replace(location.hash, '');
    if(isApp){
      href = KFZ.sites.adapter.m + 'm/?mustLogin=1&returnUrl=' + encodeURIComponent(href + (hash ? (/\?/.test(href) ? '&' : '?' ) + 'hash=' + hash : '')) + '#/login/auth-login';
    }else {
      href = KFZ.sites.adapter.login +  'Mobile/Login/index?mustLogin=1&returnUrl=' + encodeURIComponent(href + (hash ? (/\?/.test(href) ? '&' : '?' ) + 'hash=' + hash : ''));
    }
    KFZ.sites.adapter && (location.href = KFZ.common.loginHref = href);
};

// 百度统计
setTimeout(function(){
    var _hmt = _hmt || [];
    // kongfz.cn
    if(/kongfz\.cn/i.test(KFZ.url.host)){
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?e9887cc33a1d80028a23ab3a80d16a5a";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?53d9014befe4cb8e3e0358f00cfadca3";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    }
    // kongfz.com
    else if(/kongfz\.com/i.test(KFZ.url.host)){
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?bca7840de7b518b3c5e6c6d73ca2662c";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
        // shequ.kongfz.com（社区）
        if(/shequ\.kongfz\.com/i.test(KFZ.url.host)){
            (function() {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?f8663b704cbf53aa8db7ee7ebfa7cf70";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        }
        // 专门用于追踪百度竞价广告的统计代码（kongfz.com独有）
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?33be6c04e0febc7531a1315c9594b136";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    }
    // gujiushu.com
    else if(/gujiushu\.com/i.test(KFZ.url.host)){
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?f8663b704cbf53aa8db7ee7ebfa7cf70";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    }
}, 1000);

/**
 * plupload 上传插件
 * @author dongnan <dongyh@126.com>
 * @param {String} id 上传按钮的id
 * @param {Object} options
 * @param {String} options.url 上传文件服务端url
 * @param {String} options.autoUpload 是否自动上传，默认为 true
 * @param {Object} options.data 随文件一起提交到服务器端的数据
 * @param {String} options.fileDataName 提交到服务器端的文件上传域的名称，默认为'file'
 * @param {Boolean} options.multi 是否允许一次上传多个，默认为true
 * @param {String} options.maxFileSize 上传文件大小限制 例如: '500kb','4mb'
 * @param {String} options.listbox 标签id，用于显示待上传文件列表
 * @param {Int} options.queueSizeLimit 单次上传队列个数限制
 * @param {Function} options.init(up,params) 添加上传文件回调函数
 * @param {Function} options.fileAdded(file) 添加上传文件回调函数
 * @param {Function} options.uploadProgress(file) 文件上传中回调函数,用于处理上传进度
 * @param {Function} options.fileError(file) 文件上传错误回调函数
 * @param {Function} options.fileSuccess(res.data,res,file) 文件上传成功回调函数
 * @param {Function} options.fileFail(res.message,res,file) 文件上传失败回调函数
 * @param {Object} options ... 待完善
 * @returns {Object} uploader plupload 对象,可通过 uploader.bind('someEvent',function(){}) 绑定一些事件
 */
KFZ.ui.plupload = function(id, options){
    options || (options = {});
    (id.indexOf('#') === 0) && (id = id.substring(1));
    options.listbox && (options.listbox.indexOf('#') !== 0) && (options.listbox = '#'+options.listbox);
    options.queueSizeLimit || (options.queueSizeLimit = 0);
    options.upType = (KFZ.util.isIE() && KFZ.util.isIE() > 5) ? 'flash,html4':'html5,flash,html4';
    var uploader = new plupload.Uploader({
        runtimes: options.upType,
        browse_button: id,
        //container: 'item_edit_pic',
        url: options.url,
        multi_selection:options.multi === false ? false : true,
        max_file_size: options.maxFileSize || '500kb',
        multipart_params: options.data || {},
        file_data_name: options.fileDataName || 'file',
        filters: options.filters || [
            {title: "Image files", extensions: "jpg,gif,png"}
        ],
        //resize: {width: 1280, height: 1280, quality: 90},
        flash_swf_url: KFZ.url.host + 'js/base/plupload/Moxie.swf',
        silverlight_xap_url: KFZ.url.host + 'js/base/plupload/js/Moxie.xap'
    });
    options.init && uploader.bind('Init',options.init);
    uploader.init();
    uploader.bind('FilesAdded', function(up, files) {
        if(files.length>options.queueSizeLimit){
            KFZ.ui.alertWin({result: 0, text: '单次上传个数不能超过'+options.queueSizeLimit+'个！'});
            _.each(files, function(file) {
                uploader.removeFile(file);
            });
        }else{
            _.each(files, function(file) {
                options.listbox && $(options.listbox).append('<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b>' + '</div>');
                options.fileAdded && options.fileAdded(file);
            });
            //默认为自动上传
            if(options.autoUpload !== false){
                uploader.start();
            }
        }
        up.refresh(); // Reposition Flash/Silverlight
    });
    uploader.bind('UploadProgress', function(up, file) {
        options.listbox && $('#' + file.id + " b").html(file.percent + "%");
        options.uploadProgress && options.uploadProgress(file);
    });
    uploader.bind('Error', function(up, err) {
        if(err.code == '-600'){
            KFZ.ui.alertWin({result: 0, text: '上传文件必须小于'+options.maxFileSize+'！'});
        }
        options.fileError && options.fileError(err);
        up.refresh(); // Reposition Flash/Silverlight
    });
    uploader.bind('FileUploaded', function(up, file, data) {
        if(options.listbox){
            $('#' + file.id + " b").html("100%");
            $('#' + file.id).fadeOut();
        }
        var res = JSON.parse(data.response);
        // 成功
        if(res.status){
            options.fileSuccess && options.fileSuccess(res.data, res, file);
        }
        // 失败
        else{
            options.fileFail && options.fileFail(res.message, res, file);
        }
    });

    return uploader;
};
