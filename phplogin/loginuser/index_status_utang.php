<!-- index_status_pesanan.php -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pesanan User</title>
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

        #statusPesanan {
            position: absolute; /* Menggunakan position relative pada kontainer */
        }

        #statusPesanan button {
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
        #statusPesanan button:hover {
            background-color: white;
            color: black;
        }

        /* Menambahkan style untuk tombol ketika diklik (active state) */
        #statusPesanan button:active {
            background-color: white;
            color: black;
        }

        .button-daftar-pesanan-status {
            width: 100%;
            max-width: 699px;
            min-height: 65px;
            background-color: #D1EBFE;
            margin-top: 33px;
            border-radius: 3px;
            display: flex;
            align-items: center;
            border: none;
            cursor: pointer;
            border: 1.5px solid rgba(0, 0, 0, 1.5); /* Efek border warna hitam dengan ketebalan 1px dan opacity 0.3 */
            transition: background-color 0.1s ease; /* Animasi perubahan warna latar saat hover */
        }

        .button-daftar-pesanan-status:hover {
            /* border: 1px solid black; Efek border warna hitam dengan ketebalan 0.5px */
            border: 1px solid rgba(0, 0, 0, 0.9); /* Efek border warna hitam dengan ketebalan 1px dan opacity 0.3 */
            background-color: #9BD5FF; /* Warna latar saat hover */
        }

        .button-daftar-pesanan-status .button-text-status-pesanan {
            font-family: 'Krona One', sans-serif;
            font-size: 13px;
            margin-left: 30px; /* Penambahan margin-left untuk teks */
            color: #000; /* Tambahkan warna teks sesuai kebutuhan */
        }

        #button-container-pesanan {
            display: flex;
            flex-direction: column; /* Mengatur tata letak menjadi kolom */
            align-items: flex-start; /* Opsional: Mengatur tata letak perataan ke kiri */
        }

        .button-daftar-pesanan-status {
            /* Gaya tombol Anda tetap tidak berubah */
            margin-bottom: 10px; /* Mengatur jarak antara tombol-tombol (opsional) */
        }

        .button-style-menuju-pesanan-sekarang {
            background-color: #A6D9FF;
            transition: background-color 0.3s ease; /* Sesuaikan durasi dan jenis transisi sesuai kebutuhan */
        }

        .button-style-menuju-pesanan-sekarang:hover {
            background-color: #73B4FF; /* Warna yang berbeda saat tombol dihover */
        }
        
        .card-black{
            cursor: pointer;
            position: absolute;
            margin-top: 57px;
            width: 145px;
            height: 53px;
            background-color: #000;
            margin-left: 890px;
            z-index: 9;
            text-decoration: none; /* Menghilangkan garis bawah pada tautan */
        }

        .card-black:hover{
            background-color: #fff;
        }

        .card-black h1 {
            margin-left:45px;
            color: white; /* Warna teks h2 putih */
            font-size: 14px;
            font-family: 'Krona One', sans-serif;
            z-index: 10; /* Ubah nilai z-index sesuai kebutuhan */
        }

        .card-black:hover h1 {
            color: #000; /* Mengubah warna teks h1 menjadi putih saat dihover */
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

    <h2 id="statusPesanan" class="background-box">
        <button onclick="kembaliDariStatusPesanan()">Kembali</button>
    </h2>

    <div class="white-card-container">
        <div class="white-card">
            <!-- <button class="button-daftar-pesanan-status" id="button-container-pesanan" onclick="redirectToIndexStatusPesananSekarang()">
            <span class="button-text-status-pesanan">Pesanan Anda</span></button> -->
        </div>

    </div>

    <script>

        // Menambahkan event listener untuk menangani klik pada tombol DAFTAR AIR GALON
        document.getElementById('daftarAirGalon').addEventListener('click', handleDaftarAirGalonClick);

        function handleDaftarAirGalonClick() {
            // Tambahkan logika untuk berpindah ke formulir atau tindakan lainnya
            window.location.href = "index_daftar_air_galon.php";
            // Tambahkan logika lain yang diperlukan
        }

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


        // Fungsi untuk menangani pengalihan ke halaman index_status_pesanan_sekarang.php
        function redirectToIndexStatusUtangSekarang(event) {
            // Mendapatkan waktu pembuatan dari elemen tombol yang diklik
            var idPesanan = event.currentTarget.getAttribute('data-id-pesanan');
            var waktuPembuatan = event.currentTarget.getAttribute('data-waktu-pembuatan');

            // Menambahkan class dengan nama khusus
            event.currentTarget.classList.add('button-style-menuju-pesanan-sekarang');

            // Set timeout untuk memberikan efek transisi sebelum melakukan redirect
            setTimeout(function() {
                // Redirect ke halaman dengan menyertakan parameter waktu_pembuatan
                window.location.href = "index_status_utang_sekarang.php?waktu_pembuatan=" + encodeURIComponent(waktuPembuatan) + "&id=" + encodeURIComponent(idPesanan);
            }, 300); // Sesuaikan timeout dengan durasi transisi
        }


// Fungsi untuk memeriksa apakah ada data di tabel daftar_pesanan menggunakan AJAX
async function isDaftarPesananNotEmpty(userId) {
    try {
        var storedUserId = sessionStorage.getItem('userId');
        var storedDataWaktuPembuatan = sessionStorage.getItem('dataWaktuPembuatan');

        // Periksa apakah data yang relevan sudah ada di sessionStorage
        if (storedUserId && storedUserId === userId && storedDataWaktuPembuatan) {
            createStatusPesananButtons(JSON.parse(storedDataWaktuPembuatan));
            return;
        }

        var xhr = new XMLHttpRequest();

        // Kirim ID pengguna sebagai parameter kueri setelah melakukan escape dengan benar
        var escapedUserId = encodeURIComponent(userId);
        xhr.open("GET", "check_daftar_utang.php?user_id=" + escapedUserId, true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                console.log('HTTP status:', xhr.status);
                console.log('Response text:', xhr.responseText);

                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    console.log('Parsed response:', response);

                    if (response.success && response.hasData) {
                        // Simpan userId dan dataWaktuPembuatan ke sessionStorage
                        sessionStorage.setItem('userId', userId);
                        sessionStorage.setItem('dataWaktuPembuatan', JSON.stringify(response.dataWaktuPembuatan));

                        createStatusPesananButtons(response.dataWaktuPembuatan);
                    }
                } else {
                    console.error("Gagal mengambil data. Kode status: " + xhr.status);
                }
            }
        };

        xhr.send();
    } catch (error) {
        console.error(error);
    }
}

