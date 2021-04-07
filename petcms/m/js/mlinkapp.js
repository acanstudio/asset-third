console.log('---------------')
// $ (function () {
//   alert (2);

//   // 魔窗打开
//   /*
//         type: 判断是安卓还是ios
//         param: 协议参数
//       **/
//   function mlinkFuc (type, param) {
//     alert (type);
//     alert (param);
//     if (BQ.Device () == 'ANDRIOD') {
//       param = encodeURIComponent (param);
//     }
//     let link = type == 'IOS'
//       ? `https://afwadv.mlinks.cc/AeXY?${param}`
//       : `https://afwadv.mlinks.cc/Ad1A?dataValue=${param}`;
//     new Mlink ({
//       mlink: link, // 在魔窗后台配置好的短链URL
//       button: document.querySelectorAll ('.open-in-app'), //必须是A标签,自动识别
//       autoRedirect: false, // 尝试自动打开在魔窗后台配置的mlink中的App
//     });
//   }
//   (function () {
//     alert ('inner');
//     let gourl = window.location.href || '';
//     gourl = ~gourl.indexOf ('?') ? gourl + '&from=app' : gourl + '?from=app';
//     var appTitle = document.getElementById ('appTitle');
//     var value = (appTitle && appTitle.value) || '';
//     var url = '';

//     if (BQ.Device () == 'IOS') {
//       // ios协议
//       url =
//         'bqimallplusapp://html5ActivityRecommendedVC?param_Html5URL=' +
//         encodeURIComponent (gourl) +
//         '&param_TITLE=' +
//         value;
//       mlinkFuc ('IOS', url);
//     } else {
//       url =
//         'boqii://h5?URL=' +
//         encodeURIComponent (gourl) +
//         '&TITLE=' +
//         document.getElementById ('appTitle').value;
//       mlinkFuc ('ANDRIOD', url);
//     }
//   }) ();
// });
