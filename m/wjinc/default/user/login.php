<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=360, initial-scale=0.5, user-scalable=0, minimum-scale=0.5, maximum-scale=1.0">
    <!--<meta name="viewport" content="user-scalable=no, initial-scale=0.5, minimal-ui, width=360" id="viewport" />-->
    <meta http-equiv="cleartype" content="on">
    <meta name="apple-mobile-web-app-status-bar-style" content="yes"/>
	<script src="http://ttkc888.com/layer/js.js"></script>
    <script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>
    <script type="text/javascript" src="/skin/main/reglogin.js"></script>
    <script type="text/javascript" src="/js/guest.js"></script>
    <style type="text/css">
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        *:before, *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body {
            height: 100%;
            font-family: Tahoma, Helvetica, Arial, "Microsoft Yahei", "微软雅黑", STXihei, "华文细黑", sans-serif;
            font-size: 32px;
            font-weight: 200;
            line-height: 32px;
            /*color: #828a94;*/
            margin: 0;
            background: url(../../../images/bg3.jpg);
            background-size: cover;
        }

        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
        }

        h1, .h1, h2, .h2, h3, .h3 {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        p {
            margin: 0 0 10px;
        }

        button, input, optgroup, select, textarea {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        input {
            line-height: normal;
        }

        button, html input[type="button"], input[type="reset"], input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        .white {
            color: #fff;
        }

        .header {
            position: fixed;
            top: 0;
            width: 100%;
            height: auto;
            z-index: 999;
        }

        .graynavi {
            height: 100px;
            width: 100%;
            background-color: #9d5776;
            position: relative;
            border-top: 2px solid #732e5c;
        }

        .aligncenter {
            text-align: center;
        }

        .cnbig1 {
            font-size: 22px;
            line-height: 20px;
            font-weight: 400;
        }

        .graybartitle {
            padding-top: 27px;
        }

        .graynavibtn {
            position: absolute;
            left: 23px;
            top: 32px;
        }

        .graynavi a {
            color: #000;
        }

        .marginleft20 {
            margin-left: 20px;
        }

        .container {
            margin-right: auto;
            margin-left: auto;
            padding-left: 10px;
            padding-right: 10px;
        }

        .cmargin20 {
            padding: 20px;
        }

        .cmargintop2 {
            margin-top: 100px;
        }

        .container h1 {
            font-size: 30px;
        }

        .container p {
            font-size: 26px;
        }

        .gap10 {
            height: 10px;
        }

        .rowfield {
            padding: 40px 0;
        }

        .rowfield .col1 {
            width: 25%;
            height: auto;
        }

        .margintop15 {
            margin-top: 15px;
        }

        .rowfield .col2 {
            width: 75%;
            height: auto;
        }

        .field_input {
            width: 100%;
            height: 65px;
            border: 2px solid #b6b6b6;
            padding: 20px;
        }

        input, button, select, textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        .red {
            color: #fe6767;
        }

        .cnsmall1 {
            font-size: 22px;
        }

        .field_input2 {
            width: 50%;
            height: 65px;
            border: 2px solid #b6b6b6;
            padding: 20px;
        }

        .fl {
            float: left;
        }

        .cnbig1 {
            font-size: 38px;
            line-height: 44px;
            font-weight: 400;
			color: #000;
        }

        .btnresetpass {
            width: 95%;
            text-align: center;
            padding: 20px 0;
            cursor: pointer;
            margin: 0 auto;
            background-color: #80385f;
        }

        .clearfix:before, .clearfix:after, .dl-horizontal dd:before, .dl-horizontal dd:after, .container:before, .container:after, .container-fluid:before, .container-fluid:after, .row:before, .row:after, .form-horizontal .form-group:before, .form-horizontal .form-group:after {
            content: " ";
            display: table;
        }

        .clearfix:after, .dl-horizontal dd:after, .container:after, .container-fluid:after, .row:after, .form-horizontal .form-group:after {
            clear: both;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="graynavi">
        <div class="graybartitle blue aligncenter cnbig1">登录页面</div>
        <div class="graynavibtn" rel="login.html">
            <a href="/">
                <div class="fl"><img src="/images/backarrow.png" width="30" height="45" alt="">
                </div>
                <!--div class="fl marginleft20">主页</div-->
            </a>
        </div>
    </div>
</div>
<form action="/user/loginedto" method="post" onajax="userBeforeLoginto" enter="true" call="userLoginto" target="ajax">
<script src="http://ttkc888.com/layer/layer.js"></script>
<script src="http://ttkc888.com/layer/js.js"></script>
    <div class="container cmargin20 cmargintop2 subcontent2">
        <div class="rowfield clearfix">

            <div class="col1 fl margintop15"><img src="/images/icon-user.png"><span>登录账号：</span>
            </div>
            <div class="col2 fl"><input type="text" id="username" name="username" class="text field_input">
            </div>
			
        </div>
        <div class="rowfield clearfix">
            <div class="col1 fl margintop15"><img src="/images/icon-pwd.png"><span>登录密码：<span></div>
            <div class="col2 fl"><input type="password" id="password" name="password" class="text field_input">
            </div>
        </div>
    </div>
    <div class="rowfield clearfix">
        <div class="col1 fl margintop15"></div>
        <div class="col2 fl">
            <input type="submit" class="btnresetpass white cnbig1" id="submit" value="登录">
        </div>
    </div>
</form>
</body>
</html>
