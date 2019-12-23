

		<?php
		  $date=strtotime("00:00");
		  $data=$this->getDateCount($date);
		  $jtTCount=number_format($data['betAmount']-$data['zjAmount']-$data['fanDianAmount']-$data['brokerageAmount'],2,'.','');
		  $jtYKCount=number_format($data['betAmount'],2,'.','');
		  if($jtTCount>0){
			  $jtTCount="<span style='color:#76a4fa'>".$jtTCount."</span>";
			 }else if($jtTCount<0){
			   $jtTCount="<span style='color:#76a4fa'>-".abs($jtTCount)."</span>";
			 }else{
			  $jtTCount=$jtTCount;
		   }
		 ?>
	<!--
	<article class="stats_overview" style=" margin:10px 40% 10px auto;">
		<div class="overview_today">
			<p class="overview_day">今日统计</p>
			<p class="overview_count" style="color:#76a4fa"><?=$jtTCount?></p>
			<p class="overview_type">盈亏</p>
			<p class="overview_count" style="color:#81c65b"><?=$jtYKCount?></p>
			<p class="overview_type">投注额</p>
		</div>-->
		<?php 
            $date=strtotime("00:00")-24*3600;
			$data=$this->getDateCount($date);
		  $ztTCount=number_format($data['betAmount']-$data['zjAmount']-$data['fanDianAmount']-$data['brokerageAmount'],2,'.','');
		  $ztYKCount=number_format($data['betAmount'],2,'.','');
		  if($ztTCount>0){
			  $ztTCount="<span style='color:#76a4fa'>".$ztTCount."</span>";
			 }else if($ztTCount<0){
			  $ztTCount="<span style='color:#76a4fa'>-".abs($ztTCount)."</span>";
			 }else{
			  $ztTCount=$ztTCount;
		   }
        ?>
<!--
		<div class="overview_previous">
			<p class="overview_day">昨日统计</p>
			<p class="overview_count" style="color:#76a4fa"><?=$ztTCount?></p>
			<p class="overview_type">盈亏</p>
			<p class="overview_count" style="color:#81c65b"><?=$ztYKCount?></p>
			<p class="overview_type">投注额</p>
		</div>
	</article>
	<div class="clear"></div>
</article>
-->



<?php
	$date=strtotime(date("Y-m-d",$this->time)." 00:00:00");
	//echo date("Y-m-d",$this->time-24*3600);exit;
	$sql="select count(uid) allUser, sum(regTime>=$date) todayReg, sum(type=3) gdCount, sum(type=2) zdlCount, sum(type=1) dlCount, sum(type=0) memberCount, sum(coin+fcoin) amountCount from {$this->prename}members where isDelete=0";
	//echo $sql;
	$data=$this->getRow($sql);
	//var_dump($data);

	//累计赠送彩金
	$todaySql1 = "select sum(amount) sum from ssc_member_recharge where info='赠送彩金'";
	$zscj = $this->getrow($todaySql1);
	$zscj = (float)$zscj['sum'];
    ?>
<br>
<div align="center"><B><font color="red" size="4">统&nbsp;&nbsp;计&nbsp;&nbsp;报&nbsp;&nbsp;表</font></B></div>

<article class="module width_full">
	<header><h3 class="tabs_involved">用户统计</h3></header>
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th>用户总数</th> 

			<th>股东人数</th> 
			<th>总代理人数</th> 
			<th>代理人数</th> 
			<th>会员人数</th> 
			<th>当前在线人数</th>
			<th>余额总数</th>
			<th>累计赠送彩金(元)</th> 
		</tr> 
	</thead> 
	<tbody> 
		<tr> 
			<td><?=$data['allUser']?></td> 
			<td><?=$data['gdCount']?></td> 
			<td><?=$data['zdlCount']?></td> 
			<td><?=$data['dlCount']?></td> 
			<td><?=$data['memberCount']?></td> 
			<td><?=$this->getValue("select count(uid) from {$this->prename}member_session where isOnLine=1 and {$this->time}-accessTime<900 and uid in (select uid from {$this->prename}members)")?></td> 
			<td><?=number_format($data['amountCount'])?></td> 
			<td><?=$zscj?></td>
		</tr> 
	</tbody> 
	</table>
