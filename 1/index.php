

<?php
if(!isset($_COOKIE["login"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
    </head>
    <body bgcolor="#789262" style="color:white;font-family:verdana;">
<div align="center">
  <form name="form2" action="log.php" method="post" defaultfocus="psw">
<br/>
      Password:
  <input type="password" name="password" id="psw"/><br />
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
