<?php
session_start();
include('connection/connection.php');
include('check_login_employer.php');

$name = mysqli_real_escape_string($connection,trim($_POST['name']));
$username = mysqli_real_escape_string($connection,trim($_POST['username']));
$password = mysqli_real_escape_string($connection,trim(md5($_POST['password'])));

$sql = "select count(*) as total from employer where username = '$username'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['user_exist'] = true;
    header('Location: register.php');
    exit();
}

$sql = "INSERT INTO employer (name, username, password, date_register) values ('$name','$username','$password',NOW())";

if($connection->query($sql) === TRUE) {
    $_SESSION['status_register'] = true;
}

$connection->close();

header('Location: register.php');
exit;
?>