<?php
if(isset($_COOKIE["login"]))
{
//	include_once("head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=gb2312">

<script type="text/javascript" src="./js2/mootools.js"></script>
<script type="text/javascript" src="./js2/accordions.js"></script>
<link href="./js2/accordions.css" type="text/css" rel="stylesheet"  />

<title>Accordio</title>
</head>
<body>
<br/><br/><br/>
<div >
<p class="accToggler" style="background-color: rgb(104, 153, 206); ">基本信息</p>
	<p class="accContent" style="overflow-x: hidden; overflow-y: hidden; visibility: visible; height: 120px; opacity: 1;">
		asdasdaaaaaaaaaaaaaaaaasadddddddddddsaddddsdasdaaaaaaaaaaaaaaaaasadddddddddddsadddd
		dddddddsadddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddsdasdaaaaaaaaaaaaaaaaasadddddddddddsadddd
		dddddddsadddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddsdasdaaaaaaaaaaaaaaaaasadddddddddddsadddd
		dddddddsadddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddddddsaddddddddddd
		dddddddsadddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddddddsaddddddddddd

	</p>

<p class="accToggler" style="background-color: rgb(194, 220, 114); ">项目经历</p>
	<p class="accContent" style="overflow-x: hidden; overflow-y: hidden; visibility: visible; height: 120px; opacity: 1;">
		a2dddddddddsadddddddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddsdasdaaaaaaaaaaaaaaaaasadddddddddddsadddd
		dddddddsadddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddddddsaddddddddddd
		dddddddsadddddddddddsaddd

	</p>
</div>

<div>
<p class="accToggler_x" style="background-color: rgb(104, 153, 206); ">获奖情况</p>
	<p class="accContent_x" style="overflow-x: hidden; overflow-y: hidden; visibility: visible; height: 120px; opacity: 1;">
		a3dddddddddsadddddddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddsdasdaaaaaaaaaaaaaaaaasadddddddddddsadddd
		dddddddsadddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddddddsaddddddddddd
		dddddddsadddddddddddsaddd
	</p>

<p class="accToggler_x" style="background-color: rgb(194, 220, 114); ">Click me!</p>
	<p class="accContent_x" style="overflow-x: hidden; overflow-y: hidden; visibility:visible; height: 120px; opacity: 1;">
		a4dddddddddsadddddddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddsdasdaaaaaaaaaaaaaaaaasadddddddddddsadddd
		dddddddsadddddddddddsadddddddddddddddsadddddddddddddddsadddddddddddddddsaddddddddddd
		dddddddsadddddddddddsaddd

	</p>

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