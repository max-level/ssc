<?php $this->display('inc_top.php') ?>
<script type="text/javascript">
function searchCoinLog(err, data){
	if(err){
		q410749985(err,"err");
	}else{
		$('.biao-cont').html(data);
	}
}
</script>


<div class="educhange" style="width: 1080px;">
            <form action="/index.php/team/searchCoin" dataType="html" target="ajax" call="searchCoinLog">
			<div class="fl l36 f12 co666">
                帐变类型：
            </div>
            <div class="fl pl5">
                <select class="form-control w120" name="liqType">
					<option value="">所有帐变类型</option>
					<option value="1">账户充值</option>
					<option value="105">退水资金</option>
					<option value="6">奖金派送</option>
					<option value="7">撤单返款</option>
					<option value="106">账户提现</option>
					<option value="8">提现失败</option>
					<option value="107">提现成功</option>
					<option value="9">系统充值</option>
					<option value="101">投注扣款</option>
					<option value="102">追号扣款</option>
					<option value="109">上级充值</option>
					<option value="110">给下级充值扣款</option>
				</select>
            </div>
			<div class="fl l36 f12 co666 pl18">
                类型：
            </div>
            <div class="fl pl5">
                <select class="form-control w120" name="userType">
					<option value="1">我自己</option>
					<option value="2" selected>所有人</option>
					<option value="3">所有下线</option> 
				</select>
            </div>
			<div class="fl l36 f12 co666 pl18">
                用户名 :
            </div>
            <div class="fl pl5">
                <div class="btngroup">
                   <input height="20" placeholder="请输入需要查找的用户名" name="username"/>     
                    <div class="cl"></div>	
                </div>
            </div>
			<div class="cl h2"></div>
            <div class="fl l36 f12 co666 ">
                日期 :
            </div>
            <div class="fl pl10">
                <div class="btngroup">
                    <input type="text" name="fromTime" id="datetimepicker1" readonly class="btn-item" value="<?=$this->iff($_REQUEST['fromTime'],$_REQUEST['fromTime'],date('Y-m-d',$GLOBALS['fromTime']))?>">
                    <div class="btn-item w28 br0 moshi-labtn"></div>
                    <div class="cl"></div>
                </div>
            </div>
            <div class="fl l36 f12 co666 pl15 pr13">
                --至--
            </div>
            <div class="fl pl4">
                <div class="btngroup">
                    <input type="text" name="toTime" id="datetimepicker2" readonly class="btn-item" value="<?=$this->iff($_REQUEST['toTime'],$_REQUEST['toTime'],date('Y-m-d',$GLOBALS['toTime']))?>">
                    <div class="btn-item w28 br0 moshi-labtn"></div>
                    <div class="cl"></div>
                </div>
            </div>
            <div class="fr">
                <input class="buybtn chazhao" type="submit" value="立即查询">
            </div>
			<div class="cl h2"></div>
            </form>
</div>

<div class="pagemain" style="width: 1080px;">
	
    <div class="display biao-cont">
        <?
            $this->display('team/coin-log.php');
        ?>
    </div>

</div>
<div id="wanjinDialog"></div>
<script>
$('#datetimepicker1').datetimepicker({
	timepicker:false,
	format:'Y-m-d',
});
$('#datetimepicker2').datetimepicker({
	timepicker:false,
	format:'Y-m-d',
});
</script>
  
   
 