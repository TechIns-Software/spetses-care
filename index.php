<?php
include_once 'commonParts.php';
$str = '';

$_SESSION['page'] = 1;

if ($_SESSION["language"] == 'greek') {
    $titlePage = "Αρχική";
    $heroTitle = 'Κάτι αλλάζει στο νησί...';
    $heroText = 'Ζούμε στις Σπέτσες και πιστεύουμε ότι μπορούμε να γίνουμε ένα νησί παράδειγμα προς μίμηση στην αντιμετώπιση και προστασία των ζώων.';
    $heroText2 = 'Γίνε συμμέτοχος σε αυτήν την αλλαγή!';
    $aboutTitle = 'Σχετικά με εμάς';
    $aboutText = 'Το κτηνιατρείο SCFA Α.Μ.Κ.Ε. (Αστική Μη Κερδοσκοπική Εταιρεία) είναι μία δομή που ιδρύθηκε 1/11/2021 στο νησί των Σπετσών, με την ευγενική χορηγία της οικογένειας του κ. Φωκίων Φίλων Ποταμιάνου και την υπεύθυνη της
     δομής S.C.F.A Κατερίνα Βογιάτζη ';
    $aboutTitle2 = 'Σκοπός';
    $aboutText2 = 'Ο σκοπός της δημιουργίας είναι να προσφέρει υπηρεσίες και παροχές υψηλού επιπέδου σε όλα τα ζώα του νησιού δεσποζόμενα και αδέσποτα. Τα έσοδα από τις υπηρεσίες μας διοχετεύονται στη στήριξη των αδέσποτων ζώων. Βασικός πυλώνας του έργου μας είναι η καταμέτρηση, η στείρωση και η φροντίδα των αδέσποτων γατών που υπάρχουν στο νησί των Σπετσών.';
    $foundersTitle = 'Ιδρυτικά Μέλη';
    $teamTitle = 'Η Ομάδα Μας';
    $fokionName = 'Φωκίων Φίλων <br> Ποταμιανός';
    $fokionTitle = 'Ιδρυτικό μέλος και χορηγός <br>  του SCFA Α.Μ.Κ.Ε.';
    $katerinaName = 'Κατερίνα <br> Βογιατζή';
    $katerinaTitle = 'Ιδρυτικό μέλος και υπεύθυνη του <br> κτηνιατρείου SCFA Α.Μ.Κ.Ε.';
    $kostasName = 'Κουτσόπουλος <br> Κωνσταντίνος';
    $kostasTitle = 'Κτηνίατρος <br> επιστημονικά υπεύθυνος';
    $mirantaName = 'Μιράντα <br> Γιάμμαλη';
    $mirantaTitle = 'Βοηθός κτηνιάτρου';
    $antonisName = 'Αντώνης <br> Τερζάκης';
    $antonisTitle = 'Υπεύθυνος γραματείας';
    $fotiniName = 'Φωτεινή  <br> Εμίρη';
    $fotiniTitle = 'Ιππίατρος ';
    $thaleiaName = 'Θάλεια  <br> Λαζαρίδη';
    $thaleiaTitle = 'Κτηνίατρος <br> επιστημονικά υπεύθυνη';

    $help_strays = "Βοηθήστε τα αδέσποτα των Σπετσών";
    $help_strays_info1 = "Η δωρεά σου σήμερα μπορεί να μετατρέψει μια δύσκολη μέρα σε μια τέλεια ημέρα. Στήριξε τις αδέσποτες γάτες των Σπετσών.";

    $help_strays_btn = "Κάνε Δωρεά";


}else{
    $titlePage = "Home";
    $heroTitle = 'Something changes on the island...';
    $heroText = 'We live in Spetses and believe that we can become an exemplary island in dealing with and protecting animals. Become a participant in this change! ';
    $heroText2 = 'Become a participant in this change!';
    $aboutTitle = 'About Us';
    $aboutText = "The SCFA Veterinary Clinic, a Non-Profit Organization, was established on November 1, 2021, in Spetses, sponsored by Mr. Fokion Filon Potamianos' family and the manager of
     structure S.C.F.A Katerina Vogiatzi";
    $aboutTitle2 = 'Mission';
    $aboutText2 = 'Its mission is to offer high-quality services to all animals on the island, both domestic and stray. Revenue from these services supports stray animals. A primary focus is counting, neutering, and caring for stray cats in Spetses.';
    $foundersTitle = 'Founding Members';
    $teamTitle = 'Our Team';
    $fokionName = 'Fokion Filon <br> Potamianos';
    $fokionTitle = 'Founding member and sponsor <br> of SCFA AMKE.';
    $katerinaName = 'Katerina <br> Bogiatzi';
    $katerinaTitle = 'Founding member and responsible <br> of the SCFA AMKE veterinary clinic.';
    $kostasName = 'Kostas <br> Koutsopoulos';
    $kostasTitle = 'Veterinarian <br> Scientific Director';
    $mirantaName = 'Miranta <br> Giammali';
    $mirantaTitle = 'Veterinary assistant';
    $antonisName = 'Antonis <br> Terzakis';
    $antonisTitle = 'Office Manager';
    $fotiniName = 'Fotini  <br> Emiri';
    $fotiniTitle = 'Hourse Doctor ';
    $thaleiaName = 'Thalia  <br> Lazaridi';
    $thaleiaTitle = 'Veterinarian <br> Scientific Director';

    $help_strays = "Help the strays of Spetses";
    $help_strays_info1 = "Your donation today can turn a bad day into a perfect day. Support the stray cats of Spetses.";
    $help_strays_btn = "Make a Donation";

}
navbar($titlePage, $str);

