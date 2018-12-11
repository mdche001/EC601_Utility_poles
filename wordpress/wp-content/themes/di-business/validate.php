
<!DOCTYPE html>
<html>
<head>
<!-- <style type="text/css">
img{
  position:absolute;
  left:100px;
  top:150px;
  }
</style> -->

<style>
	#header {
	    background-color:black;
	    color:white;
	    text-align:center;
	    padding:5px;
	}
	#nav {
	    line-height:30px;
	    background-color:#eeeeee;
	    height:800px;
	    width:10%;
	    float:left;
	    padding:5px;	      
	}
	#section {
	    height:600px;
	    width:15%;
	    float:left;
	    padding:10px;		 	 
	}
	#section1 {
	    height:600px;
	    width:15%;
	    float:left;
	    padding:10px;		 	 
	}
	#section2 {
	    top:600px;
	    height:600px;
	    width:15%;
	    float:left;
	    padding:10px;		 	 
	}

	#section3 {
	    top:600px;
	    height:600px;
	    width:15%;
	    float:left;
	    padding:10px;		 	 
	}			
	#footer {
	    background-color:black;
	    color:white;
	    clear:both;
	    text-align:center;
	   padding:5px;	 	 
	}
</style>			
</head>

<body>
<div id="header">
	<h1>Information of Pole</h1>
	<?php

		$latlongclicked = $_POST['latlongclicked'];
		$lotlongclicked = $_POST['lotlongclicked']; 
		$latlongclicked = round($latlongclicked,6);
		$lotlongclicked = round($lotlongclicked,6);

		echo "LAT is {$latlongclicked} <br /> LNG is {$lotlongclicked} <br />";
		echo "<script> var lat_java=\"$latlongclicked\";</script>";
		echo "<script> var lot_java=\"$lotlongclicked\";</script>";	
	?>	
</div>

<div id="nav">
	Load: <br>
	Boxes: <br>
	Wires: <br>
</div>

<div id="section">
	<p>
		pole_angle1
	</p>
	
	<img src="" id="pole_angle1" style="height:350px;width:150px"/>
	</div>

<div id="section1">
	<p>
		pole_angle2
	</p>	
	<img src="" id="pole_angle2" style="height:350px;width:150px"/> 
</div>

<div id="section2">
	<p>
		pole_angle3
	</p>	 
	 <img src=""id="pole_angle3" style="height:350px;width:150px"/> 
</div>

<div id="section2">
	<p>
		pole_angle4
	</p>	 
	 <img src=""id="pole_angle4" style="height:350px;width:150px"/> 
</div>

<div id="section2">
	<p>
		pole_model
	</p>	 
	 <img src=""id="pole_model" style="height:300px;width:450px"/> 
</div>

<div id="footer">
	Copyright 2018 Utility Poles
</div>

</script>


		<!-- <img  src=" " /> -->
<!-- <div class="field">
    <input type="text" id="imagedata" name="imagedata" class="input tips" style="width:25%; float:left;" data-toggle="hover" data-place="right" readonly="readonly" />
    <input type="file" onchange="selectImage(this);" id="image" name="image" class="button bg-blue margin-left" value="+ 浏览上传" style="float:left;" >
    <img id="imagedisplay" src="" class="img-news" alt="图片尺寸：205*140"style="margin-left:50px;" />
</div>

<script>
    var image = '';
    function selectImage(file) {
        if (!file.files || !file.files[0]) {
            return;
        }
        var reader = new FileReader();
        reader.onload = function (evt) {
			// 将图片显示在id为imagedisplay的img
            document.getElementById('imagedisplay').src = evt.target.result;
            // 将图片的base64数据存在id为imagedata的一个文本框
            document.getElementById('imagedata').value = evt.target.result.toString();
        }
        reader.readAsDataURL(file.files[0]);
    }
</script>
 -->


<!-- <script type="text/javascript">
	function dynamicUrl() {
  		var url = "D:/program/webcap/venv/pictures_downloaded/0.jpg";
  		var img = document.getElementById('imageid');
  		img.src = url;
	}
</script>

<div>
   <p>Image goes here</p>
   <button onclick="dynamicUrl()">Change Image</button>
</div> -->
<!-- <img id="imageid" src="D:/program/webcap/venv/pictures_downloaded/0.jpg" /> -->

