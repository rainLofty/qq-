<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
<?php
    require_once("API/qqConnectAPI.php");
    $qc = new QC();
    //获取用户信息
    $getuserinfo = $qc->get_user_info();

    //用户信息
    $userinfo = array(
      "nickname" => $getuserinfo["nickname"],   //qq昵称
      "gender" => $getuserinfo["gender"]    //性别
    );

?>
<h1><?php echo $userinfo['nickname']?></h1>
<h1><?php echo $userinfo['gender'];?></h1>

</body>
</html>