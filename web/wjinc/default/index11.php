<!DOCTYPE html>
<html>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>

<meta name="renderer" content="webkit" /> 
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript"> 
	/* var baseUrl = "http://"+window.location.host+"/"; */
	var url = '/api/checkLoginJs.do?t='+Math.random();
	document.write("<script type='text/javascript' src='"+url+"'><\/script>");
	document.close();
</script>
<script type="text/javascript" src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" ></script>
<script type="text/javascript" src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<link href="static/css/index.pack.min.css" rel="stylesheet" />


<script type="text/javascript" src="/static/lib/layer/layer.js" ></script>
<script type="text/javascript" src='/config/config.js'></script>


<script type="text/javascript" src="/skin/dh/libs.js"></script>
<link rel="stylesheet" type="text/css" href="/skin/dh/main.css" />
<script type="text/javascript" src="/skin/dh/custompage.js"></script>
<script type="text/javascript" src="/skin/dh/member.js"></script>
<script-tpl style="display:none">

jQuery.ajaxSetup({async: true});
$LAB.script(staticFileUrl + 'data/configjs.js?v=' + dataVersion)
    .script(staticFileUrl + 'data/gameCommon.js')
    //.script(staticFileUrl + 'data/playCates.js')
    //.script(staticFileUrl + 'data/plays.js')
    .wait(function () {// 等待所有script加载完再执行这个代码块
        $("html").show();
        //处理声音
        SoundManage.initVoiceSwitch();
        //处理子页面
        frameAutoHeight();
        window.setInterval(frameAutoHeight, 200);
        //处理游戏菜单
        HomeMenu.init();
        //判断用户账号是否已封停
        if (user.enable == 0) {//账号封停
            layer.open({
                title: "提示",
                type: 1,
                area: ['250px', '120px'],
                closeBtn: 0,
                shift: 2,
                shadeClose: false,
                content: '<div style="margin: 10px;">您的账号已经被冻结，请联系上级！</div>'
        });
        }

        if (user.updatePw == 1) {//是否需要修改密码
            UserInfos.showUpdatePwWin();
        }


        // 同步时间
        SyncSysDate.sync();

        // 隐藏游客权限
        trialGameProPageInit();

        // 处理是否需要显示默认的隐藏按钮
        showSysBtn();

        HomeMenu.showInfo();

        // 每10秒请求一次消息
        window.setInterval(function () {
            PullMsg.getUserMsg(200);
        }, 10000);

        $('a[target="framePage"]').bind('click', function (event) {
            $("#framePage").attr("src", $(this).attr('href'));
            event.preventDefault();
            event.stopPropagation();
        });

//		PullMsg.getLotteryData();

        //事件
        document.onkeydown = function (e) {
            var theEvent = window.event || e;
            var code = theEvent.keyCode || theEvent.which;
            if (code == 13) {
                if (UserBet.step == 0) {
                    UserBet.openBetWindow();
                } else if (UserBet.step == 1) {
                    UserBet.submitBet();
                    if (UserBet.step == 0) {
                        setTimeout(function () {
                            layer.closeAll();
                        }, 200);
                    }
                }
            }
        }

        //公告
        var noticeList = MESSAGES.type_1; //公告列表
        if (noticeList) {
            var html = "<ul>";
            $.each(noticeList, function (index, item) {
                html += '<li><a href="javascript:showAnnounceList()">' + item.title + '</a></li>'
            });
            html += "</ul>";

            $('#announce-list').html(html);
        }
        $('#announce-list').scrollbox({
            speed: 100
        });
    })

function showAnnounceList() {
    layer.open({
        type: 2,
        title: '公告列表',
        shadeClose: true,
        scrollbar: false,
        shade: [0.5],
        area: ['700px', '400px'],
        content: '/notice/list.html?t=' + Date.parse(new Date())
    });
}

			
</script-tpl>
<script type="text/javascript" src="/static/js/index.pack.min.js" ></script>
<script type="text/javascript" src="https://users.js.51.sn.cn/19770267.js"></script>
<script type="text/javascript">
var staticFileUrl=getStaticDomain();
HttpUtil.loadJs(staticFileUrl + "data/dataVersion.js?t="+ Math.random());
</script>
<script type="text/javascript">
	$("html").hide();
	
	var e_tpl=$('script-tpl').remove().html();
	//console.log(e_tpl)
	layer.config({
	    skin: 'demo-class'
	});
	
	
	$LAB
    .script("/api/getServerData.do?t="+ Math.random())
    .script('/game/getServerData.do?t=' + Math.random())
    .script(staticFileUrl + 'data/messages.js?v='+dataVersion)
    .script(staticFileUrl + 'data/paramcfg.js?v='+dataVersion);
	
	
	if(JSON.parse($.ajax({url:"/checkCache.php",async:false}).responseText).result&&('_cache' in localStorage)){
		//console.log('found resource cache in localStorage,loading...')
		eval(localStorage['_cache']);
		eval(e_tpl);
	}else{
		jQuery.ajaxSetup( {async:false} );
		if(jQuery.getScript(staticFileUrl + 'data/gamedatas.js',function(r){
			localStorage['_cache']=r;
			eval(localStorage['_cache']);
			//console.log('loading resource...')
		}).statusText){
			eval(e_tpl);
		}
	}
</script>

