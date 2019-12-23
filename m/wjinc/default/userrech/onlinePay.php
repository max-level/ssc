<?php
$this->freshSession();
if($this->user['uid']){
$rechargeId=$this->getRechId();
$bankid=$_REQUEST["payId"];
$uid=$this->user['uid'];
$amount=floatval($_REQUEST['amount']);
$time=date('Y-m-d H:i:s', time());
$rechId = $_REQUEST['rechId'];


//var_dump($_REQUEST);
//exit;

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
		if($rechId==287 || $bankid=='ZHIFUBAO'){
		$para['info']='支付宝扫码充值';
		}elseif($rechId==286 || $bankid=='WEIXIN'){
		$para['info']='微信扫码充值';
		}else{
		$para['info']='用户在线充值';
		}
		if($this->insertRow($this->prename .'member_recharge', $para)){
			$url='?oid='.$rechargeId.'&paytype='.$bankid.'&Attach='.$this->user['username'].'&amount='.$amount;
				header("Location: /jypay/req.php".$url); 		
                exit;	
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