<?php 
function curl_file_get_contents($durl){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $durl);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$r = curl_exec($ch);
	curl_close($ch);
	return $r;
}
?>
<?php 
header("Content-type: text/html; charset=utf-8");
session_start();
$uid = intval(@$this->user['uid']);
$username = @$this->user['username'];
include_once("live/config.php");
if(!$username){
	echo "<script>alert('请登录后再试！');window.close();</script>";exit;
}
if(!$isAG){
	echo "<script>alert('未开通AG!');window.close();</script>";exit;
}

$sign = md5($plantform."_".$merID."_".$key."_".$username);

$url = $fenjieHost."/ag!login.do?target=ag&plantform=".$plantform."&username=".$username."&password=".$password."&sign=".$sign;
if($_REQUEST['gameType'] != null){
	$url.="&gameType=".$_REQUEST['gameType'];
}
//echo $url;
$url = curl_file_get_contents($url);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title><?= $this->settings['webName'] ?>-AG真人视讯直播</title>
</head>
	<frameset rows="*" cols="100%">
	<frame noresize="noresize" src="<?=$url ?>" scrolling="auto" name="top">
	<noframes>
	</noframes>
	</frameset>
</html>