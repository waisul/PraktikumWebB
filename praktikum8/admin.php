<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <a href="index.php">Logout</a>
       <table border="1">
         <thead>
           <th>Username</th>
           <th>Nama</th>
           <th>Alamat</th>
           <th>No HP</th>
           <th>Tindakan</th>
         </thead>
         <tbody>
      <?php
      include("config.php");
      $sql = "SELECT * FROM admin WHERE status!=1 ";
      $query = mysqli_query($db, $sql);
      while($data = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$data['uname']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['nohp']."</td>";

        echo "<td>";
        echo "<a href='edit.php?uname=".$data['uname']."'>Edit</a> | ";
        echo "<a href='hapus.php?uname=".$data['uname']."'>Hapus</a>";
        echo "</td>";

        echo "</tr>";
    }
      ?>
      </tbody>
   </table>
  </body>
</html>