</head>
<body>
<div class="main-body">
<div class="header">
	  <div class="logo2" style="text-align: center;">
	  	<img src='' alt="<?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?>" height="53" id="domain_logo_url">
	  	<script type="text/javascript">
			//处理默认样式
			changePageSkin();
		</script>
	  </div>
	  <div class="menu1"> 
	        <div class="draw_number"><div id="header_game_name"></div><div><span class="cur_turn_num" id="cur_turn_num"></span>期开奖</div></div>
	        <a id="result_balls" target="_blank"></a>
	        <div class="open_sound" onclick="SoundManage.voiceSwitch()" id="countdown_sound" title="点击关闭提醒声音"></div>
	  </div>
	  <div class="menu2">
	    <span><a href="/game/stat/betList.html?settled=false" target="framePage">未结明细</a></span>
	    <span><a href="/game/stat/betList.html?settled=true" target="framePage">今天已结</a></span>
	    <span class="trial-cls"><a href="/game/stat/statBet.html" target="framePage">历史报表</a></span>
	    <span><a href="javascript:History.loadPage()">开奖结果</a></span><br>
	    <span><a href="/game/include/user_bet_info.html" target="framePage">个人资讯</a></span>
	  	<span><a href="/game/include/game_rule.html" target="framePage">游戏规则</a></span>
		
		<span class="trial-cls"><a href="/center/pay/list.html" target="framePage">充值记录</a></span>
	
	  	<span id="skinPanel">更换皮肤</span>
	  </div>
	  <div class="menu4"><a href="javascript:onlineService();" class="support"></a></div>
	  <div class="menu3"><a href="javascript:logout();" class="logout"></a></div>
	  <div style="clear:both;"></div>
	<div class="lotterys">
