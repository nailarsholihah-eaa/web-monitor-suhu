<?php
include "koneksi.php"; // pastikan file ini membuat variabel $koneksi

if (isset($_GET['suhu']) && isset($_GET['kelembaban'])) {
    $suhu = $_GET['suhu'];
    $kelembaban = $_GET['kelembaban'];

    // Simpan ke database
    $query = "INSERT INTO sensor_data (suhu, kelembaban, waktu) VALUES ('$suhu', '$kelembaban', NOW())";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
} else {
    echo "Parameter suhu/kelembaban tidak dikirim!";
}
?>
