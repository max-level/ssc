<?php 
header("Content-type: text/html; charset=utf-8");
session_start();
$uid = intval(@$this->user['uid']);
?>