<div class="menucontainer">
  <div class="spritearrow arrowup"></div>
    <div id="lotterys" style="display: none">
      <a href="javascript:HomeMenu.selMenuClass(50);" gameid="50" id="l_PK10" lang="PK10_0" rel="0" ><span>北京赛车(PK10)</span></a>
	  <a href="javascript:HomeMenu.selMenuClass(104);" gameid="104" id="l_LDPK10" lang="LDPK_0" rel="1" ><span>极速赛车</span></a>
	  <!--a href="javascript:HomeMenu.selMenuClass(72);" gameid="72" id="l_MSPK10" lang="MSPK10_0" rel="0" ><span>极速赛车<img src="img/hot.gif" alt="" /></span></a-->
	  <a href="javascript:HomeMenu.selMenuClass(52);" gameid="52" id="l_MSFT10" lang="MSFT_0" rel="0" ><span>极速飞艇<img src="img/hot.gif" alt="" /></span></a>
	  <!--a href="javascript:HomeMenu.selMenuClass(59);" gameid="59" id="l_MSNN" lang="MSNN_0" rel="0" ><span>秒速牛牛<img src="img/hot.gif" alt="" /></span></a-->
	  
      <a href="javascript:HomeMenu.selMenuClass(1);" gameid="1" id="l_CQSSC" lang="CQSSC_0" rel="2" ><span>重庆时时彩</span></a>
	  <a href="javascript:HomeMenu.selMenuClass(73);" gameid="73" id="l_MSSSC" lang="MSSSC_0" rel="2" ><span>秒速时时彩<img src="img/hot.gif" alt="" /></span></a>
	  <!--a href="javascript:HomeMenu.selMenuClass(81);" gameid="81" id="l_TXFFC" lang="TXFFC_0" rel="2" ><span>腾讯分分彩<img src="img/hot.gif" alt="" /></span></a-->
      <a href="javascript:HomeMenu.selMenuClass(100);" gameid="100" id="l_JSSSC" lang="JSSSC_0" rel="3" ><span>腾讯分分彩</span></a>
      <a href="javascript:HomeMenu.selMenuClass(101);" gameid="101" id="l_RS15" lang="RS15_0" rel="4" ><span>瑞士1.5分彩</span></a>
	  <a href="javascript:HomeMenu.selMenuClass(102);" gameid="102" id="l_DMSSC" lang="DMSSC_0" rel="5" ><span>丹麦3分彩</span></a>
      <a href="javascript:HomeMenu.selMenuClass(103);" gameid="103" id="l_KLSSC" lang="KLSSC_0" rel="6" ><span>澳洲幸运5</span></a>
      <a href="javascript:HomeMenu.selMenuClass(122);" gameid="122" id="l_AMSSC" lang="AMSSC_0" rel="7" ><span>澳门时时彩</span></a>
	  <!--a href="javascript:HomeMenu.selMenuClass(119);" gameid="119" id="l_TJSSC" lang="TJSSC_0" rel="8" ><span>天津时时彩</span></a>
      <a href="javascript:HomeMenu.selMenuClass(120);" gameid="120" id="l_XJSSC" lang="XJSSC_0" rel="9" ><span>新疆时时彩</span></a>
	   <a href="javascript:HomeMenu.selMenuClass(82);" gameid="82" id="l_CQQXC" lang="CQQXC_0" rel="2" ><span>重庆七星彩</span></a>
	  <a href="javascript:HomeMenu.selMenuClass(80);" gameid="80" id="l_QXC" lang="QXC_0" rel="2" ><span>体彩七星彩</span></a-->
	  <a href="javascript:HomeMenu.selMenuClass(51);" gameid="51" id="l_XTPK10" lang="XTPK10_0" rel="0" ><span>澳洲幸运10<img src="img/hot.gif" alt="" /></span></a>
	   <!--a href="javascript:HomeMenu.selMenuClass(58);" gameid="58" id="l_PK10NN" lang="PK10NN_0" rel="0" ><span class="hot">PK10牛牛<img src="img/hot.gif" alt="" /></span></a-->
	  <a href="javascript:HomeMenu.selMenuClass(55);" gameid="55" id="l_XYFT" lang="XYFT_0" rel="27" ><span>幸运飞艇<img src="img/hot.gif" alt="" /></span></a>
	  <!--a href="javascript:HomeMenu.selMenuClass(108);" gameid="108" id="l_JSFT" lang="JSFT_0" rel="28" ><span>极速飞艇</span></a-->
      <!--a href="javascript:HomeMenu.selMenuClass(121);" gameid="121" id="l_YNSSC" lang="YNSSC_0" rel="10" ><span>云南时时彩</span></a-->
	  <a href="javascript:HomeMenu.selMenuClass(65);" gameid="65" id="l_KL8" lang="KL8_0" rel="11" ><span>北京快乐8</span></a>
      <a href="javascript:HomeMenu.selMenuClass(111);" gameid="111" id="l_TWKL8" lang="TWKL8_0" rel="12" ><span>台湾宾果</span></a>
	  <a href="javascript:HomeMenu.selMenuClass(110);" gameid="110" id="l_HNKL8" lang="HNKL8_0" rel="13" ><span>澳洲幸运20</span></a>
      <a href="javascript:HomeMenu.selMenuClass(66);" gameid="66" id="l_XY28" lang="XY28_0" rel="14" ><span>PC蛋蛋<img src="img/hot.gif" alt="" /></span></a>
      <a href="javascript:HomeMenu.selMenuClass(112);" gameid="112" id="l_TG28" lang="TG28_0" rel="15" ><span>泰国28</span></a>
	  <a href="javascript:HomeMenu.selMenuClass(106);" gameid="106" id="l_BX11" lang="BX11_0" rel="16" ><span>巴西11选5</span></a>
      <!--a href="javascript:HomeMenu.selMenuClass(21);" gameid="21" id="l_GD11" lang="GD11_0" rel="17" ><span>广东11选5</span></a>
	  <a href="javascript:HomeMenu.selMenuClass(117);" gameid="117" id="l_SH11" lang="SH11_0" rel="18" ><span>上海11选5</span></a>
	  <a href="javascript:HomeMenu.selMenuClass(118);" gameid="118" id="l_AH11" lang="AH11_0" rel="19" ><span>安徽11选5</span></a-->
	  <a href="javascript:HomeMenu.selMenuClass(113);" gameid="113" id="l_JSHK6" lang="JSHK6_0" rel="20" ><span>极速六合彩<img src="img/hot.gif" alt="" /></span></a>
      <!--a href="javascript:HomeMenu.selMenuClass(70);" gameid="70" id="l_HK6" lang="HK6_0" rel="21" ><span>香港六合彩</span></a>
      <a href="javascript:HomeMenu.selMenuClass(105);" gameid="105" id="l_DJK3" lang="DJK3_0" rel="22" ><span>东京快3</span></a>
      <!--a href="javascript:HomeMenu.selMenuClass(10);" gameid="10"  id="l_JSK3" lang="JSK3_0" rel="23" ><span>江苏骰宝(快3)</span></a-->
	  <!--a href="javascript:HomeMenu.selMenuClass(114);" gameid="114" id="l_GXK3" lang="GXK3_0" rel="24" ><span>广西快3</span></a>
	  <a href="javascript:HomeMenu.selMenuClass(115);" gameid="115" id="l_AHK3" lang="AHK3_0" rel="25" ><span>安徽快3</span></a-->
	  <a href="javascript:HomeMenu.selMenuClass(116);" gameid="116" id="l_JLK3" lang="JLK3_0" rel="26" ><span>吉林快3</span></a>
	  
	  <!--a href="javascript:HomeMenu.selMenuClass(60);" gameid="60" id="l_GXKLSF" lang="GXKLSF_0" rel="29" ><span>广东快乐十分</span></a-->
      <a href="javascript:HomeMenu.selMenuClass(107);" gameid="107" id="l_YNXYNC" lang="YNXYNC_0" rel="30" ><span>越南幸运农场</span></a>
	  <a href="javascript:HomeMenu.selMenuClass(61);" gameid="61" id="l_CQSF" lang="CQSF_0" rel="31" ><span>重庆幸运农场</span></a>
	  <!--a href="javascript:HomeMenu.selMenuClass(2);" gameid="2" id="l_ZQJC" lang="ZQJC_0" rel="0" ><span class="hot">足球竞猜<img src="img/hot.gif" alt="" /></span></a-->
    </div>
  <div class="show">
    <ul class="items" id="items"></ul>
  </div>
  <div class="menumoregame">
    <div id="moregames">更多游戏</div>
    <div id="moregameicon">▼</div>
  </div>
</div>	

<div class="gamecontainer">
  <div style="height: 20px;"></div>
  <div class="gamebox clearfix" style="display:block">
</div>

  <div class="gamesmltxt">
          注：已选择的彩种可通过鼠标拖动改变排列顺序。
  </div>
  <div class="editon">
    <button class="gamebtn1">编辑</button>
  </div>
  <div class="editoff" style="display: none">
    <button class="gamebtn2">取消</button>
    <button class="gamebtn1">确定</button>
  </div>
