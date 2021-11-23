<?php
    $db = mysqli_connect("localhost", "root", "", "modul3");
    if(isset($_GET['id_buku'])){
        $id_buku=$_GET['id_buku'];
    }


    $querydetail = mysqli_query($db, "SELECT * FROM buku_table WHERE id_buku = '$id_buku'");
    $hasildetail = mysqli_fetch_assoc($querydetail);

    if(isset($_POST["hapus"])) {
        $hapus = "DELETE FROM buku_table WHERE id_buku = '$id_buku'";
        $jadihapus = mysqli_query($db, $hapus);
        if(mysqli_affected_rows($db)>0){
            echo "
                <script>
                alert('Data berhasil dihapus');
                document.location.href = 'Cekas_home.php';
                </script>
          ";
        }else{
            echo "
                <script>
                alert('Data gagal dihapus');
                document.location.href = 'Cekas_home.php';
                </script>
          ";
        }
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
    <section style="padding-top: 200px;">
    <!--------->
    <div class="shadow-lg p-3 mb-5 bg-body rounded" style="width: 85%; margin:auto">
        <div class="card-body">
            <center><h2 style="padding: 40px;"><b>Detail Buku</b></h2></center>
            <div class="mb-5">
                <center><img src="file/<?= $hasildetail["gambar"]?>" alt="sampul buku" width="416" height="625"></center>
            </div>
            <div class="mb-5">
                <hr style="height: 4px; color:dodgerblue">
            </div>
            <div class="mb-5">
                <p><b>Judul:</b></p>
                <p><?php echo $hasildetail["judul_buku"] ?></p>
                <p><b>Penulis:</b></p>
                <p><?= $hasildetail["penulis_buku"] ?></p>
                <p><b>Tahun Terbit:</b></p>
                <p><?= $hasildetail["tahun_terbit"] ?></p>
                <p><b>Deskripsi:</b></p>
                <p><?= $hasildetail["deskripsi"] ?></p>
                <p><b>Bahasa:</b></p>
                <p><?= $hasildetail["bahasa"] ?></p>
                <p><b>Tag:</b></p>
                <p><?= $hasildetail["tag"] ?></p>
            </div>
                <form action="" method="post">
                    <div class="mb-3 row">
                        <div class="d-grid gap-2 col-6">
                            <a href="modal.php" class="btn btn-primary" type="button">Sunting</a>
                        </div>
                        <div class="d-grid gap-2 col-6">
                            <button class="btn btn-danger" type="submit" name="hapus">Hapus</button>
                        </div>
                    </div>
                </form>
            </div>
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