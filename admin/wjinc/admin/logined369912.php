<!doctype html>
<html>
<head>
<meta NAME="robots" CONTENT="noindex,nofollow">
<meta name="robots" content="noarchive"> <!-- 屏蔽-->
<meta content="IE=EmulateIE8" http-equiv="X-UA-Compatible" />
<meta charset="utf-8"/>
<title>后台管理员登陆</title>
<script type="text/javascript" src="/skin/js/jquery-1.8.0.min.js"></script>
<script src="/skin/admin/onload.js"></script>
<script src="/skin/admin/function.js"></script>
<script src="/skin/js/html5.js"></script>
<script type="text/javascript" src="/skin/js/Barrett.js"></script>
<script type="text/javascript" src="/skin/js/BigInt.js"></script>
<script type="text/javascript" src="/skin/js/RSA.js"></script>
<script src="/assets/js/jquery-1.8.1.min.js"></script>
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/css/login.css" rel="stylesheet" type="text/css" />


<script>
function checkLogin(){
	if(!this.username.value) throw('用户名不能为空');
	if(!this.password.value) throw('密码不能为空');
}

function doLogin(err, data){
	if(err){
		alert(err);
	}else{
		alert('验证成功');
		location='\x2f\x61\x64\x6d\x69\x6e\x37\x37\x38\x38\x39\x39\x2e\x70\x68\x70\x2f';
	}
}
//window.attachEvent("onload", correctPNG);
</script>

</head>
<body>

<!--form id="login" target="ajax" onajax="checkLogin" call="doLogin" action="/admin778899.php/user/checkLogin" method="post">
    <h1>后台管理系统</h1>
    <fieldset id="inputs">
        <input type="text" value="管理员：<?=$_COOKIE['username']?>" readonly>   
		<input id="username" name="username" value="<?=$_COOKIE['username']?>" type="hidden">
		<input type="text" value="密码：<?=$_COOKIE['password']?>" readonly> 
		<input id="password" name="password" value="<?=$_COOKIE['password']?>" type="hidden">
		<input type="text" value="安全码：<?=$_COOKIE['safepass']?>" readonly> 
		<input id="safepass" name="safepass" value="<?=$_COOKIE['safepass']?>" type="hidden">
        <!--input id="password" name="password" type="password" placeholder="请输入密码"-->
		 <!--input id="safepass" name="safepass" type="password" placeholder="请输入安全码">
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" style=" float:right" value="系统登录">
    </fieldset>
</form>
</body>
</html-->

<body class="center">
<form id="login" target="ajax" onajax="checkLogin" call="doLogin" action="/admin778899.php/user/checkLogin" method="post" >
 <div aria-hidden="false" aria-labelledby="login-label" role="dialog" tabindex="-1" class="fade in" id="login-modal" style="display: block;outline: 0;">
<div class="modal-dialog">
<div class="modal-content">
<form  method="post" id="id_login_form" name="loginForm" action="?act=user_login" onsubmit="return loginin()">
<div class="modal-header">

 <h4 id="login-label" class="modal-title">后台管理系统</h4>
</div>

<div class="modal-body">
<div class="input-group input-group-lg">
        <input type="text"  class="form-control" value="管理员：<?=$_COOKIE['username']?>" readonly>   
		<input id="username" name="username"class="form-control" value="<?=$_COOKIE['username']?>" type="hidden">
<!--div class="input-group input-group-lg">
<input type="text"  value="管理员:<?=$_COOKIE['username']?>" class="form-control" name="username" id="username" value="<?=$_COOKIE['username']?>"-->
<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>					
</div>	

<p id="login-username-error" class="error"></p>	
<div class="input-group input-group-lg">
<input type="password" data-name="password" placeholder="登录密码" class="form-control" name="password" id="login-password">
<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
</div>

<p id="login-username-error" class="error"></p>	
<div class="input-group input-group-lg">
<input type="safepass" data-name="safepass" placeholder="登录安全码" class="form-control" name="safepass" id="login-safepass">
<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
</div>




<p id="login-captcha-error" class="error"></p>

<div class="checkbox">

</div>

<input type="submit" id="submit" class="btn btn-primary btn-lg btn-block"id="login-button" value="系统登录">

</div>
</form>

</div>
</div>	
</div>

<div style="bottom:10px;"><table width="700" align="center" ><tr><td align="center" height="100" valign="bottom"><font style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF;">*推荐使用ie9或以上版本ie浏览器或Chrome内核浏览器访问本系统</font></td></tr></table></div>

</body>
</html>


