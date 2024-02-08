<?php
// Mendapatkan data dari form
$namaAdminTiga = $_POST['nama_admin_tiga'];
$passwordAdminTiga = $_POST['password_admin_tiga'];

// Validasi dan sanitasi data (sebaiknya diimplementasikan sesuai kebutuhan)
$namaAdminTiga = htmlspecialchars($namaAdminTiga);
$passwordAdminTiga = htmlspecialchars($passwordAdminTiga);

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "database1";

$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Menggunakan prepared statement untuk menghindari SQL injection
$stmt = $conn->prepare("UPDATE login SET username = ?, password = ? WHERE id = 3");
$stmt->bind_param("ss", $namaAdminTiga, $passwordAdminTiga);

// Menjalankan prepared statement
if ($stmt->execute()) {
    $response = array('status' => 'success', 'message' => 'Data admin berhasil diperbarui.');
} else {
    $response = array('status' => 'error', 'message' => 'Gagal memperbarui data admin.');
}

// Menutup koneksi dan statement
$stmt->close();
$conn->close();

// Mengembalikan respons ke client
echo json_encode($response);
?>
