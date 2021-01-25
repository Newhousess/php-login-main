<?php

  session_start();

  if (isset($_SESSION['email'])) {
    header('Location: /php-login');
    exit;
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $records = $conn->query("INSERT INTO users (email, password) VALUES ('$email', '$password')");
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php if(!empty($message)): ?>
      <p> <?php $message ?></p>
    <?php endif; ?>

    <h1>Sign Up</h1>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email" required>
      <input name="password" type="password" placeholder="Enter your Password" required>
      <input type="submit" value="Submit">
    </form>
    <a href="login.php">
        Login
      </a>
  </body>
</html>



