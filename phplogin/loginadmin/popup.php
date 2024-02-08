<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Riwayat</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Krona+One:wght@400&display=swap" />

    <script>
        // Fungsi untuk mendapatkan tanggal-bulan-tahun sekarang
        function getCurrentDate() {
            const now = new Date();
            const day = now.getDate();
            const month = now.getMonth() + 1; // Ditambah 1 karena bulan dimulai dari 0 (Januari)
            const year = now.getFullYear();

            // Format tanggal dengan menambahkan "0" di depan jika nilainya kurang dari 10
            const formattedDate = `${day < 10 ? '0' : ''}${day}-${month < 10 ? '0' : ''}${month}-${year}`;

            return formattedDate;
        }

        // Fungsi untuk mengubah judul saat diprint
        function updateTitleForPrint() {
            document.title = `Print Riwayat pada tanggal ${getCurrentDate()} Depot KJ6 Water`;
        }

        // Event listener untuk mendeteksi saat halaman di-print
        window.onbeforeprint = updateTitleForPrint;
    </script>

    <style>
        body {
            position: absolute;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            overflow-y: auto; /* Menambahkan scroll vertikal */
            overflow-x: hidden; /* Tambahkan ini untuk menghilangkan scroll horizontal */
        }

        @media print {
            #contentPrint, #contentPrint{
                display: block;
            }
        }

        .h1-judul-container{
            position: relative;
        }    

        .h1-judul-container h1 {
            position: relative;
            margin-top: 25px;
            margin-left: 325px;
            font-size: 33px;
            width: 100%; /* Sesuaikan dengan nilai yang diinginkan */
            font-family: 'Krona One', sans-serif;
        }

        .container-semua{
            position: absolute;
        }

        .white-card-container {
            position: relative;
            margin-top: 180px;
            margin-left: 25px;
            display: flex; /* Menjadikan container sebagai flex container */
            flex-direction: column; /* Mengubah arah flex menjadi kolom */
            align-items: stretch;
            height: 100vh;
                }

        .white-card {
            position: absolute;
            align-items: center;
            width: 100%;
            width: 996.5px;
            height: 100%;
            background-color: white;
        }

        .total-semua-harga-container{
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row; /* Mengubah arah flex menjadi baris */
        }

        .total-semua-harga{
            position: absolute;
            top: -850px;
            left: 25px;
            width: 996px;
            height: 60px;
            background-color: #D1EBFE;
            border-top: none;
            border: 1.5px solid black;
        }

        .total-semua-harga h3 {
            position: relative;
            left: 280px;
            top: 11px;
            font-size: 10.5px;
            font-family: 'Krona One', sans-serif;
            margin-right: 20px; /* Memberikan jarak antar kolom (opsional) */
        }


        .judul-kolom-daftar-pesanan-container{
            position: absolute;
            margin-top: 123px;
            margin-left: 25px;
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
            width: 182.5px;
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
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
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
        }

        .print-button-container{
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 25;
        }

        .print-button button{
            cursor: pointer;
            position: absolute;
            right: 80px;
            top:33px;
            border-radius: 5px;
            height: 39px;
            width: 119px;
            color: white;
            background-color: black;
            font-size: 11px;
            font-family: 'Krona One', sans-serif;
            justify-content: center;
        }

        .print-button button:hover{
            border: 1.99px solid black;
            background-color: white;
            color: black;
        }

    </style>
</head>
<body>
    
<div class="card-container">
        <div class="card">
        </div>
    </div>

    <div class="second-card">
    </div>

    <div id="contentPrint">

    <div class="container-semua">

    <div class="h1-judul-container">
    <h1>DEPOT KJ6 WATER</h1>
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

    <div class="total-semua-harga-container">
        <div class="total-semua-harga">
            <h3 id="total-dari-semua" style="display: inline-block;">Total Harga Penjualan Per Hari : </h3>
        </div>

    </div>

    </div>

    </div>

    <div class="print-button-container">
        <div class="print-button">
            <button id="print">Print</br>Riwayat</button>
        </div>
    </div>

</body>

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
    fetch('update_status_riwayat.php', {
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

// Mengambil data dari backend
fetch('cek_daftar_riwayat_admin.php')
    .then(response => response.json())
    .then(data => {
        // Menggabungkan data dari tabel daftar_pesanan dan daftar_utang
        const allData = data.pesanan.concat(data.utang);

        // Mengurutkan data berdasarkan waktu_pembuatan secara descending
        allData.sort((a, b) => new Date(b.waktu_pembuatan) - new Date(a.waktu_pembuatan));

        // Menampilkan data
        allData.forEach(row => {
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
                        <option value="telah_selesai" ${row.status_pesanan === 'telah_selesai' ? 'selected' : ''}>Telah Selesai</option>
                        <option value="belum_konfirmasi" ${row.status_pesanan === 'belum_konfirmasi' ? 'selected' : ''}>Belum Konfirmasi</option>
                        <option value="sedang_diantar" ${row.status_pesanan === 'sedang_diantar' ? 'selected' : ''}>Sedang Diantar</option>
                        <option value="dalam_antrian" ${row.status_pesanan === 'dalam_antrian' ? 'selected' : ''}>Dalam Antrian</option>
                        <option value="belum_bayar" ${row.status_pesanan === 'belum_bayar' ? 'selected' : ''}>Belum Bayar</option>
                        
                    </select>
                </div>
            `;

            // Cek apakah ada nilai yang disimpan di localStorage untuk elemen tertentu
            const selectedStatus = localStorage.getItem(`selectedStatusRiwayatAdmin_${row.id}`);
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
    // Fungsi untuk melakukan permintaan data dari server
    function fetchDataFromServer() {
        fetch('cek_daftar_riwayat_admin.php') // Ganti dengan URL file PHP Anda
            .then(response => response.json())
            .then(data => {
                hitungTotalHarga(data.pesanan);
            })
            .catch(error => console.error('Error:', error));
    }

// Fungsi untuk menjumlahkan total harga dari data pesanan
function hitungTotalHarga(data) {
    // Menggunakan reduce untuk menjumlahkan nilai total_harga dari setiap objek dalam array data
    var total = data.reduce(function (accumulator, currentValue) {
        return accumulator + parseFloat(currentValue.total_harga);
    }, 0);

    // Menambahkan format angka dengan tanda pemisah ribuan dan menampilkan total pada elemen dengan id "total-dari-semua"
    var formattedTotal = "Total Harga Penjualan Per Hari : Rp" + total.toLocaleString('id-ID');
    document.getElementById("total-dari-semua").innerText = formattedTotal;
}

// Memanggil fungsi untuk mengambil data dari server
fetchDataFromServer();

</script>

<script>
    // Menambahkan event listener untuk tombol print
    const printBtn = document.getElementById('print');

    printBtn.addEventListener('click', function() {
        printContent();
    });

    // Fungsi untuk mencetak konten yang berada di dalam id "contentPrint"
    function printContent() {
        var contentToPrint = document.getElementById('contentPrint').innerHTML;
        var originalBody = document.body.innerHTML;

        // Menyalin isi dari id "contentPrint" ke dalam halaman baru
        document.body.innerHTML = contentToPrint;

        // Mencetak halaman baru
        window.print();

        // Mengembalikan isi halaman ke keadaan semula
        document.body.innerHTML = originalBody;
    }
</script>

</html>