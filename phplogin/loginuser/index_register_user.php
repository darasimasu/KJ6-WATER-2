<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#2196f3">
  <title>Register User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Krona+One:wght@400&display=swap">

  <style>
    body {
      background-image: url('https://i.ibb.co/mJL7ZM9/travel-06.jpg'); /* Sesuaikan path dengan lokasi gambar */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .custom-card {
    background-color: #D1EBFE;
    border-color: #143F6B;
    border-radius: 5px;
    border-style: inset;
    border-width: 2px;
    width: 350px;
    height: 500px;
    margin-left: auto;
    margin-right: auto;
  }
  
  .custom-card-body {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  
  .button-container {
    display: flex;
    text-align: center;
    height: 9vh;
    justify-content: center;
    align-items: center; /* Tengah secara vertikal */
  }

  button {
    color: white;
    background-color: #2AAF74;
    border: #D1EBFE;
    width: 100px;
    height: 35px;
    margin-top: 21px;
    line-height: 5px; /* Menengahkan tulisan secara vertikal */
  }

  button:hover {
    border: 2px solid #fff;
    background-color: #207745; /* Warna hijau tua saat tombol dihover */
  }

  .form-label {
    margin-left: 5px;
  }

  p a {
    text-decoration: underline;
    position: relative;
    color: blue; /* Warna teks sesuai dengan desain Anda */
    transition: color 0.3s; /* Efek transisi agar perubahan warna teks terlihat halus */
  }

  p a:hover {
    color: #143F6B; /* Warna teks saat tulisan dihover */
    text-shadow: 
      -1px -1px 1px white,
      1px -1px 1px white,
      -1px 1px 1px white,
      1px 1px 1px white; /* Efek stroke putih dengan text-shadow */
  }

  </style>

</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card custom-card">
          <div class="card-body custom-card-body">
            <form name="form" action="register_user.php" onsubmit="return isvalid()" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="username" id="name" placeholder="Masukkan Nama Anda" oninput="validateInput()">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Anda" oninput="validateInputAlamat()">
              </div>
              <div class="mb-3">
                <label for="pass" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" name="password" id="pass" placeholder="Masukkan Kata Sandi">
              </div>
              <div class="button-container">
              <button type="submit">Register</button>
              </div>

              <div style="text-align: center; margin-top: 21px;">
                <p style="display: inline-block; margin-bottom: 0;">
                    Sudah Register? Silahkan 
                    <a href="index_login_user.php" style="text-decoration: underline;">Login</a>
                    </p>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
function isvalid() {
    var user = document.form.username.value;
    var alamat = document.form.alamat.value;
    var pass = document.form.password.value;

    if (user === "" && alamat === "" && pass === "") {
      alert("Nama, Alamat, dan Kata Sandi tidak boleh kosong!!!");
      return false;
    } else {
      if (user === "") {
        alert("Nama tidak boleh kosong!!!");
        return false;
      }
      if (alamat === "") {
        alert("Alamat tidak boleh kosong!!!");
        return false;
      }
      if (pass === "") {
        alert("Kata Sandi tidak boleh kosong!!!");
        return false;
      }
    }
    // Mengembalikan nilai true agar formulir tetap dikirim
    return true;
}
</script>




<script>
function validateInput() {
    var inputElement = document.getElementById("name");
    var inputValue = inputElement.value;

    // Hapus karakter selain huruf dan spasi
    var cleanedValue = inputValue.replace(/[^A-Za-z\s]/g, '');

    // Split input berdasarkan spasi
    var words = cleanedValue.split(" ");

    // Ubah setiap kata setelah spasi menjadi huruf kapital
    for (var i = 0; i < words.length; i++) {
        words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
    }

    // Gabungkan kata-kata kembali dengan spasi
    var finalValue = words.join(" ");

    // Setel nilai kembali ke input
    inputElement.value = finalValue;
}
</script>

<script>
function validateInputAlamat() {
    var inputElement = document.getElementById("alamat");
    var inputValue = inputElement.value;

    // Daftar format yang diterima
    var acceptedFormats = ["Jl."];

    // Periksa apakah input dimulai dengan salah satu dari format yang diterima
    var startsWithAcceptedFormat = acceptedFormats.some(format => inputValue.startsWith(format));

    if (!startsWithAcceptedFormat) {
        // Jika tidak dimulai dengan format yang diterima, tambahkan salah satu dari format yang diterima
        inputValue = acceptedFormats[0] + " " + inputValue;
    }

    // Split input berdasarkan spasi
    var words = inputValue.split(" ");

    // Ubah setiap kata setelah spasi menjadi huruf kapital
    for (var i = 1; i < words.length; i++) {
        words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
    }

    // Gabungkan kata-kata kembali dengan spasi
    var cleanedValue = words.join(" ");

    // Pastikan huruf pertama kapital
    cleanedValue = cleanedValue.charAt(0).toUpperCase() + cleanedValue.slice(1);

    // Setel nilai kembali ke input
    inputElement.value = cleanedValue;
}
</script>


</body>

</html>
