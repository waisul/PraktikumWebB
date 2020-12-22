<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php

        session_start();
        include("db.php");
        include("nav.php");
        $uname = $_SESSION['uname'];
        $id=$_GET['id'];
        $sql="SELECT *,cart.jumlah FROM product INNER JOIN cart ON cart.id_barang = product.id WHERE id=$id AND uname='$uname'";
        $query=mysqli_query($db,$sql);
        $data = mysqli_fetch_array($query);
        if($data>0){

        }
        else{
          $sql="SELECT * FROM product WHERE id=$id";
          $query=mysqli_query($db,$sql);
          $data = mysqli_fetch_array($query);
        }
        ?>
        <div class="wrapper">
          <div class="image">
            <img src="img/<?php echo $data['foto'] ?>" alt="">
          </div>
          <div class="description">
            <?php
            echo '<br>'.'<div class="header">'.
            $data['nama'].'</div>'.'<br>'.
            '<div class="left-bar">'."Harga ".'</div>'.": ".$data['harga_jual'].'<br>'.
            '<div class="left-bar">'."Toko  ".'</div>'.": ".$data['owner'].'<br>'.
            '<div class="left-bar">'."Deskripsi  ".'</div>'.": ".  $data['deskripsi'];

            $check=isset($data['jumlah']);
            if(isset($_SESSION['uname'])){

            }
            else{
              header('Location: home.php?kategori=none&login=0');
            }
           ?>
             <br><button onclick="document.getElementById('buy-modal').style.display='block'">Beli</button>

          </div>
        </div>

        <div id="buy-modal" class="modal">
            <div class="modal-content">
              <form action="add-cart.php" method="post">
                <button type="button" name="button" onclick="kurang()">-</button>
                <input name="qty" type="text" id="qty" value="<?php

                if($check==NULL)
                {
                  echo 0;
                }
                else{
                  echo $data['jumlah'];
                } ?>" onclick="count()" onkeypress="count()">
                <button type="button" name="button" onclick="add()">+</button>
                <?php echo $data['harga_jual']; $_SESSION['id']=$data['id']; ?>
                Subtotal:<?php
                if(isset($data['jumlah'])){
                  echo $data['harga_jual']*$data['jumlah'];
                }
                else{
                  echo 0;
                }
                ?>
                <button type="submit" name="add-to-cart" onclick="count()">Add to cart</button>
              </form>
            </div>
        </div>
  </body>
</html>
<style media="screen">
  .left-bar{
    width: 100px;
    float:left;
  }
  .header{
    font-weight: bold;
    text-transform: uppercase;
  }
  body{
    width: 100%;
    height: 100%;
    margin: 0 0;
  }
  .wrapper{
    margin: 0px 0px ;
    width: 100%;
    height: 600px;;
  }
  .image{
    width: 200px;
    height: 200px;
    float: left;
  }
  .description{
    width: auto;
    float:left;
  }
  .modal{
    display:none;
    position: fixed;
    z-index: 2;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    left: 0;top: 0;  right:0;bottom:0;
    width: 100%;
    height: 100%;
  }
  .modal-content{
    background:white;
    width: max-content;
    margin-top: 15%;
    position: absolute;
    margin: 15% 40%;
  }
  button{
    border-radius: 5px;
    background: #3de627;
    cursor: pointer;;
    width: 80px;
    float:right;
  }
</style>
<script>
  window.onclick=function(event){
    if(event.target == document.getElementById('buy-modal'))
    {
      document.getElementById('buy-modal').style.display="none";
    }
  }
  function count(){
    qty=parseInt(document.getElementById("qty").value);
  }
  function add(){
    qty=parseInt(document.getElementById("qty").value);
    qty++;
    document.getElementById("qty").value = qty;
  }
  function kurang(){
    qty=parseInt(document.getElementById("qty").value);
    if(qty>0){
      qty--;
    }
    document.getElementById("qty").value = qty;
  }
</script>
