
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<script src="js/prototype.lite.js" type="text/javascript"></script>
<link href="js/type.css" type="text/css" rel="stylesheet"  />
    </head><body style="color:white">
<div id="div1"><img src="../js/1.jpg" /></div>       
<?php
if(!isset($_COOKIE["login"]))
{
?>
<div align="center">
  <form name="form2" action="log.php" method="post" >
<br/>
      Password:
  <input type="password" name="password" /><br />
  <input type="hidden" name="sub" value="sub" />
  </form>
    </div>
  <?php
 }
else{
  echo "<meta http-equiv=\"refresh\" content=\"3;url=hello.php\">waittong for 3seconds ...";
 }
?>
</body>
</html>
