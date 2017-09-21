<?php
session_start();

// Mock database gegevens voor inloggen
$gb = "open";
$pw = "sesame";
$gebruikersnaam = "";
$wachtwoord = "";

// Als er op inloggen geklikt is
if ( isset($_POST['inloggen'])){
	// variabelen ontvangen uit formulier en assignen
	$gebruikersnaam = $_POST['gebruikersnaam'];
	$wachtwoord = $_POST['wachtwoord'];
}

	// kijkt of ingevulde gegevens overeenkomen met onze mock database gegevens
	if($gebruikersnaam === $gb && $wachtwoord === $pw){
		$_SESSION['gebruikersnaam'] = $gebruikersnaam;
	}


	if(!isset($_SESSION['gebruikersnaam'])){
		header ( 'Location: index.php' );
	}

echo "Je bent ingelogd</br>";
echo "<a href='uitloggen.php'>Uitloggen</a>";



?>