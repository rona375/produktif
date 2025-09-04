<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Biodata</title>
    <link rel="stylesheet" href="bio.css">
</head>
<body>
<div class="container">
    <h1>Form Biodata</h1>
    <form action="hasilbio.php" method="post" enctype="multipart/form-data">
        <h2>Pencarian</h2>
        <label for="search">Search:</label>
        <input type="search" id="search" name="search" placeholder="Cari sesuatu...">

        <h2>Identitas</h2>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap">

        <label for="anak_ke">Anak Ke-:</label>
        <input type="number" id="anak_ke" name="anak_ke" placeholder="Contoh: 1">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="contoh@email.com">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <label for="tel">Nomor Telepon:</label>
        <input type="tel" id="tel" name="tel" placeholder="08xxxxxxx">

        <h2>Detail Tambahan</h2>
        <label for="jk">Jenis Kelamin:</label>
        <label><input type="radio" name="jk" value="Pria"> Pria</label>
        <label><input type="radio" name="jk" value="Wanita"> Wanita</label>

        <label>Hobi:</label>
        <label><input type="checkbox" name="hobi[]" value="Membaca"> Membaca</label>
        <label><input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga</label>
        <label><input type="checkbox" name="hobi[]" value="Menggambar"> Menggambar</label>

        <label for="warna">Warna Favorit:</label>
        <input type="color" id="warna" name="warna">

        <label for="tanggal">Tanggal Lahir:</label>
        <input type="date" id="tanggal" name="tanggal">

        <label for="waktu">Waktu Favorit:</label>
        <input type="time" id="waktu" name="waktu">

        <label for="datetime">Tanggal & Waktu:</label>
        <input type="datetime-local" id="datetime" name="datetime">

        <label for="bulan">Bulan Lahir:</label>
        <input type="month" id="bulan" name="bulan">

        <label for="minggu">Minggu Ke-:</label>
        <input type="week" id="minggu" name="minggu">

        <label for="range">Tingkat Kepuasan Kuliah (1-10):</label>
        <input type="range" id="range" name="range" min="1" max="10">

        <label for="url">Website Pribadi:</label>
        <input type="url" id="url" name="url" placeholder="https://...">

        <label for="file">Upload Foto:</label>
        <input type="file" id="file" name="file">

        <input type="hidden" name="user_id" value="12345">

        <fieldset>
            <legend>Tombol Aksi</legend>
            <input type="submit" value="Kirim">
            <input type="reset" value="Reset">
            <input type="button" value="Klik Saya" onclick="alert('Tombol ditekan!')">
        </fieldset>
    </form>
</div>
<div class="footer">© 2025 Form Biodata</div>
</body>
</html>
