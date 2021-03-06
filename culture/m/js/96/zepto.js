/* Zepto */
(function(a) {
	if (String.prototype.trim === a) {
		String.prototype.trim = function() {
			return this.replace(/^\s+/, "").replace(/\s+$/, "")
		}
	}
	if (Array.prototype.reduce === a) {
		Array.prototype.reduce = function(c) {
			if (this === void 0 || this === null) {
				throw new TypeError()
			}
			var f = Object(this),
			b = f.length >>> 0,
			e = 0,
			d;
			if (typeof c != "function") {
				throw new TypeError()
			}
			if (b == 0 && arguments.length == 1) {
				throw new TypeError()
			}
			if (arguments.length >= 2) {
				d = arguments[1]
			} else {
				do {
					if (e in f) {
						d = f[e++];
						break
					}
					if (++e >= b) {
						throw new TypeError()
					}
				} while ( true )
			}
			while (e < b) {
				if (e in f) {
					d = c.call(a, d, f[e], e, f)
				}
				e++
			}
			return d
		}
	}
})();
var Zepto = (function() {
	var i, o, z, a, F = [],
	k = F.slice,
	f = window.document,
	E = {},
	G = {},
	m = f.defaultView.getComputedStyle,
	N = {
		"column-count": 1,
		columns: 1,
		"font-weight": 1,
		"line-height": 1,
		opacity: 1,
		"z-index": 1,
		zoom: 1
	},
	s = /^\s*<(\w+|!)[^>]*>/,
	y = [1, 3, 8, 9, 11],
	t = ["after", "prepend", "before", "append"],
	p = f.createElement("table"),
	H = f.createElement("tr"),
	g = {
		tr: f.createElement("tbody"),
		tbody: p,
		thead: p,
		tfoot: p,
		td: H,
		th: H,
		"*": f.createElement("div")
	},
	q = /complete|loaded|interactive/,
	B = /^\.([\w-]+)$/,
	r = /^#([\w-]+)$/,
	D = /^[\w-]+$/,
	e = ({}).toString,
	c = {},
	L,
	I,
	A = f.createElement("div");
	c.matches = function(T, P) {
		if (!T || T.nodeType !== 1) {
			return false
		}
		var R = T.webkitMatchesSelector || T.mozMatchesSelector || T.oMatchesSelector || T.matchesSelector;
		if (R) {
			return R.call(T, P)
		}
		var S, U = T.parentNode,
		Q = !U;
		if (Q) { (U = A).appendChild(T)
		}
		S = ~c.qsa(U, P).indexOf(T);
		Q && A.removeChild(T);
		return S
	};
	function l(P) {
		return e.call(P) == "[object Function]"
	}
	function C(P) {
		return P instanceof Object
	}
	function O(R) {
		var P, Q;
		if (e.call(R) !== "[object Object]") {
			return false
		}
		Q = (l(R.constructor) && R.constructor.prototype);
		if (!Q || !hasOwnProperty.call(Q, "isPrototypeOf")) {
			return false
		}
		for (P in R) {}
		return P === i || hasOwnProperty.call(R, P)
	}
	function v(P) {
		return P instanceof Array
	}
	function w(P) {
		return typeof P.length == "number"
	}
	function M(P) {
		return P.filter(function(Q) {
			return Q !== i && Q !== null
		})
	}
	function x(P) {
		return P.length > 0 ? [].concat.apply([], P) : P
	}
	L = function(P) {
		return P.replace(/-+(.)?/g,
		function(Q, R) {
			return R ? R.toUpperCase() : ""
		})
	};
	function j(P) {
		return P.replace(/::/g, "/").replace(/([A-Z]+)([A-Z][a-z])/g, "$1_$2").replace(/([a-z\d])([A-Z])/g, "$1_$2").replace(/_/g, "-").toLowerCase()
	}
	I = function(P) {
		return P.filter(function(R, Q) {
			return P.indexOf(R) == Q
		})
	};
	function J(P) {
		return P in G ? G[P] : (G[P] = new RegExp("(^|\\s)" + P + "(\\s|$)"))
	}
	function d(P, Q) {
		return (typeof Q == "number" && !N[j(P)]) ? Q + "px": Q
	}
	function K(R) {
		var P, Q;
		if (!E[R]) {
			P = f.createElement(R);
			f.body.appendChild(P);
			Q = m(P, "").getPropertyValue("display");
			P.parentNode.removeChild(P);
			Q == "none" && (Q = "block");
			E[R] = Q
		}
		return E[R]
	}
	c.fragment = function(R, Q) {
		if (Q === i) {
			Q = s.test(R) && RegExp.$1
		}
		if (! (Q in g)) {
			Q = "*"
		}
		var P = g[Q];
		P.innerHTML = "" + R;
		return z.each(k.call(P.childNodes),
		function() {
			P.removeChild(this)
		})
	};
	c.Z = function(Q, P) {
		Q = Q || [];
		Q.__proto__ = arguments.callee.prototype;
		Q.selector = P || "";
		return Q
	};
	c.isZ = function(P) {
		return P instanceof c.Z
	};
	c.init = function(P, Q) {
		if (!P) {
			return c.Z()
		} else {
			if (l(P)) {
				return z(f).ready(P)
			} else {
				if (c.isZ(P)) {
					return P
				} else {
					var R;
					if (v(P)) {
						R = M(P)
					} else {
						if (O(P)) {
							R = [z.extend({},
							P)],
							P = null
						} else {
							if (y.indexOf(P.nodeType) >= 0 || P === window) {
								R = [P],
								P = null
							} else {
								if (s.test(P)) {
									R = c.fragment(P.trim(), RegExp.$1),
									P = null
								} else {
									if (Q !== i) {
										return z(Q).find(P)
									} else {
										R = c.qsa(f, P)
									}
								}
							}
						}
					}
					return c.Z(R, P)
				}
			}
		}
	};
	z = function(P, Q) {
		return c.init(P, Q)
	};
	z.extend = function(P) {
		k.call(arguments, 1).forEach(function(Q) {
			for (o in Q) {
				if (Q[o] !== i) {
					P[o] = Q[o]
				}
			}
		});
		return P
	};
	c.qsa = function(Q, P) {
		var R;
		return (Q === f && r.test(P)) ? ((R = Q.getElementById(RegExp.$1)) ? [R] : F) : (Q.nodeType !== 1 && Q.nodeType !== 9) ? F: k.call(B.test(P) ? Q.getElementsByClassName(RegExp.$1) : D.test(P) ? Q.getElementsByTagName(P) : Q.querySelectorAll(P))
	};
	function u(Q, P) {
		return P === i ? z(Q) : z(Q).filter(P)
	}
	function n(R, Q, P, S) {
		return l(Q) ? Q.call(R, P, S) : Q
	}
	z.isFunction = l;
	z.isObject = C;
	z.isArray = v;
	z.isPlainObject = O;
	z.inArray = function(Q, R, P) {
		return F.indexOf.call(R, Q, P)
	};
	z.trim = function(P) {
		return P.trim()
	};
	z.uuid = 0;
	z.map = function(T, U) {
		var S, P = [],
		R,
		Q;
		if (w(T)) {
			for (R = 0; R < T.length; R++) {
				S = U(T[R], R);
				if (S != null) {
					P.push(S)
				}
			}
		} else {
			for (Q in T) {
				S = U(T[Q], Q);
				if (S != null) {
					P.push(S)
				}
			}
		}
		return x(P)
	};
	z.each = function(R, S) {
		var Q, P;
		if (w(R)) {
			for (Q = 0; Q < R.length; Q++) {
				if (S.call(R[Q], Q, R[Q]) === false) {
					return R
				}
			}
		} else {
			for (P in R) {
				if (S.call(R[P], P, R[P]) === false) {
					return R
				}
			}
		}
		return R
	};
	z.fn = {
		forEach: F.forEach,
		reduce: F.reduce,
		push: F.push,
		indexOf: F.indexOf,
		concat: F.concat,
		map: function(P) {
			return z.map(this,
			function(R, Q) {
				return P.call(R, Q, R)
			})
		},
		slice: function() {
			return z(k.apply(this, arguments))
		},
		ready: function(P) {
			if (q.test(f.readyState)) {
				P(z)
			} else {
				f.addEventListener("DOMContentLoaded",
				function() {
					P(z)
				},
				false)
			}
			return this
		},
		get: function(P) {
			return P === i ? k.call(this) : this[P]
		},
		toArray: function() {
			return this.get()
		},
		size: function() {
			return this.length
		},
		remove: function() {
			return this.each(function() {
				if (this.parentNode != null) {
					this.parentNode.removeChild(this)
				}
			})
		},
		each: function(P) {
			this.forEach(function(R, Q) {
				P.call(R, Q, R)
			});
			return this
		},
		filter: function(P) {
			return z([].filter.call(this,
			function(Q) {
				return c.matches(Q, P)
			}))
		},
		add: function(P, Q) {
			return z(I(this.concat(z(P, Q))))
		},
		is: function(P) {
			return this.length > 0 && c.matches(this[0], P)
		},
		not: function(P) {
			var Q = [];
			if (l(P) && P.call !== i) {
				this.each(function(S) {
					if (!P.call(this, S)) {
						Q.push(this)
					}
				})
			} else {
				var R = typeof P == "string" ? this.filter(P) : (w(P) && l(P.item)) ? k.call(P) : z(P);
				this.forEach(function(S) {
					if (R.indexOf(S) < 0) {
						Q.push(S)
					}
				})
			}
			return z(Q)
		},
		eq: function(P) {
			return P === -1 ? this.slice(P) : this.slice(P, +P + 1)
		},
		first: function() {
			var P = this[0];
			return P && !C(P) ? P: z(P)
		},
		last: function() {
			var P = this[this.length - 1];
			return P && !C(P) ? P: z(P)
		},
		find: function(Q) {
			var P;
			if (this.length == 1) {
				P = c.qsa(this[0], Q)
			} else {
				P = this.map(function() {
					return c.qsa(this, Q)
				})
			}
			return z(P)
		},
		closest: function(P, Q) {
			var R = this[0];
			while (R && !c.matches(R, P)) {
				R = R !== Q && R !== f && R.parentNode
			}
			return z(R)
		},
		parents: function(P) {
			var R = [],
			Q = this;
			while (Q.length > 0) {
				Q = z.map(Q,
				function(S) {
					if ((S = S.parentNode) && S !== f && R.indexOf(S) < 0) {
						R.push(S);
						return S
					}
				})
			}
			return u(R, P)
		},
		parent: function(P) {
			return u(I(this.pluck("parentNode")), P)
		},
		children: function(P) {
			return u(this.map(function() {
				return k.call(this.children)
			}), P)
		},
		siblings: function(P) {
			return u(this.map(function(Q, R) {
				return k.call(R.parentNode.children).filter(function(S) {
					return S !== R
				})
			}), P)
		},
		empty: function() {
			return this.each(function() {
				this.innerHTML = ""
			})
		},
		pluck: function(P) {
			return this.map(function() {
				return this[P]
			})
		},
		show: function() {
			return this.each(function() {
				this.style.display == "none" && (this.style.display = null);
				if (m(this, "").getPropertyValue("display") == "none") {
					this.style.display = K(this.nodeName)
				}
			})
		},
		replaceWith: function(P) {
			return this.before(P).remove()
		},
		wrap: function(P) {
			return this.each(function() {
				z(this).wrapAll(z(P)[0].cloneNode(false))
			})
		},
		wrapAll: function(P) {
			if (this[0]) {
				z(this[0]).before(P = z(P));
				P.append(this)
			}
			return this
		},
		unwrap: function() {
			this.parent().each(function() {
				z(this).replaceWith(z(this).children())
			});
			return this
		},
		clone: function() {
			return z(this.map(function() {
				return this.cloneNode(true)
			}))
		},
		hide: function() {
			return this.css("display", "none")
		},
		toggle: function(P) {
			return (P === i ? this.css("display") == "none": P) ? this.show() : this.hide()
		},
		prev: function() {
			return z(this.pluck("previousElementSibling"))
		},
		next: function() {
			return z(this.pluck("nextElementSibling"))
		},
		html: function(P) {
			return P === i ? (this.length > 0 ? this[0].innerHTML: null) : this.each(function(Q) {
				var R = this.innerHTML;
				z(this).empty().append(n(this, P, Q, R))
			})
		},
		text: function(P) {
			return P === i ? (this.length > 0 ? this[0].textContent: null) : this.each(function() {
				this.textContent = P
			})
		},
		attr: function(Q, R) {
			var P;
			return (typeof Q == "string" && R === i) ? (this.length == 0 || this[0].nodeType !== 1 ? i: (Q == "value" && this[0].nodeName == "INPUT") ? this.val() : (!(P = this[0].getAttribute(Q)) && Q in this[0]) ? this[0][Q] : P) : this.each(function(S) {
				if (this.nodeType !== 1) {
					return
				}
				if (C(Q)) {
					for (o in Q) {
						this.setAttribute(o, Q[o])
					}
				} else {
					this.setAttribute(Q, n(this, R, S, this.getAttribute(Q)))
				}
			})
		},
		removeAttr: function(P) {
			return this.each(function() {
				if (this.nodeType === 1) {
					this.removeAttribute(P)
				}
			})
		},
		prop: function(P, Q) {
			return (Q === i) ? (this[0] ? this[0][P] : i) : this.each(function(R) {
				this[P] = n(this, Q, R, this[P])
			})
		},
		data: function(P, R) {
			var Q = this.attr("data-" + j(P), R);
			return Q !== null ? Q: i
		},
		val: function(P) {
			return (P === i) ? (this.length > 0 ? this[0].value: i) : this.each(function(Q) {
				this.value = n(this, P, Q, this.value)
			})
		},
		offset: function() {
			if (this.length == 0) {
				return null
			}
			var P = this[0].getBoundingClientRect();
			return {
				left: P.left + window.pageXOffset,
				top: P.top + window.pageYOffset,
				width: P.width,
				height: P.height
			}
		},
		css: function(R, Q) {
			if (Q === i && typeof R == "string") {
				return (this.length == 0 ? i: this[0].style[L(R)] || m(this[0], "").getPropertyValue(R))
			}
			var P = "";
			for (o in R) {
				if (typeof R[o] == "string" && R[o] == "") {
					this.each(function() {
						this.style.removeProperty(j(o))
					})
				} else {
					P += j(o) + ":" + d(o, R[o]) + ";"
				}
			}
			if (typeof R == "string") {
				if (Q == "") {
					this.each(function() {
						this.style.removeProperty(j(R))
					})
				} else {
					P = j(R) + ":" + d(R, Q)
				}
			}
			return this.each(function() {
				this.style.cssText += ";" + P
			})
		},
		index: function(P) {
			return P ? this.indexOf(z(P)[0]) : this.parent().children().indexOf(this[0])
		},
		hasClass: function(P) {
			if (this.length < 1) {
				return false
			} else {
				return J(P).test(this[0].className)
			}
		},
		addClass: function(P) {
			return this.each(function(Q) {
				a = [];
				var S = this.className,
				R = n(this, P, Q, S);
				R.split(/\s+/g).forEach(function(T) {
					if (!z(this).hasClass(T)) {
						a.push(T)
					}
				},
				this);
				a.length && (this.className += (S ? " ": "") + a.join(" "))
			})
		},
		removeClass: function(P) {
			return this.each(function(Q) {
				if (P === i) {
					return this.className = ""
				}
				a = this.className;
				n(this, P, Q, a).split(/\s+/g).forEach(function(R) {
					a = a.replace(J(R), " ")
				});
				this.className = a.trim()
			})
		},
		toggleClass: function(Q, P) {
			return this.each(function(R) {
				var S = n(this, Q, R, this.className); (P === i ? !z(this).hasClass(S) : P) ? z(this).addClass(S) : z(this).removeClass(S)
			})
		}
	}; ["width", "height"].forEach(function(P) {
		z.fn[P] = function(Q) {
			var S, R = P.replace(/./,
			function(T) {
				return T[0].toUpperCase()
			});
			if (Q === i) {
				return this[0] == window ? window["inner" + R] : this[0] == f ? f.documentElement["offset" + R] : (S = this.offset()) && S[P]
			} else {
				return this.each(function(T) {
					var U = z(this);
					U.css(P, n(this, Q, T, U[P]()))
				})
			}
		}
	});
	function h(P, S, R) {
		var Q = (P % 2) ? S: S.parentNode;
		Q ? Q.insertBefore(R, !P ? S.nextSibling: P == 1 ? Q.firstChild: P == 2 ? S: null) : z(R).remove()
	}
	function b(R, P) {
		P(R);
		for (var Q in R.childNodes) {
			b(R.childNodes[Q], P)
		}
	}
	t.forEach(function(Q, P) {
		z.fn[Q] = function() {
			var R = z.map(arguments,
			function(V) {
				return C(V) ? V: c.fragment(V)
			});
			if (R.length < 1) {
				return this
			}
			var S = this.length,
			T = S > 1,
			U = P < 2;
			return this.each(function(V, Y) {
				for (var W = 0; W < R.length; W++) {
					var X = R[U ? R.length - W - 1 : W];
					b(X,
					function(Z) {
						if (Z.nodeName != null && Z.nodeName.toUpperCase() === "SCRIPT" && (!Z.type || Z.type === "text/javascript")) {
							window["eval"].call(window, Z.innerHTML)
						}
					});
					if (T && V < S - 1) {
						X = X.cloneNode(true)
					}
					h(P, Y, X)
				}
			})
		};
		z.fn[(P % 2) ? Q + "To": "insert" + (P ? "Before": "After")] = function(R) {
			z(R)[Q](this);
			return this
		}
	});
	c.Z.prototype = z.fn;
	c.camelize = L;
	c.uniq = I;
	z.zepto = c;
	return z
})();
window.Zepto = Zepto;
"$" in window || (window.$ = Zepto); (function(h) {
	var o = h.zepto.qsa,
	b = {},
	n = 1,
	q = {};
	q.click = q.mousedown = q.mouseup = q.mousemove = "MouseEvents";
	function l(r) {
		return r._zid || (r._zid = n++)
	}
	function c(s, u, t, r) {
		u = e(u);
		if (u.ns) {
			var v = k(u.ns)
		}
		return (b[l(s)] || []).filter(function(w) {
			return w && (!u.e || w.e == u.e) && (!u.ns || v.test(w.ns)) && (!t || l(w.fn) === l(t)) && (!r || w.sel == r)
		})
	}
	function e(r) {
		var s = ("" + r).split(".");
		return {
			e: s[0],
			ns: s.slice(1).sort().join(" ")
		}
	}
	function k(r) {
		return new RegExp("(?:^| )" + r.replace(" ", " .* ?") + "(?: |$)")
	}
	function m(r, t, s) {
		if (h.isObject(r)) {
			h.each(r, s)
		} else {
			r.split(/\s/).forEach(function(u) {
				s(u, t)
			})
		}
	}
	function p(v, u, w, s, r, t) {
		t = !!t;
		var y = l(v),
		x = (b[y] || (b[y] = []));
		m(u, w,
		function(C, B) {
			var A = r && r(B, C),
			E = A || B;
			var D = function(G) {
				var F = E.apply(v, [G].concat(G.data));
				if (F === false) {
					G.preventDefault()
				}
				return F
			};
			var z = h.extend(e(C), {
				fn: B,
				proxy: D,
				sel: s,
				del: A,
				i: x.length
			});
			x.push(z);
			v.addEventListener(z.e, D, t)
		})
	}
	function g(t, s, u, r) {
		var v = l(t);
		m(s || "", u,
		function(x, w) {
			c(t, x, w, r).forEach(function(y) {
				delete b[v][y.i];
				t.removeEventListener(y.e, y.proxy, false)
			})
		})
	}
	h.event = {
		add: p,
		remove: g
	};
	h.proxy = function(t, s) {
		if (h.isFunction(t)) {
			var r = function() {
				return t.apply(s, arguments)
			};
			r._zid = l(t);
			return r
		} else {
			if (typeof s == "string") {
				return h.proxy(t[s], t)
			} else {
				throw new TypeError("expected function")
			}
		}
	};
	h.fn.bind = function(r, s) {
		return this.each(function() {
			p(this, r, s)
		})
	};
	h.fn.unbind = function(r, s) {
		return this.each(function() {
			g(this, r, s)
		})
	};
	h.fn.one = function(r, s) {
		return this.each(function(u, t) {
			p(this, r, s, null,
			function(w, v) {
				return function() {
					var x = w.apply(t, arguments);
					g(t, v, w);
					return x
				}
			})
		})
	};
	var d = function() {
		return true
	},
	a = function() {
		return false
	},
	j = {
		preventDefault: "isDefaultPrevented",
		stopImmediatePropagation: "isImmediatePropagationStopped",
		stopPropagation: "isPropagationStopped"
	};
	function i(s) {
		var r = h.extend({
			originalEvent: s
		},
		s);
		h.each(j,
		function(u, t) {
			r[u] = function() {
				this[t] = d;
				return s[u].apply(s, arguments)
			};
			r[t] = a
		});
		return r
	}
	function f(s) {
		if (! ("defaultPrevented" in s)) {
			s.defaultPrevented = false;
			var r = s.preventDefault;
			s.preventDefault = function() {
				this.defaultPrevented = true;
				r.call(this)
			}
		}
	}
	h.fn.delegate = function(r, t, u) {
		var s = false;
		if (t == "blur" || t == "focus") {
			if (h.iswebkit) {
				t = t == "blur" ? "focusout": t == "focus" ? "focusin": t
			} else {
				s = true
			}
		}
		return this.each(function(w, v) {
			p(v, t, u, r,
			function(x) {
				return function(A) {
					var y, z = h(A.target).closest(r, v).get(0);
					if (z) {
						y = h.extend(i(A), {
							currentTarget: z,
							liveFired: v
						});
						return x.apply(z, [y].concat([].slice.call(arguments, 1)))
					}
				}
			},
			s)
		})
	};
	h.fn.undelegate = function(r, s, t) {
		return this.each(function() {
			g(this, s, t, r)
		})
	};
	h.fn.live = function(r, s) {
		h(document.body).delegate(this.selector, r, s);
		return this
	};
	h.fn.die = function(r, s) {
		h(document.body).undelegate(this.selector, r, s);
		return this
	};
	h.fn.on = function(s, r, t) {
		return r == undefined || h.isFunction(r) ? this.bind(s, r) : this.delegate(r, s, t)
	};
	h.fn.off = function(s, r, t) {
		return r == undefined || h.isFunction(r) ? this.unbind(s, r) : this.undelegate(r, s, t)
	};
	h.fn.trigger = function(r, s) {
		if (typeof r == "string") {
			r = h.Event(r)
		}
		f(r);
		r.data = s;
		return this.each(function() {
			if ("dispatchEvent" in this) {
				this.dispatchEvent(r)
			}
		})
	};
	h.fn.triggerHandler = function(s, t) {
		var u, r;
		this.each(function(w, v) {
			u = i(typeof s == "string" ? h.Event(s) : s);
			u.data = t;
			u.target = v;
			h.each(c(v, s.type || s),
			function(x, y) {
				r = y.proxy(u);
				if (u.isImmediatePropagationStopped()) {
					return false
				}
			})
		});
		return r
	}; ("focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout change select keydown keypress keyup error").split(" ").forEach(function(r) {
		h.fn[r] = function(s) {
			return this.bind(r, s)
		}
	}); ["focus", "blur"].forEach(function(r) {
		h.fn[r] = function(t) {
			if (t) {
				this.bind(r, t)
			} else {
				if (this.length) {
					try {
						this.get(0)[r]()
					} catch(s) {}
				}
			}
			return this
		}
	});
	h.Event = function(u, t) {
		var v = document.createEvent(q[u] || "Events"),
		r = true;
		if (t) {
			for (var s in t) { (s == "bubbles") ? (r = !!t[s]) : (v[s] = t[s])
			}
		}
		v.initEvent(u, r, true, null, null, null, null, null, null, null, null, null, null, null, null);
		return v
	}
})(Zepto); (function(b) {
	function a(c) {
		var f = this.os = {},
		g = this.browser = {},
		l = c.match(/WebKit\/([\d.]+)/),
		e = c.match(/(Android)\s+([\d.]+)/),
		m = c.match(/(iPad).*OS\s([\d_]+)/),
		k = !m && c.match(/(iPhone\sOS)\s([\d_]+)/),
		n = c.match(/(webOS|hpwOS)[\s\/]([\d.]+)/),
		j = n && c.match(/TouchPad/),
		i = c.match(/Kindle\/([\d.]+)/),
		h = c.match(/Silk\/([\d._]+)/),
		d = c.match(/(BlackBerry).*Version\/([\d.]+)/);
		if (g.webkit = !!l) {
			g.version = l[1]
		}
		if (e) {
			f.android = true,
			f.version = e[2]
		}
		if (k) {
			f.ios = f.iphone = true,
			f.version = k[2].replace(/_/g, ".")
		}
		if (m) {
			f.ios = f.ipad = true,
			f.version = m[2].replace(/_/g, ".")
		}
		if (n) {
			f.webos = true,
			f.version = n[2]
		}
		if (j) {
			f.touchpad = true
		}
		if (d) {
			f.blackberry = true,
			f.version = d[2]
		}
		if (i) {
			f.kindle = true,
			f.version = i[1]
		}
		if (h) {
			g.silk = true,
			g.version = h[1]
		}
		if (!h && f.android && c.match(/Kindle Fire/)) {
			g.silk = true
		}
	}
	a.call(b, navigator.userAgent);
	b.__detect = a
})(Zepto); (function(e, c) {
	var g = "",
	k, b, i, m = {
		Webkit: "webkit",
		Moz: "",
		O: "o",
		ms: "MS"
	},
	j = window.document,
	d = j.createElement("div"),
	l = /^((translate|rotate|scale)(X|Y|Z|3d)?|matrix(3d)?|perspective|skew(X|Y)?)$/i,
	h = {};
	function a(n) {
		return n.toLowerCase()
	}
	function f(n) {
		return k ? k + n: a(n)
	}
	e.each(m,
	function(o, n) {
		if (d.style[o + "TransitionProperty"] !== c) {
			g = "-" + a(o) + "-";
			k = n;
			return false
		}
	});
	h[g + "transition-property"] = h[g + "transition-duration"] = h[g + "transition-timing-function"] = h[g + "animation-name"] = h[g + "animation-duration"] = "";
	e.fx = {
		off: (k === c && d.style.transitionProperty === c),
		cssPrefix: g,
		transitionEnd: f("TransitionEnd"),
		animationEnd: f("AnimationEnd")
	};
	e.fn.animate = function(n, o, p, q) {
		if (e.isObject(o)) {
			p = o.easing,
			q = o.complete,
			o = o.duration
		}
		if (o) {
			o = o / 1000
		}
		return this.anim(n, o, p, q)
	};
	e.fn.anim = function(s, p, o, u) {
		var r, w = {},
		t, q = this,
		n, v = e.fx.transitionEnd;
		if (p === c) {
			p = 0.4
		}
		if (e.fx.off) {
			p = 0
		}
		if (typeof s == "string") {
			w[g + "animation-name"] = s;
			w[g + "animation-duration"] = p + "s";
			v = e.fx.animationEnd
		} else {
			for (t in s) {
				if (l.test(t)) {
					r || (r = []);
					r.push(t + "(" + s[t] + ")")
				} else {
					w[t] = s[t]
				}
			}
			if (r) {
				w[g + "transform"] = r.join(" ")
			}
			if (!e.fx.off && typeof s === "object") {
				w[g + "transition-property"] = Object.keys(s).join(", ");
				w[g + "transition-duration"] = p + "s";
				w[g + "transition-timing-function"] = (o || "linear")
			}
		}
		n = function(x) {
			if (typeof x !== "undefined") {
				if (x.target !== x.currentTarget) {
					return
				}
				e(x.target).unbind(v, arguments.callee)
			}
			e(this).css(h);
			u && u.call(this)
		};
		if (p > 0) {
			this.bind(v, n)
		}
		setTimeout(function() {
			q.css(w);
			if (p <= 0) {
				setTimeout(function() {
					q.each(function() {
						n.call(this)
					})
				},
				0)
			}
		},
		0);
		return this
	};
	d = null
})(Zepto); (function($) {
	var jsonpID = 0,
	isObject = $.isObject,
	document = window.document,
	key, name, rscript = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,
	scriptTypeRE = /^(?:text|application)\/javascript/i,
	xmlTypeRE = /^(?:text|application)\/xml/i,
	jsonType = "application/json",
	htmlType = "text/html",
	blankRE = /^\s*$/;
	function triggerAndReturn(context, eventName, data) {
		var event = $.Event(eventName);
		$(context).trigger(event, data);
		return ! event.defaultPrevented
	}
	function triggerGlobal(settings, context, eventName, data) {
		if (settings.global) {
			return triggerAndReturn(context || document, eventName, data)
		}
	}
	$.active = 0;
	function ajaxStart(settings) {
		if (settings.global && $.active++===0) {
			triggerGlobal(settings, null, "ajaxStart")
		}
	}
	function ajaxStop(settings) {
		if (settings.global && !(--$.active)) {
			triggerGlobal(settings, null, "ajaxStop")
		}
	}
	function ajaxBeforeSend(xhr, settings) {
		var context = settings.context;
		if (settings.beforeSend.call(context, xhr, settings) === false || triggerGlobal(settings, context, "ajaxBeforeSend", [xhr, settings]) === false) {
			return false
		}
		triggerGlobal(settings, context, "ajaxSend", [xhr, settings])
	}
	function ajaxSuccess(data, xhr, settings) {
		var context = settings.context,
		status = "success";
		settings.success.call(context, data, status, xhr);
		triggerGlobal(settings, context, "ajaxSuccess", [xhr, settings, data]);
		ajaxComplete(status, xhr, settings)
	}
	function ajaxError(error, type, xhr, settings) {
		var context = settings.context;
		settings.error.call(context, xhr, type, error);
		triggerGlobal(settings, context, "ajaxError", [xhr, settings, error]);
		ajaxComplete(type, xhr, settings)
	}
	function ajaxComplete(status, xhr, settings) {
		var context = settings.context;
		settings.complete.call(context, xhr, status);
		triggerGlobal(settings, context, "ajaxComplete", [xhr, settings]);
		ajaxStop(settings)
	}
	function empty() {}
	$.ajaxJSONP = function(options) {
		var callbackName = "jsonp" + (++jsonpID),
		script = document.createElement("script"),
		abort = function() {
			$(script).remove();
			if (callbackName in window) {
				window[callbackName] = empty
			}
			ajaxComplete("abort", xhr, options)
		},
		xhr = {
			abort: abort
		},
		abortTimeout;
		if (options.error) {
			script.onerror = function() {
				xhr.abort();
				options.error()
			}
		}
		window[callbackName] = function(data) {
			clearTimeout(abortTimeout);
			$(script).remove();
			delete window[callbackName];
			ajaxSuccess(data, xhr, options)
		};
		serializeData(options);
		script.src = options.url.replace(/=\?/, "=" + callbackName);
		$("head").append(script);
		if (options.timeout > 0) {
			abortTimeout = setTimeout(function() {
				xhr.abort();
				ajaxComplete("timeout", xhr, options)
			},
			options.timeout)
		}
		return xhr
	};
	$.ajaxSettings = {
		type: "GET",
		beforeSend: empty,
		success: empty,
		error: empty,
		complete: empty,
		context: null,
		global: true,
		xhr: function() {
			return new window.XMLHttpRequest()
		},
		accepts: {
			script: "text/javascript, application/javascript",
			json: jsonType,
			xml: "application/xml, text/xml",
			html: htmlType,
			text: "text/plain"
		},
		crossDomain: false,
		timeout: 0
	};
	function mimeToDataType(mime) {
		return mime && (mime == htmlType ? "html": mime == jsonType ? "json": scriptTypeRE.test(mime) ? "script": xmlTypeRE.test(mime) && "xml") || "text"
	}
	function appendQuery(url, query) {
		return (url + "&" + query).replace(/[&?]{1,2}/, "?")
	}
	function serializeData(options) {
		if (isObject(options.data)) {
			options.data = $.param(options.data)
		}
		if (options.data && (!options.type || options.type.toUpperCase() == "GET")) {
			options.url = appendQuery(options.url, options.data)
		}
	}
	$.ajax = function(options) {
		var settings = $.extend({},
		options || {});
		for (key in $.ajaxSettings) {
			if (settings[key] === undefined) {
				settings[key] = $.ajaxSettings[key]
			}
		}
		ajaxStart(settings);
		if (!settings.crossDomain) {
			settings.crossDomain = /^([\w-]+:)?\/\/([^\/]+)/.test(settings.url) && RegExp.$2 != window.location.host
		}
		var dataType = settings.dataType,
		hasPlaceholder = /=\?/.test(settings.url);
		if (dataType == "jsonp" || hasPlaceholder) {
			if (!hasPlaceholder) {
				settings.url = appendQuery(settings.url, "callback=?")
			}
			return $.ajaxJSONP(settings)
		}
		if (!settings.url) {
			settings.url = window.location.toString()
		}
		serializeData(settings);
		var mime = settings.accepts[dataType],
		baseHeaders = {},
		protocol = /^([\w-]+:)\/\//.test(settings.url) ? RegExp.$1: window.location.protocol,
		xhr = $.ajaxSettings.xhr(),
		abortTimeout;
		if (!settings.crossDomain) {
			baseHeaders["X-Requested-With"] = "XMLHttpRequest"
		}
		if (mime) {
			baseHeaders.Accept = mime;
			if (mime.indexOf(",") > -1) {
				mime = mime.split(",", 2)[0]
			}
			xhr.overrideMimeType && xhr.overrideMimeType(mime)
		}
		if (settings.contentType || (settings.data && settings.type.toUpperCase() != "GET")) {
			baseHeaders["Content-Type"] = (settings.contentType || "application/x-www-form-urlencoded")
		}
		settings.headers = $.extend(baseHeaders, settings.headers || {});
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4) {
				clearTimeout(abortTimeout);
				var result, error = false;
				if ((xhr.status >= 200 && xhr.status < 300) || xhr.status == 304 || (xhr.status == 0 && protocol == "file:")) {
					dataType = dataType || mimeToDataType(xhr.getResponseHeader("content-type"));
					result = xhr.responseText;
					try {
						if (dataType == "script") { (1, eval)(result)
						} else {
							if (dataType == "xml") {
								result = xhr.responseXML
							} else {
								if (dataType == "json") {
									result = blankRE.test(result) ? null: JSON.parse(result)
								}
							}
						}
					} catch(e) {
						error = e
					}
					if (error) {
						ajaxError(error, "parsererror", xhr, settings)
					} else {
						ajaxSuccess(result, xhr, settings)
					}
				} else {
					ajaxError(null, "error", xhr, settings)
				}
			}
		};
		var async = "async" in settings ? settings.async: true;
		xhr.open(settings.type, settings.url, async);
		for (name in settings.headers) {
			xhr.setRequestHeader(name, settings.headers[name])
		}
		if (ajaxBeforeSend(xhr, settings) === false) {
			xhr.abort();
			return false
		}
		if (settings.timeout > 0) {
			abortTimeout = setTimeout(function() {
				xhr.onreadystatechange = empty;
				xhr.abort();
				ajaxError(null, "timeout", xhr, settings)
			},
			settings.timeout)
		}
		xhr.send(settings.data ? settings.data: null);
		return xhr
	};
	$.get = function(url, success) {
		return $.ajax({
			url: url,
			success: success
		})
	};
	$.post = function(url, data, success, dataType) {
		if ($.isFunction(data)) {
			dataType = dataType || success,
			success = data,
			data = null
		}
		return $.ajax({
			type: "POST",
			url: url,
			data: data,
			success: success,
			dataType: dataType
		})
	};
	$.getJSON = function(url, success) {
		return $.ajax({
			url: url,
			success: success,
			dataType: "json"
		})
	};
	$.fn.load = function(url, success) {
		if (!this.length) {
			return this
		}
		var self = this,
		parts = url.split(/\s/),
		selector;
		if (parts.length > 1) {
			url = parts[0],
			selector = parts[1]
		}
		$.get(url,
		function(response) {
			self.html(selector ? $(document.createElement("div")).html(response.replace(rscript, "")).find(selector).html() : response);
			success && success.call(self)
		});
		return this
	};
	var escape = encodeURIComponent;
	function serialize(params, obj, traditional, scope) {
		var array = $.isArray(obj);
		$.each(obj,
		function(key, value) {
			if (scope) {
				key = traditional ? scope: scope + "[" + (array ? "": key) + "]"
			}
			if (!scope && array) {
				params.add(value.name, value.value)
			} else {
				if (traditional ? $.isArray(value) : isObject(value)) {
					serialize(params, value, traditional, key)
				} else {
					params.add(key, value)
				}
			}
		})
	}
	$.param = function(obj, traditional) {
		var params = [];
		params.add = function(k, v) {
			this.push(escape(k) + "=" + escape(v))
		};
		serialize(params, obj, traditional);
		return params.join("&").replace("%20", "+")
	}
})(Zepto); (function(a) {
	a.fn.serializeArray = function() {
		var b = [],
		c;
		a(Array.prototype.slice.call(this.get(0).elements)).each(function() {
			c = a(this);
			var d = c.attr("type");
			if (this.nodeName.toLowerCase() != "fieldset" && !this.disabled && d != "submit" && d != "reset" && d != "button" && ((d != "radio" && d != "checkbox") || this.checked)) {
				b.push({
					name: c.attr("name"),
					value: c.val()
				})
			}
		});
		return b
	};
	a.fn.serialize = function() {
		var b = [];
		this.serializeArray().forEach(function(c) {
			b.push(encodeURIComponent(c.name) + "=" + encodeURIComponent(c.value))
		});
		return b.join("&")
	};
	a.fn.submit = function(c) {
		if (c) {
			this.bind("submit", c)
		} else {
			if (this.length) {
				var b = a.Event("submit");
				this.eq(0).trigger(b);
				if (!b.defaultPrevented) {
					this.get(0).submit()
				}
			}
		}
		return this
	}
})(Zepto); (function(g) {
	var f = {},
	b;
	function c(j) {
		return "tagName" in j ? j: j.parentNode
	}
	function h(k, j, m, l) {
		var o = Math.abs(k - j),
		n = Math.abs(m - l);
		return o >= n ? (k - j > 0 ? "Left": "Right") : (m - l > 0 ? "Up": "Down")
	}
	var e = 750,
	a;
	function i() {
		a = null;
		if (f.last) {
			f.el.trigger("longTap");
			f = {}
		}
	}
	function d() {
		if (a) {
			clearTimeout(a)
		}
		a = null
	}
	g(document).ready(function() {
		var j, k;
		g(document.body).bind("touchstart",
		function(l) {
			j = Date.now();
			k = j - (f.last || j);
			f.el = g(c(l.touches[0].target));
			b && clearTimeout(b);
			f.x1 = l.touches[0].pageX;
			f.y1 = l.touches[0].pageY;
			if (k > 0 && k <= 250) {
				f.isDoubleTap = true
			}
			f.last = j;
			a = setTimeout(i, e)
		}).bind("touchmove",
		function(l) {
			d();
			f.x2 = l.touches[0].pageX;
			f.y2 = l.touches[0].pageY
		}).bind("touchend",
		function(l) {
			d();
			if (f.isDoubleTap) {
				f.el.trigger("doubleTap");
				f = {}
			} else {
				if ((f.x2 && Math.abs(f.x1 - f.x2) > 30) || (f.y2 && Math.abs(f.y1 - f.y2) > 30)) {
					f.el.trigger("swipe") && f.el.trigger("swipe" + (h(f.x1, f.x2, f.y1, f.y2)));
					f = {}
				} else {
					if ("last" in f) {
						f.el.trigger("tap");
						b = setTimeout(function() {
							b = null;
							f.el.trigger("singleTap");
							f = {}
						},
						250)
					}
				}
			}
		}).bind("touchcancel",
		function() {
			if (b) {
				clearTimeout(b)
			}
			if (a) {
				clearTimeout(a)
			}
			a = b = null;
			f = {}
		})
	}); ["swipe", "swipeLeft", "swipeRight", "swipeUp", "swipeDown", "doubleTap", "tap", "singleTap", "longTap"].forEach(function(j) {
		g.fn[j] = function(k) {
			return this.bind(j, k)
		}
	})
})(Zepto);