<!-- <p>Click the button to display the formatted number.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
// function myFunction() {
    // var num = var arr="<?php # echo $latlongclicked;?>;"
//     var n = num.toString();
//     document.getElementById("demo").innerHTML = n;
// }
</script> -->


<script type="text/javascript">
	// var lat = getElementById('latlongclicked').value.toFixed(7).toString() //"46.414382"
	// var lng = getElementById('lotlongclicked').value.toFixed(7).toString() //"10.013988"
	// var url = "https://maps.googleapis.com/maps/api/streetview?size=600x300&location="+lat+","+lng+"&heading=151.78&pitch=-0.76&key=AIzaSyBpYdHJXDsByckC1aeA8MThdLsGaVIh9AI"
	var i = lat_java;//43.333
	var j = lot_java;//33.5333223
	// alert(i);
	// alert(j);
	document.getElementById('pole_angle1').src = "http://localhost/images/webcap/venv/pole_link_list/"+i+","+j+"/"+"1.jpg";
	document.getElementById('pole_angle2').src = "http://localhost/images/webcap/venv/pole_link_list/"+i+","+j+"/"+"2.jpg";
	document.getElementById('pole_angle3').src = "http://localhost/images/webcap/venv/pole_link_list/"+i+","+j+"/"+"3.jpg";
	document.getElementById('pole_angle4').src = "http://localhost/images/webcap/venv/pole_link_list/"+i+","+j+"/"+"4.jpg";
	document.getElementById('pole_model').src = "http://localhost/images/webcap/venv/pole_link_list/"+i+","+j+"/"+"1.gif";		
	// document.getElementById('imgInit').src = "http://localhost/images/webcap/venv/pole_link_list/"+i+","+j+"/"+"1.gif";
</script>


<!-- https://maps.googleapis.com/maps/api/streetview?size=600x300&pano=07wrVSRMttIJgsdk5tey2A&heading=151.78&pitch=-0.76&key=AIzaSyBpYdHJXDsByckC1aeA8MThdLsGaVIh9AI -->
<!-- <div id=view></div> -->


<!-- <img src="" id="imgInit" /> -->

<!-- <img src="https://maps.googleapis.com/maps/api/streetview?size=600x300&location=46.414382,10.013988&heading=151.78&pitch=-0.76&key=AIzaSyBpYdHJXDsByckC1aeA8MThdLsGaVIh9AI"/> -->

</body>

<?php

	// echo("Congratulations!\n");
	// $path="D:/Wampserver/wamp64/www/wordpress/wp-content/themes/di-business/webcap/venv";
	// chdir($path);
	// echo getcwd()."\n";


  // 	$path = 'D:/program/webcap/venv/pictures_downloaded/0.jpg';
  // 	$imgInfo = getimagesize($path);
  // 	// jpg
 	// $img = imagecreatefromjpeg($path);
  // 	// 声明文件为图片类型
 	// header('Content-Type:image/jpeg;');
  // 	// 采用jpeg方式输出
  // 	imagejpeg($img);
  // 	// 销毁图片资源
  // 	imagedestroy($img);
  // 	// 删除变量
  // 	unset($img);

	// $url = 'D:/program/webcap/venv/pictures_downloaded/0.jpg';
	// //file_get_contents($url,true); 可以读取远程图片，也可以读取本地图片
	// $img = file_get_contents($url,true);
	// //使用图片头输出浏览器
	// header("Content-Type: image/jpeg; text/html; charset=utf-8");
	// echo $img;


    $command = escapeshellcmd("http://localhost/images/webcap/venv/get_streetview_images.py");
    // $cmd = passthrus("$command",$ret);
   

	

	$output = system("hellp.word.py",$ret);
	echo("ret is $ret");
	// echo $output; C:/Users/synox/Anaconda3/envs/venv/python.exe get_streetview_images.py

    


	// $python = new Python('C:/Users/synox/Anaconda3/envs/venv');
	// $sort = $python->from('array')->import('sort');


?>


    <?php
			// $filename = "D:/program/webcap/venv/pictures_downloaded";
			// $size = filesize($filename);
			// echo $size;
	?>

	
	<!-- $current_url = home_url(add_query_arg(array(),$wp->request));

	echo "$current_url"; -->
</html>