<?php
session_start();
include_once("function.php");

if (!isset($_SESSION["id"])) {
    header("Location:index.php");
    exit;
}
$id = $_SESSION["id"];
$query = mysqli_query($db,"SELECT * FROM users WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if(isset($_POST["simpan"])){
  update($_POST,$_SESSION);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>EAD Travel</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg justify-content-between navbar-light bg-info">
        <div class="container-md">
            <a class="navbar-brand" href="index.php"><b>EAD Travel</b></a>
        </div>
        <ul class="navbar-nav font-weight bold" style="padding-right: 100px;">
            <li class="nav-item">
                <a class="nav-link" href="bookings.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Akun
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-right: 60px;">
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <?php if(isset($_SESSION['Gupdate'])) : ?>
        <div class="alert alert-danger alert-dismissible fade show fade in" role="alert">
            <?= $_SESSION['Gupdate'];?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
        </div>
    <?php unset($_SESSION['Gupdate']); endif; ?>

    <?php if(isset($_SESSION['update'])) : ?>
        <div class="alert alert-succes alert-dismissible fade show fade in" role="alert">
            <?= $_SESSION['update']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
        </div>
    <?php unset($_SESSION['update']);endif;?>

    <!---body profile --->
    <form action= "" method="POST" style="margin-top: 50px; margin-right:80px; margin-left:80px;">
      <h4 class="card-title text-center mt-4 pb-2">Profile</h4>
      <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" value=<?= $data["email"];?> readonly>
        </div>
      </div>
      <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" name="nama" placeholder=<?= $data["nama"];?>>
        </div>
      </div>
      <div class="row mb-3">
        <label for="nohp" class="col-sm-2 col-form-label">Nomor Handphone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nohp" name="nohp" placeholder=<?= $data["no_hp"];?>>
        </div>
      </div>
      <hr>
      <div class="row mb-3">
        <label for="passsword" class="col-sm-2 col-form-label">Kata Sandi</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password">
        </div>
      </div>
      <div class="row mb-3">
        <label for="cpassword" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="cpassword" name="cpassword">
        </div>
      </div>
      <div class="row mb-3">
        <label for="warna" class="col-sm-2 col-form-label">Warna Navbar</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-select" id="warna" name="warna">
            <option>Biru</option>
            <option>Coklat</option>
          </select>
        </div>
      </div>
      <div class="text-center pt-2">
        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        <a class="btn btn-warning" href="index.php" role="button">Cancel</a>
      </div>
      
    </form>

    <!--- --->
    

    <section style="margin-top:80px;">
        <nav class="navbar navbar-light bg-info">
            <div style="margin: auto; padding:8p; text-align:center">
                <p>&copy2021 Copyright: <a data-bs-toggle="modal" href="#modalku">CEKAS_1202194107</a></p>
            </div>
            <div class="modal" tabindex="-1" id="modalku">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Created By</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Nama   : MUHAMMAD CEKAS PERMANA</p>
                    <p>NIM    : 1202194107</p>
                  </div>
                </div>
              </div>
            </div>
        </nav>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>