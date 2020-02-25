<?php
  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "web2";

  //db connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if($_POST['userData']){
    $sql = "UPDATE users SET about='".$_POST['userData']."' WHERE name='".$_SESSION['name']."'";
    //$sql = "UPDATE users SET about='2' WHERE name='admin'";
    $conn->query($sql);

    $sql = "SELECT about FROM users WHERE name='".$_SESSION['name']."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
    }
    $_SESSION['about']=$row['about'];
    

    header("Location: ../index.php");
    exit();
  }

?>