<?php
class Member extends AdminBase{
	public $pageSize=15;
	public final function add(){
		$this->display('member/add.php');
	}

	public final function add2(){
		$this->display('member/add2.php');
	}

	public final function index(){
		$this->display('member/list.php');
	}
	
	public final function bank(){
		$this->display('member/bank.php');
	}
	
	public final function loginLog(){
		include 'ip.function.php';
		$this->display('member/login-list.php');
	}
	
	public final function edit($uid){
		$this->display('member/edit.php');
	}
	public final function agent_list(){
		$this->display('member/agent_list.php');//代理列表
	}
	
	//协议设置
	public final function doAddxieyi(){
		if(trim($_POST['xynr'])=="") return "协议内容不能为空";
		$content = $_POST['xynr'];
		$para['content'] = str_replace(' ', '', nl2br($content));//转换换行和空格
		$id=1;
		if($this->updateRows($this->prename.'xieyi', $para, 'id='. $id)){
			 return '添加修改协议成功'; 
		 }
	}
	
	//推送
	public final function doAddNotice1(){
		if(trim($_POST['title'])=="") return "标题不能为空";
		if(trim($_POST['content'])=="") return "内容不能为空";
		if(trim($_POST['post_class'])=="") return "请选择推送对象";
		
		$title = $_POST['title'];
		$content = $_POST['content'];
		$post_class = $_POST['post_class']; 
		$lv = "";//获取推送对象
		if($post_class=="all_member") $lv = 0;
		if($post_class=="portion_member") $lv = 1;
		if($post_class=="online_member") $lv = 2;
		if($post_class=="agent") $lv = 3;
		if($lv==1&&$_POST['member_name']==""){
			return "请输入部分会员账户名,多个账户名之间用英文逗号','隔开！";
		}
		
		//如果推送对象不是部分会员，则不能输入部分会员账户
		if(($lv==0||$lv==2||$lv==3)&&$_POST['member_name']!=""){	
			return "推送对象不是部分会员，不能输入会员账户名！";	
		} 
		$member_name =$_POST['member_name']; //获取部分会员名单
		$addTime = time();
		$username = $this->user['username'];  //获取操作人

		//获取vip等级
		/* $member_str = implode(',',$_POST['member_vip']); */
		$isReadName = "";//已读取信息的名单，默认空
		
		$para['title'] = $title;
		$para['content'] = $content;
		$para['addTime'] = $addTime;
		$para['operator'] = $username;
		$para['pushObj'] = $lv;
		$para['part'] = $member_name;   
		/* $para['viplv'] = $member_str; */
		$para['isReadName'] = $isReadName;
		if($this->insertRow($this->prename .'push_message', $para)){
			 return '添加推送成功'; 
		 } 
	}
	

	//删除推送信息
	public final function doDeleteMsg(){
		$id = $_POST['mid'];
		$sql="delete from {$this->prename}push_message where mid='$id'";			
		$this->update($sql);
		return "删除成功";		
	}
	
	
	
	
	/*银行卡黑名单-添加*/
	public final function doAddbankcard(){	
		$stop_name = trim($_POST['stop_name']);
		$stop_bankcard = trim($_POST['stop_bankcard']);
		$username = $this->user['username'];
		$isDelete = 0;
		$risk = trim($_POST['risk']);
		
		if($risk=="High-risk"){
			$risk = "/images/stop.png";
		}else{
			$risk = "/images/999.png";
		}

		if($stop_name==""&&$stop_bankcard==""){
			return "姓名或者卡号必须填写一个！";
		}

		if($stop_bankcard!=""){
			if(!preg_match('/^([1-9]{1})(\d{14}|\d{18})$/',$stop_bankcard)){
				return "请输入正确的银行卡号！";
			}
		}
		$sql = "insert into {$this->prename}stop_bankcard(name,bankno,admin_name,isDelete,risk)values('$stop_name','$stop_bankcard','$username','$isDelete','$risk')";
		$this->update($sql);
		return '添加成功';
	}
	
