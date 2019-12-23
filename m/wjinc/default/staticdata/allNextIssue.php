<?php 
$gametype=$this->getRows("select * from {$this->prename}type where enable=1 order by sort asc");
if($gametype){
$allgames=array();
$idkey2=array();
	foreach($gametype as $key => $var){
		$gameId=$var['id'];
		$lastNo=$this->getGameLastNo($gameId);
		$kjHao=$this->getRow("select * from {$this->prename}data where type={$gameId} order by number desc limit 1");
		//if($kjHao) $kjHao=explode(',', $kjHao);
		$actionNo=$this->getGamenextNo($gameId);
		//var_dump($actionNo);
		$types=$this->getTypes();
		$kjdTime=$types[$gameId]['data_ftime'];
		$diffTime=strtotime($actionNo['actionTime'])-$kjdTime;
		//$kjDiffTime=strtotime($lastNo['actionTime'])-$this->time;
		$nextIssueData=array();
		$nextIssueData['issue']=$actionNo['actionNo'];
		$nextIssueData['endtime']=date("Y-m-d H:i:s",$diffTime);
		$nextIssueData['nums']=null;
		$nextIssueData['lotteryTime']=date("Y-m-d H:i:s",strtotime($actionNo['actionTime']));
		
		$nextIssueData['preIssue']=$kjHao['number'];
		$nextIssueData['preLotteryTime']=date("Y-m-d H:i:s",$kjHao['time']);
		$nextIssueData['preNum']=$kjHao['data'];
		$nextIssueData['preIsOpen']=true;
		$nextIssueData['serverTime']=date("Y-m-d H:i:s",time());
		$nextIssueData['gameId']=$gameId;
		array_push($allgames,$nextIssueData);
		array_push($idkey2, $var['id']);

	}
}
$allnextIssueData=array_combine($idkey2, $allgames);

/*var nextIssueData = {"issue":"20161210073","endtime":"2016-12-10 18:09:00","nums":null,"lotteryTime":"2016-12-10 18:10:00",
"preIssue":"20161210072","preLotteryTime":"2016-12-10 18:00:00","preNum":"6,4,4,2,4","preIsOpen":true,"serverTime":"2016-12-10 18:03:00","gameId":1};
jsonpNextIssueCallback(nextIssueData);*/
echo 'var allNextIssueData = '.json_encode($allnextIssueData);
?>