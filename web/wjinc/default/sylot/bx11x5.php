<?php
$lastNo=$this->getGameLastNo(106);

$zddata = $this->getGameZdData(106,$lastNo['actionNo']);

$opencode =$zddata?$zddata:randKeys(5);

header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$lastNo['actionNo'].'" opencode="'.$opencode.'" opentime="'.$lastNo['actionTime'].'"/></xml>';


/* 生成随机数 */
function randKeys($len){
	$str=array('01','02','03','04','05','06','07','08','09','10','11');
	
	$numbers = range (0,10); 
	//shuffle 将数组顺序随即打乱 
	shuffle ($numbers); 
	
	$rand='';
	for($x=0;$x<$len;$x++){
		$i=$numbers[$x];
		if($x!=4){
			$rand.=$str[$i].',';
			}else{
				
				$rand.=$str[$i];
				
				}
		
	}
	return $rand;
}
?>
