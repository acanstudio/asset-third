//boqii单例模式
window.BQ = {};

BQ.GetQueryString = function (url) {
  var reg = new RegExp ('(^|&)' + url + '=([^&]*)(&|$)', 'i');
  var r = window.location.search.substr (1).match (reg);
  if (r != null) return r[2];
  return null;
};
//判断设备
BQ.Device = function () {
  var ua = navigator.userAgent;
  var ipad = ua.match (/(iPad).*OS\s([\d_]+)/),
    isIphone = !ipad && ua.match (/(iPhone\sOS)\s([\d_]+)/),
    isAndroid = ua.match (/(Android)\s+([\d.]+)/),
    isMobile = isIphone || isAndroid;

  if (isIphone || ipad) {
    return 'IOS';
  } else {
    return 'ANDROID';
  }
};

BQ.isWeiXin = function () {
  var ua = window.navigator.userAgent.toLowerCase ();
  if (ua.match (/MicroMessenger/i) == 'micromessenger') {
    return true;
  } else {
    return false;
  }
};

//cookie操作
BQ.storageInfo = (function () {
  var supportStorage = false;

  window.localStorage ? (supportStorage = true) : void 0;

  supportStorage = false;

  return {
    set: function (name, value, expires, path, domain) {
      if (supportStorage) {
        window.localStorage.setItem (name, value);
      } else {
        if (typeof expires == 'undefined') {
          expires = new Date (
            new Date ().getTime () + 10000000 * 60 * 60 * 24 * 30
          ).toGMTString ();
        }
        document.cookie =
          name +
          '=' +
          escape (value) +
          (expires ? ';expires=' + expires : '') +
          (path ? ';path=' + path : ';path=/') +
          (domain ? ';domain=' + domain : '');
      }
    },
    get: function (name) {
      if (supportStorage) {
        return window.localStorage.getItem (name);
      } else {
        var arr = document.cookie.match (
          new RegExp ('(^| )' + name + '=([^;]*)(;|$)')
        );
        if (arr != null) {
          return unescape (arr[2]);
        }
        return null;
      }
    },
    clear: function (name, path, domain) {
      if (supportStorage) {
        window.localStorage.removeItem (name);
      } else {
        if (this.get (name)) {
          document.cookie =
            name +
            '=' +
            (path ? '; path=' + path : '; path=/') +
            (domain ? '; domain=' + domain : '') +
            ';expires=Fri, 02-Jan-1970 00:00:00 GMT';
        }
      }
    },
  };
}) ();
//判断是测试环境还是线上环境
window.isDevelopment = function () {
  return !!window.location.host.match (
    /localhost|mtest.boqii.com|vtest.boqii.com|stest.boqii.com|127\.0\.0\.1/
  );
};

var ua = navigator.userAgent;
var isAndroid = ua.match (/(Android)\s+([\d.]+)/);

$ ('.andriod_download_con').show ();
/*if( getCookie("mandroid_overlay") == "exist" ){
 $(".andriod_download_con").hide();
 }*/

var andriod_height = $ ('.andriod_download_tips').height ();
$ ('.mb').css ('margin-bottom', andriod_height);

function GetQueryString (url) {
  var reg = new RegExp ('(^|&)' + url + '=([^&]*)(&|$)', 'i');
  var r = window.location.search.substr (1).match (reg);
  if (r != null) return r[2];
  return null;
}

function getCookie (name) {
  var arr, reg = new RegExp ('(^| )' + name + '=([^;]*)(;|$)');
  if ((arr = document.cookie.match (reg))) return arr[2];
  else return null;
}

