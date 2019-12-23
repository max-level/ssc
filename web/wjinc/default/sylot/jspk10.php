<?php
$lastNo=$this->getGameLastNo(72);

$zddata = $this->getGameZdData(72,$lastNo['actionNo']);

$opencode =$zddata?$zddata:randKeys(10);

header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$lastNo['actionNo'].'" opencode="'.$opencode.'" opentime="'.$lastNo['actionTime'].'"/></xml>';


/* 生成随机数 */
function randKeys($len){
	
	$str=array('01','02','03','04','05','06','07','08','09','10');
	
	$numbers = range (0,9); 
	shuffle ($numbers); 
	
	$rand='';
	for($x=0;$x<$len;$x++){
		
		$i=$numbers[$x];
		if($x!=9){
			$rand.=$str[$i].',';
			}else{
				
				$rand.=$str[$i];
				
				}
		
	}
	return $rand;
}
?>