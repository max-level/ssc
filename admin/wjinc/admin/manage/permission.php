<article class="module width_full">
<header><h3 class="tabs_involved">权限设置</h3></header>
<style type="text/css">
select {
    border: 1px solid #bbb;
    height: 25px;
	width: 149px;
	border-radius: 5px;
	box-shadow: inset 0 2px 2px #ccc,0 1px 0 #fff;
	}
	.btn {
	    display: inline-block;
	    padding: 6px 12px;
	    margin-bottom: 0;
	    font-size: 14px;
	    font-weight: 400;
	    line-height: 1.42857143;
	    text-align: center;
	    white-space: nowrap;
	    vertical-align: middle;
	    -ms-touch-action: manipulation;
	    touch-action: manipulation;
	    cursor: pointer;
	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	    background-image: none;
	    border: 1px solid transparent;
	    border-radius: 4px;
	}
	.btn-danger {
	    color: #fff;
	    background-color: #d9534f;
	    border-color: #d43f3a;
	}
	.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}
	a {
		color: #fff;
		text-decoration: none;
	}
	.table2 td {
		text-align: left;
	}
</style>
<script>
  $('input[type=checkbox]').change(function(){
    $('#selectPermission').val($('input[type=checkbox]:checked').map(function(){return this.value}).get().join(','))
  })
