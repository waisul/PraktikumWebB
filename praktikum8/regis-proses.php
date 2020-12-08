<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $uname = $_POST['uname'];
    $psw =$_POST['psw'];
    $repass =$_POST['repass'];
    $email = $_POST['email'];
    $phone =$_POST['phone'];
    $alamat =$_POST['alamat'];
    // buat query
    $sql = "INSERT INTO admin (uname, pass, alamat, email, nohp) VALUE ('$uname', '$psw', '$alamat', '$email', '$phone')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
