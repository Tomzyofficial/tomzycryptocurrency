

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TomzyInstantPay">
    <title>TomzyInstantPay - LoginPage</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/signupLogin.css">
</head>
<body>
    <header>
    <div class="container-fluid">
        <div class="login-box">
            <h2>Login Here</h2>
            <form action="includes/login.inc.php" method="POST">
                <div class="form-group">
                    <i class="fa fa-user-o"></i><input type="text" name="uid" placeholder="Username/e-mail" >
                </div><br>
                <div class="form-group">
                    <i class="fa fa-lock"></i><input type="password" name="pwd" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-secondary" name="submit">Login</button>
            </form>
            <div class="new-account">
                <p>Don't have an account? <a href="signup.php" class="signup">SignUp </a></p>
            </div>
        </div>
    </div>
    </header>


  