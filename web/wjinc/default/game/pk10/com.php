
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
   <table class="u-table2 play_tab_10"> 
      <thead> 
       <tr> 
        <th colspan="12">冠、亚军和</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_501005" class="name">3</td> 
        <td id="play_odds_501005" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501005" class="amount"><input type="text" /></td> 
        
        <td id="play_name_501006" class="name">4</td> 
        <td id="play_odds_501006" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501006" class="amount"><input type="text" /></td>
         
        <td id="play_name_501007" class="name">5</td> 
        <td id="play_odds_501007" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501007" class="amount"><input type="text" /></td>
         
        <td id="play_name_501008" class="name">6</td> 
        <td id="play_odds_501008" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501008" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_501009" class="name">7</td> 
        <td id="play_odds_501009" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501009" class="amount"><input type="text" /></td> 
        
        <td id="play_name_501010" class="name">8</td> 
        <td id="play_odds_501010" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501010" class="amount"><input type="text" /></td>
         
        <td id="play_name_501011" class="name">9</td> 
        <td id="play_odds_501011" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501011" class="amount"><input type="text" /></td>
         
        <td id="play_name_501012" class="name">10</td> 
        <td id="play_odds_501012" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501012" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_501013" class="name">11</td> 
        <td id="play_odds_501013" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501013" class="amount"><input type="text" /></td> 
        
        <td id="play_name_501014" class="name">12</td> 
        <td id="play_odds_501014" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501014" class="amount"><input type="text" /></td>
         
        <td id="play_name_501015" class="name">13</td> 
        <td id="play_odds_501015" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501015" class="amount"><input type="text" /></td>
         
        <td id="play_name_501016" class="name">14</td> 
        <td id="play_odds_501016" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501016" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_501017" class="name">15</td> 
        <td id="play_odds_501017" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501017" class="amount"><input type="text" /></td> 
        
        <td id="play_name_501018" class="name">16</td> 
        <td id="play_odds_501018" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501018" class="amount"><input type="text" /></td>
         
        <td id="play_name_501019" class="name">17</td> 
        <td id="play_odds_501019" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501019" class="amount"><input type="text" /></td>
         
        <td id="play_name_501020" class="name">18</td> 
        <td id="play_odds_501020" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501020" class="amount"><input type="text" /></td> 
       </tr> 
       <tr>
        <td id="play_name_501021" class="name">19</td> 
        <td id="play_odds_501021" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501021" class="amount"><input type="text" /></td> 
        
        <td class="name not-event" colspan="9"></td> 
       </tr>  
       <tr> 
        <td id="play_name_501001" class="name">冠亚大</td> 
        <td id="play_odds_501001" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501001" class="amount"><input type="text" /></td> 
        
        <td id="play_name_501002" class="name">冠亚小</td> 
        <td id="play_odds_501002" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501002" class="amount"><input type="text" /></td>
         
        <td id="play_name_501003" class="name">冠亚单</td> 
        <td id="play_odds_501003" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501003" class="amount"><input type="text" /></td>
         
        <td id="play_name_501004" class="name">冠亚双</td> 

        <td id="play_odds_501004" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_501004" class="amount"><input type="text" /></td> 
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
                                   <th class="u-tb3-th2 select" id="qiu1_th" onclick="StatGame.showStat(1)" qiu="1">冠军</th>
                                   <th class="u-tb3-th2" id="qiu2_th" onclick="StatGame.showStat(2)"  qiu="2">亚军</th>
                                   <th class="u-tb3-th2" id="qiu3_th" onclick="StatGame.showStat(3)"  qiu="3">第三名</th>
                                   <th class="u-tb3-th2" id="qiu4_th" onclick="StatGame.showStat(4)" qiu="4">第四名</th>
                                   <th class="u-tb3-th2" id="qiu5_th" onclick="StatGame.showStat(5)" qiu="5">第五名</th>
                                   <th class="u-tb3-th2" id="qiu6_th" onclick="StatGame.showStat(6)" qiu="6">第六名</th>
                                   <th class="u-tb3-th2" id="qiu7_th" onclick="StatGame.showStat(7)" qiu="7">第七名</th>
                                   <th class="u-tb3-th2" id="qiu8_th" onclick="StatGame.showStat(8)" qiu="8">第八名</th>
                                   <th class="u-tb3-th2" id="qiu9_th" onclick="StatGame.showStat(9)" qiu="9">第九名</th>
                                   <th class="u-tb3-th2" id="qiu10_th" onclick="StatGame.showStat(10)" qiu="10">第十名</th>
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
                               </tr>
                                <tr id="qiu1_body" >
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
                               </tr>
                               <tr id="qiu9_body" class="hide">
                                   <td id="q9_1_time">0</td>
                                   <td id="q9_2_time">0</td>
                                   <td id="q9_3_time">0</td>
                                   <td id="q9_4_time">0</td>
                                   <td id="q9_5_time">0</td>
                                   <td id="q9_6_time">0</td>
                                   <td id="q9_7_time">0</td>
                                   <td id="q9_8_time">0</td>
                                   <td id="q9_9_time">0</td>
                                   <td id="q9_10_time">0</td>
                               </tr>
                               <tr id="qiu10_body" class="hide">
                                   <td id="q10_1_time">0</td>
                                   <td id="q10_2_time">0</td>
                                   <td id="q10_3_time">0</td>
                                   <td id="q10_4_time">0</td>
                                   <td id="q10_5_time">0</td>
                                   <td id="q10_6_time">0</td>
                                   <td id="q10_7_time">0</td>
                                   <td id="q10_8_time">0</td>
                                   <td id="q10_9_time">0</td>
                                   <td id="q10_10_time">0</td>
                               </tr>
                           </tbody>
                       </table>
                       
                      <table class="u-table2 mt5">
                           <thead>
                               <tr id="stat_type">
                                   <th class="u-tb3-th2 select" id="stat_nums_btn" type="nums" onclick="StatGame.showStatType(this)">第一球</th>
                                   <th class="u-tb3-th2" id="stat_size_btn" type="size" onclick="StatGame.showStatType(this)">大小</th>
                                   <th class="u-tb3-th2" id="stat_firsts_btn" type="firsts" onclick="StatGame.showStatType(this)">单双</th>
                                   <th class="u-tb3-th2" id="stat_gyh_btn" type="gyh" onclick="StatGame.showStatType(this)">冠、亚军和</th>
                                   <th class="u-tb3-th2" id="stat_gyhdx_btn" type="gyhdx" onclick="StatGame.showStatType(this)">冠、亚军和 大小</th>
                                   <th class="u-tb3-th2" id="stat_gyhds_btn" type="gyhds" onclick="StatGame.showStatType(this)">冠、亚军和 单双</th>
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
                               <tr id="qiu9_nums" class="stattd hide"></tr>
                               <tr id="qiu10_nums" class="stattd hide"></tr>
                               <tr id="qiu1_size" class="stattd hide"></tr>
                               <tr id="qiu2_size" class="stattd hide"></tr>
                               <tr id="qiu3_size" class="stattd hide"></tr>
                               <tr id="qiu4_size" class="stattd hide"></tr>
                               <tr id="qiu5_size" class="stattd hide"></tr>
                               <tr id="qiu6_size" class="stattd hide"></tr>
                               <tr id="qiu7_size" class="stattd hide"></tr>
                               <tr id="qiu8_size" class="stattd hide"></tr>
                               <tr id="qiu9_size" class="stattd hide"></tr>
                               <tr id="qiu10_size" class="stattd hide"></tr>
                               <tr id="qiu1_firsts" class="stattd hide"></tr>
                               <tr id="qiu2_firsts" class="stattd hide"></tr>
                               <tr id="qiu3_firsts" class="stattd hide"></tr>
                               <tr id="qiu4_firsts" class="stattd hide"></tr>
                               <tr id="qiu5_firsts" class="stattd hide"></tr>
                               <tr id="qiu6_firsts" class="stattd hide"></tr>
                               <tr id="qiu7_firsts" class="stattd hide"></tr>
                               <tr id="qiu8_firsts" class="stattd hide"></tr>
                               <tr id="qiu9_firsts" class="stattd hide"></tr>
                               <tr id="qiu10_firsts" class="stattd hide"></tr>
                               <tr id="qiu1_gyh" class="stattd hide"></tr>
                               <tr id="qiu1_gyhdx" class="stattd hide"></tr>
                               <tr id="qiu1_gyhds" class="stattd hide"></tr>
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
<script type="text/javascript" src="/static/js/lottery/pk10/stat.js" async="async"></script>
</body>
</html>