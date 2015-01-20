<?php






function do_upload($file_name){

if($file_name=='')return false;

$s = new SaeStorage();

$exten = $this->get_extension($_FILES[$file_name]['name']);

$remote_file = time().rand(100,999).$exten;

$s->write( 'tips' , $remote_file , file_get_contents($_FILES[$file_name]['tmp_name']) );

$url=$s->getUrl('tips', $remote_file );

return $url;
}

function get_extension($filename)
{

$x = explode('.', $filename);

return '.'.end($x);
  }






header('Content-type: application/json');
if(isset($_COOKIE["login"]) && $_POST['title']!=NULL)
{

    //    $url = do_upload("upfile");
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
    $retu["time"] = date("Y-m-d H:i:s");
        $retu["url"] = $_FILES["upfile"]["name"];
    echo json_encode($retu);
}
else
{
	header("location:note.php");
}
?>
