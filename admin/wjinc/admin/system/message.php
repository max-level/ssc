<?php
	//查询推送信息
	$query ="select * from {$this->prename}push_message order by addTime desc";	
	$info=$this->getPage($query, $this->page, $this->pageSize);
	$row = $info;
?>

<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
	<header>
		<h3 class="tabs_involved">推送消息列表
			<div class="submit_link wz">
			<a href="system/message_add">添加信息</a>
			
			</div>
		</h3>
	</header>
	<table class="tablesorter" cellspacing="0">
	<thead>
		<tr>
			<td  align="center" width="100">标题</td>
		<td>内容</td>
            <td>发布日期</td>
            <td>操作人</td>			
			<td>操作</td>
		</tr>
	</thead>
	<tbody id="nav01">
	<?php if($row['data']) foreach($row['data'] as $value){?>	
		<tr>
			<td  align="center"><?=$value['title']?></td>
			<td width="50%" align="left"><?=$value['content']?></td>
            <td><?=date("Y-m-d H:i",$value['addTime'])?></td>
            <td><?=$value['operator']?></td>				
			<td>
			<form action="/admin778899.php/Member/doDeleteMsg/" method="post" target="ajax" call="sysReloadNotice4">			
			<input type="hidden" name="mid" value="<?=$value['mid']?>"/>
			<input type="submit" style="background:white" value="删除"/>
			</form>
			</td>
		</tr>
	<?}?>
	</tbody>
	</table>
	<footer>
	<?php
		$rel=get_class($this).'/notice-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'betLogSearchPageAction');
	?>
	</footer>
</article>
<script type="text/javascript">  
ghhs("nav01","tr");  
</script>
