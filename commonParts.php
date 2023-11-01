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
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/fonts/font-awesome/css/font-awesome.css">


    </head>
    <body>

<!--    <div id="pageloader">-->
<!--        <div class="loader-item">-->
<!--            <div class="loader-item-content">-->
<!--                <i class="icofont-paw"></i>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <b class="screen-overlay"></b>-->
    <header class="wow fadeInDown header-blue header-top header-anim">
        <div class="top-bar-right d-flex align-items-center text-md-left d-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col d-flex align-items-center contact-info">
                        <div>
                            <i data-feather="map-pin"></i> Πλατεία Ρολογιού ΤΚ 18050 Σπέτσες
                        </div>
                        <div>
                            <i data-feather="mail"></i> <a href="#">spetsescareforanimals@gmail.com</a>
                        </div>
                        <div>
                            <i data-feather="smartphone"></i> <a href="tel:(123)456789">2298 0 72652</a>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="social-icons">

                            <a href="#"><i data-feather="facebook"></i></a>
                            <a href="#"><i data-feather="twitter"></i></a>
                            <a href="#"><i data-feather="instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg header-fullpage nav-light">
            <div class="container text-nowrap">
                <div class="d-flex align-items-center w-100 col p-0 logo-brand">
                    <a class="navbar-brand rounded-bottom light-bg" href="<?= $str ?>">
                        <img src="<?= $str ?>assets/images/scfa_logo.png" alt>
                    </a>
                </div>

                <div class="d-inline-flex order-lg-last col-auto p-0 align-items-center">
                    <a href="<?= $str ?>" class="btn-theme bg-green btn-shadow ms-3 d-none d-sm-block">Κάνε Δωρεά</a>

                    <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="navbar-collapse">

                    <div class="offcanvas-header">
                        <a href="#" class="logo-small">
                            <img src="<?= $str ?>assets/images/scfa_logo.png" alt>
                        </a>
                    </div>


                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-mob" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Σχετικά με εμάς <i class="icofont-thin-down"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                    <li><a class="dropdown-item" href="<?= $str ?>clinic">Κτηνιατρείο</a></li>
                                    <li><a class="dropdown-item" href="<?= $str ?>scfa">SCFA</a></li>
                                </ul>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="<?= $str ?>">Cats Hotel & Restaurant</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-mob" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Δράσεις <i class="icofont-thin-down"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                    <li><a class="dropdown-item" href="#">Οι Δράσεις μας</a></li>
                                    <li><a class="dropdown-item" href="#">Υιοθέτησε με</a></li>
                                    <li><a class="dropdown-item" href="#">Αναδοχή</a></li>
                                    <li><a class="dropdown-item" href="#">Γίνε εθελοντής</a></li>

                                </ul>
                            </li>
                            <!--                        <li class="nav-item dropdown megamenu">-->
                            <!--                            <a href="#" class="nav-link dropdown-toggle-mob" id="dropdown04" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="icofont-thin-down"></i></a>-->
                            <!--                            <div class="menu-back-div dropdown-menu megamenu-content" role="menu" aria-labelledby="dropdown04">-->
                            <!--                                <div class="megamenu-content-wrap">-->
                            <!--                                    <ul class="list-unstyled">-->
                            <!--                                        <li><a class="dropdown-item" href="about.html">About Us</a></li>-->
                            <!--                                        <li><a class="dropdown-item" href="our-team.html">Our Team</a></li>-->
                            <!--                                        <li><a class="dropdown-item" href="team-single.html">Team Single</a></li>-->
                            <!--                                        <li><a class="dropdown-item" href="our-faqs.html">Our Faq's</a></li>-->
                            <!--                                        <li><a class="dropdown-item" href="404.html">Error 404</a></li>-->
                            <!--                                    </ul>-->
                            <!--                                    <ul class="list-unstyled">-->
                            <!--                                        <li><a class="dropdown-item" href="our-services.html">Services</a></li>-->
                            <!--                                        <li><a class="dropdown-item" href="services-single.html">Services Single</a></li>-->
                            <!--                                        <li><a class="dropdown-item" href="shortcodes-element.html">Elements Page 1</a></li>-->
                            <!--                                        <li><a class="dropdown-item" href="shortcodes-element-alt.html">Elements Page 2</a></li>-->
                            <!--                                        <li><a class="dropdown-item" href="typography.html">Typography</a></li>-->
                            <!--                                    </ul>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </li>-->

                            <li class="nav-item">
                                <a class="nav-link" href="<?= $str ?>contact">Επικοινωνία</a>
                            </li>
                        </ul>
                    </div>

                    <div class="close-nav"></div>

                </div>
            </div>
        </nav>

    </header>

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


    <div class="overlay overlay-hugeinc">
        <form class="form-inline mt-2 mt-md-0">
            <div class="form-inner">
                <div class="form-inner-div d-inline-flex align-items-center g-0">
                    <div class="col-md-1">
                        <i class="icofont-search"></i>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-md-1">
                        <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>


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