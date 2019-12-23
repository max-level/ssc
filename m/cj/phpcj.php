<?php   
@session_start();
/*
 *通过改变$Cj1,$cj2,$cj3,$cj4,$cj5,$cj6,$cj7的值来改变不同奖次的中奖概率
 *当值为0时，表示中奖概率为0，用户永远无法抽到该奖次的奖品。
*/

$msg = '';
if(isset($_SESSION['member-session-name']))
{
	$userinfo = unserialize ($_SESSION['member-session-name']);
	
	if(!$userinfo)
	{
		$msg = '请登录';
	}
}
else
{	
		$msg = '请登录';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>抽奖</title>


<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{
	font:12px/180% Arial, Helvetica, sans-serif, "新宋体";
	background-color: #CC0066;
}
/* demo */
.demo{width:591px;position:relative;margin:50px auto 0 auto;}
#disk{width:591px;height:591px;overflow:hidden;background:url(images/disk.jpg) no-repeat;}
#start{width:137px;height:277px;position:absolute;top:166px;left:225px;}
#start img{cursor:pointer;}
.STYLE1 {
	color: #FFFFFF;
	font-size: 18px;
	font-weight: bold;
}
.STYLE2 {font-size: 24px}
</style>

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jQueryRotate.2.2.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
<?php
	if($msg != '')
	{
?>
		alert("<?php echo $msg;?>");
<?php
		die("</script></head></html>");
	}
?>
$(function(){ 
     $("#startbtn").click(function(){ 
        lottery(); 
    }); 
}); 
function lottery(){ 
    $.ajax({ 
        type: 'POST', 
        url: 'data.php', 
        dataType: 'json', 
        cache: false, 
        error: function(){ 
            alert('出错了！'); 
            return false; 
        }, 
        success:function(json){ 
            $("#startbtn").unbind('click').css("cursor","default"); 
            var a = json.angle; //角度 
            var p = json.prize; //奖项 
            var co = json.co; //计数 
            $("#startbtn").rotate({ 
                duration:3000, //转动时间 
                angle: 0, 
                animateTo:1800+a, //转动角度 
                easing: $.easing.easeOutSine, 
                callback: function(){ 
				 if (p=='一等奖'||p=='二等奖'||p=='三等奖'||p=='四等奖'||p=='五等奖'||p=='六等奖'){
					 confirm('恭喜！中得'+p+'！'); 
					 return false;
					 //lottery(); 
				 }
				 else if (p=='七等奖')
				 {
					 confirm('抱歉！没抽中，谢谢参与！'); 
					 return false;
				 }
				 else
				 {
					 confirm(p); 
					 return false;
					 //lottery();
				 }
               } 
             }); 
        } 
    }); 
} 


</script>

</head>
<body>


<table width="38%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr><td height="20"  valign="middle" bgcolor="#FFFFFF"><img src="images/33.png" width="1000" height="293" /> </td>
  </tr>
 <tr>
   <td width="640" height="640"  align="center" bgcolor="#CC0066"><table border="0" align="center" cellpadding="0" cellspacing="1">
 <tr> <td width="591" height="591"  valign="middle">
<div class="demo">
	<div id="disk"></div>
	<div id="start"><img src="images/start.png" id="startbtn"></div>
</div>
 </td></tr>
 </table>
 </td>
 </tr>
</table>
<div style="text-align:center;margin:60px 0; font:normal 14px/24px 'MicroSoft YaHei';">
  <div align="center" class="STYLE1">
    <p align="center" class="STYLE2">奖项设置</p>
    <p align="center" class="STYLE2">一等奖：888元</p>
    <p align="center" class="STYLE2">二等奖：588元</p>
    <p align="center" class="STYLE2">三等奖：188元</p>
    <p align="center" class="STYLE2">四等奖：88元</p>
    <p align="center" class="STYLE2">五等奖：18元</p>
    <p align="center" class="STYLE2">六等奖：8元</p>
    <p align="center" class="STYLE2">------------------------------------</p>
    <p align="center" class="STYLE2">提示：每人每天只能获得一次抽奖机会！</p>
    <p align="center" class="STYLE2">&nbsp;</p>
    <p align="center" class="STYLE2">活动时间：长期有效</p>
    <p align="center" class="STYLE2">&nbsp;</p>
    <p align="center" class="STYLE2">参与对象：每天登录平台即可参与抽奖！</p>
  </div>
</div>
</body>
</html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title></title>
    <meta name="keywords" content="平台">
    <style>
       	
        .xl-le{position: relative;top: -30px}
        .xl-le h3{height: 23px; line-height: 23px; font-size: 22px; font-weight: normal;text-indent: 2em;}
        .xl-le ul{overflow: hidden; width: 965px; margin: 0 auto;}
        .xl-le p{line-height: 30px; font-size: 14px; padding-bottom:16px;}
        .xl-le ul li{height:50px; padding: 8px; float: left;}
        .xl-le ul li span{display: block; float: left;}
        .xl-le ul li span input{height:50px;border:none;font-size: 14px;}
        .xl-le ul li span input.in1{width: 80px; background: #4C4C4C; border-radius:3px 0 0 3px; color: #fff; text-align: center;}
        .xl-le ul li span input.in2{width: 280px; background: #fff; color: #787878; text-indent: 10px;}
        .xl-le ul li a{float: left; display: block; width:90px; height:52px; text-align: center; line-height:50px; color: #fff; background: #D22424; border-radius:0 3px 3px 0; font-size: 16px;}
        .xl-le ul li a:hover{text-decoration: underline; background: #ffffff;}
        .xl-le a.cxjc{display: block; margin: 40px auto; width: 260px; height: 60px;line-height: 60px;background:#ffffff;font-size: 18px; border-radius: 5px; text-align: center;}
        .xl-le a.cxjc:hover{background: #ffffff;}
        .xl-tjllq{overflow: hidden; height: 300px; background: url(./net_files/xljc.jpg) no-repeat center top;}
        .xl-tjllq h6{text-align: center; font-size: 26px; height: 50px; line-height: 50px; font-weight: normal; margin: 42px 0 0;}
        .xl-tjllq p{font-size: 14px; color: #787878;text-align: center; height: 30px; line-height: 30px;}
        .xl-tjllq ul{overflow: hidden; text-align: center;}
        .xl-tjllq ul li{display: inline-block; margin:42px 32px 0;}
        .xl-tjllq ul li a{display: block; width: 154px; color: #a5a5a5; background:url(./net_files/llq-logo.png) no-repeat; padding:62px 0 0; text-align: center;}
        .xl-tjllq ul li a.chrome{background-position: 51px 0 ;}
        .xl-tjllq ul li a.fox{background-position: -165px 2px ;}
        .xl-tjllq ul li a.open{background-position: -381px 0 ;}
        .xl-tjllq ul li a.ie{background-position: -604px 2px ;}
        .xl-tjllq ul li a.chrome:hover{background-position: 51px -105px ;}
        .xl-tjllq ul li a.fox:hover{background-position: -165px -103px ;}
        .xl-tjllq ul li a.open:hover{background-position: -381px -105px ;}
        .xl-tjllq ul li a.ie:hover{background-position: -604px -103px ;}
        .xl-tjllq ul li a:hover{color: #fff;}
        .footer{ width: 100%; height:36px;
         background:url(./net_files/foot-bj.jpg) repeat;}
        .footer p{text-align: center; width:300px; margin: 0 auto; height: 36px; line-height: 36px;}
        .footer .foot-bor{border-bottom:1px solid #282828; height: 152px;}
        .footer .foot-bor .item{margin-top:28px;}
        .footer .foot-bor h3{margin-bottom:9px;}
        .footer .foot-bor h3 span{display: block;font-weight: normal; color: #c6af63;line-height: 22px;}
        .footer .foot-bor h3 span.y{font-size: 18px;}
        .footer .foot-bor h3 span.w{font-size: 14px;}
        .footer .about{width: 320px; overflow: hidden; margin-right:42px;}
        .footer .about ul{width:340px;}
        .footer .about ul li{display:block; float: left; margin-right:20px; height: 22px; line-height:22px;}
        .footer .about ul li a{color: #928D84;}
        .footer .about ul li a:hover{color: #c6af63;}
        .footer .weixin img {margin: 5px;}
        #tend{
            color: red;
            font-size: 18px;
            font-weight: bold;
        }
        .incap_from-right{display:none;}
    </style>
<style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style></head>  
            </div>
           <div class="xl-le">
                <h3></h3>
                <ul id="xianlu">
                </ul>
                <a class="cxjc" <a href="/index.php"><span>返回游戏大厅</span></a>
				
            </div>
        </div>
    </div>

