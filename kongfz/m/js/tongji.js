(function () {
    var host = window.location.protocol + '//' + window.location.host + '/';
    // 百度统计
    !/https:\/\//.test(host) && setTimeout(function () {
        var _hmt = _hmt || [];
        // kongfz.cn
        if (/kongfz\.cn/i.test(host)) {
            (function () {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?e9887cc33a1d80028a23ab3a80d16a5a";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        }
        // kongfz.com
        else if (/kongfz\.com/i.test(host)) {
            (function () {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?bca7840de7b518b3c5e6c6d73ca2662c";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
            // shequ.kongfz.com（社区）
            if (/shequ\.kongfz\.com/i.test(host)) {
                (function () {
                    var hm = document.createElement("script");
                    hm.src = "https://hm.baidu.com/hm.js?f8663b704cbf53aa8db7ee7ebfa7cf70";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(hm, s);
                })();
            }
            // 专门用于追踪百度竞价广告的统计代码（kongfz.com独有）
            (function () {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?33be6c04e0febc7531a1315c9594b136";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        }
        // gujiushu.com
        else if (/gujiushu\.com/i.test(host)) {
            (function () {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?f8663b704cbf53aa8db7ee7ebfa7cf70";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        }
    }, 1000);
})();
