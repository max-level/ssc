
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
						     <table class="u-table2 play_tab_101"> 
						      <thead> 
						       <tr> 
						        <th colspan="12">冠、亚军和</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_5510101" class="name">冠亚大</td> 
						        <td id="play_odds_5510101" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_5510101" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_5510102" class="name">冠亚小</td> 
						        <td id="play_odds_5510102" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_5510102" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_5510103" class="name">冠亚单</td> 
						        <td id="play_odds_5510103" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_5510103" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_5510104" class="name">冠亚双</td> 
						        <td id="play_odds_5510104" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_5510104" class="amount"><input type="text" /></td> 
						       </tr> 
						      </tbody> 
						     </table> 
						     
						     <table class="cont-list1">
						     	<tr>
						     		<td>
								     <table class="u-table2 play_tab_11"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">冠军</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_5510211" class="name">大</td> 
								          <td id="play_odds_5510211" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510211" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510212" class="name">小</td> 
								          <td id="play_odds_5510212" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510212" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510213" class="name">单</td> 
								          <td id="play_odds_5510213" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510213" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510214" class="name">双</td> 
								          <td id="play_odds_5510214" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510214" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510215" class="name">龙</td> 
								          <td id="play_odds_5510215" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510215" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510216" class="name">虎</td> 
								          <td id="play_odds_5510216" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510216" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		<td>
								     <table class="u-table2 play_tab_12"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">亚军</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_5510311" class="name">大</td> 
								          <td id="play_odds_5510311" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510311" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510312" class="name">小</td> 
								          <td id="play_odds_5510312" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510312" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510313" class="name">单</td> 
								          <td id="play_odds_5510313" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510313" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510314" class="name">双</td> 
								          <td id="play_odds_5510314" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510314" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510315" class="name">龙</td> 
								          <td id="play_odds_5510315" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510315" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510316" class="name">虎</td> 
								          <td id="play_odds_5510316" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510316" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		<td>
								     <table class="u-table2 play_tab_13"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第三名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_5510411" class="name">大</td> 
								          <td id="play_odds_5510411" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510411" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510412" class="name">小</td> 
								          <td id="play_odds_5510412" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510412" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510413" class="name">单</td> 
								          <td id="play_odds_5510413" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510413" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510414" class="name">双</td> 
								          <td id="play_odds_5510414" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510414" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510415" class="name">龙</td> 
								          <td id="play_odds_5510415" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510415" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510416" class="name">虎</td> 
								          <td id="play_odds_5510416" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510416" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		<td>
								     <table class="u-table2 play_tab_14"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第四名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_5510511" class="name">大</td> 
								          <td id="play_odds_5510511" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510511" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510512" class="name">小</td> 
								          <td id="play_odds_5510512" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510512" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510513" class="name">单</td> 
								          <td id="play_odds_5510513" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510513" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510514" class="name">双</td> 
								          <td id="play_odds_5510514" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510514" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510515" class="name">龙</td> 
								          <td id="play_odds_5510515" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510515" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510516" class="name">虎</td> 
								          <td id="play_odds_5510516" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510516" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		<td>
								     <table class="u-table2 play_tab_15"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第五名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_5510611" class="name">大</td> 
								          <td id="play_odds_5510611" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510611" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510612" class="name">小</td> 
								          <td id="play_odds_5510612" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510612" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510613" class="name">单</td> 
								          <td id="play_odds_5510613" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510613" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510614" class="name">双</td> 
								          <td id="play_odds_5510614" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510614" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510615" class="name">龙</td> 
								          <td id="play_odds_5510615" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510615" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510616" class="name">虎</td> 
								          <td id="play_odds_5510616" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510616" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     	</tr>
						     </table>
						     
						     <table class="cont-list1">
						     	<tr>
						     		<td>
						     			<table class="u-table2 play_tab_16"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第六名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_5510711" class="name">大</td> 
								          <td id="play_odds_5510711" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510711" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510712" class="name">小</td> 
								          <td id="play_odds_5510712" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510712" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510713" class="name">单</td> 
								          <td id="play_odds_5510713" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510713" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510714" class="name">双</td> 
								          <td id="play_odds_5510714" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510714" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_17"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第七名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_5510811" class="name">大</td> 
								          <td id="play_odds_5510811" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510811" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510812" class="name">小</td> 
								          <td id="play_odds_5510812" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510812" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510813" class="name">单</td> 
								          <td id="play_odds_5510813" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510813" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510814" class="name">双</td> 
								          <td id="play_odds_5510814" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510814" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_18"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第八名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_5510911" class="name">大</td> 
								          <td id="play_odds_5510911" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510911" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510912" class="name">小</td> 
								          <td id="play_odds_5510912" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510912" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510913" class="name">单</td> 
								          <td id="play_odds_5510913" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510913" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5510914" class="name">双</td> 
								          <td id="play_odds_5510914" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5510914" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_19"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第九名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_5511011" class="name">大</td> 
								          <td id="play_odds_5511011" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5511011" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5511012" class="name">小</td> 
								          <td id="play_odds_5511012" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5511012" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5511013" class="name">单</td> 
								          <td id="play_odds_5511013" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5511013" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5511014" class="name">双</td> 
								          <td id="play_odds_5511014" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5511014" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_20"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第十名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_5511111" class="name">大</td> 
								          <td id="play_odds_5511111" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5511111" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5511112" class="name">小</td> 
								          <td id="play_odds_5511112" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5511112" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5511113" class="name">单</td> 
								          <td id="play_odds_5511113" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5511113" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_5511114" class="name">双</td> 
								          <td id="play_odds_5511114" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_5511114" class="amount"><input type="text" /></td>
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