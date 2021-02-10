<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
session_destroy();
$msg = "Berhasil Logout";
echo "<script type='text/javascript'>alert('$msg');
     document.location.href = 'index.php'</script>";
