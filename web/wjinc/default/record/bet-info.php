<link rel="stylesheet" href="/skin/Tables/site.css" />
<?php
	$bet=$this->getRow("select * from {$this->prename}bets where id=?", $args[0]);
	if(!$bet) throw new Exception('单号不存在');
	$betCont=$bet['money'] * $bet['totalNums'];
?>


<div class="example table-responsive">
	<table class="table table-bordered">
		
		<tbody>
		<tr>
			<td style="width:15%; text-align: center;">投注用户</td>
			<td><?=$this->iff($bet['username']==$this->user['username'], $bet['username'], preg_replace('/^(\w).*(\w{2})$/', '\1***\2', $bet['username']))?></td>
			<td style="width:15%; text-align: center;">订单编号</td>
			<td class="text-nowrap"><span style="color: #FF0000;"><?=$bet['wjorderId']?></span></td>
		</tr>
		<tr>
			<td style="width:15%; text-align: center;">彩种</td>
			<td><?=$this->types[$bet['type']]['title']?></td>
			<td style="width:15%; text-align: center;">投注时间</td>
			<td class="text-nowrap"><span style="color: #FF0000;"><?=date('Y-m-d H:i:s',$bet['actionTime'])?></span></td>
		</tr>
		<tr>
			<td style="width:15%; text-align: center;">投注期号</td>
			<td><?=$bet['actionNo']?></td>
			<td style="width:15%; text-align: center;">投注内容</td>
			<td class="text-nowrap"><span style="color: #FF0000;"><?=$bet['actionData']?><?php if($bet['betInfo']){echo '('.$bet['betInfo'].')';}?></span></td>
		</tr>
		<tr>
			<td style="width:15%; text-align: center;">玩法组</td>
			<td><?=$bet['Groupname']?></td>
			<td style="width:15%; text-align: center;">投注注数</td>
			<td class="text-nowrap"><span style="color: #FF0000;"><?=$bet['totalNums'].'注'?></span></td>
		</tr>
		<tr>
			<td style="width:15%; text-align: center;">开奖时间</td>
			<td><?=$this->iff($bet['lotteryNo'], date('Y-m-d H:i:s',$bet['kjTime']), '－')?></td>
			<td style="width:15%; text-align: center;">投注总额</td>
			<td class="text-nowrap"><span style="color: #FF0000;"><?=number_format($betCont, 2)?>元</span></td>
		</tr>
		<tr>
			<td style="width:15%; text-align: center;">中奖金额</td>
			<td><?=$this->iff($bet['lotteryNo'], number_format($bet['bonus'], 2) .'元', '－')?></td>
			<td style="width:15%; text-align: center;">中奖注数</td>
			<td class="text-nowrap"><span style="color: #FF0000;"><?=$this->iff($bet['lotteryNo'], $bet['zjCount'].'注', '－')?></span></td>
		</tr>
		<tr>
			<td style="width:15%; text-align: center;">购买盈亏</td>
			<td><?=$this->iff($bet['lotteryNo'], number_format($bet['bonus'] - $betCont + $bet['rebateMoney'], 2), '－')?>元 <?=$this->iff($bet['lotteryNo'], $this->iff(number_format($bet['bonus'] - $betCont + $bet['rebateMoney'], 2)>=0,"<span class='label label-danger'>赢</span>","<span class='label label-success'>输</span>"), '－')?></td>
			<td style="width:15%; text-align: center;">中奖注数</td>
			<td class="text-nowrap"><span style="color: #FF0000;"><?=$this->iff($bet['lotteryNo'], $bet['zjCount'].'注', '－')?></span></td>
		</tr>
		<tr>
			<td style="width:15%; text-align: center;">开奖号码</td>
			<td><?=$this->ifs($bet['lotteryNo'], '－')?></td>
			<td style="width:15%; text-align: center;">订单状态</td>
			<td class="text-nowrap"><?php
				if($bet['isDelete']==1){
					echo '<font color="#999999">已撤单</font>';
				}elseif(!$bet['lotteryNo']){
					echo '<span class="label label-warning">未开奖</span>';
				}elseif($bet['zjCount']){
					echo '<span class="label label-danger">已派奖</span>';
				}else{
					echo '<span class="label label-success">未中奖</span>';
				}
			?></td>
		</tr>
		</tbody>
	</table>
</div>





