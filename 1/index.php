<?
if($_POST[sub])
 {
 	$ps=md5($_POST[password].ALL_PS)=="e18f8200bbe2fb0b0176a3b5c6228d3e";
 	if($ps)
    {
 		setcookie("login","ok",time()+3600*2);
		header("Location:wisegeek.php");
 	}
 }
if(isset($_COOKIE["login"]))
{
    header("Location:wisegeek.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Home</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script>
	function dotime(){
	
	$("body").css({"transition": "all 0.8s", "-webkit-transition": "all 0.8s"});
	
	var d = new Date();
	var hours = d.getHours();
	var mins = d.getMinutes();
	var secs = d.getSeconds();
	
	if (hours < 10){hours = "0" + hours};
	if (mins < 10){mins = "0" + mins};
	if (secs < 10){secs = "0" + secs};
	
	hours.toString();
	mins.toString();
	secs.toString();
	
	$("#t").html(hours +" : "+ mins +" : "+ secs);
	var hex= "#"+ hours + mins + secs;
	document.body.style.background = hex;
	
	setTimeout(function(){ dotime();}, 1000);
}</script>

<style>

    @media all and (max-width: 1024px) {
    
    h1 { font-family:"open sans"; font-size:40px; font-weight:300; color:white; transition:all 0.6s; -webkit-transition:all 0.6s;}
    h2 { font-family:"open sans"; font-size:20px; font-weight:300; color:white; transition:all 0.6s; -webkit-transition:all 0.6s;}
    
    }
    
    @media all and (min-width: 1024px) {
    
    h1 { font-family:"open sans"; font-size:120px; font-weight:300; color:white; transition:all 0.6s; -webkit-transition:all 0.6s;}
    h2 { font-family:"open sans"; font-size:30px; font-weight:300; color:white; transition:all 0.6s; -webkit-transition:all 0.6s;}
    
    }
    
    table { position:absolute; width:100%; height:100%; top:0px; left:0px;}
    .fb-like {position:static; width:100px;}
    .fixthis{display:block}
</style>
    
</head>
    
	<body>
        <div class="container">
            <script type="text/javascript">dotime();</script>
            <table><td height="100%" width="100%" align="center" valign="middle"><h1 id="t"></h1></td></table>
        	<div id="myform" class="row" style="margin-top:60px">
				<div class="col-md-offset-4 col-md-4">
					<form role="form" action="" method="post">
						<div class="form-group">
                            <input type="password" autofocus="autofocus" class="form-control" name="password" placeholder="Password" />
							<input type="hidden" name="sub" value="sub" />
						</div>
					</form>
				</div>
			</div>
        	
            <?
				$st = new SaeStorage();
            	$domain = "tips";
            	$filename = "tips.html";
            	$content = $st->read( $domain, $filename );
				$last = explode("\r\n",$content);
				$last = $last[count($last)-1];
				$last = str_replace("medias/tips.html","http://hellojian-tips.stor.sinaapp.com/tips.html",$last);
			?>  
            <div class="text-center"><button class="btn btn-muted" type="button">Do you know ?<span class="badge"><? print_r($last); ?></span> </button></div>
    </div>
</body>
</html>