
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

<script type="text/javascript" src="/static/lib/util/httpUtil.js"></script>
<script type="text/javascript" src="/static/js/lottery/history.js"></script>
<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/moment.min.js"></script>
<script type="text/javascript">
function initGameSelect(obj){
	var optionFormatStr='<option value="{gameId}">{gameName}</option>';
	var optionStr="";
	for(var g in games){
		var game=games[g];
		if(game.open==0){
			optionStr+=optionFormatStr.format({
				"gameId":game.id,
				"gameName":game.name
			});
		}
	}
	$(obj).html(optionStr);
}
</script>
  <div id="subpage" class="cp-box2" style="width: 1200px"> 
<div class="zhlzbox margt20" style="margin-bottom: -30px;">
	<div class="listhead">
		<div class="listheadl">
			<span class="lmms">开奖记录</span>
		</div>
		<div class="listheadr">
		
		<div class="listheadrr">
			<div class="rightime">
				<input id="historyQueryParamOpenTime" onClick="WdatePicker({onpicking:function(dp){History.getHistoryData('',dp.cal.getNewDateStr())}})" onchange="">
			</div>
			<div>选择日期&nbsp;</div>
			
		</div>
	
		<div class="listheadrl">
			彩种选择&nbsp;
			<select id="historyQueryParamGameId" onchange="historyDateChange()">	
		
			 </select>
		</div>
	</div>
	</div>
</div>
 <script type="text/javascript">
 	initGameSelect("#historyQueryParamGameId");
 	function historyDateChange(){
 		var date=$('#historyQueryParamOpenTime').val();
 		var gameId=$("#historyQueryParamGameId").val();
 		parent.History.loadPage(gameId,  date);
 	}
 </script>
	<div class="jrsmhmtj" id="history_table">
	   <table cellpadding="1" cellspacing="1" border="0">
		  <thead> 
			  <tr>
				<th width="136">期数</th>
				<th>开奖时间</th>
				<th colspan="10">开奖号码</span></th>
				<th colspan="3">冠亚军和</th> 
				<th colspan="5">1~5龙虎</th> 
			  </tr>
		  </thead> 
		  <tbody>
		   
		  </tbody> 
		 </table> 
	</div>
  </div>
  <script type="text/javascript">
    var date=HttpUtil.GetUrlPara()["date"];
  	History.getHistoryData(51,date);
  </script>
 </body>
</html>