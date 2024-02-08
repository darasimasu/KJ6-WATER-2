<?php
// ambil_status_pesanan.php

// Lakukan koneksi ke database (sesuaikan dengan informasi koneksi Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "database1";

$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Mendapatkan waktu_pembuatan dari parameter GET
$waktuPembuatan = $_GET['waktu_pembuatan'];

// Mendapatkan id dari parameter GET (asumsi id disimpan dalam variabel $_SESSION['user_data'])
session_start();

if (!isset($_SESSION['user_data']) || empty($_SESSION['user_data'])) {
    $response = array(
        'error' => 'User belum login.'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}

$userData = json_decode($_SESSION['user_data'], true);

if (!isset($userData['id']) || empty($userData['id'])) {
    $response = array(
        'error' => 'ID user tidak valid.'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}

$idUser = $userData['id'];

// Query untuk mengambil data status pesanan
$query = "SELECT * FROM daftar_pesanan WHERE waktu_pembuatan = ? AND user_id = ?";
$stmt = $koneksi->prepare($query);
$stmt->bind_param("si", $waktuPembuatan, $idUser);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Data ditemukan, kirimkan dalam format JSON
    $row = $result->fetch_assoc();
    $response = array(
        'nama' => $row['username'],
        'alamat' => $row['alamat'],
        'jumlah_galon' => $row['jumlah_galon'],
        'merek' => $row['merek'],
        'total_harga' => $row['total_harga'],
        'status_pesanan' => $row['status_pesanan'],
        'waktu_pembuatan' => $row['waktu_pembuatan'],
        'waktu_update' => $row['waktu_update'],
    );
} else {
    // Data tidak ditemukan
    $response = array(
        'error' => 'Data tidak ditemukan.'
    );
}

// Tutup koneksi database
$koneksi->close();

// Kembalikan respons dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
