<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#2196f3">
  <title>Login User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Krona+One:wght@400&display=swap">

  <style>
    body {
      background-image: url('https://i.ibb.co/mJL7ZM9/travel-06.jpg'); /* Sesuaikan path dengan lokasi gambar */
      /* background-image: url('https://stsci-opo.org/STScI-01H5308GYAN46P3HX4PQ20HP31.png'); */
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
    height: 400px;
    margin-top: 50px;
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
    justify-content: space-between;
    align-items: center; /* Tengah secara vertikal */
  }
  
  /* Gaya khusus untuk tombol Register */
  .button-container button:nth-child(2) {
  background-color: #2AAF74; /* Warna latar belakang sesuai dengan desain Anda */
  border: 2px solid #45a049; /* Warna batas sesuai dengan desain Anda */
  width: 100px;
  margin-left: 10px; /* Menambahkan spasi antara tombol Login dan Register */
  transition: background-color 0.3s; /* Efek transisi agar perubahan warna terlihat halus */
  }

  .button-container button:nth-child(2):hover {
  border: 2px solid #fff;
  background-color: #207745; /* Warna hijau tua saat tombol dihover */
  }

  button {
    color: white;
    background-color: #2AAF74;
    border: #D1EBFE;
    width: 100px;
    height: 35px;
    margin-top: 25px;
  }

  .button-container button {
    line-height: 5px; /* Menengahkan tulisan secara vertikal */
  }

  button:hover {
    border: 2px solid #fff;
    background-color: #207745; /* Warna hijau tua saat tombol dihover */
  }

  .form-label {
    margin-left: 5px;
  }
  </style>

</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card custom-card">
          <div class="card-body custom-card-body">
            <form name="form" action="login_user.php" onsubmit="return isvalid()" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="username" id="name" placeholder="Masukkan Nama Anda" oninput="capitalizeFirstLetter(this)">
              </div>
              <div class="mb-3">
                <label for="pass" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" name="password" id="pass" placeholder="Masukkan Kata Sandi">
              </div>
              <div class="button-container">
              <button type="submit" name="submit">Login</button>
              <button type="button" onclick="window.location.href='index_register_user.php'">Register</button>
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
    var pass = document.form.password.value;

    if (user === "" && pass === "") {
      alert("Nama dan Kata Sandi tidak boleh kosong!!!");
      return false;
    } else {
      if (user === "") {
        alert("Nama tidak boleh kosong!!!");
        return false;
      }
      if (pass === "") {
        alert("Kata Sandi tidak boleh kosong!!!");
        return false;
      }
    }
    return true;
  }
</script>

<script>
function capitalizeFirstLetter(input) {
            input.value = input.value.toLowerCase().replace(/(?:^|\s)\S/g, function (a) {
                return a.toUpperCase();
            });
        }
</script>

</body>

</html>
