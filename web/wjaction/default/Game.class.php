<?php
class Game extends WebLoginBase{
	
	public final function getServerDatado(){
		$this->display('game/getServerData.php');
	}
	
	public final function statbetList(){
		$this->display('game/stat/betList.php');
	}
	
	public final function statstatTotalBet(){
		$this->display('game/stat/statTotalBet.php');
	}

	public final function statstatBet(){
		$this->display('game/stat/statBet.php');
	}
	
	public final function includeuser_bet_info(){
		$this->display('game/include/user_bet_info.php');
	}
	
	public final function includegame_rule(){
		$this->display('game/include/game_rule.php');
	}

	public final function getLotteryDatado(){
		$this->display('game/getLotteryData.php');
	}
	
	public final function getUserMsgdo(){
		$this->display('game/getUserMsg.php');
	}
	
	public final function getHistorydo(){
		$this->display('game/getHistory.php');
	}
	//秒速牛PK10
	public final function nn(){
		$this->display('game/nn/index.php');
	}
	public final function nnhistory(){
		$this->display('game/nn/history.php');
	}
	//竞猜
	public final function zq(){
		$this->display('game/zq/index.php');
	}
	public final function zqjchistory(){
		$this->display('game/zqjc/history.php');
	}
	//秒速牛PK10
	public final function pk10nn(){
		$this->display('game/PK10nn/index.php');
	}
	public final function pk10nnhistory(){
		$this->display('game/pk10nn/history.php');
	}
		public final function mspk10(){
		$this->display('game/mspk10/index.php');
	}
	/*秒速赛车*/
	public final function mspk10sol(){
		$this->display('game/mspk10/sol.php');
	}
	
	public final function mspk10com(){
		$this->display('game/mspk10/com.php');
	}
	public final function mspk10fantan(){//番滩
		$this->display('game/mspk10/fantan.php');
	}		
	public final function mspk10history(){
		$this->display('game/mspk10/history.php');
	}
	/*极速赛车*/
	public final function lcpk10(){
		$this->display('game/lcpk10/index.php');
	}
	
	public final function lcpk10sol(){
		$this->display('game/lcpk10/sol.php');
	}
	
	public final function lcpk10com(){
		$this->display('game/lcpk10/com.php');
	}
	public final function lcpk10fantan(){//番滩
		$this->display('game/lcpk10/fantan.php');
	}		
	public final function lcpk10history(){
		$this->display('game/lcpk10/history.php');
	}
	//秒速飞艇
	public final function msft(){
		$this->display('game/msft/index.php');
	}
	
