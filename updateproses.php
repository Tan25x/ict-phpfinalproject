<?php
include "connection.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

mysqli_query($mysqli, "UPDATE datainput SET nama='$nama', alamat='$alamat' WHERE nis='$nis'");
?>
<h2>Selamat data berhasil di rubah</h2>
<a href="index.php">ISI FORM</a> | <a href="display.php">TAMPILAN</a>