<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body class="body_login">
  <div class="container">
    <form  class="landing_enter_form" action="includes/login_logic.php" method="post">
      <div class="enter_form_inner">
        <p class="enter_form_title">Sign In</p>
        <div class="enter_form_fields">
          <div class="enter_form_cell">
            <span class="enter_form_placeholder" style="position: relative !important;"></span>
            <input type="text" placeholder="Name" autocomplete="name" name="name">
          </div>
          <div class="enter_form_cell">
            <span class="enter_form_placeholder" style="position: relative !important;"></span>
            <input type="password" placeholder="Password" autocomplete="password" name="password">
          </div>
        </div>
      </div>
      <input type="submit" class="enter_form_send" value="Sign In" name="login_submit">
    </form>
  </div>
</body>

</html>