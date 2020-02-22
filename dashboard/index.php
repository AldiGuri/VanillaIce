<?php

require "header.php";

?>

<main> 
  <div class="main_container">
    <?php
      if(isset($_SESSION['name'])){
        echo '<h1 class="main_title">Pershendetje &nbsp '.$_SESSION['name'].'</h1><br>';
        echo '<h2 class="main_about">'.$_SESSION['about'].'</h2>';

      }
      else {
        echo '<h1 class="main_about" style="padding-top:60px;">Nuk Jeni Te Loguar<h1>';
      }
      
    ?>
    <script src="./app.js"></script>
  </div>
</main>

<?php

require "footer.php"

?>