<?php   
@session_start();
/*
 *通过改变$Cj1,$cj2,$cj3,$cj4,$cj5,$cj6,$cj7的值来改变不同奖次的中奖概率
 *当值为0时，表示中奖概率为0，用户永远无法抽到该奖次的奖品。
*/

$dbname='cttm';
$dbhost='127.0.0.1';
$conf['db']['user']='root';
$conf['db']['password']='sands';
$conf['db']['charset']='utf8';
// 连接到数据库
$conn=mysql_connect($dbhost, $conf['db']['user'], $conf['db']['password']);
mysql_query("set names '".$conf['db']['charset']."'"); //数据库输出编码
mysql_select_db($dbname); //打开数据库

if($_SESSION['member-session-name'])
{
	$userinfo = unserialize ($_SESSION['member-session-name']);
	if($userinfo && intval($userinfo['testFlag'])==0)
	{
		$uid = $userinfo['uid'];
		$uinfo = mysql_query("SELECT lastCJ FROM ssc_members where uid=".intval($uid));
		
		if($row = mysql_fetch_array($uinfo))
		{
			$lastCJ = $row['lastCJ'];
			if(!(!isset($lastCJ) || strtotime($lastCJ)<strtotime(date("Y-m-d 0:0:0"))))
			{
				$result['angle'] = -10;
				$result['prize'] = '每天只能抽奖一次'; 
				echo json_encode($result); 
				die("");
			}
		}
	}
	else
	{
		$result['angle'] = -10;
		$result['prize'] = '登录后才能抽奖'; 
		echo json_encode($result); 
		die("");
	}
}
else
{	
		$result['angle'] = -10;
		$result['prize'] = '登录后才能抽奖'; 
		echo json_encode($result); 
		die("");
}

$cj1=0;$cj2=0;$cj3=0;$cj4=4;$cj5=5;$cj6=8;$cj7=200;

$prize_arr = array( 
    '0' => array('id'=>1,'min'=>1,'max'=>29,'prize'=>'一等奖','v'=>$cj1, 'coin'=>888), 
    '5' => array('id'=>6,'min'=>62,'max'=>88,'prize'=>'二等奖','v'=>$cj2, 'coin'=>588), 
    '4' => array('id'=>5,'min'=>122,'max'=>148,'prize'=>'三等奖','v'=>$cj3, 'coin'=>88), 
    '3' => array('id'=>4,'min'=>182,'max'=>208,'prize'=>'四等奖','v'=>$cj4, 'coin'=>28), 
    '2' => array('id'=>3,'min'=>242,'max'=>268,'prize'=>'五等奖','v'=>$cj5, 'coin'=>18), 
    '1' => array('id'=>2,'min'=>302,'max'=>328,'prize'=>'六等奖','v'=>$cj6, 'coin'=>5), 
    '6' => array('id'=>7,'min'=>array(32,92,152,212,272,332), 
'max'=>array(58,118,178,238,298,358),'prize'=>'七等奖','v'=>$cj7, 'coin'=>0) //其它抽不中统归为七等奖
); 
function getRand($proArr) { 
    $result = ''; 
 
    //概率数组的总概率精度 
    $proSum = array_sum($proArr); 
 
    //概率数组循环 
    foreach ($proArr as $key => $proCur) { 
        $randNum = mt_rand(1, $proSum); 
        if ($randNum <= $proCur) { 
            $result = $key; 
            break; 
        } else { 
            $proSum -= $proCur; 
        } 
    } 
    unset ($proArr); 
 
    return $result; 
} 

foreach ($prize_arr as $key => $val) { 
    $arr[$val['id']] = $val['v']; 
} 
 
$rid = getRand($arr); //根据概率获取奖项id 
 
$res = $prize_arr[$rid-1]; //中奖项 
$min = $res['min']; 
$max = $res['max']; 
if($res['id']==7){ //七等奖 
    $i = mt_rand(0,5); 
    $result['angle'] = mt_rand($min[$i],$max[$i]); 
}else{ 
    $result['angle'] = mt_rand($min,$max); //随机生成一个角度 	  
} 

$sql = "update ssc_members set coin=coin + ".intval($res['coin']).", lastCJ='".date("Y-m-d H:i:s")."' where uid=".intval($uid);
mysql_query($sql);
mysql_close(); //关闭MySQL连接  
$result['prize'] = $res['prize']; 
echo json_encode($result); 
?>
