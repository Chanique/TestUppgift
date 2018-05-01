<!DOCTYPE html>
<html lang="sv">
  <head>
    <title> Jannes Inredning AB - Kontakt </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="header" align="center">
      <img src="pics/logo.png">
    </div>
    <div class="navbar">
      <ul class="topnav">
        <li class="menu"><a href="start.php"> Start </a></li>
        <li class="menu"><a href="tjanster.php"> Tjänster </a></li>
        <li class="menu"><a href="portfolio.php"> Portfolio </a></li>
        <li class="menu"><a href="kontakt.php"> Kontakt </a></li>
      </ul>
    </div>
    </div>
    <div class="container">
      <div style="text-align:center">
        <h2>Kontakta oss</h2>
        <p> Mejla oss på: info@jannesinredning<br>
            Ring oss på: 123-456789<br>
            Besök oss: Exempelvägen 23 12345 Exempel
        </p>
      </div>
      <div class="row">
        <div class="column">
          <div id="map" style="width:100%;height:500px"></div>
        </div>
        <div class="column">
          <form action="/action_page.php">
            <label for="fname">Namn</label>
            <input type="text" id="fname" name="firstname" placeholder="Ditt namn..">
            <label for="email">Email adress</label>
            <input type="text" id="email" name="email" placeholder="Din email adress..">
            <textarea id="subject" name="subject" placeholder="Skriv någonting.." style="height:170px"></textarea>
            <input type="submit" value="Skicka">
          </form>
        </div>
      </div>
    </div>
    <script>
      function initMap() {
        var uluru = {lat: 57.7006827, lng: 11.6136648};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqbyDyBm7R4BevKd2x2_Lu6cRjri8y8ds&callback=initMap">
    </script>
  </body>
</html>
