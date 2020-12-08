<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $uname = $_POST['username'];
    $psw =$_POST['password'];
    // buat query
    $sql = "SELECT * FROM admin WHERE uname='$uname' AND pass='$psw'" ;
    $query = mysqli_query($db, $sql);
    $data = mysqli_fetch_array($query);
    // apakah query simpan berhasil?
    if( $data['status']==1 ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: admin.php?status=sukses');
    }
    else if($data >0)
    {
      header('Location: index.php?status=sukses');
    }
    else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
