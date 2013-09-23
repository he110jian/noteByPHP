<?php
define(ALL_PS,"binggo");   //
//=======================================登录
 if($_POST[sub])
 {
 	if($ps)
    {
 		setcookie("cookie","ok",time()+1800);
 		echo "<script language=\"javascript\">location.href='hello.php';</script>";
 	}
    else
    {
 		echo "<script language=\"javascript\"> alert('wrong username or password!');</script>";
 	}
 }
//===========================退出登录
 if($_GET[out])
 {
	setcookie("cookie"); 
	echo "<script language=\"javascript\"> alert('log out successfully!');</script>"; 
 	echo "<script language=\"javascript\">location.href='index.php';</script>";
 }
?>