</div>
</div>
	<div style="clear:both;"></div> 
	<div class="sub" id="homeCateMenus">
		<div id="cate_menus_50" class="show cate_menu"><!--pk10-->
			<a class="selected" href="/game/pk10/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面盘</a>
			|
			<a href="/game/pk10/sol.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="2">单号1~10</a>
			|
			<a href="/game/pk10/com.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="3">冠亚组合</a>
			|
			<a href="/game/pk10/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">番滩</a>
			
		</div>
		<div id="cate_menus_58" class="show cate_menu"><!--PK10牛-->
			<a class="selected" href="/game/pk10nn/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">PK10牛牛</a>
		</div>
		<div id="cate_menus_59" class="show cate_menu"><!--秒速牛-->
			<a class="selected" href="/game/nn/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">秒速牛牛</a>
		</div>
		<div id="cate_menus_2" class="show cate_menu"><!--足球竞猜-->
			<a class="selected" href="/game/zq/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1"></a>
		</div>
		<div id="cate_menus_72" class="show cate_menu"><!--秒速pk10-->
			<a class="selected" href="/game/mspk10/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面盘</a>
			|
			<a href="/game/mspk10/sol.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="2">单号1~10</a>
			|
			<a href="/game/mspk10/com.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="3">冠亚组合</a>
			|
			<a href="/game/mspk10/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">番滩</a>
			
		</div>
		
		<div id="cate_menus_51" class="show cate_menu"><!--澳洲幸运pk10-->
			<a class="selected" href="/game/lcpk10/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面盘</a>
			|
			<a href="/game/lcpk10/sol.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="2">单号1~10</a>
			|
			<a href="/game/lcpk10/com.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="3">冠亚组合</a>
			|
			<a href="/game/lcpk10/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">番滩</a>
		</div>
		<div id="cate_menus_52" class="show cate_menu"><!--秒速飞艇-->
			<a class="selected" href="/game/msft/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面盘</a>
			|
			<a href="/game/msft/sol.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="2">单号1~10</a>
			|
			<a href="/game/msft/com.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="3">冠亚组合</a>
			|
			<a href="/game/msft/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">番滩</a>
		</div>
		<div id="cate_menus_55" class="show cate_menu"><!--幸运飞艇-->
			<a class="selected" href="/game/xyft/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面盘</a>
			|
			<a href="/game/xyft/sol.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="2">单号1~10</a>
			|
			<a href="/game/xyft/com.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="3">冠亚组合</a>
			|
			<a href="/game/xyft/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">番滩</a>
		</div>
		<div id="cate_menus_1" class="hide cate_menu"><!--重庆时时彩-->
			<a class="selected" href="/game/cqssc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/cqssc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/cqssc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/cqssc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/cqssc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/cqssc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/cqssc/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/cqssc/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/cqssc/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
			
		</div>
		<div id="cate_menus_73" class="hide cate_menu"><!--秒速时时彩-->
			<a class="selected" href="/game/msssc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/msssc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/msssc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/msssc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/msssc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/msssc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/msssc/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/msssc/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/msssc/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
		</div>
		<div id="cate_menus_81" class="hide cate_menu"><!--腾讯分分彩-->
			<a class="selected" href="/game/txffc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/txffc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/txffc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/txffc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/txffc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/txffc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/txffc/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/txffc/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/txffc/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
		</div>
		<div id="cate_menus_82" class="hide cate_menu"><!--重庆七星彩-->
			<a class="selected" href="/game/cqqxc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/cqqxc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/cqqxc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/cqqxc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/cqqxc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/cqqxc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/cqqxc/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/cqqxc/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/cqqxc/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
		</div>
		<div id="cate_menus_80" class="hide cate_menu"><!--七星彩-->
			<a class="selected" href="/game/qxc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
		</div>
		<div id="cate_menus_60" class="hide cate_menu"><!--广东快乐十分-->
			<a class="selected" href="/game/gdkl10/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面盘</a>
			|
			<a href="/game/gdkl10/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">单号1~8</a>
			|
			<a href="/game/gdkl10/q1.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第一球</a>
			|
			<a href="/game/gdkl10/q2.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第二球</a>
			|
			<a href="/game/gdkl10/q3.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第三球</a>
			|
			<a href="/game/gdkl10/q4.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第四球</a>
			|
			<a href="/game/gdkl10/q5.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">第五球</a>
			|
			<a href="/game/gdkl10/q6.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">第六球</a>
			|
			<a href="/game/gdkl10/q7.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">第七球</a>
			|
			<a href="/game/gdkl10/q8.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="10">第八球</a>
			|
			<a href="/game/gdkl10/zm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="11">正码</a>
			|
			<a href="/game/gdkl10/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="12">连码</a>
			|
			<a href="/game/gdkl10/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="13">番摊</a>
		</div>
		<div id="cate_menus_10" class="hide cate_menu"><!--江苏快3-->
			<a class="selected" href="/game/jsk3/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">大小骰宝</a>
		</div>
		
		<div id="cate_menus_61" class="hide cate_menu"><!--幸运农场-->
			<a class="selected" href="/game/xync/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面盘</a>
			|
			<a href="/game/xync/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">单号1~8</a>
			|
			<a href="/game/xync/q1.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第一球</a>
			|
			<a href="/game/xync/q2.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第二球</a>
			|
			<a href="/game/xync/q3.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第三球</a>
			|
			<a href="/game/xync/q4.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第四球</a>
			|
			<a href="/game/xync/q5.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">第五球</a>
			|
			<a href="/game/xync/q6.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">第六球</a>
			|
			<a href="/game/xync/q7.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">第七球</a>
			|
			<a href="/game/xync/q8.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="10">第八球</a>
			|
			<a href="/game/xync/zm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="11">正码</a>
			|
			<a href="/game/xync/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="12">连码</a>
			|
			<a href="/game/xync/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="13">番摊</a>
		</div>
		<div id="cate_menus_65" class="hide cate_menu"><!--北京快乐8-->
			<a class="selected" href="/game/bjkl8/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">总和、比数、五行</a>
			|
			<a href="/game/bjkl8/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">正码</a>
		</div>
		<div id="cate_menus_110" class="hide cate_menu"><!--河内快乐8-->
			<a class="selected" href="/game/hnkl8/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">总和、比数、五行</a>
			|
			<a href="/game/hnkl8/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">正码</a>
		</div>
		<div id="cate_menus_111" class="hide cate_menu"><!--台湾宾果-->
			<a class="selected" href="/game/twbg/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">总和、比数、五行</a>
			|
			<a href="/game/twbg/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">正码</a>
		</div>
		<div id="cate_menus_66" class="hide cate_menu"><!--PC蛋蛋-->
			<a class="selected" href="/game/pcdd/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">PC蛋蛋</a>
		</div>
		<div id="cate_menus_112" class="hide cate_menu"><!--泰国28-->
			<a class="selected" href="/game/tg28/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">泰国28</a>
		</div>
		<div id="cate_menus_21" class="hide cate_menu"><!--广东11选5-->
			<a class="selected" href="/game/gd11x5/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面</a>
			|
			<a href="/game/gd11x5/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">单号</a>
			|
			<a href="/game/gd11x5/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">连码</a>
			|
			<a href="/game/gd11x5/zx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">直选</a>
		</div>
		<div id="cate_menus_70" class="hide cate_menu"><!--六合彩-->
			<a class="selected" href="/game/lhc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="85">特码</a>
			|
			<a href="/game/lhc/2m.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="86">两面</a>
			|
			<a href="/game/lhc/sb.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="87">色波</a>
			|
			<a href="/game/lhc/tx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="88">特肖</a>
			|
			<a href="/game/lhc/hx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="89">合肖</a>
			|
			<a href="/game/lhc/tws.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="90">特码头尾数</a>
			|
			<a href="/game/lhc/zm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="91">正码</a>
			|
			<a href="/game/lhc/zmt.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="92">正码特</a>
			|
			<a href="/game/lhc/zm16.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="93">正码1~6</a>
			|
			<a href="/game/lhc/wx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="94">五行</a>
			|
			<a href="/game/lhc/ptyxws.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="95">平特一肖尾数</a>
			|
			<a href="/game/lhc/zx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="95">正肖</a>
			|
			<a href="/game/lhc/7sb.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="96">7色波</a>
			|
			<a href="/game/lhc/zhongxiao.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="97">总肖</a>
			|
			<a href="/game/lhc/zxbz.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="98">自选不中</a>
			|
			<a href="/game/lhc/lxlw.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="99">连肖连尾</a>
			|
			<a href="/game/lhc/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="100">连码</a>
		</div>
		<div id="cate_menus_113" class="hide cate_menu"><!--极速六合彩-->
			<a class="selected" href="/game/jslhc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="85">特码</a>
			|
			<a href="/game/jslhc/2m.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="86">两面</a>
			|
			<a href="/game/jslhc/sb.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="87">色波</a>
			|
			<a href="/game/jslhc/tx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="88">特肖</a>
			|
			<a href="/game/jslhc/hx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="89">合肖</a>
			|
			<a href="/game/jslhc/tws.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="90">特码头尾数</a>
			|
			<a href="/game/jslhc/zm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="91">正码</a>
			|
			<a href="/game/jslhc/zmt.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="92">正码特</a>
			|
			<a href="/game/jslhc/zm16.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="93">正码1~6</a>
			|
			<a href="/game/jslhc/wx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="94">五行</a>
			|
			<a href="/game/jslhc/ptyxws.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="95">平特一肖尾数</a>
			|
			<a href="/game/jslhc/zx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="95">正肖</a>
			|
			<a href="/game/jslhc/7sb.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="96">7色波</a>
			|
			<a href="/game/jslhc/zhongxiao.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="97">总肖</a>
			|
			<a href="/game/jslhc/zxbz.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="98">自选不中</a>
			|
			<a href="/game/jslhc/lxlw.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="99">连肖连尾</a>
			|
			<a href="/game/jslhc/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="100">连码</a>
		</div>
		<div id="cate_menus_122" class="hide cate_menu"><!--澳门时时彩-->
			<a class="selected" href="/game/amssc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/amssc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/amssc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/amssc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/amssc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/amssc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/amssc/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/amssc/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/amssc/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
		</div>
		<div id="cate_menus_100" class="hide cate_menu"><!--腾讯分分彩-->
			<a class="selected" href="/game/jsffc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/jsffc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/jsffc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/jsffc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/jsffc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/jsffc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/jsffc/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/jsffc/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/jsffc/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
		</div>
		<div id="cate_menus_101" class="hide cate_menu"><!--瑞士1.5分彩-->
			<a class="selected" href="/game/rs15/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/rs15/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/rs15/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/rs15/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/rs15/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/rs15/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/rs15/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/rs15/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/rs15/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
		</div>
		<div id="cate_menus_102" class="hide cate_menu"><!--丹麦3分彩-->
			<a class="selected" href="/game/dm3fc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/dm3fc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/dm3fc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/dm3fc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/dm3fc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/dm3fc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/dm3fc/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/dm3fc/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/dm3fc/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
		</div>
		<div id="cate_menus_103" class="hide cate_menu"><!--开罗5分彩-->
			<a class="selected" href="/game/kl5fc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/kl5fc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/kl5fc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/kl5fc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/kl5fc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/kl5fc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/kl5fc/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/kl5fc/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/kl5fc/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
		</div>
		<div id="cate_menus_119" class="hide cate_menu"><!--天津时时彩-->
			<a class="selected" href="/game/tjssc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/tjssc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/tjssc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/tjssc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/tjssc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/tjssc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/tjssc/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/tjssc/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/tjssc/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
			
		</div>
		<div id="cate_menus_120" class="hide cate_menu"><!--新疆时时彩-->
			<a class="selected" href="/game/xjssc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/xjssc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/xjssc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/xjssc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/xjssc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/xjssc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/xjssc/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/xjssc/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/xjssc/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
			
		</div>
		<div id="cate_menus_121" class="hide cate_menu"><!--云南时时彩-->
			<a class="selected" href="/game/ynssc/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">整合</a>
			|
			<a href="/game/ynssc/sol.html?ball=1" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">第一球</a>
			|
			<a href="/game/ynssc/sol.html?ball=2" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第二球</a>
			|
			<a href="/game/ynssc/sol.html?ball=3" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第三球</a>
			|
			<a href="/game/ynssc/sol.html?ball=4" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第四球</a>
			|
			<a href="/game/ynssc/sol.html?ball=5" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第五球</a>
			|
			<a href="/game/ynssc/longhu.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">龙虎斗</a>
			|
			<a href="/game/ynssc/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">番滩</a>
			|
			<a href="/game/ynssc/qipai.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">百家乐</a>
		</div>
		<div id="cate_menus_104" class="show cate_menu"><!--伦敦pk10-->
			<a class="selected" href="/game/ldpk10/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面盘</a>
			|
			<a href="/game/ldpk10/sol.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="2">单号1~10</a>
			|
			<a href="/game/ldpk10/com.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="3">冠亚组合</a>
			|
			<a href="/game/ldpk10/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">番滩</a>
		</div>
		<div id="cate_menus_108" class="show cate_menu"><!--极速飞艇-->
			<a class="selected" href="/game/jsft/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面盘</a>
			|
			<a href="/game/jsft/sol.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="2">单号1~10</a>
			|
			<a href="/game/jsft/com.html" target="framePage" onclick="HomeMenu.selCateMenuClass(this);" cate_id="3">冠亚组合</a>
			|
			<a href="/game/jsft/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">番滩</a>
		</div>
		<div id="cate_menus_107" class="hide cate_menu"><!--越南快乐十分-->
			<a class="selected" href="/game/ynxync/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面盘</a>
			|
			<a href="/game/ynxync/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">单号1~8</a>
			|
			<a href="/game/ynxync/q1.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="3">第一球</a>
			|
			<a href="/game/ynxync/q2.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="4">第二球</a>
			|
			<a href="/game/ynxync/q3.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="5">第三球</a>
			|
			<a href="/game/ynxync/q4.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="6">第四球</a>
			|
			<a href="/game/ynxync/q5.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="7">第五球</a>
			|
			<a href="/game/ynxync/q6.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="8">第六球</a>
			|
			<a href="/game/ynxync/q7.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="9">第七球</a>
			|
			<a href="/game/ynxync/q8.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="10">第八球</a>
			|
			<a href="/game/ynxync/zm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="11">正码</a>
			|
			<a href="/game/ynxync/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="12">连码</a>
			|
			<a href="/game/ynxync/fantan.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="2">番摊</a>
		</div>
		<div id="cate_menus_117" class="hide cate_menu"><!--上海11选5-->
			<a class="selected" href="/game/sh11x5/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面</a>
			|
			<a href="/game/sh11x5/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">单号</a>
			|
			<a href="/game/sh11x5/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">连码</a>
			|
			<a href="/game/sh11x5/zx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">直选</a>
		</div>
		<div id="cate_menus_106" class="hide cate_menu"><!--巴西11选5-->
			<a class="selected" href="/game/bx11x5/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面</a>
			|
			<a href="/game/bx11x5/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">单号</a>
			|
			<a href="/game/bx11x5/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">连码</a>
			|
			<a href="/game/bx11x5/zx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">直选</a>
		</div>
		<div id="cate_menus_118" class="hide cate_menu"><!--安徽11选5-->
			<a class="selected" href="/game/ah11x5/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">两面</a>
			|
			<a href="/game/ah11x5/sol.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">单号</a>
			|
			<a href="/game/ah11x5/lm.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">连码</a>
			|
			<a href="/game/ah11x5/zx.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">直选</a>
		</div>
		<div id="cate_menus_114" class="hide cate_menu"><!--广西快3-->
			<a class="selected" href="/game/gxk3/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">大小骰宝</a>
		</div>
		<div id="cate_menus_115" class="hide cate_menu"><!--安徽快3-->
			<a class="selected" href="/game/ahk3/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">大小骰宝</a>
		</div>
		<div id="cate_menus_116" class="hide cate_menu"><!--吉林快3-->
			<a class="selected" href="/game/jlk3/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">大小骰宝</a>
		</div>
		<div id="cate_menus_105" class="hide cate_menu"><!--东京快3-->
			<a class="selected" href="/game/djk3/index.html" onclick="HomeMenu.selCateMenuClass(this);" target="framePage" cate_id="1">大小骰宝</a>
		</div>
	</div>
	<div style="clear:both;"></div> 
