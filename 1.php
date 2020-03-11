<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database Mysql</title>
</head>
<body>
	<h1>Demo Koneksi Database Mysql</h1>
	<?php
	$con = mysqli_connect("localhost","root","","myDb");

	//check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect Mysql ".mysqli_connect_errno()
		;
		exit();
	}
	else{
		echo "hiyahiya";
	}
	?>
</body>
</html>