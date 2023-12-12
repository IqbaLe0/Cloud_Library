<?php
require '../koneksi.php';

if (isset($_POST['register'])) {
    if (registrasi($_POST)) {
        echo "<script>alert('Berhasil Registrasi');</script>";
    } else {
        echo "<script>alert('Gagal Registrasi');</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 12% auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group {
            width: 80%;
            margin: 10px 0;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input:focus {
            outline: none;
            border-color: dodgerblue;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: dodgerblue;
            color: white;
            font-size: 18px;
        }

        .form-group button:hover {
            background-color: deepskyblue;
        }

        .form-group a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: dodgerblue;
            text-decoration: none;
        }

        .form-group a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">

        <form class="form" id="register-form"  action="" method="post">
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Konfirmasi Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="register">Daftar</button>
            </div>
            <div class="form-group">
                <a href="login.php" id="login-link">Sudah punya akun? Masuk sekarang</a>
            </div>
        </form>

    </div>
</body>

</html>