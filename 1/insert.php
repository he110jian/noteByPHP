<?php
header('Content-type: application/json');
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
$sql = "SELECT * FROM `note` order by time asc"; 
$data = $mysql->getData( $sql );
$mysql->runSql($sql);
$inse = true;
$update = -1;
for($i=count($data)-1;$i>=0;$i--)
{
	$msg=$data[$i];
	if(!strcmp($title,$msg['title']))
    {
        $update = $i;
        $inse = false;
        break;
    }
}
    if($inse)
    {
        $sql = "INSERT  INTO `note` ( `title`, `content`, `time`) VALUES ('"  . $mysql->escape( $title ) . "' , '" . $mysql->escape( $content ) . "' , NOW() ) ";
    }
    else
    {
		$sql = "update note set content='$content' where title='$title'";
    }
$mysql->runSql($sql);
if ($mysql->errno() != 0)
{
    die("Error:" . $mysql->errmsg());
}

$mysql->closeDb();

    //header("Location:note.php");
    $retu["title"] = $title;
	$retu["content"] = $content;
    $retu["update"] = $update;
    $retu["time"] = $time;
    echo json_encode($retu);
}
else
{
	header("location:note.php");
}
?>
