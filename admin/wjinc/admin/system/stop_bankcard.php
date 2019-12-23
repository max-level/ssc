<?php
	$isDelete = 0;//0为正常状态
	/* $query ="select * from {$this->prename}stop_bankcard where isDelete='$isDelete'";
	$info =$this->getRows($query);
	$row = $info; */	
	$query="select * from {$this->prename}stop_bankcard where isDelete='$isDelete'";
	$info=$this->getPage($query, $this->page, $this->pageSize);
	$row = $info;
?>

<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
	<header>
		<h3 class="tabs_involved">银行资料黑名单列表
			<div class="submit_link wz">
			<a href="system/stop_bankcard_add">添加名单</a>
			</div>
		</h3>
	</header>	
	<table class="tablesorter" cellspacing="0">
	<thead>
		<tr>
			<td>姓名</td>
			<td>银行卡号</td>
			<td>风险标识</td>	
            <td>操作人</td>
			<td>操作</td>
		</tr>
	</thead>
	
	<tbody id="nav01">
	<?php if($row['data']) foreach($row['data'] as $value){?>	
		<tr>
			<td align="left"><?=$value["name"]?></td>
			<td align="left"><?=$value["bankno"]?></td>
			<td width="10%"><img src="<?=$value['risk']?>"/></td>
            <td width="10%"><?=$value["admin_name"]?></td>
			<td width="20%">
			<form action="/admin778899.php/Member/doDeletebank/" method="post" target="ajax" call="sysReloadNotice2">
			<input type="hidden" name="cardid" value="<?=$value['id']?>"/>
			<input type="submit" style="background:white" value="删除"/></form>
			</td>
		</tr>
	<?php }?>
	</tbody>

	</table>	
	<footer>
	<?php
		$rel=get_class($this).'/stop_bankcard-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $row['total'], $rel, 'betLogSearchPageAction');
	?>
	</footer>
</article>
<script type="text/javascript">  
ghhs("nav01","tr");  
</script>
