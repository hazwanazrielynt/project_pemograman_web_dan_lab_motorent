<?php
include 'koneksi.php';

$query_batam_center = mysqli_query($conn, "SELECT COUNT(*) AS total FROM rumah WHERE wilayah='Batam Center'");
$data_batam_center = mysqli_fetch_assoc($query_batam_center);

$query_lubuk_baja = mysqli_query($conn, "SELECT COUNT(*) AS total FROM rumah WHERE wilayah='Lubuk Baja'");
$data_lubuk_baja = mysqli_fetch_assoc($query_lubuk_baja);

$query_batu_aji = mysqli_query($conn, "SELECT COUNT(*) AS total FROM rumah WHERE wilayah='Batu Aji'");
$data_batu_aji = mysqli_fetch_assoc($query_batu_aji);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomeRent Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sewa Rumah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">History</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="layout">
  <main class="main-content">
    <div class="header">
      <h2>SELAMAT DATANG, PELANGGAN</h2>
              <div class="datetime" id="datetime">
          <?php
          date_default_timezone_set('Asia/Jakarta'); 
          $datetime = new DateTime(); 
          $day = $datetime->format('l');    
          $date = $datetime->format('d');   
          $month = $datetime->format('F');  
          $year = $datetime->format('Y');   

          echo "$day, $date $month $year";
          ?>
        </div>
    </div>
    <section class="content-box">
      <h2>HomeRent Present</h2>
      <p>Kami hadir membantu proses penyewaan rumah biar nggak ribet. Sistemnya udah otomatis mulai dari data pelanggan, daftar rumah, transaksi sewa secara otomatis.</p>
      <button class="btn">Ayo Mulai Sewa Rumah</button>
      <h3>Wilayah Rumah Yang Tersedia Untuk Disewa</h3>
      <div class="motor-grid">
        <div class="motor-card">
          <p>BATAM CENTER</p>
          <span><?= $data_batam_center['total']; ?></span>
        </div>
        <div class="motor-card">
          <p>LUBUK BAJA</p>
          <span><?= $data_lubuk_baja['total']; ?></span>
        </div>
        <div class="motor-card">
          <p>BATU AJI</p>
          <span><?= $data_batu_aji['total']; ?></span>
        </div>
      </div>
    </section>
  </main>
  <!-- SIDEBAR PROMO KANAN -->
  <aside class="sidebar-right">
    <h3>Promo</h3>

    <div class="promo-box">
      <img src="promo.jpg" alt="Promo 1">
    </div>

    <div class="promo-box"></div>
    <div class="promo-box"></div>
  </aside>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
