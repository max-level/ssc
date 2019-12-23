<?php
	$sql="select c.*, b.name bankName, u.username from {$this->prename}members u, {$this->prename}bank_list b, {$this->prename}member_cash c where c.uid=u.uid and b.isDelete=0 and c.bankId=b.id";
	
	// 时间条件限制
	if($_GET['fromTime'] && $_GET['toTime']){
		$sql.=' and c.actionTime between '.strtotime($_GET['fromTime']).' and '.strtotime($_GET['toTime']);
	}elseif($_GET['fromTime']){
		$sql.=' and c.actionTime>='.strtotime($_GET['fromTime']);
	}elseif($_GET['toTime']){
		$sql.=' and c.actionTime<'.strtotime($_GET['toTime']);
	}else{
		if($GLOBALS['fromTime'] && $GLOBALS['toTime']) $sql.=' and c.actionTime between '.$GLOBALS['fromTime'].' and '.$GLOBALS['toTime'].' ';
	}
	
	// 用户名限制
	if($_GET['username'] && $_GET['username']!='用户名'){
		$_GET['username']=wjStrFilter($_GET['username']);
		if(!ctype_alnum($_GET['username'])) throw new Exception('用户名包含非法字符,请重新输入');
		$sql.=" and u.username like '%{$_GET['username']}%' and (u.parentId={$this->user['uid']} or u.zparentId={$this->user['uid']} or u.gudongId={$this->user['uid']} ) ";
	}else{
		// 从属关系限制
		unset($_GET['username']);
		switch($_GET['type']=intval($_GET['type'])){
			case 1:
				//我自己
				$sql.=" and uid={$this->user['uid']}";
			break;
			case 2:
				//直属下线
				if($this->user['type']==1){
				$sql.=" and u.parentId={$this->user['uid']} and u.type=0 ";
				}elseif($this->user['type']==2){
				$sql.=" and u.zparentId={$this->user['uid']} and u.type=1 or (u.zparentId={$this->user['uid']} and u.parentId='' and u.type=0) ";
				}elseif($this->user['type']==3){
				$sql.=" and u.gudongId={$this->user['uid']} and u.type=2 or (u.gudongId={$this->user['uid']} and u.zparentId='' and u.parentId='' and u.type!=3) ";
				}
			break;
			case 3:
				// 所有下级
				$sql.="  and (u.parentId={$this->user['uid']} or u.zparentId={$this->user['uid']} or u.gudongId={$this->user['uid']} ) and u.uid !={$this->user['uid']} ";
			break;
			default:
				// 所有人
				$sql.="  and (u.parentId={$this->user['uid']} or u.zparentId={$this->user['uid']} or u.gudongId={$this->user['uid']} ) ";
			break;
		}
	}
	//echo $sql;
	$data=$this->getPage($sql, $this->page, $this->pageSize);
	$params=http_build_query($_GET, '', '&');
	
	$stateName=array('已到帐', '正在办理', '已取消', '已支付', '失败');
?>

<div class="row">
		<div class="ibox float-e-margins">
			<div class="ibox-content">
				<table width="100%" border="0" cellspacing="1" cellpadding="0" class="table table-striped table-bordered table-hover dataTables-example">
					<thead>
						<tr>
							<th>提现金额</th>
							<th>用户帐号</th>
							<th>申请时间</th>
							<th>提现银行</th>
							<th>银行尾号</th>
							<th>状态</th>
						</tr>
					</thead>
				<tbody class="table_b_tr">
	<?php if($data['data']) foreach($data['data'] as $var){ ?>
		<tr>
			<td><?=$var['amount']?></td>
			<td><?=$var['username']?></td>
			<td><?=date('m-d H:i:s', $var['actionTime'])?></td>
			<td><?=$var['bankName']?></td>
			<td><?=preg_replace('/^.*(.{4})$/', '\1', $var['account'])?></td>
			<td>
			<?php
				if($var['state']==3 && $var['uid']==$this->user['uid']){
					echo '<div class="sure" id="', $var['id'], '"></div>';
				}else{
					echo $stateName[$var['state']];
				}
			?>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</div>
</div>
</div>

   <script>
    $(document).ready(function() {
              $('.dataTables-example').dataTable( {
              //跟数组下标一样，第一列从0开始，这里表格初始化时，第四列默认降序
                "order": [[ 3, "desc" ]]
              } );
            } );
        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"]);
        }
    </script>