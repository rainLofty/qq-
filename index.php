<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>登录</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css" />
       
    </head>
    <body>
        <div class="loginWrap banner">
        <!-- bannerBg begin -->
            <ul class="bd">
                <li class="active"><a href="#"><img src="images/loginBg.jpg" width="1920" height="720" /></a></li>
            </ul>
        <!-- bannerBg end -->
            <div class="wrap">
               <form action="#" class="form_name">
                   <div class="cc_form_aside">
                        <div class="cc_form_aside_tap">
                            <span>用第三方账号快速登录</span>
                            <div class="cc_line"></div>
                        </div>
                        <div class="cc_third">
                            <a class="cc_qq" href="javascript:void(0);" onclick="toLogin()"><i></i>QQ登录</a>
                        </div>
                    </div>
               </form> 
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">

 function toLogin(){
    var winwidth = window.screen.width;
    var winheight = window.screen.height;
    var newWinwidth = 750;
    var newWinheight = 448;
    var wleft = (winwidth - newWinwidth)/2;
    var wtop = (winheight - newWinheight)/2;
    var A=window.open("php/qqlogin.php","TencentLogin", "width="+newWinwidth+",height="+newWinheight+",top="+wtop+",left="+wleft+",menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=1");
 } 
</script>
