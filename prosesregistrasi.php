<?php 
$conn = mysqli_connect("localhost", "root", "", "sawmobil");

function registrasi($data)
{
    global $conn;

    $depan = $data["nama_depan"];
    $belakang = $data["nama_belakang"];
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $telepon = $data['Telepon'];
    $level = $data["level"];



    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users (userid, nama_depan, nama_belakang, email, password, Telepon, user_level) VALUES('', '$depan', '$belakang','$email','$password','$telepon','$level')");

    return mysqli_affected_rows($conn);
}


?>