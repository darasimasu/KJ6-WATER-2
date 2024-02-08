<?php
// Mendapatkan data dari form
$namaAdminDua = $_POST['nama_admin_dua'];
$passwordAdminDua = $_POST['password_admin_dua'];

// Validasi dan sanitasi data (sebaiknya diimplementasikan sesuai kebutuhan)
$namaAdminDua = htmlspecialchars($namaAdminDua);
$passwordAdminDua = htmlspecialchars($passwordAdminDua);

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
$stmt = $conn->prepare("UPDATE login SET username = ?, password = ? WHERE id = 2");
$stmt->bind_param("ss", $namaAdminDua, $passwordAdminDua);

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
