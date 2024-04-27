<?php
include("admin/class/VT.php");

ob_start();
session_start();
include("admin/class/pages.php");

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?= $des ?>
    </title>
    <meta name="description" content="Author: AxilTheme, Template: HTML, Category: Blog, Price: $13.00,
    Length: 23 pages">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.svg">
    <link rel="stylesheet" href="assets/css/fonts/icomoon.css">
    <link rel="stylesheet" href="assets/css/vendor/slick/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">


    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">

</head>

<body class="mobilemenu-active">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
    <div id="preloader" class="preloader">
        <div class="loader-wrap">
            <div class="single-box">
                <div class="circle-holder"></div>
                <div class="shadow-holder"></div>
            </div>
            <div class="single-box">
                <div class="circle-holder"></div>
                <div class="shadow-holder"></div>
            </div>
            <div class="single-box">
                <div class="circle-holder"></div>
                <div class="shadow-holder"></div>
            </div>
            <div class="single-box">
                <div class="circle-holder"></div>
                <div class="shadow-holder"></div>
            </div>
        </div>
    </div>

    <a href="#main-wrapper" id="backto-top" class="back-to-top" aria-label="Back To Top">
        <i class="regular-direction-up"></i>
    </a>

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <?php include("inc/header.php") ?>

        <!--=====================================-->
        <!--=       breadcrumb Area Start       =-->
        <!--=====================================-->
        <section class="breadcrumb-wrap-layout1 bg-color-old-lace">
            <div class="container">
                <div class="breadcrumb-layout1">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$adi?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=          Contact Area Start       =-->
        <!--=====================================-->
        <?php include("admin/class/page.php"); ?>


        <!--=====================================-->
        <!--=        Newsletter Area Start      =-->
        <!--=====================================-->
        <?php include("inc/newsletter-area.php") ?>
        <!--=====================================-->
        <!--=         Footer Area Start         =-->
        <!--=====================================-->
        <?php include("inc/footer.php") ?>

    </div>
    <!-- Search Start -->
    <div id="search-trigger" class="search-input-wrap">
        <div class="container">
            <button type="button" class="close">×</button>
            <form class="search-form">
                <input type="search" value="" placeholder="Search" />
                <button type="submit" class="search-btn">
                    <i class="regular-search-02"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Jquery Js -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="assets/js/vendor/jquery.mb.YTPlayer.min.js"></script>
    <script src="assets/js/vendor/theia-sticky-sidebar.min.js"></script>
    <script src="assets/js/vendor/resize-sensor.min.js"></script>


    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>

</html>