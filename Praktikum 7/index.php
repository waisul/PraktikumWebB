<!DOCTYPE HTML>
<html>
    <head>
        <title>Praktikum 7</title>
        <link rel="stylesheet" href="assets/nilai.css">
    </head>
    <body>
        <fieldset class="background">
            <div class="form-style">
                <form action="fungsi.php" method="post">
                    <fieldset>
                        <legend>Data Mahasiswa</legend>
                        <table>
                            <tr>
                                <td><label for="">Nama</label></td>
                                <td><input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"><br></td>
                            </tr>
                            <tr>
                                <td><label for="">NIM</label></td>
                                <td><input type="text" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>"></td>
                            </tr>
                        </table>
                    </fieldset>
                    <fieldset>
                        <legend>Nilai Mahasiswa</legend>
                        <table>
                            <tr>
                                <td><label for="">Tugas</label></td>
                                <td><input type="text" name="tugas" value="<?=isset($_POST['tugas']) ? $_POST['tugas'] : ''?>"></td>
                            </tr>
                            <tr>
                                <td><label for="">UTS</label></td>
                                <td> <input type="text" name="uts" value="<?=isset($_POST['uts']) ? $_POST['uts'] : ''?>"></td>
                            </tr>
                            <tr>
                                <td><label for="">UAS</label></td>
                                <td><input type="text" name="uas" value="<?=isset($_POST['uas']) ? $_POST['uas'] : ''?>"></td>
                            </tr>
                        </table>
                    </fieldset>
                    <div class="hitung">
                        <input type="submit" name="submit" value="Submit"/> 
                    </div>
                </form>
            </div>
        </fieldset>
    </body>
</html>