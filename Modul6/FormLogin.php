<?php
session_start();
$loginStatus = null;

require 'Koneksi.php';
require 'Login.php';

$_SESSION['NomorMember'] = "Guest";

if (isset($_GET['Login'])) {
  $loginStatus = $_GET['Login'];
}

if (!empty($_POST['password']) && !empty($_POST['nomorMember'])) {
  $_SESSION['NomorMember'] = $_POST['nomorMember'];
  $_SESSION['Password'] = $_POST['password'];
  CekSession($_SESSION['Password'], GetPassword($conn, $_SESSION['NomorMember'])->password_member);
}



?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Mohon masukkan nomor member dan password anda</p>

                <form method="post">
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Nomor Member</label>
                    <input type="text" id="typeEmailX" class="form-control form-control-lg" name="nomorMember" required />
                  </div>

                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typePasswordX">Password</label>
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" required />
                  </div>

                  <p class="mb-5 pb-lg-2"><a class="text-white-50" href="index.php">Login As Guest</a></p>
                  <?php if ($loginStatus == "Invalid") : ?>
                    <p class="fw-bold text-danger">Data yang dimasukkan tidak valid</p>
                  <?php endif; ?>
                  <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>