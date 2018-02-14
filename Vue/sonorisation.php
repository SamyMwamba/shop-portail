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
        include "sidemenu.php";
        ?>
    </div><!-- End .sidemenu-wrapper -->
</aside><!-- End .sidemenu -->

<div class="sidemenu-overlay"></div><!-- End .sidemenu-overlay -->

<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="banner banner-top">
                    <img style="height: 350px" src="assets/images/banners/teleeteelc.png" alt="Banner">
                    <div class="banner-content">
                        <h2   style="background-color: #dadada;color: #ff7700">COUP D'OEIL SUR NOS<br>APPAREILS ELECTRONIQUES</h2>
                        <a href="#" class="action-link">DETAILS </a>
                    </div>
                </div><!-- End .banner -->

                <div class="category-header">
                    <h1>TELE ET ELECTRONIQUE</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">TELE ET ELECTRONIQUE</a></li>
                        <li class="active">SONORISATION</li>
                    </ol>
                </div>

                <div class="DETAILS-row">
                    <div class="DETAILS-container max-col-4" data-layout="fitRows" id="datasonorisation">



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
<script>
    $('document').ready(function()
        {

            $.ajax({

                url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
                method: 'POST',
                data: {sonorisation: 'sonorisation'},
                success: function (result) {
                    $("#datasonorisation").append(result);

                }
            });
        }
    )
</script>
