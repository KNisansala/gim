<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>

<!DOCTYPE html> 
<html lang="en">
    <head>

        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="gim, GIM Genaral Trading & Construction, metals, bricks, sands, building materials, order products, order now">
        <meta name="author" content="" />
        <meta name="robots" content="" />    
        <meta name="description" content="GIM General Trading & Construction was established on 2011, as a general trading company. Our primary focus has been to serve building materials to civil engineering constructions.">

        <!-- FAVICONS ICON -->
        <link rel="icon" href="images/favi-gim.png" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favi-gim.png" />

        <!-- PAGE TITLE HERE -->
        <title>Order | GIM General Trading & Construction </title>

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
        <!-- Order Now -->
        <link href="order-form/style.css" rel="stylesheet" type="text/css"/>
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
                            <h1 class="text-white">Order Now</h1>
                        </div>
                    </div>
                </div>
                <!-- INNER PAGE BANNER END -->

                <!-- BREADCRUMB ROW -->                            
                <div class="bg-gray-light p-tb20">
                    <div class="container">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li>Order Now</li>
                        </ul>
                    </div>
                </div>
                <!-- BREADCRUMB ROW END -->

                <!-- SECTION CONTENT START --> 
                <div class="section-full p-t80 p-b50 border-1">
                    <div class="container">
                        <div class="section-content">
                            <!-- APPLY NOW YOUR SUGGETION -->
                            <div class="p-a15 ">
                                <div class="section-head">
                                    <h4 class="text-uppercase">Order Now</h4>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-square">
                                            <span class="separator-left bg-primary"></span>
                                            <span class="separator-right bg-primary"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="wt-box border-2  bg-black-light text-white p-a30 box">
                                    <!--<form>-->
                                        <div class="form-group">
                                            <label>Name</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user" ></i></span>
                                                <span id="spanName" class="notvalidated" style="display: none;">This field can not be empty</span>
                                                <input type="text" name="txtName" id="txtName" class="form-control"  placeholder="Enter name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <span id="spanEmail" class="notvalidated" style="display: none;">Invalid Email Address</span>
                                                <input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Enter email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                <span id="spanPhone" class="notvalidated" style="display: none;">This field can not be empty</span>
                                                <input type="phone" name="txtPhone" id="txtPhone" class="form-control" placeholder="Enter Phone Number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                                <span id="spanCity" class="notvalidated" style="display: none;">This field can not be empty</span>
                                                <input type="city" name="txtCity" id="txtCity" class="form-control" placeholder="Enter City">
                                            </div>
                                        </div>


                                    <div class="col-md-12 border">
                                        <div class="row product-types">
                                            <?php
                                            $TYPE = new ProductType(NULL);
                                            foreach ($TYPE->all() as $type) {
                                                ?>
                                                <div class="col-md-12 prodct line-space">
                                                    <div class="col-md-8 line-space">
                                                        <div class="form-group">
                                                            <label><?php echo $type['name']; ?></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                                                                <select class="form-control product" type="<?php echo $type['id']; ?>" unit="<?php echo $type['unit']; ?>" multiple>
                                                                    <option value="0"> -- Please Select -- </option>

                                                                    <?php
                                                                    $PRODUCT = new Product(NULL);
                                                                    $products = $PRODUCT->getProductsById($type['id']);
                                                                    foreach ($products as $product) {
                                                                        ?> 
                                                                        <option value="<?php echo $product['id']; ?>" class="option-<?php echo $product['id']; ?>" product="<?php echo $product['name']; ?>"><?php echo $product['name']; ?></option>
                                                                        
                                                                            <?php
                                                                    }
                                                                    ?> 

                                                                </select>
                                                                
                                                                
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="qty-container qty-container-<?php echo $type['id']; ?> col-md-12"></div>
<!--                                                    <div class="col-md-4 qty">
                                                        <div class="form-group">
                                                            <label>Quantity (<?php echo $type['unit']; ?>)</label>
                                                            <div class="input-group">

                                                                <span class="input-group-btn">
                                                                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="qty-<?php echo $type['id']; ?>">
                                                                        <i class="fa fa-minus"></i>
                                                                    </button>
                                                                </span>
                                                                <input name="qty-<?php echo $type['id']; ?>" id="qty-<?php echo $type['id']; ?>" class="form-control input-number" value="0" min="0" max="10000" type="text">
                                                                <span class="input-group-btn">
                                                                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="qty-<?php echo $type['id']; ?>">
                                                                        <i class="fa fa-plus"></i>
                                                                    </button>
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>-->
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
</div>

                                        <div class="row form-group">
                                            <div class="col-sm-6 col-xs-12">
                                                <br>
                                                <label for="comment">Security Code:</label>
                                                <span id="star">*</span> 
                                                <input name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> " type="text">
                                                <span id="capspan"></span> 
                                            </div>   
                                            <div class="col-sm-6 col-xs-12 capmargin "> 
                                                <span><?php include("./order-form/captchacode-widget.php"); ?></span>
                                                <img src="order-form/img/checking.gif" id="checking"/>              
                                            </div>  

                                            <div class="col-xs-12 col-sm-6 ">

<!--                                                <div class="col-sm-4">
                                                    <div class="div-check check1">


                                                    </div>
                                                </div>-->
                                                <div class="col-sm-8 text-right">

                                                </div> 
                                            </div>
                                        </div> 
                                    <!------------------------------------------------------>
                                    
<!--                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><?php echo $type['name']; ?></label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                                                            <select class="form-control" id="product" name="Product" multiple>
                                                                <option> -- Please Select </option>
                                                                <?php
                                                                $PRODUCT = new Product(NULL);
                                                                $products = $PRODUCT->getProductsById($type['id']);
                                                                foreach ($products as $product) {
                                                                    ?> 
                                                                    <option value="<?php echo $product['id']; ?>"><?php echo $product['name']; ?></option>
                                                                    <?php
                                                                }
                                                                ?> 
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>-->
                                    
                                    
                                    
                                    <!------------------------------------------------------>

                                        <button class="site-button " id="btnSubmit" type="submit">Order Now <i class="fa fa-angle-double-right"></i></button>
                                    
                                          <div id="dismessage" align="center" class="msg-success"></div>
                                    <!--</form>-->
                                </div>                    
                            </div>                          
                        </div>
                    </div>
                </div>
                <!-- SECTION CONTENT END -->

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
        <script src="order-form//scripts.js" type="text/javascript"></script>
        <script src="js/order.js" type="text/javascript"></script>



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
