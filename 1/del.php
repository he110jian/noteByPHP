<?php
if(isset($_COOKIE["login"]))
{

$mysql = new SaeMysql();


$content = $_POST['content'];
$title= trim($_POST["title"]);
    //$time = date("Y-m-d H:i:s");
$fielPath="NONE";
$sql = "delete from note where time='".$_GET["id"]."'";
$mysql->runSql($sql);
if ($mysql->errno() != 0)
{
    die("Error:" . $mysql->errmsg());
}

$mysql->closeDb();

}
?>

<?php
if(isset($_COOKIE["login"]))
{
	$dom=new DOMDocument;
    $dom->load("medias/data.xml");
    $root=$dom->getElementsByTagName("messages"); 
    $root=$root->item(0);
	foreach($root->childNodes as $msg)
	{
		if($msg->firstChild->nodeValue==$_GET["id"])   //如果message节点的id子节点的值跟要删除的id相等
		{
			$photo=$msg->lastChild->nodeValue;
			if($photo!="NONE")
			{   //如果留言包含图片，还应该将图片删除
				$photo_path="medias/upfile/".base64_decode($photo);
				unlink($photo_path);
			}
		$root->removeChild($msg);
		break;
		}
	}
	$dom->save("medias/data.xml");
	
}
?>