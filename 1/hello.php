
<?php
session_start();
//判断登录
if(isset($_COOKIE['cookie'])) 
{
	echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\"> illegal!<a href=\"index.php\">return</a>...";
} 
else 
{   
include_once("head.php");

}
?>

    