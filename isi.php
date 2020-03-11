<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="coral">
	<table align="center">
		<form method="POST" action="fungsi.php">
		<center><h1>Form Buku Tamu</h1></center>
		<tr>
			<td width="130" >Nama </td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="130">Email </td>
			<td>:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td width="130">isi </td>
			<td>:</td>
			<td><input type="text" name="isi"></td>
		</tr>
		<tr><td><br></td></tr>
		<tr align="center">
			<td colspan="3"><input type="submit" name="kirim" value="Kirim">
				<input type="reset" name="reset" value="Hapus"></td>
		</tr>
		</form>
	</table>
</body>
</html>