</div>

<!--main-->
<div class="main clearfix">

	<!--siderbar-->
	<div class="siderbar" id="left_main">
		<div class="side_left userctrl">
                    <ul>
                        <li>
                            <div class="r-wrap r-nowrap1">账户信息</div>
                            <div class="info">
                                <div>
                                    <label>账号：</label><span id="userinfo_name">加载中</span>
                                    <script type="text/javascript">
                                    $("#userinfo_name").html(user.userName);
                                    </script>
                                </div>
                                <div>
                                    <label>帐号余额：</label><span id="userinfo_money" class="balance">加载中</span></div>
                                <div>
                                    <label>未结金额：</label><span id="userinfo_unbalancedMoney" class="betting">加载中</span>
                                    <a href="javascript:PullMsg.getLotteryData(200)" title="点击刷新消息">
                                        <img alt="点击刷新消息" src="/static/images/refresh.png" width="18" height="18" title="点击刷新消息">
                                    </a>
                                </div>
                            </div>
                        </li>
						
                       
						<li class="r-wrap r-nowrap1 trial-cls1"  style="display:none;"><a href="http://66H.com/cesu/" target="_blank">站点导航</a></li>
						<li class="r-wrap r-nowrap1 trial-cls1"  style="display:none;"><a href="javascript:;" target="_blank">APP下载<img src="img/hot.gif" alt="" /></a></li>
						<li class="r-wrap r-nowrap1 trial-cls1"  style="display:none;"><a href="javascript:;">站点资讯</a></li>
						<li class="r-wrap r-nowrap1 trial-cls1"  style="display:none;"><a href="/yhk.html" target="framePage">支付宝转账到银行卡教程</a></li>
						<li class="r-wrap r-nowrap1 trial-cls1"  style="display:none;"><a href="/dnsteach.html" target="framePage">DNS教程</a></li>
						 <li class="r-wrap r-nowrap1 trial-cls1"  style="display:none;"><a href="javascript:;">最新注单</a></li>
						
                        <li class="r-wrap trial-cls" style="display: none;">
                            <div class="nowrap2"><a href="/center/pay/index.html?v5" target="framePage">在线充值</a></div>
                            <div class="nowrap2"><a href="/center/withdraw/index.html" target="framePage">在线提款</a></div>
                        </li>
						<!--li class="r-wrap r-nowrap1 trial-cls link" style="display: none;"><a class="r-bg" href="/live/casino" target="framePage">真人娱乐</a></li-->
						<!--li class="r-wrap r-nowrap1 trial-cls link" style="display: none;"><a class="r-bg" href="javascript:;" onclick="window.open('/biapi/index.php?game=AG');">真人娱乐</a></li>
						<li class="r-wrap r-nowrap1 trial-cls link" style="display: none;"><a class="r-bg" href="javascript:;" onclick="window.open('/live/ag?gameType=A00012');">捕鱼王</a></li>
						<li class="r-wrap r-nowrap1 trial-cls link" style="display: none;"><a class="r-bg" href="/live/bbin?site=ball" target="framePage">BB体育</a></li-->
                        <li class="r-wrap r-nowrap1 trial-cls link" style="display: none;"><a class="r-bg" href="/center/user/notice.html" target="framePage">个人中心</a>
                         <img id="left_user_new_notice" src="/static/images/msg_new2.png" class="new" style="display: none;">
                        </li>
						<?php if($this->user['type']){?>
						<li class="r-wrap r-nowrap1 trial-cls link"><a class="r-bg" href="/team/memberList" target="framePage">代理中心</a></li>
						<?}?>
                        <li class="r-wrap r-nowrap1 trial-cls link" style="display: none;">
						<!--a class="r-bg" href="/cj/phpcj.php" target="framePage">每日抽奖</a-->
                            <!--a class="r-bg" href="/cj/phpcj.php"  target="framePage">抽奖活动</a-->
                            <img src="/static/images/msg_new2.png" class="new">
                        </li>
                        <li class="r-wrap r-nowrap1 trial-cls" style="display: none;">
                            <a href="javascript:;">↑↓最新注单↑↓</a>
                        </li>
                    </ul>
                </div>
		<div class="sider-col2">
            <div id="lastBets" class="side_left">
	            <ul class="bets" id="user-bet-list">
	    		 </ul>
    		 </div>
		</div>
	</div>
	<!--/siderbar-->
	
	
	<!--content-->
	<div class="content" >
		<iframe id="framePage" name="framePage" src="" width="100%" height="300px" style="border: none;bacbackground-color: #feefef" allowTransparency="true" border="0" frameborder="no" ></iframe>
	</div>
	<!--/content-->
