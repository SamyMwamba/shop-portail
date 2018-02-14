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
                        <li><a href="index.php">Home</a></li>
                        <li>
                            <a href="#" aria-expanded="false">Pages <span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="contact.php">Contactez-nous</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">DETAILS <span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="category.html">CATEGORIE</a></li>
                                <li><a href="product.html">Product</a></li>
                                <li><a href="NOS MARQUES.html">Shopping NOS MARQUES</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="contact.php">CONTACTEZ-NOUS</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">Portfolio<span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="portfolio-2col.html">Portfolio 2 Col</a></li>
                                <li><a href="portfolio-3col.html">Portfolio 3 Col</a></li>
                                <li><a href="marque.php">Portfolio 4 Col</a></li>
                                <li><a href="marques.php">Portfolio Post</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">Blog<span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single.html">blog Post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contactez-nous</a></li>
                        <li><a href="#"> Dev!</a></li>
                    </ul>
                </div><!-- End .sidemenu-wrapper -->
            </aside><!-- End .sidemenu -->

            <div class="sidemenu-overlay"></div><!-- End .sidemenu-overlay -->
            
            <div class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <div class="banner banner-top">
                                <img src="assets/images/banners/teleeteelc.png" alt="Banner">
                                <div class="banner-content">
                                    <h2 style="background-color: #dadada;color: #ff7700">COUP D'OEIL SUR NOS<br>APPAREILS ELECTRONIQUE</h2>
                                    <a href="#" class="action-link">DETAILS </a>
                                </div>
                            </div><!-- End .banner -->

                            <div class="category-header">
                                <h1></h1>
                                <ol class="breadcrumb">

                                </ol>
                            </div>

                            <div class="DETAILS-row">
                                <div class="DETAILS-container max-col-4" data-layout="fitRows" id="dataelectro">



                                </div><!-- End .DETAILS-container -->
                            </div><!-- End .DETAILS-row -->


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