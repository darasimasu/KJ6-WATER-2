<?php
// get_user_id.php

session_start();

// Fungsi untuk mendapatkan ID pengguna dari sesi
function getUserIdFromSession() {
    if (isset($_SESSION["user_data"])) {
        $userData = json_decode($_SESSION["user_data"], true);
        return $userData["id"];
    } else {
        return null;
    }
}

// Fungsi untuk mendapatkan data login pengguna dari sesi
function getUserDataFromSession() {
    return isset($_SESSION["user_data"]) ? json_decode($_SESSION["user_data"], true) : null;
}

// Fungsi untuk menyimpan data login pengguna ke sesi
function setUserDataToSession($userData) {
    $_SESSION["user_data"] = json_encode($userData);
}

// Periksa apakah pengguna telah login
$userId = getUserIdFromSession();

if ($userId !== null) {
    // Jika pengguna telah login, kirim respons dengan ID pengguna
    $response = array(
        'id' => $userId,
    );
} else {
    // Jika pengguna belum login, periksa apakah ada data login baru
    $newUserData = getUserDataFromSession();

    if ($newUserData !== null) {
        // Jika ada data login baru, tambahkan ke sesi
        setUserDataToSession($newUserData);

        // Hapus sesi data login baru
        unset($_SESSION["new_user_data"]);

        // Kirim respons dengan ID pengguna
        $response = array(
            'id' => $newUserData["id"],
        );
    } else {
        // Jika tidak ada pengguna yang login, kirim respons dengan ID null atau sesuaikan kebutuhan
        $response = array(
            'id' => null,
        );
    }
}

// Kembalikan respons dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
