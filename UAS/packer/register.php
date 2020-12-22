<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>REGISTER</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="top-nav">
          <div class="top-nav-content">
            <a href="home.php?kategori=none" class="homelogo"><center>SANSCASH</center></a>
          </div>
          <div class="top-nav-content">
            <center><a href="home.php?kategori=none">HOME</a></center>
          </div>
      </div>
      <div class="main-content">
        <form class="register" action="reg-proses.php" method="post">
          <header>REGISTER</header>
          <div class="profil">
            <div class="left-bar">Username</div>          : <input type="text" name="reg-uname" ></input><br>
          </div>
          <div class="profil">
            <div class="left-bar">Password</div>          : <input type="password" name="reg-pass" ></input><br>
          </div>
          <div class="profil">
            <div class="left-bar">Repeat Password</div>   : <input type="password" name="reg-repass" ></input><br>
          </div>
          <div class="profil">
            <div class="left-bar">E-mail</div>            : <input type="text" name="reg-email" ></input><br>
          </div>
          <div class="profil">
            <div class="left-bar">Nama</div>              : <input type="text" name="reg-name" ></input><br>
          </div>
          <div class="profil">
            <div class="left-bar">No.Telp</div>           : <input type="number" name="reg-telp" ></input><br>
          </div>
          <div class="profil">
            <div class="left-bar">Alamat</div>            : <input type="text" name="reg-alamat" ></input><br>
          </div>
          <div class="profil">
            <div class="left-bar">Tanggal Lahir</div>     : <input type="date" name="birth-date" ></input><br>
          </div>
          <div class="profil">
            <div class="left-bar">Jenis Kelamin</div>     :
            <input type="radio" name="sex" value="1" required ><a class="white">Laki-Laki</a>
            <input type="radio" name="sex" value="2" class="white"><a class="white">Perempuan</a><br>
          </div>
          <button type="submit" name="reg-submit">REGISTER</button>
        </form>
      </div>
    </div>


  </body>
</html>
<style media="screen">
.white{
  color:white;
}
body{
  background-image:url("img/bg.jpg");
  background-size: cover;
  height: 100%;
  width: 100%;
  margin : 0 0;
}
header{
  text-align: center;
  font-weight: bold;
  text-transform: uppercase;
}
.wrapper{
  height: 100%;
  width: 100%;
}
.register{
  width: 350px;
  height: 275px;
  border-radius: 10px;
  background: black;
}
.main-content{
  padding: 10% 35%;
}
input[type="text"],input[type="date"],input[type="password"],input[type="number"]{
  width: 180px;
  padding :1px;
}

button[type="submit"]{
  float:right;
  border-radius: 7px;
  margin-top: 10px;
  width: 100%;
}

.left-bar{
  width: 150px;
  float:left;
  color: white;
}
.profil{
  margin-bottom: 2px;
}
a{
  color : white;
  cursor: pointer;
  text-decoration: none;
}
.homelogo{
  text-decoration: none;
}
.top-nav{
  background: black;
  position: fixed;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 0 .5rem;
  height: 22px;
  width: 100%;
  float: right;
  margin: 0 0;
  border-bottom: 1px solid white;
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
  border-right: 1px solid white;
}
</style>
<!-- INSERT INTO product VALUES(2,'carnation',11500,12500,1,'susu yang siap menguatkan otot kalian','2.png') -->
