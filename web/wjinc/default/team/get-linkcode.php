<?php $this->display('inc_skin.php') ?>
<?php 

	$sql="select * from {$this->prename}links where lid=?";
	$linkData=$this->getRow($sql, $args[0]);
	
	if($linkData['uid']){
		$parentData=$this->getRow("select fanDian, username from {$this->prename}members where uid=?", $linkData['uid']);
	}else{
		$this->getSystemSettings();
		$parentData['fanDian']=$this->settings['fanDianMax'];
	}


	include_once $_SERVER['DOCUMENT_ROOT'].'/lib/classes/Xxtea.class';
	$key=Xxtea::encrypt($args[0].",".$args[1], $args[2]);
	$key=base64_encode($key);
	$key=str_replace(array('+','/','='), array('-','*',''), $key);
	
?>

<div class="layui-form layui-form-pane">
  <?php 
		$sql="select * from {$this->prename}links where lid=?";
		if(!$linkData=$this->getRow($sql, $args[0])){
	?>
	<div class="layui-form-mid layui-word-aux" style="text-align: center;">该注册链接不存在，或者已经失效！</div>
	<?php  
		}else{
			$pd = "select * from {$this->prename}members where uid=?";
			$parentData = $this->getRow($pd, $linkData['uid']);
	?>
         
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
			<label class="layui-form-label">推广链接</label>
			<div class="layui-input-inline">
			  <input id="biao1" readonly value="http://<?=$_SERVER['HTTP_HOST']?>/index.php/user/r/<?=$key?>" class="layui-input">
			</div>
			<button class="layui-btn layui-btn-normal" type="button" onClick="copyUrl1()" >复制</button>
		  </div>
      				
     <?php }?>   
</div> 


<script language="JavaScript">
//复制链接1
function copyUrl1(){
var Url2=document.getElementById("biao1");
Url2.select();
document.execCommand("Copy");
layer.msg("推广链接复制成功。");
}

</script>