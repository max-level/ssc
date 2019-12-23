<div id="user-setting-dom" class="common">
	<div class="head">
		<div class="name icon-yen">账户资金转换</div>
		<div class="desc">平台资金与真人、电玩、体育平台互转</div>
	</div>
	<div class="body zjhz">
		<style>
			.zjhz table{border:none;margin:0 25px;}
			.zjhz table tr th{padding:5px 8px;border:1px solid #8CA9C2;width:200px}
			.zjhz table tr th input#zz_money{width:80px;padding:3px 5px;border-right:none;}
			.zjhz table tr th input.zzsubmit{width:35px;padding:3px 5px;}
			.zjhz b{color:red}
			li.zzli{list-style-type:none;}
		</style>
		<form action="/live/ed?action=save" method="post" target="ajax" func="zz_submit">
		<table>
		  <tr>
		    <th bgcolor="#F8E9E4" style="text-align:left">平台资金：<b><?=$this->user['coin'];?>元</b></th>
		    <th style="text-align:center" bgcolor="#E3EBF1">从平台转入</th>
		    <th style="text-align:center" bgcolor="#E6EFF3">转出到平台</th>
		  </tr>
		  <tr>
		    <th bgcolor="#F8E9E4" style="text-align:left">AG娱乐场账户：<b id="aged"> 查询中... </b></th>
		    <script language="javascript">setTimeout(function(){$.get('/live/balance?target=ag',function(data){ $('#aged').html(data);})},1000);</script>
		    <th style="text-align:center" bgcolor="#E3EBF1"><input type="text" name="zz_money" id="zz_money" value="转入金额" onfocus="if(this.value=='转入金额')this.value=''" onblur="if(this.value=='')this.value='转入金额'"><input type="hidden" name="zz_type" value="1"/><input type="submit" class="zzsubmit"value="提交" ></th>
		    <th style="text-align:center" bgcolor="#E6EFF3"><input type="text" name="zz_money" id="zz_money" value="转出金额" onfocus="if(this.value=='转出金额')this.value=''" onblur="if(this.value=='')this.value='转出金额'"><input type="hidden" name="zz_type" value="2"/><input type="submit" class="zzsubmit" value="提交" ></th>
		  </tr>
		  <tr>
		    <th bgcolor="#F8E9E4" style="text-align:left">BB娱乐场账户：<b id="bbed"> 查询中... </b></th>
		    <script language="javascript">setTimeout(function(){$.get('/live/balance?target=bb',function(data){ $('#bbed').html(data);})},1000);</script>
		    <th style="text-align:center" bgcolor="#E3EBF1"><input type="text" name="zz_money" id="zz_money" value="转入金额" onfocus="if(this.value=='转入金额')this.value=''" onblur="if(this.value=='')this.value='转入金额'"><input type="hidden" name="zz_type" value="11"/><input type="submit" class="zzsubmit" value="提交" ></th>
		    <th style="text-align:center" bgcolor="#E6EFF3"><input type="text" name="zz_money" id="zz_money" value="转出金额" onfocus="if(this.value=='转出金额')this.value=''" onblur="if(this.value=='')this.value='转出金额'"><input type="hidden" name="zz_type" value="12"/><input type="submit" class="zzsubmit" value="提交" ></th>
		  </tr>
		  <tr>
		    <th bgcolor="#F8E9E4" style="text-align:left">MG娱乐场账户：<b id="mged"> 查询中... </b></th>
		    <script language="javascript">setTimeout(function(){$.get('/live/balance?target=mg',function(data){ $('#mged').html(data);})},1000);</script>
		    <th style="text-align:center" bgcolor="#E3EBF1"><input type="text" name="zz_money" id="zz_money" value="转入金额" onfocus="if(this.value=='转入金额')this.value=''" onblur="if(this.value=='')this.value='转入金额'"><input type="hidden" name="zz_type" value="21"/><input type="submit" class="zzsubmit" value="提交" ></th>
		    <th style="text-align:center" bgcolor="#E6EFF3"><input type="text" name="zz_money" id="zz_money" value="转出金额" onfocus="if(this.value=='转出金额')this.value=''" onblur="if(this.value=='')this.value='转出金额'"><input type="hidden" name="zz_type" value="22"/><input type="submit" class="zzsubmit" value="提交" ></th>
		  </tr>
		  <tr>
		    <th bgcolor="#F8E9E4" style="text-align:left">PT娱乐场账户：<b id="pted"> 查询中... </b></th>
		    <script language="javascript">setTimeout(function(){$.get('/live/balance?target=pt',function(data){ $('#pted').html(data);})},1000);</script>
		    <th style="text-align:center" bgcolor="#E3EBF1"><input type="text" name="zz_money" id="zz_money" value="转入金额" onfocus="if(this.value=='转入金额')this.value=''" onblur="if(this.value=='')this.value='转入金额'"><input type="hidden" name="zz_type" value="31"/><input type="submit" class="zzsubmit" value="提交" ></th>
		    <th style="text-align:center" bgcolor="#E6EFF3"><input type="text" name="zz_money" id="zz_money" value="转出金额" onfocus="if(this.value=='转出金额')this.value=''" onblur="if(this.value=='')this.value='转出金额'"><input type="hidden" name="zz_type" value="32"/><input type="submit" class="zzsubmit" value="提交" ></th>
		  </tr>
		</table>
		</form>
	</div>
	<div id="cash-intro" class="addon">
		<ul class="list">
			<li class="zzli"><span class="btn btn-red">平台资金</span> 可直接在<span class="color green">彩票中心</span>中使用，<span class="color red">视讯直播</span><span class="color green">体育</span><span class="color red">电玩</span>须先进行转换。</li>
			<li class="zzli"><span class="btn btn-blue">转换金额</span> 每次最少为<span class="color red">1</span>元。</li>
			<li class="zzli"><span class="btn btn-green">电玩转出</span> 请先退出所有电子游戏房间再进行操作,否则无法转出。</li>
		</ul>
	</div>
</div>
<script type="text/javascript">
$(function() {
	$('#home').removeClass('on');
	$('#live-money').addClass('on');
});
</script>