	/*银行卡黑名单--删除*/
	public final function doDeletebank(){	
		$cardid = $_POST['cardid'];
		$para['isDelete'] = 1;
		$this->updateRows($this->prename .'stop_bankcard', $para, 'id='. $cardid);	
		return "删除成功！";			
	}
	
	
	/*ip黑名单管理-添加*/
	public final function doAddhei(){	
		$ip_text = trim($_POST['ip_text']);
		$risk = trim($_POST['risk']);
		
		if($risk=="High-risk"){
			$risk = "/images/stop.png";
		}else{
			$risk = "/images/999.png";
		}
		
		if($ip_text==""){
			return "ip地址不能为空！";
		}
		if(filter_var($ip_text, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)){
			//插入数据
			$username = $this->user['username'];
			$isDelete = 0;
			$sql = "insert into {$this->prename}stop_ip(ip,admin_name,isDelete,risk)values('$ip_text','$username','$isDelete','$risk')";
			$this->update($sql);
			return '添加成功';
		}else{
			return '请输入正确的IP地址！';
		}		
	}
	/*ip黑名单管理--删除*/
	public final function doDeletehei(){	
		$heiid = $_POST['heiid'];
		$para['isDelete'] = 1; //1为删除状态
		$this->updateRows($this->prename .'stop_ip', $para, 'id='. $heiid);
		return"删除成功！";
	}
	
	
	
	/*public final function fabuxiaoxi(){
		$this->display('member/fabuxiaoxi.php');
	}*/
	public final function added($passwordEncrypt=false){
		if(!$_POST) throw new Exception('提交数据出错');

		//过滤
		$update['type']=intval($_POST['type']);
		$update['fanDian']=floatval($_POST['fanDian']);
		$update['username']=wjStrFilter($_POST['username']);
		$update['qq']=$_POST['qq'];
		$update['password']=$_POST['password'];
		//$update['xuni']=intval($_POST['xuni']);
		$update['src']="后台添加";
		if($update['type']!=1 && $update['type']!=2 && $update['type']!=3){
			$update['panid']=$_POST['panid'];
			$update['gudongId']=$_POST['gudongId'];
			$update['zparentId']=$_POST['zparentId'];
			$update['parentId']=$_POST['parentId'];
		}
		if(!isset($update['username'])) throw new Exception('用户名不能为空');
		if(!isset($update['fanDian'])) throw new Exception('返点不能为空');
		if(!ctype_digit($update['qq'])) throw new Exception('QQ包含非法字符');
		if(strlen($update['qq'])<4 || strlen($update['qq'])>13) throw new Exception('QQ号为4-12位,请重新输入');
		
		if($this->getValue("select uid from {$this->prename}members where username=?", $update['username']))
		throw new Exception("用户名已经存在。");
		
		if(isset($update['password']) && !$passwordEncrypt) $update['password']=md5($update['password']);
		if(!isset($update['nickname']) || !$update['nickname']) $update['nickname']=$update['username'];
		if(!isset($update['name']) || !$update['name']) $update['name']='';
		
		$update['regIP']=$this->ip(true);
		$update['regTime']=$this->time;
		
		if($this->insertRow($this->prename .'members', $update)){
			$uid=$this->lastInsertId();
			$this->addLog(4,$this->adminLogType[4].'['.$update['username'].']',$uid, $update['username']);
			$para['message']='添加用户成功';
			return $update;
		}else{
			throw new Exception('未知错误');
		}
	}
	public final function tiuser($uid){
		$uid=intval($uid);
		if($uid){
			$this->update("update {$this->prename}member_session set isOnline=0 where uid={$uid}");
			$this->addLog(22,$this->adminLogType[22].'['.$uid.']',$uid,'');
			return '踢他下线成功';
		}else{
			throw new Exception('操作失败');
		}
		
	}
	
