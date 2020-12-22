<?php
  $id=$_POST['id'];
  $nama=$_POST['nama'];
  $hargapokok=$_POST['harga_pokok'];
  $hargajual=$_POST['harga_jual'];
  $kategori=$_POST['kategori'];
  $deskripsi=$_POST['deskripsi'];
  include("db.php");
  $sql="UPDATE product SET nama='$nama',harga_pokok=$hargapokok,harga_jual=$hargajual,category_id=$kategori,deskripsi='$deskripsi' WHERE id=$id ";
  $query=mysqli_query($db,$sql);
  header("location:toko.php");
 ?>
