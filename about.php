<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c91674d225.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | TomzyInstantPay</title>
   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <style>
        a.about:visited{
            color: lightgreen;
        }
        a.active{
            color: white;
        }
        a.active:hover{
            transition: .5s;
            color: lightgreen;
        }
        #about{
            margin-top: 150px;
        }
        #about-us > h2{
            font-size: 30px;
            font-style: italic;
            color: #30336b;
            text-shadow: 2px 2px lightgreen;
        }
        #about-us > p{
            font-style: italic;
            font-size: 15px;
            font-weight: lighter;
        }
        #write-up{
            font-size: 14px;
            max-width: 100%;
            font-weight: lighter;
        }
        #footer-bg{
           margin-top: 10rem;
       }
        /* overall site media query */
        @media  screen and   (max-width:1024px){
            /* p{font-size: 25px;} */
            hr{display: none}
            /* #footer-bg{
                margin-top: 330px;
            } */
            #help{display: none;}
            .whatsapp-feedback{border-radius: 10; left: 10px}

        }
        @media only screen and  (max-width:768px) {
            hr{display: none;}
            /* p{font-size: 20px;} */
            /* #footer-bg{ margin-top: 150px;} */
        }   
        
    </style>
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
            <li><a href="faq.php" class="contact-us">faq</a></li>
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
        <div class="row" id="about">
            <div class="col-lg-5" id="about-us" data-aos="fade-down">
                <hr style="margin: 0px 200px 20px 0px; color: #30336b;">
                <h2>About Us</h2>
                <p>Why Our customers choose us</p>
            </div> 
            <div class="col-lg-6" id="write-up" data-aos="fade-up">
                <p>At TomzyInstantPay, we’ve been the most reliable, fastest, and most affordable e-currency exchanger since 2010. Our customers can easily sell their cryptocurrency and receive payment directly into their bank accounts without delay
                </p>
                <p>We are a reputable and trusted name in cryptocurrency exchange, known for instant payment of cryptocurrency for small or large orders—with unmatched efficiency. 
                </p>
                <p>At TomzyInstantPay, there are no delays. We pay directly into your bank account upon confirmation of cryptocurrency—just as our name promises..</p>
            </div>
        </div>
    </div>
    <!-- end hero section -->

    <!-- start whatsapp feedback -->
    <div class="get-feedback">
        <a href="#" class="whatsapp-feedback"><i class="fa fa-whatsapp"></i><span id="help"> Message Us</span></a>
    </div>
    <!-- end whatsapp feedback -->

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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init({
            duration:1200,
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>
