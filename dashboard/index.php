<?php

require "header.php";

?>

<main> 
  <div class="main_container">
  
    <?php
      if(isset($_SESSION['name'])){
        echo '<h1 class="main_title">Pershendetje &nbsp '.$_SESSION['name'].'</h1><br>';
        echo '<form action="includes/edit_logic.php" method="post" >
                <div class="user_data_container">
                  <textarea class="user_data"  name="userData">'.$_SESSION['about'].'</textarea>
                </div> 
                <div class="user_data_container">
                  <input class="enter_form_send_user" type="submit" value="Ndrysho te dhenat" name="edit_submit">
                </div>
              </form>'; 

      }
      else {
        echo '<h1 class="main_notlogedin">Nuk Jeni Te Loguar<h1>';
      }
      
    ?>
    <script src="./app.js"></script>
  </div>
</main>

<?php

require "footer.php"

?>