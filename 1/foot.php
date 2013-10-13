<?php
if(isset($_COOKIE["login"]))
{
//	include_once("head.php");104, 153, 206<embed src="js/home.mp3" width="0" height="0"></embed>
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="./js2/mootools.js"></script>
<script type="text/javascript" src="./js2/accordions.js"></script>
<link href="./js2/accordions.css" type="text/css" rel="stylesheet"  />
<link href="js/type.css" type="text/css" rel="stylesheet"  />
<title>Home</title>
</head>

<body  style="color:white;font-family:verdana;">
<a class="bshareDiv" href="http://www.bshare.cn/share">分享按钮</a><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#uuid=&amp;style=3&amp;fs=4&amp;textcolor=#fff&amp;bgcolor=#9C3&amp;text=分享到"></script>
<div id="music">
<embed src="http://www.xiami.com/widget/10865170_1569771,380332,7310,389730,3406085,1769042606,3406088,1770709176,65120,3609661,3609659,65090,174652,2051501,174333,24124,390071,3320597,3061532,3105424,1771089592,1769692748,2084035,2090657,2051498,51601,51954,3402181,1771545992,1771541650,1771545988,394590,394604,394596,148274,1771892097,2723106,1381654,_235_346_FF8719_494949_0/multiPlayer.swf" type="application/x-shockwave-flash" width="235" height="346" wmode="opaque"></embed>
</div>

        <div id="div1"><img src="js/public-bg9.jpg" /></div>   
        <div id="right"><div class="shortcut-bg"></div><div class="shortcut-text"><a href="http://baidu.com" target="_blank">百度一下</a></div></div>
        <div id="header-bg"></div>
        <div id="header-fading"></div> 
<div style="top: 20px;
position: fixed;
height:30px;
width: 70%;
z-index:19; 
left:15%;
text-align: center;">
    <p><span style="float:left;"><a href='#' onClick="window.open('add.php','Add','left=200,top=220,width=620,height=430,location=no,menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no')">添加留言</a></span><span style="float:right;"> <a href='log.php?out=out'>LogOut</a></span></p>
    <script type="text/JavaScript">
   					 document.write("<span id='clock'></span>");
  					 var Digital,hours,minutes,seconds,timeValue,years,months,dates,day,Dday;
  					 function showtime()
   					 {
    					Digital=new Date();
						years=Digital.getFullYear();
						months=Digital.getMonth();
						dates=Digital.getDate();
						day=Digital.getDay();
						Dday=new Array("日","一","二","三","四","五","六");
						hours = Digital.getHours();
						minutes = Digital.getMinutes();
						seconds = Digital.getSeconds();
						months=months+1;
						if(months<=9)
							months="0"+months;
						if(dates<=9)
							dates="0"+dates;
						if(hours<=9)
							hours="0"+hours;
	   					timeValue=years+"年"+months+"月"+dates+"日 星期"+Dday[day]+"<br>&nbsp;";
						timeValue += hours + "点";
						timeValue += ((minutes <10)?"0":"") + minutes+"分";
						timeValue += ((seconds <10)?"0":"") + seconds+"秒";
						clock.innerHTML = timeValue;
						setTimeout("showtime()",1000);
   					 }
    				showtime()
				</script>
</div>

<?php
$dom=new DOMDocument('1.0','utf-8');   
$dom->load("data.xml");       //加载
$root=$dom->getElementsByTagName("messages"); 
$root=$root->item(0);      
$message=$root->getElementsByTagName("message");   //获取所有message节点
$message_count=$message->length;   //计算有多少条
?>
<div style="top: 100px;
position: absolute;width: 100%;
left:0;z-index:29; ">
    <p class="accToggler" style="background-color: rgb(194, 111, 114); "><? 
if($message_count==0){
 echo "暂时没有留言\n";}
 else{echo "当前共有".$message_count."条留言";}
?></p>
	<p class="accContent" style="overflow-x: hidden; overflow-y: hidden; visibility: visible; height: 120px; opacity: 1;">
		
	</p><?php
  if($message_count!=0){

  
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
<p class="accToggler" style="background-color:#789262; " ><? echo $id."> &nbsp;".base64_decode($title);  
   echo "<span style='float:right;'>".base64_decode($author)." @ [".$addtime."] "."&nbsp; <a href='del.php?id=".$id."'> [删除]</a><span>";?>
</p>
    <p class="accContent" style="overflow-x: hidden; overflow-y: hidden; visibility: visible; height: 120px; opacity: 1;">
	
 <?       echo base64_decode($content);
  if($photo!="NONE")
  {
      echo "<br/><img style='max-width:100%' src='upfile/".base64_decode($photo)."'><br/>";
  }
 }
  }
        ?>
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