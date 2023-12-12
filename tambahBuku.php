<?php
    include 'koneksi.php';

    // Tambah buku
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $targetDir = "daftar_buku/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

        $sql = "INSERT INTO buku (title, author, image, genre) 
                VALUES ('$title', '$author','$targetFile', '$genre')";
        $conn->query($sql);
    }

    $result = $conn->query("SELECT * FROM buku order by id_buku desc");

    while ($row = $result->fetch_assoc()) {
        echo "<div class='book'>";
        echo "<a href='update.php?id_buku=" . $row['id_buku'] . "' class='updateBookBtn'>Edit Buku</a>";
        echo "<a href='hapus.php?id_buku=" . $row['id_buku'] . "' class='deleteBookBtn'>Hapus Buku</a>";
        echo "<img src='{$row['image']}' alt='{$row['title']} Image'>";
        echo "<div class='book-info'> ";
                echo "<h2>{$row['title']}</h2>";
                echo "<p>Penerbit  : {$row['author']}</p>";
                echo "<p>Rilis   : {$row['created_at']}</p>";
                echo "<p>Diupdate : {$row['updated_at']}</p>";
                echo "<p>Genre    : {$row['genre']}</p>";
                echo "</div>";
        echo "</div>";
    }


    if (isset($_POST["submit"])) {
        $result = search($_POST["keyword"]);
    }
    


    ?>