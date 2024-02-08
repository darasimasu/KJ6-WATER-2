<?php
// Fungsi untuk membuat koneksi ke database
function connectToDatabase($servername, $username, $password, $dbname) {
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Fungsi untuk mengambil data dari kedua tabel dan mengurutkannya berdasarkan waktu_pembuatan DESC
function fetchDataFromTables($conn, $tableName1, $tableName2) {
    // Mengambil nilai_kalender terbaru dari tabel cek_kalender
    $sqlKalender = "SELECT nilai_kalender FROM cek_kalender ORDER BY id DESC LIMIT 1";
    $resultKalender = $conn->query($sqlKalender);

    $tanggalTerbaru = null;

    if ($resultKalender->num_rows > 0) {
        $rowKalender = $resultKalender->fetch_assoc();
        $tanggalTerbaru = $rowKalender['nilai_kalender'];
    }

    // Jika tidak ada tanggal terbaru dari tabel cek_kalender, mungkin hendaknya beri pesan atau tindakan tertentu
    if (!$tanggalTerbaru) {
        // Handle case when no latest date is available
        return array();
    }

    // Mengambil data dari kedua tabel dengan urutan waktu_pembuatan DESC dan filter status_pesanan = "Telah Selesai"
    $sql = "SELECT * FROM $tableName1 WHERE status_pesanan = 'Telah Selesai' AND DATE(waktu_pembuatan) = DATE('$tanggalTerbaru') 
            UNION
            SELECT * FROM $tableName2 WHERE status_pesanan = 'Telah Selesai' AND DATE(waktu_update) = DATE('$tanggalTerbaru')
            ORDER BY waktu_pembuatan DESC";

    $result = $conn->query($sql);

    // Inisialisasi array untuk menyimpan data
    $data = array();

    // Memeriksa apakah ada baris data
    if ($result->num_rows > 0) {
        // Menampilkan data
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}



// Ganti dengan detail koneksi database Anda
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

// Membuat koneksi ke database
$conn = connectToDatabase($servername, $username, $password, $dbname);

// Mengambil data dari kedua tabel
$data_combined = fetchDataFromTables($conn, "daftar_pesanan", "daftar_utang");

// Menutup koneksi
$conn->close();

// Mengirim data gabungan sebagai JSON
header('Content-Type: application/json');
echo json_encode(array('pesanan' => $data_combined));
?>
