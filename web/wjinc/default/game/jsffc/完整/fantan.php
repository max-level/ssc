
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
     <!-- 
        <div class="cont-col3-box1">
         	   投注类型：
            <a href="#" class="cur">快捷</a>
            <a href="#">一般</a>
        </div>
     -->       <div class="yusejine" style="border-bottom: none">
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
     <!--div class="cont-col3-box2"> 
      	金额
      <input id="bet_money1" type="text" class="bet-money" value=""/> 
      <a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn1" class="u-btn1">确定</a> 
      <a href="javascript:parent.UserBet.resetData()" class="u-btn1">重置</a> 
     </div--> 
    </div> 
						    <div class="cont-col3-bd" id="bet_tab"> 
						     <table class="u-table2 play_tab_1">
						      <thead> 
						       <tr> 
						        <th colspan="12">五球总和</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_100936" class="name">1正</td> 
						        <td id="play_odds_100936" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100936" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_100937" class="name">2正</td> 
						        <td id="play_odds_100937" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100937" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_100938" class="name">3正</td> 
						        <td id="play_odds_100938" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100938" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_100939" class="name">4正</td> 
						        <td id="play_odds_100939" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100939" class="amount"><input type="text" /></td> 
						       </tr> 
						      </tbody> 
						     </table> 
						     
						     <table class="u-table2 play_tab_1">
						      <thead> 
						       <tr> 
						        <th colspan="12">角</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_100940" class="name">1-2角</td> 
						        <td id="play_odds_100940" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100940" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_100941" class="name">2-3角</td> 
						        <td id="play_odds_100941" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100941" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_100942" class="name">3-4角</td> 
						        <td id="play_odds_100942" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100942" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_100943" class="name">1-4角</td> 
						        <td id="play_odds_100943" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100943" class="amount"><input type="text" /></td> 
						       </tr> 
						      </tbody> 
						     </table> 
							 
							 
							 
							 <table class="cont-list1">
						     	<tr>
						     		<td>
						     			<table class="u-table2 play_tab_2 ssc"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第一球</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_100944" class="name">1念2</td> 
								          <td id="play_odds_100944" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100944" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_100945" class="name">1念3</td> 
								          <td id="play_odds_100945" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100945" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_100946" class="name">1念4</td> 
								          <td id="play_odds_100946" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100946" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_100947" class="name">2念1</td> 
								          <td id="play_odds_100947" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100947" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr>              
								          <td id="play_name_100948" class="name">2念3</td> 
								          <td id="play_odds_100948" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100948" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_100949" class="name">2念4</td> 
								          <td id="play_odds_100949" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100949" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_100950" class="name">3念1</td> 
								          <td id="play_odds_100950" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100950" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_100951" class="name">3念2</td> 
								          <td id="play_odds_100951" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100951" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_100952" class="name">3念4</td> 
								          <td id="play_odds_100952" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100952" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_100953" class="name">4念1</td> 
								          <td id="play_odds_100953" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100953" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_100954" class="name">4念2</td> 
								          <td id="play_odds_100954" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100954" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_100955" class="name">4念3</td> 
								          <td id="play_odds_100955" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_100955" class="amount"><input type="text" /></td>
								         </tr> 
								       
								        </tbody> 
								       </table>
						     		</td>
						     		
						     	</tr>
						     </table>
							 
							 <table class="u-table2 play_tab_1">
						      <thead> 
						       <tr> 
						        <th colspan="12">念</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_100956" class="name">1番</td> 
						        <td id="play_odds_100956" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100956" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_100957" class="name">2番</td> 
						        <td id="play_odds_100957" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100957" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_100958" class="name">3番</td> 
						        <td id="play_odds_100958" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100958" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_100959" class="name">4番</td> 
						        <td id="play_odds_100959" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100959" class="amount"><input type="text" /></td> 
								
								<td id="play_name_100960" class="name">单</td> 
						        <td id="play_odds_100960" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100960" class="amount"><input type="text" /></td> 
								
								<td id="play_name_100961" class="name">双</td> 
						        <td id="play_odds_100961" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_100961" class="amount"><input type="text" /></td> 
						       </tr> 
						      </tbody> 
						     </table> 
						     

						     <div class="cont-col3-hd clearfix" style="margin-top: 20px"> 
     <!-- 
        <div class="cont-col3-box1">
         	   投注类型：
            <a href="#" class="cur">快捷</a>
            <a href="#">一般</a>
        </div>
     --> 
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
                        <a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn1" class="quedchongz" style="width:80px">确 定</a>
                        <a href="javascript:parent.UserBet.resetData()" class="quedchongz" style="width:80px">重 置</a>
                        
                    <div class="cl"></div>
                </div>
    </div> 
						     
						    </div> 
						   </div> 
						  </div>

					 <div id="game_count"> 
						
