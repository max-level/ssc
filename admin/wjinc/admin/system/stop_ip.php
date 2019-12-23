<?php	
	$isDelete = 0; //0为未删除状态
/* 	$query ="select * from {$this->prename}stop_ip where isDelete='$isDelete'";
	$info =$this->getRows($query);
	$row = $info; */
	$query="select * from {$this->prename}stop_ip where isDelete='$isDelete'";
	//echo $sql;
	$info=$this->getPage($query, $this->page, $this->pageSize);
	$row = $info;
?>

<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
	<header>
		<h3 class="tabs_involved">IP黑名单列表
			<div class="submit_link wz">
			<a href="system/stop_ip_add">添加名单</a>
			</div>
		</h3>
	</header>
	<table class="tablesorter" cellspacing="0">
	<thead>
		<tr>
			<td>ip</td>
            <td>风险标识</td>			
			<td>操作人</td>	
			<td>操作</td>
		</tr>
	</thead>
	<tbody id="nav01">
	<?php if($row['data']) foreach($row['data'] as $value){ ?>
		<tr>
			<td align="left"><?=$value["ip"]?></td>
			<td width="10%"><img src="<?=$value['risk']?>"/></td>
            <td width="left"><?=$value["admin_name"]?></td>							
			<td width="20%">
			<form action="/admin778899.php/Member/doDeletehei/" method="post" target="ajax" call="sysReloadNotice3">
			<input type="hidden" name="heiid" value="<?=$value['id']?>"/>
			<input type="submit" style="background:white" value="删除"/>
			</form>
			</td>
		</tr>
	<?php }?>
	</tbody>
	</table>
	<footer>
	<?php
		$rel=get_class($this).'/stop_ip-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $row['total'], $rel, 'betLogSearchPageAction');
	?>
	</footer>
</article>
<script type="text/javascript">  
ghhs("nav01","tr");  
</script>
