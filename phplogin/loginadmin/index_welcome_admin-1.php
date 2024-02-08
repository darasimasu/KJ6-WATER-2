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
    <title>Index Welcome Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>

        body {
            width: 100%;
            height: 100%;
            background-image: url('https://i.ibb.co/mJL7ZM9/travel-06.jpg');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            overflow: hidden;
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
            height: 100%;
            background-color: #3887BE; /* Ganti warna background sesuai kebutuhan */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ganti shadow sesuai kebutuhan */
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
        h1{
            margin-left: 20px;
            margin-top: 45px;
        }

        .note-input {
            position: absolute;
            margin-left: 250px;
            margin-top: 121px; /* Sesuaikan dengan nilai yang diinginkan */
            display: flex;
            align-items: center;
        }

        .note-input textarea {
            width: 333px;
            height: 99px;
            padding: 10px;
            resize: none; /* Mencegah textarea diresize oleh pengguna */
        }

        .note-input label {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 15px;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .note-input textarea:focus + label,
        .note-input textarea:not(:placeholder-shown) + label {
            top: -21px;
            left: 10px;
            font-size: 15px;
        }
        
        .button-reset button.reset-button {
            margin-left: -795px;
            border: none;
            cursor: pointer;
            display: flex;
            width: 47px;
            box-sizing: border-box;
            z-index: 5;
            background-color: #143F6B;
            color: #fff;
            transition: background-color 0.3s, color 0.3s;
            margin-top: 255px;
            justify-content: center;
            align-items: center;
        }

        .button-reset button.reset-button:hover {
            background-color: #fff;
            color: #000;
        }

        /* .note-input textarea:invalid + label {
            top: 10px;
            left: 10px;
            font-size: 15px;
        } */

        .button-simpan button.reset-button {
            margin-left: -550px;
            border: none;
            cursor: pointer;
            display: flex;
            width: 60px;
            box-sizing: border-box;
            z-index: 5;
            background-color: #143F6B;
            color: #fff;
            transition: background-color 0.3s, color 0.3s;
            margin-top: 255px;
            justify-content: center;
            align-items: center;
        }

        .button-simpan button.reset-button:hover {
            background-color: #fff;
            color: #000;
        }

        .calendar {
            z-index: 1;
            position: absolute;
            margin-top: 70px;
            margin-left: 921px;
            background-color: #fff; /* Warna latar belakang kalender */
            border: 5px solid #143F6B; /* Garis tepi kalender */
            padding: 10px;
            border-radius: 5px; /* Tambahkan sudut melengkung */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
        }

        .calendar table {
            width: 100%;
            border-collapse: collapse;
        }

        .calendar th,
        .calendar td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }

        .calendar th {
            background-color: #f2f2f2; /* Warna latar belakang header kalender */
        }

        .calendar td {
            font-weight: normal;
        }

        .calendar td.today {
            font-weight: bold;
            background-color: #ffe6e6; /* Warna latar belakang tanggal hari ini */
        }

        .custom-hr {
        margin-top: 13%;
        margin-left: -24.5%;
        color: #000;
        background-color: #000;
        height: 2px;
        width: 657px;
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

        <a href="index_welcome_admin-1.php" class="button-daftar-beda">
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

        <a href="index_edit_data_admin.php" class="button-daftar">
        <button><span class="material-symbols-outlined">manage_accounts</span> Edit Data Admin</button>
        </a>

    </ul>
    <h1>Dashboard</h1>

    <div>
    <!-- Garis Horizontal dengan Class CSS -->
    <hr class="custom-hr">
    </div>
    
    <div class="note-input">
    <textarea id="note" name="note" placeholder=" " ></textarea>
    </div>

    <div class="button-reset">
        <button class="reset-button" onclick="editToDatabase()">Edit</button>
    </div>
    <div class="button-simpan">
        <!-- Panggil fungsi saveToDatabase saat tombol "Simpan" diklik -->
        <button class="reset-button" onclick="deleteFromDatabase()">Hapus</button>
    </div>
    <!-- Tambahkan elemen select untuk tahun, bulan, dan tanggal + id nya ditambahkan-->
    <div class="calendar" id="calendar"> 
        <select id="yearSelect"></select>
        <select id="monthSelect"></select>
        <select id="daySelect"></select>
        <table></table>
    </div>

    <script>
    // Fungsi untuk meng-update nilai textarea menggunakan AJAX
    function updateNote() {
        $.ajax({
            url: 'ambil_catatan_status_depot.php', // Ganti dengan lokasi skrip PHP Anda
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#note').val(data);
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    }

    // Panggil fungsi saat halaman dimuat
    $(document).ready(function() {
        updateNote();
    });
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fungsi untuk mengisi pilihan tahun
        function populateYears() {
            var yearSelect = document.getElementById('yearSelect');
            for (var year = 1999; year <= 2999; year++) {
                var option = document.createElement('option');
                option.value = year;
                option.text = year;
                yearSelect.add(option);
            }
        }

        // Fungsi untuk mengisi pilihan bulan
        function populateMonths() {
            var monthSelect = document.getElementById('monthSelect');
            for (var month = 1; month <= 12; month++) {
                var option = document.createElement('option');
                option.value = month;
                option.text = month;
                monthSelect.add(option);
            }
        }

        // Fungsi untuk mengisi pilihan tanggal
        function populateDays() {
            var daySelect = document.getElementById('daySelect');
            for (var day = 1; day <= 31; day++) {
                var option = document.createElement('option');
                option.value = day;
                option.text = day;
                daySelect.add(option);
            }
        }

        // Fungsi untuk mengatur nilai default dari local storage
        function setDefaultValues() {
            var savedDate = localStorage.getItem('selectedDate');

            if (savedDate) {
                savedDate = JSON.parse(savedDate);
                document.getElementById('yearSelect').value = savedDate.year;
                document.getElementById('monthSelect').value = savedDate.month;
                document.getElementById('daySelect').value = savedDate.day;
            } else {
                // Jika tidak ada nilai di local storage, atur nilai default ke 2024-2-5
                var defaultDate = new Date(2024, 1, 5); // Tanggal default: 2024-2-5
                document.getElementById('yearSelect').value = defaultDate.getFullYear();
                document.getElementById('monthSelect').value = defaultDate.getMonth() + 1;
                document.getElementById('daySelect').value = defaultDate.getDate();
            }
        }

        // Fungsi untuk menangani perubahan pada select
        function handleSelectChange() {
            var selectedDate = {
                year: parseInt(document.getElementById('yearSelect').value),
                month: parseInt(document.getElementById('monthSelect').value),
                day: parseInt(document.getElementById('daySelect').value)
            };

            // Simpan nilai ke local storage setiap kali ada perubahan
            localStorage.setItem('selectedDate', JSON.stringify(selectedDate));
        }

        // Panggil fungsi-fungsi di atas
        populateYears();
        populateMonths();
        populateDays();
        setDefaultValues();

        // Tambahkan event listener untuk setiap kali terjadi perubahan pada select
        document.getElementById('yearSelect').addEventListener('change', handleSelectChange);
        document.getElementById('monthSelect').addEventListener('change', handleSelectChange);
        document.getElementById('daySelect').addEventListener('change', handleSelectChange);
    });
    </script>

    <script>
        // Fungsi deleteFromDatabase untuk menghapus data saat tombol "Hapus" diklik
        function deleteFromDatabase() {
        // Mengirim permintaan ke server untuk menghapus data terakhir
        fetch('hapus_catatan_status_depot.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        })
        .then(response => response.json())
        .then(data => {
        if (data.status === 'success') {
            // Jika berhasil (status success)
            showNotification('Data Berhasil Dihapus', 'success');
            // Mengarahkan ke halaman welcome_admin-1.php setelah notifikasi muncul
            window.location.href = 'index_welcome_admin.php';
        } else {
            // Jika gagal (status error)
            showNotification('Gagal Menghapus Data', 'error');
        }
        })
        .catch(error => {
        // Menangani kesalahan
        console.error('Terjadi kesalahan:', error);
        });
        }

        function showNotification(message, type) {
        // Menampilkan notifikasi dengan menggunakan alert atau library notifikasi lainnya
        // Anda dapat menggunakan library seperti SweetAlert atau membuat elemen HTML notifikasi kustom
        alert(message); // Contoh sederhana menggunakan alert

        // Jika ingin menggunakan library notifikasi, tambahkan kode sesuai dengan library yang digunakan
        // Contoh dengan SweetAlert:
        // swal({ title: message, icon: type });
        }


        function editToDatabase() {
        // Mendapatkan nilai baru dari textarea
        const updatedNote = document.querySelector('.note-input textarea').value;

        getDataFromDatabase().then(currentNote => {
            if (updatedNote === currentNote || currentNote === null) {
            // Jika catatan tidak berubah atau null, tampilkan pesan kesalahan
            alert('Catatan tidak valid. Harap masukkan catatan status depot yang baru.');
        }   else {
            // Mengirim data menggunakan metode POST ke file PHP server untuk mengedit data
            fetch('edit_catatan_status_depot.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    note: updatedNote,
                }),
            })
            .then(response => {
                if (response.ok) {
                    // Jika respons dari server berhasil (status 200 OK)
                    showNotification('Data Berhasil Diupdate', 'success');
                    getDataFromDatabase(); // Mengambil data terbaru setelah pengeditan
                } else {
                    // Jika respons dari server gagal
                    showNotification('Gagal Mengupdate Data', 'error');
                }
                return response.json();
            })
            .then(data => {
                // Handle respons dari server jika diperlukan
                console.log('Data berhasil diupdate:', data);
            })
            .catch(error => {
                console.error('Terjadi kesalahan:', error);
                });
                }
            });
        }


        function showNotification(message, type) {
        // Menampilkan notifikasi dengan menggunakan alert atau library notifikasi lainnya
        // Anda dapat menggunakan library seperti SweetAlert atau membuat elemen HTML notifikasi kustom
        alert(message); // Contoh sederhana menggunakan alert

        // Jika ingin menggunakan library notifikasi, tambahkan kode sesuai dengan library yang digunakan
        // Contoh dengan SweetAlert:
        // swal({ title: message, icon: type });
        }

    </script>

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