
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title>Welcome</title>
<meta name="renderer" content="webkit" /> 
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/skin/css/user.css" rel="stylesheet" type="text/css" />
</head>
<body class="iframe-body">
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

<input id="pageType" type="hidden" value="PAY" />
		<input id="payVal" type="hidden" value="onlinePayment" />

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
			<a href="/center/pay/index.html?v5"><div class="subitm2 subitmactive">充值</div></a>
			<a href="/center/withdraw/index.html"><div class="subitm2">提现</div></a>
			<a href="/center/pay/list.html"><div class="subitm2">充值记录</div></a>
			<a href="/center/withdraw/list.html"><div class="subitm2">提现记录</div></a>
			<div class="arrow1a arrow arrow1"></div>
		</div>
	</div>
</div>	
<div class="rightpanel">

		<div class="contentcontainer">
			<div class="nc_left">
        		
        	</div>
        	<p>
        	
			<div class="row">
				<div class="stepitm stepactive" style="z-index: 3;">
					<div class="stepnotxt">01 提交</div>
					<div class="hlfcircle hlfcircleactive"></div>
				</div>
				<div class="stepitm" style="z-index: 2;">
					<div class="stepnotxt">02 审核</div>
					<div class="hlfcircle"></div>
				</div>
				<div class="stepitm" style="z-index: 1;">
					<div class="stepnotxt">03 出款</div>
					<div class="hlfcircle"></div>
				</div>
				<div class="stepitm" style="z-index: 0;">
					<div class="stepnotxt">04 到账</div>
				</div>

			</div>
			  
			 <div class="row mt10" >
              		<div class="messagetxt">选择充值模式：</div>
					<a href="javascript:void(0);" class="tabnavi tab hide" id="tp_wx" payval="weixin" onclick="Pay.initWeChat(this);">微信汇款</a>
                    <a href="javascript:void(0);" class="tabnavi tab hide" id="tp_zfb" payval="alipay" onclick="Pay.initAWRechCfg(this);">支付宝汇款</a>
                    <a href="javascript:void(0);" class="tabnavi tab hide" id="tp_cft" payval="cft" onclick="Pay.initCft(this);">财付通支付</a>
                    <a href="javascript:void(0);" class="tabnavi tab hide tabnaviactive" id="tp_zxzf" payval="onlinePayment">在线充值</a>
                    <a href="javascript:void(0);" class="tabnavi tab hide" id="tp_sf_zfb" payval="onlinePayment" title="sfzfb">支付宝充值</a>
                    <a href="javascript:void(0);" class="tabnavi tab hide" id="tp_sf_wx" payval="onlinePayment" title="sfwx">微信在线支付1</a>
                    <a href="javascript:void(0);" class="tabnavi tab hide" id="tp_zf_zfb" payval="onlinePayment" title="zfzfb">支付宝在线支付2</a>
					<a href="javascript:void(0);" class="tabnavi tab hide" id="tp_zf_wx" payval="onlinePayment" title="zfwx">微信充值</a>
					<a href="javascript:void(0);" class="tabnavi tab hide" id="tp_bank" payval="bankTransfer" onclick="Pay.initBankRechCfg(this);">银行卡汇款</a>					
              	  </div>
		




<div class="row" style="overflow: visible;">

<!--银行卡转账-->	
<div class="tabbox clearfix subcontent" id="subpagetp_bank">
	<div class="row clearfix">
		<div class="col1">银行种类：</div>
		<div class="col2">
			<div id="bank-subcol" class='selectbox'></div>
		</div>
	</div>
	
	<div class="row smtxt mt15">
		<div class="col1"></div>
		<div class="col2">温馨提示：为确保财务第一时间为您添加游戏额度，请您尽量不要转账整数（例如：欲入￥5000，请￥5000.68）谢谢！<br/><span class="blue">友情提示：请每次入款前登录会员核对银行账号是否使用。入款至已过期账号，公司无法查收，恕不负责！<br/>在您转账成功后，请点击“我已存款”，通知客服确认到账哦！</span></div>
	</div>
	<div class="row smtxt">
		<div class="col1"></div>
	</div>
	<div class="row mt15">
		<div class="col1"></div>
		<div class="col2">
			<button class="btnsubmit" onclick="Pay.showPayWindow();">开始充值</button>
		</div>
	</div>
