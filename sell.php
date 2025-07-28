<?php
  require_once 'includes/sessions.inc.php';
  if(!isset($_SESSION['user_name'])){
      header("Location: login.php?pleaselogin");
      exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sell.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell | TomzyInstantPay</title>
    <script src="bootstrap/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

   <!-- <script>
       alert("Please ensure to pay to the exact wallet to avoid loss of funds thanks!");
   </script> -->
</head>
<body>
    <!-- start nav -->
    <nav>
        <!-- start label, website logo-->
        <label class="logo"><a href="index.php" class="website-logo"><span class="site-logo">tIp</span><span id="site-logo">TomzyInstantPay</span></a></label>
        <!-- end label, website logo-->
        <!-- start navigation -->
        <ul>
            <li><a href="index.php" class="active">home</a></li>
            <li><a href="about.php" class="about">about</a></li>
            <li><a href="rates.php" class="rates">rates</a></li>
            <li><a href="sell.php" class="sell">sell</a></li>
            <li><a href="faq.php" class="faq">faq</a></li>
            <li>
            <?php
                if(isset($_SESSION['user_name'])){
                    echo ' <form action="includes/logout.inc.php" method="POST">
                                <button type="submit" name="submit" id="logout">Logout</button>
                            </form>';
                }
            ?>
            </li>
        </ul>
      
        <label id="icon">
          <i class="fa fa-bars"></i>
        </label>
        <!-- end navigation -->
    </nav>
    <!-- end nav -->

    <!-- start hero section -->
    <div class="container">
        <div class="column text-center">
            <h2>trade your cryptocurrency</h2>
            <img class="swap" src="images/swap.png" alt="Small icon for trading">
        </div>
        <div class="row">
            <div class="col-md-5" id="col">
                <i class="fa fa-hand-pointer-o" aria-hidden="true" id="hand-pointer"><strong>step 1</strong></i>
                <h6>copy our wallet address</h6>   
                <p id="bitcoin"></p>
                <p id="eth"></p>
                <p id="bch"></p>
               <button onclick="document.getElementById('bitcoin').innerHTML = 'bc1qwamm6fwqp7u2pt4qu7r9y5kpdsfp6ejmt0srg6'" class="btn-btc">Show BTC wallet</button>
               <button onclick="document.getElementById('eth').innerHTML = '0x518F1d28aD4c29147ca920dc9CFD6c1F12e4e6e4'" class="btn-eth">Show ETH wallet</button>
               <button onclick="document.getElementById('bch').innerHTML = 'qr3s4n907a287g8wrtvh8xf9vqs4puu8wuq8ttjchv'" class="btn-bch">Show BCH wallet</button>
            </div>
            <div class="col-md-3" id="col">
                <i class="fa fa-hand-pointer-o" aria-hidden="true" id="hand-pointer"><strong>step 2</strong></i>
                <h6>transfer</h6>
                <p><i>transfer the amount you want to sell to any of our wallets.</i></p>
            </div>
            <div class="col-md-4" id="col">
                <i class="fa fa-hand-pointer-o" aria-hidden="true" id="hand-pointer"><strong>step 3</strong></i>
                <h6>input your details</h6>
                <p><i>fill out the details on the form and upload a screenshot from the confirmation page provided by your wallet.</i></p>
            </div>
        </div>
    </div>
    <!-- end hero section -->

     <!-- start whatsapp feedback -->
     <div class="get-feedback">
        <a href="#" class="whatsapp-feedback"><i class="fa fa-whatsapp"></i><span id="help"> Message Us</span></a>
    </div>
    <!-- end whatsapp feedback -->
    
    <!-- start payment form -->
    
    <form action="includes/processing.php" method="POST" enctype="multipart/form-data">
        <div class="container" style="padding-top: 300px;">
            <h5 class="text-center" style="margin-bottom: 20px;">Please fill in your data.</h5>
            <?php 
                echo errorMessage();
                echo successMessage();
            ?>
            <div class="row">
                <div class="col-md-4">
                    <label for="fname">First Name<span style="color: red;">*</span></label>
                    <input type="text" name="fname" id="fname" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="lname">Last Name<span style="color: red;">*</span></label>
                    <input type="text" name="lname" id="lname" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="email">Email Address<span style="color: red;">*</span></label>
                    <input type="email" name="email" id="email" placeholder="eg@gmail.com" class="form-control">
                </div>
            </div>      
            <div class="row">
                <div class="col-md-4">
                    <label for="phone-number">Phone Number<span style="color: red;">*</span></label>
                    <input type="number" name="phoneNumber" id="phone-number" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="country">Country<span style="color: red;">*</span></label>
                    <input type="text" name="country" id="country" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="state">State<span style="color: red;">*</span></label>
                    <input type="text" name="states" id="state" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="bank-number">Bank Acct No<span style="color: red;">*</span></label>
                    <input type="number" name="bankNumber" id="bank-number" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="bank-name">Bank Name<span style="color: red;">*</span></label>
                    <input type="text" name="bankName" id="bank-name" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="amount">Amount<span style="color: red;">*</span></label>
                    <input type="number" name="amount" id="amount" placeholder="in dollars(don't put dollar sign)" class="form-control">
                </div>
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <label for="upload">Upload screenshot<span style="color:red;">*</span></label><br>
                <input type="file" class="form-control-file" name="file" id="upload">
            </div>
            <div class="form-check" style="margin-top: 20px;">
                <input type="checkbox" class="form-check-input" name="checkBox" id="check-box" checked>
                <label for="check-box">I have read and agree to these terms and conditions.<a href="privacy.php?tomzyinstantpay=privacy&policy" class="terms-cons">View</a></label>
            </div>
            <button type="submit" name="submit" class="btn-default">Send your Order</button>
        </div>
    </form>
    <!-- end payment form -->

    <!-- start footer -->
    <div class="footer">
        <!-- start main footer -->
        <div class="main-footer" id="footer-bg">
            <div class="row" id="footer-row">
                <div class="col-md-3">
                <a href="index.php" class="website-logo"><span class="site-logo">TIP</span><span id="site-logo">TomzyInstantPay</span></a>
                </div>
                <div class="col-md-3">
                    <h2 class="contact">contact us</h2>
                    <ul class="contact-drops">
                        <li><p><i class="fa fa-phone fa-lg" style="color:rgba(104, 151, 167);"></i><span class="phone-number">+1 (908) 409-1501, <br> +1 (908) 409-1501</span></p></li>
                        <li><p><i class="fa fa-map-marker fa-lg" style="color:rgba(104, 151, 167);"></i><span class="address">Abuja, Nigeria</span></p></li>
                        <li><p><i class="fa fa-envelope fa-lg" style="color:rgba(104, 151, 167);"></i><span class="email-to">tomzyofficial@gmail.com</span></p></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2 class="important-link">important links</h2>
                    <ul class="important-links-drops">
                        <li class="rate"><a href="about.php">about</a></li>
                        <li><a href="rates.php">rates</a></li>
                        <li><a href="sell.php">sell</a></li>
                        <li><a href="contact.php">contact us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2 class="social-media">social media</h2>
                    <ul class="social-media-drops">
                        <li><a href=""><i class="fa fa-instagram fa-lg" ></i></a></li>
                        <li><a href=""><i class="fa fa-twitter fa-lg" ></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-copyright">
                <p>&copy; TomzyInstantPay<span id="footer-year"></span> All Rights Reserved | <a href="privacy.php?tomzyinstantpay=privacy&policy">Privacy Policy</a></p>
            </div>
        </div>
        <!-- end main footer -->
   
        <!-- back to top -->
        <div class="back-to-top">
            <button onclick="topFunction()" id="mybtn"><i class="fa fa-chevron-up"></i></button>
        </div>
    </div>

    <script src="scripts/site-functions.js" defer></script>
</body>
</html>