<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<footer class="site-footer footer-dark">
    <!-- FOOTER BLOCKES START -->  
    <div class="footer-top overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT COMPANY -->
                <div class="col-md-3 col-sm-6">  
                    <div class="widget widget_about">
                        <h4 class="widget-title">About Company</h4>
                        <div class="logo-footer clearfix p-b15">
                            <a href="index.php"><img src="images/GIM-footer.png" width="230" height="67" alt=""/></a>
                        </div>
                        <p>GIM General Trading & Construction was established on 2011,as a general trading company. Our primary forcas has been to serve building materials to civil engineering constructions.</p>
                         
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="widget-title">Product Categories</h4>
                        <?php
                        $PRODUCT_TYPE = ProductType::all();
                        foreach ($PRODUCT_TYPE as $type) {
                            ?>
                            <ul>
                                <li><a href="products.php?id=<?php echo $type['id']; ?>"><?php echo $type['name']; ?></a></li>
                            </ul>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <!-- USEFUL LINKS -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="widget-title">Useful links</h4>
                        <ul>
                            <li><a href="about.php">About</a></li>
                            <li><a href="service.php">Services</a></li>
                            <li><a href="product-type.php">Products</a></li>
                            <li><a href="order.php">Order</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- NEWSLETTER -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_newsletter">
                        <h4 class="widget-title">Newsletter</h4>
                        <div class="newsletter-bx">
                            <form role="search" method="post">
                                <div class="input-group">
                                    <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                    <span class="input-group-btn">
                                        <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- SOCIAL LINKS -->
                    <div class="widget widget_social_inks">
                        <h4 class="widget-title">Social Links</h4>
                        <ul class="social-icons social-square social-darkest">
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3 col-sm-6  p-tb20">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md text-primary">
                            <span class="iconmoon-travel footer-icon"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Address</h5>
                            <p>101/4,Kalalgoda Road,<br>Pannipitiya,Colombo,<br>Sri Lanka</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  p-tb20 ">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix phone-box">
                        <div class="icon-md text-primary">
                            <span class="iconmoon-smartphone-1 footer-icon"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Phone</h5>
                            <p class="m-b0">071-8163391</p>
                            <p>077-7261476</p>
                            011-2560738
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  p-tb20">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix fax-box">
                        <div class="icon-md text-primary">
                            <span class="iconmoon-fax footer-icon"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Fax</h5>
                            <p class="m-b0">FAX: 0112742787</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 p-tb20">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix email-box">
                        <div class="icon-md text-primary">
                            <span class="iconmoon-email footer-icon"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Email</h5>
                            <p class="m-b0">gimtrading.construction@gmail.com</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main"></div>
        <div class="constrot-strip"></div>
        <div class="container p-t30">
            <div class="row">
                <div class="wt-footer-bot-left">
                    <span class="copyrights-text">© 2019 GIM. All Rights Reserved. Designed By Synotec Pvt.Ltd</span>
                </div>
                <div class="wt-footer-bot-right">
                    <ul class="copyrights-nav pull-right"> 
                        <li><a href="javascript:void(0);">Terms  & Condition</a></li>
                        <li><a href="javascript:void(0);">Privacy Policy</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137799993-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137799993-1');
</script>
