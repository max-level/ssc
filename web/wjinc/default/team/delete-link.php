<?php $this->display('inc_skin.php') ?>
<?php 
	$sql="select * from {$this->prename}links where lid=?";
	$linkData=$this->getRow($sql, $args[0]);
	
	if($linkData['uid']){
		$parentData=$this->getRow("select fanDian, fanDianBdw, username from {$this->prename}members where uid=?", $linkData['uid']);
	}else{
		$this->getSystemSettings();
		$parentData['fanDian']=$this->settings['fanDianMax'];
		$parentData['fanDianBdw']=$this->settings['fanDianBdwMax'];
	}

?>
<form action="/index.php/team/linkDeleteed" target="ajax" method="post" call="delLink" class="layui-form layui-form-pane" onajax="linkDataBeforeSubmitDelete" dataType="html">
	<input type="hidden" name="lid" value="<?=$args[0]?>"/>
	<div class="layui-form-item" >
			<label class="layui-form-label">上级</label>
			<div class="layui-input-inline">
			  <input type="text" name="username" readonly="readonly" value="<?=$parentData['username']?>"  class="layui-input">
			</div>
	</div>
	
	<div class="layui-form-item">
    <label class="layui-form-label">返点</label>
    <div class="layui-input-inline">
      <input type="text" name="username" readonly="readonly" value="<?=$linkData['fanDian']?>%" readonly="readonly" class="layui-input">
    </div>
  </div>
	
<div class="layui-form-item">
    <label class="layui-form-label">创建时间</label>
    <div class="layui-input-inline">
      <input type="text" name="username" readonly="readonly" value="<?=date("Y-m-d H:i:s",$linkData['regTime'])?>" readonly="readonly" class="layui-input">
    </div>
	<button class="layui-btn layui-btn-normal" type="button" onClick="dataAddCode();return false">删除</button>
  </div>

        

</form>

<script language="JavaScript">
function dataAddCode(){
		layer.open({
                content:'<div style="text-align: center;">'+ '注册链接删除成功' +'</div>',
                btn:['确定'],
				btnAlign: 'c',//按钮居中
                yes:function(){                 
				$.post('/index.php/team/linkDeleteed',{lid:<?=$args[0]?>})			
				window.parent.location.reload();
                }
            })
	}
</script>