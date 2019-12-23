<?php

class BankPay{
	
	public $temp;
	public $config;
	public $hmac;
	
	public function __construct($temp,$config){
		$this->temp=$temp;
		$this->config=$config;
		$this->hmac=self::getReqHmacString();
	}
	
		
	public function reqURL(){
		header("content-type:text/html; charset=gbk2312");
		$html="<!DOCUTYPE html>";
		$html.="<html>";
		$html.="<head>";
		$html.="<title>TO API PAGE</title>";
		$html.="</head>";
		$html.="<body onLoad='document.API.submit();'>";
		$html.="<form name='API' action='".$this->config['RequestURL']."' method='post'>";
		$html.="<input type='hidden' name='p0_Cmd' 		value='".$this->temp['p0_Cmd']."'/>";
		$html.="<input type='hidden' name='p1_MerId' 	value='".$this->temp['p1_MerId']."'/>";
		$html.="<input type='hidden' name='p2_Order' 	value='".$this->temp['p2_Order']."'/>";
		$html.="<input type='hidden' name='p3_Amt'		value='".$this->temp['p3_Amt']."'/>";
		$html.="<input type='hidden' name='p4_Cur' 		value='".$this->temp['p4_Cur']."'/>";
		$html.="<input type='hidden' name='p5_Pid' 		value='".$this->temp['p5_Pid']."'/>";
		$html.="<input type='hidden' name='p6_Pcat' 	value='".$this->temp['p6_Pcat']."'/>";
		$html.="<input type='hidden' name='p7_Pdesc' 	value='".$this->temp['p7_Pdesc']."'/>";
		$html.="<input type='hidden' name='p8_Url' 		value='".$this->temp['p8_Url']."'/>";
		$html.="<input type='hidden' name='p9_SAF' 		value='".$this->temp['p9_SAF']."'/>";
		$html.="<input type='hidden' name='pa_MP' 		value='".$this->temp['pa_MP']."'/>";
		$html.="<input type='hidden' name='pd_FrpId' 	value='".$this->temp['pd_FrpId']."'/>";
		$html.="<input type='hidden' name='pr_NeedResponse' value='".$this->temp['pr_NeedResponse']."'/>";
		$html.="<input type='hidden' name='hmac' 		value='".$this->hmac."'/>";
		$html.="</form>";
		$html.="</body>";
		$html.="</html>";
		$aa="";
		echo $html;

	}

	#签名函数生成签名串
	public function getReqHmacString(){
	 
		header("content-type:text/html; charset=gbk2312");
			
		#进行签名处理，一定按照文档中标明的签名顺序进行
	  $sbOld = "";
	  #加入业务类型
	  $sbOld = $sbOld.$this->temp['p0_Cmd'];
	  #加入商户编号
	  $sbOld = $sbOld.$this->temp['p1_MerId'];
	  #加入商户订单号
	  $sbOld = $sbOld.$this->temp['p2_Order'];     
	  #加入支付金额
	  $sbOld = $sbOld.$this->temp['p3_Amt'];
	  #加入交易币种
	  $sbOld = $sbOld.$this->temp['p4_Cur'];
	  #加入商品名称
	  $sbOld = $sbOld.$this->temp['p5_Pid'];
	  #加入商品分类
	  $sbOld = $sbOld.$this->temp['p6_Pcat'];
	  #加入商品描述
	  $sbOld = $sbOld.$this->temp['p7_Pdesc'];
	  #加入商户接收支付成功数据的地址
	  $sbOld = $sbOld.$this->temp['p8_Url'];
	  #加入送货地址标识
	  $sbOld = $sbOld.$this->temp['p9_SAF'];
	  #加入商户扩展信息
	  $sbOld = $sbOld.$this->temp['pa_MP'];
	  #加入支付通道编码
	  $sbOld = $sbOld.$this->temp['pd_FrpId'];
	  #加入是否需要应答机制
	  $sbOld = $sbOld.$this->temp['pr_NeedResponse'];
		self::logstr($this->temp['p2_Order'],$sbOld,self::HmacMd5($sbOld,$this->config['merchantKey']));
	  return self::HmacMd5($sbOld,$this->config['merchantKey']);
	  
	} 


	public function getCallbackHmacString(){

		
		$sbOld = "";
		#加入商家ID
		$sbOld = $sbOld.$this->temp['p1_MerId'];
		#加入消息类型
		$sbOld = $sbOld.$this->temp['r0_Cmd'];
		#加入业务返回码
		$sbOld = $sbOld.$this->temp['r1_Code'];
		#加入交易ID
		$sbOld = $sbOld.$this->temp['r2_TrxId'];
		#加入交易金额
		$sbOld = $sbOld.$this->temp['r3_Amt'];
		#加入货币单位
		$sbOld = $sbOld.$this->temp['r4_Cur'];
		#加入产品Id
		$sbOld = $sbOld.$this->temp['r5_Pid'];
		#加入订单ID
		$sbOld = $sbOld.$this->temp['r6_Order'];
		#加入用户ID
		$sbOld = $sbOld.$this->temp['r7_Uid'];
		#加入商家扩展信息
		$sbOld = $sbOld.$this->temp['r8_MP'];
		#加入交易结果返回类型
		$sbOld = $sbOld.$this->temp['r9_BType'];
		
		//$sbOld = $sbOld.$this->temp['rp_PayDate'];

		self::logstr($this->temp['r6_Order'],$sbOld,self::HmacMd5($sbOld,$this->config['merchantKey']));
		return self::HmacMd5($sbOld,$this->config['merchantKey']);

	}

	public function CheckHmac(){
		if($this->temp['hmac']==self::getCallbackHmacString())
			return true;
		else
			return false;
	}
			

	public function HmacMd5($data,$key){
		// RFC 2104 HMAC implementation for php.
		// Creates an md5 HMAC.
		// Eliminates the need to install mhash to compute a HMAC
		// Hacked by Lance Rushing(NOTE: Hacked means written)

		//需要配置环境支持iconv，否则中文参数不能正常处理
		$key = iconv("GB2312","UTF-8",$key);
		$data = iconv("GB2312","UTF-8",$data);

		$b = 64; // byte length for md5
		if (strlen($key) > $b) {
		$key = pack("H*",md5($key));
		}
		$key = str_pad($key, $b, chr(0x00));
		$ipad = str_pad('', $b, chr(0x36));
		$opad = str_pad('', $b, chr(0x5c));
		$k_ipad = $key ^ $ipad ;
		$k_opad = $key ^ $opad;

		return md5($k_opad . pack("H*",md5($k_ipad . $data)));
	}

	public function logstr($orderid,$str,$hmac){
		$james=fopen($this->config['logName'],"a+");
		fwrite($james,"\r\n".date("Y-m-d H:i:s")."|orderid[".$orderid."]|str[".$str."]|hmac[".$hmac."]");
		fclose($james);
	}
}
