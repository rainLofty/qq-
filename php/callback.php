<?php
require_once("API/qqConnectAPI.php");

$qc = new QC($access_token, $openid);

//获取开发者的access_token  和 openid
$access_token =  $qc->qq_callback();

$openid = $qc->get_openid();

echo '<script type="text/javascript">window.location.href="userinfo.php"</script>';


