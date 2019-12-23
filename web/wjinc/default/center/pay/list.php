
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
<script type="text/javascript" src="/static/lib/util/error.js" async></script>

<script type="text/javascript" src="/static/lib/jquery/page/jquery.pagination.js"></script>

<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>
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

<script type="text/javascript">
	$(function() {
		Pay.getRechList({
			elemet : "#listPage"
		});
	});
</script>	
</head>
<body id="bodyid" class="">
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
			<a href="/center/pay/index.html?v5"><div class="subitm2">充值</div></a>
			<a href="/center/withdraw/index.html"><div class="subitm2">提现</div></a>
			<a href="/center/pay/list.html"><div class="subitm2 subitmactive">充值记录</div></a>
			<a href="/center/withdraw/list.html"><div class="subitm2">提现记录</div></a>
			<div class="arrow1a arrow arrow3a"></div>
		</div>
	</div>
</div>	
<div class="rightpanel rw1">
		<div class="contentcontainer">
			<div class="row">
				<div class="col1 ">交易状态：</div>
				<div class="col2">
					<div class="textcontainer">
						<select id="status" class="province floatleft select1">
							<option value="99"  selected="selected">全部</option>
							<option value="0" >待处理</option>
							<option value="1" >成功</option>
							<option value="3" >失败</option>
						</select>
					</div>

					<div class="textcontainer">
						<div class="col1">起止日期：</div>
						<input id="startDate" class="textbox2 laydate-icon" style="width: 100px; height: 29px;"
							value="" type="text" onClick="WdatePicker()"> 
						<input id="endDate" class="textbox2 laydate-icon"
							style="width: 100px; margin-left: 10px; height: 29px;" value=""
							type="text" onClick="WdatePicker()">
					</div>
					<div>
						<button type="button" class="frmbtn" onclick="Pay.getRechList();">搜索</button>
					</div>

				</div>
			</div>
			<div class="mt4">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="borderblue">
					<thead>
						<tr class="borderbtmblue bluetbl">
							<td style="width: 10%">时间</td>
							<td style="width: 8%">交易类型</td>
							<td style="width: 8%">金额</td>
							<td style="width: 6%">奖励</td>
							<td style="width: 30%">交易描述</td>
							<td style="width: 6%">状态</td>
							
						</tr>
					</thead>
					<tbody id="paylist-tbody">
						 
						<!--tr class="borderbtmgrey">
							<td class="algleft">2017-05-25 00:45:56</td>
							<td> 充值 </td>
							<td>122</td>
							<td>0</td>
							<td class="algleft">通过 在线支付接口(hebaowechatpay) 存入 122元</td>
							<td></td>
							<td>  未处理  </td>
							<td><a onclick="dialog.url('交易详细',630,500,'/member/payment/detailtrans?id=149564435605984687');" href="javascript:;">详情</a></td>
							
						</tr-->


					</tbody>
				</table>

			</div>
<div class="page_info">
			<div id="listPage" class="megas512"></div>
		</div>
		</div>


	</div>
	

</body>
</html>
