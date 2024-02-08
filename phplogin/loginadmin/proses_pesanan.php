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
$namaPelanggan = $conn->real_escape_string($data->nama_pelanggan);
$alamatPelanggan = $conn->real_escape_string($data->alamat);
$jumlahGalon = $conn->real_escape_string($data->jumlah_galon);
$merek = $conn->real_escape_string($data->merek);
$totalHarga = $conn->real_escape_string($data->total_harga);
$statusPesanan = $conn->real_escape_string($data->status_pesanan);

// Query untuk menyimpan data pesanan ke dalam tabel daftar_pesanan
$sql = "INSERT INTO daftar_pesanan (sesi_id, sesi_data, user_id, username, alamat, jumlah_galon, merek, total_harga, status_pesanan)
        VALUES ('', '', '', '$namaPelanggan', '$alamatPelanggan', $jumlahGalon, '$merek', $totalHarga, '$statusPesanan')";

if ($conn->query($sql) === TRUE) {
    // Kirim respons berhasil ke client
    echo json_encode(["status" => "success", "message" => "Pesanan berhasil disimpan"]);
} else {
    // Kirim respons gagal ke client
    echo json_encode(["status" => "error", "message" => "Gagal menyimpan pesanan: " . $conn->error]);
}

// Tutup koneksi ke database
$conn->close();
?>
