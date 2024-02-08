<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Daftar Utang Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Krona+One:wght@400&display=swap" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>

        body {
            position: absolute;
            background-image: url('https://i.ibb.co/mJL7ZM9/travel-06.jpg');
            /* background-image: url('https://stsci-opo.org/STScI-01H5308GYAN46P3HX4PQ20HP31.png'); */
            background-size: 2550px 1425px;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            overflow-y: auto; /* Menambahkan scroll vertikal */
            overflow-x: hidden; /* Tambahkan ini untuk menghilangkan scroll horizontal */
        }

        .card-container {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 233px;
            z-index: -2;
        }

        .card {
            width: 100%;
            height: 711.5px;
            background-color: #3887BE; /* Ganti warna background sesuai kebutuhan */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ganti shadow sesuai kebutuhan */
        }

        .second-card {
            position: absolute;
            width: 1600px;
            height: 43px;
            z-index: -1;
            background-color: #143F6B;
        }

        .status-text {
            position: relative;
            font-size: 17px;
            color: white;
            margin-left: 20px;
            top: 27%; /* Sesuaikan nilai top sesuai kebutuhan (dalam persentase) */
            z-index: 5;
            width: 100%;
        }

        .status-text::before {
            position: absolute;
            content: "";
            top: -13px;
            left: -100px;
            width: 250px; /* Lebar background di sebelah kiri tulisan */
            height: 43px; /* Tinggi background di sebelah kiri tulisan */
            background-color: #143F6B; /* Warna background */
            z-index: -1;
        }

        #statusDepotData {
            position: relative;
            color: white;
            height: 100%;
            width: 100%;
            margin-left: 35%;
            margin-top: -0.5em;
            animation: slideFromRight 21s linear infinite;
            transform: translateX(100%);
        }

        @keyframes slideFromRight {
            from {
            transform: translateX(100%);
            }

            to {
            transform: translateX(-90%);
            }
        }

        ul {
            list-style-type: none;
            margin: 55px 0 0 0; /* Added 70px margin from the top */
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            z-index: 5;
        }

        button {
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 9px;
            width: 233px;
            box-sizing: border-box;
            z-index: 5;
            margin-bottom: 2px; /* Jarak vertikal antara tombol */
            color: #000; /* Warna teks hitam */
            transition: background-color 0.3s, color 0.3s; /* Transisi untuk efek hover */
        }

        button:hover {
            background-color: #143F6B; /* Efek hover untuk semua tombol, warna biru tua */
            color: #fff; /* Warna teks putih */
        }

        button span.material-symbols-outlined {
            font-size: 25px;
            margin-right: 9px;
        }

a.button-daftar {
text-decoration: none; /* Menghapus garis bawah */
}

button.button-daftar {
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    padding: 9px;
    width: 233px;
    box-sizing: border-box;
    z-index: 5;
    margin-bottom: 2px; /* Jarak vertikal antara tombol */
    color: #000; /* Warna teks hitam */
    transition: background-color 0.3s, color 0.3s; /* Transisi untuk efek hover */
}

button.button-daftar:hover {
    background-color: #143F6B; /* Efek hover untuk semua tombol, warna biru tua */
    color: #fff; /* Warna teks putih */
}

button.button-daftar span.material-symbols-outlined {
    font-size: 25px;
    margin-right: 9px;
}

a.button-daftar-beda {
text-decoration: none; /* Menghapus garis bawah */
}

a.button-daftar-beda button {
    background-color: #143F6B; /* Background warna biru tua */
    color: #fff; /* Warna teks putih */
}

