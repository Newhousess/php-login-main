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
    if ($records = $conn->query("SELECT id, email, password FROM users WHERE email = '$email' and password = '$password'")) {

    $message = '';

    if ($records->num_rows > 0 ){
      $_SESSION['email'] = $email;
      header("Location: index.php");
      exit;
    } else {
      $message = 'El usuari o la contrasenya no son correctes.';
    }
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
