<?php

include("config.php");

if( isset($_GET['uname']) ){

    // ambil id dari query string
    $uname = $_GET['uname'];
    $sql = "SELECT * FROM admin WHERE uname='$uname'" ;
    // buat query hapus
    $query = mysqli_query($db, $sql);
    $data =mysqli_fetch_array($query);

} else {
    die("akses dilarang...");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Praktikum 8 PBW </title>
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adminlte.css">
    <link rel="stylesheet" href="coba.css">
  </head>
  <body>
<div>
  <form class="modal-content animate-modal" action="proses-edit.php" method="POST">

    <div class="container-modal">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Username" name="uname" value="<?php echo $data['uname'] ?>" required><br>

      <label for="nama"><b>Nama</b></label>
      <input type="text" placeholder="Nama" name="nama" value="<?php echo $data['nama'] ?>" required><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Password" name="psw" value="<?php echo $data['pass'] ?>" required>

      <label for="repass"><b>Re-peat password</b></label>
      <input type="password" placeholder="Password" name="repass" value="<?php echo $data['pass'] ?>" required><br>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Email" name="email" value="<?php echo $data['email'] ?>" required>

      <label for="phone"><b>No.HP</b></label>
      <input type="text" placeholder="No.HP" name="phone" value="<?php echo $data['nohp'] ?>" required><br>

      <label for="alamat"><b>Alamat</b></label>
      <input type="text" placeholder="Alamat" name="alamat" value="<?php echo $data['alamat'] ?>" required>

      <button type="button" onclick="index.php" class="btn regbtn">Exit</button>
      <button type="submit" value="edit" name='edit' class="btn btn-primary regbtn regbtn-color-blue" >EDIT</button>
    </div>
  </form>
</div>
</body>
