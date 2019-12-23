
<link href="/skin/css/pt.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" ></script>
<script type="text/javascript" src="/skin/layer/layer.js"></script>
<div class="zryx_banner">
	<div class="content">
		<!--BBIN入口-->
		<div class="zryx_enter">
			<img src="/skin/img/pt/bg-img-yy.png?v=1.17.6.4" class="bg-img-yy">
			<div class="zryx_img">
				<a href="javascript:;" game-box="bb" onclick="window.open('/live/bbinlive')">
				<img src="/skin/img/pt/pt-zr-img02.png?v=1.17.6.4"><span>进入游戏</span>
				</a>
			</div>
			<div class="money-div">
				<p>您当前的BBIN余额为:</p>
				<p class="bbinbalance" style="font-size:17px">￥ <span class="money-number" id="MSunplusCreditbb" loading="0">查询中...</span></p>
				<a href="javascript:;" onclick="zz();" class="recharge2">转账</a>
			</div>
		</div>
		<!--MG入口-->
		<div class="zryx_enter">
			<img src="/skin/img/pt/bg-img-yy.png?v=1.17.6.4" class="bg-img-yy">
			<div class="zryx_img">
				<a href="javascript:;" game-box="mg" onclick="window.open('/live/mg')">
				<img src="/skin/img/pt/pt-zr-img01.png?v=1.17.6.4"><span>进入游戏</span>
				</a>
			</div>
			<div class="money-div">
				<p>您当前的MG余额为:</p>
				<p style="font-size:17px">￥ <span class="money-number" id="MSunplusCreditmg" loading="0">查询中...</span></p>
				<a href="javascript:;" onclick="zz();" class="recharge2">转账</a>
			</div>
		</div>
		<!--PT入口-->
		<!--div class="zryx_enter">
			<img src="/skin/img/pt/bg-img-yy.png?v=1.17.6.4" class="bg-img-yy">
			<div class="zryx_img">
				<a href="javascript:;" game-box="pt" onclick="window.open('/live/pt')">
				<img src="/skin/img/pt/pt-zr-img01.png?v=1.17.6.4"><span>进入游戏</span>
				</a>
			</div>
			<div class="money-div">
				<p>您当前的PT余额为:</p>
				<p style="font-size:17px">￥ <span class="money-number" id="MSunplusCreditpt" loading="0">查询中...</span></p>
				<a href="javascript:;" onclick="zz();" class="recharge2">转账</a>
			</div>
		</div-->
		<!--AG入口-->
		<div class="zryx_enter">
			<img src="/skin/img/pt/bg-img-yy.png?v=1.17.6.4" class="bg-img-yy">
			<div class="zryx_img">
				<a href="javascript:;" game-box="ag" onclick="window.open('/live/ag')">
				<img src="/skin/img/pt/pt-zr-img01.png?v=1.17.6.4"><span>进入游戏</span>
				</a>
			</div>
			<div class="money-div">
				<p>您当前的AG余额为:</p>
				<p style="font-size:17px">￥ <span class="money-number" id="MSunplusCredit" loading="0">查询中...</span></p>
				<a href="javascript:;" onclick="zz();" class="recharge2">转账</a>
			</div>
		</div>
	</div>
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
$(function() {
	$('#home').removeClass('on');
	$('#live-money').addClass('on');
});
</script>
 <script type="text/javascript">
function zz(){
	layer.open({
	  type: 2,
	  area: ['400px', '390px'],//长  宽
	  zIndex:1888,
	  //fixed: false, //不固定
	  title:false,
	  scrollbar: false,//屏蔽滚动条
	  //maxmin: true,
	  content:'/live/money'
	  
	});
	return false;
}
</script>