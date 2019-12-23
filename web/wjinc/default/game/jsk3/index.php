
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
     <table class="u-table2 play_tab_56 "> 
      <thead> 
       <tr> 
        <th colspan="12">三军、大小</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_105601" class="name K3Term"><div class="ball-container1"><b class="b1">1</b></div></td> 
        <td id="play_odds_105601" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105601" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105602" class="name K3Term"><div class="ball-container1"><b class="b2">2</b></div></td> 
        <td id="play_odds_105602" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105602" class="amount"><input type="text" /></td>
         
        <td id="play_name_105603" class="name K3Term"><div class="ball-container1"><b class="b3">3</b></div></td> 
        <td id="play_odds_105603" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105603" class="amount"><input type="text" /></td>
         
        <td id="play_name_106101" class="name K3Term">大</td> 
        <td id="play_odds_106101" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106101" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105604" class="name K3Term"><div class="ball-container1"><b class="b4">4</b></div></td> 
        <td id="play_odds_105604" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105604" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105605" class="name K3Term"><div class="ball-container1"><b class="b5">5</b></div></td> 
        <td id="play_odds_105605" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105605" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105606" class="name K3Term"><div class="ball-container1"><b class="b6">6</b></div></td> 
        <td id="play_odds_105606" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105606" class="amount"><input type="text" /></td> 
        
        <td id="play_name_106102" class="name K3Term">小</td> 
        <td id="play_odds_106102" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106102" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_57 mt5"> 
      <thead> 
      	<tr> 
        <th colspan="9">围骰、全骰</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_105701" class="name K3Term"><div class="ball-container3"><b class="b1"></b><b class="b1"></b><b class="b1"></b></div></td> 
        <td id="play_odds_105701" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105701" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105702" class="name K3Term"><div class="ball-container3"><b class="b2"></b><b class="b2"></b><b class="b2"></b></div></td> 
        <td id="play_odds_105702" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105702" class="amount"><input type="text" /></td>
         
        <td id="play_name_105703" class="name K3Term"><div class="ball-container3"><b class="b3"></b><b class="b3"></b><b class="b3"></b></div></td> 
        <td id="play_odds_105703" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105703" class="amount"><input type="text" /></td>
       </tr>        <tr> 
        <td id="play_name_105704" class="name K3Term"><div class="ball-container3"><b class="b4">4</b><b class="b4">4</b><b class="b4">4</b></div></td> 
        <td id="play_odds_105704" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105704" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105705" class="name K3Term"><div class="ball-container3"><b class="b5">5</b><b class="b5">5</b><b class="b5">5</b></div></td> 
        <td id="play_odds_105705" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105705" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105706" class="name K3Term"><div class="ball-container3"><b class="b6">6</b><b class="b6">6</b><b class="b6">6</b></div></td> 
        <td id="play_odds_105706" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105706" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_106201" class="name">全骰</td> 
        <td id="play_odds_106201" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106201" class="amount"><input type="text" /></td> 
        
        <td class="name not-event" colspan="6"></td> 
       </tr> 
      </tbody> 
     </table> 
     
     <table class="u-table2 play_tab_58 mt5"> 
      <thead> 
       <tr> 
        <th colspan="12">点数</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_105804" class="name">4点</td> 
        <td id="play_odds_105804" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105804" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105805" class="name">5点</td> 
        <td id="play_odds_105805" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105805" class="amount"><input type="text" /></td>
         
        <td id="play_name_105806" class="name">6点</td> 
        <td id="play_odds_105806" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105806" class="amount"><input type="text" /></td>
         
        <td id="play_name_105807" class="name">7点</td> 
        <td id="play_odds_105807" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105807" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105808" class="name">8点</td> 
        <td id="play_odds_105808" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105808" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105809" class="name">9点</td> 
        <td id="play_odds_105809" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105809" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105810" class="name">10点</td> 
        <td id="play_odds_105810" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105810" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105811" class="name">11点</td> 
        <td id="play_odds_105811" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105811" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105812" class="name">12点</td> 
        <td id="play_odds_105812" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105812" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105813" class="name">13点</td> 
        <td id="play_odds_105813" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105813" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105814" class="name">14点</td> 
        <td id="play_odds_105814" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105814" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105815" class="name">15点</td> 
        <td id="play_odds_105815" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105815" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105816" class="name">16点</td> 
        <td id="play_odds_105816" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105816" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105817" class="name">17点</td> 
        <td id="play_odds_105817" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105817" class="amount"><input type="text" /></td> 
        
        <td class="name not-event" colspan="6"></td> 
       </tr> 
      </tbody> 
     </table> 
     
      <table class="u-table2 play_tab_59 mt5"> 
      <thead> 
      	<tr> 
        <th colspan="9">长牌</th> 
       </tr> 
      </thead>
      <tbody> 
       <tr> 
        <td id="play_name_105912" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b2"></b></div></td> 
        <td id="play_odds_105912" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105912" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105913" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b3"></b></div></td> 
        <td id="play_odds_105913" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105913" class="amount"><input type="text" /></td>
         
        <td id="play_name_105914" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b4"></b></div></td> 
        <td id="play_odds_105914" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105914" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_105915" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b5"></b></div></td> 
        <td id="play_odds_105915" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105915" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105916" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b6"></b></div></td> 
        <td id="play_odds_105916" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105916" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105923" class="name K3Term"><div class="ball-container2"><b class="b2"></b><b class="b3"></b></div></td> 
        <td id="play_odds_105923" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105923" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105924" class="name K3Term"><div class="ball-container2"><b class="b2"></b><b class="b4"></b></div></td> 
        <td id="play_odds_105924" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105924" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105925" class="name K3Term"><div class="ball-container2"><b class="b2"></b><b class="b5"></b></div></td> 
        <td id="play_odds_105925" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105925" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105926" class="name K3Term"><div class="ball-container2"><b class="b2"></b><b class="b6"></b></td> 
        <td id="play_odds_105926" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105926" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105934" class="name K3Term"><div class="ball-container2"><b class="b3"></b><b class="b4"></b></td> 
        <td id="play_odds_105934" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105934" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105935" class="name K3Term"><div class="ball-container2"><b class="b3"></b><b class="b5"></b></td> 
        <td id="play_odds_105935" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105935" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105936" class="name K3Term"><div class="ball-container2"><b class="b3"></b><b class="b6"></b></td> 
        <td id="play_odds_105936" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105936" class="amount"><input type="text" /></td> 
       </tr> 
       <tr> 
        <td id="play_name_105945" class="name K3Term"><div class="ball-container2"><b class="b4"></b><b class="b5"></b></div></td> 
        <td id="play_odds_105945" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105945" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105946" class="name K3Term"><div class="ball-container2"><b class="b4"></b><b class="b6"></b></div></td> 
        <td id="play_odds_105946" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105946" class="amount"><input type="text" /></td> 
        
        <td id="play_name_105956" class="name K3Term"><div class="ball-container2"><b class="b5"></b><b class="b6"></b></div></td> 
        <td id="play_odds_105956" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_105956" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     
      <table class="u-table2 play_tab_60 mt5"> 
      <thead> 
      <tr> 
        <th colspan="9">短牌</th> 
       </tr>
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_106011" class="name K3Term"><div class="ball-container2"><b class="b1"></b><b class="b1"></b></div></td> 
        <td id="play_odds_106011" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106011" class="amount"><input type="text" /></td> 
        
        <td id="play_name_106022" class="name K3Term"><div class="ball-container2"><b class="b2"></b><b class="b2"></b></div></td> 
        <td id="play_odds_106022" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106022" class="amount"><input type="text" /></td>
         
        <td id="play_name_106033" class="name K3Term"><div class="ball-container2"><b class="b3"></b><b class="b3"></b></div></td> 
        <td id="play_odds_106033" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106033" class="amount"><input type="text" /></td>
       </tr> 
       <tr> 
        <td id="play_name_106044" class="name K3Term"><div class="ball-container2"><b class="b4"></b><b class="b4"></b></div></td> 
        <td id="play_odds_106044" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106044" class="amount"><input type="text" /></td> 
        
        <td id="play_name_106055" class="name K3Term"><div class="ball-container2"><b class="b5"></b><b class="b5"></b></div></td> 
        <td id="play_odds_106055" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106055" class="amount"><input type="text" /></td> 
        
        <td id="play_name_106066" class="name K3Term"><div class="ball-container2"><b class="b6"></b><b class="b6"></b></div></td> 
        <td id="play_odds_106066" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_106066" class="amount"><input type="text" /></td> 
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
	
<div id="right_page" class="cont-sider">
	<div class="sider-box1 mt5" id="stat_play_ctn">
		<table class="u-table2">
			<thead> 
	         <tr> 
	          <th id="stat_play_list_desc">第一球</th> 
	         </tr> 
	        </thead> 
		</table>
		<table class="u-table5">
			<tbody id="stat_play_list">
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