<?php
include "koneksi.php";
$bobot_kategori_kendaraan = $_POST['bobot_kategori_kendaraan'];
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
                <h1 class="page-head-line"> Hasil Pemilihan Mobil Bekas</h1>
            </div>
        </div>
        <div class="col-md-16">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div>
                        <tr>
                            <th></th>
                            <th>Bobot </th>
                        </tr>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="datatable table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mobil</th>
                                    <th>Kategori Kendaraan</th>
                                    <th>Transmisi</th>
                                    <th>Kisaran Harga Beli</th>
                                    <th>Kapasitas Penumpang</th>
                                    <th>Kapasitas Bagasi</th>
                                    <th>Tahun Pembuatan</th>
                                    <th>Warna Mobil</th>
                                    <th>Kondisi Mesin</th>
                                    <th>Bahan Bakar</th>
                                    <th>Ukuran CC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 0;
                                $hasil = mysqli_query($connect, "select * from normal, alternatifhp where normal.id_mobil_bekas=alternatifhp.id_mobil_bekas");
                                while ($data = mysqli_fetch_array($hasil)) {
                                ?>
                                    <tr>
                                        <td><?php echo $nomor = $nomor + 1; ?></td>
                                        <td><?php echo $data['Nama']; ?></td>
                                        <td><?php echo $data['kategori_kendaraan2']; ?></td>
                                        <td><?php echo $data['Transmisi2']; ?></td>
                                        <td><?php echo $data['Kisaran_harga_beli2']; ?></td>
                                        <td><?php echo $data['Kapasitas_Penumpang2']; ?></td>
                                        <td><?php echo $data['Kapasitas_Bagasi2']; ?></td>
                                        <td><?php echo $data['Tahun_Pembuatan2']; ?></td>
                                        <td><?php echo $data['Warna_Mobil2']; ?></td>
                                        <td><?php echo $data['Kondisi_Mesin2']; ?></td>
                                        <td><?php echo $data['Bahan_Bakar2']; ?></td>
                                        <td><?php echo $data['Ukuran_CC2']; ?></td>
                                    </tr>
                                <?php }    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
            #Cari nilai maximal
            $carimax = mysqli_query($connect, "SELECT max(kategori_kendaraan2) as max1,
								max(Transmisi2) as max2,
								max(Kisaran_harga_beli2) as max3,
								max(Kapasitas_Penumpang2) as max4,
								max(Kapasitas_Bagasi2) as max5,
                                max(Tahun_Pembuatan2) as max6,
                                max(Warna_Mobil2) as max7,
                                max(Kondisi_Mesin2) as max8,
                                max(Bahan_Bakar2) as max9,
                                max(Ukuran_CC2) as max10
								FROM normal");
            $max = mysqli_fetch_array($carimax);
            # Cari nilai minimal
            $carimin = mysqli_query($connect, "SELECT min(kategori_kendaraan2) as min1,
								min(Transmisi2) as min2,
								min(Kisaran_harga_beli2) as min3,
								min(Kapasitas_Penumpang2) as min4,
								min(Kapasitas_Bagasi2) as min5,
                                min(Tahun_Pembuatan2) as min6,
                                min(Warna_Mobil2) as min7,
                                min(Kondisi_Mesin2) as min8,
                                min(Bahan_Bakar2) as min9,
                                min(Ukuran_CC2) as min10
								FROM normal");
            $min = mysqli_fetch_array($carimin);
            ?>
            <!-- /. PAGE INNER  -->
            <div class="col-md-16">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            Normalisasi Data
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="datatable table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Mobil</th>
                                        <th>Kategori Kendaraan</th>
                                        <th>Transmisi</th>
                                        <th>Kisaran Harga Beli</th>
                                        <th>Kapasitas Penumpang</th>
                                        <th>Kapasitas Bagasi</th>
                                        <th>Tahun Pembuatan</th>
                                        <th>Warna Mobil</th>
                                        <th>Kondisi Mesin</th>
                                        <th>Bahan Bakar</th>
                                        <th>Ukuran CC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 0;
                                    $hasil = mysqli_query($connect, "select * from normal JOIN alternatifhp ON normal.id_mobil_bekas=alternatifhp.id_mobil_bekas where kategori_kendaraan='$bobot_kategori_kendaraan' limit 5");
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $nomor = $nomor + 1; ?></td>
                                            <td><?php echo $data['Nama']; ?></td>
                                            <td><?php echo round($data['kategori_kendaraan2'] / $max['max1'], 2); ?></td>
                                            <td><?php echo round($data['Transmisi2'] / $max['max2'], 2); ?></td>
                                            <td><?php echo round($min['min3'] / $data['Kisaran_harga_beli2'], 2); ?></td>
                                            <td><?php echo round($data['Kapasitas_Penumpang2'] / $max['max4'], 2); ?></td>
                                            <td><?php echo round($data['Kapasitas_Bagasi2'] / $max['max5'], 2); ?></td>
                                            <td><?php echo round($data['Tahun_Pembuatan2'] / $max['max6'], 2); ?></td>
                                            <td><?php echo round($data['Warna_Mobil2'] / $max['max7'], 2); ?></td>
                                            <td><?php echo round($data['Kondisi_Mesin2'] / $max['max8'], 2); ?></td>
                                            <td><?php echo round($data['Bahan_Bakar2'] / $max['max9'], 2); ?></td>
                                            <td><?php echo round($data['Ukuran_CC2'] / $max['max10'], 2); ?></td>
                                        </tr>
                                    <?php }    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
                
                $bobot_transmisi = $_POST['bobot_transmisi'];
                $bobot_harga_beli = $_POST['bobot_harga_beli'];
                $bobot_penumpang = $_POST['bobot_penumpang'];
                $bobot_bagasi = $_POST['bobot_bagasi'];
                $bobot_tahun = $_POST['bobot_tahun'];
                $bobot_warna = $_POST['bobot_warna'];
                $bobot_mesin = $_POST['bobot_mesin'];
                $bobot_bahan_bakar = $_POST['bobot_bahan_bakar'];
                $bobt_cc = $_POST['bobot_cc'];
                ?>
                <div class="col-md-16">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div>
                                Perangkingan Data
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="datatable table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="rangking">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mobil</th>
                                            <th>Kategori Kendaraan</th>
                                            <th>Transmisi</th>
                                            <th>Kisaran Harga Beli</th>
                                            <th>Kapasitas Penumpang</th>
                                            <th>Kapasitas Bagasi</th>
                                            <th>Tahun Pembuatan</th>
                                            <th>Warna Mobil</th>
                                            <th>Kondisi Mesin</th>
                                            <th>Bahan Bakar</th>
                                            <th>Ukuran CC</th>
                                            <th>Telepon</th>
                                            <th>Hasil Perangkingan Mobil Bekas</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 0;
                                        $hasil = mysqli_query($connect, "select alternatifhp.Nama,
                                        alternatifhp.kategori_kendaraan,
                                        alternatifhp.Transmisi,
                                        alternatifhp.Kisaran_harga_beli,
                                        alternatifhp.Kapasitas_Penumpang,
                                        alternatifhp.Kapasitas_Bagasi,
                                        alternatifhp.Tahun_Pembuatan,
                                        alternatifhp.Warna_Mobil,
                                        alternatifhp.Kondisi_Mesin,
                                        alternatifhp.Bahan_Bakar,
                                        alternatifhp.Ukuran_CC,
                                        alternatifhp.Telepon,
                                        round(
                                            ((normal.Transmisi2 / $max[max2]) * $bobot_transmisi) +
                                            (($min[min3] / normal.Kisaran_harga_beli2) * $bobot_harga_beli) +
                                            ((normal.Kapasitas_Penumpang2 / $max[max4]) * $bobot_penumpang) +
                                            ((normal.Kapasitas_Bagasi2 / $max[max5]) * $bobot_bagasi) +
                                            ((normal.Tahun_Pembuatan2 / $max[max6]) * $bobot_tahun) +
                                            ((normal.Warna_Mobil2 / $max[max7]) * $bobot_warna) +
                                            ((normal.Kondisi_Mesin2 / $max[max8]) * $bobot_mesin) +
                                            ((normal.Bahan_Bakar2 / $max[max9]) *  $bobot_bahan_bakar) +
                                            ((normal.Ukuran_CC2 / $max[max10]) * $bobt_cc)
                                            ,2) as ranks
                                    FROM normal JOIN alternatifhp ON normal.id_mobil_bekas=alternatifhp.id_mobil_bekas where kategori_kendaraan='$bobot_kategori_kendaraan' ORDER BY ranks DESC limit 5");
                                        while ($data = mysqli_fetch_array($hasil)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor = $nomor + 1; ?></td>
                                                <td><?php echo $data['Nama']; ?></td>
                                                <td><?php echo $data['kategori_kendaraan'] ?></td>
                                                <td><?php echo $data['Transmisi'] ?></td>
                                                <td><?php echo $data['Kisaran_harga_beli'] ?></td>
                                                <td><?php echo $data['Kapasitas_Penumpang'] ?></td>
                                                <td><?php echo $data['Kapasitas_Bagasi'] ?></td>
                                                <td><?php echo $data['Tahun_Pembuatan'] ?></td>
                                                <td><?php echo $data['Warna_Mobil'] ?></td>
                                                <td><?php echo $data['Kondisi_Mesin'] ?></td>
                                                <td><?php echo $data['Bahan_Bakar'] ?></td>
                                                <td><?php echo $data['Ukuran_CC'] ?></td>
                                                <td><?php echo $data['Telepon'] ?></td>
                                                <td><?php echo $data['ranks'] ?></td>
                                                <td><a href="pembeli_alternatif_foto.php?id_mobil_bekas=<?php echo $data['id_mobil_bekas']; ?>"><button type="button" class="btn btn-primary">Lihat Foto</button></a></td>
                                            </tr>
                                        <?php }    ?>
                                    </tbody>
                                </table>
                            </div>
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
    <script src="assets/js/jquery.tablesorter.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            $("#rangking").tablesorter();
        });
    </script>
</body>

</html>