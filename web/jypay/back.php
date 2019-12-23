<?php
	
   
	file_put_contents("back.txt",json_encode($_REQUEST),FILE_APPEND);
	
	
	
	$partner=$_REQUEST["partner"];
	$ordernumber=$_REQUEST["ordernumber"];
	$orderstatus=$_REQUEST["orderstatus"];
	$paymoney=$_REQUEST["paymoney"];
	$sysnumber=$_REQUEST["sysnumber"];
	$attach=$_REQUEST["attach"];
	$sign=$_REQUEST["sign"];
    
	$skey = '2c8fede935719e5154d437ee365cb4c1';
	$signstr="partner=$partner&ordernumber=$ordernumber&orderstatus=$orderstatus&paymoney=$paymoney".$skey;
	
	//file_put_contents("suc.txt",$signstr,FILE_APPEND);
	$mysign=md5($signstr);
	

	if($sign==$mysign){		//验签成功（Signature correct）
	
		  file_put_contents("suc.txt",json_encode($_REQUEST),FILE_APPEND);
		  echo "ok";
		
        require_once("fun.php");
		Change($ordernumber,$paymoney);	
	
		

	}else{

		echo "Signature Error";  //验签失败，业务结束（End of the business）
		file_put_contents("err.txt",json_encode($_REQUEST),FILE_APPEND);
	}

?>