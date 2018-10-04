<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
	<table align="center" bgcolor="lightgrey" align="center"  style="border:5px double black;">
		<form action="conn.php" colspan="3" method="POST" ali>
			<tr>
				<td align="center" colspan="3">LOGIN</td><br>
			</tr>
			<tr>
				<td>Id</td>
				<td>:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgal_lahir"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submit" value="KIRIM"></td>
			</tr>
		</form>
	</table>
</body>
</html>