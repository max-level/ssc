<?php
header("Content-type: text/html; charset=utf-8");
session_start();

$uid = intval(@$this->user['uid']);
$username = @$this->user['username'];
include_once("live/config.php");

//$temp_username = $username . "aaaa9999";
$temp_username = $username;

if(!$username){
	echo "<script>alert('请登录后再试！');</scrip>";exit;
}

include_once("live/mysqli.php");
//$sign = md5($plantform."_".$merID."_".$key."_".$temp_username);
$sign = md5($plantform."_".$merID."_".$key."_".$username);


function curl_file_get_contents2($durl){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $durl);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$r = curl_exec($ch);
	curl_close($ch);
	return $r;
}

function special_curl($url,$post='',$cookie='')
{
	$head_arr = array(
		'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
		'User-Agent: Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36',
		'Accept-Language: zh-cn,zh;q=0.8,en-us;q=0.5,en;q=0.3',
		'Connection: keep-alive'
	);
	
	if (!empty($cookie)) {
		$head_arr[] = $cookie;
	}
	
	$curl = curl_init($url);
	curl_setopt($curl, CURL_HTTP_VERSION_1_1, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER,$head_arr);
	curl_setopt($curl, CURLOPT_HEADER, 1);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, 50);
	
	if (!empty($post)) {
		curl_setopt($curl, CURLOPT_POST,true);
		curl_setopt($curl, CURLOPT_POSTFIELDS,$post);
	}

	$data = curl_exec($curl);
	curl_close($curl);
	return $data;
}

function check_weihu2(){

    $part1 = 'http://www.na23456.com';
    $content = special_curl($part1);
	if (preg_match("/Location:.+?maintainace\.html/i",$content)) {
		return true;
	} else if (preg_match("/HTTP\/1\.1 404/i",$content)) {
		return true;
	} else if (empty($content)) {
		return true;
	}
	
    return false;
}

//验证是否登陆
//$loginid = @$_SESSION['user_login_id'];
//renovate($uid,$loginid);

