<?php
$this->freshSession();
if($this->user['uid']){
$rechargeId=$this->getRechId();
$bankid=$_REQUEST["payId"];
$uid=$this->user['uid'];
$amount=floatval($_REQUEST['amount']);
//$amount="1.00";
$time=date('Y-m-d H:i:s', time());
if($amount && $uid && $rechargeId){
	if($this->update("INSERT INTO {$this->prename}order (order_number, username, recharge_amount, state, time) VALUES('{$rechargeId}', '{$uid}', '{$amount}', '0', '{$time}')")){
		$para=array();
		$para['mBankId']=intval($bankid);
		$para['amount']=floatval($amount);
		$para['rechargeId']=$rechargeId;
		$para['actionTime']=$this->time;
		$para['uid']=$this->user['uid'];
		$para['username']=$this->user['username'];
		$para['actionIP']=$this->ip(true);
		if($bankid=='weixin'){
		$para['info']='微信扫码充值';
		}elseif($bankid=='alipay'){
		$para['info']='支付宝扫码充值';
		}else{
		$para['info']='网银在线充值';
		}
		if($this->insertRow($this->prename .'member_recharge', $para)){
			$url='?oid='.$rechargeId.'&paytype='.$bankid.'&Attach='.$this->user['username'].'&amount='.$amount;
				header("Location: /jypay/req.php".$url); 	
			//$url='http://'.$_SERVER['SERVER_NAME'].'/101ka/pay.php?rechargeId='.$rechargeId.'&bankid='.$bankid.'&uid='.$uid.'&amount='.$amount;
			//echo $url;
			//header("Location:".$url); 
		}else{
			echo '充值订单生成出错';
			exit;
		}		
	}else{
	echo '操作错误';
	exit;	
	}
}
}
?>