<?php $para=$args[0]; 
if($para['type']==1){
	$actionNo=date('Ymd', strtotime($para['actionTime'])).substr($para['actionNo']+1000,1);
	if($para['actionNo']==120) $actionNo=date('Ymd', strtotime($para['actionTime'])-24*3600).substr($para['actionNo']+1000,1);
}else if($para['type']==80){//新疆
	$actionNo=date('Ymd', strtotime($para['actionTime'])).substr($para['actionNo']+10000,1);
}else if($para['type']==73|| $para['type']==86){//1.5分彩
	$actionNo=date('Ymd', strtotime($para['actionTime'])).substr($para['actionNo']+1000,1);
}else if($para['type']==84){// 北京快三
    $actionNo = 89*(strtotime(date('Y-m-d', strtotime($para['actionTime'])))-strtotime('2007-11-25'))/3600/24+$para['actionNo']-230969;
}else if($para['type']==81){//1分彩
	$actionNo=date('Ymd', strtotime($para['actionTime'])).substr($para['actionNo']+10000,1);
}else if($para['type']==83){// 天津
	$actionNo=date('Ymd', strtotime($para['actionTime'])).substr($para['actionNo']+1000,1);
}else if($para['type']==72){//1.5分赛车
	$actionNo=date('Ymd', strtotime($para['actionTime'])).substr($para['actionNo']+1000,1);
}else if($para['type']==74){//5分六合彩
	$actionNo=date('Ymd', strtotime($para['actionTime'])).substr($para['actionNo']+1000,1);
}else if($para['type']==82){//5分彩
	$actionNo=date('Ymd', strtotime($para['actionTime'])).substr($para['actionNo']+1000,1);	
}else if($para['type']==76){ //台湾pk拾
	$actionNo = 288*(strtotime(date('Y-m-d', strtotime($para['actionTime'])))-strtotime('2007-11-11'))/3600/24+$para['actionNo']-4321;
}elseif($para['type']==50){
	$time=strtotime($para['actionTime']);
	$actionNo = 179*(strtotime(date('Y-m-d', $time))-strtotime('2007-11-18'))/3600/24+$para['actionNo']-2540;	
}elseif($para['type']==60){
	//广东快乐10分
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if ($actionNo > 84) {
	$time -= 24 * 3600;
	}
	$actionNo = date('Ymd',$time) . substr(100 + $actionNo, 1);
}elseif($para['type']==61){
	//重庆幸运农场
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>97){
		$actionNo=date('ymd',strtotime(date('Y-m-d',$time -1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$actionNo=date('ymd',$time).substr(1000+$actionNo,1);
	}
}elseif($para['type']==65 || $para['type']==66){
	//北京快乐8和PC蛋蛋
	$time=$this->time;
	$actionNo = 179*(strtotime(date('Y-m-d', $time))-strtotime('2004-09-19'))/3600/24+$para['actionNo']-4560;						
}elseif($para['type']==21){
	//广东11选五	
   	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if ($actionNo > 84) {
	$time -= 24 * 3600;
	}
	$actionNo = date('Ymd',$time) . substr(100 + $actionNo, 1);
}elseif($para['type']==10){
	// k3
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>82){ 
		$actionNo=date('ymd', strtotime(date('Y-m-d',$time - 1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$actionNo=date('ymd', $time).substr(1000+$actionNo,1);
			
	}							
}elseif($para['type']==55){
	//幸运飞艇
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>180){ 
		$actionNo=date('Ymd', strtotime(date('Y-m-d',$time - 1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$timea=intval(date('Hi',$time));	
		if($timea>=0 && $timea <= 405){
		if($actionNo>131){$actionNo=date('Ymd', strtotime('-1 Day',$time)).substr(1000+$actionNo,1);}
		}else{$actionNo=date('Ymd', $time).substr(1000+$actionNo,1);}
	}								
}elseif($para['type']==70){
	// 六合彩
	$actionNo=$para['actionNo'];
}

$id=$this->getValue("select id from {$this->prename}data where number=? and type={$para['type']}",$actionNo);
$data=$this->getValue("select data from {$this->prename}data where number=? and type={$para['type']}",$actionNo);
$datatime=$this->getValue("select time from {$this->prename}data where number=? and type={$para['type']}",$actionNo);
;echo '<div>
<input type="hidden" value="';echo $this->user['username'];echo '" />
<form action="/admin778899.php/data/updatedataed" target="ajax" method="post" call="dataSubmitCode" onajax="dataBeforeSubmitCode" dataType="html">
	<input type="hidden" name="id" value="';echo $id;echo '"/>
	<table class="popupModal">
		<tr>
			<td class="title" width="180">期号：</td>
			<td>';echo $actionNo;echo '</td>
		</tr>
		<tr>
			<td class="title">预期开奖时间：</td>
			<td>';echo $para['actionTime'];echo '</td>
		</tr>
		<tr>
			<td class="title">实际开奖时间：</td>
			<td><input type="text" name="time" value="';echo date('Y-m-d H:i:s', $datatime);echo '"/></td>
		</tr>		
		<tr>
			<td class="title">开奖号码：</td>
			<td><input type="text" name="data" value="';echo $data;echo '"/></td>
		</tr>
		<tr>
			<td align="right"><span class="spn4">提示：</span></td>
			<td><span class="spn4">号码格式如: 1,2,3,4,5</span></td>
		</tr>
	</table>
</form>
</div>';
?>