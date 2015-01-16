
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Home</title>
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
        <div>
            <a href="wisegeek.php">wiseGeek</a>
            <script type="text/javascript">dotime();</script>
            <table><td height="100%" width="100%" align="center" valign="middle">
            <h1 id="t"></h1>
            </td></table>	
        </div>
    </body>
</html>
