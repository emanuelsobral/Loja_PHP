<?php
session_start();
include("connection/connection.php");

if(empty($_POST['username']) || empty($_POST['password'])) {
    header('Location: employer.php');
    exit();
}

$username = mysqli_real_escape_string($connection,$_POST['username']);
$password = mysqli_real_escape_string($connection,$_POST['password']);

$query = "select employer_id, username from employer where username = '{$username}' and password = md5('{$password}')";

$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['username'] = $username;
    header('Location: admin.php');
    exit();
} else {
    $_SESSION['unauthenticated'] = true;
    header('Location: employer.php');
    exit();
}