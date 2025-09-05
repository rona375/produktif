<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="home-container">
        <!-- Teks welcome -->
        <h1>WELCOME!</h1>
        <p class="username"><?php echo $_SESSION['username']; ?></p>

        <!-- Dekorasi bintang -->
        <img src="img au/Star 1.png" class="star star-left-top">
        <img src="img au/Star 2.png" class="star star-right-top">
        <img src="img au/Star 3.png" class="star star-left-bottom">
        <img src="img au/Star 4.png" class="star star-right-bottom">

        <!-- Karakter biru -->
        <div class="character-wrapper">
            <img src="img au/hehe middle bottom.png" class="character">

            <!-- Tombol logout di atas karakter -->
            <form action="logout.php" method="POST">
                <button type="submit" class="logout-btn">LOG OUT</button>
            </form>
        </div>
    </div>
</body>
</html>
