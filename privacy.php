<?php
session_start();

if(isset($_GET['tomzyinstantpay'])) {
    $get = $_GET['tomzyinstantpay'];
}
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
    <link rel="stylesheet" href="./aos-master/dist/aos.css">
    <script src="./aos-master/dist/aos.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Privacy Policy | TomzyInstantPay</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  
    <style>
        a.active{
            border: 1px solid transparent;
            color: white;
        }
        a.active:hover{
            
            transition: .5s;
            color: lightgreen;
        }
        .header-text h2{
            font-size: 30px;
            margin-top: 50px;
            font-style: italic;
            color: #30336b;
            text-shadow: 2px 2px lightgreen;
        }
        .column-body{margin-top: 100px;}
        .content-details p a{text-decoration: none; transition: .4s; font-weight: 400;}
        #footer-bg{margin-top: 10rem;}
    </style>
</head>
<body>

    <!-- start nav -->
    <nav>
        <!-- start label, website logo-->
        <a href="index.php" class="website-logo"><span class="site-logo">TIP</span>
            <span id="site-logo">TomzyInstantPay</span>
        </a>
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
        </div>
        </ul>
        <label id="icon">
          <i class="fa fa-bars"></i>
        </label>
    </nav>

     <!-- start whatsapp feedback -->
     <div class="get-feedback">
        <a href="#" class="whatsapp-feedback"><i class="fa fa-whatsapp"></i><span id="help"> Message Us</span></a>
    </div>
    <!-- site privacy contents -->
    <div class="container">
        <div class="column">
            <div class="header-text">
                <h2>Privacy Policy</h2>
                <p><small>This Privacy Policy best describe how your information is 
                    collected whenever you visit or make a purchase from TomzyInstantPay.
                    </small>
                </p>
            </div>
            <div class="column-body">
                <p>Privacy is of utmost importance to TomzyInstantPay.
                    We recognise the significance of protecting information which is stored 
                    on our server or network or is intended to be stored on our server or 
                    network and which relates to an individual. The data we protect are the “Personal Data” 
                    which is any information relating to an identified person, sometimes called a data subject, 
                    and have made protecting the privacy and the confidentiality of Personal Data a fundamental 
                    component of the way we do business. This Privacy Policy informs you of the ways we work to 
                    ensure privacy and the confidentiality of Personal Data and describes the information we 
                    gather, how we use those Personal Data and the circumstances under which we disclose such 
                    information to third-parties.
                </p>
                <div class="content-details">
                    <h4>Contents</h4>
                    <p><a href="#collection">Collection of Personal Data</a></p>
                    <p><a href="#security">Security of Your Personal Data</a></p>
                    <p><a href="#usage">Use of Personal Data</a></p>
                    <p><a href="#disclosure">Disclosure of Personal Data</a></p>
                    <p><a href="#retention">Retention of Personal Data</a></p>
                    <p><a href="#rights">Your Rights</a></p>
                    <p><a href="#acceptance">Acceptance</a></p>
                    <p><a href="">Questions and Compliants</a></p>
                </div>
                <div class="column-reverse">
                    <h4 id="collection">Collection of Personal Data</h4>
                    <p>
                        Information you may provide to us: <br>You may give us information about you by filling in 
                        forms on our website or by contacting with us by phone, email or otherwise. 
                        This includes information you provide when you register to use the Services and when you 
                        report a problem with the website. With regard to each of your visits to our website, 
                        we automatically collect your Login Information such as "Full name, Residential address, 
                        Contact details, Bank account information", Transaction Information and Compliants. <br>
                        We may collect Information from you in order to meet regulatory obligations around Know Your Customers (KYC)
                        and Anti Money Laundary (AML).
                    </p>
                    <h4 id="security">Security of Your Personal Data</h4>
                    <p>
                        At TomzyInstantPay, security is of very importance to us. We ensure all our customers data are 
                        secure by carrying regular implement up-to-date technical measures when processing your Personal Data
                    </p>
                    <h4 id="usage">Use of Personal Data</h4>
                    <p>
                        We use your Personal Data to: <br> 
                        <li>Understand and strive to meet your needs and preferences in using our Services;</li>
                        <li>Develop and enhance our existing services and product offerings;</li>
                        <li>Carry out actions on which we have received your consent;</li>
                        <li>Prevent and investigate fraudalent and other criminal activities</li>
                    </p>
                    <h4 id="storage">Disclosure of Personal Data</h4>
                    <p>
                        As a part of providing you with our products and services, and for the management and operations of these products 
                        and services, and to comply with legal and regulatory requirements, we may be required or need to disclose information
                        about you and your account with us to the following third parties: <br>
                        <li>Companies and organisations that act as our agents, affiliates and/or professional advisers;</li>
                        <li>Companies and organizations that assist us in processing transactions that you have requested;</li>
                        <li>Law enforcement, regulatory and governmental agencies;</li>
                        <li>Your advisers without limitation to accountants, lawyers, financial advisers or other professional advisers authorised by you;</li>
                        <li>any other person notified by you as authorised to give instructions or to use the accounts, facilities, products or services 
                            on your behalf, usually located outside your country.
                        </li>
                    </p>
                    <h4 id="retention">Retention of Personal Data</h4>
                    <p>Personal Data collected whenever you access our website is stored, we will maintaine 
                        this informations unless and untill you ask us to delete this information.
                    </p>
                    <h4 id="rights">Your Rights</h4>
                    <p>You have the right to demand that your Personal Data be Corrected, updated, or 
                        deleted. If you would want to exercise this "Rights" kindly contact us via the contact page. 
                    </p>
                    <h4 id="acceptance">Acceptance</h4>
                    <p>
                        By using the Services, you signify your agreement to this Privacy Policy. As TomzyInstantPay is entitled  to change or amend this Privacy Policy at 
                        any time. If we make any changes to this Privacy Policy, the revised Policy will be posted here 
                        and we will notify our users at least 14 days prior to the changes taking effect so that you are always 
                        aware of what information we collect, how we use it and under what circumstances we disclose it. 
                        Please check this page frequently to see any updates or changes to this Privacy Policy.
                    </p>
                    <h4 id="questions">Questions</h4>
                    <p>In case of any compliant about this Privacy Policy, our Products and services,
                        please always feel free to contact us as we have 24/7 customer service available
                        to attend to you. 
                    </p>
                </div>
            </div>
        </div>
    </div>

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