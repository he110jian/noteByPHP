<?php
if(isset($_COOKIE["login"]))
{

$mysql = new SaeMysql();

    //$title=addslashes(trim($_POST["title"]));
$content = $_POST['content'];
$title= trim($_POST["title"]);
    //$time = date("Y-m-d H:i:s");
$fielPath="NONE";
    
$sql = "SELECT title from note where title = ".$title." limit 1";
$sql = "SELECT * FROM `note` order by time asc"; 
$data = $mysql->getData( $sql );
if(count($data))
{
    $sql = "UPDATE note set content=".$content.",time=NOW() where title=".$title;
}
    else
    {
		$sql = "INSERT  INTO `note` ( `title`, `content`, `time`) VALUES ('"  . $mysql->escape( $title ) . "' , '" . $mysql->escape( $content ) . "' , NOW() ) ";
    }
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
