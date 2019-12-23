

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
<?php
	//今日零点时间
	$time = strtotime(date('Y-m-d'));
	//今日充值人数显示
	$todaySql1 = "select distinct(uid) from ssc_member_recharge where `rechargeTime` > {$time} AND state IN (1,2,9)";
	$todayCz = count($this->getrows($todaySql1));

	//新用户充值 今天注册的用户充值情况
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
	$todaySql1 = "select sum(amount) sum from ssc_member_recharge where `rechargeTime` > {$time} AND state IN (1,2,9) AND info != '赠送彩金'";
	$todayAmount = $this->getrow($todaySql1);
	$todayAmount = (float)$todayAmount['sum'];

	//今日提现金额
    $totalAmount = '0';
    $startTime = strtotime(date('Y-m-d'));
    $endTime = strtotime(date('Y-m-d'.'23:59:59'));
    $hjTimeWhere="and c.actionTime between $startTime and $endTime";
    $totalAmountSql = "select sum(c.amount)  sum from {$this->prename}bank_list b, {$this->prename}member_cash c, {$this->prename}members u,{$this->prename}member_bank d where c.state<5 and b.isDelete=0 and c.isDelete=0 $hjTimeWhere and c.bankId=b.id and c.uid=u.uid and u.uid=d.uid AND c.state IN (3,0) order by c.id desc";
	//$todaySql1 = "select sum(amount) sum from ssc_member_cash where state IN (3,0) AND `actionTime` > {$time}";
	//$todayCash = $this->getrow($todaySql1);
	//$todayCash = (float)$todayCash['sum'];
	$todayCash = $this->getrow($totalAmountSql);
    $todayCash = $todayCash['sum'] ? $todayCash['sum'] : '0.00' ;

	//今日下注人数
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

	//总计下注人数
	$zjSql1 = "select distinct(uid) from ssc_bets";
	$zjxzrs = count($this->getrows($zjSql1));

	//总计投注金额
	$todaySql1 = "select sum(money) from ssc_bets";
	$zjtzje = $this->getValue($todaySql1);
	$zjtzje = (float)$zjtzje;

//	$zjSql2 = "select sum(money) sum from ssc_bets order by id desc";
//	$zjtzje = $this->getValue($zjSql2);
//	$zjtzje = (float)$tzje['sum'];

	//总计中奖金额
	$todaySql1 = "select sum(bonus) from ssc_bets";
	$zjzjje = $this->getValue($todaySql1);
	$zjzjje = (float)$zjzjje;

//	$zjSql3 = "select sum(bonus) sum from ssc_bets";
//	$zjzjje = $this->getrow($zjSql3);
//	$zjzjje = (float)$jrzj['sum'];

	//总计盈亏
	$zjyl=$zjtzje-$zjzjje;
	$zjyl=number_format($zjyl,2);	

	//总计充值金额
	$todaySql1 = "select sum(amount) sum from ssc_member_recharge where state IN (1,2,9)";
	$zjAmount = $this->getValue($todaySql1);
	$zjAmount = (float)$zjAmount;	

	//总计提现金额
	$zjtxjeSql = "select sum(amount) from ssc_member_cash where state IN (3,0)";//提现已支付总额 
	$zjtxje = $this->getValue($zjtxjeSql);
	$zjtxje = (float)$zjtxje;	

	//充值差额
	$czce	= $zjAmount - $zjtxje;
	?>	
<article class="module width_full">
	<header align="center"><div align="center"><h3 class="tabs_involved"><font color="red">用&nbsp;&nbsp;户&nbsp;&nbsp;统&nbsp;&nbsp;计</font></h3></div></header>
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th>用户总数</th> 
			<th>会员人数</th> 
			<th>新增注册</th>
			<th>当日注册充值</th>
			<th>今日充值(元)</th> 			
			<th>当前在线人数</th>
			<th>今日下注(人)</th> 			

		</tr> 
	</thead> 
	<tbody> 
		<tr> 
			<td><?=$data['allUser']?></td> 
			<td><?=$data['memberCount']?></td>
			<td><?=$data['todayReg']?></td>
			<td><?=$todayZcje?></td>
			<td><?=$todayAmount?></td> 			
			<td><?=$this->getValue("select count(uid) from {$this->prename}member_session where isOnLine=1 and {$this->time}-accessTime<900 and uid in (select uid from {$this->prename}members)")?></td> 
			<td><?=$xzrs?></td> 
		</tr> 
	</tbody> 
	</table>
</article>

<article class="module width_full">
	<header><div align="center"><h3 class="tabs_involved"><font color="red">账&nbsp;&nbsp;务&nbsp;&nbsp;简&nbsp;&nbsp;报</font></h3></div></header>
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th>累计赠送彩金(元)</th> 
			<th>今日充值(元)</th> 
			<th>今日提现(元)</th> 
			<th>今日充值差(元)</th> 			
			<th>今日投注(元)</th> 
			<th>今日中奖(元)</th> 
			<th>今日赢亏(元)</th> 

		</tr> 
	</thead> 
<?php
	$todayczc = $todayAmount - $todayCash;
