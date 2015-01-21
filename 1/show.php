<?php
$mysql = new SaeMysql();

$sql = "SELECT * FROM `note` order by time asc"; 
$data = $mysql->getData( $sql );
$mysql->runSql($sql);
if ($mysql->errno() != 0)
{
    die("Error:" . $mysql->errmsg());
}
$mysql->closeDb();


$message_count=count($data);   //计算有多少条

    echo "<h3><span id='count' class='text-danger'>".$message_count."</span><a href='out.php?out=out' onclick='return delVer()'><span class='pull-right glyphicon glyphicon-remove-circle'></span></a></h3>";

echo '<div id="leaveMSG" style="position: absolute; top: 0px; width: 61.8%;" class="text-right"><a class="btn btn-success" data-toggle="modal" data-target="#myModal">Leave A Message</a></div>';
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
    
					if($file)
					{
                        $filename=basename($file);
						$type = substr(strrchr($filename, '.'),1);
						$types = array("jpg","gif","bmp","jpeg","png");
						if(!in_array(strtolower($type),$types))
						{
							echo "<a href='".$file."' id='file".$i."'><span class='glyphicon glyphicon-save'> ".$filename."</span></a>";
						}
						else
						{
                            echo "<a href='".$file."' target='_blank' id='file".$i."'><img src='".$file."' class='img-responsive' onerror=\"this.src='../upfile/loading.gif';\" alt='".$filename."'/></a>";
						}
					}
					?>
                    <hr/>
					<p class="text-center"><a href='javascript:void(0);' onclick='edit(<?php echo $i;?>)' class='pull-left text-info'><span class='glyphicon glyphicon-edit'></span></a>
                        <a class='pull-right text-danger' href='javascript:void(0);' onclick="return delcfm('<?php echo $addtime;?>');"><span class='glyphicon glyphicon-remove'></span></a></p>
					</div>
					</div>
					</div>
	
					<?php
    }
    echo "<div><a href="javascript:void(0)"><span id="showall" class="pull-right glyphicon glyphicon-chevron-left"></span></a></div></div>";
}
?>