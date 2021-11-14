<?php
define('HOST', '127.0.0.1');
define('USERNAME', 'root');
define('PASSWORD', 'Niver01022000#' /*Insert your password*/);
define('DB', 'login');

$connection = mysqli_connect(HOST, USERNAME, PASSWORD, DB) or die('Não foi possivel completar a conexão');