/* Efek hover untuk menu Dashboard */
a.button-daftar-beda button:hover {
    background-color: #0F3257; /* Background warna biru lebih tua saat dihover */
}


        li span.material-symbols-outlined {
            font-size: 80px;
            color: #FEB139; /* Warna untuk ikon */
        }

        li {
            margin-inline-start: 33%;
            margin-bottom: 21px;
            text-align: center;
            color: #FEB139; /* Warna untuk tulisan "ADMIN" */
        }

        /* Menambahkan gaya khusus untuk menu Dashboard */
        button:nth-child(2) {
            background-color: #143F6B; /* Background warna biru tua */
            color: #fff; /* Warna teks putih */
        }

        /* Efek hover untuk menu Dashboard */
        button:nth-child(2):hover {
            background-color: #0F3257; /* Background warna biru lebih tua saat dihover */
        }

        .h1-judul-container{
            position: absolute;
            width: 100%;
            margin-left: 255px;
            margin-top: 31px;
        }    

        .h1-judul-container h1 {
            /* margin-left: 20px;
            margin-top: 45px; */
            font-size: 31px;
        }

        .white-card-container {
            position: absolute;
            margin-top: 177px;
            margin-left: 254px;
            padding-bottom: 10px;
        }

        .white-card {
            position: absolute;
            align-items: center;
            width: 100%;
            width: 1016.5px;
            height: 473px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border: 1px solid black;
            overflow-y: auto; /* Menetapkan overflow-y agar dapat di-scroll secara vertikal */
        }

        /* Styling untuk scrollbar pada browser berbasis WebKit (Chrome, Safari) dan Blink (Opera) */
        .white-card::-webkit-scrollbar {
            width: 12px;
        }

        .white-card::-webkit-scrollbar-thumb {
            background-color: #8b8b8b;
            border-radius: 10px;
        }

        .white-card::-webkit-scrollbar-track {
            background-color: white;
            border-radius: 10px;
        }

        /* Styling untuk scrollbar pada browser berbasis Firefox */
        .white-card {
            scrollbar-width: thin;
            scrollbar-color: #8b8b8b white;
        }

        .white-card::-moz-scrollbar-thumb {
            background-color: #8b8b8b;
            border-radius: 10px;
        }

        .white-card::-moz-scrollbar-track {
            background-color: white;
            border-radius: 10px;
        }

        /* Styling untuk scrollbar pada browser berbasis Edge */
        .white-card {
            scrollbar-width: thin;
        }

        .white-card::-ms-scrollbar-thumb {
            background-color: #8b8b8b;
            border-radius: 10px;
        }

        .white-card::-ms-scrollbar-track {
            background-color: white;
            border-radius: 10px;
        }

        .custom-hr-container{
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 9;
        }

        .custom-hr {
        position: absolute;
        top: 90px;
        left: 21px;
        margin: 0;
        color: #000;
        background-color: #000;
        height: 2px;
        width: 1017px;
        }

        .kotak-pencari-container{
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 10;
        }

        .kotak-pencari-container img {
            position: absolute;
            left: 27.9px; /* Sesuaikan jarak gambar dari kiri */
            top: 108.5px;
            transform: translateY(30%);
            width: 13px; /* Sesuaikan ukuran gambar sesuai kebutuhan Anda */
            height: auto; /* Sesuaikan ketinggian agar gambar tidak terdistorsi */
            z-index: 11;
        }

        .kotak-pencari-container input {
            position: absolute;
            width: 979px;
            height: 15px;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            padding: 5px;
            top: 105px;
            left: 21px;
            padding-left: 30px; /* Sesuaikan padding kiri agar teks tidak bertabrakan dengan gambar */
            border: 1.5px solid #000; /* Tambahkan properti ini untuk menentukan stroke warna hitam setebal 1px */
            outline: none;
            text-transform: capitalize; /* Membuat huruf pertama kapital */
        }

        .judul-kolom-daftar-pesanan-container{
            position: absolute;
            margin-top: 143px;
            margin-left: 254px;
            z-index: 10;
            display: flex; /* Menjadikan container sebagai flex container */
        }

        .judul-kolom-daftar-pesanan-1{
            position: relative;
            min-width: 137px;
            height:33px;
            background-color: #D1EBFE;
            border: 1.5px solid #000;
        }

        .judul-kolom-daftar-pesanan-1 span {
            font-family: 'Krona One', sans-serif;
            font-size: 11px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .judul-kolom-daftar-pesanan-2{
            position: relative;
            width: 265px;
            height:33px;
            background-color: #D1EBFE;
            border: 1.5px solid #000;
            border-left: 0; /* Menghapus border sebelah kiri */
        }

        .judul-kolom-daftar-pesanan-2 span {
            font-family: 'Krona One', sans-serif;
            font-size: 11px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .judul-kolom-daftar-pesanan-3{
            position: relative;
            width: 115.5px;
            height:33px;
            background-color: #D1EBFE;
            border: 1.5px solid #000;
            border-left: 0; /* Menghapus border sebelah kiri */
        }

        .judul-kolom-daftar-pesanan-3 span {
            font-family: 'Krona One', sans-serif;
            font-size: 11px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .judul-kolom-daftar-pesanan-4{
            position: relative;
            width: 139.5px;
            height:33px;
            background-color: #D1EBFE;
            border: 1.5px solid #000;
            border-left: 0; /* Menghapus border sebelah kiri */
        }

        .judul-kolom-daftar-pesanan-4 span {
            font-family: 'Krona One', sans-serif;
            font-size: 11px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }
        
        .judul-kolom-daftar-pesanan-5{
            position: relative;
            width: 149.5px;
            height:33px;
            background-color: #D1EBFE;
            border: 1.5px solid #000;
            border-left: 0; /* Menghapus border sebelah kiri */
        }

        .judul-kolom-daftar-pesanan-5 span {
            font-family: 'Krona One', sans-serif;
            font-size: 11px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .judul-kolom-daftar-pesanan-6{
            position: relative;
            width: 202px;
            height:33px;
            background-color: #D1EBFE;
            border: 1.5px solid #000;
            border-left: 0; /* Menghapus border sebelah kiri */
        }

        .judul-kolom-daftar-pesanan-6 span {
            font-family: 'Krona One', sans-serif;
            font-size: 11px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .card-kolom-pesanan-container {
            display: flex; /* Set the container as a flex container */
            flex-direction: row; /* Arrange children in a row */
        }

        .card-kolom-pesanan-1 h2,
        .card-kolom-pesanan-2 h2,
        .card-kolom-pesanan-3 h2,
        .card-kolom-pesanan-4 h2,
        .card-kolom-pesanan-5 h2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            word-wrap: break-word;
            max-width: 100%;
            max-height: 100%;
            margin: 0;
        }

        .card-kolom-pesanan-1,
        .card-kolom-pesanan-2 {
            box-sizing: border-box; /* Include padding and border in the width calculation */
        }

        .card-kolom-pesanan-1{
            background-color: white;
            width: 139px; /* 50% dari lebar parent element */
            height: 45px;
            /* border-top: 1px solid black; */
            border-left: 1px solid black;
            border-right: 1.5px solid black;
            border-bottom: 1.5px solid black;
        }

        .card-kolom-pesanan-1 h2{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin: 13px;
            font-size: 11.5px;
        }

        .card-kolom-pesanan-2{
            background-color: white;
            width: 267px;
            height: 45px;
            /* border-top: 1px solid black; */
            border-left: none;
            border-right: 1.5px solid black;
            border-bottom: 1.5px solid black;
        }

        .card-kolom-pesanan-2 h2{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin: 13px;
            font-size: 11.5px;
        }

        .card-kolom-pesanan-3{
            background-color: white;
            width: 115px;
            height: 43.7px;
            /* border-top: 1px solid black; */
            border-left: none;
            border-right: 1.5px solid black;
            border-bottom: 1.5px solid black;
        }

        .card-kolom-pesanan-3 h2{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin: 13px;
            font-size: 11.5px;
        }

        .card-kolom-pesanan-4{
            background-color: white;
            width: 140px;
            height: 43.7px;
            /* border-top: 1px solid black; */
            border-left: none;
            border-right: 1.5px solid black;
            border-bottom: 1.5px solid black;
        }

        .card-kolom-pesanan-4 h2{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin: 13px;
            font-size: 11.5px;
        }

        .card-kolom-pesanan-5{
            background-color: white;
            width: 149.5px;
            height: 43.7px;
            /* border-top: 1px solid black; */
            border-left: none;
            border-right: 1.5px solid black;
            border-bottom: 1.5px solid black;
        }

        .card-kolom-pesanan-5 h2{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin: 13px;
            font-size: 11.5px;
        }

        .card-kolom-pesanan-6{
            display: flex; /* Menetapkan display flex pada parent */
            align-items: center; /* Pusatkan anak-anak secara vertikal */
            justify-content: center; /* Pusatkan anak-anak secara horizontal */
            background-color: white;
            width: 181.5px;
            height: 43.7px;
            /* border-top: 1px solid black; */
            border-left: none;
            border-right: 1.5px solid black;
            border-bottom: 1.5px solid black;
        }

        select {
            width: 165px; /* Lebar combo-box 90% dari lebar parent (.card-kolom-pesanan-6) */
            height: 33px; /* Tinggi combo-box 85% dari tinggi parent */
            background-color: #143F6B;
            color: white;
            padding: 4.9px; /* Padding agar tampilan lebih baik */
            box-sizing: border-box; /* Termasuk padding dan border dalam perhitungan lebar */
            position: relative; /* Menetapkan posisi absolute untuk mengatur posisi combo-box */
            top: 16.5px;
            left: 0; /* Menempatkan combo-box di kiri */
            transform: translateY(-50%); /* Pusatkan combo-box secara vertikal */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 17px;
            text-align: center;/* Menetapkan line-height dan text-align untuk memusatkan teks secara vertikal dan horizontal */
            font-size: 11.5px;
            border: 1px solid white;
            outline: none; /* Menghilangkan outline pada focus */
            appearance: none; /* Menghapus tampilan panah default */
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px"><path d="M7 10l5 5 5-5z" /></svg>'); /* Mengganti panah dengan gambar SVG */
            background-repeat: no-repeat; /* Tidak mengulang gambar */
            background-position: right 5px center; /* Posisi gambar panah di sebelah kanan dengan jarak 5px dari tepi */
            cursor: pointer; /* Mengubah kursor saat diarahkan ke elemen */
            /* Mengatur border dengan efek double */
            /* border-style: double; */
            /* border-width: 2px; Ketebalan border lapis pertama */
            /* border-color: blue black; Warna border lapis pertama dan kedua */
        }

        .card-kolom-pesanan-6 select option { /* bisa langsung pakai "select option" tanpa harus ada ".card-kolom-pesanan-6" */
            font-weight: 500;
            background-color: white;
            color: black;
            position: relative;
            padding: 5px; /* Memberikan ruang di sekitar teks */
        }

        select:focus {
            border: 3px solid white; /* Border berwarna merah saat mendapatkan fokus */
        }

        .button-daftar button {
        position: relative;
        }

        .button-daftar .card-notifikasi-merah {
            position: absolute;
            width: 6.6px;
            height: 6.6px;
            background-color: red; /* Ganti warna sesuai kebutuhan Anda */
            border: 1.5px solid black;
            border-radius: 50%; /* Untuk membuatnya berbentuk lingkaran */
            top: 50%;
            left: 70%;
            transform: translate(-50%, -50%);
            z-index: 99;
        }

        .button-daftar .card-notifikasi-kuning-utang {
            position: absolute;
            width: 6.6px;
            height: 6.6px;
            background-color: orange; /* Ganti warna sesuai kebutuhan Anda */
            border: 1.5px solid black;
            border-radius: 50%; /* Untuk membuatnya berbentuk lingkaran */
            top: 50%;
            left: 70%;
            transform: translate(-50%, -50%);
            z-index: 99;
        }

    </style>
</head>

<body>

    <div class="card-container">
        <div class="card">
        </div>
    </div>

    <div class="second-card">
    <span class="status-text" id="statusDepotText">STATUS DEPOT :  </span>
    <div id="statusDepotData"></div>
    </div>

    <ul>
        <li><span class="material-symbols-outlined">account_circle</span><br>ADMIN</br></li>

        <a href="index_welcome_admin.php" class="button-daftar">
        <button><span class="material-symbols-outlined">home</span>DASHBOARD</button>
        </a>

        <a href="index_tambah_pesanan_admin.php" class="button-daftar">
        <button><span class="material-symbols-outlined">add_box</span>Tambah Pesanan</button>
        </a>

        <a href="index_daftar_pesanan_admin.php" class="button-daftar" id="daftarPesananButton">
            <button onclick="sembunyikanNotifikasi()">
                <div id="notifikasi-merah-pesanan"></div>
                <span class="material-symbols-outlined">list_alt</span>Daftar Pesanan
            </button>
        </a>


        <a href="index_daftar_utang_admin.php" class="button-daftar-beda" id="daftarUtangButton">
            <button onclick="sembunyikanNotifikasiUtang()">
            <div id="notifikasi-kuning-utang" class="card-notifikasi-kuning-utang" style="display: none;">
                </div>
                <span class="material-symbols-outlined">attach_money</span>Daftar Utang
            </button>
        </a>

        <a href="index_riwayat_pesanan_admin.php" class="button-daftar">
        <button><span class="material-symbols-outlined">history</span> Riwayat Pesanan</button>
        </a>
        
        <a href="index_pengaturan_harga_admin.php" class="button-daftar">
        <button><span class="material-symbols-outlined">payments</span> Pengaturan Harga</button>
        </a>

        <a href="index_edit_data_admin.php" class="button-daftar">
        <button><span class="material-symbols-outlined">manage_accounts</span> Edit Data Admin</button>
        </a>

    </ul>

    <div class="h1-judul-container">
    <h1>Daftar Utang</h1>
    </div>

    <div class="custom-hr-container">
    <!-- Garis Horizontal dengan Class CSS -->
    <hr class="custom-hr">
    </div>

    <div class="kotak-pencari-container">
        <img src="https://i.ibb.co/tqrcJbn/search-26241.png" alt="Search Icon">
        <input id="searchInput" type="text" placeholder="Cari Nama dan Alamat" oninput="searchPesanan(); capitalizeFirstLetter(this)">
    </div>

    <div class="judul-kolom-daftar-pesanan-container">

        <div class="judul-kolom-daftar-pesanan-1">
            <span>Nama</span>
        </div>

        <div class="judul-kolom-daftar-pesanan-2">
            <span>Alamat Pesanan</span>
        </div>

        <div class="judul-kolom-daftar-pesanan-3">
            <span>Jumlah Galon</span>
        </div>

        <div class="judul-kolom-daftar-pesanan-4">
            <span>Merek</span>
        </div>

        <div class="judul-kolom-daftar-pesanan-5">
            <span>Total Harga</span>
        </div>

        <div class="judul-kolom-daftar-pesanan-6">
            <span>Status Pesanan</span>
        </div>

    </div>

    <div class="white-card-container">

        <div class="white-card" id="pesanan-container">

            



        </div>

    </div>

    <script>
            // Fungsi untuk mengambil data dari server dan memperbarui elemen HTML
            function updateStatusDepot() {
            // Menggunakan XMLHttpRequest untuk membuat permintaan HTTP
            var xhr = new XMLHttpRequest();

            // Mengatur metode, URL, dan mode asinkron
            xhr.open("GET", "ambil_catatan_status_depot.php", true);

            // Menangani perubahan status permintaan
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Parsing data JSON dari respons
                        var data = JSON.parse(xhr.responseText);

                        // Memperbarui elemen HTML dengan data yang diambil
                        document.getElementById("statusDepotData").innerHTML = data;
                    } else {
                        console.error("Gagal mengambil data. Kode status: " + xhr.status);
                    }
                }
            };

            // Mengirim permintaan
            xhr.send();
        }

            // Memanggil fungsi untuk pertama kali
            updateStatusDepot();

            // Memperbarui data setiap beberapa detik (misalnya, setiap 5000 milidetik)
            setInterval(updateStatusDepot, 5000);
    </script>

    <script>
        function capitalizeFirstLetter(input) {
            input.value = input.value.toLowerCase().replace(/(?:^|\s)\S/g, function (a) {
                return a.toUpperCase();
            });
        }
    </script>

<script>
// Fungsi untuk mengupdate status pesanan
function updateStatus(id, status) {
    // Mengonversi nilai status ke format yang diinginkan
    const formattedStatus = convertStatusFormat(status);

    // Menggunakan AJAX untuk mengirim permintaan pembaruan status ke server
    fetch('update_status_utang.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ id: id, status: formattedStatus }),
    })
    .then(response => response.json())
    .then(data => {
        // Handle response jika diperlukan
        console.log('Status pesanan diperbarui:', data);
    })
    .catch(error => console.error('Error:', error));
}

