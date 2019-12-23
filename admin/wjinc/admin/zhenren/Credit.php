<!--?php
include_once("../common/login_check.php");
check_quanxian("xxgl");
include_once("../../include/mysqli.php");
include_once("../../include/newpage.php");

?-->
<html>
<head>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
<TITLE>平台额度</TITLE>
<script language="javascript" src="/js/jquery.js"></script>
<style type="text/css">
<STYLE>
BODY {
SCROLLBAR-FACE-COLOR: rgb(255,204,0);
 SCROLLBAR-3DLIGHT-COLOR: rgb(255,207,116);
 SCROLLBAR-DARKSHADOW-COLOR: rgb(255,227,163);
 SCROLLBAR-BASE-COLOR: rgb(255,217,93)
}
.STYLE2 {font-size: 12px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
td{font:13px/120% "宋体";padding:3px;}
a{color:#FFA93E;text-decoration: none;}
.t-title{background:url(/super/images/06.gif);height:24px;}
.t-tilte td{font-weight:800;}
</STYLE>
</HEAD>
<script language="javascript">
	function reflivemoney(username,index) {
		var com  = $("#"+index+username);
		com.html('<img src="../../Box/skins/icons/loading.gif" />');
		$.get("../../agline/live_credit_admin.php?username="+username+"&index="+index,function (data) {
			com.html(data);
		});
	}
</script>
<body>
<script language="JavaScript" src="../../js/calendar.js"></script>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <td height="24" nowrap background="../images/06.gif"><font > <span class="STYLE2">平台额度</span></font></td>
  </tr>
  <tr>
    <td height="24" align="center" nowrap bgcolor="#FFFFFF">
	  <table width="80%">
      <form name="form1" method="get" action="<?=$_SERVER["REQUEST_URI"]?>" onSubmit="return check();">
      <tr align="center">
	  <td nowrap align="center"> 平台额度
	  </td>	
      </form>
    </table>
    </td>
  </tr>
</table>


<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC"><tr><td ><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
	  <tr>
		<td height="24" nowrap bgcolor="#FFFFFF"><table width="100%" border="1" bgcolor="#FFFFFF" bordercolor="#96B697" cellspacing="0" cellpadding="0" style="border-collapse: collapse; color: #225d9c;" id=editProduct   idth="100%" >   
        <td width="200" align="center"><strong>平台类型</strong></td>
        <td width="300" height="20" align="center"><strong>  平台额度</strong></td>
      </tr>

      <tr onMouseOver="this.style.backgroundColor='#EBEBEB'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="background-color:#FFFFFF;">
     	<td align="center" >AG</td>
        <td align="center" ><span id="ag" >--</span><!--a href="javascript:void(0);" onClick="reflivemoney('','ag')"-->&nbsp;刷新</a></td>     
      </tr> 
</table>
</body>
</html>