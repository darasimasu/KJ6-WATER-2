<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#2196f3">
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style_login_admin.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Krona+One:wght@400&display=swap">

  <style>
    body {
      background-image: url('/phplogin/img/travel_06.jpg'); /* Sesuaikan path dengan lokasi gambar */
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
    justify-content: center;
    text-align: center;
    height: 9vh;
  }
  
  button {
    color: white;
    background-color: #2AAF74;
    border: #D1EBFE;
    width: 100px;
    height: 35px;
    margin-top: 25px;
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
            <form name="form" action="login_admin.php" onsubmit="return isvalid()" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="username" id="name" placeholder="Masukkan Nama Admin" oninput="capitalizeFirstLetter(this)">
              </div>
              <div class="mb-3">
                <label for="pass" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" name="password" id="pass" placeholder="Masukkan Kata Sandi">
              </div>
              <div class="button-container">
              <button type="submit" name="submit">Login</button>
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
