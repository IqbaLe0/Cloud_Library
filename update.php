<?php 
require "koneksi.php";

$id = $_GET['id_buku'];
$buku = query("SELECT * from buku where id_buku=$id")[0];

if (isset($_POST["tambah"])) {

    if (ubah($_POST) > 0) {
        header("location: books.php");
    }else{
        echo "<script>
        alert('Data gagal di Ubah')
        documen.location.href = books.php
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background:#333;
        }
    </style>
</head>

<body>

    <main>

        <div id="changeBookPopup" class="popup" action="">
            <div class="books">
            <h2>Edit Buku</h2>
                <form method="post" id="changeBookForm" enctype="multipart/form-data" action="">
                    <input type="hidden" name="id_buku" value="<?= $buku["id_buku"]?>">

                    <label for="title">Judul:</label>
                    <input type="text" name="title" required value="<?= $buku["title"] ?>">

                    <label for="author">Penerbit:</label>
                    <input type="text" name="author" required value="<?= $buku["author"] ?>">

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
                    <input type="submit" name="tambah" value="Ubah">
                </form>
            </div>
        </div>



    </main>

</body>

</html>