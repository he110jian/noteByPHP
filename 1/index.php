<?php
if(!isset($_COOKIE["login"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <link href="js/type.css" type="text/css" rel="stylesheet"  />
<title>Login</title>
</head>
    
	<body  style="font-family:verdana;" onload="form2.password.focus()">
        
        <div id="div1"><img src="js/public-bg9.jpg" /></div>   
        <div id="header-fading"></div>
		<div id="fom" style="color:white;">
            <form name="form2" action="log.php" method="post" >
                <br/>
                Password:<input type="password" name="password" /><br />
                <input type="hidden" name="sub" value="sub" />
            </form>
		</div>
        <div style="position: absolute;top: 110px;left: 15%;width: 70%;"></div>
    </body>
</html>
<?php
}
else{
  echo "<meta http-equiv=\"refresh\" content=\"3;url=foot.php\">waittong for 3seconds ...";
}
?>
