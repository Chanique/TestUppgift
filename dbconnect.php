<?php
  $conn = mysqli_connect('localhost', 'admin', 'c99f4533koka99');

  if(!$conn){
    die("Failed" . mysqli_connect_error());
  } else {
    echo "Successfully connected.";
  }
?>
