<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>孔夫子旧书网：图书及艺术收藏品交易拍卖平台</title>
        <meta content="图书,书籍,古籍,旧书,旧书店,旧书网站,网上书店,古旧书,二手书,古籍善本,艺术品,收藏品,收藏品交易,图书网购,拍卖,拍卖网站" name="keywords">
        <meta content="孔夫子旧书网是国内专业的古旧书交易平台；目前已汇集了全国上万家网上书店与书摊，展示多达9000万种图书书籍，包含大量极具收藏价值的古旧珍本（明清、民国古籍善本、小人书、珍本期刊、名人墨迹、民国珍本、绝版书等）。孔网为广大书友提供二手图书买卖与收藏品交易市场；开二手书店、网上买书、网上卖书、珍品拍卖，首选孔夫子旧书网。" name="description">
        <meta charset="utf-8">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="no">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no,email=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover">
        <script type="text/javascript">var TINGYUN = function(t, e, n) {
                if (/(MSIE [0-7].\d+)/.test(navigator.userAgent)) {
                    return {
                        TY_INFO: 'Browser Version Not Support to load TINGYUN Agent'
                    };
                }
                function r(t) {
                    return JSON.parse(t)
                }
                function i(t) {
                    return JSON.stringify(t)
                }
                function a(t) {
                    var e = !!t && "length" in t && t.length,
                    n = typeof t;
                    return "function" !== n && ("array" === n || 0 === e || "number" == typeof e && e > 0 && e - 1 in t)
                }
                function o(t, e, n) {
                    var r, i = 0;
                    if (t) if (a(t)) for (r = t.length; i < r && e.call(t[i], t[i], i) !== !1; i++);
                    else for (i in t) if ((n || Object.prototype.hasOwnProperty.call(t, i)) && e.call(t[i], t[i], i) === !1) break;
                    return t
                }
                function u(t) {
                    return function(e) {
                        return "Array" === t && Array.isArray ? Array.isArray(e) : Object.prototype.toString.call(e) === "[object " + t + "]"
                    }
                }
                function s(t) {
                    return new Function("return " + t)()
                }
                function c(t) {
                    switch (typeof t) {
                    case "object":
                        if (!t) return null;
                        if (t instanceof Array) {
                            var e = Se.call(t);
                            return o(e,
                            function(t, n) {
                                e[n] = c(t)
                            }),
                            "[" + e.join(",") + "]"
                        }
                        if (t instanceof Date) return t.getTime().toString();
                        var n = "";
                        return o(t,
                        function(t, e) {
                            ge(t) || (n += c(e) + ":" + c(t) + ",")
                        }),
                        n && (n = n.substr(0, n.length - 1)),
                        "{" + n + "}";
                    case "string":
                        return Ee + t.replace(we, "\\$1").replace(Te, "\\n") + Ee;
                    case "number":
                        return isNaN(t) ? null: t;
                    case "boolean":
                        return t;
                    case "function":
                        return c(t.toString());
                    case "undefined":
                    default:
                        return '"undefined"'
                    }
                }
                function f(t) {
                    return t && ve(t) ? de(t) : t
                }
                function l(t, e, n, r) {
                    return t.addEventListener(e, n, r)
                }
                function d(t, e, n) {
                    return t.removeEventListener(e, n)
                }
                function h(t, e, n) {
                    return t.attachEvent("on" + e, n)
                }
                function v(t, e, n) {
                    return t.detachEvent("on" + e, n)
                }
                function p(t, e, n, r) {
                    var i = function() {
                        return qe(t, e, i),
                        n.apply(this, arguments)
                    };
                    return Ce(t, e, i, r)
                }
                function g(t, e) {
                    return Function.prototype.apply.apply(t, e)
                }
                function m(t, e) {
                    return function() {
                        t.apply(e, arguments)
                    }
                }
                function y(t) {
                    return Oe ? Oe(t) : t
                }
                function b(t) {
                    var e = arguments.length;
                    if (e < 2 || !t) return t;
                    var n = Se.call(arguments, 1);
                    return o(n,
                    function(e) {
                        o(e,
                        function(e, n) {
                            t[n] = e
                        })
                    }),
                    t
                }
                function _(t, e) {
                    for (var n = -1,
                    r = 0,
                    i = null == t ? 0 : t.length, a = []; ++n < i;) {
                        var o = t[n];
                        e(o, n, t) && (a[r++] = o)
                    }
                    return a
                }
                function x(t, e) {
                    return t ? e ? t.replace(/\{(\w+.?\w+)\}/g,
                    function(t, n) {
                        return e[n] || ""
                    }).replace(/\{(\d+)\}/g,
                    function(t, n) {
                        return e[n] || ""
                    }) : t: ""
                }
                function S(t, e, n) {
                    var r;
                    if (null == t) return - 1;
                    var i = Object(t),
                    a = i.length >>> 0;
                    if (0 === a) return - 1;
                    var o = +n || 0;
                    if (Math.abs(o) === 1 / 0 && (o = 0), o >= a) return - 1;
                    for (r = Math.max(o >= 0 ? o: a - Math.abs(o), 0); r < a;) {
                        if (r in i && i[r] === e) return r;
                        r++
                    }
                    return - 1
                }
                function E(t, e) {
                    var n = null == t ? 0 : t.length;
                    if (!n) return - 1;
                    for (var r = n; r--;) if (t[r] === e) return r;
                    return r
                }
                function w(t) {
                    return setTimeout(t, 0)
                }
                function T() {}
                function k() {
                    return + new Date
                }
                function C(t) {
                    return function() {
                        if (null !== t) {
                            var e = t;
                            t = null,
                            e.apply(this, arguments)
                        }
                    }
                }
                function q(t) {
                    return t ? ve(t) ? t.length: e.ArrayBuffer && t instanceof ArrayBuffer ? t.byteLength: e.Blob && t instanceof Blob ? t.size: t.length ? t.length: 0 : 0
                }
                function O(t) {
                    return Ie !== Ne && /^https/i.test(t && t.protocol || Ie) ? "https:": Ne
                }
                function R(t, e, n, r) {
                    var i = null;
                    return t && e && (i = O(r) + "//" + t + e, n && (i += "?", o(n,
                    function(t, e) {
                        var n = [y(e), "=", y(t), "&"];
                        i += n.join("")
                    }), i += "__r=" + k())),
                    i
                }
                function I() {
                    this.events = {}
                }
                function N(t) {
                    return ! (t in fn) || fn[t]
                }
                function H(t) {
                    var e = un.cookie.match(new RegExp("(^|;\\s*)(" + t + ")=([^;]*)"));
                    return e ? e[3] : null
                }
                function A(t, e, n, r) {
                    var i = t + "=" + e;
                    if (n) {
                        var a = new Date;
                        a.setTime(a.getTime() + 1e3 * n),
                        i += ";expires=" + a.toGMTString()
                    }
                    r && (i += ";path=" + r),
                    un.cookie = i
                }
                function j(t, e, n) {
                    n = n || T;
                    var r = new Image;
                    Ce(r, De,
                    function() {
                        "loaded" != r.readyState && 4 != r.readyState || n(null)
                    },
                    !1),
                    Ce(r, je,
                    function() {
                        n(null)
                    },
                    !1),
                    Ce(r, Ae,
                    function() {
                        n(Ae)
                    },
                    !1),
                    r.src = t
                }
                function L(t, e, n, r) {
                    ge(n) && (r = n);
                    var i = new XDomainRequest;
                    i.open(En, t),
                    i.onload = function() {
                        r(null, i.responseText)
                    },
                    i.onerror = function(t) {
                        r(t)
                    },
                    i.send(he(e))
                }
                function M(t, e, n) {
                    var r = un.createElement(t);
                    try {
                        for (var i in e) r[i] = e[i]
                    } catch(a) {
                        var o = "<" + t;
                        for (var i in e) o += " " + i + '="' + e[i] + '"';
                        o += ">",
                        n || (o += "</" + t + ">"),
                        r = un.createElement(o)
                    }
                    return r
                }
                function B(t, e, n, r) {
                    ge(n) && (r = n);
                    var i = M("div", {
                        style: Sn
                    }),
                    a = M("iframe", {
                        name: "ty_form",
                        width: 0,
                        height: 0,
                        style: Sn
                    }),
                    o = M("form", {
                        style: Sn,
                        action: t,
                        enctype: "application/x-www-form-urlencoded",
                        method: "post",
                        target: "ty_form"
                    }),
                    u = M("input", {
                        name: "data",
                        type: "hidden"
                    },
                    !0);
                    u.value = he(e),
                    o.appendChild(u),
                    i.appendChild(a),
                    i.appendChild(o),
                    un.body.appendChild(i),
                    o.submit(),
                    a.onreadystatechange = function() {
                        a.readyState !== ze && 4 !== a.readyState || (r(null, a.innerHTML), un.body.removeChild(i))
                    }
                }
                function D(t, e, n, r) {
                    ge(n) && (r = n, n = null);
                    var i = C(r),
                    a = new sn;
                    a[We] = !0,
                    a.overrideMimeType && a.overrideMimeType("text/html"),
                    a.onreadystatechange = function() {
                        4 == a.readyState && 200 == a.status && i(null, a.responseText)
                    },
                    a.onerror = i,
                    e = he(e);
                    try {
                        a.open(En, t, !0)
                    } catch(o) {
                        return B(t, e, i)
                    }
                    for (var u in n) a.setRequestHeader(u, n[u]);
                    a.send(e)
                }
                function z(t, e, n, r) {
                    ge(n) && (r = n, n = null);
                    var i = pn.sendBeacon(t, he(e));
                    i ? r && r() : D(t, e, n, r)
                }
                function P(t, e, n) {
                    if (t && n && ge(n)) {
                        var r = t[e];
                        if (!r || !r._wrapped) {
                            var i = n(r);
                            return i && (i._wrapped = !0),
                            t[e] = i,
                            i
                        }
                    }
                }
                function F(t) {
                    Tn && t()
                }
                function U(t) {
                    return function() {
                        Tn && t.apply(this, arguments)
                    }
                }
                function X() {
                    Tn = !1
                }
                function G() {
                    Nn.on(je, C(function() {
                        t();
                        var e = k();
                        F(function() {
                            kn.load = e
                        }),
                        Ln.loadEventEnd = e
                    })),
                    o([je, Le, Me, Be],
                    function(t) {
                        Ce(e, t,
                        function(e) {
                            F(function() { (kn.e[t] || (kn.e[t] = [])).push(k())
                            }),
                            Nn.emit(t, e)
                        })
                    });
                    var t = C(function() {
                        var t = k();
                        F(function() {
                            kn.end = t
                        }),
                        Ln.domContentLoadedEventStart = t,
                        un.querySelectorAll && (qn.resources = qn.resources || [], o(un.querySelectorAll("head>link,head>script"),
                        function(t) {
                            var e;
                            "LINK" == t.tagName ? e = t.href: "SCRIPT" != t.tagName || t.defer || t.async || (e = t.src),
                            e && qn.resources.push(e)
                        }))
                    });
                    Ce(un, "DOMContentLoaded", t),
                    Ce(un, De,
                    function(e) {
                        un.readyState === ze && t()
                    });
                    var n = C(function() {
                        Ln.touch = k()
                    });
                    o(["scroll", "click", "keypress"],
                    function(t) {
                        p(un, t, n)
                    });
                    var r = e.requestAnimationFrame; ! r || r.toString().indexOf("[native code]") < 0 || P(e, "requestAnimationFrame",
                    function(t) {
                        return function() {
                            if (!Ln.firstPaint) {
                                var n = k();
                                F(function() {
                                    kn.an.count++,
                                    kn.an.t = n
                                }),
                                Ln.firstPaint = n,
                                e.requestAnimationFrame = t
                            }
                            return t.apply(this, arguments)
                        }
                    })
                }
                function Y(t) {
                    W(t, Hn)
                }
                function J(t) {
                    W(t, An)
                }
                function W(t, e) {
                    var n = "ok";
                    return t ? void e.push(t) : n = e.length ? e.join("\n") : n
                }
                function $() {
                    var t = this;
                    t.xhrs = {},
                    t.errs = [],
                    I.call(t)
                }
                function K() {
                    if (fn && fn.did_cookie) {
                        var t = H(fn.did_cookie);
                        if (null != t) return t
                    }
                    var e = bn(Fe);
                    return e ? e: _n(Fe, He(), Xe)
                }
                function Q() {
                    var t = H(Ue);
                    return t || (t = He(), A(Ue, t, null, "/")),
                    t
                }
                function V(t) {
                    function e(t, e, r) {
                        var i = r || "log",
                        a = n[t] || (n[t] = {});
                        a[i] = a[i] || "",
                        a[i] += e
                    }
                    var n = {},
                    r = Y();
                    if (e("Status", r, "ok" !== r), e("Debug", J()), o(Pn,
                    function(t, n) {
                        e("Timeline", n + ": " + t.toString())
                    }), !t && Fn) console.log("[TingYun Agent Diagnosis]\n"),
                    o(n,
                    function(t, e) {
                        var n = console[e];
                        o(n,
                        function(t, e) {
                            console[e](t)
                        })
                    });
                    else {
                        if (t !== Je) return he(n);
                        vn.href = vn.href + "#" + he(n)
                    }
                }
                function Z(t, e) {
                    this.flags = 0,
                    ge(t.create) && (this.create = t.create, this.flags |= Un),
                    ge(t.before) && (this.before = t.before, this.flags |= Xn),
                    ge(t.after) && (this.after = t.after, this.flags |= Gn),
                    ge(t.error) && (this.error = t.error, this.flags |= Yn),
                    this.data = e
                }
                function tt(t, e) {
                    if (!Wn) {
                        if (!me(t) || !t) throw new TypeError("callbacks arguments must be an object");
                        return Wn = new Z(t, e)
                    }
                }
                function et(t) {
                    var e = Wn.data;
                    if (0 !== (Wn.flags & Un)) {
                        var n = Wn.create(Wn.data);
                        void 0 !== n && (e = n)
                    }
                    return function r() {
                        0 !== (Wn.flags & Xn) && Wn.before(this, e);
                        var n = r;
                        n._ && (n._ = 1);
                        try {
                            var i = t.apply(this, arguments)
                        } catch(a) {
                            throw 0 !== (Wn.flags & Yn) && Wn.error(e, a),
                            a
                        }
                        return 0 !== (Wn.flags & Gn) && Wn.after(this, e),
                        i
                    }
                }
                function nt(t) {
                    return ! Wn || Wn.flags <= 0 ? t: et(t)
                }
                function rt() {
                    function t(t) {
                        return function(e) {
                            var n = Se.call(arguments, 0);
                            ge(e) && (n[0] = nt(e));
                            var r = this;
                            try {
                                return t.apply(r, n)
                            } catch(i) {}
                            return g(t, [r, n])
                        }
                    }
                    P(e, "setTimeout", t),
                    P(e, "setInterval", t)
                }
                function it() {
                    this.id = null,
                    this.active = null,
                    this._set = []
                }
                function at() {
                    rt();
                    var t = new it;
                    return t.id = tt({
                        create: function() {
                            return t.active
                        },
                        before: function(e, n) {
                            n && t.enter(n)
                        },
                        after: function(e, n) {
                            n && t.exit(n)
                        },
                        error: function(e, n) {
                            if (e) {
                                try {
                                    var r = "moduleId";
                                    n[r] = e[r]
                                } catch(i) {}
                                t.exit(e)
                            }
                        }
                    }),
                    t
                }
                function ot() {
                    return Kn || ($n = at(), Kn = !0),
                    $n
                }
                function ut(t) {
                    Fn && console.warn(t || "Event key required!")
                }
                function st(t) {
                    t = t || {},
                    this.key = t.key;
                    var e = t.timeout || 6e5;
                    this.i = e ? setTimeout(m(this.fail, this), e) : null,
                    this.status = 1,
                    this.remain = 0,
                    this.xhrs = [],
                    this.s = k(),
                    this.e = null,
                    this.called = this.sent = !1
                }
                function ct(t) {
                    t = t || {};
                    var e = t.key;
                    if (!e) return new ut;
                    if (Zn[e]) return new ut("event " + e + " is executing");
                    Zn[e] = !0;
                    var n = $n.createContext();
                    $n.enter(n);
                    var r = new st(t);
                    return $n.set("event", r),
                    r._end = function() {
                        var t = this; ! t.sent && 0 === t.remain && t.called && t.finish().send(n)
                    },
                    r.end = function(t) {
                        var e = this;
                        return e.called ? void(Fn && console.warn("Event " + this.key + "has ended or failed!")) : (e.called = !0, $n.exit(n), e.status = arguments.length ? t: 1, void e._end())
                    },
                    r.finish = function(t) {
                        var e = this;
                        return e.e = k(),
                        e.i && clearTimeout(e.i),
                        delete Zn[e.key],
                        e
                    },
                    r.fail = function() {
                        this.end(0)
                    },
                    r
                }
                function ft(t) {
                    this.limit = t,
                    this.reset()
                }
                function lt(t, e, n, r) {
                    return String(t) + String(e) + String(n) + String(r)
                }
                function dt(t, e, n, r, i, a, o, u, s) {
                    var c = this;
                    c.id = t,
                    c.time = k(),
                    c.msg = e,
                    c.lineno = r,
                    c.colno = i,
                    c.filename = n,
                    c.count = 1,
                    c.stack = a && a.stack || "",
                    c.module = o,
                    c.trigger = u,
                    c.customObj = s,
                    c.fix();
                    var f = ur[t];
                    c.ep = f ? 0 : 1,
                    ur[t] = !0
                }
                function ht(t) {
                    if (On.pf) {
                        var e = function(t) {
                            var e = [];
                            return o(t,
                            function(t) {
                                e.push(t.toObject())
                            }),
                            e
                        } (or.c);
                        if (!e || !e.length) return null;
                        var r = {
                            fu: ar ? ar: ar++,
                            os: parseInt((k() - (qn.pfStart || n)) / 1e3)
                        };
                        Cn.ulabel && (r.ulabel = Cn.ulabel),
                        Ln.emit("send", "/err1", r, {
                            datas: e
                        },
                        m(or.reset, or))
                    }
                }
                function vt(t, e, n, r, i, a, u) {
                    if (e || !dn) {
                        var s = !1;
                        if (o(cn.domains,
                        function(t) {
                            if (s = t.test(e)) return ! 1
                        }), !s) {
                            var c = i && i.moduleId,
                            f = lt(t, n, r, c),
                            l = or.get(f);
                            l ? l.increase() : (l = new dt(f, t, e, n, r, i, c, a, u), or.add(f, l), Ln.errs && Ln.errs.push(l))
                        }
                    }
                }
                function pt() {
                    var t = e.onerror;
                    e.onerror = function(e, n, r, i, a) {
                        if (vt(e, n, r, i, a, rr), ge(t)) return t.apply(this, arguments)
                    },
                    e.onerror._ty = !0
                }
                function gt() {
                    var t = e.onerror;
                    t && t._ty || pt()
                }
                function mt(t, e) {
                    if (t) {
                        var n = t.message || "",
                        r = t.stack,
                        i = "",
                        a = 0,
                        u = 0;
                        if (r) {
                            var s = r.split(/\n/);
                            o(s,
                            function(t, e) {
                                if (t && (t = t.trim()), t && 0 === t.indexOf("at ")) {
                                    var n = t.indexOf("("),
                                    r = t.indexOf(")");
                                    if (n && r) {
                                        var o = n + 1;
                                        o > r && (o = r);
                                        var s = t.substring(o, r);
                                        if (s) {
                                            var c = s.split(":");
                                            c && c.length > 2 && (i = (c.slice(0, c.length - 2) || []).join(":"), a = +c[c.length - 2], u = +c[c.length - 1])
                                        }
                                    }
                                }
                                if (i && ye(a) && a > 0 && ye(u) && u > 0) return ! 1
                            })
                        }
                        vt(n, i, a, u, {
                            stack: r
                        },
                        nr, e)
                    }
                }
                function yt() {
                    var t = Re();
                    return t ? pt() : Ce(e, Ae,
                    function(t) {
                        var n, r, i, a, o; (t instanceof e.Event || e.ErrorEvent && t instanceof e.ErrorEvent) && (n = t.message || t.error && (t.error.message || t.error.constructor.name) || "", r = t.lineno || 0, i = t.colno || 0, a = t.filename || t.error && t.error.filename || t.target && t.target.baseURI || "", a == un.URL && (a = "#"), o = t.error),
                        vt(n, a, r, i, o, rr)
                    }),
                    Nn.on([je, Le, Me, Be],
                    function(t) {
                        ht()
                    }).on(je,
                    function() {
                        t && w(gt)
                    }),
                    setInterval(ht, ir)
                }
                function bt(t) {
                    try {
                        return f(t)
                    } catch(e) {
                        Y(e && e.message)
                    }
                    return null
                }
                function _t(t, e, n) {
                    return n === Ze && t && t.getResponseHeader ? t.getResponseHeader(e) : n === tn && t.headers ? t.headers.get(e) : null
                }
                function xt(t, e, n) {
                    var r = bt(_t(t, Ve, n || Ze));
                    return r && r.r && toString(r.r) === toString(e.r) ? r: null
                }
                function St(t, e) {
                    t.s_id = e.id,
                    t.s_name = e.action,
                    e.time && (t.s_du = e.time.duration, t.s_qu = e.time.qu),
                    t.t_id = e.trId
                }
                function Et(t) {
                    var e = !1;
                    return o(Rn.xhrs,
                    function(n) {
                        if (n.id === t.id) return e = !0,
                        !1
                    }),
                    e
                }
                function wt(t) {
                    return function e(n, r) {
                        var i = this,
                        a = e;
                        if (a._ && (a._ = 1), !i[We]) {
                            var o = i[Ge] = {};
                            o.method = n,
                            o.url = r,
                            o.id = Rn.uniqueId++;
                            var u = $n.get("event");
                            u && (o.key = u.key, u.remain++)
                        }
                        try {
                            return t.apply(i, arguments)
                        } catch(s) {}
                        return g(t, [i, arguments])
                    }
                }
                function Tt(t) {
                    return function e(n, r) {
                        var i = this,
                        a = e;
                        if (a._ && (a._ = 1), !i[We]) {
                            var o = i[Ge];
                            o && n && "ty_rum_path" === n && (o.ty_rum_path = r)
                        }
                        try {
                            return t.apply(i, arguments)
                        } catch(u) {}
                        return g(t, [i, arguments])
                    }
                }
                function kt(t) {
                    return function e(n) {
                        var r = this,
                        i = e;
                        if (i._ && (i._ = 1), !r[We]) {
                            var a = r[Ge];
                            a && (a.start = k(), a.reqSize = q(n)),
                            Rt(r),
                            r.setRequestHeader && fn.id && a && sr(a.url) && (a.r = k() % 1e9, r.setRequestHeader("X-Tingyun-Id", fn.id + ";r=" + a.r))
                        }
                        try {
                            return t.apply(r, arguments)
                        } catch(o) {}
                        return g(t, [r, arguments])
                    }
                }
                function Ct(t) {
                    o(lr,
                    function(e, n) {
                        var r = "on" + n;
                        t[r] ? P(t, r,
                        function(n) {
                            if (Ot(t, e), ge(n)) return n.apply(this, arguments)
                        }) : t[r] = function() {
                            Ot(t, e)
                        }
                    })
                }
                function qt(t) {
                    o(lr,
                    function(e, n) {
                        Ce(t, n,
                        function() {
                            Ot(t, e)
                        })
                    })
                }
                function Ot(t, e) {
                    t && t[Ge] && (t[Ge].errorCode = e)
                }
                function Rt(t) {
                    function e(e) {
                        return nt(function n() {
                            var r = n;
                            r._ && (r._ = 1),
                            It(t);
                            var i;
                            if (ge(e)) {
                                var a = t[Ge];
                                if (a && 4 == t.readyState) var o = k();
                                i = e.apply(this, arguments),
                                a && 4 == t.readyState && (a.cbTime = k() - o)
                            }
                            return i
                        })
                    }
                    var n = t[dr];
                    if (n) {
                        P(t, dr, e);
                        try {
                            qt(t)
                        } catch(r) {}
                    } else try {
                        Ce(t, De, nt(function i() {
                            var e = i;
                            e._ && (e._ = 1),
                            It(t)
                        })),
                        qt(t)
                    } catch(r) {
                        return void w(function() {
                            Ct(t),
                            P(t, dr, e)
                        })
                    }
                    w(function() {
                        P(t, dr, e)
                    })
                }
                function It(t) {
                    var e = t[Ge];
                    if (e && (e.end = k(), e.readyState = t.readyState, 4 == t.readyState)) {
                        e.status = t.status,
                        e.resSize = Nt(t);
                        var n = $n.get("event");
                        w(function() {
                            if (!Et(e)) {
                                var r = Ht(e, t);
                                n && n.key == e.key && (n.xhrs.push(r), 0 === --n.remain && n._end()),
                                Ln.xhrs && (fr(e), Ln.xhrs[e.url] = r),
                                Rn.xhrs.push(r)
                            }
                        })
                    }
                }
                function Nt(t) {
                    var e = 0;
                    if ("" == t.responseType || "text" == t.responseType) e = q(t.responseText);
                    else if (t.response) e = q(t.response);
                    else try {
                        e = q(t.responseText)
                    } catch(n) {}
                    return e
                }
                function Ht(t, e) {
                    if (t) {
                        var n = t.status,
                        r = {
                            id: t.id,
                            req: t.method + " " + t.url,
                            start: t.start,
                            du: n > 0 ? t.end - t.start: 0,
                            cb: t.cbTime || 0,
                            status: n,
                            err: t.errorCode ? t.errorCode: 0,
                            rec: t.resSize,
                            send: t.reqSize,
                            type: Ze
                        };
                        if (t.ty_rum_path && (r.csheader = t.ty_rum_path), t.r) {
                            var i = xt(e, t);
                            i && St(r, i)
                        }
                        return r
                    }
                }
                function At() {
                    var t = sn && sn.prototype;
                    t ? (P(t, "open", wt), P(t, "setRequestHeader", Tt), P(t, "send", kt)) : sn && (e.XMLHttpRequest = function() {
                        var t = new sn;
                        return P(t, "open", wt),
                        P(t, "send", kt),
                        P(t, "setRequestHeader", Tt),
                        t
                    })
                }
                function jt(t, e) {
                    if (fn.id && t && sr(t.url)) {
                        t.r = k() % 1e9;
                        var n = fn.id + ";r=" + t.r;
                        if (e) {
                            var r = e.headers;
                            _e(r) ? (e.headers || (e.headers = new Headers), e.headers.append(Qe, n)) : me(r) ? e.headers[Qe] = n: r || (e.headers = {},
                            e.headers[Qe] = n)
                        } else e = {
                            headers: {}
                        },
                        e.headers[Qe] = n
                    }
                    return e
                }
                function Lt(t, e) {
                    if (t) {
                        var n = {
                            id: t.id,
                            req: (t.method || "GET") + " " + t.url,
                            start: t.start,
                            du: t.status > 0 ? t.end - t.start: 0,
                            cb: 0,
                            status: t.status,
                            err: 0,
                            rec: 0,
                            send: 0,
                            type: tn
                        };
                        if (t.ty_rum_path && (n.csheader = t.ty_rum_path), t.r) {
                            var r = xt(e, t, tn);
                            r && St(n, r)
                        }
                        return n
                    }
                }
                function Mt(t) {
                    return function e() {
                        var n = e;
                        n._ && (n._ = 1);
                        var r = this,
                        i = Se.call(arguments, 0);
                        return new Promise(function(e, n) {
                            var a, o, u = "GET",
                            s = 1;
                            if (i) if (i.length > 1) a = i[0],
                            o = i[1],
                            s = 1,
                            o && me(o) && (u = o.method);
                            else if (1 === i.length) {
                                var c = i[0];
                                ve(c) ? a = c: c && (me(c) || xe(c)) && (o = c, s = 0, a = c.url, u = c.method)
                            }
                            var f = {
                                id: Rn.uniqueId++,
                                method: u,
                                url: a
                            },
                            l = jt(f, o);
                            if (l && (i[s] = l, l.headers)) {
                                var d;
                                _e(l.headers) ? d = l.headers.get(nn) : me(l.headers) && (d = l.headers[nn]),
                                d && (f[nn] = d)
                            }
                            var h = $n.get("event");
                            h && (f.key = h.key, h.remain++),
                            f.start = k();
                            var v;
                            try {
                                v = t.apply(r, i)
                            } catch(p) {
                                return void n(p)
                            }
                            v.then(nt(function g(t) {
                                var n = g;
                                if (n._ && (n._ = 1), f.end = k(), t) {
                                    f.status = t.status;
                                    var r = $n.get("event");
                                    w(function() {
                                        if (!Et(f)) {
                                            var e = Lt(f, t);
                                            r && r.key == f.key && (r.xhrs.push(e), 0 === --r.remain && r._end()),
                                            Ln.xhrs && (fr(f), Ln.xhrs[f.url] = e),
                                            Rn.xhrs.push(e)
                                        }
                                    })
                                }
                                e(t)
                            }),
                            function(t) {
                                n(t)
                            })
                        })
                    }
                }
                function Bt() {
                    e.fetch && P(e, "fetch", Mt)
                }
                function Dt() {
                    return setInterval(function() {
                        if (On.pf && Rn.xhrs && Rn.xhrs.length) {
                            var t = [];
                            if (o(Rn.xhrs,
                            function(e) {
                                t.push(e)
                            }), t = _(t,
                            function(t) {
                                return (vr.indexOf ? vr.indexOf(t) : S(vr, t)) < 0
                            }), t && t.length) {
                                vr = t;
                                var e = null;
                                Cn.ulabel && (e = {
                                    ulabel: Cn.ulabel
                                }),
                                Ln.emit("send", "/xhr1", e, {
                                    xhr: t
                                },
                                function() {
                                    Rn.xhrs = _(Rn.xhrs,
                                    function(e) {
                                        return (t.indexOf ? t.indexOf(e) : S(t, e)) < 0
                                    })
                                }),
                                Re() && !window.XDomainRequest && (Rn.xhrs = [])
                            }
                        }
                    },
                    hr)
                }
                function zt(t) {
                    if (t && me(t)) {
                        var e = t.du;
                        e || (e = t.status > 0 && t.end && t.start ? t.end - t.start: 0);
                        var n = {
                            req: t.method + " " + t.url,
                            start: t.start,
                            du: e,
                            cb: t.cb || 0,
                            status: t.status || 0,
                            err: t.err || 0,
                            rec: t.rec || 0,
                            send: t.send || 0,
                            type: en
                        };
                        Rn.xhrs || (Rn.xhrs = []),
                        Rn.xhrs.push(n)
                    }
                }
                function Pt() {
                    return fn.disable_ajax || (At(), Bt()),
                    Dt()
                }
                function Ft(t, e) {
                    var n;
                    if (me(t)) n = t;
                    else {
                        if (!ve(t) || void 0 === e) throw new on(zn);
                        n = {},
                        n[t] = e
                    }
                    return o(n,
                    function(t, e) {
                        e in pr ? Cn[pr[e]] = t: Cn[e] = t
                    }),
                    this
                }
                function Ut(t) {
                    if (t) {
                        var e = Cn.firstScreenResources = Cn.firstScreenResources || [];
                        pe(t) || (t = [t]),
                        o(t,
                        function(t) {
                            if (ve(t)) e.push(t);
                            else if (Bn(t)) {
                                var n = t.src || t.href;
                                n && e.push(n)
                            }
                        })
                    }
                }
                function Xt(t) {
                    pe(t) || (t = [t]),
                    o(t,
                    function(t) {
                        if (t) {
                            if (! (t instanceof RegExp)) throw new on("parameter's type requires RegExp"); (cn.domains || (cn.domains = [])).push(t)
                        }
                    })
                }
                function Gt(t) {
                    In && (In.did = t)
                }
                function Yt() {
                    if (Object.defineProperty) {
                        var t = e[Ge];
                        Object.defineProperty(e, Ge, {
                            get: function() {
                                return mr++>0 && e.console && console.warn("window.%s is deprecated, use window.%s instead.", Ge, Ye),
                                t
                            }
                        })
                    }
                }
                function Jt() {
                    return Ln[xr] || Ln._end
                }
                function Wt() {
                    return Ln.loadEventEnd || Ln._end
                }
                function $t(t) {
                    function r(e) {
                        return t[e] > 0 ? t[e] - a: 0
                    }
                    var i = {},
                    a = n;
                    if (t) {
                        F(function() {
                            var e = kn.t = {};
                            o(t,
                            function(t, n) {
                                ge(t) || (e[n] = t)
                            },
                            !0)
                        }),
                        a = t.navigationStart,
                        i = {
                            f: r(Or),
                            qs: r(yr),
                            rs: r(br),
                            re: r(_r),
                            os: r(xr),
                            oe: r(Sr),
                            oi: r(Er),
                            oc: r(wr),
                            ls: r(Tr),
                            le: r(kr),
                            tus: r(Cr),
                            tue: r(qr)
                        };
                        var u = r(Or),
                        s = r(Rr),
                        c = r(Ir),
                        f = r(Nr),
                        l = r(Hr),
                        d = r(Ar);
                        if (d - l > 0 && (i.cs = l, i.ce = d), s - u > 0 && (i.ds = u, i.de = s), (f - c > 0 || f > 0) && (i.es = c, i.ee = f), 0 == i.le) {
                            var h = Wt();
                            i.ue = h - a
                        }
                        Ln._le = i.ue || i.le;
                        var v, p;
                        if (t.msFirstPaint) v = t.msFirstPaint,
                        F(function() {
                            kn.fp = "m_" + v
                        });
                        else if ((p = e.chrome) && p.loadTimes) {
                            var g = p.loadTimes();
                            g && g.firstPaintTime && (v = 1e3 * g.firstPaintTime),
                            F(function() {
                                kn.fp = "c_" + g.firstPaintTime
                            })
                        } else Ln.firstPaint && (v = Ln.firstPaint, F(function() {
                            kn.fp = v
                        }));
                        v && (i.fp = Math.round(v - a), Ln.fp = i.fp),
                        t[jr] && (i.sl = r(jr))
                    } else i = {
                        t: a,
                        os: Jt() - a,
                        ls: Wt() - a
                    };
                    return i.je = Ln.errs && Ln.errs.length || 0,
                    Ln.ct && (i.ct = Ln.ct - a),
                    Ln.touch && (i.fi = Ln.touch - a),
                    i
                }
                function Kt(t, e) {
                    var r = {
                        tr: !1,
                        tt: y(un.title),
                        charset: un.characterSet
                    };
                    Cn.resources && b(r, Cn.resources),
                    F(function() {
                        r.debug = kn
                    }),
                    X();
                    var i = Ln.errs;
                    o(i,
                    function(t, r) {
                        var a = t.toObject();
                        a.o = a.o - e && e.navigationStart || n,
                        i[r] = a
                    }),
                    r.err = i;
                    var a, u = "getEntriesByType";
                    return t[u] ? a = t[u]("resource") : J(x(Dn, [u])),
                    a && (r.tr = !0, r.res = [], o(a,
                    function(t) {
                        function e(e) {
                            var n = t[e];
                            return n > 0 ? n: 0
                        }
                        var n = t.initiatorType,
                        i = t.name,
                        a = {
                            o: e("startTime"),
                            rt: n,
                            n: i,
                            f: e(Or),
                            ds: e(Or),
                            de: e(Rr),
                            cs: e(Hr),
                            ce: e(Ar),
                            sl: e(jr),
                            qs: e(yr),
                            rs: e(br),
                            re: e(_r),
                            ts: t.transferSize || 0,
                            es: t.encodedBodySize || 0
                        };
                        if ("xmlhttprequest" === n) {
                            var o = Qt(i);
                            o && (a.aid = o.s_id, a.atd = o.t_id, a.an = o.s_name, a.aq = o.s_qu, a.as = o.s_du)
                        }
                        r.res.push(a)
                    })),
                    r
                }
                function Qt(t) {
                    var e;
                    return o(Ln.xhrs,
                    function(n, r) {
                        if (r && t.indexOf(r) > -1) return e = n,
                        !1
                    }),
                    e
                }
                function Vt(t) {
                    var e = {};
                    return t && (e.id = t.id, e.a = t.a, e.q = t.q, e.tid = t.tid, e.n = t.n),
                    e
                }
                function Zt(t) {
                    if (!t.agent) {
                        var n = e._ty_rum;
                        if (n && n.agent) t.agent = n.agent;
                        else {
                            var r = "TINGYUN_DATA",
                            i = H(r);
                            if (i) {
                                try {
                                    t.agent = bt(decodeURIComponent(i))
                                } catch(a) {
                                    Y(a && a.message)
                                }
                                A(r, "", -1e3)
                            }
                        }
                    }
                    return t.agent
                }
                function te(t) {
                    var e = 0,
                    n = t.timing;
                    return n ? t.getEntriesByName && (e = n.domLoading, o(qn.resources,
                    function(r) {
                        var i = t.getEntriesByName(r);
                        if (1 == i.length) {
                            var a = i[0].responseEnd + n.navigationStart;
                            a > e && (e = a)
                        }
                    }), e -= n.navigationStart) : J("fp=0"),
                    F(function() {
                        kn._fp = e
                    }),
                    Math.round(e)
                }
                function ee(t, n, r, i) {
                    var a = r || 0,
                    u = Cn.firstScreenResources;
                    if (u && u.length && t.getEntriesByName) return o(u,
                    function(e) {
                        var n = t.getEntriesByName(e);
                        if (n.length) {
                            var r = n[0],
                            i = r.responseEnd;
                            i > a && (a = i)
                        }
                    }),
                    i.fs_s = 1,
                    Math.round(a);
                    var s = un.createElement("img");
                    if (!s.getBoundingClientRect) return F(function() {
                        kn.fs = a
                    }),
                    a;
                    if (t.getEntriesByName) {
                        var c = e.innerHeight,
                        f = e.innerWidth,
                        l = [];
                        o(un.querySelectorAll("img"),
                        function(t) {
                            t.src && ne(re(t), c, f) && !ie(t) && l.push(t.src)
                        });
                        var d = (n.loadEventEnd || Ln.loadEventEnd) - n.navigationStart;
                        o(l,
                        function(e) {
                            var n = t.getEntriesByName(e);
                            if (n.length) {
                                var r = n[0],
                                i = r.responseEnd;
                                r.fetchStart <= d && i > a && (a = i)
                            }
                        })
                    }
                    return Math.round(a)
                }
                function ne(t, n, r) {
                    if (t) {
                        var i = e.pageYOffset,
                        a = t.top + (0 === i ? 0 : i || un.scrollTop || 0) - (un.clientTop || 0);
                        if (a >= n) return ! 1;
                        var o = t.left;
                        return o >= 0 && o < r
                    }
                    return ! 1
                }
                function re(t) {
                    return ge(t.getBoundingClientRect) ? t.getBoundingClientRect() : void 0
                }
                function ie(t) {
                    return yn.reliableHiddenOffsets() ? t.offsetWidth <= 0 && t.offsetHeight <= 0 && !t.getClientRects().length: ae(t)
                }
                function ae(t) {
                    for (; t && 1 === t.nodeType;) {
                        if ("none" === oe(t) || "hidden" === t.type) return ! 0;
                        t = t.parentNode
                    }
                    return ! 1
                }
                function oe(t) {
                    return t.style && t.style.display
                }
                function ue(t) {
                    var e = n,
                    r = 0;
                    return t && (e = t.navigationStart || e, r = t[xr] || t.domInteractive || t.domLoading || r),
                    r = r || Ln._end,
                    r - e
                }
                function se(t) {
                    if (t) {
                        var e = t.fetchStart;
                        if (e) return e - t.navigationStart
                    }
                }
                function ce() {
                    var t = {},
                    n = 0,
                    r = e.performance;
                    return r && r.getEntriesByType && o(r.getEntriesByType("mark") || [],
                    function(e) {
                        if (e && e.name && e.startTime && 0 === e.name.indexOf(Ke)) {
                            var r = e.name.substring(Ke.length);
                            r && (t[r] = Math.round(e.startTime), n += 1)
                        }
                    }),
                    e[rn] && e[rn].data && r.timing && o(e[rn].data,
                    function(e, i) {
                        me(e) && e.timestamp && (t[i] = e.timestamp - r.timing.navigationStart, n += 1)
                    }),
                    n > 0 ? t: null
                }
                function fe(t, e) {
                    var n = he(t),
                    r = n ? n.length: 0;
                    if (r > an && t.res && t.res.length > 0) {
                        t.res = t.res.slice(0, e);
                        var i = he(t),
                        a = i ? i.length: 0;
                        return a > an ? fe(t, e - 10 > 0 ? e - 10 : 0) : t
                    }
                    return t
                }
                function le() {
                    return Ln.start() && (Mr(), Pt(), yt()),
                    Ln._end = k(),
                    F(function() {
                        kn._end = Ln._end
                    }),
                    Yt(),
                    gr
                }
                var de, he, ve = u("String"),
                pe = u("Array"),
                ge = u("Function"),
                me = u("Object"),
                ye = u("Number"),
                be = u("Undefined"),
                _e = u("Headers"),
                xe = u("Request"),
                Se = [].slice,
                Ee = '"',
                we = /([\"\\])/g,
                Te = /\n/g,
                ke = e.JSON;
                ke && ke.parse && ke.stringify ? (de = r, he = i) : (de = s, he = c);
                var Ce, qe;
                e.addEventListener ? (Ce = l, qe = d) : (Ce = h, qe = v);
                var Oe = e.encodeURIComponent,
                Re = function() {
                    return ! document.addEventListener
                },
                Ie = e.location.protocol,
                Ne = "http:",
                He = function() {
                    function t(t) {
                        return t < 0 ? NaN: t <= 30 ? 0 | Math.random() * (1 << t) : t <= 53 ? (0 | Math.random() * (1 << 30)) + (0 | Math.random() * (1 << t - 30)) * (1 << 30) : NaN
                    }
                    function e(t, e) {
                        for (var n = t.toString(16), r = e - n.length, i = "0"; r > 0; r >>>= 1, i += i) 1 & r && (n = i + n);
                        return n
                    }
                    return function() {
                        return e(t(32), 8) + "-" + e(t(16), 4) + "-" + e(16384 | t(12), 4) + "-" + e(32768 | t(14), 4) + "-" + e(t(48), 12)
                    }
                } ();
                I.prototype = {
                    on: function(t, e) {
                        var n = this;
                        return ve(t) ? (n.events[t] || (n.events[t] = [])).push(e) : pe(t) && o(t,
                        function(t) {
                            n.on(t, e)
                        }),
                        n
                    },
                    off: function(t, e) {
                        var n = arguments.length,
                        r = this;
                        if (0 === n) return r.events = {},
                        r;
                        var i = r.events[t];
                        if (!i) return r;
                        if (1 === n) return r.events[t] = null,
                        r;
                        for (var a, o = i.length; o--;) if (a = i[o], a === e) {
                            i.splice(o, 1);
                            break
                        }
                        return r
                    },
                    emit: function(t) {
                        var e = [].slice.call(arguments, 1),
                        n = this.events[t];
                        return n && o(n,
                        function(t) {
                            return t.apply(this, e)
                        }),
                        this
                    },
                    unshift: function(t, e) {
                        var n = this;
                        return (n.events[t] || (n.events[t] = [])).unshift(e),
                        n
                    }
                };
                var Ae = "error",
                je = "load",
                Le = "unload",
                Me = "beforeunload",
                Be = "pagehide",
                De = "readystatechange",
                ze = "complete",
                Pe = "on",
                Fe = "TY_DISTINCT_ID",
                Ue = "TY_SESSION_ID",
                Xe = 86400,
                Ge = "_ty_rum",
                Ye = "TINGYUN",
                Je = 2,
                We = "__ign",
                $e = "__ty_aysncWrap__",
                Ke = "ty_",
                Qe = "X-Tingyun-Id",
                Ve = "X-Tingyun-Tx-Data",
                Ze = "XHR",
                tn = "FETCH",
                en = "CUSTOM_AJAX",
                nn = "ty_rum_path",
                rn = "__TINGYUN",
                an = 64512,
                on = e.Error,
                un = e.document,
                sn = e.XMLHttpRequest,
                cn = {};
                t(cn);
                var fn = cn.server || {},
                ln = {
                    fp_threshold: 2e3,
                    fs_threshold: 4e3,
                    dr_threshold: 4e3
                };
                fn = b(ln, fn, e[rn] && e[rn].config || {});
                var dn = N("ignore_err"),
                hn = N("debug"),
                vn = e.location,
                pn = e.navigator,
                gn = e.HTMLElement,
                mn = function() {
                    try {
                        var t = He();
                        return e.localStorage.setItem(t, t),
                        e.localStorage.removeItem(t),
                        !0
                    } catch(n) {
                        return ! 1
                    }
                } (),
                yn = {};
                yn.localStorage = mn,
                function() {
                    function t() {
                        var t, f, l = un.documentElement;
                        l.appendChild(s),
                        c.style.cssText = "-webkit-box-sizing:border-box;box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%",
                        n = i = u = !1,
                        r = o = !0,
                        e.getComputedStyle && (f = e.getComputedStyle(c), n = "1%" !== (f || {}).top, u = "2px" === (f || {}).marginLeft, i = "4px" === (f || {
                            width: "4px"
                        }).width, c.style.marginRight = "50%", r = "4px" === (f || {
                            marginRight: "4px"
                        }).marginRight, t = c.appendChild(un.createElement("div")), t.style.cssText = c.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", t.style.marginRight = t.style.width = "0", c.style.width = "1px", o = !parseFloat((e.getComputedStyle(t) || {}).marginRight), c.removeChild(t)),
                        c.style.display = "none",
                        a = 0 === c.getClientRects().length,
                        a && (c.style.display = "", c.innerHTML = "<table><tr><td></td><td>t</td></tr></table>", t = c.getElementsByTagName("td"), t[0].style.cssText = "margin:0;border:0;padding:0;display:none", a = 0 === t[0].offsetHeight, a && (t[0].style.display = "", t[1].style.display = "none", a = 0 === t[0].offsetHeight)),
                        l.removeChild(s)
                    }
                    var n, r, i, a, o, u, s = (un.documentElement, un.createElement("div")),
                    c = un.createElement("div");
                    c.style && (c.style.cssText = "float:left;opacity:.5", yn.opacity = "0.5" === c.style.opacity, yn.cssFloat = !!c.style.cssFloat, c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", yn.clearCloneStyle = "content-box" === c.style.backgroundClip, s = un.createElement("div"), s.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute", c.innerHTML = "", s.appendChild(c), yn.boxSizing = "" === c.style.boxSizing || "" === c.style.MozBoxSizing || "" === c.style.WebkitBoxSizing, yn.reliableHiddenOffsets = function() {
                        return null == n && t(),
                        a
                    })
                } ();
                var bn, _n;
                yn.localStorage ? (bn = function(t) {
                    return e.localStorage.getItem(t)
                },
                _n = function(t, n) {
                    return e.localStorage.setItem(t, n),
                    n
                }) : (bn = H, _n = A);
                var xn, Sn = "display:none",
                En = "POST",
                wn = j;
                e.XDomainRequest ? xn = L: Re() ? xn = B: pn.sendBeacon ? wn = xn = z: xn = D;
                var Tn = hn,
                kn = {
                    start: n,
                    e: {},
                    an: {
                        count: 0
                    },
                    visible: []
                },
                Cn = {},
                qn = {},
                On = {
                    pf: !1
                },
                Rn = {
                    uniqueId: 0,
                    xhrs: []
                },
                In = {}; !
                function() {
                    if (hn) {
                        var t, e, n = "visibilitychange";
                        be(un.hidden) ? be(un.msHidden) ? be(un.webkitHidden) || (t = "webkitHidden", e = "webkit" + n) : (t = "msHidden", e = "ms" + n) : (t = "hidden", e = n),
                        be(un.addEventListener) || be(un[t]) || Ce(un, e, U(function() {
                            kn.visible.push([un[t], k()])
                        }))
                    }
                } ();
                var Nn = new I,
                Hn = [],
                An = [],
                jn = $.prototype;
                jn.start = function() {
                    if (!fn.key) return Y("missing config, agent disabled!"),
                    !1;
                    var t = e[Ge] || e[Ye];
                    return t && t.server ? (Y("already loaded!"), !1) : (G(), this)
                },
                b(jn, I.prototype);
                var Ln = new $;
                Ln.on("send",
                function(t, e, n, r) {
                    var i = R(fn.beacon, t, b({},
                    Mn, e || {},
                    In || {}));
                    switch (r = r || T, t) {
                    case "/pf":
                        n ? xn(i, n,
                        function() {
                            Ln.xhrs = Ln.errs = null,
                            r()
                        }) : wn(i, void 0, r);
                        break;
                    default:
                        xn(i, n, r)
                    }
                });
                var Mn = {
                    pvid: He(),
                    ref: un.URL,
                    referrer: un.referrer,
                    key: fn.key,
                    v: "1.8.3",
                    av: "1.8.3",
                    did: K(),
                    sid: Q()
                },
                Bn = gn ?
                function(t) {
                    return t instanceof gn
                }: function(t) {
                    t && "object" == typeof t && 1 === t.nodeType && ve(t.nodeName)
                },
                Dn = "{0} not support",
                zn = "illegal argument",
                Pn = {},
                Fn = "undefined" != typeof e.console,
                Un = 1,
                Xn = 2,
                Gn = 4,
                Yn = 8,
                Jn = Z.prototype;
                Jn.create = Jn.before = Jn.after = Jn.error = null;
                var Wn;
                it.prototype = {
                    createContext: function() {
                        return Object.create ? Object.create(this.active) : at(this.active)
                    },
                    get: function(t) {
                        if (this.active) return this.active[t]
                    },
                    set: function(t, e) {
                        if (this.active) return this.active[t] = e
                    },
                    enter: function(t) {
                        if (!t) throw new on("context required!");
                        this._set.push(this.active),
                        this.active = t
                    },
                    exit: function(t) {
                        if (!t) throw new on("context required!");
                        if (t === this.active) return void(this.active = this._set.pop());
                        var e = this._set.lastIndexOf ? this._set.lastIndexOf(t) : E(this._set, t);
                        if (e < 0) throw new on("context not currently entered!");
                        this._set.splice(e, 1)
                    },
                    bind: function(t, e) {
                        e || (e = this.active ? this.active: this.createContext());
                        var n = this;
                        return function() {
                            n.enter(e);
                            try {
                                return t.apply(this, arguments)
                            } catch(r) {
                                try {
                                    var i = "moduleId";
                                    r[i] = e[i]
                                } catch(a) {}
                                throw r
                            } finally {
                                n.exit(e)
                            }
                        }
                    }
                };
                var $n, Kn = !1,
                $n = ot(),
                Qn = ut.prototype;
                Qn.fail = Qn.end = T;
                var Vn = st.prototype;
                Vn.end = Vn.finish = Vn.fail = null,
                Vn.send = function(t) {
                    var e = this;
                    e.sent = !0;
                    var n = t.event && t.event.xhrs || [];
                    o(n,
                    function(t) {
                        t.start = t.start - e.s
                    });
                    var r = {
                        key: e.key,
                        duration: e.e - e.s,
                        status: e.status,
                        xhrs: n
                    };
                    Ln.emit("send", "/spe", null, r, T)
                };
                var Zn = {},
                tr = {},
                er = e.screen;
                er && (tr.sh = er.height, tr.sw = er.width);
                var nr = "api",
                rr = "onerror",
                ir = 1e4,
                ar = 0;
                ft.prototype = {
                    add: function(t, e) {
                        this.len > this.limit || this.get(t) || (this.c[t] = e, this.len++)
                    },
                    get: function(t) {
                        return this.c[t]
                    },
                    reset: function() {
                        this.c = {},
                        this.len = 0
                    }
                };
                var or = new ft(100),
                ur = {};
                dt.prototype = {
                    increase: function() {
                        this.count++
                    },
                    fix: function() {
                        var t = this,
                        e = t.stack;
                        if (e && ve(e)) {
                            e = e.split(/\n/);
                            var n = [];
                            o(e,
                            function(t, e) {
                                t.indexOf($e) == -1 && n.push(t)
                            }),
                            t.stack = n.join("\n")
                        }
                    },
                    toObject: function() {
                        var t = this;
                        return {
                            o: t.time,
                            e: t.msg,
                            l: t.lineno,
                            c: t.colno,
                            r: t.filename,
                            ec: t.count,
                            s: t.stack,
                            m: t.module,
                            ep: t.ep,
                            tr: t.trigger,
                            co: t.customObj
                        }
                    }
                };
                var sr = function() {
                    function t(t) {
                        var r = t;
                        return e && (n.setAttribute("href", r), r = n.href),
                        n.setAttribute("href", r),
                        {
                            href: n.href,
                            protocol: n.protocol ? n.protocol.replace(/:$/, "") : "",
                            host: n.host,
                            search: n.search ? n.search.replace(/^\?/, "") : "",
                            hash: n.hash ? n.hash.replace(/^#/, "") : "",
                            hostname: n.hostname,
                            port: n.port,
                            pathname: "/" === n.pathname.charAt(0) ? n.pathname: "/" + n.pathname
                        }
                    }
                    var e = /(msie|trident)/i.test(pn.userAgent),
                    n = un.createElement("a"),
                    r = t(vn.href);
                    return function(e) {
                        var n = t(e);
                        return n.protocol === r.protocol && n.host === r.host
                    }
                } (),
                cr = function(t) {
                    var e = [];
                    return o(t,
                    function(t) {
                        try {
                            e.push(new RegExp(t))
                        } catch(n) {
                            Y(n && n.message)
                        }
                    }),
                    e
                } (fn.custom_urls),
                fr = cr.length ?
                function(t) {
                    var e = t.url; ! Ln.ct && e && o(cr,
                    function(n) {
                        if (e.match(n)) return Ln.ct = t.end,
                        !1
                    })
                }: T,
                lr = {
                    error: 990,
                    abort: 905,
                    timeout: 903
                },
                dr = Pe + De,
                hr = 2e3,
                vr = [],
                pr = {
                    host: "cshst",
                    url: "csurl"
                },
                gr = {
                    version: "1.8.3",
                    config: Ft,
                    DIAGNOSE_HREF: Je,
                    diagnose: V,
                    createEvent: ct,
                    logFirstScreen: Ut,
                    addExcludedDomain: Xt,
                    setError: mt,
                    addAjax: zt,
                    setDid: Gt
                };
                e[Ge] = e[Ye] = gr;
                var mr = 0,
                yr = "requestStart",
                br = "responseStart",
                _r = "responseEnd",
                xr = "domContentLoadedEventStart",
                Sr = "domContentLoadedEventEnd",
                Er = "domInteractive",
                wr = "domComplete",
                Tr = "loadEventStart",
                kr = "loadEventEnd",
                Cr = "unloadEventStart",
                qr = "unloadEventEnd",
                Or = "domainLookupStart",
                Rr = "domainLookupEnd",
                Ir = "redirectStart",
                Nr = "redirectEnd",
                Hr = "connectStart",
                Ar = "connectEnd",
                jr = "secureConnectionStart",
                Lr = Zt(cn);
                Lr && Lr.ulabel && (Cn.ulabel = Lr.ulabel);
                var Mr = function() {
                    var t = C(function() {
                        function t(t) {
                            return t ? "1": "0"
                        }
                        var r = e.performance,
                        i = !!r;
                        i || J(x(Dn, ["pf"]));
                        var a = Vt(Lr),
                        u = r && r.timing,
                        s = b($t(u), a, Cn),
                        c = b({},
                        tr);
                        c.ressize = !!u,
                        Ln.fp ? (c.fp = Ln.fp, i && Ln.fp > Ln._le && (J("fp>le"), c.fp = te(r), c.__fp = 2)) : i ? (c.fp = te(r), c.__fp = 1) : c.fp = c.__fp = 0,
                        c.dr = ue(u),
                        i ? c.fs = ee(r, u, c.fp, c) : c.__fs = 0;
                        var f = "",
                        l = ce(),
                        d = b(s, c) || {};
                        l && o(l,
                        function(t, e) {
                            ye(t) && t >= 0 && (d[e] = t)
                        });
                        var h;
                        if (i) {
                            var v = "trace",
                            p = Math.max(d.ls, 0);
                            p || (p = Wt() - u.navigationStart || n),
                            d[v] = p;
                            var g = se(u);
                            o(["fp", "fs", "dr", v],
                            function(e) {
                                f += t((g ? d[e] - g: d[e]) >= fn[e + "_threshold"])
                            }),
                            delete d[v],
                            f.indexOf("1") > -1 && (h = Kt(r, u)),
                            l && (h || (h = {}), h.mark = l)
                        }
                        d.trflag = f || "0000",
                        qn.pfStart = k(),
                        delete d.firstScreenResources,
                        delete d.resources,
                        h && (h = fe(h, 150)),
                        Ln.emit("send", "/pf", d, h,
                        function() {
                            J("pf sent!"),
                            Ln.xhrs = Ln.errs = null,
                            On.pf = !0
                        })
                    });
                    return Nn.on(je,
                    function() {
                        var e = 0;
                        if (fn.pfDelay && me(fn.pfDelay)) {
                            var n = ce();
                            o(fn.pfDelay,
                            function(t, r) { (!n || null == n[r]) && ye(t) && t > e && (e = t)
                            })
                        }
                        setTimeout(t, e)
                    }).on([Le, Me, Be], t)
                },
                Br = le();
                return Br
            } (function(ty_rum) {
                ty_rum.server = {
                    id: 'OHEPtRD8z8s',
                    ignore_err: true,
                    beacon: 'beacon.tingyun.com',
                    beacon_err: 'beacon-err.tingyun.com',
                    key: '6A2ielhBTSs',
                    trace_threshold: 7000,
                    fp_threshold: 2000,
                    fs_threshold: 4000,
                    dr_threshold: 4000,
                    custom_urls: [],
                    sr: 1.0
                };
            },
            window, +new Date);</script>
        <link href="/dist/index/index.42ccb0124823e7253094.css" rel="stylesheet"></head>
    
    <body id='index_box'>
        <script type="text/javascript">//这段js的最后面有两个参数记得要设置，一个为设计稿实际宽度，一个为制作稿最大宽度，例如设计稿为750，最大宽度为750，则为(750,750) 1rem = 100px;
            !
            function(e, t) {
                function n() {
                    var n = l.getBoundingClientRect().width;
                    t = t || 540,
                    n > t && (n = t);
                    var i = 100 * n / e;
                    r.innerHTML = "html{font-size:" + i + "px;}"
                }
                var i, d = document,
                o = window,
                l = d.documentElement,
                r = document.createElement("style");
                if (l.firstElementChild) l.firstElementChild.appendChild(r);
                else {
                    var a = d.createElement("div");
                    a.appendChild(r),
                    d.write(a.innerHTML),
                    a = null
                }
                n(),
                o.addEventListener("resize",
                function() {
                    clearTimeout(i),
                    i = setTimeout(n, 300)
                },
                !1),
                o.addEventListener("pageshow",
                function(e) {
                    e.persisted && (clearTimeout(i), i = setTimeout(n, 300))
                },
                !1),
                "complete" === d.readyState ? d.body.style.fontSize = "16px": d.addEventListener("DOMContentLoaded",
                function(e) {
                    d.body.style.fontSize = "16px"
                },
                !1)
            } (750, 750);</script>
        <img src="https://m.kongfz.com/dist/img/konglogo.png" alt="孔夫子旧书网" style="width: 0;height: 0;font-size: 0;display: none;" />
        <!-- search_bar -->
        <div class="search_bar">
            <div class="logo">
                <a href="/">
                    <img src="data:image/png;base64,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" alt=""></a>
            </div>
            <a class="new_search_btn" href="https://m.kongfz.com/newsearch/">
                <div class="inner">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAfCAMAAACxiD++AAAAPFBMVEUAAACampqampqampqkpKSampqZmZmZmZmZmZmampqZmZmbm5uampqZmZmampqgoKCZmZmZmZmZmZmZmZnxEDpHAAAAE3RSTlMAQtiKCszp8+K/dmtTPCYVhe+oUAggIwAAALpJREFUKM+FU9kOwyAMg3BTCm39//86jU1NT+IXhGxicinGbBKFQMnM6gE2e+zw2V75EgEyulpbtSEgljO/AE7zVTtgOfIbMKkTJmA7vl/11VOvHKMAzLMCKP//R45/dom/XDKceoRD7qdng6uJ7/UDqRcQvjU1MI/sTiV2uHukHqe+CWp3D7BvAosgCkQL8ZNimmKhpFKLzRLbLQ2MMHK+jYd2BbXh2DcCteHidMVg9brCqeHyNkdKxAeG9gwGFxIALwAAAABJRU5ErkJggg==" alt="">
                    <div>商品名称 作者 出版社 ISBN</div></div>
            </a>
        </div>
        <div class="banner">
            <div class="swiper-container swiper-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://m.kongfz.com/shop/3669/">
                            <img src="https://img0.kfzimg.com/operation/de/52/de5285b7473a63e73fb0fec9cabc2a37.jpg" onerror="this.style.width=0;" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://t.kongfz.com/article/15364584">
                            <img src="https://img0.kfzimg.com/operation/fd/d8/fdd8a4c12d4d594c41a190ee85f1df6e.jpg" onerror="this.style.width=0;" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://m.kongfz.com/shop/19661/#/list/column_76651">
                            <img src="https://img0.kfzimg.com/operation/3b/5b/3b5baf6345aed9040a353d00200cf137.jpg" onerror="this.style.width=0;" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://promotion.kongfz.com/promotion/universe_m">
                            <img src="https://img0.kfzimg.com/operation/a3/a1/a3a1df45f1b937830ffc22ab5858b0aa.jpg" onerror="this.style.width=0;" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://m.kongfz.com/shop/19661/#/list/column_76564">
                            <img src="https://img0.kfzimg.com/operation/98/d1/98d1eb05b9dad170c8f3adb28a509147.jpg" onerror="this.style.width=0;" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://promotion.kongfz.com/promotion/xinshupandian202107_m">
                            <img src="https://img0.kfzimg.com/operation/ab/bf/abbfcca52edc186ac490342d4cbd7d81.jpg" onerror="this.style.width=0;" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://mbook.kongfz.com/19661/3906904475">
                            <img src="https://img0.kfzimg.com/operation/67/eb/67ebaf7ca97fd7173d23a202d45fcd88.jpg" onerror="this.style.width=0;" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://promotion.kongfz.com/promotion/jiaoshijie2021_m">
                            <img src="https://img0.kfzimg.com/operation/45/e5/45e5148ca406f989a1312a642f9b0368.jpg" onerror="this.style.width=0;" alt=""></a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="nav">
            <ul class="inner">
                <li>
                    <a href="https://mbook.kongfz.com/Cxianzhuang/">
                        <div class="img_box">
                            <img src="https://img0.kfzimg.com/operation/37/04/3704e889c9bf128f0885b56aff3e139f.png" onerror="this.style.width=0;" alt=""></div>
                        <div class="name">线装古籍</div></a>
                </li>
                <li>
                    <a href="https://mbook.kongfz.com/Cminguo/">
                        <div class="img_box">
                            <img src="https://img0.kfzimg.com/operation/2a/16/2a160cbf488782342afa5ca7c08d6b16.png" onerror="this.style.width=0;" alt=""></div>
                        <div class="name">民国旧书</div></a>
                </li>
                <li>
                    <a href="https://mbook.kongfz.com/Cmoji/">
                        <div class="img_box">
                            <img src="https://img0.kfzimg.com/operation/70/4a/704af39433730039bce141f312674ea3.png" onerror="this.style.width=0;" alt=""></div>
                        <div class="name">名人墨迹</div></a>
                </li>
                <li>
                    <a href="https://mbook.kongfz.com/Czaxiang/">
                        <div class="img_box">
                            <img src="https://img0.kfzimg.com/operation/b4/cd/b4cd48f2f8adfa4ba92271061e1292bc.png" onerror="this.style.width=0;" alt=""></div>
                        <div class="name">古玩杂项</div></a>
                </li>
                <li>
                    <a href="https://m.kongfz.com/category/">
                        <div class="img_box">
                            <img src="https://img0.kfzimg.com/operation/d3/71/d371a223d9c055abf993c068520117c7.png" onerror="this.style.width=0;" alt=""></div>
                        <div class="name">全部分类</div></a>
                </li>
                <li style="margin:0;height:0;"></li>
                <li style="margin:0;height:0;"></li>
                <li style="margin:0;height:0;"></li>
            </ul>
        </div>
        <div id="index_tmpl_interpolation"></div>
        <!-- 猜你喜欢 -->
        <div id="recommend_list_box" style="margin-top: 0.4rem;"></div>
        <!-- <div class="downApp" id="openApp"><img src="../../modules/index/images/kongapp.png" alt=""></div> -->
        <!-- 返回顶部 -->
        <div class="top"></div>
        <!-- footer_box -->
        <div class="footer_box">
            <div class="footer_top">
                <ul class="inner">
                    <li>
                        <a href="/">
                            <div class="img_box">
                                <img src="data:image/png;base64,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" alt=""></div>
                            <div class="name active">首页</div></a>
                    </li>
                    <li>
                        <a href="https://m.kongfz.com/channel/1081">
                            <div class="img_box">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLCAYAAAA4TnrqAAAAAXNSR0IArs4c6QAAArNJREFUeAHtnDFrVFEQhTeazsYiBBbSqUUKESTY7kL+geQPLAT/gE264P8RW9tYKRYWgo22gRCIMU2KFJqcgTdwSFjOvfverm+zZ2B4Z3funTfnW3bZ5r7BwGECJmACJmACJmACxQTWilfeXTjEW2PkFvIRclqMqPCJ9KLlJW54jDxCniAXEi9wl4/If8jrJcyYO+YPH3ONCbpfIZcR0u2Zw0f4KY6ar+FrdH2PzD1/ob8ivyHPkNPikArvSC9abuCGL5GvkA+bmwfAPeSH5nUnl8foEkDy0/kOvVPYOffEtQ8Rc8f8OVf4Cn+dxQE6ZfNT6M2KzrmvL7Bi9Jg/fORs4a+z+IxO2Xi/smvu6xOssBA+crbw11n8Rqds/Kyya+7rG6zwkbOFPxn5Y60WstHSPdmzzd7sMY9r+Ii/ERnS14NcuYJX/hCL7K8yrCJAvMiwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQhiUAcdmwmIbQs8CSZ1zEPftSrvZRCuucHD4lvcySfbC/qZ5KYf2kDiPSyyzZB/tr7cknWSsQ+ow0YK0XArvAujfIPH3/HPoLsuT0PZbNHE+w8y1yu+kQJ/5/IP80r2su007fh6/w13lM0LHNcx1qB/qFDXGIch5Z/VyH2uFjfZsnhtTebx6wZn5iSPV/DXI7hB4jS59FE0PuImuiy6/hf3kWTY1ZrzUBEzABEzABE7hXBG4AC9QW27Cx53EAAAAASUVORK5CYII=" alt=""></div>
                            <div class="name">书店</div></a>
                    </li>
                    <li>
                        <a href="http://m.kongfz.cn/">
                            <div class="img_box">
                                <img src="data:image/png;base64,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" alt=""></div>
                            <div class="name">拍卖</div></a>
                    </li>
                    <li>
                        <a href="https://m.kongfz.com/cart">
                            <div class="img_box">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLCAYAAAA4TnrqAAAAAXNSR0IArs4c6QAABDtJREFUeAHtWklrFUEQfmpcUXEJehGFEFFwQSWieJToRfCgp6hHb5Kb4tG7/gZPuQgR9CAI4sGLp6goenA3EhW3IO4bLt+nUy9FZt5Mv+lZ86qg0pXuqurqb3p/3WgYGQKGgCFgCBgChoAh4IzAtAhN5h0Ar44oY9YH8E3wFfBvcEfTQbT+jwOPQKe3k5Ca7tHYPtheAM/38FEr0zTDcAVaOACeF7T0MNLTgWxJBAJHkSdD9XxEuWUpBDYqsO6rfBMjEJiLPK6E7F0/wTPBRjEIjKJMhuLaGL0pU+SzGt5TKKxR8pQVuzxaRrB2B/a+YB2Cn/1gn3iCUJySb9B6AOYq/sjJwlPpCOxlGPpsHZbCzy/lS3wWkXLeHQbLNghiPtQPt9Kgqx5VzILtU+VLfBaZXkb9c5LaELUpTbKRcm5Ox4J/xpF2S0GKdAlstoFnpLBNY8LVfC+YRzvB4Djkk+BciJV8AksP4HCqGw0iYIn/MWSfBS+x7TdUZTsStaunwJ78QrVhXVyIvkjWffvAheW1AmiBkkNip4NFQFYqVJ4pOSR2Oli9QGRxgMpbpAZWqItMZPRNiI1rSo4Us+xZ/EpFLf2RjUmRWShYnxGgdF3ePPSkCLhMk0LBYkPruiJyn7hFfanch2GdweLhX7YKLyE/V8BFir5zFp3WtWe1NQTZUAOLKDSSV0IqGVhEwRGs/6p+fwn4F7AcSBf5uSvEmlscruQS8/JCag0quaUq5lVL1Wk9AhSgxlyDzWIYsq66TfJ6cuczBCcysNqYrwysNsBy6n4OSluhI3PAbQf9MlW6UPlXFW/hN7wLVeX8mSmrHgtXmdMmeJQPy6tkZ8qqUXzgxiMDaTZ41T+pmn84CoQSz4OiyDQrsOirLiuiXglLA+suEQuoym8fKgFWHXoWp4gNwQflvHU9kJ2SThuGfFcmz6MeQn7vhFKglBdYVR2GqYdgO6C66PJwyi8ly/JmF6OCdS6q+AYLrjtUHd+XClhnQqXlZvAKWV7r/IC8rNxwGo2dCEDAYnoKzEm1bOLw0z/Tn00TkLwgSWPbyoYvUY6pwieQ2f35UJdftkjiUYZA7QFLW19B3g4eBZdOXDTOgXUPq4r8EXHpSb50sCQAPn3UXb9MwPjCbwjMN2WpSbpmagcJhnx+2A/mysgHa1luVeAukcahcQfMzSenAyNDwBAwBAwBQyCMAM9zRREf6O4D94B5q8ofZrOkvP1nGWtLX7wSGQbrfdYb/L+rpUV7BXn7by8aT+0TsNdAiUzAuj190zxv/xmE6O6CN6gC0OR0wN1NS828/TcrLmJHHXcVElfWDDJBiPMRV5bgNlxcBFgj4WqbOXFlTaUEIc5HXFmC23KKeS78Dp48BIczCidv/xmF6e6GDboEfgfmHMNJWX44gOhNefv3DtAcGAKGgCFgCBgChoAhYAgYApkg8Bc+BGuYiNvHJQAAAABJRU5ErkJggg==" alt=""></div>
                            <div class="name">购物车</div></a>
                    </li>
                    <li>
                        <a href="https://m.kongfz.com/personal">
                            <div class="img_box">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLCAYAAAA4TnrqAAAAAXNSR0IArs4c6QAABNNJREFUeAHtWjtoFUEUjRoVNeI/BhEJ/hDRQkGs7AQLPxGsROwiFqJprARJRLCJjWJnp5JGEBTEShAFRU1nUFTE+EkU/ETxg0b8nKPvwmWz7tvJm5m3s5kLh5k3O3vvuWdmdmd3X0NDtKhAVCAqEBWICkQFogK5FRiXu6fbjk1wvxxYUMEclO+AwQoeofwMjFmbj8z3AJeBb8DvDPA4+7F/MzBmbBYy7QaqCfQ/8Xgez6cfr+Z7GXYguy5gZkqWfWjrB7j0uAS5FLksW4FVQNI+oKETOJk8EPrvKUigB0jOllto2wcsBLKMx9mP/ZM+6Jf+S2EtyOIuoJO8j99to8yO5/F87Y/+GSdo44gnhTqBtsYas+L59JMULOgZppfeMJJrr1Gk5On0R78iGuMFabyYSxIsbQslotCvjsO4QRlv60OAJMEl49L0kmRcxg/GusFUhOLFuNExc/rXF33GD8K4M9cbzjZPrBlHBojxyaPwxkcSIc19kU/T+zDysGrjrXr752y78nlO1X1UdTzNw0ds4xh8e6CXYLWduXGAKicwnsxq8iCfwtpaMBOy9+rEknGFA/lYM9vLkA++Yv1S8VzquJpPzTRcijVYM7vROdBxCy0WX6uI8TVLPUzH1Xxq5mJ7ZjkjapCpFkjzMXCR3tW2WM6WQDr91Fa99DSf1M4mjS7FajUhYrGvjmtVLIsc/7oq9T7L9szi56qragR8PRdKSB2PPAr/+ay0z4YyIjbLorx1aLaZlEtf8X2WgbrxTamBWOzaAcgDLct2Njow+tVxDjiI4cVlj0pkGHXbgtEf/YpYjBesxe+GhkPXgv7JD638uKD3RCYueZ7+OMFZRf+MUwrjDNNLUpZN/K9DxvDyoj8EiFi6fI32h0AvcL1S8vcAoPtJnX7or5TG50Z+RDgDfAIkadOS79a5jwvqQyr45rIN6JXn331Zov2o+OCjVN2+B7r8M9s6JHYU2ASkGZfRC+AV8BagIJOA6cBU4CvAGcg+xwH2KZ3NQ0YXgORM+YW2XqALoJAuBwrui2/rQZEzQQvFGXMaaAWiVRTYi/I7IEL9RP0ssASoh/GtwzFgZz2CZ8XUbxko1htgY9YJHo6dQgwZuEMe4uUKsV+RIrk7wKJcZ7rtdBDuRSyW1v8oYkp/G07gchNS51GfbOrEUf+J8HsFEG7kucNRrKpu16DHF0DI3EC9KEIJeW5BbiqO3NCuloO+St72bwMiFB9LZvsKbhiHO/0+QLheMzy/5u67VXBuHpfW7NGtg2Vwr+/U3u6QnNovARmpI27ztOad2wjhTP5N1jxnODqcCErxQrBpIKk3zJ0+SD9BEBkhLseQbBfICvcB1Ce4JM87oAR7jzpvzyEZ79YfAclhswl508/3ep9yCYH43BeS8SJ/URHequrWqw/gUUZli3XvfhySt+Tw1FVIPphKEG5G+e4pRCNvbnckl7l5kzBZhiuU02eo83tdiEbezxXxlaqeWTURS79q4Z0kZOM+S2yxVKqVJmLNUM7KJJbOS6U4smoilt7xDo50FVSL5s93/rnMRKxG5THU65WkoPnrvOR4amkiVqqDsdQYxTIYbROxuPsV03VpC6nU/HXdWg7cOjyuQG8jrAXw6KhMuXiULYaKCkQFogJRgajAH2Y9np2OjX2jAAAAAElFTkSuQmCC" alt=""></div>
                            <div class="name">我的</div></a>
                    </li>
                </ul>
            </div>
            <div style="height:1rem;"></div>
        </div>
        <script id="index_tmpl" type="text/x-dot-template">{
                {~it.list: data: i
                }
            } {
                { ? data.name && data.style < 9
                }
            } < div style = "padding-bottom:0.4rem" ></div>
      <!-- line_gray -->
      <div class="line_gray">
        <div class="box"></div ></div>
      <!-- area -->
      <div class="area">
        <div class="title clearfix">
          <div style="float: left;width: 5.8rem;height: 0.54rem;overflow: hidden;">
            <span style="font-weight: bold;">{{= data.name}}</span > <span > {
                { = data.subname
                }
            } < /span>
          </div > {
                { ? data.rightShowMoreType == "1"
                }
            } < a href = "{{= data.rightShowMoreUrl }}" > 更多 < img src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoBAMAAAB+0KVeAAAAG1BMVEUAAAA3WZpAgL82WZo3Wps7XZs3WZo2WJk2WJmVvPRoAAAACHRSTlMArATvMylhcYgfyM8AAAAySURBVCjPYxhZgBWbYIYQFsHgRgVMQRYLbEqd6aeUraOAgEqEmbRXiAglwuHJyjCsAQC4zQsR0bEKKAAAAABJRU5ErkJggg=="alt = "" ></a>
          {{?}}
        </div > </div>
    {{?}}
    {{? data.bqList && data.bqList.length > 0 }}
    <!-- label_box -->
    <div class="label_box">
      <ul>
        {{~ data.bqList:val:index }}
        <li>
          <a href="{{=val.linkUrl}}">{{=val.title}}</a ></li>
        {{~}}
      </ul > </div>
    {{?}}
    {{? data.style == 1 }}
      <!-- module_one -->
      <div class="module-one">
        <a href="{{= data.data[0].linkUrl}}">
          <div class="inner">
            <div class="box" style="{{= !data.data[0].title && !data.data[0].subTitle ?'padding-bottom: 0;':'' }}">
              <div class="img_box">
                <img class="lazy" src="data:image/png;
            base64,
            iVBORw0KGgoAAAANSUhEUgAAAu4AAAFACAMAAADUPQn7AAAAOVBMVEXu7u67u7vr6 + u + vr7BwcHo6Ojl5eXf39 / Dw8PT09PKysri4uLW1tbc3NzQ0NDZ2dnHx8fMzMzOzs5vIJATAAAJcElEQVR42uzBgQAAAACAoP2pF6kCAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGD24EAAAAAAAMj / tRFUVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYtbPltmEYCqC4BPdV8v9 / bK1ajkVXsehMO5MqOE / Jg5bxgNQFSSGEEEIIIYQQQgghhBBCCCGEEEIIIcRpFENC / BQzLoqE + BksoC0J8TNMAEugET9EAFBJiL / KftPIUABMJMTfpDR8oW / I3stdOlbx96gJ8N8wJBsAnshpRCl48dcY / lJTaCJP2dC / ohyuWONKJxLigLpk86 + aQhMYi2joH7iA8SA9q / iEjVPMdi13Bgc6lgDooaY2LZxr1WP1bxbHHe50nrAw9CU2hyafhtMqWNybzwnATMd4qJ4admlD71F0rHgsoiPKXy13W6pfh4yE / zMyF9wFuppx5YZ2dJDoiJqxS9M7rAfY10RHjL / duWKh3iv0MHtssMzw56JsmzUe + KPc60hUBgodK4w7X1vATaQxxli3RpOh563lrrFIauhHcC3MnnHHWGmZ30 / BuhYu0TM6aw1Og + WeATQaoAJjMVu6wmJ4EdMxtvRIRxFK8Fixr5b2qVTy04 / AU3BmeWHcNBL / v4hdfEurHldtLPFnGpNCzWatx8WkaJDK / efnpVSxw + 4tWAaPHgNNbYby4lvupIk3OcYObR8tKOzY0kz + 2lDzinbNiXa4iLvpOenQyqQSIuPBL / RvhZ459PylWfJg2 / Xh8CTOIHnc + elprUSNNpLmVu6m1UtwanRR / 1W1k / Z0l2tWm9xx2U38AWB9xbjhua1 / Bnopa6w45jXhx21Y95JlTkRlxtXUFJFlYLNDageqhWyytgHQs36nq3P69SKkhqNVA9h1lb2YqFfxwBeniHj9R7uj3OMBjo5oW + Gp + wh9w0MS4mtUyfcpuXYx1Y1kmQm9qaqBmZ2xYEuf0Yhd6nH0wWI3XqSZ73M0XamKlVc0oKl + H0Ftl52YxAm1LiWUkSxjPR6momiAwU2iT / nNjFqeRgZ / 1qoaa9Xaf1b + mOkN7bNd7qqxe725 + 5hoEieUu8Ne + XAZsu8fq6VBTR / t / UybvGyf5uiIxcgZAt1etBIRXLYR6UKr0o3ELOV + VgFofRx2NCAxgNnQG8JBXzADcz + dp / 5amIM2 + LDDVH77BvnxhNo1wk3K / awqfF9yUDQivF8REY / BpNTrO3p0A8 / hsKkwxlgAc2s5h5ppV9puctVH0 + K7mxfJ7mcVkftAMQ2HIP2Vw2jcXGl1AnQMLamnLqIfGtEqdQvnBgs30iC8bhL0ujikiIg / alz1Ec5JuZ8VI / fVEN4sd5WsGr3kT1F1RaZoVbFRiHhknzNgNdVE++Z1RTNOraxDW81aAzE8Qn + Scj8n8zSdM5DGk7gimydc6UKHUsSeQnd2W + 4BG3Fk50fd + mddi32Z3RaOzPaGSeNG1 / TRKJM4m8x9JFYA1HgQjx6vGkRljLUpudJyjYxdbLsoYnZPyrc13GT6TPl4FTfyAZjXs8kxrU + ebGD85pOU + zk5D / RVZI6PitjfFdwCNnzej + r7dKzhqkbvYzbUjTWzd7FX66ycDw4C8aYVTuUXe2e72yoMg2G / jpOQD0jg / i / 2nCOgC6wEWDXpCOX5NU0rtOtDalzbCccBVbeGNciGiAYYIl6Fj6Sb7o9jDi6ULw0Pp61MDjtk6nU11b4i2eMfEx1R6m6xIo5XTV2tMGJMmgToOaQhq7VBa0 + /6m4AWT46AlzZ6tLNurdy98fA1i0qWgeAC8kiVelR0iVNNazznYh03vW6yC5e1V1Gl0wR3EzXewWPCuvDqrtHXooOeuVpwWQAQtx0fwhs45SliIqn0sB+/fm8nLCqXy0tEmr9r3qjJe8us7H6wia1tmmMg5s7lES / z1VmChh5eUIqbruvPHErEXsIHUoiUS5j4giYK / 1ucVz7NG4xnepu6CAXaKs9fyZ6LIilFWb6DuYDafv6d / jdoTTppvtDGHYZD5KySsYBfMNcSH / 75HXdw33dXx23eRqci0zaWTpGNgcK7z4zmu7PIWJhqZbaBCUOQtcQzHhzV3dTO6bd6H2iO / du6TZVnbysTQoQW69ensqnZJvuDyZkfKXgyGxasaerugcAMmfuHN / TXdd0Txu9eaf7 + P7K9T0Te4SyVcvRAbtRC9wl + oZpuj8I65XyfaHM8OWjXBc3UZCDiKamGtd0HzZ6dy4OPvv + 6FbVumGISx6URZiMP52ZN1zo17JN94fiN+++g6Ia++Yf3d2KaLp6Ya0U4YpBgX1dlhUSJM95 + oTKnHd3ofimb4nIh6JQZmYSEK7WNvp1TNj1iAYAfFX3 + DaF1NWLCMqM + hiIuLaAW + D0RbpWIvZM7LZMywD + 6jJtNwG0WDol1JTdF50HFNgLFZEGQOT5obW / TYBQFe5ae8cz2c / K9cDE9zaFsQoX51hPJy0aI1Sp7 + iHmP4SB28iThdlPQcgnDrUz9MhXRhM4qnxNAL + Ibt9CtYSWm3j5MfEtINlo56RIrFZgdXJsCKdp + pNLk5DJRsGdTpxzFg6ph9eqZ3G08jf3tmw6iICHGg87O4a2ePKAh8BIH5wR52piqAg08 + IgjYy76HEWWe9b / jYk872t3OYUbG + wQ0Uf3BdugtpTkBy / mhxdkBLzDwR + 34dsxl7ePeozEeDJztL7 + H8yZqZL4x7iuugYT470XnMhYkaz2KZl / fGTzMISoS3i9 / IlVFL3hyvvSPd5 / KmImGdBGI++5Ioom2 + /Tz6eRXT9BaTpiyilHR5SvwyysnRAs4jKsJzdfbvOb3qzlP7Cj70c2+Hog+YkP/TfZIbP4QnAGrQdINBATJaOiAprIy8s1WWqQO / yogXnn5K24X4eXBUUL6nW3Bvg6YKevVNDa9f / WXpnFKOfhnTKaClERt / 2Lt3HABBKIiihPgJAeHtf7UWdsZWaM5ZxDRT3LeIUtMP8tXaOL + u0a3vaYJ8PK0aHTEWyHWUXiaHSlsYdwAAAAAAAAAAAAAAAAC42YMDAQAAAAAg / 9dGUFVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV2oMDAQAAAABB / tYbTFABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcAKjVT5soFk2cgAAAABJRU5ErkJggg == " data-original=" {
                { = data.data[0].imgUrl
                }
            }
            " alt="">
              </div>
              {{? data.data[0].title }}
              <div class="title ">{{= data.data[0].title}}</div>
              {{?}}
              {{? data.data[0].subTitle }}
              <div class="desc ">{{= data.data[0].subTitle}}</div>
              {{?}}
            </div>
          </div>
        </a>
      </div>
    {{?? data.style == 2}}
      <!-- banner_ad -->
      <div class="banner_ad ">
        <div class="inner ">
          {{~data.data:val:index }}
          <a href=" {
                { = val.linkUrl
                }
            }
            ">
            <img class="lazy " src="data: image / png;
            base64,
            iVBORw0KGgoAAAANSUhEUgAAAu4AAAFACAMAAADUPQn7AAAAOVBMVEXu7u67u7vr6 + u + vr7BwcHo6Ojl5eXf39 / Dw8PT09PKysri4uLW1tbc3NzQ0NDZ2dnHx8fMzMzOzs5vIJATAAAJcElEQVR42uzBgQAAAACAoP2pF6kCAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGD24EAAAAAAAMj / tRFUVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYtbPltmEYCqC4BPdV8v9 / bK1ajkVXsehMO5MqOE / Jg5bxgNQFSSGEEEIIIYQQQgghhBBCCCGEEEIIIcRpFENC / BQzLoqE + BksoC0J8TNMAEugET9EAFBJiL / KftPIUABMJMTfpDR8oW / I3stdOlbx96gJ8N8wJBsAnshpRCl48dcY / lJTaCJP2dC / ohyuWONKJxLigLpk86 + aQhMYi2joH7iA8SA9q / iEjVPMdi13Bgc6lgDooaY2LZxr1WP1bxbHHe50nrAw9CU2hyafhtMqWNybzwnATMd4qJ4admlD71F0rHgsoiPKXy13W6pfh4yE / zMyF9wFuppx5YZ2dJDoiJqxS9M7rAfY10RHjL / duWKh3iv0MHtssMzw56JsmzUe + KPc60hUBgodK4w7X1vATaQxxli3RpOh563lrrFIauhHcC3MnnHHWGmZ30 / BuhYu0TM6aw1Og + WeATQaoAJjMVu6wmJ4EdMxtvRIRxFK8Fixr5b2qVTy04 / AU3BmeWHcNBL / v4hdfEurHldtLPFnGpNCzWatx8WkaJDK / efnpVSxw + 4tWAaPHgNNbYby4lvupIk3OcYObR8tKOzY0kz + 2lDzinbNiXa4iLvpOenQyqQSIuPBL / RvhZ459PylWfJg2 / Xh8CTOIHnc + elprUSNNpLmVu6m1UtwanRR / 1W1k / Z0l2tWm9xx2U38AWB9xbjhua1 / Bnopa6w45jXhx21Y95JlTkRlxtXUFJFlYLNDageqhWyytgHQs36nq3P69SKkhqNVA9h1lb2YqFfxwBeniHj9R7uj3OMBjo5oW + Gp + wh9w0MS4mtUyfcpuXYx1Y1kmQm9qaqBmZ2xYEuf0Yhd6nH0wWI3XqSZ73M0XamKlVc0oKl + H0Ftl52YxAm1LiWUkSxjPR6momiAwU2iT / nNjFqeRgZ / 1qoaa9Xaf1b + mOkN7bNd7qqxe725 + 5hoEieUu8Ne + XAZsu8fq6VBTR / t / UybvGyf5uiIxcgZAt1etBIRXLYR6UKr0o3ELOV + VgFofRx2NCAxgNnQG8JBXzADcz + dp / 5amIM2 + LDDVH77BvnxhNo1wk3K / awqfF9yUDQivF8REY / BpNTrO3p0A8 / hsKkwxlgAc2s5h5ppV9puctVH0 + K7mxfJ7mcVkftAMQ2HIP2Vw2jcXGl1AnQMLamnLqIfGtEqdQvnBgs30iC8bhL0ujikiIg / alz1Ec5JuZ8VI / fVEN4sd5WsGr3kT1F1RaZoVbFRiHhknzNgNdVE++Z1RTNOraxDW81aAzE8Qn + Scj8n8zSdM5DGk7gimydc6UKHUsSeQnd2W + 4BG3Fk50fd + mddi32Z3RaOzPaGSeNG1 / TRKJM4m8x9JFYA1HgQjx6vGkRljLUpudJyjYxdbLsoYnZPyrc13GT6TPl4FTfyAZjXs8kxrU + ebGD85pOU + zk5D / RVZI6PitjfFdwCNnzej + r7dKzhqkbvYzbUjTWzd7FX66ycDw4C8aYVTuUXe2e72yoMg2G / jpOQD0jg / i / 2nCOgC6wEWDXpCOX5NU0rtOtDalzbCccBVbeGNciGiAYYIl6Fj6Sb7o9jDi6ULw0Pp61MDjtk6nU11b4i2eMfEx1R6m6xIo5XTV2tMGJMmgToOaQhq7VBa0 + /6m4AWT46AlzZ6tLNurdy98fA1i0qWgeAC8kiVelR0iVNNazznYh03vW6yC5e1V1Gl0wR3EzXewWPCuvDqrtHXooOeuVpwWQAQtx0fwhs45SliIqn0sB+/fm8nLCqXy0tEmr9r3qjJe8us7H6wia1tmmMg5s7lES / z1VmChh5eUIqbruvPHErEXsIHUoiUS5j4giYK / 1ucVz7NG4xnepu6CAXaKs9fyZ6LIilFWb6DuYDafv6d / jdoTTppvtDGHYZD5KySsYBfMNcSH / 75HXdw33dXx23eRqci0zaWTpGNgcK7z4zmu7PIWJhqZbaBCUOQtcQzHhzV3dTO6bd6H2iO / du6TZVnbysTQoQW69ensqnZJvuDyZkfKXgyGxasaerugcAMmfuHN / TXdd0Txu9eaf7 + P7K9T0Te4SyVcvRAbtRC9wl + oZpuj8I65XyfaHM8OWjXBc3UZCDiKamGtd0HzZ6dy4OPvv + 6FbVumGISx6URZiMP52ZN1zo17JN94fiN+++g6Ia++Yf3d2KaLp6Ya0U4YpBgX1dlhUSJM95 + oTKnHd3ofimb4nIh6JQZmYSEK7WNvp1TNj1iAYAfFX3 + DaF1NWLCMqM + hiIuLaAW + D0RbpWIvZM7LZMywD + 6jJtNwG0WDol1JTdF50HFNgLFZEGQOT5obW / TYBQFe5ae8cz2c / K9cDE9zaFsQoX51hPJy0aI1Sp7 + iHmP4SB28iThdlPQcgnDrUz9MhXRhM4qnxNAL + Ibt9CtYSWm3j5MfEtINlo56RIrFZgdXJsCKdp + pNLk5DJRsGdTpxzFg6ph9eqZ3G08jf3tmw6iICHGg87O4a2ePKAh8BIH5wR52piqAg08 + IgjYy76HEWWe9b / jYk872t3OYUbG + wQ0Uf3BdugtpTkBy / mhxdkBLzDwR + 34dsxl7ePeozEeDJztL7 + H8yZqZL4x7iuugYT470XnMhYkaz2KZl / fGTzMISoS3i9 / IlVFL3hyvvSPd5 / KmImGdBGI++5Ioom2 + /Tz6eRXT9BaTpiyilHR5SvwyysnRAs4jKsJzdfbvOb3qzlP7Cj70c2+Hog+YkP/TfZIbP4QnAGrQdINBATJaOiAprIy8s1WWqQO / yogXnn5K24X4eXBUUL6nW3Bvg6YKevVNDa9f / WXpnFKOfhnTKaClERt / 2Lt3HABBKIiihPgJAeHtf7UWdsZWaM5ZxDRT3LeIUtMP8tXaOL + u0a3vaYJ8PK0aHTEWyHWUXiaHSlsYdwAAAAAAAAAAAAAAAAC42YMDAQAAAAAg / 9dGUFVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV2oMDAQAAAABB / tYbTFABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcAKjVT5soFk2cgAAAABJRU5ErkJggg == " data-original=" {
                { = val.imgUrl
                }
            }
            " alt="">
          </a>
          {{~}}
        </div>
      </div>
    {{?? data.style == 3}}
      <!-- module_two -->
      <div class="module - two ">
        <div class="inner ">
          {{~data.data:val:index }}
            <div class="box ">
              <a href=" {
                { = val.linkUrl
                }
            }
            ">
                {{? val.title || val.subTitle}}
                <div class="title ">
                  <p>{{= val.title}}</p>
                  <p>{{= val.subTitle}}</p>
                </div>
                {{?}}
                <div class="img_box " style=" {
                { = !val.title && !val.subTitle ? 'width:100%;height:100%;margin:0;': ''
                }
            }
            ">
                  <img src=" {
                { = val.imgUrl
                }
            }
            " onerror="this.style.width = 0;
            " alt="">
                </div>
              </a>
            </div>
          {{~}}
        </div>
      </div>
    {{?? data.style == 4}}
      <!-- module_three -->
      <div class="module - three ">
        <div class="inner ">
          <div class="l ">
            <a href=" {
                { = data.data[0].linkUrl
                }
            }
            ">
              <div class="title ">
                <p>{{= data.data[0].title}}</p>
                <p>{{= data.data[0].subTitle}}</p>
              </div>
              <div class="img_box ">
                <img src=" {
                { = data.data[0].imgUrl
                }
            }
            " onerror="this.style.width = 0;
            " alt="">
              </div>
            </a>
          </div>
          <div class="r ">
            <div class="box ">
              <a href=" {
                { = data.data[1].linkUrl
                }
            }
            ">
                <div class="title ">
                  <p>{{= data.data[1].title}}</p>
                  <p>{{= data.data[1].subTitle}}</p>
                </div>
                <div class="img_box ">
                  <img src=" {
                { = data.data[1].imgUrl
                }
            }
            " onerror="this.style.width = 0;
            " alt="">
                </div>
              </a>
            </div>
            <div class="box ">
              <a href=" {
                { = data.data[2].linkUrl
                }
            }
            ">
                <div class="title ">
                  <p>{{= data.data[2].title}}</p>
                  <p>{{= data.data[2].subTitle}}</p>
                </div>
                <div class="img_box ">
                  <img src=" {
                { = data.data[2].imgUrl
                }
            }
            " onerror="this.style.width = 0;
            " alt="">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    {{?? data.style == 5}}
      {{? data.appDisplay == "isbn " }}
        {{? data.showStyle == 3 }}
          <!-- item-list -->
          <div class="item - list ">
            <ul class="inner ">
              {{? data.data.length > 0 }}
              {{~data.data[0].data:val:index }}
              <li>
                <a href=" / item / {
                { = val.mid
                }
            }
            ">
                  <div class="l ">
                    <img class="lazy " src="data: image / png;
            base64,
            iVBORw0KGgoAAAANSUhEUgAAATsAAAG5CAMAAADGemMmAAAAZlBMVEUAAADu7u7v7 + /v7+/v7 + /v7+/v7 + /v7+/v7 + /u7u7u7u7w8PDx8fH09PT/ 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" data-original="{{= val.imgUrl}}" alt="">
            < div class = "price" > <span > ￥ < /span>
                      <span>{{= +val.price}}</span > <span > 起 < /span></div > </div>
                  <div class="r" style="{{= data.showMoreType != '2' && index== data.data[0].data.length-1?'border-bottom: 0':''}}">
                    <div class="title">{{= val.itemName}}</div > <div class = "author" > {
                { = val.author
                }
            }
            / {{= val.press}} / {
                { = val.pubDate
                }
            }
            / {{= val.binding}}</div > <div class = "desc" > {
                { = val.contentIntroduction
                }
            } < /div>
                  </div > </a>
              </li > {
                {~
                }
            } {
                { ?
                }
            } < /ul>
            {{? data.showMoreType == "2" }}
            <!-- change_box -->
            <div class="change_box change_box_list" data-index='2'>
              <div class="box">换一换 <img src="data:image/png;
            base64,
            iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAclBMVEUAAAA2WJk2WJk3WZtEbak2WJk2WZk2WJo3WJo3Wpo4Wps3Wps3W546XaI2WZo3WZo2WJo2WZo5Wps5WZo7W5s9YZ42WZk3WZo2WJo3WZo3WZo2WJk2WJo4Wpo3WZs2WZk3WZo4W5uAgP83WZo4WZk2WJmQgH9YAAAAJXRSTlMA9fBnCN / X6rBWUkIoDujJt5wyLB0VzIXSu6ali3tbUEs5ApBf2p / i4wAAANBJREFUOMvt08kSgjAQBNDMkARiCJss7nv //y+6XBQdLao8cKFPTNc7JExFTRk3IUoM8SK5hJ9Md4S4KNctg7ZahcVRdqlF4U+Pz30Om1aIZJexe047ypwMg+HqdfZMMixx6BcOIqyxeq+WIuww/7ycdOvcqmGJzwNhrf9YqG4Gwk02ENpcKKv44/fM0QlwhuV7tUItQrh+c0CpREjse2dhE2QYGdo9Z8e3Q8vQNy3y/WM4+QI2/bKZpFF6m4HbdVnEoI3+vYv74yKTRI2aMmquGSELMu+krSYAAAAASUVORK5CYII=" alt=""></div>
            < /div>
            {{?}}
          </div > {
                { ? ?
                }
            } < !--free_mode--><div class = "free_mode" > <!--Swiper--><div class = "swiper-container free_mode_swiper gallery_swiper gallery_swiper{{= it.index+i}}"data - cl = ".gallery_swiper{{= +it.index+i}}" > <div class = "swiper-wrapper" > {
                { ? data.data.length > 0
                }
            } {
                {~data.data[0].data: val: index
                }
            } < div class = "swiper-slide" > <a href = "/item/{{=val.mid}}" > <div class = "box" > <div class = "img_box" > <img src = "{{=val.imgUrl}}"onerror = "this.style.width=0;"alt = "" ></div>
                        <div class="title">{{=val.itemName}}</div > <div class = "author" > {
                { = val.author
                }
            } < /div>
                        <div class="price">
                          <span>￥</span > <span > {
                { = +val.price
                }
            } < /span><span>起</span > </div></div > </a>
                  </div > {
                {~
                }
            } {
                { ?
                }
            } < /div>
            </div > </div>
        {{?}}
      {{?? data.appDisplay == "product"}}
        {{? data.showStyle == 3 }}
          <!-- newSquareBox_list -->
          <div class="newSquareBox_list">
            <ul class="inner">
              {{? data.data.length > 0 }}
              {{~data.data[0].data:val:index }}
              <li>
                <a href="{{= it.site.s_mbook}}{{= val.shopId}}/ {
                { = val.itemId
                }
            }
            ">
                  <div class="l ">
                    <img class="lazy " src="data: image / png;
            base64,
            iVBORw0KGgoAAAANSUhEUgAAATsAAAG5CAMAAADGemMmAAAAZlBMVEUAAADu7u7v7 + /v7+/v7 + /v7+/v7 + /v7+/v7 + /u7u7u7u7w8PDx8fH09PT/ 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" data-original="{{= val.imgUrl}}" alt="">
            < div class = "price" > <span > ￥ < /span>
                      <span>{{= +val.price}}</span > </div></div > <div class = "r"style = "{{= index== data.data[0].data.length-1?'border-bottom: 0':''}}" > <div class = "title" > {
                { = val.itemName
                }
            } < /div>
                    <div class="desc">{{= val.importantDesc}}</div > <div class = "sign_box" > {
                {~val.tags: name: k
                }
            } < span > {
                { = name
                }
            } < div class = "jiao" > <div class = "jiao-inner" > </div></div ></span>
                      {{~}}
                    </div > </div>
                </a > </li>
              {{~}}
              {{?}}
            </ul > </div>
        {{?? data.sycModuleId != '22'}}
          <!-- book-list -->
          <div class="book-list">
            <!-- Swiper -->
            <div class="swiper-container book-list-swiper{{= it.index+i}}" data-cl=".book-list-swiper{{= +it.index+i}}">
              <div class="swiper-wrapper">
                {{? data.data.length > 0 }}
                {{~data.data[0].data:val:index }}
                <div class="swiper-slide">
                  <a href="{{= it.site.s_mbook}}{{= val.shopId}}/ {
                { = val.itemId
                }
            }
            ">
                    <div class="box ">
                      <div class="img_box ">
                        <img src=" {
                { = val.imgUrl
                }
            }
            " onerror="this.style.width = 0;
            " alt="">
                      </div>
                      <div class="title ">{{= val.itemName}}</div>
                      <div class="price ">
                        <span class="s ">￥</span><span class="v ">{{= +val.price}}</span></div>
                    </div>
                  </a>
                </div>
                {{~}}
                {{?}}
              </div>
            </div>
          </div>
        {{??}}
          <!-- 特色推荐 (频道页模块) -->
          <div class="feature_box ">
            <div class="swiper - container swiper - container - feature {
                { = it.index + i
                }
            }
            " data-cl=".swiper - container - feature {
                { = +it.index + i
                }
            }
            ">
              <div class="swiper - wrapper ">
                {{~data.data:val:index }}
                <div class="swiper - slide {
                { = index == 0 ? 'active': ''
                }
            }
            feature_swiper - slide " data-active=" {
                { = index == 0 ? '1': '0'
                }
            }
            " data-index=" {
                { = index
                }
            }
            "><span>{{= val.subTitle}}</span></div>
                {{~}}
              </div>
            </div>
            {{~data.data:val:index }}
            <div class="inner ">
              <ul>
                {{~val.data:value:j }}
                <li>
                  <a href=" {
                { = it.site.s_mbook
                }
            } {
                { = value.shopId
                }
            }
            /{{= value.itemId}}">
                    <div class="img_box"><img class="lazy" src="data:image/png;
            base64,
            iVBORw0KGgoAAAANSUhEUgAAATsAAAG5CAMAAADGemMmAAAAZlBMVEUAAADu7u7v7 + /v7+/v7 + /v7+/v7 + /v7+/v7 + /u7u7u7u7w8PDx8fH09PT/ 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" data-original="{{= value.imgUrl}}" alt=""/></div>
            < div class = "title" > {
                { = value.itemName
                }
            } < /div>
                    <div class="price"><span>￥</span > <span > {
                { = +value.price
                }
            } < /span></div > </a>
                </li > {
                {~
                }
            } < /ul>
            </div > {
                {~
                }
            } < /div>
        {{?}}
      {{?? data.appDisplay == "shopAndProduct"}}
        <!-- 书店-旧书店-有故事 (频道页模块) -->
        <div  class="story_box">
          <div class="swiper-container swiper-container-feature{{= it.index+i}}" data-cl=".swiper-container-feature{{= +it.index+i}}">
            <div class="swiper-wrapper">
              {{~data.data:val:index }}
              <div class="swiper-slide {{= index == 0?'active':''}} story_box-swiper-slide" data-active="{{= index == 0?'1':'0'}}" data-index="{{= index}}"><span>{{= val.subTitle}}</span ></div>
              {{~}}
            </div > </div>
          {{~data.data:val:index }}
          <div class="inner">
            <ul class="inner_ul">
              {{~val.data:value:j }}
              <li class="list">
                <div class="top_box clearfix">
                  <a href="/shop / {
                { = value.shopId
                }
            }
            /#/">
                    <div class="img_box "><img class="lazy " src="data: image / png;
            base64,
            iVBORw0KGgoAAAANSUhEUgAAATsAAAG5CAMAAADGemMmAAAAZlBMVEUAAADu7u7v7 + /v7+/v7 + /v7+/v7 + /v7+/v7 + /u7u7u7u7w8PDx8fH09PT/ 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" data-original="{{= value.userPic}}" alt=""/></div>
            < div class = "info_box" > <div class = "name" > <span > {
                { = value.shopName
                }
            } < /span>
                        <span class="level {{= value.shopClassName}}"></span ></div>
                      <div class="ins">{{= value.tags[0]}}{{= value.tags[1]?' | '+value.tags[1]:''}}</div ></div>
                    <div class="btn">进店</div > </a></div > <ul class = "story_shop_list" > {
                {~value.data: v: k
                }
            } < li > <a href = "{{= it.site.s_mbook}}{{= v.shopId}}/{{= v.itemId}}" > <div class = "img_box" > <img class = "lazy"src = "data:image/png;base64,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"data - original = "{{= v.imgUrl}}"alt = "" / ></div>
                      <div class="title">{{= v.itemName}}</div > <div class = "price" > <span > ￥ < /span><span>{{= +v.price}}</span > </div></a > </li>
                  {{~}}
                </ul > </li>
              {{~}}
            </ul > </div>
          {{~}}
        </div > {
                { ? ?data.appDisplay == "pm"
                }
            } {
                { ? data.showStyle == 3
                }
            }

            {
                { ? ?
                }
            } < !--book - list--><div class = "book-list" > <!--Swiper--><div class = "swiper-container book-list-swiper{{= it.index+i}}"data - cl = ".book-list-swiper{{= +it.index+i}}" > <div class = "swiper-wrapper" > {
                { ? data.data.length > 0
                }
            } {
                {~data.data[0].data: val: index
                }
            } < div class = "swiper-slide" > <a href = "{{= it.site.mpm}}{{=val.itemId}}" > <div class = "box" > <div class = "img_box" > <img src = "{{=val.imgUrl}}"onerror = "this.style.width=0;"alt = "" > <div class = "num" > {
                { = val.bidNum
                }
            }次出价 < /div>
                      </div > <div class = "title" > {
                { = val.itemName
                }
            } < /div>
                      <div class="price">
                        <i>{{= val.pmprice.n}}</i > <span class = "s" > ￥ < /span><span class="v">{{= +val.pmprice.c}}</span > </div></div > </a>
                </div > {
                {~
                }
            } {
                { ?
                }
            } < /div>
            </div > </div>
        {{?}}
      {{?}}
    {{?? data.style == 6 }}
        <!-- 猜你喜欢 -->
    {{?? data.style == 7 }}
      <!-- 书单 -->
      <!-- tuijina_list -->
      <div class="tuijina_list">
        <!-- Swiper -->
        <div class="swiper-container tuijina_list_swiper tuijina_list_swiper{{= it.index+i}}" data-cl=".tuijina_list_swiper{{= +it.index+i}}">
          <div class="swiper-wrapper">
            {{~data.data:val:index }}
            <div class="swiper-slide">
              <a href="{{= val.linkUrl}}">
                <div class="box" style="{{= !data.data[0].title && !data.data[0].description ?'padding-bottom: 0;':'' }}">
                  <div class="img_box">
                    <img src="{{= val.imgUrl}}" onerror="this.style.width=0;" alt=""></div > <div class = "title"style = "{{= !data.data[0].title?'height: 0.2rem;margin: 0;':''}}" > {
                { = val.title
                }
            } < /div>
                  {{? data.data[0].description }}
                  <div class="desc">{{= val.description}}</div > {
                { ?
                }
            } < /div>
              </a > </div>
            {{~}}
            <div class="swiper-slide slide_last">
              <a href="/booklist / ">
                <div class="box " style="width: 100 % ;
            position: relative;
            background: #fafafa; {
                { = !data.data[0].title && !data.data[0].description ? 'padding-bottom: 0;': ''
                }
            }
            ">
                  <div class="img_box " style="width: 100 % ;
            background: none;
            "></div>
                  <div class="title " style=" {
                { = !data.data[0].title ? 'height: 0.2rem;margin: 0;': ''
                }
            }
            "></div>
                  {{? data.data[0].description }}
                  <div class="desc "></div>
                  {{?}}
                  <div class="showBookList ">查看全部{{= data.count}}个书单</div></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    {{?? data.style == 8 }}
      <!-- 拍卖专场 -->
      <!-- special_list -->
      <div class="special_list ">
        <!-- Swiper -->
        <div class="swiper - container special_list_swiper special_list_swiper {
                { = it.index + i
                }
            }
            " data-cl=".special_list_swiper {
                { = +it.index + i
                }
            }
            ">
          <div class="swiper - wrapper ">
            {{~data.data:val:index }}
            <div class="swiper - slide ">
              <a href=" {
                { = it.site.mpm
                }
            }
            special / {
                { = val.specialAreaId
                }
            }
            ">
                <div class="box ">
                  <div class="title ">{{=val.name}}</div>
                  <div class="inner ">
                    {{~val.data:name:imgI }}
                    <div class="img_box ">
                      <img src=" {
                { = name.imgUrl
                }
            }
            " onerror="this.style.width = 0;
            " alt="">
                    </div>
                    {{~}}
                  </div>
                  <div class="bottom clearfix ">
                    <span>{{=val.time}}</span>
                    <span>{{=val.num}}件拍品</span></div>
                </div>
              </a>
            </div>
            {{~}}
          </div>
        </div>
      </div>
    {{?}}
    {{? data.showMoreType == "1 " && data.style < 9}}
    <!-- change_box -->
    <div class="change_box ">
      <div class="box "><a href=" {
                { = data.showMoreUrl
                }
            }
            ">更多 <img src="data: image / png;
            base64,
            iVBORw0KGgoAAAANSUhEUgAAACgAAAAoBAMAAAB + 0KVeAAAAG1BMVEUAAAA3WZpAgL82WZo3Wps7XZs3WZo2WJk2WJmVvPRoAAAACHRSTlMArATvMylhcYgfyM8AAAAySURBVCjPYxhZgBWbYIYQFsHgRgVMQRYLbEqd6aeUraOAgEqEmbRXiAglwuHJyjCsAQC4zQsR0bEKKAAAAABJRU5ErkJggg == " alt=""></a></div>
    </div>
    {{?}}

  {{~}}
  "</script>
        <!-- 猜你喜欢 -->
        <script id="recommend_list" type="text/x-dot-template">{
                { ? it.list.length > 0
                }
            } < !--line_gray--><div class = "line_gray" > <div class = "box" > </div></div > <!--recommend_area--><div class = "area recommend_area" > <div class = "title" > <span style = "font-weight: bold;" > 为您推荐 < /span>
        <!-- <a href="">更多<img src="../.. / modules / index / images / icon_right_blue@2x.png " alt=""></a> --></div>
    </div>
    {{?}}
    <!-- recommend_list -->
    <div class="recommend_list ">
      <ul>
        {{~it.list:data:i }}
        <li>
          <a href=" {
                { = data.mobileUrl
                }
            }
            ">
            <div class="img_box ">
              <img class="recommend_lazy " src="data: image / png;
            base64,
            iVBORw0KGgoAAAANSUhEUgAAAu4AAALuCAMAAADGw2P4AAAAQlBMVEUAAADu7u67u7vr6 + u / v7 / j4 + Pm5ubExMTc3NzOzs7KysrR0dHBwcHo6OjZ2dnU1NTV1dXe3t7GxsbX19fg4ODIyMiL1mNMAAAAAXRSTlMAQObYZgAAFqBJREFUeNrs0gEBAAAIwyDtX / pBBhm4hwzdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN3HLh0IAAAAAAjytx7kYogR3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdiV06EAAAAAAQ5G89yMXQiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozELh0TAQCDABC7CigT / rUi5BMN0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdW3b + C9O95di5tyU5QSAMwNXdgBzkoOj7v2p2zU50AkyMstEU812kKltb1o7zC02jekQloFnvuLfF4ocArXrHvTEGP4ytVjTvuDfG4qe + 0YLmHffWjPipI2jRO + 6tCbjw0KJ33FvDcdFDi95xbw3hT9CiluJOQRkOzetx0WTx3lLcOX4YJTRuxkWTvciW4g6iww / dBE3T27hL5Vua8JqK + 2NkU01O5A8GFxwA7HI + DDSjsbgTw08jwffgWoXp5heTxwUzQeFP + uZ / cS3NxR0kLhR8g0eSmBrgjog + /5l6TLBWFjT/Vdy5m + AshgsB9ckOH3oHt + PwBd3GyvW / inuHyIyFU8w3bSoK3 + PWfLsCweErDFpw17gPPSLTgcPqEdVw7sC46KASsoLLoBn + rrvdeNklETfT + jML34qkMXEQcKXbxt3gl35bB0 + 4mOEEwtO7LI4xfO2ed2GJHrd6RwDmn8SdpGK4YEHAZW4ad5rz6yjCCgvNDhf83BEuyjsRnECmwwc9wafw3XEn7lSHW + MAF7ln3EWPzwJ8wS8DHKdwIeEwsS / v9fudS1OFdTpwOExMcdtrV / hAUJnl0useM2YLl7hj3CeDCQ4 / 4ZcRjou4iHAcadxHQEXk8ZfeExxF248 / 4gNUJKTp2B3rvFvFnYagMcfDTzWGoqlGa0YyTLDZBMNwo4NaiEeNi / NXPG0mTItVR3cSgzO6wz / ScIW7xN1yGdTMsMTDgmoUmrbKRpPV + IR5Dp9CMimdI + dR67HHlIODxJq37TTVKxMcJziAxCSD0YUBvVPeuaiT + foCl8aduIxezR3bWxSIKkNRpX1VoTZhjwSLp7hLOG9gWNDBQRo / mUFmp9LREewmhrikvISp9QKyM24YuMCVcZcd7tRx + IlXqRK6WtOpDWOSEIW / DFADBYZ5cAgf8Q8Yhx3s2nDJYzoKeKKvr2aui7vCfZiEB4k1OpF6bd6fRlxKu / 0 / S0Jz1jownC / erRvxz3p4bVmJvj5C9gQQa7iYEQwLipvxYa1bTzBrWqrzf5322cGfTRoTCv4K8ah63IfgpRFfGf1Ay1jGpvTsNLxU5XvyrmDDVNkSCd8X9 + mvRy / a + avWaYZPAhQMJjg5CWEtkRV8ktGrkWEei4P84JyLMYYP3vsAr3ks6IwTsJDZkyDxQcAVrl2q2hkT / ashTCNWiKrbFjM8GK2N43DeNu0T7CTSkc4arb2AlIg9riIUcHyBKRlwI8IBrk + /NxU5/X4meir8ZTNc4upGpGO4wQwHoFhe0IzrwHZCfKx2hdOs5h27 / kBPhidD3VdUDEGKxnR0T / ly1gcCINxQMgr4e1wxXI1OwDOXLTrtWoxe4 + q + O5n1q5jgpwEXmdGhP1XLWDlxIUSpNTHAObI / MmTyTFNOlt9rJ3a18iTDVG8mWLgqWz40mO7ruAISPn9JXlzLXB53AAojY7PnsFKlAvhcLRPxJQnHkTTsWE9Z5JaGprzaHXctVa3CZ3Pg6SHON0msEEQSUjpf07F1LXyFG8Q9QxamazpXy3As0o5bOI7Y4ZaJyM0GFhfMQsLjvvqXwiPVnYocVlOHzyKclKsDu / wjI921j5LcM + 6lJzDEyanQYZaSBOfY47WBzX7SsTiNDX + xq0pCWIIt4Xt8xgLsZiFrTEtxKkxz87Uv7Ltn3GV + kj3 / IJI1LKloA8F58 + HagLIXsC + WRXT4aTsbNEuXrrDfiMxbSKm0EOSFcUm9456Sha / anb + XkWL / HU8akByTHuRO2Y80lBcU / dGbCDQ + i5OAv0GssMIx6TXuCvOcecc9FdOuzCJU2X9em5 / jBPUM7Fijg + WqFlGqWE48jzExPHePFmf5Ut + n35YqFJ3 + HfdUKPQFTZ11jmDf8m4V2x9qKo / Z6JaH8Hh4Z9LOuHHgUh / yr + jw6ajfF5bs8R33lCn0HXSl2y3i97x6gx / KocrOWH0x7vxEA1HwD0KtH3 + 5yWAYBOxjstezSn5Gpd0R9 + 7MpHRh8Bkr7cgNazuzKp3ZHePeDwQv + GyNPhcrFjq9URAw4WEXyhZCLJksZOmY8h33VFc4IX2lHblp7TdXFfFLN9nl3qxHL6TTxpWGUJe99gx + UZScnbM78QZTsE + XuTyG9LJU + bXXelMRXOOecf / B3rl2sQnCYPhwvwte + v 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" data-original="{{= data.imgMiddle}}" alt="">
            < /div>
            <div class="title">{{= data.itemName}}</div > <div class = "middle_box clearfix" > <div class = "phase" > {
                { = data.quality
                }
            } < /div>
              <div class="address">{{= data.area}}</div ></div>
            <div class="price">
              <span>￥</span > <span > {
                { = +data.price
                }
            } < /span>
            </div > </a>
        </li > {
                {~
                }
            } < /ul>
    </div > <!--no - more--><div class = "no-more" > <div class = "inner" > -没有更多 - </div></div > </script>
        <script>var baseInfo = {
                site: {
                    "s_kfzimg": "https://www.kfzimg.com/",
                    "res2": "https://res2.kongfz.com/",
                    "gateway": "http://gateway.kongfz.com/",
                    "login": "https://login.kongfz.com/",
                    "message": "http://message.kongfz.com/",
                    "s_message": "https://message.kongfz.com/",
                    "mmessage": "http://mmessage.kongfz.com/",
                    "s_mmessage": "https://mmessage.kongfz.com/",
                    "m": "https://m.kongfz.com/",
                    "t": "https://t.kongfz.com/",
                    "davUpload": "http://image-upload.kongfz.com/",
                    "s_davUpload": "https://image-upload.kongfz.com/",
                    "mpm": "http://m.kongfz.cn/",
                    "s_mpm": "https://m.kongfz.cn/",
                    "wechat": "https://wechat.kongfz.com/",
                    "book": "http://book.kongfz.com/",
                    "s_book": "https://book.kongfz.com/",
                    "xinyu": "http://xinyu.kongfz.com/",
                    "s_xinyu": "https://xinyu.kongfz.com/",
                    "shop": "http://shop.kongfz.com/",
                    "s_shop": "https://shop.kongfz.com/",
                    "mbook": "http://mbook.kongfz.com/",
                    "s_mbook": "https://mbook.kongfz.com/",
                    "www": "http://www.kongfz.com/",
                    "s_www": "https://www.kongfz.com/",
                    "item": "http://item.kongfz.com/",
                    "s_item": "https://item.kongfz.com/",
                    "operation": "http://operation.kongfz.com/",
                    "s_operation": "https://operation.kongfz.com/"
                }
            }</script>
        <script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.6.0.js"></script>
        <script type="text/javascript" src="https://b.bdstatic.com/searchbox/icms/searchbox/js/swanInvoke.js"></script>
        <script type="text/javascript" src="/dist/runtime/runtime.4aa80e0b54e9029b63f7.js"></script>
        <script type="text/javascript" src="/dist/zepto/zepto.4aa80e0b54e9029b63f7.js"></script>
        <script type="text/javascript" src="/dist/index/index.d8d1e2e068563867f553.js"></script>
    </body>

</html>
