<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // kalau password sudah di-hash pakai password_hash()
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } 
        // kalau password masih plain text (langsung di-db)
        elseif ($password == $row['password']) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}
?>
