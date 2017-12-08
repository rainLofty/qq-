QQ Connect SDK For PHP 2.0 文档
每次配置都删除instal里面的setted.inc文件
使用说明
设置配置项
执行install/文件夹下的index.php设置配置项
填写自己的appid和appkey 和回调地址
引入文件
将API文件夹拷贝到您要使用的目录，在使用的文件中引入qqConnectAPI.php即可。如下
oauth.php
<?php
require_once("API/qqConnectAPI.php");
?>
注意：由于API需要用到session，请确保session可以使用，并且，API会执行session_start();确保页面session_start()没有执行，并且qqConnectAPI.php引用在header输出之前
调用接口
调用接口前，请先定义一个QC实例，如下
<?php
require_once("../API/qqConnectAPI.php");
$qc = new QC();
$qc->qq_login();
?>
注意：
获得access_token，在callback页面中使用$qc->qq_callback()返回access_token,
$qc->get_openid()返回openid，之后可以将access_token和openid保存（三个月有效期），
之后调用接口时不需要重新授权，但需要将access_token和Openid传入QC的参数中，如下：
$qc = new QC($access_token, $openid);



