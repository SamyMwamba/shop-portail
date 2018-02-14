<?php

include_once 'header.php';
if(isset($_SESSION['username']))
{

}

else{
    header('Location:404.php');
}
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
                            <div class="banner banner-top " >
                                <img src="assets/images/banners/kitsolaire.png" alt="Banner">
                                <div class="banner-content">
                                    <h2   style="background-color: #dadada;color: #ff7700">COUP D'OEIL SUR NOS<br>KITS SOLAIRES</h2>
                                    <a href="#" class="action-link">DETAILS </a>
                                </div>

                            </div><!-- End .banner -->


                            <div class="category-header">
                                <h1></h1>
                                <ol class="breadcrumb">

                                </ol>
                            </div>

                            <div class="DETAILS-row">
                                <div class="DETAILS-container max-col-4" data-layout="fitRows" id="datatout">

                                        <?php

                                        include_once '../Modele/Article.php';
                                            $tableau=array();
                                            $data =null;
                                            $tableau = Article::affichetout();
                                            if ($tableau != null) {

                                                foreach ($tableau as $row) {


                                                    echo " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                <span  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:260px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </span>
                                          
                                                <div class='product-action'>
                                      
                                            
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <span class='designation'  data-id1=".$row->getId()." contentEditable='true'>" . $row->getDesignation() . "</span>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span data-id1=".$row->getId()." contentEditable='true' class='prix product-price'>" . $row->getPrix() ."</span> <span>FC</span>
                                            </div><!-- Endd .product-price-container -->
                                                    <div class='product-price-container'>
                                                <p data-id1=".$row->getId()." contentEditable='true' class='type'>" . $row->getType() ."</p>
                                                 <p data-id1=".$row->getId()." contentEditable='true' class='subtype'>" . $row->getSubtype() ."</p>

                                            </div><!-- Endd .product-price-container -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-item -->";

                                                }


                                            }




                                        ?>

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