</script>
<?php 
/* $permission = array();
foreach ($this->permission as $key => $value) {
	$permission[] = $value['permission'];
} */
$permission = explode(',',$this->permission);
?>
<table width="100%">
<tr><td width="100%">
	<form action="/admin778899.php/manage/savePermission" method="post" target="ajax" call="sysReloadNoticeposs">
		<input type="hidden" name="uid" value="<?=$this->uid?>">
		<table class="tablesorter table2" cellspacing="0" width="100%">
			<tr><th>
				业务流水
				</th>
				<td>
				<input type="checkbox" name="permission[0]" value="a8txqq" <?php if (in_array('a8txqq', $permission)) echo 'checked="checked"';?>>提现请求
				</td>
				<td>
                <input type="checkbox" name="permission[1]" value="a8txjl" <?php if (in_array('a8txjl', $permission)) echo 'checked="checked"';?>>提现记录
				</td>
				<td>
                <input type="checkbox" name="permission[2]" value="a8czjl" <?php if (in_array('a8czjl', $permission)) echo 'checked="checked"';?>>充值记录
				</td>
				<td>
                <input type="checkbox" name="permission[3]" value="a8pttz" <?php if (in_array('a8pttz', $permission)) echo 'checked="checked"';?>>普通投注
				</td>
				<td>
                <input type="checkbox" name="permission[4]" value="a8zbmx" <?php if (in_array('a8zbmx', $permission)) echo 'checked="checked"';?>>帐变明细
				</td>
			</tr>
			<tr><th>
				开奖数据
				</th>
				<td>
				<input type="checkbox" name="permission[5]" value="kjsj" <?php if (in_array('kjsj', $permission)) echo 'checked="checked"';?>>开奖数据
				</td>
			</tr>
			<tr>
				<th>
				时间管理
				</th>
				<td>
				<input type="checkbox" name="permission[6]" value="sjgl" <?php if (in_array('sjgl', $permission)) echo 'checked="checked"';?>>时间管理
				</td>
			</tr>
			
			<tr><th>
				数据统计
				</th>
				<td>
				<input type="checkbox" name="permission[7]" value="a8tjkg" <?php if (in_array('a8tjkg', $permission)) echo 'checked="checked"';?>>统计概况
				</td>
				<td>
                <input type="checkbox" name="permission[8]" value="a8tjbb" <?php if (in_array('a8tjbb', $permission)) echo 'checked="checked"';?>>统计报表
				</td>
				<td>
                <input type="checkbox" name="permission[9]" value="a8kjjc" <?php if (in_array('a8kjjc', $permission)) echo 'checked="checked"';?>>开奖检测
				</td>
			</tr>
			<tr>
				<th>
				代理管理
				</th>
				<td>
				<input type="checkbox" name="permission[10]" value="a8fctj" <?php if (in_array('a8fctj', $permission)) echo 'checked="checked"';?>>分成统计
				</td>
				<td>
				<input type="checkbox" name="permission[11]" value="a8dlgl" <?php if (in_array('a8dlgl', $permission)) echo 'checked="checked"';?>>代理管理
				</td>
			</tr>
			<tr><th>
				用户管理
				</th>
				<td>
				<input type="checkbox" name="permission[12]" value="a8zjhh" <?php if (in_array('a8zjhh', $permission)) echo 'checked="checked"';?>>增加会员
				</td>
				<td>
                <input type="checkbox" name="permission[13]" value="a8zjdl" <?php if (in_array('a8zjdl', $permission)) echo 'checked="checked"';?>>增加代理
				</td>
				<td>
                <input type="checkbox" name="permission[14]" value="a8yhlb" <?php if (in_array('a8yhlb', $permission)) echo 'checked="checked"';?>>用户列表
				</td>
				<td>
                <input type="checkbox" name="permission[15]" value="a8yhxx" <?php if (in_array('a8yhxx', $permission)) echo 'checked="checked"';?>>银行信息
				</td>
				<td>
                <input type="checkbox" name="permission[16]" value="a8dlrz" <?php if (in_array('a8dlrz', $permission)) echo 'checked="checked"';?>>登录日志
				</td>
			</tr>
			<tr><th>
				系统设置
				</th>
				<td>
				<input type="checkbox" name="permission[17]" value="a8xtss" <?php if (in_array('a8xtss', $permission)) echo 'checked="checked"';?>>系统设置
				</td>
				<td>
                <input type="checkbox" name="permission[18]" value="a8ggzx" <?php if (in_array('a8ggzx', $permission)) echo 'checked="checked"';?>>公告中心
				</td>
				<td>
                <input type="checkbox" name="permission[19]" value="a8sklx" <?php if (in_array('a8sklx', $permission)) echo 'checked="checked"';?>>收款类型
				</td>
				<td>
                <input type="checkbox" name="permission[20]" value="a8tklx" <?php if (in_array('a8tklx', $permission)) echo 'checked="checked"';?>>提款类型
				</td>
				<td>
                <input type="checkbox" name="permission[21]" value="a8czgl" <?php if (in_array('a8czgl', $permission)) echo 'checked="checked"';?>>彩种管理
				</td>
				<td>
                <input type="checkbox" name="permission[22]" value="a8wfgla" <?php if (in_array('a8wfgla', $permission)) echo 'checked="checked"';?>>玩法管理(A盘)
				</td>
				<td>
                <input type="checkbox" name="permission[23]" value="a8wfglb" <?php if (in_array('a8wfglb', $permission)) echo 'checked="checked"';?>>玩法管理(B盘)
				</td>
				<td>
                <input type="checkbox" name="permission[24]" value="a8sjbf" <?php if (in_array('a8sjbf', $permission)) echo 'checked="checked"';?>>数据备份
				</td>
				<td>
                <input type="checkbox" name="permission[25]" value="a8sjql" <?php if (in_array('a8sjql', $permission)) echo 'checked="checked"';?>>数据清理
				</td>
			</tr>
			<tr><th>
				顶部菜单
				</th>
				<td>
				<input type="checkbox" name="permission[26]" value="a8xtssa" <?php if (in_array('a8xtssa', $permission)) echo 'checked="checked"';?>>用户列表
				</td>
				<td>
                <input type="checkbox" name="permission[27]" value="a8ggzxa" <?php if (in_array('a8ggzxa', $permission)) echo 'checked="checked"';?>>添加用户
				</td>
				<td>
                <input type="checkbox" name="permission[28]" value="a8sklxa" <?php if (in_array('a8sklxa', $permission)) echo 'checked="checked"';?>>账号充值
				</td>
				<td>
                <input type="checkbox" name="permission[29]" value="a8tklxa" <?php if (in_array('a8tklxa', $permission)) echo 'checked="checked"';?>>彩金赠送
				</td>
				<td>
                <input type="checkbox" name="permission[30]" value="a8czgla" <?php if (in_array('a8czgla', $permission)) echo 'checked="checked"';?>>提现请求
				</td>
				<td>
                <input type="checkbox" name="permission[31]" value="a8wfglaa" <?php if (in_array('a8wfglaa', $permission)) echo 'checked="checked"';?>>今日统计
				</td>
				<td>
                <input type="checkbox" name="permission[32]" value="a8wfglba" <?php if (in_array('a8wfglbaa', $permission)) echo 'checked="checked"';?>>统计报表
				</td>
				<td>
                <input type="checkbox" name="permission[33]" value="a8sjbfa" <?php if (in_array('a8sjbfa', $permission)) echo 'checked="checked"';?>>清空缓存
				</td>
			</tr>
			<tr>
				<td colspan="3">
				<button type="submit" class="btn btn-primary">保存设置</button>
				<a href="manage/index" class="btn btn-danger" style="color: #fff;text-decoration: none;">返回</a>
				</td>
			</tr>
		</table>
	</form>
	</td>
</tr>
</table>
</article>