<?php
define(ALL_PS,"binggo");   //
//=======================================登录
 if($_POST[sub])
 {
 	$ps=md5($_POST[password].ALL_PS)=="e18f8200bbe2fb0b0176a3b5c6228d3e";
 	if($ps)
    {
 		setcookie("login","ok",time()+1800);
 		echo "<script language=\"javascript\">location.href='hello.php';</script>";
 	}
    else
    {
 		echo "<script language=\"javascript\"> alert('wrong username or password!');location.href='index.php';</script>";
 	}
 }
//===========================退出登录 
if($_GET[out])
 {
	setcookie("login", "",time() -3600);
	echo "<script language=\"javascript\"> alert('log out successfully!');</script>"; 
 	echo "<script language=\"javascript\">location.href='index.php';</script>";
 }
?>