<?php
session_start();
include('ApiBi/BiApi.class.php');
$game=$_GET['target'];
$user=$_SESSION['username'];
if($game!=''){
	$api=new BiApi();
	$res=$api->balances($game,$user);
	echo $res;
	
}
?>