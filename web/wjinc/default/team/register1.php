<?php if($this->user['uid']){	
header('location: /');
exit;
 } ?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?= $this->settings['webName'] ?></title>

<!--link rel="stylesheet" type="text/css" href="/skin/home/css/base.css">
<link rel="stylesheet" type="text/css" href="/skin/home/css/index.css">
<link rel="stylesheet" type="text/css" href="/skin/home/css/index-enroll.css"-->

<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/skin/main/onload.js"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<script src="/skin/home/js/index.js"></script>

<script src="/skin/SweetAlert/sweetalert.min.js"></script>
<link href="/skin/SweetAlert/sweetalert.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <title> <?=$this->settings['webName']?></title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <link rel="stylesheet" href="/css/core.css">
    <script type="text/javascript"> 
    var url = '/api/checkwh.do?t='+Math.random();
    document.write("<script type='text/javascript' src='"+url+"'><\/script>");
    document.close();
</script>
</head>

<body>
    <!-- header -->
<div class="header">
    <div class="inner clearfix">
        <div class="logo fl">
            <a href="#" target="_blank"><img src="/img/logo.png" width="220" alt="" /></a>
        </div>
        <ul class="nav fr" id="nav">
             <li><a href="/">网站首页</a></li>
            <li><a href="reg">开户注册</a></li>
            <li><a href="at1">优惠活动</a><span class="hot"><img src="img/hot.png" alt="" /></span></li>
            <li><a href="at2">存款取款</a></li>
            <li><a href="at2">常见问题</a></li>
            <li><a href="javascript:BBOnlineService();">在线客服</a></li>
            <li><a href="/">加盟合作</a></li>
			<li><a href="/">代理登录</a></li>
        </ul>
    </div>
</div>
<!-- header end-->

    <div class="banner">
        <div class="inner">
            <img src="/img/ban2.jpg" alt="" />
        </div>
    </div>
    <div class="regbox">
        <div class="inner">
            <div class="step">
                <ul class="clearfix">
                    <li class="cur z2"><em>01</em>设置账户及登录密码
                        <div class="yd"></div>
                    </li>
                    <li class="z1"><em>02</em>注册成功
                        <div class="yd"></div>
                    </li>
                    <li><em>03</em>登陆网站</li>
                </ul>
            </div>
			
			<div class="regtb">
			    <form action="/index.php/user/registered" method="post" onajax="registerBeforSubmit" enter="true" call="registerSubmit" target="ajax">
				<input type="hidden" name="parentId" value="<?=$args[0]?>" />
	             <input type="hidden" name="lid" value="<?=$linkData['lid']?>"  />
                
                    <ul>
                         <li>
                            <div class="typename">登录账号:</div>
                            <div class="ipt">
							<input name="username" type="text" size="40" id="username" maxlength="15"/>
                              
                            </div>
                            <div class="hint">* 帐户名由6-15个字符组成</div>
                        </li>
                        <li>
                            <div class="typename">登录密码:</div>
                            <div class="ipt">
							<INPUT name="password" id="password" maxLength="15" size="40" type="password"/>
                              
                            </div>
                            <div class="hint">* 6-20个字母、数字或组合组成，区分大小写</div>
                        </li>
                        <li>
                            <div class="typename">确认密码:</div>
                            <div class="ipt">
							<INPUT  maxLength="15" size="40" type="password" name="cpasswd"/>
                             
                            </div>
                            <div class="hint">* 请再次输入密码以确保输入无误</div>
                        </li>
                        <li>
                            <div class="typename">真实姓名:</div>
                            <div class="ipt">
							<INPUT id="name" size="40" maxLength="10" name="name"/>
                             
                            </div>
                            <div class="hint">* 真实姓名必须与您用于提款银行账户名称一致</div>
                        </li>
                        <li>
                            <div class="typename">取款密码:</div>
                            <div class="ipt">
							<INPUT  name="coinpwd" size="40" maxLength="10" >
                             
                            </div>
                            <div class="hint">* 取款必须认证，务必记住</div>
                        </li>
                        <li>
                       
                            <div class="typename">电子邮箱:</div>
                            <div class="ipt">
							<input name="email" type="text" size="40" maxlength="30">
							
                             
                            </div>
                            <div class="hint">* 电子邮箱(Email)格式：88888888@qq.com</div>
                       </li>
                        <li>
                            <div class="typename"></div>
                            <div class="ipt">
							<input type="submit" name="regBtn" value="注册" > 
                               
                            </div>
                            <div class="hint"><a href="/">已有账号登录</a></div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
	<div class="footer">
    ©2013-2018归  <?=$this->settings['webName']?> 版权所有All Rights Reserved.
</div>
<!-- footer end-->

    <div class="float" id="float">
    <a href="http://wpa.qq.com/msgrd?v=3&uin=591595597&site=qq&menu=yes" target="_blank"><img src="/img/float/bf.png" alt=""></a>
    <span class="close"></span>
</div>
    <link type="text/css" href="/static/lib/remodal-1.1.0/remodal.min.css" rel="stylesheet" />
<div class="remodal" data-remodal-id="modal" role="dialog" aria-describedby="modal1Desc" data-remodal-options="hashTracking: false" style="width: 250px">
    <div>
        <p id="modal1Desc" style="color: #000"></p>
        <span class="btnclose">关闭</span>
    </div>
</div>

<script src="/conf/config.js"></script>
<script src="js/home_main.min.js"></script>

    <script src="/static/lib/float.min.js"></script>
    <script src="/js/core.js"></script>
</body>

</html>		
			
			
			
			
			
