<?php
// ambil_data_harga_air_isi_ulang.php

// Koneksi ke database (gantilah parameter sesuai dengan konfigurasi Anda)
$koneksi = mysqli_connect("localhost", "root", "", "database1");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data harga_air_isi_ulang
$query = "SELECT harga_air_isi_ulang FROM harga_pesanan LIMIT 1"; // Ubah tabel dan nama kolom sesuai dengan struktur database Anda
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil
if ($result) {
    // Ambil data dari hasil query
    $row = mysqli_fetch_assoc($result);

    // Tampilkan data dalam format JSON
    echo json_encode($row['harga_air_isi_ulang']);
} else {
    echo "Gagal mengambil data harga_air_isi_ulang";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
