
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>Login</title>
<script src="js/prototype.lite.js" type="text/javascript"></script>
<link href="js/type.css" type="text/css" rel="stylesheet"  />
    </head><body style="color:white">
<div id="div1"><img src="../js/1.jpg" /></div>       
<?php
include_once("log.php");
if($_COOKIE['cookie']!='ok'){
?>

<script language="JavaScript" type="text/javascript">
  function Checklogin(){
  	if(form2.username.value==""){
        alert("Username Please!");
  		form2.username.focus();
  		return false;
  	}
  	  	if(form2.psw.value==""){
  		alert("Password Please!");
  		form2.psw.focus();
  		return false;
  	}
  }
</script>
<div align="center">
  <form name="form2" action="index.php?action=login" method="post" onsubmit="return Checklogin()" >
<br/>
      Password:
  <input type="password" name="password" /><br />
  <input type="hidden" name="sub" value="sub" />
  <input type="submit" name="submit" value="LogOn"/>

  </form>
    </div>
  <?php
 }else{
  echo "<meta http-equiv=\"refresh\" content=\"3;url=log.php\">waittong for 3seconds ...";
 }
?>
</body>
</html>
