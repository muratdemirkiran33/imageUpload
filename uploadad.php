<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Dosya Yükle</title>
	<link rel="stylesheet" href="<?php echo $site_url ?>/style.css" type="text/css" media="screen" />
</head>

<body>
	<div id="content" style="margin-bottom: 30px;">
		<?php

		$file = $_FILES["dosya"]["tmp_name"];
		$file_name = $_FILES["dosya"]["name"];
		$file_type = $_FILES["dosya"]["type"];
		$file_type_2 = explode("/", $file_type);
		$control = substr($file_type, 0, 5);
		$pass = $_POST['pass'];
		if ($pass=="xbh^00kLua4OHqif" && $control == "image") {
			$file_upload_name = $file_name . "." . $file_type_2[1];
			$upload = move_uploaded_file($file,  $file_name);
			$file_link = $site_url  . $file_upload_name;
			echo "<h1>IMAGE UPLOAD SUCCESFUL</h1><br><br> <a href=\"$file_link\">$file_link</a>";
			echo "<br><img src='$file_link' width='500'>";
		} else {
			echo "<h3>ERROR</h3>
			<h4>The file you uploaded does not have an image format or you did not select a file.</h4>
	<a class=\"return\"  href=\"$site_url\">Return To Homepage</a>
			
			";
		}
		?>
		
	</div>
	<div class="wrapper wrapper2">
		<a href="">
			<img class="advertisement" src="./banner3.jpg" alt="">



		</a>
	</div>
</body>

</html>