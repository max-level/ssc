<?php 
header('content-Type: text/html;charset=utf-8');
if($this->user['uid']){
	require_once('index1.php');
}else{
	require_once('index2.php');
}
?>