$ ('.down_rightnow').on ('tap', function () {
  function stopScroll (event) {
    event.preventDefault ();
  }
  if (BQ.isWeiXin ()) {
    $ ('body').on ('touchmove', stopScroll);
    $ ('.pupWindow').css ('display', 'block').tap (function () {
      $ ('.pupWindow').css ('display', 'none');
      $ ('body').off ('touchmove', stopScroll);
    });
  } else {
    //判断手机浏览器

    if (BQ.Device () == 'IOS') {
      //window.open(url);

      //window.location.href = "http://a.app.qq.com/o/simple.jsp?pkgname=com.boqii.petlifehouse&ckey=CK1320246218685";
      //window.location.href = "https://itunes.apple.com/cn/app/bo-qi-chong-wu/id883476363";
      // window.location.href = "https://at.umeng.com/C81fWr"; //友盟短链
      window.location.href =
        'https://itunes.apple.com/cn/app/%E6%B3%A2%E5%A5%87%E5%AE%A0%E7%89%A9plus-%E7%B2%BE%E9%80%89%E5%85%A8%E7%90%83%E5%AE%A0%E7%89%A9%E7%94%A8%E5%93%81%E5%95%86%E5%9F%8E/id1398653068?mt=8';
    } else if (BQ.Device () == 'ANDROID') {
      //安卓设备
      var utm = BQ.GetQueryString ('utm_source');
      var url = '';
      var version = appVersion;
      var apk_source = '';

      /*if( utm ){
        channels.forEach(function(channel){
          if( utm.indexOf(channel) !=-1 ){
            apk_source = channel;
          }
        });
        url = 'http://a.boqiicdn.com/App/boqii_' + version + '_seoapp.apk';
      }else{
        url = 'http://a.boqiicdn.com/App/boqii_' + version + '_seoapp.apk';
      }*/
      url =
        'http://a.app.qq.com/o/simple.jsp?pkgname=com.boqii.petlifehouse&ckey=CK1320246218685';
      window.location = url;
    }
  }
});

$ ('.close_andriod').click (function () {
  $ ('.andriod_download_tips').hide ();

  $ ('.mb').css ('margin-bottom', '1em');

  function setCookie (name, value, expires, path, domain) {
    var latertime = new Date ();
    latertime.setHours ('23');
    latertime.setMinutes ('59');
    latertime.setSeconds ('59');

    expires = latertime;

    document.cookie =
      name +
      '=' +
      escape (value) +
      (expires ? ';expires=' + expires.toGMTString () : '') +
      (path ? ';path=' + path : ';path=/') +
      (domain ? ';domain=' + domain : '');
  }

  setCookie ('mandroid_overlay', 'exist', null, '/', '.boqii.com');
});

function getArticleId () {
  try {
    let str = window.location.href;
    var reg = /\/(\d+)\.html/;
    return str.match (reg)[1];
  } catch (e) {}
  return '';
}

// 在 app里打开 需要GIO打点
if (BQ.GetQueryString ('from') == 'app') {
  var articleid = getArticleId ();
  // gio ('init', 'acd3e0eda1b7de23', {});
  // gio ('send', 'CommunityOpenButton', {
  //   articleid: articleid,
  //   uid: '',
  // });
}

//增加百科跳转到app v4.0

// if (
//   document.getElementById('appTitle') &&
//   BQ.GetQueryString('from') != 'app' &&
//   !BQ.isWeiXin()
// ) {
//   let gourl = window.location.href || ''
//   gourl = ~gourl.indexOf('?') ? gourl + '&from=app' : gourl + '?from=app'
//   ;(function () {
//     var appTitle = document.getElementById('appTitle')
//     var value = (appTitle && appTitle.value) || ''
//     var url = ''
//     if (BQ.Device() == 'IOS') {
//       url =
//         'bqimallplusapp://html5ActivityRecommendedVC?param_Html5URL=' +
//         encodeURIComponent(gourl) +
//         '&param_TITLE=' +
//         value
//     } else {
//       url =
//         'boqii://h5?URL=' +
//         encodeURIComponent(gourl) +
//         '&TITLE=' +
//         document.getElementById('appTitle').value
//     }

//     // 去app下载

//     function iframeBridge(url) {
//       var ifr = document.createElement('iframe')
//       ifr.src = url
//       ifr.style.display = 'none'
//       document.body.appendChild(ifr)
//       setTimeout(function () {
//         document.body.removeChild(ifr)
//       }, 1000)
//     }
//     try {
//       if (navigator.userAgent.match(/(iPhone|iPod|iPad);?/i)) {
//         /*ios9*/
//         var arg = navigator.userAgent.match(/OS\s([\d]+)/)
//         var iOS9 = arg ? parseInt(arg[1], 10) : 0

//         if (iOS9 >= 9) {
//           window.location.href = url
//         } else {
//           // iOS9 以下版本跳转方式
//           iframeBridge(url)
//         }
//       } else if (navigator.userAgent.match(/android/i)) {
//         iframeBridge(url)
//       }
//     } catch (e) {}
//   })()
// }

