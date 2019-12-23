<?php $this->display('inc_skin.php') ?>
<?php 
	$sql="select * from {$this->prename}members where uid=?";
	$userData=$this->getRow($sql, intval($args[0]));
?>

<div class="layui-form">
<form action="/index.php/team/userUpdateed2" id="tijiao" target="ajax" method="post" call="userCoinSubmitCode" onajax="userCoinBeforeSubmitCode" dataType="html">
	<input type="hidden" name="uid" value="<?=$args[0]?>"/>

  <table class="layui-table">
    <colgroup>
      <col width="15px">
    </colgroup>
    <tbody>
		<tr>
		<td>上级关系：</td>
		<td><?php 
		$gudong=$this->getValue("select username from {$this->prename}members where uid={$userData['gudongId']} ");
		if($gudong) echo $gudong.' > ';
		$zparent=$this->getValue("select username from {$this->prename}members where uid={$userData['zparentId']} ");
		if($zparent) echo $zparent.' > ';
		$parent=$this->getValue("select username from {$this->prename}members where uid={$userData['parentId']} ");
		if($parent) echo $parent.' > ';
		?>  			
		<?=$userData['username']?></td>
		</tr>
		<tr>
		<td>用户名：</td>
		<td><?=$userData['username']?></td>
		</tr>
		<tr>
		<td>用户余额：</td>
		<td><b style="color:blue"><?=$userData['coin']?></td>
		</tr>
		<tr>
		<td>我的余额：</td>
		<td><b style="color:#ff0000"><?=$this->getValue("select coin from {$this->prename}members where uid={$this->user['uid']} ");?></b></td>
		</tr>
		<tr>
		<td>转账数：</td>
		<td><p><input type="text" name="coin" value=""  style="width:80px;">&nbsp&nbsp&nbsp&nbsp*转账范围:0-10000元</p></td>
		</tr>
    </tbody>
	
  </table>
	  <div class="layui-layer-btn layui-layer-btn-" style="text-align: center;">
		<button class="layui-btn layui-btn-normal">充值</button>
	  </div>
</form>
</div>