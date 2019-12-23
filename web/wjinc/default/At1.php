<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <title> <?=$this->settings['webName']?></title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <link rel="stylesheet" href="css/core.css">
	<link href="css1/css.css" rel="stylesheet">
    <script type="text/javascript"> 
    var url = '/api/checkwh.do?t='+Math.random();
    document.write("<script type='text/javascript' src='"+url+"'><\/script>");
    document.close();
</script>
</head>

<body>
    <!-- header -->
<div class="header">
    <div class="inner clearfix">
        <div class="logo fl">
              <embed src="img/logo.swf" quality="high" pluginspage="https://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="247" height="113" wmode="transparent">
        </div>
        <ul class="nav fr" id="nav">
             <li><a href="/">网站首页</a></li>
            <li><a href="reg">立即注册</a></li>
			<li><a href="appdownload.html" target="_blank">APP下载</a></li>
			<li><a href="at2">常见问题</a></li>
            <li><a href="at1">最新优惠</a><span class="hot"><img src="img/hot.png" alt="" /></span></li>
            <li><a href="at2">存款取款</a></li>
            <li><a href="javascript:;" onclick="window.open('http://api.pop800.com/chat/230861');" target="_blank">加盟代理</a></li>
			<li><a href="javascript:Get_Api_Log('about.html','650px','500px','')">关于我们</a></li>
        </ul>
		<div class="gonggao" id="noticeDom">
			<strong style="color:#333;"><marquee id="noticeDiv" direction="left" scrollamount="4" onMouseOver="this.stop()" onMouseOut="this.start()" style="color:#333;"><?=$this->settings['webName']?>
				</strong>
				—国内知名博彩平台！至今会员5万余人’拥有港澳台百位股东强力加盟并巨资打造，集广东番摊，百家乐，龙虎斗,北京赛车、重庆时时彩、秒速时时彩，11选5以及快三等几十种彩票游戏于一体的现金网娱乐平台、是目前市面上存玩法齐全最全面的现金娱乐平台,多年的运营信誉口碑与服务已获得了众多广大彩民的喜爱！公司将搭乘“诚信为本，合作共赢”的经营理念，利景网在您的选择下成为国内领先的互联网信誉彩票平台。
</marquee></strong>
				</div>
    </div>
