
<!DOCTYPE html>
<html>
<!--SCRIPT>alert('源码出处来自WWW.PHP85.COM！');</SCRIPT-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">


 <title><?=$this->settings['webName']?>-直营信誉平台</title>

<link type="text/css" rel="stylesheet" href="skin/css/basic.css" />
<link rel="stylesheet" type="text/css" href="/skin/home/css/index.css">
<link href="css1/css.css" rel="stylesheet">
<script type="text/javascript" src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" ></script>
<script type="text/javascript" src="/skin/main/onload.js"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<script type="text/javascript" src="/skin/js/guest.js"></script>
<script type="text/javascript" src="/skin/layer/layer.js"></script>
<script src="js1/home_main.min.js"></script>
<script src="/skin/home/js/index.js"></script>

<script src="/skin/SweetAlert/sweetalert.min.js"></script>
<link href="/skin/SweetAlert/sweetalert.css" type="text/css" rel="stylesheet">
</head>


<script language="javascript">

</script>
<?php
if(!$_SESSION['from']){
	if($_GET['from'] == 'm'){
		session_start;
		$_SESSION['from']=$_GET['from'];
	}else{
		echo '<script type="text/javascript">browserRedirect();</script>';
	}
}
?>	

<html lang="en">
<head>
    <div id="header">
        <div class="wrap">
            <div id="logoer">
                <embed src="img/logo.swf" quality="high" pluginspage="https://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="247" height="113" wmode="transparent">
            </div>
            <div id="menuer">
                <ul>
                    <li id="yxyx1" class="checkyo" style="margin-right:10px; margin-left:18px;"><a href="/">首页</a></li>
                    <li id="yxyx2" style="margin-right:10px;"><a href="reg" target="_blank">立即注册</a></li>
                    <li style="margin-right:10px;"><a href="appdownload.html" target="_blank">APP下载</a></li>
                    <li id="yxyx3" style="margin-right:10px;"><a href="at2">常见问题</a></li>
                    <li id="yxyx4" style="margin-right:10px;"><a href="at1">最新优惠</a></li>
                    <li id="yxyx5" style="margin-right:10px;"><a href="http://api.pop800.com/chat/230861" target="_blank">加盟代理</a></li>
                    <li id="yxyx6"><a href="javascript:Get_Api_Log('about.html','650px','500px','')">关于我们</a></li>
                </ul>
                <div class="gonggao" id="noticeDom">
			<strong style="color:#333;"><marquee id="noticeDiv" direction="left" scrollamount="4" onMouseOver="this.stop()" onMouseOut="this.start()" style="color:#333;"><?=$this->settings['webName']?>
				</strong>
				—国内知名博彩平台！至今会员5万余人’拥有港澳台百位股东强力加盟并巨资打造，集广东番摊，百家乐，龙虎斗,北京赛车、重庆时时彩、秒速时时彩，11选5以及快三等几十种彩票游戏于一体的现金网娱乐平台、是目前市面上存玩法齐全最全面的现金娱乐平台,多年的运营信誉口碑与服务已获得了众多广大彩民的喜爱！公司将搭乘“诚信为本，合作共赢”的经营理念，利景在您的选择下成为国内领先的互联网信誉彩票平台。
</marquee></strong>
				</div>
            </div>
            </div>
        </div>
    </div>
    <div id="home_bg">
        <div class="wrap">
            <div class="phone">
                <img src="img1/phone.gif" alt="">
            </div>
            <div class="baing">
                <embed src="img1/banner.swf" quality="high" pluginspage="https://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="590" height="288" wmode="transparent">
                </embed>
            </div>
            <div class="login">
                <div class="login_bg">
                    <div class="lg_1">
                        <a href="http://kf.wangzhankefu.cn/webchat/chat.aspx?siteid=412153" target="_blank" title="在线客服">
                            <div class="lg_1_1"></div>
                        </a>
                    </div>
                    <form action="/user/loginedto" method="post" onajax="userBeforeLoginto" enter="true" call="userLoginto" target="ajax">
                        <div class="lg_2">
                            <input type="text" value="" maxlength="15" placeholder="请输入账号" name="username" id="username">
                        </div>
                        <div class="lg_2" style="margin-top:14px;position: relative;">
                            <input type="password" value="" maxlength="20" placeholder="请输入密码" name="password" id="password">
                            <a href="javascript:BBOnlineService();" style="position: absolute;right: 40px;top: 9px;">忘记密码?</a>
                        </div>
                        <div class="clear"></div>
                        <div class="lg_3">
                            <input class="tjok" type="submit" value="">
                        </div>
                        <a href="reg" target="_blank" title="注册">
                            <div class="lg_4"> </div>
                        </a>
                        <a href="javascript:guestLogin();" title="游客参观">
                            <div class="lg_5" alt=""> </div>
                        </a>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
            <div id="footer">
                Copyright © <?=$this->settings['webName']?> All Rights Reserved <script type="text/javascript" src="https://js.users.51.la/19660267.js"></script>
            </div>
        </div>



<script src="js1/home_main.min.js"></script>

        <script type="text/javascript" src="/static/lib/layer/layer.js"></script>
        <script type="text/javascript" src="js1/core.js"></script>
		<script src="http://ttkc888.com/layer/layer.js"></script>
        <script src="http://ttkc888.com/layer/js.js"></script>
<!-- footer end-->

    <!--div class="float" id="float">
    <a href="http://wpa.qq.com/msgrd?v=3&uin=591595597&site=qq&menu=yes" target="_blank"><img src="img/float/bf.png" alt=""></a>
    <span class="close"></span>
</div>
    <link type="text/css" href="/static/lib/remodal-1.1.0/remodal.min.css" rel="stylesheet" />
<div class="remodal" data-remodal-id="modal" role="dialog" aria-describedby="modal1Desc" data-remodal-options="hashTracking: false" style="width: 250px">
    <div>
        <p id="modal1Desc" style="color: #000"></p>
        <span class="btnclose">关闭</span>
    </div>
</div>

<script src="js/home_main.min.js"></script>

    <script src="/static/lib/unslider.min.js"></script>
    <script src="/static/lib/float.min.js"></script>
    <script src="js/core.js"></script>
    <!--div class="hide">
        <script language="javascript" type="text/javascript" src="//js.users.51.la/19313815.js"></script>
        <noscript><a href="//www.51.la/?19313815 " target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="//img.users.51.la/19313815.asp" style="border:none" /></a></noscript>
    </div-->
</body>
