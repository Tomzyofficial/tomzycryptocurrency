<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c91674d225.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Rates | TomzyInstantPay </title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="scripts/rate.mjs" type="module" defer></script>

    <style>
        a.rates:visited{
            color: lightgreen;
        }
        a.active{
            color: white;
        }
        a.active:hover{
            transition: .5s;
            color: lightgreen;
        }
        .exchange-rate > h2{
            color: #30336b;
            font-size: 30px;
            margin-top: 50px;
        }
        table{
            margin: auto;
            overflow: auto;
            width: 60%;
        }
       
        th, td{
            font-size: 30px;
            padding: 30px;
             text-align: center;
        
        }
    
        /* start scrolling text */  
       .scroll-left {
            height: 50px;	
            overflow-x: hidden;
            position: relative;
            margin: 0 200px 0 200px;
            background: rgb(76, 104, 136);
            color: #fff;
            border: 1px solid orange;
        }
        .scroll-left p {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            font-size: 20px ;
            line-height: 50px;
            text-align: center;
            transform:translateX(100%);
            animation: scroll-left 15s linear infinite;
        }
            @keyframes scroll-left {
            0%   {
            transform: translateX(100%); 		
            }
            100% {
            transform: translateX(-100%); 
            }
        }
        #footer-bg{
           margin-top: 10rem;
        }

        /*general media query for rates*/
        @media screen and (max-width: 771px){
           .exchange-rate > h2{font-size: 15px; text-align: center;}
           table{
                width: 20% !important;
                margin-top: 100px;
                text-align: center;
            }
            th, td{
                font-size: 13px;
                padding: 6px;
            }
            .scroll-left{
               /* width: 90% !important;*/
                margin: 0 1040px 0 10020px;
                height: 40px;
                margin: 0 !important;
                position: relative;
            }
            .scroll-left p{
                position: absolute;
                width: 100% !important; 
                height: 100% !important;
                font-size: 10px;
            }


        }
        @media  (width: 1024px){
            table{margin-top: 100px;}
            /* #footer-bg{margin-top: 500px} */
       }
        @media only screen and (max-width: 768px){
            .whatsapp-feedback{left: 10px}
            .exchange-rate > h2{font-size: 20px}
            table{
                width: 20% !important; margin-top: 100px;
                clear: both;
                display: table;
                content: "";
        }
            th, td{
                padding: 6px;
                font-size: 13px;
            }
            .scroll-left{
                height: 50px;
                margin-top: 50px !important;
            }
            .scroll-left p{
                font-size: 10px;
             }
        }
        @media (width: 280px){
                #mybtn{width: 12%;}
                *{overflow-x: hidden;}
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
        <div class="exchange-rate text-center text-capitalize">
            <h2>fairest exchange rates</h2>
            <i class="fa fa-bolt fa-lg" aria-hidden="true"></i>
        </div>
       <div>
        <table>
          <tr>
            <th>Country</th>
            <th>BTC</th>
            <th>ETH</th>
            <th>BCH</th>
          </tr>

        </table>
      </div>
        <div class="scroll-left">
            <p id="prices"></p>
        </div>
        
    </div>

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
    <!-- end back to top -->
</body>
</html>