<?php
require("../../services/connect.php");
session_start();
if(isset($_POST['id'])){
    $id = $_POST['id'];
$name = $_POST['name'];
$sdt = $_POST['phone'];
$address = $_POST['address'];

$sql = "UPDATE `manufacturers` SET `name`='$name',`phone`='$sdt',`address`='$address' WHERE id = $id";
mysqli_query($connect, $sql);
$_SESSION['success'] = "Thành công";
}