// Fungsi lainnya tetap tidak berubah


// Fungsi untuk mendapatkan ID pengguna dari sesi setelah login
async function getUserId() {
    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();

        // Kirim permintaan ke skrip PHP untuk mendapatkan data sesi pengguna
        xhr.open("GET", "get_user_id.php", true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // Parsing respons JSON
                    var response = JSON.parse(xhr.responseText);

                    // Mengembalikan ID pengguna dari respons
                    resolve(response.id);
                } else {
                    reject("Gagal mendapatkan ID pengguna. Kode status: " + xhr.status);
                }
            }
        };

        xhr.send();
    });
}

// Fungsi untuk membuat tombol-tombol jika ada data di tabel daftar_pesanan
function createStatusPesananButtons(dataWaktuPembuatan) {
    var buttonContainer = document.querySelector(".white-card");

    // Membersihkan konten dari elemen white-card
    buttonContainer.innerHTML = '';

    for (var i = 0; i < dataWaktuPembuatan.length; i++) {
        var button = document.createElement("button");
        button.className = "button-daftar-pesanan-status";
        button.onclick = redirectToIndexStatusUtangSekarang;
        
        // Menambahkan atribut data-id-pesanan dan data-waktu-pembuatan ke tombol
        button.setAttribute('data-id-pesanan', dataWaktuPembuatan[i].id);
        button.setAttribute('data-waktu-pembuatan', dataWaktuPembuatan[i].waktu_pembuatan);

        var buttonText = document.createElement("span");
        buttonText.className = "button-text-status-pesanan";
        buttonText.innerHTML =
            "Pesanan Anda&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp; " +
            dataWaktuPembuatan[i].waktu_pembuatan;

        button.appendChild(buttonText);
        buttonContainer.appendChild(button);
    }
}

// Fungsi untuk memuat data dan melakukan tindakan setelahnya
async function loadDataAndPerformActions() {
    try {
        var userId = await getUserId();
        isDaftarPesananNotEmpty(userId);
    } catch (error) {
        console.error(error);
    }
}

// Event listener untuk menangkap peristiwa dokumen selesai dimuat
document.addEventListener("DOMContentLoaded", function () {
    // Panggil fungsi untuk memeriksa dan membuat tombol-tombol saat dokumen dimuat
    loadDataAndPerformActions();
});








    </script>

</body>

</html>
