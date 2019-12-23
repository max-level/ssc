<?php





//date_default_timezone_set('PRC');
$url = 'http://www.77tj.org/api/tencent/onlineim';
$data = file_get_contents($url);
$data = json_decode($data, true);
 $opencode = $data[0]['onlinenumber'];
 $b = str_split($opencode);
 $c = array_sum($b);
 $d1 = substr($c,-1);
 $nenumber = $d1.substr($opencode,-4);
 $nenumber = join(',',str_split($nenumber));
 // $nenumber='1,5,6,8,1';
 $expect = strtotime($data[0]['onlinetime']); 
 $qishu=(($expect+8*3600)%(3600*24))/60;

$today = date("Ymd");
$qishu = $today.str_pad($qishu, 4,'0',STR_PAD_LEFT);
header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$qishu.'" opencode="'.$nenumber.'" opentime="'.$data[0]['onlinetime'].'"/></xml>';
?>