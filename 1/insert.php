<?php
if(isset($_COOKIE["login"]))
{

$mysql = new SaeMysql();

    //$title=addslashes(trim($_POST["title"]));
$content = $_POST['content'];
$title= trim($_POST["title"]);
    //$time = date("Y-m-d H:i:s");
$fielPath="NONE";
    
    
    $sql = "SELECT * FROM `note` where title='".$title."' limit 1"; 
$data = $mysql->getData( $sql );
$mysql->runSql($sql);
    if(count($data))
    {
        $sql = "update note set content='$content' where title='$title'"
         echo $sql ;
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
