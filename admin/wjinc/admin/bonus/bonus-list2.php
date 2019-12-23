<?php
	$para=$_GET;
	
	// 用户限制
	if($para['username'] && $para['username']!="用户名"){
		$userWhere=" and username like '%{$para['username']}%'";
	}

	// 时间限制

	$sql="select * from {$this->prename}members where type>0 and isDelete=0 $userWhere order by type desc, uid desc";
	//echo $sql;
	$data=$this->getPage($sql, $this->page, $this->pageSize);
?>
<article class="module width_full">
  <header>
    <h3 class="tabs_involved">分成统计（默认查询的最近七天,可分成总额为(-下级盈亏总额)*分成比例）
      <form action="/admin778899.php/bonus/bonuslist" target="ajax" datatype="html" call="defaultSearch" class="submit_link wz">
        用户名：
        <input type="text" class="alt_btn" name="username">
        &nbsp;&nbsp;
        时间：从
        <input type="date" class="alt_btn" name="fromTime">
        到
        <input type="date" class="alt_btn" name="toTime">
        &nbsp;&nbsp;
        <input type="submit" value="查找" class="alt_btn">
      </form>
    </h3>
  </header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <td>代理账号</td>
        <td>操作</td>
      </tr>
    </thead>
    <tbody>
      <?php if($data['data']) foreach($data['data'] as $var){ 
	
	  ?>
      <tr>
	<td><?=$var['username']?></td>
        <td><a href="javascript:;" onClick="addUser(<?=$var['uid']?>)" >增加下线</a></td>
      </tr>
      <?php }else{ ?>
      <tr>
        <td colspan="8" align="center">暂时没有记录。</td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <footer>
    <?php
		$rel=get_class($this).'/bonuslist2-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'defaultReplacePageAction');
	?>
  </footer>

  <script>
  	// 弹出添加下线页面
	function addUser(uid){
		var _html = '<table cellpadding="0" cellspacing="0" width="400" class="layout">'+
			'<input type="hidden" name="parentid" value="'+uid+'" />'+
				'<tr>'+
					'<th>选择：</th>'+
					'<td><label>客户帐号名<input type="radio" name="user" value="2" checked="true" /></label></td>'+
				'</tr>'+
				'<tr>'+
					'<th>客户帐号名：</th>'+
					'<td><input type="text" onblur="isUser($(this));" class="uid" /></td>'+
				'</tr>'+
				'<tr>'+
					'<th>&nbsp;</th>'+
					'<td><span  class="tip" style="color:#F00"></span></td>'+
				'</tr>'+
				'<tr>'+
					'<th><span class="spn9">提示：</span></th>'+
					'<td><span class="spn9">请填写客户的账号名</td></span>'+
				'</tr>'+
			'</table>';

		$(_html).dialog({
			title:'增加下线',
			width:380,
			modal:true,
			buttons:{
				"确定添加":function(event, ui){
					var parentid = $(this).find("input[name=parentid]").val();
					var typeArr = $(this).find("input[name='user']");
					//console.log(typeArr);
					typeArr.each(function(){
						//console.log($(this).prop('checked'));
						if($(this).prop('checked'))
						{
							type = $(this).val();return false;
						}
					});
					var uid = $(this).find('.uid').val()
					if(!uid || !type || !parentid)
					{
						return false;
					}
					$(this).dialog("destroy");
					$.ajax('/admin778899.php/' + 'bonus/addXiaxian/'+uid+'/'+parentid+'/'+type,{
						type:'post',
						data:{uid:uid,pid:parentid,type:type},
						dataType:'json',
						error:defaultError,
						success:defaultSuccess	
					});
				},
				
				"取消":function(event, ui){
					$(this).dialog("destroy");
				}
			}
		});
		delete _html;
	}

		//判断是否是用户
	function isUser(obj)
	{
		var table = obj.parents('table');
		var uid = table.find('.uid').val();
		if(!uid)
		{
			return false;
		}
		//console.log(uid);return 1;
		//table.getElementById('uid').onblur = '';
		//table.getElementById('uid').onbulr = isUser(obj);
		var typeArr = table.find("input[name='user']");
		//console.log(typeArr);
		typeArr.each(function(){
			//console.log($(this).prop('checked'));
			if($(this).prop('checked'))
			{
				type = $(this).val();return false;
			}
		});
		console.log(type);
		$.get('/admin778899.php/' + 'bonus/isUser/'+uid+'/'+type,function(data){
			var data = JSON.parse(data);
			console.log(data.msg);
			table.find('.tip').text(data.msg);
			delete data;
		});
		delete type,uid;
	}	
  </script>
</article>
