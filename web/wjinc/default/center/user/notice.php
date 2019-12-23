<?php $this->freshSession(); 
		//更新级别
		$ngrade=$this->getValue("select max(level) from {$this->prename}member_level where minScore <= {$this->user['scoreTotal']}");
		if($ngrade>$this->user['grade']){
			$sql="update ssc_members set grade={$ngrade} where uid=?";
			$this->update($sql, $this->user['uid']);
		}else{$ngrade=$this->user['grade'];}
		
		$date=strtotime('00:00:00');
?>		
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/skin/css/user.css">
<script type="text/javascript" src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" ></script>
<script type="text/javascript" src="/static/js/skin.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>


<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/skin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/skin/main/function.js"></script>
<script type="text/javascript" src="/skin/main/onload.js"></script>


<script type="text/javascript" src="/skin/layer/layer.js"></script>
</head>
<body id="bodyid" class="">

<div class="bannercontainer">
	<div class="banner">
		<div class="avatar"></div>
		<div class="text1">
			<script language="javaScript">
				now = new Date(), hour = now.getHours()
				if (hour < 6) {
					document.write("凌晨好")
				} else if (hour < 9) {
					document.write("早上好")
				} else if (hour < 12) {
					document.write("上午好")
				} else if (hour < 14) {
					document.write("中午好")
				} else if (hour < 17) {
					document.write("下午好")
				} else if (hour < 19) {
					document.write("傍晚好")
				} else if (hour < 22) {
					document.write("晚上好")
				} else {
					document.write("夜里好")
				}
				$(function() {
				//设置当前页菜单默认值
				var curLocation = location.href.split("/");
				var curPageName = curLocation.slice(curLocation.length-1, curLocation.length).toString(String).split(".").slice(0, 1).toString(String).toLowerCase().split("?")[0];
				var webMenu = $(".subnavigation2 div");
				switch(curPageName){
					case "":	  		webMenu.eq(0).addClass("subitmactive");webMenu.eq(5).addClass("arrow1a");break;
					case "index":	  	webMenu.eq(0).addClass("subitmactive");webMenu.eq(5).addClass("arrow1a");break;
					case "address":		webMenu.eq(1).addClass("subitmactive");webMenu.eq(5).addClass("arrow2a");break;
					case "transfer":	webMenu.eq(2).addClass("subitmactive");webMenu.eq(5).addClass("arrow3a");break;
					case "notices":		webMenu.eq(3).addClass("subitmactive");webMenu.eq(5).addClass("arrow4a");break;
					case "feedback":	webMenu.eq(4).addClass("subitmactive");webMenu.eq(5).addClass("arrow5a");break;
				}
				})
			</script>
			，<?php $this->display('center/center.php');?>
		<div class="subnavigation2">
			<a href="/center/user/notice.html"><div class="subitm2 subitmactive">安全设置</div></a>
			<a href="/center/user/loginpwd.html"><div class="subitm2">登入密码</div></a>
			<a href="/center/user/fundpwd.html"><div class="subitm2">提款密码</div></a>
			<a href="/box/receive"><div class="subitm2">消息中心</div></a>
			<div class="arrow1a arrow arrow1"></div>
		</div>
	</div>
</div>	
<form action="/user/personal" method="post" target="ajax" onajax="safeBefornickname" call="safeSetnickname">
	<div class="rightpanel rw" id="withdrawal2">
		<div class="contentcontainer">
		
		
			<div class="maincol innerline" <?=$this->user['name']?"style='display:none'":''?>>
				<div class="row pagetitle">
					<span class="bluepagetitle">个人资料</span>  绑定真实姓名可提高帐号的安全性 
				</div>
				<div class="row">
					<div class="col1">姓名 :</div>
					<div class="col2a">
						<input type="text" name="name" id="name" class="textbox2 ml5"> 
					</div>
				</div>
				<div class="row">
					<div class="col1">性别 :</div>
					<div class="col2a">
						<select name="sex" id="sex" class="ml5">
							<option value="1">男</option>
							<option value="2">女</option>
						</select> 
					</div>
				</div>
				<div class="row">
					<div class="col1">出生年月 :</div>
					<div class="col2a">
						<div class="textcontainer">
							<input type="text" id="Birth"  name="Birth" class="textbox2 laydate-icon ml5" value="" onClick="WdatePicker()">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col1">&nbsp;</div>
					<div class="col2a">
						<button class="btnsubmit ml5" type="submit">保存</button>
					</div>
				</div>
			</div>
	
			
			<div class="maincol innerline" <?=!$this->user['name']?"style='display:none'":''?>>
				<div class="row pagetitle">
					<span class="bluepagetitle">个人资料</span>  提款时只能用真实姓名，绑定后无法修改哦 
				</div>
				<div class="row">
					<div class="col1">姓名 :</div>
					<div class="col2a">
						<div class="col_text"><?=substr($this->user['name'] ,0,3).'**'?></div>
					</div>
				</div>
				<div class="row">
					<div class="col1">性别 :</div>
					<div class="col2a">
						<div class="col_text"><?=(int)$this->user['sex']==1?'男':'女'?></div>
						
					</div>
				</div>
				<div class="row">
					<div class="col1">出生年月 :</div>
					<div class="col2a">
						<div class="textcontainer">
							<div class="col_text"><?=$this->user['birth']?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col1">&nbsp;</div>
					<div class="col2a">
					</div>
				</div>
			</div>
			
			
			
			
			
			
		</div>
	</div>
</form>

<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>

</body>
</html>
