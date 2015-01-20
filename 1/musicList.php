<?php 
if($_POST['submit'])
{
    print_r($_POST);
    echo"<hr/>";
}
?>
<form action="" method="post" target="_blank">
  Add one: <input type="text" name="fname"><br>
  Delete one: <input type="text" name="lname"><br>
  <input type="submit" name="submit" value="Submit">
</form>