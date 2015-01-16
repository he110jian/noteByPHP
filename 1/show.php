<?php
$mysql = new SaeMysql();

$sql = "SELECT * FROM `note`";
$data = $mysql->getData( $sql );
$mysql->runSql($sql);
if ($mysql->errno() != 0)
{
    die("Error:" . $mysql->errmsg());
}
$mysql->closeDb();


$message_count=count($data);   //计算有多少条
if($message_count==0)
{
	echo "<h3>暂时没有留言";
}
else
{
	echo "<h3>当前共有<span id='count'>".$message_count."</span>条留言</h3>";
}
echo '<div id="leaveMSG" style="position: absolute; top: 0px; width: 100%;" class="text-center"><a class="btn btn-success" data-toggle="modal" data-target="#myModal">Leave A Message</a></div>';
if($message_count!=0)
{
	echo "<div class='panel-group' id='accordion'>";
	for($i=$message_count-1;$i>=0;$i--)
	{
		$msg=$data[$i];
		$title=$msg['title'];
        $content=$msg['content'];
        $addtime=$msg['time'];
        $file=$msg['filePath'];
	
?>
		<div class="panel panel-default" id="<?php echo $addtime;?>">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>">
					<? echo "<span  class='glyphicon glyphicon-circle-arrow-right'></span><span id='title".$i."'> ".($title); 
					echo "</span><small class='pull-right text-muted'>".$addtime."</small>";?></a>
				</h4>
			</div>
			<div id="collapse<?php echo $i;?>" class="panel-collapse collapse">
				<div class="panel-body">
				<p id="msg<?php echo $i;?>">
					<?php echo ($content)."</p>";
    /*
					if($photo!="NONE")
					{
						$photo = base64_decode($photo);
						$type = substr(strrchr($photo, '.'),1);
						$types = array("jpg","gif","bmp","jpeg","png");
						if(!in_array(strtolower($type),$types))
						{
							echo "<a href='medias/upfile/".$photo."'><span class='glyphicon glyphicon-save' id='photo".$i."'> ".$photo."</span></a>";
						}
						else
						{
							echo "<a href='medias/upfile/".$photo."' target='_blank'><img src='medias/upfile/".$photo."' class='img-responsive' alt='".$photo."'/>";
						}
					}*/
					?>
					<hr/>
					<p class="text-center"><a href='javascript:void(0);' onclick='edit(<?php echo $i;?>)' class='pull-left text-info'><span class='glyphicon glyphicon-edit'></span></a><a href='javascript:void(0);' onclick="fix('collapse<?php echo $i;?>');"><span id="fixcollapse<?php echo $i;?>" class='glyphicon glyphicon-pushpin'></span></a><a class='pull-right text-danger' href='javascript:void(0);' onclick="return delcfm('<?php echo $addtime;?>');"><span class='glyphicon glyphicon-remove'></span></a></p>
					</div>
					</div>
					</div>
	}
					<?php
echo "</div>";
}
?>