	public final function msftsol(){
		$this->display('game/msft/sol.php');
	}
	public final function msftcom(){
		$this->display('game/msft/com.php');
	}
	public final function msftfantan(){//番滩
		$this->display('game/msft/fantan.php');
	}	
	public final function msfthistory(){
		$this->display('game/msft/history.php');
	}
	/*秒速时时彩*/
	public final function msssc(){
		$this->display('game/msssc/index.php');
	}
	public final function mssscsol(){
		$this->display('game/msssc/sol.php');
	}
	public final function msssclonghu(){
		$this->display('game/msssc/longhu.php');
	}
	public final function mssscfantan(){//番滩
		$this->display('game/msssc/fantan.php');
	}	
	public final function mssscqipai(){//棋牌
		$this->display('game/msssc/qipai.php');
	}	
	public final function mssschistory(){
		$this->display('game/msssc/history.php');
	}
	/*七星彩*/
	public final function qxc(){
		$this->display('game/qxc/index.php');
	}
	public final function qxcsol(){
		$this->display('game/qxc/sol.php');
	}
	public final function qxclonghu(){
		$this->display('game/qxc/longhu.php');
	}	
	public final function qxcfantan(){//番滩
		$this->display('game/qxc/fantan.php');
	}	
	public final function qxcqipai(){//棋牌
		$this->display('game/qxc/qipai.php');
	}			
	public final function qxchistory(){
		$this->display('game/qxc/history.php');
	}
	/*重庆七星彩*/
	public final function cqqxc(){
		$this->display('game/cqqxc/index.php');
	}
	public final function cqqxcsol(){
		$this->display('game/cqqxc/sol.php');
	}
	public final function cqqxclonghu(){
		$this->display('game/cqqxc/longhu.php');
	}
	public final function cqqxcfantan(){//番滩
		$this->display('game/cqqxc/fantan.php');
	}	
	public final function cqqxcqipai(){//棋牌
		$this->display('game/cqqxc/qipai.php');
	}	
	public final function cqqxchistory(){
		$this->display('game/cqqxc/history.php');
	}
	/*腾训分分彩*/
	public final function txffc(){
		$this->display('game/txffc/index.php');
	}
	public final function txffcsol(){
		$this->display('game/txffc/sol.php');
	}
	public final function txffclonghu(){
		$this->display('game/txffc/longhu.php');
	}
	public final function txffcfantan(){//番滩
		$this->display('game/txffc/fantan.php');
	}	
	public final function txffcqipai(){//棋牌
		$this->display('game/txffc/qipai.php');
	}	
	public final function txffchistory(){
		$this->display('game/txffc/history.php');
	}
	//重庆时时彩
	public final function cqssc(){
		$this->display('game/cqssc/index.php');
	}
	
	public final function cqsscsol(){
		$this->display('game/cqssc/sol.php');
	}
	public final function cqssclonghu(){
		$this->display('game/cqssc/longhu.php');
	}
	public final function cqsscfantan(){//番滩
		$this->display('game/cqssc/fantan.php');
	}	
	public final function cqsscqipai(){//棋牌
		$this->display('game/cqssc/qipai.php');
	}	
	public final function cqsschistory(){
		$this->display('game/cqssc/history.php');
	}
	
	//澳门时时彩
	public final function amssc(){
		$this->display('game/amssc/index.php');
	}
	
	public final function amsscsol(){
		$this->display('game/amssc/sol.php');
	}
	public final function amssclonghu(){
		$this->display('game/amssc/longhu.php');
	}	
	public final function amsscfantan(){//番滩
		$this->display('game/amssc/fantan.php');
	}	
	public final function amsscqipai(){//棋牌
		$this->display('game/amssc/qipai.php');
	}			
	public final function amsschistory(){
		$this->display('game/amssc/history.php');
	}	
	//分分彩
	public final function jsffc(){
		$this->display('game/jsffc/index.php');
	}
	
	public final function jsffcsol(){
		$this->display('game/jsffc/sol.php');
	}
	
	public final function jsffclonghu(){
		$this->display('game/jsffc/longhu.php');
	}
	public final function jsffcfantan(){//番滩
		$this->display('game/jsffc/fantan.php');
	}	
	public final function jsffcqipai(){//棋牌
		$this->display('game/jsffc/qipai.php');
	}	
	public final function jsffchistory(){
		$this->display('game/jsffc/history.php');
	}		
	//瑞士1.5分彩
	public final function rs15(){
		$this->display('game/rs15/index.php');
	}
	
	public final function rs15sol(){
		$this->display('game/rs15/sol.php');
	}
	public final function rs15longhu(){
		$this->display('game/rs15/longhu.php');
	}	
	public final function rs15fantan(){//番滩
		$this->display('game/rs15/fantan.php');
	}		
	public final function rs15qipai(){//棋牌
		$this->display('game/rs15/qipai.php');
	}		
	public final function rs15history(){
		$this->display('game/rs15/history.php');
	}	
	//丹麦3分彩
	public final function dm3fc(){
		$this->display('game/dm3fc/index.php');
	}
	
	public final function dm3fcsol(){
		$this->display('game/dm3fc/sol.php');
	}
	public final function dm3fclonghu(){
		$this->display('game/dm3fc/longhu.php');
	}

