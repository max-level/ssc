<?php
$rows = $this->getRows("select * from {$this->prename}xieyi where id=1");
?>
<article class="module width_full">
	<header><h3 class="tabs_involved">协议设置<span style="color:red">(一条协议写完之后请换行输入下一条)</span></h3></header>
<form action="/admin778899.php/Member/doAddxieyi" target="Ajax" method="post" call="sysReloadNotice1">
	<table class="tablesorter left" cellspacing="0" width="100%">
		<tbody>
			
			<tr>
				<td>协议内容<span></span></td>				
				<td>
				<?php foreach($rows as $r){?>
					<textarea name="xynr"100" rows="35" cols="120" style="resize:none"><?=str_replace('<br/>', '', $r['content']);?></textarea>
				<?}?>
				</td>
			</tr>   
		</tbody>
	</table>
	<footer>
		<div class="submit_link">
			<input type="submit" value="保存修改设置" title="保存设置" class="alt_btn">&nbsp;&nbsp;
			<input type="reset" value="重置">
		</div>
	</footer>
	</form>
</article>