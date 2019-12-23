<?php $this->display('inc_skin.php') ?>
<?php 
	$sql="select * from {$this->prename}links where lid=?";
	$linkData=$this->getRow($sql, $args[0]);
	
	if($linkData['uid']){
		$parentData=$this->getRow("select fanDian from {$this->prename}members where uid=?", $linkData['uid']);
	}else{
		$this->getSystemSettings();
		$parentData['fanDian']=$this->settings['fanDianMax'];
	}

?>
<form action="/index.php/team/linkUpdateed" target="ajax" method="post" class="layui-form layui-form-pane" call="linkDataSubmitCode" onajax="linkDataBeforeSubmitCode" dataType="html">
	<input type="hidden" name="lid" value="<?=$args[0]?>"/>
	
	<div class="layui-form-item">
    <label class="layui-form-label">返点</label>
    <div class="layui-input-inline">
		<input type="text" class="layui-input" name="fanDian" value="<?=$linkData['fanDian']?>" max="<?=$parentData['fanDian']?>" min="0" fanDianDiff=<?=$this->settings['fanDianDiff']?> >
		<span style="color:#999">0—<?=$parentData['fanDian']?>%</span>
    </div>
  </div>
	
<div class="layui-form-item">
    <label class="layui-form-label">创建时间</label>
    <div class="layui-input-inline">
      <input type="text" name="username" readonly="readonly" value="<?=date("Y-m-d H:i:s",$linkData['regTime'])?>" readonly="readonly" class="layui-input">
    </div>
	<button class="layui-btn layui-btn-normal" type="submit">修改</button>
  </div>

        

</form>