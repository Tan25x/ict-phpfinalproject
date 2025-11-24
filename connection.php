<?php
$mysqli = new mysqli("localhost", "root", "", "crudphp");
if ($mysqli->connect_errno) {
    echo "Failed to connect: " . $mysqli->connect_error;
    exit();
}
?>