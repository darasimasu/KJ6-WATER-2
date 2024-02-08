<?php
// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "database1";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari request POST
$data = json_decode(file_get_contents('php://input'), true);
$noteText = $data['note'];

// Query untuk menyimpan data ke dalam tabel catatan_status_depot
$sql = "INSERT INTO catatan_status_depot (status_depot) VALUES ('$noteText')";

// Menjalankan query
if ($conn->query($sql) === TRUE) {
    $response = ['success' => true, 'message' => 'Data berhasil disimpan'];
} else {
    $response = ['success' => false, 'message' => 'Terjadi kesalahan: ' . $conn->error];
    // Tambahkan ini untuk mencetak pesan kesalahan ke log PHP
    error_log('Terjadi kesalahan: ' . $conn->error);
}

// Menutup koneksi
$conn->close();

// Mengirim respons dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
