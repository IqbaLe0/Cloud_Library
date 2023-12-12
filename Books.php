
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
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


    <main>

        <form class="search-container" action="" method="post">
            <input type="text" name="keyword" id="searchInput" autofocus autocomplete="off" placeholder="Cari judul buku...">
            <button id="searchBtn" name="search">Cari</button>
        </form>
        
        <button id="addBookBtn">Tambah Buku</button>

        <form id="BookForm">
            <?php
            require 'tambahBuku.php'
                ?>
        </form>
        
        
        <!-- Formulir Tambah Buku -->

        <!-- Overlay -->
        <div class="overlay" id="overlay"></div>

        <!-- Popup Form Tambah Buku -->
        <div id="addBookPopup" class="popup" action="tambahBuku.php">
            <div class="books">
                <h2>Tambah Buku</h2>
                <form method="post" id="addBookForm" enctype="multipart/form-data" action="">
                    <label for="title">Judul:</label>
                    <input type="text" name="title" required>

                    <label for="author">Penerbit:</label>
                    <input type="text" name="author" required>

                    <label for="create_at">Tahun Terbit :</label>
                    <input type="date" name="create_at" required>

                    <label for="image">Gambar:</label>
                    <input type="file" name="image" accept="image/*">

                    <label for="genre">Genre:</label>
                    <select name="genre">
                        <option value="Fiksi">Fiksi</option>
                        <option value="Non-Fiksi">Non-Fiksi</option>
                        <option value="Misteri">Misteri</option>
                        <option value="Romance">Romance</option>
                        <option value="Horor">Horor</option>
                        <option value="Education">Education</option>
                    </select>
                    <input type="submit" name="tambah" value="Tambah">
                </form>
            </div>
        </div>

    </main>


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