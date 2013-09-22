
<?php
//判断登录
include_once ("log.php");
if ($_COOKIE['cookie'] != 'ok') 
{
	echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\"> illegal!<a href=\"index.php\">return</a>...";
} 
else 
{   
echo "<H1>WELCOME!<H1>";

}
?>

    