<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Export Data Sensor</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="export-box">
    <h2>📊 Export Data Sensor</h2>
    <form method="GET" action="export_excel.php">
      <label>Dari Tanggal</label><br>
      <input type="date" name="dari" required><br>
      <label>Sampai Tanggal</label><br>
      <input type="date" name="sampai" required><br>
      <button type="submit">Download Excel</button>
    </form>
    <a href="index.php" class="back-link">⬅ Kembali ke Dashboard</a>
  </div>
</body>
</html>