<div class="count-wrap">
	<table class="u-table2" id="stat_qiu">
		<thead>
			<tr>
				<th class="u-tb3-th2 select" id="qiu1_th"
					onclick="StatGame.showStat(1)" qiu="1">第一球</th>
				<th class="u-tb3-th2" id="qiu2_th" onclick="StatGame.showStat(2)"
					qiu="2">第二球</th>
				<th class="u-tb3-th2" id="qiu3_th" onclick="StatGame.showStat(3)"
					qiu="3">第三球</th>
				<th class="u-tb3-th2" id="qiu4_th" onclick="StatGame.showStat(4)"
					qiu="4">第四球</th>
				<th class="u-tb3-th2" id="qiu5_th" onclick="StatGame.showStat(5)"
					qiu="5">第五球</th>
			</tr>
		</thead>
	</table>
	<table class="u-table4">
		<tbody>
			<tr>
				<td class="f1 fwb">0</td>
				<td class="f1 fwb">1</td>
				<td class="f1 fwb">2</td>
				<td class="f1 fwb">3</td>
				<td class="f1 fwb">4</td>
				<td class="f1 fwb">5</td>
				<td class="f1 fwb">6</td>
				<td class="f1 fwb">7</td>
				<td class="f1 fwb">8</td>
				<td class="f1 fwb">9</td>
			</tr>
			<tr id="qiu1_body">
				<td id="q1_0_time">0</td>
				<td id="q1_1_time">0</td>
				<td id="q1_2_time">0</td>
				<td id="q1_3_time">0</td>
				<td id="q1_4_time">0</td>
				<td id="q1_5_time">0</td>
				<td id="q1_6_time">0</td>
				<td id="q1_7_time">0</td>
				<td id="q1_8_time">0</td>
				<td id="q1_9_time">0</td>
			</tr>
			<tr id="qiu2_body" class="hide">
				<td id="q2_0_time">0</td>
				<td id="q2_1_time">0</td>
				<td id="q2_2_time">0</td>
				<td id="q2_3_time">0</td>
				<td id="q2_4_time">0</td>
				<td id="q2_5_time">0</td>
				<td id="q2_6_time">0</td>
				<td id="q2_7_time">0</td>
				<td id="q2_8_time">0</td>
				<td id="q2_9_time">0</td>
			</tr>
			<tr id="qiu3_body" class="hide">
				<td id="q3_0_time">0</td>
				<td id="q3_1_time">0</td>
				<td id="q3_2_time">0</td>
				<td id="q3_3_time">0</td>
				<td id="q3_4_time">0</td>
				<td id="q3_5_time">0</td>
				<td id="q3_6_time">0</td>
				<td id="q3_7_time">0</td>
				<td id="q3_8_time">0</td>
				<td id="q3_9_time">0</td>
			</tr>
			<tr id="qiu4_body" class="hide">
				<td id="q4_0_time">0</td>
				<td id="q4_1_time">0</td>
				<td id="q4_2_time">0</td>
				<td id="q4_3_time">0</td>
				<td id="q4_4_time">0</td>
				<td id="q4_5_time">0</td>
				<td id="q4_6_time">0</td>
				<td id="q4_7_time">0</td>
				<td id="q4_8_time">0</td>
				<td id="q4_9_time">0</td>
			</tr>
			<tr id="qiu5_body" class="hide">
				<td id="q5_0_time">0</td>
				<td id="q5_1_time">0</td>
				<td id="q5_2_time">0</td>
				<td id="q5_3_time">0</td>
				<td id="q5_4_time">0</td>
				<td id="q5_5_time">0</td>
				<td id="q5_6_time">0</td>
				<td id="q5_7_time">0</td>
				<td id="q5_8_time">0</td>
				<td id="q5_9_time">0</td>
			</tr>
		</tbody>
	</table>

	<table class="u-table2 mt5">
		<thead>
			<tr id="stat_type">
				<th class="u-tb3-th2 select" id="stat_nums_btn" type="nums"
					onclick="StatGame.showStatType(this)">第一球</th>
				<th class="u-tb3-th2" id="stat_size_btn" type="size"
					onclick="StatGame.showStatType(this)">大小</th>
				<th class="u-tb3-th2" id="stat_firsts_btn" type="firsts"
					onclick="StatGame.showStatType(this)">单双</th>
				<th class="u-tb3-th2" id="stat_zhdx_btn" type="zhdx"
					onclick="StatGame.showStatType(this)">总和大小</th>
				<th class="u-tb3-th2" id="stat_zhds_btn" type="zhds"
					onclick="StatGame.showStatType(this)">总和单双</th>
				<th class="u-tb3-th2" id="stat_lhh_btn" type="lhh"
					onclick="StatGame.showStatType(this)">龙虎和</th>
			</tr>
		</thead>
	</table>
	<table class="u-table4 table-td-valign-top">
		<tbody>
			<tr id="qiu1_nums" class="stattd "></tr>
			<tr id="qiu2_nums" class="stattd hide"></tr>
			<tr id="qiu3_nums" class="stattd hide"></tr>
			<tr id="qiu4_nums" class="stattd hide"></tr>
			<tr id="qiu5_nums" class="stattd hide"></tr>
			<tr id="qiu1_size" class="stattd hide"></tr>
			<tr id="qiu2_size" class="stattd hide"></tr>
			<tr id="qiu3_size" class="stattd hide"></tr>
			<tr id="qiu4_size" class="stattd hide"></tr>
			<tr id="qiu5_size" class="stattd hide"></tr>
			<tr id="qiu1_firsts" class="stattd hide"></tr>
			<tr id="qiu2_firsts" class="stattd hide"></tr>
			<tr id="qiu3_firsts" class="stattd hide"></tr>
			<tr id="qiu4_firsts" class="stattd hide"></tr>
			<tr id="qiu5_firsts" class="stattd hide"></tr>
			<tr id="qiu1_zhdx" class="stattd hide"></tr>
			<tr id="qiu1_zhds" class="stattd hide"></tr>
			<tr id="qiu1_lhh" class="stattd hide"></tr>
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
<script type="text/javascript" src="/static/js/lottery/ssc/stat.js" async="async"></script>
</body>
</html>