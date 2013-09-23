
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
    </head><body style="color:white;font-family:verdana">
<div id="div1"><img src="../js/1.jpg" /></div>   
        <br/><hr/>
        <div>
		<h4>
		Done In The First Week @2013.9.2-2013.9.8:
		</h4>
		<ul style="color:green">
			<li> 
			HAVE completed class listening and the homework seriously;
			</li>
			<li> 
			read some related books.
			</li>
		</ul>
		<hr>
		<h4>
		Studying Plan For The Second Week @2013.9.9-2013.9.15:
		</h4>
		<ul style="color:red">
			<li> 
			TO complete class listening and the homework seriously;
			</li>
			<li> 
			determine research area;
			</li>
			<li> 
			finish reading a relevant paper;
			</li>
			<li> 
			read some related books.
			</li>
		</ul>
		<h5>
		<hr>
		--By HeJian
		</h5>
	</div>
</body></html>
<?
} 
else 
{   
	echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\"> illegal!<a href=\"index.php\">return</a>...";
}
?>
