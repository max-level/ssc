var MAX_DIVIDEND;
var SOUND_URL;
var DEFAULT;
var _LS;
var _LIC = 8;
var _lastResult;
var sideUserTitle;
var resetTimer;
var currentLottery;
var accountTimer;
var userparams;
var betting = false;
var _lastBetsTimer;
var _resultTimer;
$.ajaxSetup({
	cache: false
});
$(function() {
	if (/MSIE (6|7)/.test(navigator.userAgent)) {
		var a = function() {
				var g = $("#footer").position().top - $("#main1").position().top;
				$("#main1").height(g);
				$("#frame").height($("#mai1n").height());
				$("#mai1n .frame").width($("#main1").width() - 232)
			};
		a();
		$(window).resize(a)
	}
	$("#header .menu2 a").click(function() {
		$("#header .menu2 a.selected,#header .sub a.selected").removeClass("selected");
		$(this).addClass("selected");
		var g = $(this).attr("href");
		if (g != null && g.indexOf("{lottery}") != -1) {
			g = g.replace("{lottery}", currentLottery.id);
			$("#" + $(this).attr("target")).attr("src", g);
			return false
		}
	});
	var c = $("#lotterys a").click(function() {
		changePage($(this));
		refreshMenu()
	}).not("[target]").eq(0);
	var f = LIBS.cookie("defaultLT");
	if (f) {
		var d = $("#l_" + f);
		if (d.length > 0) {
			c = d
		}
	}
	initMenu();
	$(".header .sub a").click(function() {
		var h = $(this);
		$("#header .menu2 a.selected,#header .sub a.selected").removeClass("selected");
		$(this).addClass("selected");
		var g = h.attr("href");
		$("#frame").attr("src", g).data("a", h);
		return false
	});
	$(".sidenavibtn").click(function() {
		var h = $(this);
		b();
		$(h).addClass("sidenaviactive");
		var g = h.attr("rel");
		$("#frame").attr("src", g).data("a", h);
		return false
	});
	$(".sidenavibtn2").click(function() {
		var g = $(this);
		b();
		$(g).addClass("sidenaviactive");
		return true
	});

	function b() {
		$(".sidenavibtn").removeClass("sidenaviactive");
		$(".sidenavibtn2").removeClass("sidenaviactive")
	}
	$("#frame").on("load", function() {
		resetPanel(true);
		var i = LIBS.cookie("_skin_");
		if (!i) {
			i = getDefaultSkin();
			if (!i) {
				i = skins[1][0]
			}
		}
		var h = ["blue", "gold", "red"];
		var g = h.indexOf(i);
		$(".themeicon").eq(g).click()
	});
	sideUserTitle = $("#side .user_info .title");
	sideUserTitle.data("text", sideUserTitle.text());

	$("#betAmount").keypress(function(g) {
		if (g.keyCode == 13) {
			$("#btnBet").click()
		}
	});
	c.click();
	var e = LIBS.getUrlParam("page");
	if (e) {
		$("#frame").attr("src", e)
	}

});

function initMenu() {
	var e = $(".header .lotterys .show");
	var d = [];
	var f = $("#lotterys");
	f.find("a").each(function() {
		var i = $(this);
		var q = {
			id: i.attr("id").substr(2),
			info: i.attr("lang").split("_", 2),
			name: i.text()
		};
		i.data("info", q);
		d.push(q)
	});
	var c = LIBS.cookie("_menu_");
	var j = LIBS.cookie("_menumore_");
	if (!c) {
		var o = Math.min(_LIC, d.length);
		for (var m = 0; m < o; m++) {
			$(".items").append("<li><div class='item'></div></li>");
			var b = $(".item").eq(m);
			$("#l_" + d[m].id).appendTo(b);
			$(b).append("<div class='removebtn'></div>")
		}
		var n = 0;
		for (var m = _LIC; m < d.length; m++) {
			$(".gamebox").append("<div class='itemmg'></div>");
			var b = $(".itemmg").eq(n);
			$("#l_" + d[m].id).appendTo(b);
			$(b).append("<div class='addbtn'></div>");
			n++
		}
	} else {
		var a = c.split(",");
		var l = j.split(",");
		var p = a.length;
		var h = l.length;
		var k = $(".lotterys a").length;
		for (var m = 0; m < p; m++) {
			var g = a[m];
			$(".items").append("<li><div class='item'></div></li>");
			var b = $(".item").eq(m);
			$("#l_" + g).appendTo(b);
			$(b).append("<div class='removebtn'></div>")
		}
		var n = 0;
		for (var m = p; m < k; m++) {
			var g = l[n];
			$(".gamebox").append("<div class='itemmg'></div>");
			var b = $(".itemmg").eq(n);
			$("#l_" + g).appendTo(b);
			$(b).append("<div class='addbtn'></div>");
			n++
		}
	}
}

