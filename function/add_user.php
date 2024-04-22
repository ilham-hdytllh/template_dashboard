<?php
session_start();

include "../koneksi/koneksi.php";

if (isset($_POST["add_user_post"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];    
    $level = $_POST["level"];
    $status = $_POST["status"];
    

  $sql = mysqli_query($conn, "INSERT INTO tbl_user (username, password, level, status) VALUES ('$username', '$password', '$level', '$status')");


    if ($sql) {
        $_SESSION['status'] = 'Disimpan';
        header('Location: ../index.php');
    } else {
        $_SESSION['status'] = 'Gagal';
        header('Location: ../index.php');
    }
}