<link href="/skin/css/pt.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" ></script>
<script type="text/javascript" src="/skin/layer/layer.js"></script>
<div class="charge_cont" style="display: block;">
	<h2 id="chargeTitle">真人娱乐金额转换</h2>
	<form action="/live/ed?action=save" method="post" target="ajax" func="zz_submit">
	<div class="charge_input">
		<p>主账户: <b id="MBallCredit"><?=$this->user['coin'];?>元</b></p>
		<p>AG账户: <b id="MSunplusCredit">查询中...</b></p>
		<p>BBIN账户: <b id="MSunplusCreditbb">查询中...</b></p>
		<p>MG账户: <b id="MSunplusCreditmg">查询中...</b></p>
		<p>PT账户: <b id="MSunplusCreditpt">查询中...</b></p>
		<p>转换对象: 
			<select name="zz_type" id="zz_type">
				<option value="1">主账户<strong>→</strong>AG娱乐场</option>
				<option value="11">主账户<strong>→</strong>BB娱乐场</option>
				<option value="21">主账户<strong>→</strong>MG娱乐场</option>
				<option value="31">主账户<strong>→</strong>PT娱乐场</option>

				<option value="2">AG娱乐场<strong>→</strong>主账户</option>
				<option value="12">BB娱乐场<strong>→</strong>主账户</option>
				<option value="22">MG娱乐场<strong>→</strong>主账户</option>
				<option value="32">PT娱乐场<strong>→</strong>主账户</option>
			</select>
		</p>		
		<p>转换金额: 
			<input name="zz_money" type="text" value="" placeholder="请填写转出金额" id="zz_money" onKeyUp="if(isNaN(value))execCommand('undo')">
			</p>
		<span id="trprocess" style="display: none;">转账中,请稍后...</span>
		<input type="button" value="确定" class="charge_btn" onClick="tishi()">
	</div>
	</form>
</div>

<script type="text/javascript">
   function ALL_money(){
        $.getJSON("/live/getdata?callback=?", function (json) {
            if (json.close == 1) {
               // parent.location.href = '/close';
            }
            $("#MBallCredit").html(json.user_money);
        });
    }
    function AG_money(){
        $.get("/live/balance?target=ag",function(data){
          // data = eval('('+data+')');
           $("#MSunplusCredit").html(data);
        });
    }
    function BB_money(){
           $.get("/live/balance?target=bb",function(data){
          // data = eval('('+data+')');
           $("#MSunplusCreditbb").html(data);
        });
    }
	function MG_money(){
         $.get("/live/balance?target=mg",function(data){
          // data = eval('('+data+')');
           $("#MSunplusCreditmg").html(data);
          
        });
    }
	function PT_money(){
        $.get("/live/balance?target=pt",function(data){
          // data = eval('('+data+')');
           $("#MSunplusCreditpt").html(data);
        });
    }
	AG_money(); 
	BB_money();
	MG_money();
	PT_money();//AB_money();
window.setInterval(AG_money, 10000); 
window.setInterval(BB_money, 15000); 
window.setInterval(MG_money, 18000); 
window.setInterval(PT_money, 20000);
</script>
<script type="text/javascript">
function trim(str){ //删除左右两端的空格
	return str.replace(/(^\s*)|(\s*$)/g, "");
	}
function confirmChangeMoney(){
	
        if(confirm("确定转账吗？")){
            if($("#MSunplusCredit").text()=='未开通' || (!$("#MSunplusCredit").text()) ){
                if($("#zz_type").val()==2||$("#zz_type").val()==1){
                    alert('请进入AGIN游戏开通账号');
                    return;
                }
            }
            if(!$("#zz_money").val()){
                alert("请输入转账金额。");
                return;
            }
            var regu = /^[-]{0,1}[0-9]{1,}$/;
            if(!regu.test($("#zz_money").val())){
                alert('请输入整数。');
                return;
            }
            if( ($("#zz_money").val()<1)){
                alert("小于最低转账金额，请重新输入。");
                return;
            }
            if(($("#zz_type").val()==1) && ($("#MBallCredit").text()-$("#zz_money").val()<0)){
                alert("主账户余额 小于 转账金额，请重新输入。");
                return;
            }
           if(($("#zz_type").val()==2) && (trim($("#MSunplusCredit").text())<$("#zz_money").val()) ){
                alert("真人AG账户余额 小于 转账金额，请重新输入。");
                return;
            }
            var aa=$("#zz_type").val();
            var bb=$("#zz_money").val();
			var username="<?php echo $rows['username'];?>";
			var uid="<?php echo $rows['uid'];?>";
			wait();
            $.ajax({
                type:'post',
                url:'/live/ed?action=save',
                data:{'zz_type':aa,'zz_money':bb,'uid':uid,'username':username},
                beforeSend:function(x){
                    console.log(this.data.zz_type+" "+this.data.zz_money);
                },
                success:function(d){
					wait();
                    alert(d);
					//location.reload(true);
                    AG_money(); 
					BB_money();
					//AB_money();
					MG_money();
					//ALL_money();
					PT_money();
                },
				complete : function(XMLHttpRequest,status){ //请求完成后最终执行参数
				$('.layui-layer-loading1,.layui-layer-shade').hide()
				if(status=='timeout'){
					alert("超时");
				}
						if(status=='error'){
					alert("远程服务器错误，请稍候再试");
				}
				}
            })

        }
    }
	
function wait(){
var index = layer.load(1, {
  shade: [0.1,'#fff'], //0.1透明度的白色背景
  shadeClose:false
});
}	
</script>