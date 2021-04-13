<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Dosya Yükle</title>
	<link rel="stylesheet" href="<?php echo $site_url ?>/style.css" type="text/css" media="screen" />
</head>

<body>
	<div class="wrapper wrapper2">
		<a href="">
			<img class="advertisement" src="./banner.jpg" alt="">



		</a>
	</div>
	<center>

	<h1>Upload and share your images.</h1>
		<h2>
			Drag and drop anywhere you want and start uploading your images now.
			
		</h2>
		<div id="content">
			<form action="uploadad.php" method="post" enctype="multipart/form-data" class="upload-form">
				<input type="file" name="dosya" class="upload">
<br>
				Pass:
				<input type="text" name="pass">
				<input class="submit" type="submit" value="START UPLOADING">
				
			</form>
		</div>

		</form>

</center>

	<div class="wrapper wrapper2">
		<a href="">
			<img class="advertisement" src="./banner2.jpg" alt="">


		</a>
	</div>


</body>

</html>