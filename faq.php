<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="./aos-master/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/contact.css"> -->
    <link rel="stylesheet" href="./aos-master/dist/aos.css">
    <script src="./aos-master/dist/aos.js"></script>
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | TomzyInstantPay</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <style>
        a.active{
            color: white;
        }
        a.faq:visited{
            color: lightgreen;
        }
        .header-text h2{
            margin-top: 50px;
            font-size: 30px;
            color: #30336b;
            text-shadow: 2px 2px lightgreen;
        }
        .details{
            margin-top: 50px;
        }
        .img-content img{
            width: 35vw; 
            height: 80vh;
            border-radius: 50%;
        }
        .card{
            width: 100%;
            padding: 5px;
            margin-top: 15px;
        }
        #caret{
            float: right;
            padding-right: 20px;
        }
        .first, .second, .third, .fourth, .fifth{
            font-size: 20px;
            line-height: 25px;
            text-decoration: none;
            color: #000;
            font-weight: 400;
        }
        .first:hover{
            color: #000;
        }
        .second:hover{
            color: #000;
        }
        .third:hover{
            color: #000;
        }
        .fourth:hover{
            color: #000;
        }
        .fifth:hover{
            color: #000;
        }
        #footer-bg{
           margin-top: 10rem;
        }
        @media screen and (max-width:1200px){
            .img-content img{width: 100%; height: 50vh;}
        }
    </style>
</head>
<body>
    <!-- start nav -->
    <nav>
        <label class="logo"><a href="index.php" class="website-logo">
            <span class="site-logo">tIp</span><span id="site-logo">TomzyInstantPay</span></a>
        </label>
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
    </nav>
    <!-- start hero session -->
    <div class="header-text">
        <div class="text">
            <h2 class="text-center">Frequently Asked Questions</h2>
        </div>
    </div>
     <!-- start whatsapp feedback -->
     <div class="get-feedback">
        <a href="#" class="whatsapp-feedback"><i class="fa fa-whatsapp"></i><span id="help"> Message Us</span></a>
    </div>
    <!-- start contact information -->
    <div class="container">
        <div class="row details">
            <div class="col-lg-6">
                <div class="img-content">
                    <img src="images/img-faq.png" alt="FAQ image for decor">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow">
                    <a href="#tomzyinstantpay/frequently-asked-questions/1" class="first"><p>What is digital currency?<span><i class="fa fa-caret-right" id="caret"></i></span></p></a>
                    <p class="first-answer" style="display: none;">Digital currency is a form of currency that is available only in digital or electronic form. 
                        It is also called digital money, electronic money, electronic currency, or cybercash.
                    </p>
                </div>
                <div class="card shadow">
                    <a href="#tomzyinstantpay/frequently-asked-questions/2" class="second"><p>What is the exchange rate?<span><i class="fa fa-caret-right" id="caret"></i></span></p></a>
                    <p class="second-answer" style="display: none;">Rates flutuates everyday and so you are adviced to always check the rate on the website before trading</p>
                </div>
                <div class="card shadow">
                    <a href="#tomzyinstantpay/frequently-asked-questions/3" class="third"><p>Who can trade with TomzyInstantPay?<span><i class="fa fa-caret-right" id="caret"></i></span></p></a>
                    <p class="third-answer" style="display: none;">We transact with sellers all over the world, so literally everyone has the right to trade with TomzyInstantPay.</p>
                </div>
                <div class="card shadow">
                    <a href="#tomzyinstantpay/frequently-asked-questions/4" class="fourth"><p>How long does it take to fund an account?<span><i class="fa fa-caret-right" id="caret"></i></span></p></a>
                    <p class="fourth-answer" style="display: none;">TomzyInstantPay is known for fast and speedy payments, within 20 minutes upon verification, accounts gets credited.</p>
                </div>
                <div class="card shadow">
                    <a href="#tomzyinstantpay/frequently-asked-questions/5" class="fifth"><p>Do you have customer service? <span><i class="fa fa-caret-right" id="caret"></i></span></p></a>
                    <p class="fifth-answer" style="display: none;">24/7 customer service always available to assist you.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- start main footer -->
    <div class="footer">
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
        <!-- back to top -->
        <div class="back-to-top">
            <button onclick="topFunction()" id="mybtn"><i class="fa fa-chevron-up"></i></button>
        </div>
    </div>
    <script src="scripts/site-functions.js" defer></script>

    <script>
        AOS.init({
        duration: 1200,
        });
    </script>
</body>
</html>