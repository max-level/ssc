<?php
$gameId=intval($_GET['gameId']);
$datetime=time()-24*3600;
if($gameId==1|| $gameId==73 || $gameId==81|| $gameId==82 || $gameId==100 || $gameId==101 || $gameId==102 || $gameId==103 || $gameId==122 || $gameId==119 || $gameId==120 || $gameId==121){
	$sql=" and (name='大' or name='小' or name='单' or name='双' or name='龙' or name='虎' or name like '总和%' or name like '尾%' or name like '合数%' )";	
}elseif($gameId==50 || $gameId==55|| $gameId==51 || $gameId==52|| $gameId==58 || $gameId==59|| $gameId==72){
	$sql=" and (name='大' or name='小' or name='单' or name='双' or name='龙' or name='虎' or name like '冠亚%')";	
}elseif($gameId==60 || $gameId==61|| $gameId==107){
	$sql=" and (name='大' or name='小' or name='单' or name='双' or name='龙' or name='虎' or name like '冠亚%')";	
}elseif($gameId==66|| $gameId==112){
	$sql=" and (name='大' or name='小' or name='单' or name='双' or name='豹子' or name like '极%' or name like '%波')";	
}elseif($gameId==65|| $gameId==111 || $gameId==110){
	$sql=" and (name like '总%')";	
}elseif($gameId==21|| $gameId==117 || $gameId==118 || $gameId==106){
	$sql=" and (name='大' or name='小' or name='单' or name='双' or name='龙' or name='虎' or name like '总和%')";	
}
$clong=$this->getRows("select id, name, played_groupid from {$this->prename}played where type={$gameId} {$sql} order by id asc");
//var_dump($clong);
$curStatList=array();
$statarr=array();
if($clong){
	foreach($clong as $key => $var){
		$playedGroup=$this->playedGroup[$var['played_groupid']];
		if($gameId==1|| $gameId==73 || $gameId==81|| $gameId==82 || $gameId==100 || $gameId==101 || $gameId==102 || $gameId==103 || $gameId==122 || $gameId==119 || $gameId==120 || $gameId==121){
			$count=$this->cqssccl($gameId, $var['name'],$playedGroup['name']);
		}elseif($gameId==50 || $gameId==55|| $gameId==51 || $gameId==52|| $gameId==58 || $gameId==59|| $gameId==72){
			$count=$this->pk10cl($gameId, $var['name'],$playedGroup['name']);
		}elseif($gameId==60 || $gameId==61|| $gameId==107){
			$count=$this->klsfcl($gameId, $var['name'],$playedGroup['name']);
		}elseif($gameId==66|| $gameId==112){
			$count=$this->pcddcl($gameId, $var['name'],$playedGroup['name']);
		}elseif($gameId==65|| $gameId==110|| $gameId==111){
			$count=$this->bjkl8cl($gameId, $var['name'],$playedGroup['name']);
		}elseif($gameId==21|| $gameId==117 || $gameId==118 || $gameId==106){
			$count=$this->gd11x5cl($gameId, $var['name'],$playedGroup['name']);
		}
		if($count>2){
		$statarr['playId']=$var['id'];
		$statarr['playName']=$var['name'];
		$statarr['gameId']=$gameId;
		$statarr['playCateId']=$var['played_groupid'];
		$statarr['playCateName']=$playedGroup['name'];
		$statarr['count']=$count;
		array_push($curStatList,$statarr);
		}
		//echo $this->pk10cl($gameId, $var['name'],$playedGroup['name']);
	}
	foreach($curStatList as $arr2){
	$curStatList2[]=$arr2["count"];
	}
	array_multisort($curStatList2, SORT_DESC, $curStatList);	
	//var_dump($curStatList);
	echo 'curStatList='.json_encode($curStatList).';jsonpStatCallback(curStatList)';
}

/*curStatList=[{"playId":501902,"playName":"小","gameId":50,"playCateId":19,"playCateName":"第九名","$count":8},{"playId":502002,"playName":"小","gameId":50,"playCateId":20,"playCateName":"第十名","$count":4},{"playId":501002,"playName":"冠亚小","gameId":50,"playCateId":10,"playCateName":"冠、亚军和","$count":3},{"playId":501102,"playName":"小","gameId":50,"playCateId":11,"playCateName":"冠军","$count":3},{"playId":501204,"playName":"双","gameId":50,"playCateId":12,"playCateName":"亚军","$count":3},{"playId":501406,"playName":"虎","gameId":50,"playCateId":14,"playCateName":"第四名","$count":3},{"playId":501501,"playName":"大","gameId":50,"playCateId":15,"playCateName":"第五名","$count":3},{"playId":501603,"playName":"单","gameId":50,"playCateId":16,"playCateName":"第六名","$count":3},{"playId":501701,"playName":"大","gameId":50,"playCateId":17,"playCateName":"第七名","$count":3}];
jsonpStatCallback(curStatList)*/
?>
