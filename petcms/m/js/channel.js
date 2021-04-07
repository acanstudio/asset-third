(function (root) {
  root.appVersion = '4_5_3';
  root.cpsUtmSource = [
    'sogouwap-ppc',
    'sm-ppc',
    '360wap-ppc',
    'baiduwap-ppc',
    'baiduwap01-ppc',
  ];
}) (window);

/**
 * @Function判断手机设备
 * @return "IOS","ANDROID"
 */
var Device = function () {
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

/**
 * @Function 判断是否是微信浏览器
 */
var isWeiXin = function () {
  var ua = window.navigator.userAgent.toLowerCase ();
  if (ua.match (/MicroMessenger/i) == 'micromessenger') {
    return true;
  } else {
    return false;
  }
};

/**
 * 判断是否在微信小程序中打开
 * @param {Function} cb
 */
let isInWxMiniProgram = function (cb) {
  cb = cb || function () {};
  if (
    isWeiXin () &&
    typeof wx !== 'undefined' &&
    wx.miniProgram &&
    typeof wx.miniProgram.getEnv === 'function'
  ) {
    wx.miniProgram.getEnv (function (res) {
      cb (res && res.miniprogram);
    });
  } else {
    cb (false);
  }
};

/**
 * @Function 存cookie or localStorage
 * @用法 1. 存cookie storageInfo("cookie").set("name","andy"......);
 *      2. 存localStorage storageInfo("localStorage").set("name","nady")
 */
var storageInfo = function (type) {
  var supportStorage = type === 'localStorage' ? true : false;

  return {
    set: function (name, value, expires, path, domain = '.boqii.com') {
      if (!~location.hostname.indexOf ('.boqii.com')) {
        domain = location.hostname;
      }
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
    clear: function (name, path, domain = '.boqii.com') {
      if (!~location.hostname.indexOf ('.boqii.com')) {
        domain = location.hostname;
      }
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
};

isInWxMiniProgram (function (iswepp) {
  if (!iswepp) {
    storageInfo ('cookie').clear ('coms');
  }
});

if (~location.href.indexOf ('&from=app?')) {
  window.location.href = location.href.replace ('&from=app?', '?from=app&');
}

(function () {
  window._smReadyFuncs = [];
  window.SMSdk = {
    ready: function (fn) {
      fn && _smReadyFuncs.push (fn);
    },
  };
  window._smConf = {
    organization: 'rQ4s5hnrh9LiRtfkPA4k', //􏱊􏰇organization􏰚􏱴􏰹 􏱊􏰇 accessKey.
    staticHost: 'static.fengkongcloud.com',
  };
  var url = (function () {
    var originHost = 'static2.fengkongcloud.com';
    var isHttps = 'https:' === document.location.protocol;
    var protocol = isHttps ? 'https://' : 'http://';
    var fpJsPath = '/fpv2.js';
    var url = protocol + _smConf.staticHost + fpJsPath;
    var ua = navigator.userAgent.toLowerCase ();
    var isWinXP = /windows\s(?:nt\s5.1)|(?:xp)/.test (ua);
    var isLowIE = /msie\s[678]\.0/.test (ua);
    if (isHttps && isWinXP && isLowIE) {
      url = protocol + originHost + fpJsPath;
    }
    return url;
  }) ();
  var sm = document.createElement ('script');
  var s = document.getElementsByTagName ('script')[0];
  sm.src = url;
  s.parentNode.insertBefore (sm, s);
}) ();
