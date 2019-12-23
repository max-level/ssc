<!--?php
include_once("../common/login_check.php");
check_quanxian("ssgl"); 
include_once("../../include/mysqli.php");
include("../../include/pager.class.php");
include("CommonFun.php");

$username = trim($_GET["username"]);
$tradeNo = trim($_GET["tradeNo"]);
$transferType = $_GET["transferType"];

$betDate1 = $_GET["betDate1"];
$betHour1 = $_GET["betHour1"];
$betSecond1 = $_GET["betSecond1"];
$betDate1 = $betDate1==""?date("Y-m-d",time()+12*3600):$betDate1;
$betHour1 = $betHour1==""?"00":$betHour1;
$betSecond1 = $betSecond1==""?"00":$betSecond1;

$betDate2 = $_GET["betDate2"];
$betHour2 = $_GET["betHour2"];
$betSecond2 = $_GET["betSecond2"];
$betDate2 = $betDate2==""?date("Y-m-d",time()+12*3600):$betDate2;
$betHour2 = $betHour2==""?"23":$betHour2;
$betSecond2 = $betSecond2==""?"59":$betSecond2;

$betTime1 = $betDate1." ".$betHour1.":".$betSecond1.":00";
$betTime2 = $betDate2." ".$betHour2.":".$betSecond2.":59";
?-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Welcome</title>
	<link rel="stylesheet" href="../images/css/admin_style_1.css" type="text/css" media="all" />
	<script type="text/javascript" charset="utf-8" src="/js/jquery.js" ></script>
	<script language="JavaScript" src="/js/calendar.js"></script>
