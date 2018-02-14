<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 6/15/17
 * Time: 9:12 PM
 */

?>

<footer class="footer">
    <div class="container">
        <div class="info-bar">
            <div class="info-bar-col">
                <h5 class="info-bar-title">LIVRAISON A DOMICILE</h5>
                <p>payez et nous livrons chez vous gratuitement</p>
            </div><!-- End .info-bar-col -->
            <div class="info-bar-col">
                <h5 class="info-bar-title">GARANTIE</h5>
                <p>Nous vous vendons tous nos produits avec une garantie de 3 mois</p>
            </div><!-- End .info-bar-col -->
            <div class="info-bar-col">
                <h5 class="info-bar-title">SUPPORT TECHNIQUE</h5>
                <p>Nos techniciens sont à votre disposition pour l'installation et le depanage</p>
            </div><!-- End .info-bar-col -->
        </div><!-- End .info-bar -->
    </div><!-- End .container -->
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="widget widget-about">
                        <h4 class="widget-title">Contacts</h4>

                        <address>
                            <span>20 AV maniema Lubumbashi</span>
                            <span>RDC</span>
                            <span>+2437895642</span>
                            <a href="mailto:info@devsolaire.com">info@devsolaire.com</a>
                        </address>
                    </div><!-- End .widget -->
                </div><!-- End .col-md-3 -->

                <div class="col-sm-6 col-md-3">
                    <div class="widget">
                        <h4 class="widget-title">Collection</h4>

                        <ul class="links">
                            <li><a href="#">Solaire</a></li>
                            <li><a href="#">Electronique</a></li>
                            <li><a href="#">MEUBLE&amp; BUREAU</a></li>

                            <li><a href="#">Moteurs Et GROUPE ELECTROGENE</a></li>
                        </ul>
                    </div><!-- End .widget -->
                </div><!-- End .col-md-3 -->

                <div class="clearfix visible-sm"></div><!-- clearfix -->

                <div class="col-sm-6 col-md-3">
                    <div class="widget">
                        <h4 class="widget-title"></h4>

                        <ul class="links">

                        </ul>
                    </div><!-- End .widget -->
                </div><!-- End .col-md-3 -->

                <div class="col-sm-6 col-md-3">
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">Newsletter</h4>
                        <p>S'inscrire à notre newsletter</p>

                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Votre Email" required>
                                <input type="submit" value="GO" class="btn">
                            </div><!-- End .form-group -->
                        </form>

                        <div class="social-icons">
                            <a href="#" class="social-icon" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="social-icon" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-icon" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!-- End .widget -->
                </div><!-- End .col-md-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-inner -->

    <div class="footer-bottom">
        <div class="container">
            <p class="copyright">devsolaire &copy; 2017. Tous Droits ReservEs</p>

        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->
</div><!-- End #wrapper -->

<a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>

<!-- End -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
(Load Extensions only on Local File Systems !
The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="assets/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.video.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        "use strict";

        var revapi;
        if ( $("#rev_slider").revolution == undefined ) {
            revslider_showDoubleJqueryError("#rev_slider");
        } else {
            revapi = $("#rev_slider").show().revolution({
                sliderType: "standard",
                jsFileLocation: "assets/js/",
                sliderLayout: "auto",
                dottedOverlay:"none",
                delay: 10000,
                navigation: {
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on"
                    },
                    arrows: {
                        style: "custom",
                        enable: true,
                        hide_onmobile: false,
                        hide_under: 768,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "bottom",
                            h_offset: 63,
                            v_offset: 48
                        },
                        right: {
                            h_align: "left",
                            v_align: "bottom",
                            h_offset: 85,
                            v_offset: 48
                        }
                    },
                    bullets: {
                        enable: false
                    }
                },
                responsiveLevels: [1200,992,768,480],
                gridwidth: [870,679,640,480],
                gridheight: [468,400,360,300],
                lazyType: "smart",
                spinner: "spinner2",
                parallax: {
                    type: "off"
                },
                debugMode: false
            });
        }
    });
</script>
<!-- Google Map-->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDH9pcS7rMycuyuIfDLXf-imD1JtGoj5BQ"></script>

<script>
    $(document).ready(function () {

        $.ajax({

            url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
            method:'POST',
            data:{toutmeuble:'toutmeuble'},
            success:function (result) {

                $("#datameuble").append(result);


            }
        });


    });

    $(document).ready(function () {

        $.ajax({

            url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
            method:'POST',
            data:{toutmoteur:'toutmoteur'},
            success:function (result) {

                $("#datamoteur").append(result);


            }
        });


    });

    $(document).ready(function () {

        $.ajax({

            url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
            method:'POST',
            data:{toutmenager:'toutmenager'},
            success:function (result) {

                $("#datamenager").append(result);


            }
        });


    });


    $(document).ready(function () {

        $.ajax({

            url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
            method:'POST',
            data:{toutsolaire:'toutsolaire'},
            success:function (result) {

                $("#datasolaire").append(result);


            }
        });


    });
    $(document).ready(function () {

        $.ajax({

            url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
            method:'POST',
            data:{toutelectro:'toutelectro'},
            success:function (result) {

                $("#dataelectro").append(result);


            }
        });


    });


    $(document).ready(function () {

        $.ajax({

            url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
            method:'POST',
            data:{vedette:'vedette'},
            success:function (result) {

                $("#datavedette").append(result);



            }
        });


    });

    $(document).ready(function () {

        $.ajax({

            url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
            method:'POST',
            data:{apercumeuble:'apercumeuble'},
            success:function (result) {
                $("#dataapercumeuble").append(result);

            }
        });


    });