</div>
<!--/main-->
<!--announce-box-->
	<audio src="/static/sound/du.mp3" id="duSound" style="display:none;"></audio>
<audio src="/static/sound/win.mp3" id="winSound" style="display:none;"></audio>
<audio src="/static/sound/new_msg.mp3" id="nweNoticeSound" style="display:none;"></audio>

<div class="announce">
	<h3 class="announc3-hd">公告1</h3>
    <div id="announce-list" class="announce-list">
        
    </div>
</div>

<script type="text/javascript" src="/skin/js/jquery.vticker-min.js"></script>

<!--div class="hero-lists push-prize">


	<div class="notice-icon"></div>
<div id="news-container1">
	<ul >
	<?php
		$gms = array(
			array('name' => '重庆时时彩'),
			array('name' => '重庆七星彩'),
			array('name' => '秒速时时彩'),
			array('name' => '腾讯分分彩'),
			array('name' => '七星彩'),
			array('name' => '秒速赛车'),
			array('name' => '秒速飞艇'),
			array('name' => '澳洲幸运10'),
			array('name' => '幸运飞艇'),
			array('name' => '广东11选5'),
			array('name' => '江苏快3'),
			array('name' => '北京快乐8'),
			array('name' => '广东快乐十分'),
			array('name' => 'PC蛋蛋'),
			array('name' => '北京PK10'),
			array('name' => '重庆幸运农场'),
			array('name' => '腾讯分分彩'),
			array('name' => '瑞士1.5分彩'),
			array('name' => '丹麦3分彩'),
			array('name' => '澳洲幸运5'),
			array('name' => '澳门时时彩'),
			array('name' => '乐彩pk10'),
			array('name' => '极速飞艇'),
			array('name' => '巴西11选5'),
			array('name' => '东京快3'),
			array('name' => '越南幸运农场'),
			array('name' => '澳洲幸运20'),
			array('name' => '泰国28'),
			array('name' => '天津时时彩'),
			array('name' => '新疆时时彩'),
			array('name' => '云南时时彩'),
			array('name' => '上海11选5'),
			array('name' => '安徽11选5'),
			array('name' => '广西快3'),
			array('name' => '安徽快3'),
			array('name' => '吉林快3'),
			array('name' => '台湾宾果'),
			
		);
		$chars = 'abcdefghijklmnpqrstuvwxyz0123456789';
		for($i = 0; $i < 20; $i++) {
			
			$u_name = '';
			$u_name1 = '';
			for($j = 0; $j < 2; $j++) {
				$u_name .= $chars[mt_rand(0, strlen($chars) - 1)];
			}
			for($j = 0; $j < 1; $j++) {
				$u_name1 .= $chars[mt_rand(0, strlen($chars) - 1)];
			}
			$n = mt_rand(0, 4);
			$m = mt_rand(500, 15000);
	?>
	<li><i></i>恭喜<span> <?=$u_name?>***<?=$u_name1?> </span>在<span>【<?=$gms[$n]['name']?>】</span>中奖<b><?=$m?></b>元</li>
	<?php } ?>
	
	
	
	
	
	</ul>
	</div>
	</div-->
	

