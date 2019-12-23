<!DOCTYPE html>
<html lang="zh-CH">
<head>
	<meta charset="UTF-8">
	<title>支付测试</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<?php if(!empty($_POST)): ?>
<?php
	require_once('lib/pay.php');
	$skey = '79dcd24a7f62032f3547360267305a6d';
	$sign = pay::sign($_POST, $skey);
	$payUrl = 'http://pay.095pay.com/zfapi/order/pay';
	// var_dump($_POST);die;
?>
	 <?php if('ABC' == $_POST['p2_paytype'] || 'WEIXINWAP' == $_POST['p2_paytype']): ?>
	 	<!-- 网银,wap(微信) -->
	 	<body onLoad="document.payForm.submit();">
		    正在跳转 ...
		    <form action="<?php echo $payUrl ?>" method="post" name="payForm">
		        <?php foreach ($_POST as $fname => $fvalue) : ?>
		            <input type='hidden' name='<?php echo $fname; ?>' value="<?php echo $fvalue; ?>"/>
		        <?php endforeach ?>
		        <input type="hidden" name="sign" value="<?php echo $sign; ?>">
		    </form>
		</body>
	 <?php elseif('WEIXIN' == $_POST['p2_paytype']): ?>
	 	<!-- 微信被扫 -->
	 	<?php
	 		$_POST['sign'] = $sign;
	 		$respon = pay::curlPost($_POST, $payUrl, 2, 60);
	 		if (!isset($respon['data']['r6_qrcode'])) {
	 			echo $respon['rspMsg'];
	 			die;
	 		}
	 		$responData = $respon['data'];
	 		unset($responData['sign']);
	 		if ($respon['data']['sign'] != pay::sign($responData, $skey)) {
	 			// echo "响应签证不通过！";
	 			// die;
	 		}
	 	?>
	 	<body>
	 		<div class="container">
	 			<div class="row text-center">
	 				<h4>扫码支付</h4>
	 				<img src="<?php echo $responData['r6_qrcode'];?>" alt="">
	 			</div>
	 		</div>
	 	</body>
	 <?php endif ?>
<?php else: ?>
	<body>
	<div class="container">
		<h2 class="text-center">支付测试</h2>
		<form action="" class="form-horizontal" method="post">
			<div class="form-group row">
				<label for="p1_mchid" class="control-label col-sm-2 col-sm-offset-2">p1_mchtid</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='p1_mchtid' value="22857">
				</div>
			</div>
			<div class="form-group row">
				<label for="p2_paytype" class="control-label col-sm-2 col-sm-offset-2">支付类型(p2_paytype)</label>
				<div class="col-sm-6">
					<select name="p2_paytype" id="" class="form-control">
						<option value="ABC">网银支付</option>
						<option value="WEIXIN">pc微信支付</option>
						<option value="WEIXINWAP">手机微信wap支付</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="p3_paymoney" class="control-label col-sm-2 col-sm-offset-2">p3_paymoney</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='p3_paymoney' value='1.1'>
				</div>
			</div>
			<div class="form-group row">
				<label for="p4_orderno" class="control-label col-sm-2 col-sm-offset-2">p4_orderno</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='p4_orderno' value="<?php echo time(); ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="p5_callbackurl" class="control-label col-sm-2 col-sm-offset-2">p5_callbackurl</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='p5_callbackurl' value="http://www.pay.dev/pay_demo/notice.php">
				</div>
			</div>
			<div class="form-group row">
				<label for="p6_notifyurl" class="control-label col-sm-2 col-sm-offset-2">p6_notifyurl</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='p6_notifyurl' value="">
				</div>
			</div>
			<div class="form-group row">
				<label for="p7_version" class="control-label col-sm-2 col-sm-offset-2">p7_version</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='p7_version' value="v2.8">
				</div>
			</div>
			<div class="form-group row">
				<label for="p8_signtype" class="control-label col-sm-2 col-sm-offset-2">p8_signtype</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='p8_signtype' value="1">
				</div>
			</div>
			<div class="form-group row">
				<label for="p9_attach" class="control-label col-sm-2 col-sm-offset-2">p9_attach</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='p9_attach' value="">
				</div>
			</div>
			<div class="form-group row">
				<label for="p10_appname" class="control-label col-sm-2 col-sm-offset-2">p10_appname</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='p10_appname' value="">
				</div>
			</div>
			<div class="form-group row">
				<label for="p11_isshow" class="control-label col-sm-2 col-sm-offset-2">p11_isshow</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='p11_isshow' value="1">
				</div>
			</div>
			<div class="form-group row">
				<label for="p12_orderip" class="control-label col-sm-2 col-sm-offset-2">p12_orderip</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='p12_orderip' value="127.0.0.1">
				</div>
			</div>
			<!-- <div class="form-group row">
				<label for="sign" class="control-label col-sm-2 col-sm-offset-2">sign</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name='sign'>
				</div>
			</div> -->
			<div class="row text-center">
				<button type="submit" class="btn btn-primary">提交</button>
			</div>
		</form>
	</div>
	</body>
<?php endif ?>
</html>