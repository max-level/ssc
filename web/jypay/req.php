<!DOCTYPE html>
<html lang="zh-CN">
<head>
<title></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">

<?php
	require_once('lib/pay.php');
	
	$code=$_REQUEST["paytype"];
	//echo $code;exit;
	if($code=="wx"){
		$paytype="WEIXIN";
		$name="微信";
	}
	else if($code=="wxwap"){
		$paytype="WEIXINWAP";
		$name="微信wap";
	}
	else if($code=="zfb"){
		$paytype="ALIPAY";
		$name="支付宝";
	}
	else if($code=="zfbwap"){
		$paytype="ALIPAYWAP";
	}
	else if($code=="qq"){
		$paytype="QQPAY";
		$name="QQ钱包";
	}
	else if($code=="qqwap"){
		$paytype="QQPAYWAP";
	}
	else if($code=="jd"){
		$paytype="JDPAY";
		$name="京东钱包";
	}
	else if($code=="jdwap"){
		$paytype="JDPAYWAP";
	}
	else if($code=="yl"){
		$paytype="UNIONPAY";
		$name="银联钱包";
	}
	else if($code=="ylwap"){
		$paytype="UNIONWAPPAY";
		$name="银联钱包";
	}
	else if($code=="baidu"){
		$paytype="BAIDUPAY";
		$name="百度钱包";
	}
	else if($code=="quick"){
		$paytype="FASTPAY";
		$name="quick";
		$data['p13_memberid']=rand(10000,99999);
	}
	else{
		$paytype=$code;
	}
	
	$data["p1_mchtid"]="31723";
	$data["p2_paytype"]=$paytype;
	$data["p3_paymoney"]=$_REQUEST["amount"];
	//$data["p3_paymoney"]="0.1";
	$data["p4_orderno"]=$_REQUEST['oid'];
	$data["p5_callbackurl"]="http://".$_SERVER['HTTP_HOST']."/jypay/back.php"; 
	$data["p6_notifyurl"]="http://".$_SERVER['HTTP_HOST']."/";
	$data["p7_version"]="v2.8";
	$data["p8_signtype"]="1";
    $data["p9_attach"]="";
	$data["p10_appname"]="";
	$data["p11_isshow"]=1;
	$data["p12_orderip"]=$_SERVER["REMOTE_ADDR"];
	
	
	$skey = '2c8fede935719e5154d437ee365cb4c1';
	$sign = pay::sign($data, $skey);
	$payUrl = 'http://pay.095pay.com/zfapi/order/pay';
	
	$data["sign"] = $sign;

	if($code=="wx" || $code=="zfb" || $code=="qq"){
		$respon = pay::curlPost($data, $payUrl, 2, 60);
	 		if (!isset($respon['data']['r6_qrcode'])) {
	 			echo $respon['rspMsg'];
	 			die;
	 		}
	 		$responData = $respon['data'];
	 		unset($responData['sign']);
	 		if ($respon['data']['sign'] != pay::sign($responData, $skey)) {
	 			 echo "响应签证不通过！";
	 			 die;
	 		}
	
	       $qrcode=$responData['r6_qrcode'];
	}
	else{
		
		$shtml="<form method='post' action='http://pay.095pay.com/zfapi/order/pay' id='frm'>";
		
		foreach($data as $k=>$v){
			$shtml.="<input type='hidden' name='$k' value='$v'>";
		}
		$shtml.="</form><script>document.getElementById('frm').submit();</script>";
		echo $shtml;exit;
	}
	 
	
	       
?>
<body style="text-align:center;">

<img src="<?php echo $qrcode; ?>"  width='215' height="215">
<br>
 应付金额：
                                <span style="color:red;">
                                    <?php echo $_REQUEST['amount'];?>
                                </span>
                                元
<br><br>
请使用<?php echo $name;?>扫一扫 支付

	<span id="dingdan"  ddcode="<?php echo $_REQUEST['oid'];?>"  class="wx_right" ></span>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	
	 <script>	
			
		var timer;
		$(function(){
			var handler = function(){
				var orderId = $("#dingdan").attr("ddcode");
				
				$.post("query.php?orderId="+orderId,null,function(msg){
					if(msg == 'SUCCESS'){
						document.location.href="success.html";
						clearInterval(timer);
					}
				});
			}
			timer = setInterval(handler , 5000);
		});
		</script>	

	
</html>