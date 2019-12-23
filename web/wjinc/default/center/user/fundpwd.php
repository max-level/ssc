
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/skin/css/user.css">
<script type="text/javascript" src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" ></script>
<script type="text/javascript" src="/static/lib/jquery.cookie.js"></script>
<script type="text/javascript" src="/static/js/skin.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>


<script type="text/javascript"> 
	var staticFileUrl = parent.getStaticDomain();
// 	var lunarDate = parent.lunarDate;
	var animalsYear = parent.animalsYear;
	var sysServerDate = parent.sysServerDate;
	var defaultSkin = parent.defaultSkin;
	var sysTrialGamePro = parent.sysTrialGamePro;
	var gameMap = parent.gameMap;
	var games = parent.games;
	var layer = parent.layer;
	parent.UserBet.playType = "NORMAL";
</script>
<script type="text/javascript"> 
$.ajaxSetup ({
	cache: false //close AJAX cache
});
</script>
<!--  error.js要放在最后面  -->
<script type="text/javascript" src="/static/lib/util/error.js" async="async"></script>
</head>
<body id="bodyid" class="">
<input id="pageType" type="hidden" value="FUNDPWD" />
<div class="bannercontainer">
	<div class="banner">
		<div class="avatar"></div>
		<div class="text1">
			<script language="javaScript">
				now = new Date(), hour = now.getHours()
				if (hour < 6) {
					document.write("凌晨好")
				} else if (hour < 9) {
					document.write("早上好")
				} else if (hour < 12) {
					document.write("上午好")
				} else if (hour < 14) {
					document.write("中午好")
				} else if (hour < 17) {
					document.write("下午好")
				} else if (hour < 19) {
					document.write("傍晚好")
				} else if (hour < 22) {
					document.write("晚上好")
				} else {
					document.write("夜里好")
				}
				$(function() {
				//设置当前页菜单默认值
				var curLocation = location.href.split("/");
				var curPageName = curLocation.slice(curLocation.length-1, curLocation.length).toString(String).split(".").slice(0, 1).toString(String).toLowerCase().split("?")[0];
				var webMenu = $(".subnavigation2 div");
				switch(curPageName){
					case "":	  		webMenu.eq(0).addClass("subitmactive");webMenu.eq(5).addClass("arrow1a");break;
					case "index":	  	webMenu.eq(0).addClass("subitmactive");webMenu.eq(5).addClass("arrow1a");break;
					case "address":		webMenu.eq(1).addClass("subitmactive");webMenu.eq(5).addClass("arrow2a");break;
					case "transfer":	webMenu.eq(2).addClass("subitmactive");webMenu.eq(5).addClass("arrow3a");break;
					case "notices":		webMenu.eq(3).addClass("subitmactive");webMenu.eq(5).addClass("arrow4a");break;
					case "feedback":	webMenu.eq(4).addClass("subitmactive");webMenu.eq(5).addClass("arrow5a");break;
				}
				})
			</script>
			，<?php $this->display('center/center.php');?>
		<div class="subnavigation2">
			<a href="/center/user/notice.html"><div class="subitm2">安全设置</div></a>
			<a href="/center/user/loginpwd.html"><div class="subitm2">登入密码</div></a>
			<a href="/center/user/fundpwd.html"><div class="subitm2 subitmactive">提款密码</div></a>
			<a href="/box/receive"><div class="subitm2">消息中心</div></a>
			<div class="arrow3a arrow arrow1"></div>
		</div>
	</div>
</div>	
	<div class="rightpanel rw subcontent1 margintop20 hide" id="withdrawal1">
		<div class="contentcontainer">
			<div class="maincol innerline">
				<div class="row pagetitle">
					<span class="bluepagetitle">提款密码</span>  您还未设置提款密码，请先设置提款密码 
				</div>
				<div class="row">
					<div class="col1">提款密码 :</div>
					<div class="col2a">
						<input type="password" id="drawcode" class="textbox2 ml5"> 
					</div>
				</div>
				<div class="row">
					<div class="col1">重复密码 :</div>
					<div class="col2a">
						<div class="textcontainer">
							<input type="password" id="redrawcode" class="textbox2 laydate-icon ml5">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col1">&nbsp;</div>
					<div class="col2a">
						<button class="btnsubmit ml5" onclick="User.setFundPwd();" type="submit">确定</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div class="rightpanel rw subcontent1 margintop20 hide" id="withdrawal2" >
		<div class="contentcontainer">
			<div class="maincol innerline">
				<div class="row pagetitle">
					<span class="bluepagetitle">提款密码</span>  设置复杂的密码可提高帐号的安全性 
				</div>
				<div class="row">
					<div class="col1">当前密码 :</div>
					<div class="col2a">
						<input type="password" id="fundpwd" class="textbox2 ml5"> 
					</div>
				</div>
				<div class="row">
					<div class="col1">新密码 :</div>
					<div class="col2a">
						<input type="password" id="newpwd" class="textbox2 ml5"> 
					</div>
				</div>
				<div class="row">
					<div class="col1">确认密码 :</div>
					<div class="col2a">
						<div class="textcontainer">
							<input type="password" id="rednewpwd" class="textbox2 laydate-icon ml5">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col1">&nbsp;</div>
					<div class="col2a">
						<button class="btnsubmit ml5" onclick="User.updateFundPwd();" type="submit">确定</button>
					</div>
				</div>
			</div>
		</div>
	</div>	

<script type="text/javascript">
var layer = parent.layer;
parent.UserBet.playType = "NORMAL";
</script>
<script type="text/javascript" src="/static/lib/util/md5.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript" src="/static/lib/util/ctab.min.js"></script>
<!--  error.js要放在最后面  -->
<script type="text/javascript" src="/static/lib/util/error.js"></script>
	<script type="text/javascript" src="/static/js/center.js"></script>
</body>
</html>
