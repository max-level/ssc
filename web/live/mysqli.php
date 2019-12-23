<?php
error_reporting(0);

//创建对象并打开连接，最后一个参数是选择的数据库名称
$mysqli = new mysqli('localhost','root','root','boe2017');

//检查连接是否成功
if (mysqli_connect_errno()){
	//注意mysqli_connect_error()新特性
	die('Unable to connect!'). mysqli_connect_error();
}

$mysqli->query("set character set 'utf8'");
$mysqli->query("set names 'utf8'");

?>