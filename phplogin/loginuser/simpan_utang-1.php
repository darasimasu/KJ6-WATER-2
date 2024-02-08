<?php
// File: simpan_utang-1.php

// Mulai sesi jika belum dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Sesuaikan dengan konfigurasi database Anda
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menggunakan $_POST langsung tanpa memeriksa REQUEST_METHOD
$data = json_decode(file_get_contents("php://input"));

$jumlahGalon = isset($data->jumlahGalon) ? intval($data->jumlahGalon) : 0; // Tambahan untuk mengambil nilai jumlahGalon
$merek = isset($data->merek) ? mysqli_real_escape_string($conn, $data->merek) : '';
$totalHarga = isset($data->totalHarga) ? intval($data->totalHarga) : 0;
$statusPesananDefault = "Belum Konfirmasi";

// Ambil data username dan alamat dari sesi login
$id = '';
$username = '';
$alamat = '';
$session_id = session_id();
$session_data = $_SESSION['user_data'] ?? '';

if (isset($_SESSION['user_data'])) {
    $user_data = json_decode($_SESSION['user_data'], true);
    $id = isset($user_data['id']) ? mysqli_real_escape_string($conn, $user_data['id']) : '';
    $username = isset($user_data['username']) ? mysqli_real_escape_string($conn, $user_data['username']) : '';
    $alamat = isset($user_data['alamat']) ? mysqli_real_escape_string($conn, $user_data['alamat']) : '';
}

// Persiapkan statement SQL dengan prepared statement
$sql = "INSERT INTO daftar_utang (sesi_id, sesi_data, user_id, username, alamat, jumlah_galon, merek, total_harga, status_pesanan)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameter ke statement
$stmt->bind_param("sssssssss", $session_id, $session_data, $id, $username, $alamat, $jumlahGalon, $merek, $totalHarga, $statusPesananDefault);

// Eksekusi statement
if ($stmt->execute()) {
    // Menutup statement
    $stmt->close();

    // Respons JSON dengan waktu_pembuatan
    $insertedId = mysqli_insert_id($conn);
    $selectQuery = "SELECT waktu_pembuatan FROM daftar_utang WHERE id = $insertedId";
    $selectResult = mysqli_query($conn, $selectQuery);

    if ($selectResult && mysqli_num_rows($selectResult) > 0) {
        $row = mysqli_fetch_assoc($selectResult);
        echo json_encode(array('status' => 'success', 'waktu_pembuatan' => strtotime($row['waktu_pembuatan'])));
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Gagal mengambil waktu_pembuatan.'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => $stmt->error));
}

// Tutup koneksi
$conn->close();
// Tutup session
session_write_close();
?>
