<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Tambah Pesanan Admin</title>
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
            background-color: #000;
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
            margin-top: 17px;
            margin-left: 125px;
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
    
    <div>
    <ul>
        <li><span class="material-symbols-outlined">account_circle</span><br>ADMIN</br></li>

        <a href="index_welcome_admin.php" class="button-daftar">
        <button><span class="material-symbols-outlined">home</span>DASHBOARD</button>
        </a>

        <a href="index_tambah_pesanan_admin.php" class="button-daftar-beda">
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

                    <h3 class="card-title">Sanford</h3>

                    <div class="nama-pelanggan-container">

                        <span class="label-nama-pelanggan">Nama:</span>

                        <input type="text" name="nama_pelanggan" id="namaPelangganInput" class="nama-pelanggan-input" placeholder="Masukkan Nama Pelanggan" oninput="capitalizeFirstLetterSatu(this)">

                    </div>

                    <div class="alamat-pelanggan-container">

                        <span class="label-alamat-pelanggan">Alamat:</span>

                        <input type="text" name="alamat_pelanggan" id="alamatPelangganInput" class="alamat-pelanggan-input" placeholder="Masukkan Alamat Pelanggan" oninput="capitalizeFirstLetterDua(this)">

                    </div>

                    <div class="quantity-container">

                        <span class="label-jumlah">Jumlah:</span>

                        <input type="number" name="jumlah_galon" id="quantityInput" class="quantity-input" placeholder="Masukkan Jumlah Galon Yang Ingin Dipesan" min="0">
                        <input type="hidden" name="merek" id="merekInput" value="Sanford"> <!-- Tambahkan input hidden untuk merek -->

                    </div>

                    <div class="total-container">

                        <span class="label-total-harga">Total Harga:</span>

                        <input type="text" name="total_harga" id="totalInput" class="total-input" readonly>

                    </div>
                    

                    <div class="submit-semua-admin">
                        <div class="tombol-utang-container">
                            <button id="tombolUtangAdmin" class="tombol-utang">Utang</button>
                        </div>

                        <div class="tombol-beli-container">
                            <button id="tombolBeliAdmin" class="tombol-beli">Beli</button>
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
        // Mendapatkan elemen input dan menyimpan nilai harga_air_isi_ulang
        var quantityInput = document.getElementById("quantityInput");
        var totalInput = document.getElementById("totalInput");
        var hargaAirIsiUlang;

        // Menggunakan Fetch API untuk mengambil data dari server PHP
        fetch('ambil_data_harga_air_sanford.php')
            .then(response => response.json())
            .then(data => {
                // Menyimpan nilai harga_air_isi_ulang dari data yang diterima
                hargaAirIsiUlang = data;

                // Menambahkan event listener ke input quantityInput
                quantityInput.addEventListener("input", updateTotal);

                // Memanggil fungsi pertama kali untuk menginisialisasi total
                updateTotal();
            })
            .catch(error => {
                console.error('Error:', error);
            });

        // Fungsi untuk mengupdate total berdasarkan nilai quantityInput
        function updateTotal() {
            // Mengambil nilai quantityInput
            var quantityValue = parseFloat(quantityInput.value) || 0;

            // Menghitung total harga
            var totalHarga = hargaAirIsiUlang * quantityValue;

            // Menetapkan nilai totalInput tanpa desimal jika nilai desimalnya nol
            totalInput.value = totalHarga % 1 === 0 ? totalHarga.toFixed(0) : totalHarga.toFixed(2);
        }
    </script>

    <script>
        var tombolBeliAdmin = document.getElementById("tombolBeliAdmin");
        tombolBeliAdmin.addEventListener("click", kirimDataPesanan);

        function kirimDataPesanan() {
            // Mengambil nilai dari elemen input
            var namaPelanggan = document.getElementById("namaPelangganInput").value;
            var alamatPelanggan = document.getElementById("alamatPelangganInput").value;
            var jumlahGalon = document.getElementById("quantityInput").value;
            var merek = document.getElementById("merekInput").value;
            var totalHarga = document.getElementById("totalInput").value;

            // Membuat objek data untuk dikirim ke server
            var dataPesanan = {
                nama_pelanggan: namaPelanggan,
                alamat: alamatPelanggan,
                jumlah_galon: jumlahGalon,
                merek: merek,
                total_harga: totalHarga,
                status_pesanan: "Belum Konfirmasi" // Set status_pesanan secara default
            };

            // Menggunakan Fetch API untuk mengirim data ke server menggunakan metode POST
            fetch('proses_pesanan.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(dataPesanan)
            })
            .then(response => response.json())
            .then(data => {
                // Handle respons dari server
                console.log('Data pesanan berhasil dikirim:', data);

                // Menampilkan notifikasi alert
                alert("Pesanan Berhasil Dibuat");

                // Mengarahkan ke halaman "pesanan_telah_dibuat.php"
                window.location.href = "index_pesanan_telah_dibuat.php";
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>

<script>
    var tombolUtangAdmin = document.getElementById("tombolUtangAdmin");
    tombolUtangAdmin.addEventListener("click", kirimDataUtang);

    function kirimDataUtang() {
        // Mengambil nilai dari elemen input
        var namaPelangganUtang = document.getElementById("namaPelangganInput").value;
        var alamatPelangganUtang = document.getElementById("alamatPelangganInput").value;
        var jumlahGalonUtang = document.getElementById("quantityInput").value;
        var merekUtang = document.getElementById("merekInput").value;
        var totalHargaUtang = document.getElementById("totalInput").value;

        // Membuat objek data untuk dikirim ke server
        var dataUtang = {
            username: namaPelangganUtang,
            alamat: alamatPelangganUtang,
            jumlah_galon: jumlahGalonUtang,
            merek: merekUtang,
            total_harga: totalHargaUtang,
            status_pesanan: "Belum Konfirmasi" // Set status_pesanan secara default
        };

        // Menggunakan Fetch API untuk mengirim data ke server menggunakan metode POST
        fetch('proses_utang.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(dataUtang)
        })
        .then(response => response.json())
        .then(data => {
            // Handle respons dari server
            console.log('Data utang berhasil dikirim:', data);

            // Menampilkan notifikasi alert
            alert("Utang Berhasil Dibuat");

            // Mengarahkan ke halaman "utang_telah_dibuat.php"
            window.location.href = "index_pesanan_telah_dibuat.php";
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>

    

    <script>
        function capitalizeFirstLetterSatu(input) {
            // Menghapus angka dari nilai input
            input.value = input.value.replace(/\d+/g, ''); // Hanya mempertahankan huruf

            // Mengonversi ke huruf kecil dan mengubah huruf pertama setiap kata menjadi huruf besar
            input.value = input.value.toLowerCase().replace(/(?:^|\s)\S/g, function (a) {
                return a.toUpperCase();
            });
        }
    </script>

    <script>
        function capitalizeFirstLetterDua(input) {
            // Pastikan input tidak kosong
            if (input.value.length > 0) {
                // Pastikan awalan "Jl." belum ada sebelumnya
                if (!input.value.startsWith("Jl.")) {
                    // Tambahkan "Jl." di awal input
                    input.value = "Jl. " + input.value;
                }
            }

            // Capitalize huruf pertama di setiap kata
            input.value = input.value.toLowerCase().replace(/(?:^|\s)\S/g, function (a) {
                return a.toUpperCase();
            });
        }
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

<script>
    // Lakukan permintaan AJAX ke server untuk memeriksa status data
    function cekStatusPesanan() {
        $.ajax({
            url: 'cek_data_baru.php',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Periksa jumlah pesanan
                var jumlahPesanan = response.count;

                // Dapatkan elemen notifikasi
                var notifikasiElem = $("#notifikasi-merah-pesanan");

                // Tambahkan atau hapus elemen notifikasi sesuai dengan jumlah pesanan
                if (jumlahPesanan > 0 && !isNotifikasiMuncul()) {
                    notifikasiElem.html('<div class="card-notifikasi-merah"></div>');
                    console.log("Notifikasi terbentuk. Jumlah pesanan: " + jumlahPesanan);
                    setNotifikasiMuncul(true);
                } else if (jumlahPesanan === 0 && isNotifikasiMuncul()) {
                    notifikasiElem.html('');
                    console.log("Notifikasi dihapus. Tidak ada pesanan.");
                    setNotifikasiMuncul(false);
                }
            },
            error: function(xhr, status, error) {
                console.error('Permintaan gagal. Error: ' + error);
            }
        });
    }

    // Panggil fungsi cekStatusPesanan saat halaman dimuat
    $(document).ready(function() {
        cekStatusPesanan();
    });

    // Fungsi untuk menyembunyikan notifikasi
    function sembunyikanNotifikasi() {
        $("#notifikasi-merah-pesanan").html(''); // Menghapus isinya
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