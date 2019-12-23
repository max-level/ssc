<?php

	$con = mysql_connect("localhost","root","!@jfyy5200*+");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db("yongli", $con);
	mysql_query("set names 'utf8'");
	
	//Change('519973','1.23');
	
	function Change($rid,$rmoney)
	{
		$addtime = time();
	 	$result2 = mysql_query("select * from ssc_member_recharge where rechargeId='{$rid}'");
		$row = mysql_fetch_array($result2);
		if($row['state']=='0')
		{      
			
	        mysql_query("update ssc_members set coin=coin+{$rmoney} where  uid={$row['uid']}");
	        mysql_query("update ssc_member_recharge set state='1',rechargeAmount={$rmoney},actionTime={$addtime} where  rechargeId='".$rid."'"); 
			$r  = mysql_query("select coin from ssc_members where  uid={$row['uid']}");
			$rr = mysql_fetch_array($r);
			
			mysql_query("insert into ssc_coin_log (`id`,`uid`,`type`,`playedId`,`coin`,`userCoin`,`fcoin`,`liqType`,`actionUID`,`actionTime`,`actionIP`,`info`,`extfield0`,`extfield1`,`extfield2`) values(null,'{$row['uid']}','0','0','{$rmoney}','{$rr['coin']}','0','1','0','".time()."','0','充值','258','{$rid}','0')");
        }
		
	}
	
	
	
	
?>