<?php
session_start();
if (!isset($_SESSION['username'])) { // Jika tidak ada session username berarti diabelum login
    echo "<script type='text/javascript'>alert('Anda Harus Login Dulu');
     document.location.href = 'login.php'</script>"; // Kita Redirect ke halaman login.php
}
$email = $_SESSION['username'];
require('./koneksi.php');

function query($query)
{
    global $dbcon;
    $result = mysqli_query($dbcon, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
$cust = query("SELECT * FROM users WHERE userid= '$email'")[0];
// echo $cust["first_name"];
$id = $cust["userid"];
?>