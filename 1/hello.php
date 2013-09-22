
<?php

include_once ("head.php");

//判断登录
if ($_COOKIE['cookie'] != 'ok') {
	echo "<meta http-equiv=\"refresh\" content=\"3;url=login.php\">您无权限访问该页，请点击<a href=\"login.php\">返回</a>...";
} else 
{
    
echo "<H1>WELCOME!<H1>"

}
?>

    