</article>
<?php
	//今日零点时间
	$time = strtotime(date('Y-m-d'));
	//今日充值人数显示
	if($_GET['fromTime'] || $_GET['toTime'])
	{
		$time = strtotime($_GET['fromTime']).' AND `rechargeTime` <'.strtotime($_GET['toTime'].'23:59:59');
	}
	$todaySql1 = "select distinct(uid) from ssc_member_recharge where `rechargeTime` > {$time} AND state IN (1,2,9)";
	$todayCz = count($this->getrows($todaySql1));

	//新用户充值 今天注册的用户充值情况
	//今日零点时间
	$time = strtotime(date('Y-m-d'));
	if($_GET['fromTime'] || $_GET['toTime'])
	{
		$time = strtotime($_GET['fromTime']).' AND `regTime` <'.strtotime($_GET['toTime'].'23:59:59');
	}
	$todaySql1 = "select uid from ssc_members where `regTime` > {$time}";
	$todayZc =  count($zcrs =$this->getrows($todaySql1));
	$todayZcje = '0';
	if($todayZc > 0)
	{
		$zcUids = array();
		foreach ($zcrs as $key => $value) {
			# code...
			$zcUids[] = $value['uid'];
		}
		$str = join(',',$zcUids);
		$todaySql1 = "select distinct(uid) sum from ssc_member_recharge where uid IN ({$str})";
		$todayZcje = count($this->getrows($todaySql1));
	}

	//今日充值金额
	//今日零点时间
	$time = strtotime(date('Y-m-d'));
	if($_GET['fromTime'] || $_GET['toTime'])
	{
		$time = strtotime($_GET['fromTime']).' AND `rechargeTime` <'.strtotime($_GET['toTime'].'23:59:59');
	}
	$todaySql1 = "select sum(amount) sum from ssc_member_recharge where `rechargeTime` > {$time} AND state IN (1,2,9) AND info != '赠送彩金'";
	$todayAmount = $this->getrow($todaySql1);
	$todayAmount = (float)$todayAmount['sum'];

	//今日提现金额
    $totalAmount = '0';
    $startTime = strtotime(date('Y-m-d'));
    $endTime = strtotime(date('Y-m-d'.'23:59:59'));
    //今日零点时间
	$time = strtotime(date('Y-m-d'));
	if($_GET['fromTime'] || $_GET['toTime'])
	{
		$startTime = strtotime($_GET['fromTime']);
		$endTime = strtotime($_GET['toTime'].'23:59:59');
	}
    $hjTimeWhere="and c.actionTime between $startTime and $endTime";
    $totalAmountSql = "select sum(c.amount)  sum from {$this->prename}bank_list b, {$this->prename}member_cash c, {$this->prename}members u,{$this->prename}member_bank d where c.state<5 and b.isDelete=0 and c.isDelete=0 $hjTimeWhere and c.bankId=b.id and c.uid=u.uid and u.uid=d.uid AND c.state IN (3,0) order by c.id desc";
	//$todaySql1 = "select sum(amount) sum from ssc_member_cash where state IN (3,0) AND `actionTime` > {$time}";
	//$todayCash = $this->getrow($todaySql1);
	//$todayCash = (float)$todayCash['sum'];
	$todayCash = $this->getrow($totalAmountSql);
    $todayCash = $todayCash['sum'] ? $todayCash['sum'] : '0.00' ;

	//今日下注人数
	$time = strtotime(date('Y-m-d'));
	if($_GET['fromTime'] || $_GET['toTime'])
	{
		$time = strtotime($_GET['fromTime']).' AND `actionTime` <'.strtotime($_GET['toTime'].'23:59:59');
	}
	$todaySql1 = "select distinct(uid) from ssc_bets where `actionTime` > {$time}";
	$xzrs = count($this->getrows($todaySql1));

	//今日投注金额
	$todaySql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time}";
	$tzje = $this->getrow($todaySql1);
	$tzje = (float)$tzje['sum'];

	//今日中奖金额
	$todaySql1 = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time}";
	$jrzj = $this->getrow($todaySql1);
	$jrzj = (float)$jrzj['sum'];

	//今日盈亏
	$jryl=$tzje-$jrzj;
	$jryl=number_format($jryl,2);
?>
<br><br>
<div align="center">
			<form action="/admin778899.php/countData/Statistics" target="ajax" call="defaultSearch" dataType="html">
