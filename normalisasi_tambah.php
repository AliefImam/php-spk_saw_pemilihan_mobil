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
            <a href="#"><img  src="assets/img/secarputih.png" alt="" width="120px" height="120px"></a> 

            </div>
            <ul class="nav navbar-nav">
                <br>
                <li><a href="alternatif.php" style="color: white;"> <b>Alternatif</b></a></li>
                <li><a href="kriteria.php" style="color: white;"> <b>Kriteria</b></a></li>
                <li><a href="subkriteria.php" style="color: white;"> <b>Sub Kriteria</b></a></li>
                <li><a href="normalisasi.php" style="color: white;"> <b>Pembobotan</b></a></li>
                <li><a href="logout.php"  style="color: white;"> <b>Logout</b></a></li>
            </ul>
        </div>
   

        <div id="page-inner"  style="padding: 70px; ">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Tambah Pembobotan</h1>
                </div>
           

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Tambah Pembobotan
                    </div>
                    <div class="panel-body">
                        <form action="normalisasi_tambah.php" method="post" name="form1">
                            <table width="25%" border="0">
                                <div class="form-group">
                                    <label>Merek Mobil (*masukkan id Mobil)</label>
                                    <div>
                                        <input type="text" name="idmobil" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Pilih Kategori Kendaraan</label>
                                    <div>
                                        <select name="kategori" class="form-control">
                                            <option>Pilih Kategori Kendaraan</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='1' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Transmisi</label>
                                    <div>
                                        <select name="transmisi" class="form-control">
                                            <option>Pilih Transmisi</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='2' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kisaran Harga Beli</label>
                                    <div>
                                        <select name="harga" class="form-control">
                                            <option>Pilih Kisaran Harga Beli</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='3' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kapasitas Penumpang</label>
                                    <div>
                                        <select name="penumpang" class="form-control">
                                            <option>Pilih Kapasitas Penumpang</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='4' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kapasitas Bagasi</label>
                                    <div>
                                        <select name="bagasi" class="form-control">
                                            <option>Pilih Kapasitas Bagasi</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='5' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Tahun Pembuatan</label>
                                    <div>
                                        <select name="tahun" class="form-control">
                                            <option>Pilih Tahun Pembuatan</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='6' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Warna Mobil</label>
                                    <div>
                                        <select name="warna" class="form-control">
                                            <option>Pilih Warna Mobil</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='7' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kondisi Mesin</label>
                                    <div>
                                        <select name="kondisi" class="form-control">
                                            <option>Pilih Kondisi Mesin</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='8' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Bahan Bakar</label>
                                    <div>
                                        <select name="bahan" class="form-control">
                                            <option>Pilih Bahan Bakar</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='9' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ukuran CC</label>
                                    <div>
                                        <select name="cc" class="form-control">
                                            <option>Pilih Ukuran CC</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='10' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nilai'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <tr>
                                    <td><input type="submit" name="Submit" value="Tambah" class="btn btn-primary btn-sm"></td>
                                    <td><input type="button" name="kembali" value="Kembali" onclick="javascript:history.back()" class="btn btn-danger btn-sm"></td>
                                </tr>
                            </table>
                        </form>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                var ac_config = {
                                    source: "alternatif_cari.php",
                                    select: function(event, ui) {
                                        $("#merk_hp").val(ui.item.merk_hp);
                                        $("#idhp").val(ui.item.idhp);
                                    },
                                    minLength: 1
                                };
                                $("#merk_hp").autocomplete(ac_config);
                            });
                        </script>
                    </div>
                    
                    <?php

                    // Check If form submitted, insert form data into users table.
                    if (isset($_POST['Submit'])) {
                        $id = $_POST['idmobil'];
                        $kategori = $_POST['kategori'];
                        $transmisi = $_POST['transmisi'];
                        $harga = $_POST['harga'];
                        $penumpang = $_POST['penumpang'];
                        $bagasi = $_POST['bagasi'];
                        $tahun = $_POST['tahun'];
                        $warna = $_POST['warna'];
                        $kondisi = $_POST['kondisi'];
                        $bahan = $_POST['bahan'];
                        $cc = $_POST['cc'];

                        // include database connection file
                        include_once("koneksi.php");

                        // Insert user data into table
                        $result = mysqli_query($connect, "INSERT INTO normal VALUES('','$id','$kategori','$transmisi','$harga','$penumpang','$bagasi','$tahun','$warna','$kondisi','$bahan','$cc')") or die(mysqli_error($connect));

                        // Show message when user added
                        echo "<script>
    alert('Data Add successfully');
    window.location.href='http://localhost/spksaw_mobil/normalisasi.php';
    </script>";
                    }
                    ?>
                    <!-- /. PAGE INNER  -->
                </div>
            </div>
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