<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
};

function ubah($data){
    global $conn;

    $id = $data['id_buku'];
    $title = $data['title'];
    $author = $data['author'];
    $genre = $data['genre'];
    $targetDir = "daftar_buku/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    $sql = "UPDATE buku SET 
            title = '$title',
            author = '$author',
            genre = '$genre',
            image = '$targetFile'
            where id_buku='$id'";
    mysqli_query($conn,$sql);
    return mysqli_affected_rows($conn);
}

function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["name"]));
    $email = $data["email"];
    $password = $data["password"];
    $confirmPassword = $data["confirm-password"];


    // Cek username yang sama 
    $result= $conn->query("SELECT username FROM account where username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo"<script>alert('Username Sudah Terdaftar')</script>";
        return false;   
    }

    // Konfirmasi Password
    if ($password !== $confirmPassword) {
        echo"<script>
        alert('Konfirmasi Password Tidak Sesuai')
        </script>";
        return false;
    }

    // enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data ke database
    $sql = "INSERT INTO account VALUES ('$username','$email','$password')";
    $conn->query($sql);

    return mysqli_affected_rows($conn);
}


?>
