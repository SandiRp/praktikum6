<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
$sql = "SELECT KODE,negara,champion FROM liga";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)) {
	//outputdata
	while ($row = mysqli_fetch_assoc($result)) {
		echo "kode : ".$row["KODE"]." "." Negara: ".$row["negara"]." ".$row["champion"]."<br>";
	}
}else{
	echo "0 result";
}

mysqli_close($conn);
?>
</body>
</html>