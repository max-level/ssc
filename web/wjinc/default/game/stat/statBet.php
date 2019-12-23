
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
<script type="text/javascript" src="/static/lib/util/error.js" async></script>
<script type="text/javascript" src="/static/lib/util/httpUtil.js"></script>
<script type="text/javascript" src="/static/js/lottery/history.js"></script>
<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/moment.min.js"></script>  

<div id="statBet_tables" class="cp-box2" style="width: 800px"> 
	<div class="zhlzbob zhlzbox margt20" style="margin-bottom: -30px;">
		<div class="listhead">
			<div class="listheadl">
				<span class="kaijiltit_History">历史报表</span>
			</div>
			<div class="listheade listheadr">
				<div class="listheadrr">
					<div class="listheadrl">
						<span class="checked" onclick="StatBet.query()">查询</span>
					</div>
					<div class="rightime">
						<div id="dateframe" style="padding-right: 10px;">
							<input id="startDate" class="Wdate" onClick="WdatePicker()" >
							至
							<script type="text/javascript">
								var d1 = moment().add(-7, 'days');
								var d2 = moment();
								var maxWdate=d2.format('YYYY-MM-DD');
							</script>
							<input id="endDate" class="Wdate" onClick="WdatePicker()" onfocus="WdatePicker({maxDate:maxWdate})">
						</div>
					</div>
				<div>选择日期&nbsp;</div>
				</div>
			</div>
		</div>
	</div>
 	<div class="jrsmhmtj" id="preWeekTable">
		<table cellpadding="1" cellspacing="1" border="0">
			<thead> 
				<tr>
					<th >日期</th>
					<th >注数</th>
					<th >下注金额</th>
					<th >退水</th>
					<th >盈亏</th>
					<th >查看注单</th>
				</tr>
			</thead> 
			<tbody>
			</tbody> 
		</table> 
		<div id="listPage" class="megas512"></div>
	</div>	
</div>  
<link rel="stylesheet" href="/static/lib/jquery/page/pagination.css"/>
<script type="text/javascript" src="/static/lib/jquery/page/jquery.pagination.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript" src="/static/lib/util/dateUtil.js"></script>
<script type="text/javascript" src="/static/js/lottery/statBet.js"></script>  
<script type="text/javascript">
	$("#startDate").val(d1.format('YYYY-MM-DD'));
	$("#endDate").val(d2.format('YYYY-MM-DD'));
	StatBet.query()
</script>
 </body>
 </html>