<?php

	$con = mysql_connect("127.0.0.1","root","sands");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db("cttm", $con);
	mysql_query("set names 'utf8'");
	
	
	
	function Change($rid,$rmoney)
	{
		$addtime = time();
	 	$result2 = mysql_query("select * from ssc_member_recharge where rechargeId='{$rid}' and state = 0");	
		if(mysql_num_rows($result2) == 1)
		{      
			$row = mysql_fetch_array($result2);
			mysql_query("update ssc_member_recharge set state='1',rechargeAmount={$rmoney},actionTime={$addtime} where  rechargeId='".$rid."'"); 
	        mysql_query("update ssc_members set coin=coin+{$rmoney} where  uid={$row['uid']}");	        
			$r  = mysql_query("select coin from ssc_members where  uid={$row['uid']}");
			$rr = mysql_fetch_array($r);			
			mysql_query("insert into ssc_coin_log (`id`,`uid`,`type`,`playedId`,`coin`,`userCoin`,`fcoin`,`liqType`,`actionUID`,`actionTime`,`actionIP`,`info`,`extfield0`,`extfield1`,`extfield2`) values(null,'{$row['uid']}','0','0','{$rmoney}','{$rr['coin']}','0','1','0','".time()."','0','充值','258','{$rid}','0')");
        }
		
	}
	
	
	
	function QueryOrder($rid)
	{
		$result2 = mysql_query("select * from ssc_member_recharge where rechargeId='{$rid}'");
		$row = mysql_fetch_array($result2);
		if($row['state']=='1')
		{      
			return "SUCCESS";
		}
		else
		{
			return "false";
		}
	}
	
	
?>