<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php_login_database';

  $conn = mysqli_connect($server, $username, $password, $database);
  if ($conn===false) {
  	die('Connection Failed: ' . mysqli_connect_error());
}

?>