	public final function dm3fcfantan(){//番滩
		$this->display('game/dm3fc/fantan.php');
	}
	public final function dm3fcqipai(){//棋牌
		$this->display('game/dm3fc/qipai.php');
	}		
	public final function dm3fchistory(){
		$this->display('game/dm3fc/history.php');
	}		
	//开罗5分彩
	public final function kl5fc(){
		$this->display('game/kl5fc/index.php');
	}
	
	public final function kl5fcsol(){
		$this->display('game/kl5fc/sol.php');
	}
	public final function kl5fclonghu(){
		$this->display('game/kl5fc/longhu.php');
	}	
	public final function kl5fcfantan(){//番滩
		$this->display('game/kl5fc/fantan.php');
	}
	public final function kl5fcqipai(){//棋牌
		$this->display('game/kl5fc/qipai.php');
	}		
	public final function kl5fchistory(){
		$this->display('game/kl5fc/history.php');
	}		
	//天津时时彩
	public final function tjssc(){
		$this->display('game/tjssc/index.php');
	}
	
	public final function tjsscsol(){
		$this->display('game/tjssc/sol.php');
	}
	public final function tjssclonghu(){
		$this->display('game/tjssc/longhu.php');
	}

	public final function tjsscfantan(){//番滩
		$this->display('game/tjssc/fantan.php');
	}	
	public final function tjsscqipai(){//棋牌
		$this->display('game/tjssc/qipai.php');
	}			
	public final function tjsschistory(){
		$this->display('game/tjssc/history.php');
	}	
	//新疆时时彩
	public final function xjssc(){
		$this->display('game/xjssc/index.php');
	}
	
	public final function xjsscsol(){
		$this->display('game/xjssc/sol.php');
	}
	public final function xjssclonghu(){
		$this->display('game/xjssc/longhu.php');
	}	
	public final function xjsscfantan(){//番滩
		$this->display('game/xjssc/fantan.php');
	}	
	public final function xjsscqipai(){//棋牌
		$this->display('game/xjssc/qipai.php');
	}				
	public final function xjsschistory(){
		$this->display('game/xjssc/history.php');
	}	
	//云南时时彩
	public final function ynssc(){
		$this->display('game/ynssc/index.php');
	}
	
	public final function ynsscsol(){
		$this->display('game/ynssc/sol.php');
	}
	public final function ynssclonghu(){
		$this->display('game/ynssc/longhu.php');
	}
	public final function ynsscfantan(){//番滩
		$this->display('game/ynssc/fantan.php');
	}
	public final function ynsscqipai(){//棋牌
		$this->display('game/ynssc/qipai.php');
	}		
	public final function ynsschistory(){
		$this->display('game/ynssc/history.php');
	}	
	
	//北京PK10
	public final function pk10(){
		$this->display('game/pk10/index.php');
	}
	
	public final function pk10sol(){
		$this->display('game/pk10/sol.php');
	}
	
	public final function pk10com(){
		$this->display('game/pk10/com.php');
	}
	public final function pk10fantan(){//番滩
		$this->display('game/pk10/fantan.php');
	}		
	public final function pk10history(){
		$this->display('game/pk10/history.php');
	}
	//伦敦PK10
	public final function ldpk10(){
		$this->display('game/ldpk10/index.php');
	}
	public final function ldpk10fantan(){//番滩
		$this->display('game/ldpk10/fantan.php');
	}			
	public final function ldpk10sol(){
		$this->display('game/ldpk10/sol.php');
	}
	
	public final function ldpk10com(){
		$this->display('game/ldpk10/com.php');
	}

	public final function ldpk10history(){
		$this->display('game/ldpk10/history.php');
	}
	
	
	
	//广东快乐10分
	public final function gdkl10(){
		$this->display('game/gdkl10/index.php');
	}
	
	public final function gdkl10sol(){
		$this->display('game/gdkl10/sol.php');
	}

