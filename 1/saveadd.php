<?php
if(!$_POST["author"] || !$_POST["content"]) 
{
 echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\">\n";
 echo "��û����д�������������ݣ�2���ӷ�����ҳ";
 exit();
}else{
 $imgflag=0;   //�����ж��Ƿ���Ҫ�ϴ�ͼƬ
 function random($length)   //�˺�����������һ�������ͼƬ�ļ�����������չ�������Է�ֹ������ͼƬ�ظ�
 { 
  $hash = 'IMG-'; 
  $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz'; 
  $max = strlen($chars) - 1; 
  for($i = 0; $i < $length; $i++)    //��������ַ����������length���ȸ��ַ�
  { 
   $hash .= $chars[mt_rand(0, $max)]; 
  } 
  return $hash; 
 }
 function fileext($filename)   //�˺������ڻ�ȡ�ϴ��ļ�����չ��
 { 
  return substr(strrchr($filename, '.'), 1); 
 } 
 
 if($_FILES["upfile"]["name"]!=""){
  $uploaddir="upfile/";   //ͼƬ����·��
  $type=array("jpg","gif","bmp","jpeg","png");   //�����ϴ����ļ�����
  if(!in_array(strtolower(fileext($_FILES['upfile']['name'])),$type))   //����ϴ����ļ�����չ��������Ҫ��
  { 
   echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\">\n";
   $text=implode(",",$type); 
   echo "��ֻ���ϴ����������ļ�: ",$text,"<br>"; 
   exit();
  } 
  else
  {
   $filename=explode(".",$_FILES['upfile']['name']); 
   do 
   { 
    $filename[0]=random(10);
    $randname=implode(".",$filename);     //�õ�������������ɵ��ļ�������ͬ��չ����
    $uploadfile=$uploaddir.$randname; 
   } while(file_exists($uploadfile));
   if (move_uploaded_file($_FILES['upfile']['tmp_name'],$uploadfile)){   //�����ϴ���ͼƬ��upfile�ļ���
    echo "�ϴ�ͼƬ�ɹ�"; 
    $imgflag=1;
   } 
   else{ 
    echo "�ϴ�ͼƬʧ�ܣ�"; 
    $imgflag=0;
   }
  }
 }
//��ȡ��������
 $author=base64_encode($_POST["author"]);   
 $content=base64_encode(ereg_replace("\r\n","<br>",$_POST["content"]));
 $smiles=base64_encode($_POST["smiles"]);
 if($_POST["title"]){
  $title=base64_encode($_POST["title"]);
 }else{
  $title=base64_encode("�ޱ���");
 }
 $addtime=date("Y-m-d");
 if($imgflag==1){  //������ϴ�ͼƬ
  $photo=base64_encode($randname);
 }else{  //����photoԪ�ص�ֵ����ΪNONE
  $photo="NONE";
 }

 $dom=new DOMDocument('1.0','gb2312');   //ָ��XML�ĸ�ʽ
 $dom->load("data.xml");     //����
 $root=$dom->getElementsByTagName("messages");   //��ȡ���ڵ�
 $root=$root->item(0);       
 $last_id=$root->lastChild->firstChild->nodeValue;  //��ȡ���һ��message�ĵ�һ���ӽڵ㣨��id�ڵ㣩��ֵ
 $id=$last_id+1;  //������Ϣ��id
 settype($id,"string");  //����ת��Ϊ�ַ���

 $message=$root->appendChild(new DOMElement('message'));  //���message�ڵ�
 $el_id=$message->appendChild(new DOMElement('id'));  //���message�ڵ�ĸ����ӽڵ�
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
 $dom->save("data.xml");  //����XML

 echo "<meta http-equiv=\"refresh\" content=\"2;url=index.php\">\n";
 echo "лл�������ԣ�2���ӷ�����ҳ";
}
?>