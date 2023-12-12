<?php
include 'koneksi.php';

    $bookId = $_GET['id_buku'];

    // Perform the deletion
    $sql = "DELETE FROM buku WHERE id_buku = '$bookId'";

    if (mysqli_query($conn,$sql)) {
        echo "Data berhasil disimpan";
        header("Location: books.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    
    mysqli_close($conn);
?>
