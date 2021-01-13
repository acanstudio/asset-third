/* iScroll v4.1.9 */
(function() {
	var r = Math,
	d = function(m) {
		return m >> 0
	},
	v = (/webkit/i).test(navigator.appVersion) ? "webkit": (/firefox/i).test(navigator.userAgent) ? "Moz": (/trident/i).test(navigator.userAgent) ? "ms": "opera" in window ? "O": "",
	w = (/android/gi).test(navigator.appVersion),
	i = (/iphone|ipad/gi).test(navigator.appVersion),
	c = (/playbook/gi).test(navigator.appVersion),
	n = (/hp-tablet/gi).test(navigator.appVersion),
	k = "WebKitCSSMatrix" in window && "m11" in new WebKitCSSMatrix(),
	u = "ontouchstart" in window && !n,
	f = v + "Transform" in document.documentElement.style,
	g = i || c,
	o = (function() {
		return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
		function(m) {
			return setTimeout(m, 1)
		}
	})(),
	l = (function() {
		return window.cancelRequestAnimationFrame || window.webkitCancelAnimationFrame || window.webkitCancelRequestAnimationFrame || window.mozCancelRequestAnimationFrame || window.oCancelRequestAnimationFrame || window.msCancelRequestAnimationFrame || clearTimeout
	})(),
	h = "onorientationchange" in window ? "orientationchange": "resize",
	b = u ? "touchstart": "mousedown",
	p = u ? "touchmove": "mousemove",
	e = u ? "touchend": "mouseup",
	t = u ? "touchcancel": "mouseup",
	q = v == "Moz" ? "DOMMouseScroll": "mousewheel",
	a = "translate" + (k ? "3d(": "("),
	j = k ? ",0)": ")",
	s = function(y, m) {
		var z = this,
		A = document,
		x;
		z.wrapper = typeof y == "object" ? y: A.getElementById(y);
		z.wrapper.style.overflow = "hidden";
		z.scroller = z.wrapper.children[0];
		z.options = {
			hScroll: true,
			vScroll: true,
			x: 0,
			y: 0,
			bounce: true,
			bounceLock: false,
			momentum: true,
			lockDirection: true,
			useTransform: true,
			useTransition: false,
			topOffset: 0,
			checkDOMChanges: false,
			hScrollbar: true,
			vScrollbar: true,
			fixedScrollbar: w,
			hideScrollbar: i,
			fadeScrollbar: i && k,
			scrollbarClass: "",
			zoom: false,
			zoomMin: 1,
			zoomMax: 4,
			doubleTapZoom: 2,
			wheelAction: "scroll",
			snap: false,
			snapThreshold: 1,
			onRefresh: null,
			onBeforeScrollStart: function(B) {
				B.preventDefault()
			},
			onScrollStart: null,
			onBeforeScrollMove: null,
			onScrollMove: null,
			onBeforeScrollEnd: null,
			onScrollEnd: null,
			onTouchEnd: null,
			onDestroy: null,
			onZoomStart: null,
			onZoom: null,
			onZoomEnd: null
		};
		for (x in m) {
			z.options[x] = m[x]
		}
		z.x = z.options.x;
		z.y = z.options.y;
		z.options.useTransform = f ? z.options.useTransform: false;
		z.options.hScrollbar = z.options.hScroll && z.options.hScrollbar;
		z.options.vScrollbar = z.options.vScroll && z.options.vScrollbar;
		z.options.zoom = z.options.useTransform && z.options.zoom;
		z.options.useTransition = g && z.options.useTransition;
		if (z.options.zoom && w) {
			a = "translate(";
			j = ")"
		}
		z.scroller.style[v + "TransitionProperty"] = z.options.useTransform ? "-" + v.toLowerCase() + "-transform": "top left";
		z.scroller.style[v + "TransitionDuration"] = "0";
		z.scroller.style[v + "TransformOrigin"] = "0 0";
		if (z.options.useTransition) {
			z.scroller.style[v + "TransitionTimingFunction"] = "cubic-bezier(0.33,0.66,0.66,1)"
		}
		if (z.options.useTransform) {
			z.scroller.style[v + "Transform"] = a + z.x + "px," + z.y + "px" + j
		} else {
			z.scroller.style.cssText += ";position:absolute;top:" + z.y + "px;left:" + z.x + "px"
		}
		if (z.options.useTransition) {
			z.options.fixedScrollbar = true
		}
		z.refresh();
		z._bind(h, window);
		z._bind(b);
		if (!u) {
			z._bind("mouseout", z.wrapper);
			if (z.options.wheelAction != "none") {
				z._bind(q)
			}
		}
		if (z.options.checkDOMChanges) {
			z.checkDOMTime = setInterval(function() {
				z._checkDOMChanges()
			},
			500)
		}
	};
	s.prototype = {
		enabled: true,
		x: 0,
		y: 0,
		steps: [],
		scale: 1,
		currPageX: 0,
		currPageY: 0,
		pagesX: [],
		pagesY: [],
		aniTime: null,
		wheelZoomCount: 0,
		handleEvent: function(x) {
			var m = this;
			switch (x.type) {
			case b:
				if (!u && x.button !== 0) {
					return
				}
				m._start(x);
				break;
			case p:
				m._move(x);
				break;
			case e:
			case t:
				m._end(x);
				break;
			case h:
				m._resize();
				break;
			case q:
				m._wheel(x);
				break;
			case "mouseout":
				m._mouseout(x);
				break;
			case "webkitTransitionEnd":
				m._transitionEnd(x);
				break
			}
		},
		_checkDOMChanges: function() {
			if (this.moved || this.zoomed || this.animating || (this.scrollerW == this.scroller.offsetWidth * this.scale && this.scrollerH == this.scroller.offsetHeight * this.scale)) {
				return
			}
			this.refresh()
		},
		_scrollbar: function(m) {
			var y = this,
			z = document,
			x;
			if (!y[m + "Scrollbar"]) {
				if (y[m + "ScrollbarWrapper"]) {
					if (f) {
						y[m + "ScrollbarIndicator"].style[v + "Transform"] = ""
					}
					y[m + "ScrollbarWrapper"].parentNode.removeChild(y[m + "ScrollbarWrapper"]);
					y[m + "ScrollbarWrapper"] = null;
					y[m + "ScrollbarIndicator"] = null
				}
				return
			}
			if (!y[m + "ScrollbarWrapper"]) {
				x = z.createElement("div");
				if (y.options.scrollbarClass) {
					x.className = y.options.scrollbarClass + m.toUpperCase()
				} else {
					x.style.cssText = "position:absolute;z-index:100;" + (m == "h" ? "height:7px;bottom:1px;left:2px;right:" + (y.vScrollbar ? "7": "2") + "px": "width:7px;bottom:" + (y.hScrollbar ? "7": "2") + "px;top:2px;right:1px")
				}
				x.style.cssText += ";pointer-events:none;-" + v + "-transition-property:opacity;-" + v + "-transition-duration:" + (y.options.fadeScrollbar ? "350ms": "0") + ";overflow:hidden;opacity:" + (y.options.hideScrollbar ? "0": "1");
				y.wrapper.appendChild(x);
				y[m + "ScrollbarWrapper"] = x;
				x = z.createElement("div");
				if (!y.options.scrollbarClass) {
					x.style.cssText = "position:absolute;z-index:100;background:rgba(0,0,0,0.5);border:1px solid rgba(255,255,255,0.9);-" + v + "-background-clip:padding-box;-" + v + "-box-sizing:border-box;" + (m == "h" ? "height:100%": "width:100%") + ";-" + v + "-border-radius:3px;border-radius:3px"
				}
				x.style.cssText += ";pointer-events:none;-" + v + "-transition-property:-" + v + "-transform;-" + v + "-transition-timing-function:cubic-bezier(0.33,0.66,0.66,1);-" + v + "-transition-duration:0;-" + v + "-transform:" + a + "0,0" + j;
				if (y.options.useTransition) {
					x.style.cssText += ";-" + v + "-transition-timing-function:cubic-bezier(0.33,0.66,0.66,1)"
				}
				y[m + "ScrollbarWrapper"].appendChild(x);
				y[m + "ScrollbarIndicator"] = x
			}
			if (m == "h") {
				y.hScrollbarSize = y.hScrollbarWrapper.clientWidth;
				y.hScrollbarIndicatorSize = r.max(d(y.hScrollbarSize * y.hScrollbarSize / y.scrollerW), 8);
				y.hScrollbarIndicator.style.width = y.hScrollbarIndicatorSize + "px";
				y.hScrollbarMaxScroll = y.hScrollbarSize - y.hScrollbarIndicatorSize;
				y.hScrollbarProp = y.hScrollbarMaxScroll / y.maxScrollX
			} else {
				y.vScrollbarSize = y.vScrollbarWrapper.clientHeight;
				y.vScrollbarIndicatorSize = r.max(d(y.vScrollbarSize * y.vScrollbarSize / y.scrollerH), 8);
				y.vScrollbarIndicator.style.height = y.vScrollbarIndicatorSize + "px";
				y.vScrollbarMaxScroll = y.vScrollbarSize - y.vScrollbarIndicatorSize;
				y.vScrollbarProp = y.vScrollbarMaxScroll / y.maxScrollY
			}
			y._scrollbarPos(m, true)
		},
		_resize: function() {
			var m = this;
			setTimeout(function() {
				m.refresh()
			},
			w ? 200 : 0)
		},
		_pos: function(m, z) {
			m = this.hScroll ? m: 0;
			z = this.vScroll ? z: 0;
			if (this.options.useTransform) {
				this.scroller.style[v + "Transform"] = a + m + "px," + z + "px" + j + " scale(" + this.scale + ")"
			} else {
				m = d(m);
				z = d(z);
				this.scroller.style.left = m + "px";
				this.scroller.style.top = z + "px"
			}
			this.x = m;
			this.y = z;
			this._scrollbarPos("h");
			this._scrollbarPos("v")
		},
		_scrollbarPos: function(m, z) {
			var y = this,
			A = m == "h" ? y.x: y.y,
			x;
			if (!y[m + "Scrollbar"]) {
				return
			}
			A = y[m + "ScrollbarProp"] * A;
			if (A < 0) {
				if (!y.options.fixedScrollbar) {
					x = y[m + "ScrollbarIndicatorSize"] + d(A * 3);
					if (x < 8) {
						x = 8
					}
					y[m + "ScrollbarIndicator"].style[m == "h" ? "width": "height"] = x + "px"
				}
				A = 0
			} else {
				if (A > y[m + "ScrollbarMaxScroll"]) {
					if (!y.options.fixedScrollbar) {
						x = y[m + "ScrollbarIndicatorSize"] - d((A - y[m + "ScrollbarMaxScroll"]) * 3);
						if (x < 8) {
							x = 8
						}
						y[m + "ScrollbarIndicator"].style[m == "h" ? "width": "height"] = x + "px";
						A = y[m + "ScrollbarMaxScroll"] + (y[m + "ScrollbarIndicatorSize"] - x)
					} else {
						A = y[m + "ScrollbarMaxScroll"]
					}
				}
			}
			y[m + "ScrollbarWrapper"].style[v + "TransitionDelay"] = "0";
			y[m + "ScrollbarWrapper"].style.opacity = z && y.options.hideScrollbar ? "0": "1";
			y[m + "ScrollbarIndicator"].style[v + "Transform"] = a + (m == "h" ? A + "px,0": "0," + A + "px") + j
		},
		_start: function(E) {
			var D = this,
			z = u ? E.touches[0] : E,
			A,
			m,
			F,
			C,
			B;
			if (!D.enabled) {
				return
			}
			if (D.options.onBeforeScrollStart) {
				D.options.onBeforeScrollStart.call(D, E)
			}
			if (D.options.useTransition || D.options.zoom) {
				D._transitionTime(0)
			}
			D.moved = false;
			D.animating = false;
			D.zoomed = false;
			D.distX = 0;
			D.distY = 0;
			D.absDistX = 0;
			D.absDistY = 0;
			D.dirX = 0;
			D.dirY = 0;
			if (D.options.zoom && u && E.touches.length > 1) {
				C = r.abs(E.touches[0].pageX - E.touches[1].pageX);
				B = r.abs(E.touches[0].pageY - E.touches[1].pageY);
				D.touchesDistStart = r.sqrt(C * C + B * B);
				D.originX = r.abs(E.touches[0].pageX + E.touches[1].pageX - D.wrapperOffsetLeft * 2) / 2 - D.x;
				D.originY = r.abs(E.touches[0].pageY + E.touches[1].pageY - D.wrapperOffsetTop * 2) / 2 - D.y;
				if (D.options.onZoomStart) {
					D.options.onZoomStart.call(D, E)
				}
			}
			if (D.options.momentum) {
				if (D.options.useTransform) {
					A = getComputedStyle(D.scroller, null)[v + "Transform"].replace(/[^0-9-.,]/g, "").split(",");
					m = A[4] * 1;
					F = A[5] * 1
				} else {
					m = getComputedStyle(D.scroller, null).left.replace(/[^0-9-]/g, "") * 1;
					F = getComputedStyle(D.scroller, null).top.replace(/[^0-9-]/g, "") * 1
				}
				if (m != D.x || F != D.y) {
					if (D.options.useTransition) {
						D._unbind("webkitTransitionEnd")
					} else {
						l(D.aniTime)
					}
					D.steps = [];
					D._pos(m, F)
				}
			}
			D.absStartX = D.x;
			D.absStartY = D.y;
			D.startX = D.x;
			D.startY = D.y;
			D.pointX = z.pageX;
			D.pointY = z.pageY;
			D.startTime = E.timeStamp || Date.now();
			if (D.options.onScrollStart) {
				D.options.onScrollStart.call(D, E)
			}
			D._bind(p);
			D._bind(e);
			D._bind(t)
		},
		_move: function(E) {
			var C = this,
			F = u ? E.touches[0] : E,
			A = F.pageX - C.pointX,
			y = F.pageY - C.pointY,
			m = C.x + A,
			G = C.y + y,
			B,
			z,
			x,
			D = E.timeStamp || Date.now();
			if (C.options.onBeforeScrollMove) {
				C.options.onBeforeScrollMove.call(C, E)
			}
			if (C.options.zoom && u && E.touches.length > 1) {
				B = r.abs(E.touches[0].pageX - E.touches[1].pageX);
				z = r.abs(E.touches[0].pageY - E.touches[1].pageY);
				C.touchesDist = r.sqrt(B * B + z * z);
				C.zoomed = true;
				x = 1 / C.touchesDistStart * C.touchesDist * this.scale;
				if (x < C.options.zoomMin) {
					x = 0.5 * C.options.zoomMin * Math.pow(2, x / C.options.zoomMin)
				} else {
					if (x > C.options.zoomMax) {
						x = 2 * C.options.zoomMax * Math.pow(0.5, C.options.zoomMax / x)
					}
				}
				C.lastScale = x / this.scale;
				m = this.originX - this.originX * C.lastScale + this.x,
				G = this.originY - this.originY * C.lastScale + this.y;
				this.scroller.style[v + "Transform"] = a + m + "px," + G + "px" + j + " scale(" + x + ")";
				if (C.options.onZoom) {
					C.options.onZoom.call(C, E)
				}
				return
			}
			C.pointX = F.pageX;
			C.pointY = F.pageY;
			if (m > 0 || m < C.maxScrollX) {
				m = C.options.bounce ? C.x + (A / 2) : m >= 0 || C.maxScrollX >= 0 ? 0 : C.maxScrollX
			}
			if (G > C.minScrollY || G < C.maxScrollY) {
				G = C.options.bounce ? C.y + (y / 2) : G >= C.minScrollY || C.maxScrollY >= 0 ? C.minScrollY: C.maxScrollY
			}
			C.distX += A;
			C.distY += y;
			C.absDistX = r.abs(C.distX);
			C.absDistY = r.abs(C.distY);
			if (C.absDistX < 6 && C.absDistY < 6) {
				return
			}
			if (C.options.lockDirection) {
				if (C.absDistX > C.absDistY + 5) {
					G = C.y;
					y = 0
				} else {
					if (C.absDistY > C.absDistX + 5) {
						m = C.x;
						A = 0
					}
				}
			}
			C.moved = true;
			C._pos(m, G);
			C.dirX = A > 0 ? -1 : A < 0 ? 1 : 0;
			C.dirY = y > 0 ? -1 : y < 0 ? 1 : 0;
			if (D - C.startTime > 300) {
				C.startTime = D;
				C.startX = C.x;
				C.startY = C.y
			}
			if (C.options.onScrollMove) {
				C.options.onScrollMove.call(C, E)
			}
		},
		_end: function(E) {
			if (u && E.touches.length != 0) {
				return
			}
			var C = this,
			K = u ? E.changedTouches[0] : E,
			F,
			J,
			y = {
				dist: 0,
				time: 0
			},
			m = {
				dist: 0,
				time: 0
			},
			B = (E.timeStamp || Date.now()) - C.startTime,
			G = C.x,
			D = C.y,
			I,
			H,
			x,
			A,
			z;
			C._unbind(p);
			C._unbind(e);
			C._unbind(t);
			if (C.options.onBeforeScrollEnd) {
				C.options.onBeforeScrollEnd.call(C, E)
			}
			if (C.zoomed) {
				z = C.scale * C.lastScale;
				z = Math.max(C.options.zoomMin, z);
				z = Math.min(C.options.zoomMax, z);
				C.lastScale = z / C.scale;
				C.scale = z;
				C.x = C.originX - C.originX * C.lastScale + C.x;
				C.y = C.originY - C.originY * C.lastScale + C.y;
				C.scroller.style[v + "TransitionDuration"] = "200ms";
				C.scroller.style[v + "Transform"] = a + C.x + "px," + C.y + "px" + j + " scale(" + C.scale + ")";
				C.zoomed = false;
				C.refresh();
				if (C.options.onZoomEnd) {
					C.options.onZoomEnd.call(C, E)
				}
				return
			}
			if (!C.moved) {
				if (u) {
					if (C.doubleTapTimer && C.options.zoom) {
						clearTimeout(C.doubleTapTimer);
						C.doubleTapTimer = null;
						if (C.options.onZoomStart) {
							C.options.onZoomStart.call(C, E)
						}
						C.zoom(C.pointX, C.pointY, C.scale == 1 ? C.options.doubleTapZoom: 1);
						if (C.options.onZoomEnd) {
							setTimeout(function() {
								C.options.onZoomEnd.call(C, E)
							},
							200)
						}
					} else {
						C.doubleTapTimer = setTimeout(function() {
							C.doubleTapTimer = null;
							F = K.target;
							while (F.nodeType != 1) {
								F = F.parentNode
							}
							if (F.tagName != "SELECT" && F.tagName != "INPUT" && F.tagName != "TEXTAREA") {
								J = document.createEvent("MouseEvents");
								J.initMouseEvent("click", true, true, E.view, 1, K.screenX, K.screenY, K.clientX, K.clientY, E.ctrlKey, E.altKey, E.shiftKey, E.metaKey, 0, null);
								J._fake = true;
								F.dispatchEvent(J)
							}
						},
						C.options.zoom ? 250 : 0)
					}
				}
				C._resetPos(200);
				if (C.options.onTouchEnd) {
					C.options.onTouchEnd.call(C, E)
				}
				return
			}
			if (B < 300 && C.options.momentum) {
				y = G ? C._momentum(G - C.startX, B, -C.x, C.scrollerW - C.wrapperW + C.x, C.options.bounce ? C.wrapperW: 0) : y;
				m = D ? C._momentum(D - C.startY, B, -C.y, (C.maxScrollY < 0 ? C.scrollerH - C.wrapperH + C.y - C.minScrollY: 0), C.options.bounce ? C.wrapperH: 0) : m;
				G = C.x + y.dist;
				D = C.y + m.dist;
				if ((C.x > 0 && G > 0) || (C.x < C.maxScrollX && G < C.maxScrollX)) {
					y = {
						dist: 0,
						time: 0
					}
				}
				if ((C.y > C.minScrollY && D > C.minScrollY) || (C.y < C.maxScrollY && D < C.maxScrollY)) {
					m = {
						dist: 0,
						time: 0
					}
				}
			}
			if (y.dist || m.dist) {
				x = r.max(r.max(y.time, m.time), 10);
				if (C.options.snap) {
					I = G - C.absStartX;
					H = D - C.absStartY;
					if (r.abs(I) < C.options.snapThreshold && r.abs(H) < C.options.snapThreshold) {
						C.scrollTo(C.absStartX, C.absStartY, 200)
					} else {
						A = C._snap(G, D);
						G = A.x;
						D = A.y;
						x = r.max(A.time, x)
					}
				}
				C.scrollTo(d(G), d(D), x);
				if (C.options.onTouchEnd) {
					C.options.onTouchEnd.call(C, E)
				}
				return
			}
			if (C.options.snap) {
				I = G - C.absStartX;
				H = D - C.absStartY;
				if (r.abs(I) < C.options.snapThreshold && r.abs(H) < C.options.snapThreshold) {
					C.scrollTo(C.absStartX, C.absStartY, 200)
				} else {
					A = C._snap(C.x, C.y);
					if (A.x != C.x || A.y != C.y) {
						C.scrollTo(A.x, A.y, A.time)
					}
				}
				if (C.options.onTouchEnd) {
					C.options.onTouchEnd.call(C, E)
				}
				return
			}
			C._resetPos(200);
			if (C.options.onTouchEnd) {
				C.options.onTouchEnd.call(C, E)
			}
		},
		_resetPos: function(y) {
			var m = this,
			z = m.x >= 0 ? 0 : m.x < m.maxScrollX ? m.maxScrollX: m.x,
			x = m.y >= m.minScrollY || m.maxScrollY > 0 ? m.minScrollY: m.y < m.maxScrollY ? m.maxScrollY: m.y;
			if (z == m.x && x == m.y) {
				if (m.moved) {
					m.moved = false;
					if (m.options.onScrollEnd) {
						m.options.onScrollEnd.call(m)
					}
				}
				if (m.hScrollbar && m.options.hideScrollbar) {
					if (v == "webkit") {
						m.hScrollbarWrapper.style[v + "TransitionDelay"] = "300ms"
					}
					m.hScrollbarWrapper.style.opacity = "0"
				}
				if (m.vScrollbar && m.options.hideScrollbar) {
					if (v == "webkit") {
						m.vScrollbarWrapper.style[v + "TransitionDelay"] = "300ms"
					}
					m.vScrollbarWrapper.style.opacity = "0"
				}
				return
			}
			m.scrollTo(z, x, y || 0)
		},
		_wheel: function(B) {
			var z = this,
			A, y, x, m, C;
			if ("wheelDeltaX" in B) {
				A = B.wheelDeltaX / 12;
				y = B.wheelDeltaY / 12
			} else {
				if ("wheelDelta" in B) {
					A = y = B.wheelDelta / 12
				} else {
					if ("detail" in B) {
						A = y = -B.detail * 3
					} else {
						return
					}
				}
			}
			if (z.options.wheelAction == "zoom") {
				C = z.scale * Math.pow(2, 1 / 3 * (y ? y / Math.abs(y) : 0));
				if (C < z.options.zoomMin) {
					C = z.options.zoomMin
				}
				if (C > z.options.zoomMax) {
					C = z.options.zoomMax
				}
				if (C != z.scale) {
					if (!z.wheelZoomCount && z.options.onZoomStart) {
						z.options.onZoomStart.call(z, B)
					}
					z.wheelZoomCount++;
					z.zoom(B.pageX, B.pageY, C, 400);
					setTimeout(function() {
						z.wheelZoomCount--;
						if (!z.wheelZoomCount && z.options.onZoomEnd) {
							z.options.onZoomEnd.call(z, B)
						}
					},
					400)
				}
				return
			}
			x = z.x + A;
			m = z.y + y;
			if (x > 0) {
				x = 0
			} else {
				if (x < z.maxScrollX) {
					x = z.maxScrollX
				}
			}
			if (m > z.minScrollY) {
				m = z.minScrollY
			} else {
				if (m < z.maxScrollY) {
					m = z.maxScrollY
				}
			}
			z.scrollTo(x, m, 0)
		},
		_mouseout: function(x) {
			var m = x.relatedTarget;
			if (!m) {
				this._end(x);
				return
			}
			while (m = m.parentNode) {
				if (m == this.wrapper) {
					return
				}
			}
			this._end(x)
		},
		_transitionEnd: function(x) {
			var m = this;
			if (x.target != m.scroller) {
				return
			}
			m._unbind("webkitTransitionEnd");
			m._startAni()
		},
		_startAni: function() {
			var C = this,
			x = C.x,
			m = C.y,
			A = Date.now(),
			B,
			z,
			y;
			if (C.animating) {
				return
			}
			if (!C.steps.length) {
				C._resetPos(400);
				return
			}
			B = C.steps.shift();
			if (B.x == x && B.y == m) {
				B.time = 0
			}
			C.animating = true;
			C.moved = true;
			if (C.options.useTransition) {
				C._transitionTime(B.time);
				C._pos(B.x, B.y);
				C.animating = false;
				if (B.time) {
					C._bind("webkitTransitionEnd")
				} else {
					C._resetPos(0)
				}
				return
			}
			y = function() {
				var D = Date.now(),
				F,
				E;
				if (D >= A + B.time) {
					C._pos(B.x, B.y);
					C.animating = false;
					if (C.options.onAnimationEnd) {
						C.options.onAnimationEnd.call(C)
					}
					C._startAni();
					return
				}
				D = (D - A) / B.time - 1;
				z = r.sqrt(1 - D * D);
				F = (B.x - x) * z + x;
				E = (B.y - m) * z + m;
				C._pos(F, E);
				if (C.animating) {
					C.aniTime = o(y)
				}
			};
			y()
		},
		_transitionTime: function(m) {
			m += "ms";
			this.scroller.style[v + "TransitionDuration"] = m;
			if (this.hScrollbar) {
				this.hScrollbarIndicator.style[v + "TransitionDuration"] = m
			}
			if (this.vScrollbar) {
				this.vScrollbarIndicator.style[v + "TransitionDuration"] = m
			}
		},
		_momentum: function(D, x, B, m, F) {
			var C = 0.0006,
			y = r.abs(D) / x,
			z = (y * y) / (2 * C),
			E = 0,
			A = 0;
			if (D > 0 && z > B) {
				A = F / (6 / (z / y * C));
				B = B + A;
				y = y * B / z;
				z = B
			} else {
				if (D < 0 && z > m) {
					A = F / (6 / (z / y * C));
					m = m + A;
					y = y * m / z;
					z = m
				}
			}
			z = z * (D < 0 ? -1 : 1);
			E = y / C;
			return {
				dist: z,
				time: d(E)
			}
		},
		_offset: function(m) {
			var y = -m.offsetLeft,
			x = -m.offsetTop;
			while (m = m.offsetParent) {
				y -= m.offsetLeft;
				x -= m.offsetTop
			}
			if (m != this.wrapper) {
				y *= this.scale;
				x *= this.scale
			}
			return {
				left: y,
				top: x
			}
		},
		_snap: function(G, F) {
			var D = this,
			C, B, E, A, z, m;
			E = D.pagesX.length - 1;
			for (C = 0, B = D.pagesX.length; C < B; C++) {
				if (G >= D.pagesX[C]) {
					E = C;
					break
				}
			}
			if (E == D.currPageX && E > 0 && D.dirX < 0) {
				E--
			}
			G = D.pagesX[E];
			z = r.abs(G - D.pagesX[D.currPageX]);
			z = z ? r.abs(D.x - G) / z * 500 : 0;
			D.currPageX = E;
			E = D.pagesY.length - 1;
			for (C = 0; C < E; C++) {
				if (F >= D.pagesY[C]) {
					E = C;
					break
				}
			}
			if (E == D.currPageY && E > 0 && D.dirY < 0) {
				E--
			}
			F = D.pagesY[E];
			m = r.abs(F - D.pagesY[D.currPageY]);
			m = m ? r.abs(D.y - F) / m * 500 : 0;
			D.currPageY = E;
			A = d(r.max(z, m)) || 200;
			return {
				x: G,
				y: F,
				time: A
			}
		},
		_bind: function(y, x, m) { (x || this.scroller).addEventListener(y, this, !!m)
		},
		_unbind: function(y, x, m) { (x || this.scroller).removeEventListener(y, this, !!m)
		},
		destroy: function() {
			var m = this;
			m.scroller.style[v + "Transform"] = "";
			m.hScrollbar = false;
			m.vScrollbar = false;
			m._scrollbar("h");
			m._scrollbar("v");
			m._unbind(h, window);
			m._unbind(b);
			m._unbind(p);
			m._unbind(e);
			m._unbind(t);
			if (!m.options.hasTouch) {
				m._unbind("mouseout", m.wrapper);
				m._unbind(q)
			}
			if (m.options.useTransition) {
				m._unbind("webkitTransitionEnd")
			}
			if (m.options.checkDOMChanges) {
				clearInterval(m.checkDOMTime)
			}
			if (m.options.onDestroy) {
				m.options.onDestroy.call(m)
			}
		},
		refresh: function() {
			var z = this,
			B, y, m, x, C = 0,
			A = 0;
			if (z.scale < z.options.zoomMin) {
				z.scale = z.options.zoomMin
			}
			z.wrapperW = z.wrapper.clientWidth || 1;
			z.wrapperH = z.wrapper.clientHeight || 1;
			z.minScrollY = -z.options.topOffset || 0;
			z.scrollerW = d(z.scroller.offsetWidth * z.scale);
			z.scrollerH = d((z.scroller.offsetHeight + z.minScrollY) * z.scale);
			z.maxScrollX = z.wrapperW - z.scrollerW;
			z.maxScrollY = z.wrapperH - z.scrollerH + z.minScrollY;
			z.dirX = 0;
			z.dirY = 0;
			if (z.options.onRefresh) {
				z.options.onRefresh.call(z)
			}
			z.hScroll = z.options.hScroll && z.maxScrollX < 0;
			z.vScroll = z.options.vScroll && (!z.options.bounceLock && !z.hScroll || z.scrollerH > z.wrapperH);
			z.hScrollbar = z.hScroll && z.options.hScrollbar;
			z.vScrollbar = z.vScroll && z.options.vScrollbar && z.scrollerH > z.wrapperH;
			B = z._offset(z.wrapper);
			z.wrapperOffsetLeft = -B.left;
			z.wrapperOffsetTop = -B.top;
			if (typeof z.options.snap == "string") {
				z.pagesX = [];
				z.pagesY = [];
				x = z.scroller.querySelectorAll(z.options.snap);
				for (y = 0, m = x.length; y < m; y++) {
					C = z._offset(x[y]);
					C.left += z.wrapperOffsetLeft;
					C.top += z.wrapperOffsetTop;
					z.pagesX[y] = C.left < z.maxScrollX ? z.maxScrollX: C.left * z.scale;
					z.pagesY[y] = C.top < z.maxScrollY ? z.maxScrollY: C.top * z.scale
				}
			} else {
				if (z.options.snap) {
					z.pagesX = [];
					while (C >= z.maxScrollX) {
						z.pagesX[A] = C;
						C = C - z.wrapperW;
						A++
					}
					if (z.maxScrollX % z.wrapperW) {
						z.pagesX[z.pagesX.length] = z.maxScrollX - z.pagesX[z.pagesX.length - 1] + z.pagesX[z.pagesX.length - 1]
					}
					C = 0;
					A = 0;
					z.pagesY = [];
					while (C >= z.maxScrollY) {
						z.pagesY[A] = C;
						C = C - z.wrapperH;
						A++
					}
					if (z.maxScrollY % z.wrapperH) {
						z.pagesY[z.pagesY.length] = z.maxScrollY - z.pagesY[z.pagesY.length - 1] + z.pagesY[z.pagesY.length - 1]
					}
				}
			}
			z._scrollbar("h");
			z._scrollbar("v");
			if (!z.zoomed) {
				z.scroller.style[v + "TransitionDuration"] = "0";
				z._resetPos(200)
			}
		},
		scrollTo: function(m, F, E, D) {
			var C = this,
			B = m,
			A, z;
			C.stop();
			if (!B.length) {
				B = [{
					x: m,
					y: F,
					time: E,
					relative: D
				}]
			}
			for (A = 0, z = B.length; A < z; A++) {
				if (B[A].relative) {
					B[A].x = C.x - B[A].x;
					B[A].y = C.y - B[A].y
				}
				C.steps.push({
					x: B[A].x,
					y: B[A].y,
					time: B[A].time || 0
				})
			}
			C._startAni()
		},
		scrollToElement: function(m, y) {
			var x = this,
			z;
			m = m.nodeType ? m: x.scroller.querySelector(m);
			if (!m) {
				return
			}
			z = x._offset(m);
			z.left += x.wrapperOffsetLeft;
			z.top += x.wrapperOffsetTop;
			z.left = z.left > 0 ? 0 : z.left < x.maxScrollX ? x.maxScrollX: z.left;
			z.top = z.top > x.minScrollY ? x.minScrollY: z.top < x.maxScrollY ? x.maxScrollY: z.top;
			y = y === undefined ? r.max(r.abs(z.left) * 2, r.abs(z.top) * 2) : y;
			x.scrollTo(z.left, z.top, y)
		},
		scrollToPage: function(A, z, C) {
			var B = this,
			m, D;
			C = C === undefined ? 400 : C;
			if (B.options.onScrollStart) {
				B.options.onScrollStart.call(B)
			}
			if (B.options.snap) {
				A = A == "next" ? B.currPageX + 1 : A == "prev" ? B.currPageX - 1 : A;
				z = z == "next" ? B.currPageY + 1 : z == "prev" ? B.currPageY - 1 : z;
				A = A < 0 ? 0 : A > B.pagesX.length - 1 ? B.pagesX.length - 1 : A;
				z = z < 0 ? 0 : z > B.pagesY.length - 1 ? B.pagesY.length - 1 : z;
				B.currPageX = A;
				B.currPageY = z;
				m = B.pagesX[A];
				D = B.pagesY[z]
			} else {
				m = -B.wrapperW * A;
				D = -B.wrapperH * z;
				if (m < B.maxScrollX) {
					m = B.maxScrollX
				}
				if (D < B.maxScrollY) {
					D = B.maxScrollY
				}
			}
			B.scrollTo(m, D, C)
		},
		disable: function() {
			this.stop();
			this._resetPos(0);
			this.enabled = false;
			this._unbind(p);
			this._unbind(e);
			this._unbind(t)
		},
		enable: function() {
			this.enabled = true
		},
		stop: function() {
			if (this.options.useTransition) {
				this._unbind("webkitTransitionEnd")
			} else {
				l(this.aniTime)
			}
			this.steps = [];
			this.moved = false;
			this.animating = false
		},
		zoom: function(m, D, C, B) {
			var z = this,
			A = C / z.scale;
			if (!z.options.useTransform) {
				return
			}
			z.zoomed = true;
			B = B === undefined ? 200 : B;
			m = m - z.wrapperOffsetLeft - z.x;
			D = D - z.wrapperOffsetTop - z.y;
			z.x = m - m * A + z.x;
			z.y = D - D * A + z.y;
			z.scale = C;
			z.refresh();
			z.x = z.x > 0 ? 0 : z.x < z.maxScrollX ? z.maxScrollX: z.x;
			z.y = z.y > z.minScrollY ? z.minScrollY: z.y < z.maxScrollY ? z.maxScrollY: z.y;
			z.scroller.style[v + "TransitionDuration"] = B + "ms";
			z.scroller.style[v + "Transform"] = a + z.x + "px," + z.y + "px" + j + " scale(" + C + ")";
			z.zoomed = false
		},
		isReady: function() {
			return ! this.moved && !this.zoomed && !this.animating
		}
	};
	if (typeof exports !== "undefined") {
		exports.iScroll = s
	} else {
		window.iScroll = s
	}
})();
