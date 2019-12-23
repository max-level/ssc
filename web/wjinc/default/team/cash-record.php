<?php $this->display('inc_top.php') ?>
<script type="text/javascript">
$(function(){

	$('.sure[id]').click(function(){
		var $this=$(this),
		cashId=$this.attr('id'),
		
		call=function(err, data){
			if(err){
				q410749985(err,"err");
			}else{
				this.parent().text('已到帐');
			}
		}
		
		$.ajax('/cash/toCashSure/'+cashId,{
			dataType:'json',
			
			error:function(xhr, textStatus, errThrow){
				call.call($this, errThrow||textStatus);
			},
			
			success:function(data, textStatus, xhr){
				var errorMessage=xhr.getResponseHeader('X-Error-Message');
				if(errorMessage){
					call.call($this, decodeURIComponent(errorMessage), data);
				}else{
					call.call($this, null, data);
				}
			}
		});
	});
});
function teamBeforeSearchCashRecord(){}
function teamSearchCashRecord(err, data){
	if(err){
		q410749985(err,"err");
	}else{
		$('.biao-cont').html(data);
	}
}
</script>

<div class="educhange" style="width: 1080px;">
            <form action="/index.php/team/searchCashRecord" target="ajax" onajax="teamBeforeSearchCashRecord" call="teamSearchCashRecord" dataType="html">
			<div class="fl l36 f12 co666 ">
                类型：
            </div>
            <div class="fl pl5">
                <select class="form-control w120" name="type">
					<option value="0" selected>所有人</option>
					<option value="1">我自己</option>
					<option value="2">直属下线</option>
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
            <div class="fl l36 f12 co666 pl18">
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





<div class="pagemain">

    <div class="display biao-cont">
    	<!--内容列表-->
        <?php $this->display('team/cash-record-list.php'); ?>
        <!--内容列表 end -->
    </div>

</div>

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
  
 