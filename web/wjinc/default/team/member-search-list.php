<?php
	$this->getSystemSettings();
	$para=$_GET;
	$sql="select * from {$this->prename}members where 1=1 ";
	if($para['parentId']=intval($para['parentId'])){
		// 用户ID限制
		if(!$para['parentId']) $para['parentId']=$this->user['uid'];
		$para['parentId']=intval($para['parentId']);
		$para['type']=intval($para['type']);
		if($para['type']==1){
		$sql.=" and parentId={$para['parentId']} and type=0 ";
		}elseif($para['type']==2){
		$sql.=" and zparentId={$para['parentId']} and type=1 or (zparentId={$para['parentId']} and parentId='' and type=0) ";
		}elseif($para['type']==3){
		$sql.=" and gudongId={$para['parentId']} and type=2 or (gudongId={$para['parentId']} and zparentId='' and parentId='' and type!=3) ";
		}else{
		$sql.=" and parentId={$para['parentId']}";
		}	
	}elseif($_GET['username'] && $_GET['username']!='用户名'){
		$_GET['username']=wjStrFilter($_GET['username']);
		if(!ctype_alnum($_GET['username'])) throw new Exception('用户名包含非法字符,请重新输入');
		// 按用户名查找时
		// 只要符合用户名且是自己所有下级的都可查询
		// 用户名用模糊方式查询
		$sql.=" and username like '%{$_GET['username']}%' and (parentId={$this->user['uid']} or zparentId={$this->user['uid']} or gudongId={$this->user['uid']} )";
	}else{
		unset($_GET['username']);
		switch($_GET['type']){
			case 0:
				// 所有人
				$sql.=" and (parentId={$this->user['uid']} or zparentId={$this->user['uid']} or gudongId={$this->user['uid']} ) ";
				break;
			case 1:
				// 我自己
				$sql.="and uid={$this->user['uid']} ";
				break;
			case 2:
				// 直属下级
				if($this->user['type']==1){
				$sql.=" and parentId={$this->user['uid']} and type=0 ";
				}elseif($this->user['type']==2){
				$sql.=" and zparentId={$this->user['uid']} and type=1 or (zparentId={$this->user['uid']} and parentId='' and type=0) ";
				}elseif($this->user['type']==3){
				$sql.=" and gudongId={$this->user['uid']} and type=2 or (gudongId={$this->user['uid']} and zparentId='' and parentId='' and type!=3) ";
				}
				break;
			case 3:
				// 所有下级
				$sql.=" and (parentId={$this->user['uid']} or zparentId={$this->user['uid']} or gudongId={$this->user['uid']} ) ";
				break;
		}
	}

	$data=$this->getPage($sql, $this->page, $this->pageSize);
	//echo $sql;
	$params=http_build_query($_GET, '', '&');
	//echo $params;
?>

<div class="ibox-content">
	<table width="100%" border="0" cellspacing="1" cellpadding="0" class="table table-striped table-bordered table-hover dataTables-example">
		<thead>
			<tr>
				<th>用户名</th>
				<th>用户类型</th>
				<th>返点</th>
				<th>余额</th>
				<th>状态</th>
				<th>在线</th>
				<th>最近登陆时间</th>
				<th>注册时间</th>
				<th>操作</th>
			</tr>
		</thead>
        <tbody>
			<?php if($data['data']) foreach($data['data'] as $var){ ?>
			<?php $login=$this->getRow("select * from {$this->prename}member_session where uid=? order by id desc limit 1", $var['uid']);?>
			<tr>
			<td><?=$var['username']?></td>
            <td><? if($var['type']==1){
				echo '代理';
			}elseif($var['type']==2){
				echo '总代理';
			}elseif($var['type']==3){
				echo '股东';
			}else{
				echo '会员';
			}			
			?></td>
            <td><?=$var['fanDian']?>%</td>
			<td><?=$var['coin']?></td>
			
			<td><?=$this->iff($var['enable'],'正常','冻结')?></td>
            <td><?=$this->iff($login['isOnLine'] && ceil(strtotime(date('Y-m-d H:i:s', time()))-strtotime(date('Y-m-d H:i:s',$login['accessTime'])))<$GLOBALS['conf']['member']['sessionTime'], '<font color="#FF0000">在线</font>', '离线')?></td>
			<td><?=$this->iff($login['loginTime'],date('Y-m-d H:i:s', $login['loginTime']),'--')?></td>
			<td><?=date('Y-m-d',$var['regTime'])?></td>         
            <td>
            <?php
			if($this->settings['recharge']==1 && $this->user['type'] && ($var['parentId']==$this->user['uid'] || $var['zparentId']==$this->user['uid'] or $var['gudongId']==$this->user['uid'])){?>
			<a href="javascript:void(0)" onclick="zz(<?=$var['uid']?>);">转账</a>&nbsp;&nbsp;
            <? } ?>
            <?php if($this->user['uid']!=$var['uid'] && $this->user['type'] && ($var['parentId']==$this->user['uid'] || $var['zparentId']==$this->user['uid'] or $var['gudongId']==$this->user['uid'])){ ?>
			<?php if($var['type']){ ?>
			<a class="caozuo" href="<?="/index.php/team/searchMember?parentId={$var['uid']}&type={$var['type']}"?>">查看下级</a>
			<? } }?>
            </td>

		</tr>
			<?php } ?>               
         </tbody>
    </table>
</div>
           
 <script type="text/javascript">
function zz(num){
layer.open({
  type: 2 
  ,title: false
  ,area: ['500px', '280px']
  ,scrollbar: false
  ,resize: false
  ,skin: 'layui-layer-rim'
  , content: '/team/userUpdate2/'+num
});
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
