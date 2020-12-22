<link rel="stylesheet" href="fontawesome/css/all.min.css">

<div id="user-log" class="user-log ">
  <?php echo "Hi ".$_SESSION['nama']."!".'<br>';
    if($_SESSION['status']==2){
    ?><a href="toko.php" class="modal-login-text">Kelola Toko</a><br><?php
  }
  ?>
  <a href="account.php" class="modal-login-text">Lihat Profil</a><br>
  <a href="logout-proses.php" class="modal-login-text">Logout</a>
</div>

<div class="top-nav">
    <div class="top-nav-content">
      <a href="home.php?kategori=none" class="homelogo"><center>TOKOKU</center></a>
    </div>
    <div class="top-nav-content">
      <center><a href="home.php?kategori=none">HOME</a></center>
    </div>
    <?php
      if(isset($_SESSION['uname'])){
        ?>
        <div class="top-nav-right login-show">
          <a class="fas fa-shopping-cart" onclick="parent.location='checkout.php'"></a>
          |
          <a id="user-icon" class="far fa-user-circle" onclick="document.getElementById('user-log').style.display='block'"></a>
        </div>
        <?php
      }
      else{
        ?>
        <div id="Login-Linker" class="top-nav-right login-show">
          <a onclick="document.getElementById('id02').style.display='block'"><center>LOGIN / REGISTER</center></a>
        </div>
        <?php
      }
     ?>
</div>
<style media="screen">
a{
  color: black;
  cursor: pointer;
  text-decoration: none;
}
.homelogo{
  text-decoration: none;
}
.modal-login-text{
  text-decoration: none;
}
.top-nav{
  position: relative;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 0 .5rem;
  height: 22px;
  width: 100%;
  background: white;
  float: right;
}
.top-nav-right{
  float:right;
  font-size: auto;
  width: auto;
  height: 100%;
  text-align: right;
  vertical-align:middle;
}
.top-nav-content{
  font-size: auto;
  margin: 0px 0px;
  width: 15%;
  height: 100%;
  float: left;
  border-right: 1px solid black;
}
.user-log{
  display: none;
  position: absolute;
  z-index: 2;
  background-color: white;
  margin-top: 22px;
  height: auto;
  text-align: center;
  width: 10%;
  right: 0;
  top: 0;
}
</style>
