<!DOCTYPE HTML>
<html>
    <head>
        <title>Praktikum 7</title>
        <link rel="stylesheet" href="assets/nilai.css">
    </head>
    <body>
        <fieldset>          
            <?php
                if (isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $nim = $_POST['nim'];
                    $tugas = $_POST['tugas'];
                    $uts = $_POST['uts'];
                    $uas = $_POST['uas'];

                    $akhir = round((($tugas+$uts+$uas)/3),2);
            ?>
            
                <h1>Nilai Akhir Mahaiswa</h1>
                <div class="box-tampil">
                    <div class="identitas">
                            <table>
                                <tr>
                                    <td>Nama </td>
                                    <td>=</td>
                                    <td><?php echo $nama ?></td>
                                </tr>
                                <tr>
                                    <td>NIM </td>
                                    <td>=</td>
                                    <td><?php echo $nim ?></td>
                                </tr>
                            </table>
                          
                    </div>
                    <div class="nilai">
                        <table>
                            <tr>
                                <td>Nilai Tugas Anda</td>
                                <td>=</td>
                                <td><?php echo $tugas ?></td>
                            </tr>
                            <tr>
                                <td>Nilai UTS Anda</td>
                                <td>=</td>
                                <td><?php echo $uts ?></td>
                            </tr>
                            <tr>
                                <td>Nilai UAS Anda</td>
                                <td>=</td>
                                <td><?php echo $uas ?></td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                    </div>
                    <div class="akhir">
                        <table>
                            <tr>
                                <td>
                                    <?php echo "Nilai Akhir Anda"; ?>
                                </td>
                                
                                <td>
                                    <?php echo "="; ?>
                                </td>

                                <td>
                                    <?php echo $akhir ?>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="3" rowspan="1">
                                    <h3>
                                        <?php
                                            if($akhir >= 80){
                                                echo "Anda DInyatakan Lulus Dengan Predikat A";
                                            }
                                            elseif($akhir >= 70){
                                                echo "Anda Dinyatakan Lulus Dengan Predikat B";
                                            }
                                            elseif($akhir >= 60){
                                                echo "Anda Dinyatakan Lulus Dengan Predikat C";
                                            }
                                            else{
                                                echo "Maaf Anda Dinyatakan Tidak Lulus";
                                            }
                                        ?>
                                    </h3>
                                </td>  
                            </tr>
                        </table>
                    </div>
                </div>
            <?php
                }
            ?>

        </fieldset>
    </body>
</html>