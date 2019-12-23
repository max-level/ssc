<?php
date_default_timezone_set('PRC');//设置为中华人民共和国
ob_start();
function cut($start,$end,$file){
$content=explode($start,$file);
$content=explode($end,$content[1]);
return  $content[0];
}
function getcode($str){
$str=trim(eregi_replace("[^0-9]","",$str));
return $str;
}
$url='https://api.api68.com/pks/getLotteryPksInfo.do?lotCode=10035';
$content=file_get_contents($url);
$start='preDrawIssue":';
$end=',"';
$expect=cut($start,$end,$content);



$start='preDrawCode":"';
$end='",';
$cr=cut($start,$end,$content);
	function tmp($v){
		 return 10>$v?"{$v}":$v;
	}
	$codes=implode(',',array_map('tmp',array_slice(explode(',',$cr),0,10)));

$start='preDrawTime":"';
$end='",';
$time=cut($start,$end,$content);



	
//print_r(date("Y-m-d H:i:s"));

header("Content-type: application/xml");
echo'<?xml version="1.0" encoding="utf-8"?>';

	if ((strlen($cr)!=29) or (strlen($expect)!=6) ){echo 'error';}
	else{
   
	
echo '<xml><row expect="'."$expect".'" opencode="'."$codes".'" opentime="'."$time".'" /></xml>';
}
ob_end_flush();
;echo '
'
?>