?>
    <main id="body-content">
        <section id="new-hero">
            <div class="container-fluid  ">
                <div class="row ">
                    <div class="col-lg-8 col-md-12   slide-in-left ">
                        <div id="carouselHero" class="carousel  slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/home/hero-slider1.png" class="d-block w-100" alt="cat Photo 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/home/hero-slider2.png" class="d-block w-100" alt="cat Photo 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHero"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselHero"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 heroInformation slide-in-right ">
                        <h3><?=  $heroTitle?> </h3>
                        <p><?=  $heroText?> </p>

                        <p> <?=  $heroText2?></p>
                        <div class="text-end">
                            <img class="img-fluid two-foots" src="assets/images/home/two-foots.png" alt="two foots image">
                        </div>

                        <div class="text-center">
                            <a href="#about-section" class="learn-about"> <?=  $aboutTitle?> <br> <i
                                        class="fa-solid fa-chevron-down"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="container  " id="custom-carousel">
            <div class="owl-carousel owl-theme owl-loaded owl-drag" id="home-shop-slider">
                <?php
                for ($i= 1; $i < 7; $i++){
                    ?>
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" src="assets/images/home/slider<?= $i ?>.webp"
                                alt="slider image  <?= $i ?>">
                            </div>
                        </div>
                    </div>
                 <?php
                }
                ?>

            </div>
        </section>
        <section id="about-section">
            <div class="container">
                <div class="row aboutContainer">
                    <div class="col-lg-12  ">
                        <div class="d-flex justify-content-start align-items-center titleAbout">
                            <div><img src="assets/images/home/footIcon.png" alt="foot List Icon 1"></div>
                            <div><h5> <?=  $aboutTitle?> </h5></div>
                        </div>
                        <p class="aboutPar"><?=  $aboutText?>   </p>

                        <div class="d-flex justify-content-start align-items-center titleAbout">
                            <div><img src="assets/images/home/footIcon.png" alt="foot List Icon 2"></div>
                            <div><h5>  <?=  $aboutTitle2?> </h5></div>
                        </div>
                        <p class="aboutPar"> <?=  $aboutText2?> </p>

                    </div>
`
                    <div class="col-12 mobileAbout">
                        <img class="img-fluid" alt="ksout kai oust photo" src="assets/images/home/aboutImg.png">
                    </div>

                </div>
            </div>
        </section>
        <section id="teamSection">
            <div class="container">
                <div class="row">
                    <div class="col-12 teamTitle">
                        <h2><?=  $foundersTitle?></h2>
                    </div>

                    <div class="d-flex justify-content-between align-items-center flex-wrap">

                        <div class="teamCard">
                            <img src="assets/images/home/fokion2.jpg" alt="Ποταμιανός Φωκίων Φίλων">
                            <h4><?=  $fokionName?></h4>
                            <p><?=  $fokionTitle?></p>
                        </div>


                        <div class="teamCard">
                            <img src="assets/images/home/katerina-bogiatzi.png" alt="Κατερίνα Βογιατζή">
                            <h4><?=  $katerinaName?></h4>
                            <p><?=  $katerinaTitle?></p>
                        </div>
                    </div>

                    <div class="col-12 teamTitle">
                        <h2><?=  $teamTitle?></h2>
                    </div>
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="teamCard">
                            <img src="assets/images/home/thalia.jpg" alt="Θάλεια Λαζαρίδη.">
                            <h4><?=  $thaleiaName?></h4>
                            <p><?=  $thaleiaTitle?></p>
                        </div>


                        <div class="teamCard">
                            <img src="assets/images/home/miranta-giammali.png" alt="Μιράντα Γιάμμαλη">
                            <h4><?=  $mirantaName?></h4>
                            <p><?=  $mirantaTitle?></p>
                        </div>




                    </div>

                    <div class="d-flex justify-content-center align-items-center flex-wrap">

                        <div class="teamCard">
                            <img src="assets/images/home/antonis-terzakis.png" alt="Αντώνης Τερζάκης">
                            <h4><?=  $antonisName?></h4>
                            <p><?=  $antonisTitle?></p>
                        </div>

                        <div class="teamCard">
                            <img src="assets/images/home/fotini-emiri.png" alt="Φωτεινή Εμίρη">
                            <h4><?=  $fotiniName?></h4>
                            <p><?=  $fotiniTitle?></p>
                        </div>





                    </div>

                </div>
            </div>
        </section>
        <section id="banner">
            <div class=" bannerInfos">
                <h5> <?= $help_strays?> </h5>
                <p><?= $help_strays_info1?></p>

                <a target="_blank" href="https://www.every.org/spetses-care-for-animals-non-profit-organization?utm_campaign=donate-link#/donate">

                    <?= $help_strays_btn?>
                </a>
            </div>
            <div class=" bannerImages">
                <img alt="Banner Spetses Care" class="img-fluid" src="assets/images/bannerImg.png">
            </div>

        </section>

        <div class="modal fade   " id="bannerModal" tabindex="-1"  aria-labelledby="bannerModalLabel" aria-hidden="false">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="d-flex justify-content-end">
                        <i class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
                    </div>

                    <div class="popUpContainer" >

                    </div>

                    <a class="btn" target="_blank" href="https://www.paypal.com/donate/?hosted_button_id=6ZM3HUGHGLDMU">  <?= $help_strays_btn?></a>

                </div>
            </div>
        </div>

    </main>


<?php
footer($str);
?>
