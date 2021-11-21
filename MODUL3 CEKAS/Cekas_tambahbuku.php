<?php
$db = mysqli_connect("localhost", "root", "", "modul3");

if(isset($_POST["submit"])) {
  $judul = $_POST["judul_buku"];
  $penulis = $_POST["penulis_buku"];
  $tahun = $_POST["tahun_terbit"];
  $desc = $_POST["deskripsi"];
  $gambar = $_POST["gambar"];
  $tag = $_POST["tag"];
  $bahasa = $_POST["bahasa"];

  $query = "INSERT INTO buku_table
            VALUES
            ('','$judul','$penulis','$tahun','$desc','$gambar','$tag','$bahasa')
            ";

  mysqli_query($db, $query);
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

    <title>Perpustakaan EAD</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://drive.google.com/uc?id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="Logo EAD" width="150" height="50">
            </a>
            <span><a class="btn btn-primary" href="Cekas_tambahbuku.php">Tambah Buku</a></span>
        </div>
    </nav>
    <section style="padding-top: 150px; ">
      <div class="shadow-lg p-3 mb-5 bg-body rounded" style="width: 90%; margin:auto">
        <form action="" method="post">
          <div class="card-body">
            <center><h3 style="padding: 15px;"><b>Tambah Data Buku</b></h3></center>
            <div class="mb-4">
              <label for="formGroupExampleInput" class="form-label"><b>Judul Buku</b></label>
              <input class="form-control" type="text" name="judul_buku" id="judul_buku" placeholder="Contoh : Pemrograman Web PHP">
            </div>
            <div class="mb-4">
              <label for="formGroupExampleInput" class="form-label"><b>Penulis</b></label>
              <input class="form-control" name="penulis_buku" id="penulis_buku" type="text" value="Cekas_1202194107" aria-label="readonly input example" readonly>
            </div>
            <div class="mb-4">
              <label for="formGroupExampleInput" class="form-label"><b>Tahun Terbit</b></label>
              <input class="form-control" name="tahun_terbit" type="text" id="tahun_terbit" placeholder="Contoh : 2021">
            </div>
            <div class="mb-4">
              <label for="exampleFormControlTextarea1" class="form-label"><b>Deskripsi</b></label>
              <textarea class="form-control" name="deskripsi" type="text" id="Deskripsi" rows="3"></textarea>
            </div>
            <div class="row mb-4">
              <div>
                <label for="bahasa" class="col-form-label" style="padding-inline-end: 15px;"><b>Bahasa</b></label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Indonesia">
                  <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Lainnya">
                  <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div>
                <label for="tag" class="col-form-label" style="padding-inline-end: 15px;"><b>Tag</b></label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tag" id="tag" value="Pemrograman">
                  <label class="form-check-label" for="inlineRadio1">Pemrograman</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tag" id="tag" value="Website">
                  <label class="form-check-label" for="inlineRadio2">Website</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tag" id="tag" value="Java">
                  <label class="form-check-label" for="inlineRadio2">Java</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tag" id="tag" value="OOP">
                  <label class="form-check-label" for="inlineRadio2">OOP</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tag" id="tag" value="MVC">
                  <label class="form-check-label" for="inlineRadio2">MVC</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tag" id="tag" value="Kalkulus">
                  <label class="form-check-label" for="inlineRadio2">Kalkulus</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tag" id="tag" value="Lainnya">
                  <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label for="formFileSm" class="form-label"><b>Gambar</b></label>
              <input class="form-control form-control-sm" id="gambar" name="gambar" type="file">
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
              <button class="btn btn-primary" type="submit" name="submit">+ TAMBAH</button>
            </div>
          </div>
        </form>
      </div>
    </section>

    <section style="padding-top: 100px;">
        <nav class="navbar navbar-light bg-light" s>
            <div style="margin: auto; padding:50px 0; text-align:center">
                <img src="https://drive.google.com/uc?id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="Logo EAD" width="10%" style="padding: 15px;">
                <p><b><h4>Perpustakaan EAD</h4></b></p>
                <p><h6>&copy Cekas_1202194107</h6></p>
            </div>
        </nav>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>