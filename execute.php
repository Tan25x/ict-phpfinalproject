<?php
include "connection.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

mysqli_query($mysqli, "INSERT INTO datainput (nis, nama, alamat) VALUES ('$nis','$nama','$alamat')");
?>
<h2>Data berhasil disimpan!</h2>
<a href="index.php">ISI FORM</a> | <a href="display.php">TAMPILAN</a>