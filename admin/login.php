<!DOCTYPE>
<html>
  <head>
    <title> Admin inloggning </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin_style.css">
  </head>
  <body>
    <div class="box" align="center">
      <form method="post" action="check_login.php">
        Användarnamn: <input type="text" name="username"><br><br>
        Lösenord:     <input type="password" name="password"><br><br>
                      <button type="submit" name="submit">Logga in</button>
      </form>
    </div>
  </body>
</html>