<!-- header -->
<!--div class="header">
	<div class="head" style="overflow: inherit; height: 34px;">
		<div class="container">
			 <ul class="nav">
				<a href="/"><li><p>登录</p></li></a>
				<span>|</span>
				<a href="/reg"><li><p>免费开户</p></li></a>
			</ul>
		</div>
    </div>
    <div class="foot">
    <div class="container">
	   	<a href="/"><div class="logo"><img id="logoImg" src="/skin/home/img/logo-garena.png"></div></a>
        <!--ul class="nav" id="navChoose">
        	<a href="/"><li class="nav-child on"><p class="title">首页</p></li></a>
        	
            <a href="/wap"><li class="nav-child"><p class="title">手机购彩</p></li></a>
            <a href="#"><li class="nav-child"><p class="title">帮助中心</p></li></a>
            <a href="#"><li class="nav-child"><p class="title">活动专区</p></li></a>
        </ul>
    </div>
    </div>
</div>
<!-- header over -->
<!--div class="stance"></div>
<div id="J_androidPopup" class="popup-android popup" style="z-index: 99999; position: fixed; top:  50%;margin:0 auto;margin-top:-236px; left: 0;right:0px;">

        <div class="box">
            <p class="title">手机扫码安装</p>
            <p class="tips">使用微信或其他工具<em>扫描二维码</em></p>
            <p class="qrc"><img id="appBarCode" src="/skin/home/img/1.png"></p>
            <p class="tips"><span style="color: red;">温馨提醒</span>：使用微信扫一扫时，请点</p>
            <p class="tips">击右上角的按钮，选择在浏览器中打开</p>
        </div>
    <i hook="close" class="close"></i>
</div>

<div id="J_iphonePopup" class="popup-iphone popup" style="z-index: 99999; position: fixed; top: 50%;margin:0 auto;margin-top:-236px; left: 0;right:0px;">
    <div class="box">
        <p class="title">手机扫码安装</p>
        <p class="tips">使用微信或其他工具<em>扫描二维码</em></p>
        <p class="qrc"><img id="appLeBarCode" src="/skin/home/img/2.png"></p>
        <p class="tips">在打开页面后下载后<em>进行安装</em></p>
    </div>
    <div class="help">
        <p><em>温馨提示：</em>IOS9 安装会出现“未受信任的企业级开发者”，解决办法“设置——通用——描述文件——选择：Dongguan SuoCheng...——信任”。</p>
        <p><a href="#" target="_blank">点击查看图文解说</a></p>
    </div>
    <i hook="close" class="close"></i>
</div>


<div class="m-banner" style="background-image:url(/skin/home/img/banner.jpg);">
	<div class="content"><img src="/skin/home/img/banner-title.png"></div>
</div>

<div class="main"><div class="container">
	<form action="/index.php/user/registered" method="post" onajax="registerBeforSubmit" enter="true" call="registerSubmit" target="ajax">
	<input type="hidden" name="parentId" value="<?=$args[0]?>" />
	<input type="hidden" name="lid" value="<?=$linkData['lid']?>"  />
	<div class="main-content">
        <img class="bg" src="/skin/home/img/huojian.jpg" alt="">
        <div class="enroll-line error" id="regErrorMsg_line" style="display: none;">
           <div class="line-title"></div>
          <div class="line-content no"><p class="line-msg" id="regErrorMsg" style="display: none;"></p></div>
         </div>
        
         <div class="enroll-line">
            <div class="line-title">会员账号：</div>
            <div class="line-content">
            <input type="text" maxlength="15" name="username" id="username" class="inputText"></div>
        </div>
        <div class="enroll-line">
            <div class="line-title">设置密码：</div>
            <div class="line-content"><input type="password" maxlength="40" id="password" name="password" class="inputText"></div>
        </div>
        <div class="enroll-line">
            <div class="line-title">确认密码：</div>
            <div class="line-content"><input type="password" maxlength="40" name="cpasswd" class="inputText"></div>
        </div>
		<div class="enroll-line">
            <div class="line-title">QQ号码：</div>
            <div class="line-content"><input name="qq" onkeyup="(this.v=function(){this.value=this.value.replace(/[^0-9]/,'');}).call(this)" type="text" size="40" maxlength="30" class="inputText"></div>
        </div>
        <div class="enroll-line">
            <div class="line-title">验证码：</div>
            <div class="line-content"><input type="text" maxlength="4" class="inputText" name="vcode" id="vcode"><img class="code" style="width: 90px;height: 50px;" alt="验证码" title="点击更换" id="CheckCode" onclick="this.src='/user/vcode/'+(new Date()).getTime()" src="/user/vcode/<?=$this->time?>">
            </div>
        </div>
        <div class="enroll-line">
            <div class="line-title"></div>
            <div class="line-content no">
				<input type="submit" name="regBtn" class="inputButton" value="注册" > 
			</div>
        </div>
    </div>
	</form>


<!--?php $this->display('foot.php');?>
<script type="text/javascript">
var recharge_second= '3.00';
var withdraw_second= '9.00';
function showProcess(id,process_second,process_maxSecond){
		var maxSecond=parseInt(process_maxSecond),
   		    proc=parseInt(process_second),
			dirct=1,
			procing=0,
		interval=setInterval(function(e,proc){
			percent = procing/maxSecond*100; 
			percent = percent.toFixed(0);
			$(id).find(".process-ing").css("width",percent+"%");
			$(id).find(".process-second span").html(procing-1);
			if(procing>=maxSecond){
				dirct=-1;
			}
			procing+=dirct;
			if(procing<=proc&&dirct==-1)clearInterval(interval)
		},500/process_maxSecond,$(this),proc);
}
showProcess("#czdz_process",recharge_second,15);
showProcess("#txdz_process",withdraw_second,15);
</script>
</body>
</html>