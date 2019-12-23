<?php 
header("Content-type: text/html; charset=utf-8");
session_start();
?>
<html>
<head>
<meta charset='utf-8' />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>余额转换</title></head>
<body>
<script type="text/javascript" src='jquery-1.7.1.js'></script>


<?php 
function curl_file_get_contents($durl){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $durl);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$r = curl_exec($ch);
	curl_close($ch);
	return $r;
}
?>
<div id="MACenterContent">
    <div id="MNav">
       <!--  <span class="mbtn">额度转换</span> -->
        <div class="navSeparate" style="display: none;"></div>
<!--a href="javascript: f_com.MChgPager({method: 'bankSavings'});" class="mbtn">线上存款</a>
<div class="navSeparate"></div>程序作者QQ908981526
<a href="javascript: f_com.MChgPager({method: 'bankATM'});" class="mbtn">银行汇款</a>
<div class="navSeparate"></div>
<a href="javascript: f_com.MChgPager({method: 'bankTake'});" class="mbtn">线上取款</a-->
    </div>
	<?php
//	$uid = intval($_GET['uid']);
//$username = @$_GET["username"];
$uid = intval($_SESSION['uid']);
$username = $_SESSION["username"];
include_once("../mysqli.php");
 include_once("config.php");
 if(!$username){
	echo "<script>alert('请登录后再试！');window.close();</script>";exit;
}

$sql = "select * from lottery_members where uid=$uid";
//echo $sql;
$query = $mysqli->query($sql);
echo $q = $mysqli->error;
$rows = $query->fetch_array();

?>
    <div id="MMainData"  >
       <!--  <h2 class="MSubTitle">目前额度</h2> -->
        <table class="MMain" border="1" style="margin-bottom: 8px;margin-top:0px;width:100%;font-size:10px;position:relative;">
            <thead>
            <tr>
                <th style="width: 25%;" nowrap>类型</th>
                <th style="width: 25%;" nowrap>帐户</th>
                <th style="width: 25%;" nowrap>余额</th>
                <!-- <th style="width: 25%;" nowrap>更新时间</th> -->
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width="25%" style="text-align: center;padding:6px;">主账户</td>
                <td width="25%" style="text-align: center;padding:6px;"><?php echo $username;?></td>
                <td width="25%" style="text-align: center;padding:6px;"><span id="MBallCredit"><?=$rows["coin"]?></span>&nbsp;&nbsp;</td>
               <!--  <td width="25%" style="text-align: center;">2017-03-01 23:44:01</td> -->
            </tr>
            <tr>
                <td style="text-align: center;padding:6px;">AG娱乐场</td>
               <td style="text-align: center;padding:6px;">   <?php echo "XA".$username;?>         </td>    <td style="text-align: center;padding:6px;">
               <span id="MSunplusCredit"></span>&nbsp;&nbsp;</td>
                <!-- <td style="text-align: center;"></td> -->
            </tr>

			  <tr>
                <td style="text-align: center;padding:6px;">BB娱乐场</td>
               <td style="text-align: center;padding:6px;">   <?php echo "XA".$username;?>         </td>    <td style="text-align: center;padding:6px;">
               <span id="MSunplusCreditbb"></span>&nbsp;&nbsp;</td>
                <!-- <td style="text-align: center;"></td> -->
            </tr>

			  <tr>
                <td style="text-align: center;padding:6px;">MG娱乐场</td>
               <td style="text-align: center;padding:6px;">   <?php echo "XA".$username;?>         </td>    <td style="text-align: center;padding:6px;">
               <span id="MSunplusCreditmg"></span>&nbsp;&nbsp;</td>
                <!-- <td style="text-align: center;"></td> -->
            </tr>
  <tr>
                <td style="text-align: center;padding:6px;">PT娱乐场</td>
               <td style="text-align: center;padding:6px;">   <?php echo "XA".$username;?>         </td>    <td style="text-align: center;padding:6px;">
               <span id="MSunplusCreditpt"></span>&nbsp;&nbsp;</td>
                <!-- <td style="text-align: center;"></td> -->
            </tr>

            </tbody>
        </table>
       <!--  <h2 class="MSubTitle" style="    margin-left: 38px;font-size: 20px;">额度转换</h2> -->
        <form action="ed.php?action=save" id="form1" method="post" name="form1" >
        <table class="MMain MNoBorder" style="margin-bottom: 8px;margin-top:0px;width:100%;font-size:10px;position:relative;">
        <!--tr>
            <td nowrap>钱包转账：</td>
            <td>
                <a href="javascript: f_com.MChgPager({method: 'liveHistory'});">查询转账记录</a>
            </td>
        </tr-->
            <tr>
                <td nowrap style="width:223px;padding:4px 8px 0 0px;text-align:center;">
                    转账选择：
                </td>
				
				
				
				<style>
				
				 select option{line-height:30px;height:30px;margin:5px auto;}
				</style>
                <td style="padding:2px 8 0 0px;">
                    <select name="zz_type" id="zz_type" style="font-size:14px;margin-left:50px;">
                        <option value="1">主账户<strong>→</strong>AG娱乐场</option>
                         <option value="11">主账户<strong>→</strong>BB娱乐场</option>
                          <option value="21">主账户<strong>→</strong>MG娱乐场</option>
                           <option value="31">主账户<strong>→</strong>PT娱乐场</option>
                        
                        <option value="2">AG娱乐场<strong>→</strong>主账户</option>
                            <option value="12">BB娱乐场<strong>→</strong>主账户</option>
                                <option value="22">MG娱乐场<strong>→</strong>主账户</option>
                                    <option value="32">PT娱乐场<strong>→</strong>主账户</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td nowrap style="padding:4px 8px 0 0px;text-align:center;" >
                    转账金额：
                </td>
                <td style="padding:4px 8px 0 0px;">
                    <input type="text" name="zz_money" style="margin-left:50px;" id="zz_money" onKeyUp="if(isNaN(value))execCommand('undo')" /> &nbsp;最低:1元
                </td>
            </tr>
            <tr>
                <td nowrap style="padding:4px 8px 0 0px;;"></td>
                <td style="padding:4px 8px 0 0px;">
                    <input type="button" style="margin-left:50px;" onClick="confirmChangeMoney()" value="确认转账" />
                </td>
            </tr>
        </table>
        </form>
    </div>
