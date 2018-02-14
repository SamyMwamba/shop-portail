<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 6/15/17
 * Time: 9:11 PM
 */

include "../Controlleur/sessions.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ets Dev Solaire</title>
    <meta name="description" content="Dev solaire, leader en energie solaire au katanga">

    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- Modernizr -->
    <script src="assets/js/modernizr.js"></script>
</head>
<body>
<div id="wrapper">
    <header class="header sticky-header">
        <div class="container">
            <a href="index.php" class="site-logo" title="Ets Dev Solaire">
                <img src="assets/images/logo.png" alt="Logo">
                <span class="sr-only">Ets Dev Solaire</span>
            </a>

            <div class="header-dropdowns">
                <div class="dropdown header-dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">

                        <i class=""></i>
                    </a>
                    <ul class="dropdown-menu">

                    </ul>
                </div><!-- End .dropddown -->

                <div class="dropdown header-dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">

                        <i class=""></i>
                    </a>
                    <ul class="dropdown-menu">

                    </ul>
                </div><!-- End .dropddown -->
            </div><!-- End .header-dropdowns -->

            <div class="search-form-container">
                <a href="#" class="search-form-toggle" title="Toggle Search"><i class="fa fa-search"></i></a>
<form action="produitsearch.php" method="POST">
                    <div class="dropdown search-dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                            TOUTE CATEGORIE
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="solaire.php">Solaire</a></li>
                            <li><a href="electronique.php">Electronique</a></li>
                            <li><a href="meuble.php">Meuble</a></li>
                            <li><a href="menager.php">Menager</a></li>
                        </ul>
                    </div><!-- End .dropddown -->
                    <input  name="search" id="search" type="search" class="form-control" placeholder="rechercher" required>
                    <button type="submit" id="btnsearch" title="Search" class="btn"><i class="fa fa-search"></i></button>
</form>
            </div><!-- End .search-form-container -->

            <ul class="top-links">
                <li><a href="contact.php">CONTACTEZ-NOUS</a></li>
                <li><a href="marque.php">NOS MARQUES</a></li>
                <li><a href="about.php">APROPOS</a></li>
            </ul>


            <a href="#" class="sidemenu-btn" title="Menu Toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div><!-- End .container-fluid -->
    </header><!-- End .header -->

