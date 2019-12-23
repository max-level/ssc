$(function(){
	$(".fixed .child-pointer").click(function(){
		$(".fixed").toggleClass('on');
	});

});
$(document).ready(function() {
	//提示框关闭
	$(".close-reveal-modal").unbind("click").click(function(event){
		$(this).parent().parent().parent().hide();
		$("#shadeFloor").hide();
	});
	
	$(".popup .close").click(function(){
		$(".popup").fadeOut(500);
	});
});
function toggleShortcut(e){
	var headH = $(".header .head").height(),
			footH = $(".header .foot").height();
	if($(".shortcut-logo").hasClass("on")){
			$(".shortcut-logo").removeClass("on");
			window.shortcut = setTimeout(function() {
					var h = headH + footH;
					$(".header").css({ height: h + "px" });
			},500);
	}else{
			$(".shortcut-logo").addClass("on");
			$(".header").css({ height: "auto" });
			clearTimeout(window.shortcut);
	}

}
/*中奖排行*/
var notice=setInterval(function(){
		$(".main .lottery .notice .notice-container li:last").hide();
var html=$(".main .lottery .notice .notice-container li:last");
		$(".main .lottery .notice .notice-container ul").prepend(html);
		$(".main .lottery .notice .notice-container li:first").slideDown(500);

},2000);