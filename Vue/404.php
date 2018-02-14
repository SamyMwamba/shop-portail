<?php
include_once 'header.php';
?>

            <aside class="sidemenu">
                <div class="sidemenu-wrapper">
                    <div class="sidemenu-header">
                        <a href="index.php" class="sidemenu-logo">
                            <img src="assets/images/logo.png" alt="logo">
                        </a>
                    </div><!-- End .sidemenu-header -->

                    <?php
                    include_once 'sidemenu.php';
                    ?>
                </div><!-- End .sidemenu-wrapper -->
            </aside><!-- End .sidemenu -->

            <div class="sidemenu-overlay"></div><!-- End .sidemenu-overlay -->
            
            <div class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <div class="error-page text-center">
                                <h1 class="scroll-anim" data-anim="fadeInUp">
                                    404
                                </h1>
                                <h2 class="scroll-anim" data-anim="fadeInUp" data-anim-delay="0.2s">PAGE NOT FOUND!</h2>
                                <p class="scroll-anim" data-anim="fadeInUp" data-anim-delay="0.4s">We're sorry, the page you requested cannot be found. Please go back to MEUBLEpage.</p>
                                <a href="index.php" class="btn btn-accent min-width scroll-anim" data-anim="fadeInUp" data-anim-delay="0.6s">Go Back</a>
                            </div><!-- End .error-page -->
                        </div><!-- End .col-md-9 -->
                        
                        <aside class="col-md-3 col-md-pull-9 sidebar sidebar-DETAILS">
                            <div class="widget widget-box widget-DETAILS-CATEGORIE active">
                                <?php
                                include_once 'menucategorie.php'
                                ?>
                            </div><!-- End .widget -->

                            <div class="widget widget-banner">
                                <div class="banner banner-image">
                                    <a href="#" title="Publicité">
                                        <img src="assets/images/banners/widget-banner.png" alt="Banner name">
                                    </a>
                                </div>
                            </div><!-- End .widget -->

                            <div class="widget widget-newsletter">
                                <h3 class="widget-title">Newsletter</h3>
                                <p>Entrez votre adresse email pour souscrire à notre newsletter</p>

                                <form action="#">
                                    <div class="form-group">
                                        <img src="assets/images/icon-newsletter-email.png" alt="Email">
                                        <input type="email" class="form-control" placeholder="Email Address" required>
                                    </div><!-- End .form-group -->
                                    <input type="submit" value="Souscrire " class="btn btn-block">
                                </form>
                            </div><!-- End .widget -->

                        </aside><!-- End .col-md-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .main -->
            
            <?php
include_once 'footer.php';
?>