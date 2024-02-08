<?php
// login_user.php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "database1";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $db_name);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari formulir dan escape input
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password_input = mysqli_real_escape_string($conn, $_POST["password"]);

// Mendapatkan alamat IP pengguna
$user_ip = $_SERVER['REMOTE_ADDR'];

// Query untuk memeriksa login pada tabel login_user
$query = "SELECT * FROM login_user WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();

// Memeriksa hasil query
$result = $stmt->get_result();

if ($result === false) {
    echo "Error: " . $conn->error; // Menampilkan pesan kesalahan
} else {
    // Proses hasil query
    if ($result->num_rows > 0) {
        // Data user ditemukan, verifikasi password
        $row = $result->fetch_assoc();
        if (password_verify($password_input, $row['password'])) {
            // Login berhasil

            // Mendapatkan data id, username, dan alamat dari hasil query
            $id = $row["id"];

            // Regenerasi ID sesi setelah login
            session_regenerate_id(true);

            // Menyimpan data pada sesi dengan menggunakan JSON
            $user_data = ["id" => $id, "username" => $username, "alamat" => $row["alamat"]];
            $_SESSION["user_data"] = json_encode($user_data);

            // Menyimpan informasi perangkat ke dalam sesi
            $_SESSION["device_info"] = getDeviceInfo(); // Fungsi untuk mendapatkan informasi perangkat

            // Menyimpan alamat IP ke dalam sesi
            $_SESSION["user_ip"] = $user_ip;

            // Simpan informasi sesi ke dalam tabel "sessions"
            $session_id = session_id();
            $session_data = json_encode($user_data);
            $device_info = getDeviceInfo();

            $insert_session_query = "INSERT INTO sessions (session_id, session_data, device_info, ip_address) VALUES (?, ?, ?, ?)";
            $stmt_insert = $conn->prepare($insert_session_query);
            $stmt_insert->bind_param("ssss", $session_id, $session_data, $device_info, $user_ip);
            $stmt_insert->execute();

            // Redirect ke halaman index_welcome_user.php
            header("Location: index_welcome_user.php");
            exit(); // Pastikan untuk keluar setelah header untuk menghindari eksekusi lebih lanjut
        } else {
            // Password tidak cocok
            echo "<script>alert('Login gagal. Kata sandi tidak cocok.');</script>";
            echo "<script>window.location.href='index_login_user.php';</script>";
        }
    } else {
        // Data user tidak ditemukan
        echo "<script>alert('Login gagal. Pengguna tidak ditemukan.');</script>";
        echo "<script>window.location.href='index_login_user.php';</script>";
    }
}

// Menutup koneksi
$stmt->close();
$stmt_insert->close();
$conn->close();

// Fungsi untuk mendapatkan informasi perangkat
function getDeviceInfo() {
    return $_SERVER['HTTP_USER_AGENT'];
}
?>
