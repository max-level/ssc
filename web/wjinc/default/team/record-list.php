<?php
	//echo $this->userType;
	$para=$_GET;
	
	if($para['state']==5){
		$whereStr = ' and b.isDelete=1 ';
	}else{
		$whereStr = ' and  b.isDelete=0 ';	
	}
	// 彩种限制
	if($para['type']=intval($para['type'])){
		$whereStr .= " and b.type={$para['type']}";
	}
	
	// 时间限制
	if($para['fromTime'] && $para['toTime']){
		$whereStr .= ' and b.actionTime between '.strtotime($para['fromTime']).' and '.strtotime($para['toTime']);
	}elseif($para['fromTime']){
		$whereStr .= ' and b.actionTime>='.strtotime($para['fromTime']);
	}elseif($para['toTime']){
		$whereStr .= ' and b.actionTime<'.strtotime($para['toTime']);
	}else{
		
		if($GLOBALS['fromTime'] && $GLOBALS['toTime']){
			$whereStr .= ' and b.actionTime between '.$GLOBALS['fromTime'].' and '.$GLOBALS['toTime'].' ';
		}
	}
	
	// 投注状态限制
	if($para['state']){
	switch($para['state']){
		case 1:
			// 已派奖
			$whereStr .= ' and b.zjCount>0';
		break;
		case 2:
			// 未中奖
			$whereStr .= " and b.zjCount=0 and b.lotteryNo!='' and b.isDelete=0";
		break;
		case 3:
			// 未开奖
			$whereStr .= " and b.lotteryNo=''";
		break;
		case 4:
			// 追号
			$whereStr .= ' and b.zhuiHao=1';
		break;
		case 5:
			// 撤单
			$whereStr .= ' and b.isDelete=1';
		break;
		}
	}
	
	 //单号
   if($para['betId'] && $para['betId']!='输入单号'){
   $para['betId']=wjStrFilter($para['betId']);
   if(!ctype_alnum($para['betId'])) throw new Exception('单号包含非法字符,请重新输入');
   $whereStr .= " and b.wjorderId='{$para['betId']}'";}

	// 用户名限制
		if($para['username'] && $para['username']!='用户名'){
			$para['username']=wjStrFilter($para['username']);
			if(!ctype_alnum($para['username'])) throw new Exception('用户名包含非法字符,请重新输入');
			$whereStr .= " and u.username like '%{$para['username']}%' and (u.parentId={$this->user['uid']} or u.zparentId={$this->user['uid']} or u.gudongId={$this->user['uid']} ) ";
		}
		switch($para['utype']){
			case 1:
				//我自己
				$whereStr .= " and b.uid={$this->user['uid']} ";
				break;
			case 2:
				//直属下线
				if($this->user['type']==1){
				$whereStr.=" and u.parentId={$this->user['uid']} and u.type=0 ";
				}elseif($this->user['type']==2){
				$whereStr.=" and u.zparentId={$this->user['uid']} and u.type=1 or (u.zparentId={$this->user['uid']} and u.parentId='' and u.type=0) ";
				}elseif($this->user['type']==3){
				$whereStr.=" and u.gudongId={$this->user['uid']} and u.type=2 or (u.gudongId={$this->user['uid']} and u.zparentId='' and u.parentId='' and u.type!=3) ";
				}
				break;
			case 3:
				// 所有下级
				$whereStr .= "  and (u.parentId={$this->user['uid']} or u.zparentId={$this->user['uid']} or u.gudongId={$this->user['uid']} ) and u.uid !={$this->user['uid']} ";
				break;
			default:
				// 所有人
				$whereStr .= "  and (u.parentId={$this->user['uid']} or u.zparentId={$this->user['uid']} or u.gudongId={$this->user['uid']} ) ";
			break;
		}
	$sql="select b.*, u.username from {$this->prename}bets b, {$this->prename}members u where b.uid=u.uid";
	$sql.=$whereStr;
	$sql.=' order by id desc, actionTime desc';
	//echo $sql;
	$data=$this->getPage($sql, $this->page, $this->pageSize);

	$params=http_build_query($para, '', '&');
?>

<div class="row">
                 <div class="col-sm-12">
                <div class="ibox float-e-margins">
                   
                    <div class="ibox-content">

                        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
									<th>编号</th>
									<th>用户</th>
									<th>投注时间</th>
									<th>彩种</th>
									<th>期号</th>
									<th>玩法</th>
									<th>投注额(元)</th>
									<th>奖金(元)</th>
									<th>开奖号码</th>
									<th>状态</th>
                                </tr>
                            </thead>
                            <tbody class="table_b_tr">
						<?php if($data['data']){ 
	foreach($data['data'] as $var){ ?>
		<tr>
			<td width="100">
				<a onclick="ddxq(<?=$var['id']?>);" href="javascript:void(0)"><?=$var['wjorderId']?></a>
			</td>
            <td>
			<?
            if($var['username']){echo  $var['username'];}else{echo '--';};
            ?>
            </td>
			<td><?=date('m-d H:i:s', $var['actionTime'])?></td>
			<td><?=$this->ifs($this->types[$var['type']]['shortName'],$this->types[$var['type']]['title'])?></td>
			<td><?=$var['actionNo']?></td>
			<td><?=$this->playeds[$var['playedId']]['name']?></td>
			<td><?=$var['money']*$var['totalNums']?></td>
			<td><?=$this->iff($var['lotteryNo'], number_format($var['bonus'], 2), '0.00')?></td>
			<td width="100"><?=$this->ifs($var['lotteryNo'], '--')?></td>
			<td>
			<?php
				if($var['isDelete']==1){
					echo '<font color="#999999">已撤单</font>';
				}elseif(!$var['lotteryNo']){
					echo '<font color="#009900">未开奖</font>';
				}elseif($var['zjCount']){
					echo '<font color="red">已派奖</font>';
				}else{
					echo '未中奖';
				}
			?></td>
		</tr>
		
   	<?php } }else{ ?>
   
    <?php } ?>
                                
                            </tbody>
                        
                        </table>
</div>
</div>
</div>
</div>
 <script type="text/javascript">
function ddxq(num){
	layer.open({
	  type: 2,
	  area: ['700px', '340px'],//长  宽
	  zIndex:1888,
	  //fixed: false, //不固定
	  title:false,
	  scrollbar: false,//屏蔽滚动条
	  resize: false,
	  skin: 'layui-layer-rim',
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