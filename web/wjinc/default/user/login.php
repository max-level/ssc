<?php
header('location: /');
exit;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<script type="text/javascript" src="https://users.js.51.sn.cn/19770267.js"></script>
<meta NAME="robots" CONTENT="noindex,nofollow">
<meta name="robots" content="noarchive">
<title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
<script type="text/javascript">
function browserRedirect() {
    var sUserAgent = navigator.userAgent.toLowerCase();
    //var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if (( bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) )
	{
		//window.location.href="";  //
	}
}
//browserRedirect();
</script>
<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/skin/main/onload.js"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<script type="text/javascript" src="/skin/js/guest.js"></script>
<link rel="stylesheet" href="/css/nw_style.css"  type="text/css" />
</head>
<body class="login_bgsrcoll">
<form action="/user/loginedto" method="post" onajax="userBeforeLoginto" enter="true" call="userLoginto" target="ajax">
	<div class="login_masklayer">		
	<div class="login_logo"></div>
       <div class="login">
		<div class="login_logoform">
        	<div class="logoform" style="">
      		 <div style="font-size:24px; font-weight:bold; color: #bd8f06;height: 50px;line-height: 50px;"><img src="/images/login2.png" width="36px" style="position: relative;top: 7px;"><span>会员登陆</span></div>
                <li>
                <label class="label_icon01">
                <div style="display:inline;">用</div>
                <div style="display:inline; margin-left:3px;">户</div>
                <div style="display:inline; margin-left:3px;">名</div><span>|</span>
                </label>
                <input name="username" id="username" type="text" value="" class="txt01"/></li>
                <li>
                <label class="label_icon01">
                <div style="display:inline;">密</div>
                <div style="display:inline; margin-left:24px;">码</div><span>|</span>
                </label>
                <input name="password" id="password" type="password" value="" class="txt01"/></li>
				  <li style="width:165px; display: inline-block;">
					<div class="yzm_div">
					  <label class="label_icon01">
					  <div style="display:inline;">验</div>
					  <div style="display:inline; margin-left:3px;">证</div>
					  <div style="display:inline; margin-left:3px;">码</div><span>|</span>
					  </label>
					  <input name="vcode" id="vcode" type="text" value="" class="txt01"/>
					</div>
				  </li>
				<div class="yzm"><img style="cursor:pointer;margin-bottom:0px;" alt="验证码" align="absmiddle" src="/user/vcode/<?=$this->time?>" title="看不清楚，点我换图" onclick="this.src='/user/vcode/'+(new Date()).getTime()"/></div>
				<li class="nbr"><a href="javascript:void(0);" onclick="$(this).closest('form').submit()" class="login_btn">登 录</a></li>
              <li class="nbr"><a href="/user/register/" class="login_btn">会员注册</a></li>
              <li class="nbr"><a href="javascript:void(0);" onclick="guestLogin();" class="login_btn">免费试玩</a></li>
            </div>
        </div>
       </div>
    </div>
</form>
</body>
</html>