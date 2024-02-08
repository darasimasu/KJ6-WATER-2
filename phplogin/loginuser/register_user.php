<?php
// register_user.php

// Mengatur informasi koneksi ke database
$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "database1";

// Membuat koneksi ke database
$conn = new mysqli($servername, $db_user, $db_pass, $db_name);

// Memeriksa apakah koneksi berhasil dibuat
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Check if the form has been submitted previously using rate limiting untuk satu minggu batas pengiriman formulirnya
session_start();
if (isset($_SESSION['form_submitted_count']) && $_SESSION['form_submitted_time'] > time() - 604800) {
    echo "<script>
                setTimeout(function(){
                    alert('Anda telah mencapai batas pengiriman formulir. Anda tak bisa mengirim formulir lagi.');
                    window.location.href = 'index_register_user.php';
                }, 1000);
            </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $alamat = filter_var($_POST["alamat"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

    // Validasi input
    if (empty($username) || empty($alamat) || empty($password)) {
        echo "Nama, Alamat, dan Kata Sandi tidak boleh kosong!";
    } else {
        // Membuat query untuk memeriksa apakah username dan alamat sudah ada
        $check_query = "SELECT * FROM login_user WHERE username = ? OR alamat = ?";
        $check_stmt = $conn->prepare($check_query);

        // Bind parameter
        $check_stmt->bind_param("ss", $username, $alamat);

        // Eksekusi query
        $check_stmt->execute();

        // Ambil hasil query
        $result = $check_stmt->get_result();

        if ($result->num_rows > 0) {
            // Jika data sudah ada, tampilkan pesan alert
            echo "<script>
                setTimeout(function(){
                    alert('Nama Atau Alamat Anda Sama Dengan Pengguna Yang Lain. Tolong Isi Nama Dan Alamat Yang Berbeda');
                    window.location.href = 'index_register_user.php';
                }, 1000);
            </script>";
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Melakukan validasi menggunakan prepared statement
            $stmt = $conn->prepare("INSERT INTO login_user (username, alamat, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $alamat, $hashed_password);

            // Eksekusi query
            if ($stmt->execute()) {
                // Ganti dengan URL gambar notifikasi yang diinginkan
                $notificationImageUrl = 'https://i.ibb.co/5v8nv1H/success-8006888.png';

                // Tambahkan alert dengan gambar "Anda berhasil Register" dengan setTimeout
                echo "<html>
                    <head>
                    <style>
                    .notification-container {
                        position: fixed;
                        top: 135px;
                        width: 299px;
                        height: 299px;
                        left: 50%;
                        transform: translateX(-50%);
                        background-color: #3AB0FF;
                        color: white;
                        text-align: center;
                        padding: 15px;
                        border-radius: 5px;
                        display: none;
                        border: 2.5px solid black;
                    }
                
                    .notification-image {
                        max-width: 200px;
                        max-height: 200px;
                        margin-top: 25px;
                    }
            
                    .notification-container p {
                        font-size: 21px;
                        font-weight: bold;
                        text-shadow: 0.7px 0 0 black, 0 0.7px 0 black, -0.7px 0 0 black, 0 -0.7px 0 black;
                    }
                </style>
                </head>
                <body>
                <div class='notification-container' id='notification-container'>
                    <img src='https://i.ibb.co/5v8nv1H/success-8006888.png' alt='Notification Image' class='notification-image'>
                    <p>ANDA BERHASIL REGISTER 😊</p>
                </div>

                        <script>
                            // Tampilkan notifikasi dengan gambar setelah 1 detik
                            setTimeout(function(){
                                document.getElementById('notification-container').style.display = 'block';
                            }, 1000);

                            // Redirect setelah 3 detik
                            setTimeout(function(){
                                window.location.href = 'index_register_user.php';
                            }, 3000);
                        </script>
                    </body>
                </html>";

                            // Update session untuk rate limiting
            $_SESSION['form_submitted_count'] = isset($_SESSION['form_submitted_count']) ? $_SESSION['form_submitted_count'] + 1 : 1;
            $_SESSION['form_submitted_time'] = time();
                exit(); // Hentikan eksekusi skrip setelah melakukan redirect
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }

        $check_stmt->close();
    }
}

// Menutup koneksi setelah selesai menggunakan
$conn->close();
?>
