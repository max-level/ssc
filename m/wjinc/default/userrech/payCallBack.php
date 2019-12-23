<?php

$config=array(
	'p1_MerId'		=> "1899",
	'merchantKey'	=> "qmq1wUDSaaAOTA7VrPtRGQx8sDy6hjox",
	'LogName'		=> "bank.Log"
);

require("BankPay.php");

$bankpay=new BankPay($_REQUEST,$config);

	
if($bankpay->CheckHmac()){
	
	if($_REQUEST['r1_Code']==1){
		$order=$_REQUEST['r6_Order'];
		$amt=$_REQUEST['r3_Amt'];
		if($_REQUEST['r9_BType']==1){

			$id=$_REQUEST['r8_MP'];

			$db=mysql_connect("localhost:3306","root","QWEIOP890MNBB");
			if(!$db){
				$meg = "数据库连接失败,失败原因：".mysql_error;
			}
			mysql_select_db("boe2017",$db);
			mysql_query("set names utf8",$db);


			$selectsql="select * from {$this->prename}order where order_number={$order}";
			$row=mysql_query($selectsql);
			$re=mysql_fetch_assoc($row);
            $rechargeId=$re['order_number'];
			if($re['state']!=2){
				$ordersql="update {$this->prename}order set state=2 where order_number={$order}";
				if(mysql_query($ordersql)){

					$userinfosql="select coin from `ssc_members` where uid='".$id."'";
					$result=mysql_query($userinfosql);
					$usermoney=mysql_fetch_assoc($result);
					$beformoney=$usermoney['coin'];
					$money=floatval($usermoney['coin'])+floatval($_REQUEST['r3_Amt']);
					$updatesql="update `ssc_members` set coin=$money where uid='".$id."';";
                    $statesql="update {$this->prename}member_recharge set state=1 where rechargeId={$rechargeId}";
					$statemoneysql="update {$this->prename}member_recharge set coin={$beformoney} where rechargeId={$rechargeId}";
					mysql_query($statesql);
					mysql_query($statemoneysql);
					if(mysql_query($updatesql)){
						$meg = "耶~~~恭喜您支付成功啦";
					}else{
						$meg = "哎呀，~~~~余额修改失败啦！请联系管理员";
					}
				}
			}else{
				$meg = "请勿重复提交";
			}

		}else if($_REQUEST['r9_BType']==2){
			#如果需要应答机制则必须回写流,以success开头,大小写不敏感.
			echo "SUCCESS"; 
			exit;
			
		}
	}
}

?>
<!DOCTYPE html>

<html>
<head>
<title>支付通知</title>
<style>
body{
	background-color:#4987d7;
	color:#fff;
}
.meg-box{
	width:60%;
	height:30rem;
	position:absolute;
	top:50%;
	left:50%;
	margin-left:-30%;
	margin-top:-15rem;
	#border:1px solid #fff;
	#background-color:rgba(20,56,128,0.2);
}
.paystatus{
	width:100%;
	height:5rem;
	text-align:center;
	line-height:5rem;
	font-size:3rem;
}
.title{
	width:100%;
	height:5rem;
	font-size:3rem;
	text-align:center;
	line-height:5rem;
}
.money,.order{
	width:100%;
	height:4rem;
	line-height:4rem;
	font-size:1.5rem;
	text-align:center;
}
.text{
	width:100%;
	height:6rem;
	font-size:2rem;
	text-align:center;
	line-height:6rem;
}
</style>
</head>
<body>
<div class="meg-box">
	<div class="title">
		支付通知
	</div>
	<div class="content">
		<div class="paystatus">
			<?php echo $meg;?>
		</div>
		
			<div class="money">
				冲值金额：<?php echo $amt;?>
			</div>
			<div class="order">
				冲值定单号：<?php echo $order;?>
			</div>
		
		<div class="text">
			感谢您对澳门皇嘉的支持，澳门皇嘉祝您生活愉快！
		</div>
	</div>
</div>
</body>
</html>