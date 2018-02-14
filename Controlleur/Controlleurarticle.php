<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 6/26/17
 * Time: 1:40 PM
 */

include_once '../Modele/Article.php';

if(isset($_POST['toutmeuble']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichetype('meuble');
    if ($tableau != null) {

        foreach ($tableau as $row) {

                $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                <a href='product.php?idproduct=".$row->getId()."' title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img  src='http://devpay.biz/dev/" . $row->getImage() . "' alt='Product Image'>
                                                </a>
                                                <span class='product-label'></span>
                                                <a href='#' class='btn-quick-view'> Voir details</a>

                                                <div class='product-action'>
                                                    <a href='#' class='btn-product btn-wishlist' title='Add to Wishlist'>
                                                        <i class='icon-product icon-heart'></i>
                                                    </a>
                                                    <a href='#' class='btn-product btn-add-NOS MARQUES' title='Voir details'>
                                                        <i class='icon-product icon-bag'></i>
                                                        <span>Voir details</span>
                                                    </a>
                                                    <a href='#' class='btn-product btn-compare' title='Add to Compare'>
                                                        <i class='icon-product icon-bar'></i>
                                                    </a>
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                            </div><!-- Endd .product-price-container -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-item -->";


        }




    }
    echo $data;


}




if(isset($_POST['toutmoteur']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichetype('groupe');
    if ($tableau != null) {

        foreach ($tableau as $row) {


                $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img  src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                                <span class='product-label'></span>
                                                <a href='#' class='btn-quick-view'> Voir details</a>

                                                <div class='product-action'>
                                                    <a href='#' class='btn-product btn-wishlist' title='Add to Wishlist'>
                                                        <i class='icon-product icon-heart'></i>
                                                    </a>
                                                    <a href='#' class='btn-product btn-add-NOS MARQUES' title='Voir details'>
                                                        <i class='icon-product icon-bag'></i>
                                                        <span>Voir details</span>
                                                    </a>
                                                    <a href='#' class='btn-product btn-compare' title='Add to Compare'>
                                                        <i class='icon-product icon-bar'></i>
                                                    </a>
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                            </div><!-- Endd .product-price-container -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-item -->";


        }




    }
    echo $data;


}




if(isset($_POST['toutmenager']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichetype('menager');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img  src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                                <span class='product-label'></span>
                                                <a href='#' class='btn-quick-view'> Voir details</a>

                                                <div class='product-action'>
                                                    <a href='#' class='btn-product btn-wishlist' title='Add to Wishlist'>
                                                        <i class='icon-product icon-heart'></i>
                                                    </a>
                                                    <a href='#' class='btn-product btn-add-NOS MARQUES' title='Voir details'>
                                                        <i class='icon-product icon-bag'></i>
                                                        <span>Voir details</span>
                                                    </a>
                                                    <a href='#' class='btn-product btn-compare' title='Add to Compare'>
                                                        <i class='icon-product icon-bar'></i>
                                                    </a>
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                            </div><!-- Endd .product-price-container -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-item -->";


        }




    }
    echo $data;


}





if(isset($_POST['toutsolaire']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichetype('solaire');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img  src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                                <span class='product-label'></span>
                                                <a href='#' class='btn-quick-view'> Voir details</a>

                                                <div class='product-action'>
                                                    <a href='#' class='btn-product btn-wishlist' title='Add to Wishlist'>
                                                        <i class='icon-product icon-heart'></i>
                                                    </a>
                                                    <a href='#' class='btn-product btn-add-NOS MARQUES' title='Voir details'>
                                                        <i class='icon-product icon-bag'></i>
                                                        <span>Voir details</span>
                                                    </a>
                                                    <a href='#' class='btn-product btn-compare' title='Add to Compare'>
                                                        <i class='icon-product icon-bar'></i>
                                                    </a>
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                            </div><!-- Endd .product-price-container -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-item -->";

        }


    }
    echo $data;


}


if(isset($_POST['toutelectro']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichetype('electro');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                                <span class='product-label'></span>
                                                <a href='#' class='btn-quick-view'> Voir details</a>

                                                <div class='product-action'>
                                                    <a href='#' class='btn-product btn-wishlist' title='Add to Wishlist'>
                                                        <i class='icon-product icon-heart'></i>
                                                    </a>
                                                    <a href='#' class='btn-product btn-add-NOS MARQUES' title='Voir details'>
                                                        <i class='icon-product icon-bag'></i>
                                                        <span>Voir details</span>
                                                    </a>
                                                    <a href='#' class='btn-product btn-compare' title='Add to Compare'>
                                                        <i class='icon-product icon-bar'></i>
                                                    </a>
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                            </div><!-- Endd .product-price-container -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-item -->";

        }


    }
    echo $data;


}


if(isset($_POST['vedette']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::afficheapercu('vedette');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " 
                                     <div class='product col-lg-3'  style='height:255px'>
                                            <div class='banner banner-image'>
                                            <a href='product.php?idproduct=".$row->getId()."'>
                                                <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage()."' alt='Banner'>
                                            </a>

                                            <div class='wanted-banner-content'>
                                                <h4>CDF<span>".$row->getPrix()."</span></h4>
                                            </div><!-- End .wanter-banner-content -->
                                        </div>
                              
                                </div><!-- End .product -->";
        }


    }
    echo $data;


}

