<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Pesanan Telah Dibuat Admin</title>
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
            background-color: #143F6B; /* Atur warna latar belakang */
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
            height: 405px;
            background-color: #D1EBFE;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .card-title {
            font-size: 15px;
            margin-top: 350px;
            margin-left: 405px;
            color: black;
            font-family: 'Krona One', sans-serif;
        }

        .quantity-container {
        margin-top: 190px;
        display: flex;
        align-items: center;
        margin-bottom: -100px;
        }

        .total-container {
        margin-top: 130px;
        display: flex;
        align-items: center;
        }

        .label-jumlah {
            margin-left: 125px;
            color: black;
            margin-right: 145px;
            font-family: 'Krona One', sans-serif;
        }

        .label-total-harga {
            margin-left: 125px;
            color: black;
            margin-right: 95px;
            font-family: 'Krona One', sans-serif;
        }

        .quantity-input {
            width: 455px;
            height: 25px;
            border: 2px solid #000;
            transition: border 0.3s;
            padding-left: 5px; /* Tambahkan padding kiri */
        }

        /* Menyembunyikan elemen kontrol input number */
        /* .quantity-input::-webkit-inner-spin-button,
        .quantity-input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        } */

        .total-input {
            width: 456px;
            height: 25px;
            padding-left: 5px; /* Tambahkan padding kiri */
            border: none;
        }

        .quantity-input:focus {
            border: 2px solid #143F6B; /* Atur border saat input mendapat fokus */
            outline: none; /* Hapus outline bawaan browser */
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7), 0 5px 21px #fff; /* Tambahkan efek cahaya di pinggiran */
        }

        .total-input:focus {
            outline: none;
            box-shadow: none; /* Menghilangkan box-shadow saat input mendapat fokus */
        }


        .alamat-pelanggan-container {
        margin-top: 80px;
        margin-bottom: -160px;
        display: flex;
        align-items: center;
        }

        .label-alamat-pelanggan {
            margin-left: 125px;
            color: black;
            margin-right: 141px;
            font-family: 'Krona One', sans-serif;
        }

        .alamat-pelanggan-input {
            width: 456px;
            height: 25px;
            padding-left: 5px; /* Tambahkan padding kiri */
            border: none;
            border: 1.5px solid black;
        }

        .alamat-pelanggan-input:focus {
            border: 2px solid #143F6B; /* Atur border saat input mendapat fokus */
            outline: none; /* Hapus outline bawaan browser */
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7), 0 5px 21px #fff; /* Tambahkan efek cahaya di pinggiran */
        }

        .nama-pelanggan-container {
        margin-top: 70px;
        margin-bottom: -50px;
        display: flex;
        align-items: center;
        }

        .label-nama-pelanggan {
            margin-left: 125px;
            color: black;
            margin-right: 153px;
            font-family: 'Krona One', sans-serif;
        }

        .nama-pelanggan-input {
            width: 456px;
            height: 25px;
            padding-left: 5px; /* Tambahkan padding kiri */
            border: none;
            border: 1.5px solid black;
        }

        .nama-pelanggan-input:focus {
            border: 2px solid #143F6B; /* Atur border saat input mendapat fokus */
            outline: none; /* Hapus outline bawaan browser */
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7), 0 5px 21px #fff; /* Tambahkan efek cahaya di pinggiran */
        }



        .submit-semua-admin{
            margin-top: 29px;
            margin-left: 127px;
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

        <a href="index_tambah_pesanan_admin.php" class="button-daftar-beda">
        <button><span class="material-symbols-outlined">add_box</span>Tambah Pesanan</button>
        </a>

        <a href="index_daftar_pesanan_admin.php" class="button-daftar">
        <button><span class="material-symbols-outlined">list_alt</span>Daftar Pesanan</button>
        </a>

        <a href="index_daftar_utang_admin.php" class="button-daftar">
        <button><span class="material-symbols-outlined">attach_money</span>Daftar Utang</button>
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
    </div>

    <div class="h1-judul-container">
    <h1>Tambah Pesanan</h1>
    </div>

    <div class="custom-hr-container">
    <!-- Garis Horizontal dengan Class CSS -->
    <hr class="custom-hr">
    </div>

    <div id="white-card-container-print" class="white-card-container">

        <div class="white-card" id="pesanan-container">

            <div class="button-atas-utama">   
                <button class="button-atas-yang-unik" id="airIsiUlangButton">Air Isi Ulang</button>
            </div>

            <div class="button-atas-kedua">
            <button class="button-atas-yang-lain" id="airSanfordButton">Sanford</button>
            </div>

            <div class="button-atas-ketiga">
            <button class="button-atas-yang-terakhir" id="airBestariButton">Bestari</button>
            </div>

                <div class="blue-card">

                    <h3 class="card-title">Data Tersimpan</h3>


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
    // Menangkap elemen tombol
    var airIsiUlangButtonButton = document.getElementById("airIsiUlangButton");

    // Menambahkan event listener untuk menanggapi klik
    airIsiUlangButtonButton.addEventListener("click", function() {
        // Mengarahkan ke halaman "index_tambah_pesanan_admin.php"
        window.location.href = "index_tambah_pesanan_admin.php";
    });
</script>

<script>
    // Menangkap elemen tombol
    var sanfordButtonButton = document.getElementById("airSanfordButton");

    // Menambahkan event listener untuk menanggapi klik
    sanfordButtonButton.addEventListener("click", function() {
        // Mengarahkan ke halaman "index_tambah_pesanan_admin.php"
        window.location.href = "index_tambah_pesanan_admin-1.php";
    });
</script>

<script>
    // Menangkap elemen tombol
    var bestariButtonButton = document.getElementById("airBestariButton");

    // Menambahkan event listener untuk menanggapi klik
    bestariButtonButton.addEventListener("click", function() {
        // Mengarahkan ke halaman "index_tambah_pesanan_admin.php"
        window.location.href = "index_tambah_pesanan_admin-2.php";
    });
</script>


</body>

</html>