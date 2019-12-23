
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
<link href="/static/css/fantan.css" rel="stylesheet" type="text/css" />
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
						     
						  <tr>
			<td class="ctColor" colspan="4" valign="bottom">
				
				<table border="0" cellpadding="0" cellspacing="0" width="700" class="ftable" rules="all">
					<tbody>
					<tr class="Conter_list">	
						<td class="jal t_Edit_caption_3 ftd amount" id="play_text_502023" style="width:20%;height:75px;">
							<span id="play_name_502023" class="name">3-4<font class="playn">角</font><!--角--></span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502023" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
						
						
						<td class="lan t_Edit_caption_3 ftd amount" id="play_text_502033" style="width:20%;height:75px;">
							<span id="play_name_502033" class="name">3念<!--連-->4</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502033" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
						
						<td class="lan t_Edit_caption_3 ftd amount" id="play_text_502031" style="width:20%;height:75px;">
							<span id="play_name_502031" class="name">3念<!--連-->1</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502031" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
						
						
						
						<td class="lan t_Edit_caption_3 ftd amount" id="play_text_502032" style="width:20%;height:75px;">
							<span id="play_name_502032" class="name">3念<!--連-->2</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502032" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
						
						
						
						
						
						
						<td class="jal t_Edit_caption_3 ftd amount" id="play_text_502022" style="width:20%;height:75px;">
							<span id="play_name_502022" class="name">2-3<font class="playn">角</font><!--角--></span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502022" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
					</tr>
					<tr class="Conter_list">	
					
					
					
						<td class="lan t_Edit_caption_3 ftd amount" id="play_name_502036" style="width:20%;height:75px;">
							<span id="play_odds_502036" class="name">4念<!--連-->3</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502036" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
						
						
						
						<td class="t_Edit_caption_3 ftd" style="width:60%;background-color:#b5b6b6;" colspan="3" rowspan="3">
							<table style="margin-top:1px;" class="ftable">
								<tbody><tr style="height:73px;">
									<td style="width:23%;">
										<img src="/skin/img/fantan/left_UP.png?1" usemap="#left_UP" style="vertical-align:bottom;">
									</td>
									<td class="fan t_Edit_caption_3 amount" id="play_text_502039" style="background-color:#FFDF2D;width:54%;" colspan="2">
										<span id="play_name_502039" class="name">3<font class="playfan">番</font><!--番--></span>
										&nbsp;&nbsp;&nbsp;<span id="play_odds_502039" class="odds"><span class="c-txt3">--</span></span>
										<br>
										<span class="fspan"></span>
										<input type="text" size="6" class="inp1" maxlength="7">
									</td>
									<td style="width:23%;">
										<img src="/skin/img/fantan/right_up.png?1" usemap="#right_up" style="vertical-align:bottom;">
									</td>
								</tr>
								<tr>
									<td class="fan t_Edit_caption_3 amount" id="play_text_502040" style="background-color:#FE3315;height:75px;">
										<span id="play_name_502040" class="name">4<font class="playfan">番</font><!--番--></span>
										&nbsp;&nbsp;&nbsp;<span id="play_odds_502040" class="odds"><span class="c-txt3">--</span></span>
										<br>
										<span class="fspan"></span>
										<input type="text" size="6" class="inp1" maxlength="7">
									</td>
									
									<td class="dan t_Edit_caption_3 amount" id="play_text_502041" style="height:75px;">
										<span id="play_name_502041" class="name">单<!-- 單 --></span>
										&nbsp;&nbsp;&nbsp;<span id="play_odds_502041" class="odds"><span class="c-txt3">--</span></span>
										<br>
										<span class="fspan"></span>
										<input type="text" size="6" class="inp1" maxlength="7">
									</td>
									<td class="dan t_Edit_caption_3 amount" id="play_text_502042" style="height:75px;">
										<span id="play_name_502042" class="name">双<!-- 雙 --></span>
										&nbsp;&nbsp;&nbsp;<span id="play_odds_502042" class="odds"><span class="c-txt3">--</span></span>
										<br>
										<span class="fspan"></span>
										<input type="text" size="6" class="inp1" maxlength="7">
									</td>
									
									
									
									<td class="fan t_Edit_caption_3 amount" id="play_text_502038" style="background-color:#6EFF30;height:75px;">
										<span id="play_name_502038" class="name">2<font class="playfan">番</font><!--番--></span>
										&nbsp;&nbsp;&nbsp;<span id="play_odds_502038" class="odds"><span class="c-txt3">--</span></span>
										<br>
										<span class="fspan"></span>
										<input type="text" size="6" class="inp1" maxlength="7">
									</td>
								</tr>
								<tr style="height:73px;">
									<td style="width:23%;">
										<img src="/skin/img/fantan/left_Down.png?1" usemap="#left_Down" style="vertical-align:bottom;">
									</td>
									<td class="fan t_Edit_caption_3 amount" id="play_text_502037" colspan="2" style="background-color:#DDDDDD;">
										<span id="play_name_502037" class="name">1<font class="playfan">番</font><!--番--></span>
										&nbsp;&nbsp;&nbsp;<span id="play_odds_502037" class="odds"><span class="c-txt3">--</span></span>
										<br>
										<span class="fspan"></span>
										<input type="text" size="6" class="inp1" maxlength="7">
									</td>
									<td style="width:23%;">
										<img src="/skin/img/fantan/right_Down.png?1" usemap="#right_Down" style="vertical-align:bottom;">
									</td>
								</tr>
							</tbody></table>
						</td>
						<td class="lan t_Edit_caption_3 ftd amount" id="play_text_502029" style="width:20%;height:75px;">
							<span id="play_name_502029" class="name">2念<!--連-->3</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502029" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
					</tr>
					<tr class="Conter_list">	
						<td class="lan t_Edit_caption_3 ftd amount" id="play_text_502035" style="width:20%;height:75px;">
							<span id="play_name_502035" class="name">4念<!--連-->2</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502035" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
						
						<td class="lan t_Edit_caption_3 ftd amount" id="play_text_502030" style="width:20%;height:75px;">
							<span id="play_name_502030" class="name">2念<!--連-->4</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502030" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
					</tr>
					<tr class="Conter_list">	
						<td class="lan t_Edit_caption_3 ftd amount" id="play_text_502034" style="width:20%;height:75px;">
							<span id="play_name_502034" class="name">4念<!--連-->1</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502034" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
						
						<td class="lan t_Edit_caption_3 ftd amount" id="play_text_502028" style="width:20%;height:75px;">
							<span id="play_name_502028" class="name">2念<!--連-->1</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502028" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
					</tr>
					<tr class="Conter_list">	
						<td class="jal t_Edit_caption_3 ftd amount" id="play_text_502024" style="width:20%;height:75px;">
							<span id="play_name_502024" class="name">1-4<font class="playn">角</font><!--角--></span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502024" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
						<td class="lan t_Edit_caption_3 ftd amount" id="play_text_502027" style="width:20%;height:75px;">
							<span id="play_name_502027" class="name">1念<!--連-->4</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502027" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
						<td class="lan t_Edit_caption_3 ftd amount" id="play_text_502026" style="width:20%;height:75px;">
							<span id="play_name_502026" class="name">1念<!--連-->3</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502026" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
						<td class="lan t_Edit_caption_3 ftd amount" id="play_text_502025" style="width:20%;height:75px;">
							<span id="play_name_502025" class="name">1念<!--連-->2</span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502025" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
						<td class="jal t_Edit_caption_3 ftd amount" id="play_text_502021" style="width:20%;height:75px;">
							<span id="play_name_502021" class="name">1-2<font class="playn">角</font><!--角--></span>
							&nbsp;&nbsp;&nbsp;<span id="play_odds_502021" class="odds"><span class="c-txt3">--</span></span>
							<br>
							<span class="fspan"></span>
							<input type="text" size="6" class="inp1" maxlength="7">
						</td>
					</tr>
				</tbody>
				</table>
				
				<div style="width:100%;height:5px;background-color:#b5b6b6;"></div>
				<table class="u-table2 play_tab_3">
					<tbody>
						<tr class="Conter_list">
							<td id="play_name_502017" class="t_Edit_caption_3 name">1正</td>	
							<td  id="play_odds_502017" class="odds"><span class="c-txt3">--</span></td>
							<td  class="amount" id="play_text_502017"><input type="text"></td>

							<td class="t_Edit_caption_3 name" id="play_name_502018">2正</td>	
							<td class="odds" id="play_odds_502018"><span class="c-txt3">--</span></td>
							<td class="amount" id="play_text_502018"><input type="text"></td>
					
						
							<td class="t_Edit_caption_3 name" id="play_name_502019">3正</td>	
							<td class="odds" id="play_odds_502019"><span class="c-txt3">--</span></td>
							<td class="amount" id="play_text_502019"><input type="text"></td>
							
							<td id="play_name_502020" class="t_Edit_caption_3 name">4正</td>	
							<td class="odds" id="play_odds_502020"><span class="c-txt3">--</span></td>
							<td class="amount" id="play_text_502020"><input type="text"></td>
						</tr>
					</tbody>
				</table>
		
			</td>
		</tr>


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