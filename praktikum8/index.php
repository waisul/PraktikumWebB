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

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand navbar-white navbar-light border-bottom">

      <ul class="navbar-nav">
        <li class="nav-item">
          <img src="logo.png" alt="" width="70px" height="">
        </li>

        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.html" class="nav-link">Home</a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.html" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- RIGHT NAVBAR -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="false" href="#" role="button">
            <i class="fas fa-user-circle"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- SIDEBAR LOGIN -->
    <aside class="control-sidebar control-sidebar-dark">
      <div class="sidebar-login">
        <div class="side-x" data-widget="control-sidebar" data-slide="false" href="#" role="button">
          <i class="fas fa-times-circle" > </i>
        </div>
        Login / Register
        <form action="login-proses.php" method="POST">
          <input type="text" placeholder="username" name="username">
          <input type="password" placeholder="password" name="password">
          <button type="submit" value="submit" name='submit' name="button">LOGIN</button><br>
        </form>
        Belum Punya akun ?
        <a data-toggle="dropdown" href="register.php" onclick="document.getElementById('id04').style.display='block'" style="width:auto;">
        Register
        </a>
      </div>
    </aside>

  </body>
  <!-- LOGIN SIDEBAR SCRIPT -->
  <script src="jquery.min.js"></script>
  <script src="adminlte.js"></script>

</html>
