
<?php
//判断登录
if(isset($_COOKIE["login"]))
{
    include_once("head.php");
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
             <title>Home</title>
        <script src="js/prototype.lite.js" type="text/javascript"></script>
<link href="js/type.css" type="text/css" rel="stylesheet"  />
    </head><body style="color:white">
<div id="div1"><img src="../js/1.jpg" /></div>    
            <H1>WELCOME 您!<H1></body></html>
            <?
} 
else 
{   
	echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\"> illegal!<a href=\"index.php\">return</a>...";
}
?>
