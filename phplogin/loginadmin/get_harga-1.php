<?php
// Koneksi ke database (gantilah dengan informasi koneksi yang sesuai)
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'database1';

$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}

// Query untuk mengambil nilai harga_air_isi_ulang dari database (gantilah dengan query yang sesuai)
$query = "SELECT harga_sanford FROM harga_pesanan WHERE id = 1";
$result = mysqli_query($koneksi, $query);

// Mengambil nilai dari hasil query
$data = mysqli_fetch_assoc($result);

// Menyediakan data dalam format JSON
header('Content-Type: application/json');
echo json_encode($data);

// Menutup koneksi ke database
mysqli_close($koneksi);
?>
