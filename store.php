<?php
session_start();
include('check_login.php');
?>

<h1> <?php echo $_SESSION['username'];?> </h1>
<h1><a href="logout.php">Sair</a></h1>