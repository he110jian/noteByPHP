<?php
define(ALL_PS,"binggo");   //
//=======================================登录
 if($_POST[sub])
 {
 	$username=str_replace(" ","",$_POST[username]);
 	if($username=="jean")
        $us=TRUE;
 	$ps=md5($_POST[password].ALL_PS)=="e18f8200bbe2fb0b0176a3b5c6228d3e";
 	$s=$us ? $ps : FALSE;
 	if($s)
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


