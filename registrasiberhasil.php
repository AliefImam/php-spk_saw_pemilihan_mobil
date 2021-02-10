<?php 
function msg(){
    echo "<script>
    alert('User Baru Berhasil Ditambahkan!');
    </script>";
    header("Refresh: 0; URL = login.php");
}

?>