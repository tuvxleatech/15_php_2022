<?php
    include("../../services/connect.php");
    session_start();
    $id = $_POST['id'];
    $sql ="DELETE FROM products WHERE id = '$id'";
    $rs = mysqli_query($connect,$sql);
    if($rs){
        $_SESSION['success'] = "Delete success";
        header("location: ../../admin/product");
    }
