<?php
// File: check_daftar_utang.php

function checkDaftarUtang($koneksi, $idUser) {
    // Escape the user input using mysqli_real_escape_string
    $idUser = mysqli_real_escape_string($koneksi, $idUser);

    $query = "SELECT id, waktu_pembuatan FROM daftar_utang WHERE user_id = '$idUser' ORDER BY waktu_pembuatan DESC";
    $result = $koneksi->query($query);

    if ($result) {
        $dataWaktuPembuatan = array();

        while ($row = $result->fetch_assoc()) {
            $dataWaktuPembuatan[] = array(
                'id' => $row['id'],
                'waktu_pembuatan' => $row['waktu_pembuatan']
            );
        }

        // Respons JSON
        return array(
            'success' => true,
            'hasData' => (count($dataWaktuPembuatan) > 0),
            'dataWaktuPembuatan' => $dataWaktuPembuatan,
        );
    } else {
        // Jika terjadi kesalahan saat menjalankan query
        return array(
            'success' => false,
            'errorMessage' => $koneksi->error,
        );
    }
}

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

// Ambil id user dari sesi login (disini diasumsikan id user disimpan dalam variabel $_SESSION['user_data'])
// Sesuaikan dengan implementasi sesi login Anda
session_start();

// Cek apakah sesi login_user_data ada dan bukan null
if (!isset($_SESSION['user_data']) || empty($_SESSION['user_data'])) {
    // Jika sesi tidak ada atau kosong, mungkin belum login, atur respons sesuai kebutuhan
    $response = array(
        'success' => false,
        'errorMessage' => 'User belum login.'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}

// Mendekode JSON sesi menjadi array
$userData = json_decode($_SESSION['user_data'], true);

// Cek apakah id ada dalam data user
if (!isset($userData['id']) || empty($userData['id'])) {
    // Jika id user tidak ada dalam sesi, atur respons sesuai kebutuhan
    $response = array(
        'success' => false,
        'errorMessage' => 'ID user tidak valid.'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}

$idUser = $userData['id'];

// Panggil fungsi checkDaftarUtang() dan dapatkan respons
$response = checkDaftarUtang($koneksi, $idUser);

// Tutup koneksi database
$koneksi->close();

// Kembalikan respons dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
