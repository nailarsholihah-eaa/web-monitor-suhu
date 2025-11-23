<?php
$hostname = "sql211.infinityfree.com";
$username = "if0_40435895";
$password = "nailazain21";
$database = "if0_40435895_sensor_db"; // ganti sesuai nama database kamu

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
