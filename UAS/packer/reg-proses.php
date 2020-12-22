<?php
include("db.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['reg-submit'])){

    // ambil data dari formulir
    $uname = $_POST['reg-uname'];
    $psw =$_POST['reg-pass'];
    $repass =$_POST['reg-repass'];
    $nama = $_POST['reg-name'];
    $email = $_POST['reg-email'];
    $phone =$_POST['reg-telp'];
    $alamat =$_POST['reg-alamat'];
    $lahir =$_POST['birth-date'];
    $jk = $_POST['sex'];
    // buat query
    $sql = "INSERT INTO admin (uname, pass, nama , alamat, email, nohp ,status, birthdate , gender)
    VALUE ('$uname', '$psw','$nama', '$alamat', '$email', '$phone' ,1,'$lahir',$jk)";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: home.php?kategori=none&status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: home.php?kategori=none&status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
