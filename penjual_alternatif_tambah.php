<!-- <?php
        // session_start();
        //     if ($_SESSION['username'] == null || $_SESSION['password'] == null) {
        //         echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
        //         exit;
        //     }
        // include "koneksi.php";
        require "session.php";
        ?> -->
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
            <a href="index_penjual.php"><img src="assets/img/secarputih.png" alt="" width="120px" height="120px"></a>

        </div>
        <ul class="nav navbar-nav">
            <br>
            <li><a href="index_penjual.php" style="color: white;"> <b> Beranda</b></a></li>
            <li><a href="penjual_alternatif.php" style="color: white;"> <b>Jual Mobil</b></a></li>
            <li><a href="logout.php" style="color: white;"> <b>Logout</b></a></li>
        </ul>
    </div>



    <div id="page-inner" style="padding: 100px; ">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"><b>Masukkan Data Mobil</b></h1>
            </div>



            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Data Mobil
                    </div>
                    <div class="panel-body">
                        <form action="penjual_alternatif_tambah.php" method="post" name="form1">
                            <table width="25%" border="0">

                                <div class="form-group">
                                    <label>Nama Mobil</label>
                                    <input type="text" class="form-control" name="Nama" placeholder="Nama Mobil" />
                                </div>
                                <div class="form-group">
                                    <label>Kategori Kendaraan</label>
                                    <div>
                                        <select name="kategori_kendaraan" class="form-control">
                                            <option>Pilih Kategori Kendaraan</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='1' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nama_sub'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Transmisi</label>
                                    <div>
                                        <select name="Transmisi" class="form-control">
                                            <option>Pilih Transmisi</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='2' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nama_sub'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kisaran Harga Beli</label>
                                    <input type="text" class="form-control" name="Kisaran_harga_beli" placeholder="Kisaran Harga Beli" />
                                </div>
                                <div class="form-group">
                                    <label>Kapasitas Penumpang</label>
                                    <input type="text" class="form-control" name="Kapasitas_Penumpang" placeholder="Kapasitas Penumpang" />
                                </div>
                                <div class="form-group">
                                    <label>Kapasitas Bagasi</label>
                                    <div>
                                        <select name="Kapasitas_Bagasi" class="form-control">
                                            <option>Pilih Kapasitas Bagasi</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='5' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nama_sub'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Tahun Pembuatan</label>
                                    <input type="text" class="form-control" name="Tahun_Pembuatan" placeholder="Tahun Pembuatan" />
                                </div>
                                <div class="form-group">
                                    <label>Warna Mobil</label>
                                    <input type="text" class="form-control" name="Warna_Mobil" placeholder="Warna Mobil" />
                                </div>
                                <div class="form-group">
                                    <label>Kondisi Mesin</label>
                                    <div>
                                        <select name="Kondisi_Mesin" class="form-control">
                                            <option>Pilih Kondisi Mesin</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='8' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nama_sub'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Bahan Bakar</label>
                                    <div>
                                        <select name="Bahan_Bakar" class="form-control">
                                            <option>Pilih Bahan Bakar</option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='9' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data['nama_sub'] . "'>" . $data['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ukuran CC</label>
                                    <input type="text" class="form-control" name="Ukuran_CC" placeholder="Ukuran CC" />
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="text" class="form-control" name="Telepon" placeholder="Telepon" value="<?php echo $cust['Telepon'] ?>" />
                                </div>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="Submit" value="Tambah" class="btn btn-primary btn-sm"></td>
                                    <td><a href="penjual_alternatif.php" value="Batal" class="btn btn-danger btn-sm">Batal</a></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <?php

                // Check If form submitted, insert form data into users table.
                if (isset($_POST['Submit'])) {

                    $nama = $_POST['Nama'];
                    $ktg = $_POST['kategori_kendaraan'];
                    $trs = $_POST['Transmisi'];
                    $ksb = $_POST['Kisaran_harga_beli'];
                    $kp = $_POST['Kapasitas_Penumpang'];
                    $kb = $_POST['Kapasitas_Bagasi'];
                    $tp = $_POST['Tahun_Pembuatan'];
                    $wb = $_POST['Warna_Mobil'];
                    $km = $_POST['Kondisi_Mesin'];
                    $bb = $_POST['Bahan_Bakar'];
                    $uc = $_POST['Ukuran_CC'];
                    $tel = $_POST['Telepon'];

                    // include database connection file
                    include_once("koneksi.php");

                    // Insert user data into table
                    $result = mysqli_query($connect, "INSERT INTO alternatifhp(id_mobil_bekas, userid, Nama, kategori_kendaraan, Transmisi, Kisaran_harga_beli,
                            Kapasitas_Penumpang, Kapasitas_Bagasi, Tahun_Pembuatan, Warna_Mobil, Kondisi_Mesin, Bahan_Bakar, Ukuran_CC, Telepon) VALUES('','$id','$nama','$ktg','$trs',
                            '$ksb','$kp','$kb','$tp','$wb','$km','$bb','$uc','$tel')");

                    // Show message when user added
                    echo "Data added successfully. <a href='penjual_alternatif.php'>View Alternatif</a>";
                }
                ?>
                <!-- /. PAGE INNER  -->
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