	public final function gdkl10q1(){
		$this->display('game/gdkl10/q1.php');
	}

	public final function gdkl10q2(){
		$this->display('game/gdkl10/q2.php');
	}

	public final function gdkl10q3(){
		$this->display('game/gdkl10/q3.php');
	}

	public final function gdkl10q4(){
		$this->display('game/gdkl10/q4.php');
	}

	public final function gdkl10q5(){
		$this->display('game/gdkl10/q5.php');
	}

	public final function gdkl10q6(){
		$this->display('game/gdkl10/q6.php');
	}

	public final function gdkl10q7(){
		$this->display('game/gdkl10/q7.php');
	}

	public final function gdkl10q8(){
		$this->display('game/gdkl10/q8.php');
	}

	public final function gdkl10zm(){
		$this->display('game/gdkl10/zm.php');
	}

	public final function gdkl10lm(){
		$this->display('game/gdkl10/lm.php');
	}
	public final function gdkl10fantan(){
		$this->display('game/gdkl10/fantan.php');
	}

	public final function gdkl10history(){
		$this->display('game/gdkl10/history.php');
	}
	
	//重庆幸运农场
	public final function xync(){
		$this->display('game/xync/index.php');
	}
	
	public final function xyncsol(){
		$this->display('game/xync/sol.php');
	}
	
	public final function xyncq1(){
		$this->display('game/xync/q1.php');
	}

	public final function xyncq2(){
		$this->display('game/xync/q2.php');
	}

	public final function xyncq3(){
		$this->display('game/xync/q3.php');
	}

	public final function xyncq4(){
		$this->display('game/xync/q4.php');
	}

	public final function xyncq5(){
		$this->display('game/xync/q5.php');
	}

	public final function xyncq6(){
		$this->display('game/xync/q6.php');
	}

	public final function xyncq7(){
		$this->display('game/xync/q7.php');
	}

	public final function xyncq8(){
		$this->display('game/xync/q8.php');
	}

	public final function xynczm(){
		$this->display('game/xync/zm.php');
	}

	public final function xynclm(){
		$this->display('game/xync/lm.php');
	}
    public final function xyncfantan(){
		$this->display('game/xync/fantan.php');
	}
	public final function xynchistory(){
		$this->display('game/xync/history.php');
	}
	//越南幸运农场
	public final function ynxync(){
		$this->display('game/ynxync/index.php');
	}
	
	public final function ynxyncsol(){
		$this->display('game/ynxync/sol.php');
	}
	
	public final function ynxyncq1(){
		$this->display('game/ynxync/q1.php');
	}

	public final function ynxyncq2(){
		$this->display('game/ynxync/q2.php');
	}

	public final function ynxyncq3(){
		$this->display('game/ynxync/q3.php');
	}

	public final function ynxyncq4(){
		$this->display('game/ynxync/q4.php');
	}

	public final function ynxyncq5(){
		$this->display('game/ynxync/q5.php');
	}

	public final function ynxyncq6(){
		$this->display('game/ynxync/q6.php');
	}

	public final function ynxyncq7(){
		$this->display('game/ynxync/q7.php');
	}

	public final function ynxyncq8(){
		$this->display('game/ynxync/q8.php');
	}

	public final function ynxynczm(){
		$this->display('game/ynxync/zm.php');
	}

	public final function ynxynclm(){
		$this->display('game/ynxync/lm.php');
	}
    public final function ynxyncfantan(){
		$this->display('game/ynxync/fantan.php');
	}
	public final function ynxynchistory(){
		$this->display('game/ynxync/history.php');
	}	
	//pc蛋蛋
	public final function pcdd(){
		$this->display('game/pcdd/index.php');
	}

	public final function pcddhistory(){
		$this->display('game/pcdd/history.php');
	}
    //泰国28
	public final function tg28(){
		$this->display('game/tg28/index.php');
	}

