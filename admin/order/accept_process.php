<?php
require("../../services/connect.php");
session_start();
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "UPDATE `orders` SET `id_status`='1' WHERE id = $id";
    mysqli_query($connect,$sql);
    $_SESSION['success'] = "Duyệt đơn thành công";
    header('location:../../admin/order');
}

?>