$(document).ready(function () {

    $("#btnsendmes").click(function(){
        var prenom=$("#prenom").val();
        var email=$("#email").val();
        var telephone=$("#telephone").val();
        var message=$("#message").val();

        if(prenom != '' && telephone != '' && message !='') {

            $.ajax({

                url: 'http://devpay.biz/dev/Controlleur/controlleurcontact.php',
                method: 'POST',
                data: {contact: 'contact', prenom:prenom,email:email,telephone:telephone,message:message},
                success: function (result) {

                    alert("votre message a été bien envoyé");


                }
            });
        }

        else
        {
            alert("veuillez remplir tous les champs s'il vous plait");
        }

    })

});


</script>


<script type="text/javascript">


        $(document).ready(function () {

          $(".prix").blur(function () {
              var h3=$(this).parent().prev();
              var designation=$( 'span', h3).text();
             var id=$(this).attr('data-id1');
             var prix=$(this).text();
             var type1=$(this).parent().next();
             var type=$('p:first',type1).text();
             var soustype=$('P:first',type1).next().text();

              $.ajax({

                  url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
                  method: 'POST',
                  data: {update: 'update', id:id,prix:prix,designation:designation,type:type,soustype:soustype},
                  success: function (result) {




                  }
              });
          })

        });




        $(document).ready(function () {

            $(".designation").blur(function () {
                var h3=$(this).parent().next();
                var prix=$( 'span:first', h3).text();
                var id=$(this).attr('data-id1');
                var designation=$(this).text();
                var type1=$(this).parent().next().next();
                var type=$('p:first',type1).text();
                var soustype=$('P:first',type1).next().text();
                $.ajax({

                    url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
                    method: 'POST',
                    data: {update: 'update', id:id,prix:prix,designation:designation,type:type,soustype:soustype},
                    success: function (result) {




                    }
                });

            })

        });



        $(document).ready(function () {

            $(".type").blur(function () {
                var soustype=$(this).next().text();
                var id=$(this).attr('data-id1');
                var type=$(this).text();
                var prix1=$(this).parent().prev();
                var prix=$('span:first',prix1).text();
                var designation1=$(prix1).prev();
                var designation=$('span:first', designation1).text();

                $.ajax({

                    url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
                    method: 'POST',
                    data: {update: 'update', id:id,prix:prix,designation:designation,type:type,soustype:soustype},
                    success: function (result) {




                    }
                });
            })

        });


        $(document).ready(function () {

            $(".subtype").blur(function () {
                var type=$(this).prev().text();
                var id=$(this).attr('data-id1');
                var soustype=$(this).text();
                var prix1=$(this).parent().prev();
                var prix=$('span:first',prix1).text();
                var designation1=$(prix1).prev();
                var designation=$('span:first', designation1).text();
                $.ajax({

                    url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
                    method: 'POST',
                    data: {update: 'update', id:id,prix:prix,designation:designation,type:type,soustype:soustype},
                    success: function (result) {




                    }
                });
            })

        });

</script>

<script>
    $('document').ready(function()
        {
            var id='<?php echo $_GET['idproduct']?>';
            $.ajax({

                url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
                method: 'POST',
                data: {idart: 'idart', id:id},
                success: function (result) {
                    var tab=result.split(';');
                    $("#designation").text(tab[0]);
                    $("#prix").text(tab[1]);
                    $("#details").text(tab[3]);
                    $(".prodim").attr('src','http://devpay.biz/dev/'+tab[2]);
                    $("img").attr('data-image','http://devpay.biz/dev/'+tab[2]);
                    $("img").attr('data-xoriginal','http://devpay.biz/dev/'+tab[2]);






                }
            });
        }
    )
</script>



<script>
    $(document).ready(function () {
        $("#btnsearch").click(function () {

            if($("#search").val()!='')
            {
                window.location.replace('http://devpay.biz/dev/Vue/produitsearch.php?search='+$("#search").val());

            }
        })
    })
</script>

<script>
    $('document').ready(function()
        {
            var search='<?php echo $_POST['search']?>';

            $.ajax({

                url:'http://devpay.biz/dev/Controlleur/Controlleurarticle.php',
                method: 'POST',
                data: {searchdata: 'searchdata', search:search},
                success: function (result) {
                  $("#datasearch").append(result);

                }
            });
        }
    )
</script>

<script>
    $(document).ready(function() {

        $("#btnconnect").click(function () {

            var username = $("#username").val();
            var password = $("#password").val();


            $.ajax({
                method: "POST",
                url: "http://devpay.biz/dev/Controlleur/Controlleuradmin.php",
                data: {connexion:'login',username: username, password: password},
                success: function (result) {
                    if(result=='true')
                    {
                        window.location.replace('http://devpay.biz/dev/Vue/admin.php');

                    }

                    else
                    {
                        alert('mot de passe ou utilisateur inconnu');
                        alert(result);
                    }

                }
            });


        });




    });
</script>
</body>
</html>
