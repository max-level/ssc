<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<title><?php echo $this->config['webName'];?>-电子游艺</title>
<link href="/static/css/login.css" rel="stylesheet" type="text/css"/>
<link href="/static/css/icon.css" rel="stylesheet" type="text/css"/>
<link href="/static/css/live.css" rel="stylesheet" type="text/css"/>
<script src="/static/script/jquery.1.7.2.min.js"></script>
</head>
<body>
<?php require(TPL.'/head.tpl.php');?>
<?php require(TPL.'/gg.tpl.php');?>
<div id="help" class="clearfix">
	<div class="gameclub">
		<div class="tab">
	    	<a class="on" href="#"><img class="ag" src="/static/image/slots/ico05.png"><b>AG电子</b><p>AGGAMING</p><span class="hover"></span></a>
	        <a href="#"><img class="pt" src="/static/image/slots/ico02.png"><b>PT电子</b><p>PTGAMING</p><span class="hover"></span></a>
	        <a href="#"><img class="bbin" src="/static/image/slots/ico04.png"><b>BBIN电子</b><p>BBGAMING</p><span class="hover"></span></a>
	        <a href="#"><img class="mg" src="/static/image/slots/ico01.png"><b>MG电子</b><p>MGGAMING</p><span class="hover"></span></a>
	        <a style="background-image:none;" class="last" href="#"><img class="og" src="/static/image/slots/ico07.png"><b>OG电子</b><p>OGGAMING</p><span class="hover"></span></a>
	    </div>
	    <div class="content">
	    	<ul>
	        	<li style="display:block;">
			        <a href="#" onclick="window.open('/live/ag?gameType=500');"><img src="/static/image/game/ag.gif"></a>
		        </li>
		    	<li>
			    	<?php require(TPL.'/live/ptgaming.tpl.php');?>
		    	</li>
		    	<li>
			    	<div class="bbin">
						<a class="fi" href="javascript:;"><img src="/static/image/bbin/01.png"></a>
						<a href="javascript:;"><img src="/static/image/bbin/02.png"></a>
						<a href="javascript:;"><img src="/static/image/bbin/03.png"></a>
						<a href="javascript:;"><img src="/static/image/bbin/04.png"></a>
						<a class="fi" href="javascript:;"><img src="/static/image/bbin/05.png"></a>
						<a href="javascript:;"><img src="/static/image/bbin/06.png"></a>
						<a href="javascript:;"><img src="/static/image/bbin/07.png"></a>
						<a href="javascript:;"><img src="/static/image/bbin/08.png"></a>
						<a class="fi" href="javascript:;"><img src="/static/image/bbin/09.png"></a>
						<a href="javascript:;"><img src="/static/image/bbin/10.png"></a>
						<a href="javascript:;"><img src="/static/image/bbin/11.png"></a>
						<a href="javascript:;"><img src="/static/image/bbin/12.png"></a>
						<div class="clear"></div>
					</div>
			    </li>
	            <li><?php require(TPL.'/live/mggaming.tpl.php');?></li>
		    	<li><a href="javascript:;" ><img src="/static/image/game/coming.png"></a></li>
	        </ul>
	    </div>
		<script>
			$(function(){
				window.onload = function()
				{
					var $a = $('.tab a');
					var $li = $('.content ul li');
					$a.mouseover(function(){
						var $this = $(this);
						var $t = $this.index();
						$a.removeClass();
						$this.addClass('on');
						$li.css('display','none');
						$li.eq($t).css('display','block');
					})
				}
			});
			//function tab(tabID,box){  
			//	$(tabID).click(function(){  
			//		$(tabID).removeClass('active'); //先将所有同级去掉active    
			//		$(box).hide();   //所有同级box隐藏   
			//		$(this).addClass('active');   //当前li显示
			//		$(box).eq($(this).index()).show();  
			//    });
			//}
			//$(document).ready(function(){
			//    tab(".pttab a",'.ptcon');
			//});
		</script>
	</div>
	<div class="clear"></div>
</div>
<?php require(TPL.'/footer.tpl.php');?>
</body>
</html>