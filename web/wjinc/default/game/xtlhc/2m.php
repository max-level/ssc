
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

<script type="text/javascript" src="/static/js/lottery/lhc/lhc.js"></script>
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
									<span id="total_sum_money"></span>
								</div>
								<div class="fr" style="padding-right: 20px;">
									<span id="next_turn_num"></span>&nbsp;期
									距离封盘：<span id="bet-date"></span>
									距离开奖：<span id="open-date"></span>
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
    	<div class="cont-col3-bd" id="bet_tab"> 
    		<table class="u-table2 play_tab_86 "> 
		      <thead> 
		       <tr> 
		        <th style="width: 4%;">号码</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 8%">金额</th>
		         
		        <th style="width: 4%">号码</th> 
		        <th style="width: 6%">赔率</th> 
		        <th style="width: 8%">金额</th> 
		       </tr> 
		      </thead> 
		      <tbody> 
		       <tr> 
		        <td id="play_name_708601" class="name">特大</td> 
		        <td id="play_odds_708601" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708601" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708602" class="name">特小</td> 
		        <td id="play_odds_708602" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708602" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708603" class="name">特单</td> 
		        <td id="play_odds_708603" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708603" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708604" class="name">特双</td> 
		        <td id="play_odds_708604" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708604" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708605" class="name">特合大</td> 
		        <td id="play_odds_708605" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708605" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708606" class="name">特合小</td> 
		        <td id="play_odds_708606" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708606" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708607" class="name">特合单</td> 
		        <td id="play_odds_708607" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708607" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708608" class="name">特合双</td> 
		        <td id="play_odds_708608" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708608" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708615" class="name">特天肖</td> 
		        <td id="play_odds_708615" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708615" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708616" class="name">特地肖</td> 
		        <td id="play_odds_708616" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708616" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708617" class="name">特前肖</td> 
		        <td id="play_odds_708617" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708617" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708618" class="name">特后肖</td> 
		        <td id="play_odds_708618" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708618" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708619" class="name">特家肖</td> 
		        <td id="play_odds_708619" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708619" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708620" class="name">特野肖</td> 
		        <td id="play_odds_708620" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708620" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708609" class="name">特大尾</td> 
		        <td id="play_odds_708609" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708609" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708610" class="name">特小尾</td> 
		        <td id="play_odds_708610" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708610" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708621" class="name">总和单</td> 
		        <td id="play_odds_708621" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708621" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708622" class="name">总和双</td> 
		        <td id="play_odds_708622" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708622" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708623" class="name">总和大</td> 
		        <td id="play_odds_708623" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708623" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708624" class="name">总和小</td> 
		        <td id="play_odds_708624" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708624" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708611" class="name">特大单</td> 
		        <td id="play_odds_708611" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708611" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708613" class="name">特小单</td> 
		        <td id="play_odds_708613" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708613" class="amount"><input type="text" /></td> 
		       </tr> 
		       <tr> 
		        <td id="play_name_708612" class="name">特大双</td> 
		        <td id="play_odds_708612" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708612" class="amount"><input type="text" /></td> 
		        
		        <td id="play_name_708614" class="name">特小双</td> 
		        <td id="play_odds_708614" class="odds"><span class="c-txt3">--</span></td> 
		        <td id="play_text_708614" class="amount"><input type="text" /></td> 
		       </tr> 
		      </tbody> 
		     </table> 
    	</div>
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
			
			<div id="right_page" class="cont-sider">
	<!--<?php $this->display('game/changlong.php');?>-->
	<div id="kjtz-ctn" class="mt5 hide">
	<table class="u-table2 play_tab_85">
		<thead>
			<tr>
				<th colspan="3">快捷投注</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'DANMA_PLAYIDS')"><span>单码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAODAN_PLAYIDS')"><span>小单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEDAN_PLAYIDS')"><span>合单</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SHUANMA_PLAYIDS')"><span>双码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAOSHUAN_PLAYIDS')"><span>小双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HESHUAN_PLAYIDS')"><span>合双</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'DAMA_PLAYIDS')"><span>大码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'DADAN_PLAYIDS')"><span>大单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEDA_PLAYIDS')"><span>合大</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAOMA_PLAYIDS')"><span>小码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'DASHUAN_PLAYIDS')"><span>大双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEXIAO_PLAYIDS')"><span>合小</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'LINTOU_PLAYIDS')"><span>0头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LINWEI_PLAYIDS')"><span>0尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'WUWEI_PLAYIDS')"><span>5尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'YITOU_PLAYIDS')"><span>1头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'YIWEI_PLAYIDS')"><span>1尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LIUWEI_PLAYIDS')"><span>6尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'ERTOU_PLAYIDS')"><span>2头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'ERWEI_PLAYIDS')"><span>2尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'QIWEI_PLAYIDS')"><span>7尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SANTOU_PLAYIDS')"><span>3头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'SANWEI_PLAYIDS')"><span>3尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'BAWEI_PLAYIDS')"><span>8尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SITOU_PLAYIDS')"><span>4头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'SIWEI_PLAYIDS')"><span>4尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'JIU_PLAYIDS')"><span>9尾</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'鼠')"><span>鼠</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'龙')"><span>龙</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'猴')"><span>猴</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'牛')"><span>牛</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'蛇')"><span>蛇</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'鸡')"><span>鸡</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'虎')"><span>虎</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'马')"><span>马</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'狗')"><span>狗</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'兔')"><span>兔</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'羊')"><span>羊</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'猪')"><span>猪</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONG')"><span>红</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN')"><span>蓝</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV')"><span>绿</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_DAN')"><span>红单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_DAN')"><span>蓝单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_DAN')"><span>绿单</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_SHUAN')"><span>红双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_SHUAN')"><span>蓝双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_SHUAN')"><span>绿双</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_DA')"><span>红大</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_DA')"><span>蓝大</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_DA')"><span>绿大</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_XIAO')"><span>红小</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_XIAO')"><span>蓝小</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_XIAO')"><span>绿小</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'QUANGXUAN')"><span>全选</span></td>
				<td onclick="LHC_KJTZ.reverseSel(this,'QUANGXUAN')"><span>反选</span></td>
				<td onclick="LHC_KJTZ.cancelAll(this)"><span>取消</span></td>
			</tr>
		</tbody>
	</table>
</div>
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