function changePage(d, c) {
	if (d.attr("target")) {
		return
	}
	var f = d.data("info");
	LIBS.cookie("defaultLT", f.id);
	if (!currentLottery || f.id != currentLottery.id) {
		currentLottery = f;
	
	}
	var e = $("#sub_" + f.id);
	$(".header .sub div:visible").hide();
	e.show();
	var b;
	if (c !== undefined) {
		b = e.find("a:eq(" + c + ")")
	} else {
		b = e.find("a.default");
		if (b.length == 0) {
			b = e.find("a:eq(0)")
		}
	}
	b.click()
}



function playSound() {
	if (!SOUND_URL) {
		return
	}
	var a = $("#SOUND");
	if (a.length == 0) {
		a = $('<audio id="SOUND"><source src="' + SOUND_URL + '" type="audio/mpeg"/></audio>').appendTo($("body"))[0];
		if (a.load) {
			a.load()
		}
	} else {
		a = a[0]
	}
	if (a.play) {
		a.play()
	}
}

function bet(b, d, a, c) {
	postBet({
		lottery: b,
		drawNumber: d,
		bets: a
	}, c)
}

function postBet(a, b) {
	a.bets.toJSON = function() {
		var c = [];
		for (var d = 0; d < this.length; d++) {
			c[d] = LIBS.clone({}, this[d], ["game", "contents", "amount", "odds", "multiple", "mcount", "state"])
		}
		return c
	};
	return $.ajax({
		url: "bet",
		type: "POST",
		contentType: "application/json",
		data: JSON.stringify(a),
		success: function(c) {
			try {
				if ($.isFunction(b)) {
					if (b(c) === false) {
						return
					}
				}
			} catch (d) {}
			showBetResult(a, c)
		},
		error: function(c) {
			alert("投注失败：" + c.code + ",请检查下注状况後重试。")
		},
		complate: function() {
			toggleBetButton(true)
		}
	})
}


function showResult(a) {
	var h = currentLottery;
	var m = h.info[0];
	clearTimeout(_resultTimer);
	_resultTimer = setTimeout(function() {
		LIBS.get("lastResult?lottery=" + h.id, showResult)
	}, 30000);
	if (!a || a.lottery != h.id) {
		return
	}
	if (_lastResult && _lastResult.lottery == a.lottery && (_lastResult.result != a.result || _lastResult.drawNumber != a.drawNumber)) {
		playSound();
		if ($("#resultList").is(":visible")) {
			$("#resultFrame")[0].contentWindow.location.reload(true)
		}
	}
	_lastResult = a;
	var l = _DRAW_URLS[h.id];
	if (typeof window.IS_MOBILE !== "undefined") {
		$("#result_balls").attr("href", l);
		$("#result_info").html(("<strong>" + a.drawNumber + "</strong>期"))
	} else {
		$("#result_balls").attr("href", l);
		$("#result_info").html(("<div>" + h.name + "</div><div>" + a.drawNumber + "期开奖</div>"))
	}
	var c = $("#result_balls").attr("class", "T_" + m + " L_" + h.id);
	if (m == "HK6" || m == "3D" || m == "KL8") {
		$("#result_balls").css("margin-top", "5px")
	} else {
		$("#result_balls").css("margin-top", "-5px")
	}
	c.empty();
	var j = a.result.split(",");
	var o = a.resultOther.split(",");
	var f;
	if (m == "HK6") {
		f = get_animal_by_ball
	} else {
		if (m == "3D") {
			f = function(p, r) {
				return ["佰", "拾", "个"][r]
			}
		}
	}
	for (var g = 0; g < j.length; g++) {
		var e = j[g];
		var d = $("<span>").appendTo(c);
		d.append($("<b>").addClass("b" + e).text(e));
		if (f) {
			d.append($("<i>").text(f(e, g)))
		}
		if (m == "PCEGG") {
			if (g < j.length - 1) {
				d.append($('<i style="margin:-25px 0px 0px 40px">').text("+"))
			} else {
				d.append($('<i style="margin:-25px 0px 0px 40px">').text("="));
				var k = Number(j[0]) + Number(j[1]) + Number(j[2]);
				var q = $("<span>").appendTo(c);
				q.append($("<b>").addClass("bg b_" + k).text(k))
			}
		}
		if (m == "HK6") {
			if (g == 5) {
				$("<span>").addClass("plus").text("+").appendTo(c)
			}
		}
	}
	if (o.length > 0) {
		var b = $("<div>").addClass("result_stat clearfix").appendTo(c);
		if (m == "GXKLSF") {
			b = $("<div>").addClass("result_stat clearfix ml8").appendTo(c)
		} else {
			if (m != "PK10") {
				b = $("<div>").addClass("result_stat clearfix ml4").appendTo(c)
			}
		}
		for (var g = 0; g < o.length; g++) {
			var n = o[g];
			if (n) {
				b.append($("<div>").addClass("statitm").text(n))
			}
		}
	}
}

