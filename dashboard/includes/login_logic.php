<?php

  if(isset($_POST['login_submit'])){
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

    //marrja e te dhenave te nevoitshme
    $name = $_POST['name'];
    $pwd = $_POST['password'];

    $sql = "SELECT id, name, pwd, about FROM users WHERE pwd='$pwd' and name='$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
    }
    //checkupi i the dhenave dhe kalimi i tyre ne session
    if($_POST['password'] == $row['pwd']&&$_POST['name'] == $row['name']){
      session_start();
      $_SESSION['name']=$row['name'];
      $_SESSION['about']=$row['about'];

      header("Location: ../index.php?login=success");
      exit();
   }else{
      header("Location: ../login.php");
      exit();
   }

    $conn->close();
    
  }

?>