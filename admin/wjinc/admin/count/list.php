<?php
	$sql="select * from {$this->prename}bets where lotteryNo='' and isDelete=0 order by actionTime desc";
	$data=$this->getPage($sql, $this->page, $this->pageSize);
	if(!$this->types) $this->getTypes();
	$dateString=date('Y-m-d ');
?>
<article class="module width_full">
	<header>
		<h3 class="tabs_involved">�������</h3>
	</header>
	<table class="tablesorter" cellspacing="0">
		<thead>
			<tr>
				<td>����</td>
				<td>Ͷעʱ��</td>
				<td>����</td>
				<td>�淨</td>
				<td>�ں�</td>
				<td>Ͷע����</td>
				<td>��������</td>
				<td>����</td>
				<td>���</td>
				<td>����</td>
				<td>״̬</td>
			</tr>
		</thead>
		<tbody id="nav01">
		<?php
			if($data['data']){ foreach($data['data'] as $var){
		?>
			<tr>
				<td><?=if(isset($var['wjorderId'])$var['wjorderId']?></td>
				<td><?=date('m-d H:i:s', $var['actionTime'])?></td>
				<td><?=$this->types[$var['type']]['shortName']?></td>
				<td><?=$var['Groupname']?></td>
		        <td><?=$var['actionNo']?></td>
		        <td class="code-list pointer"><?=Object::CsubStr($var['actionData'],0,10)?></td>
				<td><?=$this->iff($var['lotteryNo'],$var['lotteryNo'],'��')?></td>
		        <td><?=$var['odds']?></td>
                <td><?=$var['money']?></td>
		        <td><?=$this->iff($var['lotteryNo'], number_format($var['bonus'], 2), '0.00')?></td>
				<td><?php
				if($var['isDelete']==1){
					echo '<font color="#999999">�ѳ���</font>';
				}elseif(!$var['lotteryNo']){
					echo '<font color="#009900">δ����</font>';
				}elseif($var['zjCount']){
					echo '<font color="red">���ɽ�</font>';
				}else{
					echo '<font color="#00CC00">δ�н�</font>';
				}
			?></td>
			</tr>
			<?}}?>
		</tbody>
	</table>
</article>
<script type="text/javascript">  
	ghhs("nav01","tr");  
</script>
<?php
		$rel=get_class($this).'/test-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'betLogSearchPageAction'); 
?>