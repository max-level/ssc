<?php

$this->freshSession();
if($this->user['uid']){
$rechargeId=$this->getRechId();
$bankid=$_REQUEST["payId"];
$uid=$this->user['uid'];
$amount=floatval($_REQUEST['amount']);
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
		if($bankid=="alipay" || $bankid=='ZHIFUBAO'){
		$para['info']='支付宝扫码充值';
		}elseif($bankid=="wxcode" || $bankid=='WEIXIN'){
		$para['info']='微信扫码充值';
		}else{
		$para['info']='用户在线充值';
		}
		if($this->insertRow($this->prename .'member_recharge', $para)){
			
				$userInfo=unserialize($_SESSION['member-session-name']);
				//var_dump($userInfo);exit;
				header("content-type:text/html; charset=gbk2312");
				$conf=array(
					"MerId"		=> "1899",
					"Key"		=> "qmq1wUDSaaAOTA7VrPtRGQx8sDy6hjox",
					"reqUrl"	=> "http://www.6zhifu.com/GateWay/ReceiveBank.aspx",
					"callUrl"	=> $_SERVER['HTTP_ORIGIN']."/userrech/payCallBack.do"
				);

				$config = array(
					'merchantKey'   =>$conf['Key'],
					'RequestURL' 	=>$conf['reqUrl'],
					'LogName'   	=>'Bankpay.log',
				);
				$temp = array(
					'p0_Cmd'      	   => "Buy",
					'p1_MerId'    	   => $conf['MerId'],
					'p2_Order'         => $rechargeId,
					'p3_Amt'           => $_REQUEST['amount'],
					'p4_Cur'           => "CNY",
					'p5_Pid'           => $_REQUEST['rechId'],//iconv("UTF-8","GBK2312",$name),
					'p6_Pcat'          => '',
					'p7_Pdesc'         => '', 
					'p8_Url'		   => $conf['callUrl'],//U("Call/Back/bank",'',true,true),
					'p9_SAF'   		   => '0',                           
					'pa_MP'            => $userInfo['uid'],//$result,  
					'pd_FrpId'         => $_REQUEST['payId'],//$pd_frpid,
					'pr_NeedResponse'  => "1"
				);
				//发送请求
				require("BankPay.php");
				$Bankpay = new BankPay($temp,$config);
				$Bankpay->reqURL();
		}
			
	}else{
	echo '操作错误';
	exit;	
	}
}
}

/*
$userInfo=unserialize($_SESSION['member-session-name']);
var_dump($userInfo);exit;
header("content-type:text/html; charset=gbk2312");
$conf=array(
	"MerId"		=> "1796",
	"Key"		=> "UqIfKj323Q72ZkBSL27DcXgVY4D7j0k4",
	"reqUrl"	=> "http://www.6zhifu.com/GateWay/ReceiveBank.aspx",
	"callUrl"	=> "http://wfgj8.net/userrech/payCallBack.do"
);

$config = array(
	'merchantKey'   =>$conf['Key'],
	'RequestURL' 	=>$conf['reqUrl'],
	'LogName'   	=>'Bankpay.log',
);
$temp = array(
	'p0_Cmd'      	   => "Buy",
	'p1_MerId'    	   => $conf['MerId'],
	'p2_Order'         => date("YmdHis").time(),
	'p3_Amt'           => $_REQUEST['amount'],
	'p4_Cur'           => "CNY",
	'p5_Pid'           => $_REQUEST['rechId'],//iconv("UTF-8","GBK2312",$name),
	'p6_Pcat'          => '',
	'p7_Pdesc'         => '', 
	'p8_Url'		   => $conf['callUrl'],//U("Call/Back/bank",'',true,true),
	'p9_SAF'   		   => '0',                           
	'pa_MP'            => $userInfo['uid'],//$result,  
	'pd_FrpId'         => $_REQUEST['payId'],//$pd_frpid,
	'pr_NeedResponse'  => "1"
);
//发送请求
require("BankPay.php");
$Bankpay = new BankPay($temp,$config);
$Bankpay->reqURL();
*/
?>