<?php
require('../../services/connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM `manufacturers` WHERE id = $id";
mysqli_query($connect, $sql);
header("location:manufacturer");
