$(function() {
	$("table.list tbody tr:not(.head)").hover(function() {
		$(this).addClass("hover")
	}, function() {
		$(this).removeClass("hover")
	});
	LIBS.bindFocus($(".input_panel input:text,.input_panel input:password,input.input"));
	$(window).ajaxSend(function(c, a, b) {
		if (b.loading) {
			var d = "";
			if (typeof b.loading == "string") {
				d = b.loading
			}
			a.loadingOverlay = $("<div>").addClass("loading_overlay").append($("<div>").append($("<span>").text(d))).appendTo("body")
		}
	});
	$(window).ajaxComplete(function(c, a, b) {
		if (b.loading && a.loadingOverlay) {
			a.loadingOverlay.remove()
		}
	})
});
(function(a) {
	a.fn.delayClass = function(d, b) {
		var c = this;
		clearTimeout(this.data("_dc_timer_" + d));
		this.addClass(d);
		this.data("_dc_timer_" + d, setTimeout(function() {
			c.removeClass(d)
		}, b))
	};
	a.fn.vals = function(b) {
		var c = [];
		if (a.isFunction(b)) {
			this.each(function() {
				var d = a(this).val();
				d = b(d, this);
				c.push(d)
			})
		} else {
			this.each(function() {
				c.push(a(this).val())
			})
		}
		return c
	};
	a.fn.formData = function(c, b) {
		var d = {};
		a("input,select,textarea", this).each(function() {
			var h = a(this);
			var g = h.prop("tagName").toLowerCase();
			var i = h.prop("type").toLowerCase();
			if (g == "input" && (i == "radio" || i == "checkbox") && !h.prop("checked")) {
				return
			}
			var f = h.prop("name");
			if (!f) {
				f = h.prop("id")
			}
			if (!f) {
				return
			}
			var j = h.val();
			if (!j && c) {
				return
			}
			var l = d;
			if (!b) {
				var k = f.split(".");
				while (k.length > 1) {
					f = k.shift();
					if (l[f] == null) {
						l[f] = {}
					}
					l = l[f]
				}
				f = k.shift()
			}
			if (/\[\]$/.test(f)) {
				f = f.substr(0, f.length - 2);
				var e = l[f];
				if (!e) {
					e = [];
					l[f] = e
				}
				e.push(j)
			} else {
				l[f] = j
			}
		});
		return d
	};
	a.fn.onlyNumber = function() {
		a(this).keypress(function(c) {
			var b = c.which;
			if (b == 0 || b == 13 || b == 8 || (b >= 48 && b <= 57)) {
				return true
			}
			return false
		})
	}
})($);
String.prototype.format = function() {
	var a = arguments;
	return this.replace(/{(\d+)}/g, function(b, c) {
		return a[c]
	})
};
String.prototype.padleft = function(c, e) {
	if (this.length < c) {
		if (!e) {
			e = " "
		}
		var d = "";
		for (var b = 0, a = c - this.length; b < a; b++) {
			d += e
		}
		return d + this
	}
	return this
};
Array.prototype.indexOf = function(b) {
	for (var a = 0; a < this.length; a++) {
		if (this[a] == b) {
			return a
		}
	}
	return -1
};
Date.prototype.format = function(a) {
	var c = {
		"M+": this.getMonth() + 1,
		"d+": this.getDate(),
		"h+": this.getHours(),
		"m+": this.getMinutes(),
		"s+": this.getSeconds(),
		"q+": Math.floor((this.getMonth() + 3) / 3),
		S: this.getMilliseconds()
	};
	if (/(y+)/.test(a)) {
		a = a.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length))
	}
	for (var b in c) {
		if (new RegExp("(" + b + ")").test(a)) {
			a = a.replace(RegExp.$1, (RegExp.$1.length == 1) ? (c[b]) : (("00" + c[b]).substr(("" + c[b]).length)))
		}
	}
	return a
};
var LIBS = (function() {
	function a(f, g, e) {
		if (!f) {
			f = {}
		}
		if (g) {
			if ($.isArray(e)) {
				for (var d = 0; d < e.length; d++) {
					var c = e[d];
					var b = g[c];
					var h = f[c];
					if (b !== undefined && b !== h) {
						f[c] = b
					}
				}
			} else {
				for (var c in g) {
					var b = g[c];
					var h = f[c];
					if (b !== undefined && b !== h) {
						f[c] = b
					}
				}
			}
		}
		return f
	}
	return {
		NUMBERS: ["零", "一", "二", "三", "四", "五", "六", "七", "八", "九", "十"],
		clone: a,
		money: function(f, g, e) {
			if (g !== undefined) {
				f = this.round(f, g, e)
			}
			f += "";
			var d = f.split(".", 2);
			var c = d[0];
			var b = /(\d+)(\d{3})/;
			while (b.test(c)) {
				c = c.replace(b, "$1,$2")
			}
			if (d.length > 1 && d[1].length > 0) {
				c += "." + d[1]
			}
			return c
		},
		split: function(g, f, b) {
			var d = g.indexOf(f);
			if (d == -1) {
				return [g]
			}
			var e = [g.substr(0, d)];
			d += f.length;
			while (d < g.length) {
				var c = g.indexOf(f, d);
				if (c == -1 || e.length + 1 >= b) {
					c = g.length
				}
				e.push(g.substring(d, c));
				d = c + f.length
			}
			return e
		},
		round: function(h, k, g) {
			if (h == null) {
				return null
			}
			if (!k) {
				k = 0
			}
			var f = Math.pow(10, k);
			h = Math.round(h * f) / f;
			if (k > 0 && g) {
				h += "";
				var j = h.indexOf(".");
				if (j == -1) {
					j = h.length;
					h += "."
				}
				for (var d = 0, b = k - (h.length - j - 1); d < b; d++) {
					h += "0"
				}
			}
			return h
		},
		combination: function(e, b) {
			if (e <= b) {
				return 1
			}
			if (e == b + 1) {
				return e
			}
			var d = e;
			for (var c = e - 1; c > e - b; c--) {
				d *= c
			}
			for (var c = b; c > 1; c--) {
				d /= c
			}
			return d
		},
		replaceArray: function(d, g) {
			if (g) {
				var c = [];
				for (var e = 0; e < d.length; e++) {
					var f = g[d[e]];
					if (f == null) {
						c.push(d[e])
					} else {
						c.push(f)
					}
				}
			}
			return c
		},
		comboArray: function(b, e, d) {
			if (d == null) {
				d = b.length
			}
			if (e < 1 || d < 1 || e > d) {
				return
			}
			var s = [];
			var p = [];
			for (var h = 0; h < e; h++) {
				p[h] = h
			}
			while (true) {
				var r = [];
				for (var h = 0; h < e; h++) {
					r[h] = b[p[h]]
				}
				r.count = r[0].count;
				for (var f = 1, l = r.length; f < l; f++) {
					r.count *= r[f].count
				}
				s[s.length] = r;
				for (var h = e - 1, o = h; h >= 0; h--) {
					var q = p[h] + 1;
					if (q >= d - o + h) {
						if (h == 0) {
							s.count = s[0].count;
							for (var f = 1, l = s.length; f < l; f++) {
								s.count += s[f].count
							}
							return s
						}
					} else {
						p[h] = q;
						for (var g = h; g < o; g++) {
							p[g + 1] = p[g] + 1
						}
						break
					}
				}
			}
		},
		comboList: function(f) {
			var c = [];
			var g = [];
			var b = f.length;
			for (var d = 0; d < b; d++) {
				g[d] = 0
			}
			while (true) {
				var e = [];
				for (var d = 0; d < b; d++) {
					e[d] = f[d][g[d]]
				}
				c.push(e);
				for (var d = 0; d < b; d++) {
					g[d] += 1;
					if (g[d] < f[d].length) {
						break
					}
					if (d == b - 1) {
						return c
					}
					g[d] = 0
				}
			}
		},
		timeToString: function(c) {
			if (c <= 0) {
				return "00:00"
			}
			var b = Math.floor(c / 1000);
			var d = Math.floor(b / 60);
			b = b - d * 60;
			if (d < 10) {
				d = "0" + d
			}
			if (b < 10) {
				b = "0" + b
			}
			return "" + d + ":" + b
		},
		ajaxDefaultTimeout: 10000,
		ajax: function(f, b, e) {
			if (f && !f.timeout) {
				f.timeout = this.ajaxDefaultTimeout
			}
			if (!b) {
				b = 2
			}
			if (!e) {
				e = 1000
			}
			var g = {};
			var h = 0;
			var d = f.error;
			var c = f.complete;
			f.error = function(j, i) {
				clearTimeout(g.errTimer);
				if (i == "timeout" || (i == "error" && j.status == 503)) {
					h += 1;
					if (h <= b || b == -1) {
						delay = h * h * e;
						g.errTimer = setTimeout(function() {
							g = a(g, $.ajax(f))
						}, delay);
						this.retryError = true;
						return
					}
				}
				if ($.isFunction(d)) {
					d.apply(this, arguments)
				}
			};
			f.complete = function() {
				if (!this.retryError && $.isFunction(c)) {
					c.apply(this, arguments)
				}
			};
			g = $.ajax(f);
			return g
		},
		get: function(d, f, g, e, b, c) {
			if (jQuery.isFunction(f)) {
				c = b;
				b = e;
				e = g;
				g = f;
				f = undefined
			}
			if (typeof e !== "string" && !$.isArray(e)) {
				c = b;
				b = e;
				e = undefined
			}
			return this.ajax({
				url: d,
				type: "get",
				dataType: e,
				data: f,
				success: g
			}, b, c)
		},
		colorMoney: function(b, c, d) {
			if (!c && !d) {
				return
			}
			$(b).each(function() {
				var e = $(this);
				var f = e.text();
				e.removeClass(c).removeClass(d);
				if (!f || f == "0") {
					return
				}
				if (f[0] == "-" && c) {
					e.addClass(c)
				} else {
					if (d) {
						e.addClass(d)
					}
				}
			})
		},
		url: function(h, j) {
			if (!h) {
				return location.href
			}
			if (j === undefined) {
				j = h;
				h = location.pathname
			}
			var b = h.indexOf("?");
			var f = location.search;
			if (b >= 0) {
				f = h.substr(b);
				h = h.substring(0, b)
			}
			var d = h + "?";
			if (f.length > 1) {
				f = f.substr(1).split("&");
				for (var e = 0; e < f.length; e++) {
					if (f[e].length == 0) {
						continue
					}
					var g = f[e].split("=", 2);
					if (!g[1]) {
						continue
					}
					if (j[g[0]] === undefined) {
						j[g[0]] = decodeURIComponent(g[1])
					}
				}
			}
			for (var c in j) {
				if (!j[c]) {
					continue
				}
				d += c + "=" + encodeURIComponent(j[c]) + "&"
			}
			d = d.substr(0, d.length - 1);
			return d
		},
		getUrlParam: function(b, d) {
			if (!d) {
				d = location.search
			}
			if (d.length > 1) {
				d = d.substr(1).split("&");
				for (var c = 0; c < d.length; c++) {
					if (d[c].length == 0) {
						continue
					}
					var e = d[c].split("=", 2);
					if (!e[1]) {
						continue
					}
					if (e[0] == b) {
						return decodeURIComponent(e[1])
					}
				}
			}
		},
		equals: function(d, c) {
			for (var e in d) {
				if (d[e] != c[e]) {
					return false
				}
			}
			return true
		},
		bindFocus: function(b) {
			b.focusin(function() {
				$(this).addClass("input_focus")
			}).focusout(function() {
				$(this).removeClass("input_focus")
			});
			return b
		},
		toMap: function(g, e, d) {
			if (g == null) {
				return {}
			}
			if (!e) {
				e = ";"
			}
			if (!d) {
				d = "="
			}
			g = g.split(e);
			var f = {};
			for (var b = 0; b < g.length - 1; b++) {
				var c = g[b].split(d, 2);
				if (c.length != 2) {
					continue
				}
				f[c[0]] = c[1]
			}
			return f
		},
		cookie: function(c, k, n) {
			if (typeof k != "undefined") {
				n = n || {};
				if (k === null) {
					k = "";
					n.expires = -1
				}
				var f = "";
				if (n.expires && (typeof n.expires == "number" || n.expires.toUTCString)) {
					var g;
					if (typeof n.expires == "number") {
						g = new Date();
						g.setTime(g.getTime() + (n.expires * 24 * 60 * 60 * 1000))
					} else {
						g = n.expires
					}
					f = "; expires=" + g.toUTCString()
				}
				var m = n.path ? "; path=" + n.path : "";
				var h = n.domain ? "; domain=" + n.domain : "";
				var b = n.secure ? "; secure" : "";
				document.cookie = [c, "=", encodeURIComponent(k), f, m, h, b].join("")
			} else {
				var e = null;
				if (document.cookie && document.cookie != "") {
					var l = document.cookie.split(";");
					for (var j = 0; j < l.length; j++) {
						var d = jQuery.trim(l[j]);
						if (d.substring(0, c.length + 1) == (c + "=")) {
							e = decodeURIComponent(d.substring(c.length + 1));
							break
						}
					}
				}
				return e
			}
		}
	}
})();