	public final function tg28history(){
		$this->display('game/tg28/history.php');
	}
	//北京快乐8
	public final function bjkl8(){
		$this->display('game/bjkl8/index.php');
	}

	public final function bjkl8sol(){
		$this->display('game/bjkl8/sol.php');
	}

	public final function bjkl8history(){
		$this->display('game/bjkl8/history.php');
	}
	//河内快乐8
	public final function hnkl8(){
		$this->display('game/hnkl8/index.php');
	}

	public final function hnkl8sol(){
		$this->display('game/hnkl8/sol.php');
	}

	public final function hnkl8history(){
		$this->display('game/hnkl8/history.php');
	}
	//台湾宾果快乐8
	public final function twbg(){
		$this->display('game/twbg/index.php');
	}

	public final function twbgsol(){
		$this->display('game/twbg/sol.php');
	}

	public final function twbghistory(){
		$this->display('game/twbg/history.php');
	}
	
	
	//广东11选5
	public final function gd11x5(){
		$this->display('game/gd11x5/index.php');
	}
	
	public final function gd11x5sol(){
		$this->display('game/gd11x5/sol.php');
	}
	public final function gd11x5zx(){
		$this->display('game/gd11x5/zx.php');
	}

	public final function gd11x5lm(){
		$this->display('game/gd11x5/lm.php');
	}

	public final function gd11x5history(){
		$this->display('game/gd11x5/history.php');
	}
	//上海11选5
	public final function sh11x5(){
		$this->display('game/sh11x5/index.php');
	}
	
	public final function sh11x5sol(){
		$this->display('game/sh11x5/sol.php');
	}
	public final function sh11x5zx(){
		$this->display('game/sh11x5/zx.php');
	}

	public final function sh11x5lm(){
		$this->display('game/sh11x5/lm.php');
	}

	public final function sh11x5history(){
		$this->display('game/sh11x5/history.php');
	}
	//安徽11选5
	public final function ah11x5(){
		$this->display('game/ah11x5/index.php');
	}
	
	public final function ah11x5sol(){
		$this->display('game/ah11x5/sol.php');
	}
	public final function ah11x5zx(){
		$this->display('game/ah11x5/zx.php');
	}

	public final function ah11x5lm(){
		$this->display('game/ah11x5/lm.php');
	}

	public final function ah11x5history(){
		$this->display('game/ah11x5/history.php');
	}
	//巴西11选5
	public final function bx11x5(){
		$this->display('game/bx11x5/index.php');
	}
	
	public final function bx11x5sol(){
		$this->display('game/bx11x5/sol.php');
	}
	public final function bx11x5zx(){
		$this->display('game/bx11x5/zx.php');
	}

	public final function bx11x5lm(){
		$this->display('game/bx11x5/lm.php');
	}

	public final function bx11x5history(){
		$this->display('game/bx11x5/history.php');
	}
	//江苏快3
	public final function jsk3(){
		$this->display('game/jsk3/index.php');
	}
	
	public final function jsk3history(){
		$this->display('game/jsk3/history.php');
	}
	//广西快3
	public final function gxk3(){
		$this->display('game/gxk3/index.php');
	}
	
	public final function gxk3history(){
		$this->display('game/gxk3/history.php');
	}
	//安徽快3
	public final function ahk3(){
		$this->display('game/ahk3/index.php');
	}
	
	public final function ahk3history(){
		$this->display('game/ahk3/history.php');
	}
	//吉林快3
	public final function jlk3(){
		$this->display('game/jlk3/index.php');
	}
	
	public final function jlk3history(){
		$this->display('game/jlk3/history.php');
	}
	//东京快3
	public final function djk3(){
		$this->display('game/djk3/index.php');
	}
	
	public final function djk3history(){
		$this->display('game/djk3/history.php');
	}
	
	//幸运飞艇
	public final function xyft(){
		$this->display('game/xyft/index.php');
	}
	
