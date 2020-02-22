<?php

require "header.php";

?>

<main> 
  <div class="main_container">
    <?php
      if(isset($_SESSION['name'])){
        echo '<h1 class="main_title">Pershendetje '.$_SESSION['name'].'</h1><br>';
        echo '<h2 class="main_about">'.$_SESSION['about'].'</h2>';

      }
      else {
        echo "you are not logged in";
      }
      
    ?>
  </div>
</main>