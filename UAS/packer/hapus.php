<?php
include("db.php");
$id=$_GET['id'];
$sql = "DELETE FROM cart WHERE id_barang=$id";
$query = mysqli_query($db,$sql);
header('location:checkout.php')
 ?>
