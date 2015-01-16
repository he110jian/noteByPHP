<?php
if(isset($_COOKIE["login"]))
{

$mysql = new SaeMysql();


$content = $_POST['content'];
$title= trim($_POST["title"]);
    //$time = date("Y-m-d H:i:s");
$fielPath="NONE";
$sql = "delete from note where LastName='Griffin'";
$mysql->runSql($sql);
if ($mysql->errno() != 0)
{
    die("Error:" . $mysql->errmsg());
}

$mysql->closeDb();

echo "<meta http-equiv=\"refresh\" content=\"0;url=note.php\">\n";
}
else
{
	header("location:note.php");
}
?>