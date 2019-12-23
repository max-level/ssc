
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

 <div class="cp-box1">
    <div class="jrsmhmtj">
	   <table cellpadding="1" cellspacing="1" border="0">
		  <thead> 
			  <tr>
				<th>定单号</th>
				<th>时间</th>
				<th>类型</span></th>
				<th>玩法</th> 
				<th>下注金额</th> 
				<th>退水</th> 
				<th><span id="column_desc"></span></th> 
			  </tr>
			  <tbody id="bet_list_body"></tbody> 
		  </thead> 
		  <tbody>
		   
		  </tbody> 
		 </table> 
	</div>

   <div id="listPage" class="megas512"></div>
   </div>
  </div>
  <link rel="stylesheet" href="/static/lib/jquery/page/pagination.css"/>
  <script type="text/javascript" src="/static/lib/jquery/page/jquery.pagination.js"></script>
  <script type="text/javascript" src="/static/lib/util/httpUtil.js"></script>
  <script type="text/javascript" src="/static/js/lottery/userBetBill.js"></script>
  <script type="text/javascript" src="/static/js/util/PlatCommon.js"></script>
  <script type="text/javascript">
 	 function showOtherTips(objId) {
		$(objId).next("ul").show();
	}

	function hideOtherTips(objId) {
		$(objId).next("ul").hide();
	}
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
 	initGameSelect("#betGameId");
    var date=HttpUtil.GetUrlPara()["date"]
    var urlGameId=HttpUtil.GetUrlPara()["gameId"];
    if(urlGameId){
 		$("#betGameId").val(urlGameId);
    }
    var gameId="";
    if(date){
    	$("#params_dev").show();
    	date=date.split(" ")[0];
    	gameId=$("#betGameId").val();
    }
	$("#betDate").val(date);
  	UserBetBill.getBetBills({
  		page : 1,// 当前页
		rows : 15,
		elemet : "#listPage",
		date : date,
		gameId: gameId
  	});
  </script>
 </body>
</html>