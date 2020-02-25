<?php

require "header.php";

?>

<main>
  <div class="main_container">
    
    <div class="container_aboutus">
      <form class="landing_enter_form_contactus" action='includes/contact_logic.php' id="contact_form" method='POST'>
        <div class="enter_form_inner">
        <h1 id="test" class="main_title"> Contact &nbsp Us</h1><br>
          <div class="enter_form_fields">
            <div class="enter_form_cell">
              <span class="enter_form_placeholder " style="position: relative !important;"></span>
              <input type='text' name='name' placeholder='Your name' >
            </div>
            <div class="enter_form_cell">
              <span class="enter_form_placeholder" style="position: relative !important;"></span>
              <input type='text' name='email' placeholder='Email' >
            </div>
            <div class="enter_form_cell">
              <span class="enter_form_placeholder" style="position: relative !important;"></span>
              <input type='text' name='subject' placeholder='Subject' >
            </div>
            <div class="enter_form_cell">
              <span class="enter_form_placeholder" style="position: relative !important;"></span>
              <textarea class="contactus_form" name="msg" form="contact_form" placeholder='Your message'></textarea>
            </div>
          </div>
        </div>
        <input type='submit' value='Send' class="enter_form_send" name="contact_submit">
        <br>
      </form>
    </div>  
  </div>
</main>


<?php

require "footer.php"

?>