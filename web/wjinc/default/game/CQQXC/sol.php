
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
			金额 : <input type="text" id="bet_money1" class="yusjinse bet-money" style="width:80px" value="">
		</span>
		<span class="fr mt8">
			<a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn1" class="quedchongz" style="width:80px">确 定</a>
			<a href="javascript:parent.UserBet.resetData()" class="quedchongz" style="width:80px">重 置</a>
			
		<div class="cl"></div>
	</div>
    </div>  
						    <div class="cont-col3-bd ssc" id="bet_tab"> 
						     <table class="u-table2 play_tab_2 hide"> 
						      <thead> 
						       <tr> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_1200" class="name"><em class="n_0"></em></td> 
						        <td id="play_odds_1200" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1200" class="amount"><input type="text" /></td> 
						        <td id="play_name_1201" class="name"><em class="n_1"></em></td> 
						        <td id="play_odds_1201" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1201" class="amount"><input type="text" /></td> 
						        <td id="play_name_1202" class="name"><em class="n_2"></em></td> 
						        <td id="play_odds_1202" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1202" class="amount"><input type="text" /></td> 
						        <td id="play_name_1203" class="name"><em class="n_3"></em></td> 
						        <td id="play_odds_1203" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1203" class="amount"><input type="text" /></td> 
						        <td id="play_name_1204" class="name"><em class="n_4"></em></td> 
						        <td id="play_odds_1204" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1204" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr> 
						        <td id="play_name_1205" class="name"><em class="n_5"></em></td> 
						        <td id="play_odds_1205" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1205" class="amount"><input type="text" /></td> 
						        <td id="play_name_1206" class="name"><em class="n_6"></em></td> 
						        <td id="play_odds_1206" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1206" class="amount"><input type="text" /></td> 
						        <td id="play_name_1207" class="name"><em class="n_7"></em></td> 
						        <td id="play_odds_1207" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1207" class="amount"><input type="text" /></td> 
						        <td id="play_name_1208" class="name"><em class="n_8"></em></td> 
						        <td id="play_odds_1208" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1208" class="amount"><input type="text" /></td> 
						        <td id="play_name_1209" class="name"><em class="n_9"></em></td> 
						        <td id="play_odds_1209" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1209" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr>
						     	<td id="play_name_1210" class="name">大</td> 
						        <td id="play_odds_1210" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1210" class="amount"><input type="text" /></td> 
						        <td id="play_name_1211" class="name">小</td> 
						        <td id="play_odds_1211" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1211" class="amount"><input type="text" /></td> 
						        <td id="play_name_1212" class="name">单</td> 
						        <td id="play_odds_1212" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1212" class="amount"><input type="text" /></td> 
						        <td id="play_name_1213" class="name">双</td> 
						        <td id="play_odds_1213" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1213" class="amount"><input type="text" /></td>
						        <td class="name not-event" colspan="3"></td> 
						       </tr>
						      </tbody> 
						     </table> 
						     
						     <table class="u-table2 play_tab_3 hide"> 
						      <thead> 
						       <tr> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_1300" class="name"><em class="n_0"></em></td> 
						        <td id="play_odds_1300" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1300" class="amount"><input type="text" /></td> 
						        <td id="play_name_1301" class="name"><em class="n_1"></em></td> 
						        <td id="play_odds_1301" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1301" class="amount"><input type="text" /></td> 
						        <td id="play_name_1302" class="name"><em class="n_2"></em></td> 
						        <td id="play_odds_1302" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1302" class="amount"><input type="text" /></td> 
						        <td id="play_name_1303" class="name"><em class="n_3"></em></td> 
						        <td id="play_odds_1303" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1303" class="amount"><input type="text" /></td> 
						        <td id="play_name_1304" class="name"><em class="n_4"></em></td> 
						        <td id="play_odds_1304" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1304" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr> 
						        <td id="play_name_1305" class="name"><em class="n_5"></em></td> 
						        <td id="play_odds_1305" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1305" class="amount"><input type="text" /></td> 
						        <td id="play_name_1306" class="name"><em class="n_6"></em></td> 
						        <td id="play_odds_1306" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1306" class="amount"><input type="text" /></td> 
						        <td id="play_name_1307" class="name"><em class="n_7"></em></td> 
						        <td id="play_odds_1307" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1307" class="amount"><input type="text" /></td> 
						        <td id="play_name_1308" class="name"><em class="n_8"></em></td> 
						        <td id="play_odds_1308" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1308" class="amount"><input type="text" /></td> 
						        <td id="play_name_1309" class="name"><em class="n_9"></em></td> 
						        <td id="play_odds_1309" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1309" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr>
						     	<td id="play_name_1310" class="name">大</td> 
						        <td id="play_odds_1310" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1310" class="amount"><input type="text" /></td> 
						        <td id="play_name_1311" class="name">小</td> 
						        <td id="play_odds_1311" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1311" class="amount"><input type="text" /></td> 
						        <td id="play_name_1312" class="name">单</td> 
						        <td id="play_odds_1312" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1312" class="amount"><input type="text" /></td> 
						        <td id="play_name_1313" class="name">双</td> 
						        <td id="play_odds_1313" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1313" class="amount"><input type="text" /></td>
						        <td class="name not-event" colspan="3"></td> 
						       </tr>
						      </tbody> 
						     </table>
						     
						     <table class="u-table2 play_tab_4 hide"> 
						      <thead> 
						       <tr> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_1400" class="name"><em class="n_0"></em></td> 
						        <td id="play_odds_1400" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1400" class="amount"><input type="text" /></td> 
						        <td id="play_name_1401" class="name"><em class="n_1"></em></td> 
						        <td id="play_odds_1401" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1401" class="amount"><input type="text" /></td> 
						        <td id="play_name_1402" class="name"><em class="n_2"></em></td> 
						        <td id="play_odds_1402" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1402" class="amount"><input type="text" /></td> 
						        <td id="play_name_1403" class="name"><em class="n_3"></em></td> 
						        <td id="play_odds_1403" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1403" class="amount"><input type="text" /></td> 
						        <td id="play_name_1404" class="name"><em class="n_4"></em></td> 
						        <td id="play_odds_1404" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1404" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr> 
						        <td id="play_name_1405" class="name"><em class="n_5"></em></td> 
						        <td id="play_odds_1405" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1405" class="amount"><input type="text" /></td> 
						        <td id="play_name_1406" class="name"><em class="n_6"></em></td> 
						        <td id="play_odds_1406" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1406" class="amount"><input type="text" /></td> 
						        <td id="play_name_1407" class="name"><em class="n_7"></em></td> 
						        <td id="play_odds_1407" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1407" class="amount"><input type="text" /></td> 
						        <td id="play_name_1408" class="name"><em class="n_8"></em></td> 
						        <td id="play_odds_1408" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1408" class="amount"><input type="text" /></td> 
						        <td id="play_name_1409" class="name"><em class="n_9"></em></td> 
						        <td id="play_odds_1409" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1409" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr>
						     	<td id="play_name_1410" class="name">大</td> 
						        <td id="play_odds_1410" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1410" class="amount"><input type="text" /></td> 
						        <td id="play_name_1411" class="name">小</td> 
						        <td id="play_odds_1411" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1411" class="amount"><input type="text" /></td> 
						        <td id="play_name_1412" class="name">单</td> 
						        <td id="play_odds_1412" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1412" class="amount"><input type="text" /></td> 
						        <td id="play_name_1413" class="name">双</td> 
						        <td id="play_odds_1413" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1413" class="amount"><input type="text" /></td>
						        <td class="name not-event" colspan="3"></td> 
						       </tr>
						      </tbody> 
						     </table>
						     
						     <table class="u-table2 play_tab_5 hide"> 
						      <thead> 
						       <tr> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_1500" class="name"><em class="n_0"></em></td> 
						        <td id="play_odds_1500" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1500" class="amount"><input type="text" /></td> 
						        <td id="play_name_1501" class="name"><em class="n_1"></em></td> 
						        <td id="play_odds_1501" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1501" class="amount"><input type="text" /></td> 
						        <td id="play_name_1502" class="name"><em class="n_2"></em></td> 
						        <td id="play_odds_1502" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1502" class="amount"><input type="text" /></td> 
						        <td id="play_name_1503" class="name"><em class="n_3"></em></td> 
						        <td id="play_odds_1503" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1503" class="amount"><input type="text" /></td> 
						        <td id="play_name_1504" class="name"><em class="n_4"></em></td> 
						        <td id="play_odds_1504" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1504" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr> 
						        <td id="play_name_1505" class="name"><em class="n_5"></em></td> 
						        <td id="play_odds_1505" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1505" class="amount"><input type="text" /></td> 
						        <td id="play_name_1506" class="name"><em class="n_6"></em></td> 
						        <td id="play_odds_1506" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1506" class="amount"><input type="text" /></td> 
						        <td id="play_name_1507" class="name"><em class="n_7"></em></td> 
						        <td id="play_odds_1507" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1507" class="amount"><input type="text" /></td> 
						        <td id="play_name_1508" class="name"><em class="n_8"></em></td> 
						        <td id="play_odds_1508" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1508" class="amount"><input type="text" /></td> 
						        <td id="play_name_1509" class="name"><em class="n_9"></em></td> 
						        <td id="play_odds_1509" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1509" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr>
						     	<td id="play_name_1510" class="name">大</td> 
						        <td id="play_odds_1510" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1510" class="amount"><input type="text" /></td> 
						        <td id="play_name_1511" class="name">小</td> 
						        <td id="play_odds_1511" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1511" class="amount"><input type="text" /></td> 
						        <td id="play_name_1512" class="name">单</td> 
						        <td id="play_odds_1512" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1512" class="amount"><input type="text" /></td> 
						        <td id="play_name_1513" class="name">双</td> 
						        <td id="play_odds_1513" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1513" class="amount"><input type="text" /></td>
						        <td class="name not-event" colspan="3"></td>  
						       </tr>
						      </tbody> 
						     </table>
						     
						     <table class="u-table2 play_tab_6 hide"> 
						      <thead> 
						       <tr> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						        <th>号</th> 
						        <th>赔率</th> 
						        <th>金额</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_1600" class="name"><em class="n_0"></em></td> 
						        <td id="play_odds_1600" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1600" class="amount"><input type="text" /></td> 
						        <td id="play_name_1601" class="name"><em class="n_1"></em></td> 
						        <td id="play_odds_1601" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1601" class="amount"><input type="text" /></td> 
						        <td id="play_name_1602" class="name"><em class="n_2"></em></td> 
						        <td id="play_odds_1602" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1602" class="amount"><input type="text" /></td> 
						        <td id="play_name_1603" class="name"><em class="n_3"></em></td> 
						        <td id="play_odds_1603" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1603" class="amount"><input type="text" /></td> 
						        <td id="play_name_1604" class="name"><em class="n_4"></em></td> 
						        <td id="play_odds_1604" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1604" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr> 
						        <td id="play_name_1605" class="name"><em class="n_5"></em></td> 
						        <td id="play_odds_1605" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1605" class="amount"><input type="text" /></td> 
						        <td id="play_name_1606" class="name"><em class="n_6"></em></td> 
						        <td id="play_odds_1606" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1606" class="amount"><input type="text" /></td> 
						        <td id="play_name_1607" class="name"><em class="n_7"></em></td> 
						        <td id="play_odds_1607" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1607" class="amount"><input type="text" /></td> 
						        <td id="play_name_1608" class="name"><em class="n_8"></em></td> 
						        <td id="play_odds_1608" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1608" class="amount"><input type="text" /></td> 
						        <td id="play_name_1609" class="name"><em class="n_9"></em></td> 
						        <td id="play_odds_1609" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1609" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr>
						     	<td id="play_name_1610" class="name">大</td> 
						        <td id="play_odds_1610" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1610" class="amount"><input type="text" /></td> 
						        <td id="play_name_1611" class="name">小</td> 
						        <td id="play_odds_1611" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1611" class="amount"><input type="text" /></td> 
						        <td id="play_name_1612" class="name">单</td> 
						        <td id="play_odds_1612" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1612" class="amount"><input type="text" /></td> 
						        <td id="play_name_1613" class="name">双</td> 
						        <td id="play_odds_1613" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1613" class="amount"><input type="text" /></td>
						        <td class="name not-event" colspan="3"></td> 
						       </tr>
						      </tbody> 
						     </table>
						     
						     <table class="u-table2 play_tab_1" style="margin-top: 10px;"> 
						      <thead> 
						       <tr> 
						        <th colspan="12">五球总和</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_1101" class="name">总和大</td> 
						        <td id="play_odds_1101" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1101" class="amount"><input type="text" /></td> 
						        <td id="play_name_1102" class="name">总和小</td> 
						        <td id="play_odds_1102" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1102" class="amount"><input type="text" /></td> 
						        <td id="play_name_1103" class="name">总和单</td> 
						        <td id="play_odds_1103" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1103" class="amount"><input type="text" /></td> 
						        <td id="play_name_1104" class="name">总和双</td> 
						        <td id="play_odds_1104" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_1104" class="amount"><input type="text" /></td> 
						       </tr>  
						      </tbody> 
						     </table> 
						     	<!-- 前三中三后三 -->
	<table class="u-table2 play_tab_7" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">前三</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_1701" class="name">豹子</td> 
        <td id="play_odds_1701" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1701" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1702" class="name">顺子</td> 
        <td id="play_odds_1702" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1702" class="amount"><input type="text" /></td>
        
        <td id="play_name_1703" class="name">对子</td> 
        <td id="play_odds_1703" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1703" class="amount"><input type="text" /></td>
         
        <td id="play_name_1704" class="name">半顺</td> 
        <td id="play_odds_1704" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1704" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1705" class="name">杂六</td> 
        <td id="play_odds_1705" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1705" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     <table class="u-table2 play_tab_8" style="margin-top: 10px;"> 
      <thead> 
       <tr> 
        <th colspan="15">中三</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_1801" class="name">豹子</td> 
        <td id="play_odds_1801" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1801" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1802" class="name">顺子</td> 
        <td id="play_odds_1802" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1802" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1803" class="name">对子</td> 
        <td id="play_odds_1803" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1803" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1804" class="name">半顺</td> 
        <td id="play_odds_1804" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1804" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1805" class="name">杂六</td> 
        <td id="play_odds_1805" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1805" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     <table class="u-table2 play_tab_9" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">后三</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_1901" class="name">豹子</td> 
        <td id="play_odds_1901" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1901" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1902" class="name">顺子</td> 
        <td id="play_odds_1902" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1902" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1903" class="name">对子</td> 
        <td id="play_odds_1903" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1903" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1904" class="name">半顺</td> 
        <td id="play_odds_1904" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1904" class="amount"><input type="text" /></td> 
        
        <td id="play_name_1905" class="name">杂六</td> 
        <td id="play_odds_1905" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_1905" class="amount"><input type="text" /></td> 
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
<script type="text/javascript">
var cate_id=parent.$("#cate_menus_122 .selected").attr("cate_id");
$(".play_tab_"+cate_id).show();
</script>  
</body>
</html>