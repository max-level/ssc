<?php

header("Content-type: text/html; charset=utf-8");
session_start();
$config=array(
        'p0_Cmd'    => "Buy",
        'p1_MerId'  => "1574",
        'p2_Order'  => date("YmdHis").time(),
        'p3_Amt'    => $_POST['order_amount'],
        'p4_Cur'    => 'CNY',
        'p5_Pid'    => '',
        'p6_Pcat'   => '',
        'p7_Pdesc'  => '',
        'p8_Url'    => "http://5183267.com/pays41/paycallback.php",
        'p9_SAF'    => '',
        'pa_MP'     => $_SESSION['user']['uid'],
        'pd_FrpId'  => $_POST['bank_code'],
        'pr_NeedResponse'=> '1',
        'code'      => "RpAIFpyMaBBMFM3fDtlSgBPJwYjpifcN",
        "reqURL"    => 'http://www.6zhifu.com/GateWay/ReceiveBank.aspx',
        'LogName'   => 'text.log',
        );

require("BankPay.php");
$pay=new BankPay($config);

$pay->buildRequestForm();
?>