<script type="text/javascript">
$(function(){
        $('#news-container1').vTicker({
		speed: 700,
		pause: 4000,
		animation: 'fade',
		mousePause: false,
		showItems: 1
	});
});
</script>
<!--/announce-->
</div>

<div  id="win_bet" class="hide" style="width: 430px; margin: 10px;">
	<div style="max-height: 280px; overflow-y:auto; margin-bottom: 10px">
		<table class="u-table10" > 
		  <thead> 
		   <tr> 
			<th style="width: 60%;">号码</th> 
			<th style="width: 15%">赔率</th> 
			<th style="width: 15%">金额</th> 
			<th style="width: 10%">确认</th> 
		   </tr> 
		  </thead> 
		  <tbody> 
		  </tbody> 
		 </table>
	 </div>
	 <div class="bet-bottom"><span class="bcount">组数：<b class="bcountVal">0</b></span><span class="btotal">总金额：<b class="btotalVal">0</b></span></div>
 </div>

	<div  id="user_msg_list" class="pop-tips hide">
		<h3 class="pop-tips-hd" id="user_msg_title"></h3>
		<div class="pop-tips-bd" id="user_msg_dev">
			<ul id="user_msg_content" class="mb10">
			</ul>
		</div>
		<a href="javascript:UserBet.closeUserMsgWiondow()" class="btn-pop-close">&times;</a>
	</div>
	<!--/右下角弹窗-->
