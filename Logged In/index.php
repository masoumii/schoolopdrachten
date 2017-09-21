<?php
session_start();

 if(isset($_SESSION['gebruikersnaam'])){
 	header ( 'Location: login.php' );
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log in op Wonder Les</title>
</head>
<body>
<form method="POST" action="login.php">
	Gebruikersnaam: <input type="text" name="gebruikersnaam">
	Wachtwoord: <input type="password" name="wachtwoord">
	<input type="submit" value="inloggen" name="inloggen">
</form>
</body>
</html>