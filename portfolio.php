<?php
  session_start();
  include_once("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="sv">
  <head>
    <title> Jannes Inredning AB - Portfolio </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <div class="portfolio_content">
      <div class="row">
          <div class="column" align="center">
          <?php
            $sql = "SELECT * FROM images ORDER BY id DESC";
            $res = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($res)){
              echo "<div class='content'>";
              echo "<img src='uploads/".$row['image']."'>";
              echo "<p>".$row['text']."</p>";
              echo "</div>";
            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
