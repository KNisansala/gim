<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<!DOCTYPE html>

<html lang="en">
    <head>

        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />    
        <meta name="description" content="" />

        <!-- FAVICONS ICON -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

        <!-- PAGE TITLE HERE -->
        <title>Services | GIM Genaral Trading & Construction </title>

        <!-- MOBILE SPECIFIC -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- BOOTSTRAP STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- FONTAWESOME STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
        <!-- FLATICON STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">
        <!-- ANIMATE STYLE SHEET --> 
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">
        <!-- OWL CAROUSEL STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
        <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
        <!-- MAGNIFIC POPUP STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
        <!-- LOADER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="css/loader.min.css">    
        <!-- MAIN STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- THEME COLOR CHANGE STYLE SHEET -->
        <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">
        <!-- CUSTOM  STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <!-- SIDE SWITCHER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="css/switcher.css">    


        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">


    </head>

    <body id="bg">

        <div class="page-wraper"> 

            <!-- HEADER START -->
            <?php include './header-2.php'; ?>
            <!-- HEADER END -->

            <!-- CONTENT START -->
            <div class="page-content">

                <!-- INNER PAGE BANNER -->
                <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/about-banner.jpg);">
                    <div class="overlay-main bg-black opacity-07"></div>
                    <div class="container">
                        <div class="wt-bnr-inr-entry">
                            <h1 class="text-white">Services</h1>
                        </div>
                    </div>
                </div>
                <!-- INNER PAGE BANNER END -->

                <!-- BREADCRUMB ROW -->                            
                <div class="bg-gray-light p-tb20">
                    <div class="container">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
                <!-- BREADCRUMB ROW END -->

                <!-- WHY CHOOSE US SECTION START  -->
                <div class="section-full bg-gray p-t80 p-b120 bg-no-repeat bg-left-center" >
                    <div class="container">
                        <!-- TITLE START-->

                        <!-- TITLE END-->
                        <div class="section-content no-col-gap">
                            <div class="row">

                                <?php
                                $SERVICE = Service::all();
                                foreach ($SERVICE as $info) {
                                    ?>
                                    <div class="col-md-4 col-sm-6 animate_line">
                                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                            <div class="icon-lg text-primary m-b20">
                                                <img src="upload/service/<?php echo $info['image_name']; ?>" alt="">
                                            </div>
                                            <div class="icon-content service-description">
                                                <h5 class="wt-tilte text-uppercase">
                                                    <?php echo $info['title']; ?>
                                                </h5>
                                                <p><?php echo $info['description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- WHY CHOOSE US SECTION END  --> 


            </div>
            <!-- CONTENT END -->

            <!-- FOOTER START -->
            <?php include './footer.php'; ?>
            <!-- FOOTER END -->

            <!-- BUTTON TOP START -->
            <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

        </div>


        <!-- JAVASCRIPT  FILES ========================================= --> 
        <script type="text/javascript"  src="js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
        <script type="text/javascript"  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

        <script type="text/javascript"  src="js/bootstrap-select.min.js"></script><!-- FORM JS -->
        <script type="text/javascript"  src="js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

        <script type="text/javascript"  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

        <script type="text/javascript"  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
        <script type="text/javascript"  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
        <script type="text/javascript"  src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

        <script type="text/javascript"  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

        <script type="text/javascript"  src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   --> 
        <script type="text/javascript"  src="js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   --> 

        <script type="text/javascript"  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
        <script type="text/javascript"  src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
        <script type="text/javascript"  src="js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->




        <!-- LOADING AREA START ===== -->
        <div class="loading-area">
            <div class="loading-box"></div>
            <div class="loading-pic">
                <div class="loader">
                    <span class="block-1"></span>
                    <span class="block-2"></span>
                    <span class="block-3"></span>
                    <span class="block-4"></span>
                    <span class="block-5"></span>
                    <span class="block-6"></span>
                    <span class="block-7"></span>
                    <span class="block-8"></span>
                    <span class="block-9"></span>
                    <span class="block-10"></span>
                    <span class="block-11"></span>
                    <span class="block-12"></span>
                    <span class="block-13"></span>
                    <span class="block-14"></span>
                    <span class="block-15"></span>
                    <span class="block-16"></span>
                </div>
            </div>
        </div>    
        <!-- LOADING AREA  END ====== -->


    </body>

</html>
