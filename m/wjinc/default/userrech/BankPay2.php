<?php 

Class BankPay{

	public $config    = array();

	public function __construct($config){
		$this->config    = $config;
	}

	public function getReqHmacString(){
	  $sbOld = "";
	  $sbOld = $sbOld.$this->config['p0_Cmd'];
	  $sbOld = $sbOld.$this->config['p1_MerId'];
	  $sbOld = $sbOld.$this->config['p2_Order'];     
	  $sbOld = $sbOld.$this->config['p3_Amt'];
	  $sbOld = $sbOld.$this->config['p4_Cur'];
	  $sbOld = $sbOld.$this->config['p5_Pid'];
	  $sbOld = $sbOld.$this->config['p6_Pcat'];
	  $sbOld = $sbOld.$this->config['p7_Pdesc'];
	  $sbOld = $sbOld.$this->config['p8_Url'];
	  $sbOld = $sbOld.$this->config['p9_SAF'];
	  $sbOld = $sbOld.$this->config['pa_MP'];
	  $sbOld = $sbOld.$this->config['pd_FrpId'];
	  $sbOld = $sbOld.$this->config['pr_NeedResponse'];
	  $this->logstr($this->config['p2_Order'],$sbOld,self::HmacMd5($sbOld,$this->config['code']));
	  return self::HmacMd5($sbOld,$this->config['code']);
	}

	public function getCallbackHmacString(){
	  	#ȡ�ü���ǰ���ַ���
		$sbOld = "";
		#�����̼�ID
		$sbOld = $sbOld.$this->config['p1_MerId'];
		#������Ϣ����
		$sbOld = $sbOld.$this->config['r0_Cmd'];
		#����ҵ�񷵻���
		$sbOld = $sbOld.$this->config['r1_Code'];
		#���뽻��ID
		$sbOld = $sbOld.$this->config['r2_TrxId'];
		#���뽻�׽��
		$sbOld = $sbOld.$this->config['r3_Amt'];
		#������ҵ�λ
		$sbOld = $sbOld.$this->config['r4_Cur'];
		#�����ƷId
		$sbOld = $sbOld.$this->config['r5_Pid'];
		#���붩��ID
		$sbOld = $sbOld.$this->config['r6_Order'];
		#�����û�ID
		$sbOld = $sbOld.$this->config['r7_Uid'];
		#�����̼���չ��Ϣ
		$sbOld = $sbOld.$this->config['r8_MP'];
		#���뽻�׽����������
		$sbOld = $sbOld.$this->config['r9_BType'];

		

		self::logstr($this->config['r6_Order'],$sbOld,self::HmacMd5($sbOld,$this->config['merchantKey']));
		return self::HmacMd5($sbOld,$this->config['merchantKey']);
	}

	public function HmacMd5($data,$key){
		$key = iconv("GB2312","UTF-8",$key);
		$data = iconv("GB2312","UTF-8",$data);
		$b = 64;
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
		$james=fopen($this->config['LogName'],"a+");
		fwrite($james,"\r\n".date("Y-m-d H:i:s")."|orderid[".$orderid."]|str[".$str."]|hmac[".$hmac."]");
		fclose($james);
	}

	public function buildRequestForm() {

		header("Content-type: text/html; charset=gbk2312");
		$sHtml = "<form id='bankpaysubmit' name='bankpaysubmit' action='".$this->config['reqURL']."' method='post' accept-charset='gbk2312'>";
		$sHtml = $sHtml."<input type='hidden' name='p0_Cmd'	                value='".$this->config['p0_Cmd']."'>";
		$sHtml = $sHtml."<input type='hidden' name='p1_MerId'				value='".$this->config['p1_MerId']."'>";
		$sHtml = $sHtml."<input type='hidden' name='p2_Order'				value='".$this->config['p2_Order']."'>";
		$sHtml = $sHtml."<input type='hidden' name='p3_Amt'					value='".$this->config['p3_Amt']."'>";
		$sHtml = $sHtml."<input type='hidden' name='p4_Cur'					value='".$this->config['p4_Cur']."'>";
		$sHtml = $sHtml."<input type='hidden' name='p5_Pid'					value='".$this->config['p5_Pid']."'>";
		$sHtml = $sHtml."<input type='hidden' name='p6_Pcat'				value='".$this->config['p6_Pcat']."'>";
		$sHtml = $sHtml."<input type='hidden' name='p7_Pdesc'				value='".$this->config['p7_Pdesc']."'>";
		$sHtml = $sHtml."<input type='hidden' name='p8_Url'					value='".$this->config['p8_Url']."'>";
		$sHtml = $sHtml."<input type='hidden' name='p9_SAF'					value='".$this->config['p9_SAF']."'>";
		$sHtml = $sHtml."<input type='hidden' name='pa_MP'					value='".$this->config['pa_MP']."'>";
		$sHtml = $sHtml."<input type='hidden' name='pd_FrpId'				value='".$this->config['pd_FrpId']."'>";
		$sHtml = $sHtml."<input type='hidden' name='pr_NeedResponse'		value='".$this->config['pr_NeedResponse']."'>";
		$sHtml = $sHtml."<input type='hidden' name='hmac'					value='".$this->getReqHmacString()."'>";
        $sHtml = $sHtml."<input type='submit'  value='�ύ' style='display:none;'></form>";
		$sHtml = $sHtml."<script>document.forms['bankpaysubmit'].submit();</script>";
		echo  $sHtml;
	}

	public function CheckHmac(){

		if($this->config['hmac']==self::getCallbackHmacString())
			return true;
		else
			return false;
	}
}