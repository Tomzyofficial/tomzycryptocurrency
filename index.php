<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bitcoin, Ethereum, Bitcoin Cash, Gift cards">
    <meta name="author" content="TomzyInstantPay">
    <meta name="keywords" content="TomzyInstantPay, Bitcoin, Ethereum, Bitcoin Cash, Gift cards">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./aos-master/dist/aos.css">
    <script src="./aos-master/dist/aos.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <title>TomzyInstantPay - HomePage</title>
    <script src="bootstrap/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- loader -->
    <div class="loader_bg">
        <div class="loader"><p>Please Wait...</p></div>
    </div>

    <!-- start nav -->
    <nav>
        <!-- start label, website logo-->
        <a href="index.php" class="website-logo"><span class="site-logo">TIP</span><span id="site-logo">TomzyInstantPay</span></a>
        <!-- end label, website logo-->
        <!-- start navigation -->
        <ul>
            <li><a href="index.php" class="active">home</a></li>
            <li><a href="about.php" class="about">about</a></li>
            <li><a href="rates.php" class="rates">rates</a></li>
            <li><a href="sell.php" class="sell">sell</a></li>
            <li><a href="faq.php" class="contact-us">faq</a></li>
            <li>
                <?php
                    if(isset($_SESSION['u_id'])){
                        echo ' <form action="include/logout.inc.php" method="POST">
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
    <!-- end nav -->

    <!--start hero section -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./pictures/bg-img1.png" class="first-slider">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h5 class="text-capitalize">TomzyInstantPay</h5>
                        <p>Buy and sell cryptocurrency at the best price, no hidden fees, <br> to buy bitcoin instantly.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./pictures/bg-img2.png" class="sec-slider">
                <div class="container">
                    <div class="carousel-caption">
                        <h5 class="text-capitalize">TomzyInstantPay</h5>
                        <p>Bitcoin is an innovative payment network and a new kind of money.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end hero section -->

    <!-- page content -->
    <div class="container">
        <!-- start whatsapp feedback -->
        <div class="get-feedback">
            <a href="#" class="whatsapp-feedback"><i class="fa fa-whatsapp"></i><span id="help"> Message Us</span></a>
        </div>
        <!-- end whatsapp feedback -->
        <div class="values text-center">
            <h2>simple</h2>
            <h2>secure</h2>
            <h2>seamless</h2>
            <p class="good-experience">TomzyInstantPay is here to serve you better, feel free and have a nice experience trading with us!</p>
        </div>
        <!-- start banner vectorimg -->
        <div id="banner-vectorImg" class="row">
            <div class="col-md-4" data-aos="fade-down">
                <img class="img-fluid" src="pictures/cyberSecurity.png">
                <p class="trusted">__Trusted and Secure</p>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <img class="img-fluid" src="pictures/payment.png">
                <p class="fast">__Fast Payment</p>
            </div>
            <div class="col-md-4" data-aos="fade-down">
                <img class="img-fluid" src="pictures/beginnerFriend.png">
                <p class="beginner">__Beginner Friendly</p>
            </div>
        </div> 
        <!-- end banner vectorimg -->
    </div>
    <!-- end page content -->

    <!-- start article side -->
    <div class="grid">
        <div class="counter-section">
            <div class="container">
                <div class="row">
                    <div class="col counter-box">
                        <div class="counter-icon"><i class="fa fa-briefcase"></i></div>
                        <p class="counter">1000</p>
                        <p>COMPLETED TRANSACTIONS</p>
                    </div>
                    <div class="col counter-box">
                    <div class="counter-icon"><i class="fa fa-handshake-o"></i></div>
                        <div class="d-flex"><p class="counter">100</p><b>%</b></div>
                        <p>SUPPORT</p>
                    </div>
                    <div class="col counter-box">
                        <div class="counter-icon"><i class="fa fa-smile-o"></i></div>
                        <p class="counter">1000</p>
                        <p>HAPPY CLIENTS</p>
                    </div>
                    <div class="col counter-box">
                        <div class="counter-icon"><i class="fa fa-globe"></i></div>
                        <p class="counter">4</p>
                        <p>YEARS</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="text" id="tip-tradeworth" data-aos="zoom-in">
            <p>Do you know TomzyInstantPay has traded over $900K worth of bitcoin in 2020? <a href="rates.html" class="btn btn-secondary" id="trade-here">Trade with us <i class="fa fa-hand-o-right"></i></a></p>
        </div> -->
        <!-- start how it works side -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-right">
                    <div id="carousel-fluid" class="carousel slide" data-bs-ride="carousel" ">
                        <h3 style="font-size: 15px;"><i>How it works</i></h3>
                        <div class="carousel-inner">
                            <div class="carousel-item active">     
                                <div class="carousel-text" id="carousel-text">
                                    <p><i>1. Copy Wallet Address</i></p>
                                    <p><i>All you need to do is copy our wallet address and transfer 
                                        cryptocurrency using your cryptocurrency wallet</i>
                                    </p>
                                </div>        
                            </div>
                            <div class="carousel-item">                               
                                <div class="carousel-text" id="carousel-text">
                                    <p><i>2. Input Details</i></p>
                                    <p><i>Fill out the required information in the exchange 
                                        form and send your order</i>
                                    </p>
                                </div>                               
                            </div>
                            <div class="carousel-item">                               
                                <div class="carousel-text" id="carousel-text">
                                    <p><i>3. Get Paid</i></p>
                                    <p><i>Upon verification of your order, we pay equivalent 
                                        amount requested to your bank account</i>
                                    </p>         
                                </div>            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img class="thumb" src="pictures/about-sideImg.png" alt="">
                </div>
            </div>
        </div>
        <!-- end how it works side-->
    </div>
    <!-- end article side -->

    <!-- semi-footer content -->
    <div class="container testimonials">
        <h3>What Our Clients say about us</h3>
        <div class="slideshow">
            <div class="slideshow-item">
                <div class="card shadow">
                    <div class="card-body">
                        <p style="color: purple"><i class="fa fa-star"></i>Anonymous</p>
                        <p>TomzyInstantPay is very fast when it comes to payment 
                            and response, thanks for your awesome services.
                        </p>
                    </div>
                </div>
            </div>
            <div class="slideshow-item">
                <div class="card shadow">
                    <div class="card-body">
                        <p style="color: purple"><i class="fa fa-star"></i>Anonymous</p>
                        <p>It was my friend who told me about TomzyInstantPay, 
                            and I got to trade with them and I have no regrets!                             
                        </p>
                    </div>
                </div>
            </div>
            <div class="slideshow-item">
                <div class="card shadow">
                    <div class="card-body">
                        <p style="color: purple"><i class="fa fa-star"></i>Anonymous</p>
                        <p>I have never seen a platform like TomzyInstantPay, 
                            services is rated 100%. Kuddos to all you do and I will 
                            continue trading with you!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer  -->
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
                        <li><p><i class="fa fa-phone fa-lg" style="color:rgba(104, 151, 167);"></i><span class="phone-number">+234 906 619 4749, <br> +1 (908) 409-1501</span></p></li>
                        <li><p><i class="fa fa-map-marker fa-lg" style="color:rgba(104, 151, 167);"></i><span class="address">Abuja, Nigeria</span></p></li>
                        <li><p><i class="fa fa-envelope fa-lg" style="color:rgba(104, 151, 167);"></i><span class="email-to">tomzyofficial54@gmail.com</span></p></li>
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
                <p>&copy; TomzyInstantPay<span id="footer-year"></span> All Rights Reserved | <a href="privacy.php?tomzyinstantpay=privacy&policy">Privacy Policy</a> 
                </p>
            </div>
        </div>
        <!-- end main footer -->
   
        <!-- back to top -->
        <div class="back-to-top">
            <button onclick="topFunction()" id="mybtn"><i class="fa fa-chevron-up"></i></button>
        </div>
    </div>
    <script src="./bootstrap/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="site-functions.js"></script>
    <script src="counter.js"></script>
    <script>
        AOS.init({
        duration:1200,
        });
    </script>
</body>
</html>