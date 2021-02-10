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
            <a href="index_pengguna.php"><img src="assets/img/secarputih.png" alt="" width="120px" height="120px"></a>

        </div>
        <ul class="nav navbar-nav">
            <br>

            <li><a href="index_pengguna.php" style="color: white;"> <b> Beranda</b></a></li>
            <li><a href="perhitungan.php" style="color: white;"> <b>Pemilihan Mobil Bekas</b></a></li>

            <li><a href="logout.php" style="color: white;"> <b>Logout</b></a></li>
        </ul>
    </div>




    <div id="page-inner" style="padding: 100px; ">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Pemilihan Mobil Bekas</h1>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Pemilihan Mobil Bekas
                    </div>
                    <div class="panel-body">
                        <form action="perhitungan_hasil.php" method="post" name="form1">
                            <table width="25%" border="0">
                                <div class="form-group">
                                    <label>Kategori Kendaraan</label>
                                    <div>
                                        <select name="bobot_kategori_kendaraan" class="form-control">
                                            <option value="City Car">City Car</option>
                                            <option value="Sedan">Sedan</option>
                                            <option value=SUV>SUV</option>
                                            <option value=MPV>MPV</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Transmisi</label>
                                    <div>
                                        <select name="bobot_transmisi" class="form-control">
                                            <option value="1">Triptonic</option>
                                            <option value="2">Automatic</option>
                                            <option value="3">Manual</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kisaran Harga Beli</label>
                                    <div>
                                        <select name="bobot_harga_beli" class="form-control">
                                            <option value="1">
                                                < 200.000.000</option> <option value="2">201.000.000-300.000.000
                                            </option>
                                            <option value="3">301.000.000-400.000.000</option>
                                            <option value="4">>401.000.000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kapasitas Penumpang</label>
                                    <div>
                                        <select name="bobot_penumpang" class="form-control">
                                            <option value="1">11 Penumpang</option>
                                            <option value="2">2 Penumpang</option>
                                            <option value="3">4-5 Penumpang</option>
                                            <option value="4">6-7 Penumpang</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kapasitas Bagasi</label>
                                    <div>
                                        <select name="bobot_bagasi" class="form-control">
                                            <option value="1">Kecil</option>
                                            <option value="2">Sedang</option>
                                            <option value="3">Besar</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Tahun Pembuatan</label>
                                    <div>
                                        <select name="bobot_tahun" class="form-control">
                                            <option value="1">
                                                < 2000</option> <option value="2">2001-2010
                                            </option>
                                            <option value="3">2011-2019</option>
                                            <option value="4">2020</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Warna Mobil</label>
                                    <div>
                                        <select name="bobot_warna" class="form-control">
                                            <option value="1">Lainnya</option>
                                            <option value="2">Silver</option>
                                            <option value="3">Putih</option>
                                            <option value="4">Hitam</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kondisi Mesin</label>
                                    <div>
                                        <select name="bobot_mesin" class="form-control">
                                            <option value="1">Kurang Bagus</option>
                                            <option value="2">Bagus</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Bahan Bakar</label>
                                    <div>
                                        <select name="bobot_bahan_bakar" class="form-control">
                                            <option value="1">Solar</option>
                                            <option value="2">Bensin</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ukuran CC</label>
                                    <div>
                                        <select name="bobot_cc" class="form-control">
                                            <option value="1">
                                                < 1200 CC</option> <option value="2">1200-1500 CC
                                            </option>
                                            <option value="3">1501-2000 CC</option>
                                            <option value="4">> 2000 CC</option>

                                        </select>
                                    </div>
                                </div>
                                <tr>
                                    <td><input type="submit" name="simpan" value="Pilih" class="btn btn-primary btn-sm"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <!-- /. PAGE INNER  -->
                </div>
            </div>
        </div>
    </div>

    </div>
    <br>
    <br>
    <br>
    <footer>
        &copy; 2020 SECAR | By : <a href="#" target="_blank">SECAR</a>
    </footer>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>