<script type="text/javascript" src="/lts/js/index.js"></script>
<link rel="stylesheet" type="text/css"  href="/lts/css/index.css"/>

<!--div class="qq-client">
    <a href="javascript:void(0);" class="qq-client-open"><img src="/lts/images/chat_float_blue.png" height="100px" /></a>
</div-->
<script type="text/javascript" src="https://users.js.51.sn.cn/19770267.js"></script>
<div class="qq-client-content" style="background-image: url(../../lts/images/guide_bg.png)">
<table width="100%" border="0" cellspacing="0" height="100%" bgcolor="#2161B3" style="margin-left:10px;">
 <tr><td height="36px"></td></tr>
 
  <tr>
    <td valign="top" height="30px" >
	<div style="display:inline;line-height:24px;height:auto;word-break:break-all;word-wrap : break-word ;">
	<img src="/lts/images/top_lts.png" />

    <span class="qq-client-close"><img align="right" src="/lts/images/top_guanbi.png" /></span>
  </div>
</td>

</tr>
 <tr>
<td valign="top">

<iframe id="mainIframe" name="mainIframe" src="http://chat.hlc998.com" frameborder="0" scrolling="auto" height="100%"></iframe>
</td>
  </tr>
</table>



</div>
	<!-- 代码部分end -->	
	
	
	
<!--script>
	$(function(){
		changeSkin('nblue');
	});
	function hideTop(){
		if($('.header_box').css('display')=="none"){
			$('.header_box').show(400);
			$('.spritearrow').css('background-position','0 -38px');
		}else{
			$('.header_box').hide(400);
			$('.spritearrow').css('background-position','0 0');
		}
	}
	var iframe = document.createElement("framePage");
	iframe.onload=function(){
	//	$('.u-table2 thread tr:nth-child(1) th').css("color","#fff");
	}
</script-->
<div class="mask" id="mask"></div>
<?php $this->display('head.php');?>
</body>
</html>
