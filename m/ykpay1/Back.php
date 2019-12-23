<?php
// 请求数据赋值
$key = '443BD6B31A6AFA2B5A6CF7C11E2663F6';
$orderid        = trim($_GET['orderid']);
$opstate        = trim($_GET['restate']);
$ovalue         = trim($_GET['ovalue']);
$sign           = trim($_GET['sign']);
$attach           = trim($_GET['attach']);

if(empty($orderid)){
	die("opstate=-1");		//签名不正确，则按照协议返回数据}
}		
$sign_text	= "orderid=$orderid&restate=$opstate&ovalue=$ovalue".$key;
$sign_md5 = md5($sign_text);
if($sign_md5 != $sign){
	die("opstate=-2");		//签名不正确，则按照协议返回数据
}	
if ($sign_md5 == $sign) 
{
	if ($opstate == 0)
	{
		
		echo "ok";
		require_once("fun.php");
        Change($attach,$ovalue);	
		//echo "支付金额:".$ovalue.'元<br>';
	///echo "支付编号:".$attach.'<br>';

	}

}
else
{
	echo '签名错误';
}
?>