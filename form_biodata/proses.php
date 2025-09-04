<?php
$search   = $_POST['search']   ?? '';
$email    = $_POST['email']    ?? '';
$password = $_POST['password'] ?? '';
$user_id  = $_POST['user_id']  ?? '';
$nama     = $_POST['nama']     ?? '';
$week     = $_POST['week']     ?? '';
$month    = $_POST['month']    ?? '';
$date     = $_POST['date']     ?? '';
$datetime = $_POST['datetime'] ?? '';
$time     = $_POST['time']     ?? '';
$hobi     = $_POST['hobi']     ?? [];
$warna    = $_POST['warna']    ?? '';
$teks     = $_POST['teks']     ?? '';
$url      = $_POST['url']      ?? '';

echo "<h2>Hasil Form</h2>";
echo "Search: " . htmlspecialchars($search) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Password: " . htmlspecialchars($password) . "<br>";
echo "User ID: " . htmlspecialchars($user_id) . "<br>";
echo "Nama: " . htmlspecialchars($nama) . "<br>";
echo "Minggu: " . htmlspecialchars($week) . "<br>";
echo "Bulan: " . htmlspecialchars($month) . "<br>";
echo "Tanggal: " . htmlspecialchars($date) . "<br>";
echo "Tanggal & Waktu: " . htmlspecialchars($datetime) . "<br>";
echo "Jam: " . htmlspecialchars($time) . "<br>";

if (!empty($hobi)) {
    if (!is_array($hobi)) {
        $hobi = [$hobi];
    }
    echo "Hobi: " . implode(", ", array_map('htmlspecialchars', $hobi)) . "<br>";
} else {
    echo "Hobi: Tidak dipilih<br>";
}

echo "Warna: " . htmlspecialchars($warna) . "<br>";
echo "Teks: " . htmlspecialchars($teks) . "<br>";
echo "URL: " . htmlspecialchars($url) . "<br>";

if (!empty($_FILES['dokumen']['name'])) {
    echo "File diupload: " . htmlspecialchars($_FILES['dokumen']['name']) . "<br>";
} else {
    echo "Tidak ada file yang diupload.<br>";
}
?>
