<?php
include("../../services/connect.php");
session_start();
$id = trim($_POST['id']);
$sql = "DELETE FROM products WHERE id = '$id'";
try {
    $rs = mysqli_query($connect, $sql);
    $_SESSION['success'] = "Delete success";
    header("location:index.php");
} catch (Exception $e) {
    $_SESSION['erorr_delete_product'] = "Sản phẩm đã ở trong đơn hàng không thể xóa";
    header("location:index.php");
}
