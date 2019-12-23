<script type="text/javascript">
	 /*
   *增加模板行
   */
   
   function addRow() {
    var table = document.getElementById("addTable");
    var tbody = document.getElementById("templeteTBody");
    var newTBody = tbody.cloneNode(true);
    newTBody.style.display="";
    var footTBody = document.getElementById("footTbody");
    return table.insertBefore(newTBody,footTBody);
   }
   /*
   *删除模板行
   */
   
   function deleteRow(obj) {
    var tbody = obj.parentNode.parentNode.parentNode;
    var table = document.getElementById("addTable"); 
    table.removeChild(tbody);
   }
/**
   *向模板中填充值
   */
    function setValue(){
            var tbody=addRow();
    }
	
	</script>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
<header><h3 class="tabs_involved">添加IP黑名单</h3></header>
<table width="100%">
<tr><td>
<form action="/admin778899.php/Member/doAddhei" method="post" target="ajax" call="sysReloadNotice1">
		<table class="tablesorter table2" cellspacing="0" width="100%">
			
			<tr>
				<td><span class="aq-txt">IP地址：</span></td>
				<td align="left"><div align="left"><input type="text" name="ip_text" style="width:200px;" value="" /><font color="red">&nbsp;&nbsp;请注意ip的正确格式。</font></div></td>
			</tr>
			<tr>
				<td><span class="aq-txt">风险等级：</span></td>
				<td align="left"><div align="left"><input type="radio" name="risk" value="High-risk" checked="checked">禁止出款<input type="radio" name="risk" value="Low-risk" >高危风险</div></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" class="alt_btn" value="确定添加"/>&nbsp;&nbsp;<input type="reset" class="alt_btn" value="重置"/></td>
			</tr>
		</table>
	</form>
	</td>
	
</tr>
</table>
</article>
