
<?php
	$para=$_GET;
	
	// 用户限制
	if($para['username'] && $para['username']!="用户名"){
		$para['username']=wjStrFilter($para['username']);
		if(!ctype_alnum($para['username'])) throw new Exception('用户名包含非法字符,请重新输入');
		$userWhere="and u.username like '%{$para['username']}%'";
	}

	// 时间限制
	if($para['fromTime'] && $para['toTime']){
		$fromTime=strtotime($para['fromTime']);
		$toTime=strtotime($para['toTime'])+24*3600;
		$timeWhere="and c.actionTime between $fromTime and $toTime";
	}elseif($para['fromTime']){
		$fromTime=strtotime($para['fromTime']);
		$timeWhere="and c.actionTime>=$fromTime";
	}elseif($para['toTime']){
		$toTime=strtotime($para['toTime'])+24*3600;
		$timeWhere="and c.actionTime<$fromTime";
	}else{
		$timeWhere=' and c.actionTime>'.strtotime('00:00');
	}
    $totalSql = "select sum(amount) from ssc_member_cash where state IN (3,0)";//提现已支付总额 
    $amount = $this->getrow($totalSql);
    $amount = $amount ? $amount['sum(amount)'] : '0.00';
	$sql="select b.name bankName, c.*, u.username userAccount, u.gudongId, u.zparentId, u.parentId, d.countname from {$this->prename}bank_list b, {$this->prename}member_cash c, {$this->prename}members u,{$this->prename}member_bank d where c.state<5 and b.isDelete=0 and c.isDelete=0 $timeWhere $userWhere and c.bankId=b.id and c.uid=u.uid and u.uid=d.uid order by c.id desc";

    //按条件求求合计金额
    $totalAmount = '0';
    $startTime = $para['fromTime'] ? strtotime($para['fromTime']) : strtotime(date('Y-m-d'));
    $endTime = $para['toTime'] ? strtotime($para['toTime']) : strtotime(date('Y-m-d'.'23:59:59'));
	if($startTime==$endTime){
		$endTime+=86400;
	}
    $hjTimeWhere="and c.actionTime between $startTime and $endTime";
    $totalAmountSql = "select sum(c.amount)  sum from {$this->prename}bank_list b, {$this->prename}member_cash c, {$this->prename}members u,{$this->prename}member_bank d where c.state<5 and b.isDelete=0 and c.isDelete=0 $hjTimeWhere $userWhere and c.bankId=b.id and c.uid=u.uid and u.uid=d.uid AND c.state IN (3,0) order by c.id desc";
    //echo $totalAmountSql;
    $totalAmount = $this->getrow($totalAmountSql);
    $totalAmount = $totalAmount['sum'] ? $totalAmount['sum'] : '0.00' ;

	$data=$this->getPage($sql, $this->page, $this->pageSize);
	$stateName=array('已到帐','申请中','已取消','已支付','已失败','已删除');
?>
<table class="tablesorter" cellspacing="0">
<input type="hidden" value="<?=$this->user['username']?>" />
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
        <th>状态</th>
        <th>操作</th>
    </tr>
</thead>
<tbody id="nav01">
<?php if($data['data']) foreach($data['data'] as $var){ //if($var['state']!=4 && $var['state']!=1){$amount+=$var['amount'];}?>
    <tr>
        <td><?=$var['uid']?></td>
        <td><?=htmlspecialchars($var['userAccount'])?></td>
        <td><?=$var['amount']?></td>
        <td><?=htmlspecialchars($var['bankName'])?></td>
        <td><?=htmlspecialchars($var['username'])?></td>
        <td><?=htmlspecialchars($var['account'])?></td>
		<td><?=htmlspecialchars($var['countname'])?></td>
        <td><?=date('Y-m-d H:i', $var['actionTime'])?></td>
        <td>
        <?php
            if($var['state']==3){
                echo '<div class="sure" id="', $var['id'], '"></div>';
            }else if($var['state']==4){
                echo '<span title="'.$var['info'].'" style="cursor:pointer; color:#f00;">'.$stateName[$var['state']].'</span>';
            }else{
                echo $stateName[$var['state']];
            }
        ?>
        </td>
        <td align="center">
        <?php if($var['state']==0 || $var['state']==2 || $var['state']==4){ ?>
            <a href="/admin778899.php/business/cashLogDelete/<?=$var['id']?>" target="ajax" call="cashLogDelete" dataType="json">删除</a>
        <?php }elseif($var['state']==1){ ?>
            <a href="/admin778899.php/business/cashActionModal/<?=$var['id']?>" target="modal"  width="420" title="提款处理" modal="true" button="确定:dataAddCode|取消:defaultCloseModal">处理</a>
        <?php }elseif($var['state']>=3){ ?>
            --
        <?php } ?>
        </td>
    </tr>
<?php }else{ ?>
    <tr>
        <td colspan="11" align="center">暂时没有提现记录。</td>
    </tr>
<?php } ?>
</tbody>
</table>
<tr>
    <span style="font-size:15px;color:#FF0000;margin-left:540px;line-height:40px">合计提款总额：<?=$this->iff($totalAmount,$totalAmount,0)?>元 &nbsp;&nbsp; 总计提款总额：<?=$this->iff($amount,$amount,0)?>元</span>
</tr>
<footer>
<?php
		$rel=get_class($this).'/cashLog-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'defaultReplacePageAction');
?>
</footer>
<script type="text/javascript">  
ghhs("nav01","tr");  
</script>