<?php
include 'koneksi.php';

// Cegah error jika tanggal tidak dikirim
$start_date = isset($_POST['start_date']) ? $_POST['start_date'] : '';
$end_date = isset($_POST['end_date']) ? $_POST['end_date'] : '';

// Query data
if (!empty($start_date) && !empty($end_date)) {
    $query = "SELECT * FROM sensor_data WHERE waktu BETWEEN '$start_date' AND '$end_date' ORDER BY waktu ASC";
} else {
    // Jika tanggal kosong, ambil semua data
    $query = "SELECT * FROM sensor_data ORDER BY waktu ASC";
}

$result = mysqli_query($koneksi, $query);

// Set header untuk file Excel
header("Content-Type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_suhu.xls");
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Suhu (°C)</th>
        <th>Kelembaban (%)</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['waktu'] . "</td>";
            echo "<td>" . $row['suhu'] . "</td>";
            echo "<td>" . $row['kelembaban'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Tidak ada data pada rentang tanggal tersebut</td></tr>";
    }
    ?>
</table>
