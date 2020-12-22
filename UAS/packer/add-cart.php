<?php
session_start();
echo $_SESSION['id'];
echo $_POST['qty'];
echo $_SESSION['uname'];
$uname=$_SESSION['uname'];
$id=$_SESSION['id'];
$qty=$_POST['qty'];
include("db.php");
if(isset($_POST['add-to-cart']))
{
$sql="SELECT * FROM CART WHERE id_barang=$id AND uname='$uname'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);
if($data>0){
  $qty = $qty + $data['jumlah'];
  $sql="UPDATE cart SET jumlah=$qty WHERE id_barang=$id AND uname='$uname'";
}
else{
  $sql="INSERT INTO cart VALUES('$uname',$id,$qty)";
}
  $query=mysqli_query($db,$sql);
if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: home.php?kategori=none');
} else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    header('Location: home.php?kategori=none');
}


} else {
die("Akses dilarang...");
}
 ?>
