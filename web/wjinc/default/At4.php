<?php
if(!$this->user['type']){
	echo '您无权访问此页面';
	exit;
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta NAME="robots" CONTENT="noindex,nofollow">
<meta name="robots" content="noarchive">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href='/skin/main/bl_ococ.css' rel="stylesheet" type="text/css" />

<!--new-->

<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>

<script type="text/javascript" src="/skin/main/function.js?version=20160420"></script>
<script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>

<script type="text/javascript" src="/skin/layer/layer.js"></script>

<link href="/skin/layui/layui.css" rel="stylesheet">
<script type="text/javascript" src="/skin/layui/layui.js"></script>


<link href="/skin/riqi/jquery.datetimepicker.css" rel="stylesheet">
<script type="text/javascript" src="/skin/riqi/jquery.datetimepicker.js"></script>
<!-- Data Tables -->
<link href="/skin/Tables/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="/skin/Tables/css/font-awesome.css?v=4.4.0" rel="stylesheet">	
<link href="/skin/Tables/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="/skin/Tables/css/style.css?v=4.1.0" rel="stylesheet">
<script src="/skin/Tables/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/skin/Tables/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<!-- Data Tables -->
<script src="/skin/SweetAlert/sweetalert.min.js"></script>
<link href="/skin/SweetAlert/sweetalert.css" type="text/css" rel="stylesheet" />
<style type="text/css">
#dailinav {
	width: 916px;
	margin-top: 10px;
	margin-bottom:3px;
	padding: 5px 5px 5px 5px;
}
#dailinav li {
	padding: 5px;
	display: inline;
	list-style-type: none;
	background: #3682d0;
}
#dailinav li a{
	color:#fff;
	font-size:14px;
}
</style>
</head>
<body>

<link rel="stylesheet" href="/skin/team/button.min.css" />
<div id="dailinav" style="font-weight: normal;">
<div class="svg-wrapper">
  <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
	<rect id="shape" height="40" width="100" />
	<div id="text">
	  <a href="/team/memberList"><span class="spot"></span>会员管理</a>
	</div>
  </svg>
</div>
<div class="svg-wrapper">
  <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
	<rect id="shape" height="40" width="100" />
	<div id="text">
	  <a href="/team/onlineMember"><span class="spot"></span>在线会员</a>
	</div>
  </svg>
</div>
<div class="svg-wrapper">
  <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
	<rect id="shape" height="40" width="100" />
	<div id="text">
	  <a href="/team/gameRecord"><span class="spot"></span>团队记录</a>
	</div>
  </svg>
</div>
<div class="svg-wrapper">
  <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
	<rect id="shape" height="40" width="100" />
	<div id="text">
	  <a href="/team/report"><span class="spot"></span>团队盈亏</a>
	</div>
  </svg>
</div>
<div class="svg-wrapper">
  <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
	<rect id="shape" height="40" width="100" />
	<div id="text">
	  <a href="/team/coin"><span class="spot"></span>团队帐变</a>
	</div>
  </svg>
</div>
<div class="svg-wrapper">
  <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
	<rect id="shape" height="40" width="100" />
	<div id="text">
	  <a href="/team/cashRecord"><span class="spot"></span>团队提现</a>
	</div>
  </svg>
</div>
<div class="svg-wrapper">
  <svg height="40" width="100" xmlns="http://www.w3.org/2000/svg">
	<rect id="shape" height="40" width="100" />
	<div id="text">
	  <a href="/team/linkList"><span class="spot"></span>推广链接</a>
	</div>
  </svg>
</div>

</div>
