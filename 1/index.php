<?php
if(!isset($_COOKIE["login"]))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>
    <body  style="color:white;font-family:verdana;" onload=focus()>
	<script language="JavaScript" type="text/javascript">
  function focus(){
  		form2.password.focus();
}
</script>
        <div id="div1"><img src="js/public-bg9.jpg" /></div>   
        <div id="right"><div class="shortcut-bg"></div><div class="shortcut-text"><a href="http://baidu.com" target="_blank">百度一下</a></div></div>
        <div id="header-bg"><script defer src="http://julying.com/lab/weather/v3/jquery.weather.build.min.js?parentbox=body&moveArea=all&zIndex=1&move=1&drag=1&autoDrop=0&styleSize=small&style=_random&area=client&city=%E5%8C%97%E4%BA%AC"></script></div>
        <div id="header-fading"></div>
<div id="fom">
  <form name="form2" action="log.php" method="post" >
<br/>
      Password:
  <input type="password" name="password" /><br />
  <input type="hidden" name="sub" value="sub" />
  </form>
</div>
<div style="position: absolute;
top: 110px;
left: 15%;
width: 70%;">
<script type="text/javascript" src="http://www.thinkpage.cn/reader/widget.aspx?an=0&mc=10&sd=1&sde=0&ss=1&feed=blog.csdn.net/rss/Expert.aspx"></script>
<script type="text/javascript" src="http://www.thinkpage.cn/reader/widget.aspx?an=0&mc=10&sd=1&sde=0&ss=1&feed=http%3A//news.google.com/%3Fned%3Dus%26topic%3Dw%26output%3Drss"></script>
<script type="text/javascript" src="http://www.thinkpage.cn/reader/widget.aspx?an=0&mc=10&sd=1&sde=0&ss=1&feed=www.youku.com/index/rss_cool_v/"></script>
<script type="text/javascript" src="http://www.thinkpage.cn/reader/widget.aspx?an=0&mc=20&sd=1&sde=0&ss=1&feed=rss.sina.com.cn/news/marquee/ddt.xml"></script>
</div>
  <?php
 }
else{
  echo "<meta http-equiv=\"refresh\" content=\"3;url=foot.php\">waittong for 3seconds ...";
 }
?>
</body>
</html>
