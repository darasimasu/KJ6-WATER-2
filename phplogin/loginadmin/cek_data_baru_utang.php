<?php
// Hubungkan ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Periksa apakah ada data di-POST ke tabel daftar_pesanan
$sql = "SELECT COUNT(*) as count_utang FROM daftar_utang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $jumlah_utang_terbaru = $row["count_utang"];

    // Dapatkan nilai perhitungan yang lama dari tabel hasil_perhitungan_pesanan
    $sql_old_count = "SELECT hasil_hitung FROM hasil_perhitungan_utang ORDER BY id DESC LIMIT 1";
    $result_old_count = $conn->query($sql_old_count);

    if ($result_old_count->num_rows > 0) {
        $row_old_count = $result_old_count->fetch_assoc();
        $jumlah_utang_lama = $row_old_count["hasil_hitung"];

        // Jika count lama < count terbaru, update nilai perhitungan lama
        if ($jumlah_utang_lama < $jumlah_utang_terbaru) {
            // Simpan nilai perhitungan terbaru sebagai nilai perhitungan lama di tabel
            $sql_update = "INSERT INTO hasil_perhitungan_utang (hasil_hitung) VALUES ('$jumlah_utang_terbaru')";
            $conn->query($sql_update);

            // Mengembalikan respons JSON
            $response = array("count_utang" => $jumlah_utang_terbaru);
            echo json_encode($response);
        }
    }
}

// Tutup koneksi
$conn->close();
?>
