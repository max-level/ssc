
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
     <table class="u-table2 play_tab_27"> 
      <thead> 
       <tr> 
        <th colspan="12">总和</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_212701" class="name">总和大</td> 
        <td id="play_odds_212701" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_212701" class="amount"><input type="text" /></td> 
        
        <td id="play_name_212702" class="name">总和单</td> 
        <td id="play_odds_212702" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_212702" class="amount"><input type="text" /></td>
         
        <td id="play_name_212703" class="name">总和尾大</td> 
        <td id="play_odds_212703" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_212703" class="amount"><input type="text" /></td>
         
        <td id="play_name_212704" class="name">龙</td> 
        <td id="play_odds_212704" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_212704" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_212705" class="name">总和小</td> 
        <td id="play_odds_212705" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_212705" class="amount"><input type="text" /></td> 
        
        <td id="play_name_212706" class="name">总和双</td> 
        <td id="play_odds_212706" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_212706" class="amount"><input type="text" /></td> 
        
        <td id="play_name_212707" class="name">总和尾小</td> 
        <td id="play_odds_212707" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_212707" class="amount"><input type="text" /></td> 
        
        <td id="play_name_212708" class="name">虎</td> 
        <td id="play_odds_212708" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_212708" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     
     <table class="cont-list1">
     	<tr>
     		<td>
     			<table class="u-table2 play_tab_30"> 
		        <thead> 
		         <tr> 
		          <th colspan="3">第一球</th> 
		         </tr> 
		        </thead> 
		        <tbody> 
		         <tr> 
		          <td id="play_name_213012" class="name">大</td> 
		          <td id="play_odds_213012" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213012" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213013" class="name">小</td> 
		          <td id="play_odds_213013" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213013" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213014" class="name">单</td> 
		          <td id="play_odds_213014" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213014" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213015" class="name">双</td> 
		          <td id="play_odds_213015" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213015" class="amount"><input type="text" /></td>
		         </tr> 
		        </tbody> 
		       </table>
     		</td>
     		
     		<td>
     			<table class="u-table2 play_tab_31"> 
		        <thead> 
		         <tr> 
		          <th colspan="3">第二球</th> 
		         </tr> 
		        </thead> 
		        <tbody> 
		         <tr> 
		          <td id="play_name_213112" class="name">大</td> 
		          <td id="play_odds_213112" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213112" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213113" class="name">小</td> 
		          <td id="play_odds_213113" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213113" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213114" class="name">单</td> 
		          <td id="play_odds_213114" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213114" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213115" class="name">双</td> 
		          <td id="play_odds_213115" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213115" class="amount"><input type="text" /></td>
		         </tr> 
		        </tbody> 
		       </table>
     		</td>
     		
     		<td>
     			<table class="u-table2 play_tab_32"> 
		        <thead> 
		         <tr> 
		          <th colspan="3">第三球</th> 
		         </tr> 
		        </thead> 
		        <tbody> 
		         <tr> 
		          <td id="play_name_213212" class="name">大</td> 
		          <td id="play_odds_213212" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213212" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213213" class="name">小</td> 
		          <td id="play_odds_213213" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213213" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213214" class="name">单</td> 
		          <td id="play_odds_213214" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213214" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213215" class="name">双</td> 
		          <td id="play_odds_213215" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213215" class="amount"><input type="text" /></td>
		         </tr> 
		        </tbody>
		       </table>
     		</td>
     		
     		<td>
     			<table class="u-table2 play_tab_33"> 
		        <thead> 
		         <tr> 
		          <th colspan="3">第四球</th> 
		         </tr> 
		        </thead> 
		        <tbody> 
		         <tr> 
		          <td id="play_name_213312" class="name">大</td> 
		          <td id="play_odds_213312" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213312" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213313" class="name">小</td> 
		          <td id="play_odds_213313" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213313" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213314" class="name">单</td> 
		          <td id="play_odds_213314" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213314" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213315" class="name">双</td> 
		          <td id="play_odds_213315" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213315" class="amount"><input type="text" /></td>
		         </tr> 
		        </tbody>
		       </table>
     		</td>
     		
     		<td>
     			<table class="u-table2 play_tab_34"> 
		        <thead> 
		         <tr> 
		          <th colspan="3">第五球</th> 
		         </tr> 
		        </thead> 
		        <tbody> 
		         <tr> 
		          <td id="play_name_213412" class="name">大</td> 
		          <td id="play_odds_213412" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213412" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213413" class="name">小</td> 
		          <td id="play_odds_213413" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213413" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213414" class="name">单</td> 
		          <td id="play_odds_213414" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213414" class="amount"><input type="text" /></td>
		         </tr> 
		         <tr> 
		          <td id="play_name_213415" class="name">双</td> 
		          <td id="play_odds_213415" class="odds"><span class="c-txt3">--</span></td> 
		          <td id="play_text_213415" class="amount"><input type="text" /></td>
		         </tr> 
		        </tbody> 
		       </table>
     		</td>
     	</tr>
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
				<td class="f1 fwb">1</td>
				<td class="f1 fwb">2</td>
				<td class="f1 fwb">3</td>
				<td class="f1 fwb">4</td>
				<td class="f1 fwb">5</td>
				<td class="f1 fwb">6</td>
				<td class="f1 fwb">7</td>
				<td class="f1 fwb">8</td>
				<td class="f1 fwb">9</td>
				<td class="f1 fwb">10</td>
				<td class="f1 fwb">11</td>
			</tr>
			<tr id="qiu1_body">
				<td id="q1_1_time">0</td>
				<td id="q1_2_time">0</td>
				<td id="q1_3_time">0</td>
				<td id="q1_4_time">0</td>
				<td id="q1_5_time">0</td>
				<td id="q1_6_time">0</td>
				<td id="q1_7_time">0</td>
				<td id="q1_8_time">0</td>
				<td id="q1_9_time">0</td>
				<td id="q1_10_time">0</td>
				<td id="q1_11_time">0</td>
			</tr>
			<tr id="qiu2_body" class="hide">
				<td id="q2_1_time">0</td>
				<td id="q2_2_time">0</td>
				<td id="q2_3_time">0</td>
				<td id="q2_4_time">0</td>
				<td id="q2_5_time">0</td>
				<td id="q2_6_time">0</td>
				<td id="q2_7_time">0</td>
				<td id="q2_8_time">0</td>
				<td id="q2_9_time">0</td>
				<td id="q2_10_time">0</td>
				<td id="q2_11_time">0</td>
			</tr>
			<tr id="qiu3_body" class="hide">
				<td id="q3_1_time">0</td>
				<td id="q3_2_time">0</td>
				<td id="q3_3_time">0</td>
				<td id="q3_4_time">0</td>
				<td id="q3_5_time">0</td>
				<td id="q3_6_time">0</td>
				<td id="q3_7_time">0</td>
				<td id="q3_8_time">0</td>
				<td id="q3_9_time">0</td>
				<td id="q3_10_time">0</td>
				<td id="q3_11_time">0</td>
			</tr>
			<tr id="qiu4_body" class="hide">
				<td id="q4_1_time">0</td>
				<td id="q4_2_time">0</td>
				<td id="q4_3_time">0</td>
				<td id="q4_4_time">0</td>
				<td id="q4_5_time">0</td>
				<td id="q4_6_time">0</td>
				<td id="q4_7_time">0</td>
				<td id="q4_8_time">0</td>
				<td id="q4_9_time">0</td>
				<td id="q4_10_time">0</td>
				<td id="q4_11_time">0</td>
			</tr>
			<tr id="qiu5_body" class="hide">
				<td id="q5_1_time">0</td>
				<td id="q5_2_time">0</td>
				<td id="q5_3_time">0</td>
				<td id="q5_4_time">0</td>
				<td id="q5_5_time">0</td>
				<td id="q5_6_time">0</td>
				<td id="q5_7_time">0</td>
				<td id="q5_8_time">0</td>
				<td id="q5_9_time">0</td>
				<td id="q5_10_time">0</td>
				<td id="q5_11_time">0</td>
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
				<th class="u-tb3-th2" id="stat_zhws_btn" type="zhws"
					onclick="StatGame.showStatType(this)">总和尾数大小</th>
				<th class="u-tb3-th2" id="stat_lh_btn" type="lh"
					onclick="StatGame.showStatType(this)">龙虎</th>
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
			<tr id="qiu1_zhws" class="stattd hide"></tr>
			<tr id="qiu1_lh" class="stattd hide"></tr>
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
<script type="text/javascript" src="/static/js/lottery/gd11x5/stat.js" async="async"></script>
</body>
</html>