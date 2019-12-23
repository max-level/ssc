<?php
echo 'var remote_ip_info =';
echo $str = file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip=".$_SERVER['REMOTE_ADDR']);
?>