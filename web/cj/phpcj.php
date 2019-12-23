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
	background-color: #FFFFFF;
}
/* demo */
.demo{width:591px;position:relative;margin:50px auto 0 auto;}
#disk{width:591px;height:591px;overflow:hidden;background:url(images/disk.jpg) no-repeat;}
#start{width:137px;height:277px;position:absolute;top:166px;left:225px;}
#start img{cursor:pointer;}
#Layer1 {
	position:absolute;
	width:289px;
	height:591px;
	z-index:1;
	left: 1158px;
	top: 30px;
}
.STYLE1 {
	font-size: 24px;
	font-weight: bold;
	color: #0033FF;
	font-family: "新宋体";
}
.STYLE2 {
	font-size: 36px;
	color: #FF0000;
}
.STYLE3 {color: #FF0000}
.STYLE4 {font-size: 36px; color: #0033FF; }
.STYLE5 {font-size: 18px; color: #0033FF; }
</style>
<!--
demo{width:591px;position:relative;margin:50px auto 0 auto;}
positfon:relative;从父对象开始计算left和top的值
margin:50px上下左右边框距离都是50px
overflow:hidden属性规定当内容溢出元素框时发生的事情。内容会被修剪，并且其余内容是不可见的。
positfon:absolute;从父对象demo开始计算left和top的值
-->
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
die("</script></head>
</html>");
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


<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr><td height="20"  valign="middle" bgcolor="#FFFFFF">&nbsp; </td>
  </tr>
 <tr><td  align="center" bgcolor="#FFFFFF"><div class="STYLE1" id="Layer1">
   <p><img src="images/KK.png" width="440" height="754" /></p>
   </div>
   <h1>&nbsp;</h1>
   <table border="0" align="center" cellpadding="0" cellspacing="1">
 <tr> <td width="591" height="591"  valign="middle">
<div class="demo">
	<div id="disk"></div>
	<div id="start"><img src="images/start.png" id="startbtn"></div>
</div>
 </td></tr>
 </table>
   <div align="right"></div></td>
 </tr>
</table>
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
</div>
</body>
</html>