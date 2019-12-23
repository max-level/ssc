<?php
// 请求数据赋值
$key = 'e8565a50091a43a7bf2211dbaa59410a';

$orderid        = trim($_GET['orderid']);
$opstate        = trim($_GET['opstate']);
$ovalue         = trim($_GET['ovalue']);
$sign           = trim($_GET['sign']);
$ekaorderid	= trim($_GET['ekaorderid']);
$ekatime	= trim($_GET['ekatime']);
if(empty($orderid)){
	die("opstate=-1");		//签名不正确，则按照协议返回数据}
}		
$sign_text	= "orderid=$orderid&opstate=$opstate&ovalue=$ovalue".$key;
$sign_md5 = md5($sign_text);
if($sign_md5 != $sign){
	die("opstate=-2");		//签名不正确，则按照协议返回数据
}	
if ($sign_md5 == $sign) 
{
	if($opstate=="0")
	{
		 require_once("fun.php");
	     Change($orderid,$ovalue);
		
       
	}
 ob_clean(); echo "opstate=0";
	echo "支付金额:".$ovalue.'元<br>';
	echo "支付编号:".$orderid.'<br>';
	echo "支付状态:".($opstate==0?'成功':'失败').'<br>';
	echo "<script>window.location.href='/';</script>";
}
else
{
	echo '签名错误';
}


        $orderid        = trim($_GET['orderid']);
		$opstate        = trim($_GET['opstate']);
		$ovalue         = trim($_GET['ovalue']);
		$attach         = trim($_GET['attach']);
		$sign           = trim($_GET['sign']);
		
		$sign_text	= "orderid=".$orderid."&opstate=".$opstate."&ovalue=".$ovalue;
		$sign_md5 = md5($sign_text.$key);

        if (sign == localsign)
        { 
           if (opstate == "0")
           {
			    //成功逻辑处理，现阶段只发送成功的单据
				echo "opstate=0";
		   } 
        }
      else
	  {
		   //加密错误
	  }
       
?>