	public final function delete($uid){
		$uid=intval($uid);
		$this->display('member/userDel-modal.php', 0, $uid);
	}
	public final function deleteed(){
		$para=$_POST;
		$uid=$para['uid'];
		$teamCoin=$para['teamCoin'];
		$teamFcoin=$para['teamFcoin'];
		//检查是否有下级，并且有帐变
		$son=$this->getRow("select count(*) teamNum, sum(coin) teamCoin, sum(fcoin) teamFcoin from {$this->prename}members gudongId=$uid or zparentId=$uid or parentId=$uid");
		if($son['teamNum']-1>0) throw new Exception('团队还有成员'.$son['teamNum'].'人，团队资金'.$son['teamCoin'].'元,团队冻结'.$son['teamFcoin'].'元');
		if(floatval($teamCoin) != floatval($son['teamCoin'])) throw new Exception('团队资金刚有变动'.(floatval($son['teamFcoin'])-floatval($teamFcoin)).'元，请确认后再删除');
		if(floatval($teamFcoin) != floatval($son['teamFcoin'])) throw new Exception('团队冻结资金刚有变动'.(floatval($son['teamFcoin'])-floatval($teamFcoin)).'元，请确认后再删除');
		//检查用户是否有已经充值还未到账的情况
		//if() throw new Exception('有用户充值'.(floatval($son['teamFcoin'])-floatval($teamFcoin)).'元，正在到账中……');
		
		$userName=$this->getValue("select username from {$this->prename}members where uid=?", $uid);
		$sql="call delUser2($uid)";
		if($this->update($sql)){
			//$this->updateRows($this->prename .'members', array('isDelete'=>1), 'uid='.$uid)
			$this->addLog(6,$this->adminLogType[6].'['.$userName.']',$uid,$userName);
			return '删除成功';
		}else{
			throw new Exception('删除失败');
		}
	}
	
	/*用户*///myq
	public final function listUser($sortType="userId"){
		//throw new Exception($sortType);
		$this->sortType=$sortType;
		$this->display('member/list-user.php');
	}
	/*编辑用户*/
	public final function userUpdate($id){
		$this->display('member/update-modal.php', 0, $id);
	}
	public final function userUpdateed(){
		$para=$_POST;
		$uid=intval($para['uid']);
		if(!$para['password']){
			unset($para['password']);
		}else{
			$para['password']=md5($para['password']);
		}
		if(!$para['coinPassword']){
			unset($para['coinPassword']);
		}else{
			$para['coinPassword']=md5($para['coinPassword']);
		}
		if(!isset($para['fanDian'])) unset($para['fanDian']);
		
		// 重置银行信息
		if($para['resetBank']==1){
			$sql="update {$this->prename}member_bank set editEnable=1,account='' where `uid`={$para['uid']}";
			$this->update($sql);
		}
		unset($para['resetBank']);
		if($s=$para['yhmc']){
			$sql="update {$this->prename}member_bank set bankId='{$s}' where `uid`={$para['uid']}";
			$this->update($sql);
		}
		unset($para['yhmc']);
		if($ss=$para['yhxx']){
			$sql="update {$this->prename}member_bank set account='{$ss}' where `uid`={$para['uid']}";
			$this->update($sql);
		}
		unset($para['yhxx']);
		if($sss=$para['yhxm']){
			$sql="update {$this->prename}member_bank set username='{$sss}' where `uid`={$para['uid']}";
			$this->update($sql);
			$sql="update {$this->prename}members set name='{$sss}' where `uid`={$para['uid']}";
			$this->update($sql);
		}
		unset($para['yhxm']);
		//print_r($para);
		if($this->updateRows($this->prename .'members', $para, "uid=$uid")){
			$this->addLog(5,$this->adminLogType[5].'['.$para['username'].']',$para['uid'],$para['username']);
			echo '修改成功';
		}else{
			throw new Exception('未知出错');
		}
		
	}
	
	public final function userAmount($id){
		$this->display('member/user-amount.php', 0, $id);
	}


    
}