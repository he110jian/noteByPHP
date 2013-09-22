<?php

function htmltocode($content){
	$content=str_replace("\n","<br>",str_replace(" ","&nbsp",$content));
	return $content;
}
define(ALL_PS,"hkjune");   //
//=======================================登录
 if($_POST[sub]){
 	$username=str_replace(" ","",$_POST[username]);
 	$sql="select * from `admin` where `username`='$username'";
 	$query=mysql_query($sql);
 	$row=mysql_fetch_array($query);
 	$us=is_array($row);
 	$ps=md5($_POST[password].ALL_PS)==$row[password];
 	$s=$us ? $ps : FALSE;
 	if($s){
 		setcookie("cookie","ok",time()+1800);
 		echo "<script language=\"javascript\">location.href='login.php';</script>";
 	}else {
 		echo "<script language=\"javascript\"> alert('您输入的用户名或密码有误，请重新输入！');</script>";
 	}
 }
//===========================退出登录
 if($_GET[out]){
 	setcookie("cookie","out");
 	echo "<script language=\"javascript\">location.href='index.php';</script>";
 }




//echo md5("adminhkjune");
//echo $content="ddsad    dsadas dsad  dasd asdsad ";
//echo "<br>";
//echo str_replace(" ","&nbsp",$content);



?>


