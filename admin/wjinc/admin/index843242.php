<!doctype html>
<html>

<!--input type="hidden" value="<!-?=$this->user['username']?>" /-->
<head>
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta charset="utf-8"/>
<title>后台管理</title>
<link rel="stylesheet" href="/skin/admin/layout.css" type="text/css" />
<link type="text/css" rel="stylesheet" href="/skin/js/jqueryui/skin/smoothness/jquery-ui-1.8.23.custom.css" />
<script type="text/javascript" src="/skin/js/jquery-1.8.0.min.js"></script>
<script src="/skin/admin/onload.js"></script>
<script src="/skin/admin/wjevent.js"></script>
<script src="/skin/admin/function.js?222"></script>
<script src="/skin/js/Array.ext.js"></script>
<script src="/skin/js/jqueryui/jquery-ui-1.8.23.custom.min.js"></script>
<script src="/skin/js/jqueryui/i18n/jquery.ui.datepicker-zh-CN.js"></script>
<script src="/skin/js/jquery.messager.js"></script>
<script src="/skin/js/jquery.cookie.js"></script>




<script type="text/javascript">
$(function(){
	$('.quick_search input[name=username]')
	.focus(function(){
		if(this.value=='查找会员') this.value='';
	})
	.blur(function(){
		if(this.value=='') this.value='查找会员';
	})
	.keypress(function(e){
		if(e.keyCode==13) $(this).closest('form').submit();
	});
});
function searchUserSubmit(err,data){
	if(err){
		error(err);
	}else{
		$('#main').html(data);
	}
}
var TIP=true;
</script>
<style type="text/css">
#header h2.section_title a {width: 120px;text-indent: 2em;}
</style>
</head>
<body>
<?php
$permission = $this->getValue("select permission from {$this->prename}permission where uid=?", $this->user['uid']);
$permission = explode(',',$permission);
?>
	<header id="header">
		<hgroup>
			<h1 class="site_title"><?=$this->user['username']?></h1>
			
			
		
			</h1>
			<h2 class="section_title">
			<body class="center">
				<!--a class="tjgk bq load" href="system/settings">系统设置</a>
				<a class="tjgk bq load" href="business/betLog">普通投注</a>-->
				<?php if ($this->user['uid'] == 1 || in_array('a8xtssa', $permission)) {?><a class="tjgk bq load"  href="member/index">用户列表</a><?php }?>
				<?php if ($this->user['uid'] == 1 || in_array('a8ggzxa', $permission)) {?><a class="tjgk bq load" href="member/add">添加用户</a><?php }?>
				<?php if ($this->user['uid'] == 1 || in_array('a8sklxa', $permission)) {?><a class="tjgk bq load" onClick="rechargModal()" href="#" value="充值">账号充值</a><?php }?>
				<?php if ($this->user['uid'] == 1 || in_array('a8tklxa', $permission)) {?><a class="tjgk bq load" onClick="rechargModalget()" href="#" value="充值">彩金赠送</a><?php }?>
				<?php if ($this->user['uid'] == 1 || in_array('a8czgla', $permission)) {?><a class="tjgk bq load" href="business/cash">提现请求</a><?php }?>
				<?php if ($this->user['uid'] == 1 || in_array('a8wfglaa', $permission)) {?><a href="countData/index" class="tjgk bq load">今日统计</a><?php }?>
				<?php if ($this->user['uid'] == 1 || in_array('a8wfglba', $permission)) {?><a href="countData/Statistics" class="tjgk bq load">统计报表</a><?php }?>
				<!--?php if ($this->user['uid'] == 1 || in_array('a8sjbfa', $permission)) {?><a class="tjgk bq load" method="post" target="ajax" call="clearDataSuccess" title="即将清空程序缓存是否继续" dataType="json" href="/admin778899.php/clear/rmfile">清空缓存</a><!?php }?-->
				<a class="tjgk bq load" style="width:150px;" method="post" target="ajax" call="clearDataSuccess" title="即将清空前台所有程序缓存, 此操作可能造成前台短暂卡慢,如未更改设置请勿操作，是否继续！" dataType="json" href="/admin778899.php/clear/rmfileqiantai">前台缓存</a>
            	<a class="tjgk bq load" style="width:150px;" method="post" target="ajax" call="clearDataSuccess" title="即将清空手机版前台缓存, 此操作可能造成前台短暂卡慢,如未更改设置请勿操作，是否继续！" dataType="json" href="/admin778899.php/clear/rmfilewap">手机缓存</a>
            
			</h2>
            <div class="btn_view_site"><a href="/admin778899.php/user/logout">安全退出</a></div>
		</hgroup>
	</header>
	
	<section id="secondary_bar">
		<div class="user">
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a>当前位置：<strong>首页</strong></a> <div class="breadcrumb_divider"></div> <span id="position"><a class="current">统计概况</a></span></article>
		</div>
	</section>
	<aside id="sidebar" class="column">
		<form action="/admin778899.php/member/listUser" class="quick_search" call="searchUserSubmit" dataType="html" target="ajax">
		  <input name="username" type="search" placeholder="查找会员" value="查找会员"/>
	    </form>
		<hr/>
        <?php if ($this->user['uid'] == 1 || in_array('a8txqq', $permission) || in_array('a8txjl', $permission) || in_array('a8czjl', $permission) || in_array('a8pttz', $permission) || in_array('a8zbmx', $permission)) {?>
		<h3>业务流水<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			<?php if ($this->user['uid'] == 1 || in_array('a8txqq', $permission)) {?><li><a class="bq yw_b_1" href="business/cash">提现请求</a></li><?php }?>
			<?php if ($this->user['uid'] == 1 || in_array('a8txjl', $permission)) {?><li><a class="bq yw_b_2" href="business/cashLog">提现记录</a></li><?php }?>
			<?php if ($this->user['uid'] == 1 || in_array('a8czjl', $permission)) {?><li><a class="bq yw_b_3" href="business/rechargeLog">充值记录</a></li><?php }?>
			<?php if ($this->user['uid'] == 1 || in_array('a8pttz', $permission)) {?><li><a class="bq yw_b_4" href="business/betLog">普通投注</a></li><?php }?>
			<?php if ($this->user['uid'] == 1 || in_array('a8zbmx', $permission)) {?><li><a class="bq yw_b_7" href="business/coinLog">帐变明细</a></li><?php }?>
		</ul>
		<h3>未结算注单统计<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a href="wount/index" class="s_b_1 bq current">未结算注单统计</a></li>
		</ul>
		<!--h3>真人记录<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
		                    
							<li><a href="bi/getRecord_ag" target="mainFrame" >AG投注记录</a></li>
							<li><a href="zhenren/agbets" target="mainFrame" >SS投注记录</a></li>
							<li><a href="zhenren/agbets" target="mainFrame" >KY投注记录</a></li>
                            <li><a href="zhenren/agbets" target="mainFrame" >VR投注记录</a></li>
							<li><a href="zhenren/agbets" target="mainFrame" >EG投注记录</a></li>
						    
                            
		</ul>
		<!--h3>真人记录<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
		                    <!--li><a href="CreditRecord">充值缴费</a></li>
                            <li><a href="CreditRecord" target="mainFrame" >转账记录</a></li>
							<li><a href="zhenren/Credit" target="mainFrame" >商户账变</a></li>
                            <li><a href="zhenren/agbets" target="mainFrame" >商户额度</a></li>
							<li><a href="zhenren/agbets" target="mainFrame" >AG投注记录</a></li>
							<li><a href="zhenren/agbets" target="mainFrame" >BB投注记录</a></li>
							<li><a href="zhenren/agbets" target="mainFrame" >MG投注记录</a></li>
							<li><a href="zhenren/agbets" target="mainFrame" >SS投注记录</a></li>
							<li><a href="zhenren/agbets" target="mainFrame" >KY投注记录</a></li>
                            <li><a href="zhenren/agbets" target="mainFrame" >VR投注记录</a></li>
							<li><a href="zhenren/agbets" target="mainFrame" >EG投注记录</a></li>
						    <!--li><a href="zhenren/setreamount" target="mainFrame" >设置反水</a></li>
                           
							<li><a href="zhenren/reamountlog" target="mainFrame" >反水日志</a></li>
                            
		</ul-->
        <?php }?>
        <?php if ($this->user['uid'] == 1 || in_array('kjsj', $permission)) {?>
		<h3>开奖数据<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
		<?php foreach($this->getRows("select id,title from {$this->prename}type where enable=1 and isDelete=0 order by sort") as $type){ ?>
			<li><a href="data/index/<?=$type['id']?>" class="k_b_1 bq"><?=$type['title']?></a></li>
		<?php } ?>
		</ul>
        <?php }?>
        <?php if ($this->user['uid'] == 1 || in_array('sjgl', $permission)) {?>
        <h3>时间管理<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			<?php foreach($this->getRows("select id,title from {$this->prename}type where enable=1 and isDelete=0 order by sort") as $type){ ?>
			<li><a href="time/index/<?=$type['id']?>" class="k_b_1 bq"><?=$type['title']?></a></li>
			<?php } ?>
		</ul>
        <?php }?>
        <?php if ($this->user['uid'] == 1 || in_array('a8tjkg', $permission) || in_array('a8tjbb', $permission) || in_array('a8kjjc', $permission)) {?>
		<h3>数据统计<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			<?php if ($this->user['uid'] == 1 || in_array('a8tjkg', $permission)) {?><li><a href="countData/index" class="s_b_1 bq current">统计概况</a></li><?php }?>
			<?php if ($this->user['uid'] == 1 || in_array('a8tjbb', $permission)) {?><li><a href="countData/betDate" class="s_b_2 bq">统计报表</a></li><?php }?>
			<?php if ($this->user['uid'] == 1 || in_array('a8kjjc', $permission)) {?><li><a href="kjdata/test" class="s_b_2 bq">开奖检测</a></li><?php }?>
		</ul>
        <?php }?>
        <?php if ($this->user['uid'] == 1 || in_array('a8fctj', $permission) || in_array('a8dlgl', $permission)) {?>
		<h3>代理管理<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
        	<?php if ($this->user['uid'] == 1 || in_array('a8fctj', $permission)) {?><li><a href="bonus/bonuslist" class="bq jf_b_2">分成统计</a></li><?php }?>
        	<?php if ($this->user['uid'] == 1 || in_array('a8dlgl', $permission)) {?><li><a href="bonus/bonuslist2" class="bq jf_b_2">代理管理</a></li><?php }?>
		</ul>
        <?php }?>
        <?php if ($this->user['uid'] == 1 || in_array('a8zjhh', $permission) || in_array('a8zjdl', $permission) || in_array('a8yhlb', $permission) || in_array('a8yhxx', $permission) || in_array('a8dlrz', $permission)) {?>
        <h3>用户管理<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			<?php if ($this->user['uid'] == 1 || in_array('a8zjhh', $permission)) {?><li><a href="member/add" class="yh_b_1 bq">增加会员</a></li><?php }?>
			<?php if ($this->user['uid'] == 1 || in_array('a8zjdl', $permission)) {?><li><a href="member/add2" class="yh_b_1 bq">增加代理</a></li><?php }?>
			<?php if ($this->user['uid'] == 1 || in_array('a8yhlb', $permission)) {?><li><a href="member/index" class="yh_b_2 bq">用户列表</a></li><?php }?>
			<?php if ($this->user['uid'] == 1 || in_array('a8dllb', $permission)) {?><li><a href="member/agent_list" class="yh_b_2 bq">代理列表</a></li><?php }?>
            <?php if ($this->user['uid'] == 1 || in_array('a8yhxx', $permission)) {?><li><a href="member/bank" class="yh_b_4 bq">银行信息</a></li><?php }?>
          <?php if ($this->user['uid'] == 1 || in_array('a8dlrz', $permission)) {?><li><a href="member/loginLog" class="yh_b_5 bq">登录日志</a></li><?php }?>
		<!--?php if ($this->user['uid'] == 1 || in_array('a8dlrz', $permission)) {?><li><a class="bq yw_b_4" href="member/member_class">会员类型配置</a></li><!?php }?-->
			
		</ul>
        <?php }?>
        <?php if ($this->user['uid'] == 1 || in_array('czpz', $this->permission)) {?>
            <h3>充值配置<a>＋</a></h3>
            <ul class="toggle" style="display:none;">
                <li><a href="system/weixin_list" class="g_b_3 bq">微信转帐配置</a></li>
			<li><a href="system/alipay_list" class="g_b_1 bq">支付宝转帐配置</a></li>
                <li><a href="system/qq_list" class="g_b_1 bq">QQ钱包转帐配置</a></li>
			<li><a href="system/bank" class="g_b_3 bq">收款类型</a></li>
                <li><a href="system/withdraw" class="g_b_4 bq">提款类型</a></li>
				
			<!--li><a href="#" class="g_b_1 bq">在线支付配置</a></li>
                <li><a href="#" class="g_b_3 bq">银行支付配置</a></li>
                <li><a href="#" class="g_b_3 bq">支付等级配置</a></li>
                <li><a href="#" class="g_b_1 bq">绑定银行配置</a></li>
                <li><a href="#" class="g_b_3 bq">充值方式配置</a></li-->					
            </ul>
        <?php }?>		
        <?php if($this->user['uid'] == 1){?>
            <h3>模板管理<a>＋</a></h3>
            <ul class="toggle" style="display:none;">
                 <li><a href="manage/moban" class="g_b_1 bq">前台投注模板</a></li>
                 <li><a href="manage/fmoban" class="g_b_3 bq">前台首页模板</a></li>
            </ul>
        <?php }?>

        <?php if ($this->user['uid'] == 1 || in_array('a8xtss', $permission) || in_array('a8ggzx', $permission) || in_array('a8sklx', $permission) || in_array('a8tklx', $permission) || in_array('a8czgl', $permission) || in_array('a8wfgla', $permission) || in_array('a8wfglb', $permission) || in_array('a8sjbf', $permission) || in_array('a8sjql', $permission)) {?>
		<h3>系统设置<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			 <?php if ($this->user['uid'] == 1 || in_array('a8xtss', $permission)) {?><li><a href="system/settings" class="bq t_b_4">系统设置</a></li><?php }?>

			 			 <?php if ($this->user['uid'] == 1 || in_array('a8xtss', $permission)) {?><li><a href="system/stop_ip" class="bq t_b_4">IP黑名单</a></li><?php }?>
						 			 <?php if ($this->user['uid'] == 1 || in_array('a8xtss', $permission)) {?><li><a href="system/stop_bankcard" class="bq t_b_4">银行卡黑名单</a></li><?php }?>
			 			 <?php if ($this->user['uid'] == 1 || in_array('a8xtss', $permission)) {?><li><a href="system/xieyishezhi" class="bq t_b_4">协议设置</a></li><?php }?>
			 <?php if ($this->user['uid'] == 1 || in_array('a8ggzx', $permission)) {?><li><a href="system/notice" class="bq t_b_3">公告中心</a></li><?php }?>
			 			 <?php if ($this->user['uid'] == 1 || in_array('a8ggzx', $permission)) {?><li><a href="system/message" class="bq t_b_3">消息推送</a></li><?php }?>
			 <?php if ($this->user['uid'] == 1 || in_array('a8sklx', $permission)) {?><li><a href="system/weixin_list" class="bq t_b_5">wx收款类型</a></li><?php }?>
			 			 <?php if ($this->user['uid'] == 1 || in_array('a8sklx', $permission)) {?><li><a href="system/alipay_list" class="bq t_b_5">zfb收款类型</a></li><?php }?>

			 <?php if ($this->user['uid'] == 1 || in_array('a8tklx', $permission)) {?><li><a href="system/withdraw" class="bq t_b_6">提款类型</a></li><?php }?>
			 <?php if ($this->user['uid'] == 1 || in_array('a8czgl', $permission)) {?><li><a href="system/type" class="bq t_b_8">彩种管理</a></li>	<?php }?>
			 <?php if ($this->user['uid'] == 1 || in_array('a8wfgla', $permission)) {?><li><a href="system/played" class="bq t_b_9">玩法管理(A盘)</a></li><?php }?>
			 <?php if ($this->user['uid'] == 1 || in_array('a8wfglb', $permission)) {?><li><a href="system/played2" class="bq t_b_9">玩法管理(B盘)</a></li>	<?php }?>		
			 <?php if ($this->user['uid'] == 1 || in_array('a8sjbf', $permission)) {?><li><a href="database/backup" class="g_b_4 bq">数据备份</a></li><?php }?>
			 <?php if ($this->user['uid'] == 1 || in_array('a8sjql', $permission)) {?><li><a href="system/clear" class="bq t_b_4">数据清理</a></li><?php }?>
			 	<?php if ($this->user['uid'] == 1 || in_array('a8sjql', $permission)) {?><li><a href="manage/index" class="bq t_b_4">管理员列表</a></li><?php }?>
				<?php if ($this->user['uid'] == 1 || in_array('a8sjql', $permission)) {?><li><a href="manage/controlLog" class="bq t_b_4">操作日志</a></li><?php }?>
				 <?php if ($this->user['uid'] == 1 || in_array('a8sjql', $permission)) {?><li><a href="manage/loginLog" class="bq t_b_4">登录日志</a></li><?php }?>


		</ul>
        <?php }?>
		<ul class="toggle"></ul>

		<footer>
			<hr />
			<p align="center"><strong>Copyright &copy; <a href="" target="_blank"><font color="#339900"><B>娱乐平台</B></font></a>			<br> 彩票后台管理系统</strong>

			
			</p>
		</footer>
	</aside><!-- end of sidebar -->

	<section id="message-tip"></section>
	<section id="main" class="column"><?php $this->display('count/index.php'); ?></section>
</body>
</html>
