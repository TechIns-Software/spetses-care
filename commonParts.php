<?php
session_start();
if (!isset($_SESSION["language"])) {
    $_SESSION['language'] = 'greek';
}
function navbar($title,$str= '../',$metaArray = []){
    if (!count($metaArray)) {
    $metaArray['title'] = $metaArray['title'] ?? 'Spetses Care For Animals | scfa.gr';
    $metaArray['description'] = $metaArray['description'] ?? "Το κτηνιατρείο SCFA Α.Μ.Κ.Ε. (Αστική Μη Κερδοσκοπική Εταιρεία) είναι μία δομή που ιδρύθηκε 1/11/2021 στο νησί των Σπετσών, με την ευγενική χορηγία της οικογένειας του κ. Φωκίων Φίλων Ποταμιάνος.";
    $metaArray['image'] = $metaArray['image'] ?? "https://scfa.gr/assets/images/scfa_logo.png";
    $metaArray['url'] = $metaArray['page'] ?? "index.php";
    }



    if ($_SESSION["language"] == 'greek') {
        $makeDonation = 'Κάνε Δωρεά';
        $ourDonor = 'Κατηγορίες Δωρητών';
        $becomeVolunteer = 'Γίνε Εθελοντής';
        $adoption = 'Υιοθεσία/Αναδοχή';
        $home = 'Αρχική';
        $actions = 'Δράσεις';
        $gallery = 'Gallery';
        $forum = 'Forum';
        $education = 'Εκπαιδευτικά Προγράμματα';
        $clinic = 'Το κτηνιατρείο μας';
        $hotelRestaurant = 'Cats Hotel & Restaurant';
        $contact = 'Επικοινωνία';
        $greekLanguage = "Ελληνικά";
        $englishLanguage = "Αγγλικά";
        $cookieSettings = "Ρυθμίσεις Cookies";
        $cookiesExplained = "Χρησιμοποιούμε cookies για να σας παρέχουμε την καλύτερη δυνατή εμπειρία. Μας επιτρέπουν επίσης να αναλύουμε τη συμπεριφορά των χρηστών, προκειμένου να βελτιώνουμε συνεχώς τον ιστότοπο για εσάς.";
        $acceptAll = "Αποδοχή Όλων";
        $acceptSelection = "Αποδοχή Επιλογών";
        $rejectAll = "Απόρριψη Όλων";
        $necessary = "Απαραίτητα";
        $analytics = "Analytics";
        $preferences = "Προτιμήσεις";
        $marketing = "Μάρκετινγκ";


    }else{
        $makeDonation = 'Make Donation';
        $ourDonor = 'Donor Categories';
        $becomeVolunteer = 'Become Volunteer';
        $adoption = 'Adoption';
        $home = 'Home';
        $actions = 'Actions';
        $gallery = 'Gallery';
        $forum = 'Forum';
        $education = 'Education';
        $clinic = 'Our Clinic';
        $hotelRestaurant = 'Cats Hotel & Restaurant';
        $contact = 'Contact';
        $greekLanguage = "Greek";
        $englishLanguage = "English";
        $cookieSettings = "Cookie Settings";
        $cookiesExplained = "We use cookies to provide you with the best possible experience. They also allow us to analyze user behavior in order to constantly improve the website for you.";
        $acceptAll = "Accept All";
        $acceptSelection = "Accept Selection";
        $rejectAll = "Reject All";
        $necessary = "Necessary";
        $analytics = "Analytics";
        $preferences = "Preferences";
        $marketing = "Marketing";


    }
    $currentURL = "https://". $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

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
        <meta property="og:url" content="<?=$currentURL?>" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
        <title> <?= $title ?> | Spetses Care For Animals </title>


        <link rel="canonical" href="<?=$currentURL?>" />

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
        <link rel="stylesheet" type="text/css" href="<?= $str ?>assets/flags/css/flag-icon.css">
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}

            if(localStorage.getItem('consentMode') === null){
                gtag('consent', 'default', {
                    'ad_storage': 'denied',
                    'analytics_storage': 'denied',
                    'personalization_storage': 'denied',
                    'functionality_storage': 'denied',
                    'security_storage': 'denied',
                });
            } else {
                gtag('consent', 'default', JSON.parse(localStorage.getItem('consentMode')));
            }
        </script>

        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'G-GC0MBHYEMZ');</script>

    </head>
    <body>
    <div id="cookie-consent-banner" class="cookie-consent-banner">
        <h3><?= $cookieSettings?></h3>
        <p><?= $cookiesExplained?></p>
        <button id="btn-accept-all" class="cookie-consent-button btn-success"><?= $acceptAll?></button>
        <button id="btn-accept-some" class="cookie-consent-button btn-outline"><?= $acceptSelection?></button>
        <button id="btn-reject-all" class="cookie-consent-button btn-grayscale"><?= $rejectAll?></button>
        <div class="cookie-consent-options">
            <label><input id="consent-necessary" type="checkbox" value="Necessary" checked disabled> <?= $necessary?></label>
            <label><input id="consent-analytics" type="checkbox" value="Analytics" checked> <?= $analytics?></label>
            <label><input id="consent-preferences" type="checkbox" value="Preferences" checked> <?= $preferences?></label>
            <label><input id="consent-marketing" type="checkbox" value="Marketing"> <?= $marketing?></label>
        </div>
    </div>
    <script>

        function hideBanner() {
            document.getElementById('cookie-consent-banner').style.display = 'none';
        }

        if(localStorage.getItem('consentMode') === null) {
            document.getElementById('btn-accept-all').addEventListener('click', function() {
                setConsent({
                    necessary: true,
                    analytics: true,
                    preferences: true,
                    marketing: true
                });
                hideBanner();
            });
            document.getElementById('btn-accept-some').addEventListener('click', function() {
                setConsent({
                    necessary: true,
                    analytics: document.getElementById('consent-analytics').checked,
                    preferences: document.getElementById('consent-preferences').checked,
                    marketing: document.getElementById('consent-marketing').checked
                });
                hideBanner();
            });
            document.getElementById('btn-reject-all').addEventListener('click', function() {
                setConsent({
                    necessary: false,
                    analytics: false,
                    preferences: false,
                    marketing: false
                });
                hideBanner();
            });
            document.getElementById('cookie-consent-banner').style.display = 'block';
        }else {
            hideBanner();
        }

        function setConsent(consent) {
            const consentMode = {
                'functionality_storage': consent.necessary ? 'granted' : 'denied',
                'security_storage': consent.necessary ? 'granted' : 'denied',
                'ad_storage': consent.marketing ? 'granted' : 'denied',
                'analytics_storage': consent.analytics ? 'granted' : 'denied',
                'personalization': consent.preferences ? 'granted' : 'denied',
            };
            gtag('consent', 'update', consentMode);
            localStorage.setItem('consentMode', JSON.stringify(consentMode));
        }

    </script>
    <div class="smallDetails">
         <div class="basicInfos">
             <a target="_blank" href="https://maps.google.com/maps?ll=37.266036,23.15531&z=16&t=m&hl=el&gl=GR&mapclient=embed&cid=4460534829233288294">
                 <i class="fa-solid fa-location-dot"></i>   Πλατεία Ρολογιού, Σπέτσες 180 50 </a>
         </div>
        <div class="social-icons-details">
          <a  target="_blank" href="https://www.facebook.com/spetsecareforanimals"><i class="fa-brands fa-square-facebook"></i></a>
          <a target="_blank" href="https://www.instagram.com/spetsescare4animals/"><i class="fa-brands fa-instagram"></i></a>
          <a target="_blank" href="https://www.linkedin.com/company/scfa-spetses-cares-for-animals/"><i class="fa-brands fa-linkedin"></i></a>
          <a target="_blank" href="https://www.tiktok.com/@spetsescareforanimals"><i class="fa-brands fa-tiktok"></i></a>
          <a target="_blank" href="https://www.youtube.com/channel/UCNFf00oJ0vM1bGYpPY7CJAQ"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </div>

    <header class="wow fadeInDown header-blue  header-anim  ">
        <nav class=" navbar-expand-lg ">
            <div class="container-fluid d-flex justify-content-between p-0  ">
                <div class="d-flex align-items-center w-100 col  logo-brand">
                    <a class="navbar-brand  " href="<?= $str ?>">
                        <img src="<?= $str ?>assets/images/scfa_logo.png" alt="scfa logo">
                    </a>
                </div>
                <div class="d-flex justify-content-end allMenu">
                    <div class="newLayout <?php echo $_SESSION['page'] == 10 ? 'active' :'' ?>">
                      <a class="nav-link" href="<?= $str ?>donation"> <?= $makeDonation ?></a>
                    </div><div class="newLayout <?php echo $_SESSION['page'] == 13 ? 'active' :'' ?>">
                      <a class="nav-link" href="<?= $str ?>ourDonor"> <?= $ourDonor ?></a>
                    </div>

                    <div class="newLayout <?php echo $_SESSION['page'] == 11 ? 'active' :'' ?>">
                        <a class="nav-link" href="<?= $str ?>volunteer"><?= $becomeVolunteer ?></a>
                    </div>

                    <div class="newLayout <?php echo $_SESSION['page'] == 12 ? 'active' :'' ?>">
                        <a class="nav-link" href="<?= $str ?>adoption"><?= $adoption ?></a>
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
    <div id="language-container">
        <div class="d-flex justify-content-between languageBtn " data-bs-toggle="collapse" data-bs-target="#languageCollapse" aria-expanded="false" aria-controls="languageCollapse">
            <div>                    <?php if ($_SESSION["language"] == "greek") { ?>
                    <span class="flag-icon flag-icon-grc"></span>
                <?php } else { ?>
                    <span class="flag-icon flag-icon-usa"></span>
                <?php } ?></div>
            <div> <i class="fa-solid fa-chevron-down"></i></div>
        </div>
        <div class="collapse"  id="languageCollapse">
            <a class="" onclick="changeLanguage('greek', '<?=$str?>')" > <span class="flag-icon flag-icon-grc mx-1"></span> </a>
            <a class="" onclick="changeLanguage('english', '<?=$str?>')" > <span class="flag-icon flag-icon-usa mx-1"></span> </a>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offCanvasMenu" aria-labelledby="offCanvasMenuLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offCanvasLinks">
                <a class="<?php echo $_SESSION['page'] == 1 ? 'active' :'' ?>" href="<?= $str ?>"><?= $home ?></a>
                <a class="<?php echo $_SESSION['page'] == 6 ? 'active' :'' ?>" href="<?= $str ?>clinic"><?= $clinic ?></a>
                <a class="<?php echo $_SESSION['page'] == 2 ? 'active' :'' ?>" href="<?= $str ?>actions"><?= $actions ?></a>
                <a class="<?php echo $_SESSION['page'] == 5 ? 'active' :'' ?>" href="<?= $str ?>education"><?= $education ?></a>
                <a class="<?php echo $_SESSION['page'] == 7 ? 'active' :'' ?>" href="<?= $str ?>hotel-restaurant"><?= $hotelRestaurant ?></a>
                <a class="<?php echo $_SESSION['page'] == 4 ? 'active' :'' ?>" href="<?= $str ?>forum"><?= $forum ?></a>
                <a class="<?php echo $_SESSION['page'] == 3 ? 'active' :'' ?>" href="<?= $str ?>gallery"><?= $gallery ?></a>
                <a class="<?php echo $_SESSION['page'] == 8 ? 'active' :'' ?>" href="<?= $str ?>contact"><?= $contact ?></a>



            </div>


        </div>
    </div>


<?php
}

function footer($str){


    if ($_SESSION["language"] == 'greek') {
        $contactWithUs = 'Επικοινωνήστε μαζί μας';
        $contact1 = " Θέλετε να μας στείλετε μήνυμα;";
        $contact2 = "Επικοινωνία";
    }else{
        $contactWithUs = 'Contact with us';
        $contact1 = "Do you want to send us a message?";
        $contact2 = "Contact";

    }

    ?>


    <div class="custom-footer">
        <div class="row footerContainer">
            <div class="col-12">
                <h5><?=  $contactWithUs?></h5>
                <div class="d-flex  justify-content-start align-items-center flex-wrap">
                    <div class="footerBox">
                        <div>
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div class="footerBoxSubtitle">2298072652</div>
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
                        <?=  $contact1?>
                    </div>

                    <div class="footerBox2">
                        <a href="<?= $str?>contact" class="ctaContact">   <?=  $contact2?></a>
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

    <script src="<?= $str ?>assets/js/site-custom.js?v=2.7"></script>

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