<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Toko Anda</title>

  </head>
  <body>
    <?php
      session_start();
      include("db.php");
      if(isset($_GET['id'])){
        $id=$_GET['id'];
      }
     ?>
    <div id="edit" class="warning-modal">
      <div class="modal-content">
        <center>EDIT</center> <br>
        <form action="edit-toko.php" method="post">
          <input name="id" type="hidden"  id="id" value="<?php echo $id; ?>">
          <?php
            $sql="SELECT * FROM product WHERE id=$id";
            $query=mysqli_query($db,$sql);
            $data = mysqli_fetch_array($query);
            ?>
            <div class="profil">
              <div class="left-bar">Nama</div>     : <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
            </div>
            <div class="profil">
              <div class="left-bar">Harga Pokok</div>     : <input type="text" name="harga_pokok" value="<?php echo $data['harga_pokok']; ?>"><br>
            </div>
            <div class="profil">
              <div class="left-bar">Harga Jual</div>     : <input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>"><br>
            </div>
            <div class="profil">
              <div class="left-bar">Kategori</div>     :
              <input type="radio" name="kategori" value="2" checked="<?php echo $data['category_id']; ?>" required>Makanan
              <input type="radio" name="kategori" value="1" checked="<?php echo $data['category_id']; ?>">Minuman<br>
            </div>
            <div class="profil">
              <div class="left-bar">Deskripsi</div>
              <textarea name="deskripsi" rows="8" cols="60"><?php echo $data['deskripsi']; ?></textarea>
            </div>




          <center><button type="submit" name="button">OK</button></center>
        </form>
      </div>
    </div>

    <script type="text/javascript">
    function show(){
      document.getElementById('edit').style.display="block";
    }
    </script>
    <button type="button" onclick="location='index.php'">BACK</button>
    <table border="1px solid black">
      <thead>
        <th>Foto</th>
        <th>Nama Barang</th>
        <th>Harga Pokok</th>
        <th>Harga Jual</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Edit</th>
      </thead>
    <?php
      $sql="SELECT product.*,category.category FROM product INNER JOIN category ON product.category_id=category.category_id WHERE owner='tokosaya'";
      $result=mysqli_query($db,$sql);
      echo '<tbody>';
      while($row = $result->fetch_assoc())
      {
        echo'<tr>'.
        '<td>';?><img src="img/<?php echo $row['foto']; ?>">
          <?php echo '</td>'.
        '<td>'.$row['nama'].'</td>'.
        '<td>'.$row['harga_pokok'].'</td>'.
        '<td>'.$row['harga_jual'].'</td>'.
        '<td>'.$row['category'].'</td>'.
        '<td>'.$row['deskripsi'].'</td>';
        ?> <td>
          <a href="#" onclick="edit(<?php echo $row['id']; ?>)">Edit</a>
          <?php
      }?>
      </tbody>
    </table>
    <?php
      if(isset($_GET['id'])){
        echo '<script>console.log("TEST")</script>';
        echo '<script>show()</script>';
      }
     ?>
    </body>
</html>
<style media="screen">

button{
  border-radius: 5px;
  width: 100px;
  font-family: sans-serif;
  background: #22a4cf;
  border: white 3px solid;
  color : white;
  border: 0 ;
  cursor: pointer;
  padding: 5px 20px;
  margin-top: 10px;
}
.left-bar{
  width: 150px;
  float:left;
}
.profil{
  margin-bottom: 5px;
}
.modal-content{
  background: black;
  color: white;
  padding: 10px 10px;
}
.warning-modal{
  display: none; /* Hidden by default */
  position: fixed;
  z-index: 2; /* Sit on top */
  left: 0;top: 0;  right:0;bottom:0;
  width: 60%; /* Full width */
  height: 40%; /* Full height */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-left:20%;
  padding-right:20%;
  padding-top: 10%;
  padding-bottom: 20%;
}
</style>

<script type="text/javascript">

  function edit(a){
    var id=a;
    console.log(id);
    document.getElementById('id').value=id;
    document.getElementById('edit').style.display="block";
    var link='http://localhost/packer/toko.php?id='+id;
    console.log(link);
    window.location=link;
  }
  window.onclick = function(event)
  {
    var modal = document.getElementById('edit');
    if(event.target == modal){
      modal.style.display="none";
    }
  }
</script>
