<?php
if($_GET["out"])
{
    setcookie ("login", "", time() - 3600);
	header("Location:index.php");
}
?>