function iframeBridge (url) {
  var ifr = document.createElement ('iframe');
  ifr.src = url;
  ifr.style.display = 'none';
  document.body.appendChild (ifr);
  setTimeout (function () {
    // document.body.removeChild (ifr);
    window.location.href = 'https://m.boqii.com/appdown.html?fromPage=webapp';
  }, 1200);
}

// 魔窗打开
function mlinkFuc (type, param) {
  if (BQ.Device () == 'ANDRIOD') {
    param = encodeURIComponent (param);
  }

  let link = `https://amd49q.jmlk.co/AA6N`;

  new JMLink ({
    jmlink: link, //在魔窗后台配置好的短链URL
    button: document.querySelectorAll ('.open-in-app'), //必须是A标签
    //尝试自动打开在魔窗后台配置的mlink中的App
    autoLaunchApp: false,
    downloadWhenUniversalLinkFailed: true,
    inapp: false,
    plhparams: {
      valuer: param,
    },
  });
}

(function () {
  let gourl = window.location.href || '';
  gourl = ~gourl.indexOf ('?') ? gourl + '&from=app' : gourl + '?from=app';
  var appTitle = document.getElementById ('appTitle');
  var value = (appTitle && appTitle.value) || '';
  var url = '';
  let isShare = false;
  let param = '';

  if (BQ.Device () == 'IOS') {
    // ios协议

    param = `Controller=html5ActivityRecommendedVC(MCWen)param_Html5URL(MCDeng)${gourl}(MCYu)param_TITLE(MCDeng)${value}(MCYu)param_share(MCDeng)${isShare}`;

    mlinkFuc ('IOS', param);
  } else {
    param = `boqii://h5?TITLE=${value}&URL=${gourl}&isCanShare=${isShare}`;

    mlinkFuc ('ANDRIOD', param);
  }
}) ();
// 文章详情
$ ('.more-content').click (function () {
  // if( isPart )
  $ ('.detail-part').hide ();
  $ ('.detail-full').show ();
  $ ('.full-action').hide ();
});

// $ ('.ulike-album').on ('click', 'li', function () {
//   alert (1);
//   $ ('.swiper-container').show ();
//   var index = $ (this).index ();
//   alert (index);
//   var mySwiper = new Swiper ('.swiper-container', {
//     loop: true, // 循环模式选项
//     initialSlide: index,
//     // 如果需要分页器
//     pagination: {
//       el: '.swiper-pagination',
//       type: 'fraction',
//     },
//   });
// });

// 2019-10-29
// 社区笔记详情
let isFromApp = BQ.GetQueryString ('from') == 'app' ? true : false;

$ ('.jarticledetail').click (function () {
  let id = String ($ (this).attr ('lid'));

  if (isFromApp) {
    BQJSAPI.navigateToNoteDetail ({ID: id});
  } else {
    window.location.href = '//m.boqii.com/community/notedetail/' + id;
  }
});
// 文章详情
$ ('.article-list').on ('click', '.article-list-item', function () {
  let id = $ (this).attr ('aid');
  if (isFromApp) {
    window.location.href = `//m.boqii.com/article/${id}.html?from=app`;
  } else {
    window.location.href = `//m.boqii.com/article/${id}.html`;
  }
});

$ (
  '.article-recommend-list'
).on ('click', '.article-recommend-item', function () {
  let id = $ (this).attr ('aid');
  if (isFromApp) {
    window.location.href = `//m.boqii.com/article/${id}.html?from=app`;
  } else {
    window.location.href = `//m.boqii.com/article/${id}.html`;
  }
});

// 商品详情
$ ('.hot-recommend-item').click (function () {
  let id = $ (this).attr ('gid');

  if (isFromApp) {
    BQJSAPI.navigateToMallProductDetail ({
      goodsId: id,
      onMenuShareMessage: {
        title: '',
        content: '',
        link: '',
        imgUrl: '',
      },
    });
  } else {
    window.location.href = `//s.boqii.com/detail-${id}.html?GoodsId=${id}`;
  }
});

$ ('.ulike-avatar-con').click (function () {
  let uid = $ (this).attr ('uid');
  if (isFromApp) {
    BQJSAPI.navigateToPerson ({ID: uid});
  } else {
    window.location.href = `//m.boqii.com/community/homepage/${uid}`;
  }
});
