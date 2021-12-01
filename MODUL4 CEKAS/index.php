<?php
session_start();

include_once("function.php");

$db = mysqli_connect("localhost", "root", "", "wad_modul4");

if(isset($_POST["input1"])) {
  tambah1($_POST, $_SESSION);
}
if (isset($_POST["input2"])){
  tambah2($_POST,$_SESSION);
}
if (isset($_POST["input3"])){
  tambah3($_POST,$_SESSION);
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
    <?php if(!isset($_SESSION["id"])):  ?>
      <nav class="navbar navbar-expand-lg justify-content-between navbar-light bg-info">
          <div class="container-md">
              <a class="navbar-brand" href="index.php"><b>EAD Travel</b></a>
          </div>
          <ul class="navbar-nav font-weight bold" style="padding-right: 80px;">
              <li class="nav-item">
                  <a class="nav-link" href="register.php">Register</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
              </li>
          </ul>
      </nav>
    <?php endif?>

    <?php if(isset($_SESSION["id"])):  ?>
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
    <?php endif?>

    <?php if(isset($_SESSION['message'])) : ?>
        <div class="alert alert-warning alert-dismissible fade show fade in" role="alert">
            <?= $_SESSION['message'];?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
        </div>
    <?php unset($_SESSION['message']); endif; ?>

    <section>
      <div id="Home">
        <div style="margin:auto; padding-top:40px;">
          <div style="background-color:dodgerblue; margin-left: 100px; margin-right: 100px;height:100px">
            <br>
            <h2 style="text-align:center;">EAD Travel</h2>
          </div>
          <div class="card-group" style="margin-left: 100px; margin-right: 100px; margin-top:20px">
            <div class="card">
              <img src="https://asset.kompas.com/crops/28S0TkvG7koDd1XpB5m9t-703Ww=/0x0:780x520/780x390/data/photo/2021/03/21/605753630590a.jpg" class="card-img-top" alt="Raja Ampat" style="height: 200px;">
              <div class="card-body">
                <h5 class="card-title">Raja Ampat, Papua</h5>
                <p class="card-text" style="font-size: 13px;">Kepulauan Raja Ampat adalah kepulauan Indonesia di ujung barat laut Semenanjung Kepala Burung di Papua Barat. Terdiri dari ratusan pulau yang tertutup hutan, Raja Ampat dikenal dengan pantai dan terumbu karangnya yang kaya dengan kehidupan laut. Lukisan batu dan gua kuno berada di pulau Misool, sedangkan cendrawasih merah hidup di pulau Waigeo. Batanta dan Salawati adalah pulau-pulau utama lainnya di nusantara.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b><p>Rp 7.000.000</p></b></li>
              </ul>
              <div class="card-footer">
                <div class="d-grid gap-2">
                  <?php if(!isset($_SESSION["id"])):  ?>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tanggal" disabled>Pesan Tiket</button>
                  <?php endif?>
                  <?php if(isset($_SESSION["id"])):  ?>  
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tanggal">Pesan Tiket</button>
                  <?php endif?>
                  <form action="" method="POST">
                    <input type="text" name="nama" value="Raja Ampat" hidden>
                    <input type="text" name="lokasi" value="Papua" hidden>
                    <input type="text" name="harga" value="7000000" hidden>
                    
                    <div class="modal fade" id="tanggal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tanggal Perjalanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <label for="tanggal" class="form-label">Tanggal Perjalanan</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="dd/mmm/yyyy" required>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="input1">Tambahkan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="card">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg" class="card-img-top" alt="Gunung Bromo" style="height: 200px;">
              <div class="card-body">
                <h5 class="card-title">Gunung Bromo, Malang</h5>
                <p class="card-text" style="font-size: 13px;">Gunung Bromo adalah gunung berapi somma aktif dan bagian dari pegunungan Tengger, di Jawa Timur, Indonesia. Pada 2.329 meter itu bukan puncak tertinggi dari massif, tetapi yang paling terkenal. Kawasan ini merupakan salah satu destinasi wisata yang paling banyak dikunjungi di Jawa Timur, dan gunung berapi ini termasuk dalam Taman Nasional Bromo Tengger Semeru.
                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b><p>Rp 2.000.000</p></b></li>
              </ul>
              <div class="card-footer">
                <div class="d-grid gap-2">
                  <?php if(!isset($_SESSION["id"])):  ?>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tanggal2" disabled>Pesan Tiket</button>
                  <?php endif?>
                  <?php if(isset($_SESSION["id"])):  ?>  
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tanggal2">Pesan Tiket</button>
                  <?php endif?>
                  <form action="" method="POST">
                    <input type="text" name="nama2" value="Gunung Bromo" hidden>
                    <input type="text" name="lokasi2" value="Malang" hidden>
                    <input type="text" name="harga2" value="2000000" hidden>
                    
                    <div class="modal fade" id="tanggal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tanggal Perjalanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <label for="tanggal" class="form-label">Tanggal Perjalanan</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal2" placeholder="dd/mmm/yyyy" required>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="input2">Tambahkan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="card">
              <img src="https://www.rentalmobilbali.net/wp-content/uploads/2019/12/Sunset-Pura-Tanah-Lot-Bali-Twitter.jpg" class="card-img-top" alt="Tanah Lot" style="height: 200px;">
              <div class="card-body">
                <h5 class="card-title">Tanah Lot, Bali</h5>
                <p class="card-text" style="font-size: 13px;">Tanah Lot adalah formasi batuan di lepas pantai pulau Bali, Indonesia. Ini adalah rumah bagi kuil ziarah Hindu kuno Pura Tanah Lot, ikon wisata dan budaya yang populer untuk fotografi. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b><p>Rp 5.000.000</p></b></li>
              </ul>
              <div class="card-footer">
                <div class="d-grid gap-2">
                  <?php if(!isset($_SESSION["id"])):  ?>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tanggal3" disabled>Pesan Tiket</button>
                  <?php endif?>
                  <?php if(isset($_SESSION["id"])):  ?>  
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tanggal3">Pesan Tiket</button>
                  <?php endif?>
                  <form action="" method="POST">
                    <input type="text" name="nama3" value="Tanah Lot" hidden>
                    <input type="text" name="lokasi3" value="Bali" hidden>
                    <input type="text" name="harga3" value="5000000" hidden>
                    
                    <div class="modal fade" id="tanggal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tanggal Perjalanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <label for="tanggal" class="form-label">Tanggal Perjalanan</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal3" placeholder="dd/mmm/yyyy" required>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="input3">Tambahkan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="padding-top:80px">
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