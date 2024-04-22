<?php

session_start();

include("../koneksi/koneksi.php");

$username = $_POST["username"];
$password = $_POST["password"];

$data = mysqli_query($conn, "select * from tbl_user where username='$username' and password='$password'");

$cek_data = mysqli_num_rows($data);


if($cek_data != 0){    
    $user = mysqli_fetch_assoc($data);
    $_SESSION['username'] = $username;
    $_SESSION['level'] = $user['level'];  // Simpan level ke session
    $_SESSION['status'] = "login";
    header("Location: ../page/index.php");   
}else{
    header("Location: ../login.php");
}

?>;