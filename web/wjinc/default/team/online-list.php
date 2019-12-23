<?php
	$home_uid=$this->user['uid'];
	$childrenarr=$this->getRows("SELECT username,coin,uid FROM {$this->prename}members where parentId={$this->user['uid']} or zparentId={$this->user['uid']} or gudongId={$this->user['uid']} and uid!=?",$home_uid);
	?>

	
<div class="row">
	<div class="col-sm-12">
		<div class="ibox float-e-margins">
			<div class="ibox-content">
				<table width="100%" border="0" cellspacing="1" cellpadding="0" class="table table-striped table-bordered table-hover dataTables-example">
					<thead>
						<tr>
							<th>用户名</th>
							<th>可用金额</th>
							<th>最后登录</th>
						</tr>
					</thead>
					<tbody class="table_b_tr">
						<?php 
							$onlineNum = 0;
							foreach($childrenarr as $var){ 
								$login=$this->getRow("select * from {$this->prename}member_session where uid=? order by id desc limit 1", $var['uid']);
							if($login['isOnLine'] && ($this->time-$login['accessTime']<900)){
								$parents = explode(',',$var['parents']);
								rsort($parents);
								$index = 1;
								foreach($parents as $key=>$var2){
									$index++;
								}
						?>
						<tr>
							<td><?=$var['username']?></td>
							<td><font color="red"><?=$var['coin']?></font></td>
							<td><?=date('Y-m-d H:i:s', $login['loginTime'])?></td>
						</tr>
						<?php 
							$onlineNum++;
							} } 
						?>
						<tr><td colspan="4" align="left">在线总数：<?=$onlineNum?></td></tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
