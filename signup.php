<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/sessions.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TomzyInstantPay">
    <title>TomzyInstantPay - SignupPage</title>
    <script src="https://kit.fontawesome.com/c91674d225.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signupLogin.css">
</head>
<body>
  <main>
      <div class="container-fluid-signup">
          <div class="signup-box">
              <h2>SignUp Here</h2>
              <?php
                  echo errorMessage();
              ?>
              <form action="includes/signup.inc.php" method="POST">
                  <div class="form-group">
                      <i class="fa fa-user"></i><input type="text" name="user_name" placeholder="Username" autocomplete="on">
                  </div><br>
                  <div class="form-group">
                  <i class="fa fa-envelope"></i><input type="email" name="user_email" placeholder="Example@gmail.com" autocomplete="on">
                  </div><br>
                  <div class="form-group">
                      <i class="fa fa-lock"></i><input type="password" name="user_pwd" placeholder="Password" autocomplete="off">
                  </div><br>
                  <button type="submit" name="submit" class="btn btn-success">SignUp</button>
              </form>
              <div class="already_member">
                  <p>Already have an account?<a href="login.php"> Login</a></p>
              </div>
          </div>
      </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>















