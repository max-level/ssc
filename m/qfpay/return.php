<?php
// 请求数据赋值
$key = '21f4c27a73cf473fb38b9cfe10ac23d2';
$orderid        = trim($_GET['orderid']);
$opstate        = trim($_GET['opstate']);
$ovalue         = trim($_GET['ovalue']);
$sign           = trim($_GET['sign']);
$attach           = trim($_GET['attach']);

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
	if ($opstate == 0)
	{
		
	
		

	}
	
	echo "支付金额:".$ovalue.'元<br>';
	echo "支付编号:".$attach.'<br>';
	echo "支付状态:".($opstate==0?'成功':'失败').'<br>';
}
else
{
	echo '签名错误';
}
?>