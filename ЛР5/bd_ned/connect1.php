<?php
$host = 'localhost';
$database = 'a0611718_root';
$user = 'a0611718_root';
$password = 'root';
//require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database)
or die("ошибка" . mysqli_error($link));
?>
