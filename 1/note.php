<?php
error_reporting(E_ALL & ~E_NOTICE);
define(ALL_PS,"binggo");   //
//=======================================登录
 if($_POST[sub])
 {
 	$ps=md5($_POST[password].ALL_PS)=="e18f8200bbe2fb0b0176a3b5c6228d3e";
 	if($ps)
    {
 		setcookie("login","ok",time()+3600*2);
		header("Location:note.php");
 	}
 }
//===========================退出登录 
?>
<?php if(isset($_COOKIE["login"]))
{?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Remember</title>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link href="css/my.css" rel="stylesheet">

</head>
<!-- NAVBAR
================================================== -->
<body>
<?php 
			$id = rand(0,46);
			$st = new SaeStorage();
            $domain = "tips";
            $filename = "imgList.txt";
            $content = $st->read( $domain, $filename );

			$last = explode("\r\n",$content);
			$last = $last[$id];
?><!--
 <div class="s-skin-container" style="background-color:rgb(64, 64, 64);background-image:url('http://images.wisegeek.com/images/dyk/<?php echo $last;?>.jpg');"></div>-->
    <div class="container"> 
		<div class="middlediv">
            <div id="music">
<embed src="http://www.xiami.com/widget/10865170_1569771,1772602470,1770546043,1773257370,176980,381674,1769327682,1771855472,1771971284,1481203,
380332,7310,389730,3406085,65120,174652,2051501,174333,24124,390071,3320597,3061532,3105424,1771089592,1769692748,2084035,2090657,2051498,51601,
1769176495,1772301196,51954,3402181,1768918287,1769004673,380490,2067242,2113248,1773447486,1771545992,1771541650,1771545988,394590,394604,394596,
148274,1771892097,2723106,1381654,_235_346_FF8719_494949_0/multiPlayer.swf" type="application/x-shockwave-flash" width="235" height="346" wmode="opaque"/>
</div>
			<?php include("show.php");
            		include("top.html");?>
		</div>
    <!-- FOOTER -->
    </div>
	<!-- /.container -->
	<!-- modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">For Remember</h4>
      </div>
	  <form role="form" enctype="multipart/form-data">
      <div class="modal-body">
		<div class="form-group">
			<label>主题</label>
			<input id="titleE" class="form-control" name="title" placeholder="Title" required />
		</div>
		<div class="form-group">
			<label>内容</label>
			<div class="btn-group pull-right" data-toggle="buttons">
			  <label class="btn btn-default btn-xs active">
				<input type="radio" name="options" value="1" autocomplete="off" checked> 文本
			  </label>
			  <label class="btn btn-default btn-xs">
				<input type="radio" name="options" value="2" autocomplete="off"> 代码
			  </label>
			</div>
			<textarea id="contentE" class="form-control" rows="5" name="content" placeholder="Content"></textarea>
		</div>
          
          
		<div class="form-group">
			<label>图片URL</label>
            <input id="fileE" class="form-control" name="filePath" placeholder="http://...jpg"/>
		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" id="remember" value="Save Message"/>
      </div>
        </form>
    </div>
  </div>
</div>

	<?php
}
else
{
	echo 'log please!<br>back to index page in 3 seconds......';
	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3;URL=index.php\">";
}
?>
<script language="javascript">
        $('form').bind('submit', function(){
            document.getElementById('remember').value = 'Uploading...';
            var params = $("form").serialize();
            var url = "insert.php";
            $.ajax({
                type: "post",
                url: url,
                dataType: "json",
                data: params,
                success: function(msg){
                    document.getElementById('remember').value = 'Save Message';
                    $('#myModal').modal('hide');
                    $("#titleE").val('');
                    $("#contentE").val('');
                    $("#fileE").val(''); 
                    if(msg.update===-1)
                    {
                    	var i = $("#count");
						i.text(parseInt(i.text())+1);
                        i = i.text();
                        var add = "<div class='panel panel-default' id='"+msg.time+"'><div class='panel-heading' role='tab' id='headingOne'><h4 class='panel-title'><a data-toggle='collapse' data-parent='#accordion' href='#collapse"+i+"'><span  class='glyphicon glyphicon-circle-arrow-right'></span><span id='title"+i+"'> "+msg.title+"</span><small class='pull-right text-muted'>"+msg.time+"</small></a></h4></div><div id='collapse"+i+"' class='panel-collapse collapse in'><div class='panel-body'><p id='msg"+i+"'>"+msg.content+"</p><hr/><p class='text-center'><a href='javascript:void(0);' onclick='edit("+i+")' class='pull-left text-info'><span class='glyphicon glyphicon-edit'></span></a><a class='pull-right text-danger' href='javascript:void(0);' onclick=\"return delcfm(\'"+msg.time+"\');\"><span class='glyphicon glyphicon-remove'></span></a></p>";
                        var tail = "</div></div></div>";
                        var pic = "";
                        if(msg.filePath)
                        {
                            if(msg.pic)
                            {
                                 pic = "<a href='"+msg.filePath+"' target='_blank'><img src='"+msg.filePath+"' class='img-responsive' alt='"+msgfilename+"'/>";
                            }
                            else
                            {
                                pic = "<a href='"+msg.filePath+"'><span class='glyphicon glyphicon-save'> "+msg.filename+"</span></a>";
                            }
                        }
                        add = add + pic + tail;
                        $("#accordion").prepend(add);
                    }
                    else
                    {
                        $('#msg'+msg.update).html(msg.content);
                    }
                }
            });
            return false;
        });

    function delcfm(str) {
		var f = confirm("Never Mind?");
		if(f){
			showChange(str);
			return true;
		}
		else{
			return false;
		}
	}
    function delVer() {
		var f = confirm("Back Later?");
		if(f){
			return true;
		}
		else{
			return false;
		}
	}
	function edit(id) {
		var msg = document.getElementById("msg"+id);
		var msg_v = msg.innerText;
		var des = document.getElementById("contentE");
		des.value = msg_v;
		msg = document.getElementById("title"+id);
		msg_v = msg.innerText;
		des = document.getElementById("titleE");
		des.value = msg_v;
		$('#myModal').modal('show');
	}
	function showChange(str) {
		var xmlhttp;/*
		if (str.length==0){
			document.getElementById("txtHint").innerHTML="";
			return;
		}*/
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
                
					var parent=document.getElementById("accordion");
					var child=document.getElementById(str);
					parent.removeChild(child);
					var i = $("#count");
					i.text(parseInt(i.text())-1);
				
			}
		}
		xmlhttp.open("GET","del.php?id="+str,true);
		xmlhttp.send();
	}
	$(window).scroll(function() {
		$("#leaveMSG").stop().animate({ top: $(window).scrollTop() }, "slow");
  });

</script>
</body>
</html>