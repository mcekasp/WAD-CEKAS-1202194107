<?php
session_start();
include_once("function.php");

if (!isset($_SESSION["id"])) {
    header("Location:index.php");
    exit;
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
                <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="container" style="margin-top: 100px;">
        <div class="row justifiy-content-center">
            <div class="col-md-6" style="margin: auto;">
                <div class="card">
                    <div class="continer">
                        <h4 class="card-title text-center mt-4 pb-2">Login</h4>
                        <div class="card-body pt-0">
                            <hr>
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="email">E-mail</label>
                                    <input required type="email" class="form-control" id="email" name="email" placeholder=" Masukkan Alamat E-mail">
                                </div>
                                <div class="mb-3">
                                    <label required for="password">Kata Sandi</label>
                                    <input required type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda">
                                </div>
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="remember" >Remember Me</label>
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                </div>

                                <div class="text-center pt-2">
                                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                                    <p class="mt-3">Anda belum punya akun? <a href="register.php" class="text-secondary">Register</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section style="position:absolute; right:0; left:0; bottom:0;">
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