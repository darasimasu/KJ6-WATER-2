<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pesanan Sekarang</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Krona+One:wght@400&display=swap" />
    
    <style>

        @media only screen and (max-width: 600px) {
        /* Styles untuk perangkat dengan lebar maksimal 600px */
        body {
        background-size: cover; /* Atur background size agar menutupi layar */
        /* Tambahkan penyesuaian gaya lainnya */
        }
        }

        body {
            position: relative;
            background-image: url('https://i.ibb.co/mJL7ZM9/travel-06.jpg');
            /* background-image: url('https://stsci-opo.org/STScI-01H5308GYAN46P3HX4PQ20HP31.png'); */
            background-size: 2550px 1685px;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            /* overflow-x: visible; */
            overflow-x: hidden; /* Tambahkan ini untuk menghilangkan scroll horizontal */
        }

        .card-container {
            position: fixed;
            left: 0;
            top: 0;
            height: 930px;
            width: 133px;
            z-index: -2;
        }

        .card {
            width: 100%;
            height: 930px;
            background-color: #3887BE;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .second-card {
            position: absolute;
            width: 1500px;
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
            margin: 55px 0 0 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            z-index: 5;
        }

        li span.material-symbols-outlined {
            font-size: 80px;
            color: #FEB139;
        }

        li {
            margin-inline-start: 35%;
            margin-top: -5%;
            margin-bottom: 21px;
            text-align: center;
            font-weight: bold;
            color: #FEB139;
        }

        #daftarAirGalon {
            width: 100%;
            height: 100%;
            position: relative;
        }

        #daftarAirGalon button {
            position: absolute;
            cursor: pointer;
            background-color: #143F6B;
            max-width: 100%; /* Mengganti width: 100% */
            width: 263px; /* Mengganti width: 263px */
            height: 45px; /* Mengganti width: 100% menjadi height: 45px */
            margin-top: 40px;
            margin-left: 77px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
            font-family: 'Krona One', sans-serif;
            transition: background-color 0.1s, color 0.1s;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 0 5px 5px #d3d3d3; /* Tambahkan efek cahaya di pinggiran */
        }

        /* Menambahkan style untuk tombol ketika dihover */
        #daftarAirGalon button:hover {
            background-color: white;
            color: black;
        }

        /* Menambahkan style untuk tombol ketika diklik (active state) */
        #daftarAirGalon button:active {
            background-color: white;
            color: black;
        }

        #statusPesananSemua {
            position: absolute; /* Menggunakan position relative pada kontainer */
        }

        #statusPesananSemua button {
            position: absolute; /* Menggunakan position absolute pada tombol */
            cursor: pointer;
            background-color: #0D4C92;
            color: white;
            font-weight: bold;
            font-size: 15px;
            width: 175px;
            height: 43px;
            margin-top: 39px;
            margin-left: 1063px;
            font-family: 'Krona One', sans-serif;
            border: none; /* Menghilangkan border */
            outline: none; /* Menghilangkan tampilan outline saat tombol ditekan */
            border-radius: 9px; /* Menambahkan border radius */
        }

        /* Menambahkan style untuk tombol ketika dihover */
        #statusPesananSemua button:hover {
            background-color: white;
            color: black;
        }

        /* Menambahkan style untuk tombol ketika diklik (active state) */
        #statusPesananSemua button:active {
            background-color: white;
            color: black;
        }

        .white-card-container {
            position: absolute;
            margin-top: 125px;
            margin-left: 157px;
        }

        .white-card {
            position: relative;
            align-items: center;
            display: flex;
            flex-direction: column; /* Mengatur tata letak fleks menjadi kolom */
            width: 100%;
            width: 1077px;
            height: 447px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border: 1.5px solid black;
        }

        .blue-card-in-white{
            position: relative;
            align-items: center;
            margin-top: 23px;
            width: 100%;
            width: 977px;
            height: 399px;
            background-color: #D1EBFE;
            border-radius: 1.5px;
            border: 1.9px solid #000; /* Sesuaikan lebar dan warna stroke sesuai kebutuhan */
        }

        .status-info {
            display: flex;
            flex-direction: column;
            height: 100%;
            margin-top: 25px;
            margin-left: 25px;
        }

        .status-info span {
            margin-bottom: 15px;
            font-family: 'Krona One', sans-serif;
            font-size: 15px;
        }

        #nama{
            margin-left: 175px;
        }

        #alamat{
            margin-left: 163px;
        }

        #jumlahGalon{
            margin-left: 105px;
        }

        #merek{
            margin-left: 175px;
        }

        #totalHarga{
            margin-left: 120px;
        }

        #statusPesanan{
            background-color: #A6D9FF;
            margin-left: 76px;
            border: 0.1px solid #fff; /* Sesuaikan lebar dan warna stroke sesuai kebutuhan */
        }

        #waktuPembuatan{
            margin-left: 51px;
        }

        #waktuUpdate{
            margin-left: 96px;
        }

        .container-teks{
            display: flex;
            align-items: center; /* Untuk memusatkan vertikal */
            justify-content: center;
            margin-left: -25px;
        }

        .container-teks img {
            margin-left: 21px;
            margin-top: 50px; /* Menambah margin kiri sejauh 10px */
        }

        .teks-di-bawah{
            margin-top: 65px;
            font-size: 15px;
            font-family: 'Krona One', sans-serif;
        }

        .teks-di-bawah-lagi{
            margin-top: 65px;
            margin-left: 9.9px;
            font-size: 15px;
            font-family: 'Krona One', sans-serif;
        }
         
    </style>

