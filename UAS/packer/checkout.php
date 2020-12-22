
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    include("nav.php");
    include("db.php");
    $uname=$_SESSION['uname'];
    $sql="SELECT * FROM balance WHERE uname='$uname'";
    $result = mysqli_query($db,$sql);
    $data = mysqli_fetch_array($result);
    echo "Saldo Anda : ".$data['saldo'].'<br>'
    ."Hutang Anda : ".$data['hutang'] ;
    $sql="SELECT product.nama AS nama_barang ,cart.id_barang,product.owner,product.stock,product.harga_jual,admin.nama,cart.jumlah FROM cart
    INNER JOIN admin ON cart.uname=admin.uname
    INNER JOIN product ON cart.id_barang = product.id
    WHERE cart.uname='$uname'";
    $result = mysqli_query($db, $sql);
    ?>
    <table border="1px solid black">
      <thead>
        <th>Nama Barang</th>
        <th>Nama Toko</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total Harga</th>
        <th>Edit</th>
      </thead>
      <tbody>
        <?php
          $totalsub=0;
          while($row = $result->fetch_assoc()){
            if($row['jumlah']>$row['stock']){
              echo '<script>kurang();</script>';
            }
            echo '<tr>'
            .'<td>'.$row['nama_barang'].'</td>'
            .'<td>'.$row['owner'].'</td>'
            .'<td>'.$row['jumlah'].'</td>';
            $subtotal=$row['jumlah']*$row['harga_jual'];
            $totalsub=$totalsub+$subtotal;
            echo '<td>'.$row['harga_jual'].'</td>'
            . '<td>'.$subtotal.'</td>';?>
            <td>
              <a href="#" onclick="edit(<?php echo $row['id_barang']; ?>,<?php echo $row['jumlah']; ?>)">Edit</a> |
              <a href='hapus.php?id=<?php echo $row['id_barang']; ?>'>Hapus</a></td></tr>
            <?php
          }
         ?>
      </tbody>
    </table>
    <?php
      echo "Total Belanja Anda : ".$totalsub;
     ?>
    <div id="saldokurang" class="warning-modal">
      <div class="modal-content">
        <center>Ingin Dimasukan kedalam hutang ?</center>  <br>

        <center>
          <form action="bayar.php" method="POST">
            <input type="hidden" name="totalsub" value="<?php echo $totalsub; ?>">
            <button type="submit" name="oke" >OK</button>
            <button type="button" name="cancel" onclick="document.getElementById('saldokurang').style.display='none'">CANCEL</button>
          </form>
        </center>
      </div>
    </div>

    <div id="bayar" class="warning-modal">
      <div class="modal-content">
        <center>Ingin Membayar ?</center><br>

        <center>
          <form action="bayar.php" method="POST">
            <input type="hidden" name="totalsub" value="<?php echo $totalsub; ?>">
            <button type="submit" name="oke" >OK</button>
            <button type="button" name="cancel" onclick="document.getElementById('bayar').style.display='none'">CANCEL</button>
          </form>
        </center>
      </div>
    </div>

    <div id="edit" class="warning-modal">
      <div class="modal-content">
        EDIT <br>
        <form action="edit.php" method="post">
          <button type="button" name="button" onclick="kurang()">-</button>
          <input name="id" type="hidden"  id="id" value="">
          <input name="qty" type="text" id="qty" value="" onclick="count()" onkeypress="count()">
          <button type="button" name="button" onclick="add()">+</button>
          <center><button type="submit" name="button">OK</button></center>
        </form>
      </div>
    </div>

    <script type="text/javascript" >

      function id(){
        var aidi=document.getElementById('id').value;
        console.log(aidi);
      }
      function kurang(){
        document.getElementById('item-kurang').style.display="block";
      }
      function edit(a,b){
          var id=a;
          var jumlah=b;
          console.log(jumlah);
          console.log(id);
          document.getElementById('qty').value=jumlah;
          document.getElementById('id').value=id;
          document.getElementById('edit').style.display="block";
      }

      function saldokurang(){
          console.log('saldokurang');
          document.getElementById('saldokurang').style.display="block";
      }
      function saldoada(){
          console.log('saldo ada');
          document.getElementById('bayar').style.display="block";
      }
    </script>
    <button type="submit" name="button" onclick="<?php if($data['saldo']<$totalsub){echo 'saldokurang()';}else{echo'saldoada()';} ?>">Bayar</button>
    </body>
</html>

<style media="screen">
  .modal-content{
    background: white;
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
    padding-top: 20%;
    padding-bottom: 20%;
  }
  body{
    margin: 0 0;
    
  }
</style>
