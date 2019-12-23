
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
     <table class="u-table2"> 
      <thead id="lm_radios"> 
       <tr> 
        <th class="radio_td"><input type="radio" name="lm_type" value="608401" zx_type="2" min_sel_num="2" max_sel_num="7" checked="checked" /></th> 
        <th class="radio_td"><input type="radio" name="lm_type" value="608402" zx_type="2" min_sel_num="2" max_sel_num="7" /></th> 
        <th class="radio_td"><input type="radio" name="lm_type" value="608403" zx_type="3" min_sel_num="3" max_sel_num="7" /></th> 
        
        <th class="radio_td"><input type="radio" name="lm_type" value="608404" zx_type="3" min_sel_num="3" max_sel_num="7" /></th> 
        <th class="radio_td"><input type="radio" name="lm_type" value="608405" zx_type="4" min_sel_num="4" max_sel_num="5" /></th> 
        <th class="radio_td"><input type="radio" name="lm_type" value="608406" zx_type="5" min_sel_num="5" max_sel_num="5" /></th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td class="not-event" id="play_name_608401">任选二</td> 
        <td class="not-event" id="play_name_608402">选二连组</td> 
        <td class="not-event" id="play_name_608403">任选三</td> 
        <td class="not-event" id="play_name_608404">选三前组</td> 
        <td class="not-event" id="play_name_608405">任选四</td> 
        <td class="not-event" id="play_name_608406">任选五</td> 
       </tr> 
       <tr> 
        <td class="odds not-event" id="play_odds_608401"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_608402"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_608403"><span class="c-txt3">--</span></td> 
        
        <td class="odds not-event" id="play_odds_608404"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_608405"><span class="c-txt3">--</span></td> 
        <td class="odds not-event" id="play_odds_608406"><span class="c-txt3">--</span></td> 
       </tr> 
      </tbody>
      </table>
     <table class="u-table2 mt10 play_tab_lm_checkbox_84 K3Term"> 
      <thead> 
       <tr> 
        <th width="100px">号</th> 
        <th>勾选</th> 
        <th width="100px">号</th> 
        <th>勾选</th> 
        <th width="100px">号</th> 
        <th>勾选</th> 
        <th width="100px">号</th> 
        <th>勾选</th> 
       </tr> 
      </thead> 
      <tbody id="lm_checkboxs"> 
       <tr> 
        <td class="name not-event"><em class="n_1"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="1" />
        </td> 
        <td class="name not-event"><em class="n_6"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="6" />
        </td> 
        <td class="name not-event"><em class="n_11"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="11" />
        </td> 
        <td class="name not-event"><em class="n_16"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="16" />
        </td> 
       </tr> 
       <tr> 
        <td class="name not-event"><em class="n_2"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="2" />
        </td> 
        <td class="name not-event"><em class="n_7"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="7" />
        </td> 
        <td class="name not-event"><em class="n_12"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="12" />
        </td> 
        <td class="name not-event"><em class="n_17"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="17" />
        </td> 
       </tr> 
       <tr> 
        <td class="name not-event"><em class="n_3"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="3" />
        </td> 
        <td class="name not-event"><em class="n_8"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="8" />
        </td> 
        <td class="name not-event"><em class="n_13"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="13" />
        </td> 
        <td class="name not-event"><em class="n_18"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="18" />
        </td> 
       </tr> 
       <tr> 
        <td class="name not-event"><em class="n_4"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="4" />
        </td> 
        <td class="name not-event"><em class="n_9"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="9" />
        </td> 
        <td class="name not-event"><em class="n_14"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="14" />
        </td> 
        <td class="name not-event"><em class="n_19"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="19" />
        </td> 
       </tr> 
       <tr> 
        <td class="name not-event"><em class="n_5"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="5" />
        </td> 
        <td class="name not-event"><em class="n_10"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="10" />
        </td> 
        <td class="name not-event"><em class="n_15"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="15" />
        </td> 
        <td class="name not-event"><em class="n_20"></em></td> 
        <td class="checkbox_td">
        	<input type="checkbox" value="20" />
        </td> 
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
<script type="text/javascript">
	parent.UserBet.playType = "LM";
</script>
</body>
</html>
  
  