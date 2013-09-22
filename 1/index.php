<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>div+css</title>

<style type="text/css">

#wrap{
	max-width: 1200px; 
	margin-top: 2%;
	margin-left: 10%;
	margin-right: 10%;
	font-size:0.88em;
  <!-  background: url(divCss.gif) repeat-y 90% 0;  !>
}

header[role="banner"]{
	background: #666;
	}

#content {
	float: left;
	width: 68%;
	margin-right: 2%;
	background: #CCC;
	}

#sidebar {
  float: right;
  width: 28%;
  padding: 1%;
  background: #999;
  }

footer[role="contentinfo"]{
  clear: both;
  background: #DDD;
  }

</style>
</head>

<body >
<div id="wrap">
  <header role="banner">
    <h1>Header Goes Here</h1>
  </header>
  <div id="sidebar"role="complementary">
   <p>
LALALA	
	</p>
  </div>

  <div id="content"role="main">
    ... content goes here ...
<p>
CACACACA
</p>
  </div>

   <footer role="contentinfo">
    ... footer goes here ...
  </footer>
</div> 
</body>
</html>
