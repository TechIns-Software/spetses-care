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
    $aboutText = 'Το κτηνιατρείο SCFA Α.Μ.Κ.Ε. (Αστική Μη Κερδοσκοπική Εταιρεία) είναι μία δομή που ιδρύθηκε 1/11/2021 στο νησί των Σπετσών, με την ευγενική χορηγία της οικογένειας του κ. Φωκίων Φίλων Ποταμιάνος.';
    $aboutTitle2 = 'Σκοπός';
    $aboutText2 = 'Ο σκοπός της δημιουργίας είναι να προσφέρει υπηρεσίες και παροχές υψηλού επιπέδου σε όλα τα ζώα του νησιού δεσποζόμενα και αδέσποτα. Τα έσοδα από τις υπηρεσίες μας διοχετεύονται στη στήριξη των αδέσποτων ζώων. Βασικός πυλώνας του έργου μας είναι η καταμέτρηση, η στείρωση και η φροντίδα των αδέσποτων γατών που υπάρχουν στο νησί των Σπετσών.';
    $teamTitle = 'Η Ομάδα Μας';
    $fokionName = 'Φωκίων Φίλων <br> Ποταμιανός';
    $fokionTitle = 'Ιδρυτικό μέλος και χορηγός <br>  του SCFA Α.Μ.Κ.Ε.';
    $katerinaName = 'Κατερίνα <br> Βογιατζή';
    $katerinaTitle = 'Ιδρυτικό μέλος και υπεύθυνη του <br> κτηνιατρείου SCFA Α.Μ.Κ.Ε.';
    $kostasName = 'Κουτσόπουλος <br> Κωνσταντίνος';
    $kostasTitle = 'Κτηνίατρος <br> υγειονομικά υπεύθυνος.';
    $mirantaName = 'Μιράντα <br> Γιάμμαλη';
    $mirantaTitle = 'Βοηθός κτηνιάτρου';
    $antonisName = 'Αντώνης <br> Τερζάκης';
    $antonisTitle = 'Υπεύθυνος γραματείας';
}else{
    $titlePage = "Home";
    $heroTitle = 'Something changes on the island...';
    $heroText = 'We live in Spetses and believe that we can become an exemplary island in dealing with and protecting animals. Become a participant in this change! ';
    $heroText2 = 'Become a participant in this change!';
    $aboutTitle = 'About Us';
    $aboutText = "The SCFA Veterinary Clinic, a Non-Profit Organization, was established on November 1, 2021, in Spetses, sponsored by Mr. Fokion Filon Potamianos' family.";
    $aboutTitle2 = 'Mission';
    $aboutText2 = 'Its mission is to offer high-quality services to all animals on the island, both domestic and stray. Revenue from these services supports stray animals. A primary focus is counting, neutering, and caring for stray cats in Spetses.';
    $teamTitle = 'Our Team';
    $fokionName = 'Fokion Filon <br> Potamianos';
    $fokionTitle = 'Founding member and sponsor <br> of SCFA AMKE.';
    $katerinaName = 'Katerina <br> Bogiatzi';
    $katerinaTitle = 'Founding member and responsible <br> of the SCFA AMKE veterinary clinic.';
    $kostasName = 'Kostas <br> Koutsopoulos';
    $kostasTitle = 'Veterinarian <br> health responsible.';
    $mirantaName = 'Miranta <br> Giammali';
    $mirantaTitle = 'Veterinary assistant';
    $antonisName = 'Antonis <br> Terzakis';
    $antonisTitle = 'Office Manager';

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
                        <h2><?=  $teamTitle?></h2>
                    </div>

                    <div class="d-flex justify-content-between align-items-center flex-wrap">

                        <div class="teamCard">
                            <img src="assets/images/home/fokion-potamianos.png" alt="Ποταμιανός Φωκίων Φίλων">
                            <h4><?=  $fokionName?></h4>
                            <p><?=  $fokionTitle?></p>
                        </div>


                        <div class="teamCard">
                            <img src="assets/images/home/katerina-bogiatzi.png" alt="Κατερίνα Βογιατζή">
                            <h4><?=  $katerinaName?></h4>
                            <p><?=  $katerinaTitle?></p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="teamCard">
                            <img src="assets/images/home/kotsopoulos.png" alt="Κουτσόπουλος Κωνσταντίνος">
                            <h4><?=  $kostasName?></h4>
                            <p><?=  $kostasTitle?></p>
                        </div>


                        <div class="teamCard">
                            <img src="assets/images/home/miranta-giammali.png" alt="Μιράντα Γιάμμαλη">
                            <h4><?=  $mirantaName?></h4>
                            <p><?=  $mirantaTitle?></p>
                        </div>


                        <div class="teamCard">
                            <img src="assets/images/home/antonis-terzakis.png" alt="Αντώνης Τερζάκης">
                            <h4><?=  $antonisName?></h4>
                            <p><?=  $antonisTitle?></p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </main>


<?php
footer($str);
?>