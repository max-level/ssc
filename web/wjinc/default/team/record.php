<?php $this->display('inc_top.php') ?>
<script type="text/javascript">
function recordSearch(err, data){
	if(err){
		q410749985(err,"err");
	}else{
		$('.biao-cont').html(data);
	}
}

function deleteBet(err, code){
	if(err){
		q410749985(err,"err");
	}else{
		recodeRefresh();
	}
}
</script>

<div class="educhange" style="width: 1080px;">
            <form action="/index.php/team/searchGameRecord/<?=$this->userType?>" dataType="html" call="recordSearch" target="ajax">
            <div class="fl l36 f12 co666">
                彩种：
            </div>
            <div class="fl pl5">
                <select class="form-control w158" name="type">
					<option value="0" <?=$this->iff($_REQUEST['type']=='', 'selected="selected"')?>>全部彩种</option>
					<?php
						if($this->types) foreach($this->types as $var){ 
							if($var['enable']){
					?>
					<option value="<?=$var['id']?>" <?=$this->iff($_REQUEST['type']==$var['id'], 'selected="selected"')?>><?=$this->iff($var['shortName'], $var['shortName'], $var['title'])?></option>

					<?php }} ?>
				</select>
            </div>
			<div class="fl l36 f12 co666 pl18">
                状态：
            </div>
            <div class="fl pl5">
                <select class="form-control w120" name="state">
					<option value="0" selected>所有状态</option>
					<option value="1">已派奖</option>
					<option value="2">未中奖</option>
					<option value="3">未开奖</option>
					<option value="5">撤单</option>
				</select>
            </div>
			<div class="fl l36 f12 co666 pl18">
                类型：
            </div>
            <div class="fl pl5">
                <select class="form-control w120" name="utype">
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
    	<!--下注列表-->
        <?php $this->display('team/record-list.php'); ?>
        <!--下注列表 end -->
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
  
