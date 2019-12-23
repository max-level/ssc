<?php

$parter = '2666';
$type	=	$_POST['paytype'];
$value	=$_POST['amount'];

$orderid	=	$_POST['orderid'];
$callbackurl	=	"http://".$_SERVER['HTTP_HOST']."/lkbpay/Back.php";
$hrefbackurl	=	"http://".$_SERVER['HTTP_HOST']."/lkbpay/Back.php";
$payerIp	=	'';
$attach	=	'';
$key = 'e8565a50091a43a7bf2211dbaa59410a';

$signStr = "parter=$parter&type=$type&value=$value&orderid=$orderid&callbackurl=$callbackurl";

$sign	= md5($signStr.$key);

		if($type == '992' || $type == '1102'| $type == '1102'| $type == '1102'| $type == '1102')
		{
			$dopay = "http://api.101ka.com/GateWay/Bank/Default.aspx";
		}
		else
		{
			$dopay = "http://api.101ka.com/GateWay/Bank/Default.aspx";
		}

$url	= $dopay."?" . $signStr . "&sign=" .$sign. "&hrefbackurl=".$hrefbackurl;			
		
		//页面跳转
header("location:" .$url);

?> 