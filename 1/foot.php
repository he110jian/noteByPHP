<?php
if(isset($_COOKIE["login"]))
{
//	include_once("head.php");104, 153, 206
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="./js2/mootools.js"></script>
<script type="text/javascript" src="./js2/accordions.js"></script>
<link href="./js2/accordions.css" type="text/css" rel="stylesheet"  />

<title>PersonInfo</title>
</head>
<body>
<br/>
    <p><a href="add.php">添加留言</a></p>
<?php
$dom=new DOMDocument('1.0','gb2312');   
$dom->load("data.xml");       //加载
$root=$dom->getElementsByTagName("messages"); 
$root=$root->item(0);      
$message=$root->getElementsByTagName("message");   //获取所有message节点
$message_count=$message->length;   //计算有多少条留言
echo "当前共有".$message_count."条留言";
if($message_count==0){
 echo "暂时没有留言\n";
}

?>

<br/><br/> 

<div>
    <p class="accToggler" style="background-color: rgb(194, 220, 114); ">about</p>
	<p id="p1" class="accContent" style="overflow-x: hidden; overflow-y: hidden; visibility: visible; height: 120px; opacity: 1;">
		details
	</p>
<?php
    else{
 for($i=$message_count-1;$i>=0;$i--)    //我们需要对留言按倒序排列
 {
  $msg=$message->item($i);

  foreach($msg->childNodes as $child)   //message节点的各个子节点
  {
   if($child->nodeName=="id")
   {
    $id=$child->nodeValue;
   }
   if($child->nodeName=="author")
   {
    $author=$child->nodeValue;
   }
   if($child->nodeName=="title")
   {
    $title=$child->nodeValue;
   }
   if($child->nodeName=="content")
   {
    $content=$child->nodeValue;
   }
   if($child->nodeName=="photo")
   {
    $photo=$child->nodeValue;
   }
   if($child->nodeName=="addtime")
   {
    $addtime=$child->nodeValue;
   }

  }?>
<p class="accToggler" style="background-color: rgb(194, 220, 114); " ><? echo $id.">".base64_decode($title)." - ".base64_decode($author)." [".$addtime."] ";  
   echo "[<a href='del.php?id=".$id."'>删除</a>]";?>
</p>
    <p class="accContent" style="overflow-x: hidden; overflow-y: hidden; visibility: visible; height: 120px; opacity: 1;">
	
 <?       echo base64_decode($content);
  if($photo!="NONE")
  {
      echo "<br/><img src='upfile/".base64_decode($photo)."'>";
  }
 }}?>
	</p>

</div>
	</body>
	</html>
<?
}
else
{   
	echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\"> illegal!<a href=\"index.php\">return</a>...";
}
?>