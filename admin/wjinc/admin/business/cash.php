<script language="javascript">
function cashFalse(){
	$('.cashFalseSM').css('display','block');
}
function cashTrue(){
	$('.cashFalseSM').css('display','none');
	$('.cashFalseSM').val()=false;
}
</script>
<?php
	$sql="select b.name bankName, c.*, u.username userAccount, d.countname from {$this->prename}bank_list b, {$this->prename}member_cash c, {$this->prename}members u, {$this->prename}member_bank d where c.bankId=b.id and c.uid=u.uid and c.state=1 and d.uid=u.uid";
	//echo $sql;
	$row=$this->getPage($sql, $this->page, $this->pageSize);
	$data = $row;
	//查询黑名单表
	$query ="select * from {$this->prename}stop_bankcard where isDelete='$isDelete'";
	$info =$this->getRows($query);
	$cardinfo = $info;
?>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
	<header><h3 class="tabs_involved">提现请求</h3></header>
<div align="center"><font color="red">带有<img src="../../images/stop.png">的表示黑名单，禁止出款。带有<img src="../../images/999.png">的银行帐号表示存在高风险要密切关注，请谨慎操作！</font></div>	
	<table class="tablesorter" cellspacing="0">
	<thead>
		<tr>
			<th>UserID</th>
			<th>用户名</th>
			<th>提现金额</th>
			<th>银行类型</th>
			<th>开户姓名</th>
			<th>银行账号</th>
			<th>开户行</th>
			<th>时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
	<?php if($data['data']) foreach($data['data'] as $var){ 
	
	//黑名单验证
	$user_account = $var['account'];
	$uname = $var['username'];
	
	foreach($cardinfo as $value){
			$bankno = $value['bankno'];
			$name = $value['name'];
			$risk = $value['risk'];
			if($bankno!=""){
				if($user_account==$bankno){
					$user_account="<img src='".$risk."'/>".$bankno;
				}
			}

			if($name!=""){
				if($uname==$name){
					$uname="<img src='".$risk."'/>".$uname;
				}
			}
			
/* 			if($user_account==$bankno||$uname==$name){
				$user_account="<img src='".$risk."'/>".$bankno;
				$uname="<img src='".$risk."'/>".$uname;
			} */
		}
	?>

	<tr>
			<td><?=$var['uid']?></td>
			<td><?=$var['userAccount']?></td>
			<td><?=$var['amount']?></td>
			<td><?=$var['bankName']?></td>
			<td><?=$uname?></td>
			<td><?=$user_account?></td>
            <td><?=$var['countname']?></td>
			<td><?=date('Y-m-d H:i:s', $var['actionTime'])?></td>
			<td align="center">
			<?php if($var['state']==0 || $var['state']==2 || $var['state']==4){ ?>
				<a href="/admin778899.php/business/cashLogDelete/<?=$var['id']?>">删除</a>
			<?php }elseif($var['state']==1){ ?>
                <a href="/admin778899.php/business/cashActionModal/<?=$var['id']?>" target="modal"  width="420" title="提款处理" modal="true" button="确定:dataAddCode|取消:defaultCloseModal">处理</a>
			<?php }elseif($var['state']>=3){ ?>
				--
			<?php } ?>
			</td>
		</tr>
	<?php }else{ ?>
		<tr>
			<td colspan="8" align="center">暂时没有人申请提现。</td>
		</tr>
	<?php } ?>
	</tbody>
	</table>
	<footer>
	<?php
		$rel=get_class($this).'/cash';
		$this->display('inc/page.php', 0, $data['total'], $rel); 
	?>
	</footer>
</article>