// Fungsi untuk mengonversi format status
function convertStatusFormat(status) {
    switch (status) {
        case 'belum_konfirmasi':
            return 'Belum Konfirmasi';
        case 'sedang_diantar':
            return 'Sedang Diantar';
        case 'dalam_antrian':
            return 'Dalam Antrian';
        case 'belum_bayar':
            return 'Belum Bayar';
        case 'telah_selesai':
            return 'Telah Selesai';
        default:
            return status; // Jika status tidak dikenali, kembalikan nilai asli
    }
}

// Fungsi untuk mengganti tampilan opsi default pada suatu elemen select
function changeDefaultOption(selectElement) {
    const selectedIndex = selectElement.selectedIndex;
    const defaultOption = selectElement.options[0];
    const localStorageKey = `selectedStatusUtangAdmin_${selectElement.dataset.id}`;

    // Ganti tampilan opsi default jika opsi lain dipilih
    if (selectedIndex !== 0) {
        // Simpan nilai yang dipilih ke localStorage untuk elemen tertentu
        localStorage.setItem(localStorageKey, selectElement.value);
    } else {
        defaultOption.style.display = 'block'; // Tampilkan opsi default jika dipilih kembali
        // Hapus nilai yang dipilih dari localStorage untuk elemen tertentu
        localStorage.removeItem(`selectedStatusUtangAdmin_${selectElement.dataset.id}`);
    }
}


