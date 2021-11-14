<?php
session_start();
include("connection/connection.php");

if(empty($_POST['username']) || empty($_POST['password'])) {
    header('Location: /index.php');
    exit();
}

$username = mysqli_real_escape_string($connection,$_POST['username']);
$password = mysqli_real_escape_string($connection,$_POST['password']);

$query = "select user_id, username from user where username = '{$username}' and password = md5('{$password}')";

$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['username'] = $username;
    header('Location: index.php');
    exit();
} else {
    $_SESSION['unauthenticated'] = true;
    header('Location: login.php');
    exit();
}