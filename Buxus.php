<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<body>
<?php include("menu.php"); ?>

<!-- Page Content -->
<div class="w3-olive">
  <button class="w3-button w3-olive w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">
    <h1>Buxus</h1>
  </div>
</div>

<div class="w3-content" style="max-width:800px">

<div class="w3-container">
<p>Wanneer snoeien?</p>
<div>Eerste snoeibeurt: Eind mei/juni, zodra de langste takjes met nieuwe blaadjes langer dan 5 cm zijn.</div>
<div>Tweede snoeibeurt: Augustus.</div>
<div>Derde snoeibeurt (optioneel): Begin september, om de struik strak de winter in te laten gaan.</div>
<div>Vermijd snoeien: Na september, omdat nieuwe scheuten dan niet op tijd kunnen verhouten voor de vorst.</div>
<div>Weersomstandigheden: Snoei op een bewolkte, droge dag. Vermijd fel zonlicht om bladverbranding te voorkomen.</div>
<p>Wanneer water geven.</p>
<div>Controleer de bodem: Voel met je vinger 2-7 cm diep in de grond. Als het droog is, is het tijd om water te geven.</div>
<div>Tijdens warme en droge periodes: Geef vaker water, mogelijk zelfs dagelijks voor buxussen in pot.</div>
<div>In de winter: Geef alleen water op vorstvrije dagen, want in de winter verliest de buxus ook vocht en kan het water te lang blijven staan.</div> 
<p>Hoe water geven?</p>
<div>Op de grond: Giet het water direct op de grond bij de wortels, niet over de bladeren, om schimmel te voorkomen.</div>
<div>Veel tegelijk: Het is beter om in één keer veel water te geven dan elke dag een klein beetje.</div>
<div>Goede drainage: Zorg ervoor dat overtollig water kan weglopen via drainagegaten in potten of door de grond goed te bewerken. Buxus mag geen natte voeten hebben.</div>
<div>'s Avonds: Geef bij voorkeur in de avond water, zodat het water kan inwerken voordat de zon weer gaat schijnen.</div>
<div>Regenwater: Gebruik bij voorkeur regenwater, dat is beter voor de planten.</div>
</div>
<button style="margin-left: 20px;"onclick="alert('plant is toegevoegd!')">Klik om een plant toe te voegen aan je tuin</button>
</div>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html> 