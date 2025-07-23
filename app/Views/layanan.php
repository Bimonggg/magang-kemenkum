<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Layanan - KEMENKUMHAM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #f7f9fc;
      color: #333;
    }

    header {
      background: #002b5c;
      padding: 15px 20px;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    header h1 {
      font-size: 20px;
    }

    nav a {
      color: #fff;
      margin-left: 20px;
      text-decoration: none;
      font-weight: 500;
    }

    nav a.active, nav a:hover {
      color: #ffc107;
    }

    .container {
      max-width: 1100px;
      margin: auto;
      padding: 30px 20px;
    }

    h2 {
      color: #002b5c;
      font-size: 26px;
      margin-bottom: 10px;
    }

    .search-bar {
      margin: 20px 0;
    }

    .search-bar input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    .grid {
      display: grid;
      gap: 20px;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      margin-top: 20px;
    }

    .card {
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: 0.3s;
      text-align: center;
    }

    .card:hover {
      box-shadow: 0 8px 18px rgba(0,0,0,0.1);
      transform: translateY(-5px);
    }

    .card i {
      font-size: 36px;
      color: #002b5c;
      margin-bottom: 12px;
    }

    .card h3 {
      font-size: 18px;
      color: #002b5c;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 14px;
      color: #555;
      margin-bottom: 12px;
    }

    .card a {
      display: inline-block;
      padding: 8px 16px;
      background: #002b5c;
      color: white;
      text-decoration: none;
      border-radius: 20px;
      font-size: 13px;
      transition: background 0.3s;
    }

    .card a:hover {
      background: #004080;
    }

    footer {
      text-align: center;
      padding: 15px;
      background: #002b5c;
      color: white;
      margin-top: 40px;
      font-size: 14px;
    }

    @media (max-width: 600px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }
      nav a {
        margin: 10px 0 0;
        display: inline-block;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>KEMENKUMHAM RI</h1>
    <nav>
      <a href="<?= base_url('/') ?>">Beranda</a>
      <a href="<?= base_url('profil') ?>">Profil</a>
      <a href="<?= base_url('layanan') ?>" class="active">Layanan</a>
      <a href="<?= base_url('galeri') ?>">Galeri</a>
      <a href="<?= base_url('kontak') ?>">Kontak</a>
    </nav>
  </header>

  <div class="container">
    <h2>Layanan Publik</h2>
    <p>Temukan berbagai layanan publik yang disediakan oleh Kemenkumham untuk masyarakat luas.</p>

    <div class="search-bar">
      <input type="text" id="searchInput" placeholder="Cari layanan..." onkeyup="filterCards()">
    </div>

    <div class="grid" id="layananGrid">
      <div class="card">
        <i class="fas fa-passport"></i>
        <h3>Layanan Imigrasi</h3>
        <p>Urus paspor, visa, dan izin tinggal.</p>
        <a href="#">Lihat Detail</a>
      </div>
      <div class="card">
        <i class="fas fa-gavel"></i>
        <h3>Layanan AHU</h3>
        <p>Daftarkan badan hukum, yayasan, dan fidusia.</p>
        <a href="#">Lihat Detail</a>
      </div>
      <div class="card">
        <i class="fas fa-copyright"></i>
        <h3>Kekayaan Intelektual</h3>
        <p>Daftarkan hak cipta, paten, dan merek.</p>
        <a href="#">Lihat Detail</a>
      </div>
      <div class="card">
        <i class="fas fa-balance-scale"></i>
        <h3>Layanan HAM</h3>
        <p>Perlindungan dan pengaduan HAM.</p>
        <a href="#">Lihat Detail</a>
      </div>
      <div class="card">
        <i class="fas fa-building"></i>
        <h3>Pemasyarakatan</h3>
        <p>Reintegrasi dan pembinaan narapidana.</p>
        <a href="#">Lihat Detail</a>
      </div>
    </div>
  </div>

  <footer>
    &copy; <?= date('Y') ?> KEMENKUMHAM RI - Semua Hak Dilindungi
  </footer>

  <script>
    function filterCards() {
      const input = document.getElementById('searchInput').value.toLowerCase();
      document.querySelectorAll('.card').forEach(card => {
        card.style.display = card.innerText.toLowerCase().includes(input) ? 'block' : 'none';
      });
    }
  </script>
</body>
</html>
