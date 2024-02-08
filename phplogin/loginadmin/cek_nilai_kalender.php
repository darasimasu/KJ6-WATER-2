<?php
// Koneksi ke database (ganti sesuai dengan informasi database Anda)
$host = 'localhost';
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda
$database = 'database1'; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

// Tangkap data dari permintaan POST
$data = json_decode(file_get_contents("php://input"));

// Pastikan data yang diterima sesuai dengan kebutuhan Anda
$nilai_kalender = mysqli_real_escape_string($koneksi, $data->nilai_kalender);

// Query untuk menyimpan data ke dalam tabel "cek_kalender"
$query = "INSERT INTO cek_kalender (nilai_kalender) VALUES ('$nilai_kalender')";

if (mysqli_query($koneksi, $query)) {
    echo json_encode(array('status' => 'sukses', 'message' => 'Data berhasil disimpan ke dalam tabel cek_kalender.'));
} else {
    echo json_encode(array('status' => 'gagal', 'message' => 'Gagal menyimpan data: ' . mysqli_error($koneksi)));
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
