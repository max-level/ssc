<?php 
//header("Content-type: text/html; charset=utf-8");
session_start();
$uid = intval(@$this->user['uid']);
$username = @$this->user['username'];
include_once("live/config.php");
if(!$username){
	echo "<script>alert('请登录后再试！');window.close();</script>";exit;
}


$sign = md5($plantform."_".$merID."_".$key."_".$username);

$gameCode = $_REQUEST["game"];
if($gameCode==""){$gameCode="live";}
//$url = $fenjieHost."/pt!login.do?plantform=".$plantform."&username=".$username."&password=".$password."&gameCode=".$gameCode."&sign=".$sign;
//echo $url;
//$url = curl_file_get_contents($url);
//echo $url;
//exit;


?>
<html>
<head id="Head1">
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script src="/live/jquery.js?v=55" type="text/javascript"></script>
<script type="text/javascript" src="http://cache.download.banner.greatfortune88.com/integrationjs.php"></script>
</head>
<body>
    <div>
        <span id="loading">loading...</span>
        <input type="hidden" id="username" name="username" value="<?='BHS'.$plantform.$username ?>">
        <input type="password" id="password" name="password" value="<?=$password ?>" style="display:none">
        <input type="hidden" id="gameUrl" name="gameUrl" value="http://cache.download.banner.greatfortune88.com/casinoclient.html?game=<?=$gameCode ?>&language=zh-cn&nolobby=4" />
    </div>

    <script type="text/javascript">
        iapiSetCallout('Login', calloutLogin);
        iapiSetCallout('Logout', calloutLogout);

        $(function () {
            login(1);
        });

        function login(realMode) {
            iapiLogin($('#username').val().toUpperCase(), $('#password').val(), realMode, "ch");
        };

        function logout(allSessions, realMode) {
            iapiLogout(allSessions, realMode);
        };

        function calloutLogin(response) {
            var code = response.errorCode;
            if (code && code != 6) {
                alert('Login failed, ' + code + ',' + response.errorText).show();
                return;
            }
            location.href = $('#gameUrl').val();
        };

        function calloutLogout(response) {
            if (response.errorCode) {
                alert("Login failed, " + response.errorCode);
            }
            else {
                // delete_cookie();
            }
        };

    </script>

</body>
</html>