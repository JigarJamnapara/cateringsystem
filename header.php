<?php
$mainurl = "http://localhost/MVC/flatter/";
$baseurl = "http://localhost/MVC/flatter/assets/";
?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>flatter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseurl; ?>img/logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/nice-select.css">
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/slicknav.css">
    <link rel="stylesheet" href="<?php echo $baseurl; ?>css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="mein_menu_list" id="navigation">
                                    <li><a href="#"  data-toggle="modal" data-target="#log">Log In</a></li>
                                        <li><a href="<?php echo $mainurl; ?>about">About</a></li>
                                        <li><a href="<?php echo $mainurl; ?>service">Services</a></li>
                                        <li><a href="<?php echo $mainurl; ?>menu">menu</a></li>
                                        <li><a href="<?php echo $mainurl; ?>gallery">gallery</a></li>
                                        <div class="logo-img d-none d-lg-block">
                                            <a href="<?php echo $mainurl; ?>">
                                                <img src="<?php echo $baseurl; ?>img/logo.png" alt="">
                                            </a>
                                        </div>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo $mainurl; ?>blog">blog</a></li>
                                                <li><a href="<?php echo $mainurl; ?>single-blog">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo $mainurl; ?>elements">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo $mainurl; ?>contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="custom_order">
                                <a href="#" class="boxed_btn_white">Custom Order</a>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                            <a href="index.html">
                                <img src="<?php echo $baseurl; ?>img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->


    <!-- JS here -->
    <script src="<?php echo $baseurl; ?>js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/popper.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/isotope.pkgd.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/ajax-form.js"></script>
    <script src="<?php echo $baseurl; ?>js/waypoints.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/jquery.counterup.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/scrollIt.js"></script>
    <script src="<?php echo $baseurl; ?>js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/wow.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/nice-select.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/jquery.slicknav.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/plugins.js"></script>

    <!--contact js-->
    <script src="<?php echo $baseurl; ?>js/contact.js"></script>
    <script src="<?php echo $baseurl; ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/jquery.form.js"></script>
    <script src="<?php echo $baseurl; ?>js/jquery.validate.min.js"></script>
    <script src="<?php echo $baseurl; ?>js/mail-script.js"></script>

    <script src="<?php echo $baseurl; ?>js/main.js"></script>

</body>

</html>