// Mengambil data dari backend
fetch('cek_daftar_utang_admin.php')
    .then(response => response.json())
    .then(data => {
        // Menampilkan data
        data.forEach(row => {
            const container = document.getElementById('pesanan-container');

            const div = document.createElement('div');
            div.className = 'card-kolom-pesanan-container';

            div.innerHTML = `
                <div class="card-kolom-pesanan-1"><h2>${row.username}</h2></div>
                <div class="card-kolom-pesanan-2"><h2>${row.alamat}</h2></div>
                <div class="card-kolom-pesanan-3"><h2>${row.jumlah_galon}</h2></div>
                <div class="card-kolom-pesanan-4"><h2>${row.merek}</h2></div>
                <div class="card-kolom-pesanan-5"><h2>${row.total_harga}</h2></div>
                <div class="card-kolom-pesanan-6">
                    <select data-id="${row.id}" onchange="updateStatus(${row.id}, this.value); changeDefaultOption(this);">
                        <option value="belum_konfirmasi" ${row.status_pesanan === 'belum_konfirmasi' ? 'selected' : ''}>Belum Konfirmasi</option>
                        <option value="sedang_diantar" ${row.status_pesanan === 'sedang_diantar' ? 'selected' : ''}>Sedang Diantar</option>
                        <option value="dalam_antrian" ${row.status_pesanan === 'dalam_antrian' ? 'selected' : ''}>Dalam Antrian</option>
                        <option value="belum_bayar" ${row.status_pesanan === 'belum_bayar' ? 'selected' : ''}>Belum Bayar</option>
                        <option value="telah_selesai" ${row.status_pesanan === 'telah_selesai' ? 'selected' : ''}>Telah Selesai</option>
                    </select>
                </div>
            `;

            // Cek apakah ada nilai yang disimpan di localStorage untuk elemen tertentu
            const selectedStatus = localStorage.getItem(`selectedStatusUtangAdmin_${row.id}`);
            if (selectedStatus) {
                div.querySelector('select').value = selectedStatus;
                changeDefaultOption(div.querySelector('select')); // Panggil fungsi untuk menyembunyikan opsi default
            }

            container.appendChild(div);
        });
    })
    .catch(error => console.error('Error:', error));
