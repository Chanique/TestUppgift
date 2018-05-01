<?php
  session_start();
  include_once("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="sv">
  <head>
    <title> Jannes Inredning AB - Start </title>
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

    <div class="content">
      <div class="side">
        <div class="about">
          <h2> Om oss </h2>
          <br>
          <img src="pics/group.png">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus faucibus molestie nisl.
             Curabitur sagittis hendrerit ante. Ut tempus purus at lorem. Morbi leo mi, nonummy eget tristique non,
             rhoncus non leo. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Aliquam erat volutpat.
             Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Maecenas ipsum velit, consectetuer eu
             lobortis ut, dictum at dui. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
             eu fugiat nulla pariatur. Nullam sapien sem, ornare ac, nonummy non, lobortis a enim. Integer tempor.
             Etiam bibendum elit eget erat. Praesent id justo in neque elementum ultrices. Duis sapien nunc, commodo et,
             interdum suscipit, sollicitudin et, dolor. Integer vulputate sem a nibh rutrum consequat. Integer rutrum,
             orci vestibulum ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim.
          </p>
          <br>
          <div class="social-media" >
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
          </div>
        </div>
      </div>
      <div class="main">
        <?php
          $sql = "SELECT * FROM post ORDER BY id DESC";
          $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

          $posts = "";

          if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
              $id = $row['id'];
              $title = $row['title'];
              $content = $row['content'];

              $posts .= "<div class='post'>
                          <h2>$title</h2>
                          <p>$content</p>
                        </div>";
            }
            echo $posts;
          }
        ?>
      </div>
    </div>
  </body>
</html>
