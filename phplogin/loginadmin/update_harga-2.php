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

// Mendapatkan data yang dikirim dari frontend
$data = json_decode(file_get_contents("php://input"), true);

// Mendapatkan nilai baru dari data
$hargaBaru = $data['harga_bestari'];

// Query untuk menyimpan nilai baru ke dalam database (gantilah dengan query yang sesuai)
$query = "UPDATE harga_pesanan SET harga_bestari = $hargaBaru WHERE id = 1";
$result = mysqli_query($koneksi, $query);

// Menyediakan data dalam format JSON (Anda dapat menambahkan data lain jika diperlukan)
$response = array('harga_bestari' => $hargaBaru);

header('Content-Type: application/json');
echo json_encode($response);

// Menutup koneksi ke database
mysqli_close($koneksi);
?>
