<?php
include "koneksi.php";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pendukung Keputusan SAW</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>

    <div class="container-fluid" style="background-color:  #F3672B;">
        <div class="navbar-header" style="background-color:  #F3672B;">
            <a href="#"><img src="assets/img/secarputih.png" alt="" width="120px" height="120px"></a>

        </div>
        <ul class="nav navbar-nav">
            <br>
            <li><a href="alternatif.php" style="color: white;"> <b>Alternatif</b></a></li>
            <li><a href="kriteria.php" style="color: white;"> <b>Kriteria</b></a></li>
            <li><a href="subkriteria.php" style="color: white;"> <b>Sub Kriteria</b></a></li>
            <li><a href="normalisasi.php" style="color: white;"> <b>Pembobotan</b></a></li>
            <li><a href="logout.php" style="color: white;"> <b>Logout</b></a></li>
        </ul>
    </div>



    <div id="page-inner" style="padding: 70px; ">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Ubah SubKriteria</h1>
            </div>
        </div>
        <?php
        $id_sub = $_GET['id_sub'];
        $result = mysqli_query($connect, "SELECT * FROM subkriteria WHERE id_sub='$id_sub'") or die(mysqli_error($connect));
        $dataku = mysqli_fetch_array($result);
        ?>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Form Ubah SubKriteria
                </div>
                <div class="panel-body">
                    <form action="subkriteria_edit.php?id_sub=<?php echo $id_sub?>" method="post" name="form1">
                        <table width="25%" border="0">
                            <div class="form-group">
                                <label>Nama Kriteria</label>
                                <select name="id_kriteria" placeholder="Pilih Kriteria..." class="form-control">
                                    <option value='' selected>Pilih Kriteria...</option>
                                    <?php
                                    $query = "SELECT * FROM kriteria ORDER BY id_kriteria asc";
                                    $hasil = mysqli_query($connect, $query);
                                    while ($data = mysqli_fetch_array($hasil)) {
                                        if ($dataku['id_kriteria'] == $data['id_kriteria']) {
                                            echo "<option value='$data[id_kriteria]' selected='$dataku[id_kriteria]'>" . $data['Kriteria'] . "</option>";
                                        } else {
                                            echo "<option value='$data[id_kriteria]'>" . $data['Kriteria'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Sub Kriteria</label>
                                <input type="text" class="form-control" name="nama_sub" value="<?php echo $dataku['nama_sub']; ?>" placeholder="Nama SubKriteria" />
                            </div>
                            <div class="form-group">
                                <label>Nilai</label>
                                <select name="nilai" class="form-control">
                                    <option>Pilih Nilai...</option>
                                    <?php
                                    $query = "SELECT DISTINCT nilai FROM subkriteria ORDER BY nilai asc";
                                    $hasil = mysqli_query($connect, $query);
                                    while ($data = mysqli_fetch_array($hasil)) {
                                        if ($dataku['nilai'] == $data['nilai']) {
                                            echo "<option value='$data[nilai]' selected='$dataku[nilai]'>" . $data['nilai'] . "</option>";
                                        } else {
                                            echo "<option value='$data[nilai]'>" . $data['nilai'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Bobot</label>
                                <select name="keterangan" class="form-control">
                                    <option>Pilih Bobot...</option>
                                    <?php
                                    $query = "SELECT DISTINCT keterangan FROM subkriteria ORDER BY keterangan asc";
                                    $hasil = mysqli_query($connect, $query);
                                    while ($data = mysqli_fetch_array($hasil)) {
                                        if ($dataku['keterangan'] == $data['keterangan']) {
                                            echo "<option value='$data[keterangan]' selected='$dataku[keterangan]'>" . $data['keterangan'] . "</option>";
                                        } else {
                                            echo "<option value='$data[keterangan]'>" . $data['keterangan'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <tr>
                                <td></td>
                                <td><input type="submit" name="update" value="Ubah" class="btn btn-primary btn-sm"></td>
                                <td><a href="subkriteria.php" value="Batal" class="btn btn-danger btn-sm">Batal</a></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <?php

                // Check If form submitted, insert form data into users table.
                if (isset($_POST['update'])) {
                    $id_sub = $_GET['id_sub'];
                    $id = $_POST['id_kriteria'];
                    $ket = $_POST['nama_sub'];
                    $nilai = $_POST['nilai'];
                    $bobot = $_POST['keterangan'];

                    // include database connection file
                    include_once("koneksi.php");

                    // Insert user data into table
                    $result = mysqli_query($connect, "UPDATE subkriteria SET id_kriteria='$id', nama_sub='$ket', nilai='$nilai', keterangan='$bobot' WHERE id_sub='$id_sub'") or die(mysqli_error($connect));

                    // Show message when user added
                    echo "<script type=text/javascript>
                        
                                window.location.href='http://localhost/spksaw_mobil/subkriteria.php';
                                </script>";
                }
                ?>
                <!-- /. PAGE INNER  -->
            </div>
        </div>
    </div>

    </div>
    <footer>
        &copy; 2020 SECAR | By : <a href="#" target="_blank">SECAR</a>
    </footer>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>