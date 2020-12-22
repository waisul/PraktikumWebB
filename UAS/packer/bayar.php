<?php
include("db.php");
session_start();
$totalsub=$_POST['totalsub'];
echo $totalsub;
$uname=$_SESSION['uname'];
$sql="SELECT * FROM balance WHERE uname='$uname'";
$query=mysqli_query($db,$sql);
$data = mysqli_fetch_array($query);
$saldo=$data['saldo'];
$hutang=$data['hutang'];
if($saldo>=$totalsub){
  $saldo=$saldo-$totalsub;
}
else{
  $totalsub=$totalsub-$saldo;
  $saldo=0;
  $hutang=$hutang+$totalsub;
}
// KURANGI UANG
$sql="UPDATE balance SET saldo=$saldo,hutang=$hutang WHERE uname='$uname'";
$query=mysqli_query($db,$sql);

// KURANGI STOCK
$sql="SELECT cart.uname,product.id,product.nama,product.stock,cart.jumlah FROM product INNER JOIN cart ON product.id = cart.id_barang WHERE uname='$uname'";
$result=mysqli_query($db,$sql);
while($row = $result->fetch_assoc())
{
  $id=$row['id'];
  $jumlah=$row['jumlah'];
  $esquel="INSERT INTO history_buy VALUES('$uname',$id,$jumlah)";
  $query=mysqli_query($db,$esquel);
  $stock=$row['stock'];
  $qty=$row['jumlah'];
  $stock=$stock-$qty;
  $esquel="UPDATE product SET stock=$stock WHERE id=$id ";
  $query=mysqli_query($db,$esquel);
  $esquel="DELETE FROM cart WHERE uname='$uname' AND id_barang=$id";
  $query=mysqli_query($db,$esquel);
}

header('Location: checkout.php?');
 ?>
