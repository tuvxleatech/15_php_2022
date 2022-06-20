<?php 
require("../../services/connect.php");
session_start();
if(isset($_POST["id"])){
    $id = $_POST["id"];
    $sql = "UPDATE `orders` SET `id_status`='2' WHERE id = $id";
    mysqli_query($connect, $sql);
    $_SESSION['success'] = "Xóa thành công";
    header('location:../../admin/order');
}
