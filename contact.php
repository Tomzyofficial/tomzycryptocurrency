<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="./aos-master/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | TomzyInstantPay</title>
</head>
<body>
    <!-- start nav -->
    <nav>
        <!-- start label, website logo-->
        <label class="logo"><a href="index.html" class="website-logo"><span class="site-logo">tIp</span><span id="site-logo">TomzyInstantPay</span></a></label>
        <!-- end label, website logo-->
        <!-- start navigation -->
        <ul>
            <li><a href="index.php" class="active">home</a></li>
            <li><a href="about.php" class="about">about</a></li>
            <li><a href="rates.php" class="rates">rates</a></li>
            <li><a href="sell.php" class="sell">sell</a></li>
            <li><a href="faq.php">faq</a></li>
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

    <!-- start hero session -->

    <!-- header image -->
    <div class="header-text">
        <div class="text">
            <h1>Feel free to contact us</h1>
            <h2>Contact Us</h2>
        </div>
    </div>
    <!-- end header image -->

    <!-- start whatsapp feedback -->
    <div class="get-feedback">
        <a href="#" class="whatsapp-feedback"><i class="fa fa-whatsapp"></i><span id="help"> Message Us</span></a>
    </div>
    <!-- end whatsapp feedback -->

    <!-- start contact information -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="location">
                    <i class="fa fa-home" id="home"></i>
                    <h3 style="margin-top: 50px; color: #535c68;">Our Address</h3>
                    <p style="color: #535c68;">Abuja, Nigeria</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="phone">
                    <i class="fa fa-phone" id="phone"></i>
                    <h3 style="margin-top: 50px; color: #535c68;">Phone</h3>
                    <p style="color: #535c68;">+2349066194749</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="email">
                    <i class="fa fa-envelope" id="envelope"></i>
                    <h3 style="margin-top: 50px; color: #535c68;">Email</h3>
                    <p style="color: #535c68;">tomzyofficial54@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact information -->

    <!-- start main footer -->
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

    <script>
        AOS.init({
        duration: 1200,
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>