<?php

include("config.php");

if( isset($_GET['uname']) ){

    // ambil id dari query string
    $uname = $_GET['uname'];

    // buat query hapus
    $sql = "DELETE FROM admin WHERE uname='$uname'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: admin.php');
    } else {
        header('Location: index.php?status=gagal menghapus');
    }

} else {
    die("akses dilarang...");
}

?>
