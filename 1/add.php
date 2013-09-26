
<?php
if(isset($_COOKIE["login"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add</title>
    </head>
    <body>
<form action="saveadd.php" enctype="multipart/form-data" method="post" name="myform" onsubmit="return go(this)">
<table border="1" width="600">
 <tr>
  <td>作者</td>
  <td align="left"><input type="text" name="author" size="10"></td>
 </tr>
 <tr>
  <td>标题</td>
  <td align="left"><input type="text" name="title" size="50"></td>
 </tr>
 <tr>
  <td>内容</td>
  <td align="left"><textarea name="content" cols="70" rows="10"></textarea></td>
 </tr>
 <tr>
  <td>截图</td>
  <td align="left"><input type="file" name="upfile" size="50"></td>
 </tr>
 <tr>
  <td colspan="2"><input type="submit" value="提交"/></td>
 </tr>
</table>
</form>
  <?php
 }
else
{   
	echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\"> illegal!<a href=\"index.php\">return</a>...";
}
?>
</body>
</html>
