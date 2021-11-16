<?php
include('connection/connection.php');
include('check_login_employer.php');

$registerusername = $_SESSION['username'];
$barcode = rand(111111111,999999999);
$tittle = $_POST['tittle'];
$descriprion = $_POST['descriprion'];
$type = $_POST['type'];
$brand = $_POST['brand'];
$color = $_POST['color'];
$print = $_POST['print'];
$img = $_POST['img'];
$data = base64_decode($img);

$sql = "select count(*) as total from products where tittle = '$tittle'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['user_exist'] = true;
    header('Location: register.php');
    exit();
}

$sql = "INSERT INTO products (register_name, bar_code, tittle, description, type, brand, color, print, img, date_register) VALUES ('$registerusername','$barcode','$$tittle', '$descriprion', '$type', '$brand', '$color', '$print', '$data', NOW())";

if($connection->query($sql) === TRUE) {
    $_SESSION['status_register'] = true;
}

$connection->close();


exit;
?>
header('Location: register_product.php');