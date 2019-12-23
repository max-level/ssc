
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/skin/css/user.css">
<script type="text/javascript" src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" ></script>
<script type="text/javascript" src="/static/js/skin.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>



<script type="text/javascript" src="/skin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/skin/main/function.js"></script>
<script type="text/javascript" src="/skin/main/onload.js"></script>

<script type="text/javascript" src="/skin/layer/layer.js"></script>
</head>
<body id="bodyid" class="">

<div class="bannercontainer">
	<div class="banner">
		<div class="avatar"></div>
		<div class="text1">
			<script language="javaScript">
				now = new Date(), hour = now.getHours()
				if (hour < 6) {
					document.write("凌晨好")
				} else if (hour < 9) {
					document.write("早上好")
				} else if (hour < 12) {
					document.write("上午好")
				} else if (hour < 14) {
					document.write("中午好")
				} else if (hour < 17) {
					document.write("下午好")
				} else if (hour < 19) {
					document.write("傍晚好")
				} else if (hour < 22) {
					document.write("晚上好")
				} else {
					document.write("夜里好")
				}
			</script>
			，<?php $this->display('center/center.php');?>
		<div class="subnavigation2">
			<a href="/center/user/notice.html"><div class="subitm2">安全设置</div></a>
			<a href="/center/user/loginpwd.html"><div class="subitm2">登入密码</div></a>
			<a href="/center/user/fundpwd.html"><div class="subitm2">提款密码</div></a>
			<a href="/box/receive"><div class="subitm2 subitmactive">消息中心</div></a>
			<div class="arrow4a arrow arrow1"></div>
		</div>
	</div>
</div>	
<?php

// 日期限制
if ($_REQUEST['fromTime'] && $_REQUEST['toTime']) {
    $timeWhere = ' and s.time between ' . strtotime($_REQUEST['fromTime']) . ' and ' . strtotime($_REQUEST['toTime']);
} elseif ($_REQUEST['fromTime']) {
    $timeWhere = ' and s.time >=' . strtotime($_REQUEST['fromTime']);
} elseif ($_REQUEST['toTime']) {
    $timeWhere = ' and s.time <' . strtotime($_REQUEST['toTime']);
} else {
    if ($GLOBALS['fromTime'] && $GLOBALS['toTime'])
        $timeWhere = ' and s.time between ' . $GLOBALS['fromTime'] . ' and ' . $GLOBALS['toTime'] . ' ';
}

// 消息类型限制
switch ($_REQUEST['state']) {
    case 1:
        $stateWhere = ' and r.is_readed=0';
        break;
    case 2:
        $stateWhere = ' and r.is_readed=1';
        break;
    case 3:
        $stateWhere = ' and r.is_readed between 0 and 1';
        break;
    default:
        $stateWhere = ' and r.is_readed between 0 and 1';
}

$sql    = "select s.mid, r.is_readed, s.title, s.from_username, s.time from {$this->prename}message_sender s, {$this->prename}message_receiver r where r.to_uid={$this->user['uid']} and r.is_deleted=0 $timeWhere $stateWhere and r.mid=s.mid order by s.time DESC";
$list   = $this->getPage($sql, $this->page, $this->pageSize);
$params = http_build_query($_REQUEST, '', '&');
?>

<div class="rightpanel rw">
	<div class="contentcontainer">
		<div class="mailbox clearfix">
			<div class="mt4 emailicon"></div>
			<div style="margin-left: 23px;" class="mt4">未读</div>
			<div style="margin-left: 10px;">
				<input type="text" class="textboxmail" readonly value="<?php $this->display('box/box_msg.php');?>">
			</div>
		</div>
		<div>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="bordergrey">
				<tbody>
						<?php
							if ($list['data'])
							foreach ($list['data'] as $var) {
						?>
					<tr class="borderbtmgrey">
						<td width="2%"> 
						<?php
							if ($var['is_readed']) {
								echo '';
							} else {
								echo '<img src="/skin/img/user/new-indicator.png"/>';
							}
						?>
						</td>
						<td width="72%" class="algleft"><?= $this->CsubStr(htmlspecialchars($var['title']), 0, 25) ?></td>
						<td width="23%"><?= date("Y-m-d H:i:s", $var['time']) ?> (<a
							onclick="ddxq(<?= $var['mid'] ?>);" href="javascript:void(0)">详情</a>)
						</td>
					</tr>
						<?php
							} else {
						?>
					<tr>
						<td colspan="5" align="center">暂无消息。</td>
					</tr>
						<?php
							}
						?>
				</tbody>
			</table>
			<?php
$this->display('inc_page.php', 0, $list['total'], $this->pageSize, "/index.php/{$this->controller}/{$this->action}-{page}/{$this->type}?$params");
?>
		</div>
	</div>
</div>

 <script type="text/javascript">
function ddxq(num){
	layer.open({
	  type: 2,
	  area: ['600px', '400px'],//长  宽
	  zIndex:1888,
	  //fixed: false, //不固定
	  title:false,
	  scrollbar: false,//屏蔽滚动条
	  //maxmin: true,
	  content:'/box/detail/'+num
	});
	return false;
}
</script>
</body>
</html>
