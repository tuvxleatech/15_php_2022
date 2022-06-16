<?php
session_start();
require('../../services/connect.php');
require('../../constants/common.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$id_role = constant('role_user');

$sql = "INSERT INTO `users`(`name`, `email`, `password`, `id_role`) VALUES ('$name', '$email', '$password',$id_role)";

$rv = mysqli_query($connect, $sql);

if ($rv == false) {
    header('location:register.php');
    $_SESSION['error_register'] = 'Email đã được đăng kí, vui lòng thử lại !';
} else {
    header('location:index.php');
}
