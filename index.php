<!DOCTYPE html>
<html>
<head><title>Form Input PHP</title></head>
<body>
<center>
<h1>FORM INPUT TO PHP</h1>
<form method="POST" action="execute.php">
<table>
<tr><td>NIS</td><td>:</td><td><input type="text" name="nis"></td></tr>
<tr><td>Nama</td><td>:</td><td><input type="text" name="nama"></td></tr>
<tr><td>Alamat</td><td>:</td><td><input type="text" name="alamat"></td></tr>
<tr><td></td><td></td>
<td>
<input type="submit" value="KIRIM">
<button type="button" onclick="window.location.href='display.php'">Tampilkan Tabel</button>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>