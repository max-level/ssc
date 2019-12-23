<?php
session_start();
include('apibi/BiApi.class.php');

$platformCode='MG';
$gameType='Breakaway';
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
        
		<meta charset="utf-8">
     <script type="text/javascript" src="../js/jquery.js"></script>
	     </head>
    <script>
          window.location.href ="<?php echo $url;?>";
    </script>

</html>




