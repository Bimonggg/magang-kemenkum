<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Admin - KEMENKUMHAM</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    :root {
      --primary: #003366;
      --accent: #ffc107;
      --bg: #f0f2f5;
      --white: #fff;
      --text: #222;
      --radius: 14px;
      --shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: var(--bg);
      color: var(--text);
    }

    .back-button {
      display: inline-block;
      margin: 30px 40px 10px;
      text-decoration: none;
      color: var(--white);
      background-color: var(--primary);
      padding: 10px 18px;
      border-radius: var(--radius);
      font-weight: 600;
      transition: 0.3s;
    }

    .back-button i {
      margin-right: 8px;
    }

    .back-button:hover {
      background-color: #001f4d;
    }

    .container {
      max-width: 1200px;
      margin: 20px auto 50px;
      padding: 0 20px;
      display: grid;
      gap: 30px;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    }

    .profile-card {
      background: var(--white);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 25px;
      text-align: center;
    }

    .profile-card:hover {
      transform: translateY(-5px);
    }

    .avatar {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background-size: cover;
      background-position: center;
      border: 4px solid var(--primary);
      margin-bottom: 20px;
    }

    .profile-details h3 {
      margin: 0;
      font-size: 20px;
      color: var(--primary);
    }

    .profile-details p {
      margin: 6px 0;
      font-size: 15px;
    }

    .profile-details i {
      color: var(--accent);
      margin-right: 8px;
    }

    .actions {
      margin-top: 20px;
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .actions a {
      text-decoration: none;
      padding: 10px 18px;
      border-radius: var(--radius);
      font-weight: 600;
      color: white;
      transition: 0.3s;
    }

    .btn-edit {
      background-color: #28a745;
    }

    .btn-edit:hover {
      background-color: #218838;
    }

    .btn-password {
      background-color: #007bff;
    }

    .btn-password:hover {
      background-color: #0056b3;
    }

    @media (max-width: 480px) {
      .profile-card {
        padding: 20px;
      }

      .profile-details p {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

  <!-- Tombol Kembali -->
  <a href="<?= base_url('/dashboard') ?>" class="back-button"><i class="fas fa-arrow-left"></i> Kembali ke Dashboard</a>

  <div class="container">
    <!-- Admin 1 -->
    <div class="profile-card">
      <div class="avatar" style="background-image: url('<?= base_url('img/fotobener.jpg') ?>')"></div>
      <div class="profile-details">
        <h3>Romi Putra</h3>
        <p><i class="fas fa-user-shield"></i> romi_admin</p>
        <p><i class="fas fa-envelope"></i> romi@kemenkumham.go.id</p>
        <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
        <p><i class="fas fa-briefcase"></i> Administrator</p>
      </div>
      <div class="actions">
        <a href="/edit-profile" class="btn-edit"><i class="fas fa-edit"></i> Edit</a>
        <a href="/change-password" class="btn-password"><i class="fas fa-key"></i> Password</a>
      </div>
    </div>

    <!-- Admin 2 -->
    <div class="profile-card">
      <div class="avatar" style="background-image: url('<?= base_url('img/fotokodok.jpg') ?>')"></div>
      <div class="profile-details">
        <h3>Bima Cahya</h3>
        <p><i class="fas fa-user-shield"></i> bima_admin</p>
        <p><i class="fas fa-envelope"></i> bima@kemenkumham.go.id</p>
        <p><i class="fas fa-phone"></i> +62 813 9988 6655</p>
        <p><i class="fas fa-briefcase"></i> Supervisor</p>
      </div>
      <div class="actions">
        <a href="/edit-profile" class="btn-edit"><i class="fas fa-edit"></i> Edit</a>
        <a href="/change-password" class="btn-password"><i class="fas fa-key"></i> Password</a>
      </div>
    </div>

    <!-- Admin 3 -->
    <div class="profile-card">
      <div class="avatar" style="background-image: url('<?= base_url('img/fotoilham.jpg') ?>')"></div>
      <div class="profile-details">
        <h3>Ilham Buana</h3>
        <p><i class="fas fa-user-shield"></i> ilham_admin</p>
        <p><i class="fas fa-envelope"></i> ilham@kemenkumham.go.id</p>
        <p><i class="fas fa-phone"></i> +62 811 6677 2244</p>
        <p><i class="fas fa-briefcase"></i> Staff IT</p>
      </div>
      <div class="actions">
        <a href="/edit-profile" class="btn-edit"><i class="fas fa-edit"></i> Edit</a>
        <a href="/change-password" class="btn-password"><i class="fas fa-key"></i> Password</a>
      </div>
    </div>
  </div>
</body>
</html>
