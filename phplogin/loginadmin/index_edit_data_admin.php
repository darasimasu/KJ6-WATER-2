<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Pengaturan Harga Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Krona+One:wght@400&display=swap" />
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
            width: 1000px;
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
            margin-top: 143px;
            margin-left: 255px;
            /* padding-bottom: 10px; */
            display: flex; /* Menjadikan container sebagai flex container */
        }

        .white-card {
            position: absolute;
            align-items: center;
            width: 100%;
            width: 1016.5px;
            height: 501px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border: 1px solid black;
            overflow-y: auto; /* Menetapkan overflow-y agar dapat di-scroll secara vertikal */
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

        .button-atas-utama{
            position: absolute;
            display: flex;
            justify-content: space-between; /* Menambahkan space-between antara button */
            width: 100%;
            margin-top: 21px;
        }

        .button-atas-yang-unik{
            width: 124px;
            height: 33px;
            background-color: #143F6B; /* Atur warna latar belakang */
            color: #fff;
            padding: 10px;
            margin-right: 50px; /* Menambahkan jarak antara button */
            margin-left: 30px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.1s, color 0.1s;
            font-family: 'Krona One', sans-serif;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 0 5px 5px #d3d3d3; /* Tambahkan efek cahaya di pinggiran */
        }

        .button-atas-yang-unik:hover{
            background-color: #fff;
            color: #000;
            border: 1.5px solid black;
        }

        .button-atas-kedua{
            position: relative;
        }

        .button-atas-yang-lain {
            width: 124px;
            height: 33px;
            background-color: #143F6B; /* Atur warna latar belakang */
            color: #fff;
            padding: 10px;
            margin-top:21px; /* Menambahkan jarak antara button */
            margin-left: 450px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.1s, color 0.1s;
            font-family: 'Krona One', sans-serif;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 0 5px 5px #d3d3d3; /* Tambahkan efek cahaya di pinggiran */
        }

        .button-atas-yang-lain:hover {
            background-color: white;
            color: black;
            border: 1.5px solid black;
        }

        .button-atas-ketiga{
            position: absolute;
        }

        .button-atas-yang-terakhir {
            width: 124px;
            height: 33px;
            background-color: #000;
            color: #fff;
            padding: 10px;
            margin-top:-37px; /* Menambahkan jarak antara button */
            margin-left: 863px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.1s, color 0.1s;
            font-family: 'Krona One', sans-serif;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 0 5px 5px #d3d3d3; /* Tambahkan efek cahaya di pinggiran */
        }

        .button-atas-yang-terakhir:hover {
            background-color: white;
            color: black;
            border: 1.5px solid black;
        }

        .blue-card {
            position: absolute;
            width: 955px;
            height: 455px;
            background-color: #D1EBFE;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .card-title {
            font-size: 15px;
            margin-top: 17px;
            margin-left: 125px;
            color: black;
            font-family: 'Krona One', sans-serif;
        }

        .nama-satu-container {
            margin-top: 30px;
            display: flex;
            align-items: center;
            margin-bottom: -100px;
        }

        .label-nama-admin-satu {
            margin-left: 125px;
            color: black;
            margin-right: 127px;
            font-family: 'Krona One', sans-serif;
        }

        .nama-satu-input-admin {
            width: 455px;
            height: 25px;
            border: 2px solid #000;
            transition: border 0.3s;
            padding-left: 5px; /* Tambahkan padding kiri */
        }

        .nama-satu-input-admin:focus {
            border: 2px solid #143F6B; /* Atur border saat input mendapat fokus */
            outline: none; /* Hapus outline bawaan browser */
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7), 0 5px 21px #fff; /* Tambahkan efek cahaya di pinggiran */
        }

        .password-satu-container {
            margin-top: 130px;
            display: flex;
            align-items: center;
            margin-bottom: -100px;
        }

        .label-password-admin-satu {
            margin-left: 125px;
            color: black;
            margin-right: 95px;
            font-family: 'Krona One', sans-serif;
        }

        .password-satu-input-admin {
            width: 455px;
            height: 25px;
            border: 2px solid #000;
            transition: border 0.3s;
            padding-left: 5px; /* Tambahkan padding kiri */
        }

        .password-satu-input-admin:focus {
            border: 2px solid #143F6B; /* Atur border saat input mendapat fokus */
            outline: none; /* Hapus outline bawaan browser */
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7), 0 5px 21px #fff; /* Tambahkan efek cahaya di pinggiran */
        }

        .nama-dua-container {
            margin-top: 130px;
            display: flex;
            align-items: center;
        }

        .label-nama-admin-dua {
            margin-left: 125px;
            color: black;
            margin-right: 123px;
            font-family: 'Krona One', sans-serif;
        }

        .nama-dua-input-admin {
            width: 456px;
            height: 25px;
            padding-left: 5px; /* Tambahkan padding kiri */
            border: 2px solid #000;
            transition: border 0.3s;
        }

        .nama-dua-input-admin:focus {
            border: 2px solid #143F6B; /* Atur border saat input mendapat fokus */
            outline: none; /* Hapus outline bawaan browser */
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7), 0 5px 21px #fff; /* Tambahkan efek cahaya di pinggiran */
        }

        .password-dua-container {
            margin-top: 30px;
            display: flex;
            align-items: center;
            margin-bottom: -100px;
        }

        .label-password-admin-dua {
            margin-left: 125px;
            color: black;
            margin-right: 95px;
            font-family: 'Krona One', sans-serif;
        }

        .password-dua-input-admin {
            width: 455px;
            height: 25px;
            border: 2px solid #000;
            transition: border 0.3s;
            padding-left: 5px; /* Tambahkan padding kiri */
        }

        .password-dua-input-admin:focus {
            border: 2px solid #143F6B; /* Atur border saat input mendapat fokus */
            outline: none; /* Hapus outline bawaan browser */
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7), 0 5px 21px #fff; /* Tambahkan efek cahaya di pinggiran */
        }

        .nama-tiga-container {
            margin-top: 130px;
            display: flex;
            align-items: center;
        }

        .label-nama-admin-tiga {
            margin-left: 125px;
            color: black;
            margin-right: 123px;
            font-family: 'Krona One', sans-serif;
        }

        .nama-tiga-input-admin {
            width: 456px;
            height: 25px;
            padding-left: 5px; /* Tambahkan padding kiri */
            border: 2px solid #000;
            transition: border 0.3s;
        }

        .nama-tiga-input-admin:focus {
            border: 2px solid #143F6B; /* Atur border saat input mendapat fokus */
            outline: none; /* Hapus outline bawaan browser */
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7), 0 5px 21px #fff; /* Tambahkan efek cahaya di pinggiran */
        }

        .password-tiga-container {
            margin-top: 30px;
            display: flex;
            align-items: center;
            margin-bottom: -100px;
        }

        .label-password-admin-tiga {
            margin-left: 125px;
            color: black;
            margin-right: 95px;
            font-family: 'Krona One', sans-serif;
        }

        .password-tiga-input-admin {
            width: 455px;
            height: 25px;
            border: 2px solid #000;
            transition: border 0.3s;
            padding-left: 5px; /* Tambahkan padding kiri */
        }

        .password-tiga-input-admin:focus {
            border: 2px solid #143F6B; /* Atur border saat input mendapat fokus */
            outline: none; /* Hapus outline bawaan browser */
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7), 0 5px 21px #fff; /* Tambahkan efek cahaya di pinggiran */
        }



        .submit-semua-admin{
            margin-top: 135px;
            margin-left: 123px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .tombol-utang-container,
        .tombol-beli-container {
            margin-right: 57px; /* Ganti nilai sesuai kebutuhan jarak yang diinginkan */
        }

        .tombol-utang-container{
            position: relative;
            
        }

        .tombol-utang{
            width: 124px;
            height: 33px;
            background-color: #000;
            color: #FFF;
            padding: 10px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.1s, color 0.1s;
            font-family: 'Krona One', sans-serif;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 0 5px 5px #d3d3d3; /* Tambahkan efek cahaya di pinggiran */
            margin-right: 85px; /* Sesuaikan dengan setengah dari jarak yang diinginkan (50px / 2 = 25px) */
        }

        .tombol-utang:hover{
            background-color: white;
            color: black;
            border: 1.5px solid black;
        }

        .tombol-beli-container{
            position: relative;
        }

        .tombol-beli{
            /* margin-top: -37px;
            margin-left: 690px; */
            width: 124px;
            height: 33px;
            background-color: #000;
            color: #FFF;
            padding: 10px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.1s, color 0.1s;
            font-family: 'Krona One', sans-serif;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 0 5px 5px #d3d3d3; /* Tambahkan efek cahaya di pinggiran */
            margin-right: 85px; /* Sesuaikan dengan setengah dari jarak yang diinginkan (50px / 2 = 25px) */
        }

        .tombol-beli:hover{
            background-color: white;
            color: black;
            border: 1.5px solid black;
        }

        .button-daftar button {
        position: relative;
        }

        .button-daftar .card-notifikasi-merah {
            position: absolute;
            width: 9px;
            height: 9px;
            background-color: red; /* Ganti warna sesuai kebutuhan Anda */
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
    
    <div>
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

        <a href="index_daftar_utang_admin.php" class="button-daftar" id="daftarUtangButton">
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

        <a href="index_edit_data_admin.php" class="button-daftar-beda">
        <button><span class="material-symbols-outlined">manage_accounts</span> Edit Data Admin</button>
        </a>

    </ul>
    </div>

    <div class="h1-judul-container">
    <h1>Edit Data Admin</h1>
    </div>

    <div class="custom-hr-container">
    <!-- Garis Horizontal dengan Class CSS -->
    <hr class="custom-hr">
    </div>

    <div id="white-card-container-print" class="white-card-container">

        <div class="white-card" id="pesanan-container">

                <div class="blue-card">

                    <div class="nama-satu-container">

                        <span class="label-nama-admin-satu"> Admin 1 :</span>

                        <input type="text" name="nama_admin_satu" id="namaInputSatu" class="nama-satu-input-admin" placeholder="Masukkan Nama Admin 1 Yang Baru">

                    </div>

                    <div class="password-satu-container">

                        <span class="label-password-admin-satu"> Kata Sandi :</span>

                        <input type="text" name="password_admin_satu" id="passwordInputSatu" class="password-satu-input-admin" placeholder="Masukkan Password Admin 1 Yang Baru">

                    </div>

                    <div class="nama-dua-container">

                        <span class="label-nama-admin-dua"> Admin 2 :</span>

                        <input type="text" name="nama_admin_dua" id="namaInputDua" class="nama-dua-input-admin" placeholder="Masukkan Nama Admin 2 Yang Baru">

                    </div>

                    <div class="password-dua-container">

                        <span class="label-password-admin-dua"> Kata Sandi :</span>

                        <input type="text" name="password_admin_dua" id="passwordInputDua" class="password-dua-input-admin" placeholder="Masukkan Password Admin 2 Yang Baru">

                    </div>

                    <div class="nama-tiga-container">

                        <span class="label-nama-admin-tiga"> Admin 3 :</span>

                        <input type="text" name="nama_admin_tiga" id="namaInputTiga" class="nama-tiga-input-admin" placeholder="Masukkan Nama Admin 3 Yang Baru">

                    </div>

                    <div class="password-tiga-container">

                        <span class="label-password-admin-tiga"> Kata Sandi :</span>

                        <input type="text" name="password_admin_tiga" id="passwordInputTiga" class="password-tiga-input-admin" placeholder="Masukkan Password Admin 3 Yang Baru">

                    </div>
                    

                    <div class="submit-semua-admin">
                        <div class="tombol-utang-container">
                            <button id="tombolBatalAdmin" class="tombol-utang" onclick="resetInput()">Batal</button>
                        </div>

                        <div class="tombol-beli-container">
                            <!-- Tambahkan event listener ke tombol simpan -->
                            <button id="tombolSimpanAdmin" class="tombol-beli" onclick="simpanDataAdmin()">Simpan</button>
                        </div>
                    </div>


                </div>

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
function resetInput() {
    // Fungsi untuk mereset nilai input
    fetch('server-edit-data-admin.php')
    .then(response => response.json())
    .then(data => {
        document.getElementById('namaInputSatu').value = data.nama_admin_satu;
        document.getElementById('passwordInputSatu').value = data.password_admin_satu;
    })
    .catch(error => console.error('Error:', error));

    fetch('server-edit-data-admin-1.php')
    .then(response => response.json())
    .then(data => {
        document.getElementById('namaInputDua').value = data.nama_admin_dua;
        document.getElementById('passwordInputDua').value = data.password_admin_dua;
    })
    .catch(error => console.error('Error:', error));

    fetch('server-edit-data-admin-2.php')
    .then(response => response.json())
    .then(data => {
        document.getElementById('namaInputTiga').value = data.nama_admin_tiga;
        document.getElementById('passwordInputTiga').value = data.password_admin_tiga;
    })
    .catch(error => console.error('Error:', error));
}

</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mendapatkan data admin untuk kotak input pertama
        fetch('server-edit-data-admin.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('namaInputSatu').value = data.nama_admin_satu;
            document.getElementById('passwordInputSatu').value = data.password_admin_satu;
        })
        .catch(error => console.error('Error:', error));

        // Mendapatkan data admin untuk kotak input kedua
        fetch('server-edit-data-admin-1.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('namaInputDua').value = data.nama_admin_dua;
            document.getElementById('passwordInputDua').value = data.password_admin_dua;
        })
        .catch(error => console.error('Error:', error));

        // Mendapatkan data admin untuk kotak input ketiga
        fetch('server-edit-data-admin-2.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('namaInputTiga').value = data.nama_admin_tiga;
            document.getElementById('passwordInputTiga').value = data.password_admin_tiga;
        })
        .catch(error => console.error('Error:', error));

        // Tambahkan fetch untuk kotak input keempat jika diperlukan
    });
