<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "database1";
    $conn = new mysqli($servername, $username, $password, $db_name);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    // Tidak perlu untuk echo "";

    // Cek koneksi ke database
    if(!$conn) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];        

        $sql = "select * from login where username = '$username' and password = '$password'";       
        $result = mysqli_query($conn, $sql);
        $row =  mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if($count == 1) {
            header("Location:index_welcome_admin.php");
            exit(); // Tambahkan exit untuk mencegah eksekusi lebih lanjut
        } else {
            echo '<script>
                    alert("Login gagal. Username atau password tidak valid!!!");
                    window.location.href = "index_login_admin.php";
                  </script>';
        }
    }
?>
