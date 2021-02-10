<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sawmobil";
$dbcon = new mysqli($host, $user, $pass, $db);
$connect = mysqli_connect($host,$user,$pass) or die("Gagal Connect ke Database");
$db= mysqli_select_db($connect,$db) or die("Database Tidak Ada");
?>