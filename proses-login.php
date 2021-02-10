<?php
ob_start();
session_start();

$conn = mysqli_connect("localhost", "root", "", "sawmobil");
if (isset($_POST["login"])) {
    $email = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (
        isset($_POST['login']) && !empty($_POST['username'])
        && !empty($_POST['password'])
    ) {

        // check username
        if (mysqli_num_rows($result) === 1) {
            //check password
            $row = mysqli_fetch_assoc($result);
            $userid = $row["userid"];
            if (password_verify($password, $row["password"])) {
                $msg = "Login Berhasil, Selamat Datang " . $row["nama_depan"];
                echo "<script type='text/javascript'>alert('$msg');</script>";
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = $row["userid"];
                if ($row["user_level"] == 0) {
                    header("Refresh: 0; URL = alternatif.php");
                }
                if ($row["user_level"] == 1) {
                    header('Refresh: 0; URL = perhitungan.php');
                }
                if ($row["user_level"] == 2) {
                    header('Refresh: 0; URL = penjual_alternatif.php');
                };
                exit;
            } else {
                $msg = "Username/Password Salah";
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
        }

        $error = true;
    }
}
