<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database1";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mendapatkan data admin dengan id=1
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM login WHERE id = 2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $adminData = array(
            'nama_admin_dua' => $row['username'],
            'password_admin_dua' => $row['password']
        );
        echo json_encode($adminData);
    } else {
        http_response_code(404);
        echo "Data admin tidak ditemukan";
    }
}

$conn->close();
?>