function getUserParam(b, a) {
	if (!userparams) {
		return
	}
	return userparams[b + "-" + a]
}

function toggleBetButton(a) {
	if (a) {
		$(".control input").hide();
		$(".control span").show()
	} else {
		$(".control span").hide();
		$(".control input").show()
	}
}

function getBetTextHtml(b) {
	function c(h, g) {
		return '<span class="text">' + h + '</span>@<span class="odds">' + g + "</span>"
	}
	if (b.multiple) {
		return c(b.title, b.odds)
	}
	var f = b.text;
	var a = f.split("@");
	if (b.title) {
		f = b.title + " " + a[0]
	}
	var e = c(f, b.odds);
	if (a.length > 1) {
		for (var d = 1; d < a.length; d++) {
			e += "<br />" + c(a[d], b.oddsDetail[d - 1])
		}
	}
	return e
}

function showBetResult(c, m) {
	if (m.status == 3) {
		alert(m.message);
		return
	}
	showAccount(m.account);
	$("#betResultDrawNumber").text(c.drawNumber + "期");
	var l = $("#betReulstList");
	l.empty();
	var h = c.bets;
	var v = 0;
	var e = 0;
	var d = m.message;
	if (m.status == 1) {
		d = "赔率变更";
		$("#btnBetRetry").removeClass("disabled").prop("disabled", false).data("last", c)
	} else {
		if (m.status == 2) {
			d = "后台未开盘,不可以下注"
		}
		$("#btnBetRetry").addClass("disabled").prop("disabled", true)
	}
	for (var q = 0; q < h.length; q++) {
		var b = h[q];
		var f = m.odds[q].split(",");
		var n = f.shift();
		b.odds = n;
		b.oddsDetail = f;
		var k = $("<li>").appendTo(l);
		if (m.status == 0) {
			k.append($("<p>").html('注单号：<span class="bid">' + m.ids[q] + "</span>"))
		}
		k.append($("<p>").addClass("contents").html(getBetTextHtml(b)));
		if (b.multiple > 1) {
			e += b.multiple;
			v += b.amount * b.multiple;
			k.append($("<p>").addClass("contents").text("复式『 " + b.multiple + " 组 』"));
			k.append($("<p>").addClass("contents").text(b.text.join("、")));
			var u = b.amount;
			k.append($("<p>").text("分　组：" + u + " × " + b.multiple + "组"));
			k.append($("<p>").text("合计额：" + (b.amount * b.multiple)));
			k.append($("<p>").text("可赢额：" + LIBS.round(u * b.odds - u, 1)));
			var s = $("<table>").appendTo(k);
			var a = $("<tr>").addClass("head").appendTo(s);
			a.append($("<th>").text("ID").addClass("id"));
			a.append($("<th>").text("号码组合").addClass("nums"));
			a.append($("<th>").text("下注额"));
			var t = LIBS.comboArray(b.text, b.mcount);
			for (var p = 0; p < t.length; p++) {
				$("<tr>").appendTo(s).append($("<td>").text(p + 1)).append($("<td>").text(t[p].join(","))).append($("<td>").text("￥ " + u).addClass("amount"))
			}
		} else {
			e += 1;
			v += b.amount;
			if (b.multiple) {
				k.append($("<p>").addClass("contents").text(b.text.join("、")))
			}
			k.append($("<p>").text("下注金额： " + b.amount));
			k.append($("<p>").text("可赢金额： " + LIBS.round(b.amount * b.odds - b.amount, 1, true)))
		}
		if (m.status > 1 || (m.status == 1 && n != b.odds)) {
			k.append($("<span>").addClass("errmsg").text(d))
		}
	}
	var g = $("#betResultPanel");
	if (m.status == 0) {
		$("#betResultCount").text(e + "笔");
		$("#betResultTotal").text(v);
		g.children(".s1").hide();
		g.children(".s0").show()
	} else {
		g.children(".s0").hide();
		g.children(".s1").show()
	}
	showPanel(g, "下注结果反馈")
}

