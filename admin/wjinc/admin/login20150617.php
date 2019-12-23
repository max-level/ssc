<!doctype html>
<html>

<head>
<meta NAME="robots" CONTENT="noindex,nofollow">
<meta name="robots" content="noarchive"> <!-- 屏蔽-->
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta charset="utf-8"/>
<title>利景后台管理员登陆</title>
<!--link rel="stylesheet" href="/skin/admin/layout.css" type="text/css" /-->


<script type="text/javascript" src="/skin/js/jquery-1.8.0.min.js"></script>
<script src="/skin/admin/onload.js"></script>
<script src="/skin/js/html5.js"></script>




<script src="/assets/js/jquery-1.8.1.min.js"></script>
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/login.css" rel="stylesheet" type="text/css" />




<script>
function checkLogin(){
	if(!this.username.value) throw('用户名不能为空');
	if(!this.vcode.value) throw('验证码不能为空');
}

function doLogin(err, data){
	if(err){
		alert(err);
		$('#imgcode').click();
		return false;
	}else{
		location='\x2f\x61\x64\x6d\x69\x6e\x37\x37\x38\x38\x39\x39\x2e\x70\x68\x70\x2f\x75\x73\x65\x72\x2f\x6c\x6f\x67\x69\x6e\x65\x64';
	}
}


//window.attachEvent("onload", correctPNG);
</script>

</head>


<body class="center">
<form id="login" target="ajax" onajax="checkLogin" call="doLogin" action="/admin778899.php/user/checkLogined" method="post" >
 <div aria-hidden="false" aria-labelledby="login-label" role="dialog" tabindex="-1" class="fade in" id="login-modal" style="display: block;outline: 0;">
<div class="modal-dialog">
<div class="modal-content">
<form  method="post" id="id_login_form" name="loginForm" action="?act=user_login" onsubmit="return loginin()">
<div class="modal-header">

 <h4 id="login-label" class="modal-title">利景后台管理系统</h4>
</div>

<div class="modal-body">
<div class="input-group input-group-lg">
<input type="text" data-name="userName" placeholder="登录账号" class="form-control" name="username" id="login-username" >
<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>					
</div>



<p id="login-password-error" class="error"></p>
<div class="input-group input-group-lg">
<input type="text" data-name="captcha" placeholder="验证码" class="form-control" maxlength="4" name="vcode" id="login-captcha">
<a id="ref-img" href="javascript:void(0)" class="input-group-addon input-captcha" style="padding: 6px 16px;">
<img id="imgcode" align="absmiddle"  onClick="this.src='/admin778899.php/user/vcode/'+(new Date()).getTime()" title="看不清楚，换一张图片" src="/admin778899.php/user/vcode/<?=$this->time?>" width="110" height="32" alt="看不清，点击刷新">
                                     
</a>
</div>	

<p id="login-captcha-error" class="error"></p>

<div class="checkbox">

</div>

<input type="submit" id="submit" class="btn btn-primary btn-lg btn-block"id="login-button" value="进入系统">

</div>
</form>

</div>
</div>	
</div>

<div style="bottom:10px;"><table width="700" align="center" ><tr><td align="center" height="100" valign="bottom"><font style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:red;">*推荐使用ie9或以上版本ie浏览器或Chrome内核浏览器访问本系统</font></td></tr></table></div>
</body>
</html>

