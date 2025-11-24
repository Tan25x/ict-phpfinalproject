<?php
include "connection.php";
$nis = $_GET['nis'];
mysqli_query($mysqli, "DELETE FROM datainput WHERE nis='$nis'");
header("Location: display.php");
?>