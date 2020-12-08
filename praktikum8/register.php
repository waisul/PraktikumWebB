<?php include("config.php"); ?>
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
  <form class="modal-content animate-modal" action="regis-proses.php" method="POST">

    <div class="container-modal">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Username" name="uname" required><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Password" name="psw" required>

      <label for="repass"><b>Re-peat password</b></label>
      <input type="password" placeholder="Password" name="repass" required><br>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Email" name="email" required>

      <label for="phone"><b>No.HP</b></label>
      <input type="text" placeholder="No.HP" name="phone" required><br>

      <label for="alamat"><b>Alamat</b></label>
      <input type="text" placeholder="Alamat" name="alamat" required>

      <button type="button" onclick="index.php" class="btn regbtn">Cancel</button>
      <button type="submit" value="submit" name='submit' class="btn btn-primary regbtn regbtn-color-blue" >Register</button>
    </div>
  </form>
</div>
</body>
