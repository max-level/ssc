
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
   <div class="cont-col3 q11x5"> 
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
     <table class="u-table2"> 
      <thead id="lm_radios"> 
       <tr> 
        <th class="radio_td"><input type="radio" name="lm_type" value="213601" min_sel_num="2" max_sel_num="2" checked="checked" /></th> 
        <th class="radio_td"><input type="radio" name="lm_type" value="213602" min_sel_num="3" max_sel_num="3" /></th> 
        <th class="radio_td"><input type="radio" name="lm_type" value="213603" min_sel_num="4" max_sel_num="4" /></th> 
        
        <th class="radio_td"><input type="radio" name="lm_type" value="213604" min_sel_num="5" max_sel_num="5" /></th> 
        <th class="radio_td"><input type="radio" name="lm_type" value="213605" min_sel_num="6" max_sel_num="6" /></th> 
        <th class="radio_td"><input type="radio" name="lm_type" value="213606" min_sel_num="7" max_sel_num="7" /></th> 
        
        <th class="radio_td"><input type="radio" name="lm_type" value="213607" min_sel_num="8" max_sel_num="8" /></th> 
        <th class="radio_td"><input type="radio" name="lm_type" value="213608" min_sel_num="2" max_sel_num="5" zx_type="2"/></th> 
        <th class="radio_td"><input type="radio" name="lm_type" value="213609" min_sel_num="3" max_sel_num="5" zx_type="3"/></th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td class="odds not-event" id="play_name_213601">任选二中二</td> 
        <td class="odds not-event" id="play_name_213602">任选三中三</td> 
        <td class="odds not-event" id="play_name_213603">任选四中四</td> 
        <td class="odds not-event" id="play_name_213604">任选五中五</td> 
        <td class="odds not-event" id="play_name_213605">任选六中五</td> 
        <td class="odds not-event" id="play_name_213606">任选七中五</td> 
        <td class="odds not-event" id="play_name_213607">任选八中五</td> 
        <td class="odds not-event" id="play_name_213608">前二组选</td> 
        <td class="odds not-event" id="play_name_213609">前三组选</td> 
       </tr> 
       <tr> 
        <td class="odds not-event" id="play_odds_213601" class="odds"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_213602" class="odds"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_213603" class="odds"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_213604" class="odds"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_213605" class="odds"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_213606" class="odds"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_213607" class="odds"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_213608" class="odds"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_213609" class="odds"><span class="c-txt3">--</span></td> 
       </tr> 
      </tbody>
      </table>
     <table class="u-table2 mt10 play_tab_lm_checkbox_36"> 
      <thead> 
       <tr> 
        <th width="40px">号</th> 
        <th>勾选</th> 
        <th width="40px">号</th> 
        <th>勾选</th> 
        <th width="40px">号</th> 
        <th>勾选</th> 
        <th width="40px">号</th> 
        <th>勾选</th> 
        <th width="40px">号</th> 
        <th>勾选</th> 
        <th width="40px">号</th> 
        <th>勾选</th> 
       </tr> 
      </thead> 
      <tbody id="lm_checkboxs"> 
       <tr> 
        <td class="name not-event"><em class="n_1"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="1" />
        </td>
        <td class="name not-event"><em class="n_2"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="2" />
        </td>
        <td class="name not-event"><em class="n_3"></em></td> 
       <td class="checkbox_td">
        	<input type="checkbox" value="3" />
        </td>
        <td class="name not-event"><em class="n_4"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="4" />
        </td>
        <td class="name not-event"><em class="n_5"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="5" />
        </td>
        <td class="name not-event"><em class="n_6"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="6" />
        </td>
       </tr> 
       <tr> 
        <td class="name not-event"><em class="n_7"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="7" />
        </td>
        <td class="name not-event"><em class="n_8"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="8" />
        </td>
        <td class="name not-event"><em class="n_9"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="9" />
        </td> 
        <td class="name not-event"><em class="n_10"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="10" />
        </td>
        <td class="name not-event"><em class="n_11"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="11" />
        </td>
        <td class="name not-event"></td> 
        <td class="not-event"></td> 
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
<script type="text/javascript">
	parent.UserBet.playType = "LM";
</script>
</body>
</html>  
  