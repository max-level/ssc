<?php
session_start();
$C_Patch=$_SERVER['DOCUMENT_ROOT'];
include($C_Patch.'/biapi/ApiBi/BiApi.class.php');
include($C_Patch.'/include/config.inc.php');


    $zztype = isset($_POST['zz_type']) ? $_POST['zz_type'] : '';
    $yy = isset($_POST['zz_money']) ? trim($_POST['zz_money']) : '';
	$user=$_SESSION['username'];
	 $sql="select * from user_list where user_name='$user'";
	 $res=$mysqli->query($sql);
	 $row=$res->fetch_array();
	
    $conver = doubleval($yy);
		/*{11=bb,12=AG,13=沙巴,14=pt*/
    if (($zztype=='12' || $zztype=='11' || $zztype=='13' || $zztype=='14'|| $zztype=='15'|| $zztype=='16') && ($conver > $row["money"]))
    {
        echo '转账金额不能大于账户余额，请重新输入。';
        exit;
    }
	
	
	$gametype='';
	if($zztype=='12' || $zztype=='22'){
	$gametype='AG';	
     if($zztype=='12'){
		 $about="主账户->AG娱乐";
	 }else if($zztype=='22'){
		  $about="AG娱乐->主账户";
	 }
		
	}else if($zztype=='11' || $zztype=='21'){
		$gametype='BB';	
		if($zztype=='11'){
		 $about="主账户->BB娱乐";
	 }else if($zztype=='21'){
		  $about="BB娱乐->主账户";
	 }
	 
	 	}else if($zztype=='13' || $zztype=='23'){
		$gametype='MG';		
		if($zztype=='13'){
		 $about="主账户->MG";
	 }else if($zztype=='23'){
		  $about="MG->主账户";
	 }
	 
	 }else if($zztype=='14' || $zztype=='24'){
		$gametype='PT';		
		if($zztype=='14'){
		 $about="主账户->PT娱乐";
	 }else if($zztype=='24'){
		  $about="PT娱乐->主账户";
	 }
	  }else if($zztype=='15' || $zztype=='25'){
		$gametype='AB';		
		if($zztype=='15'){
		 $about="主账户->AB娱乐";
	 }else if($zztype=='25'){
		  $about="AB娱乐->主账户";
	 }
	   }else if($zztype=='16' || $zztype=='26'){
		$gametype='KY';		
		if($zztype=='16'){
		 $about="主账户->KY娱乐";
	 }else if($zztype=='26'){
		  $about="KY娱乐->主账户";
	 }
	}
	
	
		$username=$_SESSION['username'];
			$sqlc = "select * from user_list where user_name='$username'";
			$result = $mysqli->query($sqlc);
			$row=$result->fetch_array();

			$mon=$row['money'];
			if($zztype == '11' || $zztype == '12' || $zztype == '13' || $zztype == '14' || $zztype == '15'  || $zztype == '16'){
				
			if($yy>$mon){
			echo "主钱包余额不足";
			exit;
			}
			$res=new BiApi();
			$result=$res->zzmoney($gametype,$username,'IN',$yy);
			if($result){//充值成功
			$res_money=$mon-$yy;
			$billNO = $username.date('YmdHis',time());
			$sql1		=	"insert into money_log(`user_id`,`order_num`,`about`,`update_time`,`type`,`order_value`,`assets`,`balance`) values('".$row["user_id"]."','$billNO','$about','".date("Y-m-d H:i:s")."','真人转账','".abs($yy)."','".$row["money"]."',".($row["money"]-abs($yy)).")";
			$mysqli->query($sql1);
			$sql2		=	"insert into zz_info(uid,username,old_money,status,amount,new_money,type,info,actionTime,result,billNO) values(".$row["user_id"].",'$username',$mon,1,$yy,$res_money,".$_REQUEST["zz_type"].",'转入沙巴', ".time().",'转帐成功','$billNO')";
			$mysqli->query($sql2);	
			
			$sql="update user_list set money=$res_money where user_name='$username'";
			$arr=$mysqli->query($sql);
			$mysqli->commit();
			echo '额度转入成功';
			exit;
		}else{
			echo '信用额度不足,转换失败';
			exit;
		}
			
			
			}else if($zztype == '21' || $zztype == '22' || $zztype == '23' || $zztype == '24' || $zztype == '25' || $zztype == '26' ){
				$res=new BiApi();
			$result=$res->zzmoney($gametype,$username,'OUT',$yy);
				if($result){//提现成功
			$res_money=$mon+$yy;
			$billNO = $username.date('YmdHis',time());
			$sql1		=	"insert into money_log(`user_id`,`order_num`,`about`,`update_time`,`type`,`order_value`,`assets`,`balance`) values('".$row["user_id"]."','$billNO','$about','".date("Y-m-d H:i:s")."','真人转账','".abs($yy)."','".$row["money"]."',".($row["money"]-abs($yy)).")";
			$mysqli->query($sql1);
			$sql2		=	"insert into zz_info(uid,username,old_money,status,amount,new_money,type,info,actionTime,result,billNO) values(".$row["user_id"].",'$username',$mon,1,$yy,$res_money,".$_REQUEST["zz_type"].",'PT提现', ".time().",'转帐成功','$billNO')";
			$mysqli->query($sql2);	
			
			$sql="update user_list set money=$res_money where user_name='$username'";
			$arr=$mysqli->query($sql);
			$mysqli->commit();
			echo '额度转出成功';
			exit;
	}else{
		echo '转出额度小于可用额度,转换失败';
	}
			}
		
	


?>