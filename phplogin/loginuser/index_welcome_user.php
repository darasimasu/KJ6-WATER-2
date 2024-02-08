<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Login Successfull!!!</h1>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
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
            background-size: 2550px 1100px;
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
            height: 100%;
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

        .custom-hr {
            margin-top: 19%;
            margin-left: 8.75%;
            color: #000;
            background-color: #000;
            height: 2px;
            width: 900px;
        }

        #daftarAirGalon {
            position: relative;
        }

        #daftarAirGalon button {
            position: absolute;
            cursor: pointer;
            background-color: #143F6B;
            width: 263px;
            height: 85px;
            margin-top: 40px;
            margin-left: 77px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
            font-family: 'Krona One', sans-serif; /* Menambahkan jenis huruf Krona One */
            transition: background-color 0.1s, color 0.1s;
            box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.5); /* Tambahkan ini untuk box shadow di bagian bawah */
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

        #daftarPesanan button {
            position: absolute;
            cursor: pointer;
            background-color: #0D4C92;
            width: 225px;
            height: 43px;
            margin-top: 39px;
            margin-left: 933px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: bold;
            font-size: 15px;
            font-family: 'Krona One', sans-serif; /* Menambahkan jenis huruf Krona One */
            transition: background-color 0.1s, color 0.1s;
            border: none; /* Menghilangkan border */
            outline: none; /* Menghilangkan tampilan outline saat tombol ditekan */
            border-radius: 9px; /* Menambahkan border radius */
        }

        /* Menambahkan style untuk tombol ketika dihover */
        #daftarPesanan button:hover {
            background-color: white;
            color: black;
        }

        /* Menambahkan style untuk tombol ketika diklik (active state) */
        #daftarPesanan button:active {
            background-color: white;
            color: black;
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

    <h2 id="daftarAirGalon" class="background-box"><button>KLIK DAFTAR AIR </br> GALON</button></h2>

    <h2 id="daftarPesanan" class="background-box"><button  onclick="pindahKeStatusPesanan()">STATUS PESANAN</button></h2>

    <div>
    <!-- Garis Horizontal dengan Class CSS -->
    <hr class="custom-hr">
    </div>

    <div style="display: flex; justify-content: flex-start;">
    <img src="https://i.ibb.co/gW4sh3c/Brosur25.png" alt="Deskripsi Gambar" style="width: 900px; height: 536px; margin-top: 22%; margin-left: -91.5%; padding-bottom: 3%;">
    </div>

    <script>

        function pindahKeStatusPesanan() {
                // Mengarahkan pengguna ke halaman "index_pesanan_telah_dibuat.php"
                window.location.href = "index_status_pesanan.php";
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

        // Memperbarui data setiap beberapa detik (misalnya, setiap 5000 milidetik)
        setInterval(updateStatusDepot, 5000);


        function handleDaftarAirGalonClick() {
            var daftarAirGalon = document.getElementById("daftarAirGalon");

            // Tambahkan logika untuk berpindah ke formulir atau tindakan lainnya
            window.location.href = "index_daftar_air_galon.php";

            // Tambahkan logika lain yang diperlukan
        }

        // Menambahkan event listener untuk menangani klik pada tombol DAFTAR AIR GALON
        document.getElementById("daftarAirGalon").addEventListener("click", handleDaftarAirGalonClick);
    </script>

</body>

</html>
