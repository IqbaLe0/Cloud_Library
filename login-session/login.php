<?php

require '../koneksi.php';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM account WHERE email ='$email' or username = '$email'");

    //cek email 
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: ../home.php");
            exit;
        }else {
            echo"
            <script>
            alert('Password yang anda masukkan salah')
            </script>
            ";
        }
    }else{
        echo"
            <script>
            alert('Email Atau Username yang anda masukkan salah')
            </script>
            ";
    }
}


?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Cloud Library</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
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


        <h1>Cloud Library</h1>
        <form class="form" id="login-form" action="" method="post">
            <div class="form-group">
                <label for="email">Email or Username</label>
                <input type="text" id="email" name="email" required autocomplete="off">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Sign In</button>
            </div>
            <div class="form-group">
                <a href="sign_up.php" id="register-link">Belum punya akun? Daftar sekarang</a>
            </div>
        </form>
    </div>

    <script>

    </script>
</body>

</html>