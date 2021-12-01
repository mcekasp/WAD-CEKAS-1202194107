<?php
//cek session
if (!isset($_SESSION)){
    session_start();
}

//koneksi database
$db = mysqli_connect("localhost", "root", "", "wad_modul4");
//select all


if(!$db) {
    echo "  <script>
            alert('Gagal terkoneksi dengan Database')
            </script>";
    die("Gagal terkoneksi.".mysqli_connect_error());
}

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function pendaftaran($data) {
    global $db;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = $data["email"];
    $password = mysqli_real_escape_string($db, $data["password"]);
    $cpassword = mysqli_real_escape_string($db, $data["cpassword"]);
    $nohp = $data["nohp"];

    //cek kesediaan email
    $cek = mysqli_query($db, "SELECT email FROM users WHERE email='$email'");
    if(!mysqli_fetch_assoc($cek)){
        if ($password == $cpassword) {
            //enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);
            //INSERT ke databse
            mysqli_query($db,"INSERT INTO users VALUES('','$nama','$email','$password','$nohp')");
            //Message berhasil
            $_SESSION['registered'] = 'Berhasil registrasi';
            header("Location:login.php");
            exit();
        }
    }else{
        //Message email sudah ada
        $_SESSION['message'] = 'E-mail sudah terdaftar! Silakan masukkan email yang lain!';
        header("Location:register.php");
        exit();
    }
}

function login($permintaan) {
    global $db;

    $email = $permintaan["email"];
    $password = $permintaan["password"];

    $cekEmail = mysqli_query($db, "SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($cekEmail)===1) {
        //cek password
        $row = mysqli_fetch_assoc($cekEmail);
        if (password_verify($password, $row["password"])) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['nohp'] = $row['nohp'];

            $_SESSION['message'] = 'Berhasil login!';

            header("Location: index.php");
            exit();
        }else {
            $_SESSION['message']='Password Salah';
            header("Location: login.php");
            exit();
        }
    }
    $_SESSION['message'] = 'Gagal login!';
    header("Location: login.php");
    exit();
}

function hapus($perintah){
    global $db;
    $hapus = "DELETE FROM bookings WHERE id = '$perintah'";
    mysqli_query($db, $hapus);
    header("Location: bookings.php");
}

function update($klik,$sesi){
    global $db;
    $id = $sesi["id"];
    $email = $klik["email"];
    $nama = $klik["nama"];
    $nohp = $klik["nohp"];
    $sandi = $klik["password"];
    $konsan = $klik["cpassword"];

    if ($sandi == $konsan) {
        //enkripsi password
        $sandi = password_hash($sandi, PASSWORD_DEFAULT);
        $update = "UPDATE users SET nama = '$nama', no_hp = '$nohp', password = '$sandi' WHERE id = '$id' AND email = '$email'";
        mysqli_query($db,$update);
        $_SESSION["update"] = "Berhasil Update data";
        header("Location:profile.php");
    }else {
        $_SESSION["Gupdate"] = "Gagal Update data";
        header("location:profile.php");
    }
}

function tambah1($data,$sesi){
    global $db;

    $idUser = $sesi['id'];
    $nama = $data['nama'];
    $lokasi = $data['lokasi'];
    $tanggal = $data['tanggal'];
    $harga = $data['harga'];

    $query = "INSERT INTO bookings
    VALUES
    ('','$idUser','$nama','$lokasi','$harga','$tanggal')
    ";

    mysqli_query($db, $query);
}
function tambah2($data,$sesi){
    global $db;

    $idUser = $sesi['id'];
    $nama = $data['nama2'];
    $lokasi = $data['lokasi2'];
    $tanggal = $data['tanggal2'];
    $harga = $data['harga2'];

    $query = "INSERT INTO bookings
    VALUES
    ('','$idUser','$nama','$lokasi','$harga','$tanggal')
    ";

    mysqli_query($db, $query);
}
function tambah3($data,$sesi){
    global $db;

    $idUser = $sesi['id'];
    $nama = $data['nama3'];
    $lokasi = $data['lokasi3'];
    $tanggal = $data['tanggal3'];
    $harga = $data['harga3'];

    $query = "INSERT INTO bookings
    VALUES
    ('','$idUser','$nama','$lokasi','$harga','$tanggal')
    ";

    mysqli_query($db, $query);
}

?>