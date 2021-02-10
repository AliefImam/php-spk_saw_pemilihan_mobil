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
                        <h1 class="page-head-line">Tambah Kriteria</h1>
                    </div>
                </div>
                
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
                           Form Tambah Kriteria
                        </div>
                        <div class="panel-body">
                    <form action="kriteria_tambah.php" method="post" name="form1">
                        <table width="25%" border="0">
                            <div class="form-group">
                                <label>Nama Kriteria</label>
                                <input type="text" class="form-control" name="nama_kriteria" placeholder="Nama Kriteria" />
                            </div>
                            <div class="form-group">
                                <label>Attribut</label><br>
                                <div class="radio">
                                    <div class="col-md-6">
                                <input type="radio" name="attribut" value="Cost" checked />
                                Cost <br>
                                <input type="radio" name="attribut" value="Benefit" />
                                Benefit
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <br>
                                <br><label>Bobot</label>
                                <input type="text" class="form-control" name="Bobot" placeholder="Bobot" />
                            </div>
                            <!-- <tr> 
                                <td>Id</td>
                                <td><input type="text" name="id_hp"></td>
                            </tr> -->
                            <!-- <tr> 
                                <td>Merek Smartphone</td>
                                <td><input type="text" name="merk_hp"></td>
                            </tr>
                            <tr> 
                                <td>Tahun Keluaran</td>
                                <td><input type="text" name="thn_hp"></td>
                            </tr> -->
                            <tr> 
                                <td></td>
                                <td><input type="submit" name="Submit" value="Tambah" class="btn btn-primary btn-sm"></td>
                                <td><a href="kriteria.php" value="Batal" class="btn btn-danger btn-sm">Batal</a></td>
                            </tr>
                        </table>
                    </form>
    </div>
                    <?php
                 
                    // Check If form submitted, insert form data into users table.
                    if(isset($_POST['Submit'])) {
                        $name = $_POST['nama_kriteria'];
                        $att = $_POST['attribut'];
                        $bbt = $_POST['Bobot'];
                        
                        // include database connection file
                        include_once("koneksi.php");
                                
                        // Insert user data into table
                        $result = mysqli_query($connect,"INSERT INTO kriteria VALUES('','$name','$att','$bbt')") or die(mysqli_error($connect));
                        
                        // Show message when user added
                        echo "Data added successfully. <a href='kriteria.php'>View Kriteria</a>";
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