<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TomzyInstantPay">
    <title>TomzyInstantPay - SignupPage</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/signupLogin.css">
</head>
<body>
<main>
    <div class="container-fluid-signup">
        <div class="signup-box">
            <h2>SignUp Here</h2>
            <form action="includes/signup.inc.php" method="POST">
                <div class="form-group">
                    <i class="fa fa-user"></i><input type="text" name="uid" placeholder="Username" >
                </div><br>
                <div class="form-group">
                <i class="fa fa-envelope"></i><input type="email" name="email" placeholder="Email Address">
                </div><br>
                <div class="form-group">
                    <i class="fa fa-lock"></i><input type="password" name="pwd" placeholder="Password">
                </div><br>
                <button type="submit" name="submit" class="btn btn-secondary">SignUp</button>
            </form>
            <div class="already_member">
                <p>Already have an account?<a href="tip.php"> Login</a></p>
            </div>
        </div>
    </div>
</main>















