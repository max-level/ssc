
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
   <div class="cont-col3 klsf"> 
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
    <table class="u-table2 play_tab_82 K3Term"> 
      <thead> 
       <tr> 
        <th colspan="12">第八球</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_608201" class="name"><em class="n_1"></em></td> 
        <td id="play_odds_608201" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608201" class="amount"><input type="text" /></td> 
                                 
        <td id="play_name_608206" class="name"><em class="n_6"></em></td> 
        <td id="play_odds_608206" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608206" class="amount"><input type="text" /></td>
                                 
        <td id="play_name_608211" class="name"><em class="n_11"></em></td> 
        <td id="play_odds_608211" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608211" class="amount"><input type="text" /></td>
                                 
        <td id="play_name_608216" class="name"><em class="n_16"></em></td> 
        <td id="play_odds_608216" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608216" class="amount"><input type="text" /></td>
       </tr>                     
       <tr>                      
        <td id="play_name_608202" class="name"><em class="n_2"></em></td> 
        <td id="play_odds_608202" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608202" class="amount"><input type="text" /></td> 
                                 
        <td id="play_name_608207" class="name"><em class="n_7"></em></td> 
        <td id="play_odds_608207" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608207" class="amount"><input type="text" /></td>
                                 
        <td id="play_name_608212" class="name"><em class="n_12"></em></td> 
        <td id="play_odds_608212" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608212" class="amount"><input type="text" /></td>
                                 
        <td id="play_name_608217" class="name"><em class="n_17"></em></td> 
        <td id="play_odds_608217" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608217" class="amount"><input type="text" /></td>
       </tr>                     
       <tr>                      
        <td id="play_name_608203" class="name"><em class="n_3"></em></td> 
        <td id="play_odds_608203" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608203" class="amount"><input type="text" /></td> 
                                 
        <td id="play_name_608208" class="name"><em class="n_8"></em></td> 
        <td id="play_odds_608208" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608208" class="amount"><input type="text" /></td>
                                 
        <td id="play_name_608213" class="name"><em class="n_13"></em></td> 
        <td id="play_odds_608213" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608213" class="amount"><input type="text" /></td>
                                 
        <td id="play_name_608218" class="name"><em class="n_18"></em></td> 
        <td id="play_odds_608218" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608218" class="amount"><input type="text" /></td>
       </tr>                     
       <tr>                      
        <td id="play_name_608204" class="name"><em class="n_4"></em></td> 
        <td id="play_odds_608204" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608204" class="amount"><input type="text" /></td> 
                                 
        <td id="play_name_608209" class="name"><em class="n_9"></em></td> 
        <td id="play_odds_608209" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608209" class="amount"><input type="text" /></td>
                                 
        <td id="play_name_608214" class="name"><em class="n_14"></em></td> 
        <td id="play_odds_608214" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608214" class="amount"><input type="text" /></td>
                                 
        <td id="play_name_608219" class="name"><em class="n_19"></em></td> 
        <td id="play_odds_608219" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608219" class="amount"><input type="text" /></td>
       </tr>                     
       <tr>                      
        <td id="play_name_608205" class="name"><em class="n_5"></em></td> 
        <td id="play_odds_608205" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608205" class="amount"><input type="text" /></td> 
                                 
        <td id="play_name_608210" class="name"><em class="n_10"></em></td> 
        <td id="play_odds_608210" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608210" class="amount"><input type="text" /></td>
                                 
        <td id="play_name_608215" class="name"><em class="n_15"></em></td> 
        <td id="play_odds_608215" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608215" class="amount"><input type="text" /></td>
                                 
        <td id="play_name_608220" class="name"><em class="n_20"></em></td> 
        <td id="play_odds_608220" class="odds"><span class="c-txt3">--</span></td>
        <td id="play_text_608220" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_608221" class="name">大</td> 
        <td id="play_odds_608221" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608221" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608223" class="name">单</td> 
        <td id="play_odds_608223" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608223" class="amount"><input type="text" /></td>
         
        <td id="play_name_608225" class="name">尾大</td> 
        <td id="play_odds_608225" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608225" class="amount"><input type="text" /></td>
         
        <td id="play_name_608227" class="name">合数单</td> 
        <td id="play_odds_608227" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608227" class="amount"><input type="text" /></td>
       </tr>
        
       <tr> 
        <td id="play_name_608222" class="name">小</td> 
        <td id="play_odds_608222" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608222" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608224" class="name">双</td> 
        <td id="play_odds_608224" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608224" class="amount"><input type="text" /></td>
         
        <td id="play_name_608226" class="name">尾小</td> 
        <td id="play_odds_608226" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608226" class="amount"><input type="text" /></td>
         
        <td id="play_name_608228" class="name">合数双</td> 
        <td id="play_odds_608228" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608228" class="amount"><input type="text" /></td>
       </tr> 
       
       <tr> 
        <td id="play_name_608229" class="name">东</td> 
        <td id="play_odds_608229" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608229" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608230" class="name">南</td> 
        <td id="play_odds_608230" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608230" class="amount"><input type="text" /></td>
         
        <td id="play_name_608231" class="name">西</td> 
        <td id="play_odds_608231" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608231" class="amount"><input type="text" /></td>
         
        <td id="play_name_608232" class="name">北</td> 
        <td id="play_odds_608232" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608232" class="amount"><input type="text" /></td>
       </tr>
        
       <tr> 
        <td id="play_name_608233" class="name">中</td> 
        <td id="play_odds_608233" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608233" class="amount"><input type="text" /></td> 
        
        <td id="play_name_608234" class="name">发</td> 
        <td id="play_odds_608234" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608234" class="amount"><input type="text" /></td>
         
        <td id="play_name_608235" class="name">白</td> 
        <td id="play_odds_608235" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_608235" class="amount"><input type="text" /></td>
         
        <td class="name not-event" colspan="3"></td> 
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
				<th class="u-tb3-th2" id="qiu6_th" onclick="StatGame.showStat(6)"
					qiu="6">第六球</th>
				<th class="u-tb3-th2" id="qiu7_th" onclick="StatGame.showStat(7)"
					qiu="7">第七球</th>
				<th class="u-tb3-th2" id="qiu8_th" onclick="StatGame.showStat(8)"
					qiu="8">第八球</th>
			</tr>
		</thead>
	</table>
	<table class="u-table4">
		<tbody>
			<tr>
				<td class="f1 fwb">01</td>
				<td class="f1 fwb">02</td>
				<td class="f1 fwb">03</td>
				<td class="f1 fwb">04</td>
				<td class="f1 fwb">05</td>
				<td class="f1 fwb">06</td>
				<td class="f1 fwb">07</td>
				<td class="f1 fwb">08</td>
				<td class="f1 fwb">09</td>
				<td class="f1 fwb">10</td>
				<td class="f1 fwb">11</td>
				<td class="f1 fwb">12</td>
				<td class="f1 fwb">13</td>
				<td class="f1 fwb">14</td>
				<td class="f1 fwb">15</td>
				<td class="f1 fwb">16</td>
				<td class="f1 fwb">17</td>
				<td class="f1 fwb">18</td>
				<td class="f1 fwb">19</td>
				<td class="f1 fwb">20</td>
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
				<td id="q1_12_time">0</td>
				<td id="q1_13_time">0</td>
				<td id="q1_14_time">0</td>
				<td id="q1_15_time">0</td>
				<td id="q1_16_time">0</td>
				<td id="q1_17_time">0</td>
				<td id="q1_18_time">0</td>
				<td id="q1_19_time">0</td>
				<td id="q1_20_time">0</td>
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
				<td id="q2_12_time">0</td>
				<td id="q2_13_time">0</td>
				<td id="q2_14_time">0</td>
				<td id="q2_15_time">0</td>
				<td id="q2_16_time">0</td>
				<td id="q2_17_time">0</td>
				<td id="q2_18_time">0</td>
				<td id="q2_19_time">0</td>
				<td id="q2_20_time">0</td>
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
				<td id="q3_12_time">0</td>
				<td id="q3_13_time">0</td>
				<td id="q3_14_time">0</td>
				<td id="q3_15_time">0</td>
				<td id="q3_16_time">0</td>
				<td id="q3_17_time">0</td>
				<td id="q3_18_time">0</td>
				<td id="q3_19_time">0</td>
				<td id="q3_20_time">0</td>
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
				<td id="q4_12_time">0</td>
				<td id="q4_13_time">0</td>
				<td id="q4_14_time">0</td>
				<td id="q4_15_time">0</td>
				<td id="q4_16_time">0</td>
				<td id="q4_17_time">0</td>
				<td id="q4_18_time">0</td>
				<td id="q4_19_time">0</td>
				<td id="q4_20_time">0</td>
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
				<td id="q5_12_time">0</td>
				<td id="q5_13_time">0</td>
				<td id="q5_14_time">0</td>
				<td id="q5_15_time">0</td>
				<td id="q5_16_time">0</td>
				<td id="q5_17_time">0</td>
				<td id="q5_18_time">0</td>
				<td id="q5_19_time">0</td>
				<td id="q5_20_time">0</td>
			</tr>
			<tr id="qiu6_body" class="hide">
				<td id="q6_1_time">0</td>
				<td id="q6_2_time">0</td>
				<td id="q6_3_time">0</td>
				<td id="q6_4_time">0</td>
				<td id="q6_5_time">0</td>
				<td id="q6_6_time">0</td>
				<td id="q6_7_time">0</td>
				<td id="q6_8_time">0</td>
				<td id="q6_9_time">0</td>
				<td id="q6_10_time">0</td>
				<td id="q6_11_time">0</td>
				<td id="q6_12_time">0</td>
				<td id="q6_13_time">0</td>
				<td id="q6_14_time">0</td>
				<td id="q6_15_time">0</td>
				<td id="q6_16_time">0</td>
				<td id="q6_17_time">0</td>
				<td id="q6_18_time">0</td>
				<td id="q6_19_time">0</td>
				<td id="q6_20_time">0</td>
			</tr>
			<tr id="qiu7_body" class="hide">
				<td id="q7_1_time">0</td>
				<td id="q7_2_time">0</td>
				<td id="q7_3_time">0</td>
				<td id="q7_4_time">0</td>
				<td id="q7_5_time">0</td>
				<td id="q7_6_time">0</td>
				<td id="q7_7_time">0</td>
				<td id="q7_8_time">0</td>
				<td id="q7_9_time">0</td>
				<td id="q7_10_time">0</td>
				<td id="q7_11_time">0</td>
				<td id="q7_12_time">0</td>
				<td id="q7_13_time">0</td>
				<td id="q7_14_time">0</td>
				<td id="q7_15_time">0</td>
				<td id="q7_16_time">0</td>
				<td id="q7_17_time">0</td>
				<td id="q7_18_time">0</td>
				<td id="q7_19_time">0</td>
				<td id="q7_20_time">0</td>
			</tr>
			<tr id="qiu8_body" class="hide">
				<td id="q8_1_time">0</td>
				<td id="q8_2_time">0</td>
				<td id="q8_3_time">0</td>
				<td id="q8_4_time">0</td>
				<td id="q8_5_time">0</td>
				<td id="q8_6_time">0</td>
				<td id="q8_7_time">0</td>
				<td id="q8_8_time">0</td>
				<td id="q8_9_time">0</td>
				<td id="q8_10_time">0</td>
				<td id="q8_11_time">0</td>
				<td id="q8_12_time">0</td>
				<td id="q8_13_time">0</td>
				<td id="q8_14_time">0</td>
				<td id="q8_15_time">0</td>
				<td id="q8_16_time">0</td>
				<td id="q8_17_time">0</td>
				<td id="q8_18_time">0</td>
				<td id="q8_19_time">0</td>
				<td id="q8_20_time">0</td>
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
				<th class="u-tb3-th2" id="stat_lh_btn" type="lh"
					onclick="StatGame.showStatType(this)">龙虎</th>
				<th class="u-tb3-th2" id="stat_lh_btn" type="wsdx"
					onclick="StatGame.showStatType(this)">尾数大小</th>
				<th class="u-tb3-th2" id="stat_lh_btn" type="hsds"
					onclick="StatGame.showStatType(this)">合数单双</th>
				<th class="u-tb3-th2" id="stat_zhdx_btn" type="zhdx"
					onclick="StatGame.showStatType(this)">总和大小</th>
				<th class="u-tb3-th2" id="stat_zhds_btn" type="zhds"
					onclick="StatGame.showStatType(this)">总和单双</th>
				<th class="u-tb3-th2" id="stat_zhws_btn" type="zhws"
					onclick="StatGame.showStatType(this)">总尾数大小</th>
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
			<tr id="qiu6_nums" class="stattd hide"></tr>
			<tr id="qiu7_nums" class="stattd hide"></tr>
			<tr id="qiu8_nums" class="stattd hide"></tr>
			<tr id="qiu1_size" class="stattd hide"></tr>
			<tr id="qiu2_size" class="stattd hide"></tr>
			<tr id="qiu3_size" class="stattd hide"></tr>
			<tr id="qiu4_size" class="stattd hide"></tr>
			<tr id="qiu5_size" class="stattd hide"></tr>
			<tr id="qiu6_size" class="stattd hide"></tr>
			<tr id="qiu7_size" class="stattd hide"></tr>
			<tr id="qiu8_size" class="stattd hide"></tr>
			<tr id="qiu1_firsts" class="stattd hide"></tr>
			<tr id="qiu2_firsts" class="stattd hide"></tr>
			<tr id="qiu3_firsts" class="stattd hide"></tr>
			<tr id="qiu4_firsts" class="stattd hide"></tr>
			<tr id="qiu5_firsts" class="stattd hide"></tr>
			<tr id="qiu6_firsts" class="stattd hide"></tr>
			<tr id="qiu7_firsts" class="stattd hide"></tr>
			<tr id="qiu8_firsts" class="stattd hide"></tr>
			<tr id="qiu1_lh" class="stattd hide"></tr>
			<tr id="qiu2_lh" class="stattd hide"></tr>
			<tr id="qiu3_lh" class="stattd hide"></tr>
			<tr id="qiu4_lh" class="stattd hide"></tr>
			<tr id="qiu1_wsdx" class="stattd hide"></tr>
			<tr id="qiu2_wsdx" class="stattd hide"></tr>
			<tr id="qiu3_wsdx" class="stattd hide"></tr>
			<tr id="qiu4_wsdx" class="stattd hide"></tr>
			<tr id="qiu5_wsdx" class="stattd hide"></tr>
			<tr id="qiu6_wsdx" class="stattd hide"></tr>
			<tr id="qiu7_wsdx" class="stattd hide"></tr>
			<tr id="qiu8_wsdx" class="stattd hide"></tr>
			<tr id="qiu1_hsds" class="stattd hide"></tr>
			<tr id="qiu2_hsds" class="stattd hide"></tr>
			<tr id="qiu3_hsds" class="stattd hide"></tr>
			<tr id="qiu4_hsds" class="stattd hide"></tr>
			<tr id="qiu5_hsds" class="stattd hide"></tr>
			<tr id="qiu6_hsds" class="stattd hide"></tr>
			<tr id="qiu7_hsds" class="stattd hide"></tr>
			<tr id="qiu8_hsds" class="stattd hide"></tr>
			<tr id="qiu1_zhdx" class="stattd hide"></tr>
			<tr id="qiu1_zhds" class="stattd hide"></tr>
			<tr id="qiu1_zhws" class="stattd hide"></tr>
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
<script type="text/javascript" src="/static/js/lottery/xync/stat.js" async="async"></script>
</body>
</html>
