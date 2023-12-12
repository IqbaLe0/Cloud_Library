<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Cloud Library</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #f2f2f2;
            color: #333;
            box-sizing: border-box;
        }

        .about-container {
            width: 800px;
            margin: 130px auto 50PX;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            text-align: center;
        }

        h1,
        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        .card {
            background-color: #3498db;
            color: white;
            border-radius: 15px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            width: 350px;
            box-sizing: border-box;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .icon {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 97.3%;
        }

        .footer .info {
            display: flex;
            flex-direction: column;
        }

        .footer .info h1 {
            margin: 10px;
            color: white;
        }

        .footer .info p {
            margin: 10px;
            color: white;
        }

        .footer .social {
            display: flex;
        }

        .footer .social img {
            width: 50px;
            height: 50px;
            margin: 10px;
            object-fit: contain;
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <a href="#" class="navbar-logo">Cloud<span>Library</span></a>

        <div class="navbar-nav">
            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="Books.php">Books</a>
            <a href="contact.php">Contact Us</a>
        </div>

        <a href="#" id="menu">
            <i data-feather="menu"></i>
        </a>

    </nav>

    <div class="about-container">
        <h2>Selamat Datang di Cloud Library</h2>
        <p>Pelajari pengetahuan melalui perpustakaan digital Cloud Library, di mana membaca tidak mengenal batasan dan
            waktu adalah milik Anda.</p>

        <div class="card">
            <div class="icon">&#128218;</div>
            <h2>Visi Kami</h2>
            <p>Membuat pengetahuan dan hiburan dapat diakses oleh semua orang, membentuk platform perpustakaan digital
                yang benar-benar inovatif.</p>
        </div>

        <div class="card">
            <div class="icon">&#128214;</div>
            <h2>Misi 1</h2>
            <p>Menyediakan koleksi buku digital yang beragam dan berkualitas tinggi.</p>
        </div>

        <div class="card">
            <div class="icon">&#128214;</div>
            <h2>Misi 2</h2>
            <p>Memastikan akses mudah dan cepat bagi pengguna untuk mengeksplorasi dan membaca buku favorit mereka.</p>
        </div>

        <div class="card">
            <div class="icon">&#128214;</div>
            <h2>Misi 3</h2>
            <p>Menciptakan pengalaman membaca yang nyaman, mendukung pembelajaran dan hiburan.</p>
        </div>
    </div>

    <div class="footer">
        <div class="info">
            <h1>Cloud Library</h1>
            <p>Jl. Raya Manokwari No. 123, West Papua, Indonesia</p>
            <p>Phone: +62 123 456 789</p>
            <p>Email: cloudlibrary@gmail.com</p>
        </div>
        <div class="social">
            <img src="social-icon/facebook.png" alt="Facebook">
            <img src="social-icon/twitter.png" alt="Twitter">
            <img src="social-icon/instagram.png" alt="Instagram">
        </div>
    </div>

    <script>
        feather.replace();
    </script>

    <script src="script.js"></script>

</body>

</html>