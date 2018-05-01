<?php
  session_start();
  include_once("../dbconnect.php");

  if(isset($_POST['upload'])){
    $target = "../uploads/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
    mysqli_query($conn, $sql);

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    echo "Image uploaded";
    } 
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <!DOCTYPE>
    <html>
      <head>
        <title> Administrationssida </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="admin_style.css">
      </head>
      <body>
        <div class="sidenav">
          <a href="admin.php">Start</a>
          <a href="post.php">Lägg till nyhet</a>
          <a href="service.php">Lägg till tjänst</a>
          <a href="upload.php">Lägg till bild i portfolio</a>
        </div>
        <div class="box" align="center">
          <h2> Lägg till en bild och beskrivning i portfolion </h2>
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image">
            </div><br>
            <div>
              <textarea id="text" cols="40" rows="4" name="text" placeholder="Beskrivning.."></textarea>
            </div><br>
            <div>
              <button type="submit" name="upload"> Post </button>
            </div>
          </form>
        </div>
  </body>
</html>
