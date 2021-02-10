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
                        <h1 class="page-head-line">Ubah Kriteria</h1>
                    </div>
                </div>
                
                   <?php
                   
                    // Check If form submitted, insert form data into users table.
                    if(isset($_POST['update'])) {
                        $id = $_POST['id_kriteria'];
                        $name = $_POST['Kriteria'];
                        $att = $_POST['attribut'];
                        $bbt = $_POST['Bobot'];
                        
                        // include database connection file
                        include_once("koneksi.php");
                                
                        // Insert user data into table
                        $result = mysqli_query($connect,"UPDATE kriteria SET Kriteria='$name', attribut='$att', Bobot='$bbt' WHERE id_kriteria=$id");
                        
                        // Show message when user added
                        echo "<script type=text/javascript>
                                window.location.href='http://localhost/spksaw_mobil/kriteria.php';
                                </script>";
                    }?>
                    
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
                           Form Ubah Kriteria
                        </div>
                        <div class="panel-body">
                            <?php
                    $id_kriteria = $_GET['id_kriteria'];
                    $result = mysqli_query($connect,"SELECT * FROM kriteria WHERE id_kriteria='$id_kriteria'") or die (mysqli_error($connect));
 
                        $data = mysqli_fetch_array($result);
                                            ?>
                    <form action="kriteria_edit.php" method="post" name="form1">
                        <table width="25%" border="0">
                            
                            <div class="form-group">
                                
                                <input type="hidden" class="form-control" name="id_kriteria" value="<?php echo $data['id_kriteria'];?>" placeholder="Id" />
                            </div>
                            <div class="form-group">
                                <label>Nama Kriteria</label>
                                <input type="text" class="form-control" name="Kriteria" value="<?php echo $data['Kriteria'];?>" placeholder="Nama Kriteria" />
                            </div>
                            <div class="form-group">
                                <label>Attribut</label><br>
                                <div class="radio">
                                    <div class="col-md-6">
                                <input type="radio" name="attribut" value="Cost" <?php if ($data["attribut"]=="Cost"){?> checked="checked" <?php } ?> />
                                Cost <br>
                                <input type="radio" name="attribut" value="Benefit" <?php if ($data["attribut"]==="Benefit"){ ?> checked="checked" <?php } ?> />
                                Benefit <br>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <br>
                                <br><label>Bobot</label>
                                <input type="text" class="form-control" name="Bobot" value="<?php echo $data['Bobot'];?>" placeholder="Bobot" />
                            </div>

                            <tr> 
                                <td></td>
                                <td><input type="submit" name="update" value="Ubah" class="btn btn-primary btn-sm"></td>
                                <td><a href="kriteria.php" value="Batal" class="btn btn-danger btn-sm">Batal</a></td>
                            </tr>
                        </table>
                    </form>
    </div>
                    
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