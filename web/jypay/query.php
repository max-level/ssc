<?php
	require_once 'fun.php';
	
	$orderid =$_REQUEST['orderId'];
	//echo $orderid;
	echo QueryOrder($orderid);
	
?>