<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
<header><h3 class="tabs_involved">添加信息</h3></header>
<table>
<tr><td>
<form action="/admin778899.php/Member/doAddNotice1" target="Ajax" method="post" call="sysReloadNotice4">
		<table class="tablesorter table2" cellspacing="0" width="100%">
			
			<tr>
				<td><span class="aq-txt">标题：</span></td>
				<td align="left"><input type="text" name="title" style="width:550px;" value="" /></td>
			</tr>
			<tr>
				<td><span class="aq-txt">内容：</span></td>
				<td align="left">
                <textarea rows="10" name="content" id="content" boxid="content" style="width:550px;" ></textarea>
                </td>
			</tr>
			<tr>
				<td align="left"><span class="aq-txt">推送对象：</span></td>
				<td align="left"><select name="post_class">
				<option value="">-请选择-</option>
				<option value="all_member">全部会员</option>
				<option value="portion_member">部分会员</option>	
				<option value="online_member">在线会员</option>				
				<option value="agent">代理</option></select><input type="text" name="member_name" style="width:220px;" value="" />选择部分会员时多个帐户名之间需用,隔开<br><br>
				<!--<input type="checkbox" name="member_vip[0]" value="vip1">VIP1&nbsp;
				<input type="checkbox" name="member_vip[1]" value="vip2">VIP2&nbsp;
				<input type="checkbox" name="member_vip[2]" value="vip3">VIP3&nbsp;
				<input type="checkbox" name="member_vip[3]" value="vip4">VIP4&nbsp;
				<input type="checkbox" name="member_vip[4]" value="vip5">VIP5-->
				</td>				
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" class="alt_btn" value="添加信息"/>&nbsp;&nbsp;<input type="reset" class="alt_btn" value="清除重写"/></td>
			</tr>
		</table>
	</form>
	</td>
	
</tr>
</table>
</article>
