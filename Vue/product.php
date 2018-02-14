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

                            <div class="row">
                                <div class="product-gallery-container">
                                    <div class="product-zoom-wrapper">

                                        <div class="product-zoom-container">
                                        <img class="xzoom prodim" id="product-zoom" src="" data-xoriginal="assets/images/products/single/big/product1.jpg" alt="Zoom image"/>
                                        </div><!-- End .product-zoom-container -->
                                    </div><!-- End .product-zoom-wrapper -->

                                    <div class="product-gallery-wrapper">
                                        <div class="owl-data-carousel owl-carousel product-gallery"
                                            data-owl-settings='{ "items":4, "margin":14, "nav": true, "dots":false }'
                                            data-owl-responsive='{"240": {"items": 2}, "360": {"items": 3}, "768": {"items": 4}, "992": {"items": 3}, "1200": {"items": 4} }'>

                                            <a href="#"  data-image="assets/images/products/single/product1.jpg" data-zoom-image="assets/images/products/single/big/product1.jpg" class="product-gallery-item">
                                                <img  src="assets/images/products/single/thumbs/product1.jpg" alt="product-small-1">
                                            </a>
                                            <a href="#" data-image="assets/images/products/single/product2.jpg" data-zoom-image="assets/images/products/single/big/product2.jpg" class="product-gallery-item">
                                                <img src="assets/images/products/single/thumbs/product2.jpg" alt="product-small-2">
                                            </a>
                                            <a href="#" data-image="assets/images/products/single/product3.jpg" data-zoom-image="assets/images/products/single/big/product3.jpg" class="product-gallery-item">
                                                <img src="assets/images/products/single/thumbs/product3.jpg" alt="product-small-3">
                                            </a>
                                            <a href="#" data-image="assets/images/products/single/product4.jpg" data-zoom-image="assets/images/products/single/big/product4.jpg" class="product-gallery-item">
                                                <img src="assets/images/products/single/thumbs/product4.jpg" alt="product-small-4">
                                            </a>
                                            <a href="#" data-image="assets/images/products/single/product5.jpg" data-zoom-image="assets/images/products/single/big/product5.jpg" class="product-gallery-item">
                                                <img src="assets/images/products/single/thumbs/product5.jpg" alt="product-small-5">
                                            </a>
                                            <a href="#" data-image="assets/images/products/single/product6.jpg" data-zoom-image="assets/images/products/single/big/product6.jpg" class="product-gallery-item">
                                                <img src="assets/images/products/single/thumbs/product6.jpg" alt="product-small-6">
                                            </a>
                                        </div><!-- End .product-gallery -->
                                    </div><!-- End .product-gallery-wrapper -->
                                </div><!-- End .product-gallery-container -->

                                <div class="product-details">
                                    <h2 class="product-title" id="designation"></h2>
                                    
                                    <div class="product-meta-row">
                                        <div class="product-price-container">
                                            <span class="product-price" id="prix"></span><span>FC</span>
                                        </div><!-- Endd .product-price-container -->

                                        <div class="product-ratings-wrapper">
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .ratings-container -->

                                        </div><!-- End .product-ratings-wrapper -->
                                    </div><!-- End .product-meta-row -->
                                    <div class="product-content">
                                        <p id="details"></p>
                                    </div><!-- End .product-content -->


                                    

                                </div><!-- End .product-details -->
                            </div><!-- End .row -->


                            
                            <h3 class="carousel-title">Voir aussi</h3>
                            <div id="datavedette" class="row ">

                            </div><!-- End .owl-data-carousel -->
                            <div class="mb50"></div><!-- margin -->
                        </div><!-- End .col-md-9 -->

                        <aside class="col-md-3 col-md-pull-9 sidebar sidebar-DETAILS">
                            <div class="widget widget-box widget-DETAILS-CATEGORIE active">
                                <h3 class="widget-title">CATEGORIE <a href="#" class="btn-filter" role="button">Filter<i class="fa fa-caret-down"></i></a></h3>

                               <?include_once 'menucategorie.php';?>
                            </div><!-- End .widget -->

                            <div class="widget widget-box widget-DETAILS-filter">
                                <h3 class="widget-title">Filter <a href="#" class="btn-CATEGORIE" role="button">Categories<i class="fa fa-caret-down"></i></a></h3>

                                    <div class="filter-box">
                                        <h5 class="filter-label">Sort By</h5>
                                        <ul class="DETAILS-filter-list">
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Default</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Popularity</a></li>
                                            <li class="active"><a href="#"><i class="fa fa-caret-right"></i>Average Rating</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Newness</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Price: Low to high</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Price: high to Low</a></li>
                                        </ul>
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
                                                    <li>
                                                        <span class="filter-color" style="background-color: #1e73be;"></span>
                                                        <span class="filter-color-text">Blue</span>
                                                    </li>
                                                    <li>
                                                        <span class="filter-color" style="background-color: #c0c0c0;"></span>
                                                        <span class="filter-color-text">Gray</span>
                                                    </li>
                                                    <li>
                                                        <span class="filter-color" style="background-color: #dc9814;"></span>
                                                        <span class="filter-color-text">Orange</span>
                                                    </li>
                                                </ul>
                                            </div><!-- End col-xs-6 -->

                                            <div class="col-xs-6">
                                                <ul class="filter-color-list">
                                                    <li>
                                                        <span class="filter-color" style="background-color: #736751;"></span>
                                                        <span class="filter-color-text">Brown</span>
                                                    </li>
                                                    <li>
                                                        <span class="filter-color" style="background-color: #05ac92;"></span>
                                                        <span class="filter-color-text">Green</span>
                                                    </li>
                                                    <li>
                                                        <span class="filter-color" style="background-color: #fff;"></span>
                                                        <span class="filter-color-text">White</span>
                                                    </li>
                                                </ul>
                                            </div><!-- End col-xs-6 -->
                                        </div><!-- End row -->
                                    </div><!-- End .filter-box -->

                                    <a href="#" class="btn btn-apply btn-block">Apply Filter</a>
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