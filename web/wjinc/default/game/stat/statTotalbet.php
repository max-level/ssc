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
<script type="text/javascript" src="/static/lib/util/error.js" async="async"></script>
<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>

<div id="statBet_tables" class="cp-box2" style="width: 800px"> 
	<div class="zhlzbob zhlzbox margt20" style="margin-bottom: -30px;">
		<div class="listhead">
			<div class="listheadl">
				<span class="kaijiltit_History">历史报表</span>
			</div>
			<div class="listheade listheadr">
				<div class="listheadrl">
					<span class="checked" onclick="history.go(-1)">返回</span>
				</div>
			</div>
		</div>
	</div>
 	<div class="jrsmhmtj" id="preWeekTable">
		<table cellpadding="1" cellspacing="1" border="0">
			<thead> 
				<tr>
					<th>游戏</th>
					<th>注数</th>
					<th>下注金额</th>
					<th>返水</th>
					<th>盈亏</th>
					<th>查看注单</th>
				</tr>
			</thead> 
		<tbody>

		</tbody> 
		</table> 
	</div>	
</div>  
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript" src="/static/lib/util/dateUtil.js"></script>
<script type="text/javascript" src="/static/js/lottery/statBet.js"></script>
<script type="text/javascript" src="/static/lib/moment.min.js"></script>
<script type="text/javascript" src="/static/lib/util/httpUtil.js"></script>
<script type="text/javascript">
	var d1 = moment().add(-7, 'days');
	var d2 = moment();
	$("#startDate").val(d1.format('YYYY-MM-DD'));
	$("#endDate").val(d2.format('YYYY-MM-DD'));
	StatTotalBet.query()
</script>
</body>
</html>
