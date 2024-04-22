<?php
session_start();

include "../koneksi/koneksi.php";

$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM tbl_user WHERE id = '$id'");

if ($sql) {
    $_SESSION['status'] = 'Disimpan';
    header('location: ../index.php');
} else {
    $_SESSION['status'] = 'Gagal';
    header('Location:  ../index.php');
}