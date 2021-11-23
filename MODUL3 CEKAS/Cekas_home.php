<?php
    //koneksi database
    $db = mysqli_connect("localhost", "root", "", "modul3");

    //ambil data dari database
    $result = mysqli_query($db, "SELECT * FROM buku_table ORDER BY id_buku");

    $kosong = ('
                <div class="col-8" id="empty" style="margin:auto; padding-top:200px">
                    <center><h3>Belum Ada Buku</h3></center>
                    <hr style="height: 4px; color:dodgerblue">
                    <center><h6>Silakan Menambahkan Buku</h6></center>
                </div>');
    $cekkosong = mysqli_num_rows($result);
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
    
    <section>
        <div class="row row-cols-1 row-cols-md-3" style="margin: 80px; padding-top: 50px;">
            <?php if($cekkosong==0){ ?>
                <div class="col-8" id="empty" style="margin:auto; padding-top:100px">
                    <center><h3>Belum Ada Buku</h3></center>
                    <hr style="height: 4px; color:dodgerblue">
                    <center><h6>Silakan Menambahkan Buku</h6></center>
                </div>
            <?php } ?>
            <?php while($data = mysqli_fetch_assoc($result)) : ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="file/<?= $data["gambar"]?>" class="card-img-top" alt="..." style="height: 313px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data["judul_buku"] ?></h5>
                            <p class="card-text"><?= $data["deskripsi"] ?></p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary" href="Cekas_detailbuku.php?id_buku=<?=$data['id_buku']?>">Tampilkan lebih lanjut</a>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
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