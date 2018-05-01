<?php
  //Connect to server
  $conn = mysqli_connect('localhost', 'admin', 'c99f4533koka99', 'jannesinredningab');

  if(!$conn){
    die("Failed" . mysqli_connect_error());
  }
  
?>
