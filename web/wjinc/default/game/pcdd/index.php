
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title>Welcome</title>
<meta name="renderer" content="webkit" /> 
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/static/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/css/skin.css" rel="stylesheet" type="text/css" />
<link href="/static/css/balls.css" rel="stylesheet" type="text/css" /> 
</head>
<body class="iframe-body">
<script type="text/javascript" src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" ></script>
<script type="text/javascript" src="/static/lib/jquery.cookie.js"></script>
<script type="text/javascript" src="/static/js/skin.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript" src="/skin/cm/lokg.js"></script>
<link href="/skin/cm/lokg.css" rel="stylesheet" type="text/css" />
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

<!--main-->
<div class="main clearfix">
	<div class="content">
		<div class="sub-wrap clearfix">
			<!--cont-main-->
			<div class="cont-main">
					    <div id="subpage"> 
						   <div class="cont-col3"> 
						    <div class="u-header play_tab_1 clearfix">
								<div class="fl">
									<span id="page_game_name"></span>&nbsp;&nbsp;-&nbsp;&nbsp;<span id="page_name"></span>
									<span>
									&nbsp;&nbsp;
									当前彩种输赢：
									</span>
									<span id="total_sum_money">0.00</span>
								</div>
								<div class="fr" style="padding-right: 20px;">
									<span id="next_turn_num">20170508024</span>&nbsp;期
									距离封盘：<span id="bet-date">00:00:00</span>
									距离开奖：<span id="open-date">00:00:00</span>
								</div>  
							</div> 
						    	<div class="cont-col3-hd clearfix"> 
    <div class="yusejine" style="border-bottom: none">
		<span class="fl w80 mt8"> 快捷金额: </span>
		<span class="fl mabx mabx2" dates="2"></span>
		<span class="fl mabx mabx3 cur" dates="5"></span> 
		<span class="fl mabx mabx4 cur" dates="10"></span>
		<span class="fl mabx mabx5" dates="20"></span>
		<span class="fl mabx mabx6 cur" dates="50"></span>
		<span class="fl mabx mabx7 cur" dates="100"></span>
		<span class="fl mabx mabx8" dates="500"></span>
		<span class="fl mabx mabx9 cur" dates="1000"></span>
		<span class="fl mabx mabx10 cur" dates="5000"></span>
		<span class="fl yusjinse-wa mt8">
			金额 : <input type="text" id="bet_money1" class="yusjinse bet-money" style="width:80px" value="">
		</span>
		<span class="fr mt8">
			<a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn1" class="quedchongz" style="width:80px">确 定</a>
			<a href="javascript:parent.UserBet.resetData()" class="quedchongz" style="width:80px">重 置</a>
			
		<div class="cl"></div>
	</div>
    </div> 
						    <div class="cont-col3-bd" id="bet_tab"> 
						     <table class="u-table2 play_tab_112"> 
						      <thead> 
						       <tr> 
						        <th colspan="12">混合</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_6611201" class="name">大</td> 
						        <td id="play_odds_6611201" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611201" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611202" class="name">小</td> 
						        <td id="play_odds_6611202" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611202" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611203" class="name">单</td> 
						        <td id="play_odds_6611203" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611203" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611204" class="name">双</td> 
						        <td id="play_odds_6611204" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611204" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr> 
						        <td id="play_name_6611205" class="name">大单</td> 
						        <td id="play_odds_6611205" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611205" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611206" class="name">大双</td> 
						        <td id="play_odds_6611206" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611206" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611207" class="name">小单</td> 
						        <td id="play_odds_6611207" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611207" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611208" class="name">小双</td> 
						        <td id="play_odds_6611208" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611208" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr> 
						        <td id="play_name_6611209" class="name">极大</td> 
						        <td id="play_odds_6611209" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611209" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611210" class="name">极小</td> 
						        <td id="play_odds_6611210" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611210" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611211" class="name">豹子</td> 
						        <td id="play_odds_6611211" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611211" class="amount"><input type="text" /></td>
						         
								<td class="name not-event" colspan="3"></td>
						       </tr> 
						      </tbody> 
						     </table> 
						     
						     
						     <table class="u-table2 play_tab_113" style="margin-top: 10px;"> 
						      <thead> 
						       <tr> 
						        <th colspan="9">波色</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_6611301" class="name">红波</td> 
						        <td id="play_odds_6611301" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611301" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611302" class="name">绿波</td> 
						        <td id="play_odds_6611302" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611302" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611303" class="name">蓝波</td> 
						        <td id="play_odds_6611303" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611303" class="amount"><input type="text" /></td>
						         
						       </tr> 
						      </tbody> 
						     </table>
						     
						     
						     <table class="u-table2 play_tab_114 xy28" style="margin-top: 10px;"> 
						      <thead> 
						       <tr> 
						        <th colspan="12">持码</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_6611400" class="name"><em class="n_0"></em></td> 
						        <td id="play_odds_6611400" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611400" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611407" class="name"><em class="n_7"></em></td> 
						        <td id="play_odds_6611407" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611407" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611414" class="name"><em class="n_14"></em></td> 
						        <td id="play_odds_6611414" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611414" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611421" class="name"><em class="n_21"></em></td> 
						        <td id="play_odds_6611421" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611421" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       
						       <tr> 
						        <td id="play_name_6611401" class="name"><em class="n_1"></em></td> 
						        <td id="play_odds_6611401" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611401" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611408" class="name"><em class="n_8"></em></td> 
						        <td id="play_odds_6611408" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611408" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611415" class="name"><em class="n_15"></em></td> 
						        <td id="play_odds_6611415" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611415" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611422" class="name"><em class="n_22"></em></td> 
						        <td id="play_odds_6611422" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611422" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       
						       <tr> 
						        <td id="play_name_6611402" class="name"><em class="n_2"></em></td> 
						        <td id="play_odds_6611402" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611402" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611409" class="name"><em class="n_9"></em></td> 
						        <td id="play_odds_6611409" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611409" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611416" class="name"><em class="n_16"></em></td> 
						        <td id="play_odds_6611416" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611416" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611423" class="name"><em class="n_23"></em></td> 
						        <td id="play_odds_6611423" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611423" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       
						       <tr> 
						        <td id="play_name_6611403" class="name"><em class="n_3"></em></td> 
						        <td id="play_odds_6611403" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611403" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611410" class="name"><em class="n_10"></em></td> 
						        <td id="play_odds_6611410" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611410" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611417" class="name"><em class="n_17"></em></td> 
						        <td id="play_odds_6611417" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611417" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611424" class="name"><em class="n_24"></em></td> 
						        <td id="play_odds_6611424" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611424" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       
						       <tr> 
						        <td id="play_name_6611404" class="name"><em class="n_4"></em></td> 
						        <td id="play_odds_6611404" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611404" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611411" class="name"><em class="n_11"></em></td> 
						        <td id="play_odds_6611411" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611411" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611418" class="name"><em class="n_18"></em></td> 
						        <td id="play_odds_6611418" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611418" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611425" class="name"><em class="n_25"></em></td> 
						        <td id="play_odds_6611425" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611425" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       
						       <tr> 
						        <td id="play_name_6611405" class="name"><em class="n_5"></em></td> 
						        <td id="play_odds_6611405" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611405" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611412" class="name"><em class="n_12"></em></td> 
						        <td id="play_odds_6611412" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611412" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611419" class="name"><em class="n_19"></em></td> 
						        <td id="play_odds_6611419" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611419" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611426" class="name"><em class="n_26"></em></td> 
						        <td id="play_odds_6611426" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611426" class="amount"><input type="text" /></td> 
						       </tr> 
						       
						       <tr> 
						        <td id="play_name_6611406" class="name"><em class="n_6"></em></td> 
						        <td id="play_odds_6611406" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611406" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_6611413" class="name"><em class="n_13"></em></td> 
						        <td id="play_odds_6611413" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611413" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611420" class="name"><em class="n_20"></em></td> 
						        <td id="play_odds_6611420" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611420" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_6611427" class="name"><em class="n_27"></em></td> 
						        <td id="play_odds_6611427" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_6611427" class="amount"><input type="text" /></td> 
						       </tr> 
						      </tbody> 
						     </table> 
						     
						     <div class="cont-col3-hd clearfix" style="margin-top: 20px"> 
    <div class="yusejine" style="border-bottom: none">
		<span class="fl w80 mt8"> 快捷金额: </span>
		<span class="fl mabx mabx2" dates="2"></span>
		<span class="fl mabx mabx3 cur" dates="5"></span> 
		<span class="fl mabx mabx4 cur" dates="10"></span>
		<span class="fl mabx mabx5" dates="20"></span>
		<span class="fl mabx mabx6 cur" dates="50"></span>
		<span class="fl mabx mabx7 cur" dates="100"></span>
		<span class="fl mabx mabx8" dates="500"></span>
		<span class="fl mabx mabx9 cur" dates="1000"></span>
		<span class="fl mabx mabx10 cur" dates="5000"></span>
		<span class="fl yusjinse-wa mt8">
			金额 : <input type="text" id="bet_money2" class="yusjinse bet-money" style="width:80px" value="">
		</span>
		<span class="fr mt8">
			<a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn2" class="quedchongz" style="width:80px">确 定</a>
			<a href="javascript:parent.UserBet.resetData()" class="quedchongz" style="width:80px">重 置</a>
			
		<div class="cl"></div>
	</div> 
    </div> 
						     
						    </div> 
						   </div> 
						  </div>
			</div>
			<!--/cont-main-->
			
<div id="right_page" class="clong-sider">
	<?php $this->display('game/changlong.php');?>
</div>
		</div>
	</div>
	<!--/content-->
</div>
<!--/main-->
<script type="text/javascript">
window.onload = function() {
	document.onkeydown = function (e) {
		var theEvent = window.event || e;
		var code = theEvent.keyCode || theEvent.which;
		if (code == 13) {
			if(parent.UserBet.step==0) {
				parent.UserBet.openBetWindow();
			}else if(parent.UserBet.step==1){
				parent.UserBet.submitBet();
				if(parent.UserBet.step==0){
					setTimeout(function() {
						parent.layer.closeAll();
			        }, 200);
				}
			}
		}
	}
}
</script>
</body>
</html>