</div>	

<!--微信转账-->	
<div class="tabbox clearfix subcontent" id="subpagetp_wx">
	<div class="row clearfix">
		<div class="col1">银行种类：</div>
		<div class="col2">
			<div id="wx-subcol" class='selectbox'></div>
		</div>
	</div>
	
	<div class="row smtxt mt15">
		<div class="col1"></div>
		<div class="col2">温馨提示：为确保财务第一时间为您添加游戏额度，请您尽量不要转账整数（例如：欲入￥5000，请￥5000.68）谢谢！<br/><span class="blue">友情提示：请每次入款前登录会员核对银行账号是否使用。入款至已过期账号，公司无法查收，恕不负责！<br/>在您转账成功后，请点击“我已存款”，通知客服确认到账哦！</span></div>
	</div>
	<div class="row smtxt">
		<div class="col1"></div>
	</div>
	<div class="row mt15">
		<div class="col1"></div>
		<div class="col2">
			<button class="btnsubmit" onclick="Pay.showPayWindow();">开始充值</button>
		</div>
	</div>
</div>	

<!--支付宝转账-->	
<div class="tabbox clearfix subcontent" id="subpagetp_zfb">
	<div class="row clearfix">
		<div class="col1">银行种类：</div>
		<div class="col2">
			<div id="aw-subcol" class='selectbox'></div>
		</div>
	</div>
	<div class="row smtxt mt15">
		<div class="col1"></div>
		<div class="col2">温馨提示：为确保财务第一时间为您添加游戏额度，请您尽量不要转账整数（例如：欲入￥5000，请￥5000.68）谢谢！<br/><span class="blue">友情提示：请每次入款前登录会员核对银行账号是否使用。入款至已过期账号，公司无法查收，恕不负责！<br/>在您转账成功后，请点击“我已存款”，通知客服确认到账哦！</span></div>
	</div>
	<div class="row smtxt">
		<div class="col1"></div>
	</div>
	<div class="row mt15">
		<div class="col1"></div>
		<div class="col2">
			<button class="btnsubmit" onclick="Pay.showPayWindow();">开始充值</button>
		</div>
	</div>
</div>