?>
	<tbody> 
		<tr> 
			<td><?=$zscj?></td>
			<td><?=$todayAmount?></td> 
			<td><?=$todayCash?></td> 
			<td><?=$todayczc?></td> 			
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
	<header><div align="center"><h3 class="tabs_involved"><font color="red">运&nbsp;&nbsp;营&nbsp;&nbsp;数&nbsp;&nbsp;据</font></h3></div></header>
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th>总计充值</th>
			<th>总计提现</th>
			<th>充值差额</th>			
			<th>总计投注人数</th>
			<th>会员总余额</th>
			<th>总计投注金额</th>			
			<th>总计派奖金额</th> 
			<th>总盈利</th> 

		</tr> 
	</thead> 
<?php
	$todayczc = $todayAmount - $todayCash;
?>
	<tbody> 
		<tr> 
			<th><?=$zjAmount?></th>
			<th><?=$zjtxje?></th>
			<th>
			
<?			
		if($czce < 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>			
			
			
			<?=$czce?></font>			
			
			</th>			
			<td><?=$zjxzrs?></td> 
		<td><?=number_format($data['amountCount'])?></td> 
			<td><?=$zjtzje?></td> 
			<td><?=$zjzjje?></td>
			<td>
<?php
		if($zjyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>			
			
			<?=$zjyl?></td> 
</font>
		</tr> 
	</tbody> 
	</table>
</article>
<br><br>
<article class="module width_full">
	<header><h3 class="tabs_involved"><font color="red">今日彩种投注概况</font><font color="#339900">(本数据仅为大致参考,涉及到“未开奖”和“跨日期开奖”的彩种并不精确。)</font></h3></header>
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



?>
	
	<tbody> 
		<tr> 
			<td>投注额</td> 
			<td><?=$xglhctzje?></td>
			<td><?=$bjsctzje?></td> 
			<td><?=$cqssctzje?></td> 
			<td><?=$cqxynctzje?></td> 
			<td><?=$xyfttzje?></td> 
			<td><?=$jskstzje?></td> 
			<td><?=$gd11x5tzje?></td> 
			<td><?=$bjkl8tzje?></td> 

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
			<td><?=$jskszjje?></td> 
			<td><?=$gd11x5zjje?></td> 
			<td><?=$bjkl8zjje?></td> 

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

		</tr> 
	</tbody> 

	</table>

</article>


<article class="module width_full">
	<header><h3 class="tabs_involved"><font color="red">今日彩种投注概况</font><font color="#339900">(本数据仅为大致参考,涉及到“未开奖”和“跨日期开奖”的彩种并不精确。)</font></h3></header>
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th>&nbsp;</th> 
			<th>北京快乐8</th> 
			<th>快乐10分</th> 
			<th>极速六合彩</th> 
			<th>极速赛车</th> 
			<th>极速时时彩</th> 
			<th>&nbsp;</th> 
			<th>&nbsp;</th> 
			<th>&nbsp;</th> 
		</tr> 
	</thead> 

<?

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

?>
	
	<tbody> 
		<tr> 
			<td>投注额</td> 
			<td><?=$gdkl10tzje?></td> 
			<td><?=$pcddtzje?></td> 
			<td><?=$jslhctzje?></td> 
			<td><?=$jssctzje?></td> 
			<td><?=$jsssctzje?></td> 
			<td>&nbsp;</td> 
			<td>&nbsp;</td> 
			<td>&nbsp;</td>
		</tr> 
	</tbody> 
	<tbody> 
		<tr> 
			<td>中奖额</td> 
			<td><?=$gdkl10zjje?></td> 
			<td><?=$pcddzjje?></td>
			<td><?=$jslhczjje?></td> 
			<td><?=$jssczjje?></td> 
			<td><?=$jsssczjje?></td> 
			<td>&nbsp;</td> 
			<td>&nbsp;</td> 
			<td>&nbsp;</td>

		</tr> 
	</tbody> 
	<tbody> 
		<tr> 
			<td>盈亏</td> 
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
			<td><?			
		if($jslhcyl <= 0){print"<font color=green>";}
			else{
			print"<font color=red>";
		}

?>
<?=$jslhcyl?>
</font></td> 
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
			<td>
&nbsp;
			</td> 
			<td>
&nbsp;	
			</td> 
			<td>
&nbsp;
			</td> 

		</tr> 
	</tbody> 

	</table>

</article>	
	

<article class="module width_full">
    <header><h3 class="tabs_involved"><font color="red">彩种投注金额统计</font><span class="spn1">（彩种名称：投注金额）</span></h3></header>
    <div class="module_content">
	<?php
		$sql="select type, sum(money) amount from {$this->prename}bets where lotteryNo!='' group by type";
		$data=$this->getObject($sql, 'type');
		$this->getTypes();
		if($this->types) foreach($this->types as $var){
			if($var['isDelete']==0 && $var['enable']==1){
	?>
        <div class="cztz"><span class="title"><?=$var['title']?></span><span>￥<?=number_format($this->ifs($data[$var['id']]['amount'], 0),2)?></span></div>
	<?php }} ?>
    </div>
</article>

<div class="tip">提示：本页数据被缓存5分钟，你看到的可能是几分钟之前的数据！</div>
