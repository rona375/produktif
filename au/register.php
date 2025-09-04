<?php
include "config.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name     = $_POST['name'];
    $nim      = $_POST['nim'];
    $jurusan  = $_POST['jurusan'];
    $prodi    = $_POST['prodi'];

    $query = "INSERT INTO users (username, password, name, nim, jurusan, prodi)
              VALUES ('$username', '$password', '$name', '$nim', '$jurusan', '$prodi')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal registrasi: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Sign Up</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Create a username" required><br>
        <input type="password" name="password" placeholder="Create a password" required><br>
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="text" name="nim" placeholder="NIM" required><br>
        <input type="text" name="jurusan" placeholder="Jurusan/Major" required><br>
        <input type="text" name="prodi" placeholder="Study Program" required><br>
        <button type="submit" name="register">SIGN UP</button>
    </form>
    <p>Already have an account? <a href="index.php">Log in</a></p>
</div>
</body>
</html>
