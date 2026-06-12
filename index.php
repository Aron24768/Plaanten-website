<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">

<body class="w3-content" style="background-color:grainsboro; max-width:1200px">
  <!-- Sidebar -->
  <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-large">inklappen &times;</button>
    <p><a href="./index.php"><button class="w3-button w3-black w3-round">home</button></a></p>
    <p><a href="./inloggen.php"><button class="w3-button w3-black w3-round">log in</button></a></p>

  </div>

  <!-- Page Content -->
  <div class="w3-olive">
    <button class="w3-button w3-olive w3-xlarge" onclick="w3_open()">☰</button>
    <div class="w3-container">
      <h1>Home</h1>
    </div>
    <div class="w3-container">
    </div>
    <script>
      function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
      }

      function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
      }
    </script>

    <p class="w3-display-topmiddle w3-hide-small"><a href="je moet inloggen.php">log in om alles over de verzorging van planten te zien!<br>Je kunt hier ook registreren!</a></p>

    <form class="w3-containerclass w3-center" action="je moet inloggen.php">
      <p><button class="w3-button w3-brown">
          <p> alle planten</p>
          <img src="bromalia fzo iets.avif" class="w3-round" alt="blommegie plaatie" style="width:490px;height:350
 px;">
        </button>
      </p>
    </form>
    <h2 class="w3-center">favourite planten</h2>
    <div class="w3-content w3-display-container">
      <img class="mySlides" src="bromalia fzo iets.avif" style="width:980px;">
      <img class="mySlides" src="pannekoekplant.avif" style="width:980px;">
      <img class="mySlides" src="geldboom.avif" style="width:980px;">
      <img class="mySlides" src="lavendel.avif" style="width:980px;">
      <button class="w3-button w3-brown w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-brown w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>
    <script>
      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
      }
    </script>
</body>
</body>
</body>

</html>