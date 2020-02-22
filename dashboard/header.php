<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./style.css">
  <title></title>
  
</head>

<body>
  <div class="navbar">
    <nav class="header-left">
      <ul>
        <li><a class="navbar_button" href="/dashboard/index.php">Home</a> </li>
        <li><a class="navbar_button" href="/dashboard/aboutus.php">About US</a> </li>
        <li><a class="navbar_button" href="/dashboard/contactus.php">Contact Us</a> </li>
      </ul>
    </nav>
    <nav class="header-right">
      <ul>
        <?php
          if(isset($_SESSION['name'])){
            echo '<li><form action="includes/logout_logic.php">
                  <input type="submit" class="logout" value="LOGOUT" name="logout_submit">
                  </form></li>'; 
          }else{
            echo '<li><a href="/dashboard/login.php" class="login">Login</a></li>';
          }
        ?>
        
        
      </ul>
    </nav>
  </div>
</body>

</html>