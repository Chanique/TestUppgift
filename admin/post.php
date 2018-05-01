<?php
  session_start();
  include_once("../dbconnect.php");

  if(isset($_POST['submit'])){
    $title = strip_tags($_POST['title']);
    $content = strip_tags($_POST['content']);

    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);

    $sql = "INSERT INTO post (title, content) VALUES ('$title', '$content')";

    if($title == "" || $content == "" ){
      echo "Please complete your post!";
      return;
    }
    mysqli_query($conn, $sql);
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
        <title> Administrationssida - Lägg till nyhet </title>
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
          <h2> Lägg till en nyhet </h2>
          <form action="post.php" method="post" enctype="multipart/form-data">
            Rubrik: <input name="title" type="text"><br><br>
            <textarea name="content" type="text" rows="20" cols="50" placeholder="Beskrivning.."></textarea><br><br>
            <input name="submit" type="submit" value="Lägg upp">
          </form>
        </div>
  </body>
</html>