function reBet(a) {
	var b = $(a).data("last");
	if (b == null) {
		return
	}
	b.ignore = true;
	postBet(b)
}

function showPanel(a, b) {
	resetPanel();
	sideUserTitle.text(b);
	$(".betdone").hide();
	a.show()
}

function resetPanel(a) {
	clearTimeout(resetTimer);
	resetTimer = null;
	sideUserTitle.text(sideUserTitle.data("text"));
	$(".betdone").show();
	$("#betResultPanel").hide();
	if (!a) {
		refreshBets()
	}
}

function showMsg(b, c) {
	var a = $("#messageBox");
	if (a.length == 0) {
		a = $('<div id="messageBox">').appendTo("body").dialog({
			autoOpen: false,
			resizable: false,
			modal: true,
			icon: true,
			minHeight: 0,
			width: 400,
			title: "用户提示",
			buttons: {
				"确定": function() {
					$(this).data("ok", true).dialog("close")
				},
				"取消": function() {
					$(this).dialog("close")
				}
			}
		}).on("dialogclose", function(f) {
			var d = $(this).data("cb");
			if ($.isFunction(d)) {
				d($(this).data("ok"))
			}
		})
	}
	a.text(b).dialog("open").data({
		ok: false,
		cb: c
	});
	if (c) {
		a.dialog("widget").find(".ui-dialog-buttonset button:eq(1)").show()
	} else {
		a.dialog("widget").find(".ui-dialog-buttonset button:eq(1)").hide()
	}
}

function getBetText(a) {
	var c = "";
	if (a.title) {
		c += a.title + " "
	}
	c += a.text;
	if (a.multiple && a.multiple > 1) {
		c += '<div class="multiple">复式『 <span>' + a.multiple + ' 组</span> 』&nbsp;<a>查看明细</a><ol style="display:none">';
		var d = LIBS.comboArray(a.text, a.mcount);
		for (var b = 0; b < d.length; b++) {
			c += "<li><span>" + d[b].join("、") + "<span></li>"
		}
		c += "</ol>"
	}
	return c
}

