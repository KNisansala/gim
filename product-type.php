<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="construction materials in sri lanka, construction materials suppliers in sri lanka, gim general trading & construction pvt. ltd, gim,   gim general trading & construction, metal suppliers in sri lanka, bricks suppliers in sri lanka, sands suppliers in sri lanka, building materials suppliers in sri lanka">
        <meta name="author" content="" />
        <meta name="robots" content="" />    
        <meta name="description" content="GIM General Trading & Construction was established in 2011, as a general trading company. Our primary focus has been to serve building materials to civil engineering constructions.">

        <!-- FAVICONS ICON -->
        <link rel="icon" href="images/favi-gim.png" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favi-gim.png" />

        <!-- PAGE TITLE HERE -->
        <title>Product | GIM General Trading & Construction </title>

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
        <!-- RESPONSIVE -->
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>


        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">


    </head>

    <body id="bg">

        <div class="page-wraper"> 

            <!-- HEADER START -->
            <?php include './header.php'; ?>
            <!-- HEADER END -->

            <!-- CONTENT START -->
            <div class="page-content">

                <!-- INNER PAGE BANNER -->
                <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/gim-vehicle-banner.gif);">
                    <div class="overlay-main bg-black opacity-07"></div>
                    <div class="container">
                        <div class="wt-bnr-inr-entry">
                            <h1 class="text-white">Products</h1>
                        </div>
                    </div>
                </div>
                <!-- INNER PAGE BANNER END -->

                <!-- BREADCRUMB ROW -->                            
                <div class="bg-gray-light p-tb20">
                    <div class="container">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="./"><i class="fa fa-home"></i> Home</a></li>
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
                <!-- BREADCRUMB ROW END -->

                <!-- SERVICES START  -->         
                <div class="section-full bg-white p-t80 p-b50 scale-bg-top scale-bg-bottom">
                    <div class="container">
                        <!-- IMAGE CAROUSEL START -->


                        <!-- CAROUSEL -->
                        <div class="section-content">
<!--                            <div class="col-md-4 col-sm-4 col-xs-6 col-xs-100pc m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-5.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="javascript:void(0);">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                        <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="products.php">Five Martines</a>
                                            </h4>

                                        </div>
                                        <div class="p-t10">
                                            <button class="site-button  m-r15" type="button">View  <i class="fa fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            
                            <!-------------foreach---------------->
                             <div class="row">
                    <?php
                    $PRODUCT_TYPE = ProductType::all();
                    foreach ($PRODUCT_TYPE as $type) {
                        ?>
                       <div class="col-md-4 col-sm-4 col-xs-6 col-xs-100pc m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="upload/product-type/thumb/<?php echo $type['image_name']; ?>" alt="">
                                        <div class="overlay-bx">
<!--                                            <div class="overlay-icon">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="javascript:void(0);">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                        <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="products.php?id=<?php echo $type['id']; ?>"><?php echo $type['name']; ?></a>
                                            </h4>

                                        </div>
                                        <div class="p-t10">
                                            <a href="products.php?id=<?php echo $type['id']; ?>"><button class="site-button  m-r15" type="button">View  <i class="fa fa-angle-double-right"></i></button></a>
                                        </div>
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
                <!-- SERVICES CONTENT END -->  


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
