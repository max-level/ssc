<?php

$parter = '10748';
$type	=	$_REQUEST['BankCode'];
$value	=$_REQUEST['Amount'];
//$value="0.1";
$orderid	=	date("YmdHis").rand(1000,9999);
$callbackurl	=	"http://".$_SERVER['HTTP_HOST']."/ykpay/Back.php";
$hrefbackurl	=	"http://".$_SERVER['HTTP_HOST']."/ykpay/return.php";
$payerIp	=	'';
$attach	=	$_REQUEST['MerBillNo'];
$key = '443BD6B31A6AFA2B5A6CF7C11E2663F6';

$signStr = "parter=$parter&type=$type&orderid=$orderid&callbackurl=$callbackurl";

$sign	= md5($signStr.$key);

			$dopay = "http://gaet.51zima.cn/interface/chargebank.aspx";


$url	= $dopay."?" . $signStr . "&sign=" .$sign. "&hrefbackurl=".$hrefbackurl."&attach=".$attach."&value=".$value;			
//echo $url;exit;		
		//页面跳转
header("location:" .$url);

?> 