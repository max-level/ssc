<?php $this->display('inc_top.php') ?>

<div id="wanjinDialog"></div>
 
<div class="vertical-align-middle" style="padding-left: 120px;">
	<!--p class="hidden-xs" style="font-weight: bold;">推广链接返点设置</p-->
	<form action="/index.php/team/insertLink" class="login-form fv-form fv-form-bootstrap" method="post" target="ajax" onajax="teamBeforeAddLink" call="teamAddLink">
		<input name="uid" type="hidden" id="uid" value="<?=$this->user['uid']?>" />
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
			<label class="sr-only" for="username">返点</label>
			<input class="form-control" name="fanDian" max="<?=$this->user['fanDian']?>" value=""  fanDianDiff=<?=$this->settings['fanDianDiff']?> />
			<span style="color:#000; margin-left:10px;">请输入0-<?=$this->user['fanDian']?>%的返点</span>
		</div>

		<div class="row">
			<div class="col-sm-7">
				<input type="submit" id='put_button_pass' class="btn btn-primary btn-block margin-top-10 addbtn" value="增加链接">
			</div>
			<div class="col-sm-5">
				<input type="reset" value="重置" class="btn btn-outline btn-success btn-block margin-top-10"/>
			</div>
		</div>
	</form>
</div>