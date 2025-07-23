<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda - Dashboard KEMENKUMHAM</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    :root {
      --primary: #004085;
      --accent: #ffc107;
      --bg: #f4f6f9;
      --white: #ffffff;
      --text: #333;
      --radius: 10px;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: var(--bg);
      color: var(--text);
    }

    .topbar {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      background-color: var(--primary);
      padding: 15px 30px;
    }

    .btn-logout {
      background-color: #dc3545;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: var(--radius);
      text-decoration: none;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .btn-logout:hover {
      background-color: #c82333;
    }

    .container {
      padding: 40px 60px;
    }

    .hero {
      background: linear-gradient(120deg, var(--primary), #0069d9);
      color: var(--white);
      padding: 50px;
      border-radius: var(--radius);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      text-align: center;
      margin-bottom: 40px;
    }

    .hero h1 {
      font-size: 32px;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 16px;
      opacity: 0.9;
    }

    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
    }

    .feature-card {
      background: var(--white);
      padding: 20px;
      border-radius: var(--radius);
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.06);
      transition: 0.3s ease;
      text-decoration: none;
      color: inherit;
    }

    .feature-card:hover {
      transform: translateY(-5px);
    }

    .feature-card i {
      font-size: 30px;
      margin-bottom: 15px;
      color: var(--primary);
    }

    .feature-card h3 {
      font-size: 18px;
      margin-bottom: 10px;
      color: var(--primary);
    }

    .feature-card p {
      font-size: 14px;
      color: var(--text);
    }

    @media (max-width: 600px) {
      .container {
        padding: 20px;
      }

      .hero h1 {
        font-size: 24px;
      }

      .hero p {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <div class="topbar">
    <a href="<?= base_url('/logout') ?>" class="btn-logout">
      <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  </div>

  <div class="container">
    <div class="hero">
      <h1>Selamat Datang di Portal Admin KEMENKUMHAM</h1>
      <p>Kelola data layanan, informasi publik, dan manajemen internal dengan mudah dan efisien.</p>
    </div>

    <div class="features">
      <a href="<?= base_url('/dashboard/profil') ?>" class="feature-card">
        <i class="fas fa-user-shield"></i>
        <h3>Profil</h3>
        <p>Lihat dan edit profil pengguna serta otorisasi akses sistem.</p>
      </a>

      <a href="<?= base_url('/layanan') ?>" class="feature-card">
        <i class="fas fa-concierge-bell"></i>
        <h3>Layanan</h3>
        <p>Kelola daftar layanan hukum dan administrasi secara digital.</p>
      </a>

      <a href="<?= base_url('/berita') ?>" class="feature-card">
        <i class="fas fa-newspaper"></i>
        <h3>Berita</h3>
        <p>Publikasikan berita dan artikel terkini secara terpusat.</p>
      </a>

      <a href="<?= base_url('/statistik') ?>" class="feature-card">
        <i class="fas fa-chart-line"></i>
        <h3>Statistik</h3>
        <p>Visualisasi data dan laporan statistik instansi secara real-time.</p>
      </a>
    </div>
  </div>
</body>
</html>
