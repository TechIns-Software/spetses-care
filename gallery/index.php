<?php
include_once '../commonParts.php';
$str = '../';
$_SESSION['page'] = 3 ;
if ($_SESSION["language"] == 'greek') {
    $titlePage = "Gallery";
    $clinic = "Το κτηνιατρείο μας";
    $hotel = "Cats Hotel and Restaurant";
    $education = "Εκπαιδευτικά Προγράμματα";
    $adoption = "Υιοθεσία/Αναδοχή";
    $adoptionText = "Κάποιες από τις υιοθεσίες...";
    $volunteer = "Εθελοντές";
    $volunteerText = "Κάποιοι από τους εθελοντές...";
    $hourse = "Πρόγραμμα αλόγων";
    $forum = "Forum";
}else{
    $titlePage = "Gallery";
    $clinic = "Our Veterinary Clinic";
    $hotel = "Cats Hotel and Restaurant";
    $education = "Educational Programs";
    $adoption = "Adoption";
    $adoptionText = "Some of the adoptions...";
    $volunteer = "Volunteers";
    $volunteerText = "Some of the volunteers...";
    $hourse = "Horse program";
    $forum = "Forum";
}
$metaArray['title'] = $titlePage.'| scfa.gr';
$metaArray['description'] =  "Η υιοθεσία αλλάζει ζωές! Στην ομάδα μας, συνδέουμε ανθρώπους με νέα μέλη της οικογένειάς τους, δίνοντας σε ζώα ένα δεύτερο και πιο αγαπημένο σπίτι. Ανακαλύψτε τη χαρά της υιοθεσίας σήμερα!";
$metaArray['image'] = "https://scfa.gr/assets/images/scfa_logo.png";
$metaArray['url'] =  "gallery";
navbar($titlePage,$str,$metaArray);


