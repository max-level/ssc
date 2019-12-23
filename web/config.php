<?php
require_once('sqlin.php');
$conf['debug']['level']=5;

/*		数据库配置		*/
$conf['db']['dsn']='mysql:host=localhost;dbname=php85com;charset=utf8';
$dbname='php85com';
$dbhost='localhost';
$conf['db']['user']='root';
$conf['db']['password']='root';
$conf['db']['charset']='utf8';
$conf['db']['prename']='ssc_';
$conf['cache']['expire']=36000;
$conf['cache']['dir']='_cache_$98sER9@fw!d#s4fef/';

$conf['url_modal']=2;
  
$conf['action']['template']='wjinc/default/';
$conf['action']['modals']='wjaction/default/';

$conf['member']['sessionTime']=1*60;	// 用户有效时长

error_reporting(E_ERROR & ~E_NOTICE);

ini_set('date.timezone', 'PRC');

ini_set('display_errors', 'Off');

if(strtotime(date('Y-m-d',time()))>strtotime(date('Y-m-d',time()))){
	$GLOBALS['fromTime']=strtotime(date('Y-m-d',strtotime("-1 day")));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',time()));
}else{	
	$GLOBALS['fromTime']=strtotime(date('Y-m-d'));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',strtotime("+1 day")));
}

//定义会员资料修改数据库-PHP85.COM
define ('HOSTNAME', 'localhost'); //数据库主机名
define ('USERNAME', 'root'); //数据库用户名
define ('PASSWORD', '123456'); //数据库用户登录密码
define ('DATABASE_NAME', 'php85com'); //需要查询的数据库

?>
