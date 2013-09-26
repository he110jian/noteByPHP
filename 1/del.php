<?
    $dom=new DOMDocument; 
    $dom->load("data.xml");      
    $root=$dom->getElementsByTagName("messages"); 
    $root=$root->item(0);
 foreach($root->childNodes as $msg)
 {
  if($msg->firstChild->nodeValue==$_GET["id"])   //如果message节点的id子节点的值跟要删除的id相等
  {
   $photo=$msg->lastChild->nodeValue;
   if($photo!="NONE"){   //如果留言包含图片，还应该将图片删除
    $photo_path="upfile/".base64_decode($photo);
    $flag=unlink($photo_path);
   }
   $root->removeChild($msg);
   break;
  }
 }
 $dom->save("data.xml");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add</title>
    </head>
    <body><p>
        删除留言成功，2秒钟返回首页</p>
    </body></html>
<meta http-equiv="refresh" content="2;url=foot.php">
