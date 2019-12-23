
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
<script type="text/javascript" src="/static/lib/util/error.js" async></script>

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
     <table class="u-table2  play_tab_21"> 
      <thead> 
       <tr> 
        <th colspan="12">总和、总和过关</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_652101" class="name">总和大</td> 
        <td id="play_odds_652101" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652101" class="amount"><input type="text" /></td> 
        
        <td id="play_name_652102" class="name">总和小</td> 
        <td id="play_odds_652102" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652102" class="amount"><input type="text" /></td>
         
        <td id="play_name_652103" class="name">总和单</td> 
        <td id="play_odds_652103" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652103" class="amount"><input type="text" /></td>
         
        <td id="play_name_652104" class="name">总和双</td> 
        <td id="play_odds_652104" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652104" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_652105" class="name">总和810</td> 
        <td id="play_odds_652105" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652105" class="amount"><input type="text" /></td> 
        
        <td class="name not-event" colspan="9"></td> 
       </tr> 
       <tr> 
        <td id="play_name_652106" class="name">总大单</td> 
        <td id="play_odds_652106" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652106" class="amount"><input type="text" /></td> 
        
        <td id="play_name_652107" class="name">总大双</td> 
        <td id="play_odds_652107" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652107" class="amount"><input type="text" /></td>
         
        <td id="play_name_652108" class="name">总小单</td> 
        <td id="play_odds_652108" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652108" class="amount"><input type="text" /></td>
         
        <td id="play_name_652109" class="name">总小双</td> 
        <td id="play_odds_652109" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652109" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
      <table class="u-table2  play_tab_23 mt10"> 
      <thead> 
       <tr> 
        <th colspan="9">前后和</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_652301" class="name">前(多)</td> 
        <td id="play_odds_652301" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652301" class="amount"><input type="text" /></td> 
        
        <td id="play_name_652302" class="name">后(多)</td> 
        <td id="play_odds_652302" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652302" class="amount"><input type="text" /></td>
         
        <td id="play_name_652303" class="name">前后(和)</td> 
        <td id="play_odds_652303" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652303" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
      <table class="u-table2  play_tab_24 mt10"> 
      <thead> 
       <tr> 
        <th colspan="9">单双和</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_652401" class="name">单多</td> 
        <td id="play_odds_652401" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652401" class="amount"><input type="text" /></td> 
        
        <td id="play_name_652402" class="name">双(多)</td> 
        <td id="play_odds_652402" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652402" class="amount"><input type="text" /></td>
         
        <td id="play_name_652403" class="name">单双(和)</td> 
        <td id="play_odds_652403" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652403" class="amount"><input type="text" /></td>
       </tr> 
      </tbody> 
     </table> 
      <table class="u-table2  play_tab_25 mt10"> 
      <thead> 
       <tr> 
        <th colspan="15">五行</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_652501" class="name">金</td> 
        <td id="play_odds_652501" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652501" class="amount"><input type="text" /></td> 
        
        <td id="play_name_652502" class="name">木</td> 
        <td id="play_odds_652502" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652502" class="amount"><input type="text" /></td>
         
        <td id="play_name_652503" class="name">水</td> 
        <td id="play_odds_652503" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652503" class="amount"><input type="text" /></td>
         
        <td id="play_name_652504" class="name">火</td> 
        <td id="play_odds_652504" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652504" class="amount"><input type="text" /></td>
        
        <td id="play_name_652505" class="name">土</td> 
        <td id="play_odds_652505" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_652505" class="amount"><input type="text" /></td> 
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
		    
					    

					 <div id="game_count"> 
						<div class="count-wrap">
	<table class="u-table2">
		<thead>
			<tr id="stat_type">
				<th class="u-tb3-th2 select" id="stat_zhs_btn" type="zhs"
					onclick="StatGame.showStatType(this)">总和数</th>
				<th class="u-tb3-th2" id="stat_zhdx_btn" type="zhdx"
					onclick="StatGame.showStatType(this)">总和大小</th>
				<th class="u-tb3-th2" id="stat_zhds_btn" type="zhds"
					onclick="StatGame.showStatType(this)">总和单双</th>
				<th class="u-tb3-th2" id="stat_wx_btn" type="wx"
					onclick="StatGame.showStatType(this)">五行</th>
				<th class="u-tb3-th2" id="stat_qhh_btn" type="qhh"
					onclick="StatGame.showStatType(this)">前后和</th>
				<th class="u-tb3-th2" id="stat_dsh_btn" type="dsh"
					onclick="StatGame.showStatType(this)">单双和</th>
			</tr>
		</thead>
	</table>
	<table class="u-table4 table-td-valign-top">
		<tbody>
			<tr id="qiu1_zhs" class="stattd "></tr>
			<tr id="qiu1_zhdx" class="stattd hide"></tr>
			<tr id="qiu1_zhds" class="stattd hide"></tr>
			<tr id="qiu1_wx" class="stattd hide"></tr>
			<tr id="qiu1_qhh" class="stattd hide"></tr>
			<tr id="qiu1_dsh" class="stattd hide"></tr>
		</tbody>
	</table>
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
<script type="text/javascript" src="/static/js/lottery/bjkl8/stat.js" async></script>
</body>
</html>