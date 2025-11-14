<?php
include 'koneksi.php';

$query_bebek = mysqli_query($conn, "SELECT COUNT(*) AS total FROM motor WHERE tipe='Bebek'");
$data_bebek = mysqli_fetch_assoc($query_bebek);

$query_matic = mysqli_query($conn, "SELECT COUNT(*) AS total FROM motor WHERE tipe='Matic'");
$data_matic = mysqli_fetch_assoc($query_matic);

$query_sport = mysqli_query($conn, "SELECT COUNT(*) AS total FROM motor WHERE tipe='Sport'");
$data_sport = mysqli_fetch_assoc($query_sport);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MotoRent Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
  <div class="layout">
    <aside class="sidebar-left">
      <ul>
        <li class="active">Dashboard</li>
        <li>Sewa Motor</li>
        <li>History</li>
      </ul>
    </aside>
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
        <h2>MotoRent Present</h2>
        <p>
          Kami hadir membantu proses penyewaan motor biar nggak ribet.
          Sistemnya udah otomatis mulai dari data pelanggan, daftar motor,
          transaksi sewa, sampai pembayaran.
        </p>

        <button class="btn">Ayo Mulai Sewa Motor</button>

        <h3>Motor yang Tersedia</h3>
        <div class="motor-grid">
          <div class="motor-card">
            <p>BEBEK</p>
            <span><?= $data_bebek['total']; ?></span>
          </div>
          <div class="motor-card">
            <p>MATIC</p>
            <span><?= $data_matic['total']; ?></span>
          </div>
          <div class="motor-card">
            <p>SPORT</p>
            <span><?= $data_sport['total']; ?></span>
          </div>
        </div>
      </section>
    </main>
 <aside class="sidebar-right">
  <h3>Promo</h3>

  <div class="promo-box">
    <img src="WhatsApp Image 2025-11-11 at 21.14.33_209b9381.jpg" alt="Promo 1">
  </div>
  <div class="promo-box">
  </div>
  <div class="promo-box">
  </div>
</aside>

    </aside>
</body>
</html>
