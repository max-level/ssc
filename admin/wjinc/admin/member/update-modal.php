
<?php 
	$sql="select * from {$this->prename}members where uid=?";
	$userData=$this->getRow($sql, $args[0]);
	
	if($userData['parentId']){
		$parentData=$this->getRow("select fanDian from {$this->prename}members where uid=?", $userData['parentId']);
	}else{
		$this->getSystemSettings();
		$parentData['fanDian']=$this->settings['fanDianMax'];
	}
	$sonFanDianMax=$this->getRow("select max(fanDian) sonFanDian from {$this->prename}members where isDelete=0 and parentId=?",$args[0]);
	//print_r($parentData);
?>

<div>
<style type="text/css">
.ui-dialog {
    width: 550px !important;
}
</style>
<input type="hidden" value="<?=$this->user['username']?>" />
<form action="/admin778899.php/member/userUpdateed" target="ajax" method="post" call="userDataSubmitCode" onajax="userDataBeforeSubmitCode" dataType="html">
	<input type="hidden" name="type" value="<?=$userData['type']?>"/>
	<input type="hidden" name="uid" value="<?=$args[0]?>"/>
      <!--uid  isDelete  enable  parentId 会员从属关系 parents 上级系列 admin  username  coinPassword  type 是否代理：0会员，1代理 subCount 人数配额 sex  nickname  name 用户真实姓名 regIP  regTime  updateTime  province  city  address  password  qq  msn  mobile  email  idCard 身份证号码 grade 等级 score 积分 coin 个人财产 fcoin 冻结资产 fanDian 用户设置的返点数 safepwd 交易密码，请区别于登录密码 safeEmail 密保邮箱，与邮箱分开 -->
	<table cellpadding="2" cellspacing="2" class="popupModal">
		<tr>
			<td class="title"width="210">用户名：</td>
			<td><lable><?=$userData['username']?></lable></td>
		</tr>
			<tr>
				<td class="title"width="210">所属盘口：</td>
				<td><input type="radio" value="1" name="panid" <?php if($userData['panid']==1) echo 'checked="checked"'?>/>A盘</label>&nbsp;&nbsp;
            <input type="radio" value="2" name="panid" <?php if($userData['panid']==2) echo 'checked="checked"'?>/>B盘</label></td>
			</tr>
		<tr>
			<td class="title"width="210">会员类型：</td>
			<td><label><input type="radio" value="3" name="type" <?php if($userData['type']==3) echo 'checked="checked"'?>/>股东</label>&nbsp;&nbsp;
            <input type="radio" value="2" name="type" <?php if($userData['type']==2) echo 'checked="checked"'?>/>总代理</label>&nbsp;&nbsp;
            <input type="radio" value="1" name="type" <?php if($userData['type']==1) echo 'checked="checked"'?>/>代理</label>&nbsp;&nbsp;
            <label><input type="radio" value="0" name="type" <?php if(!$userData['type']) echo 'checked="checked"'?>/>会员</label></td>
		</tr>
		<!-- <tr>
			<td class="title"width="210">站内信开关：</td>
			<td><label><input type="radio" value="1" name="mLetterStatus" <?php if($userData['mLetterStatus']) echo 'checked="checked"'?>/>开</label>&nbsp;&nbsp;<label><input type="radio" value="0" name="mLetterStatus" <?php if(!$userData['mLetterStatus']) echo 'checked="checked"'?>/>关</label></td>
		</tr> -->
		<tr>
			<td class="title">密码：</td>
			<td><input type="text" name="password" value=""/>&nbsp;<span class="spn9">置空为不修改</span></td>
		</tr>
		<tr>
			<td class="title">资金密码：</td>
			<td><input type="text" name="coinPassword" value=""/>&nbsp;<span class="spn9">置空为不修改</span></td>
		</tr>
		<tr>
			<td class="title">可用金额：</td>
            <td><input type="text" readonly= "true" name="coin" value="<?=$userData['coin']?>" />&nbsp;</td>
		</tr>
		<tr>
			<td class="title">冻结金额：</td>
            <td><input readonly= "true" type="text" name="fcoin" value="<?=$userData['fcoin']?>" />&nbsp;</td>
		</tr>
		<tr style=" <?php  if(!$userData['type']){ echo 'display:none;'; }?>">
			<td class="title">返点:<br />(分成比例)</td>
			<td><input type="text" name="fanDian" value="<?=$userData['fanDian']?>" max="<?=$parentData['fanDian']?>" min="<?=$sonFanDianMax['sonFanDian']?>" fanDianDiff=<?=$this->settings['fanDianDiff']?> >%&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999"><?=$this->ifs($sonFanDianMax['sonFanDian'],'0')?>—<?=$parentData['fanDian']?>%</span><br />注:此处为代理功能</td>
		</tr>
		<?php 
			$banks=$this->getRows("select id, name from {$this->prename}bank_list where isDelete=0 order by sort");
			$bk = $this->getRow("select bl.name,mb.* from ssc_member_bank mb, ssc_bank_list bl where mb.uid=? and mb.bankId=bl.id", $userData['uid']);
			if($bk){
		?>
		<tr>
			<td class="title">银行信息：</td>
			<td><label><select name="yhmc">
				<?php if($banks) foreach($banks as $var){ ?>
					<option value="<?=$var['id']?>" <?=$this->iff($bk['bankId']==$var['id'], 'selected')?>><?=$var['name']?></option>
				<?php } ?>
				</select> | <input name="yhxx" type="text" value="<?=$bk['account'] ?>"> | <input style="width:60px" name="yhxm" type="text" value="<?=$bk['username'] ?>"></label></td>
		</tr>
		<tr>
			<td class="title">重置银行：</td>
			<td><label><input type="radio" name="resetBank" value="1"/>重置</label> <label><input type="radio" name="resetBank" value="" checked />不重置</label></td>
		</tr>
		<?php }else{?>
		<tr>
			<td class="title">银行：</td>
			<td><label>未绑定</label></td>
		</tr>
		<?php } ?>
        <tr>
        	<td class="title">账号冻结：</td>
            <td><label><input type="radio" value="1" name="enable" <?php if($userData['enable']) echo 'checked="checked"'?>/>开启</label>&nbsp;&nbsp;<label><input type="radio" value="0" name="enable" <?php if(!$userData['enable']) echo 'checked="checked"'?>/>冻结</label></td>
        </tr>
		<tr>
        	<td class="title">注册IP：</td>
			<td><label><?=long2ip($userData['regIP'])?></label>&nbsp;&nbsp;<span class="spn9">判断是否恶意注册小号</span></td>
        </tr>
		<tr>
			<td class="title">单注最高限制：</td>
            <td><input type="text" name="maxMoney" value="<?=$userData['maxMoney']?>" />&nbsp;<br />此处与玩法设置中的限制同时生效,不使用请留空或写0</td>
		</tr>
		<tr>
			<td class="title">单期最高限制：</td>
            <td><input type="text" name="maxTurnMoney" value="<?=$userData['maxTurnMoney']?>" />&nbsp;<br />此处与玩法设置中的限制同时生效,不使用请留空或写0</td>
		</tr>
		<tr>
			<td class="title">退水限制：</td>
            <td><input type="text" name="rebate" value="<?=$userData['rebate']?>" />&nbsp;<br />此处取代玩法设置中所有退水比例,不使用请留空或写0</td>
		</tr>
        <tr>
        	<td class="title">加入时间：</td>
			<td><?=date("Y-m-d H:i:s",$userData['regTime'])?></td>
        </tr>
        <?php if($userData['qq']){?>
        <tr>
        	<td class="title">Q Q：</td>
			<td><?=$userData['qq']?></td>
        </tr>
        <?php }?>
        <?php if($userData['email']){?>
        <tr>
        	<td class="title">邮箱：</td>
			<td><?=$userData['email']?></td>
        </tr>
        <?php }?>
	</table>
</form>
</div>