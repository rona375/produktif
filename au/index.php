<?php
session_start();
include "db.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Gunakan prepared statement biar aman dari SQL Injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {  
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit(); // penting: hentikan eksekusi setelah redirect
    } else { 
        echo "<script>alert('Username atau Password salah!');</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-page">
      <h2>Login</h2>
      <form action="index.php" method="POST">
          <input type="text" name="username" placeholder="Username" required>
          <input type="password" name="password" placeholder="Password" required>

          <div class="forgot">
            <a href="forgot_password.php">Forgot your password?</a>
          </div>
          <button type="submit" name="login">LOGIN</button> 
      </form>
        <div class="signup">
      <p>Don't have an account? <a href="register.php">Sign up</a></p>
  </div>

  <!-- background karakter -->
  <img src="img au/dude top.png" class="bg-top" alt="Dude top">
  <img src="img au/dude bottom.png" class="bg-bottom" alt="Dude bottom">

  <!-- Dekorasi bintang -->
        <img src="img au/Star 1.png" class="star index-star-right-top-big">
        <img src="img au/Star 2.png" class="star index-star-left-bottom-big">
        <img src="img au/Star 3.png" class="star index-star-left-bottom-small">
        <img src="img au/Star 4.png" class="star index-star-right-top-small">
</body>
</html>
