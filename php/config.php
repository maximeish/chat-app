<?php
  $hostname = "localhost";
  $studentname = "ishimwe";
  $password = "ishimwe";
  $dbname = "chat";

  $conn = mysqli_connect($hostname, $studentname, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
