<?php
session_start();
require('services/connect.php');
require('constants/common.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$id_role = constant('role_user');

$sql = "INSERT INTO `users`(`name`, `email`, `password`, `id_role`) VALUES ('$name', '$email', '$password',$id_role)";

$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) == 1) {
    header('location:index.php');
} else {
    $_SESSION['error_register'] = 'Email đã được đăng kí, vui lòng thử lại !';
    header('location:register.php');
}
