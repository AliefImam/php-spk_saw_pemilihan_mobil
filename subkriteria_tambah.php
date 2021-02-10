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
                        <h1 class="page-head-line">Tambah SubKriteria</h1>
                    </div>
                </div>
                
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
                           Form Tambah SubKriteria
                        </div>
                        <div class="panel-body">
                    <form action="subkriteria_tambah.php" method="post" name="form1">
                        <table width="25%" border="0">
                            <div class="form-group">
                                <label>Nama Kriteria</label>
                                <select name="id_kriteria" placeholder="Pilih Kriteria..." class="form-control">
                                    <option>Pilih Kriteria...</option>
                                    
                                    <?php
                                    $query = "SELECT * FROM kriteria ORDER BY id_kriteria asc";
                                    $hasil = mysqli_query($connect,$query);
                                    while ($data = mysqli_fetch_array($hasil)){
                                        echo "<option value='".$data['id_kriteria']."'>".$data['Kriteria']."</option>";
                                    }
                                    ?>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="nama_sub" placeholder="Nama SubKriteria" />
                            </div>
                            <div class="form-group">
                                <label>Nilai</label>
                                <select name="nilai" class="form-control">
                                    <option>Pilih Nilai...</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>75</option>
                                    <option>100</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label>Bobot</label>
                                <select name="keterangan" class="form-control">
                                    <option>Pilih Bobot...</option>
                                    <option>Kurang</option>
                                    <option>Cukup</option>
                                    <option>Baik</option>
                                    <option>Sangat Baik</option>
                                </select>
                            </div>
                            
                            <tr> 
                                <td></td>
                                <td><input type="submit" name="Submit" value="Tambah" class="btn btn-primary btn-sm"></td>
                                <td><a href="subkriteria.php" value="Batal" class="btn btn-danger btn-sm">Batal</a></td>
                            </tr>
                        </table>
                    </form>
    </div>
                    <?php
                 
                    // Check If form submitted, insert form data into users table.
                    if(isset($_POST['Submit'])) {
                        $id = $_POST['id_kriteria'];
                        $ket = $_POST['nama_sub'];
                        $nilai = $_POST['nilai'];
                        $bobot = $_POST['keterangan'];

                        // include database connection file
                        include_once("koneksi.php");
                                
                        // Insert user data into table
                        $result = mysqli_query($connect,"INSERT INTO subkriteria VALUES('','$id','$ket','$nilai','$bobot')") or die(mysqli_error($connect));
                        
                        // Show message when user added
                        echo "Data added successfully. <a href='subkriteria.php'>View Kriteria</a>";
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