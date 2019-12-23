<?php $this->display('inc_top.php') ?>
<script type="text/javascript">
function khao(fanDian){
	$('input[name=fanDian]').val(fanDian);
	return false;
}
</script>

<div id="wanjinDialog"></div>

<div class="vertical-align-middle" style="padding-left: 120px;">
	<!--p class="hidden-xs" style="font-weight: bold;">推广链接返点设置</p-->
	<form action="/index.php/team/insertMember" method="post" target="ajax" onajax="teamBeforeAddMember" call="teamAddMember" class="login-form fv-form fv-form-bootstrap">
		<tr height=25 class='table_b_tr_b'>
			<td align="right" style="font-weight:bold;">账号类型：</td>
			<td align="left" >
			<?php if($this->user['type']==3){ ?>
			<label><input type="radio" name="type" value="2" title="总代理" style="width:auto;" />总代理</label>
			<?php }
			if($this->user['type']==3 || $this->user['type']==2){ ?>     
			<label><input type="radio" name="type" value="1" title="代理" style="width:auto;" />代理</label>
			<?php } ?>
			<label><input name="type"  type="radio" value="0" title="会员" style="margin-left:30px;width:auto;" checked="checked" />会员</label></td> 
		</tr>
		<div class="form-group has-feedback">
			<input name="username"  class="form-control" placeholder="请输入用户名" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')"/>
		</div>
		<div class="form-group has-feedback">
			<input name="password" type="password" class="form-control" placeholder="请输入密码"/>
		</div>
		<div class="form-group has-feedback">
			<input id="cpasswd" type="password" class="form-control" placeholder="请确认密码"/>
		</div>
		<div class="form-group has-feedback">
			<input name="qq" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" class="form-control" placeholder="请输入常用QQ号码"/>
		</div>
		<div class="form-group has-feedback">
			<input class="form-control" placeholder="请输入返点" name="fanDian" max="<?=$this->user['fanDian']?>" value=""  fanDianDiff=<?=$this->settings['fanDianDiff']?> onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')"/>
			<span style="color:#000; margin-left:10px;">返点为0-<?=$this->iff($this->user['fanDian']-$this->settings['fanDianDiff']<=0,0,$this->user['fanDian']-$this->settings['fanDianDiff'])?>%</span>
		</div>
		<!--div class="form-group has-feedback">
			<input name="vcode" placeholder="请输入验证码" type="text" style="ime-mode: disabled; width: 75px;" />
			<b class="yzmNum">
				<img width="58" height="24" border="0" style="cursor:pointer;margin-bottom:0px;" id="vcode" alt="看不清？点击更换" align="absmiddle" src="/index.php/user/vcode/<?=$this->time?>" title="看不清楚，换一张图片" onclick="this.src='/index.php/user/vcode/'+(new Date()).getTime()"/>
			</b>
		</div-->
		<div class="row">
			<div class="col-sm-7">
				<input type="submit" id='put_button_pass' class="btn btn-primary btn-block margin-top-10 addbtn" value="增加会员">
			</div>
			<div class="col-sm-5">
				<input type="reset" value="重置" class="btn btn-outline btn-success btn-block margin-top-10"/>
			</div>
		</div>
	</form>
</div>