<?php
include_once 'commonParts.php';
$str = '';
$titlePage = "Αρχική";
$_SESSION['page'] = 1 ;
navbar($titlePage, $str);


?>
    <main id="body-content">
        <section id="new-hero">
            <div class="container-fluid  ">
                <div class="row ">

                    <div class="col-lg-8 col-md-12 p-0  slide-in-left ">
                        <div id="carouselHero" class="carousel  slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/slider/slider1.JPG" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/slider/slider2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/slider/slider3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 heroInformation slide-in-right ">
                        <h3>Κάτι αλλάζει στο νησί...</h3>
                        <p>Ζούμε στις Σπέτσες και πιστεύουμε ότι μπορούμε να γίνουμε ένα νησί παράδειγμα προς μίμηση
                            στην
                            αντιμετώπιση και προστασία των ζώων</p>

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
                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" src="assets/images/home/hero-1.png">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" src="assets/images/about.JPG">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" src="assets/images/home/slider1.png">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" src="assets/images/home/slider2.png">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-grid">
                            <div class="product-image">
                                <img class="pic-1" src="assets/images/home/hero-1.png">
                            </div>
                        </div>
                    </div>


                </div>
        </section>

        <section id="about-section">
            <div class="container">
                <div class="row aboutContainer">
                    <div class="col-lg-12 ">
                        <div class="d-flex justify-content-start align-items-center titleAbout">
                            <div><img src="assets/images/home/footIcon.png"></div>
                            <div><h5> Σχετικά με εμάς </h5></div>
                        </div>

                        <p class="aboutPar">
                            Το κτηνιατρείο SCFA Α.Μ.Κ.Ε. (Αστική Μη Κερδοσκοπική Εταιρεία) είναι μία δομή που ιδρύθηκε 1/11/2021 στο νησί των Σπετσών, με την ευγενική χορηγία της οικογένειας του κ. Φωκίων Φίλων Ποταμιάνος.
                        </p>

                        <div class="d-flex justify-content-start align-items-center titleAbout">
                            <div><img src="assets/images/home/footIcon.png"></div>
                            <div><h5> Σκοπός</h5></div>
                        </div>

                        <p class="aboutPar">
                            Ο σκοπός της δημιουργλιας είναι να προσφέρει υπηρεσίες και παροχές υψηλού επιπέδου σε όλα τα ζώα του νησιού δεσποζόμενα και αδέσποτα.
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

        <section class="container" id="teamSection">
            <div class="row">
                <div class="col-12 teamTitle">
                    <h2 >Η Ομάδα Μας</h2>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="teamCard">
                        <img src="assets/images/home/fokion-potamianos.png" alt="Ποταμιανός Φωκίων Φίλων">
                        <h4>Φωκίων Φίλων<br> Ποταμιανός</h4>
                        <p>Ιδρυτικό μέλος και χορηγός<br> του SCFA Α.Μ.Κ.Ε.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="teamCard">
                        <img src="assets/images/home/katerina-bogiatzi.png" alt="Κατερίνα Βογιατζή">
                        <h4>Κατερίνα <br>Βογιατζή</h4>
                        <p>Ιδρυτικό μέλος και υπεύθυνη του<br> κτηνιατρείου SCFA Α.Μ.Κ.Ε.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="teamCard">
                        <img src="assets/images/home/kotsopoulos.png" alt="Κουτσόπουλος Κωνσταντίνος">
                        <h4> Κουτσόπουλος<br> Κωνσταντίνος</h4>
                        <p>Κτηνίατρος <br> υγειονομικά υπεύθυνος.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12">
                    <div class="teamCard">
                        <img src="assets/images/home/miranta-giammali.png" alt="Μιράντα Γιάμμαλη">
                        <h4>Μιράντα<br> Γιάμμαλη </h4>
                        <p>Βοηθός κτηνιάτρου</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12">
                    <div class="teamCard">
                        <img src="assets/images/home/antonis-terzakis.png" alt="Αντώνης Τερζάκης">
                        <h4>Αντώνης <br> Τερζάκης </h4>
                        <p>Υπεύθυνος γραματείας</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-100 bg-navy-blue pt-0 gdr-img-box-wrap-home d-none ">
            <div class="container">
                <div class="row g-0 gdr-img-box-wrap home">
                    <div class="col-lg-4 col-md-4 wow pulse" data-wow-duration="0" data-wow-delay="0">

                        <div class="gdr-img-box bg-green">
                            <img src="assets/images/gdr_img_1.jpg" alt class="ms-auto d-flex">
                            <div class="info-text">
                                <i class="icofont-paw"></i>
                                <h3>Το κτηνιατρείο μας</h3>
                                <div>Δες την εξαιρετική δουλειά μας</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 wow pulse" data-wow-duration="0" data-wow-delay="0.2s">

                        <div class="gdr-img-box bg-orange">
                            <img src="assets/images/gdr_img_2.jpg" alt class="ms-auto d-flex">
                            <div class="info-text">
                                <i class="icofont-paw"></i>
                                <h3>Το Όραμά μας</h3>
                                <div>Έλα μαζί μας σε αυτό το όμορφο ταξίδι</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 wow pulse" data-wow-duration="0" data-wow-delay="0.4s">

                        <div class="gdr-img-box bg-blue">
                            <img src="assets/images/gdr_img_3.jpg" alt class="ms-auto d-flex">
                            <div class="info-text">
                                <i class="icofont-paw"></i>
                                <h3>Υιοθέτησε σήμερα</h3>
                                <div>Γίνε εθελοντής</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 mx-auto text-center txt-white">
                        <p>Είμαστε πάντα εδώ για να βοηθήσουμε τα ζώα που βρίσκονται σε ανάγκη. <br>Εάν έχετε ερωτήσεις
                            ή
                            ανησυχίες, μην διστάσετε να επικοινωνήσετε μαζί μας.
                        </p>
                        <div class="text-center mt-4">
                            <a href="contact" class="btn-theme bg-orange capusle bordered me-4"><span class="txt-white">Επικοινώνησε μαζί μας</span></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="wide-tb-150 d-none">
            <div class="container">
                <h1 class="heading-main center wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">

                    <span>Οι </span> Δράσεις μας
                </h1>
                <div class="row">

                    <div class="col-md-6 col-lg-6">
                        <div class="icon-box-1 d-flex">
                            <div class="icon-font">
                                <i class="pethund_petsitting"></i>
                            </div>
                            <div class="text">
                                <h3>Στειρώσεις αδέσποτων ζωών</h3>
                                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                    risus. </p>
                                <a href="#" class="read-more-arrow">
                                    Λεπτομέρειες <span> <i class="icofont-simple-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-6">
                        <div class="icon-box-1 d-flex">
                            <div class="icon-font">
                                <i class="pethund_pet_grooming"></i>
                            </div>
                            <div class="text">
                                <h3>Νοσηλεία και φροντίδα</h3>
                                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                    risus. </p>
                                <a href="#" class="read-more-arrow">
                                    Λεπτομέρειες <span> <i class="icofont-simple-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-6">
                        <div class="icon-box-1 d-flex">
                            <div class="icon-font">
                                <i class="pethund_adoption"></i>
                            </div>
                            <div class="text">
                                <h3>Εκπαιδευτικές ενημερώσεις προς μαθητές </h3>
                                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                    risus. </p>
                                <a href="#" class="read-more-arrow">
                                    Λεπτομέρειες <span> <i class="icofont-simple-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-6">
                        <div class="icon-box-1 d-flex">
                            <div class="icon-font">
                                <i class="pethund_natural_product"></i>
                            </div>
                            <div class="text">
                                <h3>Δημιουργία καλλιτεχνικών δραστηριοτήτων</h3>
                                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                    risus. </p>
                                <a href="#" class="read-more-arrow">
                                    Λεπτομέρειες <span> <i class="icofont-simple-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="icon-box-1 d-flex">
                            <div class="icon-font">
                                <i class="pethund_natural_product"></i>
                            </div>
                            <div class="text">
                                <h3>Cats Hotel & Restaurant</h3>
                                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                    risus. </p>
                                <a href="#" class="read-more-arrow">
                                    Λεπτομέρειες <span> <i class="icofont-simple-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="wide-tb-150 bg-scroll pos-rel callout_bg d-none">
            <div class="bg-overlay black opacity-30"></div>
            <div class="container">
                <div class="text-center">

                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s"
                         style="visibility: visible; animation-delay: 0s; animation-name: fadeInDown;">
                        <h1 class="heading-main light-mode center">
                            Μάθε πως μπορείς να <span>βοηθήσεις </span> <br> το έργο μας !
                        </h1>
                        <a href="#" class="btn-theme bg-green btn-shadow">Θέλω να στηρίξω</a>
                    </div>

                </div>
            </div>
        </section>


        <section class="wide-tb-150 d-none">
            <div class="container ">
                <h1 class="heading-main center wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <small>Image Tour <i class="pethund_repeat_grid"></i></small>
                    <span>Our</span> Gallery
                </h1>
                <div class="row">
                    <div class="col-md-4 gallery-item mb-0">
                        <div class="captured-gallery-item mb-4">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/home/img_gallery1.jpg" title="Simba Jake"><i
                                            class="icofont-plus"></i></span>
                                <h3><a href="#">Simba Jake</a></h3>
                                <h5>Kitten</h5>
                            </div>
                            <img src="assets/images/gallery/home/img_gallery1.jpg" class="rounded" alt>
                        </div>
                        <div class="captured-gallery-item mb-4">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/home/img_gallery5.jpg" title="Molly Cat"><i
                                            class="icofont-plus"></i></span>
                                <h3><a href="#">Molly Cat</a></h3>
                                <h5>Kitten</h5>
                            </div>
                            <img src="assets/images/gallery/home/img_gallery5.jpg" class="rounded" alt>
                        </div>
                    </div>
                    <div class="col-md-4 gallery-item mb-0">
                        <div class="captured-gallery-item mb-4">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/home/img_gallery2.jpg" title="Tiger Wood"><i
                                            class="icofont-plus"></i></span>
                                <h3><a href="#">Tiger Wood</a></h3>
                                <h5>Kitten</h5>
                            </div>
                            <img src="assets/images/gallery/home/img_gallery2.jpg" class="rounded" alt>
                        </div>
                        <div class="captured-gallery-item mb-4">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/home/img_gallery6.jpg" title="Gizmo Moody"><i
                                            class="icofont-plus"></i></span>
                                <h3><a href="#">Gizmo Moody</a></h3>
                                <h5>Kitten</h5>
                            </div>
                            <img src="assets/images/gallery/home/img_gallery6.jpg" class="rounded" alt>
                        </div>
                    </div>
                    <div class="col-md-4 gallery-item mb-0">
                        <div class="captured-gallery-item mb-4">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/home/img_gallery3.jpg" title="Charlie Taz"><i
                                            class="icofont-plus"></i></span>
                                <h3><a href="#">Charlie Taz</a></h3>
                                <h5>Kitten</h5>
                            </div>
                            <img src="assets/images/gallery/home/img_gallery3.jpg" class="rounded" alt>
                        </div>
                        <div class="captured-gallery-item mb-4">
                            <div class="gallery-content">
                                <span href="assets/images/gallery/home/img_gallery7.jpg" title="Sophie Cute"><i
                                            class="icofont-plus"></i></span>
                                <h3><a href="#">Sophie Cute</a></h3>
                                <h5>Kitten</h5>
                            </div>
                            <img src="assets/images/gallery/home/img_gallery7.jpg" class="rounded" alt>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="wide-tb-150 bg-snow pos-rel bg-navy-blue d-none ">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                        <h1 class="heading-main center light-mode wow fadeInDown" data-wow-duration="0"
                            data-wow-delay="0s">
                            <small>What Our Customers Are Saying <i class="pethund_repeat_grid"></i></small>
                            <span>Amazing</span> Feedback
                        </h1>
                    </div>

                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <iframe src='https://widgets.sociablekit.com/google-reviews/iframe/218639' frameborder='0'
                                width='100%' height='400'></iframe>


                    </div>
                    <div class="col-md-6 order-md-first wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                        <img src="assets/images/dog_sitting.png" alt>
                    </div>
                </div>
            </div>
        </section>


        <div class="container footer-top-callout d-none ">
            <div class="row">

                <div class="col-sm-12">
                    <div class="callout-style-side-img d-lg-flex align-items-center">
                        <div class="img-callout">
                            <img src="assets/images/callout_side_img.jpg" alt>
                        </div>
                        <div class="text-callout">
                            <div class="d-md-flex align-items-center">
                                <div class="icon">
                                    <i data-feather="headphones"></i>
                                </div>
                                <div class="heading">
                                    <h3>Έχεις κάποια απορία; </h3>
                                    <h3>Κάλεσε μας <span class="txt-green">2298 0 72652</span></h3>

                                    <div>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat,
                                        nec elementum ipsum convall.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

<?php
footer($str);
?>