</head>
<body>
<div id="pageMain">
	<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="5">
		<tr>
			<td valign="top">
				<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" class="font12" style="border:1px solid #798EB9;">
					<form name="form1" method="get" action="<?=$_SERVER["REQUEST_URI"]?>">
						<tr>
							<td align="left">
								会员
								<input name="username" type="text" id="username" value="<?=$username?>" size="12" />
								&nbsp;&nbsp;交易平台
								<select name="tradeNo" id="tradeNo">
									<option value="">全部</option>
									<option value="12,22" <?=$tradeNo=="12,22"?"selected":""?>>NA真人</option>
									<option value="19,29" <?=$tradeNo=="19,29"?"selected":""?>>AG娱乐</option>
									<option value="16,26" <?=$tradeNo=="16,26"?"selected":""?>>MG娱乐</option>
									<option value="18,28" <?=$tradeNo=="18,28"?"selected":""?>>NT电子</option>
									<option value="17,27" <?=$tradeNo=="17,27"?"selected":""?>>BBIN娱乐</option>
								</select>
								&nbsp;&nbsp;交易类型
								<select name="transferType" id="transferType">
									<option value="">全部</option>
									<option value="12,16,17,18,19" <?=$transferType=="12,19"?"selected":""?>>转入额度</option>
									<option value="22,26,27,28,29" <?=$transferType=="22,29"?"selected":""?>>转出额度</option>
								</select>
							</td>
						</tr>
						<tr>
							<td align="left">
								交易时间
								<input name="betDate1" type="text" id="betDate1" value="<?=$betDate1?>" onClick="new Calendar(2008,2020).show(this);" size="8" maxlength="10" readonly="readonly" />
								<select name="betHour1" id="betHour1">
									<?php
									for ($i=0;$i<24;$i++) {
										$hour = $i<10?"0".$i:$i;
									?>
									<option value="<?=$hour?>" <?=$betHour1==$hour?"selected":""?>><?=$hour?></option>
									<?php } ?>
								</select>
								时
								<select name="betSecond1" id="betSecond1">
									<?php
									for ($i=0;$i<60;$i++) {
										$second = $i<10?"0".$i:$i;
									?>
									<option value="<?=$second?>" <?=$betSecond1==$second?"selected":""?>><?=$second?></option>
									<?php } ?>
								</select>
								分
								&nbsp;&nbsp;到
								<input name="betDate2" type="text" id="betDate2" value="<?=$betDate2?>" onClick="new Calendar(2008,2020).show(this);" size="8" maxlength="10" readonly="readonly" />
								<select name="betHour2" id="betHour2">
									<?php
									for ($i=0;$i<24;$i++) {
										$hour = $i<10?"0".$i:$i;
									?>
									<option value="<?=$hour?>" <?=$betHour2==$hour?"selected":""?>><?=$hour?></option>
									<?php } ?>
								</select>
								时
								<select name="betSecond2" id="betSecond2">
									<?php
									for ($i=0;$i<60;$i++) {
										$second = $i<10?"0".$i:$i;
									?>
									<option value="<?=$second?>" <?=$betSecond2==$second?"selected":""?>><?=$second?></option>
									<?php } ?>
								</select>
								分
								&nbsp;&nbsp;<input type="submit" name="Submit" value="查询" />
							</td>
						</tr>
					</form>
				</table>
				<table width="100%" border="0" cellpadding="5" cellspacing="1" class="font12" style="margin-top:5px;line-height:20px;" bgcolor="#798EB9">   
					<tr style="background-color:#3C4D82;color:#FFF;text-align:center;">
						<td>会员账号</td>
						<td>交易单号</td>
						<td>交易时间</td>
						<td>交易类别</td>
						<td>交易前余额</td>
						<td>交易额度</td>
						<td>交易后额度</td>
						<td>平台类型</td>
					</tr>
					<?php
					$where = "";
					if ($username!="") {
						$where .= " and username='$username'";
					}
					if ($tradeNo!="") {
						$where .= " and zz_type in（$tradeNo) ";
					}
					if ($transferType!="") {
						$where .= " and zz_type in($transferType) ";
					}
					$sql = "SELECT id FROM ag_zhenren_zz WHERE   zz_time>='$betTime1' and zz_time<='$betTime2' $where order by id desc";
					$query = $mysqli->query($sql);
					//echo "$sql"; 
					$sum = $mysqli->affected_rows;
					$thisPage = 1;
					$pagenum = 50;
					if($_GET['page']) {
						$thisPage = $_GET['page'];
					}
					$CurrentPage = isset($_GET['page'])?$_GET['page']:1;
					$myPage = new pager($sum,intval($CurrentPage),$pagenum);
					$pageStr = $myPage->GetPagerContent();
					  
					$id = '';
					$i = 1;
					$start = ($thisPage-1)*$pagenum+1;
					$end = $thisPage*$pagenum;
					while ($row = $query->fetch_array()) {
						if($i>=$start && $i<=$end) {
							$id .= $row['id'].',';
						}
						if($i>$end) break;
						$i++;
					}
					if ($id) {
						$id = rtrim($id,',');
						$sql = "select * from ag_zhenren_zz where id in($id) order by id desc";
						//echo "$sql"; 
						$query = $mysqli->query($sql);
						
						while ($rows = $query->fetch_array()) {
							$color = "#FFFFFF";
							$over = "#EBEBEB";
							$out = "#ffffff";
							if($rows["zz_type"]==12){
								$Transfer_type='<font color="#FF0000">NA转入</font>';
							}else if($rows["zz_type"]==22){
								$Transfer_type='NA转出';
							}else if($rows["zz_type"]==19){
								$Transfer_type='<font color="#FF0000">AG转入</font>';
							}else if($rows["zz_type"]==29){
								$Transfer_type='AG转出';
							}elseif($rows["zz_type"]==16){
								$Transfer_type='<font color="#FF0000">MG转入</font>';
							}else if($rows["zz_type"]==26){
								$Transfer_type='MG转出';
							}elseif($rows["zz_type"]==17){
								$Transfer_type='<font color="#FF0000">BBIN转入</font>';
							}else if($rows["zz_type"]==27){
								$Transfer_type='BBIN转出';
							}elseif($rows["zz_type"]==18){
								$Transfer_type='<font color="#FF0000">NT转入</font>';
							}else if($rows["zz_type"]==28){
								$Transfer_type='NT转出';
							}else{
								$Transfer_type='未找到类型';
							}
					?>
					<tr align="center" onMouseOver="this.style.backgroundColor='<?=$over?>'" onMouseOut="this.style.backgroundColor='<?=$out?>'" style="background-color:<?=$color?>;line-height:20px;height:25px;">
						<td><?=$rows["username"]?> </td>
						<td><?=$rows["billno"]?></td>
						<td><?=$rows["zz_time"]?></td>
						<td><?=$Transfer_type?></td>
						<td><?=sprintf("%.2f",$rows['moneyA'])?></td>
						<td><?=sprintf("%.2f",$rows['zz_money'])?></td>
						<td><?=sprintf("%.2f",$rows['moneyB'])?></td>
						<td><?=$rows["live_type"]?></td>
					</tr>
					<?php
						}
					}
					?>
					<tr style="background-color:#FFFFFF;">
						<td colspan="12" align="center"><?php echo $pageStr;?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
</body>
</html>