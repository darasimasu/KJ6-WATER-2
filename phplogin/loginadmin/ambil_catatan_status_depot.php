<?php
// File: ambil_catatan_status_depot.php

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

// Fungsi untuk mengambil data terakhir dari kolom "status_depot"
function getLastStatusDepot() {
    $conn = createConnection();

    // Query untuk mengambil data terakhir
    $sql = "SELECT status_depot FROM catatan_status_depot ORDER BY id DESC LIMIT 1";

    // Menjalankan query
    $result = $conn->query($sql);

    // Menangani hasil query
    if ($result->num_rows > 0) {
        // Mengambil data terakhir
        $row = $result->fetch_assoc();
        $lastStatus = $row["status_depot"];

        // Membersihkan input
        $lastStatus = htmlspecialchars($lastStatus);

        // Validasi panjang karakter
        if (strlen($lastStatus) > 255) {
            // Handle error, misalnya:
            die("Panjang karakter status_depot melebihi batas yang diizinkan.");
        }

    } else {
        // Jika tidak ada data
        $lastStatus = "";
    }

    // Menutup koneksi
    $conn->close();

    return $lastStatus;
}

// Memanggil fungsi untuk mengambil data terakhir
$data = getLastStatusDepot();

// Mengirimkan data sebagai respons JSON
header('Content-Type: application/json');
echo json_encode($data);
// (Tidak perlu tag penutup 
