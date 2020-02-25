<?php

if(isset($_POST['contact_submit'])){
  
  require "db_connection.php";

  $pn=$_POST['name'];
  $pe=$_POST['email'];
  $ps=$_POST['subject'];
  $pm=$_POST['msg'];

  $query="insert into msg (name,email,subject,message) values('$pn','$pe','$ps','$pm')";
  $conn->query($query);
  if(mysqli_affected_rows($conn)>0){
    header("Location: ../contactus.php");
      exit();
  }

  $conn->close();
}

?>