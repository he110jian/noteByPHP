<?php
if(!$_POST["author"] || !$_POST["content"]) 
{
 echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\">\n";
 echo "你没有填写留言姓名或内容，2秒钟返回首页";
 exit();
}else{
 $imgflag=0;   //用于判断是否需要上传图片
 function random($length)   //此函数用于生成一个随机的图片文件名（不含扩展名），以防止与现有图片重复
 { 
  $hash = 'IMG-'; 
  $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz'; 
  $max = strlen($chars) - 1; 
  for($i = 0; $i < $length; $i++)    //从上面的字符串中随机找length长度个字符
  { 
   $hash .= $chars[mt_rand(0, $max)]; 
  } 
  return $hash; 
 }
 function fileext($filename)   //此函数用于获取上传文件的扩展名
 { 
  return substr(strrchr($filename, '.'), 1); 
 } 
 
 if($_FILES["upfile"]["name"]!=""){
  $uploaddir="upfile/";   //图片保存路径
  $type=array("jpg","gif","bmp","jpeg","png");   //允许上传的文件类型
  if(!in_array(strtolower(fileext($_FILES['upfile']['name'])),$type))   //如果上传的文件的扩展名不符合要求
  { 
   echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\">\n";
   $text=implode(",",$type); 
   echo "您只能上传以下类型文件: ",$text,"<br>"; 
   exit();
  } 
  else
  {
   $filename=explode(".",$_FILES['upfile']['name']); 
   do 
   { 
    $filename[0]=random(10);
    $randname=implode(".",$filename);     //得到的最终随机生成的文件名（连同扩展名）
    $uploadfile=$uploaddir.$randname; 
   } while(file_exists($uploadfile));
   if (move_uploaded_file($_FILES['upfile']['tmp_name'],$uploadfile)){   //保存上传的图片到upfile文件夹
    echo "上传图片成功"; 
    $imgflag=1;
   } 
   else{ 
    echo "上传图片失败！"; 
    $imgflag=0;
   }
  }
 }
//获取其他表单域
 $author=base64_encode($_POST["author"]);   
 $content=base64_encode(ereg_replace("\r\n","<br>",$_POST["content"]));
 $smiles=base64_encode($_POST["smiles"]);
 if($_POST["title"]){
  $title=base64_encode($_POST["title"]);
 }else{
  $title=base64_encode("无标题");
 }
 $addtime=date("Y-m-d");
 if($imgflag==1){  //如果有上传图片
  $photo=base64_encode($randname);
 }else{  //否则将photo元素的值设置为NONE
  $photo="NONE";
 }

 $dom=new DOMDocument('1.0','gb2312');   //指定XML的格式
 $dom->load("data.xml");     //加载
 $root=$dom->getElementsByTagName("messages");   //获取根节点
 $root=$root->item(0);       
 $last_id=$root->lastChild->firstChild->nodeValue;  //获取最后一个message的第一个子节点（即id节点）的值
 $id=$last_id+1;  //新增消息的id
 settype($id,"string");  //将其转换为字符型

 $message=$root->appendChild(new DOMElement('message'));  //添加message节点
 $el_id=$message->appendChild(new DOMElement('id'));  //添加message节点的各个子节点
 $el_id->appendChild($dom->createTextNode($id));
 $el_author=$message->appendChild(new DOMElement('author'));
 $el_author->appendChild($dom->createTextNode($author));
 $el_title=$message->appendChild(new DOMElement('title'));
 $el_title->appendChild($dom->createTextNode($title));
 $el_content=$message->appendChild(new DOMElement('content'));
 $el_content->appendChild($dom->createTextNode($content));
 $el_addtime=$message->appendChild(new DOMElement('addtime'));
 $el_addtime->appendChild($dom->createTextNode($addtime));
 $el_photo=$message->appendChild(new DOMElement('photo'));
 $el_photo->appendChild($dom->createTextNode($photo));
 $dom->save("data.xml");  //保存XML

 echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\">\n";
 echo "谢谢您的留言，2秒钟返回首页";
}
?>