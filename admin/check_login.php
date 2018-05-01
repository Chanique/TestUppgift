<?php
  session_start();
  include_once("../dbconnect.php");

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin_login";
  $res = mysqli_query($conn, $sql);

  if($username == 'admin' && $password == 'admin'){
    header("location: admin.php");
  } else {
    echo "Wrong username or password";
  }
?>