<!--在线支付-->
	<!--div class="tabbox clearfix subcontent" id="subpagetp_zxzf" style="display: block;">
	  <form id="zxzf_form" method="post" onsubmit="return Pay.onlinePay('zxzf');" target="_blank" action="/userrech/onlinePay.do">
		<input type="hidden" name="bankName" id="onlinePayBankName" value="">
		<input type="hidden" name="token" id="zxzf_token" value="">
	  <div class="row">
				<div class="col1">充值金额：</div>
				<div class="col2"><input id="amount" name="amount" onkeypress="return isNumber(event)" type="text" class="textbox2">
				<img src="/skin/img/user/warningsmallicon.jpg" class="mt4 ml10"/> <div class="pink mt4">请输入充值金额，最低金额100</div></div>
	  </div>
	  <div class="row clearfix">
				<div class="col1">银行种类：</div>
		<div class="col2">
		<div class="banklist selectbox">
				<input type="radio" id="a4a" name="payId" value="wx" class="mt4" checked>
				<div class='sprite ico-icbc'></div>
				<div>微信扫码</div>
			</div>
		<div class="banklist selectbox">
		
				<input type="radio" name="payId" value="zfb" id="ab5" class="mt4">
				<div class='sprite ico-icbc'></div>
				<div>支付宝</div>
			</div>
		<div class="banklist selectbox">
				<input type="radio" id="a4a" name="payId" value="qq" class="mt4">
				<div class='sprite ico-icbc'></div>
				<div>QQ扫码</div>
			</div>	
		<div class="banklist selectbox">
				<input type="radio"id="ab4a" name="payId" value="FASTPAY" class="mt4">
				<div class='sprite ico-icbc'></div>
				<div>银联扫码</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="a3" name="payId" value="ICBC" class="mt4" >
				<div class='sprite ico-icbc'></div>
				<div>工商银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio"id="a15" name="payId" value="CCB" class="mt4">
				<div class='sprite ico-ccb'></div>
				<div>建设银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3005" name="payId" value="ABC-NET" class="mt4">
				<div class='sprite ico-abc'></div>
				<div>农业银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3020" name="payId" value="BOCO-NET" class="mt4">
				<div class='sprite ico-boco'></div>
				<div>交通银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3026" name="payId" value="BOC-NET" class="mt4">
				<div class='sprite ico-boc'></div>
				<div>中国银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3022" name="payId" value="CEB-NET" class="mt4">
				<div class='sprite ico-cebb'></div>
				<div>光大银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3006" name="payId" value="CMBC-NET" class="mt4">
				<div class='sprite ico-cmbc'></div>
				<div>民生银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3038" name="payId" value="POST-NET" class="mt4">
				<div class='sprite ico-post'></div>
				<div>邮政银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3001" name="payId" value="CMBCHINA-NET" class="mt4">
				<div class='sprite ico-cmb'></div>
				<div>招商银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3009" name="payId" value="CIB-NET" class="mt4">
				<div class='sprite ico-cib'></div>
				<div>兴业银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3039" name="payId" value="ECITIC-NET" class="mt4">
				<div class='sprite ico-cccb'></div>
				<div>中信银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3036" name="payId" value="GDB-NET" class="mt4">
				<div class='sprite ico-gdb'></div>
				<div>广发银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3004" name="payId" value="SPDB-NET" class="mt4">
				<div class='sprite ico-spdb'></div>
				<div>浦发银行</div>
			</div>
			<div class="banklist selectbox">
				<input type="radio" id="3050" name="payId" value="HXB-NET" class="mt4">
				<div class='sprite ico-hxb'></div>
				<div>华夏银行</div>
			</div>
		</div>
		
	  </div>
	  <div class="row smtxt">
		<div class="col1"></div>
		
		</div>
	  <div class="row mt15">
			<div class="col1"></div>
			<div class="col2">
			<button class="btnsubmit">开始充值</button>
			</div>
		</div>
	</form>
	</div>

<!--支付宝在线支付1-->        
<!--div class="tabbox clearfix subcontent" id="subpagetp_sf_zfb">
	<form id="sf_zfb_form" method="post" onsubmit="return Pay.onlinePay('sf_zfb');" target="_blank" action="/userrech/onlinePay.do">
		<input type="hidden"  name="rechId" id="sf_zfb_rech_id" value="">
		<div class="row">
			<div class="col1">充值金额：</div>
			<div class="col2">
			<input id="sf_zfb_amount" name="amount" autocomplete="off" onkeypress="return isNumber(event)" type="text" class="textbox2">
			<img src="/skin/img/user/warningsmallicon.jpg" class="mt4 ml10"/> 
			<div class="pink mt4">请输入充值金额，最低金额50</div>
			</div>
		</div>
		
		<div class="row clearfix">
			<div class="col1">银行种类：</div>
			<div class="col2">
				<div id="sfwx-subcol" class="selectbox">
					<input class="bankradiobtn" type="radio" id="758" name="payId" value="alipay" code="ZFB" checked="checked" id="sfzfb_radio">
					<div class='sprite ico-qqzf'></div>
					<div>支付宝</div>
				</div>
			</div>
		</div>
	
		<div class="row mt15">
			<div class="col1"></div>
			<div class="col2">
				<button class="btnsubmit">开始充值</button>
			</div>
		</div>
	</form>
