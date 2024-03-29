<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="zxx">


<head>        

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>..:: LIBRARIA ::..</title>

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link href="style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

</head>


<body>

    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="index.php">
                                            <img src="images/libraria-logo-v1.png" alt="LIBRARIA" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="topbar-info">
                                            <a href="tel:0983650209"><i class="fa fa-phone"></i>0983650209</a>
                                            <span>/</span>
                                            <a href="mailto:dammit2525@gmail.com"><i class="fa fa-envelope"></i>dammit2525@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="topbar-links">
                                            <a href="signin.php"><i class="fa fa-lock"></i>Login / Register</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index.php">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="books-media-list-view.php">Books &amp; Media</a>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="blog.php">Blog</a>
                                    </li>
                                    <li class="dropdown"><a href="services.php">Services</a></li>
                                    <li class="dropdown active"><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->

    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Contact Us</h2>
                <span class="underline center"></span>
                <p class="lead">Nói to lên bạn ơi !!!</p>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Contact Us Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="contact-main">
                    <div class="contact-us">
                        <div class="container">
                            <div class="contact-location">
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>địa chỉ ở thư viện chứ ở đâu nữa</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li>địa chỉ ở thư viện chứ ở đâu nữa</li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                        </div>                                                
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>                                                
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>www.libraria.com</li>
                                                <li>support@libraria.com</li>
                                                <li>info@libraria.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a href="http://www.libraria.com/">www.libraria.com </a></li>
                                                <li><a href="mailto:support@libraria.com">support@libraria.com</a></li>
                                                <li><a href="mailto:info@libraria.com">info@libraria.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>                                                
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="contact-area">
                                    <div class="container">
                                        <div class="col-md-5 col-md-offset-1 border-gray-left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-map bg-light margin-left">
                                                        <div class="company-map" id="map"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 border-gray-right">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form bg-light margin-right">
                                                        <h2>Send us a message</h2>
                                                        <span class="underline left"></span>
                                                        <div class="contact-fields">
                                                            <form id="contact" name="contact" action="http://libraria.demo.presstigers.com/contact.html" method="post" >
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text" placeholder="First Name" name="first-name" id="first-name" size="30" value="" aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text" placeholder="Last Name" name="last-name" id="last-name" size="30" value="" aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email" name="email" id="email" size="30" value="" aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text" placeholder="Phone Number" name="phone" id="phone" size="30" value="" aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" placeholder="Your message" id="message" aria-required="true"></textarea>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group form-submit">
                                                                            <input class="btn btn-default" id="submit-contact-form" type="button" name="submit" value="Send Message"  />
                                                                        </div>
                                                                    </div>
                                                                    <div id="success">
                                                                        <span>Your message was sent successfully! Our team will contact you soon.</span>
                                                                    </div>

                                                                    <div id="error">
                                                                        <span>Something went wrong, try refreshing and submitting the form again.</span>
                                                                    </div>
                                                                </div>
                                                            </form> 
                                                        </div>                                                                   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Contact Us Section -->

    <!-- Start: Social Network -->
    <section class="social-network section-padding">
        <div class="container">
            <div class="center-content">
                <h2 class="section-title">Follow Us</h2>
                <span class="underline center"></span>
                <p class="lead">4 more information.</p>
            </div>
            <ul>
                <li>
                    <a class="facebook" href="https://www.facebook.com/Damnguyen2412/" target="_blank">
                        <span>
                            <i class="fa fa-facebook-f"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="https://twitter.com/damnguyen26" target="_blank">
                        <span>
                            <i class="fa fa-twitter"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="google" href="https://mail.google.com/mail/u/0/#inbox" target="_blank">
                        <span>
                            <i class="fa fa-google-plus"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="rss" href="https://github.com/DamNguyen26" target="_blank">
                        <span>
                            <i class="fa fa-github"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="linkedin" href="https://www.instagram.com/_damnguyen26_/" target="_blank">
                        <span>
                            <i class="fa fa-instagram"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="youtube" href="https://www.youtube.com" target="_blank">
                        <span>
                            <i class="fa fa-youtube"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Social Network -->

    <!-- Start: Footer -->
    <footer class="site-footer">
        <div class="container">
            <div id="footer-widgets">
                <div class="row">
                    <div class="col-md-4 col-sm-6 widget-container">
                        <div id="text-2" class="widget widget_text">
                            <h3 class="footer-widget-title">About Libraria</h3>
                            <span class="underline left"></span>
                            <div class="textwidget">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking.
                            </div>
                            <address>
                                <div class="info">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>Hai Bà Trưng, Thành Phố Hà Nội, Việt Nam</span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-envelope"></i>
                                    <span><a href="dammit2525@gmail.com">dammit2525@gmail.com</a></span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-phone"></i>
                                    <span><a href="tel:0983650209">0983650209</a></span>
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 widget-container">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h3 class="footer-widget-title">Quick Links</h3>
                            <span class="underline left"></span>
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="menu">
                                    <li><a href="#">Library News</a></li>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">Meet Our Staff</a></li>
                                    <li><a href="#">Board of Trustees</a></li>
                                    <li><a href="#">Budget</a></li>
                                    <li><a href="#">Annual Report</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                    <div class="col-md-2 col-sm-6 widget-container">
                        <div id="text-4" class="widget widget_text">
                            <h3 class="footer-widget-title">Timing</h3>
                            <span class="underline left"></span>
                            <div class="timming-text-widget">
                                <time datetime="2017-02-13">Mon - Thu: 9 am - 9 pm</time>
                                <time datetime="2017-02-13">Fri: 9 am - 6 pm</time>
                                <time datetime="2017-02-13">Sat: 9 am - 5 pm</time>
                                <time datetime="2017-02-13">Sun: 1 pm - 6 pm</time>
                                <ul>
                                    <li><a href="#">Closings</a></li>
                                    <li><a href="#">Branches</a></li>
                                </ul>
                            </div>
                        </div>			
                    </div>
                    <div class="col-md-4 col-sm-6 widget-container">
                        <div class="widget twitter-widget">
                            <h3 class="footer-widget-title">Latest Tweets</h3>
                            <span class="underline left"></span>
                            <div id="twitter-feed">
                                <ul>
                                    <li>
                                        <p><a href="#">@Libraria</a> Đỉnh của chóp.</p>
                                    </li>
                                    <li>
                                        <p><a href="#">@Libraria</a> Gút Chóp em.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>			
                    </div>
                </div>
            </div>                
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="footer-text col-md-3">
                    </div>
                    <div class="col-md-9 pull-right">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="books-media-list-view.php">Books &amp; Media</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End: Footer -->

    <!-- jQuery Latest Version 1.x -->
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>

    <!-- jQuery Easing -->
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="js/mmenu.min.js"></script>

    <!-- Harvey - State manager for media queries -->
    <script type="text/javascript" src="js/harvey.min.js"></script>

    <!-- Waypoints - Load Elements on View -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- Facts Counter -->
    <script type="text/javascript" src="js/facts.counter.min.js"></script>

    <!-- MixItUp - Category Filter -->
    <script type="text/javascript" src="js/mixitup.min.js"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <!-- Accordion -->
    <script type="text/javascript" src="js/accordion.min.js"></script>

    <!-- Responsive Tabs -->
    <script type="text/javascript" src="js/responsive.tabs.min.js"></script>

    <!-- Responsive Table -->
    <script type="text/javascript" src="js/responsive.table.min.js"></script>

    <!-- Masonry -->
    <script type="text/javascript" src="js/masonry.min.js"></script>

    <!-- Carousel Swipe -->
    <script type="text/javascript" src="js/carousel.swipe.min.js"></script>

    <!-- bxSlider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>

    <!-- Google Map API -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT5k-RhvFSVIuCALkpHhKgQx6SJUd9gpI"></script>

    <!-- Google Map (Custom Style) -->
    <script type="text/javascript" src="js/google.map.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="js/main.js"></script>

</body>


</html>
