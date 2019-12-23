<?php
$this->freshSession();
if($this->user['uid']){
$rechargeId=$this->getRechId();
$uid=$this->user['uid'];
$amount=floatval($_POST['amount']);
$time=date('Y-m-d H:i:s', time());
$username=$_POST['username'];
$depositTime=$_POST['depositTime'];
$cfgId=$_POST['cfgId'];
	if($amount && $uid && $rechargeId && $depositTime && $username){
		$para=array();
		$para['amount']=$amount;
		$para['rechargeId']=$rechargeId;
		$para['actionTime']=$this->time;
		$para['uid']=$this->user['uid'];
		$para['username']=$this->user['username'];
		$para['actionIP']=$this->ip(true);
		if($cfgId == '288'){
			$para['info']='微信转账充值';
			$para['depositinfo']='微信昵称:'.$username.'<br>存款时间:'.$depositTime;
			$para['rechType']='weixin';
		}elseif($cfgId == '289'){
			$para['info']='邮政转账';
			$para['depositinfo']='邮政用户名:'.$username.'<br>存款时间:'.$depositTime;
			$para['rechType']='cft';
		}elseif($cfgId == '292'){
			$para['info']='工行转账';
			$para['depositinfo']='工行用户名:'.$username.'<br>存款时间:'.$depositTime;
			$para['rechType']='cft';
		}elseif($cfgId == '293'){
			$para['info']='农行转账';
			$para['depositinfo']='农行用户名:'.$username.'<br>存款时间:'.$depositTime;
			$para['rechType']='cft';
		}elseif($cfgId == '294'){
			$para['info']='建行转账';
			$para['depositinfo']='建行用户名:'.$username.'<br>存款时间:'.$depositTime;
			$para['rechType']='cft';
		}else{
			$para['info']=$cfgId;
			$para['depositinfo']='入款账户:'.$username.'<br>存款时间:'.$depositTime;
			$para['rechType']='alipay';
		}
		if($this->insertRow($this->prename .'member_recharge', $para)){
			echo '存款信息提交成功，请等待客服审核';
			exit;
		}else{
			echo '提交失败,请联系客服处理';
			exit;
		}		
	}else{
			echo '提交失败';
			exit;
		}	
}
?>