</script>

<script>
function simpanDataAdmin() {
    // Mendapatkan nilai dari input
    var namaAdminSatu = document.getElementById('namaInputSatu').value;
    var passwordAdminSatu = document.getElementById('passwordInputSatu').value;
    var namaAdminDua = document.getElementById('namaInputDua').value;
    var passwordAdminDua = document.getElementById('passwordInputDua').value;
    var namaAdminTiga = document.getElementById('namaInputTiga').value;
    var passwordAdminTiga = document.getElementById('passwordInputTiga').value;

    // Membuat objek FormData untuk dikirim ke server
    var formData = new FormData();
    formData.append('nama_admin_satu', namaAdminSatu);
    formData.append('password_admin_satu', passwordAdminSatu);
    formData.append('nama_admin_dua', namaAdminDua);
    formData.append('password_admin_dua', passwordAdminDua);
    formData.append('nama_admin_tiga', namaAdminTiga);
    formData.append('password_admin_tiga', passwordAdminTiga);

    // Variabel untuk menandai apakah alert sudah ditampilkan
    var alertShown = false;

    // Fungsi untuk menampilkan alert hanya jika belum ditampilkan sebelumnya
    function showAlert(status, message) {
        if (!alertShown) {
            alert(status === 'success' ? 'Anda Berhasil Mengupdate' : 'Gagal Mengupdate: ' + message);
            alertShown = true;
        }
    }

    // Menggunakan Fetch API untuk mengirim data ke server
    fetch('update_data_admin.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        showAlert(data.status, data.message);
    })
    .catch(error => console.error('Error:', error));

    // Menggunakan Fetch API untuk mengirim data ke server
    fetch('update_data_admin-1.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        showAlert(data.status, data.message);
    })
    .catch(error => console.error('Error:', error));

    // Menggunakan Fetch API untuk mengirim data ke server
    fetch('update_data_admin-2.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        showAlert(data.status, data.message);
    })
    .catch(error => console.error('Error:', error));
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