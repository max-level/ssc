<?php $this->display('inc_top.php') ?>
<!--//复制程序 flash+js-->
<script type="text/javascript" src="/skin/js/swfobject.js"></script>
<script language="JavaScript">
function Alert(msg) {
	alert(msg);
}
function thisMovie(movieName) {
	 if (navigator.appName.indexOf("Microsoft") != -1) {   
		 return window[movieName];   
	 } else {   
		 return document[movieName];   
	 }   
 } 
function copyFun(ID) {
	thisMovie(ID[0]).getASVars($("#"+ID[1]).attr('value'));
}



</script>

<div class="educhange">
	<div class="fr">
		<input class="tjbtn" type="submit" onclick="window.location='/team/addlink'" value="添加链接">
	</div>
	<div class="cl h1"></div>
</div>
<div class="pagemain">
	<div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
				<div class="ibox-content">
					<?php
					$sql="select * from {$this->prename}links where uid={$this->user['uid']}";
					
					$data=$this->getPage($sql, $this->page, $this->pageSize);
					?>
					<table width="100%" border="0" cellspacing="1" cellpadding="0" class="table table-striped table-bordered table-hover dataTables-example">
						<thead>
							<tr>
								<th>编号</th>
								<th>类型</th>
								<th>返点</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody class="table_b_tr">
							<?php if($data['data']) foreach($data['data'] as $var){ ?>
							<tr class="gradeX">
							 <td><?=$var['lid']?></td>
								<td><?php if($var['type']){echo'代理';}else{echo '会员';}?></td>
								<td><?=$var['fanDian']?>%</td>
								<td>
								<a onclick="xiugai(<?=$var['lid']?>);" href="javascript:void(0)">修改</a> 
								
								| <a onclick="hqlj(<?=$var['lid']?>);" href="javascript:void(0)">获取链接</a> 
								
								| <a onclick="sclj(<?=$var['lid']?>);" href="javascript:void(0)">删除</a></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="wanjinDialog"></div>
<script type="text/javascript">
function xiugai(num){
	layer.open({
	  type: 2,
	  resize:false,//拉伸
	  area: ['460px', '205px'],
	  zIndex:1999,
	  //fixed: false, //不固定
	  title:false,
	  scrollbar: false,//屏蔽滚动条
	  content:'/team/linkUpdate/'+num
	});
	return false;
}
function hqlj(num){
	layer.open({
	  type: 2,
	  resize:false,//拉伸
	  area: ['460px', '205px'],
	  zIndex:1999,
	  //fixed: false, //不固定
	  title:false,
	  scrollbar: false,//屏蔽滚动条
	  content:'/team/getLinkCode/'+num
	});
	return false;
}
function sclj(num){
	layer.open({
	  type: 2,
	  resize:false,//拉伸
	  area: ['460px', '205px'],
	  zIndex:1999,
	  //fixed: false, //不固定
	  title:false,
	  scrollbar: false,//屏蔽滚动条
	  content:'/team/linkDelete/'+num
	});
	return false;
}
</script>
 <script>
	$(document).ready(function() {
		  $('.dataTables-example').dataTable( {
		  //跟数组下标一样，第一列从0开始，这里表格初始化时，第四列默认降序
			"order": [[ 3, "desc" ]]
		  } );
		} );
	function fnClickAddRow() {
		$('#editable').dataTable().fnAddData([
			"Custom row",
			"New row",
			"New row",
			"New row",
			"New row"]);
	}
</script>
  
   
 