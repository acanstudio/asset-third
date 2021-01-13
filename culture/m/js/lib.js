$(function() {
	var a = /UCBrowser/.test(window.navigator.userAgent);
	var d = /(iPhone|iPad)\sOS\s7_[\d]+/.test(window.navigator.userAgent);
	if ($.os.ios) {
		$(window).on("load",
		function() {
			setTimeout(function() {
				window.scrollTo(0, 1)
			},
			100)
		})
	}
	function c() {
		if ($.os.ios && !d) {
			if (navigator.userAgent.indexOf("Safari") != -1 && navigator.userAgent.indexOf("MQQBrowser") == -1) {
				if ($("#area_bottomMenu").length > 0) {
					$("#area_bottomMenu").css("bottom", "-62px");
					$("#area_body").css("bottom", "-17px")
				} else {
					$("#area_body").css("bottom", "-61px")
				}
			} else {
				$("#area_bottomMenu").css("bottom", "0px")
			}
			k();
			setTimeout(function() {
				window.scrollTo(0, 1)
			},
			100)
		} else {
			if ($("#area_bottomMenu").length > 0) {
				$("#area_bottomMenu").css("bottom", "-1px");
				$("#area_body").css("bottom", "44px")
			} else {
				$("#area_body").css("bottom", "0px")
			}
		}
	}
	$("#area_bottomMenu").on("touchmove",
	function(o) {
		o.preventDefault()
	});
	function k() {
		var s = $(window).height();
		var r = $("#area_top").height();
		var o = $("#area_bottom").height();
		var q = $("#area_bottomMenu").height();
		if ($.os.ios && !d) {
			if (navigator.userAgent.indexOf("Safari") != -1 && navigator.userAgent.indexOf("MQQBrowser") == -1) {
				if ($("#area_bottomMenu").length > 0) {
					var p = s - r - o - q + 62
				} else {
					var p = s - r - o - q + 61
				}
			} else {
				if (navigator.userAgent.indexOf("MQQBrowser") != -1) {
					var p = s - r - o - q + 44
				} else {
					var p = s - r - o - q + 40
				}
			}
		} else {
			var p = s - r - o - q
		}
		$("#area_main").css("min-height", s - q + "px");
		$("#area_content").css("min-height", p + "px");
	}
	k();
	var f = window.lazyLoad = function() {
		var q = {
			defObj: "body",
			defHeight: 30,
			imgDispMode: "lc"
		};
		var s, w, u;
		var p = "lazy-src";
		var x = function(y) {
			q = $.extend(q, y || {});
			s = q.defHeight;
			if (u) {
				u = u.add((typeof q.defObj == "object") ? q.defObj.find("img[" + p + "]") : $(q.defObj).find("img[" + p + "]"))
			} else {
				u = (typeof q.defObj == "object") ? q.defObj.find("img[" + p + "]") : $(q.defObj).find("img[" + p + "]")
			}
			w = q.imgDispMode
		};
		var r = document.documentElement.clientHeight + q.defHeight;
		var t = function() {
			u.each(function() {
				var z = $(this);
				if (z.offset().top <= r) {
					var y = $(this).attr(p);
					if (y) {
						y = v(w, y);
						z.one("load",
						function() {
						});
						z.attr("src", y).removeAttr("lazy-src")
					}
				}
			})
		};
		var o = function(z) {
			w = z = z || "lc";
			if (a && z != "lc") {
			} else {
				if (z == "lc") {
					$("#hdLink").remove()
				} else {
					var y = window.devicePixelRatio;
					w = z = y > 1.5 ? "gq": "pq";
					$("#hdLink").remove();
				}
				n({
					imgDispMode: z
				},
				2400 * 60 * 60 * 1000);
				u.each(function() {
					var A = $(this);
					var B = A.attr("src");
					if (B) {
						A.attr("src", v(z, B))
					}
				})
			}
		};
		function v(z, y) {
			z = z || "lc";
			return y.replace(/(\/imageRepository\/)(\w\w)(_[^\/]*\/[^\/]*)$/i, "$1" + z + "$3")
		}
		return {
			setting: x,
			imgLoader: t,
			changeImgMode: o
		}
	} ();
	var h = window.localStorage.getItem("browseMode");
	if (h == "close") {
		f.setting({
			imgDispMode: "lc"
		})
	} else {
		var b = i().imgDispMode;
		if (b) {
			if (b != "lc") {
				f.setting({
					imgDispMode: b
				})
			}
		} else {
			h = h || "lc";
			f.setting({
				imgDispMode: h
			})
		}
	}
	f.setting({
		defObj: "body"
	});
	f.imgLoader();

	if ($(".z3g-pageNoIscroll").length) {
	}
	if ($.os.ios && $(".z3g-pageProductDetail,.z3g-pageNewsDetail,.z3g-pageSearch").size() > 0) {
		$("input,textarea").css("pointer-events", "none");
		$(document).on("touchstart",
		function(o) {
			$("input,textarea").css("pointer-events", "auto")
		}).on("touchmove",
		function(o) {
			o.preventDefault();
			$("input,textarea").css("pointer-events", "none")
		}).on("touchend",
		function() {
			setTimeout(function() {
				$("input,textarea").css("pointer-events", "none")
			},
			0)
		})
	}
	$(".bodyActive").on("touchstart", ".active,.zzp-tel,.BMap_button",
	function() {
		$(this).addClass("touch")
	}).on("touchmove", ".active,.zzp-tel,.BMap_button",
	function() {
		$(this).removeClass("touch")
	}).on("touchend", ".active,.zzp-tel,.BMap_button",
	function() {
		$(this).removeClass("touch")
	});
	var g = false;
	if ($.os.ios && navigator.userAgent.indexOf("Safari") != -1 && navigator.userAgent.indexOf("MQQBrowser") == -1) {
		$(window).on("orientationchange",
		function(o) {
			g = true;
			setTimeout(function() {
				e(o)
			},
			100)
		}).on("resize",
		function(o) {
			k();
			if (g || a) {
				e(o);
				g = false
			}
		})
	}
	function e(p) {
		if (window.orientation != null && window.orientation != 0 || window.orientation == null && l() || !p && l()) {
			c();
			$("#area_html").hide();
			var o = $("#OrientationTips");
			if (o.length == 0) {
				o = $('<div class="hScreenBox"><div class="contentBox"><p>' + window.hScreenAlert + "</p></div></div>");
				o.attr("id", "OrientationTips");
				o.css({
					position: "absolute",
					top: 0,
					left: 0
				});
				o.appendTo("body")
			}
			o.css({
				width: "100%",
				height: "100%"
			});
			o.show()
		} else {
			$("#OrientationTips").hide();
			if (p) {
				$("#area_html").show()
			} else {
				c();
			}
		}
	}
	function l() {
		return ! j($.os) && ($(window).height() < $(window).width())
	}
	function j(p) {
		for (var o in p) {
			return false
		}
		return true
	}
	function i() {
		var r = document.cookie.split(/;\s?/),
		o = {};
		for (var q = 0,
		s = r.length; q < s; q++) {
			var p = r[q].split("=");
			if (p.length == 2) {
				o[p[0]] = p[1]
			}
		}
		return o
	}
	function n(q, r) {
		var s = new Date(),
		p = "",
		r = r || 1 * 60 * 60 * 1000;
		s.setTime(s.getTime() + r);
		if (typeof q == "string") {
			p = window.encodeURI(q)
		} else {
			for (var o in q) {
				p += o + "=" + window.encodeURIComponent(q[o]) + ";"
			}
		}
		document.cookie = p + " expires=" + s.toGMTString()
	}
	function m() {
		var q = localStorage.getItem("text_fontsize");
		var p = $(".fontSizeBtn").find(".active");
		if (q) {
			p.removeClass("touch");
			p.removeClass("current")
		}
		p.each(function(r) {
			$(this).data("ac_code", r + 1)
		});
		if (q == 1) {
			$(p[q - 1]).removeClass("current").addClass("current");
			$(".htmlFontSize").removeClass("textSizeBig textSizeSmall").addClass("textSizeSmall")
		} else {
			if (q == 2) {
				$(p[q - 1]).removeClass("current").addClass("current");
				$(".htmlFontSize").removeClass("textSizeBig textSizeSmall")
			} else {
				if (q == 3) {
					$(p[q - 1]).removeClass("current").addClass("current");
					$(".htmlFontSize").removeClass("textSizeBig textSizeSmall").addClass("textSizeBig")
				}
			}
		}
		$(".fontSizeBtn").unbind("click").bind("click",
		function(r) {
			o(r);
			if ($(".fontSizeBox").css("display") == "none") {
				$(".fontSizeBox").show(200)
			} else {
				$(".fontSizeBox").hide(200)
			}
			$(this).css("position", "relative")
		});
		$(".fontSizeBtn").bind("touchstart",
		function(r) {
			o(r)
		});
		$(".bodyActive").bind("touchstart",
		function() {
			$(".fontSizeBox").hide()
		});
		$(".fontSizeBox").bind("touchstart",
		function(r) {
			o(r)
		});
		p.unbind("click").bind("click",
		function(r) {
			o(r);
			$(".fontSizeBox").hide(200);
			p.removeClass("current");
			$(".fontSizeBtn").css("position", "");
			if ($(this).data("ac_code") == 1) {
				localStorage.setItem("text_fontsize", 1);
				$(this).removeClass("current").addClass("current");
				$(".htmlFontSize").removeClass("textSizeBig textSizeSmall").addClass("textSizeSmall")
			} else {
				if ($(this).data("ac_code") == 2) {
					localStorage.setItem("text_fontsize", 2);
					$(this).removeClass("current").addClass("current");
					$(".htmlFontSize").removeClass("textSizeBig textSizeSmall")
				} else {
					if ($(this).data("ac_code") == 3) {
						localStorage.setItem("text_fontsize", 3);
						$(this).removeClass("current").addClass("current");
						$(".htmlFontSize").removeClass("textSizeBig textSizeSmall").addClass("textSizeBig")
					}
				}
			}
		});
		function o(r) {
			if (r == window.event) {
				r.cancelBubble = true
			} else {
				if (r) {
					r.stopPropagation()
				}
			}
		}
	}
	m();
	window.FUI = function() {
		var o = 0;
		return {
			openMoreLayer: function(p, q) {
				setTimeout(function() {
					q = "0";
					var r = $(p);
					r.css({
						left: q
					});
					o = $("#area_body").css("bottom");
					if (!d && $.os.ios && navigator.userAgent.indexOf("Safari") != -1 && navigator.userAgent.indexOf("MQQBrowser") == -1) {
						$("#area_body").css("bottom", "-61px")
					} else {
						$("#area_body").css("bottom", "0")
					}
					$("#area_bottomMenu").hide()
				},
				350)
			},
			closeMoreLayer: function(p, q) {
				setTimeout(function() {
					q = q == "r" ? "-100%": "100%";
					var r = $(p);
					r.css("left", q);
					$("#area_body").css("bottom", o);
					$("#area_bottomMenu").show()
				},
				350)
			}
		}
	} ();
	FUI.zpt_dialogID = 0;
	FUI.zpt_warnID = 0;
	FUI.zpt_dialog = function(s) {
		var q = {
			contents: "",
			closeCallback: function() {}
		},
		t = $.extend(q, s),
		o = "zpt_dialog" + FUI.zpt_dialogID,
		r = "#" + o;
		that = this;
		FUI.zpt_dialogID++;
		var p = function() {
			var w = window.scrollY;
			var u = $(window).height();
			var x = $(window).width();
			var v = '<div class="alertWindowBox" id="' + o + '"><div class="alertWin_inbox"></div></div>';
			$("body").append(v);
			$(r).find(".alertWin_inbox").append(t.contents);
			$(r).show();
			$(r).css("top", w + "px");
			$(r).height(u);
			$(r).bind("touchmove",
			function(y) {
				y.preventDefault()
			});
			$(window).on("resize",
			function(A) {
				var y = $(window).height();
				var z = window.scrollY;
				$(r).css("top", z + "px");
				$(r).height(y)
			});
			setTimeout(function() {
				$(r).on("click",
				function(y) {
					y.stopPropagation();
					that.warnClose()
				})
			},
			500);
			$(r).on("tap",
			function(y) {
				y.stopPropagation()
			});
			$(".alertWin_inbox").on("tap",
			function(y) {
				y.stopPropagation()
			});
			$(".alertWin_inbox").bind("click",
			function(y) {
				y.stopPropagation()
			})
		};
		this.warnClose = function() {
			setTimeout(function() {
				$(r).remove();
				t.closeCallback()
			},
			300)
		};
		p()
	};
	FUI.zpt_warn = function(o) {
		var p = {
			contents: "",
			showtime: 3,
			closeCallback: function() {}
		},
		v = $.extend(p, o),
		q = "zpt_dialog" + FUI.zpt_dialogID,
		w = "zpt_warn" + FUI.zpt_warnID,
		t = "#" + q,
		u = "#" + w;
		var s = function() {
			var z = window.scrollY;
			FUI.zpt_warnID++;
			FUI.zpt_dialogID++;
			var y = '<div class="alertWindowBox" id="' + q + '"><div class="alertWin_inbox"><div class="z3g-alertBoxSmall zpt_warn" id="' + w + '"></div></div></div>';
			if ($(".zpt_warn").length == 0) {
				$("body").append(y);
				$(u).append(v.contents);
				var x = $(window).height();
				var B = $(window).width();
				var C = $("#" + w).height();
				var A = $("#" + w).width();
				$(t).show();
				$(t).css({
					top: z + "px",
					background: "none"
				});
				$(t).height(x);
				$(t).bind("touchmove",
				function(D) {
					D.preventDefault()
				});
				$(u).show();
				setTimeout(r, v.showtime * 1000)
			}
		},
		r = function() {
			$(t).remove();
			v.closeCallback()
		};
		s()
	};
});
$(window).on("load",
function() {
	$("#area_body").css("background", "none");
});