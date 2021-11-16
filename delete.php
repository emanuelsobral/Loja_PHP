<?php
include('connection/connection.php');
$_POST['deleteItem'];

if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem']))
{
  $delete = $_POST['deleteItem'];
  $sql = "DELETE FROM products WHERE product_id = '$delete';"; 
  $result = mysqli_query($connection, $sql);
  header('Location: admin.php');
}
?> 