?>
    <main id="body-content">
        <section id="actionsHeader" page="gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag" id="gallery-single">

                        <div class="item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <img class="pic-1" src="../assets/images/gallery/gallery-slider1.png"
                                         alt="slider image 1">
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <img class="pic-1" src="../assets/images/gallery/gallery-slider2.png"
                                         alt="slider image 1">
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <img class="pic-1" src="../assets/images/home/slider1.webp"
                                         alt="slider image 1">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="sectionDivider"></div>
        <section id="educationPhotos">
            <div class="container">
                <h3 class="donationTitle"><?= $titlePage?></h3>
                <div class="row gallerySection">
                    <div class="col-12 my-2 ">
                        <a href="../clinic" class="galleryTitleSection">
                            <div><img alt="foot for title" src="../assets/images/gallery/foot.png"> </div>
                            <div> <h3>  <?= $clinic?> </h3></div>
                        </a>
                    </div>

                    <?php
                    for ($i= 1; $i<21;$i++){
                        ?>
                        <div class="col-lg-3 col-md-12 my-2 ">
                            <a href="../assets/images/gallery/clinic<?=$i?>.png" class="image-link" data-toggle="lightbox"  >
                                <img src="../assets/images/gallery/clinic<?=$i?>.png" alt="Φωτογραφία απο το κτηνιατρείο μας <?=$i?> ">
                                <div class="portfolio-overlay">
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                    ?>

                </div>
                <div class="row gallerySection">
                    <div class="col-12 my-2 ">
                        <a href="../hotel-restaurant" class="galleryTitleSection">
                            <div><img alt="foot for title" src="../assets/images/gallery/foot.png"> </div>
                            <div> <h3>  <?= $hotel?></h3></div>
                        </a>
                    </div>
                    <?php
                    for ($i= 1; $i<11;$i++){
                        ?>
                        <div class="col-lg-3 col-md-12 my-2 ">
                            <a href="../assets/images/gallery/hotel<?=$i?>.png" class="image-link" data-toggle="lightbox"  >
                                <img src="../assets/images/gallery/hotel<?=$i?>.png" alt="Φωτογραφία απο Cats Hotel and Restaurant<?=$i?> ">
                                <div class="portfolio-overlay">
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                    ?>

                </div>
                <div class="row gallerySection">
                    <div class="col-12 my-2 ">
                        <a href="../education" class="galleryTitleSection">
                        <div><img alt="foot for title" src="../assets/images/gallery/foot.png"> </div>
                            <div> <h3> <?= $education?></h3></div>
                        </a>
                    </div>
                    <?php
                    for ($i= 1; $i<16;$i++){
                        ?>
                        <div class="col-lg-3 col-md-12 my-2 ">
                            <a href="../assets/images/gallery/education<?=$i?>.png" class="image-link" data-toggle="lightbox"  >
                                <img src="../assets/images/gallery/education<?=$i?>.png" alt="Φωτογραφία απο Εκπαιδευτικά προγράμματα <?=$i?> ">
                                <div class="portfolio-overlay">
                                </div>
                            </a>
                        </div>

                            <?php
                    }
                    ?>

                </div>
                <div class="row gallerySection">
                    <div class="col-12 my-2 ">
                        <a href="../adoption" class="galleryTitleSection">
                            <div><img alt="foot for title" src="../assets/images/gallery/foot.png"> </div>
                            <div> <h3> <?= $adoption ?></h3> <small><?= $adoptionText ?></small>
                            </div>
                        </a>
                    </div>

                    <?php
                    for ($i= 1; $i<17;$i++){
                        ?>
                        <div class="col-lg-3 col-md-12 my-2 ">
                            <a href="../assets/images/gallery/adoption<?=$i?>.png" class="image-link" data-toggle="lightbox"  >
                                <img src="../assets/images/gallery/adoption<?=$i?>.png" alt="Φωτογραφία απο το Υιοθεσία / Αναδοχή <?=$i?> ">
                                <div class="portfolio-overlay">
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                    ?>

                </div>
                <div class="row gallerySection">
                    <div class="col-12 my-2 ">
                        <a href="../volunteer" class="galleryTitleSection">
                            <div><img alt="foot for title" src="../assets/images/gallery/foot.png"> </div>
                            <div> <h3>  <?= $volunteer ?></h3> <small><?= $volunteerText ?></small></div>
                        </a>
                    </div>

                    <?php
                    for ($i= 1; $i<7;$i++){
                        ?>
                        <div class="col-lg-3 col-md-12 my-2 ">
                            <a href="../assets/images/gallery/volunteer<?=$i?>.png" class="image-link" data-toggle="lightbox"  >
                                <img src="../assets/images/gallery/volunteer<?=$i?>.png" alt="Φωτογραφία απο Εθελοντές <?=$i?> ">
                                <div class="portfolio-overlay">
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                    ?>

                </div>
                <div class="row gallerySection">
                    <div class="col-12 my-2 ">
                        <a class="galleryTitleSection">
                            <div><img alt="foot for title" src="../assets/images/gallery/foot.png"> </div>
                            <div> <h3>  <?= $hourse ?> </h3></div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 my-2 ">
                        <div class="videoBox" style="background-image: url('../assets/images/gallery/videoBg.jpg')">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="fa-solid fa-play"></i></a>
                        </div>
                    </div>

                    <?php
                    for ($i= 1; $i<13;$i++){
                        ?>
                        <div class="col-lg-3 col-md-12 my-2 ">
                            <a href="../assets/images/gallery/hourse<?=$i?>.png" class="image-link" data-toggle="lightbox"  >
                                <img src="../assets/images/gallery/hourse<?=$i?>.png" alt="Φωτογραφία απο Πρόγραμμα αλόγων <?=$i?> ">
                                <div class="portfolio-overlay">
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                    ?>

                </div>
                <div class="row gallerySection">
                    <div class="col-12 my-2 ">
                        <a href="../forum" class="galleryTitleSection">
                            <div><img alt="foot for title" src="../assets/images/gallery/foot.png"> </div>
                            <div> <h3> <?= $forum ?></h3></div>
                        </a>
                    </div>

                    <?php
                    for ($i= 1; $i<12;$i++){
                        ?>
                        <div class="col-lg-3 col-md-12 my-2 ">
                            <a href="../assets/images/gallery/forum<?=$i?>.png" class="image-link" data-toggle="lightbox"  >
                                <img src="../assets/images/gallery/forum<?=$i?>.png" alt="Φωτογραφία απο το forum <?=$i?> ">
                                <div class="portfolio-overlay">
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                    ?>

                </div>
            </div>
        </section>



        <div class="modal fade podcastModal" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="ratio ratio-16x9">
                            <iframe  src="https://www.youtube.com/embed/gHKGvrzerr8?si=_rF56ykNR0CqLbMi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
<?php
footer($str);
?>