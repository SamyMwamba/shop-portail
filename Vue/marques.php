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

                    <ul class="metismenu">
                        <li><a href="index.php">ACCUEIL</a></li>

                        <li>
                            <a href="#" aria-expanded="false">DETAILS <span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="category.html">CATEGORIE</a></li>
                                <li><a href="contact.php">CONTACTEZ-NOUS</a></li>

                            </ul>
                        </li>


                        <li><a href="contact.php">Contactez-nous</a></li>
                        <li><a href="apropos.html">QUI SOMMES-NOUS!</a></li>
                    </ul>
                </div><!-- End .sidemenu-wrapper -->
            </aside><!-- End .sidemenu -->

            <div class="sidemenu-overlay"></div><!-- End .sidemenu-overlay -->
            
            <div class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <div class="page-header portfolio-header text-center">
                                <h1>The Writer</h1>
                                <p>Brand</p>
                                <ul class="pager">
                                    <li class="previous"><a href="#" title="Previous Project"><i class="fa fa-angle-left"></i>Previous</a></li>
                                    <li class="next"><a href="#" title="Next Project">Next<i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div><!-- End .page-header -->

                            <figure class="single-portfolio-media">
                                <img src="assets/images/portfolio/single/item1.jpg" alt="Portfolio Image">
                            </figure><!-- Endd .sşngle-portfolio-media -->

                            <div class="single-portfolio-meta">
                                <div class="single-portfolio-info">
                                    <label>Client:</label><a href="#">Dev DESIGNS</a>
                                </div>
                                <a href="# " class="btn btn-website"  target="_blank" role="button">LAUNCH WEBSITE</a>
                            </div>

                            <div class="single-portfolio-content">
                                <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis laoreet cursus. Cras nec condimentum dolor. Ut mi justo, dictum vitae sem elementum, sollicitudin egestas mauris. Aenean facilisis, lectus nec tempus consequat, risus tortor interdum nisl, in tincidunt lectus eros vitae tellus.</p>
                            </div><!-- End .single-portfolio-content -->

                            <div class="owl-data-carousel owl-carousel related-projects-carousel"
                            data-owl-settings='{ "items":3, "nav": false, "dots":true }'
                            data-owl-responsive='{ "480": {"items": 2}, "768": {"items": 3}, "992": {"items": 3} }'>
                                <div class="portfolio-item">
                                    <figure>
                                        <img class="owl-lazy" src="assets/images/blank.png" data-src="assets/images/portfolio/item4.jpg" alt="Portfolio Image">
                                        <a href="marques.php" class="btn-detail" role="button">View Details</a>
                                    </figure>
                                </div><!-- End portfolio-item -->

                                <div class="portfolio-item">
                                    <figure>
                                        <img class="owl-lazy" src="assets/images/blank.png" data-src="assets/images/portfolio/item5.jpg" alt="Portfolio Image">
                                        <a href="marques.php" class="btn-detail" role="button">View Details</a>
                                    </figure>
                                </div><!-- End portfolio-item -->

                                <div class="portfolio-item">
                                    <figure>
                                        <img class="owl-lazy" src="assets/images/blank.png" data-src="assets/images/portfolio/item6.jpg" alt="Portfolio Image">
                                        <a href="marques.php" class="btn-detail" role="button">View Details</a>
                                    </figure>
                                </div><!-- End portfolio-item -->

                                <div class="portfolio-item">
                                    <figure>
                                        <img class="owl-lazy" src="assets/images/blank.png" data-src="assets/images/portfolio/item7.jpg" alt="Portfolio Image">
                                        <a href="marques.php" class="btn-detail" role="button">View Details</a>
                                    </figure>
                                </div><!-- End portfolio-item -->
                            </div><!-- End .owl-data-carousel -->
                        </div><!-- End .col-md-9 -->

                        <aside class="col-md-3 col-md-pull-9 sidebar sidebar-DETAILS">
                            <div class="widget widget-box widget-DETAILS-CATEGORIE active">
                                <h3 class="widget-title">CATEGORIE <a href="#" class="btn-filter" role="button">Filter<i class="fa fa-caret-down"></i></a></h3>

                                <ul class="DETAILS-CATEGORIE-list accordion">
                                    <li>
                                        <a href="category.html">Solaire</a>
                                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-1" aria-expanded="false" aria-controls="accordion-ul-1"><span class="accordion-icon"></span></button>

                                        <ul class="collapse" id="accordion-ul-1" aria-expanded="false">
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Women Clothes</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Men Clothes</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Shoes</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category.html">Electronique </a>
                                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-2" aria-expanded="false" aria-controls="accordion-ul-2"><span class="accordion-icon"></span></button>

                                        <ul class="collapse" id="accordion-ul-2" aria-expanded="false">
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Computers</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Mobile Phones</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Tablets</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category.html">MEUBLE&amp; BUREAU</a>
                                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-3" aria-expanded="false" aria-controls="accordion-ul-3"><span class="accordion-icon"></span></button>

                                        <ul class="collapse" id="accordion-ul-3" aria-expanded="false">
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Bedding</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Meuble</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>MEUBLEDecor</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Kitchen, Dining &amp; Bar</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Gardening Supplies</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Outdoor Lightning</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category.html">ELECTROMENAGERS</a>
                                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-4" aria-expanded="false" aria-controls="accordion-ul-4"><span class="accordion-icon"></span></button>

                                        <ul class="collapse" id="accordion-ul-4" aria-expanded="false">
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category.html">Sports Equipement</a>
                                    </li>
                                    <li>
                                        <a href="category.html">Moteurs Products</a>
                                    </li>
                                    <li>
                                        <a href="category.html">Dev Pages</a>
                                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-5" aria-expanded="false" aria-controls="accordion-ul-5"><span class="accordion-icon"></span></button>

                                        <ul class="collapse" id="accordion-ul-5" aria-expanded="false">
                                            <li><a href="about.php"><i class="fa fa-caret-right"></i>About</a></li>
                                            <li><a href="marque.php"><i class="fa fa-caret-right"></i>Portfolio 4 Columns</a></li>
                                            <li><a href="portfolio-3col.html"><i class="fa fa-caret-right"></i>Portfolio 3 Columns</a></li>
                                            <li><a href="portfolio-2col.html"><i class="fa fa-caret-right"></i>Portfolio 2 Columns</a></li>
                                            <li><a href="marques.php"><i class="fa fa-caret-right"></i>Portfolio Post</a></li>
                                            <li><a href="blog.html"><i class="fa fa-caret-right"></i>Blog</a></li>
                                            <li><a href="single.html"><i class="fa fa-caret-right"></i>Blog Post</a></li>
                                            <li><a href="contact.php"><i class="fa fa-caret-right"></i>Contact</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"> Theme</a>
                                    </li>
                                </ul>
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

                            <div class="widget widget-testimonial">
                                <div class="owl-data-carousel owl-carousel"
                                data-owl-settings='{ "items":1, "margin": 5, "loop": false, "nav": false, "dots":true }'>
                                    <div class="testimonial">
                                        <img src="assets/images/testimonials/user1.png" alt="User image">
                                        <h5 class="testimonial-owner">John Smith</h5>
                                        <div class="testimonial-owner-position">Ceo &amp; Founder Okler</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div><!-- End .testimonial -->

                                    <div class="testimonial">
                                        <img src="assets/images/testimonials/user2.png" alt="User image">
                                        <h5 class="testimonial-owner">Susan Smith</h5>
                                        <div class="testimonial-owner-position">CPO &amp; Co-Founder</div>
                                        <p>Distinctio, corrupti nesciunt aperiam, eaque, reiciendis dummy consequunt.</p>
                                    </div><!-- End .testimonial -->

                                    <div class="testimonial">
                                        <img src="assets/images/testimonials/user3.png" alt="User image">
                                        <h5 class="testimonial-owner">David Lee</h5>
                                        <div class="testimonial-owner-position">Senior Developer</div>
                                        <p>Adipisci esse nobis alias magnam dolores debitis non odit porro nost.</p>
                                    </div><!-- End .testimonial -->
                                </div><!-- End .owl-data-carousel -->
                            </div><!-- End .widget -->
                        </aside><!-- End .col-md-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .main -->
            
           <?php

include_once 'footer.php';
?>