<?php

include("db.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['buat-toko-submit'])){

    // ambil data dari formulir
    $namatoko = $_POST['nama_toko'];
    // buat query
    session_start();
    $uname=$_SESSION['uname'];
    $sql = "UPDATE admin SET nama_toko='$namatoko',status=2 WHERE uname='$uname'" ;
    $query = mysqli_query($db, $sql);
    $_SESSION['status']=2;
    header('Location: home.php?kategori=none');

} else {
    die("Akses dilarang...");
}

?>
