<?php
include "connection.php";
$nis = $_GET['nis'];
$data = mysqli_query($mysqli, "SELECT * FROM datainput WHERE nis='$nis'");
$hasil = mysqli_fetch_array($data);
?>
<center>
<h2>Update Data</h2>
<form method="POST" action="updateproses.php">
<table>
<tr><td>NIS</td><td>:</td>
<td><input type="text" name="nis" value="<?php echo $hasil['nis']; ?>" readonly></td></tr>

<tr><td>Nama</td><td>:</td>
<td><input type="text" name="nama" value="<?php echo $hasil['nama']; ?>"></td></tr>

<tr><td>Alamat</td><td>:</td>
<td><input type="text" name="alamat" value="<?php echo $hasil['alamat']; ?>"></td></tr>

<tr><td></td><td></td><td><input type="submit" value="Update"></td></tr>
</table>
</form>
</center>