</script>

<script>
function searchPesanan() {
    // Ambil nilai input pencarian
    var searchValue = document.getElementById("searchInput").value.toLowerCase();

    // Ambil semua elemen pesanan
    var pesananElements = document.querySelectorAll('.card-kolom-pesanan-container');

    // Iterasi melalui setiap elemen pesanan dan periksa apakah cocok dengan input pencarian
    pesananElements.forEach(function (element) {
        var username = element.querySelector('.card-kolom-pesanan-1').innerText.toLowerCase();
        var alamat = element.querySelector('.card-kolom-pesanan-2').innerText.toLowerCase();

        // Jika username atau alamat cocok dengan input pencarian, tampilkan elemen tersebut; jika tidak, sembunyikan
        if (username.includes(searchValue) || alamat.includes(searchValue)) {
            element.style.display = 'flex'; // Tampilkan elemen
        } else {
            element.style.display = 'none'; // Sembunyikan elemen
        }
    });
}
</script>

<script>
    // Lakukan permintaan AJAX ke server untuk memeriksa status data
    function cekStatusPesanan() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    // Tanggapan dari server
                    var response = JSON.parse(xhr.responseText);

                    // Periksa jumlah pesanan
                    var jumlahPesanan = response.count;

                    // Dapatkan elemen notifikasi
                    var notifikasiElem = document.getElementById("notifikasi-merah-pesanan");

                    // Tambahkan atau hapus elemen notifikasi sesuai dengan jumlah pesanan
                    if (jumlahPesanan > 0 && !isNotifikasiMuncul()) {
                        notifikasiElem.innerHTML = '<div class="card-notifikasi-merah"></div>';
                        console.log("Notifikasi terbentuk. Jumlah pesanan: " + jumlahPesanan);
                        setNotifikasiMuncul(true);
                    } else if (jumlahPesanan === 0 && isNotifikasiMuncul()) {
                        notifikasiElem.innerHTML = '';
                        console.log("Notifikasi dihapus. Tidak ada pesanan.");
                        setNotifikasiMuncul(false);
                    }
                } else {
                    console.error('Permintaan gagal. Kode status: ' + xhr.status);
                }
            }
        };

        // Kirim permintaan GET ke server
        xhr.open("GET", "cek_data_baru.php", true);
        xhr.send();
    }

    // Panggil fungsi cekStatusPesanan saat halaman dimuat
    window.onload = function () {
        cekStatusPesanan();
    };

    // Fungsi untuk menyembunyikan notifikasi
    function sembunyikanNotifikasi() {
        var notifikasiElem = document.getElementById("notifikasi-merah-pesanan");
        notifikasiElem.innerHTML = ''; // Menghapus isinya
        setNotifikasiMuncul(false);
    }

    // Fungsi untuk menetapkan status notifikasi menggunakan cookie
    function setNotifikasiMuncul(status) {
        document.cookie = "notifikasiMuncul=" + status + "; path=/";
    }

    // Fungsi untuk mendapatkan status notifikasi dari cookie
    function isNotifikasiMuncul() {
        var match = document.cookie.match(new RegExp('(^| )notifikasiMuncul=([^;]+)'));
        return match ? (match[2] === "true") : false;
    }
</script>

<script>
    function cekNotifikasiUtang() {
        fetch('cek_data_baru_utang.php')
        .then(response => response.json())
        .then(data => {
            if (data.count_utang > 0) {
                // Jika terdapat data baru, tampilkan notifikasi
                document.getElementById('notifikasi-kuning-utang').style.display = 'block';
            }
        })
        .catch(error => console.error('Terjadi kesalahan:', error));
    }

    function sembunyikanNotifikasiUtang() {
        // Sembunyikan notifikasi saat tombol diklik
        document.getElementById('notifikasi-kuning-utang').style.display = 'none';
    }

    // Panggil fungsi untuk pertama kali saat halaman dimuat
    cekNotifikasiUtang();

    // Panggil fungsi secara berkala dengan interval 1 menit (60 detik)
    setInterval(cekNotifikasiUtang, 60000); // 60000 milidetik = 1 menit
</script>

</body>

</html>