$zz_money = $_REQUEST['zz_money'];
if(ceil($zz_money)==$zz_money && $zz_money > 0) {
	$mysqli->autocommit(FALSE);
	$sql = "select * from ssc_members where uid='$uid'";
	$result = $mysqli->query($sql);
	$userinfo = $result->fetch_array();
	$old_money = $userinfo["coin"];
	
if($_REQUEST["zz_type"]=="1" || $_REQUEST["zz_type"]=="11" || $_REQUEST["zz_type"]=="21" || $_REQUEST["zz_type"]=="31") {
		
		if($zz_money > $old_money){
			//echo " <script>alert(' 金额错误，请重新输入。');<script><script>history.go(-1);<script>";
			echo "金额错误";
			exit;
		}
		
		$target = "ag";
		if($_REQUEST["zz_type"]=="11"){
			$target = "bb";
		}else if($_REQUEST["zz_type"]=="21"){
			$target = "mg";
		}else if($_REQUEST["zz_type"]=="31"){
			$target = "pt";
		}
		
		
		/*转入之前， 要检查ag,bb,mg,na的网络是否畅通，如果对方在维护，则不允许转入。 检查的方式是检查余额接口*/
		// 58接口因为太不稳定， 所以要加入重试机制， 重试的原理， 就是判断前后两次的余额是否有变化，如果有变化，就说明成功
		$old_api58_money = 0;
		switch($target){
			
			case 'ag':
			    $temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
				if (!preg_match("/\{\"result\":true,\"reason\":\"success\",\"value\":\"?(\d+)/",$temp,$match)) {
					echo("AG额度转入失败,请重试");
				} else {
					$old_api58_money = $match[1];
				}
				
			   break;	
			   
			case 'bb':
			    $temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
				if (!preg_match("/\{\"result\":true,\"reason\":\"success\",\"value\":\"?(\d+)/",$temp,$match)) {
					echo("BB额度转入失败,请重试");
				} else {
					$old_api58_money = $match[1];
				}
				
			   break;			
			
			case 'mg':
			    $temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
				if (!preg_match("/\{\"result\":true,\"reason\":\"success\",\"value\":\"?(\d+)/",$temp,$match)) {
					echo("MG额度转入失败,请重试");
				} else {
					$old_api58_money = $match[1];
				}
				
			   break;	
			   
			case 'pt':
			    $temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
				if (!preg_match("/\{\"result\":true,\"reason\":\"cache\",\"value\":\"?(\d+)/",$temp,$match)) {
				//echo $temp;
					echo("PT额度转入失败,请重试");
				} else {
					$old_api58_money = $match[1];
				}
				
			   break;	
		}
		
		// 检查 AG,MG,BB,NA总的余额， 转入的时候， 是要扣除总余额的

		
		// 58接口充值时， 需要唯一的billNO值， 应该是针对用户的
		$billNO = $merID.time();
		
		// 首先就要扣除总的余额
		//$sql = "update web_zzzzz set xiaofei=xiaofei+$zz_money,muqian=muqian-$zz_money where name='$targetTmp'";
		//$mysqli->query($sql);
		//$mysqli->commit();
		
		$duifang_status = 2; // 58或者NA的返回状态 0 失败， 1 成功， 2 未知异常
		if($_REQUEST["zz_type"] == "14") {
			// NA
			$userParms = array("userName"=>$temp_username,"amount"=>$zz_money);
			$na_balance_status = NAUtil::na_palyer_trans_deposit($userParms);
			
			if ($na_balance_status == 1) {
				$duifang_status = 1;
			} else if ($na_balance_status == 0) {
				$duifang_status = 0;
			} else {
				$duifang_status = 2;
			}
		} else {
			// 其他
			$url1 = $fenjieHost."/".$target."!edUp.do?&plantform=".$plantform."&username=".$temp_username."&password=".$password."&ed=".$zz_money."&sign=".$sign."&billNO=".$billNO."&callback=".$callback;
			//echo $url1;
			// 58返回的结果
			// {"result":true,"reason":"success","code":906}
			// {"result":false,"reason":"edUp failed","code":905}
			$result = curl_file_get_contents2($url1);
			//echo $result;
			//message($url1);
			// http://www.160856.com/ag!edUp.do?&plantform=HO&username=test001801pj8&password=qq112233&ed=1&sign=5132baed209ffd22129c14340456a563&billNO=2200131474913119&callback=http://www.cai833.com/live/callback.php
			if(strpos($result, "success")!==false) {
				$duifang_status = 1;
			} else if (strpos($result, 'false')!==false) {
				$duifang_status = 0;
			} else {
				// 异常情况
				sleep(2);
				
				$temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
				
				$new_api58_money = 'fail';
				if (!preg_match("/\{\"result\":true,\"reason\":\"success\",\"value\":\"?(\d+)/",$temp,$match)) {
					sleep(1);
					
					$temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
					
					if (preg_match("/\{\"result\":true,\"reason\":\"success\",\"value\":\"?(\d+)/",$temp,$match)) {
						$new_api58_money = $match[1];
					}
				} else {
					$new_api58_money = $match[1];
				}
				
				if ($new_api58_money == 'fail') {
					// 确认异常
					$duifang_status = 2;
				} else if ($new_api58_money == $old_api58_money + $zz_money) {
					// 重试后， 发现是成功的
					$duifang_status = 1;
				} else if ($new_api58_money == $old_api58_money) {
					// 重试后， 发现是失败的
					$duifang_status = 0;
				} else {
					// 确认异常
					$duifang_status = 2;
				}
			}
		}
		
		if ($duifang_status == 1) {
			// 确认成功
			
			$status = 1;
			$about = "转入".$target;
			$order = date("YmdHis")."_".$_SESSION['username'];
						
			$new_money = $old_money - abs($zz_money);
					
			$sql = "update ssc_members set coin=coin-".abs($zz_money)." where `uid`=$uid";
			$mysqli->query($sql);
			
			$mysqli->commit();
			
			echo("转换成功！");
		} else if ($duifang_status == 0) {
			
			// 确认失败的话， 重新加回总余额
			//$sql = "update web_zzzzz set xiaofei=xiaofei-$zz_money,muqian=muqian+$zz_money where name='$targetTmp'";
			//$mysqli->query($sql);
			
			//$mysqli->commit();
			
			echo("真人加款失败,请重试!");
		} else if ($duifang_status == 2) {
			// api58接口异常情况， 不知道是否成功还是失败
			
			$status = 1;
			$about = "转入".$target;
			$order = date("YmdHis")."_".$_SESSION['username'];
			$sql = "insert into k_money(uid,m_value,status,m_order,pay_card,pay_num,pay_address,pay_name,about,assets,balance,`type`) values($uid,$zz_money,$status,'$order','".$userinfo["pay_card"]."','".$userinfo["pay_num"]."','".$userinfo["pay_address"]."','".$userinfo["pay_name"]."','$about',".$userinfo["money"].",".($userinfo["money"]+$zz_money).",".$_REQUEST["zz_type"].")";
			//$mysqli->query($sql);
			
			$new_money = $old_money - abs($zz_money);
			$sql = "insert into zz_info(uid,username,old_money,amount,new_money,type,info,actionTime,result,billNO,status) values($uid,'$username',$old_money,$zz_money,$new_money,".$_REQUEST["zz_type"].",'转入{$target}', ".time().",'需要人工审核','$billNO',1)";
			//$mysqli->query($sql);
			
			$sql = "update ssc_members set coin=coin-".abs($zz_money)." where `uid`=$uid";
			$mysqli->query($sql);
			
			$mysqli->commit();
			
			echo("转换成功！如果遇到意外情况，请联系在线客服！");
		}

		//echo "<script>location.href='zr_money.php';<script>";
		exit;
	}else if($_REQUEST["zz_type"]=="2" || $_REQUEST["zz_type"]=="12" || $_REQUEST["zz_type"]=="22" || $_REQUEST["zz_type"]=="32"){
		
		$target = "bb";
		if($_REQUEST["zz_type"]=="2"){
			$target = "ag";
		}else if($_REQUEST["zz_type"]=="22"){
			$target = "mg";
		}else if($_REQUEST["zz_type"]=="32"){
			$target = "pt";
		}
		
		
		/*转入之前， 要检查ag,bb,mg,na的网络是否畅通，如果对方在维护，则不允许转入。 检查的方式是检查余额接口*/
		// 58接口因为太不稳定， 所以要加入重试机制， 重试的原理， 就是判断前后两次的余额是否有变化，如果有变化，就说明成功
		$old_api58_money = 0;
		switch($target){
			case 'bb' :
				// http://www.160856.com/bb!balance.do?plantform=HO&target=bb&username=ceshi13Vip1&sign=4f0aa0e8369f2bd29036b9f52035365e
				// {"result":true,"reason":"success","value":"3","code":904}
				// {"result":true,"reason":"success","value":0,"code":904}
				
			    $temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
				
				if (!preg_match("/\{\"result\":true,\"reason\":\"success\",\"value\":\"?(\d+)/",$temp,$match)) {
					echo("BB额度转出失败,请重试");
				} else {
					$old_api58_money = $match[1];
				}
				
			    break;
			case 'ag':
			    $temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
				
				if (!preg_match("/\{\"result\":true,\"reason\":\"success\",\"value\":\"?(\d+)/",$temp,$match)) {
					message("AG额度转出失败,请重试");
				} else {
					$old_api58_money = $match[1];
				}
				
			   break;
			case 'mg':
			    $temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
				
				if (!preg_match("/\{\"result\":true,\"reason\":\"success\",\"value\":\"?(\d+)/",$temp,$match)) {
					message("MG额度转出失败,请重试");
				} else {
					$old_api58_money = $match[1];
				}
				
			    break;
				case 'pt':
			    $temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
				
				if (!preg_match("/\{\"result\":true,\"reason\":\"success\",\"value\":\"?(\d+)/",$temp,$match)) {
					message("PT额度转出失败,请重试");
				} else {
					$old_api58_money = $match[1];
				}
				
			    break;
			case 'na':
			
				// 用一个以存在的用户， 去检测他的余额， 如果检测不到， 则判断为服务器无法链接上， 或者是正在维护
				/*$userParms = array("userName"=>'ceshi1Vip1');
				$na_balance = NAUtil::na_palyer_balance($userParms);

			    if($na_balance == ''){
					message("NA额度转出失败,请重试");
				}*/
				
				if (check_weihu2()) {
					message("NA额度转入失败,请重试");
				}
				
				// 无论用户是否存在， 都去创建一下， 确保万一
				$userPwd = substr(md5($temp_username),16);
				NAUtil::create_na_user(array("userName"=>$temp_username,"userPwd"=>$userPwd,"userType"=>"1"));
				
			    break;
		}
		
		// 58接口充值时， 需要唯一的billNO值， 应该是针对用户的
		$billNO = $merID.time();
		
		// 总的余额， 转出的时候， 是要加回总余额的
		//$targetTmp = strtoupper($target);
		//$sql = "update web_zzzzz set xiaofei=xiaofei-$zz_money,muqian=muqian+$zz_money where name='$targetTmp'";
		//$mysqli->query($sql);
		//$mysqli->commit();
		
		$duifang_status = 2; // 58或者NA的返回状态 0 失败， 1 成功， 2 未知异常
		if($_REQUEST["zz_type"] == "24") {
			// NA
			$userParms = array("userName"=>$temp_username,"amount"=>$zz_money);
			$na_balance_status = NAUtil::na_palyer_trans_withdrawal($userParms);
			
			if ($na_balance_status == 1) {
				$duifang_status = 1;
			} else if ($na_balance_status == 0) {
				$duifang_status = 0;
			} else {
				$duifang_status = 2;
			}
		} else {
			// 其他
			$url1 = $fenjieHost."/".$target."!edDown.do?plantform=".$plantform."&username=".$temp_username."&password=".$password."&ed=".$zz_money."&sign=".$sign."&billNO=".$billNO."&callback=".$callback;
			
			// 58返回的结果
			// {"result":true,"reason":"success","code":906}
			// {"result":false,"reason":"edUp failed","code":905}
			$result = curl_file_get_contents2($url1);
			if(strpos($result, "success")!==false) {
				$duifang_status = 1;
			} else if (strpos($result, 'false')!==false) {
				$duifang_status = 0;
			} else {
				sleep(2);
				// 异常情况
				$temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
				
				$new_api58_money = 'fail';
				if (!preg_match("/\{\"result\":true,\"reason\":\"success\",\"value\":\"?(\d+)/",$temp,$match)) {
					sleep(1);
					
					$temp = curl_file_get_contents2($fenjieHost."/".$target."!balance.do?plantform=".$plantform."&target=".$target."&username=".$temp_username."&password=".$password."&sign=".$sign);
					
					if (preg_match("/\{\"result\":true,\"reason\":\"success\",\"value\":\"?(\d+)/",$temp,$match)) {
						$new_api58_money = $match[1];
					}
				} else {
					$new_api58_money = $match[1];
				}
				
				if ($new_api58_money == 'fail') {
					// 确认异常
					$duifang_status = 2;
				} else if ($new_api58_money == $old_api58_money - $zz_money) {
					// 重试后， 发现是成功的
					$duifang_status = 1;
				} else if ($new_api58_money == $old_api58_money) {
					// 重试后， 发现是失败的
					$duifang_status = 0;
				} else {
					// 确认异常
					$duifang_status = 2;
				}
			}
		}
		
		if ($duifang_status == 1) {
			// 确认成功
			
			$status = 1;
			$about = $target."转出";
			$order = date("YmdHis")."_".$_SESSION['username'];
			/*$sql = "insert into k_money(uid,m_value,status,m_order,pay_card,pay_num,pay_address,pay_name,about,assets,balance,`type`) values($uid,$zz_money,$status,'$order','".$userinfo["pay_card"]."','".$userinfo["pay_num"]."','".$userinfo["pay_address"]."','".$userinfo["pay_name"]."','$about',".$userinfo["money"].",".($userinfo["money"]+$zz_money).",".$_REQUEST["zz_type"].")";
			$mysqli->query($sql);
			
			$new_money = $old_money + $zz_money;
			$sql = "insert into zz_info(uid,username,old_money,amount,new_money,type,info,actionTime,result,billNO,status) values($uid,'$username',$old_money,$zz_money,$new_money,".$_REQUEST["zz_type"].", '{$target}转出', ".time().",'转账成功','$billNO',1)";
			$mysqli->query($sql);
			*/
			$sql = "update ssc_members set coin=coin+".abs($zz_money)." where `uid`=$uid";
			$mysqli->query($sql);
			
			$mysqli->commit();
			echo("转换成功！");
		} else if ($duifang_status == 0) {
			
			// 确认失败的话， 重新加回总余额
			//$sql = "update web_zzzzz set xiaofei=xiaofei+$zz_money,muqian=muqian-$zz_money where name='$targetTmp'";
			//$mysqli->query($sql);
			
			//$mysqli->commit();
			echo("真人扣款失败,请重试!");
		} else if ($duifang_status == 2) {
			// api58接口异常情况， 不知道是否成功还是失败
			
			$status = 1;
			$about = $target."转出";
			$order = date("YmdHis")."_".$_SESSION['username'];
			/*$sql = "insert into k_money(uid,m_value,status,m_order,pay_card,pay_num,pay_address,pay_name,about,assets,balance,`type`) values($uid,$zz_money,$status,'$order','".$userinfo["pay_card"]."','".$userinfo["pay_num"]."','".$userinfo["pay_address"]."','".$userinfo["pay_name"]."','$about',".$userinfo["money"].",".($userinfo["money"]+$zz_money).",".$_REQUEST["zz_type"].")";
			$mysqli->query($sql);
			
			$new_money = $old_money + $zz_money;
			$sql = "insert into zz_info(uid,username,old_money,amount,new_money,type,info,actionTime,result,billNO,status) values($uid,'$username',$old_money,$zz_money,$new_money,".$_REQUEST["zz_type"].", '{$target}转出', ".time().",'需要人工审核','$billNO',1)";
			$mysqli->query($sql);
			*/
			// 转出异常， 不加余额， 在审核里加
			//$sql = "update k_user set money=money+".abs($zz_money)." where `uid`=$uid";
			//$mysqli->query($sql);
			
			$mysqli->commit();
			echo("转换成功！如果遇到意外情况，请联系在线客服！");
		}

		//echo "<script>location.href='zr_money.php';</script>";
		exit;
	}else{
		echo " <script>alert('参数错误，请重试。');</script><script>history.go(-1);</script>";exit;
	}
}else{
	echo " <script>alert('金额错误，请重新输入，只能是整数。');</script><script>history.go(-1);</script>";exit;
}
?>