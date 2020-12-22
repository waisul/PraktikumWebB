<?php
$id=$_POST['id'];
$jumlah=$_POST['qty'];

include("db.php");
session_start();
$uname = $_SESSION['uname'];
$sql="UPDATE cart SET jumlah=$jumlah WHERE id_barang=$id AND uname='$uname'";
$query=mysqli_query($db,$sql);
if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: checkout.php?');
} else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
}
 ?>
