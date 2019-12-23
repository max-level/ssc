<?php
session_start();
include('ApiBi/BiApi.class.php');

$platformCode='AG';
$gameType='6';
$username=$_SESSION['username'];
if(!$username){
	echo "<script>alert('请先登录');window.close();</script>";
	exit();
}
$api=new Biapi();

if($gameType){
	$url=$api->loginbi($platformCode,$username,$gameType);
}else{
	$url=$api->loginbi($platformCode,$username);
}

//var_dump($url);die;



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>    
        <title>真人娱乐</title>
     <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
	     </head>
	<body>
		<div class="iframetop">
		<iframe src="" name="top" height="100%" width="100%" frameborder="no" border="0"   marginwidth="0" marginheight="0" allowtransparency="yes" scrolling="yes"></iframe>
		</div>
	</body>

</html>
<script>
	window.location.href="<?=$url?>";
</script>