function showBets(d, k) {
	var g = $("#betsBox");
	if (g.length == 0) {
		g = $('<div id="betsBox"></div>').appendTo("body").dialog({
			closeButton: false,
			autoOpen: false,
			resizable: false,
			icon: true,
			modal: true,
			minHeight: 0,
			width: 400,
			title: "下注明细（请确认注单）",
			buttons: {
				"确定": function() {
					var b = [];
					$("#betList tr").each(function() {
						var n = $(this);
						if (n.find("input:checked").length != 0) {
							var m = Number(n.find(".amount input").val());
							if (m <= 0 || isNaN(m)) {
								return
							}
							var l = n.data("b");
							l.amount = m;
							b.push(l)
						}
					});
					if (b.length > 0) {
						var i = $(this).data("req");
						i.bets = b;
						postBet(i, $(this).data("cb"))
					}
					$(this).data("sc", true).dialog("close")
				},
				"取消": function() {
					$(this).dialog("close")
				}
			}
		}).on("dialogclose", function() {
			betting = false
		}).on("dialogbeforeclose", function() {
			if (!$(this).data("sc")) {
				var b = $(this);
				showMsg("你确定取消下注吗？", function(i) {
					if (i) {
						b.data("sc", true).dialog("close")
					}
				});
				return false
			}
		}).html('<div class="betList"><table class="table"><thead><th>号码</th><th>赔率</th><th>金额</th><th>确认</th></thead><tbody id="betList"></tbody></table></div><div class="bottom"><span id="bcount"></span><span id="btotal"></span></div>');
		g.keypress(function(b) {
			if (b.keyCode == 13) {
				$(this).parent().find(".ui-dialog-buttonset button:eq(0)").click()
			}
		})
	}
	betting = true;
	var f = $("#betList");
	f.empty();
	var a = d.bets;
	for (var e = 0, c = a.length; e < c; e++) {
		var j = a[e];
		$("<tr>").appendTo(f).data("b", j).append($("<td>").addClass("contents").html(getBetText(j))).append($("<td>").addClass("odds").text(j.odds)).append($("<td>").addClass("amount").append($("<input>").val(j.amount))).append($("<td>").addClass("check").append($('<input type="checkbox">').prop("checked", true)))
	}

	function h() {
		var i = 0;
		var b = 0;
		f.find("tr").each(function() {
			var n = $(this);
			if (n.find("input:checked").length != 0) {
				var m = Number(n.find(".amount input").val());
				if (m <= 0 || isNaN(m)) {
					return
				}
				var l = n.data("b");
				var o = l.multiple ? l.multiple : 1;
				i += m * o;
				b += o
			}
		});
		$("#bcount").text("组数：" + b);
		$("#btotal").text("总金额：" + i)
	}
	f.find("input").change(h);
	f.find(".multiple a").hover(function() {
		$(this).parent().find("ol").show()
	}, function() {
		$(this).parent().find("ol").hide()
	});
	h();
	g.dialog("open").data({
		req: d,
		sc: false,
		cb: k
	})
}

function refreshMenu() {
	$(".gamecontainer").hide();
	var b = $("#l_" + currentLottery.id);
	$("#items a.selected").removeClass("selected");
	if (b.parent().hasClass("itemmg")) {
		$("#moregames").text(b.data("info").name);
		$(".lotterys .menumoregame").addClass("selected2")
	} else {
		$("#moregames").text("更多游戏");
		$(".lotterys .menumoregame").removeClass("selected2");
		b.addClass("selected")
	}
}
$(document).on("click", ".removebtn", function() {
	var b = $(".item").length;
	if (b == 1) {
		showMsg("最少要保留一个游戏！")
	} else {
		var a = $(this).parent().find("a");
		var b = $(".itemmg").length;
		$(".gamebox").append("<div class='itemmg'></div>");
		$(a).appendTo(".itemmg:eq(" + b + ")");
		$(".itemmg:eq(" + b + ")").append("<div class='addbtn'></div>");
		$(this).parent().parent().remove();
		$(".addbtn").css("display", "block");
		$(".removebtn").css("display", "block")
	}
});
$(document).on("click", ".addbtn", function() {
	var b = $(".item").length;
	if (b == _LIC) {
		showMsg("最多可以添加" + _LIC + "个游戏！")
	} else {
		var a = $(this).parent().find("a");
		$(".items").append("<li class='ui-sortable-handle'><div class='item'></div></div>");
		$(a).appendTo(".item:eq(" + b + ")");
		$(".item:eq(" + b + ")").append("<div class='removebtn'></div>");
		$(this).parent().remove()
	}
	$(".addbtn").css("display", "block");
	$(".removebtn").css("display", "block")
});

function loadAccount() {
	var a = $("#frame")[0].contentWindow.PeriodPanel;
	if (a) {
		a.loadAccounts()
	}
}

function loadBonus() {
	$.getJSON("payment/getbonusinfo", function(a) {
		if (a.data) {
			if (a.data.length > 1) {
				if (a.data.length > 9) {
					$("#redPackIcon .redpack_no span").text("9+")
				} else {
					$("#redPackIcon .redpack_no span").text(a.data.length)
				}
				$("#redPackIcon .redpack_no").show()
			} else {
				if (a.data.length == 1) {
					$("#redPackIcon .redpack_no").hide()
				}
			}
		}
	})
}
$(function() {
	$("#resultList").draggable();
	$("a").click(function() {
		$("#resultList").hide()
	})
});