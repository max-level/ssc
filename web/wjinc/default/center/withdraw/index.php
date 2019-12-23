
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html class="no-js" lang="">
<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/skin/css/user.css">



</head>
<body id="bodyid" class="iframe-body">
<script type="text/javascript" src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" ></script>
<script type="text/javascript" src="/static/lib/jquery.cookie.js"></script>
<script type="text/javascript" src="/static/js/skin.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript"> 
	var staticFileUrl = parent.getStaticDomain();
// 	var lunarDate = parent.lunarDate; 程序作者QQ908981526
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
<input id="pageType" type="hidden" value="WITHDRAWAL" />
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
			<a href="/center/withdraw/index.html"><div class="subitm2 subitmactive">提现</div></a>
			<a href="/center/pay/list.html"><div class="subitm2">充值记录</div></a>
			<a href="/center/withdraw/list.html"><div class="subitm2">提现记录</div></a>
			<div class="arrow1a arrow arrow2a"></div>
		</div>
	</div>
</div>	
	<div class="rightpanel">
		
		
		
		<div id="withdrawal0" class="contentcontainer clearfix" style="display: none;">
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
			  
			<div class="row mt10">
				<a href="javascript:void(0);" class="tabnavi tabnaviactive">绑定真实姓名</a>
			</div>
			<div class="tabbox clearfix" style="display: block;">
				<div class="margincenter mt15 warningicon"></div>
				<div class="warningtxt">
					您的真实姓名尚未绑定<br> 真实姓名相关联银行卡姓名
				</div>
				<div class="warningtxt">
					<a href="/center/user/notice.html"><input type="button" class="btnsubmit" id="btnAmountLink" value="绑定真实姓名"></a>
				</div>
			</div>
		</div>
		
		
	
		<div id="withdrawal1" class="contentcontainer clearfix" style="display: none;">
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
			  
			<div class="row mt10">
				<a href="javascript:void(0);" class="tabnavi tabnaviactive">快速存款</a>
			</div>
			<div class="tabbox clearfix" style="display: block;">
				<div class="margincenter mt15 warningicon"></div>
				<div class="warningtxt">
					您的中心钱包余额尚未达到提款标准<br> 提款金额最少为100.00元
				</div>
				<div class="warningtxt">
					<a href="/center/pay/index.html"><input type="button" class="btnsubmit" id="btnAmountLink" value="快速存款"></a>
				</div>
			</div>
		</div>
		
		
		
		
		<div id="withdrawal2" class="contentcontainer clearfix" style="display: none;">
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
			  
			<div class="row mt10">
				<a href="javascript:void(0);" class="tabnavi tabnaviactive">绑定银行卡</a>
			</div>
			<div class="tabbox clearfix" style="display: block;">
				<div id="card_h">
					<div class="margincenter mt15 warningicon"></div>
					<p class="warningtxt">添加一张银行卡开始提款吧</p>
					<div class="warningtxt">
						<img src="/skin/img/user/addbankcard.jpg" width="214" height="112" onclick="WithDraw.showAddBank();" />
					</div>
				</div>
				<div class="formpanel margintop20" id="card_s" style="display: none;">
					<div class="middlecontainer mt15">
						<div class="row">
							<div class="col1">选择银行：</div>
							<div class="col2_s">
								<select id="bankId" class="select1">
								<?php
								$data=$this->getRows("select * from {$this->prename}bank_list where isDelete=0 order by sort asc");
								foreach($data as $var){
								?>
									<option value="<?=$var['id']?>"><?=$var['name']?></option>
								 <?php }?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col1">持卡人姓名：</div>
							<div class="col2">
							<?php if($this->user['name']){
						?><input type="text" disabled class="textbox3 textbox2" id="fullName" style="color:#999;" value="<?=$this->user['name']?>" readonly>
						<?php }else{?><input type="text" class="textbox3 textbox2" id="fullName">
						<?php }?>
							</div>
						</div>
						<div class="row">
							<div class="col1">银行卡号：</div>
							<div class="col2">
								<input type="text" id="cardId" class="textbox3 textbox2">
							</div>
						</div>
						<div class="row">
							<div class="col1">开户网点：</div>
							<div class="col2">
								<input type="text" id="bankaddress" class="textbox3 textbox2">
							</div>
						</div>
						<div class="row">
							<div class="col1">&nbsp;</div>
							<div class="col2">
								<input type="submit" class="btnsubmit" onclick="WithDraw.bindBank();" value="提交">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		<div id="withdrawal3" class="contentcontainer clearfix" style="display: none;">
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
			  
			<div class="row mt10">
				<a href="javascript:void(0);" class="tabnavi tabnaviactive">设置提款密码</a>
			</div>
			<div class="tabbox clearfix" style="display: block;">
				<div class="formpanel margintop20">
					<div class="middlecontainer mt15">
						
						<div class="row">
							<div class="col1">提款密码：</div>
							<div class="col2">
								<input type="password" id="drawcode" class="textbox2" />
							</div>
						</div>
						<div class="row">
							<div class="col1">重复密码：</div>
							<div class="col2">
								<input type="password" id="redrawcode" class="textbox2" />
							</div>
						</div>
						<div class="row">
							<div class="col1">&nbsp;</div>
							<div class="col2 btn">
								<input type="submit" onclick="WithDraw.setFundPwd();" class="btnsubmit" value="提交">
							</div>
						</div>
							<div class="row" style="color:red;font-weight:bold;">
							<div class="col2">注意：您还未设置提款密码，请先设置提款密码。</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		<div id="withdrawal4" class="contentcontainer" style="display: none;">
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
			  
			<div class="row mt10">
				<a href="javascript:void(0);" class="tabnavi tabnaviactive">提款申请</a>
			</div>
			<div class="tabbox clearfix" style="display: block;">
				<div class="formpanel margintop20">
					<div class="middlecontainer mt15">
						<div class="row">
							
							<div class="col1">提款金额：</div>
							<div class="col2">
								<input id="drawamount" type="text" class="textbox2" value ="" />
							</div>
						</div>
						<div class="row">
							<div class="col1">银行卡号：</div>
							<div class="col2">

								<div class="radio-bank-2">
									<div class="radio">
										<input type="radio" name="bank" value="" checked="checked">
									</div>
									<div class="radio-label">
										<span class="logo-CCB-3"></span> <span id="bankName" class="name"></span> 
										尾号：<span id="lastCard" class="tail"></span>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col1">提款密码：</div>
							<div class="col2">
								<input id="drawcode1" type="password" class="textbox2" />
							</div>
						</div>
						<div class="row">
							<div class="col1">&nbsp;</div>
							<div class="col2 btn">
								<input type="submit" onclick="WithDraw.submit();" class="btnsubmit" value="提交">
							</div>
						</div>
							<div class="row" style="color:red;font-weight:bold;">
							<!-- <div class="col1">注意：</div>
							<div class="col2">每天每位用户支持$3笔提款，每笔提款间隔时间必须超过1小时。</div>-->
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
<script type="text/javascript" src="/static/js/center.js"></script>	
</body>
</html>
