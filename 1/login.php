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
  		alert("�������¼��");
  		form2.username.focus();
  		return false;
  	}
  	  	if(form2.psw.value==""){
  		alert("����������");
  		form2.psw.focus();
  		return false;
  	}
  }
</script>

  <form name="form2" action="login.php?action=login" method="post" onsubmit="return Checklogin()" >
  �û�����
  <input type="text" name="username" /><br/>
  ��  �룺
  <input type="password" name="password" /><br />
  <input type="hidden" name="sub" value="sub" />
  <input type="submit" name="submit" value="��¼"/>
  <input type="reset" name="reset" value="����"/>

  </form>
  <?php
 }else{
  echo "<meta http-equiv=\"refresh\" content=\"3;url=admin.php\">3���ת���̨�������Ե�...";
 }
?>
