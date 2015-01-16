<?php
header("Content-type: text/html; charset=utf-8");//防止乱码

Function update(){
	$ftp_server = "223.3.85.5";
	$ftp_user = "ftp537";
	$ftp_pass = "537";
	$conn_id = ftp_connect($ftp_server,8888) or die("Couldn't connect to $ftp_server");
	$login_result = ftp_login($conn_id, $ftp_user, $ftp_pass);
	if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!\n";
        echo "Attempted to connect to $ftp_server for user $ftp_user<br/>";
        exit;
    } else {
        echo "Successful! Connected to $ftp_server, for user $ftp_user<br/>";
    }

	$filename="tips.html";
	$source_file="medias/".$filename;  //源地址
	$destination_file="2014/medias/".$filename;  //目标地址
	$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY) or die("Couldn't connect to $ftp_server");
	ftp_quit($conn_id);
	if (!$upload) {
        echo "FTP upload has failed!<br/>";
    } else {
        echo "Done ! Uploaded $source_file to $ftp_server as $destination_file<br/>";
    }
	ftp_close($conn_id);
}

// 爬wisegeek内容
			$contents = file_get_contents("http://www.wisegeek.com/");
			$reg='/<div class="WidgetText">([\s\S]*?)<\/div>/i';
			preg_match_all($reg, $contents,$matches);
			$res = preg_replace("/[\s]+/is"," ",$matches[0][0]);
			$res = str_replace("</a>","</a> | <a href='medias/tips.html'>all</a>",$res);

// 读取Storage
			$st = new SaeStorage();
            $domain = "tips";
            $filename = "tips.html";
            $content = $st->read( $domain, $filename );

//是否得到新的内容
			$last = explode("\r\n",$content);
			$last = $last[count($last)-1];
            if(strcmp($last,$res))
            {
                $addNew = $content."\r\n".$res;
				$attr = array('encoding'=>'gzip');
				$result = $st->write($domain,$filename, $addNew, -1, $attr, true);
            }
			else
            {
                echo "服务器还未更新，请稍后再试，每天17:00更新一条";
            }
			echo $st->read( $domain, $filename );

?>