<?php

    // Initialize the session

    session_start();
    
    // Check if the user is logged in, if not then redirect him to login page
     
    if(!isset($_SESSION["email"])){
    header("location: login.php");
    exit; 
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

      <br> Welcome. <?= $_SESSION['email']; ?>
      <br>Has accedit correctament
      <a href="logout.php">
        Logout
      </a>
  </body>
</html>
