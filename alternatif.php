<?php
// session_start();
//     if ($_SESSION['username'] == null || $_SESSION['password'] == null) {
//         echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
//         exit;
//     }
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



    <div id="page-inner" style="padding: 100px; ">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Alternatif</h1>
            </div>
        </div>
        <!--  -->
        <div class="row">
            <div class="col-md-16">
                <!--   Kitchen Sink -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tabel Alternatif
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="alternatif_tambah.php"><input type="submit" value="Tambah" class="btn btn-danger btn-sm"></a>
                        <?php
                        $id = @$_GET['id'];
                        $aksi = @$_GET['aksi'];
                        if (($aksi <> "") and ($id <> "")) {
                            mysqli_query($connect, "delete from alternatifhp where idhp='$id'") or die(mysqli_error($connect));
                            echo "<script type=text/javascript>
                                window.location.href='http://localhost/spk_mobil_bekas/alternatif.php';
                                </script>";
                        }
                        ?>
                    </div>
                    <div class="panel-body">
                        <div class="datatable table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>id mobil bekas</th>
                                        <th>Nama</th>
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
                                    include "koneksi.php";
                                    $nomor = 0;
                                    $result = mysqli_query($connect, "SELECT * FROM alternatifhp") or die(mysqli_error($connect));
                                    while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data['id_mobil_bekas']; ?></td>
                                            <td><?php echo $data['Nama']; ?></td>
                                            <td><?php echo $data['kategori_kendaraan']; ?></td>
                                            <td><?php echo $data['Transmisi']; ?></td>
                                            <td><?php echo $data['Kisaran_harga_beli']; ?></td>
                                            <td><?php echo $data['Kapasitas_Penumpang']; ?></td>
                                            <td><?php echo $data['Kapasitas_Bagasi']; ?></td>
                                            <td><?php echo $data['Tahun_Pembuatan']; ?></td>
                                            <td><?php echo $data['Warna_Mobil']; ?></td>
                                            <td><?php echo $data['Kondisi_Mesin']; ?></td>
                                            <td><?php echo $data['Bahan_Bakar']; ?></td>
                                            <td><?php echo $data['Ukuran_CC']; ?></td>
                                            <td>
                                                <a href="alternatif_edit.php?id_mobil_bekas=<?php echo $data['id_mobil_bekas']; ?>" title="Edit"><button type="button" class="btn btn-primary">Ubah</button></a>
                                            </td>
                                            <td>
                                                <a href="alternatif_uplad_foto.php?id_mobil_bekas=<?php echo $data['id_mobil_bekas']; ?>" title="Edit"><button type="button" class="btn btn-primary">Uplad Foto</button></a>
                                            </td>
                                            <td>
                                                <a href="alternatif_foto.php?id_mobil_bekas=<?php echo $data['id_mobil_bekas']; ?>" title="Edit"><button type="button" class="btn btn-primary">Lihat Foto</button></a>
                                            </td>
                                            <td>
                                                <a href="alternatif_hapus.php?id_mobil_bekas=<?php echo $data['id_mobil_bekas']; ?> "><button type="button" class="btn btn-danger">Hapus</button></a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End  Kitchen Sink -->
        </div>
        <!-- /. PAGE INNER  -->
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