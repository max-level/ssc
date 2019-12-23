<?php
	
   
	file_put_contents("return.txt",json_encode($_REQUEST),FILE_APPEND);

	/*
	if(openssl_verify($signStr,$dinpaySign,$pubKey,OPENSSL_ALGO_MD5)){		//验签成功（Signature correct）
	
		  file_put_contents("suc.txt",json_encode($_REQUEST),FILE_APPEND);
		echo "SUCCESS";
		
        require_once("fun.php");
		Change($order_no);
		
		echo "支付金额:".$order_amount.'元<br>';
		echo "支付编号:".$order_no.'<br>';
		echo "支付状态:成功";
	
	
	
		

	}else{

		echo "Signature Error";  //验签失败，业务结束（End of the business）
	}
	*/
?>