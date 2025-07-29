<?php
include 'includes/dbh.inc.php';
include 'includes/sessions.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TomzyInstantPay">
    <title>TomzyInstantPay - LoginPage</title>
    <script src="https://kit.fontawesome.com/c91674d225.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signupLogin.css">
</head>
<body>
  <header>
    <div class="container-fluid">
      <div class="login-box">
        <h2>Login Here</h2>
        <?php 
          echo errorMessage();
          echo successMessage();
        ?>
        <form action="includes/logins.inc.php" method="POST" novalidate>
            <div class="form-group">
                <i class="fa fa-user-o"></i><input type="email" name="user_email" placeholder="Example@gmail.com" autocomplete="on"><br>
            </div><br>
            <div class="form-group">
                <i class="fa fa-lock"></i><input type="password" name="user_pwd" placeholder="Password" autocomplete="off"><br>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Login</button>
        </form>
        <div class="new-account">
            <p>Don't have an account? <a href="signup.php" class="signup">SignUp </a></p>
        </div>
      </div>
    </div>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>


  