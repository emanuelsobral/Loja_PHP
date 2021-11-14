<?php

include('connection/connection.php');

if (empty($_POST['search'])) {
	header("Location: index.php");
	exit;
}

$search = $_POST['search'];

$result_search = "SELECT * FROM products WHERE brand LIKE '%$search%'";
$result = mysqli_query($connection, $result_search);

while($rows_search = mysqli_fetch_array($result)){
    echo 'resultado: '.$rows_search['brand']. '<br>';
};
