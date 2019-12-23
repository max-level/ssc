<?php
//所有长龙算法函数参数(游戏id, 号码, 大小单双拼音简称)
//firstsd为判断单双,size为判断大小gy_size为冠亚大小gy_firstsd为冠亚单双	
function allcl($gameId, $num, $bet){
	if($gameId==50 || $gameId==51 ||$gameId==52 ||$gameId==58 ||$gameId==59 || $gameId==55 || $gameId==72|| $gameId==108 || $gameId==104){
		return pk10sddx($num, $bet);
	}elseif($gameId==1 || $gameId==73 || $gameId==80 || $gameId==81 || $gameId==82 || $gameId==100 || $gameId==101 || $gameId==102 || $gameId==103 || $gameId==122 || $gameId==119 || $gameId==120 || $gameId==121){
		return cqsscsddx($num, $bet);
	}elseif($gameId==60 || $gameId==61 || $gameId==107){
		return gdklsf_zhonghe($num, $bet);
	}elseif($gameId==65 || $gameId==111 || $gameId==110){
		return bjkl8sddx($num, $bet);
	}elseif($gameId==21 || $gameId==117 || $gameId==118 || $gameId==106){
		return GD11X5ZH($num, $bet);
	}
	
}	
require_once("stat_gamefunction.php");
$gameId=intval($_GET['gameId']);
if($gameId==50 || $gameId==51 ||$gameId==52 ||$gameId==58 ||$gameId==59 || $gameId==55 || $gameId==72|| $gameId==108 || $gameId==104){
require_once("50stat_game.php");
}elseif($gameId==1 || $gameId==73 || $gameId==80 || $gameId==81 || $gameId==82 || $gameId==100 || $gameId==101 || $gameId==102 || $gameId==103 || $gameId==122 || $gameId==119 || $gameId==120 || $gameId==121){
require_once("1stat_game.php");
}elseif($gameId==60 || $gameId==61 || $gameId==107){
require_once("60stat_game.php");
}elseif($gameId==65 || $gameId==111 || $gameId==110){
require_once("65stat_game.php");
}elseif($gameId==21 || $gameId==117 || $gameId==118 || $gameId==106){
require_once("21stat_game.php");
}
echo 'jsonpGameStatCallback('.json_encode($tdcount).')';
/*jsonpGameStatCallback({"count_n_2_8":"18","count_n_6_4":"14","count_n_6_5":"11","count_n_2_9":"12","count_n_2_6":"13","count_n_6_2":"6","count_n_2_7":"12","count_n_6_3":"16","count_n_6_8":"15","count_n_6_9":"20","count_n_6_6":"12","count_n_6_7":"15","count_n_2_1":"11","count_n_1_10":"15","count_n_2_4":"13","count_n_2_5":"14","count_n_6_1":"10","count_n_2_2":"10","count_n_9_10":"16","count_n_2_3":"17","count_n_10_3":"13","count_n_10_4":"15","count_n_10_5":"14","count_n_10_6":"18","count_n_10_1":"12","count_n_10_2":"11","count_n_10_7":"16","count_n_10_8":"13","count_n_10_9":"11","nums_10":"<td>6</td><td>10</td><td>1</td><td>7<br>7</td><td>6<br>6</td><td>2</td><td>6</td><td>1</td><td>6</td><td>5</td><td>8</td><td>4</td><td>10</td><td>1</td><td>7</td><td>8</td><td>3</td><td>6</td><td>7</td><td>5</td><td>10</td><td>2</td><td>3</td><td>4</td><td>1</td>","count_n_4_10":"6","size_7":"<td>大</td><td>小</td><td>大</td><td>小<br>小<br>小</td><td>大<br>大<br>大<br>大<br>大</td><td>小</td><td>大</td><td>小</td><td>大<br>大<br>大</td><td>小</td><td>大</td><td>小<br>小</td><td>大<br>大<br>大<br>大</td><td>小<br>小</td><td>大<br>大</td><td>小<br>小</td><td>大<br>大<br>大</td><td>小</td><td>大</td><td>小</td><td>大</td><td>小</td><td>大<br>大</td><td>小<br>小</td><td>大<br>大<br>大</td>","size_6":"<td>大</td><td>小<br>小</td><td>大</td><td>小</td><td>大</td><td>小</td><td>大</td><td>小</td><td>大</td><td>小<br>小</td><td>大<br>大<br>大</td><td>小</td><td>大</td><td>小</td><td>大</td><td>小</td><td>大</td><td>小</td><td>大</td><td>小</td><td>大<br>大<br>大</td><td>小</td><td>大</td><td>小</td><td>大<br>大</td>"})*/
?>