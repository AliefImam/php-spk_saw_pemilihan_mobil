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
            <a href="index_penjual.php"><img src="assets/img/secarputih.png" alt="" width="120px" height="120px"></a>

        </div>
        <ul class="nav navbar-nav">
            <br>
            <li><a href="index_penjual.php" style="color: white;"> <b> Beranda</b></a></li>
            <li><a href="penjual_alternatif.php" style="color: white;"> <b>Jual Mobil</b></a></li>
            <li><a href="logout.php" style="color: white;"> <b>Logout</b></a></li>
        </ul>
    </div>
    </nav>


    <div id="page-inner" style="padding: 100px; ">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Ubah Data Mobil</h1>
            </div>

            <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Form Tambah Alternatif
                        </div>
                        <div class="panel-body">
                       <form action="alternatif_tambah.php" method="post" name="form1">
                        <fieldset>
                        <div class="form-group">
                        <label for="">Id</label>
                        <input type="text" class="form-control" name="id_hp" placeholder="Id" />
                      </div>
                      <div class="form-group">
                        <label for="">Merek Smartphone</label>
                        <input type="text" class="form-control" name="merk_hp" placeholder="Merek Smartphone" />
                      </div>
                      <div class="form-group">
                        <label for="">Tahun Keluaran</label>
                        <input type="text" class="form-control" name="thn_hp" placeholder="Tahun Keluaran" />
                      </div>
            </fieldset>
                      <input type="submit" name="input" value="Submit" class="btn btn-primary btn-sm">
                      
                               
                           </form>
                            </div>
                            </div>
                            
                    </div> -->
            <?php

            // Check If form submitted, insert form data into users table.
            if (isset($_POST['update'])) {
                $idm = $_POST['id_mobil_bekas'];
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
                $result = mysqli_query($connect, "UPDATE alternatifhp SET Nama='$nama', kategori_kendaraan='$ktg', Transmisi='$trs', 
                        Kisaran_harga_beli='$ksb', Kapasitas_Penumpang='$kp', Kapasitas_Bagasi='$kb', Tahun_Pembuatan='$tp',
                        Warna_Mobil='$wb', Kondisi_mesin='$km', Bahan_Bakar='$bb', Ukuran_CC='$uc', Telepon='$tel' WHERE id_mobil_bekas=$idm");

                // Show message when user added
                echo "<script type=text/javascript>
                                window.location.href='http://localhost/spksaw_mobil/penjual_alternatif.php';
                                </script>";
            } ?>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Ubah Data Mobil
                    </div>
                    <div class="panel-body">
                        <?php
                        $result = mysqli_query($connect, "SELECT * FROM alternatifhp WHERE id_mobil_bekas='$_GET[id_mobil_bekas]'") or die(mysqli_error($connect));
                        $data = mysqli_fetch_array($result);
                        ?>
                        <form action="penjual_alternatif_edit.php" method="post" name="form1">
                            <table width="25%" border="0">

                                <div class="form-group">
                                    <label>Id Mobil</label>
                                    <input readonly type="text" class="form-control" name="id_mobil_bekas" value="<?php echo $data['id_mobil_bekas']; ?>" placeholder="Id" />
                                </div>
                                <div class="form-group">
                                    <label>Nama Mobil</label>
                                    <input type="text" class="form-control" name="Nama" value="<?php echo $data['Nama']; ?>" placeholder="Nama Mobil" />
                                </div>
                                <div class="form-group">
                                    <label>Kategori Kendaraan</label>
                                    <div>
                                        <select name="kategori_kendaraan" class="form-control">
                                            <option value="<?php echo $data['kategori_kendaraan']; ?>"><?php echo $data['kategori_kendaraan'] ?></option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='1' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data1 = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data1['nama_sub'] . "'>" . $data1['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Transmisi</label>
                                    <div>
                                        <select name="Transmisi" class="form-control">
                                            <option value="<?php echo $data['Transmisi']; ?>"><?php echo $data['Transmisi'] ?></option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='2' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data1 = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data1['nama_sub'] . "'>" . $data1['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kisaran Harga Beli</label>
                                    <input type="text" class="form-control" name="Kisaran_harga_beli" value="<?php echo $data['Kisaran_harga_beli']; ?>" placeholder="Kisaran Harga Beli" />
                                </div>
                                <div class="form-group">
                                    <label>Kapasitas Penumpang</label>
                                    <input type="text" class="form-control" name="Kapasitas_Penumpang" value="<?php echo $data['Kapasitas_Penumpang']; ?>" placeholder="Kapasitas Penumpang" />
                                </div>
                                <div class="form-group">
                                    <label>Kapasitas Bagasi</label>
                                    <div>
                                        <select name="Kapasitas_Bagasi" class="form-control">
                                            <option value="<?php echo $data['Kapasitas_Bagasi']; ?>"><?php echo $data['Kapasitas_Bagasi']; ?></option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='5' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data1 = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data1['nama_sub'] . "'>" . $data1['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Tahun Pembuatan</label>
                                    <input type="text" class="form-control" name="Tahun_Pembuatan" value="<?php echo $data['Tahun_Pembuatan']; ?>" placeholder="Tahun Pembuatan" />
                                </div>
                                <div class="form-group">
                                    <label>Warna Mobil</label>
                                    <input type="text" class="form-control" name="Warna_Mobil" value="<?php echo $data['Warna_Mobil']; ?>" placeholder="Warna Mobil" />
                                </div>
                                <div class="form-group">
                                    <label>Kondisi Mesin</label>
                                    <div>
                                        <select name="Kondisi_Mesin" class="form-control">
                                            <option value="<?php echo $data['Kondisi_Mesin']; ?>"><?php echo $data['Kondisi_Mesin'] ?></option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='8' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data1 = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data1['nama_sub'] . "'>" . $data1['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Bahan Bakar</label>
                                    <div>
                                        <select name="Bahan_Bakar" class="form-control">
                                            <option value="<?php echo $data['Bahan_Bakar']; ?>"><?php echo $data['Bahan_Bakar'] ?></option>
                                            <?php
                                            $query = "SELECT * FROM subkriteria WHERE id_kriteria='9' ORDER BY id_sub asc";
                                            $hasil = mysqli_query($connect, $query);
                                            while ($data1 = mysqli_fetch_array($hasil)) {
                                                echo "<option value='" . $data1['nama_sub'] . "'>" . $data1['nama_sub'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ukuran CC</label>
                                    <input type="text" class="form-control" name="Ukuran_CC" value="<?php echo $data['Ukuran_CC']; ?>" placeholder="Ukuran CC" />
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="text" class="form-control" name="Telepon"  placeholder="Telepon" value="<?php echo $data['Telepon']?>"/>
                                </div>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="update" value="Ubah" class="btn btn-primary btn-sm"></td>
                                    <td><a href="penjual_alternatif.php" value="Batal" class="btn btn-danger btn-sm">Batal</a></td>
                                </tr>
                            </table>
                        </form>
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