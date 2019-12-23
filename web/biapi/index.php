<?php
session_start();
include('../class/BiApi.class.php');

$platformCode=$_GET['game'];
$gameType=$_GET['gameType'];
$user=unserialize($_SESSION['member-session-name']);

$username=$user['username'];

$api=new Biapi();

if($_GET['sysyue']){
	$sysyue=$api->sysyue($platformCode,$username,$gameType,'','');		
	//var_dump($sysyue);
	die(json_encode($sysyue));
	die;
}

if(!$username){
	if($platformCode == 'IBC'){
		$url = 'http://mkt.kzonlinegame.com/vender.aspx?lang=zhcn 

 

';
		header("Location:$url");
		exit();
	}else{
		echo "<script>alert('请先登录');window.close();</script>";
		exit();
	}
}

if($gameType != nil){
	$url=$api->loginbi($platformCode,$username,$gameType);
}else{
	$url=$api->loginbi($platformCode,$username);
}

//var_dump($url);die;

header("Location:$url");
//die;

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>    
        <title>真人娱乐</title>
     <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
	     </head>
    <frameset rows="*" cols="100%">
        <frame noresize="noresize" src="" scrolling="auto" name="top">
        <noframes>
        </noframes>
    </frameset>

</html>
<script>
	window.location.href="<?=$url?>";
</script>
