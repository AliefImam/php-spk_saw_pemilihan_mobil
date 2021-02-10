<?php
require 'proses-login.php';

?>

<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sistem Pendukung Keputusan SAW</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
</head>


<nav class="navbar sticky-top navbar-light" style="background-color: #F3672B;">
<a href="index.php"><img  src="assets/img/secarputih.png" alt="" width="120px" height="120px"></a>    

</nav>

<body class="my-login-page" style="background-image: url(assets/img/loginregis.jpg); background-size: 100% 100%; background-attachment:fixed; overflow-y: hidden;">





    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper" style="margin-top: 100px;">

                    <div class="card fat" style="width: 400px; height:350px; background-color:#80000000; border:none; ">
                        <div class="card-body">
                            <h1 class="card-title text-center text-white">Login</h1>
                            <form method="POST" class="my-login-validation" novalidate="" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                <div class="form-group text-white">
                                    <label for="username">Email</label>
                                    <input id="username" style="background-color:#80000000; border-color:#F3672B;" type="email" class="form-control text-white" name="username" value="">
                                    <div class="invalid-feedback ">
                                        Email Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="form-group text-white">
                                    <label for="password">Password
                                    </label>
                                    <input id="password" type="password" style="background-color:#80000000; border-color:#F3672B; color:white;" class="form-control" name="password" required data-eye>
                                    <div class="invalid-feedback">
                                        Password Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-outline-secondary btn-block text-white" name="login" data-toggle="modal" data-target="#exampleModal">
                                        Login
                                    </button>
                                </div>
                                <label class="form-check-label text-white" for="exampleCheck1">Belum Punya Akun? <a href="register.php" style="color:#F3672B; " title="Register">Registrasi</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my-login.js"></script>
</body>

</html>