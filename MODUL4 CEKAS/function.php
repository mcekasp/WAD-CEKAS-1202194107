<?php
//cek session
if (!isset($_SESSION)){
    session_start();
}

//koneksi database
$db = mysqli_connect("localhost", "root", "", "wad_modul4");

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
    $cek = mysqli_query($db, "SELECT email FROM user WHERE email='$email'");
    if(mysqli_fetch_assoc($cek)){
        if ($password !== $cpassword) {
            //enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);
            //INSERT ke databse
            mysqli_query($db,"INSERT INTO user VALUES('','$nama','$email','$password','$nohp')");
            //Message berhasil
            $_SESSION['registered'] = 'Berhasil registrasi';
            header("Location : login.php");
            exit();
        }
    }

    //Message email sudah ada
    $_SESSION['message'] = 'E-mail sudah terdaftar! Silakan masukkan email yang lain!';
    header("Location : register.php");
    exit();

}

function login($permintaan) {
    global $db;

    $email = $permintaan["email"];
    $password = $permintaan["password"];

    $cekEmail = mysqli_query($db, "SELECT * FROM user WHERE email = '$email'");

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
    header("Location: index.php");
    exit();
}
?>