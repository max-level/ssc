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
if(!$isBB){
	echo "<script>alert('未开通BB!');window.close();</script>";exit;
}

$sign = md5($plantform."_".$merID."_".$key."_".$username);

$page_site = @$_REQUEST["site"];
if(!$page_site){
	$page_site = "live";
}


//echo $pUrl."".$pTime;exit;
//http://aging.test.com/bb!login.do?plantform=CS&username=b1nbwioq11&sign=3A733AE4B807DB0B7FFA5CD4093CDA8A&password=899903118&page_site=live&page_present=blank
//method  体育：ball 电子游戏  Game 彩票  Ltlottery
	//$urlx = $fenjieHost."/bb!fast.do?plantform=".$plantform."&username=".$username."&password=".$password."&sign=".$sign."&resultType=json";
	//$urlx = $fenjieHost."/bb!login.do?plantform=".$plantform."&username=".$username."&password=".$password."&sign=".$sign."&page_site=".$page_site."&page_present=blank";
	$urlx = $fenjieHost."/bb!login.do?plantform=".$plantform."&username=".$username."&password=".$password."&page_site=".$page_site."&sign=".$sign."&page_present=blank";
	//echo $urlx;
	//exit;
	$rx = curl_file_get_contents($urlx);
	//echo $rx;
	
	
	$json = json_decode($rx);
	//print_r($json);exit;
	
	//if(!$json->result){
	/*if(strpos($rx, "alert") > 0){
	echo "<script>alert('您的登陆过于频繁，请30秒后在试！');window.close();</script>";exit;
	
	}*/
	$url=$json->url;
	

?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>bb娱乐</title></head><body>
<script>location.href='<?=$urlx?>';</script>
<iframe src="<?=$url ?>" id="mem_index" security="restricted" sandbox=""  width="100%" height="500px" frameborder="0" width="100%" height="400px" marginheight="0" marginwidth="0" scrolling="auto"></iframe>
</body>
</html>-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title><?= $this->settings['webName'] ?>-BBIN视讯直播</title>
</head>
	<frameset rows="*" cols="100%">
	<frame noresize="noresize" src="<?=$urlx ?>" scrolling="auto" name="top">
	<noframes>
	</noframes>
	</frameset>
</html>