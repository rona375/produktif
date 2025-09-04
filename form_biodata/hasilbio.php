<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Biodata</title>
    <link rel="stylesheet" href="bio.css">
</head>
<body>
<div class="container">
    <h1>Hasil Biodata</h1>

    <?php
    $search   = $_POST['search'] ?? '';
    $nama     = $_POST['nama'] ?? '';
    $anak_ke  = $_POST['anak_ke'] ?? '';
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $tel      = $_POST['tel'] ?? '';
    $gender   = $_POST['gender'] ?? '';
    $hobi     = $_POST['hobi'] ?? [];
    $warna    = $_POST['warna'] ?? '';
    $tanggal  = $_POST['tanggal'] ?? '';
    $waktu    = $_POST['waktu'] ?? '';
    $datetime = $_POST['datetime'] ?? '';
    $bulan    = $_POST['bulan'] ?? '';
    $minggu   = $_POST['minggu'] ?? '';
    $range    = $_POST['range'] ?? '';
    $url      = $_POST['url'] ?? '';
    $user_id  = $_POST['user_id'] ?? '';
    ?>

    <h2>Data Diri</h2>
    <p><b>Search:</b> <?= htmlspecialchars($search) ?></p>
    <p><b>Nama:</b> <?= htmlspecialchars($nama) ?></p>
    <p><b>Anak Ke-:</b> <?= htmlspecialchars($anak_ke) ?></p>
    <p><b>Email:</b> <?= htmlspecialchars($email) ?></p>
    <p><b>Password:</b> <?= htmlspecialchars($password) ?></p>
    <p><b>Nomor Telepon:</b> <?= htmlspecialchars($tel) ?></p>
    <p><b>Jenis Kelamin:</b> <?= htmlspecialchars($gender) ?></p>
    <p><b>Hobi:</b> <?= implode(", ", $hobi) ?></p>
    <p><b>Warna Favorit:</b> <?= htmlspecialchars($warna) ?>
        <span class="color-box" style="background:<?= htmlspecialchars($warna) ?>"></span>
    </p>
    <p><b>Tanggal Lahir:</b> <?= htmlspecialchars($tanggal) ?></p>
    <p><b>Waktu Favorit:</b> <?= htmlspecialchars($waktu) ?></p>
    <p><b>Tanggal & Waktu:</b> <?= htmlspecialchars($datetime) ?></p>
    <p><b>Bulan Lahir:</b> <?= htmlspecialchars($bulan) ?></p>
    <p><b>Minggu Ke-:</b> <?= htmlspecialchars($minggu) ?></p>
    <p><b>Kepuasan Kuliah:</b> <?= htmlspecialchars($range) ?>/10</p>
    <p><b>Website Pribadi:</b> <a href="<?= htmlspecialchars($url) ?>" target="_blank"><?= htmlspecialchars($url) ?></a></p>
    <p><b>User ID:</b> <?= htmlspecialchars($user_id) ?></p>

    <?php if (isset($_FILES['file']) && $_FILES['file']['error'] == 0): ?>
        <p><b>File Upload:</b> <?= htmlspecialchars($_FILES['file']['name']) ?></p>
        <p><img src="<?= 'uploads/' . htmlspecialchars($_FILES['file']['name']) ?>" width="150"></p>
    <?php endif; ?>

    
</div>
<div class="footer">© 2025 Hasil Biodata</div>
</body>
</html>
