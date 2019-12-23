<?php
header('Content-Type:text/html; charset=utf-8');
include ("../../include/mysqli.php");
$sysdate = date('Y-m-d',time());
$setdate=$_GET["bdate"];
$type=$_GET["type"];

	$sql		=	"SELECT agfsbl as agfsbl  ,nafsbl as nafsbl ,mgfsbl as mgfsbl,ntfsbl as ntfsbl,bbinfsbl as bbinfsbl FROM `k_group` where id='1' ";

	$query		=	$mysqli->query($sql);
	$rs			=	$query->fetch_array();
	$agfsbl	=	$rs['agfsbl'];
	$nafsbl	=	$rs['nafsbl'];
	$mgfsbl	=	$rs['mgfsbl'];
	$ntfsbl	=	$rs['ntfsbl'];
	$bbinfsbl	=	$rs['bbinfsbl'];
	
	if($type=="ag"){
		$sql		=	"SELECT *  FROM `api_crawler_log` where excedate='$setdate' and type='ag' ";
		$query		=	$mysqli->query($sql);
		$rs			=	$query->fetch_array();

		if(is_null($rs)||$rs['status']==0){
			$currtime=date("Y-m-d H:i:s");
			$logid = 0;
			if(is_null($rs)){
				$sql="insert into api_crawler_log(type,excedate,status,createtime) values ('ag','$setdate',0,'$currtime')";
				$mysqli->query($sql);
				$logid = $mysqli->insert_id;					
			}else {
				$logid = $rs['id'];	
			}
			
			$startDate = $setdate." 00:00:00";
			$endDate = $setdate." 23:59:59";			
			$sql   = "select * from api_agbetdetail where recalcuTime >= '".$startDate."' and  recalcuTime <= '".$endDate."' ";

			$query	=	$mysqli->query($sql);
			while($rows = $query->fetch_array()){	
				$reflag = $rows["reflag"];
				$validBetAmount = $rows["validBetAmount"];
				$detailid = $rows["id"];
				if($reflag==0){
					if($validBetAmount>0){
						$uid = $rows["uid"];
						$sql =	"SELECT agfs as agfs FROM `k_user` where uid='".$uid."' ";
						$queryUser	=  $mysqli->query($sql);
						$urs=	$queryUser->fetch_array();
						$agfs	=	$urs['agfs'];
						$rerate = $agfs;
						if($agfs==0){
							$rerate = $agfsbl;
						}
						if($agfs==-0.01){
							$sql=" update `api_agbetdetail` set  `reflag` = 1 , `redate` = '$currtime',`rerate`=0 WHERE `id` = '{$detailid}' ";
							$mysqli->query($sql);							
						}else {
							$reamount = number_format($validBetAmount*$rerate,4);
							$sql=" update `api_agbetdetail` set `reamount` = '{$reamount}'  ,`rerate` = '{$rerate}'  , `reflag` = 1 , `redate` = '$currtime' WHERE `id` = '{$detailid}' ";
							$mysqli->query($sql);	
							$q2=$mysqli->affected_rows;	
							if($q2>0){
								$mysqli->query("update `k_user` set `money` = `money` +'{$reamount}' WHERE `uid` = '{$uid}'");
								$q1=$mysqli->affected_rows;
							}							
						}
						
					}else {
						$sql=" update `api_agbetdetail` set  `reflag` = 1 , `redate` = '$currtime',`rerate`=0 WHERE `id` = '{$detailid}' ";
						$mysqli->query($sql);	
					}
				}	

			
			}
			$mysqli->query("update `api_crawler_log` set `status` = 1  WHERE `id` = '{$logid}'");
		}	
	}else if($type=="na"){
		$sql		=	"SELECT *  FROM `api_crawler_log` where excedate='$setdate' and type='na' ";
		$query		=	$mysqli->query($sql);
		$rs			=	$query->fetch_array();

		if(is_null($rs)||$rs['status']==0){
			$currtime=date("Y-m-d H:i:s");
			$logid = 0;
			if(is_null($rs)){
				$sql="insert into api_crawler_log(type,excedate,status,createtime) values ('na','$setdate',0,'$currtime')";
				$mysqli->query($sql);
				$logid = $mysqli->insert_id;					
			}else {
				$logid = $rs['id'];	
			}
			
			$startDate = $setdate." 00:00:00";
			$endDate = $setdate." 23:59:59";			
			$sql   = "select * from api_nabetdetail where endTime >= '".$startDate."' and  endTime <= '".$endDate."' group by roundNum";
			//echo "$sql ";
			$query	=	$mysqli->query($sql);
			while($rows = $query->fetch_array()){	
				$reflag = $rows["reflag"];
				
				$validBetAmount = $rows["StakeAccurate"];
				$detailid = $rows["id"];
				$roundNum = $rows["roundNum"];
				$gameresult = $rows["gameresult"];
				if($reflag==0||$reflag==null){
					$uid = $rows["uid"];
					$sql =	"SELECT agfs as agfs FROM `k_user` where uid='{$uid}' ";
					$queryUser	=  $mysqli->query($sql);
					$urs=	$queryUser->fetch_array();
					$agfs	=	$urs['agfs'];
					$rerate = $agfs;
					if($agfs==0){
						$rerate = $agfsbl;
					}
					$betb=0.00;
					$betp=0.00;
					$betdb=0.00;
					$betdp=0.00;
					$bett=0.00;
					$betbg=0.00;
					$betsl=0.00;
					$betod=0.00;
					$betev=0.00;
					$betother=0.00;
					$sql =	"select * from api_nabetdetail where roundNum = '{$roundNum}'";
					//echo	" $sql <br>";
					$querydetail	=  $mysqli->query($sql);
					while($detailrows = $querydetail->fetch_array()){
						$betRemark = $detailrows["betRemark"];
						$betAmount = $detailrows["betAmount"];
						$nadetail = $detailrows["id"];
						//echo "$betAmount $nadetail <br>";
						if($betRemark=="B"){
							$betb+=$betAmount;
						}else if($betRemark=="DB"){
							$betdb+=$betAmount;
						}else if($betRemark=="P"){
							$betp+=$betAmount;
						}else if($betRemark=="DP"){
							$betdp+=$betAmount;
						}else if($betRemark=="T"||$betRemark=="DTT"){
							$bett+=$betAmount;
						}else if($betRemark=="BG"){
							$betbg+=$betAmount;
						}else if($betRemark=="SL"){
							$betsl+=$betAmount;
						}else if($betRemark=="OD"){
							$betod+=$betAmount;
						}else if($betRemark=="EV"){
							$betev+=$betAmount;
						}else if($betRemark=="DRA"){
							$betb+=$betAmount;
						}else if($betRemark=="TIG"){
							$betp+=$betAmount;
						}else if($betRemark=="RED"){
							$betb+=$betAmount;
						}else if($betRemark=="BLACK"){
							$betp+=$betAmount;
						}else{
							$betother+=$betAmount;
						}
						if($agfs==-0.01){
							$rerate=0;
						}
						//echo "$betAmount $nadetail <br>";
						$sql=" update `api_nabetdetail` set validBetAmount ='0' ,`reamount` = '0'  ,`rerate` = '{$rerate}'  , `reflag` = 1 , `redate` = '$currtime' WHERE `id` = '{$nadetail}' ";
						$mysqli->query($sql);							
					}

					$validamount = 0;

					$tied = false;
					$rsstrs = split('/',$gameresult); 
					foreach ($rsstrs as $restr) {								
					    if(trim($restr)!=""){
					  	 	if($restr=="T"||$restr=="DTT"){
					  			$tied= true;
					  		}
					    }
					} 		
					if(!$tied){
						$betbp = abs($betb-$betp);
						$validamount = $validamount+ $betbp;
					}

					$validamount = $validamount+ $betdb;
					$validamount = $validamount+ $betdp;
					$validamount = $validamount+ $bett;
					$validamount = $validamount+ $betother;

					$betbgsl = abs($betbg-$betsl);
					$validamount = $validamount+ $betbgsl;


					$betodev = abs($betod-$betev);
					$validamount = $validamount+ $betodev;	

					if($agfs==-0.01){
						$sql=" update `api_nabetdetail` set validBetAmount = '{$validamount}'  WHERE `id` = '{$detailid}' ";
						$mysqli->query($sql);							
					}else {
						$reamount = number_format($validamount*$rerate,4);
						$sql=" update `api_nabetdetail` set validBetAmount = '{$validamount}' , `reamount` = '{$reamount}'  ,`rerate` = '{$rerate}'  , `reflag` = 1 , `redate` = '$currtime' WHERE `id` = '{$detailid}' ";
						$mysqli->query($sql);	
						//echo "$sql ";
						$q2=$mysqli->affected_rows;	
						if($q2>0){
							$mysqli->query("update `k_user` set `money` = `money` +'{$reamount}' WHERE `uid` = '{$uid}'");
							$q1=$mysqli->affected_rows;
						}	
					}
				}	
			}
			$mysqli->query("update `api_crawler_log` set `status` = 1  WHERE `id` = '{$logid}'");
		}	
	}else if($type=="mg"){
		$sql		=	"SELECT *  FROM `api_crawler_log` where excedate='$setdate' and type='mg' ";
		$query		=	$mysqli->query($sql);
		$rs			=	$query->fetch_array();

		if(is_null($rs)||$rs['status']==0){
			$currtime=date("Y-m-d H:i:s");
			$logid = 0;
			if(is_null($rs)){
				$sql="insert into api_crawler_log(type,excedate,status,createtime) values ('mg','$setdate',0,'$currtime')";
				$mysqli->query($sql);
				$logid = $mysqli->insert_id;					
			}else {
				$logid = $rs['id'];	
			}
			
			$startDate = $setdate." 00:00:00";
			$endDate = $setdate." 23:59:59";			
			$sql   = "select * from api_mgbetdetail where Date >= '".$startDate."' and  Date <= '".$endDate."' ";

			$query	=	$mysqli->query($sql);
			while($rows = $query->fetch_array()){	
				$reflag = $rows["reflag"];
				$validBetAmount = $rows["BetAmount"];
				$detailid = $rows["id"];
				if($reflag==0){
					if($validBetAmount>0){
						$uid = $rows["AccountNo"];
						$sql =	"SELECT mgfs as mgfs FROM `k_user` where username='".$uid."' ";
						//echo "$sql ";
						$queryUser	=  $mysqli->query($sql);
						$urs=	$queryUser->fetch_array();
						$mgfs	=	$urs['mgfs'];
						$rerate = $mgfs;
						if($mgfs==0||is_null($mgfs)){
							$rerate = $mgfsbl;
						}
						if($mgfs==-0.01){
							$sql=" update `api_mgbetdetail` set  `reflag` = 1 , `redate` = '$currtime',`rerate`=0 WHERE `id` = '{$detailid}' ";
							$mysqli->query($sql);							
						}else {
							$reamount = number_format($validBetAmount*$rerate,4);
							$sql=" update `api_mgbetdetail` set `reamount` = '{$reamount}'  ,`rerate` = '{$rerate}'  , `reflag` = 1 , `redate` = '$currtime' WHERE `id` = '{$detailid}' ";
							$mysqli->query($sql);	
							$q2=$mysqli->affected_rows;	
							if($q2>0){
								$mysqli->query("update `k_user` set `money` = `money` +'{$reamount}' WHERE `username` = '{$uid}'");
								$q1=$mysqli->affected_rows;
							}							
						}
						
					}else {
						$sql=" update `api_mgbetdetail` set  `reflag` = 1 , `redate` = '$currtime',`rerate`=0 WHERE `id` = '{$detailid}' ";
						$mysqli->query($sql);	
					}
				}	
			}
			$mysqli->query("update `api_crawler_log` set `status` = 1  WHERE `id` = '{$logid}'");
		}	
	}else if($type=="nt"){
		$sql		=	"SELECT *  FROM `api_crawler_log` where excedate='$setdate' and type='nt' ";
		$query		=	$mysqli->query($sql);
		$rs			=	$query->fetch_array();

		if(is_null($rs)||$rs['status']==0){
			$currtime=date("Y-m-d H:i:s");
			$logid = 0;
			if(is_null($rs)){
				$sql="insert into api_crawler_log(type,excedate,status,createtime) values ('nt','$setdate',0,'$currtime')";
				$mysqli->query($sql);
				$logid = $mysqli->insert_id;					
			}else {
				$logid = $rs['id'];	
			}
			
			$startDate = $setdate." 00:00:00";
			$endDate = $setdate." 23:59:59";			
			$sql   = "select * from api_ntbetdetail where datetime >= '".$startDate."' and  datetime <= '".$endDate."' and  transType='BET' ";

			$query	=	$mysqli->query($sql);
			while($rows = $query->fetch_array()){	
				$reflag = $rows["reflag"];
				$validBetAmount = $rows["amount"];
				$detailid = $rows["id"];
				if($reflag==0){
					if($validBetAmount>0){
						$uid = $rows["userID"];
						$sql =	"SELECT ntfs as ntfs FROM `k_user` where username='".$uid."' ";
						//echo "$sql ";
						$queryUser	=  $mysqli->query($sql);
						$urs=	$queryUser->fetch_array();
						$ntfs	=	$urs['ntfs'];
						$rerate = $ntfs;
						if($ntfs==0||is_null($ntfs)){
							$rerate = $ntfsbl;
						}
						//echo "$validBetAmount $rerate <br>" ;
						if($ntfs==-0.01){
							$sql=" update `api_ntbetdetail` set  `reflag` = 1 , `redate` = '$currtime',`rerate`=0 WHERE `id` = '{$detailid}' ";
							$mysqli->query($sql);							
						}else {
							$reamount = number_format($validBetAmount*$rerate,4);
							$sql=" update `api_ntbetdetail` set `reamount` = '{$reamount}'  ,`rerate` = '{$rerate}'  , `reflag` = 1 , `redate` = '$currtime' WHERE `id` = '{$detailid}' ";
							$mysqli->query($sql);	
							$q2=$mysqli->affected_rows;	
							if($q2>0){
								$mysqli->query("update `k_user` set `money` = `money` +'{$reamount}' WHERE `username` = '{$uid}'");
								$q1=$mysqli->affected_rows;
							}							
						}
					}else {
						$sql=" update `api_ntbetdetail` set  `reflag` = 1 , `redate` = '$currtime',`rerate`=0 WHERE `id` = '{$detailid}' ";
						$mysqli->query($sql);	
					}
				}	

			
			}
			$mysqli->query("update `api_crawler_log` set `status` = 1  WHERE `id` = '{$logid}'");
		}	
	}else if($type=="bbin"){
		$sql		=	"SELECT *  FROM `api_crawler_log` where excedate='$setdate' and type='bbin' ";
		$query		=	$mysqli->query($sql);
		$rs			=	$query->fetch_array();

		if(is_null($rs)||$rs['status']==0){
			$currtime=date("Y-m-d H:i:s");
			$logid = 0;
			if(is_null($rs)){
				$sql="insert into api_crawler_log(type,excedate,status,createtime) values ('bbin','$setdate',0,'$currtime')";
				$mysqli->query($sql);
				$logid = $mysqli->insert_id;					
			}else {
				$logid = $rs['id'];	
			}
			
			$startDate = $setdate." 00:00:00";
			$endDate = $setdate." 23:59:59";			
			$sql   = "select * from api_bbbetdetail where WagersDate >= '".$startDate."' and  WagersDate <= '".$endDate."' ";

			$query	=	$mysqli->query($sql);
			while($rows = $query->fetch_array()){	
				$reflag = $rows["reflag"];
				$validBetAmount = $rows["Commissionable"];
				$detailid = $rows["id"];
				if($reflag==0){
					if($validBetAmount>0){
						$uid = $rows["UserName"];
						$sql =	"SELECT bbinfs as bbinfs FROM `k_user` where username='".$uid."' ";
						$queryUser	=  $mysqli->query($sql);
						$urs=	$queryUser->fetch_array();
						$bbinfs	=	$urs['bbinfs'];
						$rerate = $bbinfs;
						if($bbinfs==0||is_null($bbinfs)){
							$rerate = $bbinfsbl;
						}
						if($bbinfs==-0.01){
							$sql=" update `api_bbbetdetail` set  `reflag` = 1 , `redate` = '$currtime',`rerate`=0 WHERE `id` = '{$detailid}' ";
							$mysqli->query($sql);							
						}else {
							$reamount = number_format($validBetAmount*$rerate,4);
							$sql=" update `api_bbbetdetail` set `reamount` = '{$reamount}'  ,`rerate` = '{$rerate}'  , `reflag` = 1 , `redate` = '$currtime' WHERE `id` = '{$detailid}' ";
							$mysqli->query($sql);	
							$q2=$mysqli->affected_rows;	
							if($q2>0){
								$sql = "update `k_user` set `money` = `money` +'{$reamount}' WHERE `username` = '{$uid}'";
								$mysqli->query($sql);
								//echo "$sql";
								$q1=$mysqli->affected_rows;
							}							
						}
					}else {
						$sql=" update `api_bbbetdetail` set  `reflag` = 1 , `redate` = '$currtime',`rerate`=0 WHERE `id` = '{$detailid}' ";
						$mysqli->query($sql);	
					}
				}	

			
			}
			$mysqli->query("update `api_crawler_log` set `status` = 1  WHERE `id` = '{$logid}'");
		}	
	}
	
	
	      
