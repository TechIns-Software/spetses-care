<?php
session_start();
function navbar($title,$str= '../',$metaProperties = []){
    if (!isset($metaProperties)) {
    $metaArray['title'] = $metaArray['title'] ?? 'Spetses Care For Animals | scfa.gr';
    $metaArray['description'] = $metaArray['description'] ?? "Το κτηνιατρείο SCFA Α.Μ.Κ.Ε. (Αστική Μη Κερδοσκοπική Εταιρεία) είναι μία δομή που ιδρύθηκε 1/11/2021 στο νησί των Σπετσών, με την ευγενική χορηγία της οικογένειας του κ. Φωκίων Φίλων Ποταμιάνος.";
    $metaArray['image'] = $metaArray['image'] ?? "https://scfa.gr/assets/images/scfa_logo.png";
    $metaArray['url'] = $metaArray['page'] ?? "index.php";
    }
    ?>

    <!doctype html>
    <html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="<?= $metaArray['description'] ?>" />
        <meta property="og:image" content="<?= $metaArray['image'] ?>" />
        <meta property="og:title" content="<?= $metaArray['title'] ?>" />
        <meta property="og:description" content="<?= $metaArray['description'] ?>" />
        <meta property="og:url" content="https://www.scfa.gr/<?= $metaArray['url'] ?>" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
        <title> <?= $title ?> | Spetses Care For Animals </title>


        <link rel="shortcut icon" type="image/x-icon" href="<?= $str ?>assets/images/favicon.ico">

        <link href="<?= $str ?>assets/css/theme-plugins.min.css" rel="stylesheet">

        <link href="<?= $str ?>assets/css/style.css?v=<?= time();?>" rel="stylesheet">

        <link href="<?= $str ?>assets/css/responsive.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/css/fontawesome6.4/css/all.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/revolution/fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/magnific-popup/magnific-popup.css">


    </head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GC0MBHYEMZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GC0MBHYEMZ');
    </script>
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
                    <div class="newLayout <?php echo $_SESSION['page'] == 10 ? 'active' :'' ?>">
                      <a class="nav-link" href="<?= $str ?>donation">Κάνε Δωρεά</a>
                    </div>

                    <div class="newLayout <?php echo $_SESSION['page'] == 11 ? 'active' :'' ?>">
                        <a class="nav-link" href="<?= $str ?>volunteer">Γίνε Εθελοντής</a>
                    </div>

                    <div class="newLayout <?php echo $_SESSION['page'] == 12 ? 'active' :'' ?>">
                        <a class="nav-link" href="<?= $str ?>adoption">Υιοθεσία/Αναδοχή</a>
                    </div>

                    <div class="newLayout hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasMenu" aria-controls="offCanvasMenu">
                        <a class="nav-link" >Menu </a>
                        <i class="fa-solid fa-bars "></i>
                    </div>



                </div>
            </div>
        </nav>

    </header>
    <div class="headerMinHeight"></div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offCanvasMenu" aria-labelledby="offCanvasMenuLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offCanvasLinks">
                <a class="<?php echo $_SESSION['page'] == 1 ? 'active' :'' ?>" href="<?= $str ?>">Αρχική</a>
                <a class="<?php echo $_SESSION['page'] == 2 ? 'active' :'' ?>" href="<?= $str ?>actions">Δράσεις</a>
                <a class="<?php echo $_SESSION['page'] == 3 ? 'active' :'' ?>" href="<?= $str ?>gallery">Gallery</a>
                <a class="<?php echo $_SESSION['page'] == 4 ? 'active' :'' ?>" href="<?= $str ?>forum">Forum</a>
                <a class="<?php echo $_SESSION['page'] == 5 ? 'active' :'' ?>" href="<?= $str ?>education">Εκπαιδευτικά Προγράμματα</a>
                <a class="<?php echo $_SESSION['page'] == 6 ? 'active' :'' ?>" href="<?= $str ?>clinic">Το κτηνιατρείο μας</a>
                <a class="<?php echo $_SESSION['page'] == 7 ? 'active' :'' ?>" href="<?= $str ?>hotel-restaurant">Cats Hotel & Restaurant</a>
                <a class="<?php echo $_SESSION['page'] == 8 ? 'active' :'' ?>" href="<?= $str ?>contact">Επικοινωνία</a>
                <a class="<?php echo $_SESSION['page'] == 9 ? 'active' :'' ?>" href="#">Sponsors</a>
            </div>


        </div>
    </div>


<?php
}

