<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/dashboard/style.css">

  <?php
    function lexo(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT catid, catname, catdesc,icon,displayorder FROM categories";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
      echo "<table border = 1>";
        while($row = $result->fetch_assoc()) {
      echo"<tr><td>". " catid:  " . $row['catid']."</td><td>" . " catname:  ". $row["catname"]."</td><td>" . " catdesc:  ". $row["catdesc"]."</td><td>" . " icon:  " . $row["icon"]."</td><td>" . " displayorder:  " . $row["displayorder"]. "<td></tr>";
        }
      echo "</table>";
    } else {
        echo "0 results";	
    }
    $conn->close();
    }
  ?>

</head>

<body class="body_login">
  <div class="container">
    <form class="landing_enter_form">
      <div class="enter_form_inner">
        <p class="enter_form_title">Sign In</p>
        <div class="enter_form_fields">
          <div class="enter_form_cell">
            <span class="enter_form_placeholder" style="position: relative !important;"></span>
            <input type="email" placeholder="Email" autocomplete="email" name="email">
          </div>
          <div class="enter_form_cell">
            <span class="enter_form_placeholder" style="position: relative !important;"></span>
            <input type="password" placeholder="Password" autocomplete="password" name="password">
          </div>
        </div>
      </div>
      <input type="submit" class="enter_form_send" value="Sign In">
    </form>
  </div>
</body>

</html>