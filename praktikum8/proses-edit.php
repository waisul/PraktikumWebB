<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $uname = $_POST['uname'];
    $psw =$_POST['psw'];
    $repass =$_POST['repass'];
    $email = $_POST['email'];
    $phone =$_POST['phone'];
    $alamat =$_POST['alamat'];
    $nama =$_POST['nama'];
    // echo $nama.$uname.$psw.$alamat.$email.$phone;
    // buat query update
    $sql = "UPDATE admin SET uname='$uname', pass='$psw', nama='$nama', alamat='$alamat', email='$email' ,nohp='$phone' WHERE uname='$uname'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: admin.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