</head>

<body>

        <div class="card-container">
            <div class="card"></div>
        </div>

        <div class="second-card">
        <span class="status-text" id="statusDepotText">STATUS DEPOT :  </span>
        <div id="statusDepotData"></div>
        </div>

        <ul>
        <li><span class="material-symbols-outlined">account_circle</span><br>USER</br></li>
        </ul>

        <h2 id="daftarAirGalon" class="background-box"><button>STATUS PESANAN</button></h2>

        <h2 id="statusPesananSemua" class="background-box">
        <button onclick="kembaliDariStatusPesanan()">Kembali</button>
        </h2>

        <div class="white-card-container">

        <div class="white-card">
        
        <div class="blue-card-in-white">

        <div class="status-info" id="statusInfo">
            <span>Nama: <span id="nama"></span></span>
            <span>Alamat: <span id="alamat"></span></span>
            <span>Jumlah Galon: <span id="jumlahGalon"></span></span>
            <span>Merek: <span id="merek"></span></span>
            <span>Total Harga: <span id="totalHarga"></span></span>
            <span>Status Pesanan: <span id="statusPesanan"></span></span>
            <span>Waktu Pembuatan: <span id="waktuPembuatan"></span></span>
            <span>Waktu Update: <span id="waktuUpdate"></span></span>
            
            <div class="container-teks"><h1 class="teks-di-bawah">Untuk keluhan silahkan hubungi nomor Whatsapp ini :</h1>
            <img src="https://i.ibb.co/w6WK8CR/Pngtree-whatsapp-icon-whatsapp-logo-3584844-2.png" alt="logo-wa">
            <h2 class="teks-di-bawah-lagi">0812 2222 2398</h2>
            </div>

        </div>

        </div>

        </div>

        </div>

    <script>

        // Fungsi untuk mendapatkan parameter dari URL
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        // Mendapatkan parameter waktu_pembuatan  dan id dari URL
        var waktuPembuatan = getParameterByName('waktu_pembuatan');
        var idPesanan = getParameterByName('id');

        // Fungsi untuk mengambil data dari server dan memperbarui elemen HTML
        function updateStatusPesanan() {
            var xhr = new XMLHttpRequest();

            xhr.open("GET", "ambil_status_utang.php?waktu_pembuatan=" + waktuPembuatan + "&id=" + idPesanan, true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var data = JSON.parse(xhr.responseText);

                        // Memperbarui elemen HTML dengan data yang diambil
                        document.getElementById("nama").innerText = data.username;
                        document.getElementById("alamat").innerText = data.alamat;
                        document.getElementById("jumlahGalon").innerText = data.jumlah_galon;
                        document.getElementById("merek").innerText = data.merek;
                        document.getElementById("totalHarga").innerText = data.total_harga;
                        document.getElementById("statusPesanan").innerText = data.status_pesanan;
                        document.getElementById("waktuPembuatan").innerText = data.waktu_pembuatan;
                        document.getElementById("waktuUpdate").innerText = data.waktu_update;
                    } else {
                        console.error("Gagal mengambil data. Kode status: " + xhr.status);
                    }
                }
            };

            xhr.send();
        }

        // Memanggil fungsi untuk pertama kali
        updateStatusPesanan();

        // Memperbarui data setiap beberapa detik (misalnya, setiap 3000 milidetik)
        setInterval(updateStatusPesanan, 3000);

        function kembaliDariStatusPesanan() {
                // Mengarahkan pengguna kembali ke halaman sebelumnya
                window.history.back();
            }
        
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

        // Memperbarui data setiap beberapa detik (misalnya, setiap 3000 milidetik)
        setInterval(updateStatusDepot, 3000);

        // Menambahkan event listener untuk menangani klik pada tombol DAFTAR AIR GALON
        document.getElementById('daftarAirGalon').addEventListener('click', handleDaftarAirGalonClick);
            function handleDaftarAirGalonClick() {
            // Tambahkan logika untuk berpindah ke formulir atau tindakan lainnya
            window.location.href = "index_daftar_air_galon.php";
            // Tambahkan logika lain yang diperlukan
        }

    </script>

</body>

</html>
