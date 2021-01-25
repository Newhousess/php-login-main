<?php

    // Initialize the session

    session_start();
    
    // Check if the user is logged in, if not then redirect him to login page
     
    if(!isset($_SESSION["email"])){
    header("location: login.php");
    exit; 
} 

  require 'database.php';

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

      <br> Welcome. <?php $_SESSION['email']; ?>
      <br>Has accedit correctament
      <a href="logout.php">
          Logout
      </a>
      <a href="post.php"><br><br>
         Post
      </a>
      <br><br>
<?php 
 if ($records = $conn->query("SELECT alias, mail, sexo, categ, comments FROM post")) {

    if ($records->num_rows > 0 ){
      // Per fer: fetch array
      while ($fila = $records ->fetch_array()) {
        echo $fila[0];
      ?>
        <br>
      <?php 
        echo $fila[1];
      ?>
        <br>
      <?php 
        echo $fila[2];
      ?>
        <br>
      <?php 
        echo $fila[3];
      ?>
        <br>
      <?php 
        echo $fila[4];
      ?>
        <br><br><br>
      <?php
      }
      $records -> free();
      } 
    }
?>
  </body>
</html>
