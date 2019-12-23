
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
						     
						     <table class="u-table2 play_tab_1" style="margin-top: 10px;"> 
						      <thead> 
						       <tr> 
						        <th colspan="18">百家乐</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_119962" class="name">庄赢</td> 
						        <td id="play_odds_119962" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_119962" class="amount"><input type="text" /></td> 
						        <td id="play_name_119963" class="name">闲赢</td> 
						        <td id="play_odds_119963" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_119963" class="amount"><input type="text" /></td> 
						        <td id="play_name_119964" class="name">和局</td> 
						        <td id="play_odds_119964" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_119964" class="amount"><input type="text" /></td> 
						        <td id="play_name_119965" class="name">庄对</td> 
						        <td id="play_odds_119965" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_119965" class="amount"><input type="text" /></td>
								<td id="play_name_119966" class="name">闲对</td> 
						        <td id="play_odds_119966" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_119966" class="amount"><input type="text" /></td> 									
						       </tr> 
						      </tbody> 
						     </table> 
						     	<!-- 前三中三后三 -->
	<table class="u-table2 play_tab_7" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">百家乐(大小单双)</th> 
       </tr> 
      </thead> 
      <tbody> 
      <tr> 
		<td id="play_name_119967" class="name">庄大</td> 
		<td id="play_odds_119967" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119967" class="amount"><input type="text" /></td> 
		<td id="play_name_119968" class="name">庄小</td> 
		<td id="play_odds_119968" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119968" class="amount"><input type="text" /></td> 
		<td id="play_name_119969" class="name">庄单</td> 
		<td id="play_odds_119969" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119969" class="amount"><input type="text" /></td> 
		<td id="play_name_119970" class="name">庄双</td> 
		<td id="play_odds_119970" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119970" class="amount"><input type="text" /></td> 								
	   </tr> 
      <tr> 
		<td id="play_name_119973" class="name">闲大</td> 
		<td id="play_odds_119973" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119973" class="amount"><input type="text" /></td> 
		<td id="play_name_119974" class="name">闲小</td> 
		<td id="play_odds_119974" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119974" class="amount"><input type="text" /></td> 
		<td id="play_name_119975" class="name">闲单</td> 
		<td id="play_odds_119975" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119975" class="amount"><input type="text" /></td> 
		<td id="play_name_119976" class="name">闲双</td> 
		<td id="play_odds_119976" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119976" class="amount"><input type="text" /></td> 								
	   </tr> 	   
      </tbody> 
     </table> 
	 
	 
     <table class="u-table2 play_tab_8" style="margin-top: 10px;"> 
      <thead> 
       <tr> 
        <th colspan="15">百家乐(质合)</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_119971" class="name">庄质</td> 
        <td id="play_odds_119971" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_119971" class="amount"><input type="text" /></td> 
        
        <td id="play_name_119972" class="name">庄合</td> 
        <td id="play_odds_119972" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_119972" class="amount"><input type="text" /></td> 
        
        <td id="play_name_119977" class="name">闲质</td> 
        <td id="play_odds_119977" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_119977" class="amount"><input type="text" /></td> 
        
        <td id="play_name_119978" class="name">闲合</td> 
        <td id="play_odds_119978" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_119978" class="amount"><input type="text" /></td> 
        
       </tr> 
      </tbody> 
     </table> 
	 
	 
	 
	<!--table class="u-table2 play_tab_7" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">斗牛</th> 
       </tr> 
      </thead> 
      <tbody> 
      <tr> 
		<td id="play_name_119979" class="name">牛1</td> 
		<td id="play_odds_119979" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119979" class="amount"><input type="text" /></td> 
		<td id="play_name_119980" class="name">牛2</td> 
		<td id="play_odds_119980" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119980" class="amount"><input type="text" /></td> 
		<td id="play_name_119981" class="name">牛3</td> 
		<td id="play_odds_119981" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119981" class="amount"><input type="text" /></td> 
		<td id="play_name_119982" class="name">牛4</td> 
		<td id="play_odds_119982" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119982" class="amount"><input type="text" /></td> 								
	   </tr> 
      <tr> 
		<td id="play_name_119983" class="name">牛5</td> 
		<td id="play_odds_119983" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119983" class="amount"><input type="text" /></td> 
		<td id="play_name_119984" class="name">牛6</td> 
		<td id="play_odds_119984" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119984" class="amount"><input type="text" /></td> 
		<td id="play_name_119985" class="name">牛7</td> 
		<td id="play_odds_119985" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119985" class="amount"><input type="text" /></td> 
		<td id="play_name_119986" class="name">牛8</td> 
		<td id="play_odds_119986" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119986" class="amount"><input type="text" /></td> 								
	   </tr> 
      <tr> 
		<td id="play_name_119987" class="name">牛9</td> 
		<td id="play_odds_119987" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119987" class="amount"><input type="text" /></td> 
		<td id="play_name_119988" class="name">牛牛</td> 
		<td id="play_odds_119988" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119988" class="amount"><input type="text" /></td> 
		<td id="play_name_119989" class="name">没牛</td> 
		<td id="play_odds_119989" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119989" class="amount"><input type="text" /></td> 
		
		<td class="name not-event" colspan="3"></td>		
	   </tr>	   
      </tbody> 
     </table> 
	 
	 
     <table class="u-table2 play_tab_8" style="margin-top: 10px;"> 
      <thead> 
       <tr> 
        <th colspan="15">斗牛(大小单双)</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_119990" class="name">牛大</td> 
        <td id="play_odds_119990" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_119990" class="amount"><input type="text" /></td> 
        
        <td id="play_name_119991" class="name">牛小</td> 
        <td id="play_odds_119991" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_119991" class="amount"><input type="text" /></td> 
        
        <td id="play_name_119992" class="name">牛单</td> 
        <td id="play_odds_119992" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_119992" class="amount"><input type="text" /></td> 
        
        <td id="play_name_119993" class="name">牛双</td> 
        <td id="play_odds_119993" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_119993" class="amount"><input type="text" /></td> 
        
       </tr> 
      </tbody> 
     </table> 	 
	 


	<table class="u-table2 play_tab_7" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">德州扑克</th> 
       </tr> 
      </thead> 
      <tbody> 
      <tr> 
		<td id="play_name_119994" class="name">豹子</td> 
		<td id="play_odds_119994" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119994" class="amount"><input type="text" /></td> 
		<td id="play_name_119995" class="name">四张</td> 
		<td id="play_odds_119995" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119995" class="amount"><input type="text" /></td> 
		<td id="play_name_119996" class="name">葫芦</td> 
		<td id="play_odds_119996" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119996" class="amount"><input type="text" /></td> 
		<td id="play_name_119997" class="name">顺子</td> 
		<td id="play_odds_119997" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119997" class="amount"><input type="text" /></td> 								
	   </tr> 
      <tr> 
		<td id="play_name_119998" class="name">五离</td> 
		<td id="play_odds_119998" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119998" class="amount"><input type="text" /></td> 
		<td id="play_name_119999" class="name">三张</td> 
		<td id="play_odds_119999" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_119999" class="amount"><input type="text" /></td> 
		<td id="play_name_1191000" class="name">两对</td> 
		<td id="play_odds_1191000" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191000" class="amount"><input type="text" /></td> 
		<td id="play_name_1191001" class="name">一对</td> 
		<td id="play_odds_1191001" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191001" class="amount"><input type="text" /></td> 								
	   </tr> 
      <tr> 
		<td id="play_name_1191002" class="name">杂牌</td> 
		<td id="play_odds_1191002" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191002" class="amount"><input type="text" /></td> 
		<td class="name not-event" colspan="3"></td>	
		<td class="name not-event" colspan="3"></td>
		<td class="name not-event" colspan="3"></td>		
	   </tr>	   
      </tbody> 
     </table> 	 



	<table class="u-table2 play_tab_7" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">三公</th> 
       </tr> 
      </thead> 
      <tbody> 
      <tr> 
		<td id="play_name_1191003" class="name">左闲</td> 
		<td id="play_odds_1191003" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191003" class="amount"><input type="text" /></td> 
		<td id="play_name_1191004" class="name">右闲</td> 
		<td id="play_odds_1191004" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191004" class="amount"><input type="text" /></td> 
		<td id="play_name_1191005" class="name">和局</td> 
		<td id="play_odds_1191005" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191005" class="amount"><input type="text" /></td> 							
	   </tr> 
      </tbody> 
     </table> 	


	<table class="u-table2 play_tab_7" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">三公(大小单双)</th> 
       </tr> 
      </thead> 
      <tbody> 
      <tr> 
		<td id="play_name_1191006" class="name">左闲尾大</td> 
		<td id="play_odds_1191006" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191006" class="amount"><input type="text" /></td> 
		<td id="play_name_1191007" class="name">左闲尾小</td> 
		<td id="play_odds_1191007" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191007" class="amount"><input type="text" /></td> 
		<td id="play_name_1191008" class="name">左闲尾单</td> 
		<td id="play_odds_1191008" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191008" class="amount"><input type="text" /></td> 
		<td id="play_name_1191009" class="name">左闲尾双</td> 
		<td id="play_odds_1191009" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191009" class="amount"><input type="text" /></td> 								
	   </tr> 
      <tr> 
		<td id="play_name_1191012" class="name">右闲尾大</td> 
		<td id="play_odds_1191012" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191012" class="amount"><input type="text" /></td> 
		<td id="play_name_1191013" class="name">右闲尾小</td> 
		<td id="play_odds_1191013" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191013" class="amount"><input type="text" /></td> 
		<td id="play_name_1191014" class="name">右闲尾单</td> 
		<td id="play_odds_1191014" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191014" class="amount"><input type="text" /></td> 
		<td id="play_name_1191015" class="name">右闲尾双</td> 
		<td id="play_odds_1191015" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191015" class="amount"><input type="text" /></td> 								
	   </tr> 	   
      </tbody> 
     </table> 		 
  
	<table class="u-table2 play_tab_7" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">三公(质合)</th> 
       </tr> 
      </thead> 
      <tbody> 
      <tr> 
		<td id="play_name_1191010" class="name">左闲尾质</td> 
		<td id="play_odds_1191010" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191010" class="amount"><input type="text" /></td> 
		<td id="play_name_1191011" class="name">左闲尾合</td> 
		<td id="play_odds_1191011" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191011" class="amount"><input type="text" /></td> 								
	   </tr> 
      <tr> 
		<td id="play_name_1191016" class="name">右闲尾质</td> 
		<td id="play_odds_1191016" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191016" class="amount"><input type="text" /></td> 
		<td id="play_name_1191017" class="name">右闲尾合</td> 
		<td id="play_odds_1191017" class="odds"><span class="c-txt3">--</span></td> 
		<td id="play_text_1191017" class="amount"><input type="text" /></td> 								
	   </tr> 	   
      </tbody> 
     </table--> 
  
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
var cate_id=parent.$("#cate_menus_119 .selected").attr("cate_id");
$(".play_tab_"+cate_id).show();
</script>  
</body>
</html>