	public final function xyftsol(){
		$this->display('game/xyft/sol.php');
	}
	public final function xyftcom(){
		$this->display('game/xyft/com.php');
	}
	public final function xyftfantan(){//番滩
		$this->display('game/xyft/fantan.php');
	}	
	public final function xyfthistory(){
		$this->display('game/xyft/history.php');
	}
	//极速飞艇
	public final function jsft(){
		$this->display('game/jsft/index.php');
	}
	
	public final function jsftsol(){
		$this->display('game/jsft/sol.php');
	}
	public final function jsftcom(){
		$this->display('game/jsft/com.php');
	}
	public final function jsftfantan(){//番滩
		$this->display('game/jsft/fantan.php');
	}	
	public final function jsfthistory(){
		$this->display('game/jsft/history.php');
	}
	
	
	
	//六合彩
	public final function lhc(){
		$this->display('game/lhc/index.php');
	}

	public final function lhc2m(){
		$this->display('game/lhc/2m.php');
	}
	
	public final function lhcsb(){
		$this->display('game/lhc/sb.php');
	}

	public final function lhctx(){
		$this->display('game/lhc/tx.php');
	}

	public final function lhchx(){
		$this->display('game/lhc/hx.php');
	}

	public final function lhctws(){
		$this->display('game/lhc/tws.php');
	}

	public final function lhczm(){
		$this->display('game/lhc/zm.php');
	}

	public final function lhczmt(){
		$this->display('game/lhc/zmt.php');
	}

	public final function lhczm16(){
		$this->display('game/lhc/zm16.php');
	}

	public final function lhcwx(){
		$this->display('game/lhc/wx.php');
	}

	public final function lhcptyxws(){
		$this->display('game/lhc/ptyxws.php');
	}

	public final function lhczx(){
		$this->display('game/lhc/zx.php');
	}

	public final function lhc7sb(){
		$this->display('game/lhc/7sb.php');
	}

	public final function lhczhongxiao(){
		$this->display('game/lhc/zhongxiao.php');
	}

	public final function lhczxbz(){
		$this->display('game/lhc/zxbz.php');
	}

	public final function lhclxlw(){
		$this->display('game/lhc/lxlw.php');
	}

	public final function lhclm(){
		$this->display('game/lhc/lm.php');
	}

	public final function lhchistory(){
		$this->display('game/lhc/history.php');
	}
	//极速六合彩
	public final function jslhc(){
		$this->display('game/jslhc/index.php');
	}

	public final function jslhc2m(){
		$this->display('game/jslhc/2m.php');
	}
	
	public final function jslhcsb(){
		$this->display('game/jslhc/sb.php');
	}

	public final function jslhctx(){
		$this->display('game/jslhc/tx.php');
	}

	public final function jslhchx(){
		$this->display('game/jslhc/hx.php');
	}

	public final function jslhctws(){
		$this->display('game/jslhc/tws.php');
	}

	public final function jslhczm(){
		$this->display('game/jslhc/zm.php');
	}

	public final function jslhczmt(){
		$this->display('game/jslhc/zmt.php');
	}

	public final function jslhczm16(){
		$this->display('game/jslhc/zm16.php');
	}

	public final function jslhcwx(){
		$this->display('game/jslhc/wx.php');
	}

	public final function jslhcptyxws(){
		$this->display('game/jslhc/ptyxws.php');
	}

	public final function jslhczx(){
		$this->display('game/jslhc/zx.php');
	}

	public final function jslhc7sb(){
		$this->display('game/jslhc/7sb.php');
	}

	public final function jslhczhongxiao(){
		$this->display('game/jslhc/zhongxiao.php');
	}

	public final function jslhczxbz(){
		$this->display('game/jslhc/zxbz.php');
	}

	public final function jslhclxlw(){
		$this->display('game/jslhc/lxlw.php');
	}

	public final function jslhclm(){
		$this->display('game/jslhc/lm.php');
	}

	public final function jslhchistory(){
		$this->display('game/jslhc/history.php');
	}
}

?>