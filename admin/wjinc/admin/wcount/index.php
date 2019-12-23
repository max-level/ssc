<?php
$this->getTypes();
if($_REQUEST['type']=intval($_REQUEST['type'])){
	$where="and b.id={$_REQUEST['type']}";
}
$sql = "select b.id,b.title,actionTime,a.type,a.Groupname,a.actionData,a.actionNo,a.odds,sum(a.money),sum(a.money)*odds-sum(a.money) as total from ssc_bets a inner join ssc_type b on a.type=b.id where lotteryNo='' $where GROUP BY a.type,a.Groupname,a.actionData ORDER BY a.type,total desc";
$data=$this->getPage($sql, $this->page, $this->pageSize);
?>
<article class="module width_full">
	
	<header style="position: relative;">
		<form action="/admin778899.php/wount/index" target="ajax" call="defaultSearch" dataType="html">
		<h3 class="tabs_involved" >未结算注单统计</h3>
		<select style="width:100px;position: absolute;right: 132px;top:2px;height:28px;border-radius: 5px" name="type">
						<option value="">全部彩种</option>
					<?php if($this->types) foreach($this->types as $var){
					
				?>
					<option value="<?=$var['id']?>" title="<?=$var['title']?>"><?=$this->ifs($var['shortName'], $var['title'])?></option>
				`<?php } ?>
				</select>
			<input type="submit" value="查找" style="position: absolute;right: 77px;top:2px;height:28px;width:50px;border-radius: 5px;background: #30B0C8;color:#fff;border:0 none">
		</form>
	</header>
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th>时间</th> 
			<th>彩种</th> 
			<th>玩法</th> 
			<th>号码</th> 
			<th>下注金额</th> 
			<th>期号</th> 
			<th>预计可赢</th> 			
		</tr> 
	</thead> 
	<tbody id="nav01"> 
		 
		<?php   
			foreach($data['data'] as $key=>$var){?>
				<tr>
				<td><?php echo date("Y-m-d H:i:s",$var['actionTime'])?></td>
				<td><?=$var['title']?></td>
				<td><?=$var['Groupname']?></td>
				<td><?php echo $var['actionData'].'@'.$var['odds']?></td>
				<td><?=$var['sum(a.money)']?></td>
				<td><?=$var['actionNo']?></td>
				<td><?=number_format($var['total'], 2, '.', '')?></td>
				</tr> 
			<?php } ?>					
		
	</tbody> 
	</table>
</article>
<footer>
	<?php
		$rel=get_class($this).'/index-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'betLogSearchPageAction');
	?>
</footer>
<script type="text/javascript">  
ghhs("nav01","tr");  
</script>
<div class="tip">提示：本页数据被缓存5分钟，你看到的可能是几分钟之前的数据！</div>
