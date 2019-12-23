<?php if($this->user['uid']){	
header('location: /');
exit;
 } ?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> <?=$this->settings['webName']?></title>


<script type="text/javascript" src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" ></script>

<script type="text/javascript" src="/skin/js/guest.js"></script>
<script type="text/javascript" src="/skin/layer/layer.js"></script>
<script src="/skin/home/js/index.js"></script>

<script src="/skin/SweetAlert/sweetalert.min.js"></script>
<link href="/skin/SweetAlert/sweetalert.css" type="text/css" rel="stylesheet" /-->






<script src="/skin/home/js/index.js"></script>


<script src="/skin/SweetAlert/sweetalert.min.js"></script>
<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<script type="text/javascript" src="/js/guest.js"></script>
<script type="text/javascript" src="/yoy/js/global.js"></script>
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
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>



<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <title> <?=$this->settings['webName']?></title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <link rel="stylesheet" href="css/core.css">
	<link href="css1/css.css" rel="stylesheet">
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
            <embed src="img/logo.swf" quality="high" pluginspage="https://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="247" height="113" wmode="transparent">
        </div>
        <ul class="nav fr" id="nav">
             <li><a href="/">网站首页</a></li>
            <li><a href="reg">立即注册</a></li>
			<li><a href="appdownload.html" target="_blank">APP下载</a></li>
			<li><a href="at2">常见问题</a></li>
            <li><a href="at1">最新优惠</a><span class="hot"><img src="img/hot.png" alt="" /></span></li>
            <li><a href="at2">存款取款</a></li>
            <li><a href="javascript:;" onclick="window.open('https://ssl.pop800.com/chat/147263');" target="_blank">加盟代理</a></li>
			<li><a href="javascript:Get_Api_Log('about.html','650px','500px','')">关于我们</a></li>
        </ul>
		<div class="gonggao" id="noticeDom">
			<strong style="color:#333;"><marquee id="noticeDiv" direction="left" scrollamount="4" onMouseOver="this.stop()" onMouseOut="this.start()" style="color:#333;"><?=$this->settings['webName']?>
				</strong>
				—国内知名博彩平台！至今会员5万余人’拥有港澳台百位股东强力加盟并巨资打造，集广东番摊，百家乐，龙虎斗,北京赛车、重庆时时彩、秒速时时彩，11选5以及快三等几十种彩票游戏于一体的现金网娱乐平台、是目前市面上存玩法齐全最全面的现金娱乐平台,多年的运营信誉口碑与服务已获得了众多广大彩民的喜爱！公司将搭乘“诚信为本，合作共赢”的经营理念，利景在您的选择下成为国内领先的互联网信誉彩票平台。
</marquee></strong>
				</div>
    </div>
