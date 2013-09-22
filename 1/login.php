<?php
/*
 * Created on 2011-5-30
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 include_once("conn.php");

 include_once("head.php");
 if($_COOKIE['cookie']!='ok'){
?>

<script language="JavaScript" type="text/javascript">
  function Checklogin(){
  	if(form2.username.value==""){
  		alert("请输入登录名");
  		form2.username.focus();
  		return false;
  	}
  	  	if(form2.psw.value==""){
  		alert("请输入密码");
  		form2.psw.focus();
  		return false;
  	}
  }
</script>

  <form name="form2" action="login.php?action=login" method="post" onsubmit="return Checklogin()" >
  用户名：
  <input type="text" name="username" /><br/>
  密  码：
  <input type="password" name="password" /><br />
  <input type="hidden" name="sub" value="sub" />
  <input type="submit" name="submit" value="登录"/>
  <input type="reset" name="reset" value="重置"/>

  </form>
  <?php
 }else{
  echo "<meta http-equiv=\"refresh\" content=\"3;url=admin.php\">3秒后转入后台管理，请稍等...";
 }
?>
