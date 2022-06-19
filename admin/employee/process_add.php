<?php
session_start();
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['phone']) || empty($_POST['address']) || empty($_POST['gender'])) {
    $_SESSION['error_add'] = 'Yêu cầu nhập đủ thông tin';
    header('location:add_employee.php');
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $id_role = 1;

    require('../../services/connect.php');
    $sql = "INSERT INTO `users`(`name`, `email`, `password`, `address`, `phone`, `gender`, `image`, `id_role`)
     VALUES ('$name', '$email', '$password', '$address', '$phone', '$gender', '', '$id_role')";
    mysqli_query($connect, $sql);
    header('location:index.php');
}
