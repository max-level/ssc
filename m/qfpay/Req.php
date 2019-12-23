<?php

$parter = '2121';
$type	=	$_REQUEST['BankCode'];
$value	=$_REQUEST['Amount'];
//$value="0.1";
$orderid	=	date("YmdHis").rand(1000,9999);
$callbackurl	=	"http://".$_SERVER['HTTP_HOST']."/qfpay/Back.php";
$hrefbackurl	=	"http://".$_SERVER['HTTP_HOST']."/qfpay/return.php";
$payerIp	=	'';
$attach	=	$_REQUEST['MerBillNo'];
$key = '21f4c27a73cf473fb38b9cfe10ac23d2';

$signStr = "parter=$parter&type=$type&value=$value&orderid=$orderid&callbackurl=$callbackurl";

$sign	= md5($signStr.$key);

			$dopay = "http://www.cqweide.com/bank/";


$url	= $dopay."?" . $signStr . "&sign=" .$sign. "&hrefbackurl=".$hrefbackurl."&attach=".$attach;			
		
		//页面跳转
header("location:" .$url);

?> 