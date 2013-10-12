<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ho</title>
</head>
<body>
<span style="float:right;"> <a href='log.php?out=out'>LogOut</a></span>
<?php
$domain =  "hellojian";
$filename = "data.xml";
if(fileExists($domain,$filename))
	echo "hahaa";
?>
</body>
</html>