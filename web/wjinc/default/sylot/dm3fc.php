<?php
$lastNo=$this->getGameLastNo(102);
$zddata = $this->getGameZdData(102,$lastNo['actionNo']);
$opencode =$zddata?$zddata:randKeys();


header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$lastNo['actionNo'].'" opencode="'.$opencode.'" opentime="'.$lastNo['actionTime'].'"/></xml>';

/* ��������� */
function randKeys($len=5){
	$str='9238601457';
	$rand='';
	for($x=0;$x<$len;$x++){
		$rand.=($rand!=''?',':'').substr($str,rand(0,strlen($str)-1),1);
	}
	return $rand;
}
?>