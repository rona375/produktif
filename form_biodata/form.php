<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>
<body>
    <h1>Form Biodata</h1>

    <form action="proses.php" method="POST" enctype="multipart/form-data">
        
        <!-- Search -->
        <p>Search</p>
        <input type="search" name="search" placeholder="Search"><br>

        <!-- Email & Password -->
        <p>Email dan Password</p>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>

        <!-- Nama -->
        <p>Nama</p>
        <input type="hidden" name="user_id" value="12345">
        <input type="text" name="nama" placeholder="Masukkan nama"><br>

        <!-- Tanggal & Waktu -->
        <p>Minggu, Bulan, Tanggal dan Waktu</p>
        <input type="week" name="week"><br>
        <input type="month" name="month"><br>
        <input type="date" name="date"><br>
        <input type="datetime-local" name="datetime"><br>
        <input type="time" name="time"><br>

        <!-- Hobi -->
        <p>Hobi</p>
        <input type="checkbox" id="hobi1" name="hobi[]" value="Membaca">
        <label for="hobi1">Membaca</label><br>
        <input type="checkbox" id="hobi2" name="hobi[]" value="Menggambar">
        <label for="hobi2">Menggambar</label><br>

        <!-- Upload File -->
        <p>Menambahkan File</p>
        <input type="file" name="dokumen"><br>

        <!-- Image Submit -->
        <p>Klik gambar untuk submit form:</p>
        <input type="image" src="cat.jpg" alt="Kirim" width="100" height="40"><br>

        <!-- Warna & Teks -->
        <p>Warna dan Teks</p>
        <input type="color" name="warna"><br>
        <input type="text" name="teks" placeholder="Masukkan teks"><br>

        <!-- URL -->
        <p>URL</p>
        <input type="url" name="url"><br>

        <!-- Tombol -->
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
