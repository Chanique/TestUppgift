<?php
  session_start();
  include_once("dbconnect.php");

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

    header("location: start.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <form action="post.php" method="post" enctype="multipart/form-data">
      Title <input name="title" type="text"><br><br>
      <textarea name="content" type="text" rows="20" cols="50"></textarea>
      <input name="submit" type="submit" value="Send">
    </form>
  </body>
</html>
