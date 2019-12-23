<?php
//所有长龙算法函数参数(游戏id, 号码, 大小单双拼音简称)
//firstsd为判断单双,size为判断大小gy_size为冠亚大小gy_firstsd为冠亚单双	
function allcl($gameId, $num, $bet){
	if($gameId==50 || $gameId==51|| $gameId==52|| $gameId==55|| $gameId==58|| $gameId==59|| $gameId==72|| $gameId==104 || $gameId==108){
		return pk10sddx($num, $bet);
	}elseif($gameId==1|| $gameId==73 || $gameId==81|| $gameId==82 || $gameId==100 || $gameId==101 || $gameId==102 || $gameId==103 || $gameId==122 || $gameId==119 || $gameId==120 || $gameId==121){
		return cqsscsddx($num, $bet);
	}elseif($gameId==60 || $gameId==61|| $gameId==107){
		return gdklsf_zhonghe($num, $bet);
	}elseif($gameId==65|| $gameId==110 || $gameId==111){
		return bjkl8sddx($num, $bet);
	}elseif($gameId==21|| $gameId==117 || $gameId==118 || $gameId==106){
		return GD11X5ZH($num, $bet);
	}
	
}	
require_once("stat_gamefunction.php");
$gameId=intval($_GET['gameId']);
if($gameId==50 || $gameId==51|| $gameId==52|| $gameId==55|| $gameId==58|| $gameId==59|| $gameId==55|| $gameId==72|| $gameId==104 || $gameId==108){
require_once("50stat_game.php");
}elseif($gameId==1|| $gameId==73 || $gameId==81|| $gameId==82 || $gameId==100 || $gameId==101 || $gameId==102 || $gameId==103 || $gameId==122 || $gameId==119 || $gameId==120 || $gameId==121){
require_once("1stat_game.php");
}elseif($gameId==60 || $gameId==61|| $gameId==107){
require_once("60stat_game.php");
}elseif($gameId==65|| $gameId==110 || $gameId==111){
require_once("65stat_game.php");
}elseif($gameId==21|| $gameId==117 || $gameId==118 || $gameId==106){
require_once("21stat_game.php");
}
$luzhudata=str_replace('\"', '"', json_encode($tdcount));
$luzhudata=str_replace('"[', '[', $luzhudata);
$luzhudata=str_replace(']"', ']', $luzhudata);
echo 'var luZhuData='.$luzhudata;
/*var luZhuData={"firstsd_9":[["单"],["双"],["单"],["双"],["单","单"],["双","双","双","双","双"],["单","单","单"],["双","双"],["单","单","单"],["双","双","双","双","双"],["单","单"],["双","双","双"],["单","单","单","单"],["双","双","双"],["单","单"],["双","双","双","双"],["单","单","单"],["双","双","双"],["单"],["双","双"],["单"],["双"],["单"],["双"],["单"],["双"]],"firstsd_8":[["双","双","双"],["单","单"],["双"],["单","单"],["双","双"],["单"],["双"],["单"],["双"],["单"],["双"],["单"],["双","双"],["单","单","单"],["双"],["单"],["双"],["单"],["双"],["单"],["双"],["单","单","单","单","单","单","单"],["双"],["单"],["双"],["单"]]}*/
?>