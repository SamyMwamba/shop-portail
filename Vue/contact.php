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
                            <div class="page-header text-center">
                                <h1>Contactez-nous</h1>
                                <p>Restez en contact avec les Ets Dev</p>
                            </div><!-- End .page-header -->

                            <div class="mb20"></div><!-- margin -->

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="contact-info-box">
                                        <img src="assets/images/icon-pin.png" alt="Pin">
                                        <h3>Address</h3>

                                        <address>
                                            <span>20 AV Maniema</span>
                                            <span>Lubumbashi,RDC</span>
                                            <span></span>
                                        </address>
                                    </div><!-- End .contact-info-box -->
                                </div><!-- End .col-sm-4 -->
                                <div class="col-sm-4">
                                    <div class="contact-info-box">
                                        <img src="assets/images/icon-mobile.png" alt="Pin">
                                        <h3>TelePhone</h3>
                                        <p><strong>Secretariat :</strong> +1800-123-4567</p>
                                        <p><strong>Direction de vente :</strong> +558 6544 522</p>
                                        <p><strong>Admin du website :</strong> 960 555 4281</p>
                                    </div><!-- End .contact-info-box -->
                                </div><!-- End .col-sm-4 -->
                                <div class="col-sm-4">
                                    <div class="contact-info-box">
                                        <img src="assets/images/icon-email.png" alt="Pin">
                                        <h3>Email</h3>
                                        <p><a href="mailto:#">info@devsolaire.com</a></p>
                                        <p><a href="mailto:#">secretariat@devsolaire.com</a></p>
                                        <p><a href="mailto:#">admin@devsolaire.com</a></p>
                                    </div><!-- End .contact-info-box -->
                                </div><!-- End .col-sm-4 -->
                            </div><!-- End .row -->

                            <div class="mb35 mb20-sm mb10-xs"></div><!-- margin -->

                            <div class="title-group text-center">
                                <h2 class="title">Envoyez un Message</h2>
                                <p class="title-desc">envoyez-nous un Message</p>
                            </div><!-- End .title-group -->

                                <div class="row">
                                	<div class="col-sm-6">
                                		<div class="form-group">
		                                    <label>Prenom*</label>
		                                    <input type="text" class="form-control" required id="prenom">
		                                </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>

                                        <div class="form-group">
                                            <label>Telephone*</label>
                                            <input type="text" class="form-control" required id="telephone">
                                        </div>
                                        <!-- End .form-group -->
                                	</div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Message*</label>
                                            <textarea cols="30" rows="6" class="form-control" required id="message"></textarea>
                                        </div><!-- End .form-group -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <div class="clearfix text-right">
                                    <button id="btnsendmes"  class="btn btn-accent min-width"> Envoyez Message</button>
                                </div><!-- End .clearfix -->


                            <div class="title-group text-center">
                                <h2 class="title">Localisation</h2>
                                <p class="title-desc">Localisez via la  Map</p>
                            </div><!-- End .title-group -->

                            <div id="map"></div><!-- map -->
                        </div><!-- End .col-md-9 -->

                        <aside class="col-md-3 col-md-pull-9 sidebar sidebar-DETAILS">
                            <div class="widget widget-box widget-DETAILS-CATEGORIE active">
                                <?php
                                include_once 'menucategorie.php'
                                ?>
                            </div><!-- End .widget -->

                            <div class="widget widget-box widget-DETAILS-filter">
                                <h3 class="widget-title">Filter <a href="#" class="btn-CATEGORIE" role="button">Categories<i class="fa fa-caret-down"></i></a></h3>
                                    
                                    <div class="filter-box">
                                        <h5 class="filter-label">Sort By</h5>

                                    </div><!-- End .filter-box -->

                                    <div class="filter-box">
                                        <h5 class="filter-label">Price <span class="filter-price-text"><span class="filter-price-prefix">$</span><span id="filter-price-range"></span></span></h5>
                                        <div class="price-slider-wrapper">
                                            <div id="price-slider"></div><!-- End #price-slider -->
                                        </div><!-- End .price-slider-wrapper -->
                                    </div><!-- End .filter-box -->

                                    <div class="filter-box">
                                        <h5 class="filter-label">Color</h5>
                                        <div class="row">

                                            <div class="col-xs-6">
                                                <ul class="filter-color-list">

                                                </ul>
                                            </div><!-- End col-xs-6 -->
                                        </div><!-- End row -->
                                    </div><!-- End .filter-box -->


                            </div><!-- End .widget -->

                            <div class="widget widget-banner">
                                <div class="banner banner-image">
                                    <a href="#" title="panneau solaire">
                                        <img src="assets/images/products/solargauche.jpg" alt="Banner name">
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
            

        <!-- End -->
   <?php
   include_once 'footer.php';
   ?>
    </body>
</html>