if(isset($_POST['apercumeuble']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::afficheapercu('apercumeuble');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " 
                                   <div class='product col-lg-6'  style='height:255px'>
                                            <div class='banner banner-image'>
                                            <a href='frigo.php'>
                                                <img src='http://devpay.biz/dev/" . $row->getImage(). "' alt=\"Banner\">
                                            </a>

                                            <div class='wanted-banner-content'>
                                                <h4>CDF<span>".$row->getPrix()."</span></h4>
                                            </div><!-- End .wanter-banner-content -->
                                        </div>
                              
                                </div><!-- End .product -->";
        }


    }
    echo $data;


}




if(isset($_POST['tout']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichetout();
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}

//batterie

if(isset($_POST['batterie']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('solaire','batterie');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}
// lampe


if(isset($_POST['lampe']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('solaire','lampe');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}

//convertisseur

if(isset($_POST['convertisseur']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('solaire','convertisseur');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}

//fils electriques


if(isset($_POST['cable']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('solaire','cable');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}

//stabilisateur

if(isset($_POST['stabilisateur']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('solaire','stabilisateur');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}

//panneau


if(isset($_POST['panneau']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('solaire','panneau');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}

//indefini
if(isset($_POST['indefini']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('solaire','indefini');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}




//indefinielectro
if(isset($_POST['indefinielectro']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('electro','indefini');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}

//tele
if(isset($_POST['tele']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('electro','tele');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}


//sonorisation
if(isset($_POST['sonorisation']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('electro','sonorisation');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}


//lecteurdvd
if(isset($_POST['lecteurdvd']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('electro','lecteurdvd');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}


//table
if(isset($_POST['table']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('meuble','table');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}


//salle
if(isset($_POST['salle']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('meuble','salle');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}


//chaise

if(isset($_POST['chaise']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('meuble','chaise');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img  src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}



//likevitrine
if(isset($_POST['likevitrine']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('meuble','likevitrine');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}


//likevitrine
if(isset($_POST['chambre']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('meuble','chambre');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}





//indefinimeuble
if(isset($_POST['indefinimeuble']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('meuble','indefini');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}


//likefrigo
if(isset($_POST['likefrigo']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('menager','likefrigo');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}




//clim
if(isset($_POST['clim']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('menager','clim');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}


//cuisine
if(isset($_POST['cuisine']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('menager','cuisine');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}

//indefinimenager
if(isset($_POST['indefinimenager']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('menager','indefini');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}

//indefinigroupe
if(isset($_POST['indefinigroupe']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('groupe','indefini');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}


//electrogene
if(isset($_POST['groupe']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesoustype('groupe','electrogene');
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                     
                                                <div class='product-action'>
                                    
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a><br/>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                              
                                           
                                            </div><!-- Endd .product-price-container -->
                                                        
                                        
                                        </div><!-- End .product -->
                            
                                    </div><!-- End .product-item -->
                                  
                                    
                                    ";

        }


    }
    echo $data;


}





if(isset($_POST['update']))
{



    Article::updateprixdesi($_POST['id'],$_POST['prix'],$_POST['designation'],$_POST['type'],$_POST['soustype']);

}

if(isset($_POST['idart']))
{


    $tableau=array();
    $data =null;
    $tableau = Article::afficheId($_POST['id']);
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data.=$row->getDesignation().';'.$row->getPrix().';'.$row->getImage().';'.utf8_encode($row->getDetails());


        }


    }

    echo $data;


}

if(isset($_POST['searchdata']))

{

    $tableau=array();
    $data =null;
    $tableau = Article::affichesearch($_POST['search']);
    if ($tableau != null) {

        foreach ($tableau as $row) {


            $data = $data . " <div class='product-item'>
                                        <div class='product'>
                                            <figure class='product-image-container'>
                                                 <a href='product.php?idproduct=".$row->getId()."'  title='" . $row->getDesignation() . "' class='product-image-link'>
                                                    <img style='height:250px' src='http://devpay.biz/dev/" . $row->getImage(). "' alt='Product Image'>
                                                </a>
                                                <span class='product-label'></span>
                                                <a href='#' class='btn-quick-view'> Voir details</a>

                                                <div class='product-action'>
                                                    <a href='#' class='btn-product btn-wishlist' title='Add to Wishlist'>
                                                        <i class='icon-product icon-heart'></i>
                                                    </a>
                                                    <a href='#' class='btn-product btn-add-NOS MARQUES' title='Voir details'>
                                                        <i class='icon-product icon-bag'></i>
                                                        <span>Voir details</span>
                                                    </a>
                                                    <a href='#' class='btn-product btn-compare' title='Add to Compare'>
                                                        <i class='icon-product icon-bar'></i>
                                                    </a>
                                                </div><!-- End .product-action -->
                                            </figure>
                                            <h3 class='product-title'>
                                                <a href='product.php'>" . $row->getDesignation() . "</a>
                                            </h3>
                                            <div class='product-price-container'>
                                                <span class='product-price'>" . $row->getPrix() . " CDF</span>
                                            </div><!-- Endd .product-price-container -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-item -->";

        }


    }
    echo $data;


}