<?php

$opgestuurde_naam = $_GET["naam"] ?? "hoe heet je?";
$kleur = $_GET["favcolor"] ?? "#000000";

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Formulier 1 versie 2</title>
</head>
<body style="color: <?=$kleur?>;">

    <p>Hallo, <?=$opgestuurde_naam?></p>

    <form>
        <label>Naam: </label>
        <input type="text" name="naam" value="<?=$opgestuurde_naam?>">
	

        <label for="favcolor">Select your favorite color:</label>
        <input type="color" id="favcolor" name="favcolor" value="<?=$kleur?>">

        <input type="submit" value="Versturen">
    </form>

</body>
</html>
