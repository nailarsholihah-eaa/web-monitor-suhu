<?php
$hostname = "sql211.infinityfree.com";
$username = "if0_40435895";
$password = "nailazain21";
$database = "if0_40435895_sensor_db";

$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM sensor_data ORDER BY id DESC LIMIT 10"; // ambil 10 data terakhir
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode(array_reverse($data)); // urutkan dari paling lama ke terbaru
$conn->close();
?>
