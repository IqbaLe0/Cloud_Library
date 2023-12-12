<!DOCTYPE html>
<html lang="id">



<head>
    <meta charset="UTF-8">
    <title>Cloud Library</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 20px;
            padding: 20px;
            margin-top: 100px;
        }

        .main .left,
        .main .right {
            margin-bottom: 20px;
        }

        .main .left .news,
        .main .right .online,
        .main .right .agenda {
            text-align: center;
        }

        .main .left .news,
        .main .right .online {
            height: 200px;
            font-size: 16px;
        }

        .main .left .news {
            height: 300px;
            background-image: url("bg-img/cloud.jpg");
            background-size: cover;
            background-position: center;
            background-position-y: -150px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px black;
        }

        .main .right .online {
            height: 200px;
            background-image: url("bg-img/cloud_library.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px #black;
        }

        .main .right .online a{
            color: black;
            background-color: #fff;
            padding: 15px 5px;
            border-radius: 5px;
        }


        .main .right .online h1{
            color: #f0f0f0;
            padding-right: 30px;
        }

        .main .left .news h1,
        .main .left .news h2,
        .main .right .online h1,
        .main .right .online a,
        {
            margin: 10px;
            color: #fff;
        }

        .main .right .agenda h1,
        .main .right .agenda ul li{
            color: #333;
        }



        .main .left .title {
            font-size: 16px;
            width: auto;
            height: auto;
            margin: 20px 0;
        }

        .main .left .collections {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            grid-gap: 10px;
            margin-top: 20px;
        }

        .main .left .collections .book {
            height: 120px;
        }

        .main .left .collections .book img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* media Query */
        @media (min-width: 576px) {
            .main .left .collections .book {
                height: 150px;
            }
        }

        @media (min-width: 768px) {
            .main {
                grid-template-columns: 1fr 1fr;
            }

            .main .left .news,
            .main .right .online,
            .main .right .agenda {
                height: 250px;
                font-size: 18px;
            }

            .main .right .agenda {
                color: #333;
            }

            .main .left .collections .book {
                height: 180px;
            }

            .main .left .title {
                font-size: 20px;
                margin: 70px auto -60px auto;
            }
        }

        @media (min-width: 992px) {
            .main .left .collections .book {
                height: 200px;
            }
        }

        @media (min-width: 1200px) {

            .main .left .news,
            .main .right .online,
            .main .right .agenda {
                height: 300px;
                font-size: 20px;
            }

            .main .left .collections .book {
                height: 250px;
            }

            .main .left .title {
                font-size: 24px;
            }
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
    <div class="main">
        <div class="left">
            <div class="news">
                <h1>Berita dan Pengumuman</h1>
                <h2>Cloud Library Resmi Dibuka</h2>
            </div>

            <div class="title">
                <h2>Koleksi Buku</h2>
            </div>
            <div class="collections">
                <div class="book"><img src="daftar_buku/penelusuran-benang-merah.jpg" alt=""></div>
                <div class="book"><img src="daftar_buku/the-martian.jpg" alt=""></div>
                <div class="book"><img src="daftar_buku/I-think.jpg" alt=""></div>
                <div class="book"><img src="daftar_buku/penelusuran-benang-merah.jpg" alt=""></div>
            </div>
        </div>
        <div class="right">
            <div class="online">
                <h1>Layanan Online</h1>
                <a href="login-session/login.php">Akses Sekarang</a>
            </div>
            <div class="agenda">
                <h1>Agenda Perpustakaan</h1>
                <ul>
                    <li>Workshop Membaca Efektif</li>
                    <li>Webinar Literasi Digital</li>
                    <li>Lomba Menulis Cerpen</li>
                    <li>Pameran Buku Terbaru</li>
                </ul>
            </div>
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