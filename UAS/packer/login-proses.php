<?php

include("db.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['login-submit'])){

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
        session_start();
        $_SESSION["uname"] = $uname;
        $_SESSION["status"] = $data['status'];
        $_SESSION["nama"] = trim($data['nama']);
        header('Location: home.php?kategori=none');
    }
    else if($data >0)
    {
      // Set session variables
      session_start();
      $_SESSION["uname"] = $uname;
      $_SESSION["status"] = $data['status'];
      $_SESSION["nama"] = trim($data['nama']);
      header('Location: home.php?kategori=none');
    }
    else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: home.php?kategori=none&Gagal_Login');
    }


} else {
    die("Akses dilarang...");
}

?>
