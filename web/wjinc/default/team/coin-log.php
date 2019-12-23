<?php
	$this->getTypes();
	$this->getPlayeds();
	
	// 日期限制
	if($_REQUEST['fromTime'] && $_REQUEST['toTime']){
		$timeWhere=' and l.actionTime between '. strtotime($_REQUEST['fromTime']).' and '.strtotime($_REQUEST['toTime']);
	}elseif($_REQUEST['fromTime']){
		$timeWhere=' and l.actionTime >='. strtotime($_REQUEST['fromTime']);
	}elseif($_REQUEST['toTime']){
		$timeWhere=' and l.actionTime <'. strtotime($_REQUEST['toTime']);
	}else{
		
		if($GLOBALS['fromTime'] && $GLOBALS['toTime']) $timeWhere=' and l.actionTime between '.$GLOBALS['fromTime'].' and '.$GLOBALS['toTime'].' ';
	}
	
	// 帐变类型限制
	if($_REQUEST['liqType']=intval($_REQUEST['liqType'])){
		$liqTypeWhere=' and liqType='.$_REQUEST['liqType'];
		if($_REQUEST['liqType']==2) $liqTypeWhere=' and liqType between 2 and 3';
	}
	
	// 用户类型限制
	if($_REQUEST['username'] && $_REQUEST['username']!='用户名'){
		$_REQUEST['username']=wjStrFilter($_REQUEST['username']);
		if(!ctype_alnum($_REQUEST['username'])) throw new Exception('用户名包含非法字符,请重新输入');
		$userWhere=" and (u.parentId={$this->user['uid']} or u.zparentId={$this->user['uid']} or u.gudongId={$this->user['uid']} ) and u.username like '%{$_REQUEST['username']}%'";
	}

	if($_REQUEST['userType']=intval($_REQUEST['userType'])){
		switch($_REQUEST['userType']){

			case 1:
				$userWhere=" and u.uid={$this->user['uid']}";
			break;
			case 2:
				if($this->user['type']==1){
				$userWhere=" and u.parentId={$this->user['uid']} and u.type=0 ";
				}elseif($this->user['type']==3){
				$userWhere=" and u.gudongId={$this->user['uid']} and u.type=2 or (u.gudongId={$this->user['uid']} and u.zparentId='' and u.parentId='' and u.type!=3) ";
				}
			break;
			case 3:
				$userWhere=" and (u.parentId={$this->user['uid']} or u.zparentId={$this->user['uid']} or u.gudongId={$this->user['uid']} ) and u.uid!={$this->user['uid']}";
			break;

		}
	}else{
				if($this->user['type']==1){
				$userWhere=" and u.parentId={$this->user['uid']} and u.type=0 ";
				}elseif($this->user['type']==3){
				$userWhere=" and u.gudongId={$this->user['uid']} and u.type=2 or (u.gudongId={$this->user['uid']} and u.zparentId='' and u.parentId='' and u.type!=3) ";
				}
	}
	
	// 冻结查询
	if($this->action=='fcoinModal'){
		$fcoinModalWhere='and l.fcoin!=0';
	}
	
	$sql="select b.type, b.playedId, b.actionNo, l.liqType, l.coin, l.fcoin, l.userCoin, l.actionTime, l.extfield0, l.extfield1, l.info, u.username from {$this->prename}members u, {$this->prename}coin_log l left join {$this->prename}bets b on b.id=extfield0 where l.uid=u.uid $liqTypeWhere $timeWhere $userWhere $typeWhere $fcoinModalWhere and l.liqType not in(4,11,104) order by l.id desc";
	//echo $sql;
	
	$list=$this->getPage($sql, $this->page, $this->pageSize);
	$params=http_build_query($_GET, '', '&');
	$liqTypeName=array(
		1=>'充值',
		2=>'返点',
		3=>'返点分红',//分红
		//4=>'抽水金额',
		5=>'停止追号',
		6=>'中奖金额',
		7=>'撤单',
		8=>'提现失败返回冻结金额',
		9=>'管理员充值',
/*		10=>'解除抢庄冻结金额',
		//11=>'收单金额',
		12=>'上级充值',
		13=>'上级充值成功扣款',
		
		100=>'抢庄冻结金额',*/
		101=>'投注冻结金额',
		//103=>'抢庄返点金额',
		//104=>'抢庄抽水金额',
		105=>'退水资金',
		106=>'提现冻结',
		107=>'提现成功扣除冻结金额',
		108=>'开奖扣除冻结金额',
		//109=>'上级充值',
		109=>'玩家转账',
		//110=>'给下级充值扣款'
		110=>'玩家转账扣款'
	);
	
?>

<div class="row">
		<div class="ibox float-e-margins">
			<div class="ibox-content">
				<table width="100%" border="0" cellspacing="1" cellpadding="0" class="table table-striped table-bordered table-hover dataTables-example">
					<thead>
						<tr>
							<th>时间</th>
							<th>用户名</th>
							<th>帐变类型</th>
							<th>单号</th>
							<th>游戏</th>
							<th>玩法</th>
							<th>期号</th>
							<th>资金</th>
							<th>余额</th>
						</tr>
					</thead>
				<tbody class="table_b_tr">
		<?php if($list['data']) foreach($list['data'] as $var){ ?>
		<tr>
			<td><?php echo substr(date('Y-m-d H:i:s', $var['actionTime']),2)?></td>
			<td><?=$var['username']?></td>
			<td><?=$liqTypeName[$var['liqType']]?></td>
			<!-- <td><?//=$var['info']?></td> -->
			
			<?php if($var['extfield0'] && in_array($var['liqType'], array(2,3,4,5,6,7,10,11,100,101,102,103,104,105,108))){ ?>
                <td><a onclick="ddxq(<?=$var['extfield0']?>);" href="javascript:void(0)"><?=$this->getValue("select wjorderId from {$this->prename}bets where id=?", $var['extfield0'])?></a>
                </td>
                <td><?=$this->types[$var['type']]['shortName']?></td>
                <td><?=$this->playeds[$var['playedId']]['name']?></td>
                <td><?=$var['actionNo']?></td>
			<?php }elseif(in_array($var['liqType'], array(1,9,52))){?>
                <td><?=$var['extfield1']?></td>
                <td>--</td>
                <td>--</td>
                <td>--</td>
  
			<?php }elseif(in_array($var['liqType'], array(8,106,107))){?>
                <td><?=$var['extfield0']?></td>
                <td>--</td>
                <td>--</td>
                <td>--</td>

                
            <?php }else{ ?>
                <td>--</td>
                <td>--</td>
                <td>--</td>
                <td>--</td>

            <?php } ?>
            
            <td><?=$var['coin']?></td>
			
			<td><?=$var['userCoin']?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
</div>
</div>
 <script type="text/javascript">
function ddxq(num){
	layer.open({
	  type: 2,
	  area: ['800px', '327px'],//长  宽
	  zIndex:1888,
	  //fixed: false, //不固定
	  title:false,
	  scrollbar: false,//屏蔽滚动条
	  //maxmin: true,
	  content:'/record/betInfo/'+num
	});
	return false;
}
</script>
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