<?php
header('Content-type: text/json');
if(isset($_COOKIE["login"]) && $_POST['title']!=NULL)
{

$mysql = new SaeMysql();

    //$title=addslashes(trim($_POST["title"]));

$content = $_POST['content'];
$title= trim($_POST["title"]);
if(1 == $_POST["options"])
{
	$title = str_replace('<',"&lt;",$title);
	$title = str_replace('>',"&gt;",$title);
	$content = str_replace('<',"&lt;",$content);
	$content = str_replace('>',"&gt;",$content);
}
    $content=str_replace("\r\n","<br>",$content);
    //$time = date("Y-m-d H:i:s");
$fielPath="NONE";
$sql = "SELECT * FROM `note` where title='".$title."' limit 1"; 
$data = $mysql->getData( $sql );
$mysql->runSql($sql);
    
    if(count($data))
    {
        $sql = "update note set content='$content' where title='$title'";
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

header("Location:note.php");
}
else
{
	header("location:note.php");
}
?>
