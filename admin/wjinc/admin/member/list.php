<script type="text/javascript">
$(function(){
	$('.tabs_involved input[name=username]')
	.focus(function(){
		if(this.value=='用户名') this.value='';
	})
	.blur(function(){
		if(this.value=='') this.value='用户名';
	})
	.keypress(function(e){
		if(e.keyCode==13) $(this).closest('form').submit();
	});
	
});
function userSortBeforeSubmit(){
	//alert(this.name);
}
function memberUserList(err, data){
	if(err){
		alert(err);
	}else{
		$('.tab_content').html(data);
	}
}
function changeFormAction(userSort){
	$('.submit_link input[name=paixu]').val($(userSort).attr('sort'));
	//$('.submit_link').attr('action','/admin.php/Member/listUser/'+$(userSort).attr('sort'));
}
</script>
<article class="module width_full">
<input type="hidden" value="<?=$this->user['username']?>" />
    <header>
    	<h3 class="tabs_involved">用户列表
            <form class="submit_link wz" action="/admin778899.php/Member/listUser" dataType="html" target="ajax"  method="get" onajax="userSortBeforeSubmit" call="memberUserList">
            	排序：
                <input name="paixu"  type="hidden" value="regTime" />
				<input type="submit" sort="uid" onclick="changeFormAction(this)" value="默认排序"/>&nbsp;&nbsp;
				<input type="submit" sort="coin" onclick="changeFormAction(this)" value="账号金额"/>&nbsp;&nbsp;
                <input type="submit" sort="betAmount" onclick="changeFormAction(this)" value="投注金额"/>&nbsp;&nbsp;
                <input type="submit" sort="zjAmount" onclick="changeFormAction(this)" value="中奖金额"/>&nbsp;&nbsp;
                <input type="submit" sort="fanDian" onclick="changeFormAction(this)" value="返点(分成比例)"/>&nbsp;&nbsp;
                <input type="submit" sort="type" onclick="changeFormAction(this)" value="用户类型"/>&nbsp;&nbsp;
                <input type="submit" sort="online" onclick="changeFormAction(this)" value="用户在线"/>&nbsp;&nbsp;
                会员名：<input type="text" class="alt_btn" style="width:100px;" placeholder="查找会员" name="username"/>&nbsp;&nbsp;
                <input type="submit" value="查找" class="alt_btn">
            </form>
		</h3>
    </header>
</article>
    <div class="tab_content" style="margin-top:-23px;">
		<?php $this->display("member/list-user.php") ?>
    </div>