时间从 <input type="date" class="alt_btn" value="<?php echo $_GET['fromTime'];?>" name="fromTime"/> 到 <input type="date" value="<?php echo $_GET['toTime'];?>" name="toTime" class="alt_btn"/>&nbsp;&nbsp;
				<input type="submit" value="查找" class="alt_btn">
				<input type="reset" value="重置条件">
			</form>

</div>
<article class="module width_full">
	<header>
		<h3 class="tabs_involved">
			统计概况<?php 
				$endTime = date('Y-m-d')." 23:59:59";
				$stratTime = date('Y-m-d')." 00:00:00";
				if($_GET['fromTime'] || $_GET['toTime'])
				{
					$endTime = $_GET['toTime']." 23:59:59";
					$stratTime = $_GET['fromTime']." 00:00:00";
				}
				echo "<font color=#9966ff>$stratTime</font>&nbsp;至&nbsp;<font color=#9966ff>$endTime</font>";
			?>
		</h3>
	</header>
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th>充值(人)</th> 
			<th>注册人数</th> 
			<th>新客户充值(人)</th> 
			<th>充值(元)</th> 
			<th>提现(元)</th> 
			<th>下注(人)</th> 
			<th>投注(元)</th> 
			<th>中奖(元)</th> 
			<th>赢亏(元)</th> 

		</tr> 
	</thead> 
	<tbody> 
		<tr> 
			<td><?=$todayCz?></td> 
			<td><?=$data['todayReg']?></td>
			<td><?=$todayZcje?></td> 
			<td><?=$todayAmount?></td> 
			<td><?=$todayCash?></td> 
			<td><?=$xzrs?></td> 
			<td><?=$tzje?></td> 
			<th><?=$jrzj?></th> 
			<th>
