<?php

  session_start();

  if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
  }
  require 'database.php';

  if (!empty($_POST['alias']) && !empty($_POST['mail']) && !empty($_POST['sexo']) && !empty($_POST['categ']) && !empty($_POST['comments'])) {
  		$alias = $_POST['alias'];
  		$mail = $_POST['mail'];
    	$sexo = $_POST['sexo'];
    	$categ = $_POST['categ'];
    	$comments = $_POST['comments'];
    	$records = $conn->query("INSERT INTO post (alias, mail, sexo, categ, comments) VALUES ('$alias', '$mail', '$sexo', '$categ', '$comments')");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
</head>
<body>
	<form action="post.php" method="POST">
		<label for="alias">Alias:</label>
		<input name="alias" type="text" placeholder="Enter your alias" required><br>
	    <br> <label for="mail">Email (opcional):</label>
	    <input name="mail" type="text" placeholder="Enter your email" required><br>
	    <br><label for="sexo">Sexo:</label>
	  		<select name="sexo" id="sex">
	    		<option value="Hombre">Hombre</option>
	   			<option value="Mujer">Mujer</option>
	    		<option value="Helicoptero de combate">Helicoptero de combate</option>
	  		</select><br>
	  	<br><label for="categ">Categorias:</label>
	  		<select name="categ" id="categ">
	    		<option value="Amistad">Amistad</option>
	   			<option value="Amor">Amor</option>
	    		<option value="Dinero">Dinero</option>
	    		<option value="Estudios">Estudios</option>
	  		</select><br>
	    <br><textarea id="comments" name="comments" rows="4" cols="50" placeholder="Enter your comments" required></textarea><br>
	    <br><input type="submit" value="Submit">
	</form>
	<a href="index.php"><br><br>
         Volver a Index
      </a>
</body>
</html>
