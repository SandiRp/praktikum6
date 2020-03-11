<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="LawnGreen">
<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];
include 'connect.php';
$sql = "INSERT INTO buku_tamu(id_bt,nama,email,isi)
		VALUES('','$nama','$email','$isi')";

if (mysqli_query($conn,$sql)) {
	echo "<center><br>Terima Kasih Telah Mengisi <br>Sampai Jumpa Kembali:)</center>";
}else{
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>
<form method="POST" action="isi.php" >
	<center>
		<br>
		<input type="submit" name="kembali" value="Kembali">
	</center>
</form>
</body>
</html>