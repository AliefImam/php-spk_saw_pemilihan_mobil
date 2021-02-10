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
    

       
            <div id="page-inner" style="padding: 70px; ">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Kriteria</h1>
                    </div>
                </div>
                
            
            <!-- /. PAGE INNER  -->
            <div class="row">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Kriteria
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="kriteria_tambah.php"><input type="submit" value="Tambah" class="btn btn-danger btn-sm"></a>
                        <?php
                        $id = @$_GET['id_kriteria'];
                        $aksi = @$_GET['aksi'];
                        if(($aksi<>"") and ($id<>"")){
                             mysqli_query($connect,"delete from kriteria where id_kriteria='$id'") or die (mysqli_error($connect));
                             echo "<script type=text/javascript>
                                window.location.href='http://localhost/spk_mobil_bekas/kriteria.php';
                                </script>" ;
                        }
                        ?>
                        </div>
                        <div class="panel-body">
                            <div class="datatable table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kriteria</th>
                                            <th>Attribut Kriteria</th>
                                            <th>Bobot</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "koneksi.php";
                                        $nomor = 0;
                                        $result = mysqli_query($connect,"SELECT * FROM kriteria") or die (mysqli_error($connect));
                                        while ($data = mysqli_fetch_array($result)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor=$nomor+1; ?></td>
                                                <td><?php echo $data['Kriteria']; ?></td>
                                                <td><?php echo $data['attribut']; ?></td>
                                                <td><?php echo $data['Bobot']; ?></td>
                                                <td>
                                                    <a href="kriteria_edit.php?id_kriteria=<?php echo $data['id_kriteria']; ?>" title="Edit"><button type="button" class="btn btn-primary">Ubah</button></a>
                                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data?');" 
                        href="kriteria_hapus.php?id_kriteria=<?php echo $data['id_kriteria']; ?> " 
                        title="Delete"><button type="button" class="btn btn-danger">Hapus</button></a>
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