</div>
<!-- header end-->

   <div class="banner">
        <div class="inner">
            <img src="img/ban3.jpg" alt="" />
        </div>
    </div>
    <div class="actibox">
        <div class="acti-nav" id="actiNav">
            <a href="javascript:void(0);" data-type="0" class="on">全部</a>
            <a href="javascript:void(0);" data-type="1">活动</a>
            <a href="javascript:void(0);" data-type="2">存提款</a>
            <a href="javascript:void(0);" data-type="3">彩票</a>
            <a href="javascript:void(0);" data-type="4">其他</a>
        </div>
        <div class="acti-list" id="actiList">
            <div class="bottom-dot"></div>
            <div class="list-wrap clearfix">
                <ul>
                    <li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year">2018</div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/banner10.jpg">
								</div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>活动详情</h3>
                                    <p><h3 style="padding-top: 20px;">即刻起使用【银行卡入款，支付宝微信转账】方式充值的客户，笔笔赠送1.0%，入款优惠秒到账。<h3></p>
									<p><h3 style="padding-top: 20px;">例：充值10000元实际到账10100元。<h3></p>
                                    
                                    
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>充值要求</h3>
                                    <p><h3 style="padding-top: 20px;">1.单笔充值100元以上即可获赠1.0%存款优惠；<h3></p>
                                    <p><h3 style="padding-top: 20px;">2.每次存款必须进入利景彩票获取最新的收款账号。<h3></p>
                                    <p><h3 style="padding-top: 20px;">3.如存入平台已经停止使用的银行卡账号，造成的损失会员自己承担。<h3></p>
                                    <p><h3 style="padding-top: 20px;">4.如利用平台优惠进行套利，平台有权冻结其会员账户下的所有资金。<h3></p>
                                    <p><h3 style="padding-top: 20px;">5.利景彩票网保留所有权利在任何时候可以更改、停止、取消优惠活动并不会做出任何书面解释；<h3></p>
                                </div>
                                <div class="topic_content_img"><img src="img/activity/txt.jpg" style="margin: 0 auto" /></div>
                            </div>
                        </div>
                    </li>
                            <!--/div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                     <img src="img/activity/hdxq10.jpg" />
                                </div>
                            </div>
                        </div>
                    </li-->
                    <!--li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year">2018</div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/banner9.jpg">
							</div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>活动时间</h3>
                                    <p><h3 style="padding-top: 20px;">9月25日至10月7日</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>活动详情</h3>
                                    <table class="table" border="1">
                                        <tbody>
                                            <tr>
                                                <th class="icon">累积存款金额</th>
                                                <th class="icon">祝福礼金</th>
                                                <th class="icon">祝福您</th>
												<th class="icon">流水限制</th>
                                            </tr>
                                            <tr>
                                                <td class="red">8888</td>
                                                <td class="red">58</td>
                                                <td class="red">佳节快乐</td>
												 <td></td>
                                            </tr>
											<tr>
                                                <td class="red">88888</td>
                                                <td class="red">188</td>
                                                <td class="red">合家团圆</td>
												<td></td>
                                            </tr>
											<tr>
                                                <td class="red">288888</td>
                                                <td class="red">588</td>
                                                <td class="red">事事顺心</td>
												<td></td>
                                            </tr>
											<tr>
                                                <td class="red">588888</td>
                                                <td class="red">888</td>
                                                <td class="red">步步高登</td>
												<td></td>
                                            </tr>
											<tr>
                                                <td class="red">888888</td>
                                                <td class="red">1888</td>
                                                <td class="red">节节高升</td>
												<td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>申请方式</h3>
                                    <p><h3 style="padding-top: 20px;">达到以上活动要求的会员请于2018年10月8日00：00至24：00之间联系我司官方在线客服进行申请，逾期未申请视为会员自动放弃本优惠申请资格</p>
                          
                                </div>
                                
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>活动须知</h3>
                                    <p><h3 style="padding-top: 20px;">1、所有优惠以人民币（CNY）为结算金额，以北京时间（UTC）为计时区间。</p>
                                    <p><h3 style="padding-top: 20px;">2、参与此优惠活动，即表示您同意《优惠规则与条款》</p>
                                    <p><h3 style="padding-top: 20px;">3、此优惠活动只适用于同一位，同一台计算机，同一个住址和IP地址，若会员有重复申请账号行为，公司将收回会员优惠彩金的权利。</p>
                                    <p><h3 style="padding-top: 20px;">4、利景娱乐所有优惠为玩家而设，如发现任何团体或个人，以不诚实方式套取红利或任何威胁，滥用公司优惠等行为公司将有权取消或冻结账户和账户余额。</p>
                                    <p><h3 style="padding-top: 20px;">5、利景娱乐将保留对活动的最终解释权，以及在无通知的情况下进行修改，终止活动权利。</p>
                                </div>
                                <div class="topic_content_img"><img src="img/activity/txt.jpg" style="margin: 0 auto" /></div>
                            </div>
                        </div>
                    </li-->	
                            <!--/div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                     <img src="img/activity/hdxq.jpg" />
                                </div>
                            </div>
                        </div>
                    </li-->
                    <li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year">2018</div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/banner7.jpg">
                            </div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                     <h3 class="red" style="font-weight: bold;font-size: 16px;">备注：微信转银行卡的手续费用全部由官方6利景平台支付谢谢！</h3>
                                     <img src="img/activity/wsbj.jpg" /> <img src="img/activity/zfbj.jpg" /> 
                                </div>
                                <div class="topic_content_img"><img src="img/activity/txt.jpg" style="margin: 0 auto" /></div>
                            </div>
                        </div>
                    </li>
                    <li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year">2018</div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/banner.jpg">
                            </div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>活动详情</h3>
                                    <p class="red">欢迎光临利景，加入利景，天天添彩添财！</p>
                                    <p class="red">利景拥有最强大的资金和技术支持，誉享全球。</p>
                                    <p class="red">打造全球最有公信力，最受玩家欢迎的在线彩票娱乐平台。公司在不断更新各种彩票种类，让客户获得更多的购彩体验，同时在网络安全、隐私保护、客户资料以及来往记录做出保护</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>诚信为本</h3>
                                    <p><h3 style="padding-top: 20px;">作为专业的彩票娱乐运营商，我们承诺，为每一位客户提供最安全、最公平的购彩娱乐，以及全方位的服务。利景所有线上彩种共同的优点：提供手机APP下载、结合PC端及WAP端，突破空间与时间的束缚，全天24小时体验购彩的乐趣，游戏结果公平、公正、公开！全球彩民都赞不绝口！</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 style=" font-size:24px; color:#6c0822 ; font-weight: bold;">我们为客户提供最专业的娱乐服务：</h3>
                                    <p><h3 style="padding-top: 20px;">1、365天x24小时专业的客户服务，全天候处理会员出入款的相关事宜，严格训练的客户团队，以专业、亲切的态度解答，让每位玩家有宾至如归的感觉！</p>
                                    <p><h3 style="padding-top: 20px;">2、多渠道的与客户的互动交流，了解客户的需求，随时关注客户的意见及建议；</p>
                                    <p><h3 style="padding-top: 20px;">3、举办更多的优惠及促销活动，给客户提供更多的回馈及惊喜。</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>游戏责任</h3>
                                    <p><h3 style="padding-top: 20px;">1、利景彩票网提倡有节制的购彩，我们建议阁下遵守以下一些基本规则：</p>
                                    <p><h3 style="padding-top: 20px;">2、禁止未满18岁的人士参与购彩娱乐，在加入购彩之前，请您确定您已年满18周岁，</p>
                                    <p><h3 style="padding-top: 20px;">3自觉遵守当地法律法规，利景不提倡违规参与购彩娱乐。</p>
                                    <p><h3 style="padding-top: 20px;">4、自定购彩预算，并按预算下注，不沉溺彩票娱乐。</p>
                                    <p><h3 style="padding-top: 20px;">5、品牌信誉，就选利景，享有极高的信誉，最好的服务和全球客户共同赞誉的口碑，绝对是玩家最明智的选择！</p>
                                </div>
                                <div class="topic_content_img"><img src="img/activity/txt.jpg" style="margin: 0 auto" /></div>
                            </div>
                        </div>
                    </li>
                    <li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year">2018</div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/banner2.jpg">
                            </div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>活动详情</h3>
                                    <p><h3 style="padding-top: 20px;">加入利景，下载手机APP注册账号成为利景彩票会员，绑定银行卡账号后，无需申请，系统随机派送18元彩金，彩金盈利达到100元即可出款，使用手机APP购彩更方便，让彩民享受随时随地购彩的乐趣。</p>
                                    <p class="red">备注：*此活动无需申请，彩金系统随机进行派送。*</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>下载手机App即送18元彩金活动流程</h3>
                                    <p><h3 style="padding-top: 20px;">1、使用手机扫描首页二维码下载APP，注册会员账号成为利景的会员。</p>
                                    <p><h3 style="padding-top: 20px;">2、登陆会员账号，点击提款绑定银行卡账号，彩金由系统随机派送18元彩金。</p>
                                    <p><h3 style="padding-top: 20px;">3、彩金派送标准：会员需IP地址+银行卡归属必须一致。</p>
                                    <p><h3 style="padding-top: 20px;">4、会员注册信息须真实有效，18元彩金的用户首次提现不能更换任何会员资料信息。</p>
                                    <p><h3 style="padding-top: 20px;">5、18元彩金只需获利100元即可申请提现（注：六合彩投资盈利不计算在内）。</p>
                                    <p><h3 style="padding-top: 20px;">6、注册会员账号完成绑定银行卡后，如30分钟内未收到彩金，即视为您不符合赠送标准。</p>
                                    <p><h3 style="padding-top: 20px;">7、此活动不与其他优惠活动共享。</p>
                                    <p class="red">参与本活动均需遵守利景活动规则，利景保留对所有活动的最终解释权，并具有在无需通知的情况下随时修改及终止活动的权利。</p>
                                </div>
                                <div class="topic_content_img"><img style="margin: 0 auto" src="img/activity/txt.jpg"></div>
                            </div>
                        </div>
                    </li>
                    <li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year">2018</div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/banner3.jpg">
                            </div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>活动详情</h3>
                                    <p><h3 style="padding-top: 20px;">加入VIP让您真正感受来自利景娱乐的关怀，独树一帜的风格，贴心的服务，在这里您将享受到与众不同的全新博彩体验！<h3></p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>VIP会员申请资格</h3>
                                    <table class="table" border="1">
                                        <tbody>
                                            <tr>
                                                <th>黄金VIP</th>
                                                <th>白金VIP</th>
                                                <th>钻石VIP</th>
                                            </tr>
                                            <tr>
                                                <td class="red">50万</td>
                                                <td class="red">100万</td>
                                                <td class="red">200万</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>VIP会员保级资格</h3>
                                    <table class="table" border="1">
                                        <tbody>
                                            <tr>
                                                <td class="bt">保级要求</td>
                                                <td>黄金VIP</td>
                                                <td>白金VIP</td>
                                                <td>钻石VIP</td>
                                            </tr>
                                            <tr>
                                                <td class="bt">存款金额</td>
                                                <td class="red">30万/月</td>
                                                <td class="red">80万/月</td>
                                                <td class="red">150万/月</td>
                                            </tr>
                                            <tr>
                                                <td class="bt">交易量</td>
                                                <td class="red">500万/月</td>
                                                <td class="red">1000万/月</td>
                                                <td class="red">1500万/月</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>尊享VIP超级特权</h3>
                                    <p><h3 style="padding-top: 20px;">1、VIP会员出入款有专门通道：无需排队，优先出款，更方便，便捷！</p>
                                    <p><h3 style="padding-top: 20px;">2、任何会员在晋级VIP会员后都可以获得由利景发放的晋级奖金，最高可达¥3888元！</p>
                                    <p><h3 style="padding-top: 20px;">3、VIP会员生日，最高可获得¥3888元生日礼金，祝您节节升高。</p>
                                    <p><h3 style="padding-top: 20px;">4、VIP会员取款享受绿色通道，当日取款次数、金额无上限，0手续费。</p>
                                    <p><h3 style="padding-top: 20px;">5、钻石VIP/白金VIP/黄金VIP会员每月最多可推荐1名利景娱乐普通会员无条件晋级成为黄金VIP</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>晋级VIP会员要求</h3>
                                    <table class="table" border="1">
                                        <tbody>
                                            <tr>
                                                <td class="bt">利景娱乐</td>
                                                <td>黄金VIP</td>
                                                <td>白金VIP</td>
                                                <td>钻石VIP</td>
                                            </tr>
                                            <tr>
                                                <td class="bt">晋级奖金</td>
                                                <td class="red">888元</td>
                                                <td class="red">1888元</td>
                                                <td class="red">3888元</td>
                                            </tr>
                                            <tr>
                                                <td class="bt">生日礼金</td>
                                                <td class="red">888元</td>
                                                <td class="red">1888元</td>
                                                <td class="red">3888元</td>
                                            </tr>
                                            <tr>
                                                <td class="bt">单日取款额度</td>
                                                <td>天天无上限</td>
                                                <td>天天无上限</td>
                                                <td>天天无上限</td>
                                            </tr>
                                            <tr>
                                                <td class="bt">独立存取款服务</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                            </tr>
                                            <tr>
                                                <td class="bt">VIP专席服务</td>
                                                <td></td>
                                                <td>√</td>
                                                <td>√</td>
                                            </tr>
                                            <tr>
                                                <td class="bt">专属私人专用域名</td>
                                                <td></td>
                                                <td>√</td>
                                                <td>√</td>
                                            </tr>
                                            <tr>
                                                <td class="bt">无条件保送黄金vip</td>
                                                <td></td>
                                                <td></td>
                                                <td>一名普通会员</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>尊享VIP超级特权</h3>
                                    <p><h3 style="padding-top: 20px;">1到达VIP会员要求联系（24小时在线客服）咨询申请方式！</p>
                                    <p><h3 style="padding-top: 20px;">申请利景VIP会员 申请内容：</p>
                                    <p><h3 style="padding-top: 20px;">会员账号：*****</p>
                                    <p><h3 style="padding-top: 20px;">姓名：***</p>
                                    <p><h3 style="padding-top: 20px;">联系手机：***********</p>
                                    <p><h3 style="padding-top: 20px;">生日日期：**********以及您的身份正反面照片</p>
                                    <p><h3 style="padding-top: 20px;">经公司VIP部门审核通过荣升VIP，公司VIP专席人员将以邮箱或电话与您取得联系</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>尊享VIP超级特权</h3>
                                    <p><h3 style="padding-top: 20px;">1、所有优惠以人民币（CNY）为结算金额，以北京时间（UTC）为计时区间。</p>
                                    <p><h3 style="padding-top: 20px;">2、参与此优惠活动，即表示您同意《优惠规则与条款》</p>
                                    <p><h3 style="padding-top: 20px;">3、此优惠活动只适用于同一位，同一台计算机，同一个住址和IP地址，若会员有重复申请账号行为，公司将收回会员优惠彩金的权利。</p>
                                    <p><h3 style="padding-top: 20px;">4、利景娱乐所有优惠为玩家而设，如发现任何团体或个人，以不诚实方式套取红利或任何威胁，滥用公司优惠等行为公司将有权取消或冻结账户和账户余额。</p>
                                    <p><h3 style="padding-top: 20px;">5、利景娱乐将保留对活动的最终解释权，以及在无通知的情况下进行修改，终止活动权利。</p>
                                </div>
                                <div class="topic_content_img"><img src="img/activity/txt.jpg" style="margin: 0 auto" /></div>
                            </div>
                        </div>
                    </li>
                    <li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year">2018</div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/banner4.jpg">
                            </div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>公司简介</h3>
                                    <p><h3 style="padding-top: 20px;">利景注册于菲律宾首都马尼拉，拥有（cagayan Econmic Zone Authority）利景彩票与赌场公司执照，利景是业界最具规模，最具品牌实力，最值得信赖的线上投注平台之一，提供多元素化的产品以及在线赌场游戏，汇聚来自五湖四海的玩家，作为大型现金网投平台，我们致力为玩家提供最公正的娱乐环境，最优质的服务体验，同时确保我们的客户可以在一个最保密、最安全的网络游戏空间尽情玩乐，利景希望所有的客户能够在一个安全愉快的环境中，享受公司精心设计的场频，服务和优惠，并能够从中获利！</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>品牌优势</h3>
                                    <p><h3 style="padding-top: 20px;">利景全场最低投注1元，满100元随意提款，且入款100%贴心回馈，全面开通（微信支付、支付宝、财付通）存/取款0-3分钟火速到账，24小时提取0审核0冻结手续费，不限提款次数。利景的优惠活动将长期持续不间断更新上线，真诚欢迎您的加入！</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>客户服务</h3>
                                    <p><h3 style="padding-top: 20px;">利景有庞大的客服服务团队，秉承“客户至上”的服务理念，为所有玩家提供7x24小时客服服务，当您有任何疑问，意见都可以随时与我们联系，我们将竭诚为您服务，以专业，亲切的态度，让每一位玩家有宾至如归的感觉多渠道与客户交流，准确了解客户需求，并随时关注客户的意见与建议</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>存取款服务</h3>
                                    <p><h3 style="padding-top: 20px;">利景有专业的财务团队，全年无休7x24小时不间断处理会员的取款项，为玩家提供多种存款方式，并与众多企业，银行达成合作协议，保证每一笔存/取款高效、准确的到达玩家账户，集团雄厚资金实力让客户提款无忧，随时随地尽享博彩乐趣。</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>优惠策划</h3>
                                    <p><h3 style="padding-top: 20px;">利景成立至今，策划团队不断壮大，我们一直以“为客户提供最大让利”注册坐拥独特会员账号价值，为优惠宗旨，让每一位玩家都能在体验游戏的过程中享有更多额外的给力优惠！我们将为所有注册的会员创造更多的价值，就算你不曾存款过，都可能获得公司送出的优惠彩金。</p>
                                </div>
                                <div class="topic_content_img"><img src="img/activity/txt.jpg" style="margin: 0 auto" /></div>
                            </div>
                        </div>
                    </li>
                    <!--li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year">2018</div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/banner5.jpg">
                            </div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>活动详情</h3>
                                    <p><h3 style="padding-top: 20px;">每日首存送彩金</p>
                                    <table class="table" border="1">
                                        <tbody>
                                            <tr>
                                                <th>1000</th>
                                                <th>3000</th>
                                                <th>5000</th>
                                                <th>10000+</th>
                                                <th>50000+</th>
                                            </tr>
                                            <tr>
                                                <td class="red">18元</td>
                                                <td class="red">58元</td>
                                                <td class="red">98元</td>
                                                <td class="red">198元</td>
                                                <td class="red">398元</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="red">备注：当天首次单笔充值*</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>申请步骤</h3>
                                    <p><h3 style="padding-top: 20px;">充值成功后请在未下注前联系客服或客服微信进行申请(存款+彩金只需一倍流水即可出款）</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>活动规则</h3>
                                    <p><h3 style="padding-top: 20px;">1.本次优惠活动即日起生效，优惠活动适用于利景彩票网全体会员；</p>
                                    <p><h3 style="padding-top: 20px;">2.每日首存即可参加。</p>
                                    <p><h3 style="padding-top: 20px;">3.所有会员只能拥有一个帐号申请该优惠，同一个IP，同一存/提款卡视为同一客户。如果发现同一个人拥有两个或以上的帐号，重复的帐号将被冻结，每IP地址只能申请一次；</p>
                                    <p><h3 style="padding-top: 20px;">4.此活动不与新会员首冲优惠同时进行享用；</p>
                                    <p><h3 style="padding-top: 20px;">5.利景彩票网保留所有权利在任何时候可以更改、停止、取消优惠活动并不会做出任何书面解释；</p>
                                </div>
                                <div class="topic_content_img"><img src="img/activity/txt.jpg" style="margin: 0 auto" /></div>
                            </div>
                        </div>
                    </li-->
                    <li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year">2018</div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/banner6.jpg">
                            </div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>活动对象：利景所有新注册会员</h3>
                                    <p><h3 style="padding-top: 20px;">活动内容：利景新会员注册绑卡首次充值即可享受彩金回馈。</p>
                                    <table class="table" border="1">
                                        <tbody>
                                            <tr>
                                                <th>首存金额</th>
                                                <th>赠送金额</th>
                                                <th>流水要求（首存+彩金）</th>
                                            </tr>
                                            <tr>
                                                <td>100元</td>
                                                <td class="red">18元</td>
                                                <td>1倍</td>
                                            </tr>
                                            <tr>
                                                <td>500元</td>
                                                <td class="red">38元</td>
                                                <td>1倍</td>
                                            </tr>
                                            <tr>
                                                <td>1000元</td>
                                                <td class="red">68元</td>
                                                <td>1倍</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>申请步骤</h3>
                                    <p><h3 style="padding-top: 20px;">成功入款以后需要在未投注前联系在线客服或维护专员提供会员账号、存款金额即可领取该活动回馈！</p>
                                    <p><h3 style="padding-top: 20px;">存款+彩金只需一倍流水即可出款！</p>
                                </div>
                                <div class="topic_content_txt">
                                    <h3 class="topic_content_title"><i class="icon"></i>活动规则</h3>
                                    <p><h3 style="padding-top: 20px;">1、本优惠活动即日起生效，优惠活动适用于利景所有会员。</p>
                                    <p><h3 style="padding-top: 20px;">2、所有会员只能拥有一个会员账号，同IP用一存/提款卡视为同一客户，如果发现同一个会员拥有两个或以上的账号，重复账号将会被冻结。</p>
                                    <p><h3 style="padding-top: 20px;">3、此活动可以与其它优惠同时参与</p>
                                    <p><h3 style="padding-top: 20px;">4、利景保留所有权利在任何时候可以更改、停止、取消优惠活动并不做出任何书面解释.</p>
                                </div>
                                <div class="topic_content_img"><img src="img/activity/txt.jpg" style="margin: 0 auto" /></div>
                            </div>
                        </div>
                    </li>
					<li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year">2018</div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/banner8.jpg">
                            </div>
                            <div class="content hide" style="padding-top: 15px;">
                                <div class="topic_content_txt">
                                    <div class="topic_content_txt">
										<h3 class="red" style="font-weight:bold; font-size: 18px; text-align: center; padding-bottom: 10px" >喜从天降利景彩票特设神秘彩金祝您好运连连</h3>
										<p><h3 style="padding-top: 20px;">为感谢新老会员的厚爱，利景彩票将于每月不定期派发神秘彩金给随机抽取的会员。</p>
										<p><h3 style="padding-top: 20px;">本活动没有优惠门槛，没有参加限制，没有奖金上限，只要您是利景彩票的会员，有进行取款操作，就有机会获得意外惊喜，所获彩金直接存入会员账号绑定的银行卡号内，祝您红红火火，好运连连！</p>
									</div>
									<div class="topic_content_txt">
										<h3 class="topic_content_title"><i class="icon"></i>活动条款</h3>
										<p><h3 style="padding-top: 20px;">1、无需申请，系统自动派发，彩金直接存入会员账号绑定的银行卡号内。</p>
										<p><h3 style="padding-top: 20px;">2、利景彩票保留在任何终止或修改本活动规则及内容，最终解释权归利景彩票所有。</p>
									</div>
									<div class="topic_content_img"><img src="img/activity/txt.jpg"/></div>

                            </div>
                        </div>
                    </li>
                    <!--li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year">2018</div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/bank.jpg">
                            </div>
                    </li>
                    <!--li data-type="1" class="clearfix">
                        <div class="leftbox">
                            <div class="year"></div>
                            <div class="month"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="rightbox">
                            <div class="arrow"></div>
                            <div class="pic">
                                <img src="img/activity/reg.jpg" width="100%" alt="" />
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
    </div>
    <!-- footer -->
<div class="footer">
    ©2013-2018 <?=$this->settings['webName']?>版权所有All Rights Reserved.
</div>
<!-- footer end-->

   

<script src="js/home_main.min.js"></script>

        <script type="text/javascript" src="/static/lib/layer/layer.js"></script>
        <script type="text/javascript" src="js1/core.js"></script>

<script src="/conf/config.js"></script>
<script src="js/home_main.min.js"></script>

    <script src="/static/lib/float.min.js"></script>
    <script src="js/core.js"></script>
</body>

</html>