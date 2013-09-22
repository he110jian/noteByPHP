
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>HELLO</title>

<script src="js/prototype.lite.js" type="text/javascript"></script>
<script src="js/moo.fx.js" type="text/javascript"></script>
<script src="js/moo.fx.pack.js" type="text/javascript"></script>
<link href="js/type.css" type="text/css" rel="stylesheet"  />
</head>
<?
	echo "HELLO";
?>
<body>
	<div>
        <h3 class="type" style="background-color:#6899CE"><a href="javascript:void(0)">activity</a></h3>
        <div class="content">
<p>

<marquee onmouseover="this.stop()" onmouseout="this.start()" height=100% scrollDelay=200 direction="up" scrollmount="7">	
    asdasdasffasf
	   </MARQUEE>
	 
</p>	
		</div>
        <h4 class="type"><a href="javascript:void(0)">more1</a></h4>
        <div class="content">
          <p>
           <div class="txt">
		hellooooooooooooooooo
				</div>
          </p>
        </div>
        <h3 class="type" style="background-color:#6899CE"><a href="javascript:void(0)">newss</a></h3>
        <div class="content">
        <p>

		<marquee onmouseover="this.stop()" onmouseout="this.start()" height=100% scrollDelay=200 direction="up" scrollmount="7">	
     kkkiisadas
	   </MARQUEE>
		</p>
        </div>
		<h4 class="type" ><a href="javascript:void(0)">more2</a></h4>
        <div class="content">
          <p><div class="txt">
		  
					sadasd
				</div>
		  </p>
        </div>
    </div>
   <script type="text/javascript">
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('type');

		var myAccordion = new fx.Accordion(
			toggles, contents, {opacity: true, duration: 400,			
			//when an element is opened change the background color to blue
		onActive: function(id){
			id.style.backgroundColor="#6899CE";
		},
		onBackground: function(id){
			//change the background color to the original (green) 
			//color when another toggler is pressed
			id.style.backgroundColor="#cccccc";
		}
		});
		myAccordion.showThisHideOpen(contents[0]);myAccordion.showThisHideOpen(contents[2]);
</script>       
</body>
</html>
