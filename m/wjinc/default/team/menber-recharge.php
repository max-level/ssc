<?php 
	$sql="select * from {$this->prename}members where uid=?";
	$userData=$this->getRow($sql, intval($args[0]));
?>
<div>
<form action="/index.php/team/userUpdateed2" target="ajax" method="post" call="userCoinSubmitCode" onajax="userCoinBeforeSubmitCode" dataType="html">
	<input type="hidden" name="uid" value="<?=$args[0]?>"/>

	<table cellpadding="2" cellspacing="2" class="popupModal" style="font-size:14px;">
	    <tr>
			<td class="title" width="70">上级关系：</td>
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
			<td class="title">用户名：</td>
			<td><?=$userData['username']?></td>
		</tr>
		<tr>
			<td class="title">用户余额：</td>
			<td><b style="color:blue"><?=$userData['coin']?></b></td>
		</tr>
		<tr>
			<td class="title">我的余额：</td>
			<td><b style="color:#ff0000"><?=$this->getValue("select coin from {$this->prename}members where uid={$this->user['uid']} ");?></b></td>
		</tr>

		<tr>
			<td class="title">充值数：</td>
			<td><p><input type="text" name="coin" value=""  style="width:80px;">&nbsp&nbsp&nbsp&nbsp*充值范围:0-10000元</p></td>
		</tr>
	</table>
</form>
</div>