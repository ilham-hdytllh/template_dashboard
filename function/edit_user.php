<?php
session_start();

include "../koneksi/koneksi.php";

if (isset($_POST["edit_user_post"])) {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $level = $_POST["level"];
    $status = $_POST["status"];

    $sql = mysqli_query($conn, "UPDATE tbl_user SET  username = '$username', level = '$level',status = '$status' WHERE id = '$id'");

    if ($sql) {
        $_SESSION['status'] = 'Diubah';
        header('Location: ../index.php');
    } else {
        $_SESSION['status'] = 'Gagal';
        header('Location: ../index.php');
    }
}