</div>
<div class="mask"><div  class="loading_tip"><img src="loading.gif" /><span>转换中...</span></div></div>
<div class="mask2"><div  class="loading_tip"><img src="loading.gif" /><span>更新帐户信息中...</span></div></div>

<script type="text/javascript">
   function ALL_money(){
        $.getJSON("live/getdata.php?callback=?", function (json) {
            if (json.close == 1) {
               // parent.location.href = '/close.php';
            }
            $("#MBallCredit").html(json.user_money);
        });
    }
    function AG_money(){
        $.get("/live/balance.php?username=<?php echo $rows['username'];?>&uid=<?php echo $rows['uid'];?>&target=ag",function(data){
          // data = eval('('+data+')');
           $("#MSunplusCredit").html(data);
          
        });

    }
    function BB_money(){
           $.get("/live/balance.php?username=<?php echo $rows['username'];?>&uid=<?php echo $rows['uid'];?>&target=bb",function(data){
          // data = eval('('+data+')');
           $("#MSunplusCreditbb").html(data);
          
        });


    }
	function MG_money(){
         $.get("/live/balance.php?username=<?php echo $rows['username'];?>&uid=<?php echo $rows['uid'];?>&target=mg",function(data){
          // data = eval('('+data+')');
           $("#MSunplusCreditmg").html(data);
          
        });


    }
	function AB_money(){
        $.get("./newallbet2/cha.php?callback=?",function(data){
            data = eval('('+data+')');
            $("#general_ab").html(data.general);
        });

    }
	function PT_money(){
        $.get("/live/balance.php?username=<?php echo $rows['username'];?>&uid=<?php echo $rows['uid'];?>&target=pt",function(data){
          // data = eval('('+data+')');
           $("#MSunplusCreditpt").html(data);
          
        });


    }
   AG_money(); 
	BB_money();MG_money();PT_money();//AB_money();
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
			$(".mask").css("display", "block");
            $.ajax({
                type:'post',
                url:'/live/ed.php?action=save',
                data:{'zz_type':aa,'zz_money':bb,'uid':uid,'username':username},
                beforeSend:function(x){
                    console.log(this.data.zz_type+" "+this.data.zz_money);
                },
                success:function(d){
					$(".mask").css("display", "none");
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
</script>


<style type="text/css">
body{
    color:#000;
    padding-top:10px; 
	font-family:微软雅黑;
}
.mask,.mask2{filter:alpha(opacity=80); -moz-opacity:0.8; -khtml-opacity: 0.8; opacity: 0.8;position:absolute;top:0px; left:0px; width:100%;height:400px; text-align:center;display:none;}
#MACenterContent{
    width: 100%;
    margin:0 auto;
	margin-top:-10px;
}
table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
    width: 90%;  
    margin:0 auto;

    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc; 
    -moz-box-shadow: 0 1px 1px #ccc; 
    box-shadow: 0 1px 1px #ccc;     
}
table tr:hover {
    background: rgb(91,78,214);
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
} 
table td, table th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 8px;
    text-align: left;    
}     
table th {
    background-color: #ccc;
    /*background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); */
}
table th{
    text-align: center;
}
select{
    font-size: 16px;
}


</style>



</body>
</html>
