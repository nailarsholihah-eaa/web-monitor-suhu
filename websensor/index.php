<?php
include 'koneksi.php';

// Ambil data terbaru
$query = mysqli_query($koneksi, "SELECT * FROM sensor_data ORDER BY waktu DESC LIMIT 1");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DHT11-MOISTURE SOIL WEB SERVER</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="header">MONITORING SUHU WEB SERVER</div>

    <div class="card">
      <div class="icon">🌡 TEMPERATURE</div>
      <div class="value"><?php echo $data ? $data['suhu'] : '--'; ?> °C</div>
    </div>

    <div class="card">
      <div class="icon">💧 HUMIDITY</div>
      <div class="value"><?php echo $data ? $data['kelembaban'] : '--'; ?> %</div>
    </div>

    <div class="card">
      <div class="icon">📅 LAST UPDATE</div>
      <div class="value"><?php echo $data ? $data['waktu'] : '--'; ?></div>
    </div>

    <!-- Tombol Export Form -->
    <a href="export_form.php" class="export-btn">📊 Export Form</a>
    <!-- <form action="export_excel.php" method="post" style="margin-bottom: 20px;">
    <label>Dari tanggal:</label>
    <input type="date" name="start_date" required>
    <label>Sampai tanggal:</label>
    <input type="date" name="end_date" required>
    <button type="submit">Export ke Excel</button>
    </form> -->

  </div>
</body>
</html>
