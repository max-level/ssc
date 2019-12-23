<?php
	$para=$_GET;
	// 用户名限制
	if($para['username']){
		$para['username']=wjStrFilter($para['username']);
		if(!ctype_alnum($para['username'])) throw new Exception('用户名包含非法字符,请重新输入');
		$userWhere=" and username='{$para['username']}'";
	}

	// ip限制
	if($para['ip']){
		$ipxixi=(int)ip2long(trim($para['ip']));
		$ipxixi=" and loginIP={$ipxixi}";
	}
	
	// 时间限制
	if($_REQUEST['fromTime'] && $_REQUEST['toTime']){
		$fromTime=strtotime($_REQUEST['fromTime']);
		$toTime=strtotime($_REQUEST['toTime'])+24*3600;
		$timeWhere="and loginTime between $fromTime and $toTime";
	}elseif($_REQUEST['fromTime']){
		$fromTime=strtotime($_REQUEST['fromTime']);
		$timeWhere="and loginTime>=$fromTime";
	}elseif($_REQUEST['toTime']){
		$toTime=strtotime($_REQUEST['toTime'])+24*3600;
		$timeWhere="and loginTime<$fromTime";
	}

	$sql="select * from {$this->prename}member_session where 1 $timeWhere $userWhere $ipxixi order by loginTime  desc"; 
//	echo $sql;
	//echo $sql;exit;
	
//IP归属地	
	$data=$this->getPage($sql, $this->page, $this->pageSize);
 include 'ipclass.php';	
 function ip_show1($obj){
	$ip_data = long2ip($obj);
	$ip_show = IP::find($ip_data);
	$ip_show = implode('',$ip_show);
	return $ip_show;
	
}


	//查询ip黑名单
	$isDelete = 0; //0为未删除状态
	$query ="select * from {$this->prename}stop_ip where isDelete='$isDelete'";
	$info =$this->getRows($query);
	$row = $info;
	
?>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
    <header>
    	<h3 class="tabs_involved">登录日志
            <form action="/admin778899.php/member/loginLog" target="ajax" dataType="html" call="defaultSearch" class="submit_link wz">
            	IP来源：<input type="text" class="alt_btn" style="width:100px;" name="ip"/>&nbsp;&nbsp;
                会员名：<input type="text" class="alt_btn" style="width:100px;" name="username"/>&nbsp;&nbsp;
                时间：从 <input type="date" class="alt_btn" name="fromTime"/> 到 <input type="date" class="alt_btn" name="toTime"/>&nbsp;&nbsp;
                <input type="submit" value="查找" class="alt_btn">
            </form>
        </h3>
    </header><div align="center"><font color="red">带有<img src="../../images/stop.png">的表示黑名单，禁止出款。带有<img src="../../images/999.png">的银行帐号表示存在高风险要密切关注，请谨慎操作！</font></div>
	<table class="tablesorter" cellspacing="0">
	<thead>
		<tr>
			<td>ID</td>
			<td>用户名</td>
			<td>IP</td>
			<td>浏览器</td>
			<td>操作系统</td>
			<td>移动设备</td>
			<td>登录时间</td>
			<td>操作</td>
		</tr>
	</thead>
	<tbody id="nav01">
	<?php if($data['data']) foreach($data['data'] as $var){ 
		//比对黑名单
		$loginIp = $var['loginIP'];
		$login_ip="";
		if ($row!=null){
			foreach($row as $value){
				$ip = $value['ip'];
				$risk = $value['risk'];
				if(long2ip($loginIp)==$ip){
					$login_ip="<img src='".$risk."'/>".$ip; 
					break;
				}else{
					$login_ip = long2ip($loginIp);
				}
			}
		}else{
			$login_ip =long2ip($loginIp);
		}
	
	
	?>
		<tr>
			<td><?=$var['id']?></td>
			<td><?=$var['username']?></td>
			<td><?=$login_ip?><br><?php $ips=ip_show1($var['loginIP']); echo $ips;?></td>
			<td><?=$var['browser']?></td>
			<td><?=$var['os']?></td>
			<td><?=$this->iff($var['isMobileDevices'], '是', '否')?></td>
			<td><?=date('Y-m-d H:i:s', $var['loginTime'])?></td>
			<td><a href="member/loginLog?username=<?=$var['username']?>">只看此人</a></td>
		</tr>
	<?php } ?>
	</tbody>
    </table>
	<footer>
	<?php
		$rel=get_class($this).'/loginLog-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'defaultReplacePageAction');
	?>
	</footer>
</article>
<script type="text/javascript">  
ghhs("nav01","tr");  
</script>
