<?php
$lastNo=$this->getGameLastNo(111);
$zddata = $this->getGameZdData(111,$lastNo['actionNo']);
$opencode =$zddata?$zddata:randKeys(20);

header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$lastNo['actionNo'].'" opencode="'.$opencode.'" opentime="'.$lastNo['actionTime'].'"/></xml>';

/* 生成随机数 */
function randKeys($len){
    $array=array(
        "01","02","03","04","05","06","07","08","09","10",
        "11","12","13","14","15","16","17","18","19","20",
        "21","22","23","24","25","26","27","28","29","30",
        "31","32","33","34","35","36","37","38","39","40",
        "41","42","43","44","45","46","47","48","49","50",
		"51","52","53","54","55","56","57","58","59","60",
		"61","62","63","64","65","66","67","68","69","70",
		"71","72","73","74","75","76","77","78","79","80");
    $charsLen = count($array) - 1;
    shuffle($array);
    $output = "";
	for ($i=0; $i<$len; $i++){
	   $output .= $array[$i].",";
    }  
    return rtrim($output, ',');
}
?>