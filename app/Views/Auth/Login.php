<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | KEMENKUMHAM</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #dbe9f4, #f3f8fc);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .form-box {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            transition: all 0.3s ease;
        }
        .form-box h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #002b5c;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccd7e0;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: border 0.3s ease;
        }
        input:focus {
            border-color: #002b5c;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #002b5c;
            color: white;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #014a91;
        }
        .form-box p {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        .form-box a {
            color: #002b5c;
            text-decoration: none;
        }
        .form-box a:hover {
            text-decoration: underline;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .success {
            color: green;
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Login</h2>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="error"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <form action="/do-login" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Masuk</button>
        </form>

        <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>
    </div>
</body>
</html>
