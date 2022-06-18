<?php
    include("../../connect.php");
    $id = $_POST['id'];
    $sql ="DELETE FROM products WHERE id = '$id'";
    $rs = mysqli_query($connect,$sql);
    if($rs){
        echo '<script>alert("Xóa thành công!");
        location.href = "http://localhost/15_php_2022-main/admin/product/index.php";
        </script>';
    }
?>