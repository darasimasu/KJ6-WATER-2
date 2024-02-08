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

// Menerima data dari permintaan POST
$data = json_decode(file_get_contents("php://input"));

// Mengonversi nilai status ke format yang diinginkan
$formattedStatus = ucfirst($data->status);

// Mengupdate status pesanan di tabel daftar_pesanan
$sql_pesanan = "UPDATE daftar_pesanan SET status_pesanan = '{$formattedStatus}' WHERE id = {$data->id}";

// Mengupdate status pesanan di tabel daftar_utang
$sql_utang = "UPDATE daftar_utang SET status_pesanan = '{$formattedStatus}' WHERE id = {$data->id}";

$response = array();

if ($conn->query($sql_pesanan) === TRUE && $conn->query($sql_utang) === TRUE) {
    $response = array('success' => true);
} else {
    $response = array('success' => false, 'error' => $conn->error);
}

// Menutup koneksi
$conn->close();

// Mengirim respons sebagai JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
