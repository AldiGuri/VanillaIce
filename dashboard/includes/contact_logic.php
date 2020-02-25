<?php

if(isset($_POST['contact_submit'])){
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

  $pn=$_POST['name'];
  $pe=$_POST['email'];
  $ps=$_POST['subject'];
  $pm=$_POST['msg'];

  $query="insert into msg values('$pn','$pe','$ps','$pm')";
  $conn->query($query);
  if(mysqli_affected_rows($conn)>0){
    header("Location: ../contactus.php");
      exit();
  }

  $conn->close();
}

?>