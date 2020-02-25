<?php

require "header.php";

?>

<main> 
  <div class="main_container">
  
    <?php
      
      if(isset($_SESSION['name'])){
        if($_SESSION['name']=== 'admin'){
          echo '<h1 class="main_title">Pershendetje &nbsp '.$_SESSION['name'].'</h1><br>';
          require "./includes/db_connection.php";
          echo '
          
            <table>
              <tr>
              <th>DL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
              </tr>';
              $sql = "SELECT * FROM msg";
              $result = $conn->query($sql);
              while($row = $result->fetch_assoc()) {
                echo "<form action='./index.php' method='post'>
                      <tr><td class='first_row'><input class='first_row_button' type='submit' name='delete' value='X'/></td>
                      <input class='hidden' type='text' name='id' value='".$row['id']."'/>
                      <td>".$row['name']."</td>
                      <td>".$row['email']."</td>
                      <td>".$row['subject']."</td>
                      <td>".$row['message']."</td></tr></form>";
              }
              
          echo'</table>';
          if(isset($_POST['delete'])){
            $sql = "DELETE FROM msg WHERE id=".$_POST['id'];
            $conn->query($sql);
            header("Location: ../index.php");
          }
          
          $conn->close();

        }else{
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
      }
      else {
        echo '<h1 class="main_notlogedin">Nuk Jeni Te Loguar<h1>';
      }
      
    ?>
          
  </div>
</main>

<?php

require "footer.php"

?>