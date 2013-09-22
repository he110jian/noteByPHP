<?php
include_once('global.php');
$type=$_GET['type'];
$query = "select * from activity where type like $type order by pub_day desc";
$result = $db->query($query);
?>
<div style="width:400px; height:300px; border:1px solid #aaa; background:#fff; position:relative; z-index:500; overflow:hidden; text-align:left">
	
	<dl>
        <dt><strong>activity</strong><span style="float:right"><a href="#">more...</a></span></dt>
		<hr>
			
			<marquee onmouseover="this.stop()" onmouseout="this.start()" height=100% scrollDelay=200 direction="up" scrollmount="7">
		<?php 
		$i=0;
		while($i<10 && ($rows = $db->fetch_array($result)))	
		{  ?>
<p>&nbsp<strong>¡¤</strong>  <a href="#"><?php echo $rows['title'];?></a><span style="float:right">@ <?php echo $rows['pub_day'];?>&nbsp;&nbsp;</span></p>
  <?php	$i++;
		} ?>
			</MARQUEE>
	
	</dl>

</div>
<br/>
<?php

$query = "select * from news where type like $type order by pub_day desc";
$result = $db->query($query); ?>
<div style="width:400px; height:300px; border:1px solid #aaa; background:#fff; position:relative; z-index:500; overflow:hidden; text-align:left">
	<ul>
		<dl >
        <dt><strong>news</strong><span style="float:right"><a href="#">more...</a></span></dt>
		<hr>
		
			<marquee onmouseover="this.stop()" onmouseout="this.start()" height=100% scrollDelay=200 direction="up" scrollmount="7">	
<?php 
		$j=0;
		while($j<10 && ($rows = $db->fetch_array($result)))
		{  ?>
<p> &nbsp<strong>¡¤</strong> <a href="#"><?php echo $rows['title'];?></a><span class="date">@ <?php echo $rows['pub_day'];?></span></p>
  <?php	$j++;
		} ?>
			</MARQUEE>
	
	</dl>
</ul>
</div>

