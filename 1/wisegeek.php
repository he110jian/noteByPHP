<?php

header("Content-type: text/html; charset=utf-8");//防止中文乱码
/*
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
echo $st->read( $domain, $filename );*/
$id = rand(0,46);
$contents = file_get_contents("http://images.wisegeek.com/images/dyk/");
			$reg='/\.jpg">([\s\S]*?)\.jpg</i';
			preg_match_all($reg, $contents,$matches);
			print_r($matches[1]);

			$st = new SaeStorage();
            $domain = "tips";
            $filename = "imgList.txt";
			$attr = array('encoding'=>'gzip');
			$result = $st->write($domain,$filename, $matches[1], -1, $attr, true);
?>