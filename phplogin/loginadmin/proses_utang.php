<?php
// Koneksi ke database (sesuaikan dengan detail database Anda)
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "database1";

$conn = new mysqli($host, $user, $pass, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Terima data POST dari formulir
$data = json_decode(file_get_contents("php://input"));

// Escape karakter khusus untuk mencegah SQL injection
$namaPelangganUtang = $conn->real_escape_string($data->username); // disesuaikan dengan nama variabel di client-side
$alamatPelangganUtang = $conn->real_escape_string($data->alamat);
$jumlahGalonUtang = $conn->real_escape_string($data->jumlah_galon);
$merekUtang = $conn->real_escape_string($data->merek);
$totalHargaUtang = $conn->real_escape_string($data->total_harga);
$statusPesanan = $conn->real_escape_string($data->status_pesanan);

// Query untuk menyimpan data utang ke dalam tabel daftar_utang
$sql = "INSERT INTO daftar_utang (sesi_id, sesi_data, user_id, username, alamat, jumlah_galon, merek, total_harga, status_pesanan)
        VALUES ('', '', 0, '$namaPelangganUtang', '$alamatPelangganUtang', $jumlahGalonUtang, '$merekUtang', $totalHargaUtang, '$statusPesanan')";

if ($conn->query($sql) === TRUE) {
    // Kirim respons berhasil ke client
    echo json_encode(["status" => "success", "message" => "Utang berhasil disimpan"]);
} else {
    // Kirim respons gagal ke client
    echo json_encode(["status" => "error", "message" => "Gagal menyimpan utang: " . $conn->error]);
}

// Tutup koneksi ke database
$conn->close();
?>
