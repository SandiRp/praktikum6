<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if (!$conn) {
	die("Connection failed".mysqli_connect_error());
}
$sql = "INSERT INTO liga(id,KODE,negara,champion)
		VALUES('01','jer','jerman','4'),
			('02','spa','spanyol','3'),
			('03','eng','english','3')";

if (mysqli_query($conn,$sql)) {
	echo "NEW RECORD CREATED SUCCESSFULLY";
}else{
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>