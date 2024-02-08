<?php
// File: edit_catatan_status_depot.php

// Fungsi untuk membuat koneksi ke database
function createConnection() {
    $servername = "localhost"; // Ganti sesuai dengan nama server MySQL Anda
    $username = "root"; // Ganti sesuai dengan username MySQL Anda
    $password = ""; // Ganti sesuai dengan password MySQL Anda
    $dbname = "database1"; // Ganti sesuai dengan nama database Anda

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Menangani kesalahan koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    return $conn;
}

// Fungsi untuk mengedit data terakhir pada kolom "status_depot"
function editLastStatusDepot($updatedNote) {
    $conn = createConnection();

    // Query untuk mengupdate data terakhir
    $sql = "UPDATE catatan_status_depot SET status_depot = ? ORDER BY id DESC LIMIT 1";

    // Menggunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $updatedNote);
    $stmt->execute();
    $stmt->close();

    // Menutup koneksi
    $conn->close();
}

// Menerima data dari request POST
$data = json_decode(file_get_contents("php://input"));

// Memanggil fungsi untuk mengedit data terakhir
editLastStatusDepot($data->note);

// Mengirimkan respons JSON (jika diperlukan)
header('Content-Type: application/json');
echo json_encode(['message' => 'Data berhasil diupdate']);
?>
