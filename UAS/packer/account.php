<?php
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <button type="button" onclick="parent.location='index.php'">BACK</button><br>
    <?php
        $uname=$_SESSION['uname'];
        $sql = "SELECT * FROM admin INNER JOIN JK ON admin.gender=jk.id WHERE uname='$uname'" ;
        $result = $db->query($sql);
        $data = $result->fetch_assoc();
          ?>
          <div class="profil">
            <div class="left-bar">Nama</div>          :<input type="text" value="<?php echo $data['nama']; ?>"></input><br>
          </div>

          <div class="profil">
            <div class="left-bar">Alamat</div>        :<input type="text" value="<?php echo $data['alamat']; ?>"></input><br>
          </div>

          <div class="profil">
            <div class="left-bar">Email</div>         :<input type="text" value="<?php echo $data['email']; ?>"></input><br>
          </div>

          <div class="profil">
            <div class="left-bar">No HP</div>         :<input type="text" value="<?php echo $data['nohp']; ?>"></input><br>
          </div>

          <div class="profil">
            <div class="left-bar">Tanggal Lahir</div> :<input type="date" value="<?php echo $data['birthdate']; ?>"></input><br>
          </div>

          <div class="profil">
            <div class="left-bar">Jenis kelamin</div> :<input type="text" value="<?php echo $data['gender']; ?>"></input>
          </div>
          <div class="">
              <button type="submit" name="button">Edit</button>
          </div>
          <?php
    if($data['nama_toko']==''&&$data['status']!=3){?>
      <a onclick="document.getElementById('buat-toko').style.display='block'">buat toko</a>
    <?php }?>
    <div id='buat-toko' class="buat-toko">
      <form action="buat-toko.php" method="post">
        <label>Nama Toko :</label><input type="text" name="nama_toko" placeholder="Nama Toko">
        <input type="submit" name="buat-toko-submit" placeholder="Test">
      </form>
    </div>
  </body>
</html>
<style media="screen">
  input{
    width: 150px;
    padding :1px;
  }
  a{
    cursor:pointer;
  }
  .buat-toko{
    display:none;
  }
  .left-bar{
    width: 100px;
    float:left;
  }
  .profil{
    margin-bottom: 2px;
  }
</style>