</div>
<!-- header end-->

    <div class="banner">
        <div class="inner">
            <img src="img/ban2.jpg" alt="" />
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
                    <ul>
                        <li>
                            <div class="typename">推荐人账号:</div>
                            <div class="ipt">
							   <input name="recoUserName" type="text" size="40" id="regRecoUserName" maxlength="15" class="inp-txt" placeholder="(非必填)" />
                               <!--input type="text" maxlength="15" id="regRecoUserName" /-->
                            </div>
                            <div class="hint">上级代理账号或推荐人账号，如没有可以不填</div>
                        </li>
                        <li>
                            <div class="typename">登录账号:</div>
                            <div class="ipt">
							<input name="username" type="text" size="40" id="username" maxlength="15"/>
                                <!--input type="text" maxlength="15" id="regUsername" /-->
                            </div>
                            <div class="hint">* 帐户名由6-15个字符组成</div>
                        </li>
                        <li>
                            <div class="typename">登录密码:</div>
                            <div class="ipt">
							<INPUT name="password" id="password" maxLength="15" size="40" type="password"/>
                                <!--input type="password" maxlength="20" id="regPassword" /-->
                            </div>
                            <div class="hint">* 6-20个字母、数字或组合组成，区分大小写</div>
                        </li>
                        <li>
                            <div class="typename">确认密码:</div>
                            <div class="ipt">
							<INPUT  maxLength="15" size="40" type="password" name="cpasswd"/>
                                <!--input type="password" maxlength="20" id="password1" /-->
                            </div>
                            <div class="hint">* 请再次输入密码以确保输入无误</div>
                        </li>
                        <li>
                            <div class="typename">真实姓名:</div>
                            <div class="ipt">
							<INPUT id="name" size="40" maxLength="10" name="name"/>
                                <!--input type="text" id="fullName" maxlength="10" /--->
                            </div>
                            <div class="hint">* 真实姓名必须与您用于提款银行账户名称一致</div>
                        </li>
                        <li>
                            <div class="typename">取款密码:</div>
                            <div class="ipt">
							<INPUT  name="coinpwd" size="40" maxLength="10" >
                                <!--select id="pwd1">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                                <select id="pwd2">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                                <select id="pwd3">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                                <select id="pwd4">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select-->
                            </div>
                            <div class="hint">* 取款必须认证，务必记住</div>
                        </li>
                        <li>
                       
                            <div class="typename">电子邮箱:</div>
                            <div class="ipt">
							<input name="email" type="text" size="40" maxlength="30">
							
                                <!--input type="text" id="email" maxlength="30" /-->
                            </div>
                            <div class="hint">* 电子邮箱(Email)格式：88888888@qq.com</div>
                       </li>
                        <li>
                       
                            <!--div class="typename">QQ号码:</div>
                            <div class="ipt">
                                <input type="text" id="qq" maxlength="20" />
                            </div>
                            <div class="hint">* 请输入QQ号码</div>
                        </li>
                        <li>
                      
                            <!--div class="typename">手机号码:</div>
                            <div class="ipt">
                                <input type="text" id="phone" maxlength="11" />
                            </div>
                            <div class="hint">* 11位手机号码</div>
                       </li>
                        <li-->
						
                       
                            <!--div class="typename">验证码:</div>
                            <div class="ipt">
<input class="inp-txt" name="code" maxlength="10" size="10" id="valiCode" >
		<img alt="验证码" src="/user/vcode/<!--?=$this->time?>" title="看不清楚，点我换图" onclick="this.src='/user/vcode/'+(new Date()).getTime()">
                            </div>
							

                        </li>
                        <li-->
                            <div class="typename"></div>
                            <div class="ipt">
                                <input type="submit" value="创建账号" />
                            </div>
                            <div class="hint"><a href="/">已有账号登录</a></div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <!-- footer -->
<div class="footer">
    ©2013-2018归  <?=$this->settings['webName']?> 版权所有All Rights Reserved.
</div>
<!-- footer end-->

    <div class="duilian duilian_right">
	<img src="img1/ewm.png" alt="" class="ewm">
    <a class="block1" href="http://kf.wangzhankefu.cn/webchat/chat.aspx?siteid=412153" title="" target="_blank"></a>
    <a class="block2" href="appdownload.html" title="" target="_blank"></a>
    <a class="block3" href="appdownload.html" title="" target="_blank"></a>
    <a class="block4" href="https://www.95951.com" title="" target="_blank"></a>
    <a class="block5" href="#" title="" target="_blank"></a>
    <a class="block6" href="javascript:qqService();" title="" target="_blank"></a>
    <a class="block7" href="javascript:agentService();" title="" target="_blank"></a>
    <a href="javascript:void(0)" class="duilian_close"></a>
</div>

        <link type="text/css" href="/static/lib/remodal-1.1.0/remodal.min.css" rel="stylesheet" />
<div class="remodal" data-remodal-id="modal" role="dialog" aria-describedby="modal1Desc" data-remodal-options="hashTracking: false" style="width: 250px">
    <div>
        <p id="modal1Desc" style="color: #000"></p>
        <span class="btnclose">关闭</span>
    </div>
</div>


<script src="js/home_main.min.js"></script>

        <script type="text/javascript" src="/static/lib/layer/layer.js"></script>
        <script type="text/javascript" src="js1/core.js"></script>
</body>

</html>