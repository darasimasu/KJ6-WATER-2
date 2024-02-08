<?php
// Ganti dengan detail koneksi database Anda
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari tabel daftar_pesanan
$sql = "SELECT * FROM daftar_pesanan WHERE status_pesanan != 'Telah Selesai' ORDER BY waktu_pembuatan DESC";
$result = $conn->query($sql);

// Inisialisasi array untuk menyimpan data
$data = array();

// Memeriksa apakah ada baris data
if ($result->num_rows > 0) {
    // Menampilkan data
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Menutup koneksi
$conn->close();

// Mengirim data sebagai JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
