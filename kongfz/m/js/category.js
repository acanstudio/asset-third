webpackJsonp([13], {
    134 : function(e, t, n) {
        "use strict";
        e.exports = {
            imgLoad: function(e, t) {
                function n() {
                    for (var e = !!navigator.userAgent.match(/AppleWebKit\b/gim), t = document.body.scrollTop || document.documentElement.scrollTop, n = document.documentElement.clientHeight, s = e ? document.body.scrollLeft: document.documentElement.scrollLeft, c = document.documentElement.clientWidth, d = 0; d < a.length; d++) {
                        var l = a[d].offsetHeight,
                        u = i(a[d]),
                        m = r(a[d]),
                        p = a[d].clientWidth;
                        if (u + l >= t && u <= t + n && m >= s && p + m <= s + c) for (var f = $(a[d]).find(o), g = 0; g < f.length; g++) {
                            var v = i(f[g]),
                            h = r(f[g]),
                            w = f[g].clientWidth,
                            b = $(f[g]).attr("data-show");
                            if (v >= t && v <= t + n && h >= s && w + h <= c + s && "1" != b) {
                                $(f[g]).attr("data-show", "1");
                                for (var x = $(f[g]).find("img"), T = 0; T < x.length; T++) {
                                    var _ = x.eq(T).attr("src"),
                                    k = x.eq(T).attr("data-src"),
                                    y = x.eq(T).attr("data-loaded"); ! y && k && x.eq(T).attr({
                                        src: k
                                    }).on("load",
                                    function() {
                                        x.attr({
                                            "data-loaded": 1
                                        })
                                    }).on("error",
                                    function() {
                                        x.eq(T).attr({
                                            src: _,
                                            "data-loaded": 1
                                        })
                                    })
                                }
                            }
                        }
                    }
                }
                var a = $(e),
                o = t,
                i = function(e) {
                    try {
                        var t = 0;
                        do {
                            t += e.offsetTop
                        } while ("BODY" != ( e = e . offsetParent ).nodeName);
                        return t
                    } catch(e) {}
                },
                r = function(e) {
                    var t = 0;
                    try {
                        do {
                            t += e.getBoundingClientRect().left
                        } while ("BODY" != ( e = e . offsetParent ).nodeName);
                        return t
                    } catch(e) {}
                };
                n(),
                $(window).bind("scroll", n)
            }
        }
    },
    296 : function(e, t, n) {
        "use strict";
        n(297);
        var a = n(83),
        o = function(e) {
            return e && e.__esModule ? e: {
            default:
                e
            }
        } (a);
        n(76);
        var i = n(134),
        r = baseInfo.site; ({
            dom: {
                $container: $("#container"),
                $load: $(".load-box"),
                $listTempl: $("#list-template")
            },
            init: function(e) {
                this.createList()
            },
            initEvent: function() {
                var e = this;
                this.bindEvent([{
                    agent: ".menuItem",
                    event: "click",
                    callback: function() {
                        var e = $(this).attr("data-index"),
                        t = parseInt($("#title" + e).offset().top);
                        $(window).scrollTop(t - 44),
                        $(this).addClass("active").siblings().removeClass("active")
                    }
                }]),
                this.bindEvent([{
                    agent: window,
                    event: "scroll",
                    callback: function() {
                        e.onScroll()
                    }
                }]),
                (0, i.imgLoad)(".itemList", ".item")
            },
            bindEvent: function(e) {
                e.forEach(function(e) {
                    e.target ? $(e.agent).on(e.event, e.target, e.callback) : $(e.agent).on(e.event, e.callback)
                })
            },
            onScroll: function() {
                var e = $(window).scrollTop() + 44,
                t = parseInt($("#title1").offset().top),
                n = parseInt($("#title2").offset().top),
                a = parseInt($("#title3").offset().top),
                o = parseInt($("#title4").offset().top);
                e + window.innerHeight + 10 > o ? $('.menuItem[data-index="3"]')[0].classList[1] || $('.menuItem[data-index="3"]').addClass("active").siblings().removeClass("active") : e < t ? $('.menuItem[data-index="0"]')[0].classList[1] || $('.menuItem[data-index="0"]').addClass("active").siblings().removeClass("active") : e >= t && e < n ? $('.menuItem[data-index="1"]')[0].classList[1] || $('.menuItem[data-index="1"]').addClass("active").siblings().removeClass("active") : e >= n && e < a ? $('.menuItem[data-index="2"]')[0].classList[1] || $('.menuItem[data-index="2"]').addClass("active").siblings().removeClass("active") : e >= a && ($('.menuItem[data-index="3"]')[0].classList[1] || $('.menuItem[data-index="3"]').addClass("active").siblings().removeClass("active"))
            },
            createList: function() {
                return true;
                var e = this,
                t = {};
                t.bizType = "wap",
                t.host = "msearch",
                $.ajax({
                    type: "GET",
                    //url: "/api-search/product/home/mobile",
                    url: "http://api.91zuiai.com/culture/book/category",
                    data: t,
                    success: function(t) {
                        if (t.status && t.data.section && t.data.section.length > 0) {
                            e.dom.$load.hide();
                            var n = {
                                data: t.data.section,
                                site: r
                            },
                            a = o.
                        default.template(e.dom.$listTempl.html());
                            e.dom.$container.html(a(n)),
                            e.initEvent()
                        } else e.dom.$load.html("数据异常，请稍后再试!")
                    },
                    error: function(t) {
                        e.dom.$load.html("数据异常，请稍后再试!")
                    }
                })
            }
        }).init()
    },
    297 : function(e, t) {},
    72 : function(e, t) {},
    76 : function(e, t, n) {
        "use strict";
        n(72),
        {
            site: topbar_site,
            dom: {
                $header: $("header"),
                $block: $(".block"),
                $forUser: $("#forUser"),
                $body: $("body")
            },
            init: function() {
                var e = this;
                e.wxCheck(),
                e.initEvent(),
                e.getMsgNum(),
                e.localChan(),
                e.getCarNumn()
            },
            initEvent: function() {
                var e = this;
                e.dom.$header.on("click", ".more-icon",
                function() {
                    e.menuToggle.apply(this)
                })
            },
            menuToggle: function() {
                var e = $(this);
                "1" == $(this).attr("data-toggle") ? ($(".nav-lay-out").hide(), $(".lay_bg").remove(), e.attr("data-toggle", "0")) : ($(".nav-lay-out").show(), e.attr("data-toggle", "1"), $("body").append('<div class="lay_bg"></div>'), $(".lay_bg").on("touchstart",
                function(e) {
                    $(".nav-lay-out").hide(),
                    $(".more-icon").attr("data-toggle", "0"),
                    setTimeout(function() {
                        $(".lay_bg").remove()
                    },
                    400),
                    e.stopPropagation()
                }))
            },
            getMsgNum: function() {
                var e = this;
                $.ajax({
                    type: "get",
                    url: e.site.m + "api-msg/Interface/User/getUnreadNum",
                    dataType: "jsonp",
                    jsonp: "callback",
                    jsonpCallback: "jsonpCallback",
                    success: function(e) {
                        if (e > 0) {
                            var t = e;
                            t > 100 && (t = "99+"),
                            $(".more-icon").html('<i class="msg_num">' + t + "</i>"),
                            $(".msg-link").append('<span class="msg-link_num">' + t + "</span >")
                        }
                    },
                    error: function(e) {}
                })
            },
            getCarNumn: function() {
                return true;
                var e = this;
                $.ajax({
                    type: "get",
                    //url: e.site.m + "api-cart/jsonp/getCartNum",
                    url: "http://api.91zuiai.com/culture/book/category",
                    success: function(e) {
                        if (e.result > 0) {
                            var t = e.result;
                            t > 100 && (t = "99+"),
                            $(".car-link").append('<span class="car-link_num">' + t + "</span >")
                        }
                    },
                    error: function(e) {}
                })
            },
            localChan: function() {
                var e = this;
                e.dom.$forUser.find(".home-link").attr("href", e.site.m),
                e.dom.$forUser.find(".search-link").attr("href", e.site.m + "newsearch/"),
                e.dom.$forUser.find(".car-link").attr("href", e.site.m + "cart/?type=other")
            },
            wxCheck: function() {
                var e = navigator.userAgent.toLowerCase(),
                t = this;
                "micromessenger" == e.match(/MicroMessenger/i) ? window.WeixinJSBridge && WeixinJSBridge.invoke ? t.miniTopBar() : document.addEventListener("WeixinJSBridgeReady", t.miniTopBar.apply(t), !1) : "undefined" != typeof swan && "baiduboxapp" == e.match(/baiduboxapp/i) ? swan.webView.getEnv(function(e) {
                    e.smartprogram ? t.miniTopBar() : t.appTopBar()
                }) : t.appTopBar()
            },
            miniTopBar: function() {
                var e = this;
                window.__wxjs_environment && "miniprogram" === window.__wxjs_environment ? (e.dom.$header.hide(), e.dom.$block.hide()) : (navigator.userAgent.toLowerCase().match(/baiduboxapp/i), e.dom.$header.hide(), e.dom.$block.hide())
            },
            appTopBar: function() {
                var e = this;
                navigator.userAgent.indexOf("KFZ_COM") > -1 ? (e.dom.$header.hide(), e.dom.$block.hide()) : (e.dom.$header.show(), e.dom.$block.show())
            }
        }.init()
    },
    83 : function(e, t, n) {
        var a; !
        function() {
            "use strict";
            function o(e, t, n) {
                return ("string" == typeof t ? t: t.toString()).replace(e.define || d,
                function(t, a, o, i) {
                    return 0 === a.indexOf("def.") && (a = a.substring(4)),
                    a in n || (":" === o ? (e.defineParams && i.replace(e.defineParams,
                    function(e, t, o) {
                        n[a] = {
                            arg: t,
                            text: o
                        }
                    }), a in n || (n[a] = i)) : new Function("def", "def['" + a + "']=" + i)(n)),
                    ""
                }).replace(e.use || d,
                function(t, a) {
                    e.useParams && (a = a.replace(e.useParams,
                    function(e, t, a, o) {
                        if (n[a] && n[a].arg && o) {
                            var i = (a + ":" + o).replace(/'|\\/g, "_");
                            return n.__exp = n.__exp || {},
                            n.__exp[i] = n[a].text.replace(new RegExp("(^|[^\\w$])" + n[a].arg + "([^\\w$])", "g"), "$1" + o + "$2"),
                            t + "def.__exp['" + i + "']"
                        }
                    }));
                    var i = new Function("def", "return " + a)(n);
                    return i ? o(e, i, n) : i
                })
            }
            function i(e) {
                return e.replace(/\\('|\\)/g, "$1").replace(/[\r\t\n]/g, " ")
            }
            var r, s = {
                name: "doT",
                version: "1.1.1",
                templateSettings: {
                    evaluate: /\{\{([\s\S]+?(\}?)+)\}\}/g,
                    interpolate: /\{\{=([\s\S]+?)\}\}/g,
                    encode: /\{\{!([\s\S]+?)\}\}/g,
                    use: /\{\{#([\s\S]+?)\}\}/g,
                    useParams: /(^|[^\w$])def(?:\.|\[[\'\"])([\w$\.]+)(?:[\'\"]\])?\s*\:\s*([\w$\.]+|\"[^\"]+\"|\'[^\']+\'|\{[^\}]+\})/g,
                    define: /\{\{##\s*([\w\.$]+)\s*(\:|=)([\s\S]+?)#\}\}/g,
                    defineParams: /^\s*([\w$]+):([\s\S]+)/,
                    conditional: /\{\{\?(\?)?\s*([\s\S]*?)\s*\}\}/g,
                    iterate: /\{\{~\s*(?:\}\}|([\s\S]+?)\s*\:\s*([\w$]+)\s*(?:\:\s*([\w$]+))?\s*\}\})/g,
                    varname: "it",
                    strip: !0,
                    append: !0,
                    selfcontained: !1,
                    doNotSkipEncoded: !1
                },
                template: void 0,
                compile: void 0,
                log: !0
            };
            s.encodeHTMLSource = function(e) {
                var t = {
                    "&": "&#38;",
                    "<": "&#60;",
                    ">": "&#62;",
                    '"': "&#34;",
                    "'": "&#39;",
                    "/": "&#47;"
                },
                n = e ? /[&<>"'\/]/g: /&(?!#?\w+;)|<|>|"|'|\//g;
                return function(e) {
                    return e ? e.toString().replace(n,
                    function(e) {
                        return t[e] || e
                    }) : ""
                }
            },
            r = function() {
                return this || (0, eval)("this")
            } (),
            void 0 !== e && e.exports ? e.exports = s: void 0 !== (a = function() {
                return s
            }.call(t, n, t, e)) && (e.exports = a);
            var c = {
                append: {
                    start: "'+(",
                    end: ")+'",
                    startencode: "'+encodeHTML("
                },
                split: {
                    start: "';out+=(",
                    end: ");out+='",
                    startencode: "';out+=encodeHTML("
                }
            },
            d = /$^/;
            s.template = function(e, t, n) {
                t = t || s.templateSettings;
                var a, l, u = t.append ? c.append: c.split,
                m = 0,
                p = t.use || t.define ? o(t, e, n || {}) : e;
                p = ("var out='" + (t.strip ? p.replace(/(^|\r|\n)\t* +| +\t*(\r|\n|$)/g, " ").replace(/\r|\n|\t|\/\*[\s\S]*?\*\//g, "") : p).replace(/'|\\/g, "\\$&").replace(t.interpolate || d,
                function(e, t) {
                    return u.start + i(t) + u.end
                }).replace(t.encode || d,
                function(e, t) {
                    return a = !0,
                    u.startencode + i(t) + u.end
                }).replace(t.conditional || d,
                function(e, t, n) {
                    return t ? n ? "';}else if(" + i(n) + "){out+='": "';}else{out+='": n ? "';if(" + i(n) + "){out+='": "';}out+='"
                }).replace(t.iterate || d,
                function(e, t, n, a) {
                    return t ? (m += 1, l = a || "i" + m, t = i(t), "';var arr" + m + "=" + t + ";if(arr" + m + "){var " + n + "," + l + "=-1,l" + m + "=arr" + m + ".length-1;while(" + l + "<l" + m + "){" + n + "=arr" + m + "[" + l + "+=1];out+='") : "';} } out+='"
                }).replace(t.evaluate || d,
                function(e, t) {
                    return "';" + i(t) + "out+='"
                }) + "';return out;").replace(/\n/g, "\\n").replace(/\t/g, "\\t").replace(/\r/g, "\\r").replace(/(\s|;|\}|^|\{)out\+='';/g, "$1").replace(/\+''/g, ""),
                a && (t.selfcontained || !r || r._encodeHTML || (r._encodeHTML = s.encodeHTMLSource(t.doNotSkipEncoded)), p = "var encodeHTML = typeof _encodeHTML !== 'undefined' ? _encodeHTML : (" + s.encodeHTMLSource.toString() + "(" + (t.doNotSkipEncoded || "") + "));" + p);
                try {
                    return new Function(t.varname, p)
                } catch(e) {
                    throw "undefined" != typeof console && console.log("Could not create a template function: " + p),
                    e
                }
            },
            s.compile = function(e, t) {
                return s.template(e, null, t)
            }
        } ()
    }
},
[296]);
