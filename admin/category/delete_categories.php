<?php
include_once('../connect.php');
session_start();

$id = $_GET['id'];
if (isset($id)) {
    $sql = "delete from categories WHERE id ='$id'";
    mysqli_query($connect, $sql);
    $_SESSION['message'] = "xoa thanh cong";
    mysqli_close($connect);
    header('location: ../category');
}

