
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
								</span>
								<div class="cl"></div>
							</div>
						</div> 
						
						<div class="cont-col3-bd" id="bet_tab"> 
							<tr>
								<td class="ctColor" colspan="4" valign="bottom">
									<table border="0" cellpadding="0" cellspacing="0" width="700" class="ftable" rules="all">
										<tbody>
											<tr class="Conter_list">	
												<td class="jal t_Edit_caption_3 ftd amount" id="play_text_100942" style="width:20%;height:75px;">
													<span id="play_name_100942" class="name">3-4<font class="playn">角</font><!--角--></span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100909" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
												
												
												<td class="lan t_Edit_caption_3 ftd amount" id="play_text_100952" style="width:20%;height:75px;">
													<span id="play_name_100952" class="name">3念<!--連-->4</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100952" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
												
												<td class="lan t_Edit_caption_3 ftd amount" id="play_text_100950" style="width:20%;height:75px;">
													<span id="play_name_100950" class="name">3念<!--連-->1</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100950" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
												
												
												
												<td class="lan t_Edit_caption_3 ftd amount" id="play_text_100951" style="width:20%;height:75px;">
													<span id="play_name_100951" class="name">3念<!--連-->2</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100951" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
												
												<td class="jal t_Edit_caption_3 ftd amount" id="play_text_100941" style="width:20%;height:75px;">
													<span id="play_name_100941" class="name">2-3<font class="playn">角</font><!--角--></span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100941" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
											</tr>
											
											<tr class="Conter_list">	
												<td class="lan t_Edit_caption_3 ftd amount" id="play_name_100955" style="width:20%;height:75px;">
													<span id="play_odds_100955" class="name">4念<!--連-->3</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100955" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
						
												<td class="t_Edit_caption_3 ftd" style="width:60%;background-color:#b5b6b6;" colspan="3" rowspan="3">
													<table style="margin-top:1px;" class="ftable">
														<tbody>
														<tr style="height:73px;">
															<td style="width:23%;">
																<img src="/skin/img/fantan/left_UP.png?1" usemap="#left_UP" style="vertical-align:bottom;">
															</td>
															<td class="fan t_Edit_caption_3 amount" id="play_text_100958" style="background-color:#FFDF2D;width:54%;" colspan="2">
																<span id="play_name_100958" class="name">3<font class="playfan">番</font><!--番--></span>
																&nbsp;&nbsp;&nbsp;<span id="play_odds_100958" class="odds"><span class="c-txt3">--</span></span>
																<br>
																<span class="fspan"></span>
																<input type="text" size="6" class="inp1" maxlength="7">
															</td>
															<td style="width:23%;">
																<img src="/skin/img/fantan/right_up.png?1" usemap="#right_up" style="vertical-align:bottom;">
															</td>
														</tr>
														<tr>
															<td class="fan t_Edit_caption_3 amount" id="play_text_100959" style="background-color:#FE3315;height:75px;">
																<span id="play_name_100959" class="name">4<font class="playfan">番</font><!--番--></span>
																&nbsp;&nbsp;&nbsp;<span id="play_odds_100959" class="odds"><span class="c-txt3">--</span></span>
																<br>
																<span class="fspan"></span>
																<input type="text" size="6" class="inp1" maxlength="7">
															</td>
															
															<td class="dan t_Edit_caption_3 amount" id="play_text_100960" style="height:75px;">
																<span id="play_name_100960" class="name">单<!-- 單 --></span>
																&nbsp;&nbsp;&nbsp;<span id="play_odds_100960" class="odds"><span class="c-txt3">--</span></span>
																<br>
																<span class="fspan"></span>
																<input type="text" size="6" class="inp1" maxlength="7">
															</td>
															<td class="dan t_Edit_caption_3 amount" id="play_text_100961" style="height:75px;">
																<span id="play_name_100961" class="name">双<!-- 雙 --></span>
																&nbsp;&nbsp;&nbsp;<span id="play_odds_100961" class="odds"><span class="c-txt3">--</span></span>
																<br>
																<span class="fspan"></span>
																<input type="text" size="6" class="inp1" maxlength="7">
															</td>
															
															
															
															<td class="fan t_Edit_caption_3 amount" id="play_text_100957" style="background-color:#6EFF30;height:75px;">
																<span id="play_name_100957" class="name">2<font class="playfan">番</font><!--番--></span>
																&nbsp;&nbsp;&nbsp;<span id="play_odds_100957" class="odds"><span class="c-txt3">--</span></span>
																<br>
																<span class="fspan"></span>
																<input type="text" size="6" class="inp1" maxlength="7">
															</td>
														</tr>
														<tr style="height:73px;">
															<td style="width:23%;">
																<img src="/skin/img/fantan/left_Down.png?1" usemap="#left_Down" style="vertical-align:bottom;">
															</td>
															<td class="fan t_Edit_caption_3 amount" id="play_text_100956" colspan="2" style="background-color:#DDDDDD;">
																<span id="play_name_100956" class="name">1<font class="playfan">番</font><!--番--></span>
																&nbsp;&nbsp;&nbsp;<span id="play_odds_100956" class="odds"><span class="c-txt3">--</span></span>
																<br>
																<span class="fspan"></span>
																<input type="text" size="6" class="inp1" maxlength="7">
															</td>
															<td style="width:23%;">
																<img src="/skin/img/fantan/right_Down.png?1" usemap="#right_Down" style="vertical-align:bottom;">
															</td>
														</tr>
														</tbody>
													</table>
												</td>
												
												<td class="lan t_Edit_caption_3 ftd amount" id="play_text_100948" style="width:20%;height:75px;">
													<span id="play_name_100948" class="name">2念<!--連-->3</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100948" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
											</tr>
											
											<tr class="Conter_list">	
												<td class="lan t_Edit_caption_3 ftd amount" id="play_text_100954" style="width:20%;height:75px;">
													<span id="play_name_100954" class="name">4念<!--連-->2</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100954" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
												
												<td class="lan t_Edit_caption_3 ftd amount" id="play_text_100949" style="width:20%;height:75px;">
													<span id="play_name_100949" class="name">2念<!--連-->4</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100949" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
											</tr>
											<tr class="Conter_list">	
												<td class="lan t_Edit_caption_3 ftd amount" id="play_text_100953" style="width:20%;height:75px;">
													<span id="play_name_100953" class="name">4念<!--連-->1</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100953" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
												
												<td class="lan t_Edit_caption_3 ftd amount" id="play_text_100947" style="width:20%;height:75px;">
													<span id="play_name_100947" class="name">2念<!--連-->1</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100947" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
											</tr>
											<tr class="Conter_list">	
												<td class="jal t_Edit_caption_3 ftd amount" id="play_text_100943" style="width:20%;height:75px;">
													<span id="play_name_100943" class="name">1-4<font class="playn">角</font><!--角--></span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100943" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
												<td class="lan t_Edit_caption_3 ftd amount" id="play_text_100946" style="width:20%;height:75px;">
													<span id="play_name_100946" class="name">1念<!--連-->4</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100946" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
												<td class="lan t_Edit_caption_3 ftd amount" id="play_text_100945" style="width:20%;height:75px;">
													<span id="play_name_100945" class="name">1念<!--連-->3</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100945" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
												<td class="lan t_Edit_caption_3 ftd amount" id="play_text_100944" style="width:20%;height:75px;">
													<span id="play_name_100944" class="name">1念<!--連-->2</span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100944" class="odds"><span class="c-txt3">--</span></span>
													<br>
													<span class="fspan"></span>
													<input type="text" size="6" class="inp1" maxlength="7">
												</td>
												<td class="jal t_Edit_caption_3 ftd amount" id="play_text_100940" style="width:20%;height:75px;">
													<span id="play_name_100940" class="name">1-2<font class="playn">角</font><!--角--></span>
													&nbsp;&nbsp;&nbsp;<span id="play_odds_100940" class="odds"><span class="c-txt3">--</span></span>
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
												<td id="play_name_100936" class="t_Edit_caption_3 name">1正</td>	
												<td  id="play_odds_100936" class="odds"><span class="c-txt3">--</span></td>
												<td  class="amount" id="play_text_100936"><input type="text"></td>

												<td class="t_Edit_caption_3 name" id="play_name_100937">2正</td>	
												<td class="odds" id="play_odds_100937"><span class="c-txt3">--</span></td>
												<td class="amount" id="play_text_100937"><input type="text"></td>
										
											
												<td class="t_Edit_caption_3 name" id="play_name_100938">3正</td>	
												<td class="odds" id="play_odds_100938"><span class="c-txt3">--</span></td>
												<td class="amount" id="play_text_100938"><input type="text"></td>
												
												<td id="play_name_100939" class="t_Edit_caption_3 name">4正</td>	
												<td class="odds" id="play_odds_100939"><span class="c-txt3">--</span></td>
												<td class="amount" id="play_text_100939"><input type="text"></td>
											</tr>
										</tbody>
									</table>
		
								</td>
							</tr>
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
										<a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn1" class="quedchongz" style="width:80px">确 定</a>
										<a href="javascript:parent.UserBet.resetData()" class="quedchongz" style="width:80px">重 置</a>
									</span>	
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