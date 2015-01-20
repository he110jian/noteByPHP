<?php 
if($_POST['submit'])
{
    print_r($_POST);
    echo"<br/><hr/>";
}
?>
<form action="" method="post" target="_blank">
  Add one: <input type="text" name="add"><br>
  Delete one: <input type="text" name="del"><br>
  <input type="submit" name="submit" value="Submit">
</form>