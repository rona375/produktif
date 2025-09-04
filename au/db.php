<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "";
$nim = "";
$jurusan = "";
$prodi = "";
$db   = "au";

$conn = new mysqli($host, $user, $pass, $name, $nim, $jurusan, $prodi, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>