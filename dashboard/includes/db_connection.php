<?php
//te dhenat e DB
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "web2";

  //db connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
