<?php
if(isset($_COOKIE["login"]))
{
//	include_once("head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<script src="js/prototype.lite.js" type="text/javascript"></script>
<link href="js/type.css" type="text/css" rel="stylesheet"  />
</head>
<body>
<br/><br/>
<div id="div1"><img src="../js/1.jpg" /></div>   
<div id="container">
<div id="header">&nbsp;WELCOME<span style="float:right;"> <a href='log.php?out=out'>LogOut</a></span></div>
<br class="clearfloat" />
<div id="menu">&nbsp;Plan For This Week</div>
<br class="clearfloat" />
<div id="mainContent">
<div id="sidebar">
<br />
Monday <br />
<br />
Tuesday <br />
<br />
Wednesday<br />
<br />
Thursday<br />
<br />
Friday<br />
<br />
Sunday <br />
</div>
<div id="content">
<? include_once("foot.php");
?></div>
</div>
<br class="clearfloat" />
<div id="footer">This is the footer</div>
</div>
</body>
</html>
<?
}
else
{   
	echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\"> illegal!<a href=\"index.php\">return</a>...";
}
?>
