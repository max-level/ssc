<?php
require_once('sqlin.php');
$conf['debug']['level']=5;

/*		数据库配置		*/
$conf['db']['dsn']='mysql:host=127.0.0.1;dbname=php85com';
$conf['host']='127.0.0.1';
$conf['port']='3306';
$conf['db']['user']='php58com';
$conf['db']['password']='g2991300';
$conf['db']['charset']='utf8';
$conf['db']['prename']='ssc_';

$conf['safepass']='php85com';     //后台登陆安全码

$conf['cache']['expire']=0;
$conf['cache']['dir']='_cache_$98ER29@fw!d#s4fef/';
$conf['cache']['dirqiantai']='D:/huajialihua\web\_cache_$98sER9@fw!d#s4fef\\'; //此处设置前台缓存目录,请写绝对路径
$conf['cache']['dirwap']='D:/huajialihua\wap\_cache_$98sER9@fw!d#s4fef\\'; //此处设置手机站前台缓存目录,请写绝对路径
$conf['url_modal']=2;
$conf['action']['template']='wjinc/admin/';
$conf['action']['modals']='wjaction/admin/';
$conf['member']['sessionTime']=30*60;	// 用户有效时长
$conf['node']['access']='http://127.0.0.1:8800';	// node访问基本路径dcvip.cc

error_reporting(E_ERROR & ~E_NOTICE);
ini_set('date.timezone', 'asia/shanghai');
ini_set('display_errors', 'Off');