if(!is_null($setdate)){
	$msg = "操作成功";
}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function padZero(num) {
	  return ((num <= 9) ? ("0" + num) : num);
}
function chg_date(range,num1,num2){
	if(range=='t' || range=='w' || range=='lw'){
		form1.bdate.value ='<?=date('Y-m-d')?>';
		form1.edate.value =form1.bdate.value;
	}

	if(range!='t'){
		if(form1.bdate.value!=form1.edate.value){
			form1.bdate.value ='<?=date('Y-m-d')?>';
			form1.edate.value =form1.bdate.value;
		}
		var aStartDate = form1.bdate.value.split('-');
		var newStartDate = new Date(parseInt(aStartDate[0], 10),parseInt(aStartDate[1], 10) - 1,parseInt(aStartDate[2], 10) + num1);
		form1.bdate.value = newStartDate.getFullYear()+ '-' + padZero(newStartDate.getMonth() + 1)+ '-' + padZero(newStartDate.getDate());
		
		var aEndDate = form1.edate.value.split('-');
		var newEndDate = new Date(parseInt(aEndDate[0], 10),parseInt(aEndDate[1], 10) - 1,parseInt(aEndDate[2], 10) + num2);
		form1.edate.value = newEndDate.getFullYear()+ '-' + padZero(newEndDate.getMonth() + 1)+ '-' + padZero(newEndDate.getDate());

		}
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>清除数据</title>
<link rel="stylesheet" href="../Images/CssAdmin.css">
<script language="JavaScript" src="../../js/jquery.js"></script>
<script language="JavaScript" src="../../js/calendar.js"></script>
</head>
<body>
<p align="center" style="color:red;font-size:16px;"><?=$msg?></p>


<form id="form1" name="form1" method="post" action="setreamount.php" onsubmit="return(confirm('您确定要做反水操作吗'))">
  <div align="center">
	<br>
  	<p align="center">AG反水计算</p>
	选择日期：
	<input name="agbdate" type="text" id="agbdate" value="<?=$bdate?>" onClick="new Calendar(2008,2020).show(this);" size="10" maxlength="10" readonly />  
    <input type="button" name="Submit" onClick="javascript:setdate('ag');"value="确定" />
	<p align="center">每天手动计算前一天的反水</p>
  </div>
  
  <div align="center">
	<br>
	<br>
  	<p align="center">NA反水计算</p>
	选择日期：
	<input name="nabdate" type="text" id="nabdate" value="<?=$bdate?>" onClick="new Calendar(2008,2020).show(this);" size="10" maxlength="10" readonly />  
    <input type="button" name="Submit" onClick="javascript:setdate('na');"value="确定" />
	<p align="center">每天手动计算前一天的反水</p>
  </div>   
  
  <div align="center">
	<br>
	<br>
  	<p align="center">MG反水计算</p>
	选择日期：
	<input name="nabdate" type="text" id="mgbdate" value="<?=$bdate?>" onClick="new Calendar(2008,2020).show(this);" size="10" maxlength="10" readonly />  
    <input type="button" name="Submit" onClick="javascript:setdate('mg');"value="确定" />
	<p align="center">每天手动计算前一天的反水</p>
  </div> 
 
</form>


<br /><br />
</body>
<script>
function setdate(type) {	
	var bdate='';
	if(type=="ag"){
		bdate = $("#agbdate").val();
	}else if(type=="na"){
		bdate = $("#nabdate").val();
	}else if(type=="mg"){
		bdate = $("#mgbdate").val();
	}else if(type=="nt"){
		bdate = $("#ntbdate").val();
	}else if(type=="bbin"){
		bdate = $("#bbinbdate").val();
	}	
	
	
	var currdate = '<?=$sysdate?>';
	if(bdate==''){
		alert("请输入时间");
		return false ;
	}
	/*if(!didate(bdate,currdate)){
		alert("只能计算当天之前的反水");
		return false ;		
	}*/
	$("#form1").attr("action","setreamount.php?type="+type+"&bdate="+bdate);
	document.getElementById('form1').submit();
}

 function didate(a, b) {
    var arr = a.split("-");
    var starttime = new Date(arr[0], arr[1], arr[2]);
    var starttimes = starttime.getTime();

    var arrs = b.split("-");
    var lktime = new Date(arrs[0], arrs[1], arrs[2]);
    var lktimes = lktime.getTime();

    if (starttimes >= lktimes) {

        //alert('开始时间大于离开时间，请检查');
        return false;
    }
    else
        return true;

}
</script>
</html>