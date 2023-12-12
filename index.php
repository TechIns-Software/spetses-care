<?php
include_once 'commonParts.php';
$str = '';
$titlePage = "Αρχική";
$_SESSION['page'] = 1;
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
                        <h3>Κάτι αλλάζει στο νησί...</h3>
                        <p>Ζούμε στις Σπέτσες και πιστεύουμε ότι μπορούμε να γίνουμε ένα νησί παράδειγμα προς μίμηση
                            στην
                            αντιμετώπιση και προστασία των ζώων.</p>

                        <p>Γίνε συμμέτοχος σε αυτήν την αλλαγή!</p>
                        <div class="text-end">
                            <img class="img-fluid two-foots" src="assets/images/home/two-foots.png">
                        </div>

                        <div class="text-center">
                            <a href="#about-section" class="learn-about">Σχετικά με εμάς <br> <i
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
                            <div><img src="assets/images/home/footIcon.png"></div>
                            <div><h5> Σχετικά με εμάς </h5></div>
                        </div>

                        <p class="aboutPar">
                            Το κτηνιατρείο SCFA Α.Μ.Κ.Ε. (Αστική Μη Κερδοσκοπική Εταιρεία) είναι μία δομή που ιδρύθηκε
                            1/11/2021 στο νησί των Σπετσών, με την ευγενική χορηγία της οικογένειας του κ. Φωκίων Φίλων
                            Ποταμιάνος.
                        </p>

                        <div class="d-flex justify-content-start align-items-center titleAbout">
                            <div><img src="assets/images/home/footIcon.png"></div>
                            <div><h5> Σκοπός</h5></div>
                        </div>

                        <p class="aboutPar">
                            Ο σκοπός της δημιουργίας είναι να προσφέρει υπηρεσίες και παροχές υψηλού επιπέδου σε όλα τα ζώα του νησιού δεσποζόμενα και αδέσποτα.
                            Τα έσοδα από τις υπηρεσίες μας διοχετεύονται στη στήριξη των αδέσποτων ζώων.
                            Βασικός πυλώνας του έργου μας είναι η καταμέτρηση, η στείρωση και η φροντίδα των αδέσποτων γατών που υπάρχουν στο νησί των Σπετσών.
                        </p>
                    </div>

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
                        <h2>Η Ομάδα Μας</h2>
                    </div>

                    <div class="d-flex justify-content-between align-items-center flex-wrap">

                        <div class="teamCard">
                            <img src="assets/images/home/fokion-potamianos.png" alt="Ποταμιανός Φωκίων Φίλων">
                            <h4>Φωκίων Φίλων<br> Ποταμιανός</h4>
                            <p>Ιδρυτικό μέλος και χορηγός<br> του SCFA Α.Μ.Κ.Ε.</p>
                        </div>


                        <div class="teamCard">
                            <img src="assets/images/home/katerina-bogiatzi.png" alt="Κατερίνα Βογιατζή">
                            <h4>Κατερίνα <br>Βογιατζή</h4>
                            <p>Ιδρυτικό μέλος και υπεύθυνη του<br> κτηνιατρείου SCFA Α.Μ.Κ.Ε.</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="teamCard">
                            <img src="assets/images/home/kotsopoulos.png" alt="Κουτσόπουλος Κωνσταντίνος">
                            <h4> Κουτσόπουλος<br> Κωνσταντίνος</h4>
                            <p>Κτηνίατρος <br> υγειονομικά υπεύθυνος.</p>
                        </div>


                        <div class="teamCard">
                            <img src="assets/images/home/miranta-giammali.png" alt="Μιράντα Γιάμμαλη">
                            <h4>Μιράντα<br> Γιάμμαλη </h4>
                            <p>Βοηθός κτηνιάτρου</p>
                        </div>


                        <div class="teamCard">
                            <img src="assets/images/home/antonis-terzakis.png" alt="Αντώνης Τερζάκης">
                            <h4>Αντώνης <br> Τερζάκης </h4>
                            <p>Υπεύθυνος γραματείας</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </main>


<?php
footer($str);
?>