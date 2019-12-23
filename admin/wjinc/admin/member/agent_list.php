<?php

	$sql="select * from {$this->prename}members where type=1";
	$sql2="select * from ssc_member_session where uid=? order by id desc limit 1";
	if($_GET['username'] && $_GET['username']!="会员名"){
		if(!ctype_alnum($_GET['username'])){
			$sql.=" and name='{$_GET['username']}'";
		}else{
			$sql.=" and username='{$_GET['username']}'";
		};
	}else{
		unset($_GET['username']);
	}
	$data=$this->getPage($sql, $this->page, $this->pageSize);
?>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
    <header>
    	<h3 class="tabs_involved">代理列表
            <form action="/admin778899.php/member/agent_list" target="ajax" dataType="html" class="submit_link wz" call="defaultSearch" >
                会员名：<input type="text" class="alt_btn"  name="username" placeholder="会员名"/>&nbsp;&nbsp;
               <input type="submit" value="查找" class="alt_btn">
            </form>
			<!--<form action="/admin778899.php/member/listUser" class="quick_search" call="searchUserSubmit" dataType="html" target="ajax">
		  <input name="username" type="search" placeholder="查找会员" value="查找会员"/>
	    </form>-->
		</h3>
    </header>
</article>
    <div class="tab_content" style="margin-top:-23px;">
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
<table class="tablesorter" cellspacing="0"> 
<thead> 
    <tr> 
        <th>ID</th> 
        <th>用户名</th> 
        <th>真实姓名</th> 
        <th>下线会员数</th> 		
        <th>返点(分成)</th> 
        <th>可用额度</th>
        <th>状态</th> 
        <th>操作</th> 
    </tr> 
</thead> 
<tbody id="nav01"> 
<?php
	if($data['data']) foreach($data['data'] as $var){ 
	$var['fanDianAmount']=$this->getValue($sql, $var['uid']);
	$login=$this->getRow($sql2, $var['uid']);
	$uid=$var['uid'];
	$son=$this->getValue("select count(*) teamNum from {$this->prename}members where gudongId=$uid or zparentId=$uid or parentId=$uid");

?>
    <tr> 
        <td><?=$var['uid']?></td> 
        <td><?=$var['username']; ?></td> 
        <td><?=$var['name']; ?></td> 
        <td><?=$son['teamNum']?></td> 		
        <td><?=$var['fanDian']?>%</td> 
        <td><?=$var['coin']?><span class='spn10'></td> 		
        <td><?=$this->iff($login['isOnLine'] && ceil(strtotime(date('Y-m-d H:i:s', time()))-strtotime(date('Y-m-d H:i:s',$login['accessTime'])))<$GLOBALS['conf']['member']['sessionTime'], '<font color="#FF0000">在线</font>', '离线')?></td> 
        <td><a href="/admin778899.php/Member/userAmount/<?=$var['uid']?>" target="modal"  width="420" title="用户统计" modal="true">统计</a> | <a href="business/coinLog?username=<?=$var['username']?>">帐变</a> | <a href="/admin778899.php/Member/userUpdate/<?=$var['uid']?>" target="modal"  width="420" title="编辑用户" modal="true" button="确定:dataAddCode|取消:defaultCloseModal">编辑</a> | 
        <?php if($var['type']){ ?><a href="Member/index?type=2&uid=<?=$var['uid']?>" call="">下级</a> | <?php } ?>
        <a href="Member/tiuser/<?=$var['uid']?>" target="ajax" call="tiuser"  onajax="settiuser">踢他下线</a> 
        <a href="/admin778899.php/Member/delete/<?=$var['uid']?>" target="modal"  width="320" title="删除用户" modal="true" button="确定:dataAddCode" style=" color:#0099CC;">删除</a></td> 
    </tr> 
<?php }else{ ?>
		<tr>
			<td colspan="6">没有代理记录。</td>
		</tr>
<?php } ?>
</tbody> 
</table>
<footer>
	<?php
		$rel=get_class($this).'/agent_list-{page}?'.http_build_query($_GET,'','&');
		$this->display('inc/page.php', 0, $data['total'], $rel, 'defaultReplacePageAction');
	?>
</footer>
<script type="text/javascript">  
ghhs("nav01","tr");  
</script>

</article>
    </div>