function footer($str){
    ?>


    <div class="custom-footer">
        <div class="row footerContainer">
            <div class="col-12">
                <h5>Επικοινωνήστε μαζί μας</h5>
                <div class="d-flex  justify-content-start align-items-center flex-wrap">
                    <div class="footerBox">
                        <div>
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div class="footerBoxSubtitle">(+30) 697 000 0000</div>
                    </div>

                    <div class="footerBox">
                        <div>
                            <i class="fa-regular fa-envelope"></i>
                        </div>

                        <div class="footerBoxSubtitle">spetsescareforanimals@gmail.com</div>

                    </div>
                    <a target="_blank" href="https://maps.google.com/maps?ll=37.266036,23.15531&z=16&t=m&hl=el&gl=GR&mapclient=embed&cid=4460534829233288294" class="footerBox">
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="footerBoxSubtitle"> Πλατεία Ρολογιού, Σπέτσες 180 50</div>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/spetsecareforanimals" class="footerBox">
                        <div>
                            <i class="fa-brands fa-square-facebook"></i>
                        </div>
                        <div class="footerBoxSubtitle"> Spetses Care For Animals ΑΜΚΕ </div>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/spetsescare4animals/" class="footerBox">
                        <div>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div class="footerBoxSubtitle">@spetsescare4animals</div>
                    </a>

                </div>
                <div class="d-flex justify-content-start align-items-center flex-wrap">
                    <div class="footerBox2">
                        Θέλετε να μας στείλετε μήνυμα;
                    </div>

                    <div class="footerBox2">
                        <a href="#" class="ctaContact">Επικοινωνία</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-text ">
            <div>Copyrights <span id="yearText"></span> <span class="txt-green">SCFA</span> All Rights Reserved.
            </div>
            <div>Designed by <a href="https://techins.gr/" target="_blank">TechIns</a>
            </div>
        </div>
    </div>


    <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>


    </script>
    <script src="<?= $str ?>assets/js/jquery.min.js"></script>
    <script src="<?= $str ?>assets/js/theme-plugins.min.js"></script>

    <script src="<?= $str ?>assets/js/site-custom.js"></script>

    <script type="text/javascript" src="<?= $str ?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?= $str ?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript"
            src="<?= $str ?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript"
            src="<?= $str ?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript"
            src="<?= $str ?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript"
            src="<?= $str ?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript"
            src="<?= $str ?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript"
            src="<?= $str ?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript"
            src="<?= $str ?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript"
            src="<?= $str ?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript"
            src="<?= $str ?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <script type="text/javascript"   src="<?= $str ?>assets/magnific-popup/magnific-popup.js"></script>

    <script type="text/javascript">

        var tpj = jQuery;
        var revapi26;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_26_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_26_1");
            } else {
                revapi26 = tpj("#rev_slider_26_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            touchOnDesktop: "off",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                        ,
                        arrows: {
                            style: "metis",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 778,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 15,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 15,
                                v_offset: 0
                            }
                        }
                        ,
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "zeus",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 300],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "spinner0",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "on",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0px",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });	/*ready*/

        $(document).ready(function() {
            $('.image-link').magnificPopup({type:'image',  gallery:{
                    enabled:true
                }},);
        });
    </script>

    </body>
    </html>

    <?php
}