</div>
	
	
<!--支付宝在线支付2-->
<!--div class="tabbox clearfix subcontent" id="subpagetp_zf_zfb">
	<form id="zf_zfb_form" method="post" onsubmit="return Pay.onlinePay('zf_zfb');" target="_blank" action="/userrech/onlinePay.do">
		<input type="hidden"  name="rechId" id="zf_zfb_rech_id" value="">
	<div class="row clearfix">
		<div class="col1">银行种类：</div>
		<div class="col2">
			<div class="selectbox2">
				<input type="radio" id="CMB" name="bank_3" value="6214838620583973" class="mt9">
				<div class='otherbank2'>
					<img src="" class="banklistimg2" />支付宝在线2
				</div>
			</div>
		</div>
	</div>
	
	<div class="row smtxt mt15">
		<div class="col1"></div>
		<div class="col2">温馨提示：为确保财务第一时间为您添加游戏额度，请您尽量不要转账整数（例如：欲入￥5000，请￥5000.68）谢谢！<br/><span class="blue">友情提示：请每次入款前登录会员核对银行账号是否使用。入款至已过期账号，公司无法查收，恕不负责！<br/>在您转账成功后，请点击“我已存款”，通知客服确认到账哦！</span></div>
	</div>
	<div class="row smtxt">
		<div class="col1"></div>
	</div>
	<div class="row mt15">
		<div class="col1"></div>
		<div class="col2">
			<button class="btnsubmit" onclick="doDeposit(this,1)">开始充值</button>
		</div>
	</div>
</div>	
	
<!--微信在线支付2-->	
<!--div class="tabbox clearfix subcontent" id="subpagetp_sf_wx">
	<form id="sf_online_pay_form" method="post" onsubmit="return Pay.onlinePay('sf_wx');" target="_blank" action="/userrech/onlinePay.do">
		<input type="hidden"  name="rechId" id="sf_wx_rech_id" value="">
		<div class="row">
			<div class="col1">充值金额：</div>
			<div class="col2">
			<input id="sf_wx_amount" name="amount" autocomplete="off" onkeypress="return isNumber(event)" type="text" class="textbox2"> 
			<img src="/skin/img/user/warningsmallicon.jpg" class="mt4 ml10"/> 
			<div class="pink mt4">请输入充值金额，最低金额50</div>
			</div>
		</div>
		
		<div class="row clearfix">
			<div class="col1">银行种类：</div>
			<div class="col2">
				<div id="sfwx-subcol" class="selectbox">
					<input class="mt4" type="radio" id="57" name="payId" value="57" code="WEIXIN" checked="checked" id="sfwx_radio">
					<div class='sprite ico-qqzf'></div>
					<div>微信</div>
				</div>
			</div>
		</div>
	
		<div class="row mt15">
			<div class="col1"></div>
			<div class="col2">
				<button class="btnsubmit">开始充值</button>
			</div>
		</div>
	</form>
</div>		
	
	
<!--微信充值-->	
<div class="tabbox clearfix subcontent" id="subpagetp_zf_wx">
	<form id="zf_online_pay_form" method="post" onsubmit="return Pay.onlinePay('zf_wx');" target="_blank" action="/userrech/onlinePay.do">
		<input type="hidden"  name="rechId" id="zf_wx_rech_id" value="">
		<div class="row">
			<div class="col1">充值金额：</div>
			<div class="col2">
				<input id="zf_wx_amount" name="amount" autocomplete="off" onkeypress="return isNumber(event)" type="text" class="textbox2"> 
				<img src="/skin/img/user/warningsmallicon.jpg" class="mt4 ml10"/>
				<div class="pink mt4">请输入充值金额，最低金额100</div>
			</div>
		</div>
		
		<div class="row clearfix">
			<div class="col1">银行种类：</div>
			<div class="col2">
				<div id="sfwx-subcol" class="selectbox">
					<input class="bankradiobtn" type="radio" id="WEIXIN" name="payId" value="weixin" code="WEIXIN" checked="checked" id="sfwx_radio">
					<div class='sprite ico-qqzf'></div>
					<div>微信</div>
				</div>
			</div>
		</div>
		
		<div class="row mt15">
			<div class="col1"></div>
			<div class="col2">
				<button class="btnsubmit">开始充值</button>
			</div>
		</div>
	</form>
</div>	
	


		</div>
	</div>	
</div>	




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
	<script type="text/javascript" src="/static/js/center.js?v5"></script>
</body>
</html>