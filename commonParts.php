<?php

function navbar($title,$str= '../'){
    ?>

    <!doctype html>
    <html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
        <title> <?= $title ?>  | SCFA</title>

        <meta name="description" content=" Spetses Care ">
        <meta name="keywords" content="PetHund, animal care, cats, Dog grooming, dogs, pet, pet care, pet center, pet services, pet shelter, pet shop, shelter, vet clinic, vet store, veterinarian, veterinary">

        <link rel="shortcut icon" type="image/x-icon" href="<?= $str ?>assets/images/favicon.ico">

        <link href="<?= $str ?>assets/css/theme-plugins.min.css" rel="stylesheet">

        <link href="<?= $str ?>assets/css/style.css" rel="stylesheet">

        <link href="<?= $str ?>assets/css/responsive.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/css/fontawesome6.4/css/all.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/fonts/font-awesome/css/font-awesome.css">


    </head>
    <body>

    <header class="wow fadeInDown header-blue  header-anim  ">
        <nav class=" navbar-expand-lg ">
            <div class="container-fluid d-flex justify-content-between p-0  ">
                <div class="d-flex align-items-center w-100 col  logo-brand">
                    <a class="navbar-brand  " href="<?= $str ?>">
                        <img src="<?= $str ?>assets/images/scfa_logo.png" alt>
                    </a>
                </div>
                <div class="d-flex justify-content-end allMenu">
                    <div class="newLayout">
                            <a class="nav-link" href="#">Κάνε Δωρεά</a>
                    </div>

                    <div class="newLayout">
                        <a class="nav-link" href="#">Γίνε Εθελοντής</a>
                    </div>

                    <div class="newLayout">
                        <a class="nav-link" href="#">Υιοθεσία/Αναδοχή</a>
                    </div>

                    <div class="newLayout hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasMenu" aria-controls="offCanvasMenu">
                        <a class="nav-link" >Menu </a>
                        <i class="fa-solid fa-bars "></i>
                    </div>



                </div>
            </div>
        </nav>

    </header>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offCanvasMenu" aria-labelledby="offCanvasMenuLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offCanvasLinks">
                <a class="active" href="#">Αρχική</a>
                <a href="<?= $str ?>actions">Δράσεις</a>
                <a href="#">Gallery</a>
                <a href="#">Forum</a>
                <a href="#">Cats Hotel & Restaurant</a>
                <a href="#">Επικοινωνία</a>
                <a href="#">Sponsors</a>
            </div>


        </div>
    </div>


<?php
}

function footer($str){
    ?>


    <footer class="wide-tb-150 bg-navy-blue pb-0">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 me-auto">
                    <div class="logo-footer">
                        <img src="<?=$str?>assets/images/scfa_logo.png" alt>
                    </div>
                </div>


                <div class="col-lg-2 col-md-6">
                    <h3 class="footer-heading">Μενού</h3>
                    <div class="footer-widget-menu">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Σχετικά με εμάς</span></a></li>
                            <li><a href="#l"><i class="icofont-simple-right"></i> <span>Το όραμα μας</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Cats Hotel</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Οι Δράσεις μας</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Επικοινωνία</span></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-2 col-md-6">
                    <h3 class="footer-heading">Χρήσιμα links</h3>
                    <div class="footer-widget-menu">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>FAQs</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Γίνε Εθελοντής</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Κάνε Δωρεά</span></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-3 ms-auto col-md-6">
<!--                    <h3 class="footer-heading">Working Hours</h3>-->
<!--                    <p>Our support available to help you 24 hours a day. We provide our best.</p>-->
<!--                    <div class="working-hours">-->
<!--                        <ul class="list-unstyled">-->
<!--                            <li>-->
<!--                                <span class="txt-green">Mon – Fri :</span>-->
<!--                                <span class="underline">08.00 am – 20.00 PM</span>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <span class="txt-green">Saturday :</span>-->
<!--                                <span class="underline">09.00 am – 20.00 PM</span>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <span class="txt-green">Sunday :</span>-->
<!--                                <span class="underline">We Are Closed</span>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>

            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container pos-rel">
                <div class="copyright-text ">
                    <div>Copyrights <span id="yearText"></span> <span class="txt-green">SCFA</span> All Rights Reserved.</div>
                    <div>Designed by <a href="https://techins.gr/" target="_blank">TechIns</a>
                    </div>
                </div>

            </div>
        </div>
    </footer>




    <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>




    </script><script src="<?=$str?>assets/js/jquery.min.js"></script>
    <script src="<?=$str?>assets/js/theme-plugins.min.js"></script>

    <script src="<?=$str?>assets/js/site-custom.js"></script>

    <script type="text/javascript" src="<?=$str?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?=$str?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="<?=$str?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?=$str?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?=$str?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?=$str?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?=$str?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?=$str?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?=$str?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?=$str?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?=$str?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript">

        var tpj=jQuery;
        var revapi26;
        tpj(document).ready(function() {
            if(tpj("#rev_slider_26_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_26_1");
            }else{
                revapi26 = tpj("#rev_slider_26_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"revolution/js/",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                        onHoverStop:"off",
                        touch:{
                            touchenabled:"on",
                            touchOnDesktop:"off",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                        ,
                        arrows: {
                            style:"metis",
                            enable:true,
                            hide_onmobile:true,
                            hide_under:778,
                            hide_onleave:false,
                            tmp:'',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:15,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:15,
                                v_offset:0
                            }
                        }
                        ,
                        bullets: {
                            enable:true,
                            hide_onmobile:false,
                            style:"zeus",
                            hide_onleave:false,
                            direction:"horizontal",
                            h_align:"center",
                            v_align:"bottom",
                            h_offset:0,
                            v_offset:30,
                            space:5,
                            tmp:''
                        }
                    },
                    responsiveLevels:[1240,1024,778,480],
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[868,768,960,300],
                    lazyType:"none",
                    parallax: {
                        type:"scroll",
                        origo:"slidercenter",
                        speed:2000,
                        levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
                    },
                    shadow:0,
                    spinner:"spinner0",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"on",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0px",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
        });	/*ready*/
    </script>

    </body>
    </html>

    <?php
}