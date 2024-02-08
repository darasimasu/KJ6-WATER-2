<?php
// File: hapus_catatan_status_depot.php

// Fungsi untuk membuat koneksi ke database
function createConnection() {
    $servername = "localhost"; // Sesuaikan dengan nama server MySQL Anda
    $username = "root"; // Sesuaikan dengan username MySQL Anda
    $password = ""; // Sesuaikan dengan password MySQL Anda
    $dbname = "database1"; // Sesuaikan dengan nama database Anda

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Menangani kesalahan koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    return $conn;
}

// Fungsi untuk menghapus data terakhir dari kolom "status_depot"
function deleteLastStatusDepot() {
    $conn = createConnection();

    // Query untuk menghapus data terakhir
    $sql = "DELETE FROM catatan_status_depot ORDER BY id DESC LIMIT 1";

    // Menjalankan query
    $result = $conn->query($sql);

    // Menangani hasil query
    if ($result) {
        // Jika berhasil menghapus
        $response = array("status" => "success", "message" => "Data berhasil dihapus");
    } else {
        // Jika gagal menghapus
        $response = array("status" => "error", "message" => "Gagal menghapus data");
    }

    // Menutup koneksi
    $conn->close();

    return $response;
}

// Memanggil fungsi untuk menghapus data terakhir
$response = deleteLastStatusDepot();

// Mengirimkan response sebagai JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
