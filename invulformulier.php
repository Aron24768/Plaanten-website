<?php
if ( isset($_GET["naam"]) && isset($_GET["gebruikersnaam"]) && isset($_GET["wachtwoord"]) && isset($_GET["wachtwoord_herhaald"]) && isset($_GET["email"]) ) {
	$opgestuurde_naam = $_GET["naam"];
	$opgestuurde_gebruikersnaam = $_GET["gebruikersnaam"];
	$opgestuurde_wachtwoord = $_GET["wachtwoord"];
	$opgestuurde_wachtwoord_herhaald = $_GET["wachtwoord_herhaald"];
	$opgestuurde_email = $_GET["email"];

	$bericht = "leuk dat je je registreert. Helaas werkt het nog niet op dit moment, maar dit is wat je opgestuurd hebt: Naam = $opgestuurde_naam, gebruikersnaam = $opgestuurde_gebruikersnaam";
} else {
	$bericht = "hoe heet je?"; }
    ?> 

<h2> Opgestuurde gegevens </h2>


 <h2>Registreren</h2>
<form action="" method="GET">
<p>Hallo, <?=$bericht?></p>
    <label>Gebruikersnaam:</label><br>
    <input type="text" name="gebruikersnaam"><br><br>

    <label>Wachtwoord:</label><br>
    <input type="password" name="wachtwoord"><br><br>
    
    <label>Herhaal wachtwoord:</label><br>
    <input type="password" name="wachtwoord_herhaald"><br><br>

    <label>Naam:</label><br>
    <input type="text" name="naam"><br><br>

    <label>E-mailadres:</label><br>
    <input type="email" name="email"><br><br>

    <input type="submit" value="Versturen">

</form>