<?			
		if($jryl < 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>			
			
			
			<?=$jryl?></font></th> 
		</tr> 
	</tbody> 
	</table>
</article>

<article class="module width_full">
	<header><h3 class="tabs_involved">彩种投注概况<font color="#339900">(本数据仅为大致参考,涉及到“未开奖”和“跨日期开奖”的彩种并不精确。)</font></h3></header>
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th></th> 
			<th>香港六合彩</th> 
			<th>北京PK10</th> 
			<th>重庆时时彩</th> 
			<th>幸运农场</th> 
			<th>幸运飞艇</th> 
			<th>极速六合彩</th> 
			<th>江苏快3</th> 
			<th>广东11选5</th> 
			<th>北京快乐8</th> 
			<th>快乐10分</th> 
			<th>PC蛋蛋</th>
			<th>极速赛车</th> 
			<th>极速时时彩</th> 			
		</tr> 
	</thead> 

<?
//香港六合彩

	//今日香港六合彩投注金额
	$xglhcSql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 70";
	$xglhctzje = $this->getrow($xglhcSql1);
	$xglhctzje = (float)$xglhctzje['sum'];

	//今日香港六合彩中奖金额
	$xglhczjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 70";
	$xglhczjje = $this->getrow($xglhczjje);
	$xglhczjje = (float)$xglhczjje['sum'];

	//今日香港六合彩盈亏
	$xglhcyl=$xglhctzje-$xglhczjje;

//北京PK10

	//今日北京PK10投注金额
	$bjscSql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 50";
	$bjsctzje = $this->getrow($bjscSql1);
	$bjsctzje = (float)$bjsctzje['sum'];

	//今日北京PK10中奖金额
	$bjsczjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 50";
	$bjsczjje = $this->getrow($bjsczjje);
	$bjsczjje = (float)$bjsczjje['sum'];

	//今日北京PK10盈亏
	$bjscyl=$bjsctzje-$bjsczjje;

//重庆时时彩

	//重庆时时彩投注金额
	$cqsscSql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 1";
	$cqssctzje = $this->getrow($cqsscSql1);
	$cqssctzje = (float)$cqssctzje['sum'];

	//重庆时时彩中奖金额
	$cqssczjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 1";
	$cqssczjje = $this->getrow($cqssczjje);
	$cqssczjje = (float)$cqssczjje['sum'];

	//重庆时时彩盈亏
	$cqsscyl=$cqssctzje-$cqssczjje;

//重庆幸运农场

	//重庆幸运农场投注金额
	$cqxyncSql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 61";
	$cqxynctzje = $this->getrow($cqxyncSql1);
	$cqxynctzje = (float)$cqxynctzje['sum'];

	//重庆幸运农场中奖金额
	$cqxynczjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 61";
	$cqxynczjje = $this->getrow($cqxynczjje);
	$cqxynczjje = (float)$cqxynczjje['sum'];

	//重庆幸运农场盈亏
	$cqxyncyl=$cqxynctzje-$cqxynczjje;

//幸运飞艇

	//幸运飞艇投注金额
	$xyftSql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 55";
	$xyfttzje = $this->getrow($xyftSql1);
	$xyfttzje = (float)$xyfttzje['sum'];

	//幸运飞艇中奖金额
	$xyftzjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 55";
	$xyftzjje = $this->getrow($xyftzjje);
	$xyftzjje = (float)$xyftzjje['sum'];

	//幸运飞艇盈亏
	$xyftyl=$xyfttzje-$xyftzjje;

//极速六合彩

	//极速六合彩投注金额
	$jslhcSql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 74";
	$jslhctzje = $this->getrow($jslhcSql1);
	$jslhctzje = (float)$jslhctzje['sum'];

	//极速六合彩中奖金额
	$jslhczjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 74";
	$jslhczjje = $this->getrow($jslhczjje);
	$jslhczjje = (float)$jslhczjje['sum'];

	//极速六合彩盈亏
	$jslhcyl=$jslhctzje-$jslhczjje;

//江苏快3

	//江苏快3投注金额
	$jsksSql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 10";
	$jskstzje = $this->getrow($jsksSql1);
	$jskstzje = (float)$jskstzje['sum'];

	//江苏快3中奖金额
	$jskszjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 10";
	$jskszjje = $this->getrow($jskszjje);
	$jskszjje = (float)$jskszjje['sum'];

	//江苏快3盈亏
	$jsksyl=$jskstzje-$jskszjje;

//广东11选5

	//广东11选5投注金额
	$gd11x5Sql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 21";
	$gd11x5tzje = $this->getrow($gd11x5Sql1);
	$gd11x5tzje = (float)$gd11x5tzje['sum'];

	//广东11选5中奖金额
	$gd11x5zjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 21";
	$gd11x5zjje = $this->getrow($gd11x5zjje);
	$gd11x5zjje = (float)$gd11x5zjje['sum'];

	//广东11选5盈亏
	$gd11x5yl=$gd11x5tzje-$gd11x5zjje;

//北京快乐8

	//北京快乐8投注金额
	$bjkl8Sql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 65";
	$bjkl8tzje = $this->getrow($bjkl8Sql1);
	$bjkl8tzje = (float)$bjkl8tzje['sum'];

	//北京快乐8中奖金额
	$bjkl8zjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 65";
	$bjkl8zjje = $this->getrow($bjkl8zjje);
	$bjkl8zjje = (float)$bjkl8zjje['sum'];

	//北京快乐8盈亏
	$bjkl8yl=$bjkl8tzje-$bjkl8zjje;

//广东快乐10分

	//广东快乐10分投注金额
	$gdkl10Sql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 60";
	$gdkl10tzje = $this->getrow($gdkl10Sql1);
	$gdkl10tzje = (float)$gdkl10tzje['sum'];

	//广东快乐10分中奖金额
	$gdkl10zjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 60";
	$gdkl10zjje = $this->getrow($gdkl10zjje);
	$gdkl10zjje = (float)$gdkl10zjje['sum'];

	//广东快乐10分盈亏
	$gdkl10yl=$gdkl10tzje-$gdkl10zjje;

//PC蛋蛋

	//PC蛋蛋投注金额
	$pcddSql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 66";
	$pcddtzje = $this->getrow($pcddSql1);
	$pcddtzje = (float)$pcddtzje['sum'];

	//PC蛋蛋中奖金额
	$pcddzjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 66";
	$pcddzjje = $this->getrow($pcddzjje);
	$pcddzjje = (float)$pcddzjje['sum'];

	//PC蛋蛋盈亏
	$pcddyl=$pcddtzje-$pcddzjje;
	
//极速赛车

	//极速赛车投注金额
	$jsscSql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 72";
	$jssctzje = $this->getrow($jsscSql1);
	$jssctzje = (float)$jssctzje['sum'];

	//今日极速赛车中奖金额
	$jssczjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 72";
	$jssczjje = $this->getrow($jssczjje);
	$jssczjje = (float)$jssczjje['sum'];

	//今日极速赛车盈亏
	$jsscyl=$jssctzje-$jssczjje;

//极速时时彩

	//极速时时彩投注金额
	$jssscSql1 = "select sum(money) sum from ssc_bets where `actionTime` > {$time} and type = 73";
	$jsssctzje = $this->getrow($jssscSql1);
	$jsssctzje = (float)$jsssctzje['sum'];

	//极速时时彩中奖金额
	$jsssczjje = "select sum(bonus) sum from ssc_bets where `actionTime` > {$time} and type = 73";
	$jsssczjje = $this->getrow($jsssczjje);
	$jsssczjje = (float)$jsssczjje['sum'];

	//极速时时彩盈亏
	$jssscyl=$jsssctzje-$jsssczjje;

?>
	
	<tbody> 
		<tr> 
			<td>投注额</td> 
			<td><?=$xglhctzje?></td>
			<td><?=$bjsctzje?></td> 
			<td><?=$cqssctzje?></td> 
			<td><?=$cqxynctzje?></td> 
			<td><?=$xyfttzje?></td> 
			<td><?=$jslhctzje?></td> 
			<td><?=$jskstzje?></td> 
			<td><?=$gd11x5tzje?></td> 
			<td><?=$bjkl8tzje?></td> 
			<td><?=$gdkl10tzje?></td> 
			<td><?=$pcddtzje?></td>
			<td><?=$jssctzje?></td> 
			<td><?=$jsssctzje?></td>
		</tr> 
	</tbody> 
	<tbody> 
		<tr> 
			<td>中奖额</td> 
			<td><?=$xglhczjje?></td>
			<td><?=$bjsczjje?></td> 
			<td><?=$cqssczjje?></td> 
			<td><?=$cqxynczjje?></td> 
			<td><?=$xyftzjje?></td> 
			<td><?=$jslhczjje?></td> 
			<td><?=$jskszjje?></td> 
			<td><?=$gd11x5zjje?></td> 
			<td><?=$bjkl8zjje?></td> 
			<td><?=$gdkl10zjje?></td> 
			<td><?=$pcddzjje?></td>
			<td><?=$jssczjje?></td> 
			<td><?=$jsssczjje?></td>
		</tr> 
	</tbody> 
	<tbody> 
		<tr> 
			<td>盈亏</td> 
			<td>
<?			
		if($xglhcyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$xglhcyl?>
</font></td>
			<td>
<?			
		if($bjscyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$bjscyl?>
</font></td> 
			<td><?			
		if($cqsscyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$cqsscyl?>
</font></td> 
			<td>
<?			
		if($cqxyncyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$cqxyncyl?>
</font></td> 
			<td>
<?			
		if($xyftyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$xyftyl?>
</font>			
			
			</td> 
			<td>
			
<?			
		if($jslhcyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$jslhcyl?>
</font>	
			
			</td> 
			<td>
			
<?			
		if($jsksyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$jsksyl?>
</font>				
			
			</td> 
			<td>
			
<?			
		if($gd11x5yl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$gd11x5yl?>
</font>			
			
			</td> 
			<td>
			
<?			
		if($bjkl8yl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$bjkl8yl?>
</font>	
			
			</td> 
			<td>
			
<?			
		if($gdkl10yl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$gdkl10yl?>
</font>	
			
			</td> 
			<td>
			
<?			
		if($pcddyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$pcddyl?>
</font>				

			</td>
			<td>
			
<?			
		if($jsscyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$jsscyl?>
</font>	
			
			</td> 
			<td>
			
<?			
		if($jssscyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$jssscyl?>
</font>				

			</td>
		</tr> 
	</tbody> 

	</table>
</article>


<article class="module width_full">
    <header><h3 class="tabs_involved">彩种投注金额总计<span class="spn1">（彩种名称：投注金额）</span></h3></header>
    <div class="module_content">
	<?php
		$sql="select type, sum(money) amount from {$this->prename}bets where `actionTime` > {$time} AND lotteryNo!='' group by type";//echo $sql;
		$data=$this->getObject($sql, 'type');
		$this->getTypes();
		if($this->types) foreach($this->types as $var){
			if($var['isDelete']==0 && $var['enable']==1){
	?>
        <div class="cztz"><span class="title"><?=$var['title']?></span><span class="spn2">￥<?=number_format($this->ifs($data[$var['id']]['amount'], 0),2)?></span></div>
	<?php }} ?>
    </div>
</article>

<div class="tip">提示：本页数据被缓存5分钟，你看到的可能是几分钟之前的数据！</div>
