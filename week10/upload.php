
<?php

if ($_FILES["userfile"]["error"] == 0) {

	if(!empty($_FILES["userfile"]["name"])) {
		
		echo "FileName:".$_FILES["userfile"]["name"]."<br>";
		echo "Content-Type:".$_FILES["userfile"]["type"]."<br>";
		echo "FileSize:".$_FILES["userfile"]["size"]."<br>";
		echo "<hr>";
		
		move_uploaded_file($_FILES["userfile"]["tmp_name"], './upload/'.$_FILES["userfile"]["name"]);
	}
} else {
	echo "Error Code: ".$_FILES["userfile"]["error"];
}
?>

<html>
	<head>
		<title>單一檔案上傳</title>
	</head>
	<body>
		<form id="form" name="form" method="post" enctype="multipart/form-data" action="">
			<input type="file" name="userfile" id="userfile" />
			<input type="submit